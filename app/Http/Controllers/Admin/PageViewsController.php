<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use App\Models\PageView;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PageViewsController extends Controller
{
    public function index(Request $request): View
    {
        $period = $request->get('period', 'last_30_days');

        [$from, $to, $chartDays, $chartLabel] = $this->resolvePeriod($period);

        // Previous period of the same length, for the "vs previous period" comparison
        $prevTo   = $from->copy()->subSecond();
        $prevFrom = $prevTo->copy()->subSeconds((int) $from->diffInSeconds($to));

        $current  = $this->summary($from, $to);
        $previous = $this->summary($prevFrom, $prevTo);

        $kpis = [
            ['label' => 'Page views',       'value' => number_format($current['views']),    'change' => $this->change($current['views'], $previous['views'])],
            ['label' => 'Unique visitors',  'value' => number_format($current['visitors']), 'change' => $this->change($current['visitors'], $previous['visitors'])],
            ['label' => 'Leads',            'value' => number_format($current['leads']),    'change' => $this->change($current['leads'], $previous['leads'])],
            ['label' => 'Conversion rate',  'value' => $current['conversion'] . '%',         'change' => $this->change($current['conversion'], $previous['conversion']), 'hint' => 'Leads ÷ unique visitors'],
            ['label' => 'Pages per visitor', 'value' => $current['pages_per_visitor'],       'change' => $this->change($current['pages_per_visitor'], $previous['pages_per_visitor'])],
        ];

        $chart = $this->chart($from, $to, $chartDays);

        $views   = fn (): Builder => PageView::whereBetween('visited_at', [$from, $to]);
        $entries = fn (): Builder => $views()->where('is_entry', true);
        $leads   = fn (): Builder => ContactRequest::whereBetween('created_at', [$from, $to]);

        // Traffic sources: visits (first page of each visit) and the leads they produced
        $leadsByChannel = $leads()->selectRaw("COALESCE(channel, 'Unknown') as label, COUNT(*) as total")->groupBy('label')->pluck('total', 'label');
        $channels = $entries()->selectRaw("COALESCE(channel, 'Unknown') as label, COUNT(*) as total")
            ->groupBy('label')->orderByDesc('total')->get()
            ->map(fn ($row) => [
                'label' => $row->label,
                'value' => (int) $row->total,
                'leads' => (int) ($leadsByChannel[$row->label] ?? 0),
            ]);

        $topPages = $views()
            ->selectRaw('path, COUNT(*) as total, COUNT(DISTINCT session_id) as visitors')
            ->groupBy('path')->orderByDesc('total')->limit(15)->get();

        $leadsByLanding = $leads()->selectRaw('landing_page, COUNT(*) as total')->whereNotNull('landing_page')->groupBy('landing_page')->pluck('total', 'landing_page');
        $landingPages = $entries()
            ->selectRaw('path, COUNT(*) as total')
            ->groupBy('path')->orderByDesc('total')->limit(10)->get()
            ->map(fn ($row) => [
                'label' => $row->path,
                'value' => (int) $row->total,
                'leads' => (int) ($leadsByLanding[$row->path] ?? 0),
            ]);

        $referrers = $this->breakdown($entries()->whereNotNull('referrer_host'), 'referrer_host', 10);

        $campaigns = $entries()
            ->where(fn ($q) => $q->whereNotNull('utm_campaign')->orWhereNotNull('utm_source'))
            ->selectRaw("COALESCE(utm_source, '—') as source, COALESCE(utm_medium, '—') as medium, COALESCE(utm_campaign, '—') as campaign, COUNT(*) as total")
            ->groupBy('source', 'medium', 'campaign')->orderByDesc('total')->limit(10)->get();

        // Audience: counted per visitor, not per page view
        $devices   = $this->breakdown($views(), 'device_type', 5, visitors: true);
        $browsers  = $this->breakdown($views(), 'browser', 8, visitors: true);
        $systems   = $this->breakdown($views(), 'os', 8, visitors: true);
        $countries = $this->breakdown($views()->whereNotNull('country'), 'country', 10, visitors: true);

        // Where leads were submitted
        $leadForms = $leads()->selectRaw("COALESCE(form, 'unknown') as label, COUNT(*) as total")->groupBy('label')->orderByDesc('total')->get()
            ->map(fn ($row) => ['label' => ContactRequest::FORMS[$row->label] ?? 'Not recorded', 'value' => (int) $row->total]);
        $leadPages = $this->breakdown($leads()->whereNotNull('source_page'), 'source_page', 8);

        return view('admin.pageviews.index', compact(
            'period', 'chartLabel', 'kpis', 'chart',
            'channels', 'topPages', 'landingPages', 'referrers', 'campaigns',
            'devices', 'browsers', 'systems', 'countries', 'leadForms', 'leadPages'
        ));
    }

    /** @return array{views: int, visitors: int, leads: int, conversion: float, pages_per_visitor: float} */
    private function summary(Carbon $from, Carbon $to): array
    {
        $views    = PageView::whereBetween('visited_at', [$from, $to])->count();
        $visitors = PageView::uniqueVisitors(PageView::whereBetween('visited_at', [$from, $to]));
        $leads    = ContactRequest::whereBetween('created_at', [$from, $to])->count();

        return [
            'views'             => $views,
            'visitors'          => $visitors,
            'leads'             => $leads,
            'conversion'        => $visitors ? round($leads / $visitors * 100, 1) : 0.0,
            'pages_per_visitor' => $visitors ? round($views / $visitors, 1) : 0.0,
        ];
    }

    /** Percentage change vs the previous period; null when there is nothing to compare against. */
    private function change(float|int $current, float|int $previous): ?float
    {
        return $previous > 0 ? round(($current - $previous) / $previous * 100) : null;
    }

    /** Group a query by a column; counts rows, or distinct visitors when $visitors is true. */
    private function breakdown(Builder $query, string $column, int $limit, bool $visitors = false): Collection
    {
        $aggregate = $visitors ? 'COUNT(DISTINCT session_id)' : 'COUNT(*)';

        return $query->selectRaw("COALESCE({$column}, 'Unknown') as label, {$aggregate} as total")
            ->groupBy('label')->orderByDesc('total')->limit($limit)->get()
            ->map(fn ($row) => ['label' => $row->label, 'value' => (int) $row->total]);
    }

    /** Views, visitors and leads per day (or per hour for "today"). */
    private function chart(Carbon $from, Carbon $to, int $chartDays): array
    {
        $hourly = $chartDays === 0;
        $bucket = fn (string $column): string => $hourly
            ? (DB::getDriverName() === 'sqlite' ? "CAST(strftime('%H', {$column}) AS INTEGER)" : "HOUR({$column})")
            : "DATE({$column})";

        $traffic = PageView::selectRaw($bucket('visited_at') . ' as bucket, COUNT(*) as views, COUNT(DISTINCT session_id) as visitors')
            ->whereBetween('visited_at', [$from, $to])->groupBy('bucket')->get()->keyBy('bucket');
        $leads = ContactRequest::selectRaw($bucket('created_at') . ' as bucket, COUNT(*) as total')
            ->whereBetween('created_at', [$from, $to])->groupBy('bucket')->pluck('total', 'bucket');

        $chart = ['labels' => [], 'views' => [], 'visitors' => [], 'leads' => []];

        $buckets = $hourly
            ? collect(range(0, 23))->map(fn ($h) => [$h, str_pad((string) $h, 2, '0', STR_PAD_LEFT) . ':00'])
            : collect(range(0, $chartDays - 1))->map(function ($i) use ($from, $chartDays) {
                $day = $from->copy()->addDays($i);

                return [$day->format('Y-m-d'), $day->format($chartDays <= 31 ? 'M d' : 'M')];
            });

        foreach ($buckets as [$key, $label]) {
            $chart['labels'][]   = $label;
            $chart['views'][]    = (int) ($traffic[$key]->views ?? 0);
            $chart['visitors'][] = (int) ($traffic[$key]->visitors ?? 0);
            $chart['leads'][]    = (int) ($leads[$key] ?? 0);
        }

        return $chart;
    }

    /**
     * Returns [Carbon $from, Carbon $to, int $chartDays, string $label].
     * $chartDays = 0 means hourly (today).
     */
    private function resolvePeriod(string $period): array
    {
        return match ($period) {
            'today'       => [today()->startOfDay(), now(),                                  0,  'Today (Hourly)'],
            'last_7_days' => [now()->subDays(6)->startOfDay(), now(),                        7,  'Last 7 Days'],
            'this_month'  => [now()->startOfMonth(), now(),                                  now()->day, 'This Month'],
            'last_month'  => [
                now()->subMonth()->startOfMonth(),
                now()->subMonth()->endOfMonth(),
                now()->subMonth()->daysInMonth,
                'Last Month',
            ],
            default       => [now()->subDays(29)->startOfDay(), now(), 30, 'Last 30 Days'], // last_30_days
        };
    }
}

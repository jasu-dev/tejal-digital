<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\LeadStatus;
use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use App\Models\PageView;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $period = $request->get('period', 'last_14_days');

        [$from, $to, $chartDays, $chartLabel] = $this->resolvePeriod($period);

        // ── Chart data ────────────────────────────────────────────────────────
        $chartLabels = [];
        $chartData   = [];

        if ($chartDays > 0) {
            $dailyViews = PageView::selectRaw('DATE(visited_at) as date, COUNT(*) as count')
                ->whereBetween('visited_at', [$from, $to])
                ->groupBy('date')
                ->orderBy('date')
                ->get()
                ->keyBy('date');

            for ($i = $chartDays - 1; $i >= 0; $i--) {
                $date          = $from->copy()->addDays($chartDays - 1 - $i)->format('Y-m-d');
                $chartLabels[] = \Carbon\Carbon::parse($date)->format('M d');
                $chartData[]   = $dailyViews[$date]->count ?? 0;
            }
        } else {
            // Today — hourly
            $hourlyViews = PageView::selectRaw('HOUR(visited_at) as hr, COUNT(*) as count')
                ->whereDate('visited_at', today())
                ->groupBy('hr')
                ->orderBy('hr')
                ->get()
                ->keyBy('hr');

            for ($h = 0; $h < 24; $h++) {
                $chartLabels[] = str_pad((string) $h, 2, '0', STR_PAD_LEFT) . ':00';
                $chartData[]   = $hourlyViews[$h]->count ?? 0;
            }
        }

        // ── Summary stats (always global / today) ────────────────────────────
        $stats = [
            'total_leads'        => ContactRequest::count(),
            'new_leads'          => ContactRequest::where('status', LeadStatus::New)->count(),
            'total_page_views'   => PageView::count(),
            'today_page_views'   => PageView::whereDate('visited_at', today())->count(),
            'today_visitors'     => PageView::uniqueVisitors(PageView::whereDate('visited_at', today())),
        ];

        // ── Top 5 pages (filtered to period) ────────────────────────────────
        $topPages = PageView::selectRaw('path, COUNT(*) as count')
            ->whereBetween('visited_at', [$from, $to])
            ->groupBy('path')
            ->orderByDesc('count')
            ->limit(5)
            ->get();

        return view('admin.dashboard.index', compact(
            'stats', 'chartLabels', 'chartData', 'topPages',
            'period', 'chartLabel'
        ));
    }

    /**
     * Returns [Carbon $from, Carbon $to, int $chartDays, string $label].
     * $chartDays = 0 means hourly (today).
     */
    private function resolvePeriod(string $period): array
    {
        return match ($period) {
            'today'       => [today()->startOfDay(), now(),                          0,  'Today (Hourly)'],
            'last_7_days' => [now()->subDays(6)->startOfDay(), now(),               7,  'Last 7 Days'],
            'this_month'  => [now()->startOfMonth(), now(),          now()->day,        'This Month'],
            'last_month'  => [
                now()->subMonth()->startOfMonth(),
                now()->subMonth()->endOfMonth(),
                now()->subMonth()->daysInMonth,
                'Last Month',
            ],
            default       => [now()->subDays(13)->startOfDay(), now(), 14, 'Last 14 Days'], // last_14_days
        };
    }
}

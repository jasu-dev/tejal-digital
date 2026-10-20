<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageView;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageViewsController extends Controller
{
    public function index(Request $request): View
    {
        $period = $request->get('period', 'last_30_days');

        [$from, $to, $chartDays, $chartLabel] = $this->resolvePeriod($period);

        // ── Chart data ────────────────────────────────────────────────────────
        $labels = [];
        $data   = [];

        if ($chartDays > 0) {
            // Daily breakdown
            $dailyViews = PageView::selectRaw('DATE(visited_at) as date, COUNT(*) as count')
                ->whereBetween('visited_at', [$from, $to])
                ->groupBy('date')
                ->orderBy('date')
                ->get()
                ->keyBy('date');

            for ($i = $chartDays - 1; $i >= 0; $i--) {
                $date     = $from->copy()->addDays($chartDays - 1 - $i)->format('Y-m-d');
                $labels[] = \Carbon\Carbon::parse($date)->format($chartDays <= 31 ? 'M d' : 'M');
                $data[]   = $dailyViews[$date]->count ?? 0;
            }
        } else {
            // "Today" — hourly breakdown
            $hourlyViews = PageView::selectRaw('HOUR(visited_at) as hr, COUNT(*) as count')
                ->whereDate('visited_at', today())
                ->groupBy('hr')
                ->orderBy('hr')
                ->get()
                ->keyBy('hr');

            for ($h = 0; $h < 24; $h++) {
                $labels[] = str_pad((string) $h, 2, '0', STR_PAD_LEFT) . ':00';
                $data[]   = $hourlyViews[$h]->count ?? 0;
            }
        }

        // ── Top pages (filtered) ─────────────────────────────────────────────
        $topPagesQuery = PageView::selectRaw('path, COUNT(*) as count')
            ->whereBetween('visited_at', [$from, $to])
            ->groupBy('path')
            ->orderByDesc('count')
            ->limit(20);

        $topPages = $topPagesQuery->get();

        // ── Top referrers (filtered) ─────────────────────────────────────────
        $topReferrers = PageView::selectRaw('referer, COUNT(*) as count')
            ->whereNotNull('referer')
            ->where('referer', '!=', '')
            ->whereBetween('visited_at', [$from, $to])
            ->groupBy('referer')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        // ── Stats cards ─────────────────────────────────────────────────────
        $periods = [
            'total' => PageView::query(),
            'today' => PageView::whereDate('visited_at', today()),
            'week'  => PageView::where('visited_at', '>=', now()->subDays(7)),
            'month' => PageView::where('visited_at', '>=', now()->subDays(30)),
        ];

        $stats = [];
        foreach ($periods as $key => $query) {
            $stats[$key]             = (clone $query)->count();
            $stats[$key . '_unique'] = PageView::uniqueVisitors(clone $query);
        }

        return view('admin.pageviews.index', compact(
            'labels', 'data', 'topPages', 'topReferrers', 'stats',
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

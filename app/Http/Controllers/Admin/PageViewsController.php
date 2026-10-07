<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageView;
use Illuminate\View\View;

class PageViewsController extends Controller
{
    public function index(): View
    {
        // Daily views last 30 days
        $dailyViews = PageView::selectRaw('DATE(visited_at) as date, COUNT(*) as count')
            ->where('visited_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Fill missing days with 0
        $labels = [];
        $data   = [];
        $viewsMap = $dailyViews->keyBy('date');
        for ($i = 29; $i >= 0; $i--) {
            $date     = now()->subDays($i)->format('Y-m-d');
            $labels[] = now()->subDays($i)->format('M d');
            $data[]   = $viewsMap[$date]->count ?? 0;
        }

        // Top pages all time
        $topPages = PageView::selectRaw('path, COUNT(*) as count')
            ->groupBy('path')
            ->orderByDesc('count')
            ->limit(20)
            ->get();

        // Top referrers
        $topReferrers = PageView::selectRaw('referer, COUNT(*) as count')
            ->whereNotNull('referer')
            ->where('referer', '!=', '')
            ->groupBy('referer')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

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
            'labels', 'data', 'topPages', 'topReferrers', 'stats'
        ));
    }
}

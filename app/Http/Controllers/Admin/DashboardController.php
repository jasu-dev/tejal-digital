<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\LeadStatus;
use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use App\Models\PageView;
use App\Models\PortfolioItem;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total_leads'        => ContactRequest::count(),
            'new_leads'          => ContactRequest::where('status', LeadStatus::New)->count(),
            'portfolio_items'    => PortfolioItem::count(),
            'active_portfolio'   => PortfolioItem::active()->count(),
            'total_page_views'   => PageView::count(),
            'today_page_views'   => PageView::whereDate('visited_at', today())->count(),
        ];

        // Daily views for last 14 days
        $dailyViews = PageView::selectRaw('DATE(visited_at) as date, COUNT(*) as count')
            ->where('visited_at', '>=', now()->subDays(14))
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        // Top 5 pages
        $topPages = PageView::selectRaw('path, COUNT(*) as count')
            ->groupBy('path')
            ->orderByDesc('count')
            ->limit(5)
            ->get();

        return view('admin.dashboard.index', compact('stats', 'dailyViews', 'topPages'));
    }
}

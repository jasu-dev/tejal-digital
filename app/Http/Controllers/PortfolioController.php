<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $dbProjects = PortfolioItem::active()->ordered()->get();
        return view('portfolio.index', compact('dbProjects'));
    }

    public function show(string $slug): View
    {
        $item    = PortfolioItem::where('slug', $slug)->active()->firstOrFail();
        $related = $this->resolveRelated($item);

        return view('portfolio.show', compact('item', 'related'));
    }

    /**
     * Resolve the "related projects" array for the show page.
     * Looks up each slug in DB first, then falls back to the static project map.
     */
    private function resolveRelated(PortfolioItem $item): Collection
    {
        $slugs = $item->related_slugs ?? [];
        if (empty($slugs)) {
            return collect();
        }

        // Static fallback map (slug → array shape expected by the view)
        $staticMap = $this->staticProjectMap();

        return collect(array_slice($slugs, 0, 2))->map(function (string $slug) use ($staticMap): ?array {
            // Try DB first
            $dbItem = PortfolioItem::where('slug', $slug)->active()->first();
            if ($dbItem) {
                return [
                    'title' => $dbItem->title,
                    'link'  => $dbItem->detail_url,
                    'image' => $dbItem->image_path
                        ? Storage::disk('public')->url($dbItem->image_path)
                        : asset('assets/images/hero-gradient-bg.png'),
                    'desc'  => $dbItem->description,
                ];
            }

            // Fall back to static project by slug or named route
            return $staticMap[$slug] ?? null;
        })->filter()->values();
    }

    /** Map of well-known slugs/routes → static project card data */
    private function staticProjectMap(): array
    {
        return [
            'attendance-manager'      => ['title' => 'Attendance Manager System',          'link' => route('portfolio.attendance-manager'), 'image' => asset('assets/images/attendance.png'),                              'desc' => 'A Laravel-powered attendance system with geo-restriction and selfie verification.'],
            'krishna-academy'         => ['title' => 'KrishnaAcademy – LMS Platform',      'link' => route('portfolio.krishna-academy'),    'image' => asset('assets/images/krishna-academy.png'),                         'desc' => 'A Laravel LMS with video courses, quizzes, and Razorpay integration.'],
            'kifayat-card'            => ['title' => 'Kifayat Card',                        'link' => route('portfolio.kifayat-card'),       'image' => asset('assets/projects/kifayatcard.webp'),                          'desc' => 'Laravel-based loyalty point system for shop owners.'],
            'tech-nukti'              => ['title' => 'Tech Nukti – Custom WP Theme',        'link' => route('portfolio.tech-nukti'),         'image' => asset('assets/projects/tech-nukti-blog-website.webp'),              'desc' => 'Blazing-fast WordPress theme built from scratch.'],
            'growix-smart-qr'         => ['title' => 'Growix: Smart QR',                   'link' => route('portfolio.growix-smart-qr'),   'image' => asset('assets/projects/growix-saas-software.webp'),                'desc' => 'Custom Laravel SaaS for filtering negative Google reviews via QR.'],
            'tech-upkar'              => ['title' => 'TechUpkar Theme',                     'link' => route('portfolio.tech-upkar'),         'image' => asset('assets/projects/techupkar-blog-website.webp'),               'desc' => 'Hand-coded WordPress theme achieving 100/100 PageSpeed.'],
            'jixicloud'               => ['title' => 'Jixicloud - Custom Laravel Website',  'link' => route('portfolio.jixicloud'),          'image' => asset('assets/projects/jixicloud-web-hosting-company.webp'),        'desc' => 'Laravel-powered website with 3rd-party API integrations.'],
            'gujjutak-news'           => ['title' => 'Gujjutak News Portal',                'link' => route('portfolio.gujjutak-news'),      'image' => asset('assets/images/gujjutak.png'),                                'desc' => 'Gujarati news portal with full CMS and SEO tools.'],
            'gmj-child-pro'           => ['title' => 'GMJ Child Pro Theme',                 'link' => route('portfolio.gmj-child-pro'),      'image' => asset('assets/images/gmjchildpro.png'),                             'desc' => 'JS-free custom child theme built on the Genesis Framework.'],
            'promofusion360'          => ['title' => 'PromoFusion360 – Earning Platform',   'link' => route('portfolio.promofusion360'),     'image' => asset('assets/projects/promofusion360-web-application.webp'),       'desc' => 'Laravel-based earning platform with referral system.'],
        ];
    }
}

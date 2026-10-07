<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Enums\PortfolioStatus;
use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $items = PortfolioItem::ordered()->paginate(15);
        return view('admin.portfolio.index', compact('items'));
    }

    public function create(): View
    {
        $statuses  = PortfolioStatus::cases();
        $iconNames = $this->availableIcons();
        return view('admin.portfolio.create', compact('statuses', 'iconNames'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateRequest($request);
        $data      = $this->processFields($request, $validated);

        PortfolioItem::create($data);

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Portfolio item created successfully.');
    }

    public function edit(PortfolioItem $portfolio): View
    {
        $statuses  = PortfolioStatus::cases();
        $iconNames = $this->availableIcons();
        return view('admin.portfolio.edit', compact('portfolio', 'statuses', 'iconNames'));
    }

    public function update(Request $request, PortfolioItem $portfolio): RedirectResponse
    {
        $validated = $this->validateRequest($request, $portfolio->id);
        $data      = $this->processFields($request, $validated, $portfolio);

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(PortfolioItem $portfolio): RedirectResponse
    {
        foreach (['image_path', 'og_image_path'] as $field) {
            if ($portfolio->$field) {
                Storage::disk('public')->delete($portfolio->$field);
            }
        }
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Portfolio item deleted.');
    }

    public function toggleStatus(PortfolioItem $portfolio): RedirectResponse
    {
        $portfolio->update([
            'status' => $portfolio->status === PortfolioStatus::Active
                ? PortfolioStatus::Inactive
                : PortfolioStatus::Active,
        ]);

        return back()->with('success', 'Status updated.');
    }

    // ─── Helpers ──────────────────────────────────────────────────────────────

    private function validateRequest(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            // Core
            'title'               => ['required', 'string', 'max:200'],
            'slug'                => ['nullable', 'string', 'max:200', 'unique:portfolio_items,slug' . ($ignoreId ? ",{$ignoreId}" : '')],
            'category'            => ['required', 'string', 'max:100'],
            'status'              => ['required', 'in:active,inactive'],
            'sort_order'          => ['nullable', 'integer', 'min:0'],
            // Hero
            'badge_text'          => ['nullable', 'string', 'max:100'],
            'description'         => ['required', 'string'],
            'hero_subtitle'       => ['nullable', 'string'],
            'cta_text'            => ['nullable', 'string', 'max:100'],
            'gradient'            => ['nullable', 'string', 'max:100'],
            'image'               => ['nullable', 'image', 'max:3072'],
            // Content
            'intro_quote'         => ['nullable', 'string'],
            'challenge'           => ['nullable', 'string'],
            'solution'            => ['nullable', 'string'],
            // Repeaters (come as JSON strings from Alpine)
            'hero_badges_json'    => ['nullable', 'string'],
            'features_json'       => ['nullable', 'string'],
            'architecture_json'   => ['nullable', 'string'],
            'faqs_json'           => ['nullable', 'string'],
            // Related
            'related_slugs_json'  => ['nullable', 'string'],
            // Meta
            'tags'                => ['nullable', 'string'],
            'client_name'         => ['nullable', 'string', 'max:150'],
            'live_url'            => ['nullable', 'url', 'max:255'],
            'detail_route'        => ['nullable', 'string', 'max:100'],
            // SEO
            'meta_title'          => ['nullable', 'string', 'max:70'],
            'meta_description'    => ['nullable', 'string', 'max:160'],
            'meta_keywords'       => ['nullable', 'string'],
            'og_title'            => ['nullable', 'string', 'max:95'],
            'og_description'      => ['nullable', 'string', 'max:200'],
            'og_image'            => ['nullable', 'image', 'max:2048'],
            'twitter_title'       => ['nullable', 'string', 'max:70'],
            'twitter_description' => ['nullable', 'string', 'max:200'],
        ]);
    }

    private function processFields(Request $request, array $validated, ?PortfolioItem $existing = null): array
    {
        $data = $validated;

        // Slug
        $data['slug'] = $data['slug'] ?? Str::slug($data['title']);

        // Tags
        $data['tags'] = isset($data['tags']) && $data['tags']
            ? array_values(array_filter(array_map('trim', explode(',', $data['tags']))))
            : null;

        // JSON repeaters
        foreach (['hero_badges', 'features', 'architecture', 'faqs', 'related_slugs'] as $key) {
            $jsonKey = $key . '_json';
            $raw     = $data[$jsonKey] ?? null;
            unset($data[$jsonKey]);
            if ($raw) {
                $decoded = json_decode($raw, true);
                $data[$key] = is_array($decoded) && count($decoded) ? $decoded : null;
            } else {
                $data[$key] = null;
            }
        }

        // Hero image
        if ($request->hasFile('image')) {
            if ($existing?->image_path) {
                Storage::disk('public')->delete($existing->image_path);
            }
            $data['image_path'] = $request->file('image')->store('portfolio', 'public');
        }
        unset($data['image']);

        // OG image
        if ($request->hasFile('og_image')) {
            if ($existing?->og_image_path) {
                Storage::disk('public')->delete($existing->og_image_path);
            }
            $data['og_image_path'] = $request->file('og_image')->store('portfolio/seo', 'public');
        }
        unset($data['og_image']);

        return $data;
    }

    /** List of icon component names available in resources/views/components/icons/ */
    private function availableIcons(): array
    {
        return [
            'activity', 'briefcase', 'building', 'call', 'cart', 'check',
            'code', 'dashboard', 'date', 'deep-search', 'design', 'discover',
            'email', 'factory', 'globe', 'graduation-cap', 'hot', 'landmark',
            'launch', 'love', 'map-pin', 'party', 'planning', 'play',
            'plugin', 'security', 'shopping-bag', 'star', 'target', 'time',
            'tools', 'truck', 'users', 'utensils', 'window', 'wordpress',
        ];
    }
}



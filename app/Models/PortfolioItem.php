<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\PortfolioStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PortfolioItem extends Model
{
    protected $fillable = [
        // Core
        'title', 'slug', 'category', 'status', 'sort_order',
        // Hero
        'badge_text', 'hero_subtitle', 'cta_text',
        'description', 'image_path', 'gradient',
        // Content
        'intro_quote', 'challenge', 'solution',
        'hero_badges', 'features', 'architecture', 'faqs', 'related_slugs',
        // Meta
        'tags', 'client_name', 'live_url',
        'has_detail_page', 'detail_route',
        // SEO
        'meta_title', 'meta_description', 'meta_keywords',
        'og_title', 'og_description', 'og_image_path',
        'twitter_title', 'twitter_description',
    ];

    protected $casts = [
        'tags'            => 'array',
        'hero_badges'     => 'array',
        'features'        => 'array',
        'architecture'    => 'array',
        'faqs'            => 'array',
        'related_slugs'   => 'array',
        'status'          => PortfolioStatus::class,
        'has_detail_page' => 'boolean',
        'sort_order'      => 'integer',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (self $item): void {
            if (empty($item->slug)) {
                $item->slug = Str::slug($item->title);
            }
        });
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', PortfolioStatus::Active);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderByDesc('created_at');
    }

    /** Resolved URL for this portfolio item's detail page */
    public function getDetailUrlAttribute(): string
    {
        if ($this->detail_route) {
            return route($this->detail_route);
        }

        return route('portfolio.show', $this->slug);
    }

    /** Effective meta title (falls back to page title + site name) */
    public function getEffectiveMetaTitleAttribute(): string
    {
        return $this->meta_title ?: ($this->title . ' | Portfolio | Tejal Digital');
    }

    /** Effective OG title */
    public function getEffectiveOgTitleAttribute(): string
    {
        return $this->og_title ?: $this->effective_meta_title;
    }

    /** Effective Twitter title */
    public function getEffectiveTwitterTitleAttribute(): string
    {
        return $this->twitter_title ?: $this->effective_og_title;
    }
}

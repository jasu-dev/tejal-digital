<?php

declare(strict_types=1);

namespace App\Support;

/**
 * Public URLs for SEO tags (canonical, og:url, structured data).
 *
 * Always built from config('staticdata.site_url') — never from the incoming request — so they stay on
 * the one preferred host (non-www) no matter which host, scheme or query string the page was opened with.
 */
final class SiteUrl
{
    /** Absolute URL for a path; defaults to the current page, without its query string. */
    public static function to(?string $path = null): string
    {
        $base = rtrim((string) config('staticdata.site_url'), '/');
        $path = trim($path ?? request()->path(), '/');

        return $path === '' ? $base . '/' : $base . '/' . $path;
    }
}

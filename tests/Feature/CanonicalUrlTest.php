<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Routing\Route as RouteDefinition;
use Illuminate\Support\Facades\Route;

uses(RefreshDatabase::class);

/** Every public GET page without route parameters. */
function publicPagePaths(): array
{
    return collect(Route::getRoutes()->getRoutes())
        ->filter(fn (RouteDefinition $r) => in_array('GET', $r->methods(), true)
            && ! str_contains($r->uri(), '{')
            && ! is_a($r->getControllerClass() ?? '', \Illuminate\Routing\RedirectController::class, true)
            && ! str_starts_with($r->uri(), 'admin')
            && ! in_array($r->uri(), ['up', 'storage/{path}'], true)
            && ! str_starts_with($r->uri(), '_'))
        ->map(fn (RouteDefinition $r) => '/' . ltrim($r->uri(), '/'))
        ->values()
        ->all();
}

it('uses the non-www canonical and og:url on every public page', function () {
    $paths = publicPagePaths();
    expect($paths)->not->toBeEmpty();

    foreach ($paths as $path) {
        // Opened on the www host, with a query string — canonical must still be the clean non-www URL
        $html = $this->get('https://www.tejaldigital.in' . $path . '?utm_source=test')->assertOk()->getContent();

        $expected = 'https://tejaldigital.in' . ($path === '/' ? '/' : $path);

        $this->assertStringContainsString('<link rel="canonical" href="' . $expected . '">', $html, "Wrong canonical on {$path}");

        // Structured data must also point at the non-www host
        preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $jsonLd);
        foreach ($jsonLd[1] as $block) {
            $this->assertStringNotContainsString('www.tejaldigital.in', $block, "www URL in structured data on {$path}");
        }

        if (str_contains($html, 'og:url')) {
            $this->assertStringContainsString('<meta property="og:url" content="' . $expected . '">', $html, "Wrong og:url on {$path}");
        }
    }
});

<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\PageView;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackPageView
{
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    public function terminate(Request $request, Response $response): void
    {
        if (! $this->shouldTrack($request, $response)) {
            return;
        }

        PageView::create([
            // path() returns "/" for the home page and "about" (no slash) for everything else
            'path'       => '/' . ltrim($request->path(), '/'),
            'session_id' => $request->hasSession() ? $request->session()->getId() : null,
            'ip_address' => $request->ip(),
            'user_agent' => mb_substr((string) $request->userAgent(), 0, 500),
            'referer'    => mb_substr((string) $request->headers->get('referer'), 0, 500) ?: null,
            'visited_at' => now(),
        ]);
    }

    private function shouldTrack(Request $request, Response $response): bool
    {
        return $request->isMethod('GET')
            && ! $request->ajax()
            && ! $request->is('admin', 'admin/*', '_*', 'up')
            && $response->getStatusCode() === 200
            && str_contains((string) $response->headers->get('Content-Type'), 'text/html')
            && ! $request->user()?->is_admin
            && ! PageView::isBot($request->userAgent());
    }
}

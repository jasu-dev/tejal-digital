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
        if (
            $request->isMethod('GET')
            && ! $request->ajax()
            && ! str_starts_with($request->path(), 'admin')
            && ! str_starts_with($request->path(), '_')
            && $response->getStatusCode() === 200
        ) {
            PageView::create([
                'path'       => '/' . $request->path(),
                'session_id' => $request->session()->getId(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'referer'    => $request->headers->get('referer'),
                'visited_at' => now(),
            ]);
        }
    }
}

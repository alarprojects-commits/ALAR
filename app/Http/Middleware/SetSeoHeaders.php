<?php

namespace App\Http\Middleware;

use App\Support\PageSeo;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetSeoHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! method_exists($response, 'headers')) {
            return $response;
        }

        $seo = PageSeo::current();
        $robots = $seo['robots'] ?? 'index, follow';

        if (! $response->headers->has('X-Robots-Tag')) {
            $response->headers->set('X-Robots-Tag', $robots);
        }

        return $response;
    }
}

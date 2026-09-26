<?php

namespace App\Support;

use Illuminate\Support\Facades\Route;

class PageSeo
{
    public static function current(): array
    {
        $route = Route::currentRouteName() ?: 'home';
        $pages = config('seo.pages', []);
        $page = $pages[$route] ?? [];

        return [
            'route' => $route,
            'keywords' => $page['keywords'] ?? null,
            'type' => $page['type'] ?? 'WebPage',
            'name' => $page['name'] ?? null,
            'description' => $page['description'] ?? null,
            'faqs' => $page['faqs'] ?? [],
            'crumbs' => $page['crumbs'] ?? [],
            'service_type' => $page['service_type'] ?? null,
            'area_served' => $page['area_served'] ?? null,
        ];
    }

    public static function absolute(string $path): string
    {
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        return rtrim(config('business.url'), '/') . '/' . ltrim($path, '/');
    }

    public static function brandedOgPath(string $sourceAbsoluteUrl): string
    {
        $public = public_path();
        $path = parse_url($sourceAbsoluteUrl, PHP_URL_PATH) ?: '';
        $path = urldecode($path);
        $relative = ltrim(str_replace('\\', '/', $path), '/');

        // asset() may include /public or app path prefixes in local; normalize to assets/...
        if (preg_match('#(assets/.+)$#', $relative, $m)) {
            $relative = $m[1];
        }

        $sourceFs = public_path($relative);
        if (! is_file($sourceFs)) {
            return $sourceAbsoluteUrl;
        }

        $slug = trim(str_replace(['/', '\\', '.'], ['-', '-', '-'], preg_replace('#\.[^.]+$#', '', $relative)), '-');
        $brandedRel = 'assets/img/og/' . $slug . '.jpg';
        $brandedFs = public_path($brandedRel);

        if (! is_file($brandedFs)) {
            return $sourceAbsoluteUrl;
        }

        return asset($brandedRel);
    }
}

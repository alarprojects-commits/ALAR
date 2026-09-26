<?php

namespace App\Providers;

use App\Services\GooglePlaces;
use App\Support\PageSeo;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            $appUrl = config('app.url');

            if (is_string($appUrl) && $appUrl !== '') {
                URL::forceRootUrl(rtrim($appUrl, '/'));

                if (str_starts_with($appUrl, 'https://')) {
                    URL::forceScheme('https');
                }
            }
        }

        // Block Japanese spam URLs (e.g., ?item/123 or ?item=123)
        $queryString = request()->getQueryString();
        if ($queryString && str_contains($queryString, 'item')) {
            abort(404);
        }

        View::composer('layouts.app', function ($view) {
            $reviews = ['rating' => null, 'total' => 0, 'reviews' => []];
            try {
                $reviews = app(GooglePlaces::class)->details();
            } catch (\Throwable $e) {
                // Keep schema rendering even if Places is unavailable.
            }

            $view->with('schemaReviews', $reviews);
            $view->with('pageSeo', PageSeo::current());
        });
    }
}

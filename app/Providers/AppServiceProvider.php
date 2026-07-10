<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
    }
}

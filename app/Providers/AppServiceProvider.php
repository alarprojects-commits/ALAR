<?php

namespace App\Providers;

use App\Services\GooglePlaces;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
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

        View::composer(
            ['book-online', 'services.corporate-transportation', 'services.chauffeur-service'],
            function ($view) {
                $places = app(GooglePlaces::class);
                $reviews = $places->details();
                $placeId = config('services.google_places.place_id');

                $view->with([
                    'reviews' => $reviews,
                    'googleReviewsUrl' => 'https://www.google.com/maps/place/?q=place_id:' . $placeId,
                    'googleWriteUrl' => 'https://search.google.com/local/writereview?placeid=' . $placeId,
                ]);
            }
        );
    }
}

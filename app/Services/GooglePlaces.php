<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GooglePlaces
{
    public function details(): array
    {
        $cached = Cache::get('google.place.details.v2');
        if ($cached !== null) {
            return $cached;
        }

        $placeId = config('services.google_places.place_id');
        $apiKey = config('services.google_places.api_key');

        $resp = Http::withHeaders([
            'X-Goog-Api-Key' => $apiKey,
            'X-Goog-FieldMask' => 'id,displayName,rating,userRatingCount,reviews',
        ])->get("https://places.googleapis.com/v1/places/{$placeId}")->json();

        if (empty($resp['id'])) {
            return ['name' => null, 'rating' => null, 'total' => 0, 'reviews' => []];
        }

        $data = [
            'name'    => $resp['displayName']['text'] ?? 'Google Reviews',
            'rating'  => $resp['rating'] ?? null,
            'total'   => $resp['userRatingCount'] ?? 0,
            'reviews' => collect($resp['reviews'] ?? [])
                ->take(5)
                ->map(fn ($rev) => [
                    'author'  => $rev['authorAttribution']['displayName'] ?? 'Google user',
                    'profile' => $rev['authorAttribution']['uri'] ?? null,
                    'rating'  => $rev['rating'] ?? null,
                    'text'    => $rev['text']['text'] ?? '',
                    'time'    => $rev['relativePublishTimeDescription'] ?? '',
                ])
                ->values()
                ->toArray(),
        ];

        $ttlHours = (int) config('services.google_places.cache_h', 12);
        Cache::put('google.place.details.v2', $data, now()->addHours($ttlHours));

        return $data;
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\GooglePlaces;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request, GooglePlaces $places)
    {
        $reviews = $places->details();

        $placeId = config('services.google_places.place_id');
        $googleReviewsUrl = 'https://www.google.com/maps/place/?q=place_id:' . $placeId;
        $googleWriteUrl = 'https://search.google.com/local/writereview?placeid=' . $placeId;

        return view('index', [
            'reviews' => $reviews,
            'googleReviewsUrl' => $googleReviewsUrl,
            'googleWriteUrl' => $googleWriteUrl,
        ]);
    }
}

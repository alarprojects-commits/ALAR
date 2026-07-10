<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/our-services', function () {
    return view('our-services');
})->name('our-services');

Route::get('/our-fleet', function () {
    return view('our-fleet');
})->name('our-fleet');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

Route::get('/book-online', function () {
    return view('book-online');
})->name('book-online');

//services
Route::get('/services/airport-transportation', function () {
    return view('services.airport-transportation');
})->name('services.airport-transportation');

Route::get('/services/corporate-transportation', function () {
    return view('services.corporate-transportation');
})->name('services.corporate-transportation');

Route::get('/services/wedding-limo', function () {
    return view('services.wedding-limo');
})->name('services.wedding-limo');

Route::get('/services/prom-limo', function () {
    return view('services.prom-limo');
})->name('services.prom-limo');

Route::get('/services/sporting-events', function () {
    return view('services.sporting-events');
})->name('services.sporting-events');

Route::get('/services/fifa-world-cup-2026-transportation', function () {
    return view('services.fifa-world-cup-2026-transportation');
})->name('services.fifa-world-cup-2026-transportation');

Route::get('/services/group-transportation', function () {
    return view('services.group-transportation');
})->name('services.group-transportation');

Route::get('/services/concert-festival', function () {
    return view('services.concert-festival');
})->name('services.concert-festival');

Route::get('/services/party-bus', function () {
    return view('services.party-bus');
})->name('services.party-bus');

Route::get('/services/cruise-port-transfers', function () {
    return view('services.cruise-port-transfers');
})->name('services.cruise-port-transfers');

Route::get('/services/chauffeured-service', function () {
    return view('services.chauffeur-service');
})->name('services.chauffeured-service');

Route::get('/services/hourly-limo', function () {
    return view('services.hourly-limo');
})->name('services.hourly-limo');

//cities
Route::get('/service-areas/new-jersey', function () {
    return view('service-areas.new-jersey');
})->name('service-area.new-jersey');

Route::get('/service-areas/new-york', function () {
    return view('service-areas.new-york');
})->name('service-area.new-york');

Route::get('/service-areas/california', function () {
    return view('service-areas.california');
})->name('service-area.california');

Route::get('/service-areas/san-francisco', function () {
    return view('service-areas.san-francisco');
})->name('service-area.san-francisco');

Route::get('/service-areas/nevada', function () {
    return view('service-areas.nevada');
})->name('service-area.nevada');

Route::get('/service-areas/seattle', function () {
    return view('service-areas.seattle');
})->name('service-area.seattle');

//blogs
Route::get('/blog/luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey', function () {
    return view('blogs.luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey');
})->name('blog.luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey');

Route::fallback(function () {
    abort(404);
});
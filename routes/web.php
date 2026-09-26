<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('about-us');

Route::get('/our-services', function () {
    return view('pages.services');
})->name('our-services');

Route::get('/our-fleet', function () {
    return view('pages.fleet');
})->name('our-fleet');

Route::get('/contact-us', function () {
    return view('pages.contact');
})->name('contact-us');

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy-policy');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

Route::get('/book-online', function () {
    return view('pages.book-online');
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
Route::get('/service-areas', function () {
    return view('service-areas.index');
})->name('service-areas.index');

Route::get('/service-areas/new-jersey', function () {
    return view('service-areas.new-jersey');
})->name('service-area.new-jersey');

Route::get('/service-areas/new-york', function () {
    return view('service-areas.new-york');
})->name('service-area.new-york');

Route::get('/service-areas/california', function () {
    return view('service-areas.california');
})->name('service-area.california');

Route::get('/service-areas/nevada', function () {
    return view('service-areas.nevada');
})->name('service-area.nevada');

Route::get('/service-areas/washington', function () {
    return view('service-areas.washington');
})->name('service-area.washington');

Route::redirect('/service-areas/san-francisco', '/service-areas/california', 301);
Route::redirect('/service-areas/seattle', '/service-areas/washington', 301);

Route::get('/airports', function () {
    return view('airports.index');
})->name('airports.index');

Route::get('/airports/jfk', function () {
    return view('airports.jfk');
})->name('airports.jfk');

Route::get('/airports/lga', function () {
    return view('airports.lga');
})->name('airports.lga');

Route::get('/airports/ewr', function () {
    return view('airports.ewr');
})->name('airports.ewr');

Route::get('/airports/hpn', function () {
    return view('airports.hpn');
})->name('airports.hpn');

Route::get('/airports/teb', function () {
    return view('airports.teb');
})->name('airports.teb');

Route::get('/airports/lax', function () {
    return view('airports.lax');
})->name('airports.lax');

Route::get('/airports/las', function () {
    return view('airports.las');
})->name('airports.las');

Route::get('/airports/sea', function () {
    return view('airports.sea');
})->name('airports.sea');

//blogs
Route::redirect('/blog/car-service-to-jfk-from-manhattan', '/blog/airport-car-service-new-york', 301);
Route::redirect('/blog/newark-airport-car-service-ewr', '/blog/newark-airport-car-service', 301);
Route::redirect('/blog/new-york-car-service-jfk-lga-ewr-tri-state', '/blog/airport-car-service-new-york', 301);
Route::redirect('/blog/black-car-service-nyc-vs-uber-taxi', '/blog/hourly-chauffeur-service-new-york', 301);
Route::redirect('/blog/chauffeur-service-nyc-nj-to-pennsylvania-virginia-washington-dc', '/blog/hourly-chauffeur-service-new-york', 301);

Route::get('/blog/airport-car-service-new-york', function () {
    return view('blogs.airport-car-service-new-york');
})->name('blog.airport-car-service-new-york');

Route::get('/blog/newark-airport-car-service', function () {
    return view('blogs.newark-airport-car-service');
})->name('blog.newark-airport-car-service');

Route::get('/blog/car-service-new-jersey-to-jfk', function () {
    return view('blogs.car-service-new-jersey-to-jfk');
})->name('blog.car-service-new-jersey-to-jfk');

Route::get('/blog/wedding-limo-new-york', function () {
    return view('blogs.wedding-limo-new-york');
})->name('blog.wedding-limo-new-york');

Route::get('/blog/wedding-limo-new-jersey', function () {
    return view('blogs.wedding-limo-new-jersey');
})->name('blog.wedding-limo-new-jersey');

Route::get('/blog/prom-limo-new-york', function () {
    return view('blogs.prom-limo-new-york');
})->name('blog.prom-limo-new-york');

Route::get('/blog/prom-limo-new-jersey', function () {
    return view('blogs.prom-limo-new-jersey');
})->name('blog.prom-limo-new-jersey');

Route::get('/blog/party-bus-rental-new-york', function () {
    return view('blogs.party-bus-rental-new-york');
})->name('blog.party-bus-rental-new-york');

Route::get('/blog/hourly-chauffeur-service-new-york', function () {
    return view('blogs.hourly-chauffeur-service-new-york');
})->name('blog.hourly-chauffeur-service-new-york');

Route::get('/blog/corporate-car-service-new-jersey', function () {
    return view('blogs.corporate-car-service-new-jersey');
})->name('blog.corporate-car-service-new-jersey');

Route::get('/blog/sprinter-van-with-driver', function () {
    return view('blogs.sprinter-van-with-driver');
})->name('blog.sprinter-van-with-driver');

Route::get('/blog/cruise-port-transfer-new-york-new-jersey', function () {
    return view('blogs.cruise-port-transfer-new-york-new-jersey');
})->name('blog.cruise-port-transfer-new-york-new-jersey');

Route::get('/blog/metlife-stadium-transportation', function () {
    return view('blogs.metlife-stadium-transportation');
})->name('blog.metlife-stadium-transportation');

Route::get('/blog/concert-transportation-new-york', function () {
    return view('blogs.concert-transportation-new-york');
})->name('blog.concert-transportation-new-york');

Route::get('/blog/los-angeles-airport-car-service', function () {
    return view('blogs.los-angeles-airport-car-service');
})->name('blog.los-angeles-airport-car-service');

Route::get('/blog/las-vegas-chauffeur-airport-car-service', function () {
    return view('blogs.las-vegas-chauffeur-airport-car-service');
})->name('blog.las-vegas-chauffeur-airport-car-service');

Route::get('/blog/seattle-airport-car-service', function () {
    return view('blogs.seattle-airport-car-service');
})->name('blog.seattle-airport-car-service');

Route::get('/blog/best-hotels-near-jfk-airport', function () {
    return view('blogs.best-hotels-near-jfk-airport');
})->name('blog.best-hotels-near-jfk-airport');

Route::get('/blog/best-hotels-near-newark-airport', function () {
    return view('blogs.best-hotels-near-newark-airport');
})->name('blog.best-hotels-near-newark-airport');

Route::get('/blog/things-to-do-during-a-jfk-layover', function () {
    return view('blogs.things-to-do-during-a-jfk-layover');
})->name('blog.things-to-do-during-a-jfk-layover');

Route::get('/blog/can-i-leave-jfk-during-a-long-layover', function () {
    return view('blogs.can-i-leave-jfk-during-a-long-layover');
})->name('blog.can-i-leave-jfk-during-a-long-layover');

Route::get('/blog/best-restaurants-near-jfk-airport', function () {
    return view('blogs.best-restaurants-near-jfk-airport');
})->name('blog.best-restaurants-near-jfk-airport');

Route::get('/blog/nyc-business-districts-for-business-travelers', function () {
    return view('blogs.nyc-business-districts-for-business-travelers');
})->name('blog.nyc-business-districts-for-business-travelers');

Route::get('/blog/limo-service-cost-new-york', function () {
    return view('blogs.limo-service-cost-new-york');
})->name('blog.limo-service-cost-new-york');

Route::fallback(function () {
    abort(404);
});
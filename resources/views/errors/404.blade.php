@extends('layouts.app')
@section('meta_title', 'Page Not Found | Alar Chauffeur Service')
@section('meta_description', 'The page you requested is not on Alar Chauffeur Service. Return home, book a ride, or open a service area guide.')
@section('og_image', asset('assets/img/pages/about.png'))
@section('meta_robots', 'noindex, follow')
@section('hide_cta', true)
@section('content')
<section class="alar-section" style="min-height:70vh;display:flex;align-items:center;">
    <div class="alar-wrap" style="max-width:40rem;">
        <p class="alar-kicker">Error 404</p>
        <h1 style="font-family:var(--alar-display);font-size:clamp(2.4rem,5vw,3.6rem);margin:0.2rem 0 0.8rem;">This page is not on the map.</h1>
        <p style="color:#5f5850;font-size:1.1rem;line-height:1.55;margin:0 0 1.5rem;">The link may be outdated, mistyped, or removed. Use one of the paths below to get back to a live page—or book the ride you actually need.</p>
        <div class="alar-actions" style="flex-wrap:wrap;">
            <a class="alar-btn alar-btn-gold" href="{{ route('home') }}">Go home</a>
            <a class="alar-btn alar-btn-line-dark" href="{{ route('book-online') }}">Book Online</a>
            <a class="alar-btn alar-btn-line-dark" href="{{ route('service-areas.index') }}">Service areas</a>
            <a class="alar-btn alar-btn-line-dark" href="{{ route('contact-us') }}">Contact dispatch</a>
        </div>
        <ul class="alar-checklist" style="margin-top:2rem;">
            <li><a href="{{ route('our-services') }}">Our services</a></li>
            <li><a href="{{ route('airports.index') }}">Airport guides</a></li>
            <li><a href="{{ route('blog') }}">Travel guides</a></li>
            <li><a href="{{ route('our-fleet') }}">Fleet</a></li>
        </ul>
    </div>
</section>
@endsection

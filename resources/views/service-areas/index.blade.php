@extends('layouts.app')
@section('meta_title', 'Service Areas | NJ NY CA NV WA Chauffeur Coverage | Alar')
@section('meta_description', 'Alar Chauffeur Service areas: New Jersey, New York, California, Nevada, and Washington. Airport transfers, corporate travel, and private events with a confirmed rate.')
@section('og_image', asset('assets/img/service-areas/hub-banner.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/service-areas/hub-banner.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'Coverage', 'title' => 'Service areas we actually drive', 'crumb' => 'Service Areas'])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-prose" style="max-width:46rem;margin-bottom:1.5rem;">
        <p class="alar-kicker">Five states</p>
        <h2>Named markets. Real addresses. One Edison desk.</h2>
        <p>Alar Chauffeur Service covers New Jersey and New York as everyday work, plus California, Nevada, and Washington as named markets. Open a state guide for towns, airports, and what to send when you book. We do not invent a national menu of cities we do not drive.</p>
    </div>
    <div class="alar-wrap">
        <div class="alar-grid-3">
            <article class="alar-card">
                <img src="{{ asset('assets/img/service-areas/new-jersey.png') }}" alt="New Jersey chauffeur service">
                <div class="alar-card-body">
                    <span class="alar-tag">Home desk</span>
                    <h3>New Jersey</h3>
                    <p>Edison base covering Newark, Jersey City, Hoboken, Princeton, EWR, and crossings to JFK and LaGuardia.</p>
                    <div class="alar-card-actions">
                        <a class="alar-btn alar-btn-gold" href="{{ route('service-area.new-jersey') }}">Open New Jersey</a>
                        <a class="alar-btn alar-btn-line-dark" href="{{ route('airports.ewr') }}">EWR guide</a>
                    </div>
                </div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/service-areas/new-york.png') }}" alt="New York chauffeur service">
                <div class="alar-card-body">
                    <span class="alar-tag">Tri-State</span>
                    <h3>New York</h3>
                    <p>Manhattan, Brooklyn, Queens, and surrounding counties for JFK, LaGuardia, Westchester, and city-to-city private cars.</p>
                    <div class="alar-card-actions">
                        <a class="alar-btn alar-btn-gold" href="{{ route('service-area.new-york') }}">Open New York</a>
                        <a class="alar-btn alar-btn-line-dark" href="{{ route('airports.jfk') }}">JFK guide</a>
                    </div>
                </div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/service-areas/california.png') }}" alt="California chauffeur service">
                <div class="alar-card-body">
                    <span class="alar-tag">West Coast</span>
                    <h3>California</h3>
                    <p>Los Angeles chauffeur work centered on LAX, downtown, Westside, and hotel corridors with the terminal named.</p>
                    <div class="alar-card-actions">
                        <a class="alar-btn alar-btn-gold" href="{{ route('service-area.california') }}">Open California</a>
                        <a class="alar-btn alar-btn-line-dark" href="{{ route('airports.lax') }}">LAX guide</a>
                    </div>
                </div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/service-areas/nevada.png') }}" alt="Nevada chauffeur service">
                <div class="alar-card-body">
                    <span class="alar-tag">Las Vegas</span>
                    <h3>Nevada</h3>
                    <p>Harry Reid airport transfers and Strip resort towers with the hotel entrance on the reservation.</p>
                    <div class="alar-card-actions">
                        <a class="alar-btn alar-btn-gold" href="{{ route('service-area.nevada') }}">Open Nevada</a>
                        <a class="alar-btn alar-btn-line-dark" href="{{ route('airports.las') }}">LAS guide</a>
                    </div>
                </div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/service-areas/washington.png') }}" alt="Washington chauffeur service">
                <div class="alar-card-body">
                    <span class="alar-tag">Puget Sound</span>
                    <h3>Washington</h3>
                    <p>Sea-Tac transfers for Seattle downtown and Bellevue with bridge timing and weather buffers.</p>
                    <div class="alar-card-actions">
                        <a class="alar-btn alar-btn-gold" href="{{ route('service-area.washington') }}">Open Washington</a>
                        <a class="alar-btn alar-btn-line-dark" href="{{ route('airports.sea') }}">SEA guide</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap alar-split">
        <div class="alar-prose">
            <p class="alar-kicker">How coverage works</p>
            <h2>The state page is the map. The booking is the door.</h2>
            <p>Each service area guide explains the towns and airports we quote often. It is not a live fare sheet. Send the street addresses, the flight when there is one, and the passenger count. Dispatch confirms the vehicle and the rate before the chauffeur moves.</p>
            <div class="alar-actions">
                <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                <a class="alar-btn alar-btn-outline" href="{{ route('airports.index') }}">Airport guides</a>
            </div>
        </div>
        <div class="alar-prose">
            <ul class="alar-checklist">
                <li>New Jersey is the home desk in Edison.</li>
                <li>New York boroughs and counties are quoted from the real street.</li>
                <li>California, Nevada, and Washington are named markets, not filler pages.</li>
                <li>Airport terminals and FBOs belong on the reservation.</li>
            </ul>
        </div>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap alar-faq">
        <h2>Service area questions</h2>
        <details open><summary>Which states does Alar cover?</summary><p>New Jersey and New York first, plus California, Nevada, and Washington as named markets. Open a state page for the towns and airports we quote there.</p></details>
        <details><summary>Do you serve every city in those states?</summary><p>No. We quote the addresses you send in the markets we list. If a town is outside everyday coverage, ask before you assume a car is available.</p></details>
        <details><summary>Where should I start for an airport trip?</summary><p>Use the matching airport guide for terminal detail, then the state page for the city side of the ride. Book with both doors named.</p></details>
        <details><summary>How do I get a quote?</summary><p>Use Book Online or the contact form with date, pickup, drop-off, passenger count, and bags. Dispatch replies with the vehicle and the rate.</p></details>
    </div>
</section>
@endsection

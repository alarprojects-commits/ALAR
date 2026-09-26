@extends('layouts.app')
@section('meta_title', 'Luxury Transportation in Nevada | Private Chauffeur')
@section('meta_description', 'Nevada chauffeur service built around Las Vegas limo transfers: Harry Reid airport LAS arrivals, Strip hotels, and reserved event cars.')
@section('og_image', asset('assets/img/service-areas/nevada.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/service-areas/nevada.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'Nevada', 'title' => 'Las Vegas limo and Nevada chauffeur service', 'crumbs' => [['label' => 'Service Areas', 'url' => route('service-areas.index')], ['label' => 'Nevada']]])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/service-areas/nevada-scene.png') }}" alt="Black SUV at a Las Vegas resort entrance at night">
        <div class="alar-prose">
            <p class="alar-kicker">Nevada</p>
            <h2>Nevada chauffeur service around Las Vegas</h2>
            <p>Searches for Nevada chauffeur service almost always mean Las Vegas limo work: a Harry Reid airport LAS arrival, a drop at a specific Strip hotel tower, a convention transfer, or a reserved car for a show night. This page is built around Las Vegas, not every town in the state overnight.</p>
            <p>Airport mornings start with <a href="{{ route('services.airport-transportation') }}">airport transportation</a>. Multi-stop convention days fit <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a>. Lock the car on the <a href="{{ route('book-online') }}">booking page</a>.</p>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Pick a Las Vegas route</h2></div></div>
        <p class="alar-guide-lead">Open LAS, the Strip, peak nights, or why to reserve. Only that guide shows on the right.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="Nevada topics">
                <button type="button" class="is-on" data-guide="nv-las"><span class="alar-guide-num">01</span><span class="alar-guide-label">Harry Reid</span><span class="alar-guide-hint">LAS airport</span></button>
                <button type="button" data-guide="nv-strip"><span class="alar-guide-num">02</span><span class="alar-guide-label">Strip</span><span class="alar-guide-hint">Resorts and conventions</span></button>
                <button type="button" data-guide="nv-peaks"><span class="alar-guide-num">03</span><span class="alar-guide-label">Peak nights</span><span class="alar-guide-hint">Shows and weekends</span></button>
                <button type="button" data-guide="nv-why"><span class="alar-guide-num">04</span><span class="alar-guide-label">Why reserve</span><span class="alar-guide-hint">When an app is not enough</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="nv-las" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/nv-airport.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Harry Reid airport LAS pickups and departures</h3>
                        <p>Harry Reid International Airport is the commercial gateway for Las Vegas limo arrivals. Harry Reid airport LAS service only works when the airline and the terminal are on the reservation. Flight tracking follows the live arrival so an early inbound is met and a delayed inbound does not strand you while an app price climbs.</p>
                        <p>If you are leaving a Strip hotel for a morning flight, put the resort name, the tower if the property has more than one, and the preferred exit on the booking. A wrong tower with luggage is a long walk.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('airports.las') }}">LAS guide</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="nv-strip" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/nv-strip.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Strip hotels, downtown resorts, and conventions</h3>
                        <p>Strip hotels are the most common Las Vegas limo destinations. The resort name is not optional detail. Properties on the Strip can span long frontages, multiple towers, and different loading rules. Send the hotel, the tower if you know it, and a mobile number for the guest who will meet the chauffeur.</p>
                        <p>For a day with several venue stops, <a href="{{ route('services.hourly-limo') }}">hourly limo service</a> keeps one chauffeur on your clock instead of releasing the car after the first drop.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.hourly-limo') }}">Hourly limo</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="nv-peaks" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/nv-events.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Conventions, residencies, and weekend peaks</h3>
                        <p>Las Vegas limo demand spikes when a major convention, a residency calendar, and weekend leisure arrivals overlap. A reserved chauffeur does not invent extra lanes on Las Vegas Boulevard, but it does remove the search for a vehicle while you stand with bags under the hotel canopy.</p>
                        <p>Send the flight number early. Send the resort tower. Send the return time if you already know when the evening ends. Those three details prevent most of the avoidable friction.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
                        </div>
                    </div>
                </article>
                <article id="nv-why" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/nv-fleet.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Why a reserved Las Vegas limo helps</h3>
                        <p>On a quiet Tuesday with one carry-on, an on-demand car can be enough. On a Friday night when conferences, residencies, and weekend arrivals overlap, a reserved Las Vegas limo is the steadier choice. The price was agreed before the flight landed. The chauffeur already has the resort. The vehicle size already matches the bags.</p>
                        <p>Las Vegas hotel and airport planning is in our guide to <a href="{{ route('blog.las-vegas-chauffeur-airport-car-service') }}">Las Vegas chauffeur and airport car service</a>. Travelers who also need Tri-State coverage can review <a href="{{ route('service-area.new-jersey') }}">New Jersey car service</a>.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('our-fleet') }}">View fleet</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to get a Nevada quote</h2></div></div>
        <div class="alar-steps">
            <article><h3>Resort and tower</h3><p>The property name, and the tower if the hotel has more than one entrance.</p></article>
            <article><h3>LAS terminal</h3><p>Airline, terminal, and flight number for Harry Reid arrivals and departures.</p></article>
            <article><h3>Return time</h3><p>Book the ride home with the arrival when you already know when the show ends.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about Nevada</h2>
        <div class="alar-faq">
            <details open><summary>Do you track flights at Harry Reid airport LAS?</summary><p>Yes. When the flight number is on the reservation, the chauffeur follows the live arrival time, including delays.</p></details>
            <details><summary>Do you pick up at Strip hotels by tower?</summary><p>Yes when you send the resort and tower or preferred door. The property name is required so the drop is not a long walk with luggage.</p></details>
            <details><summary>Can we book a return after a show or convention?</summary><p>Yes. Reserve the return with the arrival when you know the end time, or book hourly coverage for multi-stop evenings.</p></details>
            <details><summary>Which vehicles are available for Las Vegas limo trips?</summary><p>Sedans and SUVs are assigned from headcount and bags. Larger vehicles are available when a standard SUV is too small.</p></details>
            <details><summary>How do we book Nevada chauffeur service?</summary><p>Use the booking page or send both addresses, the date, LAS details if relevant, and the passenger count.</p></details>
        </div>
    </div>
</section>
@include('components.related-services')
@endsection

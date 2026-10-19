@extends('main')
@section('meta_title', 'Teterboro Airport Car Service | Alar')
@section('meta_description', 'TEB private aviation car service with FBO coordination and chauffeur transfers across New Jersey and New York.')
@section('og_image', asset('assets/img/airports/teb.webp'))
@section('og_type', 'website')

@section('content')
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Airport Guides</span>
                <h1>Teterboro Airport Car Service</h1>
                <p>TEB private aviation car service with FBO coordination and chauffeur transfers across New Jersey and New York.</p>
                <div class="ve-hero-ctas">
                    <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
                    <a href="{{ route('free-quote') }}" class="ve-btn-outline">Free Quote</a>
                    <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="ve-service-area-detail">
                        <div class="mb-30">
                            <img src="{{ asset('assets/img/airports/teb.webp') }}" alt="Teterboro Airport (TEB) car service by Alar Chauffeur Service" class="img-fluid rounded-12 shadow-sm w-100" style="max-height: 380px; object-fit: cover;">
                        </div>

                        <div class="ve-area-intro mb-50">
                            <h2>Reserved chauffeur transfers for <span>TEB</span></h2>
                            <p class="ve-lead">Alar Chauffeur Service provides <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transportation</b></a> and chauffeur pickups at Teterboro Airport (TEB). Share your flight number, terminal, and destination so we can confirm the vehicle and rate before dispatch—not an on-demand rideshare curb queue.</p>
                            <p>Teterboro is FBO-driven. Send the FBO name and tail number when you have them so the chauffeur meets the correct ramp entrance.</p>
                        </div>

                        <div class="ve-area-description">
                            <h2>Airport pickup and meet points at <span>TEB</span></h2>
                            <h3>FBO meet points</h3>
                            <p>Private terminals differ. We stage at the FBO you name—not a public commercial curb.</p>
                            <h3>Timing</h3>
                            <p>General aviation schedules can move. Keep a reachable mobile number on the reservation.</p>
                            <h3>Manhattan and NJ</h3>
                            <p>TEB is a favorite for quick Manhattan and North Jersey executive transfers.</p>

                            <h2>Where we drive from <span>TEB</span></h2>
                            <p>We regularly run transfers between TEB and the states below. Open a state guide for counties and related airports.</p>
                            <div class="ve-amenities-list">
                                <ul>
                            <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>New Jersey car service</b></a></li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>New York car service</b></a></li>
                                </ul>
                            </div>

                            <h3>Common destinations and corridors</h3>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Bergen and Hudson County</li>
                                    <li><i class="fa fa-check"></i> Manhattan executive addresses</li>
                                    <li><i class="fa fa-check"></i> Westchester connections</li>
                                    <li><i class="fa fa-check"></i> Corporate roadshow itineraries</li>
                                </ul>
                            </div>

                            <h2>Vehicles for <span>TEB</span> transfers</h2>
                            <p>Choose the cabin that matches headcount and luggage. See <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>our fleet</b></a> for sedans, SUVs, Sprinters, and larger group vehicles. Corporate travelers often book <a href="{{ route('services.corporate-transportation') }}" style="color: var(--ve-gold);"><b>corporate transportation</b></a>; flexible days fit <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>hourly limo</b></a> service.</p>

                            <h3>Sedans and executive SUVs</h3>
                            <p>Best for one to three passengers with standard luggage on most TEB runs.</p>
                            <h3>Sprinters and group vehicles</h3>
                            <p>Use when the party or bag count exceeds a sedan trunk—especially for international arrivals.</p>

                            <h2>How to book your <span>TEB</span> transfer</h2>
                            <p>Send date, pickup or drop-off address, passenger count, airline, flight number, and terminal through <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book Online</b></a> or <a href="{{ route('contact-us') }}" style="color: var(--ve-gold);"><b>Contact Us</b></a>. We confirm the rate and vehicle before the chauffeur is dispatched.</p>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Flight tracking when the flight number is on the reservation</li>
                                    <li><i class="fa fa-check"></i> Meet-and-greet or curbside pickup as arranged</li>
                                    <li><i class="fa fa-check"></i> Professional chauffeurs—not street-hail taxi service</li>
                                    <li><i class="fa fa-check"></i> 24/7 dispatch desk in Edison, New Jersey</li>
                                </ul>
                            </div>

                            <h2>Related airport guides</h2>
                            <div class="ve-amenities-list">
                                <ul>
                            <li><i class="fa fa-check"></i> <a href="{{ route('airports.ewr') }}" style="color: var(--ve-gold);"><b>Newark (EWR) car service</b></a></li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('airports.lga') }}" style="color: var(--ve-gold);"><b>LaGuardia car service</b></a></li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('airports.jfk') }}" style="color: var(--ve-gold);"><b>JFK airport car service</b></a></li>
                                    <li><i class="fa fa-check"></i> <a href="{{ route('airports.index') }}" style="color: var(--ve-gold);"><b>All airport guides</b></a></li>
                                </ul>
                            </div>

                            <div class="ve-area-faq mt-50">
                                <span class="ve-section-tag">FAQs</span>
                                <h2 class="mb-30">Frequently asked questions about <span>TEB</span></h2>
                                <div id="tebFaq" class="accordion ve-faq-accordion">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3" type="button" data-toggle="collapse" data-target="#tebFaq1" aria-expanded="true">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">Do you track flights into TEB?</h3>
                                            </button>
                                        </div>
                                        <div id="tebFaq1" class="collapse show" data-parent="#tebFaq">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>Yes. When the flight number is on the booking, dispatch follows the live arrival—including delays—so the chauffeur is staged for your terminal, not a generic airport pin.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#tebFaq2">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">What should I send for an accurate quote?</h3>
                                            </button>
                                        </div>
                                        <div id="tebFaq2" class="collapse" data-parent="#tebFaq">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>Date, door-to-door addresses, passenger and bag count, airline, flight number, and terminal. That is enough to price a real TEB transfer.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#tebFaq3">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">Is this the same as a taxi or rideshare?</h3>
                                            </button>
                                        </div>
                                        <div id="tebFaq3" class="collapse" data-parent="#tebFaq">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>No. Alar provides prearranged chauffeur and airport shuttle-style transfers with a confirmed rate—aligned with chauffeur service and airport shuttle service, not metered taxi or self-drive van rental.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-50 mt-lg-0">
                    <x-airport-sidebar />
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection

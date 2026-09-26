@extends('layouts.app')
@section('meta_title', 'California Chauffeur & Limo Service | Alar')
@section('meta_description', 'California chauffeur service centered on Los Angeles and LAX car service. Reserved sedans and SUVs for airport transfers, meetings, and eventsâ€”without claiming every CA city.')
@section('og_image', asset('assets/img/service-areas/california.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/service-areas/california.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'California', 'title' => 'California chauffeur service in Los Angeles', 'crumbs' => [['label' => 'Service Areas', 'url' => route('service-areas.index')], ['label' => 'California']]])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/service-areas/california-scene.png') }}" alt="Black SUV at a Los Angeles airport curb at dusk">
        <div class="alar-prose">
            <p class="alar-kicker">California</p>
            <h2>California chauffeur work, centered on Los Angeles</h2>
            <p>Searches for California chauffeur service usually mean a private car in Los Angeles: an LAX car service pickup after a long flight, a hotel-to-office morning in downtown, or an evening event on the Westside where parking is the real problem. Alar Chauffeur Service answers those trips with reserved sedans and SUVs. We do not claim every city in California as a standing route.</p>
            <p>Airport mornings start with <a href="{{ route('services.airport-transportation') }}">airport transportation</a>. Multi-stop business days fit <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a>. When you are ready to lock the car, use the <a href="{{ route('book-online') }}">booking page</a>.</p>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Pick a Los Angeles route</h2></div></div>
        <p class="alar-guide-lead">Choose LAX, the city, an event night, or what to send. The panel on the right updates without scrolling through every paragraph first.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="California topics">
                <button type="button" class="is-on" data-guide="ca-lax"><span class="alar-guide-num">01</span><span class="alar-guide-label">LAX</span><span class="alar-guide-hint">Airport arrivals</span></button>
                <button type="button" data-guide="ca-city"><span class="alar-guide-num">02</span><span class="alar-guide-label">City days</span><span class="alar-guide-hint">Downtown and Westside</span></button>
                <button type="button" data-guide="ca-events"><span class="alar-guide-num">03</span><span class="alar-guide-label">Events</span><span class="alar-guide-hint">Evenings and groups</span></button>
                <button type="button" data-guide="ca-plan"><span class="alar-guide-num">04</span><span class="alar-guide-label">What to send</span><span class="alar-guide-hint">Booking details</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="ca-lax" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ca-lax.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>LAX car service and how arrivals work</h3>
                        <p>Los Angeles International Airport is the main commercial gateway for the trips we schedule. LAX car service only works when the airline and the terminal are on the reservation. The airport is large, circulating roads are busy, and â€œmeet me at LAXâ€ is not a meeting point. Flight tracking follows the live arrival so an early inbound is met and a delayed inbound does not leave a chauffeur guessing from a ticket time. Meet and greet places the chauffeur inside with a name board when you want that. Curbside staging is available when you prefer to walk out to the car.</p>
                        <p>Departures are timed for your terminal and your airlineâ€™s security pattern, not for a generic curb labeled LAX. If you are connecting from a hotel in downtown Los Angeles, Century City, Santa Monica, Beverly Hills, or another Westside address, put the hotel name and the preferred door on the booking. Luggage changes the vehicle choice as much as passenger count does.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('airports.lax') }}">LAX guide</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="ca-city" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ca-corporate.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Downtown, Westside, and corporate campuses</h3>
                        <p>Los Angeles chauffeur days often move between downtown hotels, Financial District meetings, and Westside offices. The same reserved car can cover a morning airport arrival and an afternoon campus visit when you book hourly coverage instead of releasing the chauffeur after the first drop. For that pattern, <a href="{{ route('services.hourly-limo') }}">hourly limo service</a> keeps one vehicle and one itinerary.</p>
                        <p>This page is about Los Angeles and the surrounding business districts we actually schedule. It is not a promise that every California city has a car waiting. Orange County addresses, the Valley, and coastal towns outside the usual Westside and downtown pattern are quoted when you name them.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.corporate-transportation') }}">Corporate service</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="ca-events" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ca-wedding.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Events, evenings, and group travel</h3>
                        <p>Evening events in Los Angeles fail when the ride home is left to a street hail after the show. Book the return with the arrival when you already know the venue end time. Weddings that move between a ceremony site and a reception need the doors and timing written down the same way an airport transfer does. Larger parties that will not fit an SUV can request a bigger vehicle; capacities appear on the fleet pages.</p>
                        <p>If you are comparing a reserved black car with an on-demand app for a flight morning or a client pickup, the Los Angeles version of that plan is our <a href="{{ route('blog.los-angeles-airport-car-service') }}">Los Angeles airport car service</a> guide.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('our-fleet') }}">View fleet</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="ca-plan" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ca-hourly.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>What to send for a smooth Los Angeles day</h3>
                        <p>California chauffeur bookings go wrong when the reservation is vague. â€œLAX to downtownâ€ is not enough. Name the terminal, the hotel, and the preferred door. If the afternoon includes a studio lot, a Westside office, or a dinner reservation, list those stops in order so the chauffeur is not inventing a route while you sit in traffic.</p>
                        <p>Tell us whether the passenger is a client who should not wait curbside, whether there are child seats, and whether the return to LAX is the same day. Those notes change staging and vehicle choice more than a marketing paragraph ever will. Travelers who also need Tri-State coverage can review our <a href="{{ route('service-area.new-jersey') }}">New Jersey car service</a> page.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How California chauffeur booking works</h2></div></div>
        <div class="alar-steps">
            <article><h3>Neighborhood or hotel</h3><p>Downtown, Westside, or the address you actually mean. â€œLos Angelesâ€ is not a door.</p></article>
            <article><h3>LAX terminal</h3><p>Airline, terminal, and flight number when the trip starts or ends at the airport.</p></article>
            <article><h3>Confirm the car</h3><p>We reply with the vehicle and the fare. Tolls and airport fees are explained with the quote.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about California</h2>
        <div class="alar-faq">
            <details open><summary>Do you offer LAX car service with flight tracking?</summary><p>Yes. When the flight number is on the reservation, the chauffeur follows the live arrival time, including delays.</p></details>
            <details><summary>Do you serve every city in California?</summary><p>No. This page covers Los Angeles and surrounding business districts we schedule. Addresses outside that core are quoted when you name them.</p></details>
            <details><summary>Which vehicles are used for California chauffeur trips?</summary><p>Sedans and SUVs are assigned from passenger count and luggage. Larger vehicles are available when the group will not fit an SUV.</p></details>
            <details><summary>Can one car cover an airport arrival and afternoon meetings?</summary><p>Yes. Book hourly coverage so the chauffeur stays with your itinerary instead of ending after the first drop.</p></details>
            <details><summary>How do we get a quote?</summary><p>Send both addresses, the date, LAX details if relevant, and the headcount. Dispatch confirms the vehicle and the rate before the car moves.</p></details>
        </div>
    </div>
</section>
@include('components.related-services')
@endsection

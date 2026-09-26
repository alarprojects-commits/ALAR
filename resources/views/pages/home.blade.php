@extends('layouts.app')
@section('meta_title', 'Luxury Limo & Chauffeur Service in New Jersey | Alar')
@section('meta_description', 'Book premium chauffeur & limo service in New Jersey. Luxury sedans, SUVs & party buses for airport transfers, weddings & events. Reserve today!')
@section('og_image', asset('assets/img/home/hero.png'))
@section('og_type', 'website')

@section('content')
<section class="alar-hero">
    <div class="alar-hero-copy">
        <p class="alar-kicker"><span aria-hidden="true">★★★★★</span> Chauffeur service</p>
        <h1>A quieter way <span>across</span> the city.</h1>
        <p class="alar-hero-lead">Airport transfers, corporate travel, and private events with a chauffeur who is already waiting. Book in a few minutes from New Jersey, New York, and the cities we cover.</p>
        <div class="alar-actions">
            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
            <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
            <a class="alar-btn alar-btn-line" href="tel:{{ config('contact.phone_tel') }}">Call {{ config('contact.phone_display') }}</a>
        </div>
        <ul class="alar-points">
            <li>Professional chauffeurs</li>
            <li>Flight tracking</li>
            <li>24/7 dispatch</li>
            <li>Online booking</li>
        </ul>
    </div>
    <div class="alar-hero-photo" role="img" aria-label="Black luxury sedan at night" style="background-image:url('{{ asset('assets/img/home/hero.png') }}')"></div>
</section>

@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/home/about.png') }}" alt="Chauffeur opening the door of a black sedan">
        <div>
            <p class="alar-kicker">About Alar</p>
            <h2>Three years of careful rides.</h2>
            <p>For more than three years, Alar Chauffeur Service has handled airport runs, weddings, and executive travel across <a href="{{ route('service-area.new-jersey') }}">New Jersey</a>, <a href="{{ route('service-area.new-york') }}">New York</a>, <a href="{{ route('service-area.california') }}">California</a>, <a href="{{ route('service-area.nevada') }}">Nevada</a>, and <a href="{{ route('service-area.washington') }}">Washington</a>.</p>
            <p>Every vehicle is inspected before the booking and detailed the day of the trip. <a href="{{ route('book-online') }}">Request a quote</a> and we will confirm the car, the rate, and the pickup.</p>
            <a class="alar-btn alar-btn-ink" href="{{ route('about-us') }}">Our story</a>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-head">
            <div>
                <p class="alar-kicker">Services</p>
                <h2>Airport, corporate, and events</h2>
            </div>
            <a class="alar-btn alar-btn-line-dark" href="{{ route('our-services') }}">View all services</a>
        </div>
        <div class="alar-grid-3">
            <article class="alar-card">
                <img src="{{ asset('assets/img/home/airport.png') }}" alt="Airport pickup in a luxury sedan">
                <div class="alar-card-body">
                    <span class="alar-tag">Travel</span>
                    <h3>Airport transportation</h3>
                    <p>Flight-tracked pickups and drop-offs in sedans and SUVs.</p>
                    <div class="alar-actions">
                        <a class="alar-btn alar-btn-gold alar-btn-sm" href="{{ route('book-online') }}">Book Online</a>
                        <a class="alar-btn alar-btn-line-dark alar-btn-sm" href="{{ route('services.airport-transportation') }}">Details</a>
                    </div>
                </div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/home/corporate.png') }}" alt="Executive SUV for corporate travel">
                <div class="alar-card-body">
                    <span class="alar-tag">Business</span>
                    <h3>Corporate transportation</h3>
                    <p>Black-car service for meetings, roadshows, and guests.</p>
                    <div class="alar-actions">
                        <a class="alar-btn alar-btn-gold alar-btn-sm" href="{{ route('book-online') }}">Book Online</a>
                        <a class="alar-btn alar-btn-line-dark alar-btn-sm" href="{{ route('services.corporate-transportation') }}">Details</a>
                    </div>
                </div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/home/wedding.png') }}" alt="Wedding limousine at dusk">
                <div class="alar-card-body">
                    <span class="alar-tag">Events</span>
                    <h3>Wedding limo</h3>
                    <p>Ceremony and reception rides for the couple and the party.</p>
                    <div class="alar-actions">
                        <a class="alar-btn alar-btn-gold alar-btn-sm" href="{{ route('book-online') }}">Book Online</a>
                        <a class="alar-btn alar-btn-line-dark alar-btn-sm" href="{{ route('services.wedding-limo') }}">Details</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head">
            <div>
                <p class="alar-kicker">What riders need</p>
                <h2>Three kinds of trip we plan for</h2>
            </div>
        </div>
        <div class="alar-grid-3">
            <article class="alar-note">
                <h3>On-time airport pickup</h3>
                <p>We watch the flight, adjust for delays, and meet you with a name board instead of a circling car.</p>
            </article>
            <article class="alar-note">
                <h3>Executive travel</h3>
                <p>A quiet cabin, a known chauffeur, and a schedule that can absorb a meeting that runs long.</p>
            </article>
            <article class="alar-note">
                <h3>Events</h3>
                <p>Weddings, proms, concerts, and games, with a vehicle sized for the party and a driver who stays on the timeline.</p>
            </article>
        </div>
    </div>
</section>

<section class="alar-section-dark" style="padding:0;">
    <div class="alar-wrap alar-stats">
        <article><strong>2000+</strong><span>Happy passengers</span></article>
        <article><strong>50+</strong><span>Luxury vehicles</span></article>
        <article><strong>5</strong><span>States covered</span></article>
        <article><strong>3+</strong><span>Years of service</span></article>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Why Alar</p><h2>The details that keep a ride calm</h2></div></div>
        <div class="alar-grid-4">
            <article class="alar-note"><h3>Known chauffeurs</h3><p>Courteous drivers focused on timing and discretion.</p></article>
            <article class="alar-note"><h3>Prepared cars</h3><p>Late-model sedans, SUVs, and sprinters detailed before each job.</p></article>
            <article class="alar-note"><h3>Clear rates</h3><p>You see the vehicle and the price before you confirm.</p></article>
            <article class="alar-note"><h3>Live dispatch</h3><p>Someone answers day and night if a flight or plan changes.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">How it works</p><h2>Request, confirm, ride</h2></div></div>
        <div class="alar-steps">
            <article><h3>Request</h3><p>Share the date, addresses, and how many people are traveling.</p></article>
            <article><h3>Confirm</h3><p>We match a vehicle, send the rate, and lock the chauffeur.</p></article>
            <article><h3>Ride</h3><p>Your driver tracks the schedule and handles the door-to-door trip.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-section-dark">
    <div class="alar-wrap">
        <div class="alar-head">
            <div>
                <p class="alar-kicker">Fleet</p>
                <h2>Vehicles for the size of the party</h2>
            </div>
            <a class="alar-btn alar-btn-line" href="{{ route('our-fleet') }}">View full fleet</a>
        </div>
        <div class="alar-grid-3">
            <article class="alar-card">
                <img src="{{ asset('assets/img/fleet/mercedes-s550.webp') }}" alt="Mercedes-Benz S550">
                <div class="alar-card-body"><h3>Mercedes-Benz S550</h3><p>Up to 4 passengers</p></div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/fleet/cadillac-escalade.webp') }}" alt="Cadillac Escalade">
                <div class="alar-card-body"><h3>Cadillac Escalade</h3><p>Up to 7 passengers</p></div>
            </article>
            <article class="alar-card">
                <img src="{{ asset('assets/img/fleet/mercedes-sprinter.webp') }}" alt="Mercedes Sprinter">
                <div class="alar-card-body"><h3>Mercedes Sprinter</h3><p>Up to 14 passengers</p></div>
            </article>
        </div>
    </div>
</section>

@include('components.google-reviews', [
    'reviews' => $reviews,
    'googleReviewsUrl' => $googleReviewsUrl,
    'googleWriteUrl' => $googleWriteUrl,
])

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">On board</p><h2>What the cabin is set up for</h2></div></div>
        <div class="alar-grid-4">
            <article class="alar-note"><h3>Quiet seating</h3><p>Leather interiors meant for a call or a nap after a flight.</p></article>
            <article class="alar-note"><h3>Climate control</h3><p>The cabin is set before you sit down.</p></article>
            <article class="alar-note"><h3>Charging</h3><p>Power for phones and laptops on longer transfers.</p></article>
            <article class="alar-note"><h3>Privacy</h3><p>Tinted glass and a chauffeur who keeps the ride discreet.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Planning a ride</p>
        <h2>How to choose a chauffeur in New Jersey and New York</h2>
        <p>Most people looking for a luxury chauffeur service in New Jersey are trying to solve a specific trip, not collect a slogan. The trip is usually an airport, a meeting, or an event. Alar is based in Edison and plans those three all week. If you are flying, start with <a href="{{ route('services.airport-transportation') }}">airport car service for JFK, LaGuardia, and Newark</a>. If the day has several offices, use <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a>. If the date is a wedding, use <a href="{{ route('services.wedding-limo') }}">wedding limo service</a>. The vehicle list, with passenger counts, is on <a href="{{ route('our-fleet') }}">our fleet</a>. Addresses in the boroughs are covered under <a href="{{ route('service-area.new-york') }}">New York car service</a>, and North Jersey towns under <a href="{{ route('service-area.new-jersey') }}">New Jersey car service</a>.</p>
        <h2>Airport, black car, or hourly</h2>
        <p>An airport reservation is a transfer with a flight number. The chauffeur follows the arrival, and you choose meet and greet or curbside. A black car for a single meeting is often a sedan from the hotel to one office and on. Hourly service is the right booking when you need the same car to wait. Mixing those up is how travelers get a quote that does not match the day. A sedan that is perfect for two carry-ons is the wrong car for six people and a week of luggage. Send the headcount and the bags with the addresses.</p>
        <p>JFK is a campus of terminals. LaGuardia is closer to Manhattan and still slow at the curb. Newark is the practical airport for many New Jersey addresses and a full trip from the city. Name the terminal. A driver with only the airport code will be at the wrong door. For a New York departure, the longer note is <a href="{{ route('blog.airport-car-service-new-york') }}">airport car service in New York</a>. For EWR, read the <a href="{{ route('blog.newark-airport-car-service') }}">Newark airport car service</a> guide.</p>
        <h2>What a quote should include</h2>
        <p>Ask for the vehicle name, the passenger count it actually seats, whether meet and greet is included, and how a delay is handled. A rate that ignores tolls and airport fees will look cheaper until the receipt. Alar confirms the vehicle and the rate before dispatch. It is not a taxi meter and it is not a rideshare price that moves while you stand at baggage claim. If the car has to wait between stops, read <a href="{{ route('blog.hourly-chauffeur-service-new-york') }}">hourly chauffeur service in New York</a>.</p>
        <p>Book when you know the date, both addresses, and the time you need to be there, not only the time you hope to leave. You can reserve online or send the itinerary through the contact form. Dispatch is available overnight for early flights. If the plan changes, update the reservation rather than renegotiating at the curb.</p>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Questions</p><h2>Before you book</h2></div></div>
        <div class="alar-faq">
            <details open>
                <summary>Do you track flights?</summary>
                <p>Yes. Airport pickups follow the live arrival time, including delays, so the chauffeur is there when you land.</p>
            </details>
            <details>
                <summary>Which airports do you cover?</summary>
                <p>JFK, LaGuardia, Newark, and the airports in the cities listed under service areas, including Los Angeles, Las Vegas, and Sea-Tac in Washington.</p>
            </details>
            <details>
                <summary>How do I get a price?</summary>
                <p>Use Book Online or the contact form with your date, pickup, and drop-off. We reply with the vehicle and the rate.</p>
            </details>
            <details>
                <summary>Can I book by the hour?</summary>
                <p>Yes. Hourly service keeps the chauffeur with you between meetings, venues, or a night out.</p>
            </details>
        </div>
    </div>
</section>

@include('components.blog-insights')
@endsection

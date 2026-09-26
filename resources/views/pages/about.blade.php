@extends('layouts.app')
@section('meta_title', 'About Alar Chauffeur Service | NJ Luxury Transport')
@section('meta_description', 'Alar Chauffeur Service is a New Jersey chauffeur company for airport transfers, corporate travel, weddings, and private events.')
@section('og_image', asset('assets/img/pages/about.png'))

@section('content')
@include('components.page-banner', ['image' => asset('assets/img/pages/about.png'), 'kicker' => 'About us', 'title' => 'The company behind the car', 'crumb' => 'About'])
@include('components.ticker')
<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/home/about.png') }}" alt="Chauffeur welcoming a guest">
        <div class="alar-prose">
            <p class="alar-kicker">Who we are</p>
            <h2>A small dispatch desk with a careful fleet.</h2>
            <p>Alar Chauffeur Service is based in Edison, New Jersey. For more than three years we have moved guests between airports, offices, and celebrations with late-model sedans, SUVs, and larger vehicles when the group needs them.</p>
            <p>The work is simple to describe and strict to do: the car is clean, the chauffeur is on time, and someone at dispatch can change the plan if a flight slips.</p>
            <p>Most of the week is airport work. JFK, LaGuardia, and Newark are the routes the desk knows by terminal, not by a pin on a map. Corporate days sit beside that: a sedan or SUV held between buildings while a meeting runs long. Weddings, proms, and stadium nights use the larger vehicles, and the same person who took the booking is the person who can move the pickup if the ceremony or the game slips.</p>
            <p>We do not sell a national menu of cities we do not drive. The service areas on this site are the places dispatch actually covers: New Jersey and New York first, then California, Nevada, and Washington. If a trip starts in Edison and ends in Philadelphia or Washington, DC, that is a private car with one chauffeur, not a connection. Ask for the vehicle that fits the headcount, and we will confirm the rate before the car is assigned.</p>
        </div>
    </div>
</section>
<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-grid-3">
            <article class="alar-note"><h3>2000+ passengers</h3><p>Airport, corporate, and event trips already completed.</p></article>
            <article class="alar-note"><h3>50+ vehicles</h3><p>Sedans, SUVs, sprinters, limousines, and coaches.</p></article>
            <article class="alar-note"><h3>10+ cities</h3><p>New Jersey and New York first, plus California, Nevada, and Washington.</p></article>
        </div>
        <div class="alar-faq" style="margin-top:2rem;">
            <h2>Questions</h2>
            <details open><summary>Where are you based?</summary><p>10 Fairmount Ave, Edison, NJ. Dispatch covers the Tri-State and the cities listed in our service areas.</p></details>
            <details><summary>Are chauffeurs professional drivers?</summary><p>Yes. Drivers are screened and expected to be punctual, quiet, and familiar with airport and city routes.</p></details>
        </div>
    </div>
</section>
<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <h2>What Alar actually does</h2>
        <p>Alar Chauffeur Service is a private car company, not a rideshare dispatch and not a national franchise with a city page for every zip code. The desk is in Edison, New Jersey. The work is airport transfers, corporate days, weddings, and the events that need a known vehicle. For more than three years that has meant sedans, SUVs, Sprinters, limousines, and coaches, assigned from the passenger count instead of from a default black car.</p>
        <p>If you are comparing companies, ignore the adjective “luxury” until you know three facts: who answers when a flight is late, which vehicle is actually coming, and whether the rate is confirmed before the chauffeur leaves. Those are the questions this page is for. The service menu itself lives on <a href="{{ route('our-services') }}">our services</a>, and the cars are listed with capacities on <a href="{{ route('our-fleet') }}">the fleet page</a>.</p>
        <h2>Where the cars go</h2>
        <p>New Jersey is home. Newark, Jersey City, Hoboken, Princeton, and the towns along the turnpike are ordinary reservations, which is why <a href="{{ route('service-area.new-jersey') }}">New Jersey car service</a> is the page to read if your address is on this side of the river. New York is the other half of the week: Manhattan hotels, Brooklyn and Queens neighborhoods, and airport runs to JFK and LaGuardia. That map is <a href="{{ route('service-area.new-york') }}">New York car service</a>. California, Nevada, and Washington are served as named markets, not as a claim that every county in those states has a standing car. If your trip is not in one of those places, ask before you assume.</p>
        <p>Airport work is the largest share. John F. Kennedy, LaGuardia, and Newark Liberty are planned terminal by terminal. Flight numbers go on the reservation so a delay moves the pickup. The full explanation is <a href="{{ route('services.airport-transportation') }}">airport car service</a>. Meet and greet, curbside, child seats, and extra bags are decided when you book, not in the arrivals hall.</p>
        <h2>How a reservation is handled</h2>
        <p>You send the date, both addresses, the time you need to arrive, the number of passengers, and the bags. If there is a flight, you send the airline and the flight number. Dispatch replies with a vehicle and a rate. You can do that on the <a href="{{ route('book-online') }}">booking page</a> or through the contact form if the itinerary is easier to write out. Nothing is dispatched on a guess. A sedan is not sent for six people because it was the first car in the list.</p>
        <p>Changes are part of the job. A meeting runs long, a ceremony starts late, an inbound lands early. The useful habit is to update the reservation instead of negotiating with a driver who was never told. Hourly bookings exist so the same chauffeur can wait between stops. One-way transfers exist when the trip really is one ride. Mixing them up produces a quote that feels wrong because it describes a different day than the one you are having.</p>
        <h2>What we will not pretend</h2>
        <p>We will not invent a twenty-year history. The company has been doing this work for more than three years, with more than two thousand passengers and a fleet of more than fifty vehicles across more than ten cities. We will not publish a fare on a blog and call it your price. Tolls, time of day, vehicle, and meet and greet change the rate. We will not copy another company’s city list. If a page on this site names a town, it is because we will quote that town.</p>
        <p>Chauffeurs are expected to be quiet, on time, and familiar with the route. The car is inspected before it is assigned and detailed the day of the trip. That is the standard. It is also the thing to ask any company you are comparing: what happens at 5 a.m. when the flight moves, and who picks up the phone.</p>
        <h2>Questions about the company</h2>
        <div class="alar-faq">
            <details open><summary>Are you a rideshare?</summary><p>No. Every ride is a reserved vehicle with a chauffeur and a rate confirmed before dispatch.</p></details>
            <details><summary>Do you only serve New Jersey?</summary><p>New Jersey and New York are the core. California, Nevada, and Washington are listed separately because those are the other markets we cover.</p></details>
            <details><summary>Can I book a wedding and the guests’ airport rides together?</summary><p>Yes. Keep the wedding timeline and the airport transfers as related reservations so one does not steal the car from the other.</p></details>
            <details><summary>Where do I start if I only know the airport?</summary><p>Read the airport car service page, then send the terminal, the flight, and the address.</p></details>
        </div>
        <h2>A typical airport morning</h2>
        <p>A traveler leaving Edison for Newark at 5 a.m. is the ordinary job, not an exception. The reservation names the terminal, the airline, and whether the chauffeur waits at baggage claim or at the curb. If the flight moves, the pickup moves with it. The same desk handles a Midtown pickup for JFK later the same day, which is a longer drive and a different terminal map. Treating those as one “airport run” is how a quote misses the point. Send each trip as its own reservation when the passengers and the times are different.</p>
        <p>Corporate work looks quieter and is stricter about the clock. An assistant books a sedan between two offices and a lunch. The chauffeur waits. If the last meeting ends at a hotel near LaGuardia, that last leg is written into the same day so the car is not released early. Wedding mornings are the opposite problem: too many people and one timeline. The couple, the parents, and the guests flying in the night before should not share one vehicle by default. Related reservations keep the portrait car free.</p>
        <p>If you want the company in one sentence, it is this: Alar confirms the vehicle and the rate, then a chauffeur shows up for that trip. The rest of the site is the detail behind that sentence, split by service and by city so you can read the page that matches the question you actually have.</p>
    </div>
</section>
@endsection

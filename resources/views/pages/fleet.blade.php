@extends('layouts.app')
@section('meta_title', 'Our Luxury Fleet | Sedans, SUVs & Limos | Alar')
@section('meta_description', 'Sedans, SUVs, Sprinters, stretch limousines, party buses, and coaches from Alar Chauffeur Service.')
@section('og_image', asset('assets/img/pages/fleet.png'))

@section('content')
@include('components.page-banner', ['image' => asset('assets/img/pages/fleet.png'), 'kicker' => 'Fleet', 'title' => 'The right cabin for the headcount', 'crumb' => 'Fleet'])
@include('components.ticker')
<section class="alar-section">
    <div class="alar-wrap alar-prose" style="margin-bottom:2rem;">
        <p>The fleet is twelve vehicle types, matched to the headcount. A Cadillac CT5, Rolls-Royce Ghost, or Mercedes-Benz S550 seats up to four passengers with three to four bags. A Cadillac Escalade seats up to seven and carries more luggage. Chrysler 300 and Lincoln MKT stretches seat up to ten. An Escalade limo seats up to eighteen. A Mercedes Sprinter seats up to fourteen, and a Sprinter limo seats up to twelve. Mini buses and charter buses cover 25, 44, and 55 passengers.</p>
        <p>Each vehicle is inspected before it is assigned and detailed the day of the trip. When you book, name the passenger count and the bags. Dispatch will not put six people and golf clubs into a sedan because that was the default car. If the plan changes, the same desk can move you into a larger vehicle while the reservation is still open.</p>
    </div>
</section>
<section class="alar-section">
    <div class="alar-wrap alar-grid-3">
        @foreach([
            ['Cadillac CT5', 'Up to 4 passengers · 3 to 4 bags', 'cadillac-ct5'],
            ['Rolls Royce Ghost', 'Up to 4 passengers · 3 to 4 bags', 'rolls-ghost'],
            ['Mercedes-Benz S550', 'Up to 4 passengers · 3 to 4 bags', 'mercedes-s550'],
            ['Cadillac Escalade', 'Up to 7 passengers · 5 to 7 bags', 'cadillac-escalade'],
            ['Chrysler 300 Stretch', 'Up to 10 passengers', 'chrysler-300-limo-stretch'],
            ['Lincoln MKT Stretch', 'Up to 10 passengers', 'lincoln-mkt-stretch'],
            ['Escalade Limo', 'Up to 18 passengers', 'escalade-limo'],
            ['Mercedes Sprinter', 'Up to 14 passengers', 'mercedes-sprinter'],
            ['Mercedes Sprinter Limo', 'Up to 12 passengers', 'sprinter-limo'],
            ['Mini Bus (25)', 'Up to 25 passengers', 'mini-bus-25'],
            ['Bus (44)', 'Up to 44 passengers', 'bus-44'],
            ['Bus (55)', 'Up to 55 passengers', 'bus-55'],
        ] as [$name, $cap, $file])
            <article class="alar-card">
                <img src="{{ asset('assets/img/fleet/'.$file.'.webp') }}" alt="{{ $name }}">
                <div class="alar-card-body">
                    <h3>{{ $name }}</h3>
                    <p>{{ $cap }}</p>
                    <a class="alar-btn alar-btn-gold alar-btn-sm" href="{{ route('book-online') }}">Book Online</a>
                </div>
            </article>
        @endforeach
    </div>
</section>
<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <h2>How to pick from the list</h2>
        <p>The fleet page is a capacity chart. Start with people, then bags, then the occasion. A Cadillac CT5, Rolls-Royce Ghost, or Mercedes-Benz S550 is a sedan for up to four passengers when luggage is modest. Book one of those for an executive hop or a couple going to dinner. A Cadillac Escalade seats up to seven and carries the luggage a sedan trunk will not. That is the usual upgrade for an <a href="{{ route('services.airport-transportation') }}">airport car service</a> when the group is checking bags.</p>
        <p>A Mercedes Sprinter, up to fourteen passengers, is the first group vehicle. Stretch limousines, the Chrysler 300 and the Lincoln MKT, seat up to ten and are the cars couples ask for on <a href="{{ route('services.wedding-limo') }}">wedding day</a> and parents ask for on <a href="{{ route('services.prom-limo') }}">prom night</a>. An Escalade limo seats up to eighteen. A Sprinter limo seats up to twelve and a party bus is for celebrations where the ride is part of the plan; see <a href="{{ route('services.party-bus') }}">party bus rental</a>. The 25-, 44-, and 55-passenger buses are for teams and full groups under <a href="{{ route('services.group-transportation') }}">group transportation</a>.</p>
        <h2>What “up to” means</h2>
        <p>Every count on this page is “up to,” and luggage spends that budget. Three adults with three large suitcases are often an SUV, not a sedan, even though the sedan’s passenger number looks fine. Golf bags, garment bags, and a stroller do the same thing. Tell us the bags when you book. We would rather change the vehicle in the quote than at the terminal. Child seats take a seat too. Ask for the seat type before the day of the trip.</p>
        <p>Hourly work and airport work can use the same sedan. The difference is time, not the badge on the grille. If the chauffeur must wait between meetings, book <a href="{{ route('services.hourly-limo') }}">hourly limo service</a> in that sedan or SUV. If the trip is one airport leg, book it as a transfer. The fleet does not change. The reservation type does.</p>
        <h2>Care and assignment</h2>
        <p>Vehicles are inspected before they are assigned and detailed the day of service. A wedding car is prepared before portraits, not after the chauffeur is already in your driveway. Corporate cars are chosen so two executives are not put in a party bus by mistake. If you were promised a specific model and it is in the shop, we say so and offer the closest cabin rather than showing up in something unrelated. You can reserve from the <a href="{{ route('book-online') }}">booking page</a> once you know the headcount. New Jersey and New York addresses are the core; the neighborhood still belongs on the request, which is why <a href="{{ route('service-area.new-jersey') }}">New Jersey</a> and <a href="{{ route('service-area.new-york') }}">New York</a> have their own pages.</p>
        <p>We do not publish a single fare beside each photo. A Sprinter to Newark at noon and a coach to MetLife on a Sunday are not the same job. Passenger count gets you the right picture. The addresses get you the rate.</p>
        <h2>Sedan, SUV, or something larger</h2>
        <p>Most airport reservations that look “luxury” are still a sedan: up to four passengers and three or four bags, with a flight to catch. The Cadillac CT5, Rolls-Royce Ghost, and Mercedes-Benz S550 cover that job. Choose among them for cabin feel, not for a different kind of service. The chauffeur, the flight tracking, and the confirmed rate are the same. If you are comparing black car service in New York or New Jersey with a rideshare, the sedan is the car people mean. Read the comparison if you are still deciding, then book the sedan that matches the bags.</p>
        <p>Move to a Cadillac Escalade when the group is larger than four, or when the luggage would force a second car. It seats up to seven. Families landing at Newark, JFK, or LaGuardia hit this line constantly. Two adults can share a sedan. Two adults, two children, and four checked bags usually cannot. An SUV is also the calmer car for a corporate day when the client wants a higher step-in and room for a garment bag. It is still an airport or hourly reservation. The photo changes. The way you book does not.</p>
        <p>Sprinter vans start when you would otherwise order three SUVs. Up to fourteen passengers on one reservation is simpler for a wedding party, a roadshow, or a team that must arrive together. Stretch limousines are a different request: the ride is visible, the timing is a ceremony or a prom, and the Chrysler 300 or Lincoln MKT stretch seats up to ten before luggage. Do not put a stretch on a 6 a.m. flight unless you truly want that car at the terminal. A Sprinter limo, a party bus, or a 25-, 44-, or 55-passenger bus is for the nights and the headcounts those names imply. MetLife, a concert, or a cruise morning with a full group belongs on the matching service page so the quote includes waiting time and the venue rules.</p>
        <h2>Questions the fleet page should settle</h2>
        <p>Will this car take my bags? Count suitcases, not vibes. Will everyone have a seat belt? Use the passenger number as a ceiling, and lower it if you need a child seat or a cooler. Can I request a model by name? Yes, and we will say if that model is unavailable and what we can send instead. Is a limousine allowed at my hotel or venue? Ask the venue, then tell us the door they approved. We stage where the building allows a car to wait.</p>
        <p>If you are booking from California, Nevada, or Washington, the same capacity rules apply even though the local roads differ. Name the city on the request. A sedan for LAX is still a sedan. A coach for a Las Vegas group is still a coach. The fleet list is how you pick the picture. The service area page is how you confirm we cover the address.</p>
    </div>
</section>
<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>How the cars are kept</h2>
        <div class="alar-grid-3">
            <article class="alar-note"><h3>Inspected</h3><p>Each vehicle is checked before it is assigned to a trip.</p></article>
            <article class="alar-note"><h3>Detailed</h3><p>Interiors are cleaned the day of service.</p></article>
            <article class="alar-note"><h3>Matched</h3><p>We suggest a car from the passenger count and the luggage, not from a default sedan.</p></article>
        </div>
    </div>
</section>
@endsection

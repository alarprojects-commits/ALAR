@extends('layouts.app')
@section('meta_title', 'Our Chauffeur Services | Alar Chauffeur Service NJ')
@section('meta_description', 'Airport, corporate, wedding, hourly, and group chauffeur services from Alar Chauffeur Service.')
@section('og_image', asset('assets/img/pages/services.png'))

@section('content')
@include('components.page-banner', ['image' => asset('assets/img/pages/services.png'), 'kicker' => 'Services', 'title' => 'Rides for the day you actually have', 'crumb' => 'Services'])
@include('components.ticker')
<section class="alar-section">
    <div class="alar-wrap alar-prose" style="margin-bottom:2rem;">
        <p>Alar Chauffeur Service books private cars for airport transfers, office days, weddings, and nights that should not depend on a rideshare queue. Every service below is a reserved vehicle with a chauffeur and a rate confirmed before departure. Sedans and SUVs cover one to six passengers. Sprinters, party buses, and coaches cover the larger groups. Flight tracking is standard on airport work, and hourly service keeps the same car when the day has more than one stop.</p>
        <p>Tell dispatch the date, the addresses, and how many people are traveling. We match the cabin to the luggage as well as the headcount, then send the vehicle name and the price. You can start on the booking page or send the same details through the contact form. The desk is open day and night if a flight or a venue time changes after the car is already assigned.</p>
    </div>
</section>
<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head">
            <div>
                <p class="alar-kicker">Menu</p>
                <h2>Every service we book</h2>
            </div>
        </div>
        <div class="alar-grid-3">
        @foreach([
            ['Airport transportation', 'Travel', 'JFK, LGA, and EWR with flight tracking.', 'services.airport-transportation', 'assets/img/home/airport.png'],
            ['Corporate transportation', 'Business', 'Meetings, roadshows, and guest pickups.', 'services.corporate-transportation', 'assets/img/home/corporate.png'],
            ['Wedding limo', 'Events', 'Ceremony and reception transfers.', 'services.wedding-limo', 'assets/img/home/wedding.png'],
            ['Prom limo', 'Events', 'A supervised night out with a set return time.', 'services.prom-limo', 'assets/img/services/prom-limo/photo.png'],
            ['Sporting events', 'Events', 'Stadium arrivals without the parking lot.', 'services.sporting-events', 'assets/img/services/sporting-events/photo.png'],
            ['Group transportation', 'Groups', 'Sprinters and coaches for teams and families.', 'services.group-transportation', 'assets/img/services/group-transportation/photo.png'],
            ['Concerts and festivals', 'Events', 'Door-to-venue service for the whole group.', 'services.concert-festival', 'assets/img/services/concert-festival/photo.png'],
            ['Party bus', 'Groups', 'A larger cabin for celebrations.', 'services.party-bus', 'assets/img/services/party-bus/photo.png'],
            ['Cruise port transfers', 'Travel', 'Ship terminals with luggage room.', 'services.cruise-port-transfers', 'assets/img/services/cruise-port-transfers/photo.png'],
            ['Chauffeured service', 'Private', 'Point-to-point and long-distance private travel.', 'services.chauffeured-service', 'assets/img/services/chauffeur-service/photo.png'],
            ['Hourly limo', 'Private', 'Keep the car between stops.', 'services.hourly-limo', 'assets/img/services/hourly-limo/photo.png'],
        ] as [$name, $tag, $line, $route, $img])
            <article class="alar-card">
                <img src="{{ asset($img) }}" alt="{{ $name }}">
                <div class="alar-card-body">
                    <span class="alar-tag">{{ $tag }}</span>
                    <h3>{{ $name }}</h3>
                    <p>{{ $line }}</p>
                    <div class="alar-actions">
                        <a class="alar-btn alar-btn-gold alar-btn-sm" href="{{ route('book-online') }}">Book Online</a>
                        <a class="alar-btn alar-btn-line-dark alar-btn-sm" href="{{ route($route) }}">Details</a>
                    </div>
                </div>
            </article>
        @endforeach
        </div>
    </div>
</section>
<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <h2>Which service matches the trip</h2>
        <p>Choose by the shape of the day, not by the fanciest vehicle name. A flight with a terminal and a landing time is <a href="{{ route('services.airport-transportation') }}">airport car service</a> for JFK, LaGuardia, or Newark. A client who must be met inside the terminal, then taken to meetings, is <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a>. A date with a ceremony and a reception is <a href="{{ route('services.wedding-limo') }}">wedding limo service</a>. Several stops with the same car waiting is <a href="{{ route('services.hourly-limo') }}">hourly limo service</a>. A point-to-point ride, including a long one toward Philadelphia or Washington, is <a href="{{ route('services.chauffeured-service') }}">chauffeur service</a>.</p>
        <p>Group size changes the vehicle more than the occasion does. Two executives and carry-ons are a sedan. Six people and checked bags are an SUV from <a href="{{ route('our-fleet') }}">the fleet</a>. A team that should arrive together is a Sprinter or a coach, which is <a href="{{ route('services.group-transportation') }}">group transportation</a>. A celebration that is partly the ride itself is a <a href="{{ route('services.party-bus') }}">party bus</a>. Prom night, with a parent’s phone number and a fixed return, is <a href="{{ route('services.prom-limo') }}">prom limo service</a>. Stadiums, especially MetLife, are <a href="{{ route('services.sporting-events') }}">sporting event transportation</a>. Shows are <a href="{{ route('services.concert-festival') }}">concert and festival transfers</a>. A ship morning with luggage is <a href="{{ route('services.cruise-port-transfers') }}">cruise port transportation</a>.</p>
        <h2>What to send so the quote is real</h2>
        <p>Every service on this page is priced from facts: date, both addresses, passenger count, bags, and whether a flight or a venue time is involved. A quote without those is a guess. Tolls and airport fees should be explained with the rate. Meet and greet is something you request, not something you discover you needed after you have walked the terminal. Child seats are the same. If the address is in New York, the neighborhood matters; read <a href="{{ route('service-area.new-york') }}">New York car service</a> before you assume Midtown pricing covers Jamaica or the Hamptons. New Jersey towns are on the <a href="{{ route('service-area.new-jersey') }}">New Jersey page</a>.</p>
        <p>You can start on the booking page once you know the addresses, or write the itinerary in the contact form if there are many stops. Dispatch answers with the vehicle name and the rate before a chauffeur is assigned. If the day has several stops and the car must wait, start with <a href="{{ route('blog.hourly-chauffeur-service-new-york') }}">hourly chauffeur service in New York</a>.</p>
        <h2>How the services overlap</h2>
        <p>A wedding guest flying into Newark the night before should not be stuffed into the couple’s limousine the next morning. Book the guest as an airport transfer and the couple as a wedding limo. A roadshow that ends at JFK is corporate hourly time plus an airport drop, one reservation with both parts written down. A concert that becomes a second stop is hourly or a party bus, not a one-way that abandons the group at the venue. Saying which service you think you need is helpful. Describing the day is better. We will tell you if the label should change so the car and the hours match.</p>
        <p>Nothing here is a published fare. The same sedan costs a different amount at 5 a.m. for Newark than it does for a Saturday evening in Manhattan. Send the trip. The reply is the price.</p>
        <h2>Airport, hourly, and point to point</h2>
        <p>If you searched for car service to JFK, LaGuardia car service, or Newark airport car service, you want a transfer with a flight number. That is airport transportation even when the rest of the week is meetings. If you searched for hourly car service in New York or a chauffeur by the hour in New Jersey, you want the car to wait. Put the stops in order and the time you need to be at the last one. If you searched for a private car to Philadelphia, Virginia, or Washington, DC, you want point-to-point chauffeur service with both addresses and an arrival time, not an airport code.</p>
        <p>Wedding, prom, party bus, concert, stadium, and cruise searches are event reservations. The keyword tells us the occasion. The headcount tells us the vehicle. A prom with eight students is not a coach, and a coach is not a prom limousine. A cruise morning fails when the ship time is missing. A MetLife night fails when the lot and the end time are missing. Write those down before you ask which black car is “best.” The best car is the one that seats the group and is allowed at the door.</p>
        <p>You can reserve once those facts are known. If the day has two services, say so in one note so dispatch does not treat them as strangers. A guest’s Newark arrival and the couple’s limousine the next afternoon should reference each other. That is the whole method: match the search to the service, match the people to the vehicle, and confirm the rate before anyone is on the way.</p>
    </div>
</section>
<section class="alar-section alar-paper">
    <div class="alar-wrap alar-faq">
        <h2>Questions clients ask first</h2>
        <details open><summary>Can I book online?</summary><p>Yes. The booking page opens our reservation desk, or send the trip details through the contact form.</p></details>
        <details><summary>Do you handle groups?</summary><p>Sprinters, party buses, and coaches cover groups from about 10 guests up to a full coach.</p></details>
    </div>
</section>
@include('components.blog-insights')
@endsection

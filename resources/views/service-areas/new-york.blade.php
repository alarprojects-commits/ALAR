@extends('layouts.app')
@section('meta_title', 'New York Car Service & Airport Limo | JFK, LGA, EWR | Alar')
@section('meta_description', 'New York car service for JFK, LaGuardia, Newark, Manhattan, Brooklyn, and the surrounding counties. Flight-tracked chauffeur pickups.')
@section('og_image', asset('assets/img/service-areas/new-york.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/service-areas/new-york.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'New York', 'title' => 'New York car service and airport limo', 'crumbs' => [['label' => 'Service Areas', 'url' => route('service-areas.index')], ['label' => 'New York']]])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/service-areas/new-york-scene.png') }}" alt="Black SUV at a New York airport terminal at dusk">
        <div class="alar-prose">
            <p class="alar-kicker">New York</p>
            <h2>New York car service, stated plainly</h2>
            <p>People searching for New York car service usually want one of three things: a ride to JFK, LaGuardia, or Newark; a black car for a meeting in Manhattan; or a chauffeur for a night that should not depend on a street hail. Alar Chauffeur Service covers those jobs from our New Jersey desk, with the borough or the town named on the reservation so the quote matches the real drive.</p>
            <p>If the trip starts or ends at an airport, begin with <a href="{{ route('services.airport-transportation') }}">airport car service</a>. If it is a multi-stop office day, use <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a>. You can reserve on the <a href="{{ route('book-online') }}">booking page</a> once the addresses are known.</p>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Pick a New York route</h2></div></div>
        <p class="alar-guide-lead">Tap a topic on the left. Only that guide opens on the right, so a long page becomes a short decision.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="New York topics">
                <button type="button" class="is-on" data-guide="ny-airports"><span class="alar-guide-num">01</span><span class="alar-guide-label">Airports</span><span class="alar-guide-hint">JFK, LGA, EWR</span></button>
                <button type="button" data-guide="ny-manhattan"><span class="alar-guide-num">02</span><span class="alar-guide-label">Manhattan</span><span class="alar-guide-hint">Hotels and offices</span></button>
                <button type="button" data-guide="ny-boroughs"><span class="alar-guide-num">03</span><span class="alar-guide-label">Boroughs</span><span class="alar-guide-hint">Brooklyn to Staten Island</span></button>
                <button type="button" data-guide="ny-suburbs"><span class="alar-guide-num">04</span><span class="alar-guide-label">Suburbs</span><span class="alar-guide-hint">Westchester and L.I.</span></button>
                <button type="button" data-guide="ny-city"><span class="alar-guide-num">05</span><span class="alar-guide-label">City to city</span><span class="alar-guide-hint">PA, VA, DC</span></button>
                <button type="button" data-guide="ny-events"><span class="alar-guide-num">06</span><span class="alar-guide-label">Events</span><span class="alar-guide-hint">Weddings and nights out</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="ny-airports" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ny-airports.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Airports: JFK, LGA, EWR, HPN, and TEB</h3>
                        <p>John F. Kennedy is the long airport. Terminals 1 through 8 are far enough apart that â€œJFKâ€ is not a meeting point. We ask for the airline and the terminal on every JFK limo pickup and every departure. LaGuardia is closer to Manhattan and still slow at the throat of the airport. Name Terminal A, B, or C. Newark Liberty is often the better airport when the address is in New Jersey, and it is a full trip when the address is in the city. Westchester County Airport in White Plains is a smaller commercial and private field. Teterboro is private aviation: send the FBO, not just the airport code.</p>
                        <p>Flight tracking is part of an arrival. The chauffeur follows the live time, including delays. Meet and greet means a name board inside. Curbside means the door we agreed. Read <a href="{{ route('blog.airport-car-service-new-york') }}">airport car service in New York</a> for JFK and LaGuardia, and <a href="{{ route('blog.newark-airport-car-service') }}">Newark airport car service</a> when the ticket says EWR.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('airports.jfk') }}">JFK guide</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('airports.lga') }}">LGA guide</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('airports.index') }}">All airports</a>
                        </div>
                    </div>
                </article>
                <article id="ny-manhattan" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ny-manhattan.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Manhattan</h3>
                        <p>Manhattan car service is door to door, which only helps if the door is the right one. Midtown hotels, Downtown, the Upper East Side, the Upper West Side, SoHo, Hudson Yards, and the Financial District do not share one pickup pattern. Some buildings require the car on a side street. Some only allow a stop in a driveway for a few minutes. Put the hotel name or the cross streets on the reservation, and add a phone number for the passenger, not only the assistant who booked.</p>
                        <p>A sedan fits up to four passengers with carry-ons. A Cadillac Escalade, up to seven passengers, is the Manhattan SUV when there are more people or more bags. For a client who will sit in meetings all afternoon, hourly service keeps that car between buildings instead of releasing it after the first drop.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.hourly-limo') }}">Hourly limo</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="ny-boroughs" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ny-boroughs.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Brooklyn, Queens, the Bronx, and Staten Island</h3>
                        <p>Brooklyn pickups we see most often include Brooklyn Heights, DUMBO, Williamsburg, and Park Slope. Queens includes Long Island City, Astoria, Flushing, and Jamaica, the last of which is the practical neighborhood for many JFK departures. The Bronx and Staten Island are booked when you name the address. None of these is â€œclose enoughâ€ to price as Midtown. A Williamsburg Saturday night and a Jamaica 5 a.m. departure are different jobs, and the rate should say so.</p>
                        <p>If you live in Queens and you are comparing a car service with the AirTrain plus a subway, the question is usually luggage and time, not whether transit exists. A chauffeur is the better answer when you have bags, a child, or a flight that will not wait for a transfer at Jamaica.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
                        </div>
                    </div>
                </article>
                <article id="ny-suburbs" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ny-suburbs.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Westchester, Long Island, and the Hudson Valley</h3>
                        <p>Outside the boroughs we cover Westchester towns people name directly: White Plains, Scarsdale, Yonkers, and the rest of the county when the address is specific. Long Island means Nassau and Suffolk, including the Hamptons when that is truly the destination and not a guess. The Hudson Valley side includes Rockland, Orange, Putnam, and Dutchess. Upstate corridors toward Albany are on request, not a promise that a car sits there every day. Say the town when you ask for a quote.</p>
                        <p>Westchester to LaGuardia and Long Island to JFK are classic airport routes. They fail when someone books them like a crosstown ride. Give us the town and the terminal.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('our-fleet') }}">View fleet</a>
                        </div>
                    </div>
                </article>
                <article id="ny-city" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ny-city.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>City to city from New York</h3>
                        <p>Not every New York trip stays in the city. A New Jersey office, a stadium, or a day of meetings still needs both addresses on the reservation. When the car must wait, read <a href="{{ route('blog.hourly-chauffeur-service-new-york') }}">hourly chauffeur service in New York</a>. New Jersey addresses are also covered on the <a href="{{ route('service-area.new-jersey') }}">New Jersey car service</a> page.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.chauffeured-service') }}">Chauffeur service</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="ny-events" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/ny-events.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Events, weddings, and hourly nights</h3>
                        <p>MetLife Stadium and other venues are a New York and New Jersey shared problem: the drop-off is crowded and the ride home is worse if you try to invent it after the game. Book the return with the arrival. Weddings that start in the city and end in Westchester, or the reverse, use our <a href="{{ route('services.wedding-limo') }}">wedding limo service</a>. A night with more than one address is <a href="{{ route('services.hourly-limo') }}">hourly limo service</a>, not three separate curbside negotiations.</p>
                        <p>A 5 a.m. JFK departure from Brooklyn and a midnight pickup in Midtown are both normal reservations, not special favors. The useful detail is the buildingâ€™s overnight rule: some doormen will not hold a car in the driveway, so the chauffeur stages on the avenue and the passenger comes out when we call. Put a working mobile number on the booking.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.wedding-limo') }}">Wedding limo</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to get a New York quote</h2></div></div>
        <div class="alar-steps">
            <article><h3>Name both doors</h3><p>Borough or town, hotel or cross streets, and the terminal if there is a flight.</p></article>
            <article><h3>Send the flight</h3><p>Airline, flight number, passenger count, and bags. Meet and greet is a request, not a surprise.</p></article>
            <article><h3>Confirm the car</h3><p>We answer with the vehicle and the rate. Tolls and airport fees are explained with the quote. It is not a meter.</p></article>
        </div>
        <div class="alar-prose" style="margin-top:1.6rem;">
            <p>Send the date and time, the New York address with a borough or town, the second address, the airport and terminal if there is one, the flight number for a pickup, the passenger count, and the bags. If the day is several stops rather than one airport leg, read <a href="{{ route('blog.hourly-chauffeur-service-new-york') }}">hourly chauffeur service in New York</a>.</p>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about New York</h2>
        <div class="alar-faq">
            <details open><summary>Which New York airports do you serve?</summary><p>JFK, LaGuardia, Newark, Westchester County, and Teterboro for private aviation.</p></details>
            <details><summary>Do you cover all five boroughs?</summary><p>Yes, when the address is specific. Manhattan, Brooklyn, Queens, the Bronx, and Staten Island are booked by neighborhood, not as one flat zone.</p></details>
            <details><summary>Can you meet us inside the terminal?</summary><p>Yes. Ask for meet and greet and put the flight number on the reservation.</p></details>
            <details><summary>Is Long Island included?</summary><p>Nassau, Suffolk, and Hamptons trips are quoted from the town. They are not priced as a Manhattan crosstown ride.</p></details>
            <details><summary>How do we book?</summary><p>Use the booking page or the contact form with both addresses and the passenger count.</p></details>
        </div>
    </div>
</section>
@include('components.related-services')
@endsection

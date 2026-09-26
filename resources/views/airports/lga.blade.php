@extends('layouts.app')
@section('meta_title', 'LaGuardia Car Service & LGA Limo NYC | Terminal Pickups | Alar')
@section('meta_description', 'LaGuardia car service with Terminal A, B, or C on every booking. Flight-tracked LGA pickups for Manhattan, Queens, and New Jersey.')
@section('og_image', asset('assets/img/airports/lga/banner.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/airports/lga/banner.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'LGA', 'title' => 'LaGuardia car service and LGA limo', 'crumb' => 'LaGuardia'])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/airports/lga/photo.png') }}" alt="Chauffeur sedan at LaGuardia Airport">
        <div class="alar-prose">
            <p class="alar-kicker">LGA</p>
            <div class="alar-airport-meta">
                <span class="alar-airport-chip"><strong>LGA</strong></span>
                <span class="alar-airport-chip">New York</span>
                <span class="alar-airport-chip">Commercial</span>
            </div>
            <h2>LaGuardia car service, closer—but not simpler</h2>
            <p>LaGuardia sits closer to Manhattan than JFK, which tempts people to treat it like a quick hop. In practice, the rebuilt terminals, the Grand Central Parkway approach, and the throat of the airport still punish late departures and confuse first-time arrivals. Alar Chauffeur Service books LaGuardia with Terminal A, B, or C named on every trip, tracks arrivals when the flight number is on the reservation, and plans leave times backward from your address—not from a generic “LGA” pin on a map.</p>
            <p>Start with <a href="{{ route('services.airport-transportation') }}">airport transportation</a> or reserve on the <a href="{{ route('book-online') }}">booking page</a>. Compare LGA with JFK and Newark in our <a href="{{ route('blog.new-york-car-service-jfk-lga-ewr-tri-state') }}">Tri-State airport guide</a>, and see borough context on <a href="{{ route('service-area.new-york') }}">New York car service</a>.</p>
            <div class="alar-actions">
                <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
            </div>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Plan your LaGuardia transfer</h2></div></div>
        <p class="alar-guide-lead">Choose arrivals, departures, meet points, vehicles, or what to send for a quote. One panel at a time on the right.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="LaGuardia topics">
                <button type="button" class="is-on" data-guide="lga-arrivals"><span class="alar-guide-num">01</span><span class="alar-guide-label">Arrivals</span><span class="alar-guide-hint">Terminal A, B, C</span></button>
                <button type="button" data-guide="lga-departures"><span class="alar-guide-num">02</span><span class="alar-guide-label">Departures</span><span class="alar-guide-hint">Congestion & leave time</span></button>
                <button type="button" data-guide="lga-meet"><span class="alar-guide-num">03</span><span class="alar-guide-label">Meet points</span><span class="alar-guide-hint">Inside or curbside</span></button>
                <button type="button" data-guide="lga-vehicles"><span class="alar-guide-num">04</span><span class="alar-guide-label">Vehicles</span><span class="alar-guide-hint">Sedan & SUV</span></button>
                <button type="button" data-guide="lga-quote"><span class="alar-guide-num">05</span><span class="alar-guide-label">Quote checklist</span><span class="alar-guide-hint">Booking details</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="lga-arrivals" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/lga/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>LaGuardia arrivals after the terminal rebuild</h3>
                        <p>LaGuardia now runs through Terminals A, B, and C rather than the old letter soup people remember from years ago. Each terminal has its own arrivals hall and curbside rhythm, and they are not interchangeable on a chauffeur trip sheet. Send the airline and terminal—or the flight number so dispatch can confirm—which terminal your flight uses. Flight tracking adjusts the pickup when the plane is early or late, but the driver still needs the correct door.</p>
                        <p>Domestic arrivals are usually faster than international connections that funnel through other airports, but LaGuardia still stacks at the curb during evening banks. A mobile number that reaches the passenger inside the terminal matters more here than a office line that goes to voicemail. Text when you are at baggage or stepping outside so the car can time the approach on the Grand Central Parkway.</p>
                        <p>Manhattan pickups after LGA arrivals are short on mileage and long on traffic sensitivity. Queens neighborhoods—Astoria, Long Island City, Flushing, and Jackson Heights—reverse the direction but face the same parkway bottlenecks. We quote from your exact address, not from “LaGuardia to the city.”</p>
                    </div>
                </article>
                <article id="lga-departures" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/lga/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Departures: congestion at the airport throat</h3>
                        <p>LaGuardia rewards early leave times more than the map distance suggests. The Grand Central Parkway, the approach loops, and terminal frontage can clog when multiple banks depart at once. Midtown and Upper East Side hotels need pickup times that account for East River crossings and local street volume, not only the miles to Queens. An 8 a.m. Tuesday departure and a 4 p.m. Friday departure from the same hotel are different planning jobs.</p>
                        <p>Terminal A, B, and C each have distinct departures levels and signage. Put the terminal on the reservation so the chauffeur drops you at the correct door with time to check bags and clear security. If you are connecting from a meeting, say whether you need a curbside stop or help with luggage at the terminal entrance.</p>
                        <p>Westchester and Long Island passengers sometimes choose LGA when the flight fits; those drives cross borough lines and bridges that change with traffic. Name the town on the booking so the quote matches the corridor you will actually use.</p>
                    </div>
                </article>
                <article id="lga-meet" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/lga/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Meet and greet versus curbside at LGA</h3>
                        <p>Meet and greet at LaGuardia means the chauffeur waits inside the arrivals area with a name board, typically near baggage claim or the exit from the secure zone. It helps when you are new to the airport, traveling with family, or carrying more than you want to haul to the curb. Request it when you book so the driver is assigned to the correct terminal hall.</p>
                        <p>Curbside pickup is the faster handoff when you travel light and can step outside when we call. LaGuardia curbs are actively managed; the car may circle once while you exit. Terminal C and Terminal B do not share the same pickup habits—confirm which level and door on the trip sheet.</p>
                        <p>Corporate visitors often prefer inside meet for consistency. Leisure travelers with strollers sometimes want the same. Either way, the terminal letter must match the flight, not a guess from the airline code alone.</p>
                    </div>
                </article>
                <article id="lga-vehicles" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/lga/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Vehicles for LaGuardia trips</h3>
                        <p>A luxury sedan serves up to four passengers with a typical business luggage load. An SUV is the practical choice for families, winter coats and bags, or three large suitcases that will not fit a sedan trunk cleanly. Sprinter vans cover groups that must stay together for a road show or a wedding party flight.</p>
                        <p>LaGuardia’s proximity to Manhattan does not shrink luggage. List bags on the reservation so we assign the right vehicle before the parkway leg. See <a href="{{ route('our-fleet') }}">our fleet</a> for cabin photos and seating.</p>
                        <p>Repeat LGA travelers on corporate accounts can note vehicle preferences through <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a> so dispatch does not re-ask every week.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('our-fleet') }}">View fleet</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('services.hourly-limo') }}">Hourly limo</a>
                        </div>
                    </div>
                </article>
                <article id="lga-quote" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/lga/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>What to send for an LGA quote</h3>
                        <p>Send date and time, full pickup or drop-off address with borough or town, Terminal A, B, or C (or airline and flight number), passenger count, and bags. For arrivals, include the flight for tracking; for departures, note if you need a conservative buffer for security.</p>
                        <p>Ask for meet and greet if you want inside pickup. Tolls and airport fees are part of the quoted rate—we explain them with the price, not as surprises on the parkway. New Jersey pickups for LGA flights are quoted from your town, whether that is Jersey City, Hoboken, or Middlesex County near our Edison desk.</p>
                        <p>When you are choosing between LGA and JFK for the same airline schedule, read the <a href="{{ route('blog.new-york-car-service-jfk-lga-ewr-tri-state') }}">Tri-State airport guide</a> and send both addresses if you want our opinion on which airport fits the trip.</p>
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
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Corridors</p>
        <h2>Manhattan, Queens, and nearby corridors to LGA</h2>
        <p>Manhattan LaGuardia car service is the route many executives book twice a week. Midtown towers along Sixth and Seventh Avenues often require staging on a side avenue because the hotel driveway cannot hold a black car during rush hour. The Upper East Side and Upper West Side each change which bridge or tunnel pairs best with the Grand Central Parkway once Queens traffic builds. Downtown and the Financial District add East River crossing choices that look short on a map and long in reality at 4 p.m.</p>
        <p>Queens addresses—Long Island City waterfront towers, Astoria neighborhoods, Flushing business districts, and Jackson Heights residential streets—are sometimes closer in distance than Manhattan yet face the same airport throat congestion when you depart. Brooklyn pickups for LGA cross the Robert F. Kennedy or Queensboro depending on live conditions; Williamsburg and Greenpoint departures for early flights need honest leave times, not optimism.</p>
        <p>Westchester passengers occasionally use LGA when the schedule fits better than White Plains. Those trips are quoted from Scarsdale, White Plains, Yonkers, or the specific town—not as a Manhattan crosstown ride with a few extra miles pasted on. New Jersey clients choose LGA when the flight is there; we price from Hudson County or from our Edison base with the crossing you will actually drive.</p>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Timing</p>
        <h2>Leave-time buffers for LaGuardia</h2>
        <p>Because LaGuardia is close, people underestimate the last mile inside the airport. Terminal frontage, security lines, and simultaneous departures can consume more time than the drive from Midtown. We build pickup time from your door and the terminal, then adjust when you tell us about checked bags or peak-hour traffic you already expect.</p>
        <p>Arrival tracking follows your flight, but walk time from gate to curb still varies. Send a text when you are ready so the chauffeur does not burn minutes on a no-standing curb while you are still collecting luggage.</p>
        <p>Weather and construction on the Grand Central Parkway are ordinary variables, not rare events. If you cannot miss a boarding call, say so when you book and we will recommend a leave time that respects both the parkway and the terminal hall.</p>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Pickup style</p>
        <h2>Meet-and-greet versus curb at a compact airport</h2>
        <p>LaGuardia feels smaller than JFK, but terminal-specific meet points still matter. Inside meet reduces stress when you are directing visitors who have never landed in Queens. Curbside works when the passenger can move quickly and the terminal curb is moving quickly too.</p>
        <p>Either style fails if the reservation says only “LaGuardia.” Terminal A, B, and C are the details that keep the driver and passenger in the same place within minutes, not half an hour of phone calls on the parkway.</p>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Before you book</p><h2>LaGuardia booking tips</h2></div></div>
        <ul class="alar-checklist">
            <li>Name Terminal A, B, or C on every LaGuardia pickup and drop-off.</li>
            <li>Send the flight number for tracked arrivals and realistic staging.</li>
            <li>Include a passenger mobile number that works inside the terminal.</li>
            <li>Request meet and greet when you want an inside name-board pickup.</li>
            <li>List luggage separately so sedan versus SUV is decided before dispatch.</li>
            <li>For Manhattan hotels, specify the property or cross streets for staging.</li>
            <li>Compare LGA with JFK and EWR when the airline serves more than one field.</li>
        </ul>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to book LaGuardia car service</h2></div></div>
        <div class="alar-steps">
            <article><h3>Name both doors</h3><p>Hotel, Queens neighborhood, or LGA terminal—not only the airport code. Borough and town names belong on the quote.</p></article>
            <article><h3>Send the flight</h3><p>Airline, flight number, passengers, and bags. Meet and greet is noted when you reserve.</p></article>
            <article><h3>Confirm the car</h3><p>We answer with vehicle and rate. Tolls and airport fees are explained upfront—not metered on the parkway.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about LaGuardia</h2>
        <div class="alar-faq">
            <details open><summary>Do you track LGA arrivals?</summary><p>Yes, when the flight number is on the reservation. The chauffeur follows live arrival times, including delays. Tracking pairs with the correct terminal—Terminal A, B, or C—so the car stages at the hall you will actually exit, not at a default curb from an old map.</p></details>
            <details><summary>Which terminal should I book for LaGuardia?</summary><p>Terminal A, B, or C for the airline operating your flight. If you are unsure, send the airline and flight number and dispatch will confirm. The rebuilt airport consolidated operations, but the terminal letter still drives the meet point.</p></details>
            <details><summary>Is LaGuardia always faster than JFK?</summary><p>Often closer to Manhattan, but not always faster door to door when traffic and terminal congestion align badly. Our <a href="{{ route('blog.new-york-car-service-jfk-lga-ewr-tri-state') }}">Tri-State guide</a> compares when each airport fits the same itinerary.</p></details>
            <details><summary>Can you pick up in New Jersey for an LGA flight?</summary><p>Yes. Name the town. Hudson County and Middlesex County pickups are common; the quote reflects the crossing and parkway time, not a Queens flat guess.</p></details>
            <details><summary>How do we book?</summary><p>Use the <a href="{{ route('book-online') }}">booking page</a> or <a href="{{ route('contact-us') }}">contact form</a> with both addresses, terminal or flight details, and passenger count.</p></details>
        </div>
    </div>
</section>

@include('components.related-airports', [
    'heading' => 'Other Tri-State airports we serve',
    'links' => [
        ['route' => 'airports.jfk', 'state' => 'New York', 'code' => 'JFK', 'name' => 'John F. Kennedy', 'blurb' => 'International hub—terminals 1 through 8 named on every trip'],
        ['route' => 'airports.ewr', 'state' => 'New Jersey', 'code' => 'EWR', 'name' => 'Newark Liberty', 'blurb' => 'Often best when your address is in New Jersey'],
        ['route' => 'airports.hpn', 'state' => 'New York', 'code' => 'HPN', 'name' => 'Westchester County', 'blurb' => 'Regional alternative north of the city'],
        ['route' => 'airports.teb', 'state' => 'New Jersey', 'code' => 'TEB', 'name' => 'Teterboro', 'blurb' => 'Private jets—FBO name on the booking'],
    ],
])
@include('components.related-services')
@include('components.cta-band')
@endsection

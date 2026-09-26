@extends('layouts.app')
@section('meta_title', 'Sea-Tac Airport SEA Car Service | Seattle & Bellevue Limo | Alar')
@section('meta_description', 'Seattle-Tacoma SEA car service with flight tracking, bridge-aware timing for Seattle and Bellevue, and terminal pickups in Pacific Northwest rain.')
@section('og_image', asset('assets/img/airports/sea/banner.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/airports/sea/banner.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'SEA', 'title' => 'Sea-Tac airport car service and Seattle limo', 'crumb' => 'Seattle'])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/airports/sea/photo.png') }}" alt="Chauffeur at Seattle-Tacoma International Airport in the rain">
        <div class="alar-prose">
            <p class="alar-kicker">SEA</p>
            <div class="alar-airport-meta">
                <span class="alar-airport-chip"><strong>SEA</strong></span>
                <span class="alar-airport-chip">Washington</span>
                <span class="alar-airport-chip">Commercial</span>
            </div>
            <h2>Seattle-Tacoma International with bridges and rain in the plan</h2>
            <p>Seattle-Tacoma International Airport—Sea-Tac to locals—sits south of downtown Seattle with the city on the other side of water and bridge choke points. Alar Chauffeur Service books SEA car service with the airline and terminal on the reservation, flight tracking when the flight number is included, and drive times that respect I-5, the West Seattle Bridge corridor when open, and the routes toward Bellevue and Kirkland across Lake Washington—not a sunny-day guess that collapses the first time Pacific Northwest rain slows the freeway.</p>
            <p>Washington state context and longer regional notes are on <a href="{{ route('service-area.washington') }}">Washington chauffeur service</a>. Reserve on the <a href="{{ route('book-online') }}">booking page</a>, choose sedans or SUVs on <a href="{{ route('our-fleet') }}">our fleet</a>, or read the airport overview on <a href="{{ route('services.airport-transportation') }}">airport transportation</a>.</p>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Pick a Sea-Tac topic</h2></div></div>
        <p class="alar-guide-lead">Tap a topic on the left. Only that guide opens on the right, so a long page becomes a short decision.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="Sea-Tac SEA topics">
                <button type="button" class="is-on" data-guide="sea-terminal"><span class="alar-guide-num">01</span><span class="alar-guide-label">Terminal</span><span class="alar-guide-hint">Airline &amp; door</span></button>
                <button type="button" data-guide="sea-seattle"><span class="alar-guide-num">02</span><span class="alar-guide-label">Seattle</span><span class="alar-guide-hint">Downtown &amp; neighborhoods</span></button>
                <button type="button" data-guide="sea-bellevue"><span class="alar-guide-num">03</span><span class="alar-guide-label">Bellevue</span><span class="alar-guide-hint">Eastside bridges</span></button>
                <button type="button" data-guide="sea-weather"><span class="alar-guide-num">04</span><span class="alar-guide-label">Rain &amp; buffers</span><span class="alar-guide-hint">Northwest timing</span></button>
                <button type="button" data-guide="sea-book"><span class="alar-guide-num">05</span><span class="alar-guide-label">Booking</span><span class="alar-guide-hint">What to send</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="sea-terminal" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/sea/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Sea-Tac terminals, airlines, and curbside staging</h3>
                        <p>Sea-Tac consolidated much of its passenger experience into a central terminal complex with gates and airlines assigned to specific concourses. Sending only “SEA” still fails the way “LAX” fails without a terminal letter: your chauffeur needs the airline and the concourse or terminal area your ticket uses so the meet happens at the correct arrivals door. Put the flight number on inbound reservations so dispatch follows delays; Pacific Northwest weather diverts and holds flights often enough that a printed ticket time is a starting guess, not a schedule.</p>
                        <p>Meet and greet places the chauffeur inside with a name board when you ask for it. Curbside pickup suits travelers who know the airport and want a short walk in the rain. Either way, the instructions are Sea-Tac specific, not copied from a sunny-climate airport guide.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.airport-transportation') }}">Airport service</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="sea-seattle" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/sea/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Sea-Tac to downtown Seattle and core neighborhoods</h3>
                        <p>Downtown Seattle hotels near Pike Place, the Convention Center, and the waterfront share a label on marketing maps but not the same pickup quirks. Capitol Hill, South Lake Union, and Queen Anne each change the Sea-Tac run by time of day and by whether the chauffeur is threading I-5 north or using surface streets after an event lets out at Climate Pledge Arena. Name the neighborhood and the building on the reservation, and give a mobile number for the passenger when doormen will not hold a car in the rain.</p>
                        <p>Morning departures from downtown to Sea-Tac need buffers that assume freeway spray and merge friction, not only mileage. If the day includes meetings before an outbound flight, <a href="{{ route('services.hourly-limo') }}">hourly limo service</a> keeps one chauffeur between South Lake Union and the terminal instead of two separate fixed transfers.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('service-area.washington') }}">Washington service</a>
                        </div>
                    </div>
                </article>
                <article id="sea-bellevue" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/sea/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Bellevue, Kirkland, and Eastside bridge timing</h3>
                        <p>Bellevue and Kirkland sit across Lake Washington from Seattle proper. Sea-Tac to Bellevue is an Eastside job, not a downtown job with a longer meter. Bridge routes—SR 520 and I-90—shift with accidents, sports traffic, and weather; a chauffeur plans leave times with those choke points in mind. Microsoft campus corridors, downtown Bellevue towers, and Kirkland waterfront offices each deserve the exact address on the booking.</p>
                        <p>Executives who land at Sea-Tac and head straight to Eastside meetings often use <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a> for a week of predictable vehicles. Returning from Bellevue to Sea-Tac for an afternoon departure still needs the airline and terminal on the file, plus rain-aware freeway buffers so you are not standing on the curb watching windshield wipers while the security line grows.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.corporate-transportation') }}">Corporate service</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
                        </div>
                    </div>
                </article>
                <article id="sea-weather" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/sea/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Rain, low visibility, and honest departure buffers</h3>
                        <p>Pacific Northwest rain is not a mood; it is a traffic input. Spray on I-5, slower merges, and cautious drivers extend Sea-Tac departures from Seattle and Bellevue even when the mileage did not change. A reserved car agrees the rate from known addresses before the trip; the leave time still must respect weather you can see from the hotel window.</p>
                        <p>Arrivals benefit from flight tracking for the same reason. Holding patterns and gate changes show up on the board while you are still over Oregon. Comparing a confirmed chauffeur with app-hailed rides? Our <a href="{{ route('blog.black-car-service-nyc-vs-uber-taxi') }}">black car versus Uber and taxi</a> page discusses reliability in dense cities; Sea-Tac adds rain and bridge variables apps rarely price honestly.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.chauffeured-service') }}">Chauffeur service</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('our-fleet') }}">View fleet</a>
                        </div>
                    </div>
                </article>
                <article id="sea-book" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/sea/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>What makes a Sea-Tac quote accurate</h3>
                        <p>Send the date, airline and terminal or concourse area, flight number on arrivals, Seattle or Bellevue address with neighborhood detail, passenger count, and bags. “Sea-Tac to Seattle” is incomplete without the door; “Seattle to Sea-Tac” is incomplete without the terminal your airline uses tonight.</p>
                        <p>We confirm vehicle class and rate before dispatch. National travelers comparing hubs can read our <a href="{{ route('blog.new-york-car-service-jfk-lga-ewr-tri-state') }}">Tri-State airport guide</a> for East Coast terminal habits while keeping Sea-Tac’s bridge and rain logic on this page. West Coast partners include <a href="{{ route('airports.lax') }}">LAX</a> and <a href="{{ route('airports.las') }}">Harry Reid LAS</a> when the same road show continues south.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('airports.index') }}">All airports</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Puget Sound</p><h2>Why Seattle and Bellevue are two different Sea-Tac plans</h2></div></div>
        <div class="alar-prose">
            <p>A guest who says “Seattle” may mean a downtown hotel, a Capitol Hill address, or an Eastside office in Bellevue that never enters the Seattle city limits. Sea-Tac sits south of all of them, and the best route depends on which water crossing the day allows. Bridge buffers are not optional extras—they are the difference between a calm terminal arrival and a sprint through security with wet shoes.</p>
            <p>Sea-Tac’s terminal layout rewards the same discipline as larger hubs: airline, concourse or terminal area, and a meeting plan that accounts for covered walkways and rainy curbside waits. Chauffeurs who know the airport expect passengers to move slower with luggage under drizzle; planning absorbs that humanity instead of treating it as delay.</p>
            <p>Alar schedules Washington trips described on <a href="{{ route('service-area.washington') }}">Washington service</a> when addresses and terminals are confirmed. Cruise passengers, tech delegations, and weekend visitors share one airport but not one drive time. Name your side of the lake and your building so the quote matches Puget Sound geography, not a flat “airport transfer” label imported from another city.</p>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Before you land</p><h2>Sea-Tac reservation checklist</h2></div></div>
        <ul class="alar-checklist">
            <li>Send airline and Sea-Tac terminal or concourse detail—not only the SEA airport code.</li>
            <li>Include flight numbers on arrivals so tracking catches weather delays and gate changes.</li>
            <li>Specify Seattle neighborhood or Bellevue and Eastside address; bridge routes differ materially.</li>
            <li>Plan rain buffers on departures from downtown and Bellevue, not only peak-hour traffic.</li>
            <li>Request meet and greet when passengers want indoor staging; confirm curbside when they prefer speed.</li>
            <li>Book hourly coverage when the day spans Seattle and Bellevue before a single Sea-Tac departure.</li>
        </ul>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to book SEA car service with Alar</h2></div></div>
        <div class="alar-steps">
            <article><h3>Name the terminal</h3><p>Airline and concourse or terminal area at Sea-Tac for your ticket.</p></article>
            <article><h3>Name the city side</h3><p>Seattle neighborhood or Bellevue address with building detail.</p></article>
            <article><h3>Confirm the car</h3><p>We answer with vehicle and rate. Bridge and weather buffers belong in the plan.</p></article>
        </div>
        <div class="alar-prose" style="margin-top:1.6rem;">
            <p>Travelers connecting national itineraries sometimes fly East Coast hubs such as <a href="{{ route('airports.jfk') }}">JFK</a>, <a href="{{ route('airports.lga') }}">LaGuardia</a>, or <a href="{{ route('airports.ewr') }}">Newark EWR</a> before a Sea-Tac leg. Private aviation in the New York area uses <a href="{{ route('airports.teb') }}">Teterboro TEB</a> with FBO names, a different language from commercial Sea-Tac. Each airport page stands alone so assistants do not paste the wrong instructions into a Seattle reservation.</p>
            <p>When your team asks whether a black car is worth it for a rainy Sea-Tac arrival, weigh luggage, bridge timing, and the cost of a missed connection against a confirmed sedan or SUV assigned before you land. Fixed quotes from known addresses remove surge surprises; honest leave times respect rain on I-5 and across Lake Washington. That combination is what Seattle and Bellevue executives expect from <a href="{{ route('services.chauffeured-service') }}">chauffeur service</a> done properly.</p>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about Sea-Tac SEA</h2>
        <div class="alar-faq">
            <details open><summary>Do you track Sea-Tac arrivals?</summary><p>Yes when the flight number is on the reservation. Weather delays are common enough to plan for them.</p></details>
            <details><summary>Do Seattle and Bellevue trips cost the same?</summary><p>Not automatically. Eastside crossings use different bridges and buffers than downtown Seattle.</p></details>
            <details><summary>Should we pad departures for rain?</summary><p>Yes. Pacific Northwest rain slows freeways even when distance stays fixed.</p></details>
            <details><summary>Is meet and greet available?</summary><p>Yes. Request it when you book for indoor staging with a name board.</p></details>
            <details><summary>Which terminal details do you need?</summary><p>Your airline and the Sea-Tac terminal or concourse area on the ticket—not the city alone.</p></details>
            <details><summary>How do we book?</summary><p>Use the booking page or contact form with terminal, flight, address, and passenger count.</p></details>
        </div>
    </div>
</section>

@include('components.related-airports', [
    'heading' => 'Other airports Pacific Northwest travelers use',
    'links' => [
        ['route' => 'airports.lax', 'state' => 'California', 'code' => 'LAX', 'name' => 'Los Angeles International', 'blurb' => 'LAX horseshoe with named terminals.'],
        ['route' => 'airports.las', 'state' => 'Nevada', 'code' => 'LAS', 'name' => 'Harry Reid', 'blurb' => 'Las Vegas terminals and Strip towers.'],
        ['route' => 'airports.jfk', 'state' => 'New York', 'code' => 'JFK', 'name' => 'John F. Kennedy', 'blurb' => 'East Coast long-haul connections.'],
        ['route' => 'airports.hpn', 'state' => 'New York', 'code' => 'HPN', 'name' => 'Westchester County', 'blurb' => 'Regional alternative to big hubs.'],
    ],
])
@include('components.related-services')
@include('components.cta-band')
@endsection

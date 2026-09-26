@extends('layouts.app')
@section('meta_title', 'Westchester Airport Car Service HPN | White Plains Limo | Alar')
@section('meta_description', 'Westchester County Airport car service in White Plains. Quiet HPN pickups for Scarsdale, Rye, Greenwich-bound travelers, and Manhattan when the schedule fits.')
@section('og_image', asset('assets/img/airports/hpn/banner.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/airports/hpn/banner.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'HPN', 'title' => 'Westchester airport car service and HPN limo', 'crumb' => 'Westchester'])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/airports/hpn/photo.png') }}" alt="Chauffeur vehicle at Westchester County Airport White Plains">
        <div class="alar-prose">
            <p class="alar-kicker">HPN</p>
            <div class="alar-airport-meta">
                <span class="alar-airport-chip"><strong>HPN</strong></span>
                <span class="alar-airport-chip">New York</span>
                <span class="alar-airport-chip">Regional</span>
            </div>
            <h2>Westchester County Airport car service, quieter on the ground</h2>
            <p>Westchester County Airport in White Plains is the regional field north of New York City—smaller terminals, lighter curb pressure than JFK or LaGuardia, and a practical choice when your address is already in Westchester or when the airline schedule fits HPN better than fighting Tri-State traffic to Queens. Alar Chauffeur Service books HPN with the airline and terminal area named, tracks arrivals when the flight number is provided, and quotes from Scarsdale, Rye, White Plains, Yonkers, and the rest of the county by town—not as a Manhattan crosstown ride with extra miles guessed in.</p>
            <p>Reserve on the <a href="{{ route('book-online') }}">booking page</a>, see vehicles on <a href="{{ route('our-fleet') }}">our fleet</a>, and read <a href="{{ route('service-area.new-york') }}">New York car service</a> for how HPN fits beside JFK, LGA, and EWR. When you are comparing all three major fields, the <a href="{{ route('blog.new-york-car-service-jfk-lga-ewr-tri-state') }}">Tri-State airport guide</a> still helps—even if HPN is the quiet fourth option in the conversation.</p>
            <div class="alar-actions">
                <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
            </div>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Plan your Westchester airport transfer</h2></div></div>
        <p class="alar-guide-lead">Tap arrivals, departures, meet points, vehicles, or the quote checklist. One topic opens at a time on the right.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="Westchester airport topics">
                <button type="button" class="is-on" data-guide="hpn-arrivals"><span class="alar-guide-num">01</span><span class="alar-guide-label">Arrivals</span><span class="alar-guide-hint">Regional & calm curb</span></button>
                <button type="button" data-guide="hpn-departures"><span class="alar-guide-num">02</span><span class="alar-guide-label">Departures</span><span class="alar-guide-hint">Parkways & I-287</span></button>
                <button type="button" data-guide="hpn-meet"><span class="alar-guide-num">03</span><span class="alar-guide-label">Meet points</span><span class="alar-guide-hint">Inside or outside</span></button>
                <button type="button" data-guide="hpn-vehicles"><span class="alar-guide-num">04</span><span class="alar-guide-label">Vehicles</span><span class="alar-guide-hint">Town car to SUV</span></button>
                <button type="button" data-guide="hpn-quote"><span class="alar-guide-num">05</span><span class="alar-guide-label">Quote checklist</span><span class="alar-guide-hint">Send these details</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="hpn-arrivals" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/hpn/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>HPN arrivals: regional flights, simpler curbs</h3>
                        <p>Westchester County Airport handles commercial regional service and private traffic with a compact airfield feel compared with JFK. Arrivals still need the airline and flight number on the booking so dispatch can track live times and place the chauffeur at the correct terminal curb or meet point. Passengers landing at HPN after a short hop from a hub should send the operating flight, not only the marketing code from a longer itinerary.</p>
                        <p>Walk time from gate to curb is usually shorter than at the major Tri-State airports, but baggage claim and occasional ground stops still vary. A passenger mobile number keeps the handoff smooth when the driver stages on airport roads briefly before pulling to the door.</p>
                        <p>Westchester town pickups—Scarsdale, Rye, Bedford, Greenwich-adjacent addresses on the New York side, White Plains business districts, and Yonkers riverfront towers—are the natural HPN corridors. Manhattan arrivals after HPN cross the city or the Bronx depending on destination; quote the neighborhood honestly because mileage alone misleads.</p>
                    </div>
                </article>
                <article id="hpn-departures" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/hpn/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Departures from Westchester towns and from Manhattan</h3>
                        <p>HPN departures reward passengers who live in the county with shorter drives than LaGuardia or JFK when the flight schedule aligns. Leave time still includes parkway legs on the Hutchinson River Parkway, I-287, or local county roads from northern towns—not just the few miles shown to “White Plains.” Early-morning departures from Scarsdale feel different from rush-hour pickups in Yonkers aimed at the same gate.</p>
                        <p>Manhattan to HPN is a full cross-county trip. Midtown, the Upper East Side, and Downtown each choose different bridge or tunnel combinations before the Westchester parkways begin. We build pickup time from your address and the airline’s check-in cutoff, not from a generic regional-airport rule.</p>
                        <p>When HPN does not show a flight that fits, we will say so plainly rather than pretend a regional schedule exists. Many clients compare HPN with LGA or JFK on the same day; send both options if you want help thinking through drive time versus airline choice.</p>
                    </div>
                </article>
                <article id="hpn-meet" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/hpn/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Meet and greet versus curbside at White Plains</h3>
                        <p>Meet and greet at HPN means the chauffeur waits inside the terminal area with a name board when the airport layout allows for your flight’s arrival hall. It helps corporate visitors, older passengers, and anyone arriving in winter weather who prefers not to search for a curb. Request it on the booking so the driver is assigned to the correct door.</p>
                        <p>Curbside pickup is often faster at a regional airport because the passenger volume is lower than at JFK Terminal 4 on a Sunday night. Still, the car may loop briefly on airport access roads; text when you are outside with luggage so the loop matches your exit.</p>
                        <p>Private aviation connections sometimes mix with commercial arrivals at county fields. If you are connecting between services, tell dispatch so we do not assume a standard commercial curb when you need an FBO elsewhere—TEB and HPN are different bookings even though both serve private wings in the region.</p>
                    </div>
                </article>
                <article id="hpn-vehicles" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/hpn/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Vehicles for Westchester airport trips</h3>
                        <p>A luxury sedan fits typical Westchester business travel: one or two passengers with carry-ons and a modest checked bag. SUVs serve families heading to school breaks, ski weekends with soft bags, or three passengers with oversized luggage. Sprinters cover school groups, wedding parties, and small corporate teams when everyone must stay together from HPN to a venue in the county.</p>
                        <p>Regional flights tempt people to under-state luggage because the plane is small; winter coats and golf clubs still need trunk space. List bags on the reservation. Browse <a href="{{ route('our-fleet') }}">our fleet</a> for photos and seating counts.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('our-fleet') }}">View fleet</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('services.chauffeured-service') }}">Chauffeur service</a>
                        </div>
                    </div>
                </article>
                <article id="hpn-quote" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/hpn/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>What to send for an HPN quote</h3>
                        <p>Send date and time, the Westchester town or Manhattan neighborhood, airline and flight number, passenger count, and bags. For arrivals, flight tracking applies when the number is on the reservation. For departures, note if you need extra time for regional-airline check-in counters during holiday weeks.</p>
                        <p>Ask for meet and greet if you want inside pickup. Tolls and any airport fees are explained with the quote. Trips that continue from HPN to Manhattan or to New Jersey should list every stop so the vehicle size fits the whole itinerary.</p>
                        <p>If you are unsure whether HPN or LaGuardia is the better airport for the same ticket search, send both addresses and flight options—we will quote the drives honestly without inventing airline schedules.</p>
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
        <p class="alar-kicker">Towns</p>
        <h2>Westchester neighborhoods and when HPN wins</h2>
        <p>Scarsdale, Rye, Bronxville, and Harrison passengers often choose HPN when the airline publishes a convenient regional time. The drive from home to White Plains can beat the psychological cost of LaGuardia congestion even when mileage looks similar on paper. Bedford and northern county towns add parkway time that must be in the quote from the first message—not added later when someone realizes I-684 and I-287 matter.</p>
        <p>White Plains itself mixes corporate towers, courthouse traffic, and hotel pickups for visitors who never sleep in the county but fly from its airport. Yonkers and southern Westchester addresses blur toward the Bronx and Manhattan; name the street so dispatch picks the sane route for that hour.</p>
        <p>Connecticut border towns sometimes use HPN when Stamford or Greenwich schedules do not fit. We quote from the address you provide; crossing state lines is ordinary work when the flight is at Westchester County Airport.</p>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Timing</p>
        <h2>Buffers for a regional field</h2>
        <p>HPN feels faster on the ground, but security and check-in still exist. Regional carriers can have strict bag-cutoff times on busy Fridays. Build departure pickups with the same seriousness you would bring to JFK, scaled to your address—not scaled to the airport’s reputation for being “small.”</p>
        <p>Arrival tracking keeps the chauffeur aligned with delays on feeder flights from hubs. Text when you have baggage so curbside time stays short in winter rain or snow.</p>
        <p>Manhattan-to-HPN departures need Hudson or East River crossings plus Westchester parkways; that combination can surprise people who only looked at the county map. Tell us if you must make a single check-in window and we will recommend a leave time.</p>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Pickup style</p>
        <h2>Meet-and-greet versus curb at HPN</h2>
        <p>Inside meet suits visitors who land at White Plains once a year for family events. Curbside suits county residents who know the airport footprint and want the fastest load. Both require the flight on the trip sheet so the driver meets the correct arrival, not a guess from an old note about “terminal B at another airport.”</p>
        <p>Winter weather raises the value of meet and greet when passengers prefer not to wait outside on exposed curbs. Say so when you book and we will confirm whether inside meet is available for that arrival hall on that day.</p>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Luggage</p>
        <h2>Luggage and vehicle choice for county flights</h2>
        <p>Regional jets still carry checked bags. Family ski trips and school-break luggage stacks belong in an SUV even when only four people fly. Corporate road-show bags need the same honesty on the reservation as they would at Newark.</p>
        <p>If the trip continues from HPN to a Manhattan dinner or a Jersey City meeting, list the stops so trunk space works for the whole evening—not only the airport leg.</p>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Before you book</p><h2>Westchester airport booking tips</h2></div></div>
        <ul class="alar-checklist">
            <li>Send airline and flight number for every HPN arrival and departure.</li>
            <li>Name the Westchester town or Manhattan neighborhood on both ends of the trip.</li>
            <li>Request meet and greet when you want an inside name-board pickup.</li>
            <li>List bags honestly—even regional flights fill trunks in winter.</li>
            <li>Compare HPN with LGA or JFK when schedules offer a choice; we quote each drive.</li>
            <li>Include a passenger mobile number that works on the curb at White Plains.</li>
            <li>Ask about tolls and fees with the quote; rates are agreed before the ride.</li>
        </ul>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to book HPN car service</h2></div></div>
        <div class="alar-steps">
            <article><h3>Name both doors</h3><p>Scarsdale, White Plains, Yonkers, or Manhattan cross streets—not only “Westchester Airport.”</p></article>
            <article><h3>Send the flight</h3><p>Airline, flight number, passengers, and bags. Meet and greet is noted when you reserve.</p></article>
            <article><h3>Confirm the car</h3><p>We reply with vehicle and rate. Tolls and airport fees are explained with the quote.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about Westchester County Airport</h2>
        <div class="alar-faq">
            <details open><summary>Do you track HPN arrivals?</summary><p>Yes, when the flight number is on the reservation. Regional delays from hub airports still happen; tracking keeps the chauffeur aligned with your live arrival rather than a printed schedule from yesterday.</p></details>
            <details><summary>Is HPN only for Westchester residents?</summary><p>No. Manhattan and Bronx pickups for HPN are common when the flight fits. The quote reflects the full drive from your address, not only county local miles.</p></details>
            <details><summary>Is meet and greet available at White Plains?</summary><p>Yes on request when you book. Availability follows the terminal layout for your flight; we confirm meet service with the quote.</p></details>
            <details><summary>How does HPN compare with LaGuardia or JFK?</summary><p>HPN is quieter and regional; JFK and LGA carry more international and domestic volume. When airlines serve both options, compare schedule convenience with honest drive time from your town. Our Tri-State articles focus on JFK, LGA, and EWR; HPN is the regional alternative when the ticket matches.</p></details>
            <details><summary>How do we book?</summary><p>Use the <a href="{{ route('book-online') }}">booking page</a> or <a href="{{ route('contact-us') }}">contact form</a> with addresses, flight details, and passenger count.</p></details>
        </div>
    </div>
</section>

@include('components.related-airports', [
    'heading' => 'Major Tri-State airports nearby',
    'links' => [
        ['route' => 'airports.lga', 'state' => 'New York', 'code' => 'LGA', 'name' => 'LaGuardia', 'blurb' => 'More domestic volume—Terminals A, B, C'],
        ['route' => 'airports.jfk', 'state' => 'New York', 'code' => 'JFK', 'name' => 'John F. Kennedy', 'blurb' => 'Long-haul hub with eight terminals'],
        ['route' => 'airports.ewr', 'state' => 'New Jersey', 'code' => 'EWR', 'name' => 'Newark Liberty', 'blurb' => 'Full-service field across the Hudson'],
        ['route' => 'airports.teb', 'state' => 'New Jersey', 'code' => 'TEB', 'name' => 'Teterboro', 'blurb' => 'Private jets—send the FBO name'],
    ],
])
@include('components.related-services')
@include('components.cta-band')
@endsection

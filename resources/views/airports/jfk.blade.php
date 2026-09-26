@extends('layouts.app')
@section('meta_title', 'JFK Car Service & Airport Limo NYC | Terminal Pickups | Alar')
@section('meta_description', 'JFK car service with terminal-specific pickups, flight tracking, and meet and greet. Sedans and SUVs from Manhattan, Brooklyn, Queens, and New Jersey.')
@section('og_image', asset('assets/img/airports/jfk/banner.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/airports/jfk/banner.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'JFK', 'title' => 'JFK car service and airport limo', 'crumbs' => [['label' => 'Airports', 'url' => route('airports.index')], ['label' => 'JFK']]])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/airports/jfk/photo.png') }}" alt="Black SUV at John F. Kennedy International Airport at night">
        <div class="alar-prose">
            <p class="alar-kicker">JFK</p>
            <div class="alar-airport-meta">
                <span class="alar-airport-chip"><strong>JFK</strong></span>
                <span class="alar-airport-chip">New York</span>
                <span class="alar-airport-chip">Commercial</span>
            </div>
            <h2>JFK car service, terminal by terminal</h2>
            <p>John F. Kennedy International is a campus, not one curb. Terminals 1 through 8 sit far enough apart that “JFK” on a reservation is not a meeting point. Alar Chauffeur Service asks for the airline and the terminal on every JFK airport transfer, tracks the live arrival when the flight number is on the booking, and stages meet and greet or curbside pickup at the door you name. We dispatch from our New Jersey desk with the borough or town on the quote so Manhattan, Brooklyn, Queens, and New Jersey crossings are priced as real drives—not as a generic airport pin.</p>
            <p>Reserve on the <a href="{{ route('book-online') }}">booking page</a>, compare cabins on <a href="{{ route('our-fleet') }}">our fleet</a>, or read <a href="{{ route('blog.airport-car-service-new-york') }}">airport car service in New York</a> for route context. For the wider region, see <a href="{{ route('service-area.new-york') }}">New York car service</a>.</p>
            <div class="alar-actions">
                <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                <a class="alar-btn alar-btn-line-dark" href="{{ route('contact-us') }}">Request a Quote</a>
            </div>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Plan your JFK transfer</h2></div></div>
        <p class="alar-guide-lead">Tap a topic on the left. Only that guide opens on the right, so a long airport page becomes a short decision.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="JFK topics">
                <button type="button" class="is-on" data-guide="jfk-arrivals"><span class="alar-guide-num">01</span><span class="alar-guide-label">Arrivals</span><span class="alar-guide-hint">International & domestic</span></button>
                <button type="button" data-guide="jfk-departures"><span class="alar-guide-num">02</span><span class="alar-guide-label">Departures</span><span class="alar-guide-hint">Leave-time planning</span></button>
                <button type="button" data-guide="jfk-meet"><span class="alar-guide-num">03</span><span class="alar-guide-label">Meet points</span><span class="alar-guide-hint">Curbside or inside</span></button>
                <button type="button" data-guide="jfk-vehicles"><span class="alar-guide-num">04</span><span class="alar-guide-label">Vehicles</span><span class="alar-guide-hint">Bags & headcount</span></button>
                <button type="button" data-guide="jfk-quote"><span class="alar-guide-num">05</span><span class="alar-guide-label">Quote checklist</span><span class="alar-guide-hint">What to send</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="jfk-arrivals" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/jfk/arrivals.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>JFK arrivals: terminals, customs, and live flight time</h3>
                        <p>A JFK arrival starts with the terminal your airline uses, not the airport code. Terminal 4 and Terminal 8 can feel like different cities on the same reservation. When you send the flight number, dispatch follows the live arrival—including delays and early wheels-down—so the chauffeur is not sitting at the wrong door while you are walking a different concourse. International passengers should expect more time in the hall: immigration, baggage, and sometimes a long walk to the pickup zone. Domestic arrivals are usually faster, but morning banks still stack at the curb.</p>
                        <p>We ask for a mobile number that reaches the passenger in the terminal, not only the assistant who booked. That number is how we confirm you are at baggage claim or at the agreed meet point. If your party splits across two flights, send both numbers and both terminals; we would rather assign two coordinated pickups than guess which group landed first.</p>
                        <p>For Manhattan-bound arrivals after a long flight, the drive out usually uses the Van Wyck Expressway and then one of the East River or tunnel crossings depending on your address. Brooklyn and Queens pickups often reverse that logic: shorter distance on the map can still mean heavy local traffic at rush hour. The quote reflects your door, not an average “JFK to city” guess.</p>
                    </div>
                </article>
                <article id="jfk-departures" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/jfk/departures.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>JFK departures: when to leave and which terminal door</h3>
                        <p>Departure planning at JFK is backward from wheels-up. You need time for the drive from Manhattan, Brooklyn, Queens, or New Jersey, time to find the correct terminal departures level, and time for airline check-in and security—especially on international tickets and holiday weekends. A hotel on the Upper East Side and an office in the Financial District do not share the same leave time for the same flight. We build pickup time from your address and the terminal, and we adjust when you tell us about checked bags, TSA PreCheck, or a first flight of the day.</p>
                        <p>The Van Wyck is the spine for most JFK departures from the city and from much of New Jersey. Construction, weather, and event traffic change its mood hour by hour. That is why we do not treat “two hours before international” as a universal rule without knowing where the car starts. Early-morning departures from Brooklyn and Queens can be smooth; the same flight on a Friday afternoon from Midtown is a different job.</p>
                        <p>Put Terminal 1 through 8 on the reservation, not “JFK departures.” Some terminals share rideshare zones; private car rules differ by level and by Port Authority enforcement on the day. If you are unsure which terminal your airline uses for that flight, send the airline and flight number and we will confirm before dispatch.</p>
                    </div>
                </article>
                <article id="jfk-meet" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/jfk/meet.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Meet and greet versus curbside at JFK</h3>
                        <p>Meet and greet means the chauffeur waits inside the arrivals area with a name board, usually near baggage claim or the exit from customs for international flights. It helps when you are unfamiliar with JFK, traveling with children, or carrying more bags than you want to drag to a curb. Request it when you book so the driver is cleared for the terminal and knows which hall to use—not as a surprise text on landing.</p>
                        <p>Curbside pickup means you meet the car at the agreed door on the arrivals level. It is faster when you travel light and can text when you are outside. Port Authority and terminal staff move cars quickly on busy curbs; the chauffeur may circle once while you exit the building. A working mobile number and the terminal letter or number keep that handoff calm.</p>
                        <p>Neither option replaces the terminal on the reservation. Terminal 5 and Terminal 7 do not share the same curb culture as Terminal 4. If your corporate policy requires an inside meet for visiting executives, say so on the booking and we will note it on the trip sheet for the driver.</p>
                    </div>
                </article>
                <article id="jfk-vehicles" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/jfk/vehicles.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Sedan, SUV, or Sprinter for JFK</h3>
                        <p>A luxury sedan fits up to four passengers with a normal luggage load—think two large bags and carry-ons for a business trip. A Cadillac Escalade or similar SUV is the usual upgrade when there are five to seven passengers, ski-sized bags, or several full-size suitcases after a long vacation. A Mercedes Sprinter covers larger groups and road-show teams when everyone must ride together with gear.</p>
                        <p>List passengers and bags separately on the reservation. JFK pickups fail quietly when a sedan trunk meets four large checked bags. We would rather assign the SUV before the trip than negotiate an upgrade at the terminal with traffic behind the car.</p>
                        <p>See photos and seating on <a href="{{ route('our-fleet') }}">our fleet</a> page. For ongoing business travel, <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a> accounts can keep vehicle preferences on file for repeat JFK routes.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('our-fleet') }}">View fleet</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('services.airport-transportation') }}">Airport service</a>
                        </div>
                    </div>
                </article>
                <article id="jfk-quote" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/airports/jfk/quote.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>What to send for a JFK quote</h3>
                        <p>Send the date and time, the full pickup address with borough or town, the JFK terminal (or airline and flight number if you want us to confirm the terminal), passenger count, and bags. For arrivals, the flight number enables tracking; for departures, tell us whether you need curbside drop at departures level or help with luggage at the door.</p>
                        <p>Ask for meet and greet explicitly if you want inside pickup. Tolls and airport fees are explained with the quote—it is not a meter running in Van Wyck traffic. New Jersey pickups for JFK flights are common from Edison, Jersey City, Hoboken, and Princeton; name the town so the rate matches the crossing you will actually use.</p>
                        <p>If the car must wait for meetings before Kennedy, read <a href="{{ route('blog.hourly-chauffeur-service-new-york') }}">hourly chauffeur service in New York</a>.</p>
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
        <h2>Neighborhoods and corridors we drive to JFK</h2>
        <p>Manhattan JFK car service is not one route. Midtown hotels along Park and Fifth often need a pickup on a side street because the main entrance cannot hold a car during peak hours. Downtown and the Financial District send you toward the Battery tunnels or the Brooklyn-Battery approach depending on live traffic. The Upper East Side and Upper West Side each change which crossing makes sense once you are on the Van Wyck. We ask for the building name or cross streets so the chauffeur stages where the doorman or concierge expects private cars—not where a map pin lands in a bus lane.</p>
        <p>Brooklyn to JFK is everyday work: Brooklyn Heights, DUMBO, Williamsburg, and Park Slope each have different leave times for the same morning flight. Queens pickups include Long Island City, Astoria, Flushing, and Jamaica—the last is the neighborhood many passengers know from AirTrain connections even when they are not riding the train this time. Staten Island and Bronx addresses are quoted from the specific street; they are not folded into a Brooklyn rate.</p>
        <p>New Jersey to JFK crosses Hudson or Staten Island routes depending on your town. Jersey City and Hoboken often compete with Newark on paper, but when the flight is truly at JFK, the honest quote is the honest drive. Our home desk in Edison plans those trips daily. Princeton and Middlesex County departures for JFK international flights need conservative buffers because the distance is real and the terminal hall is still crowded on Sunday nights.</p>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Timing</p>
        <h2>Buffers that match JFK, not a generic airport</h2>
        <p>Arrival pickups use flight tracking so we do not start the clock when you are still over Ohio. Still, walk time from gate to curb varies by terminal and by whether you check bags. Tell us if you are connecting from another flight at JFK so we do not assume a simple domestic exit.</p>
        <p>Departure buffers should include the Van Wyck and the approach road to your terminal. Terminal 1 international departures on a summer Saturday and Terminal 8 domestic on a Tuesday at dawn are different planning problems. We would rather pick you up once, early enough, than rush a curbside stop that security turns into a missed boarding call.</p>
        <p>Rain, snow, and holiday road volume are not exceptions at JFK—they are normal variables. When you have a hard cutoff, say so on the booking and we will talk through a realistic leave time from your address.</p>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <p class="alar-kicker">Luggage</p>
        <h2>Luggage, vehicle choice, and the terminal curb</h2>
        <p>Checked bags change the vehicle. Two passengers with four large suitcases after a cruise connection belong in an SUV even if the passenger count looks “sedan sized.” Golf clubs, strollers, and instrument cases should be listed on the reservation so the trunk is not a negotiation at Terminal 4.</p>
        <p>Curbside at JFK means you should be ready to load when the car pulls up. Meet and greet gives you more time inside but still ends at the same curb rules once you step outside. Either way, the terminal on the trip sheet keeps the driver on the correct level.</p>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Before you book</p><h2>JFK booking tips</h2></div></div>
        <ul class="alar-checklist">
            <li>Put the airline, flight number, and terminal on every JFK arrival and departure.</li>
            <li>Send a mobile number that reaches the passenger inside the terminal.</li>
            <li>Request meet and greet when you want an inside pickup with a name board.</li>
            <li>Name the borough or New Jersey town on both ends of the trip for an accurate quote.</li>
            <li>List bags separately from passenger count so we assign the right trunk.</li>
            <li>For Manhattan hotels, add the hotel name or cross streets—not only “Midtown.”</li>
            <li>Ask about tolls and airport fees with the quote; the rate is agreed before the ride.</li>
        </ul>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to book JFK car service</h2></div></div>
        <div class="alar-steps">
            <article><h3>Name both doors</h3><p>Hotel, neighborhood, or JFK terminal—not only the airport code. Manhattan, Brooklyn, Queens, and New Jersey addresses are quoted from the real street.</p></article>
            <article><h3>Send the flight</h3><p>Airline, flight number, passengers, and bags. Meet and greet is a request when you book, not a surprise on landing.</p></article>
            <article><h3>Confirm the car</h3><p>We reply with the vehicle and the rate. Tolls and airport fees are explained with the quote. It is not a meter in Van Wyck traffic.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about JFK</h2>
        <div class="alar-faq">
            <details open><summary>Do you track JFK arrivals?</summary><p>Yes. Put the flight number on the reservation and the chauffeur follows the live arrival, including delays and early landings. Tracking does not replace the terminal—we still need to know which hall you will exit—but it keeps the car from staging an hour early at the wrong door or sitting idle while you are still in customs.</p></details>
            <details><summary>Is meet and greet available at JFK?</summary><p>Yes. Ask for it when you book so the driver is assigned to your terminal with a name board. International arrivals should expect more time in the hall before you reach the meet point; domestic arrivals are usually faster. There is an additional charge for inside meet service, and we confirm it with the quote.</p></details>
            <details><summary>Which JFK terminal should I put on the booking?</summary><p>The terminal your airline uses for that flight. Terminals 1 through 8 are not interchangeable. If you are unsure, send the airline and flight number and dispatch will confirm before we send the chauffeur. Changing terminals after landing is possible with a phone call, but it wastes time you could spend loading the car.</p></details>
            <details><summary>Can you pick up in New Jersey for a JFK flight?</summary><p>Yes. Name the town—Edison, Jersey City, Hoboken, Princeton, and the rest of the state when the address is specific. The quote reflects the real crossing and drive time, not a Manhattan flat rate pasted onto New Jersey.</p></details>
            <details><summary>How is JFK different from LaGuardia or Newark?</summary><p>JFK is the long international airport with eight terminals spread across the field. LaGuardia is closer to Manhattan with Terminals A, B, and C. Newark is often the better fit when your address is in New Jersey. Read <a href="{{ route('blog.newark-airport-car-service') }}">Newark airport car service</a> for that field, and <a href="{{ route('blog.car-service-new-jersey-to-jfk') }}">car service from New Jersey to JFK</a> when the house is in New Jersey and the flight is here.</p></details>
        </div>
    </div>
</section>

@include('components.related-airports', [
    'heading' => 'Other New York airports we serve',
    'links' => [
        ['route' => 'airports.lga', 'state' => 'New York', 'code' => 'LGA', 'name' => 'LaGuardia', 'blurb' => 'Closer to Manhattan—name Terminal A, B, or C'],
        ['route' => 'airports.ewr', 'state' => 'New Jersey', 'code' => 'EWR', 'name' => 'Newark Liberty', 'blurb' => 'Strong choice when your address is in New Jersey'],
        ['route' => 'airports.hpn', 'state' => 'New York', 'code' => 'HPN', 'name' => 'Westchester County', 'blurb' => 'White Plains regional field for Westchester towns'],
        ['route' => 'airports.teb', 'state' => 'New Jersey', 'code' => 'TEB', 'name' => 'Teterboro', 'blurb' => 'Private aviation—send the FBO, not only the code'],
    ],
])
@include('components.related-services')
@include('components.cta-band')
@endsection

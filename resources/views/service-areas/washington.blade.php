@extends('layouts.app')
@section('meta_title', 'Washington Chauffeur Service | Sea-Tac & Seattle | Alar')
@section('meta_description', 'Washington chauffeur service for Sea-Tac SEA airport transfers, Seattle downtown hotels, and Bellevue. Reserved sedans and SUVs with flight tracking.')
@section('og_image', asset('assets/img/service-areas/washington.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/service-areas/washington.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'Washington', 'title' => 'Washington chauffeur service and Sea-Tac transfers', 'crumb' => 'Washington'])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-split">
        <img src="{{ asset('assets/img/service-areas/washington-scene.png') }}" alt="Black sedan on a rainy Washington street at dusk">
        <div class="alar-prose">
            <p class="alar-kicker">Washington</p>
            <h2>Washington chauffeur service, Seattle to Bellevue</h2>
            <p>People searching for Washington chauffeur service usually want a private car for a Sea-Tac SEA arrival, a Seattle downtown hotel-to-office morning, or an eastside meeting in Bellevue where bridge traffic and rain make last-minute plans fragile. This page maps Seattle, Bellevue, and Sea-Tac—not every town in the state overnight.</p>
            <p>Airport transfers begin with <a href="{{ route('services.airport-transportation') }}">airport transportation</a>. Multi-stop business days fit <a href="{{ route('services.corporate-transportation') }}">corporate transportation</a>. Reserve on the <a href="{{ route('book-online') }}">booking page</a>.</p>
        </div>
    </div>
</section>

<section class="alar-guide">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Plan the trip</p><h2>Pick a Washington route</h2></div></div>
        <p class="alar-guide-lead">Choose Sea-Tac, downtown Seattle, Bellevue, or weather timing. The right panel shows that guide alone.</p>
        <div class="alar-guide-shell">
            <div class="alar-guide-nav" role="tablist" aria-label="Washington topics">
                <button type="button" class="is-on" data-guide="wa-airport"><span class="alar-guide-num">01</span><span class="alar-guide-label">Sea-Tac</span><span class="alar-guide-hint">SEA arrivals</span></button>
                <button type="button" data-guide="wa-downtown"><span class="alar-guide-num">02</span><span class="alar-guide-label">Seattle</span><span class="alar-guide-hint">Hotels and offices</span></button>
                <button type="button" data-guide="wa-eastside"><span class="alar-guide-num">03</span><span class="alar-guide-label">Bellevue</span><span class="alar-guide-hint">Eastside corridor</span></button>
                <button type="button" data-guide="wa-weather"><span class="alar-guide-num">04</span><span class="alar-guide-label">Rain & bridges</span><span class="alar-guide-hint">Why the buffer matters</span></button>
            </div>
            <div class="alar-guide-panels">
                <article id="wa-airport" class="alar-guide-panel is-on">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/services/airport-transportation/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Sea-Tac SEA pickups and why reservation timing matters</h3>
                        <p>Seattle-Tacoma International Airport is the commercial gateway for most of the Washington chauffeur trips we schedule here. Sea-Tac SEA service only works when the airline and the terminal are on the reservation. Flight tracking follows the live arrival so an early inbound is met and a delayed inbound does not leave you refreshing an app while prices climb.</p>
                        <p>Bridge traffic between the eastside and the airport is a real buffer item; it should be priced into the plan, not discovered on the way. Luggage and group size decide the cabin.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('airports.sea') }}">Sea-Tac guide</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="wa-downtown" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/service-areas/washington-scene.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Downtown Seattle hotels and offices</h3>
                        <p>Downtown Seattle chauffeur days often move between waterfront hotels, downtown towers, and evening venues. Loading rules vary by building. Put the hotel name or the cross streets on the reservation, and give a mobile number for the passenger who will meet the car.</p>
                        <p>When the itinerary includes several meetings, hourly coverage is usually better than releasing the car after the first drop. Hourly limo service keeps one chauffeur on your schedule.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('services.hourly-limo') }}">Hourly limo</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('book-online') }}">Book Online</a>
                        </div>
                    </div>
                </article>
                <article id="wa-eastside" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/services/corporate-transportation/photo.png') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Bellevue and the eastside</h3>
                        <p>Bellevue is not “close enough to price as downtown.” It is a different drive across bridges that clog during peak hours. If Bellevue or another eastside address is the pickup or the drop, say so up front so the Washington chauffeur fare includes that corridor.</p>
                        <p>In the Seattle–Bellevue corridor the reserved option tends to win when there is luggage, a flight delay, a fixed meeting start, or an eastside-to-airport timing problem. See our guide to <a href="{{ route('blog.black-car-service-nyc-vs-uber-taxi') }}">black car service versus Uber and taxi</a>.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
                        </div>
                    </div>
                </article>
                <article id="wa-weather" class="alar-guide-panel">
                    <div class="alar-guide-media" style="background-image:url('{{ asset('assets/img/fleet/cadillac-escalade.webp') }}')"></div>
                    <div class="alar-guide-copy">
                        <h3>Rain, bridges, and why the buffer is part of the product</h3>
                        <p>Washington chauffeur work is shaped by water and weather as much as by addresses. Bridges clog. Rain slows merges. Sea-Tac SEA circulating roads back up when several arrivals land close together. A reserved car with flight tracking and a realistic buffer is how you keep a downtown meeting or a Bellevue campus visit from starting late.</p>
                        <p>If your travel also includes Tri-State airports when you return east, review <a href="{{ route('service-area.new-jersey') }}">New Jersey car service</a> or <a href="{{ route('service-area.new-york') }}">New York car service</a>.</p>
                        <div class="alar-guide-actions">
                            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
                            <a class="alar-btn alar-btn-line" href="{{ route('our-fleet') }}">View fleet</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to get a Washington quote</h2></div></div>
        <div class="alar-steps">
            <article><h3>Seattle or Bellevue</h3><p>Name the hotel or building. The eastside is not priced as a downtown hop.</p></article>
            <article><h3>Sea-Tac terminal</h3><p>Airline, terminal, and flight number so the chauffeur follows the live arrival.</p></article>
            <article><h3>Bags and buffer</h3><p>We reply with the vehicle and the rate. Airport fees are explained with the quote.</p></article>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about Washington</h2>
        <div class="alar-faq">
            <details open><summary>Do you track flights for Sea-Tac SEA?</summary><p>Yes. When the flight number is on the reservation, the chauffeur follows the live arrival time, including delays.</p></details>
            <details><summary>Do you cover Bellevue as well as Seattle?</summary><p>Yes when Bellevue or another eastside address is named on the reservation. Those trips are priced for the real corridor, not as a downtown hop.</p></details>
            <details><summary>Which vehicles are available for Washington chauffeur trips?</summary><p>Sedans and SUVs are assigned from passenger count and luggage. Larger vehicles are available when the group will not fit an SUV.</p></details>
            <details><summary>Can one car cover airport arrival and afternoon meetings?</summary><p>Yes. Book hourly coverage so the chauffeur stays with your itinerary instead of ending after the first drop.</p></details>
            <details><summary>How do we book?</summary><p>Use the booking page or send both addresses, the date, Sea-Tac details if relevant, and the headcount.</p></details>
        </div>
    </div>
</section>
@include('components.related-services')
@endsection

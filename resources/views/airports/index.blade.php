@extends('layouts.app')
@section('meta_title', 'Airport Car Service Guides | JFK LGA EWR LAX LAS SEA | Alar')
@section('meta_description', 'Static airport car service guides for JFK, LaGuardia, Newark, Westchester, Teterboro, LAX, Harry Reid, and Sea-Tac—organized by the states Alar serves.')
@section('og_image', asset('assets/img/airports/jfk/banner.png'))
@section('content')
@include('components.page-banner', ['image' => asset('assets/img/airports/jfk/banner.png'), 'modifier' => 'alar-banner-tall', 'kicker' => 'Airports', 'title' => 'Airport guides for every state we serve', 'crumb' => 'Airports'])
@include('components.ticker')

<section class="alar-section">
    <div class="alar-wrap alar-prose" style="max-width:46rem;margin-bottom:1.5rem;">
        <p class="alar-kicker">Choose the field</p>
        <h2>Eight airports. Five states. One desk.</h2>
        <p>Filter by state, then open the airport that matches your flight. Each guide uses the same interactive planner: arrivals, departures, meet points, vehicles, and what to send dispatch—without a wall of unrelated text.</p>
    </div>
    <div class="alar-wrap">
        <div class="alar-airport-filters" id="alar-airport-filters" role="tablist" aria-label="Filter airports by state">
            <button type="button" class="is-on" data-state="all" aria-selected="true">All states</button>
            <button type="button" data-state="new-york" aria-selected="false">New York</button>
            <button type="button" data-state="new-jersey" aria-selected="false">New Jersey</button>
            <button type="button" data-state="california" aria-selected="false">California</button>
            <button type="button" data-state="nevada" aria-selected="false">Nevada</button>
            <button type="button" data-state="washington" aria-selected="false">Washington</button>
        </div>

        <div class="alar-airport-board" id="alar-airport-board">
            <div class="alar-airport-state-block" data-state="new-york">
                <h3>New York</h3>
                <div class="alar-grid-3">
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/jfk/photo.png') }}" alt="JFK car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">JFK</div>
                            <h3>John F. Kennedy International</h3>
                            <p>Terminal-specific transfers from Manhattan, Brooklyn, Queens, and New Jersey.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.jfk') }}">Open JFK guide</a>
                        </div>
                    </article>
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/lga/photo.png') }}" alt="LaGuardia car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">LGA</div>
                            <h3>LaGuardia Airport</h3>
                            <p>Closer Manhattan runs with Terminal A, B, or C named on every booking.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.lga') }}">Open LGA guide</a>
                        </div>
                    </article>
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/hpn/photo.png') }}" alt="Westchester County Airport car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">HPN</div>
                            <h3>Westchester County Airport</h3>
                            <p>White Plains field for Westchester towns and quieter commercial arrivals.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.hpn') }}">Open HPN guide</a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="alar-airport-state-block" data-state="new-jersey">
                <h3>New Jersey</h3>
                <div class="alar-grid-3">
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/ewr/photo.png') }}" alt="Newark Liberty car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">EWR</div>
                            <h3>Newark Liberty International</h3>
                            <p>Home-desk airport for Edison, Jersey City, Hoboken, and Princeton.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.ewr') }}">Open EWR guide</a>
                        </div>
                    </article>
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/teb/photo.png') }}" alt="Teterboro private aviation car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">TEB</div>
                            <h3>Teterboro Airport</h3>
                            <p>Private aviation pickups staged at the FBO you name, not a generic curb.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.teb') }}">Open TEB guide</a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="alar-airport-state-block" data-state="california">
                <h3>California</h3>
                <div class="alar-grid-3">
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/lax/photo.png') }}" alt="LAX car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">LAX</div>
                            <h3>Los Angeles International</h3>
                            <p>Terminal-named LAX car service for downtown, Westside, and hotel corridors.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.lax') }}">Open LAX guide</a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="alar-airport-state-block" data-state="nevada">
                <h3>Nevada</h3>
                <div class="alar-grid-3">
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/las/photo.png') }}" alt="Harry Reid airport car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">LAS</div>
                            <h3>Harry Reid International</h3>
                            <p>Las Vegas arrivals to Strip resorts with tower and door details on file.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.las') }}">Open LAS guide</a>
                        </div>
                    </article>
                </div>
            </div>

            <div class="alar-airport-state-block" data-state="washington">
                <h3>Washington</h3>
                <div class="alar-grid-3">
                    <article class="alar-airport-card">
                        <img src="{{ asset('assets/img/airports/sea/photo.png') }}" alt="Sea-Tac car service">
                        <div class="alar-airport-card-body">
                            <div class="alar-airport-card-code">SEA</div>
                            <h3>Seattle-Tacoma International</h3>
                            <p>Sea-Tac transfers for Seattle downtown and Bellevue with bridge buffers.</p>
                            <a class="alar-btn alar-btn-outline" href="{{ route('airports.sea') }}">Open SEA guide</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap alar-split">
        <div class="alar-prose">
            <p class="alar-kicker">How it works</p>
            <h2>Terminal first. Then the car.</h2>
            <p>Airport transfers fail when the reservation only says the airport code. These guides push the details that matter: terminal or FBO, flight number, door, bags, and passenger count. Flight tracking follows the live arrival when the number is on the booking.</p>
            <div class="alar-actions">
                <a class="alar-btn alar-btn-gold" href="{{ route('services.airport-transportation') }}">Airport transportation</a>
                <a class="alar-btn alar-btn-outline" href="{{ route('book-online') }}">Book Online</a>
            </div>
        </div>
        <div class="alar-prose">
            <ul class="alar-checklist">
                <li>New York: JFK, LaGuardia, and Westchester County (HPN).</li>
                <li>New Jersey: Newark Liberty (EWR) and Teterboro private aviation (TEB).</li>
                <li>California: Los Angeles International (LAX).</li>
                <li>Nevada: Harry Reid International (LAS).</li>
                <li>Washington: Seattle-Tacoma (SEA).</li>
            </ul>
        </div>
    </div>
</section>
@include('components.cta-band')
@endsection

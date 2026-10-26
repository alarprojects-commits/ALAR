@extends('main')
@section('meta_title', 'Pennsylvania Car Service - PHL Airport Limo | Alar')
@section('meta_description', 'Book Pennsylvania car service and Philadelphia airport car service (PHL). Chauffeur links to Newark, JFK, and LGA for Philly-area travelers-confirmed rates.')
@section('og_image', asset('assets/img/service-areas/new-jersey.webp'))
@section('og_type', 'website')

@section('content')
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Pennsylvania Car Service &amp; Airport Limo</h1>
                <p>Pennsylvania car service with chauffeur transfers to Philadelphia (PHL), Newark, JFK, and LaGuardia for Philly, Bucks, Montgomery, and nearby counties.</p>
                <div class="ve-hero-ctas">
                    <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
                    <a href="{{ route('free-quote') }}" class="ve-btn-outline">Free Quote</a>
                    <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="ve-service-area-detail">
                        <div class="mb-30">
                            <img src="{{ asset('assets/img/service-areas/new-jersey.webp') }}" alt="Pennsylvania Car Service & Airport Limo by Alar Chauffeur Service" class="img-fluid rounded-12 shadow-sm w-100" style="max-height: 380px; object-fit: cover;">
                        </div>

                        <div class="ve-area-intro mb-50">
                            <h2>Professional chauffeur service across <span>Pennsylvania</span></h2>
                            <p class="ve-lead">Alar Chauffeur Service provides reserved <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>chauffeur service</b></a> and <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transportation</b></a> for travelers who want a confirmed vehicle-not a taxi line or rideshare gamble. From Center City hotels to Bucks County homes, we arrange door-to-door chauffeur rides with clear rates before the trip starts.</p>
                        </div>

                        <div class="ve-area-description">
                            <h2>Airports we serve from <span>Pennsylvania</span></h2>
                            <p>Open an airport guide for pickup tips, flight tracking notes, and booking checklists.</p>
                            <div class="ve-amenities-list"><ul>
                            <li><i class="fa fa-check"></i> <a href="{{ route('airports.phl') }}" style="color: var(--ve-gold);"><b>Philadelphia (PHL) car service</b></a> - Primary PA commercial airport</li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('airports.ewr') }}" style="color: var(--ve-gold);"><b>Newark (EWR) car service</b></a> - North Jersey and NYC access</li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('airports.jfk') }}" style="color: var(--ve-gold);"><b>JFK airport car service</b></a> - International NYC banks</li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('airports.lga') }}" style="color: var(--ve-gold);"><b>LaGuardia car service</b></a> - Domestic NYC flights</li>
                            </ul></div>

                            <h2>PHL and Tri-State airport connections</h2>
                            <p>Many Pennsylvania itineraries center on <a href="{{ route('airports.phl') }}" style="color: var(--ve-gold);"><b>Philadelphia airport car service</b></a>, while others cross into Newark or the New York airports for airline preference or schedule.</p>
                            <h3>Corporate and event days</h3>
                            <p>Roadshows and venue timelines fit hourly chauffeur service when multiple stops matter more than a single point-to-point drop.</p>

                            <h2>Counties and communities we cover</h2>
                            <p>If your town is not listed, send the address on the quote-coverage is door-to-door, not limited to a downtown pin.</p>
                            <div class="ve-amenities-list"><div class="row"><div class="col-md-6"><ul>
                                    <li><i class="fa fa-check"></i> Philadelphia County</li>
                                    <li><i class="fa fa-check"></i> Bucks County</li>
                                    <li><i class="fa fa-check"></i> Montgomery County</li>
                                    <li><i class="fa fa-check"></i> Delaware County</li>
                                    <li><i class="fa fa-check"></i> Chester County</li>
                                    <li><i class="fa fa-check"></i> Lehigh County</li>
                                    <li><i class="fa fa-check"></i> Northampton County</li>
                                    <li><i class="fa fa-check"></i> Berks County</li>
                                    <li><i class="fa fa-check"></i> Lancaster County</li>
                            </ul></div></div></div>

                            <h2>Services travelers book in this state</h2>
                            <h3>Airport transfers</h3>
                            <p>Flight-tracked pickups and timed departures through our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transportation</b></a> desk.</p>
                            <h3>Corporate and executive travel</h3>
                            <p><a href="{{ route('services.corporate-transportation') }}" style="color: var(--ve-gold);"><b>Corporate transportation</b></a> for meetings, roadshows, and multi-stop days.</p>
                            <h3>Hourly as-directed</h3>
                            <p>Keep the chauffeur with you using <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>hourly limo</b></a> service.</p>
                            <h3>Weddings and events</h3>
                            <p><a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>Wedding limo</b></a> and event transportation when the timeline needs a dedicated car.</p>

                            <h2>Nearby states and hubs</h2>
                            <div class="ve-amenities-list"><ul>
                            <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>New Jersey car service</b></a></li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>New York car service</b></a></li>
                            <li><i class="fa fa-check"></i> <a href="{{ route('service-area.connecticut') }}" style="color: var(--ve-gold);"><b>Connecticut car service</b></a></li>
                                <li><i class="fa fa-check"></i> <a href="{{ route('service-areas.index') }}" style="color: var(--ve-gold);"><b>All service areas</b></a></li>
                                <li><i class="fa fa-check"></i> <a href="{{ route('airports.index') }}" style="color: var(--ve-gold);"><b>All airport guides</b></a></li>
                            </ul></div>

                            <h2>How to book</h2>
                            <p>Use <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book Online</b></a> or <a href="{{ route('contact-us') }}" style="color: var(--ve-gold);"><b>Contact Us</b></a> with date, addresses, passenger count, and flight details when an airport is involved. We confirm the vehicle and rate before dispatch.</p>

                            <div class="ve-area-faq mt-50">
                                <span class="ve-section-tag">FAQs</span>
                                <h2 class="mb-30">Frequently asked questions</h2>
                                <div id="pennsylvaniaFaq" class="accordion ve-faq-accordion">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3" type="button" data-toggle="collapse" data-target="#pennsylvaniaFaq1" aria-expanded="true">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">Which airports can I book from this state?</h3>
                                            </button>
                                        </div>
                                        <div id="pennsylvaniaFaq1" class="collapse show" data-parent="#pennsylvaniaFaq">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4"><p>See the airport list above. Each guide explains pickup, flight tracking, and how to send a complete quote request.</p></div>
                                        </div>
                                    </div>
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#pennsylvaniaFaq2">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">Do you offer hourly chauffeur service?</h3>
                                            </button>
                                        </div>
                                        <div id="pennsylvaniaFaq2" class="collapse" data-parent="#pennsylvaniaFaq">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4"><p>Yes. Hourly as-directed service is ideal for multiple stops, events, or a night out when you want the same chauffeur all evening.</p></div>
                                        </div>
                                    </div>
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#pennsylvaniaFaq3">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">How do I get a price?</h3>
                                            </button>
                                        </div>
                                        <div id="pennsylvaniaFaq3" class="collapse" data-parent="#pennsylvaniaFaq">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4"><p>Send pickup, drop-off, date, and passenger count. For airports, add airline, flight number, and terminal. We reply with the vehicle and rate.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-50 mt-lg-0">
                    <x-service-area-sidebar />
                </div>
            </div>
        </div>
    </section>
    @include('components.cta')
@endsection

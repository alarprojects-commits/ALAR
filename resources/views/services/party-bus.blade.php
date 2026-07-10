@extends('main')
@section('meta_title', 'Party Bus Rental Service New Jersey | Luxury Group')
@section('meta_description', 'Luxury party bus rental service in New Jersey & New York for weddings, proms, concerts, birthdays, and group travel with chauffeur service.')
@section('content')

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('assets/img/our-services/party-bus/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Rolling Celebration</span>
        <h1>Luxury Group Travel Made Easy Across <span>New Jersey & New York</span></h1>
        <p class="text-white">Reserve a premium party bus in New Jersey and New York for weddings, proms, concerts, birthdays, and nightlife with professional chauffeurs, spacious vehicles, and stress-free group coordination.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Party Bus</li>
            </ol>
        </nav>
    </div>
</section>

<!-- ===== SERVICE DETAIL SECTION ===== -->
<section class="ve-section bg-light">
    <div class="container">
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-12 col-lg-4 mb-5 mb-lg-0 order-2 order-lg-1">
                @include('components.service-sidebar')
            </div>

            <!-- Content Column -->
            <div class="col-12 col-lg-8 order-1 order-lg-2">
                <div class="ve-service-detail-content">
                    <div class="ve-detail-main-img mb-40 wow fadeIn" data-wow-delay="100ms">
                        <img src="{{ asset('assets/img/our-services/party-bus/1.webp') }}"
                            alt="Party Bus Rental Service in New Jersey" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Unmatched Entertainment</span>
                        <h2>Premium Party Bus Rental Service in New Jersey for <span>Every Occasion</span></h2>
                        <p class="ve-lead">When it comes to group travel, comfort, coordination, and experience matter just as much as the destination. Our party bus rental service in New Jersey is designed for groups who want to travel together in a luxury, safe, and entertainment-ready environment.</p>

                        <p>Whether you're planning a wedding celebration, prom night, birthday party, concert trip, sporting event, or nightlife tour, a party bus allows your entire group to stay together without the stress of multiple vehicles or ride delays.</p>

                        <p>At <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a>, we provide fully managed group transportation across New Jersey and New York with professional chauffeurs, modern vehicles, and flexible booking options.</p>

                        <p>For users searching for a party bus near me, luxury group transportation NJ, or event party bus service, this service delivers a complete travel solution.</p>

                        <h2>Why Party Bus Rental is the Best Choice for <span>Group Travel</span></h2>
                        <p>A party bus is not just transportation, it is part of your event experience. Instead of focusing on driving or parking, your group enjoys the journey together.</p>

                        <h3>Key Advantages of Party Bus Service</h3>
                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Entire group travels together in one vehicle</li>
                                        <li><i class="fa fa-check"></i> Professional chauffeur handling all driving</li>
                                        <li><i class="fa fa-check"></i> Safe late-night transportation included</li>
                                        <li><i class="fa fa-check"></i> No parking or traffic stress</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Flexible stop options during trips</li>
                                        <li><i class="fa fa-check"></i> Entertainment-style travel environment</li>
                                        <li><i class="fa fa-check"></i> Ideal for long and short-distance travel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="mt-20">This makes it the preferred choice for events across New Jersey and New York entertainment destinations.</p>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="row align-items-center mt-40">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/party-bus/2.webp') }}"
                                        alt="Party Bus for Weddings and Celebrations in New Jersey" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Party Bus Rental for <span>Weddings, Proms & Celebrations</span></h2>
                                    <p>Special occasions deserve special transportation. Our party bus rental service in New Jersey is widely used for personal and milestone events.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Wedding Transportation Solution</h3>
                                <p><a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>Wedding limo service</b></a> and party bus rentals are ideal for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Bridal party transport</li>
                                        <li><i class="fa fa-check"></i> Guest group transportation</li>
                                        <li><i class="fa fa-check"></i> Venue-to-venue transfers</li>
                                        <li><i class="fa fa-check"></i> Reception travel</li>
                                        <li><i class="fa fa-check"></i> Hotel coordination</li>
                                    </ul>
                                </div>

                                <h3>Prom & Student Group Travel</h3>
                                <p><a href="{{ route('services.prom-limo') }}" style="color: var(--ve-gold);"><b>Prom limo service</b></a> combined with party buses is perfect for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Student group travel</li>
                                        <li><i class="fa fa-check"></i> Safe supervised transportation</li>
                                        <li><i class="fa fa-check"></i> After-prom events</li>
                                        <li><i class="fa fa-check"></i> School celebrations</li>
                                    </ul>
                                </div>

                                <h3>Birthdays & Private Parties</h3>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Sweet 16 celebrations</li>
                                                <li><i class="fa fa-check"></i> Birthday parties</li>
                                                <li><i class="fa fa-check"></i> Family gatherings</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Private group events</li>
                                                <li><i class="fa fa-check"></i> Anniversary celebrations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center mt-50">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/party-bus/3.webp') }}"
                                        alt="Luxury Party Bus Interior in New Jersey" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Party Bus for Concerts, Festivals <span>& Sports Events</span></h2>
                                    <p>Group transportation becomes essential for high-traffic events.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Entertainment Travel Use Cases</h3>
                                <p><a href="{{ route('services.concert-festival') }}" style="color: var(--ve-gold);"><b>Concert and festival limo service</b></a> and party buses are ideal for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Music festivals</li>
                                        <li><i class="fa fa-check"></i> Concert tours</li>
                                        <li><i class="fa fa-check"></i> Stadium events</li>
                                        <li><i class="fa fa-check"></i> Sports games</li>
                                        <li><i class="fa fa-check"></i> Cultural festivals</li>
                                        <li><i class="fa fa-check"></i> Live shows</li>
                                    </ul>
                                </div>
                                <p class="mt-20"><a href="{{ route('services.sporting-events') }}" style="color: var(--ve-gold);"><b>Sporting and event limo service</b></a> also connects directly with this service for game-day travel.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Luxury Group Experience Inside <span>Our Party Buses</span></h2>
                                <p>Our <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>fleet</b></a> is designed to provide a premium travel experience for all group sizes.</p>

                                <h3>Onboard Features</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Spacious seating for large groups</li>
                                        <li><i class="fa fa-check"></i> Clean and luxury interiors</li>
                                        <li><i class="fa fa-check"></i> Climate-controlled comfort</li>
                                        <li><i class="fa fa-check"></i> Professional sound environment</li>
                                        <li><i class="fa fa-check"></i> Smooth long-distance ride quality</li>
                                        <li><i class="fa fa-check"></i> Fully maintained premium vehicles</li>
                                    </ul>
                                </div>
                                <p class="mt-20">This ensures your party bus rental service in New Jersey feels like part of the celebration itself.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Serving New Jersey and New York <span>Event Routes</span></h2>
                                <p>We provide full coverage across major cities, venues, and nightlife destinations.</p>

                                <div class="mt-30">
                                    <h3>New Jersey Coverage</h3>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Jersey City party bus service</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Newark group transportation</b></a></li>
                                                    <li><i class="fa fa-check"></i> Hoboken nightlife travel</li>
                                                    <li><i class="fa fa-check"></i> Bergen County limo service</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Hudson County transportation</li>
                                                    <li><i class="fa fa-check"></i> Essex County party bus rental</li>
                                                    <li><i class="fa fa-check"></i> Middlesex County group travel</li>
                                                    <li><i class="fa fa-check"></i> Union County limo service</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <h3>New York Coverage</h3>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Manhattan party bus service</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Brooklyn group transportation</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Queens event travel</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Bronx nightlife transport</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Long Island party bus rental</b></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">This cross-state coverage strengthens our service for both NJ and NY group travel needs.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Group Transportation Made Simple with <span>Hourly Booking</span></h2>
                                <p>Not every event follows a fixed schedule. That's why we offer flexible <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>hourly service</b></a>.</p>

                                <h3>Flexible Travel Options</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Multiple stops included</li>
                                        <li><i class="fa fa-check"></i> Waiting time available</li>
                                        <li><i class="fa fa-check"></i> Custom pickup locations</li>
                                        <li><i class="fa fa-check"></i> Late-night return trips</li>
                                        <li><i class="fa fa-check"></i> Cross-city travel (NJ ↔ NY)</li>
                                        <li><i class="fa fa-check"></i> Event-based route planning</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Airport & Event <span>Group Transfers</span></h2>
                                <p>We also support group arrivals and departures through <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transportation service</b></a>.</p>

                                <h3>Airport Coverage</h3>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Newark Liberty International Airport</li>
                                                <li><i class="fa fa-check"></i> JFK International Airport</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> LaGuardia Airport</li>
                                                <li><i class="fa fa-check"></i> Private aviation terminals</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">This is ideal for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Out-of-state group arrivals</li>
                                        <li><i class="fa fa-check"></i> Wedding guests</li>
                                        <li><i class="fa fa-check"></i> Corporate teams</li>
                                        <li><i class="fa fa-check"></i> Event attendees</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/party-bus/3.webp') }}"
                                        alt="Party Bus Rental in New Jersey and New York" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Why Choose Alar Chauffeur Service for Party Bus Rental in <span>New Jersey</span></h2>
                                    <p>Our party bus rental service in New Jersey is built on reliability, safety, and premium group transportation.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>What Sets Us Apart</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>Professional chauffeurs</b></a></li>
                                        <li><i class="fa fa-check"></i> Luxury fleet options</li>
                                        <li><i class="fa fa-check"></i> NJ + NY coverage expertise</li>
                                        <li><i class="fa fa-check"></i> Flexible event scheduling</li>
                                        <li><i class="fa fa-check"></i> Strong airport + event integration</li>
                                        <li><i class="fa fa-check"></i> Safe group transportation focus</li>
                                        <li><i class="fa fa-check"></i> 24/7 availability</li>
                                    </ul>
                                </div>
                                <p class="mt-20">We also connect seamlessly with <a href="{{ route('services.group-transportation') }}" style="color: var(--ve-gold);"><b>group transportation services</b></a> for larger travel needs.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Simple <span>Booking Process</span></h2>

                                <h3>How to Book Your Party Bus</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Select travel date</li>
                                        <li><i class="fa fa-check"></i> Enter pickup location</li>
                                        <li><i class="fa fa-check"></i> Choose vehicle type</li>
                                        <li><i class="fa fa-check"></i> Add stops or event details</li>
                                        <li><i class="fa fa-check"></i> Confirm booking</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Early booking is recommended for weekends, wedding season, concerts, and holidays. <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book your party bus online</b></a> to secure your preferred vehicle.</p>
                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Frequently Asked <span>Questions</span></h2>
                                <div id="partyBusFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="partyBusFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#partyBusFaqOne"
                                                aria-expanded="true" aria-controls="partyBusFaqOne">
                                                What is included in the party bus rental service?
                                            </button>
                                        </div>
                                        <div id="partyBusFaqOne" class="collapse show"
                                            aria-labelledby="partyBusFaqHeadingOne" data-parent="#partyBusFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Luxury vehicle, professional chauffeur, group seating, and flexible travel across NJ and NY.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="partyBusFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#partyBusFaqTwo"
                                                aria-expanded="false" aria-controls="partyBusFaqTwo">
                                                Can we make multiple stops?
                                            </button>
                                        </div>
                                        <div id="partyBusFaqTwo" class="collapse" aria-labelledby="partyBusFaqHeadingTwo"
                                            data-parent="#partyBusFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, hourly service allows multiple stops during your trip.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="partyBusFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#partyBusFaqThree"
                                                aria-expanded="false" aria-controls="partyBusFaqThree">
                                                Do you offer party buses for weddings and proms?
                                            </button>
                                        </div>
                                        <div id="partyBusFaqThree" class="collapse"
                                            aria-labelledby="partyBusFaqHeadingThree" data-parent="#partyBusFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we specialize in wedding and prom group transportation.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="partyBusFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#partyBusFaqFour"
                                                aria-expanded="false" aria-controls="partyBusFaqFour">
                                                Do you travel between New Jersey and New York?
                                            </button>
                                        </div>
                                        <div id="partyBusFaqFour" class="collapse"
                                            aria-labelledby="partyBusFaqHeadingFour" data-parent="#partyBusFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, cross-state transportation is fully available.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="partyBusFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#partyBusFaqFive"
                                                aria-expanded="false" aria-controls="partyBusFaqFive">
                                                Is airport pickup available for groups?
                                            </button>
                                        </div>
                                        <div id="partyBusFaqFive" class="collapse"
                                            aria-labelledby="partyBusFaqHeadingFive" data-parent="#partyBusFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we provide group airport transfers from all major NY/NJ airports.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="partyBusFaqHeadingSix">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#partyBusFaqSix"
                                                aria-expanded="false" aria-controls="partyBusFaqSix">
                                                Is service available 24/7?
                                            </button>
                                        </div>
                                        <div id="partyBusFaqSix" class="collapse"
                                            aria-labelledby="partyBusFaqHeadingSix" data-parent="#partyBusFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our party bus rental service in New Jersey operates 24/7 for all events.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

@extends('main')
@section('meta_title', 'Chauffeur Service in New Jersey| Luxury Limo & Private Travel')
@section('meta_description', 'Book premium Chauffeur Service in New Jersey. Enjoy private, luxury transportation, airport transfers, and long-distance limo service with ease.')
@section('content')

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('assets/img/our-services/chauffeured-service/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Premium Service</span>
        <h1>Professional Chauffeur Service in  <span>NJ & NYC</span></h1>
        <p class="text-white">Experience safe, private, and luxury transportation with Alar Chauffeur Service for city travel, airport transfers, and long-distance journeys.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Chauffeur Service</li>
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
                        <img src="{{ asset('assets/img/our-services/chauffeured-service/luxury-chauffeur-service-in-new-jersey-and-nyc.webp') }}"
                            alt="Chauffeured Service" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Stress-Free Travel</span>
                        <h2>Luxury Chauffeur Service in New Jersey <span>& NYC</span></h2>
                        <p class="ve-lead">When it comes to comfortable and reliable travel, choosing a <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>chauffeur service in New Jersey</b></a> is the best decision for both personal and business needs. Whether you need a <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>limo service in NJ & NYC</b></a> for daily travel, airport transfers, or long-distance journeys, Alar Chauffeur Service provides a seamless experience.</p>

                        <p>Unlike regular taxis or ride-sharing, a private chauffeur ensures professionalism, punctuality, and complete privacy. This makes it ideal for corporate travel, family trips, and even special events where comfort and reliability matter most.</p>

                        <div class="row mt-40 mb-40">
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-clock-o"></i>
                                    <h5>Punctual and Reliable</h5>
                                    <p>We pride ourselves on our 100% on time performance record for airport pickups.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-plane"></i>
                                    <h5>Flight Tracking</h5>
                                    <p>Real-time monitoring of your flight ensures we're there exactly when you need us.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-suitcase"></i>
                                    <h5>Luggage Assistance</h5>
                                    <p>Your chauffeur handles all your bags, so you don't have to lift a finger.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-map-marker"></i>
                                    <h5>Wait and Greet</h5>
                                    <p>Professional signage and greeting services at the terminal for a VIP experience.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <h2>Why Chauffeur Service is Important for <span>Private Travel</span></h2>
                        <p>Privacy is one of the biggest reasons why people prefer a premium chauffeur service in New Jersey. When you book a professional chauffeur, you get a dedicated vehicle and driver, allowing you to travel without interruptions.</p>

                        <p>This is especially important for:</p>

                        <div class="row mt-40 mb-40">
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-briefcase"></i>
                                    <p>Business professionals who need a quiet environment
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-shield"></i>
                                    <p>Families who want safe and secure travel
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-futbol-o"></i>
                                    <p>Travelers attending major events like <a href="{{ route('services.fifa-world-cup-2026-transportation') }}" style="color: var(--ve-gold);"><b>FIFA 2026</b></a>.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-clock-o"></i>
                                    <p>Same-day travel plans without delays
                                    </p>
                                </div>
                            </div>
                        </div>

                        <p>With <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>luxury transportation</b></a>, you avoid crowded public transport and maintain full control over your journey.</p>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/chauffeured-service/chauffeur-service-from-new-jersey-to-new-york.webp') }}" alt="Luxury Sedan"
                                        class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Chauffeur Service from New Jersey to New York</h2>
                                    <p>Traveling between states is common, and limo service from New Jersey to New York is one of the most requested routes. Daily commuters, corporate clients, and tourists rely on intercity limo service for smooth travel between NJ and NYC.</p>
                                    <p>Benefits include:</p>

                                    <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                        <div class="row">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Door-to-door pickup and drop-off</li>
                                                <li><i class="fa fa-check"></i> No parking stress in NYC</li>
                                                <li><i class="fa fa-check"></i> Time-saving routes with experienced drivers</li>
                                                <li><i class="fa fa-check"></i> Comfortable executive car service</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Whether it’s a business meeting or a same-day trip, a chauffeur ensures timely and efficient travel.</p>
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Travel from New York & New Jersey to Other States</h2>
                                <p>For longer routes, such as New York to <a href="{{ route('service-area.san-francisco') }}" style="color: var(--ve-gold);"><b>San Francisco luxury chauffeur service</b></a> or other interstate destinations, Alar Chauffeur Service offers reliable Chauffeur Service in New Jersey.</p>

                                <p>This service is ideal for:</p>

                                <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <ul>
                                            <li><i class="fa fa-check"></i> State-to-state chauffeur service</li>
                                            <li><i class="fa fa-check"></i> Business road trips</li>
                                            <li><i class="fa fa-check"></i> Family travel across cities</li>
                                            <li><i class="fa fa-check"></i> Flexible travel without flight delays</li>
                                        </ul>
                                    </div>
                                </div>

                                <p>With professional planning and luxury vehicles, long-distance travel becomes smooth and enjoyable.</p>

                                <div class="ve-quote-box mt-30">
                                    <i class="fa fa-quote-left"></i>
                                    <p>Alar Chauffeur Service has been my go-to for years. Their airport service is
                                        unbeatable for its reliability and the sheer quality of the vehicles. I never
                                        have to worry about being late for a flight.</p>
                                    <div class="ve-quote-author">
                                        <strong>Robert Sterling</strong>
                                        <span>Frequent Business Traveler</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                    <h2>Why Choose Chauffeur Service for Long-Distance Travel</h2>
                                    <p>Long journeys require comfort, safety, and reliability. A Chauffeur Service in New Jersey provides all three.</p>
                                    <p>Key advantages:</p>

                                    <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                        <div class="row">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Spacious and comfortable vehicles</li>
                                                <li><i class="fa fa-check"></i> Professional and trained drivers</li>
                                                <li><i class="fa fa-check"></i> Flexible scheduling for same-day travel plans</li>
                                                <li><i class="fa fa-check"></i> No stress of driving long hours</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Instead of dealing with flights or rentals, you can enjoy a relaxed journey with executive car service.</p>
                                </div>
                                <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/img/our-services/chauffeured-service/why-choose-chauffeur-service-for-long-distance-travel.webp') }}"
                                        alt="Meet and Greet" class="img-fluid rounded-12 shadow-sm">
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Group vs Solo Travel Options</h2>
                                <p>Alar Chauffeur Service offers flexible options for both individuals and groups.</p>

                                <h3>Group Travel Limo</h3>

                                <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Ideal for families, corporate teams, and events</li>
                                            <li><i class="fa fa-check"></i> Cost-effective for shared travel</li>
                                            <li><i class="fa fa-check"></i> Spacious SUVs and luxury vans</li>
                                        </ul>
                                    </div>
                                </div>

                                <h3>Solo & Executive Travel</h3>

                                <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Private chauffeur for business professionals</li>
                                            <li><i class="fa fa-check"></i> Premium sedans for comfort and privacy</li>
                                            <li><i class="fa fa-check"></i> Personalized travel experience</li>
                                        </ul>
                                    </div>
                                </div>

                                <p>No matter your travel type, there is a vehicle option available in <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>our fleet</b></a></p>

                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Airport Transfers (JFK & Newark Airport)</h2>
                                <p>Airport travel is one of the most important services offered. With airport transfers JFK and Newark Airport, you get reliable and timely transportation.</p>

                                <p>Our airport transportation includes:</p>

                                <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Airport to city and city to airports service</li>
                                            <li><i class="fa fa-check"></i> Meet and greet at terminals</li>
                                            <li><i class="fa fa-check"></i> Luggage assistance</li>
                                            <li><i class="fa fa-check"></i> On-time pickups and drop-offs</li>
                                        </ul>
                                    </div>
                                </div>

                                <p>Avoid waiting in long taxi lines by booking our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transfer service</b></a> in advance.</p>

                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Chauffeur Service for Every Event</h2>
                                <p>A chauffeur service is not limited to one purpose—it is universal for every event. Whether it’s:</p>

                                <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Corporate meetings</li>
                                            <li><i class="fa fa-check"></i> <a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>Weddings and parties</b></a></li>
                                            <li><i class="fa fa-check"></i> Airport transfers</li>
                                            <li><i class="fa fa-check"></i> Sports events like FIFA 2026</li>
                                            <li><i class="fa fa-check"></i> Same-day travel plans</li>
                                        </ul>
                                    </div>
                                </div>

                                <p>A private chauffeur ensures your journey is smooth, professional, and stress-free.</p>

                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Booking Process for Alar Chauffeur Service</h2>
                                <p>Booking your ride is simple and quick. With schedule booking with Alar Chauffeur Service, you can plan your trip in advance.</p>

                                <h3>How to Book:</h3>
                                <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Visit our <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>home page</b></a></li>
                                            <li><i class="fa fa-check"></i> Choose your vehicle from the <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>fleet</b></a></li>
                                            <li><i class="fa fa-check"></i> Enter pickup and drop-off details</li>
                                            <li><i class="fa fa-check"></i> Select date and time</li>
                                            <li><i class="fa fa-check"></i> <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Confirm your booking</b></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <p>Providing accurate details ensures a smooth and well-planned journey.</p>

                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Chauffeured Services <span>Frequently Asked Questions</span></h2>
                                <div id="airportFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqOne"
                                                aria-expanded="true" aria-controls="airportFaqOne">
                                                Can I book same-day service?
                                            </button>
                                        </div>
                                        <div id="airportFaqOne" class="collapse show"
                                            aria-labelledby="airportFaqHeadingOne" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, depending on availability, same-day travel plans are possible.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqTwo"
                                                aria-expanded="false" aria-controls="airportFaqTwo">
                                                Is long-distance travel available?
                                            </button>
                                        </div>
                                        <div id="airportFaqTwo" class="collapse" aria-labelledby="airportFaqHeadingTwo"
                                            data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                 Yes, we provide state-to-state chauffeur service across the USA.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqThree"
                                                aria-expanded="false" aria-controls="airportFaqThree">
                                                Are airport pickups reliable?
                                            </button>
                                        </div>
                                        <div id="airportFaqThree" class="collapse"
                                            aria-labelledby="airportFaqHeadingThree" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our chauffeurs track flights to ensure timely pickup.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqFour"
                                                aria-expanded="false" aria-controls="airportFaqFour">
                                                Do you offer group travel options?
                                            </button>
                                        </div>
                                        <div id="airportFaqFour" class="collapse"
                                            aria-labelledby="airportFaqHeadingFour" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we provide vehicles for both small and large groups.
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
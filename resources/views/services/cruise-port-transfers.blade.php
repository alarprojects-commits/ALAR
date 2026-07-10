@extends('main')
@section('meta_title', 'Cruise Port Transport In New Jersey')
@section('meta_description', 'Book cruise port transport in New Jersey & New York for NYC cruise terminals, Cape Liberty, Manhattan ports, and luxury chauffeur transfers.')
@section('content')

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('assets/img/our-services/cruise-port-transfer/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Start Your Vacation Right</span>
        <h1>Luxury Cruise Port Transfers Between <span>New Jersey & New York Cruise Terminals</span></h1>
        <p class="text-white">Luxury Cruise Port Transfers NJ & NY | Reliable Transfers to Manhattan & Cape Liberty Cruise Terminals with 24/7 Chauffeur Service</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Cruise Port Transfers</li>
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
                        <img src="{{ asset('assets/img/our-services/cruise-port-transfer/1.webp') }}"
                            alt="Cruise Port Transport in New Jersey" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Seamless Travel</span>
                        <h2>Reliable Cruise Port Transport in New Jersey for <span>Stress-Free Travel</span></h2>
                        <p class="ve-lead">Planning a cruise should feel exciting, not stressful. Our cruise port transport in New Jersey is designed to provide smooth, punctual, and luxury transportation to all major cruise terminals across New Jersey, <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>New York</b></a>, and nearby states.</p>

                        <p>Whether you're departing for a Caribbean cruise, international voyage, or weekend getaway, our professional chauffeurs ensure timely pickup from your home, hotel, or airport and a comfortable ride directly to the cruise terminal.</p>

                        <p>At <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a>, we specialize in long-distance cruise transfers, family travel, group transportation, and private luxury chauffeur service across New Jersey and New York.</p>

                        <p>If you are searching for cruise port transportation near me, NYC cruise terminal transfer, or luxury cruise shuttle service, this page is built to serve your travel needs.</p>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Cruise Ports We Serve in <span>New Jersey & New York</span></h2>
                                <p>We provide direct transportation to all major cruise ports and terminals across the region, ensuring seamless embarkation and disembarkation experiences.</p>

                                <h3>New York Cruise Terminals</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Manhattan Cruise Terminal (New York City)</li>
                                        <li><i class="fa fa-check"></i> Brooklyn Cruise Terminal</li>
                                        <li><i class="fa fa-check"></i> Queens / NYC waterfront cruise access points</li>
                                        <li><i class="fa fa-check"></i> Private yacht and luxury cruise docks</li>
                                    </ul>
                                </div>

                                <h3>New Jersey Cruise Access Points</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Cape Liberty Cruise Port (Bayonne, NJ)</li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Jersey City waterfront cruise pickup zones</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Newark port-area hotel transfers</b></a></li>
                                    </ul>
                                </div>

                                <h3>Nearby Regional Cruise Ports</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Baltimore Cruise Port (Maryland)</li>
                                        <li><i class="fa fa-check"></i> Philadelphia Cruise Port (Pennsylvania)</li>
                                        <li><i class="fa fa-check"></i> Boston Cruise Terminal (Massachusetts)</li>
                                        <li><i class="fa fa-check"></i> Norfolk Cruise Port (Virginia – seasonal routes)</li>
                                    </ul>
                                </div>
                                <p class="mt-20">This wide coverage makes our service ideal for travelers across the Northeast USA cruise corridor.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Why Choose Private Cruise Port Transport <span>Instead of Shared Shuttles?</span></h2>
                                <p>Cruise travel involves strict boarding schedules, luggage handling, and time-sensitive arrival windows. Public shuttles and shared rides often create delays or unnecessary stress.</p>

                                <h3>Benefits of Private Cruise Transfers</h3>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Direct door-to-terminal transportation</li>
                                                <li><i class="fa fa-check"></i> No waiting for other passengers</li>
                                                <li><i class="fa fa-check"></i> Professional luggage handling assistance</li>
                                                <li><i class="fa fa-check"></i> Fixed pickup and arrival timing</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Comfortable long-distance travel</li>
                                                <li><i class="fa fa-check"></i> Ideal for families and large groups</li>
                                                <li><i class="fa fa-check"></i> Stress-free cruise boarding experience</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Our cruise port transport in New Jersey ensures you never miss boarding deadlines or face last-minute travel issues.</p>
                            </div>

                            <div class="row align-items-center mt-50">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/cruise-port-transfer/2.webp') }}"
                                        alt="Cruise Transportation for Families and Groups" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Cruise Transportation for <span>Families, Groups & Tourists</span></h2>
                                    <p>Cruise travel is often a group experience, and coordinated transportation is essential.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Ideal for All Travel Types</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Family cruise vacations</li>
                                        <li><i class="fa fa-check"></i> Group holiday travel</li>
                                        <li><i class="fa fa-check"></i> Corporate cruise events</li>
                                        <li><i class="fa fa-check"></i> Honeymoon cruise transfers</li>
                                        <li><i class="fa fa-check"></i> International tourists arriving via airports</li>
                                        <li><i class="fa fa-check"></i> Senior traveler assistance</li>
                                    </ul>
                                </div>
                                <p class="mt-20">We also provide <a href="{{ route('services.group-transportation') }}" style="color: var(--ve-gold);"><b>group transportation service</b></a> for large families and travel groups heading to cruise terminals together.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Airport to Cruise Port Transfers in <span>New Jersey & New York</span></h2>
                                <p>Many travelers arrive via airports before boarding cruises. We offer seamless airport-to-port transfers.</p>

                                <h3>Major Airport Coverage</h3>
                                <p><a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>Airport transportation service</b></a> includes:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Newark Liberty International Airport (EWR)</li>
                                                <li><i class="fa fa-check"></i> John F. Kennedy International Airport (JFK)</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> LaGuardia Airport (LGA)</li>
                                                <li><i class="fa fa-check"></i> Teterboro Airport (TEB)</li>
                                                <li><i class="fa fa-check"></i> Private aviation terminals</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <h3>Common Travel Routes</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> JFK Airport → Manhattan Cruise Terminal</li>
                                        <li><i class="fa fa-check"></i> Newark Airport → Cape Liberty Cruise Port</li>
                                        <li><i class="fa fa-check"></i> LaGuardia Airport → Brooklyn Cruise Terminal</li>
                                        <li><i class="fa fa-check"></i> Hotels in NYC/NJ → Cruise Ports</li>
                                    </ul>
                                </div>
                                <p class="mt-20">We also offer <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>hourly limo service</b></a> for travelers needing flexible waiting time before cruise departure.</p>
                            </div>

                            <div class="row align-items-center mt-50">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/cruise-port-transfer/3.webp') }}"
                                        alt="Luxury Fleet for Cruise Port Transfers" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Luxury Fleet for <span>Cruise Port Transfers</span></h2>
                                    <p>Cruise travel often involves luggage, families, and long-distance comfort requirements. Our <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>fleet</b></a> is designed for maximum convenience.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Vehicle Options</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Luxury sedans for solo travelers</li>
                                        <li><i class="fa fa-check"></i> Executive SUVs for families</li>
                                        <li><i class="fa fa-check"></i> Premium black cars for VIP travel</li>
                                        <li><i class="fa fa-check"></i> Sprinter vans for group cruise transfers</li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.party-bus') }}" style="color: var(--ve-gold);"><b>Party bus rental service</b></a> for large cruise groups</li>
                                    </ul>
                                </div>

                                <h3>Travel Comfort Features</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Spacious luggage capacity</li>
                                        <li><i class="fa fa-check"></i> Climate-controlled interiors</li>
                                        <li><i class="fa fa-check"></i> Smooth long-distance ride comfort</li>
                                        <li><i class="fa fa-check"></i> Clean and professionally maintained vehicles</li>
                                        <li><i class="fa fa-check"></i> Experienced cruise transfer chauffeurs</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Cruise Port Transport for <span>New Jersey & New York Residents</span></h2>
                                <p>We proudly serve passengers across New Jersey and New York metropolitan areas.</p>

                                <div class="mt-30">
                                    <h3>New Jersey Coverage Areas</h3>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Jersey City cruise transport</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Newark cruise transfers</b></a></li>
                                                    <li><i class="fa fa-check"></i> Hoboken waterfront pickups</li>
                                                    <li><i class="fa fa-check"></i> Bergen County transportation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Hudson County chauffeur service</li>
                                                    <li><i class="fa fa-check"></i> Essex County luxury transport</li>
                                                    <li><i class="fa fa-check"></i> Union County cruise transfers</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <h3>New York Coverage Areas</h3>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Manhattan cruise transport</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Brooklyn cruise terminal service</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Queens airport-to-port transfers</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Bronx group cruise travel</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Long Island cruise transport</b></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">This regional coverage improves service availability across both states for cruise travelers.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Easy Cruise Transfer <span>Booking Process</span></h2>

                                <h3>How to Book Cruise Port Transport</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Select pickup location (home, hotel, airport)</li>
                                        <li><i class="fa fa-check"></i> Choose cruise terminal destination</li>
                                        <li><i class="fa fa-check"></i> Select vehicle type</li>
                                        <li><i class="fa fa-check"></i> Enter cruise departure time</li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Confirm booking</b></a></li>
                                    </ul>
                                </div>
                                <p class="mt-20">We recommend advance booking during cruise seasons, holidays, and summer travel peaks.</p>
                            </div>

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/cruise-port-transfer/3.webp') }}"
                                        alt="Cruise Port Transport in New Jersey and New York" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Why Choose Alar Chauffeur Service for <span>Cruise Port Transport</span></h2>
                                    <p>Our cruise port transport in <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>New Jersey</b></a> is built for reliability, comfort, and professional service.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>What Makes Us Different</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Experienced cruise transfer chauffeurs</li>
                                        <li><i class="fa fa-check"></i> Strong NJ & NY port coverage</li>
                                        <li><i class="fa fa-check"></i> Real-time traffic route optimization</li>
                                        <li><i class="fa fa-check"></i> 24/7 availability for cruise schedules</li>
                                        <li><i class="fa fa-check"></i> Luxury fleet for all group sizes</li>
                                        <li><i class="fa fa-check"></i> Airport + cruise coordination services</li>
                                        <li><i class="fa fa-check"></i> Safe and punctual transportation</li>
                                    </ul>
                                </div>
                                <p class="mt-20">We ensure every cruise traveler arrives relaxed, on time, and fully prepared for departure.</p>
                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Frequently Asked <span>Questions</span></h2>
                                <div id="cruiseFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="cruiseFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#cruiseFaqOne"
                                                aria-expanded="true" aria-controls="cruiseFaqOne">
                                                Which cruise ports do you serve?
                                            </button>
                                        </div>
                                        <div id="cruiseFaqOne" class="collapse show"
                                            aria-labelledby="cruiseFaqHeadingOne" data-parent="#cruiseFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                We serve Manhattan Cruise Terminal, Brooklyn Cruise Terminal, Cape Liberty Cruise Port, and nearby regional ports.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="cruiseFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#cruiseFaqTwo"
                                                aria-expanded="false" aria-controls="cruiseFaqTwo">
                                                Do you provide airport to cruise port transfers?
                                            </button>
                                        </div>
                                        <div id="cruiseFaqTwo" class="collapse" aria-labelledby="cruiseFaqHeadingTwo"
                                            data-parent="#cruiseFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we provide direct transfers from JFK, Newark, LaGuardia, and other airports to cruise terminals.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="cruiseFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#cruiseFaqThree"
                                                aria-expanded="false" aria-controls="cruiseFaqThree">
                                                Can I book group cruise transportation?
                                            </button>
                                        </div>
                                        <div id="cruiseFaqThree" class="collapse"
                                            aria-labelledby="cruiseFaqHeadingThree" data-parent="#cruiseFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we offer group transportation including SUVs, vans, and party buses for cruise travel.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="cruiseFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#cruiseFaqFour"
                                                aria-expanded="false" aria-controls="cruiseFaqFour">
                                                Do you serve New Jersey and New York?
                                            </button>
                                        </div>
                                        <div id="cruiseFaqFour" class="collapse"
                                            aria-labelledby="cruiseFaqHeadingFour" data-parent="#cruiseFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we provide cruise port transport across New Jersey, New York, and nearby states.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="cruiseFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#cruiseFaqFive"
                                                aria-expanded="false" aria-controls="cruiseFaqFive">
                                                Is luggage assistance included?
                                            </button>
                                        </div>
                                        <div id="cruiseFaqFive" class="collapse"
                                            aria-labelledby="cruiseFaqHeadingFive" data-parent="#cruiseFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our chauffeurs assist with luggage handling during pickup and drop-off.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="cruiseFaqHeadingSix">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#cruiseFaqSix"
                                                aria-expanded="false" aria-controls="cruiseFaqSix">
                                                Is your cruise transport service available 24/7?
                                            </button>
                                        </div>
                                        <div id="cruiseFaqSix" class="collapse"
                                            aria-labelledby="cruiseFaqHeadingSix" data-parent="#cruiseFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our cruise port transport in New Jersey operates 24/7 based on cruise schedules and flight timings.
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

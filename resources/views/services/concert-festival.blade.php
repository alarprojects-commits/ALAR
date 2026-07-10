@extends('main')
@section('meta_title', 'Concert and Festival Limo Service New Jersey | Alar Chauffeur Service')
@section('meta_description', 'Book concert and festival limo service in New Jersey for luxury event transportation, private chauffeurs, airport transfers, and group travel.')
@section('content')

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('assets/img/our-services/concerts-and-festivals/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Arrive Like a Star</span>
        <h1>Concert and Festival Limo Service in <span>New Jersey</span></h1>
        <p class="text-white">Enjoy stress-free transportation to concerts, music festivals, cultural events, and live performances with luxury chauffeur service across New Jersey and New York.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Concerts & Festivals</li>
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
                        <img src="{{ asset('assets/img/our-services/concerts-and-festivals/1.webp') }}"
                            alt="Concert and Festival Limo Service in New Jersey" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Unforgettable Nights</span>
                        <h2>Concert and Festival Limo Service in New Jersey for an <span>Unforgettable Event Experience</span></h2>
                        <p class="ve-lead">A great concert or festival experience starts before you even arrive at the venue. From navigating crowded highways and searching for parking to coordinating transportation for friends and family, getting there can often be the most challenging part of the day.</p>

                        <p>Our <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>concert and festival limo service in New Jersey</b></a> is designed for music lovers, festival attendees, corporate groups, tourists, and local residents who want luxury transportation without the stress. Whether you're attending a sold-out arena concert, outdoor music festival, food festival, cultural celebration, or live entertainment event, our professional transportation services ensure a smooth and enjoyable journey.</p>

                        <p>At <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a>, we combine luxury vehicles, experienced chauffeurs, and personalized transportation solutions to create a premium travel experience throughout New Jersey and New York.</p>

                        <p>If you're searching for concert transportation near me, festival transportation service, event chauffeur service, or luxury limo service in New Jersey, our team is ready to deliver exceptional service from pickup to drop-off.</p>

                        <h2>Why Choose a Concert and Festival Limo Service <span>Instead of Driving?</span></h2>
                        <p>Major events often bring heavy traffic, expensive parking fees, road closures, and crowded rideshare pickup zones. Choosing our concert and festival limo service in New Jersey allows you to avoid these common frustrations and focus on enjoying the event.</p>

                        <h3>Benefits of Professional Event Transportation</h3>
                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Door-to-door luxury transportation</li>
                                        <li><i class="fa fa-check"></i> Professional and licensed chauffeurs</li>
                                        <li><i class="fa fa-check"></i> No parking or navigation concerns</li>
                                        <li><i class="fa fa-check"></i> Safe transportation after late-night events</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Flexible scheduling for event changes</li>
                                        <li><i class="fa fa-check"></i> Comfortable rides before and after the show</li>
                                        <li><i class="fa fa-check"></i> Convenient group travel options</li>
                                        <li><i class="fa fa-check"></i> Reliable pickup and return service</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mt-20">Whether you're attending a one-night concert or a multi-day festival, our transportation solutions help maximize comfort and convenience. <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book now in advance</b></a>.</p>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Transportation for Concerts, Music Festivals, and <span>Live Entertainment</span></h2>
                                <p>Our concert and festival limo service in New Jersey supports transportation for a wide variety of entertainment events throughout the region.</p>

                                <h3>Events We Frequently Serve</h3>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Music festivals</li>
                                                <li><i class="fa fa-check"></i> Live concerts</li>
                                                <li><i class="fa fa-check"></i> Summer festivals</li>
                                                <li><i class="fa fa-check"></i> Food and wine festivals</li>
                                                <li><i class="fa fa-check"></i> Cultural celebrations</li>
                                                <li><i class="fa fa-check"></i> Art festivals</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Theater performances</li>
                                                <li><i class="fa fa-check"></i> Comedy shows</li>
                                                <li><i class="fa fa-check"></i> Holiday events</li>
                                                <li><i class="fa fa-check"></i> Community festivals</li>
                                                <li><i class="fa fa-check"></i> Outdoor entertainment venues</li>
                                                <li><i class="fa fa-check"></i> Waterfront events</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">For travelers searching online for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> concert limo service</li>
                                                <li><i class="fa fa-check"></i> luxury transportation for concerts</li>
                                                <li><i class="fa fa-check"></i> music festival transportation</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> private event transportation</li>
                                                <li><i class="fa fa-check"></i> VIP concert transportation</li>
                                                <li><i class="fa fa-check"></i> entertainment venue transportation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Our chauffeur-driven transportation provides a dependable and luxurious solution.</p>
                            </div>

                            <div class="row align-items-center mt-50">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/concerts-and-festivals/2.webp') }}"
                                        alt="Private Chauffeur for Concert and Festival Travel" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Private Chauffeur Service for <span>Concert and Festival Travel</span></h2>
                                    <p>Some events deserve a more personalized transportation experience. Our <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>chauffeur service</b></a> offers dedicated transportation designed around your schedule.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Personalized Transportation for Every Event</h3>
                                <p>Our private chauffeur service is ideal for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Couples attending concerts</li>
                                        <li><i class="fa fa-check"></i> VIP guests</li>
                                        <li><i class="fa fa-check"></i> Corporate entertainment events</li>
                                        <li><i class="fa fa-check"></i> Festival attendees</li>
                                        <li><i class="fa fa-check"></i> Business travelers</li>
                                        <li><i class="fa fa-check"></i> Family outings</li>
                                        <li><i class="fa fa-check"></i> Celebrity transportation</li>
                                        <li><i class="fa fa-check"></i> Executive transportation needs</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Unlike standard transportation options, our chauffeurs focus on punctuality, privacy, professionalism, and customer satisfaction throughout the entire journey.</p>
                                <p>For clients seeking executive transportation, private black car service, or luxury chauffeur service, we provide premium solutions tailored to your needs.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Group Transportation for <span>Concerts and Festivals</span></h2>
                                <p>Many concerts and festivals are best enjoyed with friends, coworkers, family members, or fan groups. Coordinating multiple vehicles often creates unnecessary complications.</p>

                                <h3>Travel Together and Make the Experience Better</h3>
                                <p>Our <a href="{{ route('services.group-transportation') }}" style="color: var(--ve-gold);"><b>group transportation service</b></a> is perfect for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Friend groups</li>
                                                <li><i class="fa fa-check"></i> Bachelor and bachelorette parties</li>
                                                <li><i class="fa fa-check"></i> Birthday celebrations</li>
                                                <li><i class="fa fa-check"></i> Family reunions</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Corporate outings</li>
                                                <li><i class="fa fa-check"></i> Fan clubs</li>
                                                <li><i class="fa fa-check"></i> Festival groups</li>
                                                <li><i class="fa fa-check"></i> VIP event attendees</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">Benefits include:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> One coordinated transportation plan</li>
                                        <li><i class="fa fa-check"></i> Comfortable travel for everyone</li>
                                        <li><i class="fa fa-check"></i> Simplified arrival and departure</li>
                                        <li><i class="fa fa-check"></i> Cost-effective group transportation</li>
                                        <li><i class="fa fa-check"></i> Professional event logistics</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Our <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>luxury SUVs and executive vehicles</b></a> allow everyone to travel together comfortably and safely.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Concert and Festival Transportation to Major Venues in <span>New Jersey and New York</span></h2>
                                <p>Our concert and festival limo service in New Jersey covers major entertainment destinations throughout New Jersey while also supporting travel to <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>New York's most popular event venues</b></a>.</p>

                                <h3>Popular Event Destinations</h3>
                                <p>We frequently provide transportation to:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Concert arenas</li>
                                                <li><i class="fa fa-check"></i> Amphitheaters</li>
                                                <li><i class="fa fa-check"></i> Music halls</li>
                                                <li><i class="fa fa-check"></i> Stadium concerts</li>
                                                <li><i class="fa fa-check"></i> Festival grounds</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Performing arts centers</li>
                                                <li><i class="fa fa-check"></i> Convention centers</li>
                                                <li><i class="fa fa-check"></i> Entertainment districts</li>
                                                <li><i class="fa fa-check"></i> Waterfront venues</li>
                                                <li><i class="fa fa-check"></i> Outdoor event locations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">We also offer <a href="{{ route('services.sporting-events') }}" style="color: var(--ve-gold);"><b>sporting and event transportation</b></a> for major games, tournaments, championships, and entertainment events throughout the region.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Serving New Jersey's Most Popular <span>Cities and Counties</span></h2>
                                <p>Local expertise plays an important role in transportation planning. Our chauffeurs understand traffic patterns, event schedules, venue access points, and transportation logistics throughout New Jersey.</p>

                                <div class="mt-30">
                                    <h3>New Jersey Service Areas</h3>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Jersey City limo service</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Newark chauffeur service</b></a></li>
                                                    <li><i class="fa fa-check"></i> Bergen County limo service</li>
                                                    <li><i class="fa fa-check"></i> Hudson County transportation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Essex County black car service</li>
                                                    <li><i class="fa fa-check"></i> Middlesex County chauffeur service</li>
                                                    <li><i class="fa fa-check"></i> Union County luxury transportation</li>
                                                    <li><i class="fa fa-check"></i> Passaic County limo service</li>
                                                    <li><i class="fa fa-check"></i> Hoboken transportation service</li>
                                                    <li><i class="fa fa-check"></i> Elizabeth chauffeur service</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <h3>New York Event Transportation</h3>
                                    <p>We regularly provide transportation to:</p>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Manhattan concerts</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Brooklyn music festivals</b></a></li>
                                                    <li><i class="fa fa-check"></i> Queens entertainment venues</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Bronx cultural events</li>
                                                    <li><i class="fa fa-check"></i> Long Island festivals</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">This regional coverage helps strengthen our authority as a transportation provider serving both New Jersey and New York travelers.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Airport Transportation for <span>Festival and Concert Visitors</span></h2>
                                <p>Many visitors travel from across the country to attend major concerts, tours, and festivals.</p>

                                <h3>Airport Transportation Services</h3>
                                <p>Our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transportation service</b></a> includes:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Newark Liberty International Airport</li>
                                                <li><i class="fa fa-check"></i> John F. Kennedy International Airport</li>
                                                <li><i class="fa fa-check"></i> LaGuardia Airport</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Teterboro Airport</li>
                                                <li><i class="fa fa-check"></i> Private aviation terminals</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">Our airport transportation solutions are ideal for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Festival travelers</li>
                                        <li><i class="fa fa-check"></i> Touring artists</li>
                                        <li><i class="fa fa-check"></i> Corporate guests</li>
                                        <li><i class="fa fa-check"></i> VIP attendees</li>
                                        <li><i class="fa fa-check"></i> Out-of-state visitors</li>
                                    </ul>
                                </div>
                                <p class="mt-20">For seamless travel planning, many clients combine airport transportation with our <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>hourly chauffeur service</b></a> for flexible event transportation throughout their stay.</p>
                            </div>

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/concerts-and-festivals/3.webp') }}"
                                        alt="Luxury Fleet for Concert and Festival Transportation" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Luxury Fleet Built for <span>Event Transportation</span></h2>
                                    <p>The quality of your transportation should match the quality of the event you're attending.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Premium Vehicle Options</h3>
                                <p>Our <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>fleet</b></a> includes:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Luxury sedans</li>
                                        <li><i class="fa fa-check"></i> Executive SUVs</li>
                                        <li><i class="fa fa-check"></i> Premium black cars</li>
                                        <li><i class="fa fa-check"></i> Corporate transportation vehicles</li>
                                        <li><i class="fa fa-check"></i> Private chauffeur vehicles</li>
                                    </ul>
                                </div>

                                <h3>Fleet Features</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Spacious interiors</li>
                                        <li><i class="fa fa-check"></i> Comfortable seating</li>
                                        <li><i class="fa fa-check"></i> Climate-controlled cabins</li>
                                        <li><i class="fa fa-check"></i> Professional presentation</li>
                                        <li><i class="fa fa-check"></i> Quiet ride quality</li>
                                        <li><i class="fa fa-check"></i> Well-maintained luxury vehicles</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Whether you're attending a concert, festival, wedding, sporting event, or corporate gathering, our fleet delivers a premium transportation experience.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Additional Transportation Services <span>You May Need</span></h2>
                                <p>Many clients attending concerts and festivals also book additional transportation services before or after the event.</p>

                                <h3>Popular Related Services</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>Airport transportation service</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>Chauffeur service</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.group-transportation') }}" style="color: var(--ve-gold);"><b>Group transportation</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.sporting-events') }}" style="color: var(--ve-gold);"><b>Sporting and event limo service</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>Wedding limo service</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.corporate-transportation') }}" style="color: var(--ve-gold);"><b>Corporate transportation</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>Hourly chauffeur service</b></a></li>
                                        <li><i class="fa fa-check"></i> Point-to-point transportation</li>
                                        <li><i class="fa fa-check"></i> Long-distance transportation</li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>New Jersey to New York limo service</b></a></li>
                                    </ul>
                                </div>
                                <p class="mt-20">These internal transportation options help travelers create complete transportation plans for business, entertainment, and personal travel needs.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Easy Booking Process for <span>Concert and Festival Limo Service</span></h2>
                                <p>Booking transportation should be simple and convenient.</p>

                                <h3>How to Reserve Your Ride</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Choose your event date</li>
                                        <li><i class="fa fa-check"></i> Select pickup and destination locations</li>
                                        <li><i class="fa fa-check"></i> Confirm passenger count</li>
                                        <li><i class="fa fa-check"></i> Choose your preferred vehicle</li>
                                        <li><i class="fa fa-check"></i> Complete your reservation</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Advance booking is recommended for major concerts, summer festivals, holiday events, championship weekends, and sold-out performances.</p>
                                <p><a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book online today</b></a> and receive a special 10% discount on your reservation.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Why Choose Alar Chauffeur Service for Concert and Festival Limo Service in <span>New Jersey?</span></h2>
                                <p>Our commitment to professionalism, customer service, and reliable transportation has made us a preferred choice for travelers throughout New Jersey and New York.</p>
                                <p>When you choose our concert and festival limo service in New Jersey, you receive:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Experienced chauffeurs</li>
                                                <li><i class="fa fa-check"></i> Luxury transportation</li>
                                                <li><i class="fa fa-check"></i> Flexible scheduling</li>
                                                <li><i class="fa fa-check"></i> Regional expertise</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Professional customer support</li>
                                                <li><i class="fa fa-check"></i> Reliable airport transfers</li>
                                                <li><i class="fa fa-check"></i> Safe late-night transportation</li>
                                                <li><i class="fa fa-check"></i> Premium travel experiences</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Whether you're attending a local concert, a major music festival, a corporate event, or an entertainment venue in New York City, we are committed to providing transportation that exceeds expectations.</p>
                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Frequently Asked <span>Questions</span></h2>
                                <div id="concertFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="concertFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#concertFaqOne"
                                                aria-expanded="true" aria-controls="concertFaqOne">
                                                What types of concerts and festivals do you provide transportation for?
                                            </button>
                                        </div>
                                        <div id="concertFaqOne" class="collapse show"
                                            aria-labelledby="concertFaqHeadingOne" data-parent="#concertFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                We provide transportation for music festivals, live concerts, cultural celebrations, food festivals, art festivals, comedy shows, theater performances, and entertainment events.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="concertFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#concertFaqTwo"
                                                aria-expanded="false" aria-controls="concertFaqTwo">
                                                Do you provide group transportation for festivals?
                                            </button>
                                        </div>
                                        <div id="concertFaqTwo" class="collapse" aria-labelledby="concertFaqHeadingTwo"
                                            data-parent="#concertFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. Our group transportation service is ideal for friends, families, fan groups, and corporate teams attending events together.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="concertFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#concertFaqThree"
                                                aria-expanded="false" aria-controls="concertFaqThree">
                                                Can I book a private chauffeur for a concert?
                                            </button>
                                        </div>
                                        <div id="concertFaqThree" class="collapse"
                                            aria-labelledby="concertFaqHeadingThree" data-parent="#concertFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. Our chauffeur service offers personalized transportation with luxury vehicles and flexible scheduling.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="concertFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#concertFaqFour"
                                                aria-expanded="false" aria-controls="concertFaqFour">
                                                Do you provide airport transportation for visitors attending events?
                                            </button>
                                        </div>
                                        <div id="concertFaqFour" class="collapse"
                                            aria-labelledby="concertFaqHeadingFour" data-parent="#concertFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. We offer airport transportation to and from Newark Airport, JFK Airport, LaGuardia Airport, and private aviation terminals.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="concertFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#concertFaqFive"
                                                aria-expanded="false" aria-controls="concertFaqFive">
                                                Do you serve both New Jersey and New York event venues?
                                            </button>
                                        </div>
                                        <div id="concertFaqFive" class="collapse"
                                            aria-labelledby="concertFaqHeadingFive" data-parent="#concertFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. We provide transportation throughout New Jersey and frequently serve event venues in Manhattan, Brooklyn, Queens, the Bronx, and Long Island.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="concertFaqHeadingSix">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#concertFaqSix"
                                                aria-expanded="false" aria-controls="concertFaqSix">
                                                Is your concert and festival limo service available year-round?
                                            </button>
                                        </div>
                                        <div id="concertFaqSix" class="collapse"
                                            aria-labelledby="concertFaqHeadingSix" data-parent="#concertFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. Our concert and festival limo service in New Jersey operates 24/7 and is available for concerts, music festivals, sporting events, corporate entertainment, and special occasions throughout the year.
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

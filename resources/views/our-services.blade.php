@extends('main')
@section('meta_title', 'Chauffeur Service New Jersey & Airport Limo | Alar')
@section('meta_description', 'Explore Alar chauffeur service in New Jersey: airport chauffeur, corporate transport, group travel, cruise ports, and hourly black car across NJ and NYC.')
@section('og_image', asset('assets/img/banner/our-services.webp'))
@section('og_type', 'website')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "Organization",
      "@@id": "https://alarchauffeurservice.com/#organization",
      "name": "ALAR Chauffeur Service",
      "url": "https://alarchauffeurservice.com",
      "logo": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "telephone": {!! config('contact.phones_schema_json') !!},
      "email": "limo@alarchauffeurservice.com",

      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "10 Fairmount Ave",
        "addressLocality": "Edison",
        "addressRegion": "NJ",
        "postalCode": "08820",
        "addressCountry": "US"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/our-services#breadcrumb",
      "itemListElement": [
        {
          "@@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://alarchauffeurservice.com"
        },
        {
          "@@type": "ListItem",
          "position": 2,
          "name": "Our Services",
          "item": "https://alarchauffeurservice.com/our-services"
        }
      ]
    },

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/our-services#webpage",
      "url": "https://alarchauffeurservice.com/our-services",
      "name": "Our Chauffeur Services | Alar Chauffeur Service NJ",
      "description": "Explore Alar's luxury transport services: airport transfers, corporate travel, weddings, proms, cruise transfers & group travel across New Jersey.",
      "image": "https://alarchauffeurservice.com/assets/img/banner/our-services.webp",

      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },

      "about": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      }
    },

    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/airport-transportation#service",
      "name": "Airport Transportation",
      "serviceType": "Airport Chauffeur & Limo Service",
      "url": "https://alarchauffeurservice.com/services/airport-transportation",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/corporate-transportation#service",
      "name": "Corporate Transportation",
      "serviceType": "Executive & Corporate Travel",
      "url": "https://alarchauffeurservice.com/services/corporate-transportation",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/wedding-limo#service",
      "name": "Wedding Limo Service",
      "serviceType": "Wedding Transportation",
      "url": "https://alarchauffeurservice.com/services/wedding-limo",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/prom-limo#service",
      "name": "Prom Limo Service",
      "serviceType": "Prom & Formal Event Transportation",
      "url": "https://alarchauffeurservice.com/services/prom-limo",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/sporting-events#service",
      "name": "Sporting Events Transportation",
      "serviceType": "Sports & Stadium Chauffeur Service",
      "url": "https://alarchauffeurservice.com/services/sporting-events",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/group-transportation#service",
      "name": "Group Transportation",
      "serviceType": "Group & Van Transportation",
      "url": "https://alarchauffeurservice.com/services/group-transportation",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/concert-festival#service",
      "name": "Concerts and Festival Transportation",
      "serviceType": "Concert & Festival Chauffeur Service",
      "url": "https://alarchauffeurservice.com/services/concert-festival",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/party-bus#service",
      "name": "Party Bus Service",
      "serviceType": "Party Bus Rentals",
      "url": "https://alarchauffeurservice.com/services/party-bus",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/cruise-port-transfers#service",
      "name": "Cruise Port Transfers",
      "serviceType": "Cruise Terminal Transfers",
      "url": "https://alarchauffeurservice.com/services/cruise-port-transfers",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/chauffeured-service#service",
      "name": "Chauffeured Service",
      "serviceType": "Private Black Car & Chauffeur Service",
      "url": "https://alarchauffeurservice.com/services/chauffeured-service",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/hourly-limo#service",
      "name": "Hourly Limo Service",
      "serviceType": "By-The-Hour Chauffeur Service",
      "url": "https://alarchauffeurservice.com/services/hourly-limo",
      "provider": { "@@id": "https://alarchauffeurservice.com/#organization" },
      "areaServed": { "@@type": "State", "name": "New Jersey" }
    }

  ]
}
</script>
@endpush

@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero-simple">
    <div class="container">
        <div class="ve-hero-simple-content">
            <span class="ve-section-tag">What We Offer</span>
            <h1>Chauffeur Service &amp; Airport Limo in <span>New Jersey</span></h1>
            <p>Airport chauffeur service NJ, corporate transportation, group travel, cruise ports, and hourly black car-booked with professional chauffeurs across the Tri-State. Explore our <a href="{{ route('airports.index') }}" style="color: var(--ve-gold);"><b>airport guides</b></a> and <a href="{{ route('service-areas.index') }}" style="color: var(--ve-gold);"><b>service areas</b></a>.</p>
            <div class="ve-hero-ctas">
                <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
                <a href="{{ route('free-quote') }}" class="ve-btn-outline">Free Quote</a>
                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
            </div>
        </div>
    </div>
</section>

    <!-- ===== SERVICES GRID ===== -->
    <section class="ve-section bg-light">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Luxury Choice</span>
                <h2>Professional <span>Transportation Solutions</span></h2>
                <p>We provide a comprehensive range of luxury chauffeur services tailored to your specific needs.</p>
            </div>

            <div class="row">
                <!-- Airport Transportation -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" role="img" aria-label="Chauffeur opening the door of a luxury Alar Chauffeur Service vehicle"
                            style="background-image:url({{ asset('assets/img/our-services/aiport-transfer.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Airport Transportation</h5>
                            <p>Reliable and luxurious transportation to and from all major airports with professional
                                terminal meet and greet.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Corporate Transportation -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/corporate-limo.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Corporate Transportation</h5>
                            <p>Sophisticated transportation solutions for executives and business events with premium
                                comfort and punctuality.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.corporate-transportation') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Hourly Limo -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/hourly-limo.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Hourly Limo</h5>
                            <p>Flexible hourly chauffeur service in New Jersey City for airports, meetings, events, and private rides on your schedule.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Wedding Limo -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/wedding-transportation.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Wedding Limo</h5>
                            <p>Make your special day unforgettable with our elegant and beautifully decorated wedding
                                limousines.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Prom Limo -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                                style="background-image:url({{ asset('assets/img/our-services/prom-night.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Prom Limo</h5>
                            <p>Arrive in style and safety. Our professional chauffeurs ensure a memorable and secure night
                                for students.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.prom-limo') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Sporting Events -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/sporting-events.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Sporting Events</h5>
                            <p>Skip the parking hassle. Travel with your friends directly to the stadium in our luxury SUVs
                                or buses.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.sporting-events') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Group Transportation -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/group-transportation.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Group Transportation</h5>
                            <p>Efficient and comfortable travel for large groups, conventions, and family gatherings in our
                                premium vans.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.group-transportation') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Concerts and Festivals -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/concerts-and-festivals.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Concerts and Festivals</h5>
                            <p>Experience the music without the stress. Enjoy door to door service to your favorite music
                                venues.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.concert-festival') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Party Buses -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/party-bus.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Party Buses</h5>
                            <p>The ultimate mobile celebration. Equipped with premium lighting and sound systems for your
                                night out.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.party-bus') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Cruise Port Transfers -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/cruise-limo.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Cruise Port Transfers</h5>
                            <p>Start your vacation early with a stress free ride to the cruise terminal with plenty of room
                                for luggage.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.cruise-port-transfers') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>

                <!-- Chauffeur Service -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/chauffeured-service.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Chauffeured Service</h5>
                            <p>Experience safe, private, and luxury transportation with Alar Chauffeur Service for city
                                travel, airport transfers, and long-distance journeys.</p>
                            @include('components.cta-buttons', ['variant' => 'compact'])
                            <p class="mt-3 mb-0"><a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Plan Your Trip</span>
                <h2>Airports &amp; Service <span>Areas</span></h2>
                <p>Match your service to the right corridor-Tri-State airports, New Jersey coverage, and West Coast hubs.</p>
            </div>
            @include('components.related-service-links', ['cluster' => 'default'])
        </div>
    </section>

    <!-- ===== HOW IT WORKS (Process Steps) ===== -->
    <section class="ve-process-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Simple Process</span>
                <h2>How It <span>Works</span></h2>
                <p>Getting a luxury ride with Alar Chauffeur Service is as easy as 1, 2, 3, and 4. We handle the details so you can sit back
                    and relax.</p>
            </div>
            <div class="ve-process-grid">
                <div class="ve-process-step wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-process-num">01</div>
                    <h5>Book Your Ride</h5>
                    <p>Use our online form or call us directly. Share your date, time, and pickup location.</p>
                </div>
                <div class="ve-process-arrow wow fadeIn" data-wow-delay="150ms"><i class="fa fa-chevron-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-process-num">02</div>
                    <h5>Get Confirmation</h5>
                    <p>Receive instant confirmation with your chauffeur's details and vehicle assignment.</p>
                </div>
                <div class="ve-process-arrow wow fadeIn" data-wow-delay="250ms"><i class="fa fa-chevron-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-process-num">03</div>
                    <h5>Enjoy the Ride</h5>
                    <p>Your professional chauffeur arrives 15 minutes early in a meticulously maintained vehicle.</p>
                </div>
                <div class="ve-process-arrow wow fadeIn" data-wow-delay="350ms"><i class="fa fa-chevron-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-process-num">04</div>
                    <h5>Arrive in Style</h5>
                    <p>Arrive at your destination refreshed, relaxed, and right on time, every single time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US (Split Section) ===== -->
    <section class="ve-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-about-text">
                        <div class="ve-about-img-1 bg-img"
                            style="background-image:url({{ asset('assets/img/about-us/excellence-and-discretion-2.webp') }});">
                        </div>
                        <div class="ve-about-img-2 bg-img"
                            style="background-image:url({{ asset('assets/img/about-us/excellence-in-luxury-1.webp') }});">
                        </div>
                    </div>
                </div>
                <!-- Content Side -->
                <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div>
                        <span class="ve-section-tag">The Alar Difference</span>
                        <h2>Why Clients Trust <span>Our Services</span></h2>
                        <p class="ve-lead">More than just transportation, we deliver a premium, end to end travel
                            experience tailored to your needs.</p>
                        <p>From airport pickups to dream weddings, our fleet of late model luxury vehicles and
                            professionally trained chauffeurs ensure every journey is seamless, safe, and unforgettable.</p>
                        <div class="ve-about-features">
                            <div class="ve-af-item"><i class="fa fa-shield"></i><span>Fully Licensed and Insured Fleet</span>
                            </div>
                            <div class="ve-af-item"><i class="fa fa-clock-o"></i><span>24/7 Availability: Any Hour, Any
                                    Day</span></div>
                            <div class="ve-af-item"><i class="fa fa-diamond"></i><span>Premium Amenities in Every
                                    Vehicle</span></div>
                            <div class="ve-af-item"><i class="fa fa-users"></i><span>Vehicles for 1 to 40+ Passengers</span>
                            </div>
                            <div class="ve-af-item"><i class="fa fa-money"></i><span>Transparent Pricing and No Hidden
                                    Fees</span></div>
                            <div class="ve-af-item"><i class="fa fa-star"></i><span>5 Star Rated by Thousands of
                                    Clients</span></div>
                        </div>
                        @include('components.cta-buttons', ['variant' => 'compact'])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SERVICE PROMISE (Highlights Strip) ===== -->
    <section class="ve-svc-promise-section">
        <div class="container">
            <div class="ve-svc-promise-grid">
                <div class="ve-svc-promise-item wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-svc-promise-icon"><i class="fa fa-map-marker"></i></div>
                    <h5>Door to Door Service</h5>
                    <p>Pick up and drop off right at your doorstep. No terminals, no waiting in lines.</p>
                </div>
                <div class="ve-svc-promise-item wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-svc-promise-icon"><i class="fa fa-lock"></i></div>
                    <h5>Safety First</h5>
                    <p>DOT compliant vehicles, background checked drivers, and real time GPS tracking.</p>
                </div>
                <div class="ve-svc-promise-item wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-svc-promise-icon"><i class="fa fa-refresh"></i></div>
                    <h5>Flexible Changes</h5>
                    <p>Plans change? So do we. Free modifications up to 24 hours before your ride.</p>
                </div>
                <div class="ve-svc-promise-item wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-svc-promise-icon"><i class="fa fa-headphones"></i></div>
                    <h5>Dedicated Support</h5>
                    <p>Our concierge team is available around the clock for any requests or questions.</p>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

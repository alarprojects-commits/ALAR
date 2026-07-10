@extends('main')
@section('meta_title', 'Limo Service In New Jersey | Alar Chauffeur Service')
@section('meta_description', 'Premium limo service in New Jersey by ALAR Chauffeur Service. Luxury SUVs, sedans, and
party buses for airport transfers, events, and group travel. ')

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
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "logo": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "email": "limo@alarchauffeurservice.com",
      "telephone": {!! config('contact.phones_schema_json') !!},

      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "10 Fairmount Ave",
        "addressLocality": "Edison",
        "addressRegion": "NJ",
        "postalCode": "08820",
        "addressCountry": "US"
      },

      "sameAs": [
        "https://www.facebook.com/profile.php?id=61581788001748",
        "https://www.instagram.com/alar_chauffeur_service/",
        "https://x.com/Alar_chauffeur",
        "https://linkedin.com/in/alar-chauffeur-services-415862383",
        "https://www.youtube.com/@AlarChauffeurService",
        "https://www.scoop.it/u/alar-chauffeur-service",
        "https://maps.app.goo.gl/fKaPB2j36gVbcbcq9"
      ],

      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": {!! config('contact.phones_schema_json') !!},
        "contactType": "customer service",
        "areaServed": "US",
        "availableLanguage": ["English"]
      },

      "keywords": [
        "airport transfer",
        "luxury chauffeur service",
        "black car service",
        "corporate travel",
        "wedding transportation",
        "party bus service",
        "FIFA World Cup 2026 transportation"
      ],

      "knowsAbout": [
        "Airport Transfer",
        "Luxury Chauffeur Service",
        "Corporate Travel",
        "Black Car Service",
        "Wedding Transportation",
        "Event Transportation",
        "Hourly Chauffeur Service",
        "Group Transportation",
        "Party Bus Service",
        "Prom Night Service",
        "Concert Transportation",
        "Festival Transportation",
        "Sporting Event Transportation",
        "VIP Transportation",
        "Stadium Transportation",
        "JFK Airport Transportation",
        "LaGuardia Airport Transportation",
        "Newark Airport Transportation",
        "Los Angeles Airport Transportation",
        "San Francisco Airport Transportation",
        "Las Vegas Airport Transportation",
        "Seattle Airport Transportation",
        "FIFA World Cup 2026 Transportation"
      ]
    },

    {
      "@@type": "LimousineService",
      "@@id": "https://alarchauffeurservice.com/#localbusiness",
      "name": "ALAR Chauffeur Service",
      "url": "https://alarchauffeurservice.com",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "telephone": {!! config('contact.phones_schema_json') !!},
      "email": "limo@alarchauffeurservice.com",
      "priceRange": "$250-$3000",

      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "10 Fairmount Ave",
        "addressLocality": "Edison",
        "addressRegion": "NJ",
        "postalCode": "08820",
        "addressCountry": "US"
      },

      "openingHoursSpecification": [
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
          ],
          "opens": "00:00",
          "closes": "23:59"
        }
      ],

      "paymentAccepted": ["Cash", "Credit Card", "Debit Card"],
      "currenciesAccepted": "USD",

      "areaServed": [
        { "@@type": "State", "name": "New Jersey" },
        { "@@type": "State", "name": "New York" },
        { "@@type": "State", "name": "California" },
        { "@@type": "State", "name": "Nevada" },

        { "@@type": "City", "name": "Kansas City" },

        { "@@type": "Airport", "name": "John F. Kennedy International Airport" },
        { "@@type": "Airport", "name": "LaGuardia Airport" },
        { "@@type": "Airport", "name": "Newark Liberty International Airport" },
        { "@@type": "Airport", "name": "Los Angeles International Airport" },
        { "@@type": "Airport", "name": "San Francisco International Airport" },
        { "@@type": "Airport", "name": "Harry Reid International Airport" },
        { "@@type": "Airport", "name": "Seattle-Tacoma International Airport" }
      ],

      "serviceType": [
        "Airport Transfer",
        "Corporate Travel",
        "Wedding Transportation",
        "Hourly Chauffeur Service",
        "Black Car Service",
        "Party Bus Service",
        "Concert Transportation",
        "Festival Transportation",
        "Sporting Event Transportation",
        "Prom Night Service",
        "Group Transportation",
        "VIP Transportation",
        "Stadium Transportation",
        "FIFA World Cup 2026 Transportation"
      ]
    },

    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/#services",
      "name": "Luxury Chauffeur Transportation Services",
      "provider": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      },

      "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "All Chauffeur Services",

        "itemListElement": [

          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Airport Transfer" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Corporate Travel" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Wedding Transportation" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Hourly Chauffeur Service" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Black Car Service" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Party Bus Service" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Concert Transportation" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Festival Transportation" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Sporting Events Transportation" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Prom Night Service" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Group Transportation" } },
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "VIP Transportation" } },

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "FIFA World Cup 2026 Transportation",
              "url": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation",
              "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
              "description": "Premium chauffeur and VIP transportation service for FIFA World Cup 2026 including airport transfers, stadium transportation, corporate group travel, and event mobility."
            }
          }

        ]
      }
    },

    {
      "@@type": "WebSite",
      "@@id": "https://alarchauffeurservice.com/#website",
      "url": "https://alarchauffeurservice.com",
      "name": "ALAR Chauffeur Service",
      "publisher": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      },
      "potentialAction": {
        "@@type": "SearchAction",
        "target": "https://alarchauffeurservice.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/#homepage",
      "url": "https://alarchauffeurservice.com",
      "name": "Luxury Chauffeur Service | Airport Transfers | Corporate & Events",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",

      "about": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      },

      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      }
    }

  ]
}
</script>
@endpush

@section('content')

<!-- ===== HERO: Split layout — left text, right image panel ===== -->
<section class="ve-hero">
    <!-- Left Panel -->
    <div class="ve-hero-left">
        <h1>WELCOME TO <span class="ve-highlight">ALAR CHAUFFEUR SERVICE</span><br> WITH WORLD-CLASS FLEETS</h1>
        <p>For over three years, Alar Chauffeur Service has been a trusted choice for premium chauffeur and luxury
            transportation services. We proudly serve clients across <a href="{{ route('service-area.new-jersey') }}"
                style="color: var(--ve-gold);"><b>New Jersey</b></a>, <a href="{{ route('service-area.new-york') }}"
                style="color: var(--ve-gold);"><b>New York</b></a>, <a href="{{ route('service-area.san-francisco') }}"
                style="color: var(--ve-gold);"><b>San Francisco</b></a>, and <a
                href="{{ route('service-area.san-francisco') }}" style="color: var(--ve-gold);"><b>Nevada</b></a>,
            delivering reliable, high-quality rides for every occasion. Whether you’re planning a wedding, corporate
            event, <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport
                    transfer</b></a>, or a night out, our team ensures every detail is handled with precision, care, and
            a level of service that reflects our growing reputation.</p>
        <p>Every vehicle in <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>our fleet</b></a> is
            carefully inspected before each booking and professionally detailed on the day of service.Getting started is
            quick and convenient. <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Request a quote
                    online</b></a> in justminutes, and our team will assist you with vehicle selection, transparent
            pricing, availability, and enjoy 10% off.</p>
        <div class="ve-hero-btns">
            <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost">Call Now</a>
        </div>
    </div>
    <!-- Right Panel: overlapping image cards -->
    <div class="ve-hero-right">
        <div class="ve-hero-img-main bg-img" style="background-image:url(../assets/img/slider/slider-1.webp);">
        </div>
        <div class="ve-hero-img-accent bg-img" style="background-image:url(../assets/img/slider/slider-2.webp);">
        </div>
        <!-- Floating card -->

    </div>
</section>

<section class="ve-section ve-whyus-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Side -->
            <div class="col-12 col-lg-5 order-md-2 order-2 order-lg-0">
                <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-whyus-img-main bg-img"
                        style="background-image:url(../assets/img/about-us/excellence-and-discretion-2.webp);">
                    </div>
                    <div class="ve-whyus-badge">
                        <strong>3+</strong>
                        <span>Years of Excellence</span>
                    </div>
                </div>
            </div>
            <!-- Content Side -->
            <div class="col-12 col-lg-7 order-md-1 order-1 mb-5 order-lg-0 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">About Us</span>
                    <h2>Premium Limousine Services & Party Bus Rentals for Weddings, Proms, and Special Events <span>in
                            New Jersey</span></h2>
                    <p>Alar Chauffeur Service delivers a smarter way to travel in luxury by combining premium vehicles
                        with highly trained professional chauffeurs for a smooth, stylish, and reliable experience.
                        Serving <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-dark);"><b>New
                                Jersey</b></a>, New York, California, San Francisco, Nevada, Seattle, and
                        Kansas City, we provide airport transfers, corporate travel, <a
                            href="{{ route('services.wedding-limo') }}"
                            style="color: var(--ve-dark);"><b>weddings</b></a>, proms, and
                        event transportation designed with comfort, punctuality, and elegance in mind. Every ride
                        reflects our commitment to high-end service and consistent quality..</p>
                    <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <a href="{{ route('book-online') }}" class="ve-btn-primary"
                            style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                            style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== MAJOR AIRPORTS GRID ===== -->
<section class="ve-airport-grid-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">National Coverage</span>
            <h2>Major Airports <span>We Serve</span></h2>
            <p>We provide premium chauffeur services to and from the most significant travel hubs across the country.
            </p>
        </div>

        <div class="row g-4 gy-5">
            <!-- Row 1 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-text">
                    <h4>JFK Airport Limo Service NYC</h4>
                    <p>John F. Kennedy International Airport is our specialty. We provide professional car and limo
                        services to JFK from all five boroughs and beyond.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/jfk.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-text">
                    <h4>LGA Limo Service LaGuardia</h4>
                    <p>Experience seamless transfers to and from LaGuardia Airport. Our chauffeurs ensure you never miss
                        a flight or a critical business meeting.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/lga.webp') }});"></div>
            </div>

            <!-- Row 2 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/ewr.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-text">
                    <h4>Newark Airport Limo Service EWR</h4>
                    <p>Whether you are a corporate executive or a family traveler, we have the perfect vehicle for your
                        Newark Liberty International trip.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/sfo.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-text">
                    <h4>San Francisco International SFO</h4>
                    <p>Arrive in the Bay Area with absolute confidence. Our SFO chauffeur service provides premium
                        transportation to San Francisco and Silicon Valley.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-text">
                    <h4>Harry Reid International LAS</h4>
                    <p>Experience the excitement of Las Vegas from the moment you land. We provide seamless, high class
                        transfers from Harry Reid Airport to the Strip.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/las.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-text">
                    <h4>Seattle-Tacoma International SEA</h4>
                    <p>Reliable airport transfers in the Pacific Northwest. We serve Sea-Tac with the same commitment to
                        excellence and absolute punctuality for every traveler.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/sea.webp') }});">
                </div>
            </div>

            <!-- Row 4 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/mci.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-text">
                    <h4>Kansas City International MCI</h4>
                    <p>Your local partner for professional travel. We provide premium chauffeur services to and from
                        MCI, ensuring a smooth start to your journey from home.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/lax.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-text">
                    <h4>Los Angeles International LAX</h4>
                    <p>Navigate the West Coast with ease. Our LAX airport service provides a stress free alternative to
                        the famous Southern California traffic.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES GRID (new card layout) ===== -->
<section class="ve-section ve-services-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Alar Choice</span>
            <h2>Our <span>Features</span></h2>
            <p>Discover the premium amenities and standards that set Alar Chauffeur Service apart.</p>
        </div>
        <div class="ve-services-grid">
            <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-service-icon"><i class="fa fa-plane"></i></div>
                <h4>Airport Transfers</h4>
                <p>Reliable and punctual pickups from all major airports. Your chauffeur awaits you at the terminal.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-service-icon"><i class="fa fa-briefcase"></i></div>
                <h4>Corporate Travel</h4>
                <p>Impress your business partners with our executive class service and quiet, comfortable interiors.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-service-icon"><i class="fa fa-heart"></i></div>
                <h4>Wedding Limousine</h4>
                <p>Make your special day unforgettable with our beautifully decorated wedding limousines.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-service-icon"><i class="fa fa-glass"></i></div>
                <h4>Night Out Service</h4>
                <p>Celebrate in style without worrying about traffic or parking. Luxury travel for your party night.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                <div class="ve-service-icon"><i class="fa fa-star"></i></div>
                <h4>Special Events</h4>
                <p>From proms to anniversaries, we add a touch of class to every celebratory occasion you host.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                <div class="ve-service-icon"><i class="fa fa-car"></i></div>
                <h4>Our Fleet</h4>
                <p>Explore our range of late model sedans, SUVs, and stretch limousines for your next trip.</p>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SPLIT -->
<section class="ve-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                <div>
                    <span class="ve-section-tag">Why Choose Us</span>
                    <h2>The Alar Standard in <span>Luxury Travel</span></h2>
                    <p class="ve-lead">We are a team of professional transportation specialists dedicated to providing
                        more than just a ride, we provide a premium travel experience.</p>
                    <p>Founded in 2023, our service was built on a single mission: to redefine luxury transportation
                        through punctuality, safety, and unparalleled comfort. Today, we operate a world class fleet
                        serving thousands of satisfied clients.</p>
                    <div class="ve-about-features">
                        <div class="ve-af-item"><i class="fa fa-badge"></i><span>Certified Professional
                                Chauffeurs</span></div>
                        <div class="ve-af-item"><i class="fa fa-shield"></i><span>Fully Insured and Licensed
                                Fleet</span>
                        </div>
                        <div class="ve-af-item"><i class="fa fa-clock-o"></i><span>Guaranteed On Time Arrival</span>
                        </div>
                        <div class="ve-af-item"><i class="fa fa-star"></i><span>5 Star Premium Amenities</span></div>
                        <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="#" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book
                                Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                            style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow fadeInLeft " data-wow-delay="100ms">
                <div class="ve-about-text">
                    <div class="ve-about-img-1 bg-img"
                        style="background-image:url({{ asset('assets/img/about-us/excellence-and-discretion-1.webp') }});">
                    </div>
                    <div class="ve-about-img-2 bg-img"
                        style="background-image:url({{ asset('assets/img/about-us/excellence-in-luxury-1.webp') }});">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== COUNTERS ===== -->
<section class="ve-counter-section">
    <div class="container">
        <div class="ve-counter-grid">
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                <i class="fa fa-users"></i>
                <strong class="counter" data-count="2000">0</strong><span>+</span>
                <p>Happy Passengers</p>
            </div>
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                <i class="fa fa-car"></i>
                <strong class="counter" data-count="50">0</strong><span>+</span>
                <p>Luxury Vehicles</p>
            </div>
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                <i class="fa fa-map-marker"></i>
                <strong class="counter" data-count="10">0</strong><span>+</span>
                <p>Cities Covered</p>
            </div>
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                <i class="fa fa-star"></i>
                <strong class="counter" data-count="3">0</strong><span>+</span>
                <p>Years of Excellence</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== SUPERIOR AMENITIES (Icon Highlights) ===== -->
<section class="ve-section ve-home-amenities">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Luxury Standard</span>
            <h2>Superior <span>On Board Amenities</span></h2>
            <p>We provide more than just a ride; we provide an environment of absolute comfort and sophistication.</p>
        </div>
        <div class="ve-amenities-grid">
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-amenity-icon"><i class="fa fa-diamond"></i></div>
                <h5>First Class Seating</h5>
                <p>Meticulously crafted leather interiors designed for ultimate relaxation.</p>
            </div>
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-amenity-icon"><i class="fa fa-thermometer-half"></i></div>
                <h5>Climate Control</h5>
                <p>Individualized temperature zones to suit your personal preference.</p>
            </div>
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-amenity-icon"><i class="fa fa-music"></i></div>
                <h5>Entertainment</h5>
                <p>High-fidelity audio systems and seamless multi media connectivity.</p>
            </div>
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-amenity-icon"><i class="fa fa-lock"></i></div>
                <h5>Absolute Privacy</h5>
                <p>Advanced privacy partitions and tinted windows for total discretion.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== OUR SERVICES (Image Cards) ===== -->
<section class="ve-section ve-services-visual-section" style="background-color: var(--ve-light);">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Premium Experience</span>
            <h2>Our Best <span>Services</span></h2>
            <p>We provide professionally chauffeured luxury transportation services for all your special needs.</p>
        </div>
        <div class="row gy-5">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/our-services/aiport-transfer.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Airport Transportation</h5>
                        <p>Reliable and luxurious transportation to and from all major airports with professional
                            chauffeurs.</p>
                        <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="{{ route('services.airport-transportation') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="250ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/our-services/wedding-transportation.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Wedding Limo</h5>
                        <p>Make your wedding day unforgettable with our elegant and beautifully decorated stretch
                            limousines.</p>
                        <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="{{ route('services.wedding-limo') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/our-services/corporate-limo.webp') }});"></div>
                    <div class="ve-insight-body">
                        <h5>Corporate Transportation</h5>
                        <p>Sophisticated transportation solutions for executives and business events with premium
                            comfort.</p>
                        <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="{{ route('services.corporate-transportation') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 text-center wow fadeInUp" data-wow-delay="500ms">
                <a href="{{ route('our-services') }}" class="ve-btn-primary">View More Services</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== OUR FLEET ===== -->
<section class="ve-section ve-fleet-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Luxury Fleet</span>
            <h2>Experience Our <span>Premium Vehicles</span></h2>
            <p>Choose from our diverse collection of late model, meticulously maintained luxury vehicles.</p>
        </div>
        <div class="row gy-5">
            <!-- Fleet 1 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/fleet/mercedes-s550.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Mercedes Benz S550</h5>
                        <p>The pinnacle of luxury sedans, perfect for executive travel and airport transfers.</p>
                        <div class="ve-insight-meta">
                            <span><i class="fa fa-user"></i> 3 Passengers</span>
                            <span><i class="fa fa-briefcase"></i> 3 Bags</span>
                        </div>
                        <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                            style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fleet 2 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="250ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/fleet/cadillac-escalade.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Cadillac Escalade</h5>
                        <p>Spacious, powerful, and iconic. The ideal choice for groups and long distance travel.</p>
                        <div class="ve-insight-meta">
                            <span><i class="fa fa-user"></i> 6 Passengers</span>
                            <span><i class="fa fa-briefcase"></i> 6 Bags</span>
                        </div>
                        <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                            style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fleet 3 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/fleet/escalade-limo.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Escalade Stretch Limo</h5>
                        <p>Ultimate luxury for your special events, weddings, and party nights with premium lighting.
                        </p>
                        <div class="ve-insight-meta">
                            <span><i class="fa fa-user"></i> 14 Passengers</span>
                            <span><i class="fa fa-glass"></i> Mini Bar</span>
                        </div>
                        <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                            style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 text-center wow fadeInUp" data-wow-delay="500ms">
                <a href="{{ route('our-fleet') }}" class="ve-btn-primary">View All Fleet</a>
            </div>
        </div>
    </div>
</section>

@include('components.google-reviews', [
    'reviews' => $reviews,
    'googleReviewsUrl' => $googleReviewsUrl,
    'googleWriteUrl' => $googleWriteUrl,
])

@include('components.cta')
@endsection

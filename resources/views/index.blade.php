@extends('main')
@section('meta_title', 'Airport Car Service NJ to JFK, LGA & EWR | No Surge | Alar')
@section('meta_description', 'Tired of surge pricing? Lock your flat rate before you ride. Flight-tracked chauffeurs to JFK, LGA & Newark from Edison, NJ. Book online in minutes.')
@section('og_image', asset('assets/img/slider/slider-1.webp'))
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
        "luxury chauffeur service",
        "black car service",
        "corporate travel",
        "wedding transportation",
        "hourly chauffeur",
        "party bus service"
      ],

      "knowsAbout": [
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
        "Stadium Transportation"
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
@if(!empty($reviews['rating']) && !empty($reviews['total']))
      "aggregateRating": {
        "@@type": "AggregateRating",
        "ratingValue": "{{ $reviews['rating'] }}",
        "reviewCount": "{{ $reviews['total'] }}",
        "bestRating": "5",
        "worstRating": "1"
      },
@endif

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
        { "@@type": "State", "name": "Connecticut" },
        { "@@type": "State", "name": "Pennsylvania" },
        { "@@type": "State", "name": "Massachusetts" },
        { "@@type": "State", "name": "California" },
        { "@@type": "State", "name": "Nevada" },
        { "@@type": "State", "name": "Washington" }
      ],

      "serviceType": [
        "Luxury Chauffeur Service",
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
        "Stadium Transportation"
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

          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Luxury Chauffeur Service" } },
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
          { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "VIP Transportation" } }

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
      "name": "Luxury Chauffeur Service | Corporate Travel & Private Events",
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

{{-- Hero background: replace assets/img/slider/hero-bg.webp with your final image --}}
<section class="ve-hero ve-hero-cinematic" style="background-image:url({{ asset('assets/img/slider/hero-bg.webp') }});">
    <div class="ve-hero-cinematic-overlay"></div>
    <div class="container ve-hero-cinematic-inner">
        <div class="ve-hero-cinematic-grid">
            <div class="ve-hero-cinematic-copy">
                <div class="ve-hero-trust">
                    <span class="ve-hero-stars" aria-hidden="true">★★★★★</span>
                    <span>Trusted Tri-State luxury chauffeur</span>
                </div>

                <h1>Airport Car Service NJ: JFK, LGA &amp; EWR at a Rate You Lock In</h1>
                <p class="ve-hero-lead">Reserved airport transfers, corporate travel, and private journeys across NJ, NY, CT, PA &amp; MA. Flight-tracked chauffeurs from Edison, NJ, with no surge pricing.</p>

                <div class="ve-hero-btns ve-hero-cinematic-btns">
                    <a href="{{ route('book-online') }}" class="ve-btn-primary" data-engage="start_booking"><i class="fa fa-calendar"></i> Book Reservation</a>
                    <div class="ve-hero-cinematic-btns-secondary">
                        <a href="{{ route('free-quote') }}" class="ve-btn-hero-light" data-engage="click_free_quote"><i class="fa fa-refresh"></i> Free Quote</a>
                        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost" data-engage="click_to_call"><i class="fa fa-phone"></i> Call Now</a>
                    </div>
                </div>

                <ul class="ve-hero-features ve-hero-proof" aria-label="Service strengths">
                    <li><i class="fa fa-user"></i> Professional chauffeurs</li>
                    <li><i class="fa fa-shield"></i> Commercially insured</li>
                    <li><i class="fa fa-clock-o"></i> 24/7 dispatch</li>
                </ul>

                <div class="ve-hero-stat-grid">
                    <div class="ve-hero-stat-box">
                        <strong>8</strong>
                        <span>States we chauffeur</span>
                    </div>
                    <div class="ve-hero-stat-box">
                        <strong>14+</strong>
                        <span>Luxury fleet options</span>
                    </div>
                    <div class="ve-hero-stat-box">
                        <strong>24/7</strong>
                        <span>Live reservation desk</span>
                    </div>
                    <div class="ve-hero-stat-box">
                        <strong>US</strong>
                        <span>Northeast &amp; West Coast</span>
                    </div>
                </div>
            </div>

            <aside class="ve-hero-plan" aria-label="Popular chauffeur services">
                <span class="ve-hero-plan-eyebrow">Plan Your Trip</span>
                <h2>Popular chauffeur services</h2>
                <p>Start with the trip type clients book most, then reserve a confirmed-rate chauffeur.</p>
                <ul class="ve-hero-plan-list">
                    <li>
                        <a href="{{ route('services.chauffeured-service') }}">
                            <span class="ve-hero-plan-icon"><i class="fa fa-diamond"></i></span>
                            <span class="ve-hero-plan-text">
                                <strong>Executive Chauffeur</strong>
                                <small>Private black car with a dedicated driver</small>
                            </span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.corporate-transportation') }}">
                            <span class="ve-hero-plan-icon"><i class="fa fa-briefcase"></i></span>
                            <span class="ve-hero-plan-text">
                                <strong>Corporate Travel</strong>
                                <small>Executives, roadshows, client hosting</small>
                            </span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('our-fleet') }}">
                            <span class="ve-hero-plan-icon"><i class="fa fa-car"></i></span>
                            <span class="ve-hero-plan-text">
                                <strong>Luxury Fleet</strong>
                                <small>Sedans, SUVs, Sprinters, and coaches</small>
                            </span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.hourly-limo') }}">
                            <span class="ve-hero-plan-icon"><i class="fa fa-clock-o"></i></span>
                            <span class="ve-hero-plan-text">
                                <strong>Hourly Chauffeur</strong>
                                <small>Flexible multi-stop private days</small>
                            </span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.wedding-limo') }}">
                            <span class="ve-hero-plan-icon"><i class="fa fa-heart"></i></span>
                            <span class="ve-hero-plan-text">
                                <strong>Wedding Limo</strong>
                                <small>Ceremony timing and photo stops</small>
                            </span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.group-transportation') }}">
                            <span class="ve-hero-plan-icon"><i class="fa fa-road"></i></span>
                            <span class="ve-hero-plan-text">
                                <strong>Group &amp; Long Distance</strong>
                                <small>City-to-city and group road travel</small>
                            </span>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <a href="{{ route('our-services') }}" class="ve-hero-plan-all">View all services <i class="fa fa-arrow-right"></i></a>
            </aside>
        </div>
    </div>

    <div class="ve-hero-float-dock" aria-label="Quick actions">
        <a href="{{ route('book-online') }}" class="ve-hero-float-book" data-engage="start_booking">Book Now</a>
        <a href="{{ route('free-quote') }}" class="ve-hero-float-quote" data-engage="click_free_quote">Free Quote</a>
        <a
            href="{{ config('contact.whatsapp_link') }}"
            class="ve-hero-float-whatsapp"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Chat on WhatsApp"
        >
            <i class="fa fa-whatsapp"></i>
        </a>
    </div>
</section>

@include('components.booker-prep', ['mode' => 'link'])
@include('components.reviews-compact', [
    'reviews' => $reviews ?? ['rating' => null, 'total' => 0, 'reviews' => []],
    'googleReviewsUrl' => $googleReviewsUrl ?? config('business.gbp_url')
])

<section class="ve-section ve-whyus-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Side -->
            <div class="col-12 col-lg-5 order-md-2 order-2 order-lg-0">
                <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-whyus-img-main bg-img"
                        style="background-image:url(../assets/img/about-us/excellence-and-discretion-2.webp);">
                    </div>
                    @php $yearsExperience = max(1, (int) date('Y') - (int) config('business.founded_year', 2023)); @endphp
                    <div class="ve-whyus-badge">
                        <strong>{{ $yearsExperience }}+</strong>
                        <span>Years of Excellence</span>
                    </div>
                </div>
            </div>
            <!-- Content Side -->
            <div class="col-12 col-lg-7 order-md-1 order-1 mb-5 order-lg-0 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">About Us</span>
                    <h2>Premium Chauffeur Service &amp; Party Bus Rentals for Weddings, Proms, and Special Events <span>in
                            New Jersey</span></h2>
                    <p>Alar Chauffeur Service delivers a smarter way to travel in luxury by combining premium vehicles
                        with highly trained professional chauffeurs for a smooth, stylish, and reliable experience.
                        Serving <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-dark);"><b>New
                                Jersey</b></a>, <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-dark);"><b>New York</b></a>,
                        <a href="{{ route('service-area.connecticut') }}" style="color: var(--ve-dark);"><b>Connecticut</b></a>,
                        <a href="{{ route('service-area.pennsylvania') }}" style="color: var(--ve-dark);"><b>Pennsylvania</b></a>,
                        and our West Coast states, we provide reserved chauffeur travel, corporate black car, <a
                            href="{{ route('services.wedding-limo') }}"
                            style="color: var(--ve-dark);"><b>weddings</b></a>, proms, and
                        event transportation designed with comfort, punctuality, and elegance in mind.</p>
                    @include('components.cta-buttons', ['variant' => 'compact'])
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== MAJOR AIRPORTS GRID ===== -->
<section class="ve-airport-grid-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Tri-State Coverage</span>
            <h2>Major Airports <span>We Serve</span></h2>
            <p>Airport chauffeur service NJ and Tri-State guides for JFK, LaGuardia, Newark, Westchester, Teterboro, Philadelphia, Bradley, and West Coast hubs.
                <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>Airport transfers</b></a>
                · <a href="{{ route('airports.index') }}" style="color: var(--ve-gold);"><b>Browse all airport guides</b></a>
            </p>
        </div>

        <div class="row g-4 gy-5">
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.jfk') }}" style="color: inherit;">JFK Airport Car Service</a></h3>
                    <p>Terminal pickups and Tri-State chauffeur transfers from John F. Kennedy International.</p>
                    <p><a href="{{ route('airports.jfk') }}" style="color: var(--ve-gold);"><b>Open JFK guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <a href="{{ route('airports.jfk') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/jfk.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.lga') }}" style="color: inherit;">LaGuardia (LGA) Car Service</a></h3>
                    <p>Flight-tracked LGA transfers across New York, New Jersey, Connecticut, and Pennsylvania.</p>
                    <p><a href="{{ route('airports.lga') }}" style="color: var(--ve-gold);"><b>Open LGA guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <a href="{{ route('airports.lga') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/lga.webp') }});"></a>
            </div>

            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <a href="{{ route('airports.ewr') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/ewr.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.ewr') }}" style="color: inherit;">Newark (EWR) Car Service</a></h3>
                    <p>Edison-based dispatch for Newark Liberty with meet points and flight tracking.</p>
                    <p><a href="{{ route('airports.ewr') }}" style="color: var(--ve-gold);"><b>Open EWR guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <a href="{{ route('airports.hpn') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/hpn.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.hpn') }}" style="color: inherit;">Westchester (HPN) Car Service</a></h3>
                    <p>White Plains and Tri-State transfers with reserved chauffeurs for Westchester travelers.</p>
                    <p><a href="{{ route('airports.hpn') }}" style="color: var(--ve-gold);"><b>Open HPN guide</b></a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.teb') }}" style="color: inherit;">Teterboro (TEB) Car Service</a></h3>
                    <p>FBO pickup coordination for private aviation across New Jersey and New York.</p>
                    <p><a href="{{ route('airports.teb') }}" style="color: var(--ve-gold);"><b>Open TEB guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <a href="{{ route('airports.teb') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/teb.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.phl') }}" style="color: inherit;">Philadelphia (PHL) Car Service</a></h3>
                    <p>PHL transfers for Pennsylvania travelers with Tri-State connections.</p>
                    <p><a href="{{ route('airports.phl') }}" style="color: var(--ve-gold);"><b>Open PHL guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <a href="{{ route('airports.phl') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/phl.webp') }});"></a>
            </div>

            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <a href="{{ route('airports.bdl') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/bdl.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.bdl') }}" style="color: inherit;">Bradley (BDL) Car Service</a></h3>
                    <p>Hartford and Connecticut transfers with links to NYC airports and Greenwich.</p>
                    <p><a href="{{ route('airports.bdl') }}" style="color: var(--ve-gold);"><b>Open BDL guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <a href="{{ route('airports.bos') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/bos.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.bos') }}" style="color: inherit;">Boston Logan (BOS) Car Service</a></h3>
                    <p>Greater Boston transfers with flight tracking and confirmed-rate chauffeurs.</p>
                    <p><a href="{{ route('airports.bos') }}" style="color: var(--ve-gold);"><b>Open BOS guide</b></a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.lax') }}" style="color: inherit;">LAX Airport Car Service</a></h3>
                    <p>Los Angeles International chauffeur transfers for our California service area.</p>
                    <p><a href="{{ route('airports.lax') }}" style="color: var(--ve-gold);"><b>Open LAX guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <a href="{{ route('airports.lax') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/lax.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.las') }}" style="color: inherit;">Las Vegas (LAS) Car Service</a></h3>
                    <p>Strip hotels and convention transfers for Las Vegas travelers.</p>
                    <p><a href="{{ route('airports.las') }}" style="color: var(--ve-gold);"><b>Open LAS guide</b></a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <a href="{{ route('airports.las') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/las.webp') }});"></a>
            </div>

            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <a href="{{ route('airports.sea') }}" class="ve-airport-card-img d-block"
                    style="background-image:url({{ asset('assets/img/airports/sea.webp') }});"></a>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-text">
                    <h3 style="font-size: 1.15rem;"><a href="{{ route('airports.sea') }}" style="color: inherit;">Seattle (SEA) Car Service</a></h3>
                    <p>Sea-Tac transfers for Washington state paired with our Washington service area page.</p>
                    <p><a href="{{ route('airports.sea') }}" style="color: var(--ve-gold);"><b>Open SEA guide</b></a></p>
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
                <div class="ve-service-icon"><i class="fa fa-diamond"></i></div>
                <h4>Executive Chauffeur</h4>
                <p>Reserved private car with a professional chauffeur, confirmed rate, and door-to-door discretion.</p>
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
                        @include('components.cta-buttons', ['variant' => 'compact'])
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
                <strong class="counter" data-count="{{ max(1, (int) date('Y') - (int) config('business.founded_year', 2023)) }}">0</strong><span>+</span>
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
                        style="background-image:url({{ asset('assets/img/fleet/mercedes-s550.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Executive Chauffeur</h5>
                        <p>Private luxury transportation with professional chauffeurs for corporate days, events, and
                            personal travel.</p>
                        @include('components.cta-buttons', ['variant' => 'compact'])
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
                        @include('components.cta-buttons', ['variant' => 'compact'])
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
                        @include('components.cta-buttons', ['variant' => 'compact'])
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
                        <p>The pinnacle of luxury sedans, perfect for executive travel and private chauffeur days.</p>
                        <div class="ve-insight-meta">
                            <span><i class="fa fa-user"></i> 3 Passengers</span>
                            <span><i class="fa fa-briefcase"></i> 3 Bags</span>
                        </div>
                        @include('components.cta-buttons', ['variant' => 'compact'])
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
                        @include('components.cta-buttons', ['variant' => 'compact'])
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
                        @include('components.cta-buttons', ['variant' => 'compact'])
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
    'googleWriteUrl' => $googleWriteUrl
])

@php
    $homeFaqs = config('seo.pages.home.faqs', []);
@endphp
@if (!empty($homeFaqs))
<section class="ve-section" id="faq" aria-labelledby="home-faq-heading">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">FAQs</span>
            <h2 id="home-faq-heading">Chauffeur Service <span>Questions</span></h2>
            <p>Straight answers about booking Alar reserved chauffeur service.</p>
        </div>
        <div id="homeFaqAccordion" class="accordion ve-faq-accordion">
            @foreach ($homeFaqs as $index => $faq)
                @php
                    $faqId = 'homeFaq' . ($index + 1);
                    $headingId = 'homeFaqHeading' . ($index + 1);
                    $isFirst = $index === 0;
                @endphp
                <div class="card ve-faq-card">
                    <div class="card-header ve-faq-card-header" id="{{ $headingId }}">
                        <button
                            class="btn ve-faq-toggle btn-block text-left px-4 py-3{{ $isFirst ? '' : ' collapsed' }}"
                            type="button"
                            data-toggle="collapse"
                            data-target="#{{ $faqId }}"
                            aria-expanded="{{ $isFirst ? 'true' : 'false' }}"
                            aria-controls="{{ $faqId }}"
                        >
                            {{ $faq['q'] }}
                        </button>
                    </div>
                    <div
                        id="{{ $faqId }}"
                        class="collapse{{ $isFirst ? ' show' : '' }}"
                        aria-labelledby="{{ $headingId }}"
                        data-parent="#homeFaqAccordion"
                    >
                        <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@include('components.cta')
@endsection

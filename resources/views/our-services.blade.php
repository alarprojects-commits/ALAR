@extends('main')
@section('meta_title', 'Our Services | Alar Chauffeur Service')
@section('meta_description', 'Explore luxury transportation services from Alar Chauffeur Service, including airport transfers, corporate transportation, weddings, prom, group travel, cruise transfers, and special events.')

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
      "name": "Our Chauffeur & Limo Services | ALAR Chauffeur Service",
      "description": "Explore all luxury chauffeur services including airport transportation, corporate travel, hourly limo, prom limo, sporting events, group transportation, and FIFA World Cup 2026 transportation.",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",

      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },

      "about": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      },

      "mainEntity": {
        "@@id": "https://alarchauffeurservice.com/#service-directory"
      }
    },

    {
      "@@type": "ItemList",
      "@@id": "https://alarchauffeurservice.com/#service-directory",
      "name": "Chauffeur Service Directory",

      "itemListElement": [

        {
          "@@type": "ListItem",
          "position": 1,
          "item": {
            "@@type": "Service",
            "name": "Airport Transportation",
            "url": "https://alarchauffeurservice.com/services/airport-transportation"
          }
        },

        {
          "@@type": "ListItem",
          "position": 2,
          "item": {
            "@@type": "Service",
            "name": "Corporate Transportation",
            "url": "https://alarchauffeurservice.com/services/corporate-transportation"
          }
        },

        {
          "@@type": "ListItem",
          "position": 3,
          "item": {
            "@@type": "Service",
            "name": "Hourly Limo Service",
            "url": "https://alarchauffeurservice.com/services/hourly-limo"
          }
        },

        {
          "@@type": "ListItem",
          "position": 4,
          "item": {
            "@@type": "Service",
            "name": "Prom Limo Service",
            "url": "https://alarchauffeurservice.com/services/prom-limo"
          }
        },

        {
          "@@type": "ListItem",
          "position": 5,
          "item": {
            "@@type": "Service",
            "name": "Sporting Events Transportation",
            "url": "https://alarchauffeurservice.com/services/sporting-events"
          }
        },

        {
          "@@type": "ListItem",
          "position": 6,
          "item": {
            "@@type": "Service",
            "name": "Group Transportation",
            "url": "https://alarchauffeurservice.com/services/group-transportation"
          }
        },

        {
          "@@type": "ListItem",
          "position": 7,
          "item": {
            "@@type": "Service",
            "name": "FIFA World Cup 2026 Transportation",
            "url": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation"
          }
        }

      ]
    }

  ]
}
</script>
@endpush

@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/our-services.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">What We Offer</span>
            <h1>Our Premium <span>Services</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Our Services</li>
                </ol>
            </nav>
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
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/aiport-transfer.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Airport Transportation</h5>
                            <p>Reliable and luxurious transportation to and from all major airports with professional
                                terminal meet and greet.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.airport-transportation') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.corporate-transportation') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.hourly-limo') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.wedding-limo') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.prom-limo') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.sporting-events') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FIFA World Cup 2026 Transportation -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/our-services/fifa.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>FIFA World Cup 2026 Transportation</h5>
                            <p>Private chauffeur transportation for matches, fan events, airport arrivals, and group
                                transfers throughout the 2026 tournament.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.fifa-world-cup-2026-transportation') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.group-transportation') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.concert-festival') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.party-bus') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.cruise-port-transfers') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
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
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('services.chauffeured-service') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

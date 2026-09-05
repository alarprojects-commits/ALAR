@extends('main')
@section('meta_title', 'New York Chauffeur & Limo Service | Alar')
@section('meta_description', 'Book Alar Chauffeur Service in New York for airport transfers, city-to-city rides & luxury travel to MetLife Stadium. Comfortable & professional.')
@section('og_image', asset('assets/img/airports/jfk.webp'))
@section('og_type', 'website')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-york/#webpage",
      "url": "https://alarchauffeurservice.com/service-areas/new-york",
      "name": "New York Chauffeur & Limo Service | Alar",
      "description": "Book Alar Chauffeur Service in New York for airport transfers, city-to-city rides & luxury travel to MetLife Stadium. Comfortable & professional.",
      "image": "https://alarchauffeurservice.com/assets/img/airports/jfk.webp",
      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },
      "about": {
        "@@id": "https://alarchauffeurservice.com/service-areas/new-york/#service"
      }
    },
    {
      "@@type": "LocalBusiness",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-york/#localbusiness",
      "name": "ALAR Chauffeur Service - New York",
      "url": "https://alarchauffeurservice.com/service-areas/new-york",
      "image": "https://alarchauffeurservice.com/assets/img/airports/jfk.webp",
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
      "areaServed": {
        "@@type": "State",
        "name": "New York"
      }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-york/#service",
      "name": "New York Chauffeur & Limo Service",
      "serviceType": "Luxury Chauffeur Transportation",
      "url": "https://alarchauffeurservice.com/service-areas/new-york",
      "areaServed": {
        "@@type": "State",
        "name": "New York"
      },
      "provider": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      },
      "description": "Professional luxury chauffeur and limousine service in New York including JFK, LGA, and EWR airport transfers, corporate transportation, wedding limousines, hourly chauffeur service, and event travel."
    },
    {
      "@@type": "FAQPage",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-york/#faq",
      "mainEntity": [
        {
          "@@type": "Question",
          "name": "How can I book a professional chauffeur in New York?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "You can book a chauffeur service in New York through our online reservation system at alarchauffeurservice.com, by calling (201) 431-4275, or contacting us via WhatsApp. Advance reservations are recommended for airport transfers and special events."
          }
        },
        {
          "@@type": "Question",
          "name": "Which New York airports do you provide chauffeur service for?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "We offer round-the-clock airport transfers to and from John F. Kennedy International Airport (JFK), LaGuardia Airport (LGA), and Newark Liberty International Airport (EWR), complete with flight tracking and terminal meet-and-greet service."
          }
        },
        {
          "@@type": "Question",
          "name": "Do you cover all five boroughs of New York City?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Yes, our chauffeur services cover Manhattan, Brooklyn, Queens, the Bronx, and Staten Island, as well as Westchester County, Long Island, and the wider Tri-State area."
          }
        },
        {
          "@@type": "Question",
          "name": "Do you offer transportation from New York to MetLife Stadium for games and concerts?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Yes, we provide direct, private transportation from New York City to MetLife Stadium in East Rutherford, NJ for NFL games, concerts, and the FIFA World Cup 2026 with seamless post-event pickup."
          }
        },
        {
          "@@type": "Question",
          "name": "What types of vehicles are available for hire in New York?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Our luxury fleet includes executive sedans (Mercedes-Benz S-Class, Cadillac XTS), full-size SUVs (Cadillac Escalade, Chevy Suburban), stretch limousines, and Mercedes Sprinter vans accommodating corporate groups and private parties."
          }
        }
      ]
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-york/#breadcrumb",
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
          "name": "Service Areas",
          "item": "https://alarchauffeurservice.com/service-areas"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "New York",
          "item": "https://alarchauffeurservice.com/service-areas/new-york"
        }
      ]
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
                <span class="ve-section-tag">Service Areas</span>
                <h1>Premium Chauffeur & Limo Service in <span>New York</span></h1>
                <p>Experience reliable airport transfers, city-wide luxury travel, and executive chauffeur service across New York with Alar Chauffeur Service.</p>
            </div>
        </div>
    </section>

    <!-- ===== DETAIL CONTENT ===== -->
    <section class="ve-section bg-white">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-12 col-lg-8">
                    <div class="ve-service-area-detail">
                        <div class="mb-30">
                            <img src="{{ asset('assets/img/airports/jfk.webp') }}" alt="Luxury chauffeur service in New York by Alar Chauffeur Service" class="img-fluid rounded-12 shadow-sm w-100" style="max-height: 380px; object-fit: cover;">
                        </div>

                        <div class="ve-area-intro mb-50">
                            <h2 class="mb-20">Professional <span>Chauffeur & Limo Service</span> in New York</h2>
                            <p class="ve-lead">If you are looking to <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>book a chauffeur service in New York</b></a> that combines punctuality, elegance, and peace of mind, <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> delivers premier ground transportation. Whether you require executive travel through Manhattan, a luxury airport transfer, or a private limousine for a special event, our team ensures every mile is effortless.</p>
                            <p>From Wall Street meetings to Broadway evenings, airport connections at JFK and LaGuardia, and stadium transfers to MetLife Stadium, we provide unmatched comfort and professionalism throughout New York.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our New York <span>Expertise</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>JFK & LGA Airport Specialists</h5>
                                        <p>Seamless navigation to John F. Kennedy (JFK) and LaGuardia (LGA) with precision flight tracking, curbside pickup, and inside meet-and-greet.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-building"></i>
                                        <h5>Manhattan Corporate Corridors</h5>
                                        <p>Dependable executive transport for Midtown, Financial District, Hudson Yards, and major corporate centers across New York City.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-star"></i>
                                        <h5>Gala, Theater & VIP Travel</h5>
                                        <p>Sophisticated transportation for Broadway premieres, galas, red carpet events, and high-profile private occasions.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-road"></i>
                                        <h5>Tri-State & Interstate Travel</h5>
                                        <p>Comfortable direct journeys between New York, New Jersey, Connecticut, and the greater Northeast corridor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h2>Airport Chauffeur & Limo Service in <span>New York (JFK, LGA, EWR)</span></h2>
                            <p>Navigating New York’s busy airports should never be stressful. Our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport chauffeur service in New York</b></a> delivers seamless, punctual transfers with real-time flight monitoring and personalized care.</p>

                            <h3>Major Airports We Serve</h3>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> <strong>John F. Kennedy International Airport (JFK)</strong> — Terminals 1 through 8 with private meet & greet</li>
                                    <li><i class="fa fa-check"></i> <strong>LaGuardia Airport (LGA)</strong> — Swift pickups across Terminal A, B, and C</li>
                                    <li><i class="fa fa-check"></i> <strong>Newark Liberty International Airport (EWR)</strong> — Seamless Tri-State airport connections</li>
                                    <li><i class="fa fa-check"></i> <strong>Teterboro Airport (TEB) & Westchester County (HPN)</strong> — Private aviation and FBO transfers</li>
                                </ul>
                            </div>

                            <h3>Our New York Airport Transfer Features</h3>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Real-time flight tracking to accommodate early arrivals or unexpected delays</li>
                                    <li><i class="fa fa-check"></i> Complimentary waiting time and baggage assistance</li>
                                    <li><i class="fa fa-check"></i> Professional chauffeurs with extensive knowledge of NYC traffic patterns</li>
                                    <li><i class="fa fa-check"></i> Direct, private drop-offs to Manhattan hotels, residences, or corporate offices</li>
                                </ul>
                            </div>

                            <h2>Serving NYC Boroughs and <span>Surrounding Counties</span></h2>
                            <p>Alar Chauffeur Service provides complete coverage across New York City and neighboring counties, ensuring dependable luxury travel wherever your plans take you:</p>

                            <div class="ve-amenities-list">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> <strong>Manhattan:</strong> Midtown, Downtown, Upper East & West Sides, SoHo</li>
                                            <li><i class="fa fa-check"></i> <strong>Brooklyn:</strong> DUMBO, Brooklyn Heights, Williamsburg, Park Slope</li>
                                            <li><i class="fa fa-check"></i> <strong>Queens:</strong> Long Island City, Astoria, Flushing, Jamaica</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> <strong>The Bronx & Staten Island</strong></li>
                                            <li><i class="fa fa-check"></i> <strong>Westchester County:</strong> White Plains, Scarsdale, Yonkers</li>
                                            <li><i class="fa fa-check"></i> <strong>Long Island:</strong> Nassau & Suffolk Counties, The Hamptons</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2>City-to-City and Interstate Chauffeur Travel from <span>New York</span></h2>
                            <p>Need to travel outside New York City without dealing with train schedules or crowded flights? Our long-distance chauffeur service offers private, door-to-door comfort for interstate itineraries.</p>
                            <p>Popular city-to-city routes include:</p>
                            <div class="ve-amenities-list">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> New York City to Jersey City & Hoboken</li>
                                            <li><i class="fa fa-check"></i> New York City to Newark & Princeton, NJ</li>
                                            <li><i class="fa fa-check"></i> New York City to Greenwich & Stamford, CT</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> New York City to Philadelphia, PA</li>
                                            <li><i class="fa fa-check"></i> New York City to Boston, MA</li>
                                            <li><i class="fa fa-check"></i> New York City to Washington, D.C.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2>New York to MetLife Stadium & <span>FIFA 2026 Transportation</span></h2>
                            <p>During the FIFA World Cup 2026, MetLife Stadium in East Rutherford, NJ will host historic matches including the final. Getting across the Hudson River requires experienced transportation planning.</p>
                            <p>Our dedicated <a href="{{ route('services.fifa-world-cup-2026-transportation') }}" style="color: var(--ve-gold);"><b>New York to MetLife Stadium chauffeur service</b></a> guarantees on-time arrival and hassle-free departure:</p>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Dedicated round-trip transfers from Manhattan hotels to MetLife Stadium</li>
                                    <li><i class="fa fa-check"></i> Pre-arranged staging and designated pickup points to bypass post-game gridlock</li>
                                    <li><i class="fa fa-check"></i> Executive sedans, luxury SUVs, and Sprinter vans for small and large supporter groups</li>
                                    <li><i class="fa fa-check"></i> Flexible hourly bookings for all-day match events and corporate VIP entertainment</li>
                                </ul>
                            </div>

                            <h2>Personalized Chauffeur Services for <span>Every Need</span></h2>
                            <p>We tailor our services to meet the specific requirements of business executives, private travelers, and special event guests:</p>

                            <h3>Corporate & Executive Chauffeur Service</h3>
                            <p>Travel between client meetings, roadshows, and conferences with absolute discretion and in-vehicle productivity. Our corporate accounts provide consolidated billing and prioritized booking.</p>

                            <h3>Wedding & Special Event Limousines</h3>
                            <p>Celebrate in timeless elegance with our <a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>luxury wedding limousines</b></a> and prom services, designed to deliver unforgettable moments and flawless timing.</p>

                            <h3>Hourly As-Directed Chauffeur Service</h3>
                            <p>Enjoy total flexibility with our <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>hourly chauffeur service</b></a>. Your chauffeur remains on standby wherever your NYC itinerary takes you.</p>

                            <h2>Why Choose <span>Alar Chauffeur Service</span> in New York</h2>
                            <p>Alar Chauffeur Service delivers an elevated transportation experience built on four pillars:</p>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> <strong>Licensed & Screened Drivers:</strong> Fully vetted, courteous professionals trained in defensive driving and client discretion.</li>
                                    <li><i class="fa fa-check"></i> <strong>Pristine Luxury Fleet:</strong> Late-model Mercedes-Benz, Cadillac, and Lincoln vehicles sanitized and inspected daily.</li>
                                    <li><i class="fa fa-check"></i> <strong>Punctuality Guaranteed:</strong> Advanced traffic monitoring ensures on-time pickups across all five boroughs.</li>
                                    <li><i class="fa fa-check"></i> <strong>24/7 Dispatch & Support:</strong> Round-the-clock live dispatch ready to assist with reservations and changes.</li>
                                </ul>
                            </div>

                            <h2>Frequently Asked Questions About <span>New York Chauffeur Service</span></h2>
                            <div class="accordion ve-faq-accordion mt-30" id="nyFaqAccordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How can I book a professional chauffeur in New York?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#nyFaqAccordion">
                                        <div class="card-body">
                                            You can book a chauffeur service in New York through our online reservation system at alarchauffeurservice.com, by calling (201) 431-4275, or contacting us via WhatsApp. Advance reservations are recommended for airport transfers and special events.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Which New York airports do you provide chauffeur service for?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#nyFaqAccordion">
                                        <div class="card-body">
                                            We offer round-the-clock airport transfers to and from John F. Kennedy International Airport (JFK), LaGuardia Airport (LGA), and Newark Liberty International Airport (EWR), complete with flight tracking and terminal meet-and-greet service.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Do you cover all five boroughs of New York City?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#nyFaqAccordion">
                                        <div class="card-body">
                                            Yes, our chauffeur services cover Manhattan, Brooklyn, Queens, the Bronx, and Staten Island, as well as Westchester County, Long Island, and the wider Tri-State area.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Do you offer transportation from New York to MetLife Stadium for games and concerts?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#nyFaqAccordion">
                                        <div class="card-body">
                                            Yes, we provide direct, private transportation from New York City to MetLife Stadium in East Rutherford, NJ for NFL games, concerts, and the FIFA World Cup 2026 with seamless post-event pickup.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                What types of vehicles are available for hire in New York?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#nyFaqAccordion">
                                        <div class="card-body">
                                            Our luxury fleet includes executive sedans (Mercedes-Benz S-Class, Cadillac XTS), full-size SUVs (Cadillac Escalade, Chevy Suburban), stretch limousines, and Mercedes Sprinter vans accommodating corporate groups and private parties.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-12 col-lg-4 mt-50 mt-lg-0">
                    <x-service-area-sidebar />
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

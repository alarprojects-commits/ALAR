@extends('main')
@section('meta_title', 'New York Car Service & Airport Limo | JFK, LGA, EWR | Alar')
@section('meta_description', 'Book NY car service and airport limo to John F. Kennedy (JFK), LaGuardia (LGA), Newark Liberty (EWR) and Westchester (HPN). Tri-State chauffeur service across NY, NJ, CT and PA.')
@section('og_image', asset('assets/img/service-areas/new-york.webp'))
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
      "name": "New York Car Service & Airport Limo | JFK, LGA, EWR | Alar",
      "description": "Book NY car service and airport limo to John F. Kennedy (JFK), LaGuardia (LGA), Newark Liberty (EWR) and Westchester (HPN). Tri-State chauffeur service across NY, NJ, CT and PA.",
      "image": "https://alarchauffeurservice.com/assets/img/service-areas/new-york.webp",
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
      "image": "https://alarchauffeurservice.com/assets/img/service-areas/new-york.webp",
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
      "name": "New York Car Service & Airport Limo",
      "serviceType": "Luxury Chauffeur Transportation",
      "url": "https://alarchauffeurservice.com/service-areas/new-york",
      "areaServed": {
        "@@type": "State",
        "name": "New York"
      },
      "provider": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      },
      "description": "New York car service and airport limo including JFK Airport Limo Service NYC, LGA Limo Service LaGuardia, Newark Airport Limo Service EWR, Westchester County HPN transfers, Tri-State limo, corporate travel, and wedding limousines."
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
            "text": "We offer round-the-clock airport car service to and from John F. Kennedy International Airport (JFK), LaGuardia Airport (LGA), Newark Liberty International Airport (EWR), and Westchester County Airport (HPN), complete with flight tracking and terminal meet-and-greet service."
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
            "text": "Yes, we provide direct, private transportation from New York City to MetLife Stadium in East Rutherford, NJ for NFL games, concerts, and special events with seamless post-event pickup."
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
                <h1>New York Car Service & <span>Airport Limo</span></h1>
                <p>Reliable NY car service, Tri-State limo, and airport transfers to John F. Kennedy (JFK), LaGuardia (LGA), Newark Liberty (EWR), and Westchester County (HPN).</p>
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
                            <img src="{{ asset('assets/img/service-areas/new-york.webp') }}" alt="New York car service and airport limo to JFK LGA EWR by Alar Chauffeur Service" class="img-fluid rounded-12 shadow-sm w-100" style="max-height: 380px; object-fit: cover;">
                        </div>

                        <div class="ve-area-intro mb-50">
                            <h2 class="mb-20">Professional <span>New York Car Service</span> & NY Limo</h2>
                            <p class="ve-lead">Book <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>New York car service</b></a> with punctual chauffeurs, pristine vehicles, and transparent rates. <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> provides NY limo service, airport car service NYC, and private transportation across New York City, Long Island, Westchester, and the Tri-State region of New York, New Jersey, and Connecticut—with connections into Pennsylvania and beyond.</p>
                            <p>From Wall Street meetings to Broadway evenings, JFK Airport Limo Service NYC, LGA Limo Service LaGuardia, Newark Airport Limo Service EWR, and stadium transfers to MetLife Stadium, we deliver comfort and professionalism throughout New York.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our New York <span>Expertise</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>JFK, LGA & EWR Specialists</h5>
                                        <p>Seamless airport limo to John F. Kennedy (JFK), LaGuardia (LGA), and Newark Liberty (EWR) with flight tracking, curbside pickup, and meet-and-greet.</p>
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
                                        <h5>Tri-State Limo Service</h5>
                                        <p>Comfortable Tri-State limo and car service between NY, NJ, CT, and Pennsylvania, plus Virginia and Washington, D.C. routes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h2>Airport Car Service NYC — <span>JFK, LGA, EWR & HPN</span></h2>
                            <p>Navigating New York’s busy airports should never be stressful. Our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport car service NYC</b></a> and airport limo service deliver punctual transfers with real-time flight monitoring and personalized care throughout the Tri-State area.</p>

                            <h3>JFK Airport Limo Service NYC</h3>
                            <p>We specialize in JFK limousine service and airport transportation to and from John F. Kennedy International Airport (JFK). Best limo service to JFK from Manhattan, Brooklyn, Queens, Long Island, Westchester, New Jersey, and Connecticut—with terminal meet-and-greet and luggage assistance.</p>

                            <h3>LGA Limo Service LaGuardia Airport</h3>
                            <p>Travel to and from LaGuardia Airport (LGA) in Queens without hassle. Our LGA Limo Service and limousine service LaGuardia Airport cover Manhattan, Brooklyn, Bronx, Staten Island, and Long Island with on-time pickups at Terminals A, B, and C.</p>

                            <h3>Newark Airport Limo Service EWR</h3>
                            <p>Whether you need corporate travel or family transfers, we provide limo service to Newark Liberty International Airport (EWR) from New York City, Westchester, Nassau, and Suffolk counties. Newark Airport Limo Service EWR includes flight tracking and direct hotel or office drop-offs.</p>

                            <h3>Westchester County Airport (HPN) Car Service</h3>
                            <p>Private transportation to Westchester County Airport (HPN) and connections between HPN, JFK, LGA, EWR, Manhattan, Brooklyn, and Staten Island for business and leisure travelers.</p>

                            <h3>Major Airports We Serve</h3>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> <strong>John F. Kennedy International Airport (JFK)</strong> — Terminals 1 through 8 with private meet & greet</li>
                                    <li><i class="fa fa-check"></i> <strong>LaGuardia Airport (LGA)</strong> — Swift pickups across Terminal A, B, and C</li>
                                    <li><i class="fa fa-check"></i> <strong>Newark Liberty International Airport (EWR)</strong> — Seamless Tri-State airport connections</li>
                                    <li><i class="fa fa-check"></i> <strong>Westchester County Airport (HPN)</strong> — White Plains and Westchester FBO transfers</li>
                                    <li><i class="fa fa-check"></i> <strong>Teterboro Airport (TEB)</strong> — Private aviation and FBO transfers</li>
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

                            <div class="mb-40 mt-30">
                                <img src="{{ asset('assets/img/service-areas/new-york-aerial.webp') }}" alt="Aerial view of Tri-State airport terminal for New York car service" class="img-fluid rounded-12 shadow-sm w-100" style="max-height: 340px; object-fit: cover;">
                            </div>

                            <h2>Serving NYC Boroughs and <span>New York Counties</span></h2>
                            <p>Alar Chauffeur Service provides NY car service across New York City and surrounding counties—Nassau, Suffolk, Westchester, Rockland, Orange, Putnam, Dutchess, and more—ensuring dependable luxury travel wherever your plans take you:</p>

                            <div class="ve-amenities-list">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> <strong>Manhattan:</strong> Midtown, Downtown, Upper East & West Sides, SoHo</li>
                                            <li><i class="fa fa-check"></i> <strong>Brooklyn:</strong> DUMBO, Brooklyn Heights, Williamsburg, Park Slope</li>
                                            <li><i class="fa fa-check"></i> <strong>Queens:</strong> Long Island City, Astoria, Flushing, Jamaica</li>
                                            <li><i class="fa fa-check"></i> <strong>The Bronx & Staten Island</strong></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> <strong>Westchester County:</strong> White Plains, Scarsdale, Yonkers</li>
                                            <li><i class="fa fa-check"></i> <strong>Long Island:</strong> Nassau & Suffolk Counties, The Hamptons</li>
                                            <li><i class="fa fa-check"></i> <strong>Hudson Valley:</strong> Rockland, Orange, Putnam, Dutchess</li>
                                            <li><i class="fa fa-check"></i> <strong>Upstate corridors:</strong> Ulster, Sullivan, Albany area on request</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2>City-to-City and Interstate Chauffeur Travel from <span>New York</span></h2>
                            <p>Need to travel outside New York City without dealing with train schedules or crowded flights? Our long-distance chauffeur service offers private, door-to-door comfort for Tri-State and interstate itineraries across New York, New Jersey, Connecticut, Pennsylvania, Virginia, and Washington, D.C.</p>
                            <p>Popular city-to-city routes include:</p>
                            <div class="ve-amenities-list">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> New York City to Jersey City & Hoboken</li>
                                            <li><i class="fa fa-check"></i> New York City to Newark & Princeton, NJ</li>
                                            <li><i class="fa fa-check"></i> New York City to Greenwich & Stamford, CT</li>
                                            <li><i class="fa fa-check"></i> New York City to Philadelphia, PA</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> New York City to Washington, D.C.</li>
                                            <li><i class="fa fa-check"></i> New York City to Northern Virginia</li>
                                            <li><i class="fa fa-check"></i> New York City to Boston, MA</li>
                                            <li><i class="fa fa-check"></i> Long Island & Westchester to Tri-State airports</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <h2>New York to MetLife Stadium & <span>Event Transportation</span></h2>
                            <p>MetLife Stadium in East Rutherford, NJ hosts NFL games, concerts, and major events year-round. Getting across the Hudson River requires experienced transportation planning.</p>
                            <p>Our dedicated <a href="{{ route('services.sporting-events') }}" style="color: var(--ve-gold);"><b>New York to MetLife Stadium chauffeur service</b></a> guarantees on-time arrival and hassle-free departure:</p>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Dedicated round-trip transfers from Manhattan hotels to MetLife Stadium</li>
                                    <li><i class="fa fa-check"></i> Pre-arranged staging and designated pickup points to bypass post-event gridlock</li>
                                    <li><i class="fa fa-check"></i> Executive sedans, luxury SUVs, and Sprinter vans for small and large groups</li>
                                    <li><i class="fa fa-check"></i> Flexible hourly bookings for all-day events and corporate VIP entertainment</li>
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
                                            We offer round-the-clock airport car service to and from John F. Kennedy International Airport (JFK), LaGuardia Airport (LGA), Newark Liberty International Airport (EWR), and Westchester County Airport (HPN), complete with flight tracking and terminal meet-and-greet service.
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
                                            Yes, we provide direct, private transportation from New York City to MetLife Stadium in East Rutherford, NJ for NFL games, concerts, and special events with seamless post-event pickup.
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

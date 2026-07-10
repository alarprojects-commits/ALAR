@extends('main')
@section('meta_title', 'FIFA World Cup 2026 Chauffeur Service NJ & NY | Luxury Car Service')
@section('meta_description', 'Book airport transfer for FIFA World Cup 2026 in NJ & NY. Luxury chauffeur, group
transport & event rides available.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation/#webpage",
      "url": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation",
      "name": "FIFA World Cup 2026 Transportation | ALAR Chauffeur Service",
      "description": "Luxury chauffeur transportation for FIFA World Cup 2026 including airport transfers, stadium rides, VIP travel, and group transportation across host cities.",
      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },
      "breadcrumb": {
        "@@id": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "about": {
        "@@id": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation/#service"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation/#breadcrumb",
      "itemListElement": [
        {
          "@@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://alarchauffeurservice.com/"
        },
        {
          "@@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "https://alarchauffeurservice.com/services/"
        },
        {
          "@@type": "ListItem",
          "position": 3,
          "name": "FIFA World Cup 2026 Transportation",
          "item": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation"
        }
      ]
    },

    {
      "@@type": "ImageObject",
      "@@id": "https://alarchauffeurservice.com/#logo",
      "url": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "contentUrl": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "caption": "ALAR Chauffeur Service Logo"
    },

    {
      "@@type": "LocalBusiness",
      "@@id": "https://alarchauffeurservice.com/#localbusiness",
      "name": "ALAR Chauffeur Service",
      "url": "https://alarchauffeurservice.com",
      "telephone": {!! config('contact.phones_schema_json') !!},
      "email": "limo@alarchauffeurservice.com",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "priceRange": "$150 - $3000",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "10 Fairmount Ave",
        "addressLocality": "Edison",
        "addressRegion": "NJ",
        "postalCode": "08820",
        "addressCountry": "US"
      },
      "sameAs": [
        "https://maps.app.goo.gl/fKaPB2j36gVbcbcq9",
        "https://www.facebook.com/profile.php?id=61581788001748",
        "https://www.instagram.com/alar_chauffeur_service/",
        "https://x.com/Alar_chauffeur",
        "https://www.scoop.it/u/alar-chauffeur-service",
        "https://linkedin.com/in/alar-chauffeur-services-415862383",
        "https://www.youtube.com/@AlarChauffeurService"
      ]
    },

    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation/#service",
      "name": "FIFA World Cup 2026 Transportation Service",
      "serviceType": "Event Transportation",
      "description": "Premium luxury transportation for FIFA World Cup 2026 including stadium transfers, airport pickups, VIP chauffeur service, and group travel across host cities.",
      "provider": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      },
      "areaServed": [
        "New Jersey",
        "New York",
        "California",
        "Nevada",
        "Washington",
        "Kansas City"
      ],
      "offers": {
        "@@type": "Offer",
        "price": "150",
        "highPrice": "3000",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
@endpush

@section('content')

<section class="ve-page-hero" style="background-image:url({{ asset('assets/img/our-services/fifa/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Tournament Ready</span>
        <h1>FIFA World Cup 2026 Chauffeur Service in <span>New Jersey & New York</span></h1>
        <p class="text-white">The FIFA World Cup 2026 is set to bring millions of fans to the United States, with major
            matches hosted at
            MetLife Stadium in New Jersey. Visitors staying in New York City will need reliable transportation to travel
            between cities, airports, hotels, and stadiums.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">FIFA World Cup 2026 Transportation</li>
            </ol>
        </nav>
    </div>
</section>

<section class="ve-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 mb-5 mb-lg-0 order-2 order-lg-1">
                @include('components.service-sidebar')
            </div>

            <div class="col-12 col-lg-8 order-1 order-lg-2">
                <div class="ve-service-detail-content">
                    <div class="ve-detail-main-img mb-40 wow fadeIn" data-wow-delay="100ms">
                        <img src="{{ asset('assets/img/our-services/fifa/1.webp') }}"
                            alt="FIFA World Cup 2026 Transportation" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Global Event Travel</span>
                        <h3>FIFA 2026 Host Venue in <span>New Jersey</span></h3>
                        <h3>MetLife Stadium – Main <span>Match Location</span></h3>
                        <p class="ve-lead">MetLife Stadium in East Rutherford, New Jersey will host multiple FIFA World
                            Cup 2026 matches, including high-demand games.</p>

                        <p>We provide direct and reliable <a href="{{ route('service-area.new-jersey') }}"
                                style="color: var(--ve-gold);"><b>chauffeur service in New Jersey</b></a>, ensuring you
                            arrive on time without dealing with traffic or parking issues.</p>

                        <div class="row mt-40 mb-40">
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-plane"></i>
                                    <h5>Airport Arrival Coordination</h5>
                                    <p>Scheduled pickups for players' families, fans, business travelers, and groups
                                        arriving with luggage from domestic and international flights.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-futbol-o"></i>
                                    <h5>Stadium Transfer Planning</h5>
                                    <p>Direct service to match venues with route planning designed around event day
                                        traffic, checkpoints, and designated pickup zones.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-users"></i>
                                    <h5>Group and Family Travel</h5>
                                    <p>Luxury SUVs, Sprinters, and buses for friends, family groups, hospitality
                                        guests, and supporter groups traveling together.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="ve-feature-box">
                                    <i class="fa fa-clock-o"></i>
                                    <h5>Hourly and Full Day Service</h5>
                                    <p>Keep a dedicated chauffeur and vehicle on standby for multiple matches,
                                        training visits, sponsor events, dinners, and nightlife plans.</p>
                                </div>
                            </div>
                        </div>

                        <h2>New York to Stadium <span>Transportation</span></h2>
                        <h3>Chauffeur Service in <span>New York City</span></h3>
                        <p>Most visitors will stay in NYC, making transportation essential. Our <a
                                href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);">
                                <b>chauffeur service in New York City</b></a> offers seamless travel between hotels, fan
                            zones, and stadium venues.</p>
                        <h3>Hourly Chauffeur Service for <span>Flexible Travel</span></h3>
                        <p>Whether you need a quick ride or a full-day booking, our hourly chauffeur service for
                            flexible travel allows you to move freely during match days.</p>

                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Private airport, hotel, and stadium transfers
                                        </li>
                                        <li><i class="fa fa-check"></i> Meet and greet service on request</li>
                                        <li><i class="fa fa-check"></i> Premium vehicles for individuals and groups</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Hourly charters for multi stop itineraries</li>
                                        <li><i class="fa fa-check"></i> Professional chauffeurs and live trip support
                                        </li>
                                        <li><i class="fa fa-check"></i> Room for luggage, gear, and event essentials
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ve-detail-extra-content mt-50">

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Airport Transfers for <span>FIFA World Cup 2026</span></h2>
                                <h3>Airport Transfer Services <span>(JFK, LaGuardia, Newark)</span></h3>
                                <p>Arriving for FIFA 2026? We provide professional airport pickups with real-time
                                    tracking.</p>
                                <p>Book your airport transfer for FIFA World Cup 2026 from:</p>

                                <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i>
                                                    <a href="{{ route('service-area.new-york') }}"
                                                        style="color: var(--ve-dark);">JFK Airport</a>
                                                </li>
                                                <li><i class="fa fa-check"></i>
                                                    <a href="{{ route('service-area.new-york') }}"
                                                        style="color: var(--ve-dark);">LaGuardia Airport</a>
                                                </li>
                                                <li><i class="fa fa-check"></i>
                                                    <a href="{{ route('service-area.new-jersey') }}"
                                                        style="color: var(--ve-dark);">Newark Airport</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <p>Our Newark airport car service is especially ideal for direct access to MetLife
                                    Stadium.</p>


                                <div class="ve-quote-box mt-30">
                                    <i class="fa fa-quote-left"></i>
                                    <p>Our group needed airport pickups, hotel transfers, and match transportation on a
                                        tight schedule. Alar handled the logistics smoothly and made the entire trip far
                                        easier.</p>
                                    <div class="ve-quote-author">
                                        <strong>Daniel R.</strong>
                                        <span>Event Travel Coordinator</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                    <h2>Event Transportation for<span> Match Days</span></h2>
                                    <h3>Event Transportation<span> Services</span></h3>
                                    <p>Avoid last-minute stress with our reliable event transportation services designed
                                        specifically for FIFA matches.</p>
                                    <h3>Luxury Black Car Service for<span> FIFA Events</span></h3>
                                    <p>For premium travel, choose our <a href="{{ route('our-fleet') }}"
                                            style="color: var(--ve-gold);"><b>luxury black
                                                car service for FIFA 2026 events</b></a> and enjoy a first-class
                                        experience.</p>
                                </div>
                                <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/img/our-services/fifa/2.webp') }}"
                                        alt="Luxury tournament transportation" class="img-fluid rounded-12 shadow-sm">
                                </div>
                            </div>

                            <h2>Corporate Chauffeur Services <span>for FIFA 2026</span></h2>
                            <h3>Corporate Chauffeur Service in <span>New York and New Jersey</span></h3>
                            <p>If you are attending FIFA events for business or hosting international guests, our
                                <a href="{{ route('services.corporate-transportation') }}"
                                    style="color: var(--ve-gold);"><b>corporate chauffeur service in New York and New
                                        Jersey</b></a> ensures professional and punctual transportation
                            </p>

                            <h2>Group Transportation for <span>FIFA Matches</span></h2>
                            <h3>Group Transportation for <span>Stadium Travel</span></h3>
                            <p>Travelling with friends or fans? Our <a
                                    href="{{ route('services.group-transportation') }}"
                                    style="color: var(--ve-gold);"><b>group transportation for stadium travel</b></a> is
                                perfect for shared experiences.
                            </p>

                            <h3>Party Bus for Group Travel <span>to FIFA Matches</span></h3>
                            <p>Book a party bus for group travel to FIFA matches and enjoy the journey as much as the
                                game.</p>

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/img/our-services/fifa/3.webp') }}"
                                        alt="Luxury tournament transportation" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                                    <h2>Flexible Travel with Hourly<span> Chauffeur Service</span></h2>
                                    <h3>Hourly Chauffeur<span> Service Benefits</span></h3>
                                    <p>FIFA events often require flexible schedules. Our hourly chauffeur service for
                                        flexible travel allows you to attend multiple events and explore the city
                                        comfortably.</p>
                                </div>
                            </div>

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                    <h2>Why Choose ALAR Chauffeur Service for FIFA 2026</h2>
                                    <h3>Reliable Chauffeur Service in New Jersey and NYC</h3>

                                    <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                                        <ul>
                                            <li><i class="fa fa-check"></i>Professional chauffeurs with local
                                                expertise</li>
                                            <li><i class="fa fa-check"></i>Full coverage in New Jersey and New
                                                York</li>
                                            <li><i class="fa fa-check"></i>Luxury fleet for all travel needs
                                            </li>
                                            <li><i class="fa fa-check"></i>On-time guaranteed pickups</li>
                                            <li><i class="fa fa-check"></i>24/7 customer support</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/img/our-services/fifa/4.webp') }}"
                                        alt="Luxury tournament transportation" class="img-fluid rounded-12 shadow-sm">
                                </div>
                            </div>

                            <h2>Travel Coverage for <span>FIFA 2026</span></h2>
                            <h3>NYC, New Jersey <span>and Beyond</span></h3>
                            <p>We connect all major locations, including hotels, airports, stadiums, and fan zones. Our
                                chauffeur service in New York City ensures smooth travel for international visitors.
                            </p>

                            <h2>Book Your FIFA World Cup 2026 <span>Transportation Today</span></h2>
                            <h3>Reserve Your <span>Ride Early</span></h3>
                            <p>The FIFA World Cup 2026 will create massive demand for transportation services. Secure
                                your ride early to avoid last-minute issues. <a href="/"
                                    style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> ismaking sure of
                                your comfort and hassle-free travelling.
                            </p>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Fifa Cup <span>Frequently Asked Questions</span></h2>
                                <div id="airportFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqOne"
                                                aria-expanded="true" aria-controls="airportFaqOne">
                                                How can I book transportation for FIFA World Cup 2026?
                                            </button>
                                        </div>
                                        <div id="airportFaqOne" class="collapse show"
                                            aria-labelledby="airportFaqHeadingOne" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                You can easily book online, call us, or email us to reserve your
                                                chauffeur service in advance.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqTwo"
                                                aria-expanded="false" aria-controls="airportFaqTwo">
                                                Do you provide service from New York to MetLife Stadium?
                                            </button>
                                        </div>
                                        <div id="airportFaqTwo" class="collapse" aria-labelledby="airportFaqHeadingTwo"
                                            data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our chauffeur service in New York City includes direct
                                                transportation to all FIFA match venues in New Jersey.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqThree"
                                                aria-expanded="false" aria-controls="airportFaqThree">
                                                Which airports do you cover for FIFA 2026?
                                            </button>
                                        </div>
                                        <div id="airportFaqThree" class="collapse"
                                            aria-labelledby="airportFaqHeadingThree" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                We provide airport transfer for FIFA World Cup 2026 from JFK, LaGuardia,
                                                and Newark airports.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqFour"
                                                aria-expanded="false" aria-controls="airportFaqFour">
                                                Is group transportation available for matches?
                                            </button>
                                        </div>
                                        <div id="airportFaqFour" class="collapse"
                                            aria-labelledby="airportFaqHeadingFour" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, Alar Chauffeur Service offer group transportation for stadium
                                                travel, including party buses and large vehicles.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqFive"
                                                aria-expanded="false" aria-controls="airportFaqFive">
                                                Can I book a chauffeur for the entire day?
                                            </button>
                                        </div>
                                        <div id="airportFaqFive" class="collapse"
                                            aria-labelledby="airportFaqHeadingFive" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our hourly chauffeur service for flexible travel allows full-day
                                                bookings for FIFA events. Alar Chauffeur Service offer 10% off for this.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-40">
                                    <h3>FIFA World Cup 2026 <span>U.S. Match Venues and Dates</span></h3>
                                    <p>Below is a quick reference table showing the United States host venues, their
                                        official match dates, and the state where each venue is located.</p>

                                    <div class="table-responsive mt-30">
                                        <table class="table table-bordered table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Match Dates</th>
                                                    <th>Venue</th>
                                                    <th>State</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15 Jun, 18 Jun, 21 Jun, 24 Jun, 27 Jun, 1 Jul, 7 Jul, 15 Jul
                                                        2026</td>
                                                    <td>Mercedes-Benz Stadium</td>
                                                    <td>Georgia</td>
                                                </tr>
                                                <tr>
                                                    <td>13 Jun, 16 Jun, 19 Jun, 23 Jun, 26 Jun, 29 Jun, 9 Jul 2026</td>
                                                    <td>Gillette Stadium</td>
                                                    <td>Massachusetts</td>
                                                </tr>
                                                <tr>
                                                    <td>14 Jun, 17 Jun, 22 Jun, 25 Jun, 27 Jun, 30 Jun, 3 Jul, 6 Jul, 14
                                                        Jul 2026</td>
                                                    <td>AT&amp;T Stadium</td>
                                                    <td>Texas</td>
                                                </tr>
                                                <tr>
                                                    <td>14 Jun, 17 Jun, 20 Jun, 23 Jun, 26 Jun, 29 Jun, 4 Jul 2026</td>
                                                    <td>NRG Stadium</td>
                                                    <td>Texas</td>
                                                </tr>
                                                <tr>
                                                    <td>16 Jun, 20 Jun, 25 Jun, 27 Jun, 3 Jul, 11 Jul 2026</td>
                                                    <td>Arrowhead Stadium</td>
                                                    <td>Missouri</td>
                                                </tr>
                                                <tr>
                                                    <td>12 Jun, 15 Jun, 18 Jun, 21 Jun, 25 Jun, 28 Jun, 2 Jul, 10 Jul
                                                        2026</td>
                                                    <td>SoFi Stadium</td>
                                                    <td>California</td>
                                                </tr>
                                                <tr>
                                                    <td>15 Jun, 21 Jun, 24 Jun, 27 Jun, 3 Jul, 11 Jul, 18 Jul 2026</td>
                                                    <td>Hard Rock Stadium</td>
                                                    <td>Florida</td>
                                                </tr>
                                                <tr>
                                                    <td>13 Jun, 16 Jun, 22 Jun, 25 Jun, 27 Jun, 30 Jun, 5 Jul, 19 Jul
                                                        2026</td>
                                                    <td>MetLife Stadium</td>
                                                    <td>New Jersey</td>
                                                </tr>
                                                <tr>
                                                    <td>14 Jun, 19 Jun, 22 Jun, 25 Jun, 27 Jun, 4 Jul 2026</td>
                                                    <td>Lincoln Financial Field</td>
                                                    <td>Pennsylvania</td>
                                                </tr>
                                                <tr>
                                                    <td>13 Jun, 16 Jun, 19 Jun, 22 Jun, 25 Jun, 1 Jul 2026</td>
                                                    <td>Levi's Stadium</td>
                                                    <td>California</td>
                                                </tr>
                                                <tr>
                                                    <td>15 Jun, 19 Jun, 24 Jun, 26 Jun, 1 Jul, 6 Jul 2026</td>
                                                    <td>Lumen Field</td>
                                                    <td>Washington</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <p class="mb-0"><small>Schedule based on FIFA's official FIFA World Cup 2026 match
                                            schedule published on 31 March 2026.</small></p>
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
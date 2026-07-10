@extends('main')
@section('meta_title', 'Airport Shuttle Service In NJ, NY | Airport Transportation')
@section('meta_description', 'Reliable airport shuttle service in NJ & NY by ALAR Chauffeur Service. Safe, punctual
airport transportation with SUVs, sedans, and Sprinter vans.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/services/airport-transportation/#webpage",
      "url": "https://alarchauffeurservice.com/services/airport-transportation",
      "name": "Airport Transportation Service | ALAR Chauffeur Service",
      "description": "Professional airport transportation service for JFK, LaGuardia, Newark, SFO, LAX, and more with luxury chauffeur service.",
      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },
      "breadcrumb": {
        "@@id": "https://alarchauffeurservice.com/services/airport-transportation/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "about": {
        "@@id": "https://alarchauffeurservice.com/services/airport-transportation/#service"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/services/airport-transportation/#breadcrumb",
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
          "name": "Airport Transportation",
          "item": "https://alarchauffeurservice.com/services/airport-transportation"
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
      "@@id": "https://alarchauffeurservice.com/services/airport-transportation/#service",
      "name": "Airport Transportation Service",
      "serviceType": "Airport Transfer",
      "description": "Luxury airport transportation service covering JFK, LaGuardia, Newark, SFO, LAX, and other major airports with professional chauffeurs.",
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
        "priceCurrency": "USD",
        "highPrice": "3000",
        "availability": "https://schema.org/InStock"
      }
    }

  ]
}
</script>
@endpush

@section('content')

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('assets/img/our-services/airport-transportation/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Premium Service</span>
        <h1>Airport Transportation Services | Airport Shuttle <span>Near Me In NJ</span></h1>
        <p class="text-white">ALAR Chauffeur Service is a trusted limo company in New Jersey, offering luxury SUVs,
            sedans, and Sprinter
            vans for premium transportation across NJ, NY, and nearby states.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Airport Transportation</li>
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
                        <img src="{{ asset('assets/img/our-services/airport-transportation/1.webp') }}"
                            alt="Airport Transportation" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Stress-Free Travel</span>
                        <h2>Experience Luxury and Elegance with <span>ALAR Chauffeur Service</span></h2>
                        <p class="ve-lead">Welcome to <a href="/" style="color: var(--ve-gold);"><b>ALAR Chauffeur
                                    Service</b></a>, your premier choice for exceptional airport transportation. We are
                            dedicated to providing smooth, reliable, and memorable travel experiences. Our airport
                            transfer services are designed for your convenience, offeringseamless point-to-point
                            transportation with professionalism and care.</p>

                        <p>Travel in comfort and style with our diverse fleet, including elegant sedans, spacious SUVs,
                            versatile mid-size crossover SUVs, and roomy Sprinter vans. Whatever your preference, we
                            have the perfect vehicle to suit your needs and make every journey enjoyable and
                            stress-free.
                        </p>

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

                        <h3>Timely, Expert, and Premium <span>Airport Transportation Experience</span></h3>
                        <p>At <a href="/" style="color: var(--ve-gold);"><b>ALAR Chauffeur Service</b></a>, punctuality
                            is our top priority, especially for airport transfers. Our skilled chauffeurs ensure
                            seamless travel between your location and theairport, making your journey stress-free and
                            reliable. Whether you are a business traveler, a family on vacation, or someone seeking a
                            luxurious ride, our airport transport service is designed to meet every need.</p>

                        <p>We also specialize in a range of premium services, including <a
                                href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Airport
                                    Limo Service JFK</b></a>, Limo Birthday Party New Jersey, <a
                                href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>Escalade Limo
                                    Rental</b></a>, and Corporate Limo New Jersey. Experience comfort, style, and
                            professionalism with every ride.</p>

                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> 60 Minutes Complimentary Wait Time</li>
                                        <li><i class="fa fa-check"></i> Bottled Water & WiFi Access</li>
                                        <li><i class="fa fa-check"></i> Child Safety Seats (Upon Request)</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Clean, Sanitized Late Model Fleet</li>
                                        <li><i class="fa fa-check"></i> Professional Suited Chauffeurs</li>
                                        <li><i class="fa fa-check"></i> 24/7 Dispatch and Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/airport-transportation/2.webp') }}" alt="Luxury Sedan"
                                        class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Travel in Luxury with Our Premium S-Class <span>Chauffeur Service</span></h2>
                                    <p>Travel in ultimate comfort and style with ALAR Chauffeur Service’s Mercedes
                                        S-Class Chauffeur Service, designed to meet the highest standards of elegance
                                        and convenience.</p>
                                    <p>Our premium service ensures unmatched luxury and comfort, whether you’re heading
                                        to a corporate meeting, a special event, or need seamless airport
                                        transportation. Let our professional chauffeurs handle every detail of your
                                        journey, providing discretion, expertise, and smooth, hassle-free travel from
                                        start to finish.</p>
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Professionalism <span>at Every Turn</span></h3>
                                <p>Our chauffeurs are more than just drivers; they are trained hospitality professionals
                                    who understand the nuances of executive travel. From discretion and confidentiality
                                    to knowing the most efficient routes to avoid unexpected delays, your chauffeur is
                                    dedicated to your safety and satisfaction.</p>

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
                                    <h3>Personalized <span>Meet and Greet</span></h3>
                                    <p>Avoid the confusion of crowded terminals. Our professional Meet and Greet service
                                        includes your chauffeur waiting for you at the arrivals area with a personalized
                                        sign. We'll assist with your luggage and lead you directly to your waiting
                                        vehicle, parked in the closest possible proximity to the terminal.</p>
                                    <p>This service is highly recommended for international travelers, families with
                                        young children, or anyone looking for the smoothest possible transition from
                                        flight to car.</p>
                                </div>
                                <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/img/our-services/airport-transportation/3.webp') }}"
                                        alt="Meet and Greet" class="img-fluid rounded-12 shadow-sm">
                                </div>
                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Airport Transfer <span>Frequently Asked Questions</span></h2>
                                <div id="airportFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqOne"
                                                aria-expanded="true" aria-controls="airportFaqOne">
                                                What airport transportation services does ALAR Chauffeur Service offer
                                                in New Jersey and New York?
                                            </button>
                                        </div>
                                        <div id="airportFaqOne" class="collapse show"
                                            aria-labelledby="airportFaqHeadingOne" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                ALAR Chauffeur Service offers luxury airport transfers, corporate limo
                                                rides, and group transportation across NJ, NY, and nearby states.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqTwo"
                                                aria-expanded="false" aria-controls="airportFaqTwo">
                                                How can I book an airport limo service with ALAR Chauffeur Service near
                                                me?
                                            </button>
                                        </div>
                                        <div id="airportFaqTwo" class="collapse" aria-labelledby="airportFaqHeadingTwo"
                                            data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                You can quickly book an airport limo online, by phone, or through our
                                                website for pickups in New Jersey and New York.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqThree"
                                                aria-expanded="false" aria-controls="airportFaqThree">
                                                What happens if my flight is delayed or arrives early for my airport
                                                transfer?
                                            </button>
                                        </div>
                                        <div id="airportFaqThree" class="collapse"
                                            aria-labelledby="airportFaqHeadingThree" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Our chauffeurs track your flight in real-time to adjust pickup times for
                                                delays or early arrivals.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqFour"
                                                aria-expanded="false" aria-controls="airportFaqFour">
                                                Which luxury vehicles are available for airport limo and corporate
                                                transfers?
                                            </button>
                                        </div>
                                        <div id="airportFaqFour" class="collapse"
                                            aria-labelledby="airportFaqHeadingFour" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Choose from Mercedes S-Class, SUVs, Sprinter vans, sedans, and party
                                                buses for airport or corporate travel.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="airportFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#airportFaqFive"
                                                aria-expanded="false" aria-controls="airportFaqFive">
                                                Are ALAR Chauffeur Service’s airport transfers and limo services
                                                available 24/7?
                                            </button>
                                        </div>
                                        <div id="airportFaqFive" class="collapse"
                                            aria-labelledby="airportFaqHeadingFive" data-parent="#airportFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our luxury airport transfers and limo services are available 24/7
                                                across New Jersey, New York, and the nearby states.
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
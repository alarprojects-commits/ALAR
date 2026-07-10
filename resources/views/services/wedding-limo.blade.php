@extends('main')
@section('meta_title', 'Wedding Limo Service in New Jersey | Luxury Wedding Rides')
@section('meta_description', 'Book wedding limo service in New Jersey for luxury bridal transportation, guest travel, airport pickups, and elegant chauffeur service.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/services/wedding-limo/#webpage",
      "url": "https://alarchauffeurservice.com/services/wedding-limo",
      "name": "Wedding Limo Service | ALAR Chauffeur Service",
      "description": "Luxury wedding limo service for bridal parties, groom transport, guest transfers, and special event wedding transportation.",
      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },
      "breadcrumb": {
        "@@id": "https://alarchauffeurservice.com/services/wedding-limo/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "about": {
        "@@id": "https://alarchauffeurservice.com/services/wedding-limo/#service"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/services/wedding-limo/#breadcrumb",
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
          "name": "Wedding Limo Service",
          "item": "https://alarchauffeurservice.com/services/wedding-limo"
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
      "@@id": "https://alarchauffeurservice.com/services/wedding-limo/#service",
      "name": "Wedding Limo Service",
      "serviceType": "Wedding Transportation",
      "description": "Premium wedding limo service for bride and groom transport, bridal party rides, guest shuttles, and luxury wedding event transportation.",
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

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero"
    style="background-image:url({{ asset('assets/img/our-services/wedding-transportation/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Elegant Experience</span>
        <h1>Luxury Wedding Limo Service in New Jersey for <span>Your Special Day</span></h1>
        <p class="text-white">Arrive in style with professional wedding limo service in New Jersey offering luxury vehicles, experienced chauffeurs, and smooth transportation for weddings, receptions, and guest travel.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Wedding Limo</li>
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
                        <img src="{{ asset('assets/img/our-services/wedding-transportation/1.webp') }}"
                            alt="Wedding Limo Service in New Jersey" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Your Special Day</span>
                        <h2>Wedding Limo Service in New Jersey for <span>Stress Free Wedding Transportation</span></h2>
                        <p class="ve-lead">Planning a wedding involves dozens of moving details, tight schedules, guest coordination, venue timing, and transportation management. One delayed ride or unreliable driver can create unnecessary stress during one of the most important days of your life.</p>

                        <p>Our wedding limo service in New Jersey is designed to provide smooth, elegant, and professionally managed transportation for couples, families, wedding guests, and bridal parties throughout the entire celebration.</p>

                        <p>Whether you need luxury transportation for the ceremony, reception, rehearsal dinner, airport pickups, or full day wedding travel, <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> delivers dependable service with comfort, punctuality, and professionalism.</p>

                        <p>From intimate ceremonies to large wedding events across New Jersey, our chauffeurs help make every arrival memorable and every journey comfortable.</p>

                        <h2>Elegant Wedding Transportation Designed <span>Around Your Schedule</span></h2>
                        <p>Every wedding follows a unique timeline. Some events require transportation between multiple venues, while others involve airport pickups, bridal party coordination, or late night reception departures.</p>

                        <p>Booking our wedding limo service in New Jersey gives you complete flexibility throughout the day without worrying about parking, traffic, delays, or separate ride arrangements.</p>

                        <h3>Benefits of Booking Wedding Chauffeur Service</h3>
                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Luxury transportation for brides and grooms</li>
                                        <li><i class="fa fa-check"></i> Professional chauffeurs with formal service standards</li>
                                        <li><i class="fa fa-check"></i> Comfortable travel for bridal parties and guests</li>
                                        <li><i class="fa fa-check"></i> Timely arrivals for ceremonies and receptions</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Multiple stop transportation flexibility</li>
                                        <li><i class="fa fa-check"></i> Smooth airport and hotel transfers</li>
                                        <li><i class="fa fa-check"></i> Private luxury travel throughout the event</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mt-20">This service is ideal for travelers searching for:</p>
                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>luxury wedding transportation</b></a></li>
                                        <li><i class="fa fa-check"></i> bridal limo service in New Jersey</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('contact-us') }}" style="color: var(--ve-gold);"><b>wedding chauffeur service near me</b></a></li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>luxury SUV for wedding transportation</b></a></li>
                                        <li><i class="fa fa-check"></i> private limo rental for weddings</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/wedding-transportation/2.webp') }}"
                                        alt="Luxury Wedding Limo in New Jersey" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Professional Wedding Limo Service in New Jersey for <span>Every Celebration</span></h2>
                                    <p>Different weddings require different transportation solutions. Our team helps couples organize transportation professionally while maintaining comfort and luxury throughout the experience.</p>

                                    <h3>Bridal Party Transportation</h3>
                                    <p>Keeping the bridal party together helps simplify scheduling and creates a more relaxed experience before the ceremony begins. Our luxury vehicles provide spacious and comfortable travel for bridesmaids, groomsmen, and close family members.</p>

                                    <h3>Ceremony and Reception Transfers</h3>
                                    <p>Many weddings involve separate ceremony and reception venues. Our wedding limo service in New Jersey allows couples and guests to travel comfortably between locations without delays or confusion.</p>
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Airport Transportation for Wedding Guests</h3>
                                <p>Out of town guests often require reliable airport pickups and hotel transportation. Our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transportation service</b></a> helps family members and guests arrive smoothly from major nearby airports.</p>

                                <h3>Luxury Transportation for Wedding Events</h3>
                                <p>In addition to ceremony day transportation, many couples reserve chauffeur service for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Engagement parties</li>
                                                <li><i class="fa fa-check"></i> Rehearsal dinners</li>
                                                <li><i class="fa fa-check"></i> Bachelor and bachelorette events</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Family gatherings</li>
                                                <li><i class="fa fa-check"></i> Wedding photo sessions</li>
                                                <li><i class="fa fa-check"></i> Late night reception departures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">For travelers searching online for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> executive wedding transportation</li>
                                                <li><i class="fa fa-check"></i> luxury limo rental New Jersey</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> wedding black car service</li>
                                                <li><i class="fa fa-check"></i> professional chauffeur for weddings</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Our service is structured to deliver a premium experience from beginning to end.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Wedding Limo Service Across <span>New Jersey and Nearby Cities</span></h2>
                                <p>Our wedding limo service in New Jersey covers major wedding venues, hotels, airports, and event locations across the state and nearby regions.</p>

                                <div class="row mt-30">
                                    <div class="col-12">
                                        <h3>Areas We Frequently Serve</h3>
                                        <div class="ve-amenities-list">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Jersey City</b></a></li>
                                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Newark limo service</b></a></li>
                                                        <li><i class="fa fa-check"></i> Bergen County chauffeur service</li>
                                                        <li><i class="fa fa-check"></i> Hudson County wedding transportation</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> Essex County limo service</li>
                                                        <li><i class="fa fa-check"></i> Middlesex County luxury transportation</li>
                                                        <li><i class="fa fa-check"></i> Union County wedding chauffeur</li>
                                                        <li><i class="fa fa-check"></i> Passaic County black car service</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-40">
                                        <h3>Airports We Serve</h3>
                                        <div class="ve-amenities-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> Newark Liberty International Airport</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> John F Kennedy International Airport</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> LaGuardia Airport</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mt-20">We also provide long distance luxury transportation including:</p>
                                        <div class="ve-amenities-list">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>NJ to NY limo service</b></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.seattle') }}" style="color: var(--ve-gold);"><b>New Jersey to Seattle transportation</b></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <li><i class="fa fa-check"></i> <a href="{{ route('service-area.nevada') }}" style="color: var(--ve-gold);"><b>Nevada to New Jersey chauffeur service</b></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                    <h2>Luxury Fleet for Wedding Day <span>Comfort and Style</span></h2>
                                    <p>Your wedding transportation should feel elegant, comfortable, and professionally maintained throughout the event.</p>
                                    <p>Our <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>fleet</b></a> includes luxury sedans, executive SUVs, and premium black car options suitable for couples, families, and bridal groups.</p>

                                    <h3>What Couples Appreciate About Our Wedding Transportation</h3>
                                    <div class="ve-amenities-list mt-30">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Clean and luxury maintained vehicles</li>
                                            <li><i class="fa fa-check"></i> Professional and courteous chauffeurs</li>
                                            <li><i class="fa fa-check"></i> Comfortable seating for long rides</li>
                                            <li><i class="fa fa-check"></i> Quiet and private travel environment</li>
                                            <li><i class="fa fa-check"></i> Reliable scheduling and punctual arrivals</li>
                                            <li><i class="fa fa-check"></i> Luxury experience for wedding photography moments</li>
                                        </ul>
                                    </div>
                                    <p class="mt-20">Our wedding limo service in New Jersey is designed for couples who value professionalism, appearance, and dependable transportation on an important occasion.</p>
                                </div>
                                <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/img/our-services/wedding-transportation/3.webp') }}"
                                        alt="Luxury Wedding Fleet in New Jersey" class="img-fluid rounded-12 shadow-sm">
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Simple Booking Process for <span>Wedding Chauffeur Service</span></h2>
                                <p>Booking wedding transportation should feel organized and stress free from the start.</p>

                                <h3>How to Reserve Your Wedding Limo</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Select your wedding date</li>
                                        <li><i class="fa fa-check"></i> Choose pickup and venue locations</li>
                                        <li><i class="fa fa-check"></i> Select your preferred luxury vehicle</li>
                                        <li><i class="fa fa-check"></i> Confirm passenger count and travel schedule</li>
                                        <li><i class="fa fa-check"></i> Finalize reservation details with our team</li>
                                    </ul>
                                </div>

                                <p class="mt-20">Advance booking is strongly recommended during wedding season, weekends, holidays, and major event dates.</p>
                                <p><a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book online today</b></a> and receive a special 10% discount on your reservation.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Why Couples Choose Our Wedding Limo Service in <span>New Jersey</span></h2>
                                <p>Transportation is one of the most important parts of a successful wedding day. Delays, traffic problems, or unreliable rides can interrupt the experience and create unnecessary pressure.</p>

                                <p><a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> continues to provide trusted wedding limo service in New Jersey for couples who expect punctuality, luxury, professionalism, and flexible transportation solutions throughout their celebration.</p>

                                <p>Whether you need transportation for a private ceremony, luxury reception arrival, airport guest pickups, or full day chauffeur service, our team is committed to delivering a smooth and memorable experience.</p>
                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Common Questions About <span>Wedding Limo Service in New Jersey</span></h2>
                                <div id="weddingFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="weddingFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#weddingFaqOne"
                                                aria-expanded="true" aria-controls="weddingFaqOne">
                                                What is included in wedding limo service?
                                            </button>
                                        </div>
                                        <div id="weddingFaqOne" class="collapse show"
                                            aria-labelledby="weddingFaqHeadingOne" data-parent="#weddingFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Wedding limo service includes a professional chauffeur, luxury vehicle, scheduled transportation, multiple stops if needed, and flexible travel for wedding events.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="weddingFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#weddingFaqTwo"
                                                aria-expanded="false" aria-controls="weddingFaqTwo">
                                                Can we book transportation for wedding guests?
                                            </button>
                                        </div>
                                        <div id="weddingFaqTwo" class="collapse" aria-labelledby="weddingFaqHeadingTwo"
                                            data-parent="#weddingFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we provide guest transportation, airport pickups, hotel transfers, and shuttle coordination for wedding attendees.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="weddingFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#weddingFaqThree"
                                                aria-expanded="false" aria-controls="weddingFaqThree">
                                                Do you provide airport transportation for family members?
                                            </button>
                                        </div>
                                        <div id="weddingFaqThree" class="collapse"
                                            aria-labelledby="weddingFaqHeadingThree" data-parent="#weddingFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our airport transportation service covers Newark Airport, JFK Airport, and LaGuardia Airport for arriving wedding guests and families.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="weddingFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#weddingFaqFour"
                                                aria-expanded="false" aria-controls="weddingFaqFour">
                                                Which areas do you cover in New Jersey?
                                            </button>
                                        </div>
                                        <div id="weddingFaqFour" class="collapse"
                                            aria-labelledby="weddingFaqHeadingFour" data-parent="#weddingFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                We provide wedding transportation across Jersey City, Newark, Bergen County, Hudson County, Essex County, Middlesex County, Union County, and nearby locations.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="weddingFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#weddingFaqFive"
                                                aria-expanded="false" aria-controls="weddingFaqFive">
                                                Is your wedding limo service available late at night?
                                            </button>
                                        </div>
                                        <div id="weddingFaqFive" class="collapse"
                                            aria-labelledby="weddingFaqHeadingFive" data-parent="#weddingFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our chauffeur and limo service operates 24/7 for weddings, receptions, private events, and late night transportation needs.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="weddingFaqHeadingSix">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#weddingFaqSix"
                                                aria-expanded="false" aria-controls="weddingFaqSix">
                                                Can I reserve luxury SUVs for bridal parties?
                                            </button>
                                        </div>
                                        <div id="weddingFaqSix" class="collapse"
                                            aria-labelledby="weddingFaqHeadingSix" data-parent="#weddingFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our fleet includes luxury SUVs and premium vehicles suitable for bridal groups, family transportation, and executive wedding travel.
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

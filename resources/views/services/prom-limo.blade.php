@extends('main')
@section('meta_title', 'Prom Limo Services in New Jersey | Alar Chauffeur Service')
@section('meta_description', 'Book prom limo services in New Jersey for safe luxury transportation, student prom packages, group rides, and professional chauffeur service.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/services/prom-limo/#webpage",
      "url": "https://alarchauffeurservice.com/services/prom-limo",
      "name": "Prom Limo Service | ALAR Chauffeur Service",
      "description": "Luxury prom limo service for safe, stylish, and professional transportation for prom night, school events, and special celebrations.",
      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },
      "breadcrumb": {
        "@@id": "https://alarchauffeurservice.com/services/prom-limo/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "about": {
        "@@id": "https://alarchauffeurservice.com/services/prom-limo/#service"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/services/prom-limo/#breadcrumb",
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
          "name": "Prom Limo Service",
          "item": "https://alarchauffeurservice.com/services/prom-limo"
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
      "@@id": "https://alarchauffeurservice.com/services/prom-limo/#service",
      "name": "Prom Limo Service",
      "serviceType": "Prom Night Transportation",
      "description": "Safe and luxurious prom limo service providing stylish transportation for students, groups, and prom events with professional chauffeurs.",
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
    style="background-image:url({{ asset('assets/img/our-services/prom-night/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Unforgettable Night</span>
        <h1>Luxury Prom Limo Services in New Jersey for an <span>Unforgettable Night</span></h1>
        <p class="text-white">Celebrate prom night with safe, stylish, and professional prom limo services in New Jersey offering luxury vehicles, student packages, and reliable chauffeur transportation.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Prom Limo</li>
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
                        <img src="{{ asset('assets/img/our-services/prom-night/1.webp') }}"
                            alt="Prom Limo Services in New Jersey" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Style & Safety</span>
                        <h2>Prom Limo Services in New Jersey for Students Who Want <span>Style and Safety</span></h2>
                        <p class="ve-lead">Prom night is one of the most exciting events for high school students. From photos and dinner reservations to after parties and venue arrivals, transportation plays an important role in creating a smooth and memorable experience.</p>

                        <p>Our prom limo services in New Jersey are designed for students and parents looking for safe, professional, and luxury transportation throughout prom night. Instead of relying on multiple cars or uncertain rides, students can travel together comfortably with a professional chauffeur handling the entire journey.</p>

                        <p><a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> provides dependable prom transportation across New Jersey with luxury vehicles, experienced chauffeurs, and flexible scheduling for prom events, dinner stops, photo locations, and after prom transportation.</p>

                        <p>Whether students are attending prom in Jersey City, Newark, Bergen County, or nearby areas, our team helps make the night enjoyable, organized, and stress free.</p>

                        <h2>Luxury Prom Transportation Designed for <span>Students and Groups</span></h2>
                        <p>Prom transportation should feel exciting, comfortable, and professionally managed from pickup to drop off.</p>

                        <p>Booking our <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>prom limo services in New Jersey</b></a> allows students to enjoy luxury transportation while parents gain peace of mind knowing a professional chauffeur is handling the travel schedule safely.</p>

                        <h3>Benefits of Booking Prom Limo Service</h3>
                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Safe transportation for prom students</li>
                                        <li><i class="fa fa-check"></i> Luxury vehicles for group travel</li>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>Professional and licensed chauffeurs</b></a></li>
                                        <li><i class="fa fa-check"></i> Comfortable rides between venues and stops</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Reliable pickups and drop offs</li>
                                        <li><i class="fa fa-check"></i> Stylish arrival experience for prom night</li>
                                        <li><i class="fa fa-check"></i> Flexible scheduling for dinner and photo stops</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mt-20">This service is ideal for travelers searching for:</p>
                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>prom limo for students</b></a></li>
                                        <li><i class="fa fa-check"></i> affordable prom limo packages in New Jersey</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> <a href="{{ route('contact-us') }}" style="color: var(--ve-gold);"><b>luxury prom transportation near me</b></a></li>
                                        <li><i class="fa fa-check"></i> student limo rental service</li>
                                        <li><i class="fa fa-check"></i> private chauffeur service for prom night</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/prom-night/2.webp') }}"
                                        alt="Student Prom Limo Packages in New Jersey" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Special Student Packages for <span>Prom Limo Services in New Jersey</span></h2>
                                    <p>We understand students and families often look for affordable luxury transportation during prom season. That is why <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> offers flexible and professionally managed student prom transportation packages.</p>

                                    <h3>Affordable Prom Limo Packages for Students</h3>
                                    <p>Our student prom limo packages are designed to help groups share luxury transportation while managing costs more efficiently.</p>
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <p>Packages may include:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Group transportation for friends</li>
                                                <li><i class="fa fa-check"></i> Multiple pickup and drop off locations</li>
                                                <li><i class="fa fa-check"></i> Dinner and photography stop flexibility</li>
                                                <li><i class="fa fa-check"></i> Round trip prom transportation</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> <a href="{{ route('services.hourly-limo') }}" style="color: var(--ve-gold);"><b>Hourly chauffeur service</b></a></li>
                                                <li><i class="fa fa-check"></i> Late night return service</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">Our prom limo services in New Jersey provide students with an exciting experience while maintaining safety and reliability throughout the night.</p>

                                <p class="mt-20">For students searching online for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> affordable prom limo service</li>
                                                <li><i class="fa fa-check"></i> group limo for prom students</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>luxury SUV for prom night</b></a></li>
                                                <li><i class="fa fa-check"></i> prom chauffeur service in New Jersey</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Our transportation solutions are designed to match those needs professionally.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Safe and Professional <span>Prom Chauffeur Service</span></h2>
                                <p>Parents often prioritize safety when arranging prom transportation. Our professional chauffeurs help ensure students travel responsibly throughout the evening.</p>

                                <h3>Why Families Choose Our Prom Transportation</h3>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Professionally trained chauffeurs</li>
                                                <li><i class="fa fa-check"></i> Clean and luxury maintained vehicles</li>
                                                <li><i class="fa fa-check"></i> Reliable arrival scheduling</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> <a href="{{ route('services.group-transportation') }}" style="color: var(--ve-gold);"><b>Comfortable group transportation</b></a></li>
                                                <li><i class="fa fa-check"></i> Safe late night transportation options</li>
                                                <li><i class="fa fa-check"></i> Organized travel planning for parents and students</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Our prom limo services in New Jersey focus on delivering a professional experience that balances luxury, safety, and reliability for every prom event.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Prom Limo Services Across <span>New Jersey and Nearby Cities</span></h2>
                                <p>Our prom transportation service covers major schools, event venues, restaurants, hotels, and entertainment areas throughout New Jersey.</p>

                                <div class="mt-30">
                                    <h3>Areas We Frequently Serve</h3>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Jersey City prom limo service</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Newark chauffeur service</b></a></li>
                                                    <li><i class="fa fa-check"></i> Bergen County prom transportation</li>
                                                    <li><i class="fa fa-check"></i> Hudson County limo service</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Essex County luxury transportation</li>
                                                    <li><i class="fa fa-check"></i> Middlesex County black car service</li>
                                                    <li><i class="fa fa-check"></i> Union County chauffeur service</li>
                                                    <li><i class="fa fa-check"></i> Passaic County prom limo rental</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <h3>Popular Prom Transportation Services</h3>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Dinner transportation before prom</li>
                                                    <li><i class="fa fa-check"></i> Luxury rides to prom venues</li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('services.group-transportation') }}" style="color: var(--ve-gold);"><b>Group limo service for students</b></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Hotel transportation after prom</li>
                                                    <li><i class="fa fa-check"></i> After prom event transportation</li>
                                                    <li><i class="fa fa-check"></i> Late night pickup and drop off service</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <p>We also provide long distance luxury transportation including:</p>
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

                            <div class="row align-items-center mt-50 mb-30">
                                <div class="col-md-6 order-2 order-md-1 wow fadeInLeft" data-wow-delay="100ms">
                                    <h2>Luxury Fleet for <span>Prom Night Transportation</span></h2>
                                    <p>Prom night deserves a transportation experience that feels exciting, comfortable, and memorable.</p>
                                    <p>Our <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>fleet</b></a> includes luxury sedans, premium SUVs, and executive black car options suitable for couples, friend groups, and student transportation.</p>

                                    <h3>What Students Appreciate About Our Service</h3>
                                    <div class="ve-amenities-list mt-30">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Stylish luxury vehicles</li>
                                            <li><i class="fa fa-check"></i> Comfortable seating for groups</li>
                                            <li><i class="fa fa-check"></i> Smooth and quiet rides</li>
                                            <li><i class="fa fa-check"></i> <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>Professional chauffeur experience</b></a></li>
                                            <li><i class="fa fa-check"></i> Clean and well maintained interiors</li>
                                            <li><i class="fa fa-check"></i> Reliable transportation throughout prom night</li>
                                        </ul>
                                    </div>
                                    <p class="mt-20">Our prom limo services in New Jersey help students enjoy the evening with confidence, comfort, and luxury transportation.</p>
                                </div>
                                <div class="col-md-6 order-1 order-md-2 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <img src="{{ asset('assets/img/our-services/prom-night/3.webp') }}"
                                        alt="Luxury Prom Limo Fleet in New Jersey" class="img-fluid rounded-12 shadow-sm">
                                </div>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Simple Booking Process for <span>Prom Limo Service</span></h2>
                                <p>Booking prom transportation should feel easy and organized for both students and parents.</p>

                                <h3>How to Reserve Your Prom Limo</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Select your prom date</li>
                                        <li><i class="fa fa-check"></i> Choose pickup and destination locations</li>
                                        <li><i class="fa fa-check"></i> Select your preferred luxury vehicle</li>
                                        <li><i class="fa fa-check"></i> Confirm group size and travel schedule</li>
                                        <li><i class="fa fa-check"></i> Finalize reservation details with our team</li>
                                    </ul>
                                </div>

                                <p class="mt-20">Advance reservations are strongly recommended during prom season due to high demand across New Jersey schools and event venues.</p>
                                <p><a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book online today</b></a> and receive a special 10% discount on your prom transportation reservation.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Why Students and Families Choose Our Prom Limo Services in <span>New Jersey</span></h2>
                                <p>Prom transportation should provide more than just a ride. It should create a safe, organized, and memorable experience that students can enjoy confidently throughout the evening.</p>

                                <p><a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a> continues to provide trusted prom limo services in New Jersey for students, families, and groups seeking professional chauffeur transportation with luxury vehicles and flexible scheduling.</p>

                                <p>Whether you need transportation for prom dinner, venue arrivals, group travel, or late night return rides, our team is committed to delivering dependable service across every part of the journey.</p>
                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Common Questions About <span>Prom Limo Services in New Jersey</span></h2>
                                <div id="promFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="promFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#promFaqOne"
                                                aria-expanded="true" aria-controls="promFaqOne">
                                                Do you provide prom limo service for student groups?
                                            </button>
                                        </div>
                                        <div id="promFaqOne" class="collapse show"
                                            aria-labelledby="promFaqHeadingOne" data-parent="#promFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we provide luxury transportation for individual students, couples, and group prom travel across New Jersey.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="promFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#promFaqTwo"
                                                aria-expanded="false" aria-controls="promFaqTwo">
                                                Are your prom transportation packages affordable for students?
                                            </button>
                                        </div>
                                        <div id="promFaqTwo" class="collapse" aria-labelledby="promFaqHeadingTwo"
                                            data-parent="#promFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, we offer flexible student prom packages designed to make luxury transportation more affordable for groups and shared rides.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="promFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#promFaqThree"
                                                aria-expanded="false" aria-controls="promFaqThree">
                                                Can students make multiple stops during prom night?
                                            </button>
                                        </div>
                                        <div id="promFaqThree" class="collapse"
                                            aria-labelledby="promFaqHeadingThree" data-parent="#promFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our prom chauffeur service can include dinner stops, photography locations, hotel stops, and after prom transportation.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="promFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#promFaqFour"
                                                aria-expanded="false" aria-controls="promFaqFour">
                                                Which areas do you cover in New Jersey?
                                            </button>
                                        </div>
                                        <div id="promFaqFour" class="collapse"
                                            aria-labelledby="promFaqHeadingFour" data-parent="#promFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                We provide prom transportation across Jersey City, Newark, Bergen County, Hudson County, Essex County, Middlesex County, Union County, and nearby areas.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="promFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#promFaqFive"
                                                aria-expanded="false" aria-controls="promFaqFive">
                                                Is your prom limo service available late at night?
                                            </button>
                                        </div>
                                        <div id="promFaqFive" class="collapse"
                                            aria-labelledby="promFaqHeadingFive" data-parent="#promFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes, our chauffeur service operates 24/7 for prom events, late night pickups, and after prom transportation.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="promFaqHeadingSix">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#promFaqSix"
                                                aria-expanded="false" aria-controls="promFaqSix">
                                                What vehicles are available for prom transportation?
                                            </button>
                                        </div>
                                        <div id="promFaqSix" class="collapse"
                                            aria-labelledby="promFaqHeadingSix" data-parent="#promFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Our fleet includes luxury sedans, executive SUVs, and premium black car options suitable for couples and student groups.
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

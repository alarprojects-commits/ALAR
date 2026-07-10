@extends('main')
@section('meta_title', 'Group Transportation in New Jersey | Alar Chauffeur Service')
@section('meta_description', 'Book group transportation in New Jersey for corporate events, airport transfers, weddings, sports events, and private group travel.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/services/group-transportation/#webpage",
      "url": "https://alarchauffeurservice.com/services/group-transportation",
      "name": "Group Transportation Service | ALAR Chauffeur Service",
      "description": "Luxury group transportation service for airport transfers, corporate groups, weddings, events, sports, and large group travel with professional chauffeurs.",
      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },
      "breadcrumb": {
        "@@id": "https://alarchauffeurservice.com/services/group-transportation/#breadcrumb"
      },
      "primaryImageOfPage": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "about": {
        "@@id": "https://alarchauffeurservice.com/services/group-transportation/#service"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/services/group-transportation/#breadcrumb",
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
          "name": "Group Transportation",
          "item": "https://alarchauffeurservice.com/services/group-transportation"
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
      "@@id": "https://alarchauffeurservice.com/services/group-transportation/#service",
      "name": "Group Transportation Service",
      "serviceType": "Group Travel & Shuttle Service",
      "description": "Reliable and luxury group transportation service for corporate travel, airport transfers, weddings, sporting events, concerts, and large group movements.",
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
    style="background-image:url({{ asset('assets/img/our-services/group-transportation/banner.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Travel Together</span>
        <h1>Professional Group Transportation Services in <span>New Jersey & New York</span></h1>
        <p class="text-white">Travel together with luxury group transportation in New Jersey. Perfect for corporate events, airport transfers, weddings, sporting events, and private group travel.</p>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li class="active">Group Transportation</li>
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
                        <img src="{{ asset('assets/img/our-services/group-transportation/1.webp') }}"
                            alt="Group Transportation in New Jersey" class="img-fluid rounded-12 shadow-sm">
                    </div>

                    <div class="ve-detail-text wow fadeInUp" data-wow-delay="200ms">
                        <span class="ve-section-tag">Logistics Perfected</span>
                        <h2>Reliable Group Transportation in New Jersey for <span>Every Occasion</span></h2>
                        <p class="ve-lead">Coordinating transportation for multiple people can quickly become complicated. Managing separate vehicles, different arrival times, parking issues, and traffic delays often creates unnecessary stress for organizers and travelers alike.</p>

                        <p>Our <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>group transportation in New Jersey</b></a> is designed to simplify travel by keeping everyone together in comfortable, professionally managed vehicles. Whether you are organizing a corporate event, wedding celebration, airport transfer, sports outing, family gathering, or business meeting, our transportation solutions help your group travel efficiently and comfortably.</p>

                        <p>At <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a>, we understand that successful group travel requires punctuality, organization, and flexibility. Our professional chauffeurs handle the logistics while your group focuses on enjoying the journey.</p>

                        <h2>Why Choose Professional <span>Group Transportation Services</span></h2>
                        <p>Traveling as a group should be convenient, comfortable, and organized. Our group transportation in New Jersey provides a dependable solution for groups of various sizes while maintaining luxury standards throughout the experience.</p>

                        <h3>Benefits of Group Transportation</h3>
                        <div class="ve-amenities-list mt-30 wow fadeInUp" data-wow-delay="300ms">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Everyone travels together</li>
                                        <li><i class="fa fa-check"></i> Professional and experienced chauffeurs</li>
                                        <li><i class="fa fa-check"></i> Reduced parking and traffic concerns</li>
                                        <li><i class="fa fa-check"></i> Convenient pickup and drop-off locations</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Comfortable seating and spacious vehicles</li>
                                        <li><i class="fa fa-check"></i> Reliable scheduling and punctual arrivals</li>
                                        <li><i class="fa fa-check"></i> Cost-effective transportation for larger groups</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mt-20">Many travelers searching online are looking for:</p>
                        <div class="ve-amenities-list mt-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> group transportation near me</li>
                                        <li><i class="fa fa-check"></i> private group travel service</li>
                                        <li><i class="fa fa-check"></i> luxury group transportation</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><i class="fa fa-check"></i> executive group transportation</li>
                                        <li><i class="fa fa-check"></i> group chauffeur service</li>
                                        <li><i class="fa fa-check"></i> corporate transportation solutions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="mt-20">Our services are designed to meet these transportation needs professionally and efficiently.</p>

                        <div class="ve-detail-extra-content mt-50">
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/group-transportation/2.webp') }}"
                                        alt="Corporate Group Transportation in New Jersey" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Corporate Group Transportation <span>in New Jersey</span></h2>
                                    <p>Business events often require dependable transportation for employees, executives, clients, and conference attendees.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Corporate Transportation Solutions</h3>
                                <p>Our <a href="{{ route('services.corporate-transportation') }}" style="color: var(--ve-gold);"><b>corporate transportation services</b></a> include:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Business meetings</li>
                                        <li><i class="fa fa-check"></i> Corporate conferences</li>
                                        <li><i class="fa fa-check"></i> Trade shows</li>
                                        <li><i class="fa fa-check"></i> Executive travel</li>
                                        <li><i class="fa fa-check"></i> Company events</li>
                                        <li><i class="fa fa-check"></i> Team-building activities</li>
                                        <li><i class="fa fa-check"></i> Client transportation</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Our <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>chauffeur service</b></a> helps businesses maintain a professional image while ensuring smooth transportation between offices, hotels, airports, and event venues.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <p>For companies searching for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> corporate car service</li>
                                                <li><i class="fa fa-check"></i> executive transportation</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> business travel solutions</li>
                                                <li><i class="fa fa-check"></i> conference transportation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Our luxury transportation services provide a professional and reliable solution.</p>

                                <h2>Group Airport Transportation for <span>Stress-Free Travel</span></h2>
                                <p>Airport travel becomes much easier when your entire group arrives together. Coordinating multiple rides can lead to delays, confusion, and additional expenses.</p>

                                <h3>Airport Transportation Services</h3>
                                <p>Our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport transportation service</b></a> provides group travel to and from:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Newark Liberty International Airport</li>
                                                <li><i class="fa fa-check"></i> John F. Kennedy International Airport</li>
                                                <li><i class="fa fa-check"></i> LaGuardia Airport</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Private aviation terminals</li>
                                                <li><i class="fa fa-check"></i> Regional airports</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Whether you're traveling for business, family vacations, destination weddings, or special events, our airport transportation solutions help ensure a smooth journey from start to finish.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Wedding and Special Event <span>Group Transportation</span></h2>
                                <p>Transportation plays a major role in keeping weddings and special events organized.</p>

                                <h3>Event Transportation Services</h3>
                                <p>Our <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>group transportation in New Jersey</b></a> is ideal for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> <a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>Wedding transportation</b></a></li>
                                                <li><i class="fa fa-check"></i> Bridal party transportation</li>
                                                <li><i class="fa fa-check"></i> Rehearsal dinner travel</li>
                                                <li><i class="fa fa-check"></i> Engagement celebrations</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Birthday parties</li>
                                                <li><i class="fa fa-check"></i> Family reunions</li>
                                                <li><i class="fa fa-check"></i> Graduation events</li>
                                                <li><i class="fa fa-check"></i> Religious ceremonies</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Our luxury transportation solutions help guests arrive comfortably and on time while reducing parking and traffic concerns at venues.</p>
                                <p>For couples planning weddings, our <a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b>wedding limo service</b></a> and event transportation options provide elegant and reliable travel throughout the celebration.</p>
                            </div>

                            <div class="row align-items-center mt-50">
                                <div class="col-md-6 mb-30 wow fadeInLeft" data-wow-delay="100ms">
                                    <img src="{{ asset('assets/img/our-services/group-transportation/3.webp') }}"
                                        alt="Group Transportation for Sporting Events" class="img-fluid rounded-12 shadow-sm">
                                </div>
                                <div class="col-md-6 mb-30 wow fadeInRight" data-wow-delay="200ms">
                                    <h2>Group Transportation for <span>Sporting Events and Concerts</span></h2>
                                    <p>Large sporting events and entertainment venues often attract heavy traffic and limited parking availability.</p>
                                </div>
                            </div>

                            <div class="mt-30 wow fadeInUp" data-wow-delay="100ms">
                                <h3>Popular Group Travel Destinations</h3>
                                <p>Our transportation services are perfect for:</p>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Sporting events</li>
                                        <li><i class="fa fa-check"></i> Professional football games</li>
                                        <li><i class="fa fa-check"></i> Basketball games</li>
                                        <li><i class="fa fa-check"></i> Soccer matches</li>
                                        <li><i class="fa fa-check"></i> Concerts and music festivals</li>
                                        <li><i class="fa fa-check"></i> Stadium events</li>
                                        <li><i class="fa fa-check"></i> Live entertainment venues</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Our <a href="{{ route('services.sporting-events') }}" style="color: var(--ve-gold);"><b>sporting and event limo service</b></a> allows groups to travel together comfortably while avoiding transportation challenges associated with large events.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Group Transportation Across <span>New Jersey and New York</span></h2>
                                <p>Our transportation network covers major cities, airports, business districts, and event venues throughout New Jersey and nearby New York destinations.</p>

                                <div class="mt-30">
                                    <h3>Areas We Frequently Serve</h3>
                                    <h4 class="mt-20 mb-15">New Jersey Service Areas</h4>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Jersey City transportation</b></a></li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-gold);"><b>Newark chauffeur service</b></a></li>
                                                    <li><i class="fa fa-check"></i> Bergen County transportation</li>
                                                    <li><i class="fa fa-check"></i> Hudson County group transportation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Essex County limo service</li>
                                                    <li><i class="fa fa-check"></i> Middlesex County transportation</li>
                                                    <li><i class="fa fa-check"></i> Union County chauffeur service</li>
                                                    <li><i class="fa fa-check"></i> Passaic County luxury transportation</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <h4 class="mb-15">New York Service Areas</h4>
                                    <div class="ve-amenities-list">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Manhattan transportation</li>
                                                    <li><i class="fa fa-check"></i> <a href="{{ route('service-area.new-york') }}" style="color: var(--ve-gold);"><b>Brooklyn chauffeur service</b></a></li>
                                                    <li><i class="fa fa-check"></i> Queens airport transportation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Bronx group travel service</li>
                                                    <li><i class="fa fa-check"></i> Long Island transportation</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">This regional coverage helps travelers searching for both New Jersey and New York transportation solutions find dependable service from a single provider.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Luxury Fleet for <span>Group Transportation</span></h2>
                                <p>Comfort is essential when transporting multiple passengers.</p>

                                <h3>Our Premium Transportation Fleet</h3>
                                <p>Our <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>fleet</b></a> includes:</p>
                                <div class="ve-amenities-list mt-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Luxury sedans</li>
                                                <li><i class="fa fa-check"></i> Executive SUVs</li>
                                                <li><i class="fa fa-check"></i> Premium black cars</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fa fa-check"></i> Business transportation vehicles</li>
                                                <li><i class="fa fa-check"></i> Airport transfer vehicles</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-20">Every vehicle is professionally maintained to ensure safety, reliability, cleanliness, and comfort throughout your journey.</p>

                                <h3>What Clients Appreciate About Our Fleet</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Comfortable seating</li>
                                        <li><i class="fa fa-check"></i> Spacious interiors</li>
                                        <li><i class="fa fa-check"></i> Climate-controlled cabins</li>
                                        <li><i class="fa fa-check"></i> Professional presentation</li>
                                        <li><i class="fa fa-check"></i> Smooth ride quality</li>
                                        <li><i class="fa fa-check"></i> Modern amenities</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Whether your group is traveling across New Jersey or between New Jersey and New York, our fleet is designed to provide a premium transportation experience.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Easy Booking Process for <span>Group Transportation</span></h2>
                                <p>Planning group transportation should be simple and efficient.</p>

                                <h3>How to Reserve Group Transportation</h3>
                                <div class="ve-amenities-list mt-30">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Select your travel date</li>
                                        <li><i class="fa fa-check"></i> Choose pickup and destination locations</li>
                                        <li><i class="fa fa-check"></i> Confirm passenger count</li>
                                        <li><i class="fa fa-check"></i> Select your preferred vehicle</li>
                                        <li><i class="fa fa-check"></i> Complete your reservation</li>
                                    </ul>
                                </div>
                                <p class="mt-20">Our team assists with transportation planning to ensure your group's travel schedule runs smoothly from beginning to end.</p>
                                <p><a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Book online today</b></a> and receive a special 10% discount on your reservation.</p>
                            </div>

                            <div class="mt-40 wow fadeInUp" data-wow-delay="100ms">
                                <h2>Why Choose Alar Chauffeur Service for Group Transportation in <span>New Jersey</span></h2>
                                <p>When organizing group travel, reliability matters. Delays, miscommunication, and transportation issues can impact the entire experience.</p>
                                <p>Our group transportation in New Jersey combines luxury vehicles, experienced chauffeurs, professional planning, and exceptional customer service to provide dependable transportation for every occasion.</p>
                                <p>Whether you're arranging airport transfers, corporate events, sporting events, weddings, family gatherings, or business travel, our team is committed to delivering a comfortable and stress-free transportation experience.</p>
                            </div>

                            <div class="mt-50 wow fadeInUp" data-wow-delay="150ms">
                                <span class="ve-section-tag">FAQs</span>
                                <h2>Frequently Asked <span>Questions</span></h2>
                                <div id="groupFaqAccordion" class="accordion ve-faq-accordion mt-30">
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="groupFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#groupFaqOne"
                                                aria-expanded="true" aria-controls="groupFaqOne">
                                                What types of group transportation services do you provide?
                                            </button>
                                        </div>
                                        <div id="groupFaqOne" class="collapse show"
                                            aria-labelledby="groupFaqHeadingOne" data-parent="#groupFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                We provide transportation for corporate events, airport transfers, weddings, sporting events, concerts, family gatherings, conferences, and private group travel.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="groupFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#groupFaqTwo"
                                                aria-expanded="false" aria-controls="groupFaqTwo">
                                                Do you provide group airport transportation?
                                            </button>
                                        </div>
                                        <div id="groupFaqTwo" class="collapse" aria-labelledby="groupFaqHeadingTwo"
                                            data-parent="#groupFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. We offer airport transportation for groups traveling to and from Newark Airport, JFK Airport, LaGuardia Airport, and private aviation terminals.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="groupFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#groupFaqThree"
                                                aria-expanded="false" aria-controls="groupFaqThree">
                                                Can you accommodate corporate transportation needs?
                                            </button>
                                        </div>
                                        <div id="groupFaqThree" class="collapse"
                                            aria-labelledby="groupFaqHeadingThree" data-parent="#groupFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Absolutely. Our corporate transportation services support business meetings, conferences, executive travel, and company events throughout New Jersey and New York.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="groupFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#groupFaqFour"
                                                aria-expanded="false" aria-controls="groupFaqFour">
                                                Which areas do you serve?
                                            </button>
                                        </div>
                                        <div id="groupFaqFour" class="collapse"
                                            aria-labelledby="groupFaqHeadingFour" data-parent="#groupFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                We serve major locations throughout New Jersey and New York, including Jersey City, Newark, Bergen County, Manhattan, Brooklyn, Queens, and surrounding areas.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="groupFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#groupFaqFive"
                                                aria-expanded="false" aria-controls="groupFaqFive">
                                                Can we book transportation for sporting events and concerts?
                                            </button>
                                        </div>
                                        <div id="groupFaqFive" class="collapse"
                                            aria-labelledby="groupFaqHeadingFive" data-parent="#groupFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. Our group transportation services are popular for sporting events, concerts, festivals, stadium transportation, and entertainment venues.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="groupFaqHeadingSix">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3"
                                                type="button" data-toggle="collapse" data-target="#groupFaqSix"
                                                aria-expanded="false" aria-controls="groupFaqSix">
                                                Is group transportation available 24/7?
                                            </button>
                                        </div>
                                        <div id="groupFaqSix" class="collapse"
                                            aria-labelledby="groupFaqHeadingSix" data-parent="#groupFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                Yes. Our professional chauffeur services operate 24 hours a day, 7 days a week, allowing flexible scheduling for airport transfers, corporate travel, and special events.
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

@extends('main')
@section('meta_title', 'New Jersey City Chauffeur & Limo Service | Airport Transfers, County Coverage & Luxury Rides')
@section('meta_description', 'Book Alar Chauffeur Service in New Jersey City for airport transfers, county-wide limo service, and luxury rides to MetLife Stadium. Reliable, private, and professional transportation.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-jersey/#webpage",
      "url": "https://alarchauffeurservice.com/service-areas/new-jersey",
      "name": "Chauffeur Service in New Jersey",
      "description": "Luxury chauffeur service in New Jersey offering airport transfers, black car service, corporate transportation, wedding transportation, hourly chauffeur service, and event transportation."
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-jersey/#service",
      "name": "Chauffeur Service in New Jersey",
      "serviceType": "Luxury Chauffeur Transportation",
      "url": "https://alarchauffeurservice.com/service-areas/new-jersey",
      "areaServed": {
        "@@type": "State",
        "name": "New Jersey"
      },
      "provider": {
        "@@type": "Organization",
        "name": "ALAR Chauffeur Service",
        "url": "https://alarchauffeurservice.com"
      },
      "description": "Professional chauffeur service throughout New Jersey including airport transfers, corporate travel, black car service, wedding transportation, sporting event transportation, group transportation, and VIP transportation."
    },
    {
      "@@type": "FAQPage",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-jersey/#faq",
      "mainEntity": [
        {
          "@@type": "Question",
          "name": "How can I book a professional chauffeur in New Jersey?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "You can book a chauffeur service in New Jersey by contacting ALAR Chauffeur Service through our website, phone, or online reservation system. Advance booking is recommended for airport transfers, corporate travel, and special events."
          }
        },
        {
          "@@type": "Question",
          "name": "Which airports in New Jersey do you serve?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "We provide transportation to and from Newark Liberty International Airport as well as connections to JFK Airport and LaGuardia Airport for travelers throughout New Jersey."
          }
        },
        {
          "@@type": "Question",
          "name": "Is ALAR Chauffeur Service available in all New Jersey counties?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "We serve many locations across New Jersey, including major cities, business districts, residential areas, airports, and event venues."
          }
        },
        {
          "@@type": "Question",
          "name": "Do you offer transportation to MetLife Stadium?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Yes, we provide chauffeur transportation to MetLife Stadium for sporting events, concerts, private groups, and special occasions."
          }
        },
        {
          "@@type": "Question",
          "name": "What types of vehicles are available?",
          "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Our fleet includes luxury sedans, executive SUVs, sprinter vans, and larger group transportation options suitable for airport transfers, business travel, and special events."
          }
        }
      ]
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/service-areas/new-jersey/#breadcrumb",
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
          "name": "New Jersey",
          "item": "https://alarchauffeurservice.com/service-areas/new-jersey"
        }
      ]
    }
  ]
}
</script>
@endpush

@section('content')

    <!-- ===== PAGE HERO (Sophisticated Text-Only) ===== -->
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Premium Chauffeur & Limo Service in <span>New Jersey City</span></h1>
                <p>Experience reliable airport transfers, county-wide coverage, and luxury chauffeur service in New Jersey City with Alar Chauffeur Service.</p>
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
                        <div class="ve-area-intro mb-50">
                            <h2 class="mb-20">Professional <span>Chauffeur & Limo Service</span> in New Jersey City</h2>
                            <p class="ve-lead">If you're looking to <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>book chauffeur service in New Jersey City</b></a> that is reliable, professional, and designed for comfort, Alar Chauffeur Service offers the perfect solution. Whether you need a <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>private car service in New Jersey</b></a>, a luxury limo service near you, or airport transportation with a chauffeur, we provide premium travel experiences across the state.</p>
                            <p>From busy airports to major counties and event destinations like MetLife Stadium, our goal is to deliver smooth, on-time, and stress-free transportation</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our New Jersey <span>Expertise</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>EWR Airport Specialists</h5>
                                        <p>Expert navigation to Newark Liberty International Airport with personalized pickup and drop-off services.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-building"></i>
                                        <h5>Corporate Corridors</h5>
                                        <p>Efficient transport for the major corporate headquarters in Jersey City, Princeton, and Morristown.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-star"></i>
                                        <h5>Event Excellence</h5>
                                        <p>Sophisticated transportation for weddings, galas, and private events in New Jersey's most prestigious venues.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-road"></i>
                                        <h5>State to State Travel</h5>
                                        <p>Comfortable long-distance journeys between New Jersey and neighboring states like New York and Pennsylvania.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h2>Airport Chauffeur & Limo Service in <span>New Jersey</span></h2>
                            <p>Traveling to or from the airport? Our <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport limo service in New Jersey</b></a> ensures timely pickups, comfortable rides, and professional service every time.</p>

                            <h3>Airports We <span>Serve</span></h3>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Newark Liberty International Airport (EWR)</li>
                                    <li><i class="fa fa-check"></i> LaGuardia Airport (LGA)</li>
                                    <li><i class="fa fa-check"></i> John F. Kennedy International Airport (JFK)</li>
                                </ul>
                            </div>

                            <h3>
                                Our airport chauffeur service near Newark Airport includes:
                            </h3>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Flight tracking for accurate pickups</li>
                                    <li><i class="fa fa-check"></i> Meet and greet service</li>
                                    <li><i class="fa fa-check"></i> Luggage assistance</li>
                                    <li><i class="fa fa-check"></i> Direct hotel or destination transfers</li>
                                </ul>
                            </div>

                            <p>Whether you need a car service from Newark Airport to New Jersey City or a luxury ride from JFK to New Jersey, we ensure a seamless experience.</p>

                            <h2>Serving All <span>Counties in New Jersey</span></h2>
                            <p>Alar Chauffeur Service proudly offers chauffeur service across all New Jersey counties, making it easy to book reliable transportation anywhere in the state.</p>

                            <h3>Major Counties We Cover</h3>

                            <div class="ve-amenities-list">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Bergen County</li>
                                            <li><i class="fa fa-check"></i> Hudson County</li>
                                            <li><i class="fa fa-check"></i> Essex County</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Middlesex County</li>
                                            <li><i class="fa fa-check"></i> Union County</li>
                                            <li><i class="fa fa-check"></i> Passaic County</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <p>
                                Whether you want to hire a chauffeur in Bergen County, book limo service in Hudson County, or arrange a private car service in Essex County, we are available 24/7.
                            </p>

                            <h2>Our Chauffeur & Limo <span>Services in New Jersey</span></h2>
                            <p>
                                We offer a wide range of services designed to meet different travel needs with luxury and professionalism.
                            </p>

                            <h3>Airport Transfers</h3>
                            <p>Reliable airport transportation in New Jersey with on-time pickups and drop-offs.</p>

                            <h3>Corporate Chauffeur Service</h3>
                            <p>Professional <a href="{{ route('services.corporate-transportation') }}" style="color: var(--ve-gold);"><b>executive car service in New Jersey City</b></a> for business meetings and corporate travel.</p>

                            <h3>Event & Sports Transportation</h3>
                            <p>Book a chauffeur service to <a href="{{ route('services.fifa-world-cup-2026-transportation') }}" style="color: var(--ve-gold);"><b>MetLife Stadium</b></a> or any major event with ease and comfort.</p>

                            <h3>Wedding & Special Events</h3>
                            <p>Luxury <a href="{{ route('services.wedding-limo') }}" style="color: var(--ve-gold);"><b></b>wedding limo service in New Jersey</b></a> for a memorable and elegant experience.</p>

                            <h3>Hourly & Point-to-Point Rides</h3>
                            <p>Flexible hourly chauffeur service near you for city travel and custom plans.</p>

                            <h2>Why Choose <span>Alar Chauffeur Service</span> in New Jersey</h2>
                            <p>Choosing the right <a href="{{ route('services.chauffeured-service') }}" style="color: var(--ve-gold);"><b>chauffeur service in New Jersey City</b></a> makes all the difference. With Alar Chauffeur Service, you get</p>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Experienced and professional chauffeurs</li>
                                    <li><i class="fa fa-check"></i> Luxury fleet including sedans, SUVs, and limousines</li>
                                    <li><i class="fa fa-check"></i> On-time and reliable service</li>
                                    <li><i class="fa fa-check"></i> 24/7 availability</li>
                                    <li><i class="fa fa-check"></i> Clean, safe, and comfortable vehicles</li>
                                </ul>
                            </div>
                            <p>Whether you need a luxury car service in New Jersey, a private chauffeur near you, or a reliable limo service for airport transfer, we are committed to delivering excellence.</p>

                            <h2>Book Chauffeur Service in <span>New Jersey City Today</span></h2>
                            <p>Planning your next trip? It’s easy to book limo service in New Jersey City with <a href="{{ route('home') }}" style="color: var(--ve-gold);"><b>Alar Chauffeur Service</b></a>.</p>
                            <p>We specialize in:</p>
                            <div class="ve-amenities-list">
                                <ul>
                                    <li><i class="fa fa-check"></i> Airport transfers</li>
                                    <li><i class="fa fa-check"></i> County-wide transportation</li>
                                    <li><i class="fa fa-check"></i> Corporate and event travel</li>
                                    <li><i class="fa fa-check"></i> Luxury and private rides</li>
                                </ul>
                            </div>
                            <p>Reserve your chauffeur service in New Jersey today and enjoy a smooth, comfortable, and stress-free journey.</p>

                            <div class="ve-area-faq mt-50">
                                <span class="ve-section-tag">FAQs</span>
                                <h2 class="mb-30">Frequently Asked Questions <span>(FAQs)</span></h2>
                                
                                <div id="njFaqAccordion" class="accordion ve-faq-accordion">
                                    <!-- FAQ 1 -->
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="njFaqHeadingOne">
                                            <button class="btn ve-faq-toggle btn-block text-left px-4 py-3" type="button" data-toggle="collapse" data-target="#njFaqOne" aria-expanded="true" aria-controls="njFaqOne">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">How can I <span>book a professional chauffeur</span> in New Jersey?</h3>
                                            </button>
                                        </div>
                                        <div id="njFaqOne" class="collapse show" aria-labelledby="njFaqHeadingOne" data-parent="#njFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>Booking with Alar Chauffeur Service is simple and can be done online through our reservation system or by calling our customer support. We offer instant confirmations and 24/7 service.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 2 -->
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="njFaqHeadingTwo">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#njFaqTwo" aria-expanded="false" aria-controls="njFaqTwo">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">Which <span>airports in New Jersey</span> do you serve?</h3>
                                            </button>
                                        </div>
                                        <div id="njFaqTwo" class="collapse" aria-labelledby="njFaqHeadingTwo" data-parent="#njFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>We provide premium chauffeur services to all major airports, including Newark Liberty International Airport (EWR), John F. Kennedy International Airport (JFK), and LaGuardia Airport (LGA).</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 3 -->
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="njFaqHeadingThree">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#njFaqThree" aria-expanded="false" aria-controls="njFaqThree">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">Is Alar <span>available in all NJ counties</span>?</h3>
                                            </button>
                                        </div>
                                        <div id="njFaqThree" class="collapse" aria-labelledby="njFaqHeadingThree" data-parent="#njFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>Yes, we provide comprehensive coverage across all NJ counties, including Bergen, Hudson, Essex, Middlesex, Union, and Passaic, ensuring reliable transportation wherever you are.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 4 -->
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="njFaqHeadingFour">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#njFaqFour" aria-expanded="false" aria-controls="njFaqFour">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">Do you offer <span>MetLife Stadium</span> services?</h3>
                                            </button>
                                        </div>
                                        <div id="njFaqFour" class="collapse" aria-labelledby="njFaqHeadingFour" data-parent="#njFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>Absolutely! We specialize in event transportation, providing luxury sedans and SUVs for sporting events, concerts, and other major gatherings at MetLife Stadium.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 5 -->
                                    <div class="card ve-faq-card">
                                        <div class="card-header ve-faq-card-header" id="njFaqHeadingFive">
                                            <button class="btn ve-faq-toggle btn-block text-left collapsed px-4 py-3" type="button" data-toggle="collapse" data-target="#njFaqFive" aria-expanded="false" aria-controls="njFaqFive">
                                                <h3 class="m-0" style="font-size: 1.2rem; color: inherit; font-weight: 700;">What <span>types of vehicles</span> are available?</h3>
                                            </button>
                                        </div>
                                        <div id="njFaqFive" class="collapse" aria-labelledby="njFaqHeadingFive" data-parent="#njFaqAccordion">
                                            <div class="card-body ve-faq-card-body pt-0 px-4 pb-4">
                                                <p>Our luxury fleet includes late-model sedans, premium SUVs, and elegant limousines, all maintained to the highest standards of cleanliness and safety for your comfort.</p>
                                            </div>
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

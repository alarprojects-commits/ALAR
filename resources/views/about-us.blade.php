@extends('main')
@section('meta_title', 'Alar Chauffeur Service | About Us')
@section('meta_description', 'Luxury transportation by ALAR Chauffeur Service in NJ. SUVs, sedans, and party buses for
airport transfers, events, and group travel with professional chauffeurs.')

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
      "telephone": {!! config('contact.phones_schema_json') !!},
      "email": "limo@alarchauffeurservice.com",

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
        "https://x.com/Alar_chauffeur",
        "https://linkedin.com/in/alar-chauffeur-services-415862383",
        "https://www.youtube.com/@AlarChauffeurService"
      ]
    },

    {
      "@@type": "AboutPage",
      "@@id": "https://alarchauffeurservice.com/about-us#aboutpage",
      "url": "https://alarchauffeurservice.com/about-us",
      "name": "About ALAR Chauffeur Service",
      "description": "Learn about ALAR Chauffeur Service, a premium luxury transportation provider offering airport transfers, corporate travel, weddings, events, and FIFA World Cup 2026 transportation.",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",

      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },

      "about": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      },

      "mainEntity": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      }
    },

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/about-us#webpage",
      "url": "https://alarchauffeurservice.com/about-us",
      "name": "About Us | ALAR Chauffeur Service",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",

      "about": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      },

      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },

      "mainEntity": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      }
    }

  ]
}
</script>
@endpush

@section('content')
<section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/about-us.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Who We Are</span>
        <h1>About <span>Us</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">About Us</li>
            </ol>
        </nav>
    </div>
</section>

<!-- ===== WHY US (two-column: image left, content right) ===== -->
<section class="ve-section ve-whyus-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Side -->
            <div class="col-12 col-lg-5 order-md-2 order-2 order-lg-0">
                <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-whyus-img-main bg-img"
                        style="background-image:url(../assets/img/about-us/excellence-in-luxury-1.webp);"></div>
                    <div class="ve-whyus-badge">
                        <strong>3+</strong>
                        <span>Years of Excellence</span>
                    </div>
                </div>
            </div>
            <!-- Content Side -->
            <div class="col-12 col-lg-7 order-md-1 order-1 mb-5 order-lg-0 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">About Us</span>
                    <h2>A Smarter Way to Travel <span>In Luxury</span></h2>
                    <p>ALAR Chauffeur Service is a trusted chauffeur and limousine service based in New Jersey. We
                        provide premium transportation with luxury SUVs, Sedans, Sprinter Vans, and more, serving New
                        Jersey, New York, and nearby states.</p>
                    <div class="ve-checklist">
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Professional Chauffeurs</strong>
                                <p>Our drivers are vetted, trained, and committed to providing the highest level of
                                    service.</p>
                            </div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Fixed & Transparent Pricing</strong>
                                <p>No unexpected surcharges. Know your fare upfront when you book with us.</p>
                            </div>
                        </div>
                        <div class="ve-check-item">
                            <i class="fa fa-check-circle"></i>
                            <div><strong>Reliable & Punctual</strong>
                                <p>We value your time. Our chauffeurs arrive 15 minutes early to ensure on-time
                                    departure.</p>
                            </div>
                        </div>
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

<section class="ve-section ve-whyus-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 order-lg-0 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">Our Commmitments</span>
                    <h2>Safety and <span>Priority</span></h2>
                    <p>ALAR Chauffeur Service is committed to providing the ultimate chauffeur experience, delivering
                        luxury transportation you can rely on. Whether it’s a corporate meeting, airport transfer,
                        wedding, or special event, our professional chauffeurs ensure a safe, comfortable, and
                        stress-free ride.</p>
                    <p>We’re here to assist with last-minute bookings or schedule rides in advance for your upcoming
                        trips. Our fleet is available 24/7 at major airports, including JFK, LaGuardia, Newark Liberty
                        International, San Francisco International, Los Angeles International, Harry Reid International,
                        and Seattle-Tacoma International.</p>
                    <p><a href="tel:{{ config('contact.phone_tel') }}" style="color: var(--ve-gold);"><b>Call us
                                now</b></a> and experience the
                        difference in premium transportation with ALAR Chauffeur Service!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MISSION / VISION / VALUES -->
<section class="ve-mvv-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Our Foundation</span>
            <h2>Our Mission &amp; <span>Core Values</span></h2>
        </div>
        <div class="ve-mvv-grid">
            <div class="ve-mvv-card wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-mvv-icon"><i class="fa fa-bullseye"></i></div>
                <h4>Our Mission</h4>
                <p>To provide reliable, safe, and sophisticated transportation solutions that exceed the expectations of
                    our most discerning clients.</p>
            </div>
            <div class="ve-mvv-card wow fadeInUp" data-wow-delay="250ms">
                <div class="ve-mvv-icon"><i class="fa fa-eye"></i></div>
                <h4>Our Vision</h4>
                <p>To become the world's most trusted name in luxury transportation, known for our innovation and
                    unwavering attention to detail.</p>
            </div>
            <div class="ve-mvv-card wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-mvv-icon"><i class="fa fa-heart"></i></div>
                <h4>Our Values</h4>
                <p>Punctuality, absolute discretion, safety first, and a commitment to maintaining the finest fleet in
                    the industry.</p>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SPLIT -->
<section class="ve-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">Why Choose Us</span>
                    <h2>The Alar Standard in <span>Luxury Travel</span></h2>
                    <p class="ve-lead">At ALAR Chauffeur Service, your safety and comfort are our highest priorities.
                        Our diverse fleet, featuring sophisticated SUVs, luxurious sedans, and spacious Sprinter vans,
                        ensures that every ride is tailored to your preferences. Each vehicle is meticulously
                        maintained, reflecting our unwavering commitment to providing a seamless and worry-free journey.
                    </p>
                    <p>More than just a transportation service, we strive to exceed expectations. Whether it’s a
                        point-to-point transfer, an airport pickup, a corporate engagement, or a special occasion, our
                        professional chauffeurs deliver a reliable, punctual, and truly luxurious experience.</p>

                    <p>Choose <a href="/" style="color: var(--ve-gold);"><b>ALAR Chauffeur Service</b></a> for unmatched
                        safety, elegance, and exceptional service atevery mile.</p>

                    <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <a href="{{ route('book-online') }}" class="ve-btn-primary"
                            style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                            style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow fadeInLeft " data-wow-delay="100ms">
                <div class="ve-about-text">
                    <div class="ve-about-img-1 bg-img"
                        style="background-image:url(../assets/img/about-us/excellence-in-luxury-1.webp);">
                    </div>
                    <div class="ve-about-img-2 bg-img"
                        style="background-image:url(../assets/img/about-us/excellence-in-luxury-2.webp);">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ve-section ve-whyus-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">Our Specialties</span>
                    <h2>What We <span>Deal In</span></h2>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-5 wow fadeInRight" data-wow-delay="200ms">
                                <h3 class="ve-section-tag">AIRPORTS WE SERVICE</h3>
                                <div class="ve-checklist">
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.new-york') }}" style="color: #000;"><b>John F.
                                                Kennedy International Airport (JFK)</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.new-york') }}" style="color: #000;"><b>LaGuardia
                                                Airport (LGA)</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.new-jersey') }}" style="color: #000;"><b>Newark
                                                Liberty International Airport (EWR)</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.san-francisco') }}" style="color: #000;"><b>San
                                                Francisco International Airport (SFO)</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.california') }}" style="color: #000;"><b>Los
                                                Angeles International Airport (LAX)</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.nevada') }}" style="color: #000;"><b>Harry Reid
                                                International Airport (LAS)</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.seattle') }}"
                                            style="color: #000;"><b>Seattle-Tacoma International Airport (SEA)</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-5 wow fadeInRight" data-wow-delay="200ms">
                                <h3 class="ve-section-tag">NEW JERSEY AREAS</h3>
                                <div class="ve-checklist">
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Middlesex County</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Ocean County</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Morris County</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Monmouth County</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Bergen County</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Mercer County</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Somerset County</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-5 wow fadeInRight" data-wow-delay="200ms">
                                <h3 class="ve-section-tag">SPECIALISTS IN</h3>
                                <div class="ve-checklist">
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Point-to-Point Transportation</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Hourly Chauffeur Service</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>Airport Transfers</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>On-Time Service Every Time</div>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <div>As-Directed & Customized Rides</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-5 wow fadeInRight" data-wow-delay="200ms">
                                <h3 class="ve-section-tag">MAIN AREAS WE COVER</h3>
                                <div class="ve-checklist">
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.new-jersey') }}" style="color: #000;"><b>New
                                                Jersey</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.new-york') }}" style="color: #000;"><b>New
                                                York</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.san-francisco') }}" style="color: #000;"><b>San
                                                Francisco</b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.california') }}"
                                            style="color: #000;"><b>California </b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.nevada') }}" style="color: #000;"><b>Nevada
                                            </b></a>
                                    </div>
                                    <div class="ve-check-item">
                                        <i class="fa fa-check-circle"></i>
                                        <a href="{{ route('service-area.seattle') }}" style="color: #000;"><b>Seattle
                                            </b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<!-- ===== TESTIMONIALS ===== -->
<section class="ve-section ve-testimonials-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Client Stories</span>
            <h2>What Our Clients <span>Say</span></h2>
        </div>
        <div class="owl-carousel ve-testimonials-slider">
            <div class="ve-testi-card">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>"The chauffeur was waiting for me before I even landed. The car was spotless and the ride was
                    incredibly smooth. Best airport service ever!"</p>
                <div class="ve-testi-author">
                    <div class="ve-testi-avatar-text">AM</div>
                    <div><strong>Alex Morgan</strong><span>Client</span></div>
                </div>
            </div>
            <div class="ve-testi-card">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>"We used their stretch limo for our wedding and it was perfect! The driver was so helpful and
                    patient. Highly recommend for any special event."</p>
                <div class="ve-testi-author">
                    <div class="ve-testi-avatar-text">SP</div>
                    <div><strong>Sarah Patel</strong><span>Client</span></div>
                </div>
            </div>
            <div class="ve-testi-card">
                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p>"Outstanding corporate service. Their attention to detail and professional attitude makes them our
                    go-to for all executive transport needs."</p>
                <div class="ve-testi-author">
                    <div class="ve-testi-avatar-text">JL</div>
                    <div><strong>James Liu</strong><span>Client</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.cta')

@endsection
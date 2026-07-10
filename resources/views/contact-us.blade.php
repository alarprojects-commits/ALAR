@extends('main')
@section('meta_title', 'Contact Us | Alar Chauffeur Service')
@section('meta_description', 'Contact Alar Chauffeur Service for bookings, quotes, airport transfers, and luxury transportation assistance in New Jersey, New York, and surrounding service areas.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "ContactPage",
      "@@id": "https://alarchauffeurservice.com/contact-us/#contactpage",
      "url": "https://alarchauffeurservice.com/contact-us/",
      "name": "Contact Us | ALAR Chauffeur Service",
      "description": "Contact ALAR Chauffeur Service for airport transfers, corporate travel, weddings, events, and luxury chauffeur services.",
      "primaryImageOfPage": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "breadcrumb": {
        "@@id": "https://alarchauffeurservice.com/contact-us/#breadcrumb"
      },
      "publisher": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/contact-us/#breadcrumb",
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
          "name": "Contact Us",
          "item": "https://alarchauffeurservice.com/contact-us/"
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
      "@@type": "Organization",
      "@@id": "https://alarchauffeurservice.com/#organization",
      "name": "ALAR Chauffeur Service",
      "url": "https://alarchauffeurservice.com",
      "telephone": {!! config('contact.phones_schema_json') !!},
      "email": "limo@alarchauffeurservice.com",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "logo": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "10 Fairmount Ave",
        "addressLocality": "Edison",
        "addressRegion": "NJ",
        "postalCode": "08820",
        "addressCountry": "US"
      },
      "priceRange": "$150 - $3000",
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
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": {!! config('contact.phones_schema_json') !!},
        "contactType": "customer service",
        "email": "limo@alarchauffeurservice.com",
        "availableLanguage": ["English"]
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
    }

  ]
}
</script>
@endpush

@section('content')

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/contact-us.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Ready to Ride?</span>
        <h1>Get In <span>Touch</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>

<!-- ===== CONTACT INFO CARDS ===== -->
<section class="ve-contact-cards-section">
    <div class="container">
        <div class="ve-contact-cards-grid">
            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode(config('contact.location')) }}"
                target="_blank" style="text-decoration: none; color: inherit;">
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-ci-icon"><i class="fa fa-map-marker"></i></div>
                    <h5>Visit Our Office</h5>
                    <p>{{ config('contact.location') }}</p>
                </div>
            </a>
            <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="250ms" style="text-decoration: none; color: inherit;">
                <div class="ve-ci-icon"><i class="fa fa-phone"></i></div>
                <h5>Call Us 24/7</h5>
                <p>@include('components.contact-phones')</p>
            </div>
            <a href="mailto:{{ config('contact.email') }}" style="text-decoration: none; color: inherit;">
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-ci-icon"><i class="fa fa-envelope"></i></div>
                    <h5>Email Us</h5>
                    <p>
                        {{ config('contact.email') }}<br>
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ===== CONTACT FORM & ASIDE ===== -->
<section class="ve-section ve-contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                <div class="ve-contact-form-wrap">
                    <span class="ve-section-tag">Contact Us</span>
                    <h2>Get In <span>Touch</span></h2>
                    <p>Fill in the form below and our team will get back to you as soon as possible.</p>

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form class="ve-contact-form" action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <input type="text" name="website" style="display:none !important" tabindex="-1"
                            autocomplete="off">
                        <div class="ve-form-row">
                            <div class="ve-form-group">
                                <label>First Name</label>
                                <input type="text" name="first_name" placeholder="First name" required
                                    value="{{ old('first_name') }}">
                                @error('first_name')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="ve-form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" placeholder="Last name" required
                                    value="{{ old('last_name') }}">
                                @error('last_name')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="ve-form-row">
                            <div class="ve-form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" placeholder="Your email" required
                                    value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="ve-form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" placeholder="Your phone number" required minlength="10"
                                    maxlength="15" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="ve-form-group">
                            <label>Message</label>
                            <textarea rows="5" name="message" placeholder="Message..."
                                required>{{ old('message') }}</textarea>
                            @error('message')
                            <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- SMS Consent (Full Width) -->
                        <div class="ve-sms-consent-row mb-4">
                            <label class="ve-sms-consent-label" style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; font-weight: 400; text-transform: none; color: var(--ve-text); font-size: 14px; line-height: 1.6;">
                                <input type="checkbox" name="sms_consent" value="1" style="width: 18px; height: 18px; margin-top: 2px; flex-shrink: 0; cursor: pointer; border: 1px solid var(--ve-border); border-radius: 4px;">
                                @include('components.sms-consent-label')
                            </label>
                        </div>

                        @if (config('services.turnstile.site_key'))
                        <div class="ve-form-group">
                            <div class="cf-turnstile"
                                data-sitekey="{{ config('services.turnstile.site_key') }}"
                                data-theme="light"></div>
                            @error('cf-turnstile-response')
                            <span class="text-danger d-block mt-2" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                        @endif
                        <button type="submit" class="ve-btn-primary">Send Message <i
                                class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

            <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-contact-aside">
                    <div class="ve-ca-box">
                        <h4>Why Ride With Us?</h4>
                        <ul class="ve-ca-list">
                            <li><i class="fa fa-check-circle"></i> Professional Chauffeurs</li>
                            <li><i class="fa fa-check-circle"></i> Late Model Luxury Fleet</li>
                            <li><i class="fa fa-check-circle"></i> 24/7 Dispatch and Support</li>
                            <li><i class="fa fa-check-circle"></i> Punctuality Guaranteed</li>
                            <li><i class="fa fa-check-circle"></i> Transparent Flat Rates</li>
                        </ul>
                    </div>

                    <div class="ve-ca-hours">
                        <h5><i class="fa fa-clock-o"></i> Operation Hours</h5>
                        <ul>
                            <li><span>Chauffeur Service</span><strong>24 Hours / 7 Days</strong></li>
                            <li><span>Reservation Desk</span><strong>Online 24/7</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICE COVERAGE (City Grid) ===== -->
<section class="ve-section ve-coverage-section" style="background: var(--ve-dark);">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag"
                style="background: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.2);">Where We
                Are</span>
            <h2 style="color:#fff;">Our Service <span>Coverage Area</span></h2>
            <p style="color:rgba(255,255,255,0.55);">We provide premium transportation services across major hubs and
                surrounding regions.</p>
        </div>

        <div class="ve-coverage-grid">
            <div class="ve-coverage-item wow fadeInUp" data-wow-delay="100ms">
                <h5>Northeast Hub</h5>
                <ul>
                    <li><i class="fa fa-map-marker"></i> <a href="{{ route('service-area.new-york') }}">New York
                            City</a></li>
                    <li><i class="fa fa-map-marker"></i> <a href="{{ route('service-area.new-jersey') }}">New Jersey</a>
                    </li>
                    <li><i class="fa fa-map-marker"></i> Newark Airport</li>
                    <li><i class="fa fa-map-marker"></i> JFK & LGA</li>
                </ul>
            </div>
            <div class="ve-coverage-item wow fadeInUp" data-wow-delay="200ms">
                <h5>West Coast</h5>
                <ul>
                    <li><i class="fa fa-map-marker"></i> <a href="{{ route('service-area.california') }}">California</a>
                    </li>
                    <li><i class="fa fa-map-marker"></i> <a href="{{ route('service-area.san-francisco') }}">San
                            Francisco</a></li>
                    <li><i class="fa fa-map-marker"></i> <a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                    <li><i class="fa fa-map-marker"></i> Los Angeles</li>
                </ul>
            </div>
            <div class="ve-coverage-item wow fadeInUp" data-wow-delay="300ms">
                <h5>Midwest & Nevada</h5>
                <ul>
                    <li><i class="fa fa-map-marker"></i> Kansas City</li>
                    <li><i class="fa fa-map-marker"></i> <a href="{{ route('service-area.nevada') }}">Las Vegas</a></li>
                    <li><i class="fa fa-map-marker"></i> Reno</li>
                    <li><i class="fa fa-map-marker"></i> Henderson</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ SECTION ===== -->
<section class="ve-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="ve-section-header text-center">
                    <span class="ve-section-tag">Common Inquiries</span>
                    <h2>Frequently Asked <span>Questions</span></h2>
                </div>

                <div class="ve-faq-grid mt-4">
                    <!-- FAQ 1 -->
                    <div class="ve-faq-item wow fadeInUp" data-wow-delay="100ms">
                        <div class="ve-faq-icon"><i class="fa fa-calendar-check-o"></i></div>
                        <div class="ve-faq-content">
                            <h5>How early should I book my ride?</h5>
                            <p>For standard airport transfers, we recommend 24 hours in advance. For special events,
                                booking 2 to 4 weeks early ensures your preferred vehicle.</p>
                        </div>
                    </div>
                    <!-- FAQ 2 -->
                    <div class="ve-faq-item wow fadeInUp" data-wow-delay="200ms">
                        <div class="ve-faq-icon"><i class="fa fa-undo"></i></div>
                        <div class="ve-faq-content">
                            <h5>What is your cancellation policy?</h5>
                            <p>Cancellations more than 24 hours before pickup are fully refundable. Late cancellations
                                may incur a fee based on vessel type.</p>
                        </div>
                    </div>
                    <!-- FAQ 3 -->
                    <div class="ve-faq-item wow fadeInUp" data-wow-delay="300ms">
                        <div class="ve-faq-icon"><i class="fa fa-user-circle-o"></i></div>
                        <div class="ve-faq-content">
                            <h5>Do you offer terminal meet and greet?</h5>
                            <p>Yes, our professional chauffeurs will meet you at baggage claim or arrivals with a
                                personalized name sign for ease of contact.</p>
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="ve-faq-item wow fadeInUp" data-wow-delay="400ms">
                        <div class="ve-faq-icon"><i class="fa fa-credit-card"></i></div>
                        <div class="ve-faq-content">
                            <h5>Are your rates fixed or hourly?</h5>
                            <p>We offer both! Fixed rates for airport transfers and hourly bookings for events providing
                                maximum flexibility for your itinerary.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.cta')

@endsection

@if (config('services.turnstile.site_key'))
@push('scripts')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endpush
@endif

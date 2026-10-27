@extends('main')
@section('meta_title', 'Book Your NJ Airport Ride in Minutes | Flat Rate | Alar')
@section('meta_description', 'See your price before you book. Black car or hourly chauffeur for JFK, LGA, EWR & all Tri-State trips. No surge, no surprises. Reserve now.')

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
      }
    },

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/book-online#webpage",
      "url": "https://alarchauffeurservice.com/book-online",
      "name": "Book Online Chauffeur & Limo Service",
      "description": "Book luxury chauffeur service, airport transfer, corporate travel, wedding transportation, and party bus limo service online.",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",

      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },

      "about": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      }
    },

    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/#booking-service",
      "name": "Online Chauffeur Booking Service",
      "provider": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      },

      "serviceType": "Luxury Transportation Booking",

      "areaServed": [
        "New Jersey",
        "New York",
        "California",
        "Nevada",
        "Kansas City"
      ],

      "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Book Chauffeur Services Online",

        "itemListElement": [

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Airport Transfer Booking"
            }
          },

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Corporate Travel Booking"
            }
          },

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Wedding Transportation Booking"
            }
          },

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Hourly Chauffeur Booking"
            }
          },

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Black Car Service Booking"
            }
          },

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "Party Bus Booking"
            }
          }

        ]
      }
    },

    {
      "@@type": "ReserveAction",
      "@@id": "https://alarchauffeurservice.com/book-online#reserve",
      "name": "Reserve Chauffeur Service Online",
      "target": {
        "@@type": "EntryPoint",
        "urlTemplate": "https://alarchauffeurservice.com/book-online",
        "actionPlatform": [
          "http://schema.org/DesktopWebPlatform",
          "http://schema.org/MobileWebPlatform"
        ]
      },
      "result": {
        "@@type": "Reservation",
        "name": "Luxury Chauffeur Booking Confirmation"
      }
    }

  ]
}
</script>
@endpush

@section('content')
<section class="ve-page-hero-simple">
    <div class="container">
        <div class="ve-hero-simple-content">
            <span class="ve-section-tag">Reserve Now</span>
            <h1>Book Your Airport Car Service in Minutes</h1>
            <p>Share your pickup, drop-off, and flight details and see a confirmed rate before dispatch. No surge pricing, no curb queue.</p>
            <div class="ve-hero-ctas">
                <a href="#booking-form" class="ve-btn-primary" data-engage="start_booking">Start Booking</a>
                <a href="{{ route('free-quote') }}" class="ve-btn-outline" data-engage="click_free_quote">Free Quote</a>
                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline" data-engage="click_to_call">{{ config('contact.phone_display') }}</a>
            </div>
        </div>
    </div>
</section>

@include('components.commercial-trust-strip')
@include('components.booker-prep', ['mode' => 'scroll'])
@include('components.reviews-compact', [
    'reviews' => $reviews ?? ['rating' => null, 'total' => 0, 'reviews' => []],
    'googleReviewsUrl' => $googleReviewsUrl ?? config('business.gbp_url'),
])

<section class="ve-section ve-booking-section bg-light" id="booking-form">
    <div class="container">
        <div class="ve-section-header text-center mb-4">
            <span class="ve-section-tag">Online Reservation</span>
            <h2 class="h3 mb-2">Complete your <span>booking</span></h2>
            <p class="mb-0">Prefer help from our desk? <a href="{{ route('free-quote') }}" data-engage="click_free_quote">Request a free quote</a> or call <a href="tel:{{ config('contact.phone_tel') }}" data-engage="click_to_call">{{ config('contact.phone_display') }}</a>.</p>
        </div>

        <div class="row mb-50">
            <div class="col-12">
                <div class="ve-booking-iframe-wrap"
                    data-booking-iframe
                    style="background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.12); border: 1px solid rgba(0,0,0,0.05);">
                    <div class="ve-booking-loader" data-booking-loader>
                        <div class="ve-booking-loader-spinner" aria-hidden="true"></div>
                        <span>Booking form loading…</span>
                    </div>
                    <iframe name="oresframe" title="Alar Chauffeur Service online booking form" marginwidth="0" marginheight="0" height="1200" width="100%"
                        scrolling="yes" border="0" frameborder="0" src="https://book.mylimobiz.com/v4/alarchauffeur"
                        style="display: block; width: 100%;" loading="lazy">
                        Your browser does not support inline frames.
                    </iframe>
                </div>
            </div>
        </div>

        <div class="row align-items-stretch mb-50">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="ve-booking-why h-100" style="margin-top: 0; padding: 40px; background: var(--ve-dark);">
                    <h5 class="ve-booking-why-title"
                        style="color: #fff; border-bottom: 1px solid rgba(255,255,255,0.1); margin-bottom: 25px; font-size: 20px;">
                        Why Book With Us?</h5>
                    <ul class="ve-booking-why-list">
                        <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span style="color: rgba(255,255,255,0.85); font-weight: 500;">Professional, licensed chauffeurs</span></li>
                        <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span style="color: rgba(255,255,255,0.85); font-weight: 500;">Luxury, well-maintained fleet</span></li>
                        <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span style="color: rgba(255,255,255,0.85); font-weight: 500;">Transparent, fixed pricing</span></li>
                        <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span style="color: rgba(255,255,255,0.85); font-weight: 500;">Flight tracking included</span></li>
                        <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span style="color: rgba(255,255,255,0.85); font-weight: 500;">24/7 Dispatch &amp; Support</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row h-100">
                    <div class="col-md-12 mb-4">
                        <div class="ve-booking-info-card h-100"
                            style="background: var(--ve-dark); border-color: rgba(255,255,255,0.1); padding: 30px; margin-bottom: 0;">
                            <div class="ve-binfo-icon" style="background: rgba(173, 139, 36, 0.2);"><i class="fa fa-phone"></i></div>
                            <div style="min-width: 0;">
                                <h5 style="color: rgba(255,255,255,0.6); font-size: 13px; text-transform: uppercase;">Call Us Directly</h5>
                                <a href="tel:{{ config('contact.phone_tel') }}" data-engage="click_to_call"
                                    style="color: #fff; font-size: 24px; font-weight: 700; display: block;">{{ config('contact.phone_display') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="ve-booking-info-card h-100"
                            style="background: var(--ve-dark); border-color: rgba(255,255,255,0.1); padding: 30px; margin-bottom: 0;">
                            <div class="ve-binfo-icon" style="background: rgba(173, 139, 36, 0.2);"><i class="fa fa-envelope"></i></div>
                            <div style="min-width: 0;">
                                <h5 style="color: rgba(255,255,255,0.6); font-size: 13px; text-transform: uppercase;">Email Support</h5>
                                <a href="mailto:{{ config('contact.email') }}"
                                    style="color: #fff; font-size: 18px; font-weight: 600; display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"
                                    title="{{ config('contact.email') }}">{{ config('contact.email') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ve-booking-faq mb-50">
            <div class="col-lg-10 mx-auto">
                <div class="ve-section-header text-center mb-4">
                    <span class="ve-section-tag">Booking FAQ</span>
                    <h2 class="h3 mb-0">Questions before you <span>reserve</span></h2>
                </div>
                <details>
                    <summary>Do I get a confirmed rate before dispatch?</summary>
                    <p>Yes. Every reservation is a reserved chauffeur vehicle with a confirmed rate-not an on-demand rideshare or street-hail pickup.</p>
                </details>
                <details>
                    <summary>What if my flight is delayed?</summary>
                    <p>Share your flight number when you book. Dispatch follows the live arrival so your chauffeur is staged for your terminal.</p>
                </details>
                <details>
                    <summary>Can I get a quote instead of booking online?</summary>
                    <p>Absolutely. Use <a href="{{ route('free-quote') }}" data-engage="click_free_quote">Free Quote</a> or call us for multi-stop, group, or same-day trips.</p>
                </details>
                <details>
                    <summary>Is meet and greet available at the airport?</summary>
                    <p>Yes. Request meet and greet in your booking notes for terminal pickup help with luggage.</p>
                </details>
            </div>
        </div>

        <div class="ve-booking-related text-center">
            <p class="mb-2"><strong>Related pages</strong></p>
            <p class="mb-0">
                <a href="{{ route('our-fleet') }}" data-engage="view_fleet">Our Fleet</a> ·
                <a href="{{ route('airports.ewr') }}">EWR</a> ·
                <a href="{{ route('airports.jfk') }}">JFK</a> ·
                <a href="{{ route('airports.lga') }}">LGA</a> ·
                <a href="{{ route('services.airport-transportation') }}">Airport Transportation</a> ·
                <a href="{{ route('contact-us') }}">Contact Us</a>
            </p>
        </div>
    </div>
</section>

@include('components.fleet-peek', ['mode' => 'scroll'])
@include('components.cta')
@endsection

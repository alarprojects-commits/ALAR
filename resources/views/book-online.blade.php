@extends('main')
@section('meta_title', 'Book Online | Alar Chauffeur Service')
@section('meta_description', 'Reserve your luxury chauffeur service online with Alar Chauffeur Service for airport transportation, executive travel, weddings, group transportation, and more.')

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
      "description": "Book luxury chauffeur service, airport transfer, corporate travel, wedding transportation, party bus and FIFA World Cup 2026 limo service online.",
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
          },

          {
            "@@type": "Offer",
            "itemOffered": {
              "@@type": "Service",
              "name": "FIFA World Cup 2026 Transportation Booking",
              "url": "https://alarchauffeurservice.com/services/fifa-world-cup-2026-transportation"
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
    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/book-online.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Easy Booking</span>
            <h1>Book Your <span>Ride</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Book Online</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== BOOKING FORM ===== -->
    <section class="ve-section ve-booking-section">
        <div class="container">
            <!-- Full Width Iframe Row -->
            <div class="row mb-50">
                <div class="col-12">
                    <div class="ve-booking-iframe-wrap"
                        style="background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.12); border: 1px solid rgba(0,0,0,0.05);">
                        <iframe name="oresframe" marginwidth="0" marginheight="0" height="1200" width="100%"
                            scrolling="yes" border="0" frameborder="0" src="https://book.mylimobiz.com/v4/alarchauffeur"
                            style="display: block; width: 100%;">
                            Your browser does not support inline frames.
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Enhanced Info Section Below Iframe -->
            <div class="row align-items-stretch">
                <!-- Why Us List (Left) -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="ve-booking-why h-100" style="margin-top: 0; padding: 40px; background: var(--ve-dark);">
                        <h5 class="ve-booking-why-title"
                            style="color: #fff; border-bottom: 1px solid rgba(255,255,255,0.1); margin-bottom: 25px; font-size: 20px;">
                            Why Book With Us?</h5>
                        <ul class="ve-booking-why-list">
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Professional, licensed
                                    chauffeurs</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Luxury, well-maintained
                                    fleet</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Transparent, fixed
                                    pricing</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Flight tracking
                                    included</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">24/7 Dispatch &
                                    Support</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info Cards (Right) -->
                <div class="col-lg-7">
                    <div class="row h-100">
                        <div class="col-md-12 mb-4">
                            <div class="ve-booking-info-card h-100"
                                style="background: var(--ve-dark); border-color: rgba(255,255,255,0.1); padding: 30px; margin-bottom: 0;">
                                <div class="ve-binfo-icon" style="background: rgba(173, 139, 36, 0.2);"><i
                                        class="fa fa-phone"></i></div>
                                <div style="min-width: 0;">
                                    <h5 style="color: rgba(255,255,255,0.6); font-size: 13px; text-transform: uppercase;">
                                        Call Us Directly</h5>
                                    <a href="tel:{{ config('contact.phone_tel') }}"
                                        style="color: #fff; font-size: 24px; font-weight: 700; display: block;">{{ config('contact.phone_display') }}</a>
                                    <a href="tel:{{ config('contact.phone_2_tel') }}"
                                        style="color: #fff; font-size: 24px; font-weight: 700; display: block;">{{ config('contact.phone_2_display') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ve-booking-info-card h-100"
                                style="background: var(--ve-dark); border-color: rgba(255,255,255,0.1); padding: 30px; margin-bottom: 0;">
                                <div class="ve-binfo-icon" style="background: rgba(173, 139, 36, 0.2);"><i
                                        class="fa fa-envelope"></i></div>
                                <div style="min-width: 0;">
                                    <h5 style="color: rgba(255,255,255,0.6); font-size: 13px; text-transform: uppercase;">
                                        Email Support</h5>
                                    <a href="mailto:{{ config('contact.email') }}"
                                        style="color: #fff; font-size: 18px; font-weight: 600; display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"
                                        title="{{ config('contact.email') }}">{{ config('contact.email') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@extends('main')
@section('meta_title', 'Our Fleet | Alar Chauffeur Service')
@section('meta_description', 'View the Alar Chauffeur Service fleet of luxury sedans, SUVs, limousines, sprinter vans, and group transportation vehicles for executive and special event travel.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",

  "@@graph": [

    {
      "@@type": "LocalBusiness",
      "@@id": "https://alarchauffeurservice.com/#localbusiness",
      "name": "ALAR Chauffeur Service",
      "url": "https://alarchauffeurservice.com",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "logo": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
      "telephone": {!! config('contact.phones_schema_json') !!},
      "email": "limo@alarchauffeurservice.com",
      "priceRange": "$250-$3000",

      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "10 Fairmount Ave",
        "addressLocality": "Edison",
        "addressRegion": "NJ",
        "postalCode": "08820",
        "addressCountry": "US"
      },

      "areaServed": [
        "New Jersey",
        "New York",
        "California",
        "Nevada",
        "Kansas City"
      ]
    },

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/our-fleet#webpage",
      "url": "https://alarchauffeurservice.com/our-fleet",
      "name": "Our Luxury Fleet | ALAR Chauffeur Service",
      "description": "Luxury fleet including sedans, SUVs, stretch limousines, Sprinter vans, minibuses, and coach buses for all transportation needs.",
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",

      "about": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      },

      "mainEntity": {
        "@@id": "https://alarchauffeurservice.com/#localbusiness"
      }
    },

    {
      "@@type": "Organization",
      "@@id": "https://alarchauffeurservice.com/#organization",
      "name": "ALAR Chauffeur Service",
      "url": "https://alarchauffeurservice.com",
      "logo": "https://alarchauffeurservice.com/assets/img/logo/logo.png"
    }

  ]
}
</script>
@endpush

@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/our-fleet.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Luxury Voyage</span>
            <h1>Our Premium <span>Fleet</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Our Fleet</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== FLEET CATEGORIES STRIP ===== -->
    <section class="ve-fleet-cats-strip">
        <div class="container">
            <div class="ve-fleet-cats-inner">
                <div class="ve-fleet-cat-item">
                    <i class="fa fa-car"></i>
                    <span>Sedans</span>
                </div>
                <div class="ve-fleet-cat-item">
                    <i class="fa fa-truck"></i>
                    <span>SUVs</span>
                </div>
                <div class="ve-fleet-cat-item">
                    <i class="fa fa-bus"></i>
                    <span>Sprinters</span>
                </div>
                <div class="ve-fleet-cat-item">
                    <i class="fa fa-glass"></i>
                    <span>Stretches</span>
                </div>
                <div class="ve-fleet-cat-item">
                    <i class="fa fa-users"></i>
                    <span>Buses</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FLEET GRID ===== -->
    <section class="ve-section bg-light">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">The Best Choice</span>
                <h2>Experience <span>First Class Comfort</span></h2>
                <p>Meticulously maintained vehicles for every occasion, from executive sedans to luxury coaches.</p>
            </div>

            <div class="row g-4">
                <!-- 1. Hyundai Genesis -->
                <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/hyundai-genesis.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Hyundai Genesis</h5>
                            <p>Modern luxury sedan with advanced safety features and a quiet, comfortable cabin.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 3 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 2 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Lincoln MKT -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/lincolon-mkt.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Lincoln MKT</h5>
                            <p>Premium livery crossover offering superior legroom and plenty of trunk space for luggage.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 4 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 4 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Cadillac XTS -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/cadillac-xts.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Cadillac XTS</h5>
                            <p>The standard of American luxury, offering a smooth ride and sophisticated interior.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 3 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 3 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Mercedes s550 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/mercedes-s550.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Mercedes Benz S550</h5>
                            <p>World class engineering and ultimate comfort. The top choice for executive transportation.
                            </p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 3 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 3 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Chevrolet Suburban -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/chevrolet-suburban.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Chevrolet Suburban</h5>
                            <p>Heavy duty luxury SUV, perfect for families and small groups with significant luggage.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 6 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 6 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. Cadillac Escalade -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/cadillac-escalade.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Cadillac Escalade</h5>
                            <p>An icon of luxury and power. Offers unparalleled presence and premium amenities.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 6 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 6 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7. Mercedes Sprinter -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/mercedes-sprinter.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Mercedes Sprinter</h5>
                            <p>Efficient and comfortable group transportation with high ceilings and easy entry/exit.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 14 Passengers</span>
                                <span><i class="fa fa-briefcase"></i> 10 Bags</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 8. Lincoln Town Car Stretch -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/lincoln-town-car-stretch.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Lincoln Town Car Stretch</h5>
                            <p>Classic limousine elegance, perfect for weddings, proms, and special nights out.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 8-10 Passengers</span>
                                <span><i class="fa fa-glass"></i> Mini Bar</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 9. Lincoln MKT Stretch -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/lincoln-mkt-stretch.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Lincoln MKT Stretch</h5>
                            <p>A modern take on the stretch limo, featuring contemporary styling and high tech amenities.
                            </p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 8-10 Passengers</span>
                                <span><i class="fa fa-music"></i> Premium Sound</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 10. Escalade Limo -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/escalade-limo.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Escalade Limo</h5>
                            <p>The ultimate statement vehicle. High capacity with a bold presence and club like interior.
                            </p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 14-18 Passengers</span>
                                <span><i class="fa fa-lightbulb"></i> Fiber Optics</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 11. Black Hummer Limo -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/black-hummer-limo.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Black Hummer Limo</h5>
                            <p>Tough exterior, luxurious interior. A legendary party vehicle for large groups.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 16-20 Passengers</span>
                                <span><i class="fa fa-star"></i> VIP Lounge</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 12. Mercedes Sprinter Limo -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/mercedes-sprinter-limo.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Mercedes Sprinter Limo</h5>
                            <p>Luxury meets versatility. All the amenities of a stretch limo with the comfort of a van.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 10-14 Passengers</span>
                                <span><i class="fa fa-tv"></i> Flat Screens</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 13. Mini Bus 25 Passenger -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/25-bus-passanger.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>Mini Bus 25 Passenger</h5>
                            <p>Perfect for corporate groups and wedding shuttles, offering comfortable seating and climate
                                control.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 25 Passengers</span>
                                <span><i class="fa fa-suitcase"></i> Ample Luggage</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 14. 44 Passengers Bus -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/44-passenger.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>44 Passengers Bus</h5>
                            <p>Spacious mid size motor coach, ideal for long distance travel and large group excursions.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 44 Passengers</span>
                                <span><i class="fa fa-wifi"></i> Onboard WiFi</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 15. 55 Passengers Coach -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/fleet/55-passenger-bus.webp') }});"></div>
                        <div class="ve-insight-body">
                            <h5>55 Passengers Coach</h5>
                            <p>Executive motor coach with premium amenities. The ultimate solution for large scale
                                transportation.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-user"></i> 55 Passengers</span>
                                <span><i class="fa fa-restroom"></i> Restroom Equipped</span>
                            </div>
                            <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PREMIUM AMENITIES (Icon Strip) ===== -->
    <section class="ve-counter-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag"
                    style="background: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.2);">Inside the
                    Luxury</span>
                <h2 style="color:#fff;">Premium <span>On Board Features</span></h2>
            </div>
            <div class="ve-counter-grid">
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-snowflake-o"></i>
                    <h5 style="color:#fff; margin-top:15px;">Climate Control</h5>
                    <p style="color:rgba(255,255,255,0.5);">Adjustable multi zone air conditioning for your comfort.</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-volume-up"></i>
                    <h5 style="color:#fff; margin-top:15px;">Premium Audio</h5>
                    <p style="color:rgba(255,255,255,0.5);">High fidelity sound systems with Bluetooth connectivity.</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-wifi"></i>
                    <h5 style="color:#fff; margin-top:15px;">Fast Wi-Fi</h5>
                    <p style="color:rgba(255,255,255,0.5);">Stay connected with high speed complimentary hotspot.</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-bolt"></i>
                    <h5 style="color:#fff; margin-top:15px;">Power Outlets</h5>
                    <p style="color:rgba(255,255,255,0.5);">USB and standard charging ports for all your devices.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ===== LUXURY STANDARDS (Split Section) ===== -->
    <section class="ve-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Content Side -->
                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div>
                        <span class="ve-section-tag">Unmatched Quality</span>
                        <h2>Our Vehicle <span>Maintenance Standards</span></h2>
                        <p class="ve-lead">Every vehicle in our fleet undergoes rigorous inspections to ensure your safety
                            and comfort.</p>
                        <p>We pride ourselves on maintaining a modern, pristine fleet. Our vehicles are detailed daily and
                            undergo mechanical inspections weekly by certified technicians.</p>
                        <div class="ve-checklist">
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Daily Multi Point Sanitization</strong>
                                    <p>Deep cleaning and air purification after every trip.</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Meticulously Maintained Interiors</strong>
                                    <p>Leather conditioning, premium upholstery care, and scent control.</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Advanced GPS and Safety Tracking</strong>
                                    <p>Real time monitoring and defensive driving systems.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Image Side -->
                <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-about-text" style="padding-left:0; padding-right:50px;">
                        <div class="ve-about-img-1 bg-img"
                            style="background-image:url({{ asset('assets/img/about-us/premium-luxury-1.webp') }});"></div>
                        <div class="ve-about-img-2 bg-img"
                            style="background-image:url({{ asset('assets/img/about-us/Untitled-1.webp') }});"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

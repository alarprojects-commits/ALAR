@extends('main')
@section('meta_title', 'Blogs | Alar Chauffeur Service')
@section('meta_description', 'Explore blogs of Alar Chauffeur Service, including airport transfers, corporate transportation, weddings, prom, group travel, cruise transfers, and special events.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [

    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/blog/#webpage",
      "url": "https://alarchauffeurservice.com/blog/",
      "name": "Blog | ALAR Chauffeur Service",
      "description": "Latest chauffeur service, airport transfer, luxury transportation, travel, and limousine service articles from ALAR Chauffeur Service.",
      "isPartOf": {
        "@@id": "https://alarchauffeurservice.com/#website"
      },
      "breadcrumb": {
        "@@id": "https://alarchauffeurservice.com/blog/#breadcrumb"
      },
      "publisher": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      },
      "primaryImageOfPage": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      }
    },

    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/blog/#breadcrumb",
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
          "name": "Blog",
          "item": "https://alarchauffeurservice.com/blog/"
        }
      ]
    },

    {
      "@@type": "Blog",
      "@@id": "https://alarchauffeurservice.com/blog/#blog",
      "url": "https://alarchauffeurservice.com/blog/",
      "name": "ALAR Chauffeur Service Blog",
      "description": "Insights, travel tips, airport transportation guides, corporate travel information, wedding transportation advice, and luxury chauffeur service articles.",
      "publisher": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      }
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
      "logo": {
        "@@id": "https://alarchauffeurservice.com/#logo"
      },
      "image": "https://alarchauffeurservice.com/assets/img/logo/logo.png",
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
      "@@type": "WebSite",
      "@@id": "https://alarchauffeurservice.com/#website",
      "url": "https://alarchauffeurservice.com/",
      "name": "ALAR Chauffeur Service",
      "publisher": {
        "@@id": "https://alarchauffeurservice.com/#organization"
      }
    }

  ]
}
</script>
@endpush

@section('content')

    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/blog.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Blog</span>
            <h1>Our <span>Blogs</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Blogs</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== SERVICES GRID ===== -->
    <section class="ve-section bg-light">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Blogs</span>
                <h2>Our <span>Blogs</span></h2>
            </div>

            <div class="row">
                <!-- Car Service to JFK from Manhattan -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="50ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/blogs/car-service-to-jfk-from-manhattan.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Car Service to JFK from Manhattan</h5>
                            <p>Fixed-rate JFK airport car service from Midtown and Downtown—what travelers search before every flight.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('blog.car-service-to-jfk-from-manhattan') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newark Airport Car Service -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/blogs/newark-airport-car-service-ewr.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Newark Airport Car Service (EWR)</h5>
                            <p>Car service to Newark Airport from NJ and NYC with flight tracking and meet-and-greet.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('blog.newark-airport-car-service-ewr') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Black Car vs Uber -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="150ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/blogs/black-car-service-nyc-vs-uber-taxi.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Black Car Service NYC vs Uber & Taxi</h5>
                            <p>When a reserved chauffeur beats surge pricing—airport and business travel comparison.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('blog.black-car-service-nyc-vs-uber-taxi') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- New York Car Service Tri-State -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/blogs/new-york-car-service-jfk-lga-ewr-tri-state.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>New York Car Service for JFK, LGA, EWR & the Tri-State</h5>
                            <p>Airport car service NYC and Tri-State limo to John F. Kennedy (JFK), LaGuardia (LGA), Newark Liberty (EWR), and Westchester (HPN).</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('blog.new-york-car-service-jfk-lga-ewr-tri-state') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interstate PA VA DC -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/blogs/chauffeur-service-nyc-nj-to-pennsylvania-virginia-washington-dc.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Chauffeur Service to PA, Virginia & Washington DC</h5>
                            <p>Long-distance private chauffeur travel from New York and New Jersey to Pennsylvania, Virginia, and Washington, D.C.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('blog.chauffeur-service-nyc-nj-to-pennsylvania-virginia-washington-dc') }}" class="ve-btn-ghost-dark"
                                    style="padding: 10px 18px; font-size: 13px;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection

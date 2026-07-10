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
                <!-- Airport Transportation -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img"
                            style="background-image:url({{ asset('assets/img/blogs/luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey.webp') }});">
                        </div>
                        <div class="ve-insight-body">
                            <h5>Luxury Chauffeur Service for FIFA 2026 in NYC & New Jersey</h5>
                            <p>Experience premium limo and chauffeur service for FIFA World Cup 2026 with seamless travel to MetLife Stadium.</p>
                            <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                    style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                                <a href="{{ route('blog.luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey') }}" class="ve-btn-ghost-dark"
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

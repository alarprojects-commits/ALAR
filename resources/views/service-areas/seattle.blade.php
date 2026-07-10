@extends('main')
@section('meta_title', 'Luxury Chauffeur Service in Seattle | Alar Chauffeur Service')
@section('meta_description', 'Travel with confidence using Alar Chauffeur Service in Seattle for airport transfers, executive transportation, city travel, and premium chauffeur service.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "WebPage",
      "@@id": "https://alarchauffeurservice.com/service-areas/seattle/#webpage",
      "url": "https://alarchauffeurservice.com/service-areas/seattle",
      "name": "Chauffeur Service in Seattle",
      "description": "Luxury chauffeur service in Seattle offering airport transfers, black car service, corporate transportation, wedding transportation, hourly chauffeur service, and event transportation.",
      "about": {
        "@@id": "https://alarchauffeurservice.com/service-areas/seattle/#service"
      }
    },
    {
      "@@type": "Service",
      "@@id": "https://alarchauffeurservice.com/service-areas/seattle/#service",
      "name": "Chauffeur Service in Seattle",
      "serviceType": "Luxury Chauffeur Transportation",
      "url": "https://alarchauffeurservice.com/service-areas/seattle",
      "provider": {
        "@@id": "https://alarchauffeurservice.com/#business"
      },
      "areaServed": {
        "@@type": "City",
        "name": "Seattle"
      },
      "description": "Professional chauffeur service throughout Seattle including airport transfers, corporate travel, black car service, wedding transportation, sporting event transportation, group transportation, and VIP transportation.",
      "offers": {
        "@@type": "Offer",
        "availability": "https://schema.org/InStock"
      }
    },
    {
      "@@type": "BreadcrumbList",
      "@@id": "https://alarchauffeurservice.com/service-areas/seattle/#breadcrumb",
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
          "name": "Seattle",
          "item": "https://alarchauffeurservice.com/service-areas/seattle"
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
                <h1>Luxury Transportation in <span>Seattle</span></h1>
                <p>Elite chauffeur services for the Emerald City and the Pacific Northwest.</p>
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
                            <h2 class="mb-20">Premium Chauffeur Service <span>Seattle</span></h2>
                            <p class="ve-lead">Navigate the dynamic landscape of the Pacific Northwest with absolute elegance. Our Seattle chauffeur service provides sophisticated travel solutions for the city's tech leaders, maritime industries, and private elite.</p>
                            
                            <p>Seattle is a city of innovation, nestled between breathtaking natural beauty and a thriving industrial base. At Alar Chauffeur Service, we understand the importance of reliability in the Emerald City's fast-paced environment. Whether you are visiting the tech campuses of Redmond or the busy maritime terminals, we ensure your journey is smooth, safe, and professional.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our Seattle <span>Expertise</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>SEA-Tac Specialists</h5>
                                        <p>Expert terminal greeting and seamless transfers to and from Seattle-Tacoma International Airport.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-laptop"></i>
                                        <h5>Tech Sector Logistics</h5>
                                        <p>Reliable transportation for executives and teams visiting major campuses in Seattle, Bellevue, and Redmond.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-ship"></i>
                                        <h5>Maritime & Cruise</h5>
                                        <p>Sophisticated terminal transfers for cruise passengers and maritime industry professionals at the Port of Seattle.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>Regional Coverage</h5>
                                        <p>Dedicated service extending from the heart of downtown Seattle to Tacoma, Everett, and beyond.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h3>A Sanctuary of <span>Comfort</span></h3>
                            <p>We pride ourselves on our ability to handle the unique requirements of the Seattle region. Our commitment to excellence and our attention to every detail make us the premier choice for those who demand only the best in the Pacific Northwest.</p>
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

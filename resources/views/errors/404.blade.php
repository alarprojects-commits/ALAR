@extends('main')

@section('meta_title', 'Page Not Found — Go Home or Book Alar Chauffeur Now')
@section('meta_description', 'The page you requested was not found. Return home or book a chauffeur with Alar Chauffeur Service for airport transfers and Tri-State travel.')
@section('meta_robots', 'noindex, follow')

@section('content')
<section class="ve-page-hero-simple">
    <div class="container">
        <div class="ve-hero-simple-content">
            <span class="ve-section-tag">Error 404</span>
            <h1>Page <span>Not Found</span></h1>
            <p>The page you are looking for does not exist or may have moved. Use the links below to continue booking or exploring Alar Chauffeur Service.</p>
            <div class="ve-hero-ctas">
                <a href="{{ route('home') }}" class="ve-btn-primary">Back to Home</a>
                <a href="{{ route('book-online') }}" class="ve-btn-outline">Book Online</a>
                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
            </div>
        </div>
    </div>
</section>

<section class="ve-section bg-light">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Helpful Links</span>
            <h2>Where would you like to <span>go next?</span></h2>
            <p>Popular pages for airport transfers, service areas, and bookings.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="ve-insight-card h-100">
                    <div class="ve-insight-body">
                        <h5>Our Services</h5>
                        <p>Airport transfers, corporate travel, weddings, hourly chauffeur, and more.</p>
                        <p class="mb-0"><a href="{{ route('our-services') }}" style="color: var(--ve-gold);"><b>View Services</b></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="ve-insight-card h-100">
                    <div class="ve-insight-body">
                        <h5>Airport Guides</h5>
                        <p>JFK, LGA, EWR, and other airport car service pages across our coverage area.</p>
                        <p class="mb-0"><a href="{{ route('airports.index') }}" style="color: var(--ve-gold);"><b>Browse Airports</b></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="ve-insight-card h-100">
                    <div class="ve-insight-body">
                        <h5>Contact Us</h5>
                        <p>Need a quote or help with a booking? Reach our Edison, NJ desk anytime.</p>
                        <p class="mb-0"><a href="{{ route('contact-us') }}" style="color: var(--ve-gold);"><b>Get in Touch</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.cta')
@endsection

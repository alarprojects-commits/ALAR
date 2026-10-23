@extends('main')
@section('meta_title', 'Car Service Areas: Tri-State & West Coast Coverage')
@section('meta_description', 'See Alar chauffeur and airport car service coverage across New Jersey, New York, Connecticut, Pennsylvania, California, Nevada, and Washington state.')
@section('og_image', asset('assets/img/service-areas/new-jersey.webp'))
@section('og_type', 'website')

@section('content')
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Coverage</span>
                <h1>Service Areas Across the Tri-State & Beyond</h1>
                <p>State guides for New Jersey, New York, Connecticut, and Pennsylvania—plus California, Nevada, and Washington. Every page links to the airports travelers actually book.</p>
                <div class="ve-hero-ctas">
                    <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
                    <a href="{{ route('free-quote') }}" class="ve-btn-outline">Free Quote</a>
                    <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-section bg-white">
        <div class="container">
            <div class="ve-area-intro mb-50 text-center" style="max-width: 720px; margin-left: auto; margin-right: auto;">
                <h2>Core Tri-State coverage</h2>
                <p>Start with the state that matches your pickup or drop-off. Each guide lists counties, airports, and how to request a confirmed chauffeur rate.</p>
            </div>
            <div class="row">
                @foreach ([
                    ['route' => 'service-area.new-jersey', 'title' => 'New Jersey', 'text' => 'Edison-based dispatch for EWR, JFK, LGA, TEB, and statewide counties.'],
                    ['route' => 'service-area.new-york', 'title' => 'New York', 'text' => 'Manhattan, boroughs, Long Island, and Westchester with JFK, LGA, EWR, and HPN.'],
                    ['route' => 'service-area.connecticut', 'title' => 'Connecticut', 'text' => 'Bradley (BDL) plus NYC-area airports across Fairfield, New Haven, and more.'],
                    ['route' => 'service-area.pennsylvania', 'title' => 'Pennsylvania', 'text' => 'PHL transfers and Tri-State links for Philly and surrounding counties.'],
                ] as $card)
                    <div class="col-md-6 col-lg-3 mb-30">
                        <div class="ve-feature-text-item h-100">
                            <h3 style="font-size: 1.25rem;"><a href="{{ route($card['route']) }}" style="color: inherit;">{{ $card['title'] }}</a></h3>
                            <p>{{ $card['text'] }}</p>
                            <a href="{{ route($card['route']) }}" style="color: var(--ve-gold);"><b>View guide</b></a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="ve-area-intro mt-50 mb-40 text-center" style="max-width: 720px; margin-left: auto; margin-right: auto;">
                <h2>Additional state coverage</h2>
                <p>West Coast state hubs for travelers who need LAX, Las Vegas, or Sea-Tac chauffeur transfers.</p>
            </div>
            <div class="row justify-content-center">
                @foreach ([
                    ['route' => 'service-area.california', 'title' => 'California', 'text' => 'LAX-focused chauffeur and airport car service.'],
                    ['route' => 'service-area.nevada', 'title' => 'Nevada', 'text' => 'Las Vegas Strip and LAS airport transfers.'],
                    ['route' => 'service-area.washington', 'title' => 'Washington', 'text' => 'Seattle-area coverage with SEA airport guides.'],
                ] as $card)
                    <div class="col-md-4 mb-30">
                        <div class="ve-feature-text-item h-100">
                            <h3 style="font-size: 1.25rem;"><a href="{{ route($card['route']) }}" style="color: inherit;">{{ $card['title'] }}</a></h3>
                            <p>{{ $card['text'] }}</p>
                            <a href="{{ route($card['route']) }}" style="color: var(--ve-gold);"><b>View guide</b></a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-50 p-4" style="background: #f7f5f2; border-radius: 12px;">
                <h2 class="mb-20">Featured airport guides</h2>
                <p class="mb-30">Query-based pages for the airports Tri-State travelers search most often.</p>
                <div class="ve-amenities-list">
                    <ul>
                        <li><i class="fa fa-check"></i> <a href="{{ route('airports.ewr') }}" style="color: var(--ve-gold);"><b>Newark (EWR) airport car service</b></a></li>
                        <li><i class="fa fa-check"></i> <a href="{{ route('airports.jfk') }}" style="color: var(--ve-gold);"><b>JFK airport car service</b></a></li>
                        <li><i class="fa fa-check"></i> <a href="{{ route('airports.lga') }}" style="color: var(--ve-gold);"><b>LaGuardia (LGA) car service</b></a></li>
                        <li><i class="fa fa-check"></i> <a href="{{ route('airports.phl') }}" style="color: var(--ve-gold);"><b>Philadelphia (PHL) car service</b></a></li>
                        <li><i class="fa fa-check"></i> <a href="{{ route('airports.bdl') }}" style="color: var(--ve-gold);"><b>Bradley (BDL) car service</b></a></li>
                        <li><i class="fa fa-check"></i> <a href="{{ route('airports.index') }}" style="color: var(--ve-gold);"><b>Browse all airports</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection

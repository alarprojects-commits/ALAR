@extends('main')
@section('meta_title', 'Airport Limo NYC & NJ: Skip the Taxi Line | Alar')
@section('meta_description', 'Skip the taxi line and the surge. Pick your airport guide for JFK, LaGuardia, Newark & more, then reserve a flight-tracked chauffeur at a confirmed rate.')
@section('og_image', asset('assets/img/airports/jfk.webp'))
@section('og_type', 'website')

@section('content')
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Airports</span>
                <h1>NYC &amp; NJ Airport Limo Guides for JFK, LGA, EWR &amp; More</h1>
            <p>Pick your airport to see pickup tips, flight tracking, and how to reserve a chauffeur with a confirmed rate.</p>
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
            <h2 class="mb-30">Tri-State airports</h2>
            <div class="row">
                @foreach ([
                    ['airports.jfk', 'JFK', 'John F. Kennedy International', 'assets/img/airports/jfk.webp'],
                    ['airports.lga', 'LGA', 'LaGuardia Airport', 'assets/img/airports/lga.webp'],
                    ['airports.ewr', 'EWR', 'Newark Liberty International', 'assets/img/airports/ewr.webp'],
                    ['airports.hpn', 'HPN', 'Westchester County Airport', 'assets/img/airports/hpn.webp'],
                    ['airports.teb', 'TEB', 'Teterboro Airport', 'assets/img/airports/teb.webp'],
                ] as [$route, $code, $name, $img])
                    <div class="col-md-6 col-lg-4 mb-40">
                        <a href="{{ route($route) }}" class="d-block">
                            <img src="{{ asset($img) }}" alt="{{ $code }} airport car service" class="img-fluid rounded-12 shadow-sm w-100 mb-3" style="height: 180px; object-fit: cover;">
                        </a>
                        <h3 style="font-size: 1.2rem;"><a href="{{ route($route) }}" style="color: inherit;">{{ $code }} - {{ $name }}</a></h3>
                        <p><a href="{{ route($route) }}" style="color: var(--ve-gold);"><b>Open {{ $code }} guide</b></a></p>
                    </div>
                @endforeach
            </div>

            <h2 class="mb-30 mt-40">Extended Northeast airports</h2>
            <div class="row">
                @foreach ([
                    ['airports.phl', 'PHL', 'Philadelphia International', 'service-area.pennsylvania', 'Pennsylvania', 'assets/img/airports/phl.webp'],
                    ['airports.bdl', 'BDL', 'Bradley International (Hartford)', 'service-area.connecticut', 'Connecticut', 'assets/img/airports/bdl.webp'],
                    ['airports.bos', 'BOS', 'Boston Logan International', 'service-area.massachusetts', 'Massachusetts', 'assets/img/airports/bos.webp'],
                ] as [$route, $code, $name, $stateRoute, $state, $img])
                    <div class="col-md-6 col-lg-4 mb-40">
                        <a href="{{ route($route) }}" class="d-block">
                            <img src="{{ asset($img) }}" alt="{{ $code }} airport car service" class="img-fluid rounded-12 shadow-sm w-100 mb-3" style="height: 200px; object-fit: cover;">
                        </a>
                        <h3 style="font-size: 1.2rem;"><a href="{{ route($route) }}" style="color: inherit;">{{ $code }} - {{ $name }}</a></h3>
                        <p>Primary airport guide for our <a href="{{ route($stateRoute) }}" style="color: var(--ve-gold);"><b>{{ $state }} service area</b></a>.</p>
                        <p><a href="{{ route($route) }}" style="color: var(--ve-gold);"><b>Open {{ $code }} guide</b></a></p>
                    </div>
                @endforeach
            </div>

            <h2 class="mb-30 mt-40">West Coast airports</h2>
            <div class="row">
                @foreach ([
                    ['airports.lax', 'LAX', 'Los Angeles International', 'service-area.california', 'California', 'assets/img/airports/lax.webp'],
                    ['airports.las', 'LAS', 'Harry Reid International', 'service-area.nevada', 'Nevada', 'assets/img/airports/las.webp'],
                    ['airports.sea', 'SEA', 'Seattle-Tacoma International', 'service-area.washington', 'Washington', 'assets/img/airports/sea.webp'],
                ] as [$route, $code, $name, $stateRoute, $state, $img])
                    <div class="col-md-4 mb-40">
                        <a href="{{ route($route) }}" class="d-block">
                            <img src="{{ asset($img) }}" alt="{{ $code }} airport car service" class="img-fluid rounded-12 shadow-sm w-100 mb-3" style="height: 180px; object-fit: cover;">
                        </a>
                        <h3 style="font-size: 1.2rem;"><a href="{{ route($route) }}" style="color: inherit;">{{ $code }} - {{ $name }}</a></h3>
                        <p>Pairs with our <a href="{{ route($stateRoute) }}" style="color: var(--ve-gold);"><b>{{ $state }}</b></a> state page.</p>
                        <p><a href="{{ route($route) }}" style="color: var(--ve-gold);"><b>Open {{ $code }} guide</b></a></p>
                    </div>
                @endforeach
            </div>

            <div class="mt-40 p-4" style="background: #f7f5f2; border-radius: 12px;">
                <h2 class="mb-15">How airport booking works</h2>
                <h3>What to send</h3>
                <p>Date, door addresses, passenger and bag count, airline, flight number, and terminal.</p>
                <h3>What you get</h3>
                <p>A confirmed chauffeur vehicle and rate-aligned with airport shuttle service and chauffeur service, not street-hail taxi.</p>
                <div class="mt-3">
                    @include('components.cta-buttons', ['variant' => 'hero'])
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection

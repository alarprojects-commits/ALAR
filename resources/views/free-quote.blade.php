@extends('main')
@section('meta_title', 'Free Quote for Airport Chauffeur Hire in NJ | Alar')
@section('meta_description', 'Request a free quote for airport chauffeur hire in NJ, corporate travel, or hourly limo. Share trip details and get a confirmed Tri-State rate from Alar.')
@section('og_type', 'website')

@section('content')
<section class="ve-page-hero-simple">
    <div class="container">
        <div class="ve-hero-simple-content">
            <span class="ve-section-tag">Free Quote</span>
            <h1>Free Quote for Airport &amp; Black Car Service <span>NJ</span></h1>
            <p>Tell us where you’re going and we’ll confirm a reserved chauffeur rate-no surge pricing, no curb queue.</p>
            <div class="ve-hero-ctas">
                <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
                <a href="{{ route('free-quote') }}" class="ve-btn-outline">Free Quote</a>
                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
            </div>
        </div>
    </div>
</section>

<section class="ve-contact-cards-section">
    <div class="container">
        <div class="ve-contact-cards-grid">
            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-contact-card-link">
                <div class="ve-contact-info-card">
                    <div class="ve-ci-icon"><i class="fa fa-phone"></i></div>
                    <h5>Call Us 24/7</h5>
                    <p>{{ config('contact.phone_display') }}</p>
                </div>
            </a>
            <a href="mailto:{{ config('contact.email') }}" class="ve-contact-card-link">
                <div class="ve-contact-info-card">
                    <div class="ve-ci-icon"><i class="fa fa-envelope"></i></div>
                    <h5>Email Us</h5>
                    <p>{{ config('contact.email') }}</p>
                </div>
            </a>
            <a href="{{ route('book-online') }}" class="ve-contact-card-link">
                <div class="ve-contact-info-card">
                    <div class="ve-ci-icon"><i class="fa fa-calendar-check-o"></i></div>
                    <h5>Ready to Book?</h5>
                    <p>Use our online reservation system</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="ve-section ve-contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-contact-form-wrap ve-quote-form-wrap">
                    <span class="ve-section-tag">Free Quote</span>
                    <h2>Tell Us About <span>Your Trip</span></h2>
                    <p>Share your contact and trip details below. Our desk will follow up with a confirmed chauffeur rate.</p>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form class="ve-contact-form ve-quote-form" action="{{ route('quote.store') }}" method="post" novalidate>
                        @csrf
                        <input type="text" name="website" style="display:none !important" tabindex="-1" autocomplete="off">

                        <div class="ve-quote-section-label">Contact Details</div>
                        <div class="ve-form-row ve-form-row-3">
                            <div class="ve-form-group">
                                <label for="quote-name">Full Name</label>
                                <input id="quote-name" type="text" name="name" placeholder="John Smith" required
                                    value="{{ old('name') }}" autocomplete="name">
                                @error('name')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="ve-form-group">
                                <label for="quote-number">Phone Number</label>
                                <input id="quote-number" type="tel" name="number" class="js-us-phone"
                                    placeholder="(201) 555-0123" required minlength="14" maxlength="14"
                                    inputmode="numeric" value="{{ old('number') }}" autocomplete="tel">
                                @error('number')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="ve-form-group">
                                <label for="quote-email">Email <span style="text-transform: none; font-weight: 500; color: var(--ve-text);">(Optional)</span></label>
                                <input id="quote-email" type="email" name="email" placeholder="you@example.com"
                                    value="{{ old('email') }}" autocomplete="email">
                                @error('email')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="ve-quote-section-label">Trip Details</div>
                        <div class="ve-form-row">
                            <div class="ve-form-group">
                                <label for="quote-pickup">Pickup Address</label>
                                <input id="quote-pickup" type="text" name="pickup_address"
                                    placeholder="Airport, hotel, or street address" required
                                    value="{{ old('pickup_address') }}">
                                @error('pickup_address')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="ve-form-group">
                                <label for="quote-destination">Destination Address</label>
                                <input id="quote-destination" type="text" name="destination_address"
                                    placeholder="Where should we take you?" required
                                    value="{{ old('destination_address') }}">
                                @error('destination_address')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="ve-form-row">
                            <div class="ve-form-group">
                                <label for="quote-service">Type of Service</label>
                                <select id="quote-service" name="service_type" required>
                                    <option value="" disabled {{ old('service_type') ? '' : 'selected' }}>Select a service</option>
                                    @foreach ([
                                        'Airport Transportation',
                                        'Corporate Transportation',
                                        'Hourly Limo',
                                        'Chauffeur Service',
                                        'Wedding Limo',
                                        'Prom Limo',
                                        'Group Transportation',
                                        'Cruise Port Transfers',
                                        'Sporting Events',
                                        'Concert & Festival',
                                        'Party Bus',
                                    ] as $service)
                                        <option value="{{ $service }}" @selected(old('service_type') === $service)>{{ $service }}</option>
                                    @endforeach
                                </select>
                                @error('service_type')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="ve-form-group">
                                <label for="quote-vehicle">Fleet Category / Vehicle</label>
                                <select id="quote-vehicle" name="vehicle_type" required>
                                    <option value="" disabled {{ old('vehicle_type') ? '' : 'selected' }}>Select a fleet category</option>
                                    @php
                                        $fleetOptions = [
                                            'Luxury Sedans' => [
                                                'Luxury Sedan (Any)',
                                                'Hyundai Genesis',
                                                'Lincoln MKT',
                                                'Cadillac XTS',
                                                'Mercedes Benz S550',
                                            ],
                                            'Executive SUVs' => [
                                                'Executive SUV (Any)',
                                                'Chevrolet Suburban',
                                                'Cadillac Escalade',
                                            ],
                                            'Stretch Limousines' => [
                                                'Stretch Limo (Any)',
                                                'Lincoln Town Car Stretch',
                                                'Lincoln MKT Stretch',
                                                'Escalade Limo',
                                                'Black Hummer Limo',
                                            ],
                                            'Sprinter Vans' => [
                                                'Sprinter Van (Any)',
                                                'Mercedes Sprinter',
                                                'Mercedes Sprinter Limo',
                                            ],
                                            'Buses & Coaches' => [
                                                'Bus / Coach (Any)',
                                                'Mini Bus 25 Passenger',
                                                '44 Passengers Bus',
                                                '55 Passengers Coach',
                                            ],
                                            'Not Sure' => [
                                                'Not Sure - Recommend for Me',
                                            ],
                                        ];
                                    @endphp
                                    @foreach ($fleetOptions as $category => $vehicles)
                                        <optgroup label="{{ $category }}">
                                            @foreach ($vehicles as $vehicle)
                                                <option value="{{ $vehicle }}" @selected(old('vehicle_type') === $vehicle)>{{ $vehicle }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                                <small style="display:block; margin-top:6px; color: var(--ve-text); opacity: 0.75;">
                                    Browse categories on <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>Our Fleet</b></a> if you need help choosing.
                                </small>
                                @error('vehicle_type')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="ve-form-row">
                            <div class="ve-form-group">
                                <label for="quote-passengers">Passengers</label>
                                <input id="quote-passengers" type="number" name="passengers" placeholder="e.g. 4"
                                    min="1" max="100" required value="{{ old('passengers') }}">
                                @error('passengers')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="ve-form-group">
                                <label for="quote-luggage">Luggage</label>
                                <input id="quote-luggage" type="number" name="luggage" placeholder="e.g. 2"
                                    min="0" max="100" required value="{{ old('luggage') }}">
                                @error('luggage')
                                    <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="ve-form-group">
                            <label for="quote-notes">Notes <span style="text-transform: none; font-weight: 500; color: var(--ve-text);">(Optional)</span></label>
                            <textarea id="quote-notes" name="notes" rows="4"
                                placeholder="Flight number, special requests, timing notes...">{{ old('notes') }}</textarea>
                            @error('notes')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="ve-sms-consent-row mb-4">
                            <label class="ve-sms-consent-label" style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; font-weight: 400; text-transform: none; color: var(--ve-text); font-size: 14px; line-height: 1.6;">
                                <input type="checkbox" name="sms_consent" value="1" style="width: 18px; height: 18px; margin-top: 2px; flex-shrink: 0; cursor: pointer;"
                                    {{ old('sms_consent') ? 'checked' : '' }}>
                                @include('components.sms-consent-label')
                            </label>
                        </div>

                        <div class="ve-form-group">
                            <div class="cf-turnstile"
                                data-sitekey="{{ config('services.turnstile.site_key') }}"
                                data-theme="light"></div>
                            @error('cf-turnstile-response')
                                <span class="text-danger d-block mt-2" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="ve-btn-primary">Submit Free Quote <i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endpush

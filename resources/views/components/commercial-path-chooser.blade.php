{{-- Corporate / chauffeur commercial path chooser - compact, not card bloat --}}
@php
    $paths = $paths ?? [
        [
            'title' => 'Airport Transfer',
            'copy' => 'Flight-tracked pickups, confirmed rate.',
            'book' => route('book-online') . '#booking-form',
            'service' => route('services.airport-transportation'),
            'icon' => 'fa-plane',
        ],
        [
            'title' => 'Meetings & Hourly',
            'copy' => 'As-directed chauffeur for multi-stop days.',
            'book' => route('book-online') . '#booking-form',
            'service' => route('services.hourly-limo'),
            'icon' => 'fa-clock-o',
        ],
        [
            'title' => 'Roadshow & VIP',
            'copy' => 'Executive sedan or SUV for clients.',
            'book' => route('book-online') . '#booking-form',
            'service' => route('services.corporate-transportation'),
            'icon' => 'fa-briefcase',
        ],
    ];
@endphp

<section class="ve-path-chooser">
    <div class="container">
        <div class="ve-path-chooser-head">
            <span class="ve-section-tag">Ready to Book</span>
            <h2>Choose your path, then <span>reserve</span></h2>
            <p>Confirmed rate before dispatch. Book online, request a quote, or call the Edison desk.</p>
        </div>
        <div class="ve-path-chooser-grid">
            @foreach ($paths as $path)
                <article class="ve-path-item">
                    <i class="fa {{ $path['icon'] ?? 'fa-car' }}" aria-hidden="true"></i>
                    <h3>{{ $path['title'] }}</h3>
                    <p>{{ $path['copy'] }}</p>
                    <div class="ve-path-item-actions">
                        <a href="{{ $path['book'] }}" class="ve-btn-primary" data-engage="start_booking" data-engage-label="{{ $path['title'] }}">Book Now</a>
                        <a href="{{ route('free-quote') }}" data-engage="click_free_quote">Free Quote</a>
                    </div>
                    <a href="{{ $path['service'] }}" class="ve-path-item-more" data-engage="view_service">Details</a>
                </article>
            @endforeach
        </div>
    </div>
</section>

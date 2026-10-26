{{--
  Compact fleet class selector - whole card is the CTA.
  @var string $mode  scroll|link
--}}
@php
    $mode = $mode ?? 'scroll';
    $bookingHref = $mode === 'scroll' ? '#booking-form' : route('book-online') . '#booking-form';
    $classes = [
        [
            'title' => 'Luxury Sedan',
            'meta' => '1-3 passengers',
            'img' => 'assets/img/fleet/mercedes-s550.webp',
            'alt' => 'Luxury sedan for chauffeur airport transfers',
        ],
        [
            'title' => 'Executive SUV',
            'meta' => '1-6 passengers',
            'img' => 'assets/img/fleet/cadillac-escalade.webp',
            'alt' => 'Executive SUV for corporate and airport travel',
        ],
        [
            'title' => 'Sprinter Van',
            'meta' => 'Group travel',
            'img' => 'assets/img/fleet/mercedes-sprinter.webp',
            'alt' => 'Mercedes Sprinter van for group transportation',
        ],
    ];
@endphp

<section class="ve-fleet-peek">
    <div class="container">
        <div class="ve-fleet-peek-head">
            <div>
                <span class="ve-section-tag">Vehicle Class</span>
                <h2>Pick a class, then <span>reserve</span></h2>
            </div>
            <a href="{{ route('our-fleet') }}" class="ve-fleet-peek-all" data-engage="view_fleet">View full fleet <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
        <div class="ve-fleet-peek-grid">
            @foreach ($classes as $class)
                <a href="{{ $bookingHref }}"
                   class="ve-fleet-peek-card"
                   data-engage="start_booking"
                   data-engage-label="{{ $class['title'] }}">
                    <span class="ve-fleet-peek-media bg-img" role="img" aria-label="{{ $class['alt'] }}"
                        style="background-image:url({{ asset($class['img']) }});"></span>
                    <span class="ve-fleet-peek-copy">
                        <strong>{{ $class['title'] }}</strong>
                        <em>{{ $class['meta'] }}</em>
                        <span class="ve-fleet-peek-cta">Select &amp; book <i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>

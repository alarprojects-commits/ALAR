{{--
  Compact trip pills for bookers (not card stacks).
  @var string $mode  scroll|link
--}}
@php
    $mode = $mode ?? 'scroll';
    $bookingHref = $mode === 'scroll' ? '#booking-form' : route('book-online') . '#booking-form';
    $trips = [
        ['key' => 'airport', 'label' => 'Airport', 'icon' => 'fa-plane'],
        ['key' => 'corporate', 'label' => 'Corporate', 'icon' => 'fa-briefcase'],
        ['key' => 'hourly', 'label' => 'Hourly', 'icon' => 'fa-clock-o'],
        ['key' => 'wedding', 'label' => 'Wedding', 'icon' => 'fa-heart'],
        ['key' => 'group', 'label' => 'Group', 'icon' => 'fa-users'],
    ];
@endphp

<div class="ve-trip-pills" role="navigation" aria-label="Book by trip type">
    @foreach ($trips as $trip)
        <a href="{{ $bookingHref }}"
           class="ve-trip-pill"
           data-engage="select_trip_type"
           data-engage-label="{{ $trip['key'] }}">
            <i class="fa {{ $trip['icon'] }}" aria-hidden="true"></i>
            {{ $trip['label'] }}
        </a>
    @endforeach
</div>

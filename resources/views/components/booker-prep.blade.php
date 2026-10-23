{{--
  Single prep band: trip pills + ready checklist + human escape.
  @var string $mode  scroll|link
--}}
<section class="ve-booker-prep">
    <div class="container">
        <div class="ve-booker-prep-grid">
            <div class="ve-booker-prep-col">
                <p class="ve-booker-prep-label">Book by trip</p>
                @include('components.trip-type-chooser', ['mode' => $mode ?? 'scroll'])
            </div>
            <div class="ve-booker-prep-col">
                <p class="ve-booker-prep-label">Have these ready</p>
                @include('components.ready-to-book-checklist')
            </div>
        </div>
        <div class="ve-booker-prep-escape">
            <span>Want a human quote instead?</span>
            <a href="{{ route('free-quote') }}" data-engage="click_free_quote">Free Quote</a>
            <span class="ve-booker-prep-dot" aria-hidden="true">·</span>
            <a href="tel:{{ config('contact.phone_tel') }}" data-engage="click_to_call">{{ config('contact.phone_display') }}</a>
        </div>
    </div>
</section>

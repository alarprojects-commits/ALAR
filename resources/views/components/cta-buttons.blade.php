{{--
  Shared CTA trio: Book Online | Free Quote | Phone
  @var string $variant  hero|banner|sidebar|compact|home
--}}
@php
    $variant = $variant ?? 'hero';
@endphp

@if ($variant === 'banner')
    <div class="ve-cta-btns">
        <a href="{{ route('book-online') }}" class="ve-btn-white">Book Online</a>
        <a href="{{ route('free-quote') }}" class="ve-btn-outline">Free Quote</a>
        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
    </div>
@elseif ($variant === 'sidebar')
    <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
    <a href="{{ route('free-quote') }}" class="ve-btn-outline" style="width: 100%; text-align: center; margin-top: 12px; display: block;">Free Quote</a>
    <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline" style="width: 100%; text-align: center; margin-top: 12px; display: block;">{{ config('contact.phone_display') }}</a>
@elseif ($variant === 'sidebar-light')
    <a href="{{ route('book-online') }}" class="ve-btn-ghost-dark w-100 mb-2">Book Online</a>
    <a href="{{ route('free-quote') }}" class="ve-btn-primary w-100 mb-2">Free Quote</a>
    <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark w-100">{{ config('contact.phone_display') }}</a>
@elseif ($variant === 'home')
    <div class="ve-hero-btns">
        <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
        <a href="{{ route('free-quote') }}" class="ve-btn-ghost">Free Quote</a>
        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost">{{ config('contact.phone_display') }}</a>
    </div>
@elseif ($variant === 'compact')
    <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
        <a href="{{ route('book-online') }}" class="ve-btn-primary" style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
        <a href="{{ route('free-quote') }}" class="ve-btn-ghost-dark" style="padding: 10px 18px; font-size: 13px;">Free Quote</a>
        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark" style="padding: 10px 18px; font-size: 13px;">{{ config('contact.phone_display') }}</a>
    </div>
@else
    <div class="ve-hero-ctas">
        <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
        <a href="{{ route('free-quote') }}" class="ve-btn-outline">Free Quote</a>
        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-outline">{{ config('contact.phone_display') }}</a>
    </div>
@endif

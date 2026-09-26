@extends('layouts.app')
@section('meta_title', 'Contact Us | Alar Chauffeur Service')
@section('meta_description', 'Request a quote or speak with Alar Chauffeur Service dispatch. Phone, email, and a short contact form.')
@section('og_image', asset('assets/img/pages/contact.png'))

@section('content')
@include('components.page-banner', ['image' => asset('assets/img/pages/contact.png'), 'kicker' => 'Contact', 'title' => 'Tell us the pickup', 'crumb' => 'Contact'])
@include('components.ticker')
<section class="alar-section">
    <div class="alar-wrap alar-split">
        <div>
            @if(session('success'))
                <div class="alar-alert">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alar-alert alar-alert-bad">{{ session('error') }}</div>
            @endif
            <form class="alar-form" action="{{ route('contact.store') }}" method="post">
                @csrf
                <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
                <div class="alar-form-row">
                    <div>
                        <label for="first_name">First name</label>
                        <input id="first_name" type="text" name="first_name" required value="{{ old('first_name') }}">
                        @error('first_name')<span class="alar-error">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="last_name">Last name</label>
                        <input id="last_name" type="text" name="last_name" required value="{{ old('last_name') }}">
                        @error('last_name')<span class="alar-error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="alar-form-row">
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" required value="{{ old('email') }}">
                        @error('email')<span class="alar-error">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input id="phone" type="text" name="phone" required minlength="10" maxlength="15" inputmode="numeric" value="{{ old('phone') }}" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                        @error('phone')<span class="alar-error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                    @error('message')<span class="alar-error">{{ $message }}</span>@enderror
                </div>
                <label class="alar-check">
                    <input type="checkbox" name="sms_consent" value="1" @checked(old('sms_consent'))>
                    <span>@include('components.sms-consent-label')</span>
                </label>
                <button class="alar-btn alar-btn-gold" type="submit">Send message</button>
            </form>
        </div>
        <aside>
            <div class="alar-head" style="margin-bottom:1rem;">
                <div>
                    <p class="alar-kicker">Desk</p>
                    <h2>How to reach us</h2>
                </div>
            </div>
            <article class="alar-note">
                <h3>Dispatch</h3>
                <p><a href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a></p>
                <p><a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a></p>
                <p>{{ config('contact.location') }}</p>
                <p>Open 24/7</p>
            </article>
            <article class="alar-note" style="margin-top:1rem;">
                <h3>States</h3>
                <ul class="alar-area-links">
                    <li><a href="{{ route('service-area.new-york') }}">New York</a></li>
                    <li><a href="{{ route('service-area.new-jersey') }}">New Jersey</a></li>
                    <li><a href="{{ route('service-area.california') }}">California</a></li>
                    <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                    <li><a href="{{ route('service-area.washington') }}">Washington</a></li>
                </ul>
            </article>
        </aside>
    </div>
</section>
<section class="alar-section alar-paper">
    <div class="alar-wrap alar-faq">
        <h2>Before you write</h2>
        <details open><summary>What should I include?</summary><p>Date, pickup, drop-off, passenger count, and whether you need an airport meet-and-greet.</p></details>
        <details><summary>How fast do you reply?</summary><p>Dispatch reviews quote requests throughout the day and night.</p></details>
    </div>
</section>
@endsection

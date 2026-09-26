@extends('layouts.app')
@section('meta_title', 'Book Online | Alar Chauffeur Service')
@section('meta_description', 'Reserve a chauffeur online with Alar Chauffeur Service.')
@section('og_image', asset('assets/img/pages/book-online.png'))

@section('content')
@include('components.page-banner', ['image' => asset('assets/img/pages/book-online.png'), 'kicker' => 'Booking', 'title' => 'Reserve the car', 'crumb' => 'Book Online'])
@include('components.ticker')
<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-frame">
            <iframe title="Book a ride with Alar Chauffeur Service" name="oresframe" src="https://book.mylimobiz.com/v4/alarchauffeur">Your browser does not support inline frames.</iframe>
        </div>
        <div class="alar-grid-3" style="margin-top:1.5rem;">
            <article class="alar-note"><h3>Flight tracking</h3><p>Airport pickups follow the arrival, not the printed time.</p></article>
            <article class="alar-note"><h3>Vehicle match</h3><p>Sedan, SUV, sprinter, or coach based on the party size.</p></article>
            <article class="alar-note"><h3>Live desk</h3><p>Call {{ config('contact.phone_display') }} if you would rather book by phone.</p></article>
        </div>
    </div>
</section>
@endsection

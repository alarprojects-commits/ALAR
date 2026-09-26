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
        <div style="margin-top:1.5rem;">
            <div class="alar-head">
                <div>
                    <p class="alar-kicker">After you reserve</p>
                    <h2>What to expect on the booking</h2>
                </div>
            </div>
            <div class="alar-grid-3">
                <article class="alar-note"><h3>Flight tracking</h3><p>Airport pickups follow the arrival, not the printed time.</p></article>
                <article class="alar-note"><h3>Vehicle match</h3><p>Sedan, SUV, sprinter, or coach based on the party size.</p></article>
                <article class="alar-note"><h3>Live desk</h3><p>Call {{ config('contact.phone_display') }} if you would rather book by phone.</p></article>
            </div>
            <div class="alar-faq" style="margin-top:2rem;">
                <h2>Booking questions</h2>
                <details open><summary>Is the online booking a confirmed reservation?</summary><p>Submit the trip details through the booking tool. Dispatch confirms the vehicle and the rate before the chauffeur is assigned.</p></details>
                <details><summary>What should I enter for an airport pickup?</summary><p>Airline, flight number, terminal if you know it, passenger count, bags, and the street address on the other end of the trip.</p></details>
                <details><summary>Can I book by phone instead?</summary><p>Yes. Call {{ config('contact.phone_display') }} or use the contact form if the itinerary is easier to write out.</p></details>
                <details><summary>When do I see the price?</summary><p>Before the car is dispatched. Tolls and airport fees are explained with the quote so the number is not a surprise meter.</p></details>
            </div>
        </div>
    </div>
</section>
@endsection

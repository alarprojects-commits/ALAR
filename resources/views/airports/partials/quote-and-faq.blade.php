<section class="alar-section">
    <div class="alar-wrap">
        <div class="alar-head"><div><p class="alar-kicker">Quote</p><h2>How to book {{ $airport['code'] }} car service</h2></div></div>
        <div class="alar-steps">
            <article><h3>Name both doors</h3><p>Hotel, neighborhood, or terminal—not only the airport code.</p></article>
            <article><h3>Send the flight</h3><p>Airline, flight number, passengers, and bags. Meet and greet is a request, not a surprise.</p></article>
            <article><h3>Confirm the car</h3><p>We reply with the vehicle and the rate. Tolls and airport fees are explained with the quote.</p></article>
        </div>
        @if(!empty($bookingNote))
            <div class="alar-prose" style="margin-top:1.6rem;">
                <p>{!! $bookingNote !!}</p>
            </div>
        @endif
    </div>
</section>

<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <h2>Questions about {{ $airport['short'] }}</h2>
        <div class="alar-faq">
            @foreach ($faqs as $index => $faq)
                <details @if($index === 0) open @endif>
                    <summary>{{ $faq['q'] }}</summary>
                    <p>{{ $faq['a'] }}</p>
                </details>
            @endforeach
        </div>
    </div>
</section>

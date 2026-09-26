<section class="alar-section alar-paper">
    <div class="alar-wrap">
        <div class="alar-head">
            <div>
                <p class="alar-kicker">Airport guides</p>
                <h2>Detail pages by airport and state</h2>
            </div>
            <a class="alar-btn alar-btn-outline" href="{{ route('airports.index') }}">Browse all airports</a>
        </div>
        <p style="max-width:40rem;margin:-0.4rem 0 1.5rem;color:#5f5850;">Each airport has its own interactive guide—arrivals, departures, meet points, and what to send—so you only read the part that matches your flight.</p>
        <div class="alar-grid-3">
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/jfk/photo.png') }}" alt="JFK guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">JFK</div>
                    <h3>John F. Kennedy</h3>
                    <p>New York · Terminal-specific Manhattan and borough transfers.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.jfk') }}">Open JFK guide</a>
                </div>
            </article>
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/lga/photo.png') }}" alt="LGA guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">LGA</div>
                    <h3>LaGuardia</h3>
                    <p>New York · Terminal A, B, or C named on every booking.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.lga') }}">Open LGA guide</a>
                </div>
            </article>
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/ewr/photo.png') }}" alt="EWR guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">EWR</div>
                    <h3>Newark Liberty</h3>
                    <p>New Jersey · Edison desk home airport with flight tracking.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.ewr') }}">Open EWR guide</a>
                </div>
            </article>
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/hpn/photo.png') }}" alt="HPN guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">HPN</div>
                    <h3>Westchester County</h3>
                    <p>New York · White Plains regional commercial field.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.hpn') }}">Open HPN guide</a>
                </div>
            </article>
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/teb/photo.png') }}" alt="TEB guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">TEB</div>
                    <h3>Teterboro</h3>
                    <p>New Jersey · Private aviation FBO pickups.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.teb') }}">Open TEB guide</a>
                </div>
            </article>
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/lax/photo.png') }}" alt="LAX guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">LAX</div>
                    <h3>Los Angeles International</h3>
                    <p>California · Terminal-named Westside and downtown runs.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.lax') }}">Open LAX guide</a>
                </div>
            </article>
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/las/photo.png') }}" alt="LAS guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">LAS</div>
                    <h3>Harry Reid International</h3>
                    <p>Nevada · Strip resort towers and convention transfers.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.las') }}">Open LAS guide</a>
                </div>
            </article>
            <article class="alar-airport-card">
                <img src="{{ asset('assets/img/airports/sea/photo.png') }}" alt="SEA guide">
                <div class="alar-airport-card-body">
                    <div class="alar-airport-card-code">SEA</div>
                    <h3>Seattle-Tacoma</h3>
                    <p>Washington · Seattle and Bellevue with bridge buffers.</p>
                    <a class="alar-btn alar-btn-outline" href="{{ route('airports.sea') }}">Open SEA guide</a>
                </div>
            </article>
        </div>
    </div>
</section>

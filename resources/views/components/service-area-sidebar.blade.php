<div class="ve-service-sidebar">
    <div class="ve-sidebar-widget">
        <h5>Service Areas</h5>
        <ul class="ve-sidebar-links">
            <li class="{{ Request::routeIs('service-areas.index') ? 'active' : '' }}">
                <a href="{{ route('service-areas.index') }}">All Service Areas</a>
            </li>
            <li class="{{ Request::routeIs('service-area.new-jersey') ? 'active' : '' }}">
                <a href="{{ route('service-area.new-jersey') }}">New Jersey</a>
            </li>
            <li class="{{ Request::routeIs('service-area.new-york') ? 'active' : '' }}">
                <a href="{{ route('service-area.new-york') }}">New York</a>
            </li>
            <li class="{{ Request::routeIs('service-area.connecticut') ? 'active' : '' }}">
                <a href="{{ route('service-area.connecticut') }}">Connecticut</a>
            </li>
            <li class="{{ Request::routeIs('service-area.pennsylvania') ? 'active' : '' }}">
                <a href="{{ route('service-area.pennsylvania') }}">Pennsylvania</a>
            </li>
            <li class="{{ Request::routeIs('service-area.california') ? 'active' : '' }}">
                <a href="{{ route('service-area.california') }}">California</a>
            </li>
            <li class="{{ Request::routeIs('service-area.nevada') ? 'active' : '' }}">
                <a href="{{ route('service-area.nevada') }}">Nevada</a>
            </li>
            <li class="{{ Request::routeIs('service-area.washington') ? 'active' : '' }}">
                <a href="{{ route('service-area.washington') }}">Washington</a>
            </li>
        </ul>
    </div>

    <div class="ve-sidebar-widget mt-30">
        <h5>Airport Guides</h5>
        <ul class="ve-sidebar-links">
            <li><a href="{{ route('airports.index') }}">All Airports</a></li>
            <li><a href="{{ route('airports.ewr') }}">Newark (EWR)</a></li>
            <li><a href="{{ route('airports.jfk') }}">JFK</a></li>
            <li><a href="{{ route('airports.lga') }}">LaGuardia (LGA)</a></li>
            <li><a href="{{ route('airports.hpn') }}">Westchester (HPN)</a></li>
            <li><a href="{{ route('airports.teb') }}">Teterboro (TEB)</a></li>
            <li><a href="{{ route('airports.phl') }}">Philadelphia (PHL)</a></li>
            <li><a href="{{ route('airports.bdl') }}">Bradley (BDL)</a></li>
        </ul>
    </div>

    <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
        <h4 style="color: #fff; margin-bottom: 15px;">Book Your Ride</h4>
        <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Ready for a reserved chauffeur? Get a quote or book online today.</p>
        <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
        <a href="{{ route('free-quote') }}" class="ve-btn-outline" style="width: 100%; text-align: center; margin-top: 12px; display: block;">Free Quote</a>
        <p class="mt-3 mb-0" style="font-size: 14px;">
            <a href="tel:{{ config('contact.phone_tel') }}" style="color: var(--ve-gold);">{{ config('contact.phone_display') }}</a>
        </p>
    </div>
</div>

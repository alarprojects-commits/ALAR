<div class="ve-service-sidebar">
    <div class="ve-sidebar-widget">
        <h5>Airport Guides</h5>
        <ul class="ve-sidebar-links">
            <li class="{{ Request::routeIs('airports.index') ? 'active' : '' }}">
                <a href="{{ route('airports.index') }}">All Airports</a>
            </li>
            <li class="{{ Request::routeIs('airports.jfk') ? 'active' : '' }}">
                <a href="{{ route('airports.jfk') }}">JFK</a>
            </li>
            <li class="{{ Request::routeIs('airports.lga') ? 'active' : '' }}">
                <a href="{{ route('airports.lga') }}">LaGuardia (LGA)</a>
            </li>
            <li class="{{ Request::routeIs('airports.ewr') ? 'active' : '' }}">
                <a href="{{ route('airports.ewr') }}">Newark (EWR)</a>
            </li>
            <li class="{{ Request::routeIs('airports.hpn') ? 'active' : '' }}">
                <a href="{{ route('airports.hpn') }}">Westchester (HPN)</a>
            </li>
            <li class="{{ Request::routeIs('airports.teb') ? 'active' : '' }}">
                <a href="{{ route('airports.teb') }}">Teterboro (TEB)</a>
            </li>
            <li class="{{ Request::routeIs('airports.phl') ? 'active' : '' }}">
                <a href="{{ route('airports.phl') }}">Philadelphia (PHL)</a>
            </li>
            <li class="{{ Request::routeIs('airports.bdl') ? 'active' : '' }}">
                <a href="{{ route('airports.bdl') }}">Bradley (BDL)</a>
            </li>
            <li class="{{ Request::routeIs('airports.lax') ? 'active' : '' }}">
                <a href="{{ route('airports.lax') }}">Los Angeles (LAX)</a>
            </li>
            <li class="{{ Request::routeIs('airports.las') ? 'active' : '' }}">
                <a href="{{ route('airports.las') }}">Las Vegas (LAS)</a>
            </li>
            <li class="{{ Request::routeIs('airports.sea') ? 'active' : '' }}">
                <a href="{{ route('airports.sea') }}">Seattle (SEA)</a>
            </li>
        </ul>
    </div>

    <div class="ve-sidebar-widget mt-30">
        <h5>Service Areas</h5>
        <ul class="ve-sidebar-links">
            <li><a href="{{ route('service-area.new-jersey') }}">New Jersey</a></li>
            <li><a href="{{ route('service-area.new-york') }}">New York</a></li>
            <li><a href="{{ route('service-area.connecticut') }}">Connecticut</a></li>
            <li><a href="{{ route('service-area.pennsylvania') }}">Pennsylvania</a></li>
            <li><a href="{{ route('services.airport-transportation') }}">Airport Transportation</a></li>
        </ul>
    </div>

    <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
        <h4 style="color: #fff; margin-bottom: 15px;">Reserve Your Transfer</h4>
        <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Send flight details for a quoted chauffeur airport transfer.</p>
        @include('components.cta-buttons', ['variant' => 'sidebar'])
    </div>
</div>

<div class="ve-service-sidebar">
    <div class="ve-sidebar-widget">
        <h5>Other Service Areas</h5>
        <ul class="ve-sidebar-links">
            <li class="{{ Request::routeIs('service-area.new-jersey') ? 'active' : '' }}">
                <a href="{{ route('service-area.new-jersey') }}">New Jersey</a>
            </li>
            <li class="{{ Request::routeIs('service-area.new-york') ? 'active' : '' }}">
                <a href="{{ route('service-area.new-york') }}">New York</a>
            </li>
            <li class="{{ Request::routeIs('service-area.california') ? 'active' : '' }}">
                <a href="{{ route('service-area.california') }}">California</a>
            </li>
            <li class="{{ Request::routeIs('service-area.san-francisco') ? 'active' : '' }}">
                <a href="{{ route('service-area.san-francisco') }}">San Francisco</a>
            </li>
            <li class="{{ Request::routeIs('service-area.nevada') ? 'active' : '' }}">
                <a href="{{ route('service-area.nevada') }}">Nevada</a>
            </li>
            <li class="{{ Request::routeIs('service-area.seattle') ? 'active' : '' }}">
                <a href="{{ route('service-area.seattle') }}">Seattle</a>
            </li>
        </ul>
    </div>
    
    <div class="ve-sidebar-cta" style="background: var(--ve-dark); padding: 30px; border-radius: 12px; color: #fff;">
        <h4 style="color: #fff; margin-bottom: 15px;">Book Your Ride</h4>
        <p style="font-size: 14px; opacity: 0.8; margin-bottom: 20px;">Ready to experience the Alar difference? Book your professional chauffeur online today.</p>
        <a href="{{ route('book-online') }}" class="ve-btn-primary" style="width: 100%; text-align: center;">Book Online</a>
    </div>
</div>

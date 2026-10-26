<aside class="ve-sidebar">
    <!-- Service List Widget -->
    <div class="ve-sidebar-widget">
        <h4 class="ve-widget-title">Our Services</h4>
        <ul class="ve-service-list">
            <li class="{{ Request::is('services/airport-transportation') ? 'active' : '' }}">
                <a href="{{ route('services.airport-transportation') }}">
                    <i class="fa fa-plane"></i> Airport Transportation
                </a>
            </li>
            <li class="{{ Request::is('services/corporate-transportation') ? 'active' : '' }}">
                <a href="{{ route('services.corporate-transportation') }}">
                    <i class="fa fa-briefcase"></i> Corporate Transportation
                </a>
            </li>
            <li class="{{ Request::is('services/hourly-limo') ? 'active' : '' }}">
                <a href="{{ route('services.hourly-limo') }}">
                    <i class="fa fa-clock-o"></i> Hourly Limo
                </a>
            </li>
            <li class="{{ Request::is('services/wedding-limo') ? 'active' : '' }}">
                <a href="{{ route('services.wedding-limo') }}">
                    <i class="fa fa-heart"></i> Wedding Limo
                </a>
            </li>
            <li class="{{ Request::is('services/prom-limo') ? 'active' : '' }}">
                <a href="{{ route('services.prom-limo') }}">
                    <i class="fa fa-graduation-cap"></i> Prom Limo
                </a>
            </li>
            <li class="{{ Request::is('services/sporting-events') ? 'active' : '' }}">
                <a href="{{ route('services.sporting-events') }}">
                    <i class="fa fa-ticket"></i> Sporting Events
                </a>
            </li>
            <li class="{{ Request::is('services/group-transportation') ? 'active' : '' }}">
                <a href="{{ route('services.group-transportation') }}">
                    <i class="fa fa-users"></i> Group Transportation
                </a>
            </li>
            <li class="{{ Request::is('services/concert-festival') ? 'active' : '' }}">
                <a href="{{ route('services.concert-festival') }}">
                    <i class="fa fa-music"></i> Concerts & Festivals
                </a>
            </li>
            <li class="{{ Request::is('services/party-bus') ? 'active' : '' }}">
                <a href="{{ route('services.party-bus') }}">
                    <i class="fa fa-bus"></i> Party Buses
                </a>
            </li>
            <li class="{{ Request::is('services/cruise-port-transfers') ? 'active' : '' }}">
                <a href="{{ route('services.cruise-port-transfers') }}">
                    <i class="fa fa-ship"></i> Cruise Port Transfers
                </a>
            </li>
            <li class="{{ Request::is('services/chauffeured-service') ? 'active' : '' }}">
                <a href="{{ route('services.chauffeured-service') }}">
                    <i class="fa fa-car"></i> Chauffeured Service
                </a>
            </li>
        </ul>
    </div>

    <div class="ve-sidebar-widget">
        <h4 class="ve-widget-title">Airports & Areas</h4>
        <ul class="ve-service-list">
            <li>
                <a href="{{ route('airports.index') }}">
                    <i class="fa fa-plane"></i> Airport Guides
                </a>
            </li>
            <li>
                <a href="{{ route('airports.jfk') }}">
                    <i class="fa fa-map-marker"></i> JFK Car Service
                </a>
            </li>
            <li>
                <a href="{{ route('airports.ewr') }}">
                    <i class="fa fa-map-marker"></i> Newark (EWR)
                </a>
            </li>
            <li>
                <a href="{{ route('airports.lga') }}">
                    <i class="fa fa-map-marker"></i> LaGuardia (LGA)
                </a>
            </li>
            <li>
                <a href="{{ route('service-area.new-jersey') }}">
                    <i class="fa fa-building"></i> New Jersey Coverage
                </a>
            </li>
            <li>
                <a href="{{ route('our-fleet') }}">
                    <i class="fa fa-car"></i> Our Fleet
                </a>
            </li>
        </ul>
    </div>

    <!-- Contact Widget -->
    <div class="ve-sidebar-widget ve-contact-widget text-center"
        style="background-image: url('{{ asset('assets/img/banner/cta-bg.webp') }}');">
        <div class="ve-contact-widget-overlay"></div>
        <div class="ve-contact-widget-content">
            <i class="fa fa-phone"></i>
            <h4>Need a Ride?</h4>
            <p>Ready to experience the Alar difference? Call us today for a quick quote.</p>
            <a href="tel:{{ config('contact.phone_tel') }}"
                class="ve-btn-primary w-100 d-flex align-items-center justify-content-center gap-2">
                Call Now
            </a>
        </div>
    </div>

    <!-- Booking Widget -->
    <div class="ve-sidebar-widget ve-book-widget">
        <h4 class="ve-widget-title">Book With Us</h4>
        <p>Save time by booking online, requesting a free quote, or calling our desk.</p>
        @include('components.cta-buttons', ['variant' => 'sidebar-light'])
    </div>
</aside>

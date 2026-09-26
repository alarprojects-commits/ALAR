<header class="alar-header">
    <div class="alar-wrap alar-nav">
        <a class="alar-logo" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Alar Chauffeur Service">
        </a>
        <ul class="alar-menu">
            <li><a class="{{ request()->routeIs('home') ? 'is-on' : '' }}" href="{{ route('home') }}">Home</a></li>
            <li><a class="{{ request()->routeIs('book-online') ? 'is-on' : '' }}" href="{{ route('book-online') }}">Book Online</a></li>
            <li><a class="{{ request()->routeIs('about-us') ? 'is-on' : '' }}" href="{{ route('about-us') }}">About</a></li>
            <li><a class="{{ request()->routeIs('our-services') || request()->routeIs('services.*') ? 'is-on' : '' }}" href="{{ route('our-services') }}">Services</a></li>
            <li><a class="{{ request()->routeIs('our-fleet') ? 'is-on' : '' }}" href="{{ route('our-fleet') }}">Fleet</a></li>
            <li class="alar-drop">
                <button type="button" class="{{ request()->routeIs('service-areas.*') || request()->routeIs('service-area.*') ? 'is-on' : '' }}">Service Areas</button>
                <ul class="alar-drop-list">
                    <li><a href="{{ route('service-areas.index') }}">All service areas</a></li>
                    <li><a href="{{ route('service-area.new-jersey') }}">New Jersey</a></li>
                    <li><a href="{{ route('service-area.new-york') }}">New York</a></li>
                    <li><a href="{{ route('service-area.california') }}">California</a></li>
                    <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                    <li><a href="{{ route('service-area.washington') }}">Washington</a></li>
                </ul>
            </li>
            <li class="alar-drop">
                <button type="button" class="{{ request()->routeIs('airports.*') ? 'is-on' : '' }}">Airports</button>
                <ul class="alar-drop-list">
                    <li><a href="{{ route('airports.index') }}">All airports</a></li>
                    <li><a href="{{ route('airports.jfk') }}">JFK</a></li>
                    <li><a href="{{ route('airports.lga') }}">LaGuardia</a></li>
                    <li><a href="{{ route('airports.ewr') }}">Newark EWR</a></li>
                    <li><a href="{{ route('airports.lax') }}">LAX</a></li>
                    <li><a href="{{ route('airports.las') }}">Harry Reid LAS</a></li>
                    <li><a href="{{ route('airports.sea') }}">Sea-Tac SEA</a></li>
                </ul>
            </li>
            <li><a class="{{ request()->routeIs('blog') || request()->routeIs('blog.*') ? 'is-on' : '' }}" href="{{ route('blog') }}">Blog</a></li>
            <li><a class="{{ request()->routeIs('contact-us') ? 'is-on' : '' }}" href="{{ route('contact-us') }}">Contact</a></li>
        </ul>
        <div class="alar-nav-side">
            <a class="alar-phone" href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a>
            <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
        </div>
        <button class="alar-burger" type="button" id="alar-burger" aria-label="Open menu" aria-expanded="false">&#9776;</button>
    </div>
    <div class="alar-drawer" id="alar-drawer">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('book-online') }}">Book Online</a>
        <a href="{{ route('about-us') }}">About</a>
        <a href="{{ route('our-services') }}">Services</a>
        <a href="{{ route('our-fleet') }}">Fleet</a>
        <button type="button" id="alar-areas-toggle">Service Areas</button>
        <div class="alar-sub" id="alar-areas">
            <a href="{{ route('service-areas.index') }}">All service areas</a>
            <a href="{{ route('service-area.new-jersey') }}">New Jersey</a>
            <a href="{{ route('service-area.new-york') }}">New York</a>
            <a href="{{ route('service-area.california') }}">California</a>
            <a href="{{ route('service-area.nevada') }}">Nevada</a>
            <a href="{{ route('service-area.washington') }}">Washington</a>
        </div>
        <button type="button" id="alar-airports-toggle">Airports</button>
        <div class="alar-sub" id="alar-airports">
            <a href="{{ route('airports.index') }}">All airports</a>
            <a href="{{ route('airports.jfk') }}">JFK</a>
            <a href="{{ route('airports.lga') }}">LaGuardia</a>
            <a href="{{ route('airports.ewr') }}">Newark EWR</a>
            <a href="{{ route('airports.hpn') }}">Westchester HPN</a>
            <a href="{{ route('airports.teb') }}">Teterboro TEB</a>
            <a href="{{ route('airports.lax') }}">LAX</a>
            <a href="{{ route('airports.las') }}">Harry Reid LAS</a>
            <a href="{{ route('airports.sea') }}">Sea-Tac SEA</a>
        </div>
        <a href="{{ route('blog') }}">Blog</a>
        <a href="{{ route('contact-us') }}">Contact</a>
        <a href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a>
    </div>
</header>

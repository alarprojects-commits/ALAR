    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <!-- Logo -->
            <div class="ve-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                </a>
            </div>
            <!-- Nav Links -->
            <nav class="ve-nav">
                <ul>
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ request()->routeIs('book-online') ? 'active' : '' }}"><a href="{{ route('book-online') }}">Book Online</a></li>
                    <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">About us</a></li>
                    <li class="{{ request()->routeIs('our-services') ? 'active' : '' }}"><a href="{{ route('our-services') }}">Our Services</a></li>
                    <li class="{{ request()->routeIs('our-fleet') ? 'active' : '' }}"><a href="{{ route('our-fleet') }}">Our Fleet</a></li>
                    <li class="has-drop">
                        <a href="#">Service Areas <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="{{ route('service-area.new-jersey') }}">New Jersey</a></li>
                            <li><a href="{{ route('service-area.new-york') }}">New York</a></li>
                            <li><a href="{{ route('service-area.california') }}">California</a></li>
                            <li><a href="{{ route('service-area.san-francisco') }}">San Francisco</a></li>
                            <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                            <li><a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                        </ul>
                    </li>
                    <li class="{{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                    <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
                </ul>
            </nav>
            <!-- CTA -->
            <div class="ve-nav-cta">
                <a href="{{ route('book-online') }}" class="ve-cta-btn"><i class="fa fa-quote-right"></i> Get A Quote</a>
                <a href="tel:{{ config('contact.phone_tel') }}" class="ve-cta-btn"><i class="fa fa-phone"></i> Call Now</a>
            </div>
            <!-- Mobile Toggle -->
            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="ve-mobile-menu" id="ve-mobile-menu">
            <div class="ve-mobile-menu-header">
                <a href="{{ route('home') }}" class="ve-mobile-logo">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Alar Chauffeur Service">
                </a>
                <button class="ve-mobile-close" id="ve-mobile-close">&times;</button>
            </div>
            <ul>
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ request()->routeIs('book-online') ? 'active' : '' }}"><a href="{{ route('book-online') }}">Book Online</a></li>
                <li class="{{ request()->routeIs('about-us') ? 'active' : '' }}"><a href="{{ route('about-us') }}">About us</a></li>
                <li class="{{ request()->routeIs('our-services') || request()->routeIs('services.*') ? 'active' : '' }}"><a href="{{ route('our-services') }}">Our Services</a></li>
                <li class="{{ request()->routeIs('our-fleet') ? 'active' : '' }}"><a href="{{ route('our-fleet') }}">Our Fleet</a></li>
                <li class="ve-mobile-accordion {{ request()->routeIs('service-area.*') ? 'active' : '' }}">
                    <button class="ve-mobile-accordion-toggle" type="button" aria-expanded="false">
                        <span>Service Areas</span>
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="ve-mobile-dropdown">
                        <li><a href="{{ route('service-area.new-jersey') }}">New Jersey</a></li>
                        <li><a href="{{ route('service-area.new-york') }}">New York</a></li>
                        <li><a href="{{ route('service-area.california') }}">California</a></li>
                        <li><a href="{{ route('service-area.san-francisco') }}">Luxury Limo Service in San Francisco</a></li>
                        <li><a href="{{ route('service-area.nevada') }}">Nevada</a></li>
                        <li><a href="{{ route('service-area.seattle') }}">Seattle</a></li>
                    </ul>
                </li>
                <li class="{{ request()->routeIs('contact-us') ? 'active' : '' }}"><a href="{{ route('contact-us') }}">Contact us</a></li>
            </ul>
            <div class="ve-mobile-contact">
                <p><a href="tel:{{ config('contact.phone_tel') }}"><i class="fa fa-phone"></i> {{ config('contact.phone_display') }}</a></p>
                <p><a href="mailto:{{ config('contact.email') }}"><i class="fa fa-envelope"></i> {{ config('contact.email') }}</a></p>
                <div class="ve-mobile-social">
                    <a href="https://www.facebook.com/profile.php?id=61581788001748" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://x.com/Alar_chauffeur" target="_blank" rel="noopener noreferrer" aria-label="X"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/alar_chauffeur_service/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/alar-chauffeur-services-415862383" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </header>

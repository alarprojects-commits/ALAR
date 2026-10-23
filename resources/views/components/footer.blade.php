<!-- ===== FOOTER (dark, 4-column) ===== -->
<footer class="ve-footer">
    <div class="container">
        <div class="row">
            <!-- Col 1: Brand -->
            <div class="col-12 col-sm-6 col-lg-4 mb-50">
                <div class="ve-footer-brand">
                    <a href="{{ route('home') }}" class="ve-footer-logo">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Alar Chauffeur Service Logo">
                    </a>
                    <p>Premium limousine and luxury chauffeur services. Providing elegant, reliable, and safe
                        transportation since 2012.</p>
                    <div class="ve-social">
                        <a href="https://www.facebook.com/profile.php?id=61581788001748" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/alar_chauffeur_service/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i
                                class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <!-- Col 2: Explore -->
            <div class="col-12 col-sm-6 col-lg-2 mb-50">
                <h5 class="ve-footer-title">Explore</h5>
                <ul class="ve-footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('book-online') }}">Book Online</a></li>
                    <li><a href="{{ route('free-quote') }}">Free Quote</a></li>
                    <li><a href="{{ route('about-us') }}">About us</a></li>
                    <li><a href="{{ route('our-services') }}">Our Services</a></li>
                    <li><a href="{{ route('service-areas.index') }}">Service Areas</a></li>
                    <li><a href="{{ route('airports.index') }}">Airport Guides</a></li>
                    <li><a href="{{ route('our-fleet') }}">Our Fleet</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact us</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- Col 3: Services -->
            <div class="col-12 col-sm-6 col-lg-3 mb-50">
                <h5 class="ve-footer-title">Our Services</h5>
                <ul class="ve-footer-links">
                    <li><a href="{{ route('services.airport-transportation') }}">Airport Transportation</a></li>
                    <li><a href="{{ route('services.corporate-transportation') }}">Corporate Transportation</a></li>
                    <li><a href="{{ route('services.wedding-limo') }}">Wedding Limo</a></li>
                    <li><a href="{{ route('services.hourly-limo') }}">Hourly Limo</a></li>
                    <li><a href="{{ route('services.chauffeured-service') }}">Chauffeured Service</a></li>
                    <li><a href="{{ route('services.cruise-port-transfers') }}">Cruise Port Transfers</a></li>
                    <li><a href="{{ route('airports.ewr') }}">Newark Airport Car Service</a></li>
                    <li><a href="{{ route('airports.jfk') }}">JFK Airport Car Service</a></li>
                    <li><a href="{{ route('airports.lga') }}">LaGuardia Car Service</a></li>
                </ul>
            </div>
            <!-- Col 4: Contact -->
            <div class="col-12 col-sm-6 col-lg-3 mb-50">
                <h5 class="ve-footer-title">Get In Touch</h5>
                <ul class="ve-footer-contact">
                    <li><a href="https://www.google.com/maps/search/?api=1&query={{ urlencode(config('contact.location')) }}"
                            target="_blank"><i class="fa fa-map-marker"></i> {{ config('contact.location') }}</a></li>
                    <li><a href="tel:{{ config('contact.phone_tel') }}"><i class="fa fa-phone"></i>
                            {{ config('contact.phone_display') }}</a></li>
                    <li><a href="mailto:{{ config('contact.email') }}"><i class="fa fa-envelope"></i>
                            {{ config('contact.email') }}</a></li>
                    <li><i class="fa fa-clock-o"></i> 24/7</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="ve-footer-bottom">
        <div class="container">
            <div class="ve-footer-bottom-inner text-white text-center justify-content-center">
                <p>&copy; {{ date('Y') }} <a href="{{ route('home') }}" style="color: #fff; text-decoration: none;">Alar Chauffeur Service</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

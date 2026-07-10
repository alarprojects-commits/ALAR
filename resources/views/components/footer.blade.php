<!-- ===== FOOTER (dark, 4-column) ===== -->
<footer class="ve-footer">
    <div class="container">
        <div class="row">
            <!-- Col 1: Brand -->
            <div class="col-12 col-sm-6 col-lg-4 mb-50">
                <div class="ve-footer-brand">
                    <a href="{{ route('home') }}" class="ve-footer-logo">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                    </a>
                    <p>Premium limousine and luxury chauffeur services. Providing elegant, reliable, and safe
                        transportation since 2012.</p>
                    <div class="ve-social">
                        <a href="https://www.facebook.com/profile.php?id=61581788001748" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://x.com/Alar_chauffeur" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/alar_chauffeur_service/" target="_blank"><i
                                class="fa fa-instagram"></i></a>
                        <a href="https://www.scoop.it/u/alar-chauffeur-service" target="_blank"><i
                                class="fa fa-link"></i></a>
                        <a href="https://www.linkedin.com/in/alar-chauffeur-services-415862383" target="_blank"><i
                                class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <!-- Col 2: Quick Links -->
            <div class="col-12 col-sm-6 col-lg-2 mb-50">
                <h5 class="ve-footer-title">Quick Links</h5>
                <ul class="ve-footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('book-online') }}">Book Online</a></li>
                    <li><a href="{{ route('about-us') }}">About us</a></li>
                    <li><a href="{{ route('our-services') }}">Our Services</a></li>
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
                    <li><a href="{{ route('services.prom-limo') }}">Prom Limo</a></li>
                    <li><a href="{{ route('services.sporting-events') }}">Sporting Events</a></li>
                    <li><a href="{{ route('services.fifa-world-cup-2026-transportation') }}">FIFA World Cup 2026</a></li>
                    <li><a href="{{ route('services.group-transportation') }}">Group Transportation</a></li>
                    <li><a href="{{ route('services.concert-festival') }}">Concerts & Festivals</a></li>
                    <li><a href="{{ route('services.party-bus') }}">Party Buses</a></li>
                    <li><a href="{{ route('services.cruise-port-transfers') }}">Cruise Port Transfers</a></li>
                    <li><a href="{{ route('services.chauffeured-service') }}">Chauffeured Service</a></li>
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
                    <li><a href="tel:{{ config('contact.phone_2_tel') }}"><i class="fa fa-phone"></i>
                            {{ config('contact.phone_2_display') }}</a></li>
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
                <p>&copy; {{ date('Y') }} <a href="{{ route('home') }}" style="color: #fff; text-decoration: none;">Alar Chauffeur Service</a>. All Rights Reserved. Designed By <a href="https://shaheer-siddiqi.vercel.app/" target="_blank" style="color: rgba(255, 255, 255, 0.35); text-decoration: none; font-weight: 600;">Shaheer Siddiqi</a></p>
            </div>
        </div>
    </div>
</footer>

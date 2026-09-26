<footer class="alar-footer">
    <div class="alar-wrap alar-footer-grid">
        <div>
            <img class="alar-footer-logo" src="{{ asset('assets/img/logo/logo.png') }}" alt="Alar Chauffeur Service">
            <p>Luxury chauffeur service for airport transfers, corporate travel, weddings, and private events across New Jersey, New York, and select cities.</p>
            <div class="alar-social">
                <a href="https://www.facebook.com/profile.php?id=61581788001748" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://x.com/Alar_chauffeur" target="_blank" rel="noopener noreferrer" aria-label="X"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/alar_chauffeur_service/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/alar-chauffeur-services-415862383" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div>
            <h2>Explore</h2>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li><a href="{{ route('our-services') }}">Services</a></li>
                <li><a href="{{ route('our-fleet') }}">Fleet</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('book-online') }}">Book Online</a></li>
                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
            </ul>
        </div>
        <div>
            <h2>Services</h2>
            <ul>
                <li><a href="{{ route('services.airport-transportation') }}">Airport Transportation</a></li>
                <li><a href="{{ route('airports.index') }}">Airport Guides</a></li>
                <li><a href="{{ route('services.corporate-transportation') }}">Corporate Transportation</a></li>
                <li><a href="{{ route('services.wedding-limo') }}">Wedding Limo</a></li>
                <li><a href="{{ route('services.hourly-limo') }}">Hourly Limo</a></li>
                <li><a href="{{ route('services.chauffeured-service') }}">Chauffeured Service</a></li>
                <li><a href="{{ route('services.party-bus') }}">Party Bus</a></li>
                <li><a href="{{ route('our-services') }}">View all services</a></li>
            </ul>
        </div>
        <div>
            <h2>Contact</h2>
            <ul>
                <li><a href="https://www.google.com/maps/search/?api=1&query={{ urlencode(config('contact.location')) }}" target="_blank" rel="noopener noreferrer">{{ config('contact.location') }}</a></li>
                <li><a href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a></li>
                <li><a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a></li>
                <li>Dispatch open 24/7</li>
            </ul>
        </div>
    </div>
    <div class="alar-footer-bar">&copy; {{ date('Y') }} Alar Chauffeur Service. All rights reserved.</div>
</footer>

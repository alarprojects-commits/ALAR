<aside class="ve-sidebar">

    <!-- Recent Blogs Widget -->
    <div class="ve-sidebar-widget">
        <h4 class="ve-widget-title">Recent Blogs</h4>
        <ul class="ve-service-list">
            <li class="{{ Request::is('blog/luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey') ? 'active' : '' }}">
                <a href="{{ route('blog.luxury-chauffeur-service-for-fifa-2026-in-nyc-new-jersey') }}">
                    Luxury Chauffeur for FIFA 2026
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
        <h4 class="ve-widget-title">Book Online</h4>
        <p>Save time by booking your luxury transportation through our secure online portal.</p>
        <a href="{{ route('book-online') }}" class="ve-btn-ghost-dark w-100">Reserve Now</a>
    </div>
</aside>

<style>
/* Sidebar Search Box Styling to match theme */
.ve-search-box {
    display: flex;
    border: 1px solid var(--ve-border, #e2e8f0);
    border-radius: 8px;
    overflow: hidden;
}
.ve-search-box input {
    flex: 1;
    border: none;
    padding: 12px 14px;
    font-size: 14px;
    outline: none;
    font-family: "DM Sans", sans-serif;
}
.ve-search-box button {
    background: var(--ve-gold, #ad8b24);
    border: none;
    padding: 0 18px;
    cursor: pointer;
    color: #fff;
    font-size: 14px;
    transition: all 0.3s ease;
}
.ve-search-box button:hover {
    background: var(--ve-dark, #0d1b2a);
}

/* Ensure blog list items are clean without icons */
.ve-sidebar .ve-service-list li a {
    padding-left: 20px; /* Consistent padding without icons */
}
/* Fix for the active state text color shown in user's screenshot */
.ve-sidebar .ve-service-list li.active a {
    color: #fff !important;
}
</style>

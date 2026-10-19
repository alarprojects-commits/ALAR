<!-- ===== CTA BANNER ===== -->
<section class="ve-cta-banner bg-img" style="background-image:url({{ asset('assets/img/cta/cta.jpg') }});">
    <div class="ve-cta-overlay"></div>
    <div class="container ve-cta-content">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <h2>Ready to Experience <span>True Luxury?</span></h2>
                <p>Book online, request a free quote, or call us for your next trip or special event.</p>
            </div>
            <div class="col-12 col-lg-6 text-lg-right">
                @include('components.cta-buttons', ['variant' => 'banner'])
            </div>
        </div>
    </div>
</section>

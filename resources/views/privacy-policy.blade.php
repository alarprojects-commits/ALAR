@extends('main')
@section('meta_title', 'Privacy Policy | Alar Chauffeur Service')
@section('meta_description', 'Privacy Policy for Alar Chauffeur Service. Learn how we collect, use, disclose, and protect your personal information, including our SMS messaging program.')
@section('content')
<style>
    .ve-privacy-content a {
        color: var(--ve-gold);
        font-weight: 600;
        text-decoration: none;
        transition: var(--ve-trans);
    }
    .ve-privacy-content a:hover {
        text-decoration: underline;
    }
</style>

<section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/about-us.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Trust & Security</span>
        <h1>Privacy <span>Policy</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Privacy Policy</li>
            </ol>
        </nav>
    </div>
</section>

<section class="ve-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="ve-privacy-content" style="color: var(--ve-dark); line-height: 1.8;">
                    <h2 class="mb-2">Privacy Policy</h2>
                    <p class="text-muted mb-4"><strong>Effective Date:</strong> May 18, 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> May 18, 2026</p>

                    <p>
                        This Privacy Policy describes how <strong>Alar Chauffeur Service</strong> ("Alar Chauffeur," "we," "us," or "our")
                        collects, uses, discloses, and protects personal information when you visit
                        <a href="{{ url('/') }}">{{ parse_url(url('/'), PHP_URL_HOST) }}</a>,
                        use our online forms, book transportation services, or communicate with us by phone, email, or text message.
                    </p>
                    <p>
                        By using our website or services, you agree to the practices described in this Privacy Policy.
                        If you do not agree, please do not use our website or services.
                    </p>

                    <h4 class="mt-5 mb-3">1. Information We Collect</h4>
                    <p>We may collect the following categories of personal information:</p>
                    <ul>
                        <li><strong>Identifiers and contact information:</strong> Name, email address, telephone number, billing address, and company name (if provided).</li>
                        <li><strong>Booking and service information:</strong> Pickup and drop-off locations, travel dates and times, passenger details, vehicle preferences, flight information, and special instructions.</li>
                        <li><strong>Payment information:</strong> Credit card or other payment details processed by our secure payment processors. We do not store full payment card numbers on our servers.</li>
                        <li><strong>Communications:</strong> Messages you send through contact forms, email, phone calls, or SMS/text messages.</li>
                        <li><strong>Technical and usage data:</strong> IP address, browser type, device information, referring URLs, pages viewed, and similar analytics data collected through cookies and similar technologies.</li>
                        <li><strong>SMS opt-in records:</strong> Mobile phone number, consent timestamp, and the method by which you opted in (for example, website checkbox).</li>
                    </ul>

                    <h4 class="mt-5 mb-3">2. How We Use Your Information</h4>
                    <p>We use personal information for legitimate business purposes, including to:</p>
                    <ul>
                        <li>Process reservations and provide chauffeur and limousine services.</li>
                        <li>Communicate about bookings, dispatch updates, customer support, and service changes.</li>
                        <li>Process payments, issue receipts, and prevent fraud.</li>
                        <li>Send service-related and promotional communications where permitted by law and where you have provided consent.</li>
                        <li>Improve our website, fleet operations, and customer experience.</li>
                        <li>Comply with legal obligations and enforce our terms and policies.</li>
                    </ul>

                    <h4 class="mt-5 mb-3">3. Cookies and Similar Technologies</h4>
                    <p>
                        We use cookies and similar tracking technologies to operate our website, remember preferences,
                        measure traffic, and understand how visitors use our pages. You may control cookies through your
                        browser settings. Disabling cookies may affect certain website features.
                    </p>

                    <h4 class="mt-5 mb-3">4. How We Share Information</h4>
                    <p>We do not sell your personal information. We may share information with:</p>
                    <ul>
                        <li><strong>Service providers:</strong> Payment processors, booking/dispatch platforms, hosting providers, email delivery services, and analytics vendors that help us operate our business under confidentiality obligations.</li>
                        <li><strong>Professional advisors:</strong> Lawyers, accountants, or insurers when reasonably necessary.</li>
                        <li><strong>Legal and safety purposes:</strong> When required by law, court order, or governmental request, or to protect the rights, property, or safety of Alar Chauffeur Service, our customers, or others.</li>
                        <li><strong>Business transfers:</strong> In connection with a merger, acquisition, or sale of assets, subject to appropriate safeguards.</li>
                    </ul>
                    <p>
                        <strong>SMS opt-in data:</strong>
                        No mobile information or SMS consent obtained through our website will be shared with third parties
                        or affiliates for their own marketing purposes. Text messaging originator opt-in data and consent
                        will not be shared with third parties except as needed to deliver messages through our messaging provider.
                    </p>

                    <h4 class="mt-5 mb-3">5. Data Retention</h4>
                    <p>
                        We retain personal information only as long as necessary to fulfill the purposes described in this
                        Privacy Policy, including providing services, maintaining business records, resolving disputes,
                        and meeting legal, tax, and regulatory requirements.
                    </p>

                    <h4 class="mt-5 mb-3">6. Data Security</h4>
                    <p>
                        We implement administrative, technical, and physical safeguards designed to protect personal information.
                        No method of transmission over the Internet or electronic storage is completely secure, and we cannot
                        guarantee absolute security.
                    </p>

                    <h4 class="mt-5 mb-3">7. Your Privacy Rights</h4>
                    <p>
                        Depending on your location, you may have rights to access, correct, delete, or restrict certain uses
                        of your personal information, and to opt out of certain marketing communications. To exercise these rights,
                        contact us using the information in Section 10. We will respond in accordance with applicable law.
                    </p>
                    <p>
                        California residents may have additional rights under the California Consumer Privacy Act (CCPA/CPRA),
                        including the right to know, delete, and correct personal information, and to opt out of certain sharing.
                        We do not sell personal information as defined under California law.
                    </p>

                    <h4 class="mt-5 mb-3">8. Children's Privacy</h4>
                    <p>
                        Our services are not directed to children under 13, and we do not knowingly collect personal information
                        from children under 13. If you believe we have collected information from a child under 13, please contact us
                        so we can delete it.
                    </p>

                    <h4 class="mt-5 mb-3">9. Third-Party Websites</h4>
                    <p>
                        Our website may contain links to third-party websites or embedded booking tools operated by third parties.
                        This Privacy Policy does not apply to those third-party sites. We encourage you to review their privacy policies.
                    </p>

                    <h4 class="mt-5 mb-3" id="sms-terms">10. SMS/Text Messaging Program Terms</h4>
                    <p>
                        If you opt in to receive SMS/text messages from Alar Chauffeur Service, the following terms apply in addition
                        to this Privacy Policy:
                    </p>
                    <ul>
                        <li><strong>Consent:</strong> You opt in by checking the consent box on our <a href="{{ route('contact-us') }}">contact page</a> and providing your mobile number. Consent is not a condition of purchase.</li>
                        <li><strong>Message frequency:</strong> Message frequency varies based on your bookings and interactions with us.</li>
                        <li><strong>Costs:</strong> Message and data rates may apply. Contact your wireless carrier for details about your plan.</li>
                        <li><strong>Opt-out:</strong> You can cancel SMS messages at any time by replying <strong>STOP</strong> to any message. After you text STOP, we may send a one-time confirmation that you have been unsubscribed.</li>
                        <li><strong>Help:</strong> Reply <strong>HELP</strong> for assistance or email <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>.</li>
                        <li><strong>Carrier liability:</strong> Wireless carriers are not liable for delayed or undelivered messages.</li>
                        <li><strong>Supported carriers:</strong> Carriers are not responsible for delayed or undelivered messages. Delivery is subject to your carrier network.</li>
                    </ul>

                    <h4 class="mt-5 mb-3">11. Changes to This Privacy Policy</h4>
                    <p>
                        We may update this Privacy Policy from time to time. The "Last Updated" date at the top of this page
                        indicates when the policy was last revised. Continued use of our services after changes are posted
                        constitutes acceptance of the updated policy.
                    </p>

                    <h4 class="mt-5 mb-3">12. Contact Us</h4>
                    <p>If you have questions about this Privacy Policy or our privacy practices, contact us:</p>
                    <p>
                        <strong>Alar Chauffeur Service</strong><br>
                        {{ config('contact.location') }}<br>
                        Phone: <a href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a><br>
                        Email: <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>

@include('components.cta')

@endsection

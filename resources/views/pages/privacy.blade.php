@extends('layouts.app')
@section('meta_title', 'Privacy Policy | Alar Chauffeur Service')
@section('meta_description', 'Privacy Policy for Alar Chauffeur Service. Learn how we collect, use, disclose, and protect your personal information, including our SMS messaging program.')
@section('og_image', asset('assets/img/pages/privacy.png'))

@section('content')
@include('components.page-banner', ['image' => asset('assets/img/pages/privacy.png'), 'kicker' => 'Privacy', 'title' => 'Privacy policy', 'crumb' => 'Privacy Policy'])
<section class="alar-section">
    <div class="alar-wrap alar-prose">
        <p><strong>Effective Date:</strong> May 18, 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> May 18, 2026</p>
        <p>This Privacy Policy describes how <strong>Alar Chauffeur Service</strong> ("Alar Chauffeur," "we," "us," or "our") collects, uses, discloses, and protects personal information when you visit <a href="{{ url('/') }}">{{ parse_url(url('/'), PHP_URL_HOST) }}</a>, use our online forms, book transportation services, or communicate with us by phone, email, or text message.</p>
        <p>By using our website or services, you agree to the practices described in this Privacy Policy. If you do not agree, please do not use our website or services.</p>
        <h2>1. Information We Collect</h2>
        <ul>
            <li><strong>Identifiers and contact information:</strong> Name, email address, telephone number, billing address, and company name (if provided).</li>
            <li><strong>Booking and service information:</strong> Pickup and drop-off locations, travel dates and times, passenger details, vehicle preferences, flight information, and special instructions.</li>
            <li><strong>Payment information:</strong> Credit card or other payment details processed by our secure payment processors. We do not store full payment card numbers on our servers.</li>
            <li><strong>Communications:</strong> Messages you send through contact forms, email, phone calls, or SMS/text messages.</li>
            <li><strong>Technical and usage data:</strong> IP address, browser type, device information, referring URLs, pages viewed, and similar analytics data collected through cookies and similar technologies.</li>
            <li><strong>SMS opt-in records:</strong> Mobile phone number, consent timestamp, and the method by which you opted in (for example, website checkbox).</li>
        </ul>
        <h2>2. How We Use Your Information</h2>
        <ul>
            <li>Process reservations and provide chauffeur and limousine services.</li>
            <li>Communicate about bookings, dispatch updates, customer support, and service changes.</li>
            <li>Process payments, issue receipts, and prevent fraud.</li>
            <li>Send service-related and promotional communications where permitted by law and where you have provided consent.</li>
            <li>Improve our website, fleet operations, and customer experience.</li>
            <li>Comply with legal obligations and enforce our terms and policies.</li>
        </ul>
        <h2>3. Cookies and Similar Technologies</h2>
        <p>We use cookies and similar tracking technologies to operate our website, remember preferences, measure traffic, and understand how visitors use our pages. You may control cookies through your browser settings. Disabling cookies may affect certain website features.</p>
        <h2>4. How We Share Information</h2>
        <p>We do not sell your personal information. We may share information with service providers (payment processors, booking platforms, hosting, email, and analytics), professional advisors, authorities when required by law, and parties to a business transfer. No mobile information or SMS consent obtained through our website will be shared with third parties or affiliates for their own marketing purposes.</p>
        <h2>5. Data Retention</h2>
        <p>We retain personal information only as long as necessary to provide services, keep business records, resolve disputes, and meet legal requirements.</p>
        <h2>6. Data Security</h2>
        <p>We use administrative, technical, and physical safeguards designed to protect personal information. No method of transmission or storage is completely secure.</p>
        <h2>7. Your Privacy Rights</h2>
        <p>Depending on your location, you may have rights to access, correct, delete, or restrict certain uses of your personal information. California residents may have additional rights under the CCPA/CPRA. We do not sell personal information as defined under California law. Contact us using the details in Section 10.</p>
        <h2>8. Children's Privacy</h2>
        <p>Our services are not directed to children under 13, and we do not knowingly collect personal information from children under 13.</p>
        <h2>9. Third-Party Websites</h2>
        <p>Our website may link to third-party sites or embedded booking tools. This policy does not cover those sites.</p>
        <h2 id="sms-terms">10. SMS/Text Messaging Program Terms</h2>
        <ul>
            <li><strong>Consent:</strong> You opt in by checking the consent box on our <a href="{{ route('contact-us') }}">contact page</a>. Consent is not a condition of purchase.</li>
            <li><strong>Message frequency:</strong> Frequency varies with your bookings.</li>
            <li><strong>Costs:</strong> Message and data rates may apply.</li>
            <li><strong>Opt-out:</strong> Reply STOP to cancel. We may send one confirmation.</li>
            <li><strong>Help:</strong> Reply HELP or email <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>.</li>
            <li><strong>Carriers:</strong> Wireless carriers are not liable for delayed or undelivered messages.</li>
        </ul>
        <h2>11. Changes to This Privacy Policy</h2>
        <p>We may update this policy. The Last Updated date shows the latest revision. Continued use after changes are posted means you accept the update.</p>
        <h2>12. Contact Us</h2>
        <p><strong>Alar Chauffeur Service</strong><br>{{ config('contact.location') }}<br>Phone: <a href="tel:{{ config('contact.phone_tel') }}">{{ config('contact.phone_display') }}</a><br>Email: <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a></p>
        <h2>Plain answers about this policy</h2>
        <p>People open this page for a few practical questions, not for a tour of the company. Those questions are answered here in ordinary language. The numbered sections above are the policy. This part does not add new uses of your information.</p>
        <p>If you send a ride request through the <a href="{{ route('contact-us') }}">contact form</a> or the <a href="{{ route('book-online') }}">booking page</a>, we use your name, phone, email, and trip details to quote and dispatch that ride. A flight number is used to watch the arrival. An address is used to send the chauffeur. We do not need your account passwords, and you should not put them in a message. Payment details, when a booking tool collects them, are handled by that booking tool. This site’s policy does not control a third-party checkout.</p>
        <p>Text messages are optional. The consent box on the contact form is how you opt in. Checking it is not required to book. If you opt in, message frequency follows your reservations: a confirmation, a change, or a chauffeur update. Reply STOP to cancel. Reply HELP if you need a person, or email the address in section 10. Your carrier may charge for texts. We do not use that consent to send unrelated promotions.</p>
        <p>The homepage can show reviews that Google already published on our listing. Those reviews stay on Google. We do not invent quotes, and we do not add your name to a testimonial because you rode with us. If you want a review removed, that request goes to Google, because we do not host the original.</p>
        <p>Analytics tags on the site tell us which pages are visited in aggregate. They are not a chauffeur watching your location. You can use your browser’s controls to limit cookies. The reservation itself still needs a way to reach you, which is why a phone number or email is part of a booking even if you block analytics.</p>
        <p>You can ask what we hold about you, ask for a correction, or ask us to delete information we no longer need for a trip, a receipt, or a legal duty. Email or call the contact details in section 12. California residents can make the same requests under state law. We do not sell personal information. If a page on this site links to a map, a social network, or the booking tool, that destination has its own policy. Read it before you create an account there.</p>
        <p>We update the date at the top when the policy changes. Keep using the site after that date and you are accepting the revised text. If a sentence here and a sentence in the numbered sections ever seem to differ, the numbered sections control. For a ride, use the booking page. For a privacy question, use the email in section 12. You can also read <a href="{{ route('about-us') }}">who operates the service</a> if you want the company background, which is separate from how we handle data.</p>
        <p>Trip details you type into a form are used to dispatch that trip. They are not used to build a public profile. If you want to know which rides we offer, that list is on <a href="{{ route('our-services') }}">our services</a>. Passenger counts for each vehicle are on <a href="{{ route('our-fleet') }}">the fleet page</a>. Neither page changes this policy. They only explain the reservation you are making when you share a name, a phone number, and an address.</p>
    </div>
</section>
@endsection

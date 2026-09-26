<div class="alar-soft-cta">
    <div>
        <h3>{{ $title ?? 'Ready to reserve the car?' }}</h3>
        <p>{{ $text ?? 'Send the addresses, the time, and the passenger count. Dispatch confirms the vehicle and the rate before the chauffeur moves.' }}</p>
    </div>
    <div class="alar-actions">
        <a class="alar-btn alar-btn-gold" href="{{ route('book-online') }}">Book Online</a>
        <a class="alar-btn alar-btn-line" href="{{ route('contact-us') }}">Request a Quote</a>
    </div>
</div>

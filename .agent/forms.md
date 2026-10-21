# Forms Rules

- Define every form action with a named Laravel route
- Include `@csrf` in every form
- Use `POST` for create and submit actions
- Validate all form inputs on the backend
- Use FormRequest classes for new or refactored form endpoints when practical
- Return JSON with a consistent shape: `success`, `message`, and validation `errors` when applicable
- Keep client-side validation as UX only; never rely on it for security
- Keep submit buttons disabled during async submission to prevent duplicate requests
- Reset field-level error states before each submission attempt
- Keep one dedicated message container per form for success/error feedback

## Contact and Quote Specific Rules
- Preserve honeypot anti-spam field named `website` on contact and quote forms
- Reject submissions silently or safely when the honeypot is filled
- Keep Cloudflare Turnstile on contact and quote forms when TURNSTILE keys are configured
- Verify Turnstile server-side before sending emails
- Preserve `sms_consent` handling and related consent label components
- Keep contact route pair: `contact-us` (GET) and `contact.store` (POST)
- Keep quote route pair: `free-quote` (GET) and `quote.store` (POST)
- Keep booking CTA pages linked to `book-online`, `free-quote`, and `contact-us` as appropriate

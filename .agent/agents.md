# Global Rules

## Context Loading Rules
- Always load all files inside `.agent`
- Apply global rules first
- Then module-specific rules

## Brand and Market
- Brand name: ALAR Chauffeur Service
- Domain: https://alarchauffeurservice.com
- Address: 10 Fairmount Ave, Edison, NJ 08820, US
- Primary coverage: New Jersey, New York, Connecticut, Pennsylvania, Massachusetts
- Secondary coverage: California, Nevada, Washington
- Positioning: reserved professional chauffeur service with confirmed rates, not rideshare or street-hail taxi

## Architecture
- Keep this project frontend-first
- Use Laravel for routing, form handling, email, and config-driven SEO/schema helpers only
- Do not add service, repository, or business-layer abstractions unless the same complexity already exists

## Stack Constraints
- Use Blade, HTML, CSS, and Vanilla JavaScript for frontend features
- Do not introduce frontend frameworks
- Use Eloquent models directly for CRUD when models exist

## Routing and Controllers
- Keep page routes in `routes/web.php` with named routes
- Keep controllers limited to request validation, persistence, mail/notification dispatch, and response formatting
- Return JSON for AJAX form endpoints when the form already uses async submission

## SEO Config Integration
- Treat `config/seo.php` as the central SEO metadata source for pages that use `PageSeo` / `SchemaGraph`
- When adding or renaming a public page, update the matching entry in `config/seo.php`
- Prefer named route keys that match existing `config/seo.php` page keys

## Data and Models
- Keep model fillable fields explicit
- Keep schema changes in Laravel migrations
- Do not add unused tables or fields

## Security and Validation
- Validate all incoming data on the server
- Use FormRequest classes for new or refactored form endpoints when practical
- Require CSRF protection for all state-changing forms and requests
- Keep honeypot `website` fields and Turnstile checks when forms already use them
- Preserve SMS consent handling on contact and quote forms

## US / Tri-State SEO Targeting Rules
- Keep `meta_title` US-focused and Tri-State or city/airport-specific when relevant
- Keep `meta_description` US-focused and commercially useful
- Keep `meta_keywords` aligned to the page intent when set via Blade section or `config/seo.php`
- Treat `/.agent/blog-keywords.md` as the primary site-wide keyword source when writing SEO-facing copy, not only for blogs
- Prefer those approved keywords across public pages, service pages, airport pages, service-area pages, blog pages, and other search-facing content when relevant and natural
- Never describe Alar as Uber, Lyft, taxi, or on-demand rideshare

## Delivery Rules
- Keep implementations simple and readable
- Do not add features that were not requested
- Do not leave debug output in production code

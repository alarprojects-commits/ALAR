# Services Main Page Rules

## Scope
- Apply these rules to `resources/views/our-services.blade.php` and service detail pages under `resources/views/services/`

## Existing Service Slugs
- `airport-transportation`
- `corporate-transportation`
- `wedding-limo`
- `prom-limo`
- `sporting-events`
- `group-transportation`
- `concert-festival`
- `party-bus`
- `cruise-port-transfers`
- `chauffeured-service` (view file: `chauffeur-service.blade.php`)
- `hourly-limo`

## Content Structure Rules
- Keep exactly one page `<h1>` for the services index page
- Keep breadcrumb order: Home -> Our Services
- Keep introductory section before service listing
- Keep service links mapped to named routes `services.<slug>`
- Keep one CTA include at the end of the page content (`@include('components.cta')`)
- Keep internal links route-based (`route(...)`), not hardcoded HTML filenames

## Add New Service Rules
- Create detail Blade file at `resources/views/services/<slug>.blade.php`
- Add matching route in `routes/web.php`: `Route::get('/services/<slug>', ...)` with name `services.<slug>`
- Add the new service card or list entry on `resources/views/our-services.blade.php`
- Add matching SEO entry in `config/seo.php` under key `services.<slug>`
- Add the new service URL to `SitemapController` in `app/Http/Controllers/SitemapController.php`
- Keep service slug lowercase and hyphenated
- Update service sidebar component if it lists services: `resources/views/components/service-sidebar.blade.php`

## Service Detail Page Rules
- Extend `main` layout in every service detail page
- Define `@section('meta_title')`
- Define `@section('meta_description')`
- Prefer `@section('meta_keywords')` or rely on `config/seo.php`
- Prefer `@section('og_image')` with a relevant service image
- Keep exactly one page `<h1>`
- Keep breadcrumb order: Home -> Our Services -> Current Service
- Include valid JSON-LD for Service data and BreadcrumbList via `@push('schema')` and/or `config/seo.php` helpers
- Include `@include('components.cta')` near the end of the page content
- Prefer linking to related airport pages, service-area pages, and booking routes
- Keep all internal links route-based (`route(...)`)

## SEO Rules
- Define meta title with a services primary keyword and Alar brand signal
- Define meta description with service intent and booking action language
- Keep exactly one `<h1>` containing services intent
- Keep service card copy human-readable and non-stuffed
- Keep service URLs lowercase and hyphenated under `/services/`
- Do not generate the page without meta title, meta description, and JSON-LD coverage
- Use approved keywords from `/.agent/blog-keywords.md` when they match the service intent

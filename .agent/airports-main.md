# Airports Main Page Rules

## Scope
- Apply these rules to `resources/views/airports/index.blade.php` and airport detail pages under `resources/views/airports/`

## Existing Airport Pages
- `jfk` -> `airports.jfk`
- `lga` -> `airports.lga`
- `ewr` -> `airports.ewr`
- `hpn` -> `airports.hpn`
- `teb` -> `airports.teb`
- `phl` -> `airports.phl`
- `bdl` -> `airports.bdl`
- `lax` -> `airports.lax`
- `las` -> `airports.las`
- `sea` -> `airports.sea`

## Content Structure Rules
- Keep exactly one page `<h1>` on the airports index and each airport page
- Keep breadcrumb order: Home -> Airports -> Current Airport
- Keep intro before transfer details, coverage, and FAQ
- Keep related airport links and state coverage links
- Keep `@include('components.cta')` near the end
- Prefer `x-airport-sidebar` / `components.airport-sidebar` where detail pages already use it
- Keep internal links route-based (`route(...)`)

## Add New Airport Rules
- Create Blade file at `resources/views/airports/<code>.blade.php`
- Add route in `routes/web.php` as `/airports/<code>` with name `airports.<code>`
- Add the new airport card or link on `resources/views/airports/index.blade.php`
- Add matching SEO entry in `config/seo.php` under key `airports.<code>`
- Add the new airport URL to `SitemapController` in `app/Http/Controllers/SitemapController.php`
- Update `resources/views/components/airport-sidebar.blade.php`
- Keep airport codes lowercase in the slug
- Only add airports Alar actually markets or serves

## Airport Detail Page Rules
- Extend `main` layout
- Define `@section('meta_title')` and `@section('meta_description')`
- Prefer `@section('og_image')` with the airport image
- Keep exactly one `<h1>`
- Cover flight tracking, meet and greet, booking steps, and destination coverage when relevant
- Include FAQ grounded in airport transfer questions
- Include valid JSON-LD via `@push('schema')` and/or `config/seo.php`
- Link to `services.airport-transportation`, relevant service-area pages, `book-online`, and `contact-us`
- Clearly state this is reserved chauffeur service, not rideshare curb pickup

## SEO Rules
- Prefer patterns like `[Airport Name] Airport Car Service`, `[CODE] car service`, and destination phrasing
- Keep meta copy US-focused and location-accurate
- Use approved airport keywords from `/.agent/blog-keywords.md`
- Do not invent terminals, FBOs, wait-time policies, or amenities that are not part of Alar operations

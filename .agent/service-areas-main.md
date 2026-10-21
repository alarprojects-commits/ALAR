# Service Areas Main Page Rules

## Scope
- Apply these rules to `resources/views/service-areas/index.blade.php` and state pages under `resources/views/service-areas/`

## Existing State Pages
- `new-jersey` -> route `service-area.new-jersey`
- `new-york` -> route `service-area.new-york`
- `connecticut` -> route `service-area.connecticut`
- `pennsylvania` -> route `service-area.pennsylvania`
- `california` -> route `service-area.california`
- `nevada` -> route `service-area.nevada`
- `washington` -> route `service-area.washington`

## Content Structure Rules
- Keep exactly one page `<h1>` on the service-areas index and each state page
- Keep breadcrumb order: Home -> Service Areas -> Current State
- Keep intro copy before county, city, or airport sections
- Keep one CTA include at the end of the page content
- Keep internal links route-based (`route(...)`)

## Add New Service Area Rules
- Create Blade file at `resources/views/service-areas/<slug>.blade.php`
- Add route in `routes/web.php` as `/service-areas/<slug>` with name `service-area.<slug>`
- Add the new state/area card or link on `resources/views/service-areas/index.blade.php`
- Add matching SEO entry in `config/seo.php` under key `service-area.<slug>`
- Add the new service-area URL to `SitemapController` in `app/Http/Controllers/SitemapController.php`
- Update `resources/views/components/service-area-sidebar.blade.php` when it lists areas
- Keep slug lowercase and hyphenated
- Prefer state-level hubs over one-off city pages unless explicitly requested
- If a legacy city URL is replaced by a state hub, add a 301 redirect in `routes/web.php`

## Service Area Detail Page Rules
- Extend `main` layout
- Define `@section('meta_title')` and `@section('meta_description')`
- Prefer `@section('og_image')` with a relevant area image
- Keep exactly one `<h1>`
- Include valid JSON-LD Service / WebPage / FAQ / Breadcrumb coverage as used by similar state pages
- Link to relevant airport guides and service pages
- Mention Alar Edison NJ desk when Tri-State coverage is discussed
- Include FAQ content grounded in real booking questions
- Include `@include('components.cta')` near the end

## SEO Rules
- Lead with state + car service / chauffeur / airport limo intent
- Name major airports served from that state
- Keep US and Tri-State or West Coast framing accurate to the page
- Use approved keywords from `/.agent/blog-keywords.md` when they match the area intent
- Do not invent counties, venues, or airports the business does not serve

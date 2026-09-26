# Alar Chauffeur Service — Redesign changelog

Branch: `redesign`  
Scope: full public-site redesign on static Blade pages, new design system, airports hub, SEO-length content.

## Summary

Rebuilt the public site around a black / gold luxury theme (`#B88C11`), static Blade pages under `resources/views/pages`, `services`, `service-areas`, `airports`, and `blogs`, and interactive “guide” UI for planning trips. Removed Cloudflare Turnstile from the contact form. Expanded live blogs and airport detail pages to **≥1,220 words** each.

## Design system

| Item | Location / notes |
|------|------------------|
| Tokens & layout CSS | `public/assets/css/redesign.css` |
| Site JS (nav, guide tabs, airport filters) | `public/assets/js/site.js` |
| Layout shell | `resources/views/layouts/app.blade.php` |
| Header / footer | `resources/views/partials/` |
| Shared UI | `page-banner`, `ticker`, `cta-band`, `related-services`, `blog-cta`, `blog-insights`, `google-reviews`, `sms-consent-label` |
| Brand gold | `--alar-gold: #B88C11` |
| Hero | Full-bleed, `min-height: 100vh` on home |
| Buttons | Luxury frame style (`.alar-btn`, `.alar-btn-gold`, `.alar-btn-line`, `.alar-btn-outline`) |

Old theme CSS/JS (Bootstrap carousel stack, vaultedge, classy-nav, etc.) was removed from the public asset tree where unused.

## Pages (static Blade)

### Core
- Home, About, Services, Fleet, Blog index, Contact, Book Online, Privacy  
  → `resources/views/pages/`

### Services
- Airport, corporate, wedding, prom, sporting, group, concert, party bus, cruise, chauffeur, hourly  
  → `resources/views/services/`

### Service areas
- New Jersey, New York, California, Nevada, **Washington** (replaces Seattle)  
- San Francisco → 301 to California; Seattle → 301 to Washington  
  → `resources/views/service-areas/`  
- Interactive left-nav / right-panel **guide** UI on area pages

### Airports (new, fully static routes)
Hub: `/airports`  
Detail pages (each ≥1,220 words, unique images):

| Code | Path | State |
|------|------|--------|
| JFK | `/airports/jfk` | New York |
| LGA | `/airports/lga` | New York |
| HPN | `/airports/hpn` | New York |
| EWR | `/airports/ewr` | New Jersey |
| TEB | `/airports/teb` | New Jersey (private aviation / FBO) |
| LAX | `/airports/lax` | California |
| LAS | `/airports/las` | Nevada |
| SEA | `/airports/sea` | Washington |

Named routes: `airports.index`, `airports.jfk`, `airports.lga`, … (no dynamic `{slug}` controller).  
Assets: `public/assets/img/airports/{code}/banner.png` + `photo.png`.

### Blogs (live posts, ≥1,220 words each)
- Car service to JFK from Manhattan  
- Newark airport car service (EWR)  
- Black car vs Uber / taxi  
- Tri-State JFK / LGA / EWR  
- NYC & NJ to PA / Virginia / DC  

Layout: intro split, takeaways, checklists, figure section (unique `figure.png` per post), compare blocks, soft CTAs, FAQ, insights.

## Routing

See `routes/web.php`:
- Static closures for pages, services, areas, airports, blogs  
- `POST /contact-us` → `ContactController@store` (honeypot retained; Turnstile removed)  
- 301s: `/service-areas/san-francisco` → California; `/service-areas/seattle` → Washington  

## Contact / security

- Cloudflare Turnstile widget, validation, config keys, and env example entries **removed**  
- Related test renamed to `tests/Feature/ContactFormTest.php`  
- Honeypot (`website` field) still blocks simple spam  

## Fleet & imagery

- Fleet lineup aligned with Empire-style vehicle set (webp under `public/assets/img/fleet/`)  
- Service cards use scene-specific photos under `public/assets/img/services/`  
- Service areas use distinct banner + scene images  
- Home / page banners under `public/assets/img/home/` and `pages/`  

## UX notes

- Service-area and airport guides: tab-style planner (`.alar-guide`) — one topic open at a time  
- Airports hub: state filter chips (All / NY / NJ / CA / NV / WA)  
- Contact aside: **States** list (no middle-dot “turnstile” separators); Cloudflare Turnstile removed  
- Header: Service Areas + Airports dropdowns; mobile drawer includes both  

## Screenshots

Existing before/after captures remain in `docs/screenshots/` (home, about, services, fleet, New York, California, San Francisco era). New airport pages are covered in this changelog rather than new screenshot files.

## How to run locally

```bash
php artisan serve
```

Examples:
- http://127.0.0.1:8000/
- http://127.0.0.1:8000/airports
- http://127.0.0.1:8000/airports/jfk
- http://127.0.0.1:8000/blog/car-service-to-jfk-from-manhattan

Hard-refresh (Ctrl+F5) after CSS/JS updates.

## Out of scope / not changed

- No commit of `.env` secrets  
- Book Online and Contact kept short (forms focused)  
- Privacy not SEO-padded  
- No invented live fares or fake company stats in copy  

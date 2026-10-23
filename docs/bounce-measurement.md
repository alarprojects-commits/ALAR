# Bounce Rate Measurement Checklist

After deploying the commercial booker UX changes, recheck GA4 over about 14 days.

## Events fired from the site

| Event name | Trigger |
|---|---|
| `start_booking` | Book Online / Start Booking / Book this class / Book Now |
| `click_free_quote` | Free Quote buttons |
| `click_to_call` | Phone / tel: links |
| `select_trip_type` | Airport / Corporate / Wedding / Group chips |
| `view_fleet` | Fleet links from booker modules |
| `view_reviews` | See Google Reviews |
| `view_service` | Learn more on commercial path cards |

Events push to `dataLayer` and `gtag('event', …)` when available.

## What to compare

1. **Top pages/screens** — Book Online, Corporate, Chauffeur / home bounce rate vs prior period.
2. **Events** — volume of `start_booking`, `click_free_quote`, `click_to_call`.
3. **Engaged sessions** — should rise on Book Online as trust and CTAs sit above the iframe.

## Target

Book Online bounce trending down from ~74% toward under ~55% if traffic mix stays similar.

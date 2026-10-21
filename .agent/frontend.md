# Frontend Rules

- Do not use inline JavaScript in Blade templates
- Do not use inline event attributes (`onclick`, `onchange`, `onsubmit`, etc.)
- Place custom JavaScript in dedicated JS files and bind events with `addEventListener`
- Keep DOM updates scoped to target containers
- Use `fetch` for async requests with `Accept: application/json`
- Include CSRF tokens in state-changing AJAX requests
- Keep jQuery plugin usage limited to already-included vendor libraries
- Do not add new JS frameworks
- Avoid new inline `<style>` blocks in Blade templates unless matching an existing page pattern that already uses scoped inline styles
- Place reusable styling in project CSS files
- Use `asset()` for static assets
- Use Blade components/partials for repeated UI sections (`components.cta`, `components.cta-buttons`, sidebars, phone blocks)
- Do not leave `console.log` in production code
- Keep internal links route-based with `route(...)`
- Preserve existing visual language, section classes, and CTA patterns used across the site

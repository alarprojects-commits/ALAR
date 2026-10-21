# Blog Main Page Rules

## Scope
- Apply these rules to `resources/views/blog.blade.php` and blog detail pages under `resources/views/blogs/`

## Content Structure Rules
- Keep exactly one page `<h1>` for the blog index page
- Keep breadcrumb order: Home -> Blog
- Keep intro section before blog card listing
- Render blog entries as cards with image, title, summary, and link
- Keep blog links mapped to named routes `blog.<key>`
- Keep one CTA include at the end of the page content
- Keep internal links route-based (`route(...)`), not hardcoded HTML filenames

## Add New Blog Rules
- Create a detail page file at `resources/views/blogs/<slug>.blade.php`
- Add a new route in `routes/web.php` for `/blog/<slug>` with named route `blog.<key>`
- Add the new blog card to `resources/views/blog.blade.php`
- Add the new blog item to Blog / listing JSON-LD in `resources/views/blog.blade.php` when present
- Add or update the blog link in `resources/views/components/blog-sidebar.blade.php`
- Add matching SEO entry in `config/seo.php` under key `blog.<key>`
- Add the new blog URL to `SitemapController` in `app/Http/Controllers/SitemapController.php`
- Keep slug lowercase and hyphenated
- Store blog hero image at `public/assets/img/blogs/<slug>.webp` when adding imagery

## Blog Detail Page Rules
- Extend `main` layout in every blog detail page
- Define `@section('meta_title')`
- Define `@section('meta_description')`
- Prefer `@section('meta_keywords')` when useful
- Prefer `@section('og_image', asset('assets/img/blogs/<slug>.webp'))`
- Prefer `@section('og_type', 'article')`
- Keep exactly one page `<h1>`
- Include valid JSON-LD `BlogPosting`
- Include valid JSON-LD `BreadcrumbList`
- Keep breadcrumb order: Home -> Blog -> Current Post
- Include `@include('components.cta')` at the end of the page content
- Prefer including the blog sidebar where the existing detail layout uses it
- Keep all internal links route-based (`route(...)`)

## Blog Content Writing Rules
- Start every blog post with a clear intro paragraph before the first subheading
- Use one primary keyword and keep it consistent with page intent
- When `/.agent/blog-keywords.md` exists, select 4 to 5 keywords from one cluster only
- Use exactly 1 primary keyword and 3 to 4 secondary keywords from the same cluster
- Check `/.agent/blog-keyword-usage.md` before choosing keywords for a new blog
- If the keyword file contains a flat raw list instead of prepared clusters, infer one tight keyword cluster from the raw list before writing
- Prefer unused or least-used keywords before reusing older terms
- Avoid repeating the same primary keyword across multiple recent blogs unless the cluster has been fully cycled
- Avoid reusing the exact same supporting keyword set in back to back blogs
- Keep cluster selection tight so topical authority grows without diluting SEO relevance
- Include the primary keyword in meta title, meta description, H1, first paragraph, and at least one H2
- Use related secondary keywords naturally in H2/H3 and body copy
- Do not keyword-stuff headings or paragraphs
- Keep paragraphs short and scannable
- Keep heading hierarchy strict: H1 once, then H2, then H3
- Include a practical conclusion section before CTA
- The blog should contain at least 1200 words
- The content should be meaningful, helpful, and should answer real traveler or corporate booking questions
- The content should be humanized
- Avoid using "-" in the content or any other special character where it can be written in plain words
- Check that content should not be plagiarised or considered as AI written content
- Identify the search intent (informational, commercial, transactional) before writing
- Structure content to fully satisfy that intent
- Include at least 3 unique insights, examples, or real-world Tri-State / airport scenarios
- Avoid generic statements that could apply to any limo company
- Cover the topic comprehensively including common questions, edge cases, and comparisons
- Include an FAQ section based on real user queries
- Include practical explanations that reflect real-world chauffeur booking and airport transfer scenarios
- Write as if explaining from experience, not definition
- Include related entities, airports, counties, venues, and service types naturally
- Ensure the content builds topical authority, not just keyword relevance
- Ensure the content provides original value and is not just a rephrased version of common information
- Keep brand positioning accurate: reserved chauffeur with confirmed rates, flight tracking, meet and greet when relevant
- After generating a new blog, record the cluster and keyword usage in `/.agent/blog-keyword-usage.md`

## Blog Internal Linking Rules
- Add at least 3 internal links inside each blog detail page
- Include at least 1 link to a relevant service page route
- Include at least 1 link to another relevant blog route
- Include at least 1 link to `route('contact-us')` or `route('book-online')`
- Prefer also linking to a relevant airport or service-area page when the topic supports it
- Use descriptive anchor text; do not use "click here"
- Add every new blog link in both `resources/views/blog.blade.php` and `resources/views/components/blog-sidebar.blade.php`
- Keep internal links bidirectional where relevant by updating related older posts to link to the new post
- 5 to 6 words should be linked to the other website pages and 1 or 2 from other website pages to the recently added blog

## SEO Rules
- Define `@section('meta_title')` with blog/SEO discovery intent and Alar brand signal
- Define `@section('meta_description')` with actionable summary intent
- Keep canonical behavior intact through the main layout
- Keep exactly one `<h1>` containing blog intent
- Include valid JSON-LD Blog schema with listed posts on the index when present
- Include valid JSON-LD BreadcrumbList for Home and Blog
- Keep every blog card image with meaningful non-empty `alt` or accessible label
- Keep excerpts readable and non-stuffed
- Do not generate the page without meta title, meta description, and JSON-LD

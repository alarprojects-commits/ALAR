# AGENTS Entry Point

## Brand Context
- Brand: ALAR Chauffeur Service
- Primary market: United States, Tri-State focus (New Jersey, New York, Connecticut, Pennsylvania) plus Massachusetts
- HQ / desk: Edison, New Jersey
- Secondary markets: California, Nevada, Washington
- Core offer: reserved chauffeur, airport car service, black car, limo, Sprinter, and group transportation
- Primary airports: JFK, LGA, EWR, HPN, TEB, PHL, BDL, BOS, LAX, LAS, SEA

## Context Loading Rules
- Always load all files inside `.agent`
- Apply global rules first
- Then module-specific rules
- If a rule conflicts, `/.agent/agents.md` has priority over module files

## Modular Rule Files
- [Global Rules](./.agent/agents.md)
- [SEO Rules](./.agent/seo.md)
- [Frontend Rules](./.agent/frontend.md)
- [Forms Rules](./.agent/forms.md)
- [Services Main Page Rules](./.agent/services-main.md)
- [Service Areas Main Page Rules](./.agent/service-areas-main.md)
- [Airports Main Page Rules](./.agent/airports-main.md)
- [Blog Main Page Rules](./.agent/blogs-main.md)
- [Blog Keyword Bank Rules](./.agent/blog-keywords.md)
- [Blog Keyword Usage Ledger](./.agent/blog-keyword-usage.md)

## Required Load Order
1. `/.agent/agents.md`
2. `/.agent/seo.md`
3. `/.agent/frontend.md`
4. `/.agent/forms.md`
5. `/.agent/services-main.md`
6. `/.agent/service-areas-main.md`
7. `/.agent/airports-main.md`
8. `/.agent/blogs-main.md`
9. `/.agent/blog-keywords.md`
10. `/.agent/blog-keyword-usage.md`

## Fallback Policy
- If a modular file is missing, keep processing with remaining files
- Do not assume rules that are not present in loaded files

## US / Tri-State Meta Rules
- Keep meta title US-focused with Tri-State or local intent when relevant
- Keep meta description US-focused with Tri-State or local intent when relevant
- Prefer Edison NJ, Tri-State, and named airports in SEO copy when the page supports it

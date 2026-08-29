# Development Roadmap — GoDevs Portfolio

The roadmap mirrors the seventeen-phase plan in the original product brief
and tracks which phases have shipped, which are in flight, and which are
downstream. v0.1.0 ships Phases 0–5. Everything else is v0.2+ and is
included here so contributors know what comes next.

| Phase | Status | Owner | Notes |
|-------|--------|-------|-------|
| 0 — Planning | ✅ shipped (v0.1) | GoDevs | PRD, architecture, feature spec, plugin boundary, WordPress.org strategy |
| 1 — Theme foundation | ✅ shipped (v0.1) | GoDevs | Block theme, theme.json, templates, parts, basic assets, metadata |
| 2 — Design system | ✅ shipped (v0.1) | GoDevs | Palette, typography, spacing, layout, buttons, global styles |
| 3 — Core templates | ✅ shipped (v0.1) | GoDevs | Homepage, front page, page, single, archive, search, 404 |
| 4 — Header & footer | ✅ shipped (v0.1) | GoDevs | Header, footer, mobile nav, CTA |
| 5 — Pattern library | ✅ shipped (v0.1) | GoDevs | Hero, about, services, portfolio, testimonials, CTA, contact, footer |
| 6 — Style variations | ⏳ v0.2 | GoDevs | Modern, Minimal, Dark, Creative, Corporate, Elegant, Editorial |
| 7 — User experience | ⏳ v0.2 | GoDevs | Beginner setup, starter-site architecture, simplified customisation flow |
| 8 — Core plugin integration | ⏳ v0.3 | GoDevs | Portfolio, services, testimonials, team, case studies, business profile |
| 9 — Starter sites | ⏳ v0.4+ | GoDevs | 10 → 20 → 50 → 75 → 100+ |
| 10 — Advanced features | ⏳ v0.4+ | GoDevs | Advanced portfolio, case studies, resume, business sections, advanced CTAs, booking-ready |
| 11 — Performance | ⏳ v0.5 | GoDevs | CSS optimisation, JS optimisation, image, font, asset loading |
| 12 — Accessibility | ⏳ v0.5 | GoDevs | Keyboard, focus, contrast, screen readers, reduced motion audit |
| 13 — Security | ⏳ v0.5 | GoDevs | Security audit, sanitisation, escaping, validation, permissions, dependency audit |
| 14 — QA | ⏳ v0.6 | GoDevs | WP, Gutenberg, Site Editor, desktop, tablet, mobile, browsers, accessibility, performance |
| 15 — Documentation | ⏳ v0.6 | GoDevs | User, developer, AI, troubleshooting, changelog |
| 16 — WordPress.org preparation | ⏳ v0.7 | GoDevs | Code, licensing, security, accessibility, content portability, review checklist |
| 17 — Release candidate | ⏳ v0.7+ | GoDevs | Final QA, versioning, packaging, documentation, release, submission |

---

## Phase 0 — Planning ✅

Shipped in v0.1.0.

### Scope
- Product requirements document (`docs/PRD.md`)
- Architecture (`docs/ARCHITECTURE.md`)
- Feature specification (`docs/FEATURE-SPECIFICATION.md`)
- Plugin boundary (`docs/CORE-PLUGIN-BOUNDARY.md`)
- WordPress.org strategy (`docs/WORDPRESS-ORG-COMPLIANCE.md`)

### Exit criteria
- A maintainer can read the docs above and understand the full v0.1 scope without asking the original brief.
- All future phases are listed in this roadmap document with clear owners.

## Phase 1 — Theme foundation ✅

Shipped in v0.1.0.

### Scope
- Block theme architecture
- `theme.json` (schema v2)
- Nine block templates
- Three template parts
- `functions.php` (minimal setup, enqueue, plugin detection, font preload)
- `style.css`, `index.php`, `readme.txt`
- Bundled Inter + Newsreader woff2 fonts with OFL license files

### Exit criteria
- Theme activates on a clean WordPress 6.5+ install with no PHP errors.
- All nine templates render with no template-not-found warnings.
- Fonts load via the `@font-face` declarations in `theme.json`.

## Phase 2 — Design system ✅

Shipped in v0.1.0.

### Scope
- Eleven named colours (Primary, Secondary, Accent, Background, Surface,
  Text, Muted, Border, Success, Warning, Error)
- Three font families (Inter body, Newsreader display, mono fallback)
- Eight fluid font sizes (caption → huge)
- Eight spacing tokens (0.5× → 6×)
- Layout (contentSize 768, wideSize 1280)
- Custom tokens: radius, shadow, transition, container
- Element styles: link, heading, h1-h6, button, caption
- Per-block overrides: site-title, site-tagline, navigation, post-title,
  post-excerpt, post-date, quote, pullquote, separator, search

### Exit criteria
- All design system tokens are reachable via CSS variables in patterns.
- No pattern uses hardcoded hex values or arbitrary spacing.
- Two style variations (Minimal, Dark) successfully re-bind the
  variables without breaking any pattern.

## Phase 3 — Core templates ✅

Shipped in v0.1.0.

### Scope
- `templates/index.html`
- `templates/home.html`
- `templates/front-page.html`
- `templates/page.html`
- `templates/single.html`
- `templates/archive.html`
- `templates/search.html`
- `templates/404.html`
- `templates/singular.html`
- `templates/page-no-title.html` (custom template)

### Exit criteria
- Each template composes correctly under the standard WordPress template hierarchy.
- Each template renders with the header and footer template parts.
- The front-page template renders the default homepage composition: hero → about → services → portfolio → cta → testimonials → contact.

## Phase 4 — Header & footer ✅

Shipped in v0.1.0.

### Scope
- `parts/header.html` — logo + navigation + CTA
- `parts/footer.html` — multi-column footer with copyright bar
- `parts/mobile-menu.html` — alternative mobile menu (intentionally
  optional; the Navigation block handles its own mobile overlay)

### Exit criteria
- Header pattern is sticky on scroll (when configured).
- Mobile menu (the Navigation block overlay) opens and closes with
  keyboard.
- Footer renders across responsive breakpoints without overflow.

## Phase 5 — Pattern library ✅

Shipped in v0.1.0.

### Scope
- `patterns/hero.php`
- `patterns/about.php`
- `patterns/services.php`
- `patterns/portfolio-grid.php`
- `patterns/testimonials.php`
- `patterns/cta.php`
- `patterns/contact.php`
- `patterns/footer.php` (minimal footer alternative)

### Exit criteria
- All eight patterns appear in the Site Editor inserter.
- All eight patterns insert without PHP errors.
- All eight patterns are responsive at 375, 768, 1024, 1280, 1440, 1920.
- Pattern copy is realistic, in English, and does not overclaim.

## Phase 6 — Style variations (v0.2)

### Scope
- Modern (the implicit default in `theme.json`)
- Minimal ✅ (shipped in v0.1)
- Dark ✅ (shipped in v0.1)
- Creative
- Corporate
- Elegant
- Editorial

Each variation should be a deliberate redesign — typography, palette,
component radius, link treatment, heading style — not a palette swap.

### Exit criteria
- Each variation feels different enough from every other variation that
  switching produces a recognisably different site.
- Each variation passes the WCAG 2.1 AA contrast check on body text
  against background.
- Each variation is documented in `docs/DESIGN-SYSTEM.md`.

## Phase 7 — User experience (v0.2)

### Scope
- Beginner-friendly setup wizard (planned, scope TBD)
- Starter-site architecture (the directory layout and metadata that
  starter sites will live inside in Phase 9)
- Simplified customisation flow (improving the Site Editor experience
  where the theme can — e.g. curated block style variations, sensible
  defaults for less-used blocks)

### Exit criteria
- A non-technical user completes User Journey A from `docs/PRD.md` in
  under sixty minutes.
- The starter-site architecture is described in
  `docs/DEMO-STRATEGY.md` and tested with at least one example.

## Phase 8 — Core plugin integration (v0.3)

### Scope
- GoDevs Core plugin activation
- Portfolio CPT
- Services CPT
- Testimonials CPT
- Team CPT
- Case Studies CPT
- Business Profile
- Theme → plugin hook wiring (`godevs_portfolio_core_active`)

### Exit criteria
- The theme activates and renders without GoDevs Core.
- With GoDevs Core active, the CPTs appear and patterns can render
  dynamic content via Query Loop block variations.
- With GoDevs Core deactivated, the theme still renders without fatal
  errors; plugin-backed patterns fall back to static content.

## Phase 9 — Starter sites (v0.4+)

### Scope
Build progressively:
- 10 sites (Phase 9a)
- 20 sites (Phase 9b)
- 50 sites (Phase 9c)
- 75 sites (Phase 9d)
- 100+ sites (Phase 9e)

Categories: Developer, Freelancer, Designer, Agency, Startup, Business,
Creative, Photographer, Consultant, Personal Brand, Corporate.

### Exit criteria
- Each starter site has its own visual identity, typography, imagery,
  content structure, navigation, responsive layout, and accessible
  components.
- No two starter sites are colour-swapped copies of the same layout.

## Phase 10 — Advanced features (v0.4+)

### Scope
- Advanced portfolio layouts (masonry, horizontal, split, case-study)
- Case studies structured content
- Resume / experience / education / skills / awards patterns
- Advanced CTA patterns
- Booking-ready patterns (composable with booking plugins; the theme
  does not implement booking itself)

## Phase 11 — Performance (v0.5)

### Scope
- CSS optimisation (audit every selector; remove unused)
- JS optimisation (audit `navigation.js`; split if necessary)
- Image optimisation (responsive sizes, lazy loading defaults)
- Font optimisation (audit woff2 subset coverage; consider variable
  fonts)
- Asset loading optimisation (audit enqueue order; remove render-
  blocking)

### Exit criteria
- LCP below 2.0 s on a fast 3G profile with a v0.5 default front-page.
- Total blocking time below 100 ms.
- CLS below 0.05.
- Zero render-blocking resources.

## Phase 12 — Accessibility (v0.5)

### Scope
- Keyboard pass on every template
- Focus visibility pass
- Contrast audit on every palette token
- Screen reader audit (NVDA, VoiceOver)
- Reduced motion audit

### Exit criteria
- WCAG 2.1 AA conformance verified by an external auditor.
- WCAG 2.1 AAA stretch goal documented with any remaining gaps.

## Phase 13 — Security (v0.5)

### Scope
- Security audit (escape, sanitise, validate, capability check, nonce)
- Dependency audit (no third-party code without license review)
- Output audit (no unescaped user-controlled data)

### Exit criteria
- No `phpcs` warnings under `WordPress.Security` ruleset.
- No `eslint` warnings under `@wordpress/eslint-plugin/security` rules.

## Phase 14 — QA (v0.6)

### Scope
- WordPress matrix (6.5, 6.6, 6.7)
- Gutenberg matrix (latest)
- Site Editor pass
- Device matrix (1920, 1440, 1280, 1024, 768, 480, 375)
- Browser matrix (Chrome, Firefox, Safari, Edge, Safari iOS, Chrome
  Android)
- Accessibility pass (from Phase 12)
- Performance pass (from Phase 11)

### Exit criteria
- `docs/QA-CHECKLIST.md` passes for the v0.6 build on every matrix
  combination.

## Phase 15 — Documentation (v0.6)

### Scope
- User documentation (Site Editor usage, pattern insertion, style
  variation selection)
- Developer documentation (extending the theme, writing a style
  variation, writing a pattern, GoDevs Core integration)
- AI documentation (this guide, kept up to date)
- Troubleshooting
- Changelog

## Phase 16 — WordPress.org preparation (v0.7)

### Scope
- Code audit (escape, sanitise, capability check, nonce, no remote
  requests)
- Licensing audit (GPL-2.0-or-later, OFL for fonts)
- Security review
- Accessibility review
- Content portability review (no CPTs in theme)
- Theme review checklist

### Exit criteria
- The theme passes the WordPress.org theme review checklist at the
  time of submission.
- The submission package is described in `docs/WORDPRESS-ORG-COMPLIANCE.md`.

## Phase 17 — Release candidate (v0.7+)

### Scope
- Final QA
- Versioning
- Packaging
- Documentation finalisation
- Release preparation
- Submission package

### Exit criteria
- WordPress.org submission is ready and the README is final.

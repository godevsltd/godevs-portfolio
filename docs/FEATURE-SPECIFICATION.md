# Feature Specification — GoDevs Portfolio

This is the v0.1.0 feature list. Every feature described here *actually
ships* in 0.1.0. Future features live in `docs/DEVELOPMENT-ROADMAP.md` and
must not be advertised in user-facing copy or `readme.txt` until they
ship.

The list is organised by surface: foundation, design system, templates,
template parts, patterns, style variations, assets, accessibility,
performance, i18n, security. Each feature is given a short description
and an explicit v0.1 status so reviewers and contributors can verify
what is and is not yet present.

---

## 1. Foundation

### 1.1 Block theme architecture
The theme is a modern block theme. There is no classic PHP templating
layer. All page rendering is composed from block templates and template
parts. The `theme.json` file is the single source of truth for design.

**Status:** ✅ Shipped. Verified by `tests/test-activation.php`.

### 1.2 Minimum WordPress version
The theme targets WordPress 6.5+, which is the first version with the
full Site Editor, Style Book, and stable fluid typography APIs. The
minimum is declared in `style.css` `Requires at least` and enforced by
the WordPress core activation check.

**Status:** ✅ Shipped.

### 1.3 Minimum PHP version
The theme targets PHP 7.4+. PHP 7.4 is the lowest version WordPress
6.5+ supports. Declared in `style.css` `Requires PHP`.

**Status:** ✅ Shipped.

### 1.4 Theme metadata
`style.css` carries the WordPress theme metadata header (theme name,
author, version, license, text domain, tags). `readme.txt` carries the
WordPress.org-format readme. `README.md` carries the GitHub-format
readme.

**Status:** ✅ Shipped.

## 2. Design system

### 2.1 Colour palette
Eleven named colours declared in `theme.json`:
Primary (`#0F172A`), Secondary (`#1E293B`), Accent (`#FF6B57`),
Background (`#FFFFFF`), Surface (`#F8FAFC`), Text (`#0F172A`),
Muted (`#64748B`), Border (`#E2E8F0`), Success (`#15803D`),
Warning (`#B45309`), Error (`#B91C1C`).

All palette tokens are exposed as CSS variables
(`--wp--preset--color--<slug>`) and are usable in the Site Editor colour
picker.

**Status:** ✅ Shipped.

### 2.2 Gradients
Two restrained gradients declared in `theme.json`:
- `surface-fade` — soft fade from Surface to Background.
- `accent-fade` — subtle coral tint at the top.

No other gradients are available. Adding new gradients requires editing
`theme.json`.

**Status:** ✅ Shipped.

### 2.3 Typography
Three font families declared in `theme.json`:
- `body` — Inter (self-hosted, latin subset, weights 400/500/600/700).
- `heading` — Newsreader (self-hosted, latin subset, weights 500/600
  plus 500-italic).
- `mono` — system monospace stack.

Eight font sizes declared, fluid from `medium` upward:
caption (0.75rem, fixed), small (0.875rem, fixed), medium (1rem, fluid),
large (1.125rem, fluid), x-large (1.5rem, fluid), xx-large (2.25rem,
fluid), xxx-large (3.5rem, fluid), huge (5rem, fluid).

Line-height, letter-spacing, font-weight, and text-transform are all
configurable per-block via `theme.json`.

**Status:** ✅ Shipped.

### 2.4 Spacing
Eight spacing tokens declared in `theme.json`:
20 (0.5rem), 30 (0.75rem), 40 (1rem), 50 (1.5rem), 60 (2rem), 70 (3rem),
80 (4rem), 90 (6rem).

All spacing tokens are exposed as CSS variables
(`--wp--preset--spacing--<slug>`) and are usable as padding, margin,
and block-gap values.

**Status:** ✅ Shipped.

### 2.5 Layout
- `contentSize` — 768px (default content column).
- `wideSize` — 1280px (wide block alignment).

Templates use `layout: { type: "constrained" }` by default, with
content centered and constrained to `contentSize`. Hero and CTA bands
use `layout: { type: "constrained" }` but with full-width background
via a wrapping group.

**Status:** ✅ Shipped.

### 2.6 Border
Block border settings (colour, radius, style, width) are exposed via
`appearanceTools`. The `border` palette token is `#E2E8F0`.

**Status:** ✅ Shipped.

### 2.7 Custom design tokens
`theme.json` exposes a small set of custom tokens:
- `--wp--custom--radius--sm` (2px), `--md` (4px), `--lg` (8px),
  `--pill` (999px).
- `--wp--custom--shadow--sm`, `--md`, `--lg` (very low opacity).
- `--wp--custom--transition--fast` (120ms), `--base` (200ms).
- `--wp--custom--container--content` (768px), `--wide` (1280px),
  `--full` (100%).

**Status:** ✅ Shipped.

### 2.8 Element styles
Per-element styles declared in `theme.json`:
- Link: coral, no underline, underline on hover, 2px focus-visible
  outline.
- Headings: Newsreader, font-weight 600, letter-spacing -0.01em.
- h1: 3.5rem fluid, line-height 1.1.
- h2-h6: progressively smaller, h6 is uppercase caption.
- Button: navy background, white text, 2px radius, hover state.
- Caption: 0.75rem, muted colour.

**Status:** ✅ Shipped.

### 2.9 Block style overrides
Per-block style overrides declared in `theme.json`:
- `core/site-title` — Newsreader, large, weight 600.
- `core/site-tagline` — small, muted.
- `core/navigation` — Inter, small, weight 500.
- `core/post-title` — Newsreader, huge, weight 600, tight tracking.
- `core/post-excerpt` — large, line-height 1.6, muted.
- `core/post-date` — caption, uppercase, letter-spaced.
- `core/quote` — Newsreader italic, x-large, coral left border.
- `core/pullquote` — Newsreader italic, xx-large.
- `core/separator` — border colour.
- `core/search` — 2px radius.

**Status:** ✅ Shipped.

## 3. Templates

### 3.1 Templates shipped
Nine core templates plus one custom template:
- `templates/index.html` — fallback posts list.
- `templates/home.html` — posts page (Settings → Reading).
- `templates/front-page.html` — static homepage, composes 8 patterns.
- `templates/page.html` — default static page.
- `templates/single.html` — single blog post with comments.
- `templates/singular.html` — fallback for any single content type.
- `templates/archive.html` — category, tag, taxonomy, CPT archives.
- `templates/search.html` — search results.
- `templates/404.html` — not found.
- `templates/page-no-title.html` — custom page template (no h1).

**Status:** ✅ Shipped.

### 3.2 Template hierarchy compliance
Templates follow the standard WordPress block theme hierarchy. No
template is registered outside the standard naming convention.

**Status:** ✅ Shipped.

## 4. Template parts

### 4.1 Parts shipped
- `parts/header.html` — logo + navigation + CTA. Sticky on scroll.
- `parts/footer.html` — multi-column footer (logo | studio nav | work
  nav | contact) with copyright bar.
- `parts/mobile-menu.html` — alternative mobile menu (optional; the
  Navigation block handles its own mobile overlay).

All three parts are declared in `theme.json` `templateParts` with their
correct area (`header`, `footer`, `navigation`).

**Status:** ✅ Shipped.

## 5. Patterns

### 5.1 Patterns shipped (eight)
- `patterns/hero.php` (`godevs-portfolio/hero`) — display headline,
  lead paragraph, primary + outline CTA.
- `patterns/about.php` (`godevs-portfolio/about`) — two-column: text
  + 4/5 portrait image.
- `patterns/services.php` (`godevs-portfolio/services`) — three-
  column numbered services grid.
- `patterns/portfolio-grid.php` (`godevs-portfolio/portfolio-grid`)
  — Query Loop block, three-column portfolio grid with featured
  image, project type, and title.
- `patterns/testimonials.php` (`godevs-portfolio/testimonials`) —
  large editorial pull-quote with attribution.
- `patterns/cta.php` (`godevs-portfolio/cta`) — full-width navy CTA
  band with display headline and CTA buttons.
- `patterns/contact.php` (`godevs-portfolio/contact`) — two-column
  contact section: contact info + form placeholder.
- `patterns/footer.php` (`godevs-portfolio/footer`) — minimal
  alternative footer (logo, tagline, nav, copyright).

All eight patterns auto-register via the WP 6.0+ pattern-file
convention.

**Status:** ✅ Shipped.

### 5.2 Pattern conventions
- Slug prefix: `godevs-portfolio/`.
- Categories: built-in (`featured`, `header`, `text`, `query`,
  `call-to-action`, `footer`) and custom (`about`, `services`,
  `portfolio`).
- Viewport width: 1280 for all patterns.
- Demo content is realistic but fictional. No fake awards, revenue,
  or certifications.
- Every pattern is responsive at 375, 768, 1024, 1280, 1440, 1920.

**Status:** ✅ Shipped.

## 6. Style variations

### 6.1 Variations shipped (two)
- `styles/minimal.json` (`Minimal`) — sans-serif headings, neutral
  palette (no coral), zero button radius, link underline default.
- `styles/dark.json` (`Dark`) — inverted palette, near-black
  background, lightened coral accent.

Each variation is an intentional redesign, not a palette swap. Both
variations are auto-discovered by the Site Editor Styles panel.

**Status:** ✅ Shipped.

## 7. Assets

### 7.1 CSS
- `assets/css/editor.css` — editor-only styles (paragraph style
  previews for `is-style-muted` and `is-style-lead`, hero preview
  height, contact pattern dark band preview).
- `assets/css/print.css` — print styles (strip chrome, reset colours,
  print URLs after links, page-break rules).

There is intentionally no `assets/css/style.css` body — `theme.json`
produces the bulk of front-end CSS.

**Status:** ✅ Shipped.

### 7.2 JavaScript
- `assets/js/navigation.js` — front-end JS, ~1.4 KB, deferred.
  Two features: sticky header scroll shadow, skip-link focus
  enhancement.

**Status:** ✅ Shipped.

### 7.3 Fonts
- Inter (4 weights, latin): `assets/fonts/inter-{400,500,600,700}.woff2`.
- Newsreader (2 weights + 1 italic, latin):
  `assets/fonts/newsreader-{500,600}.woff2`,
  `assets/fonts/newsreader-500-italic.woff2`.
- License files: `INTER-OFL.txt`, `NEWSREADER-OFL.txt`.
- `@font-face` declarations in `theme.json` `fontFamilies`.
- Three weights preloaded via `<link rel="preload">` in `functions.php`.

**Status:** ✅ Shipped.

### 7.4 Images
- `assets/images/` is intentionally empty in v0.1. The theme does not
  ship a default Open Graph image, favicon, or site icon. The user
  provides these via the Site Editor and the WordPress Customizer
  respectively.

**Status:** ✅ Shipped (by omission).

## 8. Accessibility

### 8.1 Skip link
The theme renders a skip link to `#main` on every template that
includes the header template part. `navigation.js` enhances the
skip link to move focus into the main region on click.

**Status:** ✅ Shipped.

### 8.2 Focus-visible outlines
Every focusable element has a 2px `:focus-visible` outline in the
Accent palette token, with a 2px offset. Defined in `theme.json`
for link and button elements.

**Status:** ✅ Shipped.

### 8.3 Semantic landmarks
Every template uses `header`, `main`, `footer` semantic landmarks
via the template parts and the wrapping `wp:group` block with
`tagName: "main"`.

**Status:** ✅ Shipped.

### 8.4 Heading hierarchy
h1 appears once per template (post title on single/singular, page
title on page, archive title on archive, "Journal"/"Latest writing"
on index/home, hero headline on front-page). h2 for sections, h3
for sub-sections. The 404 page has h1 only.

**Status:** ✅ Shipped.

### 8.5 Colour contrast
Every palette token pairing (text on background, muted on
background, accent on primary, accent on background, white on
primary) is checked at WCAG 2.1 AA. See `docs/ACCESSIBILITY.md`
for the contrast table.

**Status:** ✅ Shipped.

### 8.6 Reduced motion
All CSS transitions are guarded by
`@media (prefers-reduced-motion: no-preference)`. The `prefers-
reduced-motion: reduce` user setting disables motion.

**Status:** ✅ Shipped.

### 8.7 Keyboard navigation
Every interactive element is reachable via keyboard. The Navigation
block opens its mobile overlay via keyboard. The mobile-menu template
part is keyboard-navigable.

**Status:** ✅ Shipped.

## 9. Performance

### 9.1 No external requests
The theme makes zero external requests at install, activation, or
during normal page rendering. No external CSS, JS, fonts, or images.

**Status:** ✅ Shipped.

### 9.2 No jQuery
The theme does not load jQuery on the front-end. WordPress core may
load jQuery on pages that need it (e.g. pages with certain core
blocks), but the theme itself does not enqueue jQuery.

**Status:** ✅ Shipped.

### 9.3 Deferred JavaScript
`navigation.js` is enqueued with `strategy: "defer"` and
`in_footer: true`, so it does not block render.

**Status:** ✅ Shipped.

### 9.4 Font preloading
`functions.php` preloads `inter-400.woff2`, `inter-500.woff2`, and
`newsreader-500.woff2` via `<link rel="preload">` for LCP
optimisation. The preload is conditional on the file existing.

**Status:** ✅ Shipped.

### 9.5 Minimal JavaScript footprint
The theme's only JS file is `navigation.js` at ~1.4 KB uncompressed.
No third-party JS libraries are bundled.

**Status:** ✅ Shipped.

## 10. Internationalisation

### 10.1 Text domain
The theme uses the `godevs-portfolio` text domain throughout. The
text domain is loaded in `functions.php` via
`load_theme_textdomain()`.

**Status:** ✅ Shipped.

### 10.2 Translation template
`languages/godevs-portfolio.pot` is the translation template. v0.1
ships a scaffolded `.pot` file with the strings present in
`functions.php`.

**Status:** ✅ Shipped.

### 10.3 RTL support
Block themes inherit RTL support through the WordPress style engine.
`theme.json` styles are flipped automatically for RTL languages. No
manual `rtl.css` is required.

**Status:** ✅ Shipped.

## 11. Security

### 11.1 Escaping
Every dynamic output in `functions.php` is escaped (`esc_url`,
`esc_attr`, `esc_html`). No `echo` of unescaped data.

**Status:** ✅ Shipped.

### 11.2 Sanitisation
The theme does not accept user input. No sanitisation required
beyond WordPress core's handling.

**Status:** ✅ Shipped.

### 11.3 Capability checks
The theme does not register any privileged action. No capability
checks required.

**Status:** ✅ Shipped.

### 11.4 Nonces
The theme does not handle any form submissions. No nonces required.

**Status:** ✅ Shipped.

### 11.5 Forbidden patterns
- No `eval()`.
- No obfuscated code.
- No base64-encoded payloads.
- No `include` of user-controlled paths.
- No remote requests.
- No hidden tracking.

**Status:** ✅ Shipped.

## 12. Plugin boundary

### 12.1 GoDevs Core detection
`functions.php` checks for the `GODEVS_CORE_VERSION` constant on
`after_setup_theme` and exposes `GODEVS_PORTFOLIO_CORE_ACTIVE`
(true/false). The theme's `godevs_portfolio_core_active` action
fires once if the plugin is detected.

**Status:** ✅ Shipped.

### 12.2 Graceful degradation
The theme works without GoDevs Core. No fatal errors, no broken
queries, no orphan admin UI. See `docs/CORE-PLUGIN-BOUNDARY.md`.

**Status:** ✅ Shipped.

## 13. Documentation

### 13.1 Documentation suite
Twenty-four documentation files in `/docs/`, covering product,
architecture, design system, Gutenberg, theme settings, template
system, pattern system, demo strategy, plugin boundary, responsive
system, accessibility, performance, SEO, security, i18n, WordPress.org
compliance, coding standards, testing plan, QA checklist, browser
compatibility, contributing, AI development guide.

**Status:** ✅ Shipped.

### 13.2 README files
- `README.md` — GitHub-format readme.
- `readme.txt` — WordPress.org-format readme.

**Status:** ✅ Shipped.

### 13.3 CHANGELOG
`CHANGELOG.md` tracks changes per version. v0.1.0 is the
"Unreleased → 0.1.0" first entry.

**Status:** ✅ Shipped.

### 13.4 LICENSE
`LICENSE` is the GPL-2.0 text.

**Status:** ✅ Shipped.

## 14. Project meta

### 14.1 .gitignore
`.gitignore` excludes common development artefacts: `node_modules/`,
`.git/`, `*.log`, OS files, IDE files.

**Status:** ✅ Shipped.

### 14.2 Tests scaffolding
`/tests/` contains:
- `test-activation.php` — activation check.
- `test-theme-json-schema.php` — `theme.json` schema validation.
- `test-pattern-smoke.php` — pattern file header validation.
- `test-templates-exist.php` — template and template-part existence.
- `run.php` — test runner.

**Status:** ✅ Shipped.

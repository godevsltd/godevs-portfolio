# Changelog

All notable changes to GoDevs Portfolio will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

Nothing yet.

## [0.1.0] — 2026-08-29

The initial foundation release. v0.1.0 ships the theme architecture, the design system, the template layer, the header and footer template parts, and the initial eight-pattern library. v0.1.0 does not ship the GoDevs Core plugin, additional style variations, or starter sites — those are downstream phases.

### Added — Theme foundation
- Block theme architecture with `theme.json` schema version 2.
- `style.css` with WordPress theme metadata header.
- `functions.php` with minimal setup: textdomain loading, editor-style enqueue, front-end asset enqueue, font preloading, GoDevs Core plugin detection.
- `index.php` silence-is-golden fallback.
- `readme.txt` in WordPress.org format.
- `README.md` in GitHub format.
- `LICENSE` (GPL-2.0 text).
- `.gitignore`.
- `CHANGELOG.md` (this file).

### Added — Design system
- Eleven named colours (Primary, Secondary, Accent, Background, Surface, Text, Muted, Border, Success, Warning, Error) declared in `theme.json`.
- Two restrained gradients (`surface-fade`, `accent-fade`).
- Three font families: Inter (body / UI), Newsreader (display), mono fallback.
- Eight fluid font sizes (caption → huge) with `fluid.min` and `fluid.max` ranges.
- Eight spacing tokens (0.5× → 6×) exposed as `var:preset|spacing|N`.
- Custom design tokens: radius (`sm`, `md`, `lg`, `pill`), shadow (`sm`, `md`, `lg`), transition (`fast`, `base`), container (`content`, `wide`, `full`).
- Element styles for link, heading, h1-h6, button, caption.
- Per-block overrides for site-title, site-tagline, navigation, post-title, post-excerpt, post-date, quote, pullquote, separator, search.

### Added — Templates
- `templates/index.html` — fallback posts list.
- `templates/home.html` — posts page (Settings → Reading).
- `templates/front-page.html` — static homepage composing 7 patterns.
- `templates/page.html` — default static page.
- `templates/page-no-title.html` — custom page template (declared in `theme.json` `customTemplates`).
- `templates/single.html` — single blog post with comments.
- `templates/singular.html` — any single content type fallback.
- `templates/archive.html` — category, tag, taxonomy, CPT archives.
- `templates/search.html` — search results.
- `templates/404.html` — not found.

### Added — Template parts
- `parts/header.html` — logo + navigation + CTA, sticky on scroll.
- `parts/footer.html` — multi-column footer (logo | studio nav | work nav | contact) with copyright bar.
- `parts/mobile-menu.html` — alternative mobile menu (optional; Navigation block handles its own overlay).

### Added — Block patterns (8)
- `patterns/hero.php` (`godevs-portfolio/hero`) — display headline, lead paragraph, primary + outline CTA.
- `patterns/about.php` (`godevs-portfolio/about`) — two-column: text + 4/5 portrait image.
- `patterns/services.php` (`godevs-portfolio/services`) — three-column numbered services grid.
- `patterns/portfolio-grid.php` (`godevs-portfolio/portfolio-grid`) — Query Loop block, 3-column portfolio grid.
- `patterns/testimonials.php` (`godevs-portfolio/testimonials`) — large editorial pull-quote with attribution.
- `patterns/cta.php` (`godevs-portfolio/cta`) — full-width navy CTA band.
- `patterns/contact.php` (`godevs-portfolio/contact`) — two-column contact section.
- `patterns/footer.php` (`godevs-portfolio/footer`) — minimal alternative footer.

### Added — Style variations
- `styles/minimal.json` (Minimal) — sans-serif headings (Inter replaces Newsreader), neutral palette (no coral), zero button radius, link underline default.
- `styles/dark.json` (Dark) — inverted palette (near-black background, soft slate text), coral accent preserved but lightened.

### Added — Assets
- `assets/css/editor.css` — editor-only styles (paragraph style previews for `is-style-muted` and `is-style-lead`, hero preview height, contact dark band preview).
- `assets/css/print.css` — print styles (strip chrome, reset colours, print URLs after links, page-break rules).
- `assets/js/navigation.js` — front-end JS (~1.4 KB, deferred): sticky header scroll shadow, skip-link focus enhancement.
- `assets/fonts/inter-400.woff2`, `inter-500.woff2`, `inter-600.woff2`, `inter-700.woff2` — Inter latin subset.
- `assets/fonts/newsreader-500.woff2`, `newsreader-600.woff2`, `newsreader-500-italic.woff2` — Newsreader latin subset.
- `assets/fonts/INTER-OFL.txt` — Inter SIL Open Font License 1.1.
- `assets/fonts/NEWSREADER-OFL.txt` — Newsreader SIL Open Font License 1.1.
- `assets/fonts/README.md` — font bundling notes.

### Added — Internationalization
- `godevs-portfolio` text domain declared and loaded via `load_theme_textdomain()`.
- `languages/godevs-portfolio.pot` scaffolded.
- RTL support inherited through WordPress style engine (no manual `rtl.css`).

### Added — Documentation (24 files)
- `docs/PRD.md` — Product requirements document.
- `docs/ARCHITECTURE.md` — Theme architecture.
- `docs/DEVELOPMENT-ROADMAP.md` — 17-phase development roadmap.
- `docs/FEATURE-SPECIFICATION.md` — v0.1 feature specification.
- `docs/DESIGN-SYSTEM.md` — Visual design system.
- `docs/GUTENBERG-ARCHITECTURE.md` — Block editor integration.
- `docs/THEME-SETTINGS.md` — Theme customisation surface.
- `docs/TEMPLATE-SYSTEM.md` — Template layer.
- `docs/PATTERN-SYSTEM.md` — Pattern layer.
- `docs/DEMO-STRATEGY.md` — Starter site architecture.
- `docs/CORE-PLUGIN-BOUNDARY.md` — Theme vs plugin boundary contract.
- `docs/RESPONSIVE-SYSTEM.md` — Responsive strategy.
- `docs/ACCESSIBILITY.md` — Accessibility scope.
- `docs/PERFORMANCE.md` — Performance budget.
- `docs/SEO.md` — SEO foundation.
- `docs/SECURITY.md` — Security scope.
- `docs/INTERNATIONALIZATION.md` — i18n + RTL.
- `docs/WORDPRESS-ORG-COMPLIANCE.md` — WordPress.org preparation.
- `docs/CODING-STANDARDS.md` — Coding standards.
- `docs/TESTING-PLAN.md` — Testing strategy.
- `docs/QA-CHECKLIST.md` — Pre-release checklist.
- `docs/BROWSER-COMPATIBILITY.md` — Browser matrix.
- `docs/CONTRIBUTING.md` — Contribution guide.
- `docs/AI-DEVELOPMENT-GUIDE.md` — AI agent guide.

### Added — Tests
- `tests/test-activation.php` — verifies theme activates without PHP errors.
- `tests/test-theme-json-schema.php` — validates `theme.json` and style variations.
- `tests/test-pattern-smoke.php` — validates pattern file headers and parses.
- `tests/test-templates-exist.php` — verifies all declared templates and parts exist.
- `tests/run.php` — test runner.

### Performance
- Zero external requests at install, activation, or during normal page rendering.
- No jQuery dependency.
- `navigation.js` is ~1.4 KB uncompressed, deferred.
- Three woff2 font weights preloaded via `<link rel="preload">`.
- Bulk of front-end CSS generated by the WordPress style engine from `theme.json` (no separate `style.css` body).

### Accessibility
- Skip link to `#main` on every template that includes the header.
- 2px `:focus-visible` outline in accent colour with 2px offset, defined in `theme.json` for link and button elements.
- Semantic landmarks (`header`, `main`, `footer`, `nav`).
- One `h1` per template; no skipped heading levels.
- Palette tokens verified at WCAG 2.1 AA contrast.
- All CSS transitions guarded by `@media (prefers-reduced-motion: no-preference)`.
- Keyboard navigation works for every interactive element.

### Security
- All output escaped (`esc_url`, `esc_attr`, `esc_html`) in `functions.php`.
- No `eval()`, no obfuscated code, no remote requests, no `base64_decode`, no filesystem writes.
- No CPTs, taxonomies, shortcodes, settings pages, or REST routes registered by the theme.

### Known limitations
- `assets/images/` is empty in v0.1. The theme does not ship default Open Graph images or favicons; users provide these via the Site Editor and Customizer respectively.
- The Contact pattern is a placeholder prompting the user to add a Contact Form block (via a plugin or the WordPress core Contact Form block from Jetpack).
- The Portfolio Grid pattern uses the `core/query` block against the `post` post type. In Phase 8 (GoDevs Core), this will be replaced with a Query Loop block variation targeting the `godevs_portfolio` CPT.
- Demo content in patterns is fictional but realistic. The testimonials pattern explicitly notes "Sample attribution shown for layout reference".

### Plugin boundary
- The theme activates and renders without GoDevs Core.
- `GODEVS_PORTFOLIO_CORE_ACTIVE` PHP constant exposed (true|false).
- `godevs_portfolio_core_active` action hook fires once when the plugin is detected.
- `godevs-core-active` / `godevs-core-inactive` body classes added.

[Unreleased]: https://github.com/godevs/godevs-portfolio/compare/v0.1.0...HEAD
[0.1.0]: https://github.com/godevs/godevs-portfolio/releases/tag/v0.1.0

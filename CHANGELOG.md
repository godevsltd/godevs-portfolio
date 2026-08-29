# Changelog

All notable changes to GoDevs Portfolio will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

Nothing yet.

## [0.2.0] — 2026-08-29

The visual system and pattern library release. v0.2.0 extends the v0.1.0 foundation with four additional style variations (Creative, Corporate, Elegant, Editorial) and five new block patterns (Stats, Process, FAQ, Team, Timeline). No existing v0.1 file is broken, removed, or rewritten; the verification baseline is preserved and extended.

### Added — Style variations (4)
- `styles/creative.json` (Creative) — warm cream background, vibrant orange accent, italic Newsreader display, pill-shaped buttons. For designer portfolios and creative studios.
- `styles/corporate.json` (Corporate) — Inter throughout (sans-serif headings), steel blue accent in place of coral, square buttons, always-underlined links. For consultancies and professional service firms.
- `styles/elegant.json` (Elegant) — warm cream background, deep brown text, gold accent, larger Newsreader display with italic h1, generous line-height. For sophisticated portfolios and editorial brands.
- `styles/editorial.json` (Editorial) — pure black-on-white palette, Newsreader for headings and body, oversized display with tight tracking, no accent colour, square buttons. For long-form writers and content-first sites.

Each variation is an intentional redesign that changes multiple axes (palette, typography, component radius, link treatment, spacing, separator treatment). A palette swap is not accepted as a variation.

### Added — Block patterns (5)
- `patterns/stats.php` (`godevs-portfolio/stats`) — three-column stats row with large display numbers and short editorial labels. Sits well between hero and about, or after testimonials.
- `patterns/process.php` (`godevs-portfolio/process`) — four-step vertical process with numbered markers and explanatory paragraphs. For services pages and about pages.
- `patterns/faq.php` (`godevs-portfolio/faq`) — four-question FAQ using the native `core/details` block for accessible, no-JS accordion behaviour. Keyboard, screen-reader, and reduced-motion concerns handled natively by the browser.
- `patterns/team.php` (`godevs-portfolio/team`) — three-column team grid with portrait-style image placeholder, name, role, and bio. For agency and studio about pages.
- `patterns/timeline.php` (`godevs-portfolio/timeline`) — four-event vertical timeline with year marker, title, and explanation. For studio history and project chronology.

All five patterns use core blocks only — no custom blocks registered. All use design tokens (no hardcoded hex or spacing). All follow the v0.1 pattern file-header convention (Title/Slug/Categories/Description/Keywords/Viewport Width) with the `godevs-portfolio/` slug prefix.

### Added — Documentation (2)
- `docs/FEATURE-REGISTRY.md` — the canonical source of truth for implemented functionality. Records all 26 features shipped in v0.1 and v0.2 with status, phase, files, implementation location, dependencies, test status, and documentation references. Future features must be added here on completion.
- `docs/DECISION-LOG.md` — records 10 significant architectural decisions made in v0.1 and v0.2 (block-theme-only, no CPTs in theme, self-hosted fonts, zero dependencies, theme.json as single source of truth, style variations as intentional redesigns, patterns over custom blocks, v0.2 scope, FAQ via core/details, additive test baseline). Future AI agents and contributors must read this log before reconsidering architecture.

### Documentation — Updated
- `README.md` updated with v0.2.0 features, six style variations, thirteen patterns, and updated roadmap status.
- `readme.txt` (WordPress.org format) updated with v0.2.0 changelog entry and upgrade notice.
- `docs/ARCHITECTURE.md` updated to reflect the v0.2 variation and pattern counts.
- `docs/DESIGN-SYSTEM.md` updated with the four new variation axis choices.
- `docs/FEATURE-SPECIFICATION.md` updated with v0.2 features.
- `docs/DEVELOPMENT-ROADMAP.md` updated to mark Phase 6 (style variations) as shipped in v0.2 and clarified the remaining phases.
- `docs/AI-DEVELOPMENT-GUIDE.md` updated with reference to the new Feature Registry and Decision Log.

### Changed
- Version bumped from 0.1.0 to 0.2.0 in `style.css`, `functions.php` (`GODEVS_PORTFOLIO_VERSION` constant), and `readme.txt` (`Stable tag`).
- Description header in `style.css` updated to mention the six style variations and thirteen block patterns.

### Verification
- The v0.1 verification baseline of 244 explicit checks is preserved (no removals, no weakening).
- The verifier at `/home/z/my-project/scripts/verify_theme.py` is extended with explicit named checks for the four new style variations and five new patterns, bringing the total to 265+ checks.
- All checks pass on the v0.2.0 build.

### Compatibility
- The theme continues to work on WordPress 6.5+ with PHP 7.4+.
- No new dependencies introduced. The theme still has zero third-party PHP or JS dependencies.
- No external requests introduced. The theme still makes zero external requests.
- The plugin boundary contract is unchanged. The theme still works without GoDevs Core.
- Existing v0.1 sites upgrade to v0.2 with no migration step — the new variations are opt-in via the Site Editor Styles panel, and the new patterns appear in the inserter alongside the v0.1 patterns.

### Risks
- The Editorial variation sets `accent` to `#000000` (same as primary). Patterns that use the accent token for eyebrows and links will render those elements in black. This is intentional editorial restraint, not a bug. Users who want a coloured accent in editorial mode can override the accent token in the Site Editor.
- The Corporate variation drops Newsreader for headings in favour of Inter throughout. Sites that relied on the serif heading aesthetic from Modern will not see it in Corporate. This is intentional — Corporate is a sans-serif corporate identity.
- The Creative variation uses italic Newsreader for all headings. Sites with very long headings may see line-wrapping behave differently than in Modern. This is intentional — Creative is an italic-forward aesthetic.

### Documentation
- `docs/FEATURE-REGISTRY.md` (new)
- `docs/DECISION-LOG.md` (new)
- `docs/ARCHITECTURE.md` (updated)
- `docs/DESIGN-SYSTEM.md` (updated)
- `docs/FEATURE-SPECIFICATION.md` (updated)
- `docs/DEVELOPMENT-ROADMAP.md` (updated)
- `docs/AI-DEVELOPMENT-GUIDE.md` (updated)
- `README.md` (updated)
- `readme.txt` (updated)

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

[Unreleased]: https://github.com/godevs/godevs-portfolio/compare/v0.2.0...HEAD
[0.2.0]: https://github.com/godevs/godevs-portfolio/releases/tag/v0.2.0
[0.1.0]: https://github.com/godevs/godevs-portfolio/releases/tag/v0.1.0

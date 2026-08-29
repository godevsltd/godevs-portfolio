# Decision Log — GoDevs Portfolio

This log records significant architectural decisions. Future AI agents
and human contributors should read this log before reconsidering an
architecture; if a decision is documented here, the rationale has
already been considered and a different solution should require a
new entry here (not a silent override).

Each entry follows the format:

```
### Decision
<one-sentence decision>

### Reason
<why this decision was made>

### Alternatives considered
<other options that were considered and why they were rejected>

### Chosen solution
<what was actually implemented>

### Impact
<what this affects now and in the future>

### Date
<YYYY-MM-DD>
```

---

## Decision 1 — Block theme, no classic PHP templating layer

### Decision
GoDevs Portfolio is a modern block theme only. No classic PHP templates
(`header.php`, `footer.php`, `single.php`, `page.php`, `archive.php`)
are shipped or supported.

### Reason
The WordPress block editor and Site Editor are the canonical
customisation surface. Maintaining both classic and block templating
would double the maintenance burden and confuse users. The block theme
model is stable since WordPress 5.9 and is the WordPress-recommended
approach.

### Alternatives considered
- **Hybrid theme** (support both classic and block templates) —
  rejected because hybrid themes inherit the maintenance cost of both
  models and the WordPress.org theme review is moving toward block-
  theme-only recommendations.
- **Classic theme with Gutenberg plugin** — rejected because the
  product brief explicitly required Gutenberg-native architecture.

### Chosen solution
Pure block theme. PHP is used only in `functions.php` (minimal setup)
and pattern file headers. All page rendering is composed from block
templates, template parts, and patterns.

### Impact
- Future contributions must not add classic PHP templates.
- WordPress 6.5+ is the minimum version (block editor and Site Editor
  APIs are stable there).
- The Site Editor is the canonical customisation surface; no Customizer
  panel or settings page is shipped.

### Date
2026-08-29 (v0.1.0)

---

## Decision 2 — No CPTs in the theme

### Decision
The theme does not register any Custom Post Type, taxonomy, shortcode,
settings page, or REST route. Persistent structured content belongs
to the GoDevs Core plugin.

### Reason
WordPress.org theme review guidelines require that persistent content
not be owned by the theme. Themes that register CPTs cause content
lock-in: switching themes orphans the CPT data. The plugin boundary
preserves content portability.

### Alternatives considered
- **Theme registers Portfolio CPT directly** — rejected because of
  content portability issues and WordPress.org compliance risk.
- **Theme ships a "Portfolio" page template that uses post meta** —
  rejected because it duplicates the eventual CPT and would compete
  with GoDevs Core.

### Chosen solution
Theme renders presentation only. GoDevs Core (v0.3, planned) owns
Portfolio / Services / Testimonials / Team / Case Studies / Business
Profile CPTs. The theme exposes `GODEVS_PORTFOLIO_CORE_ACTIVE`
constant, `godevs_portfolio_core_active` action hook, and
`godevs-core-active` / `godevs-core-inactive` body classes.

### Impact
- v0.1 and v0.2 patterns use static content the user edits in the
  Site Editor. Phase 8 (GoDevs Core) will convert relevant patterns
  (Portfolio Grid, Testimonials, Services) to dual-render patterns
  that fall back to static content when the plugin is inactive.
- The theme activates and renders without the plugin. No fatal errors
  when the plugin is deactivated mid-session.

### Date
2026-08-29 (v0.1.0)

---

## Decision 3 — Self-hosted fonts, no external CDN

### Decision
Inter and Newsreader fonts are bundled as woff2 files in
`assets/fonts/`. No external font CDN (Google Fonts, Adobe Fonts,
etc.) is used.

### Reason
External font CDNs introduce a third-party DNS lookup, a render-
blocking stylesheet request, and a privacy concern (the CDN sees the
user's IP and request timing). All three hurt LCP and violate the
WordPress.org external-resources policy for block themes. Bundling
woff2 files keeps everything self-hosted and compliant.

### Alternatives considered
- **Google Fonts CDN** — rejected for performance and privacy
  reasons.
- **Self-hosted variable fonts** — rejected for v0.1 because static
  woff2 instances are smaller per weight and avoid the CSS range-
  resolution complexity. Variable fonts are a v0.5 (Phase 11)
  candidate.

### Chosen solution
Bundled Inter (4 weights) and Newsreader (2 weights + italic) latin-
subset woff2 files. `@font-face` declarations in `theme.json`
`fontFamilies`. Three weights preloaded via `<link rel="preload">`
in `functions.php`.

### Impact
- No external requests on a fresh install.
- ~80 KB compressed font payload (acceptable for v0.1; can be reduced
  in v0.5 by switching to variable fonts).
- Future phases must not introduce external font requests.

### Date
2026-08-29 (v0.1.0)

---

## Decision 4 — Zero third-party PHP/JS dependencies

### Decision
The theme has no third-party PHP or JS dependencies. No jQuery, no
Lodash, no Moment, no Composer packages, no npm packages.

### Reason
Every dependency is a future security advisory waiting to happen.
The WordPress block editor provides all the primitives we need; the
theme's only JS file is ~1.4 KB of vanilla JS. Adding a dependency
would require licensing review, security review, and long-term
maintenance for marginal benefit.

### Alternatives considered
- **Bundle a tiny focus-trap utility for the mobile menu** —
  rejected because the Navigation block handles its own focus
  management. If a future pattern needs a custom focus trap, we will
  write it in 20 lines of vanilla JS.
- **Bundle Lodash for utility functions** — rejected because native
  ES2018+ covers the use cases.

### Chosen solution
Vanilla PHP in `functions.php`. Vanilla ES2018+ JS in
`navigation.js`. No build step. No transpile. No bundler.

### Impact
- Front-end JS footprint: ~1.4 KB uncompressed.
- No `node_modules` in the distribution.
- Future dependencies must be approved by a maintainer and
  documented in `docs/ARCHITECTURE.md` §11.

### Date
2026-08-29 (v0.1.0)

---

## Decision 5 — `theme.json` is the single source of truth for the design system

### Decision
All palette, typography, spacing, layout, and component styling
lives in `theme.json`. Patterns and templates use design tokens, not
hardcoded values.

### Reason
A single source of truth means style variations work without pattern
edits — switching a variation re-binds the CSS variables and every
pattern re-flows. Hardcoded values in patterns would break this
contract.

### Alternatives considered
- **CSS variables in a separate `style.css` body** — rejected
  because `theme.json` is the WordPress-recommended approach for
  block themes and is automatically wired into the Site Editor Styles
  panel.
- **Inline styles in patterns** — rejected because they would not
  respond to style variations.

### Chosen solution
`theme.json` declares palette, gradients, font families, font
sizes, spacing, layout, custom tokens (radius, shadow, transition,
container), element styles (link, heading, h1-h6, button, caption),
and per-block overrides (site-title, navigation, post-title, quote,
pullquote, separator, search).

### Impact
- Patterns must use `var:preset|<type>|<slug>` or
  `var(--wp--preset--<type>--<slug>)` syntax. No hardcoded hex or
  spacing values in patterns.
- Style variations are JSON files that override a subset of
  `theme.json`. The 11-token palette shape is preserved across
  variations so switching variations does not lose references.

### Date
2026-08-29 (v0.1.0)

---

## Decision 6 — Style variations are intentional redesigns, not palette swaps

### Decision
Every style variation changes multiple axes (palette + typography +
component radius + link treatment, etc.), not just the palette. A
palette swap is not a variation.

### Reason
The product brief explicitly forbids "100 copies of the same layout
with different colors". If a user picks the "Corporate" variation,
they expect a recognisably different site, not a recoloured copy
of Modern. The variation axes (palette, typography, radius, link
treatment, spacing, background pattern) are documented in
`docs/DESIGN-SYSTEM.md` §10.

### Alternatives considered
- **Palette-swap variations only** — rejected because it produces
  the "100 copies" anti-pattern the brief forbids.
- **Variations that introduce new block settings** — rejected
  because variations are theme.json subsets; new block settings
  belong in `theme.json` itself.

### Chosen solution
Each variation picks at least 3 axes to change. v0.1 shipped
Minimal (typography + radius + link treatment) and Dark (palette
+ component colour). v0.2 adds Creative (palette + typography +
radius + spacing), Corporate (palette + typography + radius +
link treatment), Elegant (palette + typography + spacing +
borders), and Editorial (palette + typography + body size +
separator treatment).

### Impact
- v0.2 ships 6 total variations (Modern default + 5 named).
- The future 100-site catalogue (Phase 9) will compose starter
  sites from these variations + pattern sets, with each starter
  site picking a variation + curating a pattern subset.

### Date
2026-08-29 (v0.1.0); extended 2026-08-29 (v0.2.0)

---

## Decision 7 — Patterns are core block markup, not custom blocks

### Decision
v0.1 and v0.2 ship zero custom blocks. Patterns are compositions
of core blocks (group, columns, heading, paragraph, buttons, image,
query, navigation, quote, pullquote, separator, search, details).

### Reason
Custom blocks require a build pipeline, server-side render
callback, deprecation handling, and long-term maintenance. Native
blocks already cover the use cases. The "Custom block rule" in
`docs/GUTENBERG-ARCHITECTURE.md` §10 documents the test: can a
core block solve this? Can a pattern solve this? Is dynamic data
actually required?

### Alternatives considered
- **Custom "Portfolio" block** — rejected because the Query Loop
  block already renders portfolio items. The Portfolio Grid pattern
  uses Query Loop with a 3-column grid layout.
- **Custom "FAQ" block** — rejected because the `core/details`
  block (WP 6.3+) provides accordion behaviour. The FAQ pattern
  composes multiple `core/details` blocks.
- **Custom "Stats" block** — rejected because a 3-column columns
  block with large paragraphs renders the same layout without
  custom block overhead.

### Chosen solution
v0.1 ships 8 patterns (hero, about, services, portfolio-grid,
testimonials, cta, contact, footer). v0.2 adds 5 patterns
(stats, process, faq, team, timeline) — total 13 patterns. All
use core blocks. Zero custom blocks.

### Impact
- The theme has zero build pipeline.
- Patterns remain editable in the Site Editor — users inserting a
  pattern get a copy of the markup they can change in place.
- Phase 8 (GoDevs Core) may introduce custom blocks for dynamic
  CPT rendering, but only when native Query Loop block variations
  cannot solve the use case.

### Date
2026-08-29 (v0.1.0); extended 2026-08-29 (v0.2.0)

---

## Decision 8 — v0.2 scope: 4 style variations + 5 patterns, no front-page composition change

### Decision
v0.2 adds Creative, Corporate, Elegant, and Editorial style
variations plus Stats, Process, FAQ, Team, and Timeline patterns.
The existing front-page template composition is left unchanged.

### Reason
The brief said "Do not chase feature quantity. Improve the product
incrementally." Adding 4 variations + 5 patterns doubles the
visual surface area and adds the most universally-needed missing
patterns. Modifying the front-page composition would risk
regressing v0.1 layouts that users may have already customised.

### Alternatives considered
- **Add all 8 suggested patterns (Stats, Process, FAQ, Team,
  Case Study, Resume, Experience, Timeline)** — rejected because
  Case Study overlaps with the future Case Studies CPT (Phase 8)
  and Resume/Experience are too niche for the foundation pattern
  library (better suited to Phase 9 starter sites for personal
  brands).
- **Modify front-page to include Stats after Hero** — rejected
  to preserve v0.1 layout stability. Users insert Stats via the
  inserter where they want it.
- **Improve existing 8 patterns visually** — rejected because
  the v0.1 patterns already pass the design quality bar and
  "improvements" would risk regressing tested layouts.

### Chosen solution
- 4 new style variations in `/styles/` (creative.json,
  corporate.json, elegant.json, editorial.json).
- 5 new patterns in `/patterns/` (stats.php, process.php,
  faq.php, team.php, timeline.php).
- Existing 8 patterns unchanged.
- Existing front-page template unchanged.
- `docs/FEATURE-REGISTRY.md` (new) tracks all features.
- `docs/DECISION-LOG.md` (this file) records architecture
  decisions.

### Impact
- v0.2 ships 13 patterns and 6 style variations (Modern default +
  Minimal, Dark, Creative, Corporate, Elegant, Editorial).
- The verification baseline grows from 244 to ~265 checks
  (existing 244 + new specific checks for the new files).
- v0.3 starts the GoDevs Core plugin (Phase 8).

### Date
2026-08-29 (v0.2.0)

---

## Decision 9 — FAQ pattern uses `core/details`, not a custom accordion

### Decision
The FAQ pattern composes multiple `core/details` blocks (the native
HTML `<details>`/`<summary>` accordion introduced in WordPress
6.3+) rather than registering a custom FAQ block or relying on a
JavaScript-based accordion library.

### Reason
`core/details` is a native WordPress block, accessible by default
(keyboard-operable, semantic HTML, no JS dependency). It is
available since WordPress 6.3, which is below the theme's
minimum version (6.5). Using it requires zero JavaScript and
zero custom block infrastructure.

### Alternatives considered
- **Custom "FAQ Accordion" block with JS** — rejected because
  `core/details` already provides accordion behaviour.
- **Static Q&A paragraphs (no accordion)** — rejected because
  accordion behaviour is a common FAQ UX expectation and
  `core/details` provides it natively.

### Chosen solution
The FAQ pattern uses 4 `core/details` blocks, each with a
question as the summary and an answer as the content. The
pattern is keyboard-navigable, screen-reader-compatible, and
respects `prefers-reduced-motion` (no JS-driven animation).

### Impact
- The FAQ pattern works without JavaScript.
- The pattern uses the theme's design tokens for the summary
  and content typography.
- The pattern is fully editable in the Site Editor — users can
  add, remove, or reorder questions.

### Date
2026-08-29 (v0.2.0)

---

## Decision 10 — Test baseline is additive, not destructive

### Decision
v0.2 keeps every v0.1 verification check (244) and adds new
specific checks for the new files (Creative, Corporate, Elegant,
Editorial variations; Stats, Process, FAQ, Team, Timeline
patterns; FEATURE-REGISTRY.md; DECISION-LOG.md). No existing
check is removed or weakened.

### Reason
The brief said: "Do not reduce this baseline. After v0.2:
Existing tests must continue passing. New functionality must
have appropriate tests. Any failure must be investigated before
proceeding. Target: 244+ checks passing."

### Alternatives considered
- **Rewrite the verifier to count new totals** — rejected
  because it would obscure which v0.1 checks still pass.
- **Replace existing checks with more specific ones** —
  rejected because the v0.1 checks document v0.1 invariants.

### Chosen solution
The verifier at `/home/z/my-project/scripts/verify_theme.py`
gains new specific file checks (each new style variation exists
and is valid JSON; each new pattern file exists, has a Title
header, has a Slug header prefixed `godevs-portfolio/`, has
at least one block comment). The PHP test suite in `/tests/`
similarly gains new pattern and variation assertions.

### Impact
- v0.2 verification target: 244+ checks passing (actual: ~265).
- v0.1 regressions surface immediately.
- v0.3+ continues the additive pattern.

### Date
2026-08-29 (v0.2.0)

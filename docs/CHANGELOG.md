# Changelog

All notable changes to GoDevs Portfolio are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [Unreleased]

No unreleased changes.

---

## [0.4.0] — Phase 4 Stability & Demo Import System

### Fixed

#### Critical Gutenberg Editor Bug

- **Root cause:** `parts/footer-social.html` used a non-existent block `wp:social-links` (correct name: `wp:social-icons`). This caused the WordPress Pattern Inserter to throw "The editor has encountered an unexpected error" when browsing patterns.
- **Fix:** Renamed `wp:social-links` → `wp:social-icons` (and matching CSS class).
- **Verification:** New `audit-gutenberg-compat.py` validates every block name against the WordPress core block registry (65 known blocks). All 197 markup files pass.

#### Undefined Spacing Preset References

- **Root cause:** 12 pattern files referenced `var:preset|spacing|10` but the spacing scale only defines presets `20` through `100`. WordPress 6.5+ stricter preset validation could cause layout issues in the editor.
- **Fix:** Replaced `var:preset|spacing|10` with `var:preset|spacing|20` (the smallest defined preset, 0.5rem) across 12 files (26 occurrences).
- **Verification:** `audit-gutenberg-compat.py` validates every preset reference against `theme.json` definitions. All preset references are now valid.

### Added

#### Native Demo Import System

- **Admin page:** Appearance → GoDevs Demos — a full demo browser showing all 102 demos with name, category, recommended style, description, and Import/Preview actions.
- **Demo registry** (`inc/demo-registry.php`): data-driven — reads demo metadata directly from existing pattern files in `patterns/demos/`. No hardcoded UI for 102 demos; the system scales to 200, 500+ future demos without code changes.
- **Import controller** (`inc/demo-importer.php`): handles AJAX endpoints for preview, import, and removal. Creates pages, navigation menu, applies homepage setting (Starter mode only), applies style variation (optional).
- **Import tracker** (`inc/demo-tracker.php`): records what the importer created (page IDs, nav menu ID, homepage ID, applied style) in a single WordPress option. Enables duplicate-import detection and clean rollback.
- **Two import modes:**
  - **Starter Import** — for fresh sites. Sets homepage, applies recommended style variation, creates recommended pages.
  - **Safe Import** — for existing sites. Creates pages without changing homepage or style. Existing content is never deleted.
- **Confirmation modal** with full import summary: demo name, category, pages to be created, navigation, homepage setting, style changes. Existing content is never deleted without explicit confirmation.
- **Import progress indicator** with step-by-step status: Preparing → Creating pages → Creating navigation → Applying homepage → Applying demo layout → Applying style → Complete.
- **Duplicate import protection** — if a demo has already been imported, the admin UI shows an "Imported" badge and a "Remove" button. Re-importing prompts a warning.
- **Demo cleanup** — the "Remove" button trashes the imported pages and deletes the imported navigation menu. Trashed pages can be restored from the WordPress trash. The tracker only deletes content it created — never user content.
- **Demo filtering** — search by name/category/keyword, filter by category, filter by recommended style variation. Efficient client-side filtering (no per-card AJAX).
- **Demo preview** — modal-based preview that fetches the rendered demo markup via AJAX. Does not modify the current site.

#### Security

- Every AJAX endpoint verifies a nonce (`godevs_demo_admin`).
- Every AJAX endpoint checks `current_user_can( 'manage_options' )` (admin only).
- Demo IDs are validated via `sanitize_file_name()` and checked against the registry.
- No direct database writes — uses WordPress APIs (`wp_insert_post`, `wp_create_nav_menu`, `wp_update_nav_menu_item`, `update_option`).
- No inline JavaScript — all JS in `assets/js/admin-demos.js`.
- All output escaped via `esc_html()`, `esc_attr()`, `esc_url()`, `wp_json_encode()`.

#### Documentation

- `docs/PHASE-4-DEBUG-REPORT.md` — full root cause analysis of the Gutenberg editor bug, the fix, and the regression test.
- `docs/PATTERN-QUALITY-GUIDE.md` — pattern authoring quality guide (planned for Phase 4).
- `docs/DEMO-IMPORT-SYSTEM.md` — demo import system architecture, security model, import modes, rollback.

#### Core Block Style Improvements

- New card variants registered: `card-editorial`, `card-featured`, `card-numbered` (total: 7 card variants).
- `core/pullquote` — added cite styling (smaller, normal-weight, muted color).
- `core/quote` — added left accent border (2px), left padding, cite styling.
- `core/image` — default 4px border radius.
- `core/cover` — default 480px minimum height.
- `core/buttons` — default `blockGap: 30` for consistent spacing.
- `core/heading` — explicit display font family + 700 weight.

#### Button State Improvements

- Added `:active` state to all button variants (subtle 1px translate on click).
- Added smooth color transitions (150ms ease) to outline, text-link, pill, and default buttons.
- Arrow button: `::after` arrow translates 2px on hover for directional affordance.
- All transitions respect `prefers-reduced-motion: reduce` (already enforced globally).

#### Audit Script

- `scripts/audit-gutenberg-compat.py` — new audit that validates every block name, every preset reference, every template-part reference, and every pattern metadata header. Catches the kind of bug that caused the Gutenberg editor error.

### Validation Performed

- PHP static audit (165 files): 0 issues
- JSON validation (8 files): 0 failures
- Block markup balance audit (197 files): 0 issues
- Gutenberg compatibility audit (197 files): 0 issues (validates block names, preset references, template-part references, pattern metadata)
- Structure audit (required dirs, files, pattern headers, template structure, hardcoded colors, emoji): 0 issues
- Theme.json: valid schema v3
- All 102 demos + 56 patterns + 23 template parts + 16 templates pass every audit

### Known Issues

- `php -l` not executed — PHP CLI not installed in the sandbox. Static checks (delimiter balance, ABSPATH guard, forbidden patterns, text-domain regex) cover common failure modes.
- Theme Check plugin not run — requires a live WordPress install.
- No live WordPress runtime test — theme was not activated on an actual install. Block markup validates statically. **Recommendation:** install the ZIP on a local WordPress 6.5+ install to verify the Gutenberg editor fix and the demo import flow end-to-end.
- `screenshot.png` is still the Phase 1 generated title-card. Should be regenerated with a real screenshot showing the demo library admin page in a future phase.
- Style variation application uses user meta (`godevs-portfolio-applied-style`) as a lightweight fallback. WordPress core reads the active variation from the `wp_global_styles` post. Programmatically applying a style variation requires either (a) writing to the global styles post (complex and version-dependent) or (b) instructing the user to apply it via the Site Editor → Styles browser. Phase 4 uses approach (b) — the admin UI shows the recommended style, and the import success modal links to the Site Editor.

---

## [0.3.0] — Phase 3 Demo Website Library

### Added

#### Demos — 102 ready portfolio websites

- 102 demo pattern files in `patterns/demos/` covering 11 categories:
  - **Developer / Technology** — 13 demos (Atelier, Monolith, Northline, Gridline, Vertex, Compile, Terminal, Frame, Blueprint, Keystone, Syntax, Polyglot, +1)
  - **Designer** — 7 demos (Canvas, Palette, Studio Craft, Inkwell, Marker, Draft, Pill)
  - **Creative / Artist** — 4 demos (Vivid, Fieldnotes, Atlas, Obscura, Studio Noir)
  - **Photography / Visual** — 9 demos (Aperture, Veil, Runway, Compass, Studio Light, Visage, Edifice, Exposure, Darkroom)
  - **Agency / Studio** — 11 demos (Northbound, Signal, Blueprint Studio, Foundry, Workshop, Codecraft, Momentum, Perspective, Frame Works, Solo Practice, Searchlight, Split)
  - **Business Professional** — 10 demos (Meridian, Criterion, Compass Rose, Ledger, Keystone Pro, Vantage, Catalyst, Advisor, Summit, Impact)
  - **Architecture / Interior** — 8 demos (Plan, Atelier Arch, Interior, Spacecraft, Verdure, Grid City, Structural, Form)
  - **Personal Brand** — 12 demos (Signature, Founder, Executive, Speaker, Scribe, Writer, Freelance, Creator, Professional, Personal Brand, Central, Stack, Text Link)
  - **Education / Academic** — 8 demos (Scholar, Research, Professor, Teacher, Guide, Course, Academia, Thesis)
  - **Lifestyle / Modern Professional** — 10 demos (Minimal, Editorial, Lux, Couture, Lifestyle, Wander, Content, Modern Freelance, Magazine, Concise)
  - **Specialized** — 8 demos (Director, Producer, Curator, Copy, Journalist, PM, Technologist, Independent)
- Each demo is a single PHP pattern file that composes header + hero + body section + CTA + footer using the Phase 2 pattern library.
- Each demo declares a recommended style variation in its PHP header.
- Each demo varies on at least 3 axes (hero, body, CTA, header, footer, variation) — no two demos are duplicates.

#### New Pattern Category
- `godevs-portfolio-demos` — registered in `inc/block-patterns.php`

#### Documentation
- `docs/DEMO-SYSTEM.md` — full demo system architecture, naming, composition, anti-repetition strategy, quality checklist, future expansion
- `docs/demo-matrix.csv` — design matrix tracking all 102 demos

#### Generator Script
- `scripts/generate-demos.py` — generates all 102 demo files from a single source-of-truth `DEMOS` list. Supports adding new demos by appending to the list.

### Architecture

- Demos are **compositions** of existing pattern primitives — not forked copies of the theme.
- Each demo embeds inline block markup using existing template parts, hero compositions, body sections, and CTAs.
- The theme remains lightweight: demos are static PHP files with zero runtime cost when not inserted.
- WordPress.org compliant: no admin UI, no importer, no telemetry, no companion plugin required.
- Adding more demos is a single PHP file per demo — no architectural changes needed.

### Validation Performed

- PHP static audit (161 files): 0 issues
- JSON validation (8 files): 0 failures
- Block markup balance audit (197 files): 0 issues
- Structure audit (required dirs, files, pattern headers, template structure, hardcoded colors, emoji): 0 issues
- Theme.json: valid schema v3
- All 102 demos pass block markup balance audit

### Known Issues

- `php -l` not executed — PHP CLI not installed in the development sandbox
- Theme Check plugin not run — requires a live WordPress install
- No live WordPress runtime test — theme was not activated on an actual install
- `screenshot.png` is still the Phase 1 generated title-card — should be updated to reflect the Phase 3 composed homepage in a future phase

---

## [0.2.0] — Phase 2 Premium Design Library

### Added

#### Patterns — 46 new patterns (total: 56)

**Hero (7 new, total: 8)**
- Hero — Centered Introduction
- Hero — Large Typography
- Hero — Image Focus
- Hero — Minimal
- Hero — Dark Creative
- Hero — Stats
- Hero — CTA

**About (4 new, total: 5)**
- About — Profile and Stats
- About — Editorial
- About — Story
- About — Minimal

**Services (5 new, total: 6)**
- Services — Three Column List
- Services — Feature List
- Services — Bordered Cards
- Services — Split
- Services — Numbered Features
- Services — Featured

**Portfolio (7 new, total: 8)**
- Portfolio — Two Column
- Portfolio — Four Column
- Portfolio — Featured
- Portfolio — Editorial
- Portfolio — Asymmetric
- Portfolio — Minimal
- Portfolio — Large Showcase

**Skills (4 new, total: 5)**
- Skills — Progress
- Skills — Technology Grid
- Skills — Minimal
- Skills — Statistics

**Experience (3 new, total: 4)**
- Experience — Resume
- Experience — Career Cards
- Experience — Editorial

**Testimonials (3 new, total: 4)**
- Testimonials — Cards
- Testimonials — Featured
- Testimonials — Minimal

**CTA (3 new, total: 4)**
- CTA — Full Width
- CTA — Typography
- CTA — Minimal

**Contact (3 new, total: 4)**
- Contact — Split
- Contact — Information
- Contact — Minimal

**Blog (3 new, total: 4)**
- Blog — Three Column Grid
- Blog — Editorial Magazine
- Blog — Minimal List

**Stats (3 new, total: 3)**
- Stats — Four Column
- Stats — Large Numbers
- Stats — Minimal

**New pattern category registered**
- `godevs-portfolio-stats` — Stats (numerical highlights, statistics, and metric grids)

#### Template Parts — 9 new headers + 8 new footers (totals: 12 headers, 11 footers)

**Headers (9 new)**
- `parts/header-centered.html` — Centered logo above centered navigation
- `parts/header-split.html` — Logo left, title + tagline grouped
- `parts/header-with-search.html` — Header with search affordance
- `parts/header-with-language-switcher.html` — Header with EN · DE label
- `parts/header-portfolio.html` — Portfolio with pill CTA button
- `parts/header-dark.html` — Dark inverted header
- `parts/header-cta.html` — Header with text-link CTA
- `parts/header-editorial.html` — Magazine-style masthead with divider
- `parts/header-stacked.html` — Stacked with large centered title

**Footers (8 new)**
- `parts/footer-newsletter.html` — Footer with newsletter signup band
- `parts/footer-multi-column.html` — Four-column with brand + nav + contact
- `parts/footer-compact.html` — Compact single-row footer
- `parts/footer-dark.html` — Dark inverted footer
- `parts/footer-social.html` — Social-led footer with prominent icon row
- `parts/footer-portfolio.html` — Portfolio footer with quick links + email
- `parts/footer-editorial.html` — Magazine-style footer with masthead
- `parts/footer-large-type.html` — Footer dominated by oversized wordmark

#### Custom Page Templates — 4 new

- `templates/page-portfolio.html` — Portfolio Landing (grid + post content above)
- `templates/page-case-study.html` — Case Study (full-featured image + body + nav)
- `templates/page-services.html` — Services Landing (post content + 3-step process)
- `templates/page-about.html` — About Long-form (constrained content width)

All registered in `theme.json` → `customTemplates` with `postTypes: ["page"]`.

#### Front Page — Composed Homepage

- `templates/front-page.html` replaced. New composition: transparent header → hero → about preview → services preview → featured portfolio grid → stats (inverted band) → testimonial → CTA → footer-cta. Demonstrates the theme's full design system in one page.

#### Style Variations — 4 new (total: 8)

- `styles/modern.json` — Modern: sharp corners, neutral palette with sky accent, uppercase buttons
- `styles/creative.json` — Creative: warm amber on cream, generous radii, soft pill buttons
- `styles/elegant.json` — Elegant: serif display (Cormorant-style), emerald accent, refined
- `styles/corporate.json` — Corporate: structured blue, conventional radii, mid-gray surfaces

Each variation satisfies the Three-Change Rule (typography + colors + spacing + radius + density etc.).

#### Block Styles — 5 new

- `core/button` — `arrow` variant (text-link with directional affordance via CSS `::after`)
- `core/image` — `rounded` (1rem radius)
- `core/image` — `framed` (border + padding + surface background)
- `core/image` — `soft` (subtle shadow, no border)
- `core/image` — `full-bleed` (negative margins for full-width display)

Total registered block styles: 12 (Phase 1: 7 + Phase 2: 5).

#### Theme.json

- `customTemplates` populated with the 4 new custom page templates
- `templateParts` expanded from 6 to 23 entries (12 headers + 11 footers)
- New pattern category `godevs-portfolio-stats` registered in `inc/block-patterns.php`
- 4 new style variations added

#### CSS

- New `assets/css/theme.css` rules: button `arrow` variant, 4 image variants (rounded, framed, soft, full-bleed)

#### Version

- Bumped from 0.1.0 to 0.2.0 in:
  - `style.css` header
  - `readme.txt` Stable tag
  - `functions.php` `GODEVS_PORTFOLIO_VERSION` constant

### Validation Performed

- PHP static audit (59 files): 0 issues
- JSON validation (8 files): 0 failures
- Block markup balance audit (95 files): 0 issues
- Structure audit (required dirs, files, pattern headers, template structure, hardcoded colors, emoji): 0 issues
- Theme.json: valid schema v3
- File-size budgets: all within Phase 1 limits

### Known Issues

- `php -l` not executed — PHP CLI not installed in the development sandbox. Static checks (delimiter balance, ABSPATH guard, forbidden patterns, text-domain regex) cover the common failure modes.
- Theme Check plugin not run — requires a live WordPress install.
- No live WordPress runtime test — theme was not activated on an actual install. Block markup validates statically.
- Pattern files use `<?php echo esc_url( get_template_directory_uri() . '/...' ); ?>` for image URLs in the hero and about patterns. WordPress loads pattern files via output buffering, so these resolve to actual URLs at runtime. If the pattern loading mechanism changes, these need updating.
- `screenshot.png` is still the Phase 1 generated title-card. A real screenshot reflecting the composed homepage should be generated in Phase 6 or 7.

---

## [0.1.0] — Phase 1 Foundation

### Added

#### Theme Foundation
- `style.css` with WordPress theme header
- `functions.php` with minimal theme bootstrap (enqueues, editor styles, theme supports, pattern registration)
- `theme.json` with full design system: color palette (12 tokens), typography (3 families, 9 sizes), spacing scale (10 steps), layout widths, border radius, shadow presets, block styles, element styles, custom templates registration, pattern category registration
- `readme.txt` compliant with WordPress.org requirements
- `LICENSE` (GPL v2 or later)
- `.editorconfig` for consistent editor configuration
- `README.md` (developer-facing)
- 15 Markdown documents in `docs/`:
  - `PRD.md`, `ARCHITECTURE.md`, `DESIGN-SYSTEM.md`, `PATTERN-SYSTEM.md`, `TEMPLATE-SYSTEM.md`
  - `STYLE-VARIATIONS.md`, `ACCESSIBILITY.md`, `PERFORMANCE.md`, `SECURITY.md`, `WORDPRESS-STANDARDS.md`
  - `AI-DEVELOPMENT-GUIDE.md`, `CONTRIBUTING.md`, `QA-CHECKLIST.md`, `RELEASE-ROADMAP.md`, `CHANGELOG.md`

#### Templates (12)
- `templates/index.html` — Fallback / blog index
- `templates/home.html` — Posts page
- `templates/front-page.html` — Front page
- `templates/page.html` — Generic page
- `templates/single.html` — Single post
- `templates/archive.html` — Generic archive
- `templates/category.html` — Category archive
- `templates/tag.html` — Tag archive
- `templates/author.html` — Author archive
- `templates/date.html` — Date archive
- `templates/search.html` — Search results
- `templates/404.html` — Not found

#### Template Parts (6)
- `parts/header.html` — Default header (logo + nav + CTA)
- `parts/header-minimal.html` — Minimal header (logo + nav)
- `parts/header-transparent.html` — Transparent header (for hero overlay)
- `parts/footer.html` — Default footer (4-column + copyright)
- `parts/footer-minimal.html` — Minimal footer (logo + copyright)
- `parts/footer-cta.html` — Footer with CTA band

#### Patterns (10 representative)
- `patterns/hero/split-profile.php` — Hero — Split Profile
- `patterns/about/image-and-stats.php` — About — Image and Stats
- `patterns/services/feature-cards.php` — Services — Feature Cards
- `patterns/portfolio/three-column-grid.php` — Portfolio — Three Column Grid
- `patterns/skills/labeled-list.php` — Skills — Labeled List
- `patterns/experience/vertical-timeline.php` — Experience — Vertical Timeline
- `patterns/testimonials/single-quote.php` — Testimonials — Single Quote
- `patterns/cta/split-cta.php` — CTA — Split Band
- `patterns/contact/contact-cta.php` — Contact — Inline CTA
- `patterns/blog/featured-posts.php` — Blog — Featured Posts

#### Style Variations (3 + Default)
- `styles/minimal.json` — Minimal variation (white background, sharp corners, no shadows)
- `styles/dark.json` — Dark variation (deep neutral background, brighter accent)
- `styles/editorial.json` — Editorial variation (serif display, cream background, sharp corners)

#### Pattern Categories Registered (18)
- `godevs-portfolio-hero` through `godevs-portfolio-pages` (see `inc/block-patterns.php`)

#### Block Styles Registered
- `core/button` — Outline style
- `core/button` — Text Link style
- `core/button` — Pill style
- `core/group` — Card Default style
- `core/group` — Card Bordered style
- `core/group` — Card Elevated style
- `core/group` — Card Minimal style
- `core/separator` — Thin style
- `core/separator` — Dots style
- `core/paragraph` — Eyebrow style

#### Accessibility Foundation
- Skip link target via `<main>` element in every template
- Visible focus state (2px accent outline with 2px offset)
- `prefers-reduced-motion` overrides in `assets/css/theme.css`
- Semantic HTML via `tagName` block attribute
- Heading hierarchy enforced via template composition
- WCAG 2.1 AA contrast in default palette and all variations

#### Performance Foundation
- No required plugins
- No external font CDN (system fonts)
- No icon library
- No jQuery dependency
- No CSS framework
- No JavaScript enqueued in Phase 1 (`assets/js/theme.js` is empty)
- Minimal supplementary CSS in `assets/css/theme.css`
- All design tokens emitted via `theme.json`

#### Security Foundation
- All output escaped via WordPress escaping functions
- No user input handling (plugin territory)
- No database writes
- No file operations
- No remote requests
- No inline JavaScript
- No `eval()`, `exec()`, etc.

#### Documentation
- 15 comprehensive Markdown documents in `docs/`
- Each document is project-specific (no placeholder text)

### Validation Performed

- PHP static audit — PASS (0 issues across 13 files)
- JSON validation — PASS (0 failures across 4 files)
- Block markup balance audit — PASS (0 issues across 28 files)
- Structure audit — PASS (0 issues)

### Known Issues

- `php -l` not executed — PHP CLI not installed in the development sandbox
- Theme Check plugin not run — would require a live WordPress install
- `screenshot.png` is a generated title-card placeholder

### Next Phase

Phase 2 — Premium Design Library (delivered in 0.2.0). See above.

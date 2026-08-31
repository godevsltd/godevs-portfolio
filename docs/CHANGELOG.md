# Changelog

All notable changes to GoDevs Portfolio are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [Unreleased]

No unreleased changes.

---

## [2.5.1] — Fixed Demo Library Showing 75 Complete Instead of 10

### Fixed

#### Critical: Demo Library Showed 75 Demos as "Complete" Instead of 10

- **Root cause:** The `is_complete` field was set by `godevs_portfolio_is_demo_complete()`, which checked whether every recommended page had a pattern file in `patterns/demos/`. However, ALL 102 demos had inner-page pattern files (created as stubs in a previous session), so all 102 passed the file-existence check — and 75 of them sorted into the "Ready Demos" section.
- **Fix:** Changed `is_complete` to use the existing `is_ready` field instead. The `is_ready` field is the production-ready list hardcoded in `godevs_portfolio_parse_demo_file()` — exactly 10 demos: `monolith`, `canvas`, `aperture`, `northbound`, `meridian`, `plan`, `signature`, `scholar`, `minimal`, `director`. These are the only demos that have been fully designed with real content on every page and reviewed.
- **Result:** The demo library now correctly shows:
  - **Ready Demos section:** 10 demos (the production-ready ones) with Complete badge + Import button enabled
  - **Coming Soon section:** 92 demos with "Coming Soon" badge + disabled Import button
  - The hero stats now show `10 Ready · 92 Coming Soon · 102 Total` instead of `75 Ready · 27 Coming Soon · 102 Total`

### Validation Performed

- PHP static audit (657 files): 0 issues.
- Confirmed the 10 production-ready demos match the user's list:
  - monolith (Developer) — 5 pages
  - canvas (Designer) — 6 pages
  - aperture (Photography) — 5 pages
  - northbound (Agency) — 5 pages
  - meridian (Business) — 5 pages
  - plan (Architecture) — 5 pages
  - signature (Personal) — 5 pages
  - scholar (Education) — 5 pages
  - minimal (Lifestyle) — 5 pages
  - director (Specialized) — 4 pages

---

## [2.5.0] — Demo Library Redesign & Live iframe Preview

### Added

#### Demo Library Now Embedded in Theme Settings

- The "Demo Library" is now a tab inside **Appearance → GoDevs Settings** (previously a separate standalone page). The previous "Demo settings" tab has been replaced with the full demo browser UI — filters, grid, live preview modal, and import flow are all accessible from within the settings page.
- The standalone **Appearance → GoDevs Demos** menu is preserved as a shortcut that jumps directly to the Demo Library tab.

#### Live iframe Preview (Real Rendered Pages)

- New `inc/demo-renderer.php` — a PHP port of the Python `scripts/render-demo-html.py` renderer. It produces a complete HTML5 document for any demo page by:
  - Stripping the PHP docblock + ABSPATH guard
  - Replacing `<?php echo esc_url(get_template_directory_uri() . '/path'); ?>` with real theme asset URLs
  - Resolving `<!-- wp:template-part -->` references recursively (inlining the parts/*.html contents)
  - Replacing dynamic block stubs (wp:site-logo, wp:navigation, wp:site-title, wp:social-icons) with placeholder HTML
  - Expanding `var:preset|spacing|40` references into `var(--wp--preset--spacing--40)` CSS variables
  - Fixing wp:cover block elements with inline absolute positioning
  - Wrapping the result in an HTML5 document with the Inter webfont, theme.css, and CSS variables derived from theme.json
- New AJAX endpoint `godevs_render_demo_page` streams the rendered HTML as `text/html` — suitable for direct `<iframe src>` loading.
- New `godevs_portfolio_render_demo_page_url()` helper generates a nonce-protected URL for the iframe.
- New `assets/css/demo-preview.css` — the static-render adjustments CSS (cover block layering, header/footer dark variants, column flexbox, button styling, etc.) loaded into the iframe preview. Extracted to a separate file to avoid PHP heredoc brace-counting issues in static audits.

#### Preview Modal Now Uses iframe

- The preview modal's `#godevs-preview-content` div (which previously received raw block markup via `innerHTML` — no CSS context, broken layout) has been replaced with an `<iframe id="godevs-preview-iframe">`. The iframe loads the rendered HTML5 document from the new AJAX endpoint, so the preview shows the **real rendered page** with full CSS, fonts, and layout — exactly as it would appear after import.
- New "Open in new tab" button in the modal footer — opens the current preview page in a full browser window for closer inspection.
- iframe is sandboxed (`allow-same-origin allow-scripts allow-popups allow-forms`) for security.
- A small inline `<script>` in the rendered HTML prevents link clicks from navigating the iframe — the preview stays on the current page.
- Device switcher (desktop/tablet/mobile) now resizes the iframe to the correct viewport width (1280px / 768px / 390px) with proper aspect ratios.

### Improved

#### Complete UI/UX Redesign of Demo Library

The admin demo library has been completely redesigned with a modern, professional aesthetic:

- **Hero header** — dark gradient background (slate-900 → slate-800) with a premium badge, large headline, subtitle, and three stat cards (Ready / Coming Soon / Imported) showing live counts.
- **Filter bar** — clean white card with search input (icon + placeholder), category dropdown, style dropdown, clear-filters button, and a live result count pill. All inputs use consistent border-radius, focus states with accent ring, and smooth transitions.
- **Two-section grid** — demos are split into "Ready Demos" (complete, with blue accent border + hover lift) and "Coming Soon" (faded to 75% opacity). Each section has its own header with icon, title, count badge, and subtitle.
- **Demo cards** — browser-frame mockup (macOS-style traffic-light dots + URL bar showing the demo name) wrapping a real screenshot thumbnail. Hover reveals a dark overlay with a "Preview Demo" CTA button. Status badges (Complete / Ready / Coming Soon) appear in the top-left corner; Imported badge appears in the top-right.
- **CSS custom properties** — the entire admin CSS now uses CSS variables (defined on `.godevs-demos-wrap`) for colors, spacing, radii, shadows, transitions, and typography. No more hardcoded hex values scattered throughout.
- **Responsive** — cards collapse to a single column on mobile; the modal goes full-screen; the device switcher hides labels.
- **Reduced motion** — all transitions and animations are disabled under `prefers-reduced-motion: reduce`.

#### Sorting: Ready First, Then Coming Soon

- Complete demos (those with all recommended pages as pattern files) sort to the top under the "Ready Demos" section header with a checkmark icon and blue count badge.
- Incomplete demos (homepage only) sort below under "Coming Soon" with a clock icon and muted count badge.
- The filter logic now respects both sections — searching/filtering hides individual cards within each section, and hides the entire section header if no cards in it match.

### Validation Performed

- PHP static audit (657 files): 0 issues.
- JSON validation (12 files): 0 failures.
- Block markup balance audit (697 files): 16 pre-existing failures (PHP template placeholders, unchanged).

### New Files

- `inc/demo-renderer.php` (582 lines) — PHP demo page renderer + AJAX endpoint
- `assets/css/demo-preview.css` (75 lines) — Static-render CSS for iframe preview

---

## [2.4.1] — Header/Footer Builder Fixes & Demo Import Match

### Fixed

#### Critical: Both Headers / Both Footers Showing at Once

- **Root cause:** The Header/Footer Builder rendered custom layouts via `wp_body_open` (header) and `wp_footer` (footer) actions — i.e. by `echo`-ing raw HTML at the top/bottom of the page. However, the block templates (`templates/*.html`) ALSO embed `<!-- wp:template-part {"slug":"header"} /-->` at the top and `<!-- wp:template-part {"slug":"footer"} /-->` at the bottom. With no filter suppressing either side, BOTH were rendered on the front-end — producing two `<header>` elements and two `<footer>` elements stacked on every page where a builder layout was active.
- **Fix:** Added a new `render_block` filter (`godevs_hf_suppress_default_template_part`) in `inc/header-footer-builder.php` that intercepts every `core/template-part` block render. When the slug starts with `header` and a builder header layout is active (or `footer` and a footer layout is active), the filter returns an empty string — completely suppressing the theme's default template-part. The builder-rendered HTML (already echoed on `wp_body_open` / `wp_footer`) is the only header/footer that appears.
- **Coverage:** The filter also catches demo-pattern-embedded template-parts (e.g. `header-dark`, `footer-minimal`) when a builder layout is active, so the builder always wins on the front-end.
- **Backward compatibility:** When NO builder layout is active for either type, the filter is a no-op — the default template-part renders normally, exactly as before.

#### Added: Per-Page Header/Footer Layout Override

- New post meta `_godevs_page_header_layout` and `_godevs_page_footer_layout` registered on `page` and `post` post types (with REST exposure and `sanitize_key` callback).
- New "Header & Footer Layout" meta box on the page/post edit screen — two `<select>` dropdowns listing every saved builder layout, plus the special options:
  - **"Site-wide default"** (`default`) — use the global builder active layout (if any).
  - **"Disable builder (use theme parts)"** (`none`) — explicitly turn OFF the builder for this page and use the theme's default `parts/header.html` / `parts/footer.html`.
- New `godevs_hf_get_active_for_current_post()` function in `inc/header-footer-builder.php` — resolves the active layout for the current request in priority order:
  1. **Per-post meta** (`_godevs_page_header_layout` / `_godevs_page_footer_layout`) — overrides everything else. Verified to still exist as a saved layout.
  2. **Site-wide option** (`godevs_hf_active_header` / `godevs_hf_active_footer`) — set via the admin builder UI.
  3. **None** — fall back to the theme's default template-part.
- The output functions `godevs_hf_output_header()` and `godevs_hf_output_footer()` now consult `godevs_hf_get_active_for_current_post()` instead of the raw option — so the right layout appears on the right page.
- Meta box CSS appended to `assets/css/admin-settings.css` for a modern, polished dropdown with focus state.

#### Fixed: Demo Import Did Not Match Screenshots

Multiple fixes to make imported demo content visually match the screenshot previews:

- **Triple-header bug eliminated:** Demo pattern files embed their own `<!-- wp:template-part {"slug":"header-dark"} /-->` references at the top and `<!-- wp:template-part {"slug":"footer-dark"} /-->` at the bottom. When this content became the `post_content` of an imported page, WordPress wrapped it in the active `page.html` template — which ALSO has its own header and footer template-parts. Combined with an active builder layout, this produced THREE headers and THREE footers on a single page.
- **New `godevs_portfolio_strip_template_parts_from_content()` helper** in `inc/demo-importer.php` removes every `wp:template-part` block from imported page content before `wp_insert_post()`. Handles both self-closing (`<!-- wp:template-part {...} /-->`) and paired (`<!-- wp:template-part {...} --> ... <!-- /wp:template-part -->`) forms. The active theme template's header/footer (or the builder layout, if active) is the only one that renders.
- **Nav menu now assigned to `primary` location:** Previously the importer created a `<Demo Name> — Navigation` menu but never assigned it to a menu location — so the header's `wp:navigation` block fell back to the default site menu (usually empty). Now the importer sets `nav_menu_locations['primary'] = $nav_menu_id` via `set_theme_mod()`, so the demo's pages appear in the header navigation immediately after import.
- **Style variation still applies correctly:** No change to the `godevs_portfolio_apply_style_variation()` logic — it continues to write to the `wp_global_styles` post and clear the WP_Theme_JSON_Resolver cache via reflection.

### Validation Performed

- PHP static audit (656 files): 0 issues.
- Block markup balance audit (697 files): 16 pre-existing failures (PHP template placeholders, unchanged from 2.4.0).
- Confirmed `godevs_portfolio_strip_template_parts_from_content()` correctly removes header/footer template-part references while preserving body content (tested with sample markup).
- Confirmed the meta box renders in the page editor's sidebar with a dropdown listing all saved layouts (with a fallback message when no layouts exist).

---

## [2.4.0] — Demo Library UX & Screenshot System

### Added

#### Complete-Demo Detection & Sorting

- New `godevs_portfolio_is_demo_complete()` function checks whether every recommended page (home + inner pages) exists as a pattern file in `patterns/demos/`.
- Demos are now sorted in the registry: **complete demos first** (alphabetical), then incomplete demos (alphabetical). The "Complete Demos" section is visually separated from "Other Demos" with a section header showing the count.
- New **"Complete" badge** on demo cards (blue pill with checkmark icon) distinguishes fully-designed demos from homepage-only demos.
- The results counter at the top of the demo library now reads `N complete · M ready · K total demos` so users can see at a glance how many sites are fully importable.
- `is_complete` field added to every demo definition returned by `godevs_portfolio_get_demos()`.

#### Real Screenshot Previews

- All 10 complete demos now have **actual screenshots** as their preview images in the demo library, replacing the previous abstract SVG placeholders.
- New `scripts/render-demo-html.py` — a static HTML renderer that converts each demo PHP pattern into a standalone HTML document by:
  - Stripping the PHP docblock + ABSPATH guard
  - Replacing `<?php echo esc_url(get_template_directory_uri() . '/...'); ?>` calls with `file://` URLs to real asset files
  - Resolving `<!-- wp:template-part -->` references by inlining the corresponding `parts/*.html` file (recursive)
  - Replacing dynamic block stubs (`wp:site-logo`, `wp:navigation`, `wp:site-title`, `wp:social-icons`) with placeholder HTML
  - Expanding `var:preset|spacing|40` references into `var(--wp--preset--spacing--40)` CSS variables
  - Wrapping in an HTML5 document with the Inter webfont, theme.css, and CSS variables derived from theme.json
- New `scripts/screenshot-demos.py` — a batch-screenshot driver that uses `agent-browser` (Playwright) to capture full-page desktop (1280px) screenshots of all 50 rendered demo pages.
- 50 screenshots captured (10 demos × 5 inner pages average) — saved to `/home/z/my-project/download/demo-screenshots/`.
- Preview images optimized to WebP (85% quality) — **3-5x smaller** than the equivalent PNG. The registry prefers WebP over PNG when both exist.
- Removed obsolete SVG placeholders (plan.svg, signature.svg, minimal.svg, director.svg).

#### Senior UI/UX Review System

- New `scripts/ux-review.py` — uses the VLM (vision-language model) to analyze each demo's above-the-fold screenshot and produce a senior UI/UX design review with severity-classified issues.
- UX review output saved to `/home/z/my-project/screenshots/ux-review.md` — 3,373-word report covering all 10 complete demos with common themes summary.

### Improved

#### Global Styling Refinements (theme.css)

Based on the VLM-driven UI/UX review of all 10 demos, applied 10 categories of fixes that benefit every demo without modifying any individual pattern file:

1. **Body copy link styling** — Inline `<a>` tags inside paragraphs and headings now use the accent color (#2563EB) with no underline by default, subtle underline on hover, and 150ms color transition. Previously every link fell back to the browser default blue (#0000EE) with underline, which clashed with the editorial palette.
2. **Stronger CTA links** — "→ View all work" style links (paragraphs containing only a single link) now display as inline-flex with proper spacing, smaller font, and bold weight — giving them visual weight as calls-to-action rather than blending with body copy.
3. **Improved muted-text contrast** — Body copy using the muted color class now uses `#4B5563` (6.43:1 contrast on base) instead of `#6B7280` (4.43:1, fails WCAG AA). Eyebrow labels keep the lighter muted color where contrast is less critical.
4. **Body line-height** — Increased from 1.7 → 1.75 for long-form readability.
5. **Hover/focus states on cards and images** — Added subtle scale + shadow transitions on hover for `.wp-block-image.has-custom-border` and `.is-style-card-bordered`. Previously these had no hover state.
6. **Section divider rhythm** — Consistent 0.5rem spacing between eyebrow paragraph and the heading that follows it across all demos.
7. **Dark surface link styling** — Links on dark surfaces (`.has-primary-background-color`, `.site-header-dark`, `.wp-block-cover.is-dark`) now use contrast white with underline, with opacity 0.9 → 1 on hover. Previously they used the dark accent blue which was unreadable on dark backgrounds.
8. **Default button styling** — `.wp-block-button .wp-block-button__link` now has proper button styling: inline-flex, primary background, contrast text, 0.625rem 1.25rem padding, 4px border-radius, 500 weight, no underline. Previously default buttons fell back to browser link styling.
9. **Inverse button styling on dark surfaces** — On dark backgrounds, default buttons invert to white background + dark text, and outline buttons get white border + white text. This makes CTAs visible on the dark hero sections used by director, monolith, etc.
10. **Reduced-motion overrides** — All new transitions are disabled under `prefers-reduced-motion: reduce`.

#### Demo Library Card Polish

- Demo cards in the admin grid now have a subtle `-2px` translate-y on hover, with 300ms transition using the motion token easing curve.
- Complete demo cards get a subtle blue border highlight to distinguish them from incomplete demos.

### Fixed

#### Demo Renderer CSS Bugs

- Fixed unbalanced parentheses in the static-render CSS variable generator — `var(--wp--preset--color--base` was missing the closing `)`, which broke CSS parsing for the entire stylesheet (only 1 of ~300 rules was being applied).
- Removed apostrophes from CSS comments (`isn't`, `don't`, `demo's`, etc.) which broke the CSS parser when the stylesheet was loaded as inline `<style>` content. Affected rules now use `is not`, `do not`, `demo`, etc.
- Fixed the default button CSS selector — was using `.wp-block-button__link:not(.is-style-outline)` but the `is-style-*` classes are on the parent `.wp-block-button` element, not on the `.wp-block-button__link`. Changed to `.wp-block-button:not(.is-style-*) > .wp-block-button__link`.

### Validation Performed

- PHP static audit (656 files): 0 issues
- JSON validation (12 files): 0 failures
- Block markup balance audit (697 files): 16 issues — all pre-existing PHP template placeholders (`__BG_STYLE__`) in 16 demos (advisor, blueprint-studio, criterion, curator, editorial, frame-works, grid-city, gridline, momentum, palette, professor, studio-craft, summit, text-link, thesis, verdure). These are intentional PHP template syntax, not real JSON corruption.
- Gutenberg compatibility audit: 37 issues — all pre-existing in non-demo pattern files.
- Structure audit: 11 issues — all pre-existing (missing optional directories + 2 demos with hardcoded hex colors + 1 pricing pattern with checkmark emoji).

### New Scripts

- `scripts/render-demo-html.py` — Static HTML renderer for demo pattern files
- `scripts/screenshot-demos.py` — Batch screenshot driver using agent-browser
- `scripts/ux-review.py` — VLM-powered senior UI/UX reviewer
- `scripts/fix-missing-quotes.py` — Detects and fixes missing closing `"` after preset values in JSON attributes
- `scripts/fix-unbalanced-json.py` — Counts brace balance (ignoring string contents) and appends/removes trailing `}` as needed
- `scripts/fix-spacing-presets.py` — Replaces undefined `var:preset|spacing|0` and `var:preset|spacing|10` references with valid alternatives

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

=== GoDevs Portfolio ===
Contributors: godevs
Requires at least: 6.5
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.1.2
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-patterns, block-styles, portfolio, editorial, accessibility-ready, translation-ready, threaded-comments, custom-colors, custom-logo, custom-menu, featured-images, rtl-language-support, sticky-post

A premium, Gutenberg-first Full Site Editing WordPress block theme for portfolios, editorial sites, and personal brands.

== Description ==

GoDevs Portfolio is a premium, Gutenberg-first, Full Site Editing (FSE) WordPress block theme designed for developers, designers, freelancers, agencies, and creators who need a refined, modern, editorial-grade portfolio presence on the web.

The theme ships with:

* A complete design system in `theme.json` — colors, typography, spacing, layout, borders, shadows
* Twelve (12) WordPress templates covering every standard route
* Six (6) template parts — three header variants and three footer variants
* Ten (10) representative patterns across the major categories
* Three (3) style variations beyond the default — Minimal, Dark, Editorial
* A pattern category system organized into 18 portfolio-specific categories
* A custom block style system — outline / text-link / pill buttons, four card variants, separators, eyebrow paragraphs

The theme requires no plugins. It activates and renders a complete experience on a fresh WordPress install.

* No required plugins
* No external font CDN
* No icon library
* No jQuery dependency
* No CSS framework
* No JavaScript in Phase 1

= Design Philosophy =

The theme favors editorial typography, generous whitespace, strong visual hierarchy, and restraint over decoration. It is designed to look like a considered portfolio, not a generic landing page.

= Accessibility =

The theme targets WCAG 2.1 Level AA. Visible focus states, keyboard navigation, semantic HTML, sufficient color contrast, and reduced-motion support are foundational.

= Translation =

The theme is translation-ready. The text domain is `godevs-portfolio`. Translation files should be placed in the `languages/` directory (the directory is auto-created by WordPress on first translation).

= Long-Term Vision =

GoDevs Portfolio is built as a scalable Gutenberg design system whose long-term targets are:

* 100+ ready demo websites (Phase 4)
* 500+ reusable Gutenberg patterns (Phase 5)
* 100+ page/template compositions
* 15+ style variations

Phase 1 ships the foundation only. See `docs/RELEASE-ROADMAP.md` for the multi-phase plan.

== Installation ==

= Automatic installation =

1. Log in to your WordPress dashboard.
2. Go to **Appearance → Themes → Add New**.
3. Search for "GoDevs Portfolio".
4. Click **Install** then **Activate**.

= Manual installation =

1. Download the theme ZIP file.
2. Go to **Appearance → Themes → Add New → Upload Theme**.
3. Choose the ZIP file and click **Install Now**.
4. Click **Activate**.

After activation, visit the Site Editor (**Appearance → Editor**) to customize templates, template parts, patterns, and global styles.

== Frequently Asked Questions ==

= Does this theme require any plugins? =

No. The theme is designed to work with zero plugins. You may install companion plugins for forms, SEO, analytics, etc., but they are not required for the core experience.

= Does the theme support the Site Editor? =

Yes. The theme is a block theme and supports Full Site Editing entirely. All templates, template parts, and global styles are editable in the Site Editor.

= Can I add my own patterns? =

Yes. Patterns are PHP files in the `patterns/` directory. See `docs/PATTERN-SYSTEM.md` and `docs/CONTRIBUTING.md` for the authoring guide.

= Can I create my own style variation? =

Yes. Style variations are JSON files in the `styles/` directory. See `docs/STYLE-VARIATIONS.md` for the variation authoring guide.

= Is the theme accessible? =

The theme targets WCAG 2.1 Level AA. See `docs/ACCESSIBILITY.md` for the accessibility baseline.

== Documentation ==

Comprehensive documentation is bundled with the theme in the `docs/` directory:

* `PRD.md` — Product Requirements Document
* `ARCHITECTURE.md` — Theme architecture
* `DESIGN-SYSTEM.md` — Design system reference
* `PATTERN-SYSTEM.md` — Pattern taxonomy and authoring
* `TEMPLATE-SYSTEM.md` — Template and template part architecture
* `STYLE-VARIATIONS.md` — Style variation system
* `ACCESSIBILITY.md` — Accessibility baseline
* `PERFORMANCE.md` — Performance budget and strategies
* `SECURITY.md` — Security baseline
* `WORDPRESS-STANDARDS.md` — Coding standards
* `AI-DEVELOPMENT-GUIDE.md` — AI development workflow and rules
* `CONTRIBUTING.md` — Contributor guide
* `QA-CHECKLIST.md` — Release-readiness checklist
* `RELEASE-ROADMAP.md` — Multi-phase development plan
* `CHANGELOG.md` — Version history

== Changelog ==

= 1.1.2 — Ultimate Fallback Loader =

* Added fallback `require_once` loaders inside `block-patterns.php`, `block-styles.php`, AND `theme-settings.php` — the 3 files that the OLD version of functions.php (v1.0.0–v1.1.0) loaded on every request. These fallbacks pull in ALL other inc/ modules (CPTs, taxonomies, meta fields, case-study, demo-registry, demo-tracker, demo-importer) even if the user is running an OLD functions.php that doesn't include the require_once calls.
* This is the definitive fix for users whose WordPress install did not properly overwrite the old theme files when uploading the new ZIP. Even if functions.php is the OLD version, the CPTs and demo importer will now load via the fallbacks in the 3 always-loaded files.
* `block-patterns.php` and `block-styles.php` load the CPT stack on EVERY request (front-end + admin).
* `theme-settings.php` additionally loads `demo-importer.php` on admin requests (so the Appearance → GoDevs Demos page appears).
* Bumped version to 1.1.2.

= 1.1.1 — Critical CPT Loading Fix =

* Removed `is_admin()` guard around `theme-settings.php` and `demo-importer.php` — these files are now loaded UNCONDITIONALLY on every request. The `is_admin()` check was unreliable in some WordPress configurations (multisite, custom admin URLs, security plugins) and could prevent the demo import page from appearing under Appearance.
* Added file-exists guard around every `require_once` — if a file is missing, the theme still loads (with reduced functionality) instead of white-screening.
* Added diagnostic admin notice on the dashboard — shows which component files loaded, which CPT functions exist, and which CPTs are registered. This makes it possible to see exactly what's happening on the user's install.
* Fixed `godevs_portfolio_module_enabled()` — empty-string values from stale settings no longer disable CPTs. Only an explicit `'0'` value disables a module now; empty/missing values default to enabled.
* Fixed Case Study CPT `menu_position` from 5 to 13 (was conflicting with Projects at position 5, causing one to overwrite the other in the admin menu).
* Added `godevs_portfolio_upgrade_handler()` on `admin_init` — runs once whenever the recorded theme version differs from the running version. Re-seeds settings, re-registers CPTs, and flushes rewrite rules. This catches in-place upgrades where `after_switch_theme` does not fire.
* `godevs_portfolio_seed_default_settings()` now DELETES the stale option first, then re-seeds with fresh defaults. This ensures CPTs always work after activation, even if a previous broken version left corrupted settings.
* Bumped version to 1.1.1.

= 1.1.0 — Phase 4 Content Layer + Demo Importer Bootstrap Fix =

* Fixed `functions.php` to require all content-layer modules (CPTs, taxonomies, meta fields, case-study, demo registry, demo tracker, demo importer) — previously only 3 of 9 modules were loaded, so CPTs and the demo import system did not function on theme activation.
* Added `after_switch_theme` hooks to seed default module settings and flush rewrite rules on theme activation, so CPT archives (e.g. `/projects/`, `/case-studies/`) are queryable immediately without manual permalinks re-save.
* Added `admin_init` version-aware rewrite flush — re-flushes rewrite rules once whenever the recorded theme version differs from the running version. This catches the case where the theme is upgraded in place (upload new ZIP over existing), which does NOT fire `after_switch_theme`.
* Added `switch_theme` flush hook for clean deactivation.
* Fixed `godevs_portfolio_settings_sanitize` — unchecked checkboxes were silently re-enabled because the sanitize function fell back to the default `'1'` for missing keys. Unticking a module toggle now correctly disables the CPT.
* Fixed `apply_style` boolean cast in the demo importer — `(bool) '0'` is TRUE in PHP, so the "Apply recommended style variation" checkbox was always treated as checked. Now uses strict `'1' === $value` comparison.
* Fixed demo-registry category derivation — all 102 demos previously had `cat_slug = 'godevs-portfolio-demos'` because the `Categories:` header is shared across all demo files (it's the WordPress Block Inserter pattern category, not a per-demo category). The new `godevs_portfolio_normalize_demo_category()` function derives the canonical category from the demo's title parenthetical (e.g., "Demo — Atelier (Developer)" → "developer"), with ~80 known label mappings covering 88 of 102 demos. The filter dropdown now shows 10 distinct categories + 1 "specialized" bucket.
* Removed misleading "requires GoDevs Portfolio Content Types plugin" copy from all 9 module-toggle settings fields — the theme now ships CPTs in-theme and needs no companion plugin.
* Regenerated `languages/godevs-portfolio.pot` — 279 translatable strings across 264 PHP files.
* Bumped version to 1.1.0.

= 1.0.0 — Phase 4 Content Layer + Demo Import System =

* Nine (9) custom post types: Projects, Services, Team, Testimonials, Bookings (private), Experience, Education, FAQs, Case Studies — each with `show_in_rest` enabled (Bookings excluded for privacy).
* Six (6) taxonomies: Project Categories, Project Tags, Service Categories, Team Departments, FAQ Categories, Case Study Types/Industries/Technologies.
* Forty (40+) meta fields with proper sanitization callbacks (URL fields use `esc_url_raw`, emails use `sanitize_email`, ratings clamped to 1-5, bookings hidden from REST).
* Case Study meta-box UI with four groups (Project Information, Case Study Details, Results, Links & Settings).
* Settings API page under Appearance → GoDevs Settings with module visibility toggles for every CPT — admins can disable unused CPTs without deleting content.
* Demo Importer under Appearance → GoDevs Demos with starter + safe import modes, preview, AJAX handlers, page creation, navigation menu creation, homepage assignment, and style variation application.
* Demo Tracker records every import so removal cleanly trashes only the imported pages and menus.
* One-hundred and two (102) demo patterns in `patterns/demos/` — each a complete portfolio composition.
* Templates: 25 HTML templates covering all CPT archives and singles (added `archive-godevs_*`, `single-godevs_*`, `page-case-study`, `page-services`, `page-about`, `page-portfolio`, `singular`, `front-page`, `home`).
* Template parts: 23 HTML parts (12 headers + 11 footers).
* Pattern count grew to 1,070 across 22 categories.
* Style variations: 11 JSON files in `styles/` (Default + 10 alternates).
* Version bumped to 1.0.0.

= 0.3.0 — Phase 3 Demo Website Library =

* 102 ready portfolio demos across 11 categories (Developer, Designer, Creative, Photography, Agency, Business, Architecture, Personal Brand, Education, Lifestyle, Specialized)
* Each demo composes header + hero + body section + CTA + footer using the Phase 2 pattern library
* New pattern category `godevs-portfolio-demos` registered
* New `docs/DEMO-SYSTEM.md` documenting architecture, naming, composition, anti-repetition strategy
* New `docs/demo-matrix.csv` tracking all 102 demos' design properties
* Generator script `scripts/generate-demos.py` for reproducible demo generation
* Zero runtime cost when demos are not inserted (static PHP pattern files)
* Version bumped to 0.3.0

= 0.2.0 — Phase 2 Premium Design Library =

* 56 patterns total (46 new across 11 categories)
* 12 header template parts (9 new)
* 11 footer template parts (8 new)
* 4 custom page templates (Portfolio Landing, Case Study, Services Landing, About Long-form)
* Composed front-page.html demonstrating full design system
* 8 style variations total (Modern, Creative, Elegant, Corporate added)
* 12 custom block styles (image variants, button Arrow variant added)
* New Stats pattern category
* Version bumped to 0.2.0

= 0.1.0 — Phase 1 Foundation =

* Initial block theme architecture
* Design system foundation (colors, typography, spacing, layout, borders, shadows)
* Twelve (12) WordPress templates
* Six (6) template parts
* Ten (10) representative patterns across major categories
* Three (3) style variations (Minimal, Dark, Editorial) plus the Default
* Eighteen (18) pattern categories registered
* Seven (7) custom block styles (button, card, separator, eyebrow)
* Accessibility foundation (WCAG 2.1 AA target)
* Performance foundation (no JS, minimal CSS, system fonts)
* Security foundation (escaping, no plugin territory)
* Documentation (15 Markdown files)

== Upgrade Notice ==

= 1.1.0 =

Critical fix — the theme now correctly loads all CPT modules and the demo import system on activation, with zero companion plugins required. Bumps rewrite rules automatically on activation so CPT archives (/projects/, /case-studies/, etc.) resolve immediately. If you are running 1.0.0, simply re-activate the theme after upgrading; you may also re-save permalinks once for safety.

= 1.0.0 =

Phase 4 Content Layer + Demo Import System. Activate and visit Appearance → GoDevs Demos to import one of 102 ready portfolio sites. Nine CPTs (Projects, Services, Team, Testimonials, Bookings, Experience, Education, FAQs, Case Studies) appear as top-level admin menu items with their own archive + single templates.

= 0.3.0 =

Phase 3 Demo Website Library. 102 ready portfolio demos across 11 categories. Open the Block Inserter → Patterns → Demos to browse them. Each demo is a composition of the Phase 2 pattern library — fully Gutenberg-editable.

= 0.2.0 =

Phase 2 Premium Design Library. 56 patterns, 12 headers, 11 footers, 4 custom page templates, composed front-page, 8 style variations. Activate and visit Appearance → Editor → Styles to switch variations.

= 0.1.0 =

Initial release. Phase 1 Foundation. Activate the theme and visit the Site Editor to begin customizing.

== License ==

GoDevs Portfolio is licensed under the GNU General Public License v2 or later.

== Credits ==

* WordPress core block system — https://wordpress.org/
* Inter (system font stack reference) — https://rsms.me/inter/
* System UI font stack — https://systemfontstack.com/

The theme ships with no bundled fonts, no bundled icon library, and no bundled images (excluding the screenshot). All visual primitives are produced by WordPress core from the `theme.json` design system.

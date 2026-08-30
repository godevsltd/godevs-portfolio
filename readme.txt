=== GoDevs Portfolio ===
Contributors: godevs
Requires at least: 6.5
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 0.8.0
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

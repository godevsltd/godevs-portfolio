=== GoDevs Portfolio ===
Contributors: godevs
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-patterns, block-styles, portfolio, editorial, accessibility-ready, translation-ready, threaded-comments, custom-colors, custom-logo, custom-menu, featured-images, rtl-language-support, sticky-post, theme-options

A premium, Gutenberg-first Full Site Editing WordPress block theme for portfolios, editorial sites, and personal brands.

== Description ==

GoDevs Portfolio is a premium, Gutenberg-first, Full Site Editing (FSE) WordPress block theme designed for developers, designers, freelancers, agencies, and creators who need a refined, modern, editorial-grade portfolio presence on the web.

Visit the theme homepage at https://godevs.net/ for demos, documentation, and support.

The theme ships with:

* A complete design system in `theme.json` - colors, typography, spacing, layout, borders, shadows
* Thirty-two (32) WordPress templates covering every standard route
* Twenty-four (24) template parts - twelve header variants, eleven footer variants, and a mobile menu
* 120+ curated block patterns across 20+ portfolio-specific categories, plus 10 full multi-page demos importable in one click
* Eleven (11) style variations beyond the default
* A custom block style system - outline / text-link / pill buttons, multiple card variants, separators, eyebrow paragraphs

= Design Philosophy =

The theme favors editorial typography, generous whitespace, strong visual hierarchy, and restraint over decoration. It is designed to look like a considered portfolio, not a generic landing page.

= Accessibility =

The theme targets WCAG 2.1 Level AA. Visible focus states, keyboard navigation, semantic HTML, sufficient color contrast, and reduced-motion support are foundational.

= Translation =

The theme is translation-ready. The text domain is `godevs-portfolio`. Translation files should be placed in the `languages/` directory.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New → Upload Theme.
2. Choose the `godevs-portfolio.zip` file and click Install Now.
3. Activate the theme.
4. Go to Appearance → GoDevs Settings to configure the theme.
5. Go to Appearance → GoDevs Demos to browse and import demo sites.

== Frequently Asked Questions ==

= Does this theme require any plugins? =

No. The theme is fully functional without any plugins. It includes its own demo library, header/footer builder, and content management system.

= Is the theme compatible with the block editor? =

Yes. The theme is built on Full Site Editing (FSE) and is fully compatible with the WordPress block editor (Gutenberg). All templates, template parts, and patterns use native WordPress blocks.

= Can I customize the colors and typography? =

Yes. Go to Appearance → GoDevs Settings → Colors and Typography to customize the accent color, background color, text color, font families, and more. Changes are applied via CSS custom properties.

= How do I import a demo site? =

Go to Appearance → GoDevs Settings → Demo Library tab. Browse the available demos, click Preview to see a live preview, then click Import to import the demo content (pages, navigation, and style variation).

== Changelog ==

= 1.0.1 =

* Fixed the Pattern Editor crash (categories now register with the `label` key WordPress core expects) and the related Edit Site / Content block crash.
* Fixed pattern slug validation regex (`A-z` -> `A-Za-z`) and navigation block JSON attributes in the demo headers.
* Registered all demo headers and footers as template parts in theme.json.
* Redesigned all ten demo footers and the default footer with reliable responsive wrapping down to 320px.
* Fixed block markup that triggered editor validation notices (decorative comments, invalid padding structure, missing alignment and font-size classes).
* Verified: 0 malformed block structures across 222 theme files, 0 horizontal overflow across 100 responsive checks, clean install with no plugins.

= 1.0.0 =

* Initial release on WordPress.org.
* Ten complete portfolio demos with one-click import (NOVA, ATELIER, PULSE, FRAME, ARCHITECT, NOIR, MONO, LUXE, JOURNAL, HORIZON).
* Project proposal system with spam protection, rate limiting and an admin workflow.
* Full Site Editing native: 32 templates, 42 template parts, 146 patterns, 21 style variations.
* Service details seeding, premium import progress experience, accessibility-ready contrast and responsive layouts from 1920px to 320px.

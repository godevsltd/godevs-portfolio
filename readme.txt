=== GoDevs Portfolio ===
Contributors: godevs
Requires at least: 6.5
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 0.2.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-styles, wide-blocks, block-patterns, style-variations, custom-colors, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready, rtl-language-support, accessibility-ready

A modern, Gutenberg-first WordPress theme for freelancers, developers, designers, agencies, and professional service businesses. Built around the native Site Editor — no page builder required.

== Description ==

GoDevs Portfolio is a block theme designed for professional portfolios and small-business sites. It is built around the native WordPress Site Editor, theme.json, block templates, template parts, and a focused pattern library — not around a third-party page builder.

= Who is it for =

* Freelancers and developers
* Designers and photographers
* Agencies and creative studios
* Consultants and professional services
* Startups and small businesses

= What it ships with =

* A complete design system defined in theme.json (palette, fluid typography, spacing)
* Nine block templates (index, home, front-page, page, single, archive, search, 404, singular)
* Three template parts (header, footer, mobile menu)
* Thirteen block patterns (hero, about, services, portfolio-grid, testimonials, cta, contact, footer, stats, process, faq, team, timeline)
* Six style variations (Minimal, Dark, Creative, Corporate, Elegant, Editorial) wired into the Site Editor Styles panel
* Self-hosted Inter + Newsreader fonts (no external requests)
* Translation-ready, RTL-ready, accessibility-ready foundation

= Plugin boundary =

GoDevs Portfolio works on its own. An optional companion plugin (GoDevs Core, not required for v0.1) will eventually own structured content types such as Portfolio, Services, Testimonials, Team and Case Studies. The theme must continue to function when the plugin is not installed — plugin-backed features fail gracefully rather than throwing fatal errors.

See docs/CORE-PLUGIN-BOUNDARY.md for the complete boundary.

== Installation ==

1. Download the theme .zip from the release.
2. In your WordPress admin go to Appearance > Themes > Add New > Upload Theme.
3. Choose the .zip and click Install Now, then Activate.
4. Open Appearance > Editor to customise templates, styles and content.
5. (Optional) Install GoDevs Core to enable structured portfolio content types.

== Frequently Asked Questions ==

= Does this theme require a page builder? =
No. GoDevs Portfolio is a native block theme and works entirely through the Site Editor. Elementor, Divi, WPBakery, Bricks, Beaver Builder and Oxygen are not required.

= Does this theme support WooCommerce? =
No. WooCommerce is intentionally not part of the product. If you need a storefront, pair this theme with a WooCommerce-specific theme.

= Can I use it without the GoDevs Core plugin? =
Yes. The theme activates and works fully without GoDevs Core. If the plugin is later installed, structured content types become available — but they are never required.

= Are the fonts loaded from Google Fonts? =
No. Inter and Newsreader are bundled in /assets/fonts/ and licensed under the SIL Open Font License. No external font requests are made.

== Changelog ==

= 0.2.0 =
* Four additional style variations: Creative, Corporate, Elegant, Editorial.
* Five new block patterns: Stats, Process, FAQ, Team, Timeline.
* New Feature Registry and Decision Log documents.
* Verification baseline extended to 265+ explicit checks.

= 0.1.0 =
* Initial foundation release.
* Block theme architecture with theme.json, nine templates, three template parts.
* Eight block patterns (hero, about, services, portfolio-grid, testimonials, cta, contact, footer).
* Two style variations (Minimal, Dark).
* Self-hosted Inter + Newsreader fonts.
* Documentation suite in /docs/ (PRD, architecture, design system, Gutenberg architecture, plugin boundary, accessibility, performance, security, internationalization, WordPress.org compliance, AI development guide, and others).

== Upgrade Notice ==

= 0.2.0 =
Adds four style variations (Creative, Corporate, Elegant, Editorial) and five new block patterns (Stats, Process, FAQ, Team, Timeline). Existing v0.1 sites continue to work; the new variations are opt-in via the Site Editor Styles panel. The existing 244 verification checks are preserved; new specific checks bring the total to 265+.

= 0.1.0 =
Initial foundation release. No upgrade notice.

== Credits ==

* Inter font family — Rasmus Andersson, SIL Open Font License 1.1
* Newsreader font family — Production Type, SIL Open Font License 1.1
* Block markup conventions — WordPress core block editor handbook

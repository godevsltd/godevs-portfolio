# Changelog

All notable changes to GoDevs Portfolio will be documented in this file.

## [1.0.0] - 2026-09-20

Initial WordPress.org release.

### Fixed (pre-release hardening, included in the submitted 1.0.0 package)
- Pattern Editor crash (`undefined is not an object (evaluating '.toLowerCase')`): pattern categories now register with the `label` key WordPress core expects, instead of the ignored `title` key.
- Edit Site / Content block crash caused by the same missing category labels feeding the editor's category search.
- Pattern slug validation regex now uses `A-Za-z` instead of the locale-unsafe `A-z` range.
- Navigation blocks in demo headers/footers now carry valid JSON attributes (0 malformed block structures across 222 theme files).
- All demo headers and footers are now registered in `theme.json` `templateParts`, so they appear correctly in the Site Editor.
- Ten demo footers redesigned with `flexWrap: "wrap"` layouts for reliable responsive behavior down to 320px.
- Block markup validation: decorative comments removed, invalid `style.padding` structures corrected, missing column alignment and button font-size classes added, and empty self-closing separator blocks replaced with valid `<hr>` markup (13 occurrences).

### Included
- Ten complete, visually distinct portfolio demos with one-click import: NOVA, ATELIER, PULSE, FRAME, ARCHITECT, NOIR, MONO, LUXE, JOURNAL, HORIZON
- Full Site Editing native architecture: 32 templates, 42 template parts, 146 block patterns, 21 style variations
- Project proposal system: 12-field inquiry form on every demo contact page, honeypot and rate-limit spam protection, private admin-only storage with a status workflow, admin email notification
- Demo import experience: live step-by-step progress with percentage and Demo Ready summary, service details seeding, automatic permalink, menu, homepage and style configuration
- Performance: WebP imagery, lazy loading, local OFL-licensed fonts, no front-end jQuery
- Accessibility: AA token contrast across all variations, labeled forms with inline errors and live regions, semantic structure
- Content suite: projects, services, team, testimonials, experience, education, FAQs, case studies and bookings with per-module toggles
- Theme Settings: colors, typography, layout, header/footer and archive controls with dynamic CSS output

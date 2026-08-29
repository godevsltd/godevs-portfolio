# WordPress.org Compliance — GoDevs Portfolio

GoDevs Portfolio is **prepared for** WordPress.org review. It has not
been reviewed or approved. This document tracks the compliance surface
that a future submission package must satisfy, and the v0.1 status
against each item.

---

## 1. Theme requirements

The WordPress.org Theme Review guidelines (current at time of writing)
require that themes:

- Are block themes following the modern template hierarchy.
- Do not register CPTs, taxonomies, shortcodes, or settings pages.
- Do not modify WordPress core globals or constants.
- Do not modify plugin menus or admin UI.
- Use `theme.json` for global styles.
- Use the Site Editor for layout.
- Use block patterns for reusable sections.
- Use template parts for chrome.

### v0.1 status
- ✅ Block theme architecture.
- ✅ No CPTs, taxonomies, shortcodes, or settings pages.
- ✅ `theme.json` is the global styles source.
- ✅ All chrome is in template parts.
- ✅ All sections are patterns.

## 2. Licensing

The theme and all bundled assets must be GPL-2.0-or-later compatible.

### Code license
- ✅ Theme code is licensed under GPL-2.0-or-later. `LICENSE` is the
  GPL-2.0 text. The `style.css` header declares the same.

### Bundled asset licenses
- ✅ Inter font family — SIL Open Font License 1.1. License file:
  `assets/fonts/INTER-OFL.txt`.
- ✅ Newsreader font family — SIL Open Font License 1.1. License
  file: `assets/fonts/NEWSREADER-OFL.txt`.
- ✅ No third-party PHP or JS libraries bundled in v0.1.

### External resources policy
- ✅ No external requests at install or activation time.
- ✅ No external requests during normal page rendering.
- ✅ No external CSS or JS loaded from a CDN.
- ✅ No external font CDN.

## 3. Security

### Sanitisation
- ✅ Theme does not register any settings pages, so there are no
  settings to sanitise.
- ✅ Theme does not write to the database.
- ✅ Theme does not accept user input beyond what WordPress core
  already sanitises (block editor content, customizer options, etc.).

### Escaping
- ✅ `functions.php` escapes all dynamic values:
  - `esc_url()` for URLs (font preload, asset URIs).
  - `esc_attr()` for HTML attributes.
  - `esc_html()` for any user-visible text (none currently; the
    theme has no user-facing strings outside block markup).
- ✅ No `echo` of unescaped data.

### Validation
- ✅ Theme does not accept external data.
- ✅ Theme validates the existence of files before enqueuing
  (`file_exists` check in `functions.php`).

### Capability checks
- ✅ Theme does not register any privileged action.

### Nonces
- ✅ Theme does not handle any form submissions, so nonces are not
  applicable.

### Forbidden patterns
- ✅ No `eval()`.
- ✅ No obfuscated code.
- ✅ No hidden executable code.
- ✅ No base64 encoding (except for image data URIs in inline SVG,
  which v0.1 does not use).
- ✅ No unsafe dynamic PHP (no `include` of user-controlled paths).
- ✅ No hidden tracking.
- ✅ No remote requests.

## 4. Accessibility

WordPress.org themes are required to be accessibility-ready (under
the accessibility-ready tag).

### v0.1 conformance

- ✅ Keyboard navigation works on every template (skip link, focus
  indicators, semantic landmarks).
- ✅ Visible focus on every focusable element (`:focus-visible`
  outlines defined in `theme.json`).
- ✅ Sufficient colour contrast (palette tokens verified; see
  `docs/ACCESSIBILITY.md`).
- ✅ Semantic HTML landmarks (`header`, `main`, `footer`, `nav`).
- ✅ Heading hierarchy preserved (h1 once per template, h2 for
  sections, h3 for sub-sections).
- ✅ Form labels (the theme ships no forms in v0.1; the Contact
  pattern is a placeholder prompting the user to add a Contact Form
  block).
- ✅ Reduced motion support (CSS transitions guarded by
  `prefers-reduced-motion`).
- ⏳ Full WCAG 2.1 AA audit is a Phase 12 deliverable.

## 5. Internationalisation

- ✅ Text domain declared: `godevs-portfolio`.
- ✅ Text domain loaded in `functions.php` via `load_theme_textdomain()`.
- ✅ `.pot` file scaffolded at `languages/godevs-portfolio.pot`.
- ✅ RTL stylesheet generated from the same `theme.json` source
  (block themes inherit RTL support automatically through the style
  engine).
- ⏳ Full translation pass and at least one complete translation is a
  Phase 7 / 15 deliverable.

Note: PHP strings inside the theme are limited to inline
documentation, function names, and comments. User-facing strings
live inside block markup (templates, parts, patterns), which
WordPress treats as content rather than code; the strings inside
patterns do not need i18n function wrapping. WordPress.org accepts
this convention for block themes.

## 6. Theme functionality

### Required features (per WordPress.org guidelines)
- ✅ Theme supports `title-tag` (block themes inherit via
  `theme.json`/Site Editor).
- ✅ Theme supports `post-thumbnails` (block themes inherit via
  Site Editor).
- ✅ Theme supports `automatic-feed-links` (block themes inherit
  via `theme.json`).
- ✅ Theme supports `custom-logo` (via the `site-logo` block in the
  header template part).
- ✅ Theme supports `custom-header` (handled via Site Editor; no
  classic custom-header).
- ✅ Theme supports `html5` (block themes inherit).
- ✅ Theme supports `responsive` (fluid typography, fluid spacing,
  responsive layouts, mobile menu).

### Navigation
- ✅ Theme uses the `core/navigation` block, which is the
  WordPress-recommended approach for block themes.
- ✅ Navigation is editable via Site Editor.
- ✅ Mobile navigation handled by the Navigation block's
  `overlayMenu: "mobile"` attribute.

### Pagination
- ✅ Pagination handled by the `core/query-pagination` block in
  the index, home, archive, and search templates.

### Comments
- ✅ Comments handled by the `core/comments` block in the single
  template.

### Widgets
- ✅ v0.1 does not ship a widget area. Block themes use the Site
  Editor for footer/header content; classic widget areas are
  deprecated for block themes.

## 7. Plugin functionality

WordPress.org themes are *not* allowed to register CPTs, taxonomies,
shortcodes, settings pages, or REST routes.

- ✅ v0.1 ships no CPTs, taxonomies, shortcodes, settings pages, or
  REST routes.
- ✅ Persistent content is owned by the future GoDevs Core plugin
  (Phase 8), never by the theme.

## 8. Content portability

WordPress.org themes must not lock user content into the theme.

- ✅ Theme does not register CPTs.
- ✅ Theme does not write to the database.
- ✅ Theme does not create pages on activation.
- ✅ Theme does not import starter content automatically.
- ⏳ Phase 8 GoDevs Core migration tool will move portfolio content
  from pages/posts to Portfolio CPT posts without data loss.

## 9. External resources

WordPress.org guidelines limit external resources for block themes:

- ✅ No external CSS.
- ✅ No external JS.
- ✅ No external fonts.
- ✅ No external images referenced in CSS.
- ✅ No external API calls.
- ✅ No Google Fonts CDN.

The only resources loaded are:
- `theme.json`-generated CSS (inline, served from the WordPress
  install).
- `assets/css/editor.css` (editor only).
- `assets/css/print.css` (print only).
- `assets/js/navigation.js` (front-end, deferred, ~1.4 KB).
- `assets/fonts/*.woff2` (self-hosted, latin subset).

## 10. Remote requests

- ✅ Theme makes no remote requests.
- ✅ Theme does not call `wp_remote_get` or `wp_remote_post`.
- ✅ Theme does not fetch updates from a third-party server.
- ✅ Theme does not phone home for usage analytics.

## 11. Privacy

- ✅ Theme does not collect user data.
- ✅ Theme does not set cookies.
- ✅ Theme does not store user-identifiable information.
- ✅ Theme does not include any tracking pixels.
- ⏳ A privacy policy snippet for the future GoDevs Core plugin
  (which may collect contact form submissions) is a Phase 8
  deliverable.

## 12. Tracking

- ✅ Theme does not track users.
- ✅ Theme does not include analytics.
- ✅ Theme does not include any third-party tracking scripts.

## 13. Theme review risks

This section lists the items a WordPress.org reviewer is most likely
to flag, with the v0.1 mitigation.

### Risk: bundled assets not properly licensed
**Mitigation:** Fonts ship with their OFL license files. No
third-party code is bundled. The theme's own code is GPL-2.0-or-later.

### Risk: external requests during normal operation
**Mitigation:** Verified zero external requests in v0.1. Automated
tests in Phase 11 will add a no-external-requests check.

### Risk: CPTs registered in the theme
**Mitigation:** No CPTs registered. Phase 8 plugin owns CPTs.

### Risk: settings pages in the theme
**Mitigation:** No settings pages. Customisation is via Site Editor
and Customizer (the latter only for site icon and other core-
managed settings).

### Risk: accessibility issues
**Mitigation:** v0.1 ships the accessibility foundation (skip link,
focus-visible, landmarks, contrast-checked palette). Phase 12 will
run a full audit.

### Risk: escaping issues in `functions.php`
**Mitigation:** Every dynamic output in `functions.php` is escaped.
Reviewer can grep for `echo` and confirm each instance uses an
escaping function.

### Risk: demo content with unverified claims
**Mitigation:** Demo copy in patterns is realistic but explicitly
fictional. Testimonials pattern includes a "Sample attribution
shown for layout reference" disclaimer.

### Risk: pattern slugs collide with another theme
**Mitigation:** Pattern slugs are prefixed `godevs-portfolio/`. No
collision possible with another theme.

### Risk: theme.json schema mismatch
**Mitigation:** `theme.json` declares `"version": 2` and uses the
WP 6.5+ schema. Both style variations follow the same schema.

## 14. Submission package (v0.7)

When the theme is submitted to WordPress.org (Phase 16/17), the
submission package will include:

- The full theme directory (`godevs-portfolio/`) zipped.
- The theme `readme.txt` (WordPress.org format, already shipped in
  v0.1).
- The `README.md` (GitHub format, already shipped in v0.1).
- The `CHANGELOG.md`.
- The `LICENSE` (GPL-2.0 text).
- All bundled font license files (`INTER-OFL.txt`,
  `NEWSREADER-OFL.txt`).
- The full `docs/` suite.

The submission will *not* include:

- `tests/` (development-only).
- `.gitignore` (development-only).
- Any `.git` directory.

## 15. Useful references

- Theme Review guidelines:
  https://make.wordpress.org/themes/handbook/review/
- Block theme requirements:
  https://developer.wordpress.org/themes/block-themes/
- `theme.json` schema: https://schemas.wp.org/trunk/theme.json
- Accessibility-ready tag requirements:
  https://make.wordpress.org/themes/handbook/review/accessibility/
- Plugin boundary for block themes:
  https://developer.wordpress.org/themes/core-concepts/block-theme/

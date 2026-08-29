# Internationalization — GoDevs Portfolio

The theme is translation-ready, localization-ready, and RTL-ready.
This document explains the conventions and how to translate the
theme.

---

## 1. Text domain

The theme uses the `godevs-portfolio` text domain everywhere. The
text domain is loaded in `functions.php` via
`load_theme_textdomain( 'godevs-portfolio', get_template_directory()
. '/languages' )`.

Translation files live in `/languages/`:
- `godevs-portfolio.pot` — the translation template (shipped with
  the theme).
- `godevs-portfolio-<locale>.po` — translator's working file
  (not shipped with the theme; translators create these).
- `godevs-portfolio-<locale>.mo` — compiled translation (not
  shipped with the theme; translators generate these from the
  .po).

## 2. String conventions

### PHP strings

PHP strings in the theme are limited to:
- Inline documentation (comments, doc blocks) — not translatable.
- Function names and variable names — not translatable.
- The `style.css` and `readme.txt` headers — not translatable
  (these are WordPress core metadata fields).

There are no user-facing PHP strings in `functions.php` in v0.1.
User-facing text lives inside block markup (templates, parts,
patterns), which WordPress treats as content. The strings inside
patterns do not require PHP i18n function wrapping for WordPress.org
theme review.

### Block markup strings

User-facing strings in templates and patterns (e.g. the "Journal"
heading in `index.html`, the "We design and build websites..."
hero headline) are plain text inside block markup. They appear
in the Site Editor as editable text; the user can translate by
editing the markup directly in the Site Editor.

For WordPress.org submission, this convention is acceptable. The
theme review guidelines acknowledge that block theme patterns
contain text the user edits in the Site Editor rather than via
`.po` files.

## 3. .pot file generation

The `.pot` file in v0.1 is a scaffolded template that includes the
PHP strings present in `functions.php` (currently, only doc
comments and version constants — no user-facing strings). The
`.pot` file should be regenerated whenever new user-facing PHP
strings are added.

To regenerate the `.pot` file:

```bash
wp i18n make-pot . languages/godevs-portfolio.pot \
  --domain=godevs-portfolio \
  --exclude=node_modules,tests,docs
```

The `wp-cli/i18n-command` package is required. The command
extracts strings from PHP files (not block markup) and produces
a `.pot` file with `msgid` / `msgstr` pairs.

## 4. RTL support

Block themes inherit RTL support through the WordPress style
engine. `theme.json` styles are flipped automatically for RTL
languages (Arabic, Hebrew, Persian, Urdu). The `core/columns`
block flips column order in RTL. The `core/quote` block flips
the left border to a right border.

No manual `rtl.css` file is required. The v0.1 theme is RTL-ready
out of the box.

## 5. Translation workflow

To translate the theme into a new locale:

1. Copy `languages/godevs-portfolio.pot` to
   `languages/godevs-portfolio-<locale>.po` (e.g.
   `godevs-portfolio-fr_FR.po`).
2. Open the `.po` file in a translation editor (Poedit, Lokalise,
   GlotPress, etc.).
3. Translate each `msgid` into the corresponding `msgstr`.
4. Save the `.po` file. The editor will compile a `.mo` file
   alongside it.
5. Place both files in the theme's `/languages/` directory (or
   in `wp-content/languages/themes/` to keep them outside the
   theme directory).
6. Switch the site language in WordPress admin (Settings →
   General → Site Language). WordPress loads the matching `.mo`
   file automatically.

## 6. Date and time formatting

The theme uses the `core/post-date` block with the `format`
attribute set to `"M j, Y"` (e.g. "Aug 29, 2026"). This format
is locale-aware via WordPress core's `wp_date()` function, which
respects the site's locale setting.

Translators do not need to translate the date format string
explicitly. WordPress core handles the translation of month and
day names based on the site locale.

## 7. Number formatting

The theme does not output numbers with explicit formatting. Any
numbers in patterns (e.g. "01 — Strategy" in the services pattern)
are decorative and do not require locale-specific formatting.

## 8. Plural forms

The theme has no PHP strings that require plural form handling in
v0.1. Future PHP strings (e.g. a settings page in GoDevs Core)
should use `_n()` or `_nx()` for plural-aware strings.

## 9. Context

The theme has no PHP strings requiring translation context in
v0.1. Future PHP strings should use `_x()` or `_ex()` when the
same English word may need different translations in different
contexts (e.g. "Post" as a noun vs. "Post" as a verb).

## 10. Right-to-left (RTL) testing

The theme's RTL support is tested by:

1. Switching the site language to an RTL language (Arabic, Hebrew).
2. Browsing the front-end at 375, 768, 1024, 1280, 1440, 1920.
3. Confirming that:
   - Text direction is RTL.
   - Column order is reversed in multi-column layouts.
   - Quote block border is on the right.
   - Navigation is right-aligned.
   - Buttons and forms are mirrored.
4. Confirming that the Site Editor renders RTL correctly when
   editing templates and parts.

A full RTL test pass is scheduled for Phase 12 (accessibility
audit).

## 11. Locale-specific considerations

### Date formats
The theme's date format (`M j, Y`) is appropriate for English. For
other locales, the format may need adjustment. The user can
override the date format per-block in the Site Editor.

### Numbered list patterns
The services pattern uses "01", "02", "03" as decorative numbers.
These do not require locale-specific formatting; the user can
edit them in the Site Editor.

### Currency
The theme does not display currency in v0.1. Pricing is a Phase 8+
feature (optional, in GoDevs Core Services CPT) and will handle
currency formatting via WordPress core's `number_format_i18n()`.

## 12. WordPress.org translation

When the theme is submitted to WordPress.org (Phase 16/17), the
translation system (GlotPress) will automatically import the
`.pot` file and make the theme available for community
translation at
`https://translate.wordpress.org/projects/wp-themes/godevs-portfolio/`.

Community translators can submit translations for their locale
via the GlotPress web UI. Approved translations are bundled into
language packs and distributed to sites automatically.

## 13. References

- WordPress internationalization handbook:
  https://developer.wordpress.org/apis/internationalization/
- WordPress localization handbook:
  https://developer.wordpress.org/apis/internationalization/localization/
- WP-CLI i18n command:
  https://developer.wordpress.org/cli/commands/i18n/make-pot/
- RTL guidelines:
  https://developer.wordpress.org/themes/advanced-topics/right-to-left-languages/

# Pattern System — GoDevs Portfolio

Patterns are the primary reusable unit in the theme. A pattern is a
self-registering PHP file in `/patterns/` that exposes a section of
block markup to the Site Editor inserter. The user inserts the
pattern, gets a copy of the markup, and edits in place.

This document is the reference for the pattern system. It covers
file structure, conventions, and how to add a new pattern.

---

## 1. What a pattern is

A pattern is a curated block markup composition that solves a
specific design problem. The pattern is:

- **Reusable** — one file, insertable into any page, post, or
  template.
- **Responsive** — renders correctly at 375, 768, 1024, 1280,
  1440, 1920.
- **Accessible** — semantic HTML, keyboard navigable, sufficient
  contrast, reduced-motion respectful.
- **Editable** — the user can change any text, image, link, or
  block attribute inside the pattern without breaking the layout.
- **Lightweight** — no PHP logic beyond the file header, no JS,
  no CSS dependencies beyond the global `theme.json` design system.
- **Documented** — the file header carries a `Title`, `Slug`,
  `Categories`, `Description`, and `Keywords` so the inserter and
  search engines surface the pattern correctly.

A pattern is **not**:

- A custom block. Patterns are core block markup.
- A synced pattern (reusable block). Patterns are starting points;
  edits do not propagate.
- A shortcode. Patterns are block markup, not shortcodes.
- A widget. Patterns live in the Site Editor inserter, not the
  Classic widgets panel.

## 2. File structure

Every pattern is a single PHP file in `/patterns/`. The file begins
with a doc block of file headers, followed by block markup.

```php
<?php
/**
 * Title: Hero
 * Slug: godevs-portfolio/hero
 * Categories: featured, header
 * Description: A bold editorial hero section with display typography,
 *   a lead paragraph, and a primary plus outline CTA.
 * Keywords: hero, landing, intro, masthead
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"godevs-hero"} -->
<section class="wp-block-group godevs-hero">
  <!-- block markup -->
</section>
<!-- /wp:group -->
```

### Required headers
- `Title` — human-readable name shown in the inserter.
- `Slug` — pattern identifier, must be `godevs-portfolio/<name>`.

### Optional headers
- `Categories` — comma-separated list of category slugs. Built-in
  categories: `button`, `columns`, `featured`, `gallery`, `header`,
  `text`, `query`, `posts`, `footer`, `call-to-action`. Custom
  categories must be registered via
  `register_block_pattern_category()` in `functions.php`.
- `Description` — one or two sentences shown in the inserter under
  the pattern preview.
- `Keywords` — comma-separated, used by inserter search.
- `Viewport Width` — pixel width for the inserter preview (default
  1200).
- `Inserter` — `yes` (default) or `no`. Set to `no` to hide from
  the inserter (used for starter-site patterns).
- `Block Types` — comma-separated list of block types this pattern
  applies to (used by the block's "Transform" menu).

## 3. Slug convention

All pattern slugs are prefixed `godevs-portfolio/`. The prefix
guarantees the pattern does not collide with patterns from another
theme or plugin. The slug after the prefix is kebab-case.

Examples:
- `godevs-portfolio/hero`
- `godevs-portfolio/portfolio-grid`
- `godevs-portfolio/cta`

## 4. Categories used in v0.1

| Pattern | Categories |
|---------|------------|
| `hero` | `featured`, `header` |
| `about` | `featured`, `about` |
| `services` | `featured`, `services` |
| `portfolio-grid` | `featured`, `portfolio`, `query` |
| `testimonials` | `featured`, `text` |
| `cta` | `featured`, `call-to-action` |
| `contact` | `featured`, `text` |
| `footer` | `footer` |

The custom categories (`about`, `services`, `portfolio`) are not
registered in `functions.php` in v0.1 because the patterns using them
also include built-in categories. If a future pattern only uses a
custom category, the category must be registered.

## 5. Block style variations used

The patterns use the block style variations declared in
`assets/css/editor.css` and the front-end style engine:

| Style | Used by | Effect |
|-------|---------|--------|
| `is-style-muted` | paragraph | muted text colour |
| `is-style-lead` | paragraph | large size, secondary colour |
| `is-style-outline` | button | transparent background, primary border |
| `is-style-pill` | button | pill-shaped (future use) |

Patterns use these styles via the `className` block attribute:

```html
<!-- wp:paragraph {"className":"is-style-muted"} -->
<p class="is-style-muted">…</p>
<!-- /wp:paragraph -->
```

## 6. Spacing and layout conventions

### Section vertical padding
- Hero, CTA: `var:preset|spacing|90` (6rem).
- About, services, portfolio, testimonials, contact: `var:preset|spacing|80`
  (4rem).
- Footer: `var:preset|spacing|70` (3rem).

### Section background
- Default: `var(--wp--preset--color--background)` (white).
- Alternating section: `var(--wp--preset--color--surface)` (very
  light grey).
- CTA / Contact / Footer band: `var(--wp--preset--color--primary)`
  (navy) with `var(--wp--preset--color--background)` (white) text.

### Inner content layout
- Default: `layout: { type: "constrained" }` (content centered at
  768px).
- Multi-column sections: `wp:columns` with explicit width
  percentages (e.g. `60% / 40%` for about).

## 7. Demo content rules

Demo content in patterns must follow the policy in the product
brief (section 14):

- **Realistic but fictional.** Sample identities are clearly
  fictional ("Sample client", "fictional studio").
- **No fake awards, certifications, or revenue.**
- **No generic AI marketing language.** Phrases like "unlock your
  potential", "transform your digital vision", "innovative solutions
  for tomorrow" are forbidden.
- **No fake client relationships.** Testimonials pattern includes a
  "Sample attribution shown for layout reference" disclaimer.
- **No fake stock photos.** Image blocks in patterns are empty
  `<img>` tags with empty `alt` attributes. The user provides
  images via the Site Editor.

## 8. Pattern copy voice

The voice of the demo copy is:

- **Direct, not promotional.** "A small studio working on design
  systems, editorial portfolios, and the occasional ambitious
  marketing site."
- **Specific, not generic.** "We take on a small number of projects
  each year" instead of "We deliver excellence in every project."
- **Honest about scale.** "A handful of designers and engineers"
  instead of "a team of experts."
- **Specific about deliverables.** "Typography, palette, spacing,
  and a small set of block patterns wired into theme.json."

## 9. Adding a new pattern

To add a new pattern:

1. Create `/patterns/<name>.php` with a pattern file header.
2. Set the `Slug` to `godevs-portfolio/<name>`.
3. Pick a `Title` that reads as an outcome (e.g. "Hero", "About",
  "Services", "Portfolio Grid", "Testimonial", "Call to Action",
  "Contact", "Minimal Footer"). Avoid developer-facing terms
  ("Section", "Container", "Wrapper").
4. Pick `Categories` from the built-in list plus any custom
  categories you need to register.
5. Write a one-or-two-sentence `Description` that helps a non-
  technical user pick the pattern.
6. Add `Keywords` to make the pattern searchable.
7. Set `Viewport Width` to 1280 for full-width patterns or 768 for
   content-width patterns.
8. Compose the block markup. Use only core blocks. Use design
   system tokens for colour, spacing, typography, radius, shadow.
9. Test the pattern by inserting it in the Site Editor and at each
   responsive breakpoint.

## 10. Pattern review checklist

Before merging a new pattern, confirm:

- [ ] Slug is `godevs-portfolio/<name>`.
- [ ] Title reads as an outcome, not an implementation.
- [ ] Description is one or two sentences in plain English.
- [ ] Categories include at least one built-in category.
- [ ] Pattern uses design system tokens (no hardcoded hex or
      spacing).
- [ ] Pattern is responsive at 375, 768, 1024, 1280, 1440, 1920.
- [ ] Pattern has at least one heading with appropriate level.
- [ ] Pattern uses semantic landmarks where applicable (e.g.
      `<section>` wrapper for major sections).
- [ ] Pattern copy is realistic but fictional.
- [ ] Pattern does not include any fake awards, certifications,
      revenue, or client relationships.
- [ ] Pattern does not include AI-generated images, illustrations,
      or icons.
- [ ] Pattern does not call any plugin functions directly.
- [ ] Pattern works with GoDevs Core inactive (graceful
      degradation).
- [ ] Pattern inserts without PHP errors.

## 11. Pattern anti-patterns

The following are explicitly forbidden:

- **Custom blocks.** Use core blocks. See the "Custom block rule"
  in `docs/GUTENBERG-ARCHITECTURE.md`.
- **Inline CSS or JS.** Patterns are HTML with block comments only.
- **PHP logic.** The only PHP in a pattern file is the file header.
- **Hardcoded hex values.** Use `var(--wp--preset--color--*)`.
- **Arbitrary spacing.** Use `var:preset|spacing|*` or
  `var(--wp--preset--spacing--*)`.
- **External image URLs.** Image blocks are empty until the user
  fills them.
- **Plugin function calls.** Use the body class
  (`godevs-core-active`) or PHP constant
  (`GODEVS_PORTFOLIO_CORE_ACTIVE`) for plugin-conditional rendering.
- **Excessive gradients, shadows, or decorative elements.** See
  the design system rules in `docs/DESIGN-SYSTEM.md`.

## 12. Pattern-to-pattern references

A pattern can reference another pattern via the `core/pattern`
block:

```html
<!-- wp:pattern {"slug":"godevs-portfolio/hero"} /-->
```

This is useful for composing a "page" pattern that bundles several
section patterns together. v0.1 does not ship page-level patterns,
but the front-page template uses the `core/pattern` block to
compose the homepage from section patterns.

## 13. Pattern transformations

A pattern can be associated with a block type via the `Block Types`
header, which causes the pattern to appear in the block's "Replace"
menu. v0.1 does not use this feature, but it is available for
future patterns that want to specialise a core block (e.g. a
"Portfolio Query" pattern that replaces `core/query` for portfolio
use cases — Phase 8 deliverable).

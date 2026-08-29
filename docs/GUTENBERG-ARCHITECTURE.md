# Gutenberg Architecture — GoDevs Portfolio

This document describes how the theme integrates with the WordPress
block editor (Gutenberg) and the Site Editor. It is the reference for
anyone working on templates, template parts, patterns, or block style
variations.

---

## 1. Block theme model

A block theme is one where the entire front-end is composed of
Gutenberg blocks. Pages, posts, templates, template parts, and even
the site header and footer are all block markup. There is no classic
PHP templating layer.

GoDevs Portfolio follows the block theme model completely. The only
PHP files in the theme are `functions.php` (minimal setup), `index.php`
(silence-is-golden), and the pattern headers in `/patterns/`.

### Implications

- The Site Editor is the canonical place to edit any visual element.
  Users do not need the Customizer for layout; they edit templates
  directly in the Site Editor.
- The block editor and the Site Editor share the same rendering
  engine. Patterns inserted in a post render identically to patterns
  inserted in a template.
- `theme.json` is the design vocabulary. Patterns, templates, and
  parts use the same CSS variables; switching a style variation
  re-binds the variables and the patterns re-flow without edits.

## 2. Block usage

### Blocks used in v0.1
The theme uses only core blocks. No custom blocks are registered.

| Block | Where used |
|-------|------------|
| `core/group` | Wrapping sections, content containers, full-width bands |
| `core/columns`, `core/column` | Multi-column layouts (about, services, contact) |
| `core/heading` | Every heading in every template and pattern |
| `core/paragraph` | Body text, captions, eyebrow text |
| `core/buttons`, `core/button` | CTAs (hero, cta, contact) |
| `core/image` | About pattern image, post featured images |
| `core/separator` | Section dividers |
| `core/site-logo` | Header and footer template parts |
| `core/site-tagline` | Footer template part |
| `core/site-title` | Header (implicit via site-logo in v0.1) |
| `core/navigation` | Header and footer template parts |
| `core/template-part` | Every template references `header` and `footer` parts |
| `core/query`, `core/post-template`, `core/post-featured-image`, `core/post-title`, `core/post-excerpt`, `core/post-date`, `core/post-terms` | Index, home, archive, search, portfolio-grid pattern |
| `core/query-pagination`, `core/query-pagination-previous`, `core/query-pagination-next` | Index, home, archive, search |
| `core/query-no-results` | Index, archive, search, portfolio-grid |
| `core/quote`, `core/pullquote` | Quote template blocks, testimonials pattern |
| `core/search` | Search template, 404 template |
| `core/comments`, `core/comment-content`, `core/comment-form` | Single template |
| `core/post-content` | Page, single, singular templates |
| `core/post-navigation-link` | Single template |
| `core/post-edit-link` | Page, singular templates |
| `core/post-terms` | Single template |
| `core/separator` | All templates |
| `core/pattern` | Front-page template (references patterns) |
| `core/post-featured-image` | Single, portfolio-grid |

### Blocks not used in v0.1
The theme deliberately does not use:
- `core/widget-area` — block themes use the Site Editor for footer
  content, not classic widget areas.
- `core/legacy-widget` — same reason.
- `core/freeform` — Classic block; the theme is Gutenberg-native.
- `core/shortcode` — the theme does not use shortcodes.
- `core/html` — patterns are composed of native blocks, not raw HTML.

## 3. Block style variations

Block style variations are alternate styles for a specific block,
exposed in the block's Style panel. They are the WordPress-native way
to offer "looks" without registering a custom block.

### Variations shipped in v0.1

| Block | Style name | Class | What it does |
|-------|-----------|-------|-------------|
| `core/paragraph` | Muted | `is-style-muted` | Muted text colour, for secondary copy |
| `core/paragraph` | Lead | `is-style-lead` | Large size, secondary colour, for hero lead |
| `core/separator` | Hairline | `is-style-hairline` | 1px solid border in the border token |
| `core/button` | Pill | `is-style-pill` | Pill-shaped button (radius 999px) |

These variations are styled in `assets/css/editor.css` (which loads
in the editor) and inherit to the front-end via `theme.json` element
styles. Adding a new style variation requires editing `editor.css`
for the editor preview and adding a matching rule for the front-end
style engine (typically in a small CSS file enqueued via
`wp_enqueue_scripts`).

## 4. Pattern categories

Pattern categories group patterns in the Site Editor inserter. The
theme uses both built-in categories and a small set of custom
categories.

### Built-in categories used
- `featured` — patterns shown in the "Featured" tab of the inserter
  (hero, cta).
- `header` — header pattern (hero, header pattern when added).
- `footer` — footer pattern.
- `text` — quote, pullquote, paragraph-style patterns (about,
  testimonials, contact).
- `query` — patterns using Query Loop blocks (portfolio-grid).
- `call-to-action` — CTA pattern.

### Custom categories (planned, not yet registered in v0.1)
- `about` — about pattern.
- `services` — services pattern.
- `portfolio` — portfolio-grid pattern.

Custom categories are not registered in `functions.php` in v0.1
because the patterns using them also include built-in categories, so
they appear under the built-in categories in the inserter. If a
future pattern only uses a custom category, the category needs to be
registered via `register_block_pattern_category()` in
`functions.php`.

## 5. Template hierarchy

The standard WordPress template hierarchy applies:

```
Site front page
└── front-page.html (if "A static page" is selected)
    OR
└── home.html (if "Your latest posts" is selected)

Single post
└── single.html → singular.html → index.html

Single page
└── page.html → singular.html → index.html

Single CPT (if GoDevs Core active)
└── single-<cpt>.html → singular.html → index.html
   (single-<cpt>.html is shipped by GoDevs Core, not the theme)

Archive (category, tag, taxonomy)
└── archive.html → index.html

Search
└── search.html → index.html

404
└── 404.html
```

### Block theme template notes
- Block themes do not need `front-page.php` — `templates/front-page.html`
  is auto-discovered.
- Custom templates declared in `theme.json` `customTemplates` appear
  in the Page Editor under "Template" in the sidebar.
- Template parts declared in `theme.json` `templateParts` appear in
  the Site Editor under "Template Parts".

## 6. Pattern vs template vs template part

| Concept | Where it lives | Who uses it | How a user inserts |
|---------|----------------|-------------|---------------------|
| Template | `templates/` | The site | Selected automatically by template hierarchy; user picks template in Page Editor sidebar |
| Custom template | `templates/` + `theme.json customTemplates` | The site, on a specific page | User picks in Page Editor sidebar (e.g. "Page (No Title)") |
| Template part | `parts/` + `theme.json templateParts` | Templates, other parts | User inserts via Site Editor → Template Parts panel |
| Pattern | `patterns/` | Posts, pages, templates | User inserts via inserter → Patterns tab |
| Reusable block (Synced Pattern) | Database (wp_block post type) | Posts, pages, templates | User inserts via inserter → Patterns tab → Synced tab |

### Key distinction: Pattern vs Reusable block
- A **pattern** is a starting point. The user inserts it, gets a copy
  of the markup, and edits in place. Edits to one instance do not
  propagate to other instances.
- A **reusable block** (synced pattern) is a single instance. The
  user inserts it, gets a reference, and edits to the master
  propagate to all references.

GoDevs Portfolio ships patterns (not reusable blocks). The user can
convert any inserted pattern to a reusable block via the block
toolbar if they want sync behaviour.

## 7. Pattern file structure

A pattern file lives in `/patterns/` and looks like:

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
<!-- wp:group {"tagName":"section","className":"godevs-hero",...} -->
<section class="wp-block-group godevs-hero">
  <!-- block markup -->
</section>
<!-- /wp:group -->
```

### Required headers
- `Title` — shown in the inserter.
- `Slug` — must be `godevs-portfolio/<name>` to avoid collisions.

### Optional headers
- `Categories` — comma-separated list of category slugs.
- `Description` — shown in the inserter, one or two sentences.
- `Keywords` — comma-separated, used by inserter search.
- `Viewport Width` — pixel width for the inserter preview.
- `Inserter` — `yes` (default) or `no`. Set to `no` to hide from
  the inserter (used for starter-site patterns).
- `Block Types` — comma-separated list of block types this pattern
  applies to (used by the block's "Replace" menu).

## 8. Style engine

The WordPress style engine is the system that takes `theme.json`
declarations and produces CSS. Every `theme.json` declaration becomes
either:

1. A CSS custom property (e.g. `--wp--preset--color--primary`) on
   the body root, usable in any CSS.
2. An inline style on the relevant block's wrapper (e.g. `.wp-block-
   button__link { background-color: var(--wp--preset--color--primary) }`).

The theme relies on the style engine for all design system output.
The two CSS files shipped in `/assets/css/` are for editor-only
affordances and print styles — neither is loaded on the front-end
during normal page rendering.

## 9. Template part areas

Block themes assign each template part to an *area*. The area
controls where the part appears in the Site Editor's template-parts
panel.

| Area | Use |
|------|-----|
| `header` | Site header parts (logo, navigation) |
| `footer` | Site footer parts (footer, copyright) |
| `navigation` | Navigation-only parts (mobile menu) |
| `uncategorized` | Parts without an area |

v0.1 ships:
- `parts/header.html` → area `header`
- `parts/footer.html` → area `footer`
- `parts/mobile-menu.html` → area `navigation`

## 10. Custom block rule

Before adding a custom block to the theme, ask:

1. Can a core block solve this?
2. Can a pattern solve this?
3. Can a block style variation solve this?
4. Is dynamic data actually required, or is this static content?
5. Will a custom block meaningfully improve the user experience?
6. Is the maintenance cost (block build pipeline, server-side render
   callback, deprecation handling) justified?

If any of the first three answers is "yes", do not build a custom
block. v0.1 ships zero custom blocks. Phase 8 (GoDevs Core) may
introduce custom blocks for dynamic content types, and only there.

## 11. Sync between editor and front-end

The block editor renders blocks using the same `theme.json` as the
front-end. The editor CSS in `assets/css/editor.css` is loaded only
in the editor and provides affordances that have no front-end
equivalent (e.g. preview heights, pattern preview backgrounds).

Anything a user sees in the editor that is also expected on the
front-end must be defined in `theme.json` (root, element, block
styles) or in block markup — *not* in `editor.css`.

## 12. Inserting patterns from templates

The front-page template composes a homepage by referencing patterns:

```html
<!-- wp:pattern {"slug":"godevs-portfolio/hero"} /-->
```

When the user opens the front-page template in the Site Editor, they
see the patterns rendered inline. They can edit any block inside the
pattern; the edits are local to the template, not propagated back to
the pattern definition.

This is the canonical way to ship a default homepage that users can
customise without learning to compose from scratch.

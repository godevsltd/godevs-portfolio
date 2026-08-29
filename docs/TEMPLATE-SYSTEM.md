# Template System — GoDevs Portfolio

This document is the reference for the template layer. It maps the
standard WordPress template hierarchy to the templates shipped in
v0.1, explains how each template is composed, and describes the
conventions contributors should follow when adding or modifying
templates.

---

## 1. Template hierarchy

GoDevs Portfolio follows the standard block theme template hierarchy.
When WordPress needs a template for a request, it looks in the
following order (simplified):

```
Single page (slug): page-<slug>.html → page.html → singular.html → index.html
Single post (post-type): single-<post-type>.html → single.html → singular.html → index.html
Front page: front-page.html → home.html → index.html
Archive: archive-<post-type>.html → archive-<taxonomy>.html → archive.html → index.html
Search: search.html → index.html
404: 404.html → index.html
Author: author.html → archive.html → index.html
Date: date.html → archive.html → index.html
```

### v0.1 templates
- `index.html` — fallback for any request that does not match a more
  specific template. Renders a posts list.
- `home.html` — used when Settings → Reading → Your homepage displays
  is set to "Your latest posts". Renders a date-aligned posts list.
- `front-page.html` — used when Settings → Reading → Your homepage
  displays is set to "A static page". Composes the default homepage
  by referencing patterns (hero, about, services, portfolio, cta,
  testimonials, contact).
- `page.html` — default template for static pages. Renders the post
  title, content, and an edit link.
- `page-no-title.html` — custom template, declared in `theme.json`
  `customTemplates`. Renders the post content without the post title.
  Useful for landing pages where the hero pattern provides the
  heading.
- `single.html` — template for single blog posts. Renders the post
  date, title, terms, featured image, content, post navigation, and
  comments.
- `singular.html` — fallback for any single content type. Renders
  the post date, title, content, and edit link. Used for CPT single
  views when no `single-<cpt>.html` exists (e.g. GoDevs Core CPTs
  in Phase 8).
- `archive.html` — template for category, tag, taxonomy, and CPT
  archives. Renders the archive title and a posts list.
- `search.html` — template for search results. Renders the search
  query, a search form, and the results list.
- `404.html` — template for not-found responses. Renders a heading,
  a paragraph, a search form, and a button to return home.

## 2. Template anatomy

Every v0.1 template follows the same shape:

```
<!-- wp:template-part {"slug":"header"} /-->
<main class="wp-block-group site-main">
  ... template-specific content ...
</main>
<!-- wp:template-part {"slug":"footer"} /-->
```

### Why this shape
- The header template part provides the site chrome (logo,
  navigation, CTA) consistently across templates.
- The footer template part provides the footer chrome (logo,
  navigation, copyright) consistently.
- The main content is wrapped in a `wp:group` block with
  `tagName:"main"` so it has a semantic landmark for accessibility.
- The main content uses `layout: { type: "constrained" }` by default
  so content is centered at `contentSize` (768px).

### Exceptions
- The 404 template does not include the comments block or the post
  navigation.
- The front-page template references patterns instead of inline
  block markup, so the homepage composes from reusable sections.

## 3. Template composition: front-page

The front-page template composes the default homepage:

```
1. Header template part
2. Hero pattern (full-width, display headline, CTA buttons)
3. About pattern (constrained, two-column with image)
4. Services pattern (surface background, three-column grid)
5. Portfolio Grid pattern (constrained, Query Loop block, 3-column)
6. CTA pattern (full-width navy band, display headline, CTA buttons)
7. Testimonials pattern (constrained, large pull-quote)
8. Contact pattern (full-width navy band, two-column with form placeholder)
9. Footer template part
```

Sections alternate between `background` (white) and `surface` (very
light grey) or `primary` (navy) to create visual rhythm. Full-width
sections use a wrapping `wp:group` with `style.color.background` and
an inner `wp:group` with `layout: { type: "constrained" }` to keep
content centered.

## 4. Template composition: single post

The single template composes a single blog post:

```
1. Header template part
2. Date + title + tags (constrained)
3. Featured image (16:9 aspect ratio, 4px radius)
4. Post content (constrained)
5. Post navigation (constrained, "Previous / Next")
6. Comments (constrained, with comment form)
7. Footer template part
```

## 5. Template composition: archive

The archive template composes an archive page (category, tag,
taxonomy, CPT):

```
1. Header template part
2. Eyebrow text ("Archive") + Query Title (archive name) + lead paragraph
3. Separator
4. Query Loop with post date + post title + post excerpt per item
5. Query pagination
6. No results message
7. Footer template part
```

## 6. Template composition: search

The search template composes a search results page:

```
1. Header template part
2. Eyebrow text ("Search results") + Query Title (search query)
3. Search form
4. Query Loop with post date + post title + post excerpt per item
5. Query pagination
6. No results message (with a second search form)
7. Footer template part
```

## 7. Template composition: 404

The 404 template composes a not-found page:

```
1. Header template part
2. Eyebrow text ("404 — page not found")
3. Heading ("That page cannot be located.")
4. Lead paragraph explaining what happened
5. Search form
6. Button to return home
7. Footer template part
```

## 8. Template conventions

### Required
- Every template starts with `<!-- wp:template-part {"slug":"header"} /-->`
  (unless the template intentionally omits chrome).
- Every template ends with `<!-- wp:template-part {"slug":"footer"} /-->`.
- The main content is wrapped in
  `<!-- wp:group {"tagName":"main","className":"site-main"} -->...
  <!-- /wp:group -->`.
- Section vertical padding uses spacing tokens: `var:preset|spacing|70`
  or `var:preset|spacing|80` for content sections, `var:preset|spacing|90`
  for hero / CTA.
- Templates use `layout: { type: "constrained" }` by default.
- Full-width sections use a wrapping `wp:group` with full background
  colour and an inner `wp:group` with `layout: { type: "constrained" }`.

### Recommended
- Headings use Newsreader (via `theme.json` element styles, no per-
  block override needed in most cases).
- Section titles are h2; subsection titles are h3.
- The first h1 on a template is the page title or the hero headline.
  Templates do not include more than one h1.

### Forbidden
- Inline CSS in templates. All styles come from `theme.json` or
  `theme.json`-generated variables.
- Inline JavaScript. The theme has one JS file (`navigation.js`)
  and templates do not embed scripts.
- Hardcoded URLs (except internal `/work`, `/services`, `/contact`
  placeholders the user is expected to update).
- Hardcoded colour or spacing values. Use the design tokens.
- Calling PHP functions inside templates. Templates are HTML; the
  only PHP in the theme lives in `functions.php` and pattern headers.

## 9. Custom templates

A custom template is a template the user can assign to a specific
page from the Page Editor sidebar. v0.1 ships one custom template:

- `templates/page-no-title.html` — Page (No Title)

Custom templates are declared in `theme.json`:

```json
"customTemplates": [
  {
    "name": "page-no-title",
    "title": "Page (No Title)",
    "postTypes": [ "page" ]
  }
]
```

The user assigns the template via Page Editor → Settings → Template
dropdown. The Page (No Title) template renders the page content
without the post title — useful when a hero pattern provides the
heading.

## 10. Adding a new template

To add a new template:

1. Create `templates/<name>.html` with the standard template shape
   (header → main → footer).
2. If the template is a custom template (assignable per-page), add a
   `customTemplates` entry to `theme.json`:
   ```json
   {
     "name": "<name>",
     "title": "<Title>",
     "postTypes": [ "page" ]
   }
   ```
3. If the template is a hierarchy template (e.g. `author.html`,
   `date.html`), no `theme.json` change is needed — WordPress auto-
   discovers it.
4. Test the template by selecting it in the Page Editor sidebar
   (custom templates) or by navigating to the relevant request
   (hierarchy templates).

## 11. Template overrides

When a user edits a template in the Site Editor, their edits are
saved to the database as a `wp_template` post. The file-based
template becomes a fallback — WordPress uses the database version
first, the file version only when no database override exists.

### Implications
- Updating the theme updates the file-based template, but does
  not override the user's database version.
- A user can "Reset" a template via the Site Editor to discard
  their edits and fall back to the file version.
- The file version must always be sensible — it is the fallback
  when the user resets.

## 12. Pattern references in templates

Templates can reference patterns via:

```html
<!-- wp:pattern {"slug":"godevs-portfolio/hero"} /-->
```

This pattern block renders the pattern inline. The user can edit
the pattern's blocks in the template; the edits are local to the
template (not propagated back to the pattern definition).

### When to use pattern references
- When a template composes a homepage or landing page from reusable
  sections.
- When a template wants to ship a default section the user is likely
  to want to customise.

### When not to use pattern references
- When a section is unique to one template and would never be
  inserted elsewhere.
- When a section's markup depends on the template's context (e.g.
  the post title block on the single template — this is not a
  pattern, it is template-specific block markup).

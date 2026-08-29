# SEO — GoDevs Portfolio

The theme provides a clean SEO foundation. It does not attempt to
replace dedicated SEO plugins. Semantic HTML, clean heading
hierarchy, fast loading, and structured markup give SEO plugins
(RankMath, Yoast, The SEO Framework) a solid base to build on.

---

## 1. What the theme does for SEO

### Semantic HTML
The theme uses semantic HTML elements throughout:
- `header`, `main`, `footer` for landmarks.
- `nav` (via the Navigation block).
- `article` (via single post templates, implicit in core blocks).
- `h1` once per page, `h2` for sections, `h3` for subsections.
- `time` (via the post-date block) for machine-readable dates.

### Clean heading hierarchy
Every template has exactly one `h1`. Section headings are `h2`,
subsections are `h3` through `h6`. No levels are skipped. See
`docs/TEMPLATE-SYSTEM.md` and `docs/ACCESSIBILITY.md` for the
per-template h1 mapping.

### Fast loading
The theme targets LCP < 2.5s, TBT < 200ms, CLS < 0.1 on a fast 3G
profile. See `docs/PERFORMANCE.md`. Core Web Vitals are a Google
ranking factor; the theme is built to pass them out of the box.

### Schema-friendly structure
The theme's HTML structure is compatible with schema.org markup
added by SEO plugins. The post title is in an `h1`; the post
content is in the post-content block; the post date is in a
`time` element with a machine-readable `datetime` attribute. SEO
plugins can annotate this structure with `itemprop` attributes
without conflicts.

### Mobile-friendly
The theme is mobile-first, responsive, and uses no horizontal
scroll at viewports ≥375px. Mobile-friendliness is a Google
ranking factor.

### Accessibility-ready
Accessibility is correlated with SEO (semantic HTML, alt text,
heading hierarchy, descriptive link text). The theme's
accessibility work directly improves SEO.

## 2. What the theme does NOT do for SEO

For clarity, the theme intentionally does not ship:

- Meta tags (title, description, keywords, robots).
- OpenGraph tags.
- Twitter Card tags.
- Canonical URLs.
- Schema.org JSON-LD output.
- XML sitemap.
- Breadcrumbs (visual or schema).
- Image alt text generation.
- Redirect manager.
- Content analysis (focus keyword, readability).

All of the above are the responsibility of an SEO plugin. The
theme is compatible with RankMath, Yoast SEO, The SEO Framework,
All in One SEO, and similar plugins.

## 3. Recommended SEO plugins

The theme is tested for compatibility (not formally; the theme
simply does not interfere with these plugins' standard
integrations):

- **RankMath** — recommended for users who want a modern UI and
  schema markup.
- **Yoast SEO** — recommended for users familiar with the classic
  Yoast interface.
- **The SEO Framework** — recommended for users who want a
  lightweight, privacy-friendly SEO plugin.

## 4. Title tag

The theme uses the WordPress core `wp_title` filter chain, which
produces the document title from the site title, the page title,
and the site tagline. SEO plugins override this filter to add
their own titles.

The `theme.json` does not declare a custom title format. The
default WordPress behaviour is used.

## 5. Meta description

The theme does not output a meta description. SEO plugins handle
this. The theme's patterns contain lead paragraphs and excerpts
that SEO plugins can use as the meta description source.

## 6. OpenGraph and Twitter Card tags

The theme does not output OpenGraph or Twitter Card tags. SEO
plugins handle these. The theme's post-featured-image block
provides the image source for the `og:image` tag (which SEO
plugins read).

## 7. Schema.org markup

The theme does not output Schema.org JSON-LD. SEO plugins handle
this. The theme's HTML structure is compatible with the most
common Schema.org types:

- `Article` (single post template).
- `WebPage` (page template).
- `BreadcrumbList` (not output by the theme; SEO plugins add
  this, typically).
- `Organization` and `WebSite` (typically added by SEO plugins
  at the site level).

## 8. XML sitemap

The theme does not generate an XML sitemap. WordPress core
generates a sitemap at `/wp-sitemap.xml` since version 5.5; SEO
plugins can extend or replace this. The theme is compatible with
the core sitemap.

## 9. Breadcrumbs

The theme does not output breadcrumbs in v0.1. Breadcrumbs are
a Phase 10 candidate feature (via a pattern or template part). The
theme is compatible with breadcrumb plugins (Breadcrumb NavXT,
Yoast Breadcrumbs).

## 10. URL structure

The theme does not modify URL structure. The user's WordPress
Permalink settings (Settings → Permalinks) control URL structure.
The recommended setting is "Post name" for clean, keyword-rich
URLs.

## 11. Image alt text

The theme's patterns use empty `alt=""` for decorative image
placeholders (correctly skipped by screen readers). The user is
responsible for providing meaningful alt text when they replace
the placeholders. The WordPress block editor prompts for alt text
when uploading images.

## 12. Internal linking

The theme's templates and patterns include internal links where
appropriate:
- Front-page: links to `/work`, `/services`, `/about`, `/journal`,
  `/contact` (placeholders the user updates).
- Single post: previous / next post navigation links.
- Archive: post title links to single post.
- Search: post title links to single post.
- Footer: navigation links.

## 13. SEO-friendly defaults

- The default front-page template composes a working homepage
  that targets the most common portfolio site queries (hero,
  about, services, work, testimonials, contact). Search engines
  see a complete, semantically-structured page on first crawl.
- The single post template renders the post title, featured
  image, content, tags, and post navigation — a complete article
  structure.
- The archive template renders the archive title and a posts
  list — a clean category / tag / taxonomy page.
- The 404 template renders a heading, paragraph, search form,
  and home button — a helpful 404 page that does not waste crawl
  budget.

## 14. SEO and Gutenberg

The block editor (Gutenberg) is inherently SEO-friendly:
- Headings are real `h1`-`h6` elements, not styled paragraphs.
- Lists are real `ul` / `ol` elements.
- Links are real `a` elements with `href` attributes.
- Images are real `img` elements with `alt` attributes.
- The block editor prompts users for alt text on image upload.

The theme extends this by ensuring every pattern uses semantic
core blocks (no `<div>`-soup, no JavaScript-rendered content).

## 15. SEO and accessibility overlap

Many SEO best practices are also accessibility best practices:
- Semantic HTML landmarks.
- Heading hierarchy.
- Descriptive link text (no "click here").
- Image alt text.
- Sufficient colour contrast (so users can read the content).
- Fast loading (so users with slow connections can access the
  content).
- Mobile-friendly responsive design.

The theme's accessibility work directly improves its SEO. See
`docs/ACCESSIBILITY.md` for the accessibility scope.

## 16. References

- Google Search Central:
  https://developers.google.com/search/docs
- WordPress core sitemaps:
  https://developer.wordpress.org/reference/functions/wp_sitemaps_get_server/
- Schema.org: https://schema.org/
- Core Web Vitals: https://web.dev/vitals/

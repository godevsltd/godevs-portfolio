# GoDevs Portfolio — Template System

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the template architecture: which templates ship, what each does, how they compose with template parts and patterns, and what conventions govern their authoring.

---

## 1. Templates Overview

Block themes render content via `.html` files in `templates/`. Each file contains block markup that WordPress parses and renders for the matching route.

### 1.1 Phase 1 Templates

| File | Route | Purpose |
|---|---|---|
| `index.html` | Fallback for all unmatched routes | Catch-all — typically blog index |
| `home.html` | "Posts page" (Settings → Reading) | Latest posts list |
| `front-page.html` | Site front page (whether static or posts) | Top-level landing |
| `page.html` | Static pages | Generic page rendering |
| `single.html` | Single post of any post type | Article rendering |
| `archive.html` | Generic archive (custom post types, custom taxonomies) | Archive list |
| `category.html` | Category archive | Category list |
| `tag.html` | Tag archive | Tag list |
| `author.html` | Author archive | Author's posts |
| `date.html` | Date-based archive | Posts by date |
| `search.html` | Search results | Search result list |
| `404.html` | 404 not found | Error page |

All twelve templates ship in Phase 1.

### 1.2 Template Hierarchy Note

WordPress's template hierarchy resolves a single template per request. The block theme provides one HTML file per hierarchy slot. When WordPress cannot find a specific template (e.g., `single-product.html`), it falls back to `single.html` → `index.html`. We ship the explicit named templates above to avoid relying on fallback chains.

---

## 2. Template Composition Rules

### 2.1 Skeleton

Every template follows this skeleton:

```html
<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group">
    <!-- Template-specific content -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"godevs-portfolio","tagName":"footer"} /-->
```

### 2.2 Rules

1. **Top and bottom: `core/template-part` referencing `header` and `footer`.**
2. **Middle: a `core/group` with `tagName: "main"` wrapping content.**
3. **No `core/site-header` or `core/site-footer` elements** — use template parts.
4. **No inline header/footer markup** — composition is the template part's responsibility.
5. **No PHP inside templates** — these are pure HTML block markup.
6. **No hardcoded content** — use `core/post-title`, `core/post-content`, etc. which resolve to runtime content.
7. **All spacing via spacing presets** — `style.spacing.padding` references `var:preset|spacing|<slug>`.

### 2.3 Skip Link

WordPress injects a skip link automatically when a block theme is active. The link targets the first `<main>` element on the page. Every template must include a `core/group` with `tagName: "main"` to ensure the skip link works.

---

## 3. Per-Template Design Intent

### 3.1 `index.html` — Fallback / Blog Index

- Header template part
- `core/group` (main)
  - Page title (`core/heading` or `core/query-title`) showing site name + "Journal"
  - `core/query` loop rendering posts as cards (image, title, excerpt, date, read more)
- Footer template part

**Layout:** Centered content width (640px), single-column post list, generous spacing between items.

### 3.2 `home.html` — Posts Page

Similar to `index.html` but used when a static page is set as the posts page. Differs in that the page's own title and content are rendered above the post list.

- Header template part
- `core/group` (main)
  - `core/post-title` (the posts page's own title)
  - `core/post-content` (the posts page's own content, if any)
  - `core/query` loop with the latest posts
- Footer template part

### 3.3 `front-page.html` — Front Page

Used when a static page is set as the front page. This is where the design system shines — a composition of patterns.

- Header template part (transparent variant for hero integration)
- `core/group` (main)
  - `core/cover` (hero — could be a hero pattern)
  - Featured work section (portfolio pattern)
  - About preview (about pattern)
  - Services preview (services pattern)
  - Testimonials section (testimonials pattern)
  - CTA band (cta pattern)
- Footer template part (CTA variant for strong close)

**Note:** Phase 1 ships a minimal `front-page.html` that composes the page's own content via `core/post-content`. The "pattern-composed front page" is the Phase 2 objective once patterns are richer.

### 3.4 `page.html` — Generic Page

- Header template part
- `core/group` (main)
  - `core/post-title` with display size
  - `core/post-featured-image` (optional, with aspect ratio)
  - `core/post-content`
- Footer template part

### 3.5 `single.html` — Single Post

- Header template part
- `core/group` (main)
  - Article header: `core/post-terms` (category), `core/post-title`, `core/post-date`, `core/post-author`
  - `core/post-featured-image`
  - `core/post-content`
  - `core/separator`
  - `core/post-author-biography` (author bio block, if available)
  - `core/comments`
- Footer template part

**Layout:** Article width `640px`, generous line length for readability.

### 3.6 `archive.html` — Generic Archive

- Header template part
- `core/group` (main)
  - `core/query-title` (archive title)
  - `core/query-term-description` (term description, if available)
  - `core/query` loop with posts in a grid
- Footer template part

### 3.7 `category.html`, `tag.html`, `author.html`, `date.html`

Structurally identical to `archive.html` — these exist to give the WordPress hierarchy explicit matches and to allow per-archive styling if needed later. They all use the same composition.

### 3.8 `search.html` — Search Results

- Header template part
- `core/group` (main)
  - `core/search` (the search input, default query)
  - `core/paragraph` showing result count and query term
  - `core/query` loop with search results (different query var binding)
- Footer template part

### 3.9 `404.html` — Not Found

- Header template part
- `core/group` (main, vertically centered, generous padding)
  - Large display "404"
  - `core/heading` "Page not found"
  - `core/paragraph` with helpful guidance
  - `core/search` (search input)
  - `core/navigation` (key links)
- Footer template part

---

## 4. Template Parts

Template parts live in `parts/`. Phase 1 ships 6 template parts:

| File | Slug | Purpose |
|---|---|---|
| `header.html` | `header` | Default header — logo + nav + CTA |
| `header-minimal.html` | `header-minimal` | Minimal header — logo + nav only |
| `header-transparent.html` | `header-transparent` | Transparent header — for hero overlay use |
| `footer.html` | `footer` | Default footer — 4-column + copyright |
| `footer-minimal.html` | `footer-minimal` | Minimal footer — logo + copyright |
| `footer-cta.html` | `footer-cta` | Footer with CTA band above the footer content |

### 4.1 Template Part Anatomy

#### Header (default)

```html
<!-- wp:group {"tagName":"header","className":"site-header","layout":{"type":"default"}} -->
<header class="wp-block-group site-header">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:site-logo /-->
        <!-- wp:navigation {"overlayMenu":"mobile"} /-->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a href="/contact" class="wp-block-button__link">Get in touch</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</header>
<!-- /wp:group -->
```

#### Footer (default)

```html
<!-- wp:group {"tagName":"footer","className":"site-footer","layout":{"type":"default"}} -->
<footer class="wp-block-group site-footer">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:site-logo /-->
            <!-- wp:paragraph -->
            <p>Portfolio of a developer & designer.</p>
            <!-- /wp:paragraph -->
            <!-- wp:social-icons -->
            <ul class="wp-block-social-icons">
                <!-- wp:social-link {"url":"https://twitter.com/example","service":"twitter"} /-->
                <!-- wp:social-link {"url":"https://github.com/example","service":"github"} /-->
                <!-- wp:social-link {"url":"https://linkedin.com/in/example","service":"linkedin"} /-->
            </ul>
            <!-- /wp:social-icons -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">Explore</h3>
            <!-- /wp:heading -->
            <!-- wp:navigation {"ref":1} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:separator {"className":"is-style-default"} /-->
    <!-- wp:paragraph {"align":"center","fontSize":"small"} -->
    <p class="has-text-align-center has-small-font-size">© 2024 — All rights reserved.</p>
    <!-- /wp:paragraph -->
</footer>
<!-- /wp:group -->
```

---

## 5. Custom Templates (Page Templates)

Block themes can register **custom page templates** via `theme.json` → `customTemplates`. These appear in the Page Editor's "Template" dropdown.

Phase 1 ships **no custom templates** beyond the core WordPress templates. Custom templates (e.g., "Portfolio Landing", "Case Study Page") are a Phase 2 deliverable.

Planned custom templates for Phase 2:

| Slug | Title | Purpose |
|---|---|---|
| `page-portfolio` | Portfolio Landing | Grid of projects |
| `page-case-study` | Case Study | Long-form case study layout |
| `page-services` | Services Landing | Services overview with CTA |
| `page-about` | About | Long-form about page |

---

## 6. Template ↔ Pattern Relationship

Templates reference template parts via `core/template-part`. Templates do **not** directly reference patterns — patterns are inserted by the user via the Inserter when composing a page.

The exception is `front-page.html` and any custom page templates, which can embed pattern markup directly. In Phase 1, `front-page.html` uses `core/post-content` to render whatever the user composes in the editor.

---

## 7. Width System in Templates

| Element | Width |
|---|---|
| Header / footer | Full width (with `align: wide` inner) |
| Article body | Content (640px) |
| Archive / page title | Content (640px) |
| Query loop grids | Wide (1280px) |
| Hero / cover | Full width |
| Section internal content | Wide (1280px) |

Width is set at the block level via `align` attribute — `"full"`, `"wide"`, or default (content).

---

## 8. Spacing in Templates

Every template's `<main>` element has top/bottom padding:

```json
{
    "style": {
        "spacing": {
            "padding": {
                "top": "var:preset|spacing|70",
                "bottom": "var:preset|spacing|70"
            }
        }
    }
}
```

This ensures content does not collide with the header or footer.

---

## 9. Validation Checklist (Per Template)

Before considering a template complete:

- [ ] Template references `header` and `footer` template parts
- [ ] Content wrapped in `<main>` via `core/group` with `tagName: "main"`
- [ ] All spacing uses spacing presets
- [ ] All colors reference palette presets
- [ ] All font sizes reference font size presets
- [ ] Query loops have a `noResults` block
- [ ] Featured images have explicit aspect ratio
- [ ] Headings follow H1 → H2 → H3 hierarchy
- [ ] Skip link target (the `<main>`) exists
- [ ] Renders correctly with no PHP warnings

---

## 10. Phase 2 Expansion Plans

Phase 2 will introduce:

1. Custom page templates (see Section 5)
2. Per-template style variations (e.g., a "Magazine" variation for `archive.html`)
3. Template-specific block styles (e.g., `single.html` article body styles)
4. Pattern-composed `front-page.html` (replacing the `core/post-content` placeholder)

These are documented here for forward planning. Phase 1 ships the foundation templates only.

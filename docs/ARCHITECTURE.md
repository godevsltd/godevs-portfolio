# GoDevs Portfolio — Architecture

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the architectural principles and file structure of the GoDevs Portfolio block theme. It is the authoritative reference for where new files belong and how they relate to each other.

---

## 1. Architectural Principles

### 1.1 Block Theme First

GoDevs Portfolio is a **block theme**. It uses:

- `theme.json` for design tokens and global styles
- HTML files (containing block markup) for templates and template parts
- PHP only where WordPress requires it (`functions.php`, pattern registration, `style.css` header)

It does **not** use:
- Classic PHP templates (`header.php`, `index.php` for rendering, `sidebar.php`)
- The Customizer for theme configuration
- A theme options panel
- Custom post types or custom taxonomies

### 1.2 theme.json as Single Source of Truth

All design tokens — colors, font families, font sizes, spacing scale, layout widths, border radii, shadows — are defined in `theme.json` and surfaced through WordPress Global Styles APIs.

Hardcoded color values, font sizes, or spacing values in CSS or PHP are forbidden. They are emitted as CSS custom properties by WordPress core and consumed by templates and patterns.

### 1.3 Block-First Composition

Every template, template part, and pattern is composed from WordPress core blocks. The preferred block inventory is:

| Block | Purpose |
|---|---|
| `core/group` | Section wrapper, layout container |
| `core/stack` | Vertical layout |
| `core/row` | Horizontal layout (since WP 6.6) |
| `core/columns` | Multi-column grid |
| `core/cover` | Hero, full-bleed sections |
| `core/image` | Single image |
| `core/gallery` | Multi-image grid |
| `core/media-text` | Image + content split |
| `core/heading` | H1–H6 |
| `core/paragraph` | Body text |
| `core/buttons` + `core/button` | CTA groups |
| `core/quote` | Testimonial / pull-quote |
| `core/list` | Skill list, feature list |
| `core/details` | FAQ, disclosure |
| `core/separator` | Section dividers |
| `core/spacer` | Explicit spacing |
| `core/query` + `core/post-template` | Post lists, portfolio grids |
| `core/post-title`, `core/post-excerpt`, `core/post-featured-image` | Inside query loops |
| `core/navigation` | Menus |
| `core/site-logo`, `core/site-title`, `core/site-tagline` | Branding |
| `core/social-icons` | Social links |
| `core/template-part` | Reference header / footer |

Custom blocks are forbidden in Phase 1. If a future requirement cannot be met by core blocks, the requirement is documented and deferred to a future plugin decision.

### 1.4 Zero Required Plugins

The theme activates and renders a complete experience with no plugins installed. Companion plugins (forms, SEO, portfolio CPT, etc.) may be **recommended** but must not be **required**.

### 1.5 No Build Tooling (Phase 1)

Phase 1 ships raw files: `.html` templates, `.php` for pattern registration, `.css` for theme styles, `.json` for `theme.json` and style variations. No bundler, no transpiler, no PostCSS, no Sass.

If a Phase 6 performance audit justifies minification, build tooling will be introduced in Phase 6 with full documentation in `PERFORMANCE.md`.

---

## 2. File Structure

```
godevs-portfolio/
│
├── assets/
│   ├── css/
│   │   └── theme.css              # Minimal supplementary CSS (block styles, fallbacks)
│   ├── js/
│   │   └── theme.js               # Minimal supplementary JS (progressive enhancement only)
│   ├── fonts/
│   │   └── (empty in Phase 1 — system font stack used)
│   └── images/
│       └── (theme-bundled images, if any)
│
├── docs/
│   ├── PRD.md
│   ├── ARCHITECTURE.md
│   ├── DESIGN-SYSTEM.md
│   ├── PATTERN-SYSTEM.md
│   ├── TEMPLATE-SYSTEM.md
│   ├── STYLE-VARIATIONS.md
│   ├── ACCESSIBILITY.md
│   ├── PERFORMANCE.md
│   ├── SECURITY.md
│   ├── WORDPRESS-STANDARDS.md
│   ├── AI-DEVELOPMENT-GUIDE.md
│   ├── CONTRIBUTING.md
│   ├── QA-CHECKLIST.md
│   ├── RELEASE-ROADMAP.md
│   └── CHANGELOG.md
│
├── inc/
│   ├── block-patterns.php         # Pattern category + pattern registration
│   ├── block-styles.php           # Block style variations (if any)
│   └── theme-setup.php            # Theme supports (already enabled by block theme)
│
├── patterns/
│   ├── hero/
│   │   └── split-profile.php
│   ├── about/
│   │   └── image-and-stats.php
│   ├── services/
│   │   └── feature-cards.php
│   ├── portfolio/
│   │   └── three-column-grid.php
│   ├── skills/
│   │   └── labeled-list.php
│   ├── experience/
│   │   └── timeline.php
│   ├── testimonials/
│   │   └── single-quote.php
│   ├── cta/
│   │   └── split-cta.php
│   ├── contact/
│   │   └── contact-cta.php
│   └── blog/
│       └── featured-posts.php
│
├── parts/
│   ├── header.html
│   ├── header-minimal.html
│   ├── header-transparent.html
│   ├── footer.html
│   ├── footer-minimal.html
│   └── footer-cta.html
│
├── styles/
│   ├── minimal.json
│   ├── dark.json
│   └── editorial.json
│
├── templates/
│   ├── index.html
│   ├── home.html
│   ├── front-page.html
│   ├── page.html
│   ├── single.html
│   ├── archive.html
│   ├── category.html
│   ├── tag.html
│   ├── author.html
│   ├── date.html
│   ├── search.html
│   └── 404.html
│
├── .editorconfig
├── functions.php
├── LICENSE
├── readme.txt
├── screenshot.png                # 1200×900 PNG (placeholder in Phase 1)
├── style.css                     # WordPress theme header + minimal base
├── theme.json                    # Design system source of truth
└── README.md                     # Developer-facing readme
```

### 2.1 Why `patterns/` is flat with subfolders rather than flat-only

WordPress pattern registration supports PHP files anywhere under `patterns/`. Grouping by category subfolder keeps the directory navigable when the count grows past 50. The folder name does **not** need to match the pattern's registered category — that mapping happens in the pattern's `Categories` PHP header.

### 2.2 Why `inc/` exists at all

`functions.php` should stay tiny. Anything more than ~30 lines of PHP belongs in `inc/`. In Phase 1, `inc/block-patterns.php` registers pattern categories; `inc/block-styles.php` registers any custom block styles; `inc/theme-setup.php` holds `add_theme_support()` calls (mostly redundant in a block theme but kept for forward compatibility).

### 2.3 Why `assets/css/` and `assets/js/` exist in Phase 1

Even though the theme is `theme.json`-first, two narrow use-cases remain:
- **CSS:** minor styling for things `theme.json` cannot express (e.g., `:focus-visible` outlines, `prefers-reduced-motion` overrides)
- **JS:** any progressive enhancement that cannot be expressed declaratively (Phase 1 ships none — the file exists for future use)

Files are enqueued via `functions.php` only if they are non-empty.

---

## 3. Data Flow

### 3.1 Template Rendering

```
WordPress routing
      ↓
templates/<route>.html     (e.g., single.html for a single post)
      ↓
Block parser (core)
      ↓
Template parts referenced via core/template-part
      ↓
Blocks render with theme.json-applied styles
      ↓
Final HTML output to browser
```

### 3.2 Pattern Insertion

```
User opens Inserter → Patterns → GoDevs Portfolio category
      ↓
WordPress reads patterns/**/*.php
      ↓
Pattern's PHP file declares metadata (Title, Categories, Slug, Description)
and returns block markup
      ↓
User inserts → blocks become part of the post/page
```

### 3.3 Style Variation Selection

```
User opens Site Editor → Styles → Browse styles
      ↓
WordPress reads styles/*.json
      ↓
Each JSON overrides theme.json's "styles" subtree
      ↓
Selected variation becomes the active global styles
```

---

## 4. File Naming Conventions

| Artifact | Convention | Example |
|---|---|---|
| Template | lowercase, hyphenated, matches WP template name | `front-page.html` |
| Template part | lowercase, hyphenated, descriptive | `header-transparent.html` |
| Pattern | lowercase, hyphenated, descriptive (no numbers) | `split-profile.php` |
| Style variation | lowercase, single word preferred | `editorial.json` |
| CSS / JS | lowercase, hyphenated | `theme.css`, `theme.js` |
| PHP in `inc/` | lowercase, hyphenated | `block-patterns.php` |

Numbers in pattern names (`hero-01`, `hero-02`) are **forbidden** — they imply interchangeable variants rather than intentional designs. See `PATTERN-SYSTEM.md`.

---

## 5. WordPress Version Compatibility

| Feature | Required WP version | Notes |
|---|---|---|
| Block theme | 5.9+ | `theme.json` + HTML templates |
| `theme.json` schema v3 | 6.5+ | Fluid typography by default, `spacingScale` |
| `core/row` block | 6.6+ | Used in headers/footers |
| `aspectRatio` block support | 6.6+ | Used in portfolio grids |
| Style variations | 5.9+ | `styles/*.json` |
| Fluid typography | 6.1+ | Configured in theme.json settings.typography |

**Minimum supported:** WordPress 6.5, PHP 7.4.
**Recommended:** WordPress 6.6+, PHP 8.1+.

The `Requires at least` field in `style.css` and `readme.txt` reflects 6.5.

---

## 6. Separation of Concerns

| Layer | Concern | Lives in |
|---|---|---|
| Design tokens | Colors, type, spacing | `theme.json` + `styles/*.json` |
| Layout | Templates, template parts | `templates/*.html`, `parts/*.html` |
| Reusable compositions | Patterns | `patterns/**/*.php` |
| Theme bootstrap | Enqueues, theme supports, pattern registration | `functions.php` + `inc/*.php` |
| Supplementary styling | CSS for things theme.json cannot express | `assets/css/theme.css` |
| Supplementary behavior | Progressive enhancement | `assets/js/theme.js` |
| Documentation | Project docs | `docs/*.md` |

---

## 7. Theme Activation Contract

When the theme is activated on a fresh WordPress 6.5+ install with no plugins:

1. The homepage (latest posts) renders using `home.html` (or `index.html` if `home.html` is absent)
2. A static front page renders using `front-page.html` (or `page.html`)
3. A single post renders using `single.html`
4. An archive renders using `archive.html` (or its specific variant)
5. A 404 renders using `404.html`
6. Search renders using `search.html`
7. The Site Editor opens with all templates, parts, and patterns visible
8. The Styles browser shows the default style plus all `styles/*.json` variations
9. No PHP warnings or errors are emitted
10. No required plugin notice is shown

This is the Phase 1 acceptance contract.

---

## 8. Anti-Patterns (Forbidden)

| Anti-pattern | Why forbidden |
|---|---|
| Hardcoded colors in CSS / PHP / templates | Breaks style variations; defeats theme.json |
| Custom post types for portfolio/projects | Plugin territory |
| Theme options panel | Replaced by Global Styles |
| jQuery dependency | Performance regression |
| Icon font (FontAwesome, etc.) | Performance + licensing risk |
| External font CDN | Privacy + performance + offline broken |
| PHP-rendered template parts | Use HTML block templates |
| `add_theme_support('post-thumbnails')` etc. | Block themes enable these automatically |
| Custom blocks for layout | Use core blocks |
| Pattern names with numbers | Implies replaceable variants; use descriptive names |

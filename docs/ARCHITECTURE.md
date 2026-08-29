# Architecture — GoDevs Portfolio

This document explains how the GoDevs Portfolio theme is put together. It
is written for developers who want to understand, fork, or extend the
theme without breaking it. Non-developers should start with the README and
come back here when they need the structural picture.

---

## 1. Theme type

GoDevs Portfolio is a **block theme** (also called a "full site editing"
theme). The visual design is configured declaratively in `theme.json`; the
page-level structure lives in block templates inside `templates/`; reusable
sections live in template parts inside `parts/`; and modular sections the
user can drop in from the inserter live in `patterns/`.

There is no Classic PHP templating layer. The theme does not use
`header.php`, `footer.php`, `sidebar.php`, `single.php`, or any of the
classic-template family. PHP is used only for the minimal `functions.php`
hook setup and for pattern headers in `patterns/`.

## 2. Directory structure

```
godevs-portfolio/
├── assets/
│   ├── css/
│   │   ├── editor.css         # editor-only styles (paragraph style previews, etc.)
│   │   └── print.css         # print stylesheet
│   ├── js/
│   │   └── navigation.js     # minimal front-end JS (~1.4 KB)
│   ├── fonts/
│   │   ├── inter-*.woff2      # Inter (body/UI), latin subset
│   │   ├── newsreader-*.woff2 # Newsreader (display), latin subset
│   │   ├── INTER-OFL.txt      # Inter license (SIL OFL 1.1)
│   │   ├── NEWSREADER-OFL.txt # Newsreader license (SIL OFL 1.1)
│   │   └── README.md          # how to refresh the bundled fonts
│   └── images/               # theme-owned images (icons, og-default) — empty in v0.2
├── docs/                     # documentation suite (26 files in v0.2; 24 in v0.1)
├── languages/
│   └── godevs-portfolio.pot  # translation template
├── parts/
│   ├── header.html           # template part (logo + nav + CTA)
│   ├── footer.html           # template part (multi-column footer)
│   └── mobile-menu.html      # template part (alternative mobile menu)
├── patterns/                 # self-registering block patterns (13 in v0.2; 8 in v0.1)
│   ├── hero.php              # v0.1
│   ├── about.php             # v0.1
│   ├── services.php          # v0.1
│   ├── portfolio-grid.php    # v0.1
│   ├── testimonials.php      # v0.1
│   ├── cta.php               # v0.1
│   ├── contact.php            # v0.1
│   ├── footer.php            # v0.1
│   ├── stats.php             # v0.2 — three-column stats row
│   ├── process.php           # v0.2 — four-step vertical process
│   ├── faq.php               # v0.2 — FAQ accordion via core/details
│   ├── team.php              # v0.2 — three-column team grid
│   └── timeline.php          # v0.2 — four-event vertical timeline
├── styles/                   # style variations (6 in v0.2; 2 in v0.1)
│   ├── minimal.json          # v0.1 — sans-serif headings, neutral palette
│   ├── dark.json             # v0.1 — inverted palette
│   ├── creative.json         # v0.2 — warm cream + orange + italic Newsreader + pill buttons
│   ├── corporate.json        # v0.2 — Inter throughout + steel blue + square buttons
│   ├── elegant.json          # v0.2 — cream + brown + gold + serif + square buttons
│   └── editorial.json        # v0.2 — pure B/W + larger Newsreader + square buttons
├── templates/
│   ├── index.html            # fallback for posts/archives
│   ├── home.html             # posts page (Settings → Reading)
│   ├── front-page.html       # static homepage (composes patterns)
│   ├── page.html             # default static page
│   ├── page-no-title.html    # custom template (declared in theme.json)
│   ├── single.html           # single post
│   ├── singular.html         # any single content type fallback
│   ├── archive.html          # category, tag, CPT archives
│   ├── search.html           # search results
│   └── 404.html              # not found
├── tests/                    # QA scaffolding (see docs/TESTING-PLAN.md)
├── theme.json                # design system + block settings
├── style.css                 # WordPress theme header (metadata only)
├── functions.php             # minimal theme setup
├── index.php                 # silence-is-golden fallback
├── readme.txt                # WordPress.org-format readme
├── README.md                 # GitHub-format readme
├── CHANGELOG.md
├── LICENSE                   # GPL-2.0-or-later
└── .gitignore
```

## 3. Template hierarchy

GoDevs Portfolio follows the standard block theme template hierarchy:

| Request | Template used |
|---------|--------------|
| Front page (static) | `templates/front-page.html` |
| Front page (posts) | `templates/home.html` |
| Single post | `templates/single.html` |
| Page | `templates/page.html` |
| Page (no-title custom template) | `templates/page-no-title.html` |
| CPT single | `templates/singular.html` |
| Search | `templates/search.html` |
| Archive | `templates/archive.html` |
| Anything else (posts list) | `templates/index.html` |

Every template above uses the same shape: `header` template part → main
content → `footer` template part. The main content is composed of core
blocks and (in `front-page.html`) of pattern references.

## 4. Pattern architecture

Patterns are the primary reusable unit. Each pattern is a PHP file in
`/patterns/` with a WP-pattern file header (Title, Slug, Categories,
Description, Keywords, Viewport Width). WordPress 6.0+ auto-discovers
these files at theme load and registers them with the slug
`godevs-portfolio/<name>`.

Pattern slugs are namespaced with the theme slug. This avoids collisions
with any other plugin or theme and lets users search "godevs" in the
inserter to find them all.

Categories used by the v0.1 + v0.2 patterns: `featured`, `header`, `about`,
`services`, `portfolio`, `query`, `text`, `call-to-action`, `footer`.
All categories used are either built-in (button, columns, featured,
gallery, header, text, query, posts, footer, call-to-action) or
registered at runtime via `register_block_pattern_category()` (about,
services, portfolio). Pattern files do not register categories
themselves; categories are registered once in `functions.php` if the
theme needs them. (v0.1 + v0.2 use only built-in categories plus the
`about`, `services`, `portfolio` custom categories.)

Patterns are **not** custom blocks. They are core block markup. The
reason: they remain editable in the Site Editor — a user inserting a
pattern gets a copy of the markup they can change in place. A custom
block would lock the markup inside the block's `save` function and
require a re-deploy to change.

Custom blocks are only justified when (a) native blocks cannot
express the layout, (b) the pattern cannot solve it, and (c) dynamic
data is actually required. None of these conditions hold for v0.1 or
v0.2, so the v0.1 + v0.2 library contains zero custom blocks. The FAQ
pattern uses the native `core/details` block (introduced in WordPress
6.3) for accessible, no-JS accordion behaviour.

## 5. theme.json

`theme.json` is the single source of truth for the design system. It
contains:

- `settings.color.palette` — eleven named colours (Primary, Secondary,
  Accent, Background, Surface, Text, Muted, Border, Success, Warning,
  Error).
- `settings.color.gradients` — two restrained gradients (`surface-fade`,
  `accent-fade`).
- `settings.typography.fontFamilies` — three families (Inter body, Inter
  UI implicit via Inter, Newsreader display, mono fallback).
- `settings.typography.fontSizes` — eight fluid font sizes (caption →
  huge) with `fluid` ranges for the larger sizes.
- `settings.spacing.spacingSizes` — eight spacing tokens (0.5× → 6×).
- `settings.layout` — contentSize 768px, wideSize 1280px.
- `settings.custom` — design tokens (`--wp--custom--radius--*`,
  `--wp--custom--shadow--*`, `--wp--custom--transition--*`,
  `--wp--custom--container--*`).
- `styles` — root, elements (link, heading, h1-h6, button, caption),
  and per-block overrides (site-title, site-tagline, navigation,
  post-title, post-excerpt, post-date, quote, pullquote, separator,
  search).
- `customTemplates` — declares `page-no-title`.
- `templateParts` — declares `header`, `footer`, `mobile-menu`.

The CSS variables generated from `theme.json` are the only design
vocabulary the patterns use. Patterns do not introduce arbitrary
hex values or arbitrary spacing. This is what makes the two style
variations work — switching variations re-binds the variables, and
every pattern re-flows without any pattern edits.

## 6. Style variations

Style variations live in `/styles/`. Each variation is a JSON file
with the same schema as `theme.json` but contains only the parts that
differ. WordPress auto-discovers variations and exposes them in the
Site Editor Styles panel under "Browse styles".

v0.2 ships six variations (two from v0.1, four new in v0.2):

### From v0.1
- **Minimal** — sans-serif headings (Inter replaces Newsreader), neutral
  palette (no coral), zero button radius. Useful for editorial
  portfolios where typography should not compete with imagery.
- **Dark** — inverted palette (near-black background, soft slate text),
  coral accent preserved but lightened slightly for contrast. Useful
  for design-forward portfolios and developer sites.

### New in v0.2
- **Creative** — warm cream background (`#FEF9F4`), vibrant orange
  accent (`#F97316`), italic Newsreader for all headings, pill-shaped
  buttons (radius 999px), tighter heading letter-spacing. For designer
  portfolios and creative studios that want to feel made by a person.
- **Corporate** — Inter throughout (sans-serif headings, drop
  Newsreader), steel blue accent (`#2563EB`) in place of coral, square
  buttons (radius 0), always-underlined links, smaller heading sizes,
  tighter spacing. For consultancies, B2B service firms, and
  professional services that need a conservative, trustworthy look.
- **Elegant** — warm cream background (`#FAF7F2`), deep brown text
  (`#2A1F18`), gold accent (`#B8893E`), larger Newsreader display with
  italic h1, generous line-height (1.75), square buttons with subtle
  shadow, italic captions. For sophisticated portfolios and editorial
  brands that want to feel quietly considered.
- **Editorial** — pure black-on-white palette (no accent colour),
  Newsreader for headings and body, oversized display with very tight
  tracking (-0.04em on h1), larger body text (1.125rem), strong
  horizontal rules, square buttons, no shadows. For long-form writers
  and content-first sites where the type is the design.

Each variation is an intentional redesign that changes multiple axes
(palette, typography, component radius, link treatment, spacing,
separator treatment). A palette swap is not accepted as a variation.
This is the model the future starter-site catalogue (Phase 9) will
build on.

## 7. Assets strategy

- **CSS** — `theme.json` produces the bulk of the front-end CSS via
  WordPress's built-in style engine. Two CSS files ship in `assets/css`:
  `editor.css` (editor-only affordances) and `print.css` (print
  styles). There is intentionally no `style.css` body — the WordPress
  theme header at the top of `style.css` is the only content; the
  design system is in `theme.json`.
- **JS** — `assets/js/navigation.js` is the only front-end script. It is
  ~1.4 KB unminified, deferred, and adds two affordances: a sticky
  header scroll shadow and a skip-link focus enhancement. jQuery is not
  used. There is no transpile step.
- **Fonts** — Inter and Newsreader woff2 files (latin subset) live in
  `assets/fonts/`. `theme.json` declares `@font-face` entries pointing
  at these files. `functions.php` preloads three weights for LCP. No
  external font CDN is used.
- **Images** — `assets/images/` is intentionally empty in v0.1. The
  theme does not ship default Open Graph images or favicons; users
  provide their own via the Site Editor and Customizer respectively.

## 8. JavaScript strategy

JavaScript is treated as a tax. Each line of JS is a line that needs to
load, parse, execute, and either improve or fail to improve the user
experience. The v0.1 budget is "as little JS as possible, defer
everything".

The only JS file is `assets/js/navigation.js`. It runs at DOMContentLoaded
inside an IIFE. It does not depend on any library. It does not define
any globals. It does two things:

1. Adds an `is-scrolled` class to `.site-header` when the page scrolls,
   allowing CSS to render a subtle bottom shadow.
2. Enhances the skip link to move focus into `#main` after click,
   because the native skip link moves the *scroll position* but not
   *focus* on some browsers.

Future phases will add at most one or two more scripts (sticky header
enhancement, mobile menu animation) — and only if the equivalent cannot
be done with CSS alone.

## 9. PHP strategy

`functions.php` is intentionally tiny (~150 lines). It defines:

- A `GODEVS_PORTFOLIO_VERSION` constant.
- A `godevs_portfolio_setup()` function hooked to `after_setup_theme`,
  which loads the textdomain and detects the optional GoDevs Core
  plugin (exposing `GODEVS_PORTFOLIO_CORE_ACTIVE`).
- An `enqueue_block_editor_assets` callback that loads `editor.css`.
- A `wp_enqueue_scripts` callback that loads `navigation.js` (deferred)
  and `print.css`.
- A `wp_head` callback that preloads three woff2 files.
- A `body_class` filter that adds `godevs-core-active` or
  `godevs-core-inactive` depending on whether GoDevs Core is present.

There is no custom block registration. There is no `add_theme_support`
for features the theme does not actually use. There is no settings
page. Anything that could be expressed in `theme.json` is expressed in
`theme.json`.

## 10. Theme / plugin boundary

The theme owns presentation. The plugin owns persistent structured
content. The full boundary is documented in
`docs/CORE-PLUGIN-BOUNDARY.md`. The architecture-level summary:

- The theme declares a `godevs_portfolio_core_active` action hook that
  fires once on `after_setup_theme` when GoDevs Core is detected.
- The theme exposes a `GODEVS_PORTFOLIO_CORE_ACTIVE` PHP constant
  (`true` or `false`).
- The theme adds a `godevs-core-active` or `godevs-core-inactive`
  body class.
- Patterns and templates can use the body class to conditionally render
  plugin-backed content via CSS, or use the PHP constant for harder
  conditional logic in template parts.

## 11. Dependency strategy

The theme has zero third-party PHP or JS dependencies. The only
"dependency" is the WordPress core block editor and the bundled fonts.
This is deliberate: any third-party dependency would need to be
reviewed for licensing, security, performance, and long-term
maintenance, and every dependency is a future security advisory waiting
to happen.

Future phases may add tiny, MIT-licensed dependencies for specific
features (e.g. a tiny focus-trap utility for the mobile menu) but only
when the equivalent cannot be done in twenty lines of vanilla JS.

## 12. Future scalability

The architecture is designed to grow without rewrites:

- **More patterns** — adding a pattern is a single PHP file in
  `/patterns/`. No registration code, no theme.json change.
- **More style variations** — adding a variation is a single JSON file
  in `/styles/`. No registration code.
- **More templates** — adding a template is a single HTML file in
  `/templates/`. Custom templates additionally need a
  `customTemplates` entry in `theme.json`.
- **More template parts** — adding a part is a single HTML file in
  `/parts/`. Parts additionally need a `templateParts` entry in
  `theme.json` so they appear in the Site Editor template-parts panel.
- **Starter sites** — a starter site is a style variation plus a curated
  pattern set plus optional starter content. The architecture supports
  the future 100-site catalogue without code changes — adding a starter
  site does not require touching any existing pattern or variation.
  v0.2's six variations and thirteen patterns are the substrate the
  Phase 9 starter-site catalogue will compose from.
- **GoDevs Core** — the plugin hooks into a single theme action
  (`godevs_portfolio_core_active`) and registers its CPTs and blocks.
  The theme's patterns and templates stay valid whether the plugin is
  active or not.

The v0.2.0 architecture is the floor, not the ceiling.

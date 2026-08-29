# AI Development Guide — GoDevs Portfolio

This document is written for any future AI coding agent (or human
contributor) that touches this codebase. Read it *before* opening a file.
Following the rules below keeps the theme coherent as it grows from a
v0.1 foundation into a 100-site starter catalogue. Ignoring them turns
the theme into an incoherent patchwork within a few PRs.

If a rule here conflicts with the user's request, surface the conflict in
the PR description and ask the maintainer to resolve it before merging.
Do not silently override the rule.

### Companion documents (read alongside this guide)

Before implementing anything, also read:

- `docs/FEATURE-REGISTRY.md` — the canonical list of implemented
  features with their IDs, status, files, and dependencies. **Search
  this before adding a feature** to avoid duplicating existing
  functionality. **Update this after implementing a feature** so the
  next contributor can find it.
- `docs/DECISION-LOG.md` — records significant architectural
  decisions made in v0.1 and v0.2 (block-theme-only, no CPTs in theme,
  self-hosted fonts, zero dependencies, theme.json as single source
  of truth, style variations as intentional redesigns, patterns over
  custom blocks, v0.2 scope, FAQ via core/details, additive test
  baseline). If you are about to override one of these decisions,
  add a new entry to the Decision Log first explaining why.
- `docs/ARCHITECTURE.md` — how the theme is put together.
- `docs/DESIGN-SYSTEM.md` — the design vocabulary (palette,
  typography, spacing, components) every pattern and variation uses.
- `docs/CODING-STANDARDS.md` — the PHP / JS / CSS / HTML conventions.

---

## 1. Product goals (re-read every sprint)

Build a serious commercial WordPress block theme — not an AI-generated
theme pack. The theme should feel *designed* by a person, not *generated*
by a model. Quality and simplicity outrank feature count.

The user should not need a page builder. The user should not need a
developer to swap a logo or recolour the site. The user should not need
a plugin to publish a portfolio. The architecture should scale to a
100-site starter catalogue without rewrites.

If a proposed feature would require any of these to become false, it
probably does not belong in the theme.

## 2. Architecture summary

- Block theme. `theme.json` is the design system. Templates are HTML in
  `/templates/`. Template parts in `/parts/`. Patterns in `/patterns/`.
  Style variations in `/styles/`.
- No classic PHP templating. No `header.php` / `footer.php`. PHP only in
  `functions.php` and pattern headers.
- No custom blocks in v0.1 or v0.2. Patterns are core block markup. The
  FAQ pattern uses the native `core/details` block (WP 6.3+) for
  accessible, no-JS accordion behaviour.
- Zero third-party PHP/JS dependencies.
- Self-hosted fonts (Inter + Newsreader). No external CDN.
- Graceful plugin detection via `GODEVS_PORTFOLIO_CORE_ACTIVE` constant.
- v0.2 ships 13 patterns (8 from v0.1 + 5 new) and 6 style variations
  (2 from v0.1 + 4 new). See `docs/FEATURE-REGISTRY.md` for the full
  inventory.

Read `docs/ARCHITECTURE.md` for the full picture.

## 3. Coding standards

WordPress coding standards, enforced:

- PHP: `wordpress` ruleset. Spaces inside parentheses, snake_case for
  functions and variables, PascalCase for class names, no short tags,
  strict comparison operators, full PHP tags (`<?php`).
- JS: `@wordpress/eslint-plugin` config. ES2018+. No jQuery. 2-space
  indent. Single quotes. Trailing commas in multiline arrays/objects.
- CSS: BEM-ish naming for non-block classes (`godevs-hero__eyebrow`),
  kebab-case for utility classes (`is-style-muted`). No ID selectors
  for styling. No `!important` outside `print.css`.
- HTML in templates/parts/patterns: 2-space indent. Block comments on
  their own line. Always close `<!-- wp:block ... /-->` (self-closing)
  or `<!-- wp:block ... -->`...`<!-- /wp:block -->` (paired).

Tools: `phpcs` with `WordPress` standard. Run `composer run lint` if
configured. Run `php -l` on every PHP file before commit at minimum.

## 4. Naming conventions

| Item | Convention | Example |
|------|------------|---------|
| Theme functions | `godevs_portfolio_*` snake_case | `godevs_portfolio_setup()` |
| Theme filters/actions | `godevs_portfolio_*` snake_case | `godevs_portfolio_body_class()` |
| Theme constants | `GODEVS_PORTFOLIO_*` SCREAMING_SNAKE | `GODEVS_PORTFOLIO_VERSION` |
| Theme hooks (action) | `godevs_portfolio_*` snake_case | `godevs_portfolio_core_active` |
| Pattern slugs | `godevs-portfolio/<name>` kebab-case | `godevs-portfolio/hero` |
| Template parts | kebab-case, single word where possible | `header.html`, `mobile-menu.html` |
| Style variations | kebab-case, descriptive | `minimal.json`, `dark.json` |
| CSS classes for theme components | `godevs-<component>` kebab-case | `godevs-hero`, `godevs-cta` |
| CSS classes for pattern variants | `godevs-<component>__<element>` BEM | `godevs-hero__eyebrow` (future use) |
| CSS utility classes | `is-style-<name>` kebab-case | `is-style-muted`, `is-style-lead` |

Do not shorten "godevs" to "gd". Do not invent a different prefix.

## 5. File responsibilities

| Path | Responsibility | What belongs here | What does NOT belong here |
|------|----------------|-------------------|--------------------------|
| `theme.json` | Design system, block settings, element styles, custom templates, template parts | Palette, typography, spacing, layout, element styles, block style overrides | User-specific overrides, demo content, image URLs |
| `style.css` | WordPress theme metadata header | Theme metadata header | Any actual CSS |
| `functions.php` | Minimal hook setup, enqueue, plugin detection, textdomain, font preload | Tiny theme setup, enqueues, plugin-detection constants | CPT registration, custom blocks, settings pages, business logic |
| `index.php` | Silence-is-golden fallback | Empty PHP file with security check | Anything else |
| `templates/*.html` | Page-level composition using template parts and patterns | `<!-- wp:template-part -->` + `<!-- wp:pattern -->` + core blocks | Inline CSS, JS, raw HTML without block comments |
| `parts/*.html` | Reusable template parts (header, footer, mobile menu) | Site chrome that appears on multiple templates | One-off page content |
| `patterns/*.php` | Self-registering block patterns | Pattern header (PHP file doc block) + block markup | PHP logic, dynamic data, plugin-only blocks (without graceful fallback) |
| `styles/*.json` | Style variations | Subset of `theme.json` schema that overrides defaults | New block settings, custom templates, template parts |
| `assets/css/` | Editor-only CSS, print CSS | Editor affordances, print styles | Front-end styling that should live in theme.json |
| `assets/js/` | Front-end JS affordances not expressible in CSS | Navigation enhancement, focus traps | Page-builder JS, animation libraries, anything requiring a runtime |
| `assets/fonts/` | Self-hosted font woff2 files + license + README | Licensed woff2 files only | TTF/OTF (use woff2), variable fonts (static only in v0.1), SVG fonts |
| `assets/images/` | Theme-owned images (icons, og-default) | Original SVG icons, fallback images | Random stock photos, AI-generated images, anything pulled from Google Images |
| `languages/` | Translation files | `.pot` (template), `.po` (source), `.mo` (compiled) | Generated files committed (regenerate from `.pot` only) |
| `tests/` | QA scaffolding | Activation tests, theme.json schema check, pattern smoke tests | Production code, generated reports |
| `docs/` | Documentation suite | Markdown documentation only | Code, templates, anything else |

## 6. Design rules

- Palette tokens only. Patterns must not introduce hex values. If you
  need a colour that does not exist in the palette, ask whether it
  should be added to the palette first.
- Spacing tokens only. Patterns must use `var:preset|spacing|N` or
  `var(--wp--preset--spacing--N)`. Arbitrary `padding: 13px` is not
  allowed.
- Typography fluid by default. Font sizes use `var(--wp--preset--font-size--*)`
  tokens. Display sizes are fluid; captions and small text are not (they
  need to be predictable at small widths).
- One radius vocabulary. Use `var(--wp--custom--radius--sm|md|lg|pill)`.
  Patterns may not introduce `border-radius: 12px` etc.
- One shadow vocabulary. Use `var(--wp--custom--shadow--sm|md|lg)`.
- No gradients in v0.1 except the two shipped in `theme.json`.
  Adding a gradient requires adding it to `theme.json` first.
- No decorative shapes (circles, blobs, 3D objects). No glassmorphism.
  No glow. No neon. No drop shadows on text.
- Borders are 1px, solid, in the `border` palette token. No double
  borders, no dashed borders for decoration.
- Animations are intent-based, short (≤200ms), and respect
  `prefers-reduced-motion`.

## 7. Gutenberg rules

- Use core blocks. Do not invent new blocks unless absolutely required
  (see "Custom block rule" below).
- Block markup uses block comments (`<!-- wp:block ... -->`). Always
  pair opening and closing comments. Self-closing comments end with
  `/-->` (no space before slash, no `/` after).
- Block attributes are JSON inside the comment, on a single line where
  possible.
- Style references use the `var:preset|<type>|<slug>` syntax (e.g.
  `var:preset|color|primary`, `var:preset|spacing|50`) — they generate
  CSS variables rather than hardcoded values.
- Inserter patterns use `viewportWidth` so they render at a sensible
  width in the inserter preview.
- Patterns declare `Categories` matching either built-in categories
  or `godevs-*` custom categories registered in `functions.php`.

## 8. Pattern rules

- A pattern is a single `.php` file in `/patterns/`. The file header
  declares `Title`, `Slug`, `Categories`, `Description`, `Keywords`,
  and `Viewport Width`.
- Pattern slugs are prefixed `godevs-portfolio/`.
- Patterns contain only block markup. No PHP logic beyond the file
  header. Patterns that need dynamic data belong to GoDevs Core, not
  the theme.
- Patterns are editable. A user inserting a pattern gets a copy of the
  markup. Do not assume the pattern stays pristine — it must look
  correct when the user changes any text inside it.
- Pattern copy is in English. User-facing strings inside patterns do
  not need to be wrapped in i18n functions because the strings live
  inside HTML markup, not PHP. (WordPress.org accepts this; pattern
  text is treated as content, not code.)
- Demo content is realistic but not overclaiming. No fake awards.
  No fake revenue. No "5,000+ clients served". Fictional identities
  are fine if clearly sample content.
- Pattern documentation in the doc block is one or two sentences.
  The description shows in the inserter, so it should help a non-
  technical user pick the right pattern.

## 9. Template rules

- Every template starts with `<!-- wp:template-part {"slug":"header"} /-->`
  and ends with `<!-- wp:template-part {"slug":"footer"} /-->` unless
  the template intentionally omits chrome (404 page-no-title, etc.).
- The main content is always wrapped in
  `<!-- wp:group {"tagName":"main","className":"site-main"} -->`.
- Templates use the constrained layout by default. Full-width is the
  exception, used for hero and CTA bands.
- Templates reference patterns via `<!-- wp:pattern {"slug":"godevs-portfolio/<name>"} /-->`.
  Do not duplicate pattern markup inside templates — reference the
  pattern instead.
- Page padding uses the spacing scale. The default vertical padding
  for a template section is `var:preset|spacing|80`.

## 10. Template part rules

- Header, footer, and mobile-menu parts live in `/parts/`.
- Parts are declared in `theme.json` `templateParts` so they appear in
  the Site Editor.
- Parts are area-scoped (`header`, `footer`, `navigation`). The area
  is declared in the `templateParts` entry.
- Header includes the Site Logo, a Navigation block (with
  `overlayMenu:"mobile"`), and a CTA button. It does *not* include a
  hamburger toggle — the Navigation block handles its own overlay.
- Footer is multi-column (logo + tagline | studio nav | work nav |
  contact) with a copyright bar below.

## 11. Style variation rules

- A variation is a JSON file in `/styles/` with the same schema as
  `theme.json`. It contains only the parts that differ.
- Variations are intentional redesigns, not palette swaps. The
  `Minimal` variation changes font family for headings, button radius,
  and link underline behaviour. The `Dark` variation re-tunes every
  palette token for contrast against a dark background.
- Variations must not introduce new block settings or new custom
  templates. Those belong in `theme.json`.
- Variation titles are short and adjective-based (Minimal, Dark,
  Editorial, Corporate). Slugs are kebab-case.
- A new variation should feel different enough from every existing
  variation that a user picking it gets a *different* site, not a
  recoloured copy.

## 12. Plugin boundary rules

- The theme activates and renders without GoDevs Core installed.
- The theme exposes `GODEVS_PORTFOLIO_CORE_ACTIVE` (true|false) and
  the `godevs_portfolio_core_active` action hook.
- Theme patterns and templates must not call plugin functions
  directly. Conditionally-rendered plugin content uses the body class
  (`godevs-core-active` / `godevs-core-inactive`) or the PHP constant.
- Persistent business content (Portfolio, Services, Testimonials,
  Team, Case Studies, Business Profile) belongs in GoDevs Core. The
  theme never registers CPTs.

Full boundary: `docs/CORE-PLUGIN-BOUNDARY.md`.

## 13. Testing requirements

Every PR should not break the v0.1 baseline. The v0.1 baseline is
checked by the scripts in `/tests/`:

- `tests/test-activation.php` — theme activates without PHP errors.
- `tests/test-theme-json-schema.php` — `theme.json` is valid against
  the WP 6.5+ schema.
- `tests/test-pattern-smoke.php` — every pattern in `/patterns/` has
  a valid file header and parses without PHP errors.
- `tests/test-templates-exist.php` — every declared template and
  template part file exists.

Run `php tests/run.php` (or the equivalent `composer run test` if
configured) before commit. See `docs/TESTING-PLAN.md` for the full
plan.

## 14. WordPress.org requirements

The theme is *prepared for* WordPress.org review. Do not claim
approval. Specific requirements:

- Sanitise every output that comes from user-controlled data.
- Escape every output going to the browser (`esc_html`, `esc_attr`,
  `esc_url`, `wp_kses_post`).
- Capability checks on every privileged action.
- Nonces on every form.
- No `eval()`. No obfuscated code. No base64-encoded payloads. No
  hidden tracking. No remote requests without user opt-in.
- No external requests at install time.
- GPL-2.0-or-later compatible code only.
- Translation-ready, RTL-ready, accessibility-ready.

Full compliance scope: `docs/WORDPRESS-ORG-COMPLIANCE.md`.

## 15. AI content restrictions

- Do not generate AI-looking illustrations, icons, portraits, or
  marketing copy as default theme content.
- Do not invent fake business achievements, awards, certifications,
  revenue, or client relationships for demo content. Demo content is
  *fictional but honest* — it does not claim to be real.
- Do not use generic AI marketing language ("unlock your potential",
  "transform your digital vision", "innovative solutions for
  tomorrow"). Write concise, context-specific copy.
- Do not pull images from Google Images. Use licensed placeholders
  (Unsplash, Pexels) or theme-native visual elements (CSS, SVG).
- Do not mix icon libraries. Pick one icon strategy — native WordPress
  dashicons, a single lightweight SVG set, or hand-crafted SVGs —
  and stick to it.

## 16. What you can change without asking

- Fix bugs that cause PHP warnings, notices, or errors.
- Add a new pattern following the rules in §8.
- Add a new style variation following the rules in §11.
- Adjust spacing or typography in `theme.json` if the change keeps
  the system consistent (e.g. tuning a fluid font size range is fine;
  inventing a new spacing token without adding it to the spacing
  scale is not).
- Refactor `functions.php` for readability without changing behaviour.
- Update demo copy in patterns to be more specific or realistic.
- Add documentation in `/docs/` for features that lack it.

## 17. What you must not change without maintainer sign-off

- The block-theme architecture (do not add a classic-PHP templating
  layer).
- The `theme.json` schema version (do not downgrade).
- The plugin-boundary contract (do not register CPTs in the theme).
- The font families shipped (do not add a third family without
  licensing review).
- The pattern slug prefix (`godevs-portfolio/`).
- The text domain (`godevs-portfolio`).
- The minimum WordPress version (`6.5`).
- The license (GPL-2.0-or-later).
- The product name (`GoDevs Portfolio`) and slug (`godevs-portfolio`).

## 18. Commit message convention

We use Conventional Commits, scoped to the affected area:

```
feat(patterns): add team grid pattern
fix(header): correct mobile menu focus trap
docs(prd): clarify non-goals around WooCommerce
test(patterns): add pattern file header lint
```

Scopes: `theme`, `theme-json`, `templates`, `parts`, `patterns`,
`styles`, `assets`, `docs`, `tests`, `meta` (README, CHANGELOG,
LICENSE, .gitignore).

## 19. PR description template

```
## What
One paragraph describing the change.

## Why
One paragraph explaining why this change belongs in the theme and not
in a plugin, a future version, or not at all.

## How
Bullet list of the files changed and why.

## Tests
Which `tests/` scripts were run. Which manual checks were performed.

## Risks
Any rules in docs/AI-DEVELOPMENT-GUIDE.md this change touches. Any
backward-compatibility considerations.

## WordPress.org
Any compliance surface this change touches (escaping, sanitisation,
external requests, licensing).
```

## 20. Final rule

When in doubt, prefer the WordPress-native solution. If `theme.json`
can express it, use `theme.json`. If a core block can render it, use a
core block. If a pattern can deliver it, use a pattern. If none of
those work, *then* consider PHP, JS, or a custom block — in that
order.

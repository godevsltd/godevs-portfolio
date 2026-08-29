# Core Plugin Boundary — GoDevs Portfolio

This document defines the contract between the GoDevs Portfolio theme
and the optional GoDevs Core plugin. The boundary exists so business
content stays portable: a user who installs GoDevs Core, populates a
Portfolio, then later switches to a different theme keeps their
Portfolio posts. If the same content lived inside the theme, switching
themes would lose it.

The boundary is the load-bearing wall of the architecture. Treat it
seriously.

---

## 1. Why this boundary matters

WordPress.org theme review guidelines require that *persistent content*
not be owned by the theme. A theme is a presentation layer; a plugin is
a functionality layer. When a theme registers CPTs, two bad things
happen:

1. When the user switches themes, the CPT data stays in the database
   but is no longer administered, no longer has admin menus, no longer
   renders. The user has effectively lost their content.
2. When a user installs a plugin that registers the same CPT slug
   differently, the two registrations conflict and the site breaks.

GoDevs Portfolio solves this by keeping presentation in the theme and
structured business content in a companion plugin. The theme renders
content; the plugin owns it.

## 2. What the theme owns

The theme owns presentation, layout, and reusable visual components.

| Theme owns | Notes |
|------------|-------|
| Design system | `theme.json` — palette, typography, spacing, layout |
| Templates | `/templates/*.html` |
| Template parts | `/parts/*.html` (header, footer, mobile-menu) |
| Patterns | `/patterns/*.php` (hero, about, services, portfolio, etc.) |
| Style variations | `/styles/*.json` |
| Front-end assets | `assets/css/editor.css`, `assets/css/print.css`, `assets/js/navigation.js` |
| Fonts | `assets/fonts/*.woff2` (Inter, Newsreader) |
| Editor affordances | Block style variations, paragraph styles, pattern previews |

**The theme does not register CPTs.** The theme does not register
shortcodes. The theme does not register settings pages. The theme
does not register REST routes. The theme does not write to the
database.

## 3. What the plugin owns

The plugin owns persistent business content and the dynamic data the
theme needs to render it.

| Plugin owns | Notes |
|-------------|-------|
| Portfolio CPT | Projects with featured image, gallery, client, industry, URL, date, technology, challenge, solution, result, video |
| Services CPT | Services with name, description, features, icon, image, CTA, optional pricing |
| Testimonials CPT | Testimonials with name, company, position, photo, review |
| Team CPT | Team members with name, position, photo, bio, social links |
| Case Studies CPT | Case studies with overview, challenge, strategy, solution, technology, results, client feedback |
| Business Profile | Business name, tagline, logo, description, email, phone, address, hours, website, social links, CTA |
| Query Loop variations | Block variations for each CPT that drop into the editor with the right query and template preset |
| Plugin-specific blocks | Custom blocks only where native blocks cannot render the dynamic data |

**The plugin does not own visual styling.** The plugin does not
introduce its own palette, typography, or spacing tokens. The plugin
uses the theme's design system. If the plugin needs a new visual token
the theme does not expose, the plugin asks the theme to add it.

## 4. The boundary contract

The contract is the surface area both sides agree on. Both sides
treat this contract as stable across v0.x.

### 4.1 PHP constants

The theme exposes:

- `GODEVS_PORTFOLIO_CORE_ACTIVE` — boolean, true when GoDevs Core is
  loaded, false otherwise. Defined on `after_setup_theme` by
  `godevs_portfolio_setup()` in `functions.php`.

The plugin exposes:

- `GODEVS_CORE_VERSION` — string, the plugin version. Defined on the
  plugin's bootstrap. The theme checks for this constant to detect
  the plugin's presence.

### 4.2 Action hooks

The theme fires:

- `godevs_portfolio_core_active` — fires once on `after_setup_theme`
  if GoDevs Core is detected. The plugin hooks into this action to
  register its CPTs, blocks, and Query Loop variations.

The plugin fires:

- `godevs_core_post_types_registered` — fires after the plugin's CPTs
  are registered. The theme uses this to register Query Loop block
  variations for those CPTs in patterns (Phase 8+).

### 4.3 Body classes

The theme adds:

- `godevs-core-active` — added when GoDevs Core is active.
- `godevs-core-inactive` — added when GoDevs Core is not active.

These classes let patterns and templates conditionally render CSS or
visual elements based on plugin presence without checking PHP at
runtime inside markup.

### 4.4 Pattern conventions

Theme patterns that *can* render with or without the plugin use a
single source of markup. When the plugin is active, the same pattern
markup references a Query Loop block variation registered by the
plugin; when the plugin is inactive, the same pattern renders
static content the user edits in place.

In v0.1 (no plugin yet), all eight patterns are static. Phase 8 will
convert `portfolio-grid`, `testimonials`, and `services` to the
dual-render pattern above.

### 4.5 No theme-to-plugin function calls

The theme does not call any GoDevs Core function directly. The
plugin's PHP API is the plugin's own business; the theme interacts
with the plugin only through:

1. The `GODEVS_CORE_VERSION` constant (presence detection).
2. The `godevs_portfolio_core_active` action hook.
3. The `godevs-core-active` / `godevs-core-inactive` body classes.
4. The Query Loop block variations the plugin registers.

This means the theme can be activated without the plugin and will
never throw a `Call to undefined function` fatal.

## 5. Graceful degradation requirements

The theme must continue to render correctly when the plugin is
deactivated mid-session (e.g. the user disables GoDevs Core to test
something). Specifically:

1. **No fatal errors.** Every page on the site must render without
   throwing a PHP fatal. This means the theme's templates and patterns
   must not call plugin functions at render time without first
   checking `GODEVS_PORTFOLIO_CORE_ACTIVE`.

2. **No broken queries.** If a pattern uses a Query Loop block
   variation registered by the plugin, and the plugin is deactivated,
   the Query Loop block falls back to the default `post` post type
   and renders posts. This is acceptable graceful degradation —
   the page still renders content, even if it is not the content
   the user expected.

3. **No orphan admin UI.** If the plugin registered admin menus for
   Portfolio / Services / Testimonials / Team / Case Studies, those
   menus disappear with the plugin. The theme does not reference
   them.

4. **No data loss.** Plugin-owned CPT posts stay in the database.
   Reactivating the plugin restores admin UI and rendering. The
   theme does not delete or hide plugin-owned content during
   deactivation.

## 6. Theme activation order

When the theme is activated (or the site loads with the theme active
for the first time after the plugin is activated), the following
sequence happens:

1. WordPress loads `functions.php`.
2. `after_setup_theme` fires.
3. `godevs_portfolio_setup()` runs. It defines
   `GODEVS_PORTFOLIO_CORE_ACTIVE` based on `defined('GODEVS_CORE_VERSION')`.
4. If the plugin is active, the theme fires
   `godevs_portfolio_core_active` (and the plugin's hooks run, in
   priority order).
5. The theme's enqueue hooks fire.
6. The theme's body-class filter adds `godevs-core-active` or
   `godevs-core-inactive`.
7. The page renders with the appropriate template, template parts,
   and patterns.

When the plugin is *activated* while the theme is already active,
the same sequence runs on the next page load because
`after_setup_theme` fires on every load.

## 7. Testing the boundary

The boundary contract is tested by:

- `tests/test-activation.php` — activates the theme without the plugin.
  Expects no PHP errors. Expects `GODEVS_PORTFOLIO_CORE_ACTIVE` to
  be false. Expects the `godevs-core-inactive` body class to be
  added.
- `tests/test-plugin-detection.php` (planned, Phase 8) — mocks the
  plugin being active. Expects `GODEVS_PORTFOLIO_CORE_ACTIVE` to be
  true. Expects `godevs-core-active` body class. Expects
  `godevs_portfolio_core_active` action to fire.

## 8. Migration: when content moves from theme to plugin

A user might have authored Portfolio content as ordinary pages and
posts in v0.1 (since the theme is plugin-free), and want to migrate
that content to Portfolio CPTs when GoDevs Core ships in v0.3. The
migration plan:

1. GoDevs Core ships a one-time migration tool that lists pages
   tagged "Portfolio" and offers to convert them to Portfolio CPT
   posts.
2. The migration tool asks for confirmation, then changes each
   page's `post_type` from `page` to `godevs_portfolio` (the CPT
   slug the plugin registers).
3. The theme's Portfolio Grid pattern in v0.3 (which references a
   Query Loop block variation for the new CPT) renders those posts
   automatically.
4. The user's previous static pattern content can be deleted once
   the migration is confirmed.

This is a Phase 8 deliverable. The v0.1 theme does not implement it.

## 9. Naming: theme vs. plugin

Theme slug: `godevs-portfolio`. Text domain: `godevs-portfolio`. PHP
prefix: `godevs_portfolio_`. Constant prefix: `GODEVS_PORTFOLIO_`.

Plugin slug: `godevs-core`. Text domain: `godevs-core`. PHP prefix:
`godevs_core_`. Constant prefix: `GODEVS_CORE_`.

CPT slugs registered by the plugin:
- `godevs_portfolio` (Portfolio)
- `godevs_service` (Services)
- `godevs_testimonial` (Testimonials)
- `godevs_team` (Team)
- `godevs_case_study` (Case Studies)

The `godevs_portfolio` CPT slug is *almost* the same as the theme
slug. This is intentional: the CPT owns portfolio content; the theme
owns portfolio presentation. The `godevs-` prefix keeps them
distinct (`godevs-portfolio` for the theme, `godevs_portfolio` for
the CPT).

## 10. Boundary enforcement checklist

Before merging a change that touches the theme/plugin boundary, the
contributor confirms:

- [ ] No new CPT registered in the theme.
- [ ] No new shortcode registered in the theme.
- [ ] No new settings page registered in the theme.
- [ ] No new REST route registered in the theme.
- [ ] No new database writes from the theme.
- [ ] No direct call from theme to any `godevs_core_*` function
      without checking `GODEVS_PORTFOLIO_CORE_ACTIVE` first.
- [ ] Every new theme pattern either works plugin-free or has a
      documented static fallback when the plugin is absent.
- [ ] The change does not introduce a new constant or hook without
      documenting it in this file.

If a PR fails any of these checks, it should not be merged without a
discussion about the boundary.

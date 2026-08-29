# PRD — GoDevs Portfolio

| Field | Value |
|-------|-------|
| Product | GoDevs Portfolio |
| Theme slug | `godevs-portfolio` |
| Text domain | `godevs-portfolio` |
| Owner | GoDevs |
| Current version | 0.1.0 (foundation) |
| Document status | Living document. Updated with every released version. |

This PRD defines the product for v0.1.0 — the foundation release — and
projects where the product is going. Where the two diverge (e.g. the future
100-site demo catalogue), the document says so explicitly.

---

## 1. Problem

Professionals and small businesses who build a portfolio or services site on
WordPress today face a fork in the road. They can pick a classic theme and
customise it with a third-party page builder, ending up with a site locked
inside that builder's UX; or they can pick a block theme and discover that
most existing block themes still ship as thinly-reskinned copies of the same
template, with the same generic AI-looking iconography, the same gradient
hero, and the same arbitrary visual noise.

Both paths leave the user with a site they cannot fully maintain without
going back to a developer. The first path locks content inside the builder.
The second path locks the user into visual choices they did not make and
cannot sensibly edit.

There is no widely available block theme that pairs a strong editorial design
system with a clean pattern library and a clearly documented plugin
boundary — and a path to a 100-site starter catalogue that does not start
life as a low-quality copy-paste exercise.

## 2. Product vision

Build GoDevs Portfolio as a serious commercial WordPress theme that feels
designed — not generated. A foundation theme that a freelancer can install
and edit on a Saturday afternoon without calling a developer; that an agency
can re-skin into a hundred vertical starter sites without rewriting the
core; and that a developer can audit, fork, and extend using native
WordPress conventions rather than fighting a bespoke framework.

The product follows a single principle throughout: *give users enough
control to create a unique website without making the interface
complicated.* Every feature, every pattern, every setting asks the same
question — could this be solved by the native Site Editor instead?

## 3. Target users

### Primary: professionals

- Developers and WordPress developers
- UI/UX and graphic designers
- Freelancers and consultants
- Photographers and videographers
- Architects and digital marketers
- Personal brands and content creators

### Secondary: businesses

- Web development and software companies
- IT and digital agencies
- Creative and marketing agencies
- Consulting businesses
- Startups and small businesses

### Persona sketches

**Maya** — freelance UI designer, ~5 yrs experience. Has shipped a few
client sites on WordPress but is uncomfortable maintaining them. Wants a
portfolio site she can edit herself, with no page builder dependency. Will
install the theme, pick a style variation, drag in a hero and portfolio-grid
pattern, change the palette in the Styles panel, and ship in a weekend.

**Tomás** — co-founder of a five-person agency. Has shipped dozens of
WordPress sites over the years, mostly with a third-party builder. Wants
to migrate the agency's next batch of sites to a block theme he can re-skin
per vertical without maintaining a fork per project. Will read the
architecture docs and fork the design system.

**Priya** — solo developer who occasionally takes on WordPress work. Wants
a foundation theme she can extend with a small custom plugin for a specific
client (Portfolio CPT, Services CPT) without the theme falling over when
the plugin is not installed. Will read CORE-PLUGIN-BOUNDARY.md.

## 4. User goals

- Replace logo, colours, typography without code.
- Build a homepage by inserting patterns.
- Present a portfolio without a plugin dependency.
- Get a clean reading experience on a phone.
- Get a fast site out of the box — no external font CDN, no jQuery
  dependency, no render-blocking scripts.
- Extend with a custom plugin without losing content when the theme is
  switched later.

## 5. User journeys

### Journey A — first install (Maya)

1. Installs the theme .zip and activates it.
2. Opens Appearance → Editor.
3. Selects the Minimal style variation in the Styles panel.
4. Opens the front-page template, removes the Services pattern she does
   not need, and changes the hero headline.
5. Replaces the site logo and tagline in the Site Editor.
6. Creates a Portfolio page and inserts the Portfolio Grid pattern.
7. Saves and views the site.

The journey above should not require reading documentation. The labels in
the Site Editor, the pattern names, and the style variation names should
carry the meaning.

### Journey B — starter-site fork (Tomás)

1. Clones the repo and reads `docs/ARCHITECTURE.md`.
2. Creates a new style variation JSON in `/styles/`.
3. Selects which patterns to ship in a starter site, hides the rest via
   the pattern's `Inserter` flag.
4. Bundles the theme with a small starter content XML file.
5. Ships a vertical starter site.

### Journey C — plugin extend (Priya)

1. Reads `docs/CORE-PLUGIN-BOUNDARY.md` to learn what belongs to the theme
   and what belongs to the plugin.
2. Writes a small plugin that registers a Portfolio CPT and a Portfolio
   Query Loop block variation.
3. Verifies that with the plugin deactivated the theme still activates
   and the front-end still renders without fatal errors.
4. Ships the plugin to the client.

## 6. Core features (v0.1.0 foundation)

This section lists what *actually ships* in 0.1.0. Everything else lives in
the Future roadmap section.

- Block theme architecture: `theme.json` (schema version 2), nine block
  templates (index, home, front-page, page, single, archive, search, 404,
  singular), plus a `page-no-title` custom template.
- Three template parts: `header`, `footer`, `mobile-menu`.
- Eight block patterns: hero, about, services, portfolio-grid,
  testimonials, cta, contact, footer.
- Two style variations: Minimal, Dark. Wired into the Site Editor Styles
  panel. Each variation is an intentional redesign, not a palette swap.
- Self-hosted Inter (UI/body) and Newsreader (display) fonts in
  `assets/fonts/`. No external font requests.
- Translation-ready: `godevs-portfolio` text domain, `.pot` file scaffolded
  in `/languages/`, RTL CSS generated from the same source.
- Accessibility foundation: skip link, focus-visible outlines, semantic
  landmarks, keyboard-navigable navigation, reduced-motion support.
- Performance foundation: minimal PHP, ~2 KB JS, no jQuery, no external
  requests, font preloading, deferred JS.
- WordPress.org compliance foundation: GPL-2.0-or-later, sanitisation and
  escaping on every output, no remote requests, no tracking.

## 7. Non-goals

- WooCommerce support. This is a portfolio/business theme, not a
  storefront. WooCommerce templates and blocks are out of scope.
- Page-builder support. Elementor, Divi, WPBakery, Bricks, Beaver Builder
  and Oxygen are not first-class citizens. The theme works without them
  and we do not ship specific compatibility for them.
- AI-generated demo assets. We do not ship AI illustrations, AI portraits,
  fake team photos, or AI marketing copy as default content. Demo content
  uses real licensed placeholders or theme-native visual elements.
- 100 starter sites in v0.1. The architecture supports the eventual
  100-site catalogue, but v0.1 only ships the foundation and the pattern
  library that future starter sites will build on.
- Replacing SEO plugins. We ship semantic HTML and clean markup. We do not
  ship meta tags, OpenGraph tags, or sitemap generation. RankMath, Yoast
  and The SEO Framework are supported as companions.

## 8. Theme / plugin boundary

GoDevs Portfolio ships as a standalone theme. An optional companion plugin,
GoDevs Core, will eventually own structured business content types
(Portfolio, Services, Testimonials, Team, Case Studies, Business Profile).

The theme works on its own. With GoDevs Core installed, the theme exposes
structured CPTs and the patterns become data-driven; without it, the same
patterns display static content the user edits in the Site Editor.

Full rules are in `docs/CORE-PLUGIN-BOUNDARY.md`. The short version: the
theme owns presentation, the plugin owns persistent structured content,
and the boundary between them is the `godevs_portfolio_core_active` PHP
constant.

## 9. UX requirements

- Site Editor labels use plain English. We avoid "block", "container",
  "wrapper", "scoped" and other developer-facing terms in user-facing
  pattern names.
- Pattern names read as outcomes ("Hero", "About", "Services", "Portfolio
  Grid", "Testimonial", "Call to Action", "Contact", "Minimal Footer")
  rather than implementation details.
- Style variations are intentionally different — palette, typography, and
  component radius change between them. A variation is a redesign, not a
  recolour.
- The default front-page template composes a working homepage out of the
  box: hero → about → services → portfolio → cta → testimonials → contact.
  The user deletes what they do not need; they do not build from scratch.

## 10. Design requirements

- Strong typographic hierarchy with Newsreader for display and Inter for
  body and UI.
- Generous whitespace. The spacing scale (0.5rem → 6rem) is the primary
  design tool.
- Thin 1px borders. Borders are used to separate, not to decorate.
- No gradients except the two theme.json gradients shipped in v0.1
  (`surface-fade`, `accent-fade`). No glassmorphism. No neon. No glow
  effects. No decorative circles. No 3D objects.
- Controlled shadows. Three shadow tokens (`--wp--custom--shadow--sm`,
  `--md`, `--lg`) with very low opacity. Shadows are an accessibility cue
  for cards, not a visual flourish.
- Reduced motion is respected throughout. Patterns animate only on intent.

## 11. Accessibility requirements

- WCAG 2.1 AA is the floor for v0.1. AAA is a stretch goal tracked in
  `docs/ACCESSIBILITY.md`.
- Keyboard navigation works for every interactive element on every
  template.
- Visible focus indicators (`:focus-visible`) on every focusable element.
- Skip link to `#main` is present on every template that uses the header
  template part.
- Semantic landmarks: `header`, `main`, `footer`, `nav`.
- Sufficient colour contrast. Palette tokens are checked at design time.
  See `docs/ACCESSIBILITY.md` for the contrast table.
- Reduced motion: every CSS transition is wrapped in a
  `@media (prefers-reduced-motion: no-preference)` guard.

## 12. Performance requirements

- No external requests on a fresh install. No Google Fonts CDN. No
  third-party analytics. No CDN-hosted libraries.
- Total blocking time below 200 ms on a fast 3G profile, measured against
  the v0.1 default front-page with one hero image and no plugin.
- LCP below 2.5 s on a fast 3G profile with the same setup.
- Cumulative layout shift below 0.1 on the same profile.
- JavaScript footprint: under 2 KB compressed on the front-end. The
  v0.1 baseline is `navigation.js` at ~1.4 KB.

## 13. WordPress.org requirements

The theme is *prepared for* WordPress.org review. We do not claim approval
until reviewed and approved. The preparation scope includes:

- Theme requirements per the Theme Review guidelines.
- Licensing (GPL-2.0-or-later for code; SIL OFL 1.1 for fonts).
- Sanitisation, escaping, validation throughout.
- Accessibility-ready checklist.
- Internationalisation, RTL, localisation.
- External resources policy (no external requests at install time).
- Privacy (no remote requests, no tracking).
- Content portability (CPTs live in the plugin, not the theme).

Full scope is in `docs/WORDPRESS-ORG-COMPLIANCE.md`.

## 14. Success criteria

v0.1.0 is successful when:

- The theme activates on a clean WordPress 6.5+ install with no PHP
  warnings or notices.
- The default front-page renders correctly with no plugins installed.
- All eight patterns are available from the Site Editor inserter and insert
  without errors.
- Both style variations are selectable from the Styles panel and produce
  visually distinct results.
- The theme passes the WordPress.org theme review checklist at the time
  of submission, with the explicit exception of demo starter content
  (which is a Phase 9 deliverable).
- A non-technical user can complete User Journey A above in under sixty
  minutes without external documentation.

## 15. Future roadmap

The product roadmap is documented phase-by-phase in
`docs/DEVELOPMENT-ROADMAP.md`. v0.1 ships Phases 0–5. Phases 6–17 (style
variations beyond Minimal/Dark, GoDevs Core plugin, 100+ starter sites,
advanced portfolio layouts, advanced CTA patterns, performance audit,
accessibility audit, security audit, QA pass, final documentation,
WordPress.org preparation, release candidate) are downstream of v0.1 and
are tracked there.

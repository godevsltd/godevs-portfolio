# GoDevs Portfolio — Product Requirements Document

**Document version:** 0.1.0
**Phase:** 1 — Foundation
**Last updated:** Phase 1 kickoff

---

## 1. Product Vision

GoDevs Portfolio is a **premium, Gutenberg-first, Full Site Editing (FSE) WordPress block theme** purpose-built for individuals and small teams who need a refined, modern, editorial-grade portfolio presence on the web.

The product is positioned not as "another portfolio theme" but as a **scalable Gutenberg design system** whose long-term output is hundreds of composition-ready demos assembled from a shared library of patterns, style variations, and design tokens. Each demo must feel distinct and intentional — never a color swap of another demo.

The intended audiences are:

- **Developers and engineers** showcasing projects, talks, and writing
- **Designers and art directors** presenting case studies and visual work
- **Freelancers and consultants** marketing their services
- **Agencies and small studios** presenting their portfolio and team
- **Photographers and visual creators** presenting galleries and series
- **Coaches, authors, and personal brands** establishing authority
- **Architects, interior designers, and studios** presenting project work
- **Startups and small product teams** presenting a product story

---

## 2. Core Goals

| Goal | Description |
|---|---|
| Gutenberg-first | Every layout is composed from core blocks. No custom block dependencies. |
| Full Site Editing | All templates, template parts, and global styles are user-editable in the Site Editor. |
| No required plugin | The theme activates and renders a complete experience with zero plugins installed. |
| Lightweight | Minimal CSS, minimal JS, no jQuery, no icon font, no external font CDN required. |
| Modern | Editorial typography, strong whitespace, modern card systems, current visual language. |
| Accessible | WCAG 2.1 AA target — keyboard, focus, contrast, reduced motion, semantic HTML. |
| Responsive | Fluid typography, fluid spacing, mobile-first layouts, no device-specific templates. |
| Translation-ready | All user-facing strings use the `godevs-portfolio` text domain. |
| WordPress.org compatible | Targets WordPress.org Theme Review Team requirements. |
| Reusable patterns | A documented pattern system designed to scale to 500+ compositions. |
| Consistent design system | A single source of truth for color, typography, spacing, layout, motion. |

---

## 3. Long-Term Targets (Not Implemented in Phase 1)

These targets describe the long-term product strategy. They are **explicitly out of scope for Phase 1**, which only builds the foundation capable of supporting them.

### 3.1 Demo Library — Target: 100+ demos

A demo is a **composition** of reusable theme resources — not a forked copy of theme files. Each demo is produced by:

```
Design Tokens (theme.json)
      ↓
Style Variation (styles/*.json)
      ↓
Reusable Patterns (patterns/*)
      ↓
Templates (templates/*.html)
      ↓
Demo Composition (a saved site export / pattern collection)
```

A demo must not duplicate theme source files. It must be expressible as a combination of:
- A chosen style variation
- A set of patterns arranged into templates
- Demo-specific content (posts, media, menus)

### 3.2 Pattern Library — Target: 500+ patterns

Patterns are organized into the 18 documented categories. See `PATTERN-SYSTEM.md` for the full category taxonomy, naming conventions, and growth strategy.

### 3.3 Template Compositions — Target: 100+ page/template compositions

Beyond core WordPress templates (index, single, archive, etc.), compositions will include purpose-built page templates such as "Portfolio Case Study", "Service Landing", "About Long-form", "Pricing Comparison", etc.

### 3.4 Style Variations — Target: 15+ style variations

Each variation must meaningfully change the visual language — typography pairings, color systems, density, motion behavior — not just a single color swap. See `STYLE-VARIATIONS.md`.

### 3.5 Niche Coverage

Planned niches include developer portfolios, designer portfolios, photographer portfolios, agency sites, consultancy sites, coach sites, author sites, product landing, SaaS marketing, startup landing, architecture studio, design studio, restaurant, podcast, magazine, education, and more.

---

## 4. Non-Goals (Phase 1 and Beyond)

The theme will **not** ship with:

- A custom post type UI for portfolio items, projects, or testimonials — these are plugin territory
- A form builder or form storage backend — use core blocks + companion plugin
- An SEO system — core blocks + companion plugin
- A performance dashboard or analytics platform
- A page builder integration (Elementor, Beaver, Divi, etc.)
- A bundled icon library (Font Awesome, Material Icons, etc.)
- A bundled font CDN dependency — fonts must be self-hosted or system fonts
- A bundled jQuery dependency
- A bundled CSS framework (Bootstrap, Tailwind, etc.)
- An options framework or theme admin panel — Global Styles is the configuration surface

The theme is responsible for **presentation only**. All data-management and plugin-like functionality belongs in companion plugins.

---

## 5. Target Users

### Primary User — Site Builder

A developer, designer, freelancer, or small agency building a portfolio site for themselves or a client. Comfortable with WordPress and the Site Editor. Wants to compose rather than code. Will judge the theme on visual quality, editability, and pattern variety.

### Secondary User — End Visitor

The reader of the portfolio site. The theme must serve this user through performance, accessibility, readability, and graceful degradation on low-end devices.

### Tertiary User — WordPress.org Reviewer

The Theme Review Team member evaluating the theme for inclusion in the directory. The theme must satisfy all Theme Review requirements (escaping, sanitization, licensing, no plugin territory, etc.). See `WORDPRESS-STANDARDS.md` and `QA-CHECKLIST.md`.

---

## 6. Functional Requirements (Phase 1)

### 6.1 Must Have

- A valid `theme.json` defining the design system (color, typography, spacing, layout, borders, radii, shadows)
- All 12 core WordPress templates render with no errors
- A working header template part and footer template part
- A minimum set of representative patterns demonstrating the design system
- At least one style variation beyond the default
- A working `style.css` with the correct WordPress theme header
- A working `functions.php` (minimal — the theme is `theme.json`-first)
- A `readme.txt` compliant with WordPress.org requirements
- Translation readiness with the `godevs-portfolio` text domain
- Accessibility baseline — keyboard nav, focus states, skip link, semantic headings
- Performance baseline — minimal CSS, no render-blocking JS, no external font CDN

### 6.2 Should Have

- 3-4 initial style variations that meaningfully differ
- 8-12 initial patterns covering the major categories
- Multiple header variants (default, minimal, transparent)
- Multiple footer variants (default, minimal, CTA)

### 6.3 Nice to Have (Phase 2+)

- Pattern translations
- Per-pattern preview images
- RTL testing
- Custom block styles for specific patterns

---

## 7. Non-Functional Requirements

| Category | Requirement |
|---|---|
| Performance | Lighthouse Performance ≥ 90 on a default homepage with no plugins. No render-blocking JS. Critical CSS handled by WordPress core. |
| Accessibility | WCAG 2.1 AA. Keyboard navigable. Visible focus. Reduced motion respected. |
| Browser support | Latest Chrome, Firefox, Safari, Edge. iOS Safari latest. Android Chrome latest. |
| WordPress | 6.5+. PHP 7.4+. Recommended PHP 8.1+. |
| Code quality | WordPress Coding Standards. Escape at output. Sanitize at input. |
| File size | `style.css` < 50KB uncompressed. No JS file > 5KB. Total theme size < 2MB excluding screenshot. |
| License | GPL v2 or later. All bundled assets GPL-compatible. |

---

## 8. Success Metrics (Phase 1)

Phase 1 is **internal success only** — there are no public-facing metrics yet. Phase 1 success is defined by:

- All Phase 1 deliverables produced and committed
- All validation checks pass (JSON lint, PHP lint, structure audit)
- The theme activates cleanly on a fresh WordPress 6.5+ install with no errors
- All 12 templates render with default content
- The design system is internally consistent — colors, typography, spacing used uniformly across all initial patterns
- Documentation is complete and project-specific (no placeholder text)

---

## 9. Out of Scope (Phase 1)

The following are **explicitly excluded** from Phase 1:

- 100+ demos
- 500+ patterns
- 100+ page compositions
- 15+ style variations
- Demo content (sample posts, sample media)
- Pattern preview image generation pipeline
- Build tooling (no bundler, no PostCSS, no Sass — Phase 1 ships raw HTML/CSS/PHP/JSON)
- E2E browser testing
- WordPress.org submission package
- Companion plugin scaffolding

These belong to later phases — see `RELEASE-ROADMAP.md`.

---

## 10. Dependencies and Constraints

### Hard Constraints

- WordPress 6.5+ block theme APIs
- `theme.json` schema v3
- No required plugins
- No external font CDN
- No jQuery
- GPL v2 or later licensing

### Soft Constraints

- Prefer WordPress core blocks over custom markup
- Prefer `theme.json` settings over PHP enqueues
- Prefer CSS custom properties over hardcoded values
- Prefer semantic HTML over ARIA when possible

---

## 11. Risks

| Risk | Mitigation |
|---|---|
| Pattern fatigue — too many similar patterns | Pattern authoring guide (`PATTERN-SYSTEM.md`) enforces visual distinctness. |
| Style variations collapse into color swaps | Each variation must change at minimum: type pairings, density, and accent. |
| Plugin creep | `WORDPRESS-STANDARDS.md` documents the boundary between theme and plugin. |
| Theme.json drift between variations | Variations are produced by editing the same source `theme.json` skeleton. |
| Translation regressions | All user-facing strings use `godevs-portfolio` text domain. PHP lint + WPCS catches violations. |
| Performance degradation as pattern library grows | Patterns ship as static HTML — no runtime cost. Only enqueued assets count. |

---

## 12. Glossary

| Term | Meaning |
|---|---|
| FSE | Full Site Editing — WordPress feature allowing site-wide block-based editing |
| Block theme | A theme using `theme.json` + HTML templates rather than PHP templates |
| Template | A `templates/*.html` file rendered for a given WordPress route |
| Template part | A `parts/*.html` file referenced by templates (e.g., header, footer) |
| Pattern | A reusable block composition registered in `patterns/*.php` |
| Style variation | A `styles/*.json` file overriding the default `theme.json` styles |
| Global Styles | The user-editable representation of `theme.json` in the Site Editor |
| Design token | A named value (color, size, spacing) used consistently across the theme |

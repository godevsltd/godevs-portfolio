# GoDevs Portfolio — Product Audit & Engineering Roadmap

**Document version:** 0.8.0 audit
**Date:** Phase 9 audit

---

## A. Executive Product Audit

### What is Strong

1. **Pattern library scale** — 1,070 patterns across 15+ categories. Technically valid, Gutenberg-compatible, all pass audits.
2. **Demo system** — 102 demos with a data-driven registry, admin browser, search/filter, import/tracking/cleanup. This is genuinely useful.
3. **Design system foundation** — theme.json defines 13 colors, 4 font families, 8 fluid font sizes, 9 spacing steps. Block-level styles for 22 core blocks. This is solid.
4. **Security posture** — ABSPATH guards on all PHP files, nonce + capability checks on all AJAX endpoints, booking CPT completely private (not publicly queryable, not in REST, not in search).
5. **Accessibility baseline** — focus-visible outlines, reduced-motion overrides, semantic HTML via tagName, skip link target via `<main>`.
6. **CPT system** — 8 custom post types with proper registration, 5 taxonomies, ~40 meta fields with sanitization callbacks, module visibility system.
7. **Style variation architecture** — 12 variations, each with coherent color + typography + spacing systems.

### What is Weak

1. **No live WordPress testing** — the theme has never been activated on a real WordPress install. All validation is static. This is the single biggest risk.
2. **No PHP lint** — PHP CLI is not available. Static checks cover common failure modes but cannot catch all runtime issues.
3. **No Theme Check** — the WordPress.org Theme Check plugin has never been run.
4. **screenshot.png** — still the Phase 1 generated title-card, not a real theme screenshot.
5. **CPT meta fields lack UI** — meta fields are registered via `register_post_meta()` but no custom meta box UI exists. Users must use the WordPress Custom Fields panel, which is not user-friendly.
6. **wp_head CSS injection** — settings CSS is output via `echo` in `wp_head` rather than `wp_add_inline_style()`, which is the WordPress best practice.
7. **CPT files loaded unconditionally** — the content system PHP files are always loaded, even when all modules are disabled. Minor performance concern.
8. **Demo preview** — the preview is an AJAX-rendered markup modal, not a real front-end preview. No device switching (desktop/tablet/mobile).
9. **No `singular` template** — WordPress 6.0+ supports a `singular.html` template that covers both posts and pages as a fallback. The theme has `single.html` and `page.html` but no `singular.html`.
10. **Empty pattern categories** — `case-study`, `footer`, `header`, `pages`, `projects` directories exist but contain 0 patterns. These should either be populated or removed.

### What is Missing

1. **Real WordPress.org compliance verification** — Theme Check plugin not run.
2. **Frontend booking form** — the booking CPT exists but has no frontend form for users to submit appointment requests.
3. **Custom meta box UI** — no admin UI for entering CPT meta fields (client, URL, date, etc.).
4. **Pattern preview images** — demos use a styled text placeholder, not real visual previews.
5. **RTL support** — no RTL stylesheet or RTL-specific testing.
6. **`.pot` file** — no translation template file in `languages/` directory.

### What is Technically Risky

1. **CPT in theme vs plugin** — the PRD originally stated "Custom Post Types are plugin territory." The Phase 8 CPT system is implemented in the theme. This could cause WordPress.org review issues if the reviewer considers CPTs as plugin territory. The module visibility system mitigates this by making CPTs optional.
2. **Settings CSS via `echo`** — outputting CSS via `echo` in `wp_head` is functional but not best practice. Should use `wp_add_inline_style()`.
3. **1,070 pattern files** — loading 1,070 PHP pattern files via WordPress's pattern discovery could be slow on some hosting environments. WordPress caches pattern registration, but the initial load could be heavy.

---

## B. Feature Gap Matrix

| Requirement | Status | Evidence | Gap | Priority | Recommendation |
|---|---|---|---|---|---|
| Block theme architecture | COMPLETE | theme.json v3, HTML templates, 22 templates | None | — | — |
| Gutenberg compatibility | COMPLETE | audit-gutenberg-compat.py passes 0/1115 | None | — | — |
| Pattern library | COMPLETE | 1,070 patterns across 15 categories | None | — | — |
| Demo system | COMPLETE | 102 demos, browser, importer, tracker | None | — | — |
| Style variations | COMPLETE | 12 variations, Three-Change Rule | None | — | — |
| Theme settings | PARTIAL | 28 settings, live CSS via wp_head | Should use wp_add_inline_style() | P2 | Refactor to wp_add_inline_style |
| CPT system | PARTIAL | 8 CPTs, 5 taxonomies, ~40 meta fields | No meta box UI, no frontend booking form | P1 | Add meta box UI |
| Demo preview | NEEDS IMPROVEMENT | AJAX markup modal | No device switching, no real preview | P1 | Add iframe + device switching |
| Accessibility | PARTIAL | Static checks pass, focus states, reduced motion | No live testing, no axe DevTools | P1 | Test on real WordPress |
| Responsive design | PARTIAL | CSS clamping at 480px/600px/768px | No live browser testing | P1 | Test on real browsers |
| Performance | COMPLETE | No JS, no external deps, ~25KB CSS | None | — | — |
| Security | COMPLETE | ABSPATH guards, nonces, capability checks, escaping | None | — | — |
| Translation | PARTIAL | Text domain `godevs-portfolio`, all strings use i18n | No .pot file generated | P2 | Generate .pot file |
| WordPress.org readiness | NEEDS IMPROVEMENT | Architecture is sound | Theme Check not run, screenshot outdated, CPT territory question | P0 | Run Theme Check, fix screenshot |
| Documentation | COMPLETE | 20+ docs files | None | — | — |

---

## C. Design Audit

### Design System Weaknesses

1. **Dark variation has 0 font sizes** — the `dark.json` style variation overrides the palette but does not define its own font sizes. This means it inherits the default theme.json font sizes, which is correct behavior but means the variation relies entirely on color + block styles for differentiation.

2. **No `surface-muted` color token** — the palette has `surface` and `surface-elevated` but no `surface-muted` for subtle background differentiation (e.g., alternating section backgrounds).

3. **Button `:active` state in theme.json** — the `:active` state is defined as reverting to `primary` background, which means clicking a button briefly shows the original color. This is correct but could be confused with no visual feedback.

### Block Weaknesses

1. **No `core/spacer` styling** — the spacer block is used in patterns but has no theme.json styling.
2. **No `core/gallery` styling** — gallery blocks appear in portfolio patterns but have no refined styling.
3. **No `core/code` styling** — code blocks have no monospace font family or background treatment.

### Template Weaknesses

1. **No `singular.html`** — WordPress 6.0+ uses `singular.html` as a fallback for both `single` and `page`. Adding it improves template hierarchy robustness.
2. **404 template** — uses a centered layout but could be more editorial.
3. **Search template** — functional but could have a better empty state.

### Demo Weaknesses

1. **All demos use the same placeholder image** — every demo references `placeholder-portrait.jpg`. This makes demos look repetitive when browsed.
2. **Demo preview is markup-only** — no real rendered preview with theme styles.

---

## D. Architecture Audit

### PHP Architecture

**Strong:**
- Clean separation: `functions.php` is minimal, components in `inc/`
- ABSPATH guards on all files
- WordPress Settings API used correctly
- No direct database queries
- No external dependencies

**Weak:**
- CPT files loaded unconditionally (even when all modules disabled)
- `wp_head` echo instead of `wp_add_inline_style()`
- No autoloader (not strictly necessary but would be cleaner)

### Settings Architecture

**Strong:**
- Settings API with proper registration, sanitization, escaping
- 28 settings across 8 sections
- Reset to defaults with nonce + capability check
- Live CSS application via wp_head

**Weak:**
- CSS injection via `echo` not `wp_add_inline_style()`
- Settings stored in both `option` and `theme_mod` (dual storage — could be simplified)

### Pattern Architecture

**Strong:**
- 1,070 patterns, all with valid metadata
- Unique slugs, no duplicates
- Category-based organization
- All use design tokens (no hardcoded values)

**Weak:**
- 5 empty pattern directories (case-study, footer, header, pages, projects)
- Some generated patterns share very similar composition templates (Phase 5 combinatorial generation)

### Demo Architecture

**Strong:**
- Data-driven registry reads from pattern files
- Import tracking with page IDs, nav menu IDs
- Safe import (no homepage change) and Starter import (with homepage)
- Cleanup trashes pages (restorable) without deleting unrelated content

**Weak:**
- Preview is AJAX-rendered markup in a modal, not a real front-end preview
- All demos use the same placeholder image
- No device switching in preview

---

## E. Roadmap

### P0 — Critical (Must Fix Before WordPress.org Submission)

| # | Issue | Complexity | Fix |
|---|---|---|---|
| 1 | Run Theme Check plugin | Small | Install Theme Check, run, fix findings |
| 2 | Replace screenshot.png | Small | Generate real theme screenshot |
| 3 | Add `singular.html` template | Small | Create fallback template |
| 4 | Remove empty pattern directories | Small | Delete case-study, footer, header, pages, projects dirs (0 patterns) |
| 5 | CPT territory assessment | Small | Document that CPTs are optional + module-gated; verify WordPress.org allows this |

### P1 — High Priority (Significantly Affects Quality)

| # | Issue | Complexity | Fix |
|---|---|---|---|
| 6 | Refactor settings CSS to wp_add_inline_style | Small | Replace wp_head echo with wp_add_inline_style |
| 7 | Add meta box UI for CPT fields | Medium | Create inc/content/meta-boxes.php with post meta boxes |
| 8 | Improve demo preview with device switching | Medium | Add desktop/tablet/mobile CSS classes + JS toggle |
| 9 | Generate .pot translation file | Small | Run wp-pot or create manually |
| 10 | Add core/code + core/gallery + core/spacer styling | Small | Add to theme.json blocks section |

### P2 — Medium Priority (Polish & Consistency)

| # | Issue | Complexity | Fix |
|---|---|---|---|
| 11 | Add surface-muted color token | Small | Add to theme.json palette |
| 12 | Improve 404 template | Small | Refine composition |
| 13 | Add singular.html | Small | Already in P0 |
| 14 | Consolidate settings storage | Small | Use only option or only theme_mod |
| 15 | Add README.md to inc/content/ | Small | Document CPT architecture |

### P3 — Optional (Nice to Have)

| # | Issue | Complexity | Fix |
|---|---|---|---|
| 16 | RTL stylesheet | Medium | Add RTL-specific CSS |
| 17 | Pattern preview images | Large | Generate SVG previews per pattern |
| 18 | Frontend booking form | Large | Create secure form with nonce + rate limiting |
| 19 | Autoloader for inc/ files | Medium | Use PSR-4 or similar |
| 20 | Companion plugin architecture | Large | Split CPTs into optional plugin |

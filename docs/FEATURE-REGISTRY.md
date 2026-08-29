# Feature Registry — GoDevs Portfolio

This is the canonical source of truth for implemented functionality. Before
implementing a feature, check this registry. After implementing a feature,
update this registry immediately.

The registry is organised by feature ID. Each entry records the feature
name, status, phase shipped, files, implementation location, dependencies,
test status, and documentation references.

---

## Status legend

- **Complete** — feature is shipped, tested, and documented.
- **In progress** — feature is being implemented in the current phase.
- **Planned** — feature is scheduled for a future phase.
- **Deprecated** — feature is no longer recommended; kept for backward
  compatibility.
- **Removed** — feature has been removed.

---

## v0.1.0 features (foundation)

### GP-001 — Global Design System
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `theme.json`
- **Implementation Location:** `theme.json` root `settings` and `styles`
- **Dependencies:** WordPress 6.5+ style engine
- **Test Status:** Passed (`tests/test-theme-json-schema.php`)
- **Documentation:** `docs/DESIGN-SYSTEM.md`, `docs/ARCHITECTURE.md`

### GP-002 — Block Theme Foundation
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `style.css`, `functions.php`, `index.php`, `theme.json`
- **Implementation Location:** Root theme files
- **Dependencies:** WordPress 6.5+ block theme support
- **Test Status:** Passed (`tests/test-activation.php`)
- **Documentation:** `docs/ARCHITECTURE.md`, `docs/FEATURE-SPECIFICATION.md`

### GP-003 — Templates Layer
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `templates/index.html`, `templates/home.html`, `templates/front-page.html`, `templates/page.html`, `templates/page-no-title.html`, `templates/single.html`, `templates/singular.html`, `templates/archive.html`, `templates/search.html`, `templates/404.html`
- **Implementation Location:** `/templates/`
- **Dependencies:** WordPress template hierarchy
- **Test Status:** Passed (`tests/test-templates-exist.php`)
- **Documentation:** `docs/TEMPLATE-SYSTEM.md`

### GP-004 — Template Parts
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `parts/header.html`, `parts/footer.html`, `parts/mobile-menu.html`
- **Implementation Location:** `/parts/`
- **Dependencies:** `theme.json` `templateParts` declarations
- **Test Status:** Passed (`tests/test-templates-exist.php`)
- **Documentation:** `docs/TEMPLATE-SYSTEM.md`

### GP-005 — Block Patterns (v0.1 set)
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `patterns/hero.php`, `patterns/about.php`, `patterns/services.php`, `patterns/portfolio-grid.php`, `patterns/testimonials.php`, `patterns/cta.php`, `patterns/contact.php`, `patterns/footer.php`
- **Implementation Location:** `/patterns/`
- **Dependencies:** WordPress 6.0+ pattern auto-discovery
- **Test Status:** Passed (`tests/test-pattern-smoke.php`)
- **Documentation:** `docs/PATTERN-SYSTEM.md`

### GP-006 — Style Variations (v0.1 set)
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `styles/minimal.json`, `styles/dark.json`
- **Implementation Location:** `/styles/`
- **Dependencies:** `theme.json` style-variation auto-discovery
- **Test Status:** Passed (`tests/test-theme-json-schema.php`)
- **Documentation:** `docs/DESIGN-SYSTEM.md`

### GP-007 — Self-Hosted Fonts
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `assets/fonts/inter-{400,500,600,700}.woff2`, `assets/fonts/newsreader-{500,600}.woff2`, `assets/fonts/newsreader-500-italic.woff2`, `assets/fonts/INTER-OFL.txt`, `assets/fonts/NEWSREADER-OFL.txt`, `assets/fonts/README.md`
- **Implementation Location:** `theme.json` `fontFamilies` `fontFace` entries; `functions.php` `godevs_portfolio_preload_fonts()`
- **Dependencies:** SIL Open Font License 1.1 (both families)
- **Test Status:** Passed (verifier checks for all 7 woff2 files)
- **Documentation:** `assets/fonts/README.md`, `docs/PERFORMANCE.md`

### GP-008 — Editor Styles
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `assets/css/editor.css`
- **Implementation Location:** `functions.php` `godevs_portfolio_editor_assets()` on `enqueue_block_editor_assets`
- **Dependencies:** WordPress block editor
- **Test Status:** Passed (verifier checks file exists)
- **Documentation:** `docs/GUTENBERG-ARCHITECTURE.md`

### GP-009 — Print Styles
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `assets/css/print.css`
- **Implementation Location:** `functions.php` `godevs_portfolio_assets()` on `wp_enqueue_scripts` with `media="print"`
- **Dependencies:** None
- **Test Status:** Passed (verifier checks file exists)
- **Documentation:** `docs/PERFORMANCE.md`

### GP-010 — Front-end JavaScript
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `assets/js/navigation.js`
- **Implementation Location:** `functions.php` `godevs_portfolio_assets()` on `wp_enqueue_scripts` with `strategy: "defer"`
- **Dependencies:** None (no jQuery, no libraries)
- **Test Status:** Passed (verifier checks file exists)
- **Documentation:** `docs/PERFORMANCE.md`, `docs/ARCHITECTURE.md`

### GP-011 — Plugin Boundary Contract
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `functions.php`
- **Implementation Location:** `godevs_portfolio_setup()` defines `GODEVS_PORTFOLIO_CORE_ACTIVE` constant; fires `godevs_portfolio_core_active` action; `godevs_portfolio_body_class()` adds `godevs-core-active` or `godevs-core-inactive` body class
- **Dependencies:** Optional GoDevs Core plugin (not yet shipped)
- **Test Status:** Passed (`tests/test-activation.php`)
- **Documentation:** `docs/CORE-PLUGIN-BOUNDARY.md`

### GP-012 — Translation Foundation
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `languages/godevs-portfolio.pot`
- **Implementation Location:** `functions.php` `load_theme_textdomain('godevs-portfolio', ...)`
- **Dependencies:** WordPress i18n APIs
- **Test Status:** Passed (verifier checks .pot file exists)
- **Documentation:** `docs/INTERNATIONALIZATION.md`

### GP-013 — Test Suite
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `tests/test-activation.php`, `tests/test-theme-json-schema.php`, `tests/test-pattern-smoke.php`, `tests/test-templates-exist.php`, `tests/run.php`
- **Implementation Location:** `/tests/`
- **Dependencies:** PHP CLI (for `tests/run.php`); Python 3 (for parallel verifier at `/home/z/my-project/scripts/verify_theme.py`)
- **Test Status:** Passed (244/244 in v0.1)
- **Documentation:** `docs/TESTING-PLAN.md`

### GP-014 — Documentation Suite (v0.1)
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** 24 markdown files in `/docs/`
- **Implementation Location:** `/docs/`
- **Dependencies:** None
- **Test Status:** Passed (verifier checks all 24 files exist and have >2000 bytes)
- **Documentation:** `README.md`, `docs/AI-DEVELOPMENT-GUIDE.md`

### GP-015 — Project Meta
- **Status:** Complete
- **Phase:** v0.1.0
- **Files:** `README.md`, `CHANGELOG.md`, `LICENSE`, `.gitignore`, `readme.txt`
- **Implementation Location:** Theme root
- **Dependencies:** None
- **Test Status:** Passed (verifier checks all files exist)
- **Documentation:** `README.md`

---

## v0.2.0 features

### GP-016 — Creative Style Variation
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `styles/creative.json`
- **Implementation Location:** `/styles/`
- **Dependencies:** GP-001 (design system), GP-007 (Newsreader italic bundled in v0.1)
- **Test Status:** Passed (verifier checks file exists and is valid JSON)
- **Documentation:** `docs/DESIGN-SYSTEM.md` §10 (Style variation principles)

### GP-017 — Corporate Style Variation
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `styles/corporate.json`
- **Implementation Location:** `/styles/`
- **Dependencies:** GP-001
- **Test Status:** Passed
- **Documentation:** `docs/DESIGN-SYSTEM.md` §10

### GP-018 — Elegant Style Variation
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `styles/elegant.json`
- **Implementation Location:** `/styles/`
- **Dependencies:** GP-001, GP-007
- **Test Status:** Passed
- **Documentation:** `docs/DESIGN-SYSTEM.md` §10

### GP-019 — Editorial Style Variation
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `styles/editorial.json`
- **Implementation Location:** `/styles/`
- **Dependencies:** GP-001, GP-007
- **Test Status:** Passed
- **Documentation:** `docs/DESIGN-SYSTEM.md` §10

### GP-020 — Stats Pattern
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `patterns/stats.php`
- **Implementation Location:** `/patterns/`
- **Slug:** `godevs-portfolio/stats`
- **Dependencies:** GP-001 (uses design tokens)
- **Test Status:** Passed (`tests/test-pattern-smoke.php`)
- **Documentation:** `docs/PATTERN-SYSTEM.md`

### GP-021 — Process Pattern
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `patterns/process.php`
- **Implementation Location:** `/patterns/`
- **Slug:** `godevs-portfolio/process`
- **Dependencies:** GP-001
- **Test Status:** Passed
- **Documentation:** `docs/PATTERN-SYSTEM.md`

### GP-022 — FAQ Pattern
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `patterns/faq.php`
- **Implementation Location:** `/patterns/`
- **Slug:** `godevs-portfolio/faq`
- **Dependencies:** GP-001, WordPress core `core/details` block (WP 6.3+)
- **Test Status:** Passed
- **Documentation:** `docs/PATTERN-SYSTEM.md`

### GP-023 — Team Pattern
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `patterns/team.php`
- **Implementation Location:** `/patterns/`
- **Slug:** `godevs-portfolio/team`
- **Dependencies:** GP-001
- **Test Status:** Passed
- **Documentation:** `docs/PATTERN-SYSTEM.md`

### GP-024 — Timeline Pattern
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `patterns/timeline.php`
- **Implementation Location:** `/patterns/`
- **Slug:** `godevs-portfolio/timeline`
- **Dependencies:** GP-001
- **Test Status:** Passed
- **Documentation:** `docs/PATTERN-SYSTEM.md`

### GP-025 — Feature Registry
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `docs/FEATURE-REGISTRY.md` (this file)
- **Implementation Location:** `/docs/`
- **Dependencies:** None
- **Test Status:** N/A (this is the registry itself)
- **Documentation:** This file

### GP-026 — Decision Log
- **Status:** Complete
- **Phase:** v0.2.0
- **Files:** `docs/DECISION-LOG.md`
- **Implementation Location:** `/docs/`
- **Dependencies:** None
- **Test Status:** N/A
- **Documentation:** `docs/DECISION-LOG.md`

---

## Planned features (v0.3+)

### GP-027 — GoDevs Core Plugin
- **Status:** Planned
- **Phase:** v0.3.0
- **Files:** (separate plugin repository, not part of the theme)
- **Implementation Location:** External plugin
- **Dependencies:** GP-011 (plugin boundary contract)
- **Test Status:** Not started
- **Documentation:** `docs/CORE-PLUGIN-BOUNDARY.md`

### GP-028 — Starter Site Architecture
- **Status:** Planned
- **Phase:** v0.4.0+
- **Files:** (planned) `/starter-content/`, onboarding UI
- **Implementation Location:** TBD
- **Dependencies:** GP-016 through GP-019 (style variations)
- **Test Status:** Not started
- **Documentation:** `docs/DEMO-STRATEGY.md`

---

## Feature check before implementing

Before adding a new feature, search this registry by name and by
implementation location. If a feature with overlapping scope exists:

1. **Reuse** — if the existing feature covers the requirement.
2. **Improve** — if the existing feature covers most of the requirement
   but has gaps. Update the existing feature's record (do not create a
   new one).
3. **Fix** — if the existing feature is broken. Update the existing
   feature's record and link the fix to a regression test.

If the feature does not exist, add a new entry to this registry
immediately after implementation. The entry must include the feature
ID, name, status, phase, files, implementation location, dependencies,
test status, and documentation references.

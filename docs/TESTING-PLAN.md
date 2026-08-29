# Testing Plan — GoDevs Portfolio

The theme ships a small test suite in `/tests/` and a manual QA
checklist in `docs/QA-CHECKLIST.md`. This document explains the
test strategy, the automated tests, and the manual testing
workflow.

---

## 1. Testing philosophy

The theme tests:

- **Activation** — the theme activates without errors on a clean
  WordPress install.
- **Schema validity** — `theme.json` and style variations are
  valid against the WP 6.5+ schema.
- **Pattern smoke** — every pattern file in `/patterns/` has a
  valid file header and parses without PHP errors.
- **Template existence** — every template and template part
  declared in `theme.json` exists as a file.

The theme does NOT (yet) test:

- Visual regression (pixel-level visual comparison).
- Accessibility (automated axe-core test).
- Performance (automated Lighthouse test).
- Cross-browser (automated Playwright test).

These are scheduled for Phase 11-14.

## 2. Automated test suite

The test suite lives in `/tests/` and is run via
`php tests/run.php`. The runner executes each test file in
sequence and reports pass / fail.

### Test files

#### `tests/test-activation.php`
Verifies:
- `functions.php` loads without PHP errors.
- The `godevs_portfolio_setup()` function is callable.
- The `after_setup_theme` action has the
  `godevs_portfolio_setup` callback registered.
- `functions.php` does not enqueue any external resource.

#### `tests/test-theme-json-schema.php`
Verifies:
- `theme.json` is valid JSON.
- `theme.json` declares `version: 2`.
- `theme.json` declares all required settings (`color.palette`,
  `typography.fontFamilies`, `typography.fontSizes`,
  `spacing.spacingSizes`, `layout.contentSize`,
  `layout.wideSize`).
- Every style variation in `/styles/` is valid JSON.
- Every style variation declares `version: 2` and `title`.

#### `tests/test-pattern-smoke.php`
Verifies:
- Every PHP file in `/patterns/` has a valid file header with
  at least `Title` and `Slug` declared.
- Every pattern slug is prefixed `godevs-portfolio/`.
- Every pattern file parses without PHP errors (lint).
- Every pattern file outputs at least one block comment
  (`<!-- wp:`).

#### `tests/test-templates-exist.php`
Verifies:
- Every template declared in `theme.json` `customTemplates` has
  a corresponding file in `/templates/`.
- Every template part declared in `theme.json` `templateParts`
  has a corresponding file in `/parts/`.
- The nine core templates (`index`, `home`, `front-page`, `page`,
  `single`, `archive`, `search`, `404`, `singular`) exist in
  `/templates/`.

#### `tests/run.php`
The test runner. Loads each test file in order, captures output,
reports pass / fail with a single-line summary per test.

## 3. Running the tests

### Prerequisites
- PHP 7.4+ with the `mbstring` extension.
- WordPress 6.5+ installed and activated (for tests that
  require WordPress core functions; v0.1 tests do not require
  WordPress core).

### Running all tests
```bash
cd /path/to/godevs-portfolio
php tests/run.php
```

### Running a single test
```bash
cd /path/to/godevs-portfolio
php tests/test-activation.php
```

### Expected output
The runner outputs one line per test:
```
PASS  test-activation
PASS  test-theme-json-schema
PASS  test-pattern-smoke
PASS  test-templates-exist
```

If a test fails, the runner outputs:
```
FAIL  test-pattern-smoke
  - Pattern file 'hero.php' missing 'Slug' header.
  - Pattern slug 'godevs/about' must be prefixed with
    'godevs-portfolio/'.
```

## 4. Manual test plan

In addition to the automated tests, the theme is manually tested
before each release. The manual test plan covers:

### Activation
- [ ] Theme activates on a clean WordPress 6.5+ install.
- [ ] No PHP warnings, notices, or errors in `debug.log`.
- [ ] Theme appears in Appearance → Themes with the correct
      name, version, and screenshot.
- [ ] Site Editor opens without errors.

### Templates
- [ ] Each template renders correctly with the header and
      footer template parts.
- [ ] Front-page template composes the seven patterns (hero,
      about, services, portfolio, cta, testimonials, contact).
- [ ] Single post template renders post date, title, terms,
      featured image, content, post navigation, and comments.
- [ ] Archive template renders archive title and posts list.
- [ ] Search template renders search form and results list.
- [ ] 404 template renders heading, paragraph, search form,
      and home button.
- [ ] Page (No Title) custom template renders post content
      without the title.

### Patterns
- [ ] All eight patterns appear in the Site Editor inserter.
- [ ] Each pattern inserts without PHP errors.
- [ ] Each pattern is responsive at 375, 768, 1024, 1280,
      1440, 1920.
- [ ] Each pattern uses design system tokens (no hardcoded
      hex or spacing).

### Style variations
- [ ] Both style variations appear in the Styles → Browse
      Styles panel.
- [ ] Switching to Minimal changes typography to Inter for
      headings, removes button radius.
- [ ] Switching to Dark changes palette to dark background,
      light text, lightened accent.
- [ ] Switching back to default restores the original
      palette and typography.

### Site Editor
- [ ] Site logo can be replaced via the Site Editor.
- [ ] Site tagline can be edited via the Site Editor.
- [ ] Navigation menu can be edited via the Site Editor.
- [ ] Header template part can be edited via the Site Editor.
- [ ] Footer template part can be edited via the Site Editor.
- [ ] Mobile menu template part can be edited via the Site
      Editor.
- [ ] Each template can be edited and saved.

### Responsive
- [ ] Layout works at 375, 768, 1024, 1280, 1440, 1920.
- [ ] No horizontal scroll at 375.
- [ ] Navigation switches to overlay mode at 1024.
- [ ] Mobile menu opens and closes with keyboard.

### Accessibility
- [ ] Skip link is the first focusable element on every page.
- [ ] Skip link moves focus to `#main` on click.
- [ ] All focusable elements have visible focus indicators.
- [ ] Heading hierarchy is correct (one h1, no skipped levels).
- [ ] Screen reader reads the page in the correct order
      (NVDA on Windows or VoiceOver on macOS).
- [ ] Reduced motion preference disables all transitions.

### Performance
- [ ] Lighthouse mobile score >= 95 on the default front-page
      with no plugins.
- [ ] LCP < 2.5s on a fast 3G profile.
- [ ] TBT < 200ms on a fast 3G profile.
- [ ] CLS < 0.1.
- [ ] No external requests on the front-end (verified via
      Chrome DevTools Network panel).

### Security
- [ ] No PHP warnings, notices, or errors in `debug.log` with
      `WP_DEBUG` and `WP_DEBUG_LOG` enabled.
- [ ] No unescaped `echo` in `functions.php` (grep for `echo`).
- [ ] No remote requests (grep for `wp_remote_get`,
      `wp_remote_post`, `curl_`, `file_get_contents`).
- [ ] No `eval()` (grep for `eval`).

### Plugin boundary
- [ ] Theme activates and renders without GoDevs Core.
- [ ] Body class `godevs-core-inactive` is present.
- [ ] `GODEVS_PORTFOLIO_CORE_ACTIVE` constant is `false`.

### Internationalization
- [ ] `godevs-portfolio.pot` file exists in `/languages/`.
- [ ] Theme loads text domain via
      `load_theme_textdomain()`.
- [ ] Switching site language to Arabic or Hebrew flips layout
      to RTL.

## 5. Test environment

The recommended test environment:

- **WordPress:** 6.5+ (latest stable preferred).
- **PHP:** 7.4, 8.0, 8.1, 8.2 (test on at least two versions).
- **MySQL:** 5.7+ or MariaDB 10.3+.
- **Web server:** Apache or Nginx.
- **Browser:** Chrome, Firefox, Safari (latest + one version
  back).

The test environment should use `WP_DEBUG = true`,
`WP_DEBUG_LOG = true`, `SCRIPT_DEBUG = true`.

## 6. CI integration (planned for v0.5+)

Phase 11+ will add CI integration:

- GitHub Actions workflow that runs `php tests/run.php` on every
  push and PR.
- GitHub Actions workflow that runs Lighthouse against a test
  WordPress install on every PR.
- GitHub Actions workflow that runs axe-core accessibility
  tests on the default front-page.

The CI workflows are not part of v0.1; they are scheduled for
Phase 11 (performance) and Phase 12 (accessibility).

## 7. Regression testing

When a PR fixes a bug, the contributor adds a regression test
to `/tests/` that would have caught the bug. The regression test
is named after the bug (e.g. `test-hero-pattern-spacing.php` for
a bug in the hero pattern's spacing).

Regression tests follow the same format as the existing tests
in `/tests/`. They are merged alongside the bug fix.

## 8. Test coverage goal

v0.1 test coverage:
- ✅ Activation
- ✅ Schema validation (theme.json + style variations)
- ✅ Pattern smoke (file headers + parse)
- ✅ Template existence

v0.5 test coverage (planned):
- Visual regression (Chromatic or Percy, per pattern).
- Accessibility (axe-core per template).
- Performance (Lighthouse per template).
- Cross-browser (Playwright across Chrome, Firefox, Safari).

v0.7 test coverage (planned):
- WordPress.org theme review checklist automated.

## 9. References

- WordPress core test handbook:
  https://make.wordpress.org/core/handbook/testing/
- Theme review process:
  https://make.wordpress.org/themes/handbook/review/
- PHPUnit:
  https://developer.wordpress.org/plugins/plugin-basics/unit-testing/
- Lighthouse:
  https://developer.chrome.com/docs/lighthouse/overview/
- axe-core:
  https://github.com/dequelabs/axe-core

# GoDevs Portfolio — Contributing

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document describes how to contribute to the GoDevs Portfolio theme. It applies to both human contributors and AI agents.

---

## 1. Before You Begin

1. Read `AI-DEVELOPMENT-GUIDE.md` — it defines the workflow.
2. Read `ARCHITECTURE.md` — it defines where files belong.
3. Read `DESIGN-SYSTEM.md` — it defines the visual language.
4. Read `WORDPRESS-STANDARDS.md` — it defines the code conventions.

Do not begin work without reading these four documents.

---

## 2. Workflow

```
Inspect → Plan → Implement → Validate → Review → Report
```

See `AI-DEVELOPMENT-GUIDE.md` Section 2 for the full description.

---

## 3. Adding a Pattern

### 3.1 Step-by-Step

1. **Identify the category** — see `PATTERN-SYSTEM.md` Section 2.
2. **Pick a descriptive name** — see `PATTERN-SYSTEM.md` Section 3.
3. **Create the file** at `patterns/<category>/<name>.php`.
4. **Author the metadata header**:
   ```php
   <?php
   /**
    * Title: Hero — Split Profile
    * Slug: godevs-portfolio/hero-split-profile
    * Description: A two-column hero with an editorial portrait on one side and a bold display headline plus CTA on the other.
    * Categories: godevs-portfolio-hero
    * Keywords: hero, split, profile, intro
    * Viewport Width: 1280
    */
   ?>
   ```
5. **Compose with core blocks** — see `PATTERN-SYSTEM.md` Section 4.
6. **Reference design tokens** — colors via `var:preset|color|<slug>`, spacing via `var:preset|spacing|<slug>`, sizes via `var:preset|font-size|<slug>`.
7. **Validate**:
   ```bash
   php -l patterns/<category>/<name>.php
   ```
8. **Test in Site Editor** — insert the pattern, verify it renders correctly.
9. **Test in every style variation** — switch to each `styles/*.json` variation, insert the pattern, verify it still looks intentional.
10. **Test responsive** — viewport at 360px, 768px, 1280px.
11. **Test accessibility** — keyboard nav, focus visible, contrast AA.
12. **Update `CHANGELOG.md`** under "Added".
13. **Commit** with message: `feat(patterns): add Hero — Split Profile pattern`.

### 3.2 Pattern Template

Use this skeleton when authoring a new pattern:

```php
<?php
/**
 * Title: <Category> — <Descriptive Subtitle>
 * Slug: godevs-portfolio/<category-slug>-<descriptive-slug>
 * Description: <One sentence explaining the pattern's design intent>
 * Categories: godevs-portfolio-<category>
 * Keywords: <3-5 comma-separated keywords>
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-<name>","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-<name> alignfull">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
        <!-- Section header -->
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"fontSize":"small"} -->
            <p class="has-small-font-size">Eyebrow text</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading">Section heading</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
        
        <!-- Section content -->
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- Content blocks here -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->
```

---

## 4. Adding a Template

### 4.1 Step-by-Step

1. **Identify the WordPress template hierarchy slot** — see `TEMPLATE-SYSTEM.md` Section 1.1.
2. **Create the file** at `templates/<name>.html`.
3. **Compose** with `core/template-part` for header/footer + `core/group` for main + content blocks.
4. **Validate**:
   ```bash
   # JSON validation of the HTML's block markup is handled by WordPress on activation
   ls -la templates/<name>.html
   ```
5. **Test** — activate the theme, visit a route that resolves to the template, verify rendering.
6. **Update `CHANGELOG.md`** under "Added".
7. **Commit** with message: `feat(templates): add <name> template`.

### 4.2 Template Skeleton

```html
<!-- wp:template-part {"slug":"header","theme":"godevs-portfolio","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
        <!-- Template-specific content -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"godevs-portfolio","tagName":"footer"} /-->
```

---

## 5. Adding a Template Part

### 5.1 Step-by-Step

1. **Identify the purpose** — header variant, footer variant, sidebar, etc.
2. **Create the file** at `parts/<name>.html`.
3. **Compose** with semantic blocks (`core/site-logo`, `core/navigation`, etc.).
4. **Register the template part** in `parts/<name>.html` itself — WordPress auto-discovers files in `parts/`.
5. **Validate** — visit Appearance → Editor → Template Parts, verify it appears.
6. **Update `CHANGELOG.md`** under "Added".
7. **Commit** with message: `feat(parts): add <name> template part`.

---

## 6. Adding a Style Variation

### 6.1 Step-by-Step

1. **Read `STYLE-VARIATIONS.md`** — confirm the variation meets the Three-Change Rule.
2. **Create the file** at `styles/<name>.json`.
3. **Author the JSON** — override the relevant `settings.color`, `settings.typography`, `settings.spacing`, `styles.*` subtrees.
4. **Validate**:
   ```bash
   python3 -m json.tool styles/<name>.json > /dev/null
   ```
5. **Test in Site Editor** — switch to the variation, verify it applies.
6. **Test every pattern** in the variation — switch to each pattern, verify it renders correctly.
7. **Verify contrast** — use WebAIM Contrast Checker on every color combination.
8. **Update `CHANGELOG.md`** under "Added".
9. **Commit** with message: `feat(styles): add <name> style variation`.

### 6.2 Variation Template

```json
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 3,
    "title": "Variation Name",
    "description": "One sentence describing the design intent.",
    "settings": {
        "color": {
            "palette": [
                { "slug": "primary", "color": "#000000", "name": "Primary" },
                { "slug": "base", "color": "#FFFFFF", "name": "Base" }
            ]
        },
        "typography": {
            "fontFamilies": [
                { "slug": "display", "name": "Display", "fontFamily": "Georgia, serif" }
            ]
        }
    },
    "styles": {
        "color": { "background": "#FFFFFF", "text": "#000000" },
        "elements": {
            "heading": {
                "typography": { "fontFamily": "var:preset|font-family|display" }
            },
            "button": {
                "color": { "background": "#000000", "text": "#FFFFFF" }
            }
        }
    }
}
```

---

## 7. Modifying `theme.json`

### 7.1 Step-by-Step

1. **Identify the change** — settings (tokens) vs styles (block-level).
2. **Read `DESIGN-SYSTEM.md`** — confirm the change fits the system.
3. **Edit `theme.json`** with the minimal change.
4. **Validate**:
   ```bash
   python3 -m json.tool theme.json > /dev/null
   ```
5. **Test in Site Editor** — verify the change is reflected.
6. **Test variations** — verify variations still apply correctly.
7. **Update `CHANGELOG.md`** under "Changed".
8. **Commit** with message: `refactor(theme-json): <change>` or `feat(theme-json): <change>`.

### 7.2 Rules

- **Never** remove a slug that is referenced by a pattern, template, or variation.
- **Never** change a slug's meaning (e.g., making `primary` mean "blue" then "red"). Add new slugs instead.
- **Always** preserve the `version: 3` field.
- **Always** preserve the `$schema` reference.

---

## 8. Adding CSS

### 8.1 When CSS Is Appropriate

CSS in `assets/css/theme.css` is appropriate when:

- The style cannot be expressed in `theme.json` (e.g., `:focus-visible` outline)
- The style is for a custom block style class registered in `inc/block-styles.php`
- The style overrides a default for accessibility (e.g., `prefers-reduced-motion`)

### 8.2 When CSS Is NOT Appropriate

- Hardcoded colors → use `theme.json` palette
- Hardcoded spacing → use `theme.json` spacing scale
- Hardcoded font sizes → use `theme.json` font sizes
- Layout → use block layout attributes
- Anything that can be expressed in `theme.json`

### 8.3 Step-by-Step

1. **Read `PERFORMANCE.md`** — confirm CSS is the right tool.
2. **Read `WORDPRESS-STANDARDS.md`** — confirm conventions.
3. **Add to `assets/css/theme.css`** with a comment explaining the rule's purpose.
4. **Reference tokens** — use `var(--wp--preset--color|spacing|font-size|font-family|<slug>)`.
5. **Validate** — visual inspection, no console errors.
6. **Update `CHANGELOG.md`** under "Changed".
7. **Commit** with message: `style(assets): <change>`.

---

## 9. Adding JavaScript

### 9.1 When JS Is Appropriate

JavaScript is appropriate when:

- A pattern needs progressive enhancement that cannot be expressed declaratively
- The enhancement degrades gracefully without JS
- The file is under 5 KB

### 9.2 When JS Is NOT Appropriate

- Anything that can be done with HTML/CSS
- Anything that requires a library (use vanilla JS)
- Anything that processes user input (plugin territory)
- Anything that makes external requests

### 9.3 Step-by-Step

1. **Read `PERFORMANCE.md`** — confirm JS is needed.
2. **Read `WORDPRESS-STANDARDS.md`** — confirm conventions.
3. **Read `SECURITY.md`** — confirm safety.
4. **Add to `assets/js/theme.js`** with a comment explaining the enhancement.
5. **Enqueue** in `functions.php` with `defer` strategy.
6. **Validate** — visual inspection, no console errors, page works without JS.
7. **Update `CHANGELOG.md`** under "Added" or "Changed".
8. **Commit** with message: `feat(assets): <change>`.

---

## 10. Updating Documentation

### 10.1 Step-by-Step

1. **Identify the relevant `docs/` file** — see `AI-DEVELOPMENT-GUIDE.md` Section 9.
2. **Read the existing content** — understand what's already documented.
3. **Make the minimal change** — do not rewrite the file.
4. **Update `CHANGELOG.md`** under "Changed".
5. **Commit** with message: `docs(<area>): <change>`.

### 10.2 Documentation Standards

- Documentation is project-specific. No placeholder text.
- Documentation reflects the current state of the codebase.
- Documentation uses Markdown.
- Documentation is concise but complete.
- Code examples are syntactically valid.

---

## 11. Testing Changes

### 11.1 Local Testing Workflow

1. Activate the theme on a local WordPress install.
2. Visit each route that exercises the change:
   - Homepage (latest posts or static front page)
   - A single post
   - An archive page
   - A search results page
   - A 404 page
3. Open the Site Editor.
4. Insert the affected pattern(s).
5. Switch to each style variation.
6. View at 360px, 768px, 1280px, 1920px widths.
7. Tab through the page using keyboard only.
8. Run Lighthouse audit.
9. Run axe DevTools audit.

### 11.2 What to Report

When reporting test results:

- **Passed:** what worked
- **Failed:** what did not work, with reproduction steps
- **Not tested:** what you did not test, with reason

**Do not** claim a test passed if you did not run it.

---

## 12. Creating Commits

### 12.1 Commit Message Format

Follow Conventional Commits:

```
<type>(<scope>): <subject>

<body (optional)>
```

| Type | When |
|---|---|
| `feat` | New feature (new pattern, template, variation) |
| `fix` | Bug fix |
| `docs` | Documentation change |
| `style` | Code style change (no behavior change) |
| `refactor` | Code refactoring (no behavior change) |
| `perf` | Performance improvement |
| `test` | Test addition or change |
| `chore` | Tooling, build, dependency |
| `build` | Build system change |
| `ci` | CI change |

Scopes (suggested):
- `patterns`, `templates`, `parts`, `styles`, `theme-json`, `assets`, `docs`, `readme`

### 12.2 Commit Hygiene

- One concern per commit.
- Do not mix unrelated changes.
- Do not commit generated files (unless documented as a deliverable).
- Do not commit secrets (`.env`, API keys, passwords).
- Do not commit `.DS_Store` or editor config files (use `.gitignore`).

---

## 13. Branch and Pull Request Workflow

### 13.1 Branch Naming

```
<type>/<short-description>
```

Examples:
- `feat/hero-split-profile-pattern`
- `fix/dark-variation-contrast`
- `docs/accessibility-screen-reader-testing`

### 13.2 Pull Request Template

```markdown
## Summary

<One sentence describing the change.>

## Why

<One paragraph explaining the rationale.>

## How

<Implementation notes, if non-trivial.>

## Validation

- [ ] PHP lint passed
- [ ] JSON validation passed
- [ ] Theme activates without errors
- [ ] Tested in default style
- [ ] Tested in all style variations
- [ ] Tested at 360px / 768px / 1280px
- [ ] Keyboard navigation works
- [ ] Lighthouse audit ≥ 90
- [ ] axe DevTools shows no critical issues

## Screenshots

<For visual changes — before and after.>

## Breaking Changes

<None, or describe.>
```

---

## 14. Code Review Checklist

When reviewing a PR:

### Architecture
- [ ] Files go in the right location
- [ ] Naming follows conventions
- [ ] No unnecessary files created

### Design System
- [ ] No hardcoded colors
- [ ] No hardcoded spacing
- [ ] No hardcoded font sizes
- [ ] Tokens referenced correctly

### Block-First
- [ ] Core blocks used where possible
- [ ] No custom blocks
- [ ] No unnecessary PHP

### Accessibility
- [ ] Semantic HTML
- [ ] Visible focus states
- [ ] Color contrast meets AA
- [ ] No emoji as icons
- [ ] `prefers-reduced-motion` respected

### Performance
- [ ] No new external dependencies
- [ ] No inline JS
- [ ] No render-blocking assets
- [ ] Page weight within budget

### Security
- [ ] All output escaped
- [ ] No user input handling (plugin territory)
- [ ] No `eval()`, `exec()`, etc.

### WordPress Standards
- [ ] Coding standards followed
- [ ] Translation functions used with correct text domain
- [ ] `readme.txt` updated if user-facing change

### Documentation
- [ ] `CHANGELOG.md` updated
- [ ] Relevant `docs/` updated if architecture or design changed

---

## 15. Issue Reporting

When filing an issue:

```markdown
## Summary

<One sentence describing the issue.>

## Steps to Reproduce

1. <Step 1>
2. <Step 2>
3. <Step 3>

## Expected

<What should happen.>

## Actual

<What actually happens.>

## Environment

- WordPress version:
- PHP version:
- Active plugins:
- Theme version:
- Style variation:

## Screenshots / Screen Recordings

<If applicable.>
```

---

## 16. Release Process

For maintainers cutting a release:

1. Run the full `QA-CHECKLIST.md` audit.
2. Verify all tests pass.
3. Update `readme.txt` "Stable tag".
4. Update `style.css` `Version`.
5. Update `CHANGELOG.md` with release date.
6. Tag the release: `git tag v0.1.0`.
7. Build the release zip (excluding `.git`, `docs/`, `node_modules/`, `.DS_Store`).
8. (Once on WordPress.org) SVN commit to the theme repository.

Phase 1 does not produce a release zip — it produces the foundation. The release process is documented for Phase 7.

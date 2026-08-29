# Coding Standards — GoDevs Portfolio

The theme follows WordPress coding standards for PHP, JavaScript,
CSS, and HTML. This document is the canonical reference for the
theme; any deviation needs maintainer sign-off in the PR.

---

## 1. PHP

### WordPress PHP Coding Standards

The theme follows the [WordPress PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
The key rules:

- **Tags:** Always use full `<?php` opening tags. Never use short
  tags (`<?` or `<?=`).
- **Indentation:** Tabs (never spaces) for indentation. Tabs for
  alignment are also allowed where WordPress core uses them.
- **Braces:** Always use braces for `if`, `else`, `for`, `foreach`,
  `while`, even for single-line bodies.
- **Spacing:** Space after `if`, `for`, `foreach`, `while`,
  `switch`. No space inside parentheses around conditions.
  Space before and after `=` in assignments, no space around
  `=` in function arguments.
- **Strings:** Single quotes by default. Double quotes only when
  interpolation is needed.
- **Arrays:** Short array syntax `[]` is allowed (PHP 5.4+).
- **Names:** snake_case for functions and variables. PascalCase
  for class names. SCREAMING_SNAKE_CASE for constants.
- **Comparison:** Strict comparison operators (`===`, `!==`) by
  default. Loose comparison (`==`, `!=`) only when intentional
  and documented.
- **Yoda conditions:** Required for `if` statements with a
  variable on the left (`if ( 0 === $count )`).
- **File endings:** All PHP files end with a single newline. No
  closing `?>` tag.
- **Doc comments:** All functions have doc comments. The
  `@since`, `@param`, `@return` tags are required for public
  functions.

### Escaping
- All output of dynamic data is escaped (`esc_html`, `esc_attr`,
  `esc_url`, `wp_kses_post`).
- No `echo` of unescaped data.
- `printf` and `sprintf` are used for complex string composition.

### Sanitisation
- All user input is sanitised before use (`sanitize_text_field`,
  `sanitize_title`, `absint`, etc.).
- The theme does not accept user input in v0.1; this rule applies
  to future settings pages (Phase 7+).

### Hook names
- All theme hooks are prefixed `godevs_portfolio_*`.
- All theme functions are prefixed `godevs_portfolio_*`.

## 2. JavaScript

### WordPress JavaScript Coding Standards

The theme follows the [WordPress JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
The key rules:

- **Indentation:** Tabs for indentation. (WordPress core JS uses
  tabs; the theme follows.)
- **Strings:** Single quotes by default. Double quotes only when
  interpolation is needed.
- **Semicolons:** Always required.
- **Braces:** Opening brace on the same line as the function
  declaration / control statement. Always use braces for
  `if`, `else`, `for`, `while`, even for single-line bodies.
- **Spacing:** Space after `if`, `for`, `while`, `function`,
  `return`. Space around operators. No space inside parentheses.
- **Variable declaration:** `var` is forbidden (use `let` /
  `const`). Variables are declared at the top of the scope where
  they are used.
- **Strict mode:** `'use strict';` is required at the top of
  every script (or inside an IIFE).
- **Equality:** Strict equality operators (`===`, `!==`) only.
  Loose equality (`==`, `!=`) is forbidden.
- **IIFE:** Every script is wrapped in an IIFE to avoid global
  pollution.
- **No jQuery:** The theme does not use jQuery. Use vanilla JS.
- **No external dependencies:** No npm imports, no AMD / UMD /
  CommonJS, no transpile step. ES2018+ syntax is acceptable as
  long as it is supported by the WordPress minimum browser
  matrix.

### Modern JS features allowed
- `const` and `let` (no `var`).
- Arrow functions.
- Template literals.
- Destructuring.
- Spread / rest.
- `Promise` (where supported by the browser matrix).
- `async` / `await` (where supported).

### Forbidden
- `eval()`.
- `Function()` constructor.
- `with`.
- `arguments.callee`.
- `innerHTML` for user-controlled data (use `textContent` or
  `innerText`).
- Direct DOM manipulation that breaks accessibility (e.g.
  moving focus without an `aria-live` region for screen
  readers).
- jQuery.
- Lodash / Underscore (use native methods).
- Moment.js (use `Intl.DateTimeFormat`).

## 3. CSS

### WordPress CSS Coding Standards

The theme follows the [WordPress CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
The key rules:

- **Indentation:** Tabs for indentation.
- **Selectors:** Kebab-case for class names (e.g.
  `.godevs-hero`). BEM-ish naming for nested elements (e.g.
  `.godevs-hero__eyebrow`). No ID selectors for styling.
- **Properties:** Lowercase property names. Hyphenated
  property names (e.g. `font-weight`, not `fontWeight`).
- **Values:** No leading zero for values between -1 and 1
  (e.g. `0.5rem`, not `0.5rem` — wait, that's actually allowed
  in modern CSS; WordPress convention is to omit the leading
  zero, but the theme follows CSS spec and keeps the leading
  zero for readability of `0.5rem` and `0.75rem`).
- **Colours:** Lowercase hex (`#ffffff`, not `#FFFFFF`). Modern
  CSS functions like `rgba()`, `hsl()`, `oklch()` are allowed
  where the browser matrix supports them.
- **Units:** `rem` for font sizes and most spacing. `px` for
  borders and shadows. `vh` / `vw` for full-viewport sections.
  No `em` outside of contexts where it is semantically
  appropriate (e.g. `font-size` of a heading relative to its
  parent).
- **Vendor prefixes:** Not required (the theme relies on
  WordPress core's bundled normalisations). Autoprefixer is
  not used; the theme targets modern browsers only.
- **`!important`:** Forbidden outside `print.css`. Use
  specificity instead.
- **Comments:** Section comments with `/**` and `*/`. Inline
  comments with `/* */`.

### CSS in the theme
The theme intentionally ships minimal CSS:
- `theme.json` produces the bulk of the front-end CSS via the
  WordPress style engine.
- `assets/css/editor.css` is editor-only affordances (paragraph
  style previews, hero preview height).
- `assets/css/print.css` is print styles.

There is intentionally no `assets/css/style.css` body — the
WordPress theme header at the top of `style.css` is the only
content; the design system is in `theme.json`.

## 4. HTML (block markup)

### Block markup conventions
- Block comments on their own line:
  ```html
  <!-- wp:paragraph -->
  <p>…</p>
  <!-- /wp:paragraph -->
  ```
- Self-closing block comments end with `/-->`:
  ```html
  <!-- wp:post-title /-->
  ```
- Block attributes are JSON inside the opening comment, on a
  single line where possible:
  ```html
  <!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var(--wp--preset--font-family--heading)"}}} -->
  ```
- Use `var:preset|<type>|<slug>` syntax for preset references
  (e.g. `var:preset|color|primary`), which the style engine
  expands to CSS variables.
- Use `var(--wp--preset--<type>--<slug>)` syntax for direct CSS
  variable references in style values.
- Use `var(--wp--custom--<token>)` for custom tokens (radius,
  shadow, transition, container).

### Indentation
- Tabs for indentation in HTML / block markup. (The theme
  convention; WordPress core HTML files use tabs in block themes.)

### Accessibility
- All interactive elements have `:focus-visible` styles defined
  in `theme.json` or in CSS.
- All images have `alt` attributes (use `alt=""` for decorative
  images).
- All form inputs have associated `<label>` elements.
- All landmarks use semantic HTML (`header`, `main`, `footer`,
  `nav`, `section`, `article`).

## 5. Naming conventions

| Item | Convention | Example |
|------|------------|---------|
| Theme functions | `godevs_portfolio_*` snake_case | `godevs_portfolio_setup()` |
| Theme filters / actions | `godevs_portfolio_*` snake_case | `godevs_portfolio_body_class()` |
| Theme constants | `GODEVS_PORTFOLIO_*` SCREAMING_SNAKE | `GODEVS_PORTFOLIO_VERSION` |
| Theme action hooks | `godevs_portfolio_*` snake_case | `godevs_portfolio_core_active` |
| Pattern slugs | `godevs-portfolio/<name>` kebab-case | `godevs-portfolio/hero` |
| Template part slugs | kebab-case, single word where possible | `header`, `mobile-menu` |
| Style variation slugs | kebab-case, descriptive | `minimal`, `dark` |
| CSS classes (theme components) | `godevs-<component>` kebab-case | `godevs-hero` |
| CSS classes (pattern variants) | `godevs-<component>__<element>` BEM | `godevs-hero__eyebrow` (future) |
| CSS utility classes | `is-style-<name>` kebab-case | `is-style-muted` |
| JS variables | camelCase | `skipLink` |
| JS private variables | `_camelCase` (if needed) | `_onScroll` |

## 6. File naming

- PHP files: kebab-case.php (e.g. `functions.php`, `godevs-core.php`).
- JS files: kebab-case.js (e.g. `navigation.js`).
- CSS files: kebab-case.css (e.g. `editor.css`, `print.css`).
- HTML templates: kebab-case.html (e.g. `front-page.html`,
  `page-no-title.html`).
- Pattern files: kebab-case.php (e.g. `hero.php`,
  `portfolio-grid.php`).
- Style variations: kebab-case.json (e.g. `minimal.json`,
  `dark.json`).
- Font files: kebab-case.woff2 (e.g. `inter-400.woff2`).
- Documentation: UPPER-CASE-KEBAB.md (e.g. `PRD.md`,
  `ARCHITECTURE.md`).

## 7. Documentation comments

- PHP files start with a doc block describing the file's purpose.
- PHP functions have doc comments with `@since`, `@param`,
  `@return`.
- JS functions have JSDoc-style comments where the function is
  non-trivial.
- CSS sections have a `/** Section name */` block comment at the
  top.
- HTML / block markup has no inline comments beyond block
  comments.

## 8. Linting

The theme includes lint configuration for the following (planned
for v0.5+; not yet shipped):

- **PHP:** `phpcs` with `WordPress` ruleset. Run via
  `composer run lint`.
- **JS:** `eslint` with `@wordpress/eslint-plugin`. Run via
  `npm run lint`.
- **CSS:** `stylelint` with `@wordpress/stylelint-config`. Run
  via `npm run lint:css`.
- **JSON:** `theme.json` validated against the WP 6.5+ schema
  via `tests/test-theme-json-schema.php`.

Until the lint configuration ships, contributors should follow
the standards in this document manually. A PR that introduces a
lint failure will be flagged in review.

## 9. Git conventions

- **Commit messages:** Conventional Commits format (see
  `docs/AI-DEVELOPMENT-GUIDE.md` §18).
- **Branch names:** `<type>/<short-description>` (e.g.
  `feat/team-pattern`, `fix/header-focus-trap`).
- **PR titles:** Same as the commit message subject.
- **PR descriptions:** Follow the template in
  `docs/AI-DEVELOPMENT-GUIDE.md` §19.

## 10. Code review checklist

Before approving a PR, the reviewer confirms:

- [ ] PHP files pass `php -l` with no syntax errors.
- [ ] PHP files follow WordPress coding standards (manual
      check until `phpcs` is configured).
- [ ] JS files follow WordPress JS coding standards.
- [ ] CSS files follow WordPress CSS conventions.
- [ ] HTML / block markup follows block markup conventions.
- [ ] Naming follows the conventions in §5.
- [ ] File names follow the conventions in §6.
- [ ] All PHP functions have doc comments.
- [ ] All escaping and sanitisation is in place.
- [ ] No `eval()`, no obfuscated code, no remote requests.
- [ ] Commit message follows Conventional Commits.
- [ ] PR description follows the template.
- [ ] Tests in `/tests/` pass.

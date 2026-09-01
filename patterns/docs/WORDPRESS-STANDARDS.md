# GoDevs Portfolio — WordPress Coding Standards

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the WordPress coding standards, conventions, and best practices the theme follows. It is the reference for any PHP, JS, CSS, or HTML authored in the theme.

Compliance is verified via the WordPress Coding Standards (WPCS) PHP_CodeSniffer ruleset.

---

## 1. PHP Standards

### 1.1 WordPress Coding Standards

The theme follows [WordPress PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).

Key rules:

- **Indentation:** Tabs (not spaces)
- **Line endings:** `\n` (Unix)
- **File endings:** No trailing whitespace; files end with a newline
- **Opening tag:** `<?php` (no `<?` short tags)
- **Closing tag:** Omitted in pure PHP files (WordPress convention)
- **Strings:** Single quotes unless interpolation needed
- **Arrays:** Short array syntax `[]` (PHP 5.4+)
- **Naming:** `snake_case` for functions, variables, hooks
- **Class names:** `Capitalized_Words` (WordPress convention)

### 1.2 Text Domain

The text domain is `godevs-portfolio`. Used in every translatable string:

```php
esc_html__('Hello', 'godevs-portfolio')
```

The text domain is also declared in `style.css` header (`Text Domain: godevs-portfolio`) and `readme.txt`.

### 1.3 Escaping and Sanitization

All output is escaped. See `SECURITY.md` for the full reference.

```php
// HTML output
echo esc_html($text);

// Attribute output
echo esc_attr($value);

// URL output
echo esc_url($url);

// HTML with allowed tags
echo wp_kses_post($html);
```

### 1.4 Translation Functions

| Function | Use |
|---|---|
| `__($text, $domain)` | Returns translated string (no echo) — escape before output |
| `esc_html__($text, $domain)` | Returns + escapes for HTML output |
| `esc_attr__($text, $domain)` | Returns + escapes for attribute output |
| `_e($text, $domain)` | Echoes translated string — avoid, use `esc_html_e()` instead |
| `esc_html_e($text, $domain)` | Echoes + escapes for HTML output |
| `_x($text, $context, $domain)` | With context (e.g., "button label" vs "title") |
| `_n($singular, $plural, $count, $domain)` | Pluralization |
| `number_format_i18n($number)` | Locale-aware number formatting |

### 1.5 Hook Naming

Hooks are prefixed with the theme slug:

```php
do_action('godevs_portfolio_before_header');
apply_filters('godevs_portfolio_header_classes', $classes);
```

### 1.6 Function Naming

Theme functions are prefixed:

```php
function godevs_portfolio_enqueue_styles(): void { ... }
function godevs_portfolio_register_pattern_categories(): void { ... }
```

### 1.7 Type Declarations

PHP 7.4+ type declarations are used:

```php
function godevs_portfolio_enqueue_styles(): void {
    // ...
}

function godevs_portfolio_get_header_classes(): string {
    return 'site-header';
}
```

### 1.8 Forbidden PHP Patterns

- `global $variable` (use dependency injection or function args)
- `extract()` (security risk)
- `eval()` (security risk)
- `echo` of unescaped data
- `<?=` short echo tags
- `mysql_*` functions (deprecated; use `$wpdb`)
- Direct `$_GET` / `$_POST` access without sanitization

---

## 2. JavaScript Standards

### 2.1 WordPress JavaScript Coding Standards

The theme follows [WordPress JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).

### 2.2 Phase 1 Ships No JS

`assets/js/theme.js` is empty in Phase 1. When JS is added:

- Use `const` and `let` (no `var` except where needed for hoisting)
- Use arrow functions for short callbacks
- Use template literals for string interpolation
- Use strict equality (`===`)

### 2.3 DOM Ready

```javascript
document.addEventListener('DOMContentLoaded', () => {
    // initialize
});
```

### 2.4 No jQuery

Vanilla JS only. WordPress ships jQuery but the theme does not enqueue it as a dependency.

---

## 3. CSS Standards

### 3.1 CSS Writing Standards

- **Indentation:** Tabs (consistent with PHP)
- **Selectors:** One per line
- **Properties:** One per line
- **Property order:** Positioning → Box model → Typography → Visual → Animation
- **Vendor prefixes:** None (target modern browsers)
- **Units:** Use `rem` for typography and spacing; `px` only for hairline borders

### 3.2 Where CSS Lives

- **Design tokens:** `theme.json` (emitted as CSS custom properties by WordPress)
- **Block-level styles:** `theme.json` → `styles.blocks.*`
- **Element-level styles:** `theme.json` → `styles.elements.*`
- **Supplementary CSS:** `assets/css/theme.css` (minimal — see `PERFORMANCE.md`)

### 3.3 CSS Custom Properties

WordPress emits design tokens as CSS custom properties:

```css
:root {
    --wp--preset--color--primary: #0A0A0A;
    --wp--preset--font-size--large: 1.5rem;
    --wp--preset--spacing--50: 1.5rem;
    --wp--preset--font-family--display: "Inter", sans-serif;
}
```

In `assets/css/theme.css`, reference these:

```css
.site-header {
    border-bottom: 1px solid var(--wp--preset--color--border);
    padding-block: var(--wp--preset--spacing--40);
}
```

### 3.4 Forbidden CSS Patterns

- Hardcoded color hex values (`color: #2563EB`)
- Hardcoded pixel spacing (`padding: 16px`) — use `rem` or spacing presets
- `!important` (override specificity instead)
- Inline styles in templates
- `position: absolute` for layout (use flex/grid)
- `float` for layout (use flex/grid)
- `box-sizing` resets (handled by WordPress core)

---

## 4. HTML Standards

### 4.1 Templates Are Block Markup

Templates contain WordPress block markup — HTML comments wrapping standard HTML elements:

```html
<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Section Title</h2>
<!-- /wp:heading -->
```

### 4.2 Semantic HTML

Use semantic elements:

- `<header>` for site header (via `core/group` `tagName: "header"`)
- `<main>` for main content (via `core/group` `tagName: "main"`)
- `<footer>` for site footer (via `core/group` `tagName: "footer"`)
- `<nav>` for navigation (via `core/navigation`)
- `<section>` for major page sections (via `core/group` `tagName: "section"`)
- `<article>` for post containers (via `core/group` `tagName: "article"`)
- `<figure>` for images with captions (via `core/image` with caption)
- `<button>` for actions (via `core/button`)
- `<a>` for navigation (via `core/button` when used as link)

### 4.3 Attribute Quoting

All HTML attributes use double quotes:

```html
class="site-header"
```

### 4.4 Self-Closing Tags

Self-closing tags use the XHTML form (WordPress convention):

```html
<!-- wp:site-logo /-->
<img src="..." alt="..." />
```

### 4.5 Forbidden HTML Patterns

- Inline styles (`style="..."`)
- Inline JS (`onclick="..."`)
- Inline SVG with hardcoded colors (use `currentColor` or CSS custom properties)
- `<div>` where a semantic element exists (`<nav>`, `<main>`, etc.)
- `<br>` for spacing (use blocks or spacing presets)
- `&nbsp;` for spacing

---

## 5. JSON Standards (`theme.json` and `styles/*.json`)

### 5.1 Schema

All JSON files reference the WordPress schema:

```json
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 3,
    "settings": { ... },
    "styles": { ... }
}
```

### 5.2 Formatting

- 2-space indentation (different from PHP/CSS tabs — JSON convention)
- Trailing commas forbidden (strict JSON)
- Keys are `camelCase` (WordPress convention)
- Values are quoted strings where required

### 5.3 Validation

All JSON files are validated via:

```bash
python3 -m json.tool theme.json > /dev/null
```

See `QA-CHECKLIST.md` for the full validation step.

---

## 6. File Naming Standards

| Type | Convention | Example |
|---|---|---|
| PHP files (inc/) | lowercase, hyphenated | `block-patterns.php` |
| HTML templates | lowercase, hyphenated, matches WP template name | `front-page.html` |
| HTML template parts | lowercase, hyphenated, descriptive | `header-transparent.html` |
| Pattern PHP files | lowercase, hyphenated, descriptive | `split-profile.php` |
| CSS files | lowercase, hyphenated | `theme.css` |
| JS files | lowercase, hyphenated | `theme.js` |
| Style variation JSON | lowercase, single word | `editorial.json` |
| Image files | lowercase, hyphenated | `pattern-preview-hero.png` |

---

## 7. Hook Usage

### 7.1 Use WordPress Hooks, Don't Reinvent

```php
// Correct
add_action('wp_enqueue_scripts', 'godevs_portfolio_enqueue_styles');

// Wrong — running at theme inclusion time
godevs_portfolio_enqueue_styles();
```

### 7.2 Hook Priority

Default priority (10) for most hooks. Use a higher priority (20) when needing to run after another callback.

### 7.3 Hook Naming

Hooks use the theme slug prefix:

```php
do_action('godevs_portfolio_before_main_content');
```

---

## 8. Theme Supports

Block themes automatically enable most `add_theme_support()` calls. Phase 1 explicitly enables:

```php
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');
add_theme_support('responsive-embeds');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
```

Other supports (`post-thumbnails`, `custom-logo`, `custom-background`, etc.) are enabled by block theme defaults or by `theme.json` settings.

---

## 9. WordPress.org Theme Review Requirements

The theme targets the [WordPress.org Theme Review Team requirements](https://make.wordpress.org/themes/handbook/review/). Key requirements:

| Requirement | How |
|---|---|
| GPL v2 or later | `LICENSE` file ships GPL v2 text |
| No plugin territory | See `ARCHITECTURE.md` Section 8 |
| No hardcoded URLs | All URLs via `get_template_directory_uri()` |
| No `eval()`, `exec()`, etc. | See `SECURITY.md` |
| Proper escaping | See `SECURITY.md` |
| Proper sanitization | See `SECURITY.md` |
| Translation-ready | Text domain `godevs-portfolio` |
| `readme.txt` compliant | See `readme.txt` |
| `style.css` header compliant | See `style.css` |
| No errors on theme check | Run Theme Check plugin before release |
| Screenshot at 1200×900 | `screenshot.png` (Phase 1: placeholder) |

---

## 10. Forbidden Functionality (Plugin Territory)

The theme does not include:

- Custom post types or taxonomies
- Shortcodes
- Widgets (other than block widgets via `theme.json` `widgetAreas`)
- Settings pages
- Admin menus
- Customizer panels (beyond what Global Styles provides)
- Database writes
- Form processing
- Email sending
- External API calls
- Image manipulation
- Custom REST endpoints
- Custom AJAX endpoints
- User management
- Role management
- Capability management

All of the above belong in plugins.

---

## 11. Versioning

The theme follows [Semantic Versioning](https://semver.org/):

- **MAJOR** (e.g., 1.0.0 → 2.0.0): Breaking changes (e.g., removing patterns, changing color slugs)
- **MINOR** (e.g., 1.0.0 → 1.1.0): New features (new patterns, new templates, new variations)
- **PATCH** (e.g., 1.0.0 → 1.0.1): Bug fixes

Version is declared in:
- `style.css` header (`Version: 0.1.0`)
- `readme.txt` (`Stable tag: 0.1.0` — once on WordPress.org)
- `CHANGELOG.md`

---

## 12. Code Quality Verification

Before merging any change:

```bash
# PHP lint
php -l functions.php
php -l inc/*.php
php -l patterns/**/*.php

# JSON validation
python3 -m json.tool theme.json > /dev/null
python3 -m json.tool styles/*.json > /dev/null

# (If WPCS installed) WordPress coding standards
vendor/bin/phpcs --standard=WordPress functions.php inc/ patterns/
```

See `QA-CHECKLIST.md` for the full release verification workflow.

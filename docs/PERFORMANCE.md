# GoDevs Portfolio — Performance

**Document version:** 0.1.0
**Phase:** 1 — Foundation

Performance is a feature. A portfolio theme must load fast on a fresh install with no plugins. This document defines the performance baseline, the budget, the strategies used to meet it, and how performance is measured.

The target: **Lighthouse Performance ≥ 90** on a default homepage with no plugins, on a typical shared hosting environment.

---

## 1. Performance Principles

1. **Ship less.** The fastest byte is the one not shipped.
2. **Defer what you can.** Critical CSS is inlined by WordPress; non-critical assets are deferred.
3. **No render-blocking JS.** JavaScript is loaded with `defer` or skipped entirely.
4. **No external font CDN.** Fonts are system fonts in Phase 1; self-hosted fonts are a future option, evaluated against performance impact.
5. **No icon library.** No Font Awesome, no Material Icons. SVGs are inline where needed.
6. **No jQuery.** WordPress ships it for legacy code; the theme does not enqueue it.
7. **No CSS framework.** No Bootstrap, no Tailwind. WordPress emits the necessary CSS from `theme.json`.
8. **Patterns are static HTML.** They have zero runtime cost when not inserted.
9. **Lazy by default.** Images use `loading="lazy"` (core block default).
10. **Responsive images by default.** `core/image` emits `srcset` and `sizes` automatically.

---

## 2. Performance Budget

### 2.1 Asset Budget

| Asset | Budget | Notes |
|---|---|---|
| `style.css` | ≤ 50 KB uncompressed | Most rules are emitted by WordPress from `theme.json` |
| `assets/css/theme.css` | ≤ 20 KB uncompressed | Supplementary CSS only |
| `assets/js/theme.js` | ≤ 5 KB uncompressed | If shipped at all (Phase 1: empty file) |
| `theme.json` | ≤ 30 KB | Design tokens + block styles |
| `screenshot.png` | ≤ 300 KB | 1200×900 PNG |
| Total theme folder (excluding screenshot) | ≤ 2 MB | Includes docs (not user-facing on server) |

### 2.2 Runtime Budget

| Metric | Target | How |
|---|---|---|
| Page weight (HTML + CSS + JS + fonts) | ≤ 100 KB on a default homepage | Minimal CSS, no JS, system fonts |
| Number of HTTP requests | ≤ 8 on a default homepage | 1 CSS file, 1 HTML page, rest are images |
| Time to First Byte | ≤ 600 ms | Server-side rendering via block templates — no PHP template logic |
| Largest Contentful Paint | ≤ 2.5 s | Single hero image, optimized |
| Cumulative Layout Shift | ≤ 0.1 | All images have explicit dimensions or aspect ratios |

### 2.3 Pattern Library Cost

The pattern library is **infinite budget** — patterns ship as static HTML files in `patterns/` and are loaded only when inserted into a post/page via the Inserter. They contribute zero bytes to the rendered page when not used.

This means the long-term goal of 500+ patterns does not degrade performance. A user's site loads only the patterns they have inserted.

---

## 3. CSS Strategy

### 3.1 Where CSS Comes From

Block themes emit CSS from three sources:

1. **WordPress core** — block styles, global styles, editor styles. Loaded automatically.
2. **`theme.json`** — design tokens and block-level styles. Emitted as CSS custom properties and rules by WordPress core.
3. **`assets/css/theme.css`** — supplementary CSS for things `theme.json` cannot express.

### 3.2 What Goes in `theme.css`

Phase 1 `assets/css/theme.css` contains:

- `:focus-visible` outline (global)
- `prefers-reduced-motion` overrides
- `.screen-reader-text` extensions (if needed beyond WordPress core's version)
- Block style class CSS for custom block styles registered in `inc/block-styles.php`
- Minor typography refinements that `theme.json` cannot express

Total target: under 5 KB.

### 3.3 What Does NOT Go in `theme.css`

- Layout (handled by block layout CSS)
- Colors (handled by `theme.json` presets)
- Font sizes (handled by `theme.json` presets)
- Spacing (handled by `theme.json` presets)
- Border radius (handled by block attributes + `theme.json`)

### 3.4 Enqueuing

```php
function godevs_portfolio_enqueue_styles(): void {
    wp_enqueue_style(
        'godevs-portfolio-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        array(),
        '0.1.0'
    );
}
add_action('wp_enqueue_scripts', 'godevs_portfolio_enqueue_styles');
```

The file is enqueued with no dependencies (WordPress core CSS handles block styles). Version is bumped on every release.

### 3.5 Editor Styles

Editor styles ensure the Site Editor preview matches the front-end. WordPress automatically loads `theme.json` styles in the editor. `assets/css/theme.css` is also loaded in the editor via:

```php
add_editor_style('assets/css/theme.css');
```

This is in `functions.php`.

---

## 4. JavaScript Strategy

### 4.1 No JavaScript in Phase 1

Phase 1 ships **no enqueued JavaScript**. The `assets/js/theme.js` file is empty (a placeholder for future progressive enhancement).

### 4.2 When JS Is Needed

JavaScript is added only when:

1. A pattern or template needs progressive enhancement that cannot be expressed declaratively
2. The enhancement degrades gracefully without JS (i.e., the page works without it)
3. The file is under 5 KB

### 4.3 Enqueue Rules

If JS is added in the future:

```php
function godevs_portfolio_enqueue_scripts(): void {
    wp_enqueue_script(
        'godevs-portfolio-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        '0.1.0',
        array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )
    );
}
add_action('wp_enqueue_scripts', 'godevs_portfolio_enqueue_scripts');
```

- Loaded in the footer
- Deferred (not render-blocking)
- No jQuery dependency
- No inline JavaScript

### 4.4 Forbidden JS Patterns

- Inline `onclick=`, `onload=`, etc. on HTML elements
- `document.write()`
- jQuery selectors when vanilla JS works
- Polyfills (rely on WordPress's browser support target instead)

---

## 5. Font Strategy

### 5.1 System Fonts (Phase 1)

Phase 1 uses system font stacks:

```css
--wp--preset--font-family--display: "Inter", "SF Pro Display", "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", Arial, sans-serif;
--wp--preset--font-family--body: "Inter", "SF Pro Text", "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", Arial, sans-serif;
```

System fonts have **zero network cost**. They are pre-installed on the user's device.

### 5.2 Self-Hosted Fonts (Future)

If self-hosted fonts are added in Phase 2:

- Bundled in `assets/fonts/` (not loaded from CDN)
- Variable font format preferred (one file, multiple weights)
- Loaded via `@font-face` in `theme.css`
- Preload critical weights only
- Use `font-display: swap` for non-critical weights

The decision to add self-hosted fonts is made by measuring the performance impact. If the impact exceeds 100ms LCP, the change is reverted.

### 5.3 Forbidden Font Patterns

- Google Fonts CDN
- Adobe Fonts CDN
- Any font loaded via `<link>` to an external service
- Icon fonts (Font Awesome, Material Icons, etc.)

---

## 6. Image Strategy

### 6.1 Native Lazy Loading

`core/image` adds `loading="lazy"` by default. The theme does not override this. Above-the-fold hero images can opt out by setting `loading="eager"` — but Phase 1 patterns do not.

### 6.2 Responsive Images

`core/image` automatically generates `srcset` and `sizes` attributes from the uploaded image's generated sizes. The theme does not interfere with this.

### 6.3 Aspect Ratios

Portfolio grid images use explicit `aspectRatio` to prevent layout shift:

```json
{
    "aspectRatio": "4/3"
}
```

This reserves space for the image before it loads, eliminating CLS.

### 6.4 Default Image Sizes

WordPress generates default image sizes (thumbnail, medium, large, full). The theme does not register additional sizes in Phase 1. If specific aspect ratios are needed for portfolio layouts, they will be added in Phase 2 with `add_image_size()`.

### 6.5 Featured Image in Patterns

Patterns that include images use `core/image` with a placeholder `width` and `height`. WordPress replaces these with the actual image dimensions when the user inserts a real image.

---

## 7. Template Performance

### 7.1 Block Templates Are Fast

Block templates are parsed by WordPress into a flat list of blocks. WordPress renders each block by calling its `render_callback`. There is no PHP template hierarchy resolution, no `get_header()` / `get_footer()` chain, no `WP_Query` overhead beyond what `core/query` performs.

### 7.2 Query Loop Performance

`core/query` uses WordPress's main query by default. Templates that need a custom query use the `queryId` attribute to keep queries cacheable.

Patterns using `core/query` set `perPage` to a reasonable number (6–12). No infinite scroll. No "load more" AJAX — that is plugin territory.

### 7.3 No PHP Logic in Templates

Templates are pure HTML block markup. No `<?php ?>` tags. No `if` statements. Conditional rendering happens via `core/query`'s `noResults` block.

---

## 8. Server-Side Caching Compatibility

The theme is compatible with:

- **Page caching** (WP Super Cache, W3 Total Cache, WP Rocket) — no per-request dynamic content in templates
- **Object caching** (Redis, Memcached) — WordPress core handles cache keys
- **CDN** (Cloudflare, BunnyCDN) — all assets have stable URLs with version query strings

### 8.1 Cache-Friendly Patterns

Patterns do not embed:
- Time-based content (e.g., "It is currently 3:00 PM")
- User-specific content (e.g., "Welcome back, John")
- Random content

These belong in plugins or shortcodes (plugin territory).

---

## 9. Performance Measurement

### 9.1 Lighthouse Audit

Run Lighthouse against:
- A fresh install with no plugins, on a default homepage
- A page with the front-page template
- A single post with `single.html`
- A 404 page

Target: Performance ≥ 90 on all four. Accessibility ≥ 95. Best Practices ≥ 95. SEO ≥ 90.

### 9.2 Page Weight Audit

Use Chrome DevTools → Network tab to verify:
- Total page weight on default homepage
- Number of HTTP requests
- Largest asset (should be a single image, not CSS/JS)

### 9.3 Real-User Monitoring (RUM)

Phase 1 does not ship RUM. If added in Phase 2, it will be via a plugin (not bundled in the theme).

---

## 10. Performance Anti-Patterns (Forbidden)

| Anti-pattern | Why forbidden |
|---|---|
| Bundled icon library | Massive font file or SVG sprite shipped to every page |
| Bundled CSS framework | Bloated CSS that is mostly unused |
| Google Fonts CDN | External request, privacy concern, render-blocking |
| jQuery dependency | WordPress ships jQuery but adding it where vanilla JS works is unnecessary |
| Inline JavaScript | Hard to cache, hard to debug |
| Inline styles in patterns | Bypasses WordPress CSS emission pipeline |
| `setTimeout` / `setInterval` in theme JS | Generally indicates a design problem — prefer CSS transitions |
| Render-blocking CSS from external sources | All CSS should be local or emitted by WordPress |
| Preconnect / preload for non-critical assets | Wastes early connection budget |
| Custom image sizes without `add_image_size` regen | Causes broken images until regen |

---

## 11. Performance Regression Testing

Before every release:

1. Activate the theme on a fresh WordPress install
2. Create one post with a featured image
3. Visit the homepage (latest posts)
4. Run Lighthouse audit
5. Verify Performance ≥ 90
6. Verify page weight ≤ 100 KB
7. Verify HTTP request count ≤ 8

If any threshold regresses, identify the cause before release.

---

## 12. Phase 2 Performance Plans

- Add self-hosted Inter variable font (if measured impact is acceptable)
- Add `fetchpriority="high"` to above-the-fold hero image
- Add explicit `width` / `height` to all pattern images
- Audit pattern image dimensions to avoid CLS
- Add Lighthouse CI to release process

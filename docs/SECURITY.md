# GoDevs Portfolio — Security

**Document version:** 0.1.0
**Phase:** 1 — Foundation

Security is a feature. This document defines the security baseline for the theme: what is required, how it is achieved, and what is forbidden.

The theme is **presentation-only** — it processes no user input, stores no data, and exposes no admin UI. This dramatically reduces the attack surface compared to plugin-heavy themes.

---

## 1. Security Principles

1. **Escape at output, sanitize at input.** Never trust data — even data from WordPress core.
2. **No user input in templates.** Templates render content via `core/post-content`, `core/post-title`, etc. — these handle escaping internally.
3. **No SQL in the theme.** All queries via `core/query` (handled by WordPress core).
4. **No AJAX endpoints in the theme.** AJAX/REST endpoints are plugin territory.
5. **No admin UI in the theme.** Configuration is via Global Styles in the Site Editor.
6. **No file operations.** The theme does not read or write files at runtime.
7. **No remote requests.** The theme does not call external APIs.
8. **No inline JavaScript.** All JS is in `assets/js/` and enqueued.
9. **No eval(), no exec(), no shell commands.**
10. **All nonces verified where applicable.** (Phase 1 has no nonce-requiring features.)

---

## 2. What the Theme Does NOT Do

| Capability | Reason | Where it belongs |
|---|---|---|
| Form submission handling | Storing user input is plugin territory | Companion plugin (e.g., Contact Form 7) |
| Custom post type CRUD | Data management is plugin territory | Companion plugin |
| Image upload handling | WordPress core handles media uploads | WordPress core |
| User authentication | WordPress core handles login/registration | WordPress core |
| AJAX/REST endpoints | Plugin territory | Companion plugin |
| Email sending | Plugin territory | Companion plugin |
| External API calls | Plugin territory | Companion plugin |
| File reading/writing | Plugin territory | Companion plugin |
| Database writes | Plugin territory | Companion plugin |

The theme is responsible for **rendering** content. It is not responsible for **managing** content.

---

## 3. Output Escaping

### 3.1 Translation Functions

All translatable strings use escaping-aware translation functions:

```php
// Text that will be output as HTML
esc_html__('Read more', 'godevs-portfolio')

// Text that will be an attribute value
esc_attr__('Search', 'godevs-portfolio')

// Text that contains allowed HTML (links, etc.)
wp_kses(__('By continuing, you agree to our <a href="/terms">Terms</a>.', 'godevs-portfolio'), array('a' => array('href' => array())))

// URL output
esc_url__('https://example.com', 'godevs-portfolio') // for hardcoded URLs
esc_url($some_url) // for dynamic URLs
```

### 3.2 Forbidden Translation Patterns

```php
// WRONG — unescaped output
echo __('Hello', 'godevs-portfolio');

// WRONG — wrong text domain
echo esc_html__('Hello', 'wrong-domain');

// WRONG — printf without escaping arguments
printf(__('Hello %s', 'godevs-portfolio'), $user_name);

// RIGHT
printf(esc_html__('Hello %s', 'godevs-portfolio'), esc_html($user_name));
```

### 3.3 URLs

Any URL output uses `esc_url()`:

```php
echo '<a href="' . esc_url($url) . '">' . esc_html($label) . '</a>';
```

In Phase 1, the theme has minimal PHP that outputs URLs — most URLs are in block markup (HTML), not in PHP.

### 3.4 Allowed HTML

When outputting user-provided HTML (rare in Phase 1 — the theme does not store user input), use `wp_kses_post()`:

```php
echo wp_kses_post($user_provided_html);
```

This allows only a safe subset of HTML tags and attributes.

---

## 4. Input Sanitization

### 4.1 Phase 1 Has No Input

The theme does not accept user input. There are no forms, no settings pages, no AJAX endpoints.

### 4.2 Future Input Handling

If a future phase adds input handling (e.g., theme settings), use:

```php
$text   = sanitize_text_field($_POST['text'] ?? '');
$url    = esc_url_raw($_POST['url'] ?? '');
$email  = sanitize_email($_POST['email'] ?? '');
$int    = absint($_POST['int'] ?? 0);
$array  = array_map('sanitize_text_field', $_POST['array'] ?? array());
```

### 4.3 Nonces

Any form submission or state-changing action must include a nonce:

```php
// In the form
wp_nonce_field('godevs_portfolio_action', 'godevs_portfolio_nonce');

// On submission
if (!wp_verify_nonce($_POST['godevs_portfolio_nonce'] ?? '', 'godevs_portfolio_action')) {
    wp_die(esc_html__('Invalid request.', 'godevs-portfolio'));
}
```

### 4.4 Capability Checks

Any privileged action must check capabilities:

```php
if (!current_user_can('manage_options')) {
    wp_die(esc_html__('You do not have permission to do this.', 'godevs-portfolio'));
}
```

Phase 1 has no capability-gated functionality.

---

## 5. Database Access

### 5.1 No Direct Database Access

The theme does not call `$wpdb` directly. All database access is via WordPress core APIs (`WP_Query`, `get_posts()`, etc.) — and in Phase 1, even these are not used directly. All post retrieval is via `core/query` block.

### 5.2 No Custom Tables

The theme does not create custom database tables. Companion plugins may.

### 5.3 No Schema Modification

The theme does not modify WordPress database schema on activation or deactivation.

---

## 6. File Operations

### 6.1 No File Reads

The theme does not read files at runtime (no `file_get_contents()`, no `fopen()`). Static assets (CSS, JS, images) are enqueued via WordPress APIs which handle file URLs.

### 6.2 No File Writes

The theme does not write files. No `file_put_contents()`, no logging to disk.

### 6.3 No Include of User Files

The theme does not `include` or `require` files based on user input.

---

## 7. Remote Requests

### 7.1 No `wp_remote_get()`, `wp_remote_post()`, `curl`, etc.

The theme makes no external HTTP requests. All assets are bundled.

### 7.2 No Phone-Home Behavior

The theme does not:
- Phone home for updates (handled by WordPress.org repository)
- Phone home for telemetry
- Phone home for license verification
- Phone home for feature flags

---

## 8. JavaScript Security

### 8.1 Inline JS Forbidden

No `onclick`, `onload`, `onsubmit`, etc. in HTML. All JS in external files.

### 8.2 No `eval()`, No `Function()`

These are forbidden in theme JS.

### 8.3 DOM Manipulation

Theme JS (if any) uses standard DOM APIs. No `document.write()`. No `innerHTML` with user-provided content.

### 8.4 Event Listeners

Event listeners are attached via `addEventListener()` in external files, not via inline attributes.

---

## 9. CSP Compatibility

The theme is compatible with strict Content-Security-Policy headers:

- No inline scripts → `script-src 'self'` works
- No inline styles in templates → `style-src 'self'` works (WordPress core may emit some inline styles via `wp_add_inline_style` — these require `'unsafe-inline'` or nonces, which is a WordPress core concern)
- No external font CDN → `font-src 'self'` works
- No external image CDN → `img-src 'self'` works (unless users upload remote images)
- No `data:` URIs in CSS except for tiny SVG icons (kept minimal)

---

## 10. Common Vulnerabilities and Mitigations

### 10.1 XSS (Cross-Site Scripting)

**Mitigation:** All output is escaped via `esc_html()`, `esc_attr()`, `esc_url()`, or `wp_kses_post()`. Templates use core blocks which handle escaping internally.

### 10.2 CSRF (Cross-Site Request Forgery)

**Mitigation:** Phase 1 has no state-changing actions. Future actions use nonces.

### 10.3 SQL Injection

**Mitigation:** The theme makes no direct SQL queries. All queries via `WP_Query` and `core/query` block, which use prepared statements internally.

### 10.4 File Inclusion

**Mitigation:** No `include` / `require` based on user input.

### 10.5 SSRF (Server-Side Request Forgery)

**Mitigation:** No remote requests.

### 10.6 Information Disclosure

**Mitigation:** No `display_errors`, no `error_reporting` overrides, no `var_dump()` / `print_r()` in production code.

### 10.7 Open Redirect

**Mitigation:** No redirect functions based on user input.

---

## 11. Asset URLs

### 11.1 Use `get_template_directory_uri()`

```php
wp_enqueue_style(
    'godevs-portfolio-theme',
    get_template_directory_uri() . '/assets/css/theme.css',
    array(),
    '0.1.0'
);
```

Never hardcode URLs like `http://example.com/wp-content/themes/godevs-portfolio/...`. Always use `get_template_directory_uri()` (parent theme) or `get_stylesheet_directory_uri()` (child theme aware).

### 11.2 No Protocol-Relative URLs

Use `https://` (WordPress core handles protocol). Avoid `//` protocol-relative URLs — they cause issues with file:// testing.

---

## 12. Theme Activation and Deactivation

### 12.1 No Activation Hook Side Effects

The theme does not register `after_switch_theme` actions that modify the database, create posts, or activate plugins.

### 12.2 No Deactivation Cleanup

The theme does not delete options, posts, or users on deactivation. User content persists across theme switches.

---

## 13. Third-Party Dependencies

Phase 1 has **zero third-party dependencies**. No Composer packages, no npm packages in the user-facing theme (build tooling may use npm but only at development time).

If a future phase adds a dependency:

1. The dependency must be GPL-compatible
2. The dependency must be audited for security
3. The dependency must be vendored into the theme (no `composer install` / `npm install` on the production server)
4. The dependency must add no external HTTP requests
5. The dependency must add no inline JS

---

## 14. Security Audit Checklist

Before every release:

### PHP
- [ ] All output uses escaping functions
- [ ] All translations use escaping-aware functions (`esc_html__`, `esc_attr__`, etc.)
- [ ] No `echo` of untrusted data
- [ ] No `eval()`, `exec()`, `system()`, `passthru()`
- [ ] No `file_get_contents()`, `file_put_contents()` with user input
- [ ] No `include` / `require` with user input
- [ ] No `$wpdb` direct queries
- [ ] No `unserialize()` with user input
- [ ] No `preg_replace()` with `/e` modifier (deprecated and dangerous)

### JavaScript
- [ ] No inline JS in HTML
- [ ] No `eval()`, `Function()`
- [ ] No `document.write()`
- [ ] No `innerHTML` with user-provided content

### Templates
- [ ] No `<?php ?>` tags in HTML templates
- [ ] No inline styles in templates
- [ ] No inline scripts in templates

### Assets
- [ ] All assets enqueued via `wp_enqueue_*`
- [ ] All asset URLs via `get_template_directory_uri()`
- [ ] Version strings on all enqueues

### Dependencies
- [ ] Zero third-party PHP dependencies
- [ ] Zero third-party JS dependencies in production
- [ ] All bundled assets GPL-compatible

### Configuration
- [ ] No theme options stored in database (Global Styles only)
- [ ] No admin menu pages
- [ ] No customizer panels
- [ ] No `add_menu_page()`, `add_submenu_page()`

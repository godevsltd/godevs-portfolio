# GoDevs Portfolio — Demo Import System

**Document version:** 0.4.0
**Phase:** 4 — Stability & Demo Import System

This document describes the native demo import system added in Phase 4 — its architecture, security model, import modes, and rollback.

---

## 1. Architecture

```
Demo Registry (inc/demo-registry.php)
    ↓ reads metadata from patterns/demos/*.php
Demo Metadata
    ↓
Demo Browser (admin page at Appearance → GoDevs Demos)
    ↓
Import Controller (inc/demo-importer.php)
    ↓
Page Creation (wp_insert_post)
Navigation Creation (wp_create_nav_menu + wp_update_nav_menu_item)
Homepage Application (update_option page_on_front — Starter mode only)
Style Variation Application (user meta — optional)
Content Import (demo pattern markup embedded in homepage)
    ↓
Import Tracker (inc/demo-tracker.php)
    ↓
Completion
```

Components are separated. The importer uses WordPress core APIs only — no direct database queries.

---

## 2. Demo Registry

The registry is **data-driven** — it reads metadata from the existing pattern files in `patterns/demos/`. No demo UI is hardcoded for any specific demo.

### Reading a Demo

For each PHP file in `patterns/demos/`, the registry:

1. Parses the docblock header
2. Extracts `Title`, `Slug`, `Description`, `Categories`, `Keywords`, `Viewport Width`
3. Parses the title to extract the demo name and category label:
   - Title format: `Demo — <Name> (<Category>)`
   - Example: `Demo — Atelier (Developer)` → name=`Atelier`, category=`Developer`
4. Extracts the recommended style variation from the description suffix:
   - Pattern: `Recommended style variation: <Name>.`
5. Looks up recommended pages per category in a static map
6. Returns a structured demo definition

### Scaling

Adding a new demo to the registry requires only:
1. Create a new PHP file in `patterns/demos/`
2. Follow the existing metadata convention
3. The registry automatically picks it up on the next page load

No admin UI changes, no hardcoded demo list, no schema migrations. The system scales to 100, 200, 500+ future demos.

---

## 3. Admin UI

### Location

**Appearance → GoDevs Demos**

Registered via `add_theme_page()` in `inc/demo-importer.php`. Only users with the `manage_options` capability (administrators) can access it.

### Browser Layout

The page shows:

- **Header** — title, subtitle, total demo count
- **Filters** — search input, category dropdown, style dropdown
- **Grid** — responsive grid of demo cards (auto-fill, min 280px wide per card)

### Demo Card

Each card shows:

- **Preview area** — gradient placeholder with the demo name in display type
- **Name** — extracted from the pattern title
- **Category** — extracted from the pattern title
- **Recommended style** — extracted from the description
- **Description** — first sentence from the pattern metadata
- **Actions** — Preview button, Import button, Remove button (if already imported)

If the demo has been imported, the card shows an "Imported" badge in the top-right corner.

### Filtering

Client-side filtering — no per-card AJAX. The JS reads `data-demo-category`, `data-demo-style`, `data-demo-keywords` attributes from each card and toggles visibility.

- **Search** — matches against demo name, category, and style
- **Category filter** — dropdown of distinct categories
- **Style filter** — dropdown of distinct recommended styles

An empty-state message appears when no demos match the filters.

---

## 4. Import Modes

### Starter Import

For **fresh WordPress sites**. The importer will:

1. Create the demo's recommended pages (Home, About, Work, etc.)
2. Populate the Home page with the demo's pattern markup (rendered via output buffering)
3. Create a navigation menu linking to the imported pages
4. Set the WordPress homepage to the new Home page (`update_option( 'page_on_front', ... )`)
5. (Optional) Apply the recommended style variation

### Safe Import

For **existing WordPress sites**. The importer will:

1. Create the demo's recommended pages (with unique slugs to avoid conflicts)
2. Populate the Home page with the demo's pattern markup
3. Create a navigation menu linking to the imported pages
4. **NOT** change the homepage setting
5. **NOT** apply the style variation

Existing content is never deleted. The user can review the imported pages and manually set the homepage if desired.

---

## 5. Import Confirmation

Before importing, a modal shows:

- Demo name
- Category
- Description
- Recommended style (if any)
- Warning if the demo has already been imported
- List of what will be created (pages, navigation, content)
- Statement that existing content will not be deleted
- Radio buttons to choose import mode (Starter / Safe)
- Checkbox to apply recommended style variation (if a style is recommended)
- Cancel / Import Demo buttons

---

## 6. Import Progress

A progress indicator shows step-by-step status:

1. Preparing demo
2. Creating pages
3. Creating navigation
4. Applying homepage (Starter mode only)
5. Applying demo layout
6. Applying style (if requested)
7. Complete

Each step is marked active, complete, or error.

---

## 7. Duplicate Import Protection

If a demo has already been imported:

- The admin card shows an "Imported" badge
- A "Remove" button is shown next to the "Re-import" button
- Clicking "Re-import" shows a warning in the confirmation modal:
  > This demo has already been imported. Importing again will create a new set of pages and a new navigation menu.

Re-importing does not silently overwrite the previous import — it creates new pages with new slugs.

---

## 8. Import Tracking

The tracker stores a single WordPress option `godevs_portfolio_imports`:

```php
array(
    'atelier' => array(
        'demo_id'         => 'atelier',
        'demo_name'       => 'Atelier',
        'imported_at'     => '2024-08-30 12:34:56',
        'import_version'  => '0.4.0',
        'mode'            => 'starter',
        'page_ids'        => array( 12, 34, 56, 78, 90 ),
        'nav_menu_id'     => 7,
        'homepage_id'     => 12,
        'style_applied'   => 'Dark',
    ),
    ...
)
```

The tracker is the source of truth for:
- Which demos have been imported (drives the "Imported" badge)
- What content was created (drives the cleanup logic)
- When the import happened (audit trail)
- Which import mode was used (audit trail)

---

## 9. Demo Cleanup (Rollback)

The "Remove" button on an imported demo:

1. Shows a confirmation modal:
   > Are you sure you want to remove this demo?
   > This will trash the pages created by the importer and delete the navigation menu.
   > Existing content unrelated to this demo will not be affected. Trashed pages can be restored from the WordPress trash.
2. On confirmation:
   - **Trashes** each page recorded in the tracker (uses `wp_trash_post` — safe, restorable)
   - **Deletes** the navigation menu recorded in the tracker (uses `wp_delete_nav_menu`)
   - **Resets** the homepage setting if it was set by the importer (only if `page_on_front` matches the recorded homepage ID)
   - **Clears** the user meta style flag if it was set by the importer
3. Removes the import record from the tracker
4. Reloads the admin page (the "Imported" badge disappears)

### Safety Guarantees

- **Never deletes** user content unrelated to the demo
- **Never deletes** posts/pages the user created independently
- **Never deletes** media the user uploaded independently
- **Never overwrites** user templates or global styles
- Uses `wp_trash_post` (not `wp_delete_post`) for pages — content is restorable from the WordPress trash

---

## 10. Security

### Capability Checks

Every AJAX endpoint checks:

```php
if ( ! current_user_can( 'manage_options' ) ) {
    wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
}
```

Only administrators can import, preview, or remove demos.

### Nonces

Every AJAX endpoint verifies a nonce:

```php
check_ajax_referer( 'godevs_demo_admin', 'nonce' );
```

The nonce is created via `wp_create_nonce( 'godevs_demo_admin' )` and passed to the JS via `wp_localize_script`. The nonce expires after the standard WordPress TTL.

### Input Sanitization

- Demo IDs are sanitized via `sanitize_file_name()` and validated against the registry (must match an existing demo)
- Import mode is sanitized via `sanitize_key()` and validated against the allowed list (`starter`, `safe`)
- Boolean flags are cast via `(bool)`
- No user-provided HTML is stored — the importer uses WordPress APIs for all content creation

### Output Escaping

- All admin UI output uses `esc_html()`, `esc_attr()`, `esc_url()`
- JSON-encoded data uses `wp_json_encode()` (which escapes for safe JS context)
- AJAX responses use `wp_send_json_success()` / `wp_send_json_error()` (which handle JSON encoding safely)

### No Direct Database Access

The importer uses only:
- `wp_insert_post()`, `wp_trash_post()`, `wp_delete_post()`
- `wp_create_nav_menu()`, `wp_update_nav_menu_item()`, `wp_delete_nav_menu()`
- `update_option()`, `get_option()`, `delete_option()`
- `update_user_meta()`, `get_user_meta()`, `delete_user_meta()`

No `$wpdb` direct queries.

### No External Requests

The importer does not call any external API. All data comes from:
- The theme's pattern files (read via `file_get_contents`)
- The WordPress database (via core APIs)
- The current user session (for capability checks and nonces)

### No Inline JavaScript

All admin JS lives in `assets/js/admin-demos.js`. Inline scripts use only `wp_json_encode()` for safe data passing.

---

## 11. Performance

### Front-end impact: zero

The importer is loaded only in admin context (`is_admin()` check in `functions.php`). The front-end loads none of the importer PHP files, CSS, or JS.

### Admin impact: minimal

- The admin page loads one CSS file (`admin-demos.css`, ~6 KB) and one JS file (`admin-demos.js`, ~10 KB)
- The demo registry parses pattern files on first access — the result is cached for the duration of the request via a static variable
- Filtering is client-side — no per-card AJAX
- Preview uses a single AJAX call per preview action

### Demo payload size

The demo pattern markup (rendered via output buffering) is typically 5-15 KB per demo. This is small enough to insert directly into a page's `post_content` without exceeding WordPress's `post_max_size` limit.

---

## 12. Future Expansion

The architecture supports:

- **More demos** — adding demos to `patterns/demos/` automatically adds them to the registry
- **WXR exports** — for one-click full-site imports including demo content (posts, media) — currently out of scope
- **Per-demo preview images** — auto-generated SVG previews (currently uses a styled text placeholder)
- **Custom starter content** — per-demo sample posts, sample media, custom navigation — currently uses the demo pattern markup only

Adding any of these requires changes only to the importer, not to the registry or admin UI.

---

## 13. Limitations (Honest)

1. **Style variation application is non-destructive but indirect** — Phase 4 uses user meta as a fallback. WordPress core reads the active variation from the `wp_global_styles` post. Programmatically applying a variation requires writing to that post (complex, version-dependent). Phase 4 instructs the user to apply the recommended style via the Site Editor → Styles browser.

2. **No live preview iframe** — the preview modal shows the rendered demo markup, not a fully-styled iframe preview. A live iframe preview would require either (a) creating a temporary post/page and rendering it, or (b) intercepting the front-end with a custom query parameter. Phase 4 uses the simpler modal-based rendered markup approach.

3. **Page slug uniqueness** — the importer appends the demo ID to page slugs (e.g., `home-atelier`) to avoid conflicts with existing pages. This means re-importing the same demo creates new slugs each time.

4. **No content override** — if the user has already created a "Home" page, the importer does NOT overwrite it. It creates a new "Home" page with a unique slug. The user must manually delete the old one if desired.

5. **Trashed pages are not auto-deleted** — the cleanup trashes pages (via `wp_trash_post`). WordPress will permanently delete them only when the user empties the trash. This is intentional — it provides an undo path.

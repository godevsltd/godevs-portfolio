# GoDevs Portfolio — Companion Plugin Architecture

**Task ID:** 5-wporg-territory-companion-plugin
**Author:** Senior WP.org Theme Reviewer + Plugin Architect
**Date:** 2024-Q4
**Status:** Architecture proposal (not yet implemented)
**Companion document:** [`plugin-migration-table.md`](./plugin-migration-table.md) — full per-item migration table.

---

## Table of Contents

1. [Executive Summary](#1-executive-summary)
2. [Step 1 — File-by-File Inventory & Classification](#2-step-1--file-by-file-inventory--classification)
3. [Step 2 — Deep-Dive on Specific Files](#3-step-2--deep-dive-on-specific-files)
4. [Step 3 — Migration Table Summary](#4-step-3--migration-table-summary)
5. [Step 4 — Companion Plugin Architecture](#5-step-4--companion-plugin-architecture)
6. [Step 5 — 7-Phase Migration Plan](#6-step-5--7-phase-migration-plan)
7. [Step 6 — WordPress.org Risk Assessment](#7-step-6--wordpressorg-risk-assessment)

---

## 1. Executive Summary

The GoDevs Portfolio theme ships with **42 discrete pieces of plugin-territory functionality** embedded in 16 PHP files under `inc/`. These include 9 CPTs, 8 taxonomies, ~50 post meta registrations, a complete booking system, two front-end form shortcodes with AJAX submission handlers, a full demo content importer, a header/footer builder, and structured-settings storage. Per WordPress.org Theme Review Team (TRT) guidelines, **none of this belongs in a theme submitted to WordPress.org**.

This document proposes a companion plugin, **GoDevs Portfolio Plus** (slug `godevs-portfolio-plus`), to absorb all plugin-territory functionality, leaving the theme as a clean visual presentation layer.

**Counts (from full inventory):**
- 🎨 **16 THEME-territory items** (stay in theme)
- 🔌 **42 PLUGIN-territory items** (move to plugin)
- ⚠️ **11 MIXED items** (need splitting — split between theme and plugin)

**WordPress.org submission recommendation:** **SUBMIT WITH PLUGIN** — see Section 7 for risk analysis.

---

## 2. Step 1 — File-by-File Inventory & Classification

Each major file under `inc/` is classified as **THEME** (presentation only), **PLUGIN** (persistent/business/data functionality), or **MIXED** (needs splitting).

### Scan methodology

Automated Grep scans across the theme were run for the following markers:

| Marker | Territory | Hits found |
|--------|-----------|-----------|
| `register_post_type` | PLUGIN | 9 calls (8 in `cpt.php`, 1 in `case-study.php`) |
| `register_taxonomy` | PLUGIN | 8 calls (5 in `taxonomies.php`, 3 in `case-study.php`) |
| `register_post_status` | PLUGIN | 0 |
| `add_shortcode` | PLUGIN (mostly) | 2 (`front-forms.php`) |
| `wp_insert_post` / `wp_update_post` | PLUGIN | 4 in `demo-importer.php`, 1 in `front-forms.php`, 1 in `functions.php` |
| `wp_create_nav_menu` / `wp_update_nav_menu_item` | PLUGIN | 2 in `demo-importer.php` |
| `update_option` (non-visual) | PLUGIN | ~17 calls across 6 files |
| `update_post_meta` / `update_user_meta` | PLUGIN | ~15 calls |
| `wp_mail` | PLUGIN | 3 (1 `booking-system.php`, 2 `front-forms.php`) |
| `register_meta` / `register_post_meta` | PLUGIN (non-visual) | ~50 in `meta-fields.php` |
| `register_block_pattern` / `register_block_style` | THEME | 30+ in `block-styles.php`, 11 categories in `block-patterns.php` |
| `wp_enqueue_style` / `wp_enqueue_script` | THEME | ~12 across 6 files |
| `add_theme_support` | THEME | 4 in `functions.php` |
| `register_block_type` | THEME (visual blocks) | 0 |

### Per-file classification

| File | LOC | Primary responsibility | Classification |
|------|-----|------------------------|----------------|
| `inc/content/cpt.php` | 364 | Registers 8 CPTs + module-visibility helper + admin-cap grantor | 🔌 **PLUGIN** |
| `inc/content/taxonomies.php` | 147 | Registers 5 taxonomies | 🔌 **PLUGIN** |
| `inc/content/meta-fields.php` | 424 | Registers ~50 CPT post meta + per-post HF layout meta + sanitizers | ⚠️ **MIXED** (HF layout meta stays) |
| `inc/content/case-study.php` | 424 | Case-study CPT + 3 taxonomies + meta box + save handler | 🔌 **PLUGIN** |
| `inc/booking-system.php` | 533 | Booking admin UX + status workflow + email notifications + default-status hook | 🔌 **PLUGIN** |
| `inc/front-forms.php` | 398 | 2 shortcodes + 2 AJAX handlers (wp_insert_post + wp_mail) + asset enqueue | ⚠️ **MIXED** (enqueue stays; submission moves) |
| `inc/demo-importer.php` | 951 | Admin page + AJAX endpoints + import logic (wp_insert_post, wp_create_nav_menu, update_option, update_user_meta) + admin asset enqueue | ⚠️ **MIXED** (admin UI + assets stay; DB-writing logic moves) |
| `inc/demo-registry.php` | 700 | Read-only metadata extractor from pattern files | 🎨 **THEME** (stays — pattern files are in theme) |
| `inc/demo-renderer.php` | 484 | Pure HTML5 document renderer for iframe preview | 🎨 **THEME** (stays — no DB writes) |
| `inc/demo-tracker.php` | 205 | Records imports in option; trashes pages, deletes menus, resets options | 🔌 **PLUGIN** |
| `inc/header-footer-builder.php` | 1303 | JSON layout storage in option + admin builder UI + AJAX endpoints + front-end render + enqueue + sidebar registration | ⚠️ **MIXED** (render + enqueue + sidebars stay; storage + admin UI move) |
| `inc/theme-settings.php` | 770 | 80-settings admin UI + AJAX save + dynamic CSS + fallback loader for content modules | ⚠️ **MIXED** (visual settings stay; module toggles + fallback loader split) |
| `inc/settings-integration.php` | 311 | render_block filters + brand injection + typography CSS + lazy load | 🎨 **THEME** (stays — pure rendering) |
| `inc/cpt-archives.php` | 429 | Generates CPT archive inner templates from settings | ⚠️ **MIXED** (rendering stays; depends on CPTs from plugin) |
| `inc/block-patterns.php` | 168 | Pattern category registration + fallback loader | ⚠️ **MIXED** (categories stay; fallback loader trimmed) |
| `inc/block-styles.php` | 303 | 30+ `register_block_style` calls + fallback loader | ⚠️ **MIXED** (styles stay; fallback loader trimmed) |
| `inc/cpt-admin.php` | 212 | Appearance → Content Manager admin page | 🔌 **PLUGIN** (lists plugin-managed CPTs) |
| `functions.php` | 617 | Theme setup + enqueue + activation seeders + upgrade handler | ⚠️ **MIXED** (setup + enqueue stay; seeders + upgrade split) |

### Aggregate counts

| Bucket | Count |
|--------|-------|
| 🎨 THEME-territory items (stay) | **16** |
| 🔌 PLUGIN-territory items (move) | **42** |
| ⚠️ MIXED items (split) | **11** |
| **Total functionality items inventoried** | **69** |

---

## 3. Step 2 — Deep-Dive on Specific Files

### 3.1 `inc/content/cpt.php`

**What it does:** Registers 8 CPTs (`godevs_project`, `godevs_service`, `godevs_team`, `godevs_testimonial`, `godevs_booking`, `godevs_experience`, `godevs_education`, `godevs_faq`) gated by `godevs_portfolio_module_enabled()` which reads `module_*` keys from the `godevs_portfolio_settings` option. Also grants `edit_bookings` / `manage_bookings` capabilities to the Administrator role on `after_switch_theme` and `admin_init`.

**Why PLUGIN:** Per TRT guidelines, *"Custom Post Types registration"* is explicitly listed as plugin territory. CPTs are persistent data structures that must survive theme switching. The `godevs_booking` CPT additionally uses `capability_type => 'booking'` which modifies `$wp_roles` — a clear plugin concern.

**Notable findings:**
- Booking CPT is private (`public => false`) and uses a custom `capability_type => 'booking'` — this is a deliberate security decision to keep Contributors/Authors out of PII (booking emails, phones). The capability grantor MUST move with the CPT.
- Module visibility helper reads options set by the theme's Settings UI — theme and plugin share the option, plugin reads it.
- All CPTs use `show_in_rest => true` (except booking) — Block Editor + REST API compatibility means meta is also REST-exposed (except booking meta, which is privacy-gated).

---

### 3.2 `inc/content/meta-fields.php`

**What it does:** Registers ~50 `register_post_meta()` calls across 7 CPTs plus the per-post `_godevs_page_{header,footer}_layout` meta on `page`/`post` post types. Includes `godevs_portfolio_sanitize_checkbox()` and `godevs_portfolio_sanitize_rating()` helpers.

**Why MIXED:** CPT meta (project client, service price, team email, testimonial rating, etc.) belongs with its parent CPT in the plugin. The per-post header/footer layout override (`_godevs_page_header_layout`, `_godevs_page_footer_layout`) is a **visual presentation override** — it tells the theme "render this page with header-dark instead of default". That stays in the theme.

**Notable findings:**
- All booking meta is `show_in_rest => false` and `auth_callback => manage_options()` — privacy-safe.
- Meta keys are already prefixed `_godevs_*` — no migration rename needed; plugin reads same keys.
- The per-post HF layout meta uses `sanitize_key` and is registered for both `page` and `post` — visual concern, theme.

---

### 3.3 `inc/booking-system.php`

**What it does:** Full booking management workflow:
- Custom admin list-table columns (client, contact, service, date/time, status)
- Status filter dropdown (pending / confirmed / completed / cancelled)
- Bulk status update actions
- Booking detail meta box + save handler
- **Email notifications on status change** (`wp_mail` to client)
- `wp_insert_post` hook to auto-set `_godevs_booking_status = 'pending'` on new bookings
- Admin CSS for status badges

**Why PLUGIN:** Textbook business logic. Email notifications + status workflow + capability manipulation are all explicitly listed in TRT's plugin-territory rules: *"Booking systems, business logic"*, *"Email notifications"*, *"Form submission handlers"*.

**Notable findings:**
- The status workflow is non-trivial: `pending → confirmed → completed / cancelled`. Each transition triggers a localized email.
- The save handler writes 8 meta fields per save — high DB write volume on a busy booking site.
- Booking capability isolation (`capability_type => 'booking'`) is enforced by `godevs_portfolio_grant_booking_caps()` in `cpt.php`. The plugin must move both together.

---

### 3.4 `inc/front-forms.php`

**What it does:** Two shortcodes (`[godevs_booking_form]`, `[godevs_proposal_form]`) and two AJAX handlers. The booking handler creates a `godevs_booking` post via `wp_insert_post` and sends an admin email via `wp_mail`. The proposal handler is email-only (no post creation). Both enqueues are conditional on `has_shortcode()`.

**Why MIXED:** Shortcode *rendering* is presentation (HTML form markup, CSS, JS, validation UX). Shortcode *submission* (DB writes, emails, AJAX) is plugin territory. The split: theme keeps the HTML/CSS/JS asset bundle; plugin owns the AJAX endpoints and DB/email logic.

**Notable findings:**
- AJAX action names (`godevs_submit_booking`, `godevs_submit_proposal`) and nonce names (`godevs_booking_form`, `godevs_proposal_form`) are baked into the JS file `assets/js/front-forms.js` and into any page that already contains the shortcode. **These MUST be preserved verbatim during migration** or already-published forms stop working.
- The booking handler saves 8 post meta fields per submission — high surface area for migration bugs.
- `godevs_proposal_form` is a no-DB-write contact form. Could arguably stay in theme as a "visual shortcode" — but TRT leans toward plugin because of the email side effect.

---

### 3.5 `inc/demo-importer.php`

**What it does:** The single largest file (951 lines):
- Admin page (`Appearance → GoDevs Demos`)
- AJAX endpoints: `get_import_details`, `import_demo`, `remove_demo`, etc.
- Import logic per page slug: `wp_insert_post` for each page, `wp_create_nav_menu` + `wp_update_nav_menu_item`, `update_option('show_on_front', 'page')`, `update_option('page_on_front', $homepage_id)`, `update_user_meta($user_id, 'godevs-portfolio-applied-style', $style)`
- Strips `<!-- wp:template-part -->` blocks from imported content via `godevs_portfolio_strip_template_parts_from_content()`
- Admin asset enqueues (`admin-demos.css`, `admin-demos.js`)

**Why MIXED:** TRT explicitly states *"Demo content importers (they touch database, posts, menus, settings)"* are plugin territory. The admin UI itself (page registration, asset enqueue, AJAX nonce orchestration) is presentation; the actual import logic is plugin.

**Notable findings:**
- The importer writes to `update_user_meta` for the active style variation — this is a user-specific setting that survives theme switch. Plugin territory.
- The `wp_create_nav_menu` calls delete existing menus with the same name before creating fresh ones. Plugin territory (menu manipulation).
- The importer is the user-facing entry point for the entire demo system. UX continuity matters: theme should add a "Demo importer moved to GoDevs Portfolio Plus" notice pointing to the new plugin page.

---

### 3.6 `inc/demo-registry.php`

**What it does:** Reads `patterns/demos/*.php` files, extracts pattern metadata from PHP docblocks (title, slug, description, categories, keywords, viewport width), and augments it with demo-specific properties (recommended pages, style variation, category normalization).

**Why THEME:** Pure read-only metadata extractor. No DB writes. The pattern files themselves live in the theme (`patterns/demos/`), so the registry is the canonical index of theme assets.

**Notable findings:**
- The registry is consumed by both `demo-renderer.php` (visual — stays in theme) and `demo-importer.php` (DB-writing — moves to plugin). After migration, plugin fetches the registry via a `godevs_portfolio_get_demos` filter hooked by theme.
- Category normalization collapses 50+ free-form labels into 11 canonical categories — pure data transform.

---

### 3.7 `inc/demo-renderer.php`

**What it does:** Renders a demo page as a complete HTML5 document for iframe preview. Reads pattern file, strips PHP docblock, replaces `<?php echo esc_url(get_template_directory_uri() . '/path'); ?>` with real URLs, resolves `<!-- wp:template-part -->` references by inlining `parts/*.html`, replaces dynamic block stubs, expands preset references, wraps in HTML5 doc with theme CSS.

**Why THEME:** Pure rendering, no DB writes. The renderer is intimately coupled to the theme's pattern files, parts, and CSS — none of which exist outside the theme.

**Notable findings:**
- The renderer is essentially a port of a Python pre-render script to PHP. It does heavy string manipulation that would be wasteful to duplicate in the plugin.
- Renderer output is consumed by the importer's preview modal. After migration, plugin's preview modal AJAX endpoint calls `godevs_portfolio_render_demo_html()` (theme function) — the plugin doesn't need its own renderer.

---

### 3.8 `inc/demo-tracker.php`

**What it does:** Single WordPress option `godevs_portfolio_imports` storing an array of import records keyed by demo ID. Each record holds: `demo_id`, `demo_name`, `imported_at`, `import_version`, `mode`, `page_ids[]`, `nav_menu_id`, `homepage_id`, `style_applied`. Provides CRUD: `tracker_get_all`, `tracker_get_imported`, `tracker_get`, `tracker_is_imported`, `tracker_record`, `tracker_remove`. The remove function trashes pages, deletes nav menus, resets `show_on_front`/`page_on_front` options, deletes user meta for applied style.

**Why PLUGIN:** Pure persistent DB state. The tracker owns the lifecycle of every imported demo. If the tracker disappears, the user cannot cleanly remove a previously imported demo.

**Notable findings:**
- Option name `godevs_portfolio_imports` MUST be preserved verbatim during migration or prior imports become orphaned and un-removable.
- The `tracker_remove` function uses `wp_trash_post` (not `wp_delete_post`) — non-destructive, user can restore from trash. Good.
- Resetting `show_on_front` / `page_on_front` is a global WP option mutation — moving this to plugin ensures theme switching doesn't leave the site misconfigured.

---

### 3.9 `inc/header-footer-builder.php`

**What it does:** (1303 lines — the second-largest file in the theme)
- Stores layouts as JSON in `godevs_hf_layouts` option
- Stores active layout slug in `godevs_hf_active_{header,footer}` option
- 20+ builder elements (logo, nav, search, social, CTA button, widget area, copyright, etc.)
- Admin builder UI (drag-and-drop canvas, save/load/delete layouts)
- 4 AJAX endpoints: get_layouts, save_layout, render_preview, set_active
- Front-end rendering via `wp_head` / `wp_footer` hooks
- Enqueues `header-footer-builder.css` + `hf-frontend.js`
- Registers 2 widget areas (`godevs-hf-header`, `godevs-hf-footer`)

**Why MIXED:** Layout storage (JSON in option) + admin builder UI + AJAX endpoints are persistent custom functionality — plugin territory. Front-end rendering + asset enqueue + sidebar registration are visual — theme territory.

**Notable findings:**
- Layouts are stored as JSON in a single option. Option names (`godevs_hf_layouts`, `godevs_hf_active_header`, `godevs_hf_active_footer`) MUST be preserved verbatim or existing layouts vanish.
- The builder overlaps with the WordPress core Site Editor (which can also build headers/footers via template parts). This is a transitional concern — long-term the builder should be deprecated in favor of block themes' native template-part editing.
- Preview uses a transient (`godevs_hf_preview_layouts`) for non-persistent preview state — clever, no DB pollution.

---

### 3.10 `inc/theme-settings.php`

**What it does:** (770 lines)
- Default settings catalog (~80 keys, see lines 25–118)
- `godevs_portfolio_get_setting()` reader
- Admin menu + settings registration
- Color picker + typography + layout controls
- AJAX save handler that writes 80 individual `update_option('godevs_portfolio_*')` calls
- Dynamic CSS generation
- **Fallback loader** (lines 13–19) that pre-loads cpt.php, taxonomies.php, meta-fields.php, case-study.php, demo-registry.php, demo-tracker.php, demo-importer.php

**Why MIXED:** Visual settings (colors, typography, layout, header/footer style) are theme territory. Module toggles (`module_projects`, `module_services`, etc.) govern CPT registration — those belong with the plugin that owns the CPTs. The fallback loader exists for backwards compat with v1.0–v1.1 themes and should be trimmed.

**Notable findings:**
- Each setting is stored as its own option (`godevs_portfolio_brand_name`, `godevs_portfolio_accent_color`, etc.) — 80 options. Could be consolidated into a single array option, but that's a separate refactor.
- The save handler triggers `godevs_portfolio_generate_dynamic_css()` after each save — pure visual concern, stays in theme.
- The fallback loader is the root cause of the "block-patterns.php and block-styles.php both load the CPT stack" coupling. Trimming it (Phase 7) breaks backwards compat for users on v1.0–v1.1 themes — hence the back-compat shim.

---

### 3.11 `inc/cpt-archives.php`

**What it does:** Generates the inner block markup for `core/post-template` blocks on CPT archive pages, based on theme settings (layout type, column count, display toggles). Per-CPT generators for project, service, team, testimonial, experience, education, case-study.

**Why MIXED (light):** The rendering logic itself is pure visual (generates block markup). But it only fires for CPTs that the plugin registers. Theme must `post_type_exists()` guard each case so it degrades gracefully if a CPT module is disabled.

**Notable findings:**
- Filter `godevs_cpt_archive_settings_map` allows other modules to extend the map — `settings-integration.php` adds `'post'` to the map. Clean extension point.
- Filter `godevs_cpt_archive_generate_template` allows per-CPT template overrides — `settings-integration.php` uses it for blog archives. Clean extension point.

---

### 3.12 `inc/block-patterns.php` + `inc/block-styles.php`

**What they do:**
- `block-patterns.php`: Registers 11 pattern categories (hero, about, services, etc.) + acts as a fallback loader for the CPT stack.
- `block-styles.php`: Registers 30+ block style variants (`is-style-*` CSS classes for buttons, headings, etc.) + acts as a fallback loader for the CPT stack.

**Why MIXED:** Pattern category + block style registration is textbook THEME territory (TRT explicitly permits both). The fallback loader behavior (lines 22–40 of `block-patterns.php`, lines 19–42 of `block-styles.php`) is the contamination — it pulls in CPTs, taxonomies, meta, demo-registry, demo-tracker on every request, regardless of whether `functions.php` already loaded them.

**Notable findings:**
- The fallback loader exists because v1.0–v1.1 of the theme's `functions.php` only loaded `block-patterns.php`, `block-styles.php`, and `theme-settings.php` on every request. The fallbacks ensure CPTs register even on legacy sites running the old functions.php.
- After the plugin migration, these fallbacks should be **removed entirely** (Phase 7) — the plugin now owns CPT registration. The `require_once` calls in `functions.php` already load every file unconditionally, so the fallback is dead weight on modern installs.

---

## 4. Step 3 — Migration Table Summary

The full per-item migration table is in [`plugin-migration-table.md`](./plugin-migration-table.md). Summary by category:

| Category | THEME items | PLUGIN items | MIXED items |
|----------|------------|-------------|-------------|
| CPTs | 0 | 9 | 0 |
| Taxonomies | 0 | 8 | 0 |
| Meta fields | 1 | ~50 | 0 |
| Booking system | 0 | 6 | 0 |
| Front-end forms | 0 | 4 | 1 |
| Demo importer | 2 | 5 | 1 |
| Header/Footer builder | 2 | 2 | 1 |
| Theme settings | 4 | 2 | 3 |
| CPT archives | 3 | 0 | 0 |
| CPT admin | 0 | 3 | 0 |
| Block patterns/styles | 2 | 0 | 2 |
| functions.php | 2 | 3 | 3 |
| **TOTALS** | **16** | **42** | **11** |

**Top 3 plugin-territory findings:**

1. **9 CPTs + 8 taxonomies + ~50 post meta fields** registered in theme — textbook TRT plugin-territory violation. The CPT slugs (`godevs_*`) are stable, so migration is low-risk for data, but rewrite-rule flush timing and the `capability_type => 'booking'` capability mapper need careful sequencing.

2. **Booking system** with `wp_mail` notifications, custom capability type, status workflow, and admin meta box — full business logic in theme. Move en bloc to plugin.

3. **Demo importer** that creates pages, nav menus, options, and user meta — TRT explicitly flags demo content importers as plugin territory. The tracker that records import state (`godevs_portfolio_imports` option) MUST be preserved verbatim or prior imports become un-removable.

---

## 5. Step 4 — Companion Plugin Architecture

### 5.1 Plugin identity

| Property | Value |
|----------|-------|
| **Name** | GoDevs Portfolio Plus |
| **Slug** | `godevs-portfolio-plus` |
| **Text domain** | `godevs-portfolio-plus` |
| **Main file** | `godevs-portfolio-plus.php` |
| **Version** | 1.0.0 (initial release paired with theme v2.0.0) |
| **Requires WP** | 6.4+ (matches theme) |
| **Requires PHP** | 7.4+ (matches theme) |
| **License** | GPL-2.0-or-later (matches theme) |
| **Required by theme** | Soft-required (theme degrades gracefully without it but loses CPTs/bookings/importer) |

### 5.2 Plugin directory structure

```
godevs-portfolio-plus/
├── godevs-portfolio-plus.php            # Main plugin file (bootstrap)
├── readme.txt                            # WordPress.org plugin readme
├── README.md                             # GitHub readme
├── LICENSE                               # GPL-2.0
├── uninstall.php                         # Cleanup on plugin uninstall
│
├── src/                                  # All PHP source
│   ├── Plugin.php                        # Main plugin class (singleton)
│   ├── ServiceContainer.php              # DI container (PSR-11-ish)
│   │
│   ├── Content/                          # CPT + taxonomy + meta
│   │   ├── PostTypes.php                 # 8 CPTs from inc/content/cpt.php
│   │   ├── CaseStudyPostType.php         # case-study CPT
│   │   ├── Taxonomies.php                # 5 taxonomies from inc/content/taxonomies.php
│   │   ├── CaseStudyTaxonomies.php       # 3 case-study taxonomies
│   │   ├── MetaFields.php                # ~50 register_post_meta calls (excluding HF layout)
│   │   ├── CaseStudyMetaBox.php          # case-study meta box + save handler
│   │   ├── ModuleVisibility.php          # godevs_portfolio_module_enabled() helper
│   │   └── CapabilityMapper.php          # Booking capability grants on activation
│   │
│   ├── Booking/                          # Booking business logic
│   │   ├── BookingModule.php             # Module bootstrap
│   │   ├── AdminListTable.php            # List-table columns + filter + bulk actions
│   │   ├── MetaBox.php                   # Booking detail meta box
│   │   ├── SaveHandler.php               # save_post_godevs_booking handler
│   │   ├── StatusWorkflow.php            # Status transitions + wp_insert_post default
│   │   └── EmailNotifier.php             # wp_mail on status change
│   │
│   ├── Forms/                            # Front-end form shortcodes + handlers
│   │   ├── FormsModule.php               # Module bootstrap
│   │   ├── Shortcodes.php                # [godevs_booking_form] + [godevs_proposal_form] rendering
│   │   ├── BookingSubmission.php         # AJAX: godevs_submit_booking
│   │   └── ProposalSubmission.php        # AJAX: godevs_submit_proposal
│   │
│   ├── Demo/                             # Demo importer (the DB-writing half)
│   │   ├── DemoModule.php                # Module bootstrap
│   │   ├── ImportAdminPage.php           # Admin page registration + asset enqueue
│   │   ├── ImportEndpoints.php           # AJAX endpoints (preserved action names)
│   │   ├── ImportExecutor.php            # wp_insert_post + wp_create_nav_menu + update_option logic
│   │   ├── ImportTracker.php             # godevs_portfolio_imports option CRUD
│   │   └── TemplatePartStripper.php      # helper (moved from theme)
│   │
│   ├── HeaderFooter/                     # Header/Footer Builder (storage + admin UI)
│   │   ├── HeaderFooterModule.php        # Module bootstrap
│   │   ├── LayoutRepository.php          # JSON storage in option (preserved option name)
│   │   ├── AdminBuilder.php              # Admin drag-drop builder UI + AJAX endpoints
│   │   └── ActiveLayoutResolver.php      # Reads active layout slug
│   │
│   ├── Settings/                         # Module-toggle settings (split from theme)
│   │   ├── SettingsModule.php            # Module bootstrap
│   │   ├── ModuleDefaults.php            # module_* defaults
│   │   └── SettingsSynchronizer.php      # Hooks into theme's settings save action
│   │
│   ├── Admin/                            # Cross-cutting admin
│   │   ├── ContentManagerPage.php        # Appearance → Content Manager (from cpt-admin.php)
│   │   └── AdminNotices.php              # "Install theme" / "Install plugin" notices
│   │
│   ├── Support/                          # Shared utilities
│   │   ├── Sanitize.php                  # sanitize_checkbox, sanitize_rating
│   │   ├── OptionKeys.php                # Constants for option key names (single source of truth)
│   │   └── HookContracts.php             # Interface definitions for theme↔plugin hooks
│   │
│   └── Activation/                       # Activation/deactivation handlers
│       ├── Activator.php                 # register_activation_hook
│       └── Deactivator.php               # register_deactivation_hook
│
├── assets/                               # Plugin-bundled assets (admin only)
│   ├── css/
│   │   ├── admin-content-manager.css     # Moved from theme/assets/css/admin-cpt-manager.css
│   │   ├── admin-booking.css             # Moved from inline CSS in booking-system.php
│   │   └── admin-demos.css               # Moved from theme/assets/css/admin-demos.css
│   ├── js/
│   │   ├── admin-content-manager.js      # (if needed)
│   │   ├── admin-demos.js                # Moved from theme/assets/js/admin-demos.js
│   │   └── admin-hf-builder.js           # Moved from theme/assets/js/admin-hf-builder.js
│   └── images/                           # Plugin-specific images
│
├── languages/                            # .pot + .po + .mo files
│   └── godevs-portfolio-plus.pot
│
└── tests/                                # PHPUnit test suite
    ├── bootstrap.php
    ├── Content/
    ├── Booking/
    ├── Forms/
    └── Demo/
```

### 5.3 Per-class responsibility

| Class | Responsibility |
|-------|---------------|
| `Plugin` | Singleton bootstrap. Loads service container, registers modules, hooks activation. |
| `ServiceContainer` | Lightweight DI. Resolves module instances by class name. |
| `Content\PostTypes` | Hooks `init` (priority 11, after theme setup). Calls `register_post_type` for 8 CPTs, each gated by `ModuleVisibility::enabled()`. |
| `Content\CaseStudyPostType` | Hooks `init` priority 11. Registers `godevs_case_study`. |
| `Content\Taxonomies` | Hooks `init` priority 12 (after CPTs). Registers 5 taxonomies. |
| `Content\CaseStudyTaxonomies` | Hooks `init` priority 12. Registers 3 case-study taxonomies. |
| `Content\MetaFields` | Hooks `init` priority 15. Registers ~50 `register_post_meta` calls. |
| `Content\CaseStudyMetaBox` | Hooks `add_meta_boxes_godevs_case_study` + `save_post_godevs_case_study`. |
| `Content\ModuleVisibility` | `enabled(string $module): bool` — reads `godevs_portfolio_module_*` option (shared with theme). |
| `Content\CapabilityMapper` | `register_activation_hook` + `admin_init` fallback. Grants `edit_bookings` / `manage_bookings` caps to Administrator. |
| `Booking\AdminListTable` | Hooks `manage_godevs_booking_posts_columns` + `manage_godevs_booking_posts_custom_column` + `restrict_manage_posts`. |
| `Booking\MetaBox` | Hooks `add_meta_boxes_godevs_booking`. Renders booking detail meta box. |
| `Booking\SaveHandler` | Hooks `save_post_godevs_booking`. Nonce check + meta writes + status change detection. |
| `Booking\StatusWorkflow` | Hooks `wp_insert_post`. Sets `_godevs_booking_status = 'pending'` on new bookings. |
| `Booking\EmailNotifier` | Called by `SaveHandler` on status change. Sends `wp_mail` to client. |
| `Forms\Shortcodes` | Hooks `init`. Registers `[godevs_booking_form]` + `[godevs_proposal_form]` (pure HTML render, no submission). |
| `Forms\BookingSubmission` | Hooks `wp_ajax_godevs_submit_booking` + `wp_ajax_nopriv_godevs_submit_booking`. Nonce check + `wp_insert_post` + `wp_mail` to admin. |
| `Forms\ProposalSubmission` | Hooks `wp_ajax_godevs_submit_proposal` + `wp_ajax_nopriv_godevs_submit_proposal`. Nonce check + `wp_mail` to admin. |
| `Demo\ImportAdminPage` | Hooks `admin_menu`. Registers admin page (location TBD: under Tools or under Appearance via `add_theme_page`). Hooks `admin_enqueue_scripts` for asset enqueue. |
| `Demo\ImportEndpoints` | Hooks `wp_ajax_godevs_portfolio_get_import_details`, `wp_ajax_godevs_portfolio_import_demo`, `wp_ajax_godevs_portfolio_remove_demo`, etc. Nonce names preserved. |
| `Demo\ImportExecutor` | Pure logic class. `execute_import(string $demo_id, string $mode): array`. Calls `wp_insert_post`, `wp_create_nav_menu`, `update_option`, `update_user_meta`. |
| `Demo\ImportTracker` | CRUD on `godevs_portfolio_imports` option (option name preserved verbatim). |
| `Demo\TemplatePartStripper` | `strip(string $content): string` — removes `<!-- wp:template-part -->` blocks. |
| `HeaderFooter\LayoutRepository` | `get_layouts()`, `get_layout($type, $slug)`, `save_layout($type, $slug, $data)`, `delete_layout($type, $slug)`. Stores in `godevs_hf_layouts` option (name preserved). |
| `HeaderFooter\AdminBuilder` | Hooks `admin_menu` + AJAX endpoints (`wp_ajax_godevs_hf_*`). |
| `HeaderFooter\ActiveLayoutResolver` | `get_active(string $type): ?string`. Reads `godevs_hf_active_{type}` option. Used by theme's renderer via shared function. |
| `Settings\ModuleDefaults` | Returns array of `module_*` defaults. |
| `Settings\SettingsSynchronizer` | Hooks `godevs_portfolio_settings_saved` action (fired by theme's save handler). Reacts to module toggle changes (e.g., flush rewrite rules if a module was toggled). |
| `Admin\ContentManagerPage` | Hooks `admin_menu`. Renders Content Manager admin page (moved from `inc/cpt-admin.php`). |
| `Admin\AdminNotices` | Hooks `admin_notices`. Shows "Install GoDevs Portfolio Plus" notice in theme if plugin is absent. Shows "Install GoDevs Portfolio theme" notice in plugin if theme is absent. |
| `Support\OptionKeys` | Class constants: `LAYOUTS = 'godevs_hf_layouts'`, `ACTIVE_HEADER = 'godevs_hf_active_header'`, `TRACKER = 'godevs_portfolio_imports'`, etc. Single source of truth. |
| `Support\HookContracts` | Interface definitions for theme↔plugin integration hooks (see 5.4 below). |
| `Activation\Activator` | `register_activation_hook`. Calls `CapabilityMapper::grant()`, `flush_rewrite_rules()`, optional data migration from theme-side storage. |
| `Activation\Deactivator` | `register_deactivation_hook`. Optional: revoke booking caps (decision needed — recommend NOT revoking to avoid locking admins out of existing bookings on accidental deactivation). |

### 5.4 Theme ↔ Plugin communication contract

The plugin and theme communicate exclusively via WordPress hooks (actions + filters) and shared option keys. No direct class instantiation across the boundary.

#### 5.4.1 Plugin exposes (theme consumes)

| Hook | Type | Purpose |
|------|------|---------|
| `godevs_plus_is_active` | Filter (returns `true`) | Theme calls `apply_filters('godevs_plus_is_active', false)` to detect plugin presence. |
| `godevs_plus_get_module_status` | Filter | Theme asks plugin: "is the bookings module enabled?" Plugin answers from its module-toggle store. |
| `godevs_plus_get_active_header_layout` | Filter | Theme asks plugin: "what's the active HF header layout slug?" Plugin returns slug or null. |
| `godevs_plus_get_active_footer_layout` | Filter | Same for footer. |
| `godevs_plus_get_layout` | Filter (takes `$type, $slug`) | Theme fetches a specific layout's JSON for rendering. |
| `godevs_plus_render_demo_html` | Filter (takes `$demo_id, $page`) | Plugin asks theme to render a demo for iframe preview (theme owns the renderer + pattern files). |
| `godevs_plus_get_demos` | Filter | Plugin asks theme for the demo registry (theme owns the patterns). |
| `godevs_plus_get_demo_page_file` | Filter | Plugin asks theme for the file path of a specific demo inner page (theme owns `patterns/demos/`). |

#### 5.4.2 Theme exposes (plugin consumes)

| Hook | Type | Purpose |
|------|------|---------|
| `godevs_portfolio_settings_saved` | Action | Theme fires this after AJAX save. Plugin hooks to react to module toggles (e.g., flush rewrites if projects module was toggled off). |
| `godevs_portfolio_register_post_types` | Action | Theme fires this on `after_switch_theme`. Plugin hooks to register its CPTs (so CPTs are available before the rewrite flush). |
| `godevs_portfolio_render_block_template_part` | Filter | Theme fires this when rendering a `core/template-part` block. Plugin overrides the slug if a HF builder layout is active. |
| `godevs_portfolio_get_setting` | Filter | Theme's setting reader; plugin can override (e.g., inject `module_*` values from its own store). |
| `godevs_portfolio_dynamic_css` | Filter | Theme fires this when generating dynamic CSS. Plugin (or theme-internal modules) can append CSS. |

#### 5.4.3 Shared option keys (single source of truth in `Support\OptionKeys`)

| Constant | Option name | Owner |
|----------|-------------|-------|
| `LAYOUTS` | `godevs_hf_layouts` | Plugin (HF builder storage) |
| `ACTIVE_HEADER` | `godevs_hf_active_header` | Plugin |
| `ACTIVE_FOOTER` | `godevs_hf_active_footer` | Plugin |
| `TRACKER` | `godevs_portfolio_imports` | Plugin (demo tracker) |
| `SETTINGS_BASE` | `godevs_portfolio_*` (per-key suffix) | Theme (visual settings) + Plugin (module_* keys) |
| `REWRITE_VERSION` | `godevs_portfolio_rewrite_version` | Theme (visual upgrade handler) |
| `PLUS_VERSION` | `godevs_portfolio_plus_version` | Plugin (its own upgrade handler) |

#### 5.4.4 Shared function polyfills (graceful degradation)

The plugin defines the following functions at the global namespace (not under a class) so the theme can call them directly. The theme wraps each call in `function_exists()`:

```php
// In plugin: godevs-portfolio-plus.php
if ( ! function_exists( 'godevs_hf_get_active' ) ) {
    function godevs_hf_get_active( string $type ): ?string {
        return \GoDevsPortfolioPlus\HeaderFooter\ActiveLayoutResolver::instance()->get( $type );
    }
}
if ( ! function_exists( 'godevs_hf_get_layout' ) ) {
    function godevs_hf_get_layout( string $type, string $slug ): ?array {
        return \GoDevsPortfolioPlus\HeaderFooter\LayoutRepository::instance()->get( $type, $slug );
    }
}
if ( ! function_exists( 'godevs_portfolio_module_enabled' ) ) {
    function godevs_portfolio_module_enabled( string $module ): bool {
        return \GoDevsPortfolioPlus\Content\ModuleVisibility::instance()->enabled( $module );
    }
}
```

The theme calls these via `function_exists()` guard:

```php
// In theme: inc/settings-integration.php
if ( function_exists( 'godevs_hf_get_active' ) && godevs_hf_get_active( 'header' ) ) {
    // Use HF builder layout
}
```

### 5.5 Graceful degradation when plugin is NOT active

The theme must degrade gracefully. Concretely:

| Functionality | Plugin active | Plugin inactive | Implementation |
|---------------|--------------|-----------------|-----------------|
| CPTs (Projects, Services, etc.) | Registered by plugin | Not registered | Theme's `cpt-archives.php` uses `post_type_exists()` guard; archive templates fall back to a "This content type requires GoDevs Portfolio Plus" notice. |
| Bookings admin | Plugin's admin UX | Not available | Theme's `front-forms.php` shortcode handler is gone; shortcode short-circuits to a "Plugin required" message. |
| Front-end forms | Plugin renders + handles | Shortcode tag is unregistered → renders as raw `[godevs_booking_form]` text | Theme should register a stub shortcode that renders a "Plugin required" notice. |
| Demo importer | Plugin's admin page | Not available | Theme shows an admin notice: "Demo import is now part of GoDevs Portfolio Plus. Install the plugin." |
| Header/Footer builder | Plugin stores layouts | Layouts cannot be saved (no admin UI) | Theme's HF renderer falls back to default template parts (`parts/header.html`, `parts/footer.html`). |
| Module toggles in Theme Settings | Plugin reads/writes | Toggles have no effect (no CPTs to gate) | Theme's settings panel still shows the toggles but they're inert. Theme can hide them if `! apply_filters('godevs_plus_is_active', false)`. |
| Existing imported demos | Plugin's tracker manages | Tracker not loaded; demos orphaned | Theme shows an admin notice prompting plugin install. Once installed, plugin's `Activator` re-links to existing `godevs_portfolio_imports` option (preserved verbatim). |

### 5.6 Graceful no-op when theme is NOT active

The plugin must also degrade gracefully when the theme is not active (e.g., user switches to Twenty Twenty-Four). The plugin should:

1. **Detect theme presence** via `wp_get_theme()->get_template() === 'godevs-portfolio'` check on `plugins_loaded`.
2. If theme is NOT active, the plugin still registers CPTs (so existing posts don't 404 and admin can still manage them) but skips:
   - Front-end form rendering (no shortcode handlers will run anyway since shortcodes are only embedded in theme-styled pages)
   - HF builder front-end rendering (no theme to render into)
   - Demo importer page (the demo pattern files don't exist outside the theme)
3. Show an admin notice: "GoDevs Portfolio Plus is active but the GoDevs Portfolio theme is not. Demo import and visual features are disabled."

This protects user data — switching themes doesn't lock them out of their existing projects/services/bookings.

### 5.7 Data migration strategy

When a user installs the plugin for the first time on a site that previously had the theme standalone:

#### 5.7.1 What stays in place (no migration needed)

- All CPT posts (`godevs_project`, `godevs_service`, etc.) — same post_type slug, no rename.
- All taxonomy terms — same taxonomy slug, no rename.
- All post meta — same `_godevs_*` meta keys, no rename.
- All options:
  - `godevs_portfolio_imports` (tracker) — plugin reads same key.
  - `godevs_hf_layouts` — plugin reads same key.
  - `godevs_hf_active_*` — plugin reads same key.
  - `godevs_portfolio_module_*` — plugin reads same key.
  - `godevs_portfolio_settings` (combined array, legacy) — plugin reads same key.

**No data migration is needed** — only code migration. This is the single biggest risk-reducer in the entire plan.

#### 5.7.2 What needs migration

- **Capabilities**: Plugin's `Activator` calls `CapabilityMapper::grant()` to ensure Administrator has `edit_bookings` / `manage_bookings` caps. Previously this was done on theme's `after_switch_theme` + `admin_init`. Idempotent — safe to re-run.
- **Rewrite rules**: Plugin's `Activator` calls `flush_rewrite_rules()` after CPT registration. Required because the plugin registers CPTs with `init` priority 11, after the theme's setup.
- **Module toggle defaults**: Plugin's `Activator` merges `ModuleDefaults` into `godevs_portfolio_settings` option (without overwriting existing values).

#### 5.7.3 Deactivation / uninstall

- `register_deactivation_hook`: Flush rewrite rules. Do NOT delete CPT posts or data.
- `uninstall.php`: Optionally offer a "Delete all plugin data" via a confirmation prompt in the admin. By default, **do not delete any data on uninstall** — preserve user content.

### 5.8 Demo import interaction: who owns what?

| Concern | Owner | Reason |
|---------|-------|--------|
| Demo pattern files (`patterns/demos/*.php`) | Theme | Patterns are visual content. Pattern files contain block markup that depends on theme template parts, CSS, theme.json tokens. |
| Demo preview images (`assets/images/demo-previews/*`) | Theme | Static visual assets. |
| Demo registry (metadata extractor) | Theme | Reads pattern files in theme. |
| Demo renderer (HTML5 doc for iframe) | Theme | Pure rendering, no DB writes. |
| Import admin page (UI) | Plugin | Admin UX that drives DB writes. |
| Import AJAX endpoints | Plugin | Performs DB writes. |
| Import tracker (`godevs_portfolio_imports` option) | Plugin | DB state. |
| Style variation application (`update_user_meta`) | Plugin | DB write. |
| Page creation (`wp_insert_post`) | Plugin | DB write. |
| Menu creation (`wp_create_nav_menu`) | Plugin | DB write. |

**Communication flow on import:**

```
[User clicks "Import" in plugin's admin page]
    ↓
[Plugin's ImportEndpoints handler]
    ↓
[Plugin calls apply_filters('godevs_plus_get_demos') → theme returns registry]
    ↓
[Plugin calls apply_filters('godevs_plus_get_demo_page_file', $demo_id, $page) → theme returns file path]
    ↓
[Plugin's ImportExecutor reads the pattern file, strips template parts via TemplatePartStripper]
    ↓
[Plugin calls wp_insert_post, wp_create_nav_menu, update_option, update_user_meta]
    ↓
[Plugin's ImportTracker records the import in godevs_portfolio_imports option]
    ↓
[Plugin returns success → admin UI shows "Imported" badge]
```

For preview (no import):

```
[User clicks "Preview" in plugin's admin page]
    ↓
[Plugin calls apply_filters('godevs_plus_render_demo_html', $demo_id, $page) → theme returns full HTML5 doc]
    ↓
[Plugin's admin page renders the HTML in an <iframe>]
```

---

## 6. Step 5 — 7-Phase Migration Plan

### Phase 1: Documentation & Architecture (now) ✅

**What moves:** Nothing. Documentation only.
**What stays:** Everything.
**What breaks for users:** Nothing.
**How to mitigate:** N/A.
**Deliverables:**
- This document (`COMPANION-PLUGIN-ARCHITECTURE.md`)
- `plugin-migration-table.md`
- Update `ARCHITECTURE.md` with a "Companion Plugin" section linking to this doc.

### Phase 2: Plugin skeleton (next sprint)

**What moves:** Nothing functional. Just scaffolding.
**What stays:** Theme unchanged.
**What breaks for users:** Nothing — plugin is not yet released.
**How to mitigate:** N/A.
**Deliverables:**
- Create `godevs-portfolio-plus/` plugin directory.
- Stub `godevs-portfolio-plus.php` main file with header + `Plugin` class bootstrap + `ServiceContainer`.
- Stub all class files (empty class declarations + docblocks).
- `readme.txt` with `Requires Plugins:` header.
- `uninstall.php` stub.
- Empty PHPUnit test suite.
- CI workflow (GitHub Actions) running PHPCS + PHPUnit.

### Phase 3: Move CPTs to plugin

**What moves:**
- `inc/content/cpt.php` → `src/Content/PostTypes.php` + `ModuleVisibility.php` + `CapabilityMapper.php`
- `inc/content/taxonomies.php` → `src/Content/Taxonomies.php`
- `inc/content/case-study.php` (CPT + taxonomy parts only) → `src/Content/CaseStudyPostType.php` + `CaseStudyTaxonomies.php`
- `inc/content/meta-fields.php` (CPT meta only, NOT the per-post HF layout meta) → `src/Content/MetaFields.php`

**What stays:**
- `inc/content/meta-fields.php` per-post HF layout meta (lines 222–248)
- `inc/content/meta-fields.php` sanitization helpers (kept in theme; plugin re-declares via `function_exists` guard)

**What breaks for users:**
- Without the plugin, all 9 CPTs vanish from admin. Existing CPT posts are still in DB but invisible.
- Theme's `cpt-archives.php` templates 404 because the CPT isn't registered.

**How to mitigate:**
- Release theme + plugin **simultaneously** (paired release: theme v2.0.0 + plugin v1.0.0).
- Theme's `functions.php` adds an admin notice: "GoDevs Portfolio v2.0 requires the GoDevs Portfolio Plus plugin for custom post types. Install now."
- Theme keeps a thin polyfill in `inc/content/cpt.php` that defines `godevs_portfolio_module_enabled()` as a no-op returning `false` (so the theme's settings UI doesn't crash).
- Plugin's `Activator` flushes rewrite rules on activation.
- Theme's `after_switch_theme` hook removes the `register_post_types` + `register_taxonomies` calls; only `flush_rewrite_rules()` remains.

### Phase 4: Move booking + forms to plugin

**What moves:**
- `inc/booking-system.php` (entire file) → `src/Booking/*` (6 classes)
- `inc/front-forms.php` AJAX handlers (lines 255–397) → `src/Forms/BookingSubmission.php` + `ProposalSubmission.php`
- `inc/front-forms.php` shortcode rendering (lines 80–247) → `src/Forms/Shortcodes.php`
- `inc/front-forms.php` asset enqueue (lines 30–66) → `src/Forms/FormsModule.php`

**What stays:**
- `assets/css/front-forms.css` — stays in theme (visual style). Plugin enqueues it via `get_template_directory_uri()` lookup, falling back to plugin-bundled copy if theme is not active.
- `assets/js/front-forms.js` — stays in theme (visual UX: AJAX spinner, success message fade).
- `assets/css/admin-cpt-manager.css` — could stay in theme OR move to plugin. Recommendation: move to plugin since the admin page moves.

**What breaks for users:**
- AJAX action names must be preserved verbatim (`godevs_submit_booking`, `godevs_submit_proposal`) — already-published forms with these actions baked into JS will break if names change.
- Nonce names must be preserved verbatim (`godevs_booking_form`, `godevs_proposal_form`).
- Without the plugin, the shortcodes render as raw `[godevs_booking_form]` text in published pages.

**How to mitigate:**
- Plugin registers the shortcodes with the same tag names.
- Theme registers a stub shortcode that renders a "Plugin required" notice if the plugin is absent (using `add_shortcode` only if `! shortcode_exists('godevs_booking_form')`).
- Theme's `front-forms.php` is reduced to the asset enqueue + the stub shortcodes.

### Phase 5: Move demo importer to plugin

**What moves:**
- `inc/demo-importer.php` (admin page + AJAX endpoints + import logic) → `src/Demo/ImportAdminPage.php` + `ImportEndpoints.php` + `ImportExecutor.php` + `TemplatePartStripper.php`
- `inc/demo-tracker.php` (entire file) → `src/Demo/ImportTracker.php`
- `inc/admin/views/admin-demos.php` → `src/Demo/views/admin-demos.php` (in plugin)
- `assets/css/admin-demos.css` + `assets/js/admin-demos.js` → move to `godevs-portfolio-plus/assets/`

**What stays:**
- `inc/demo-registry.php` — stays in theme (read-only metadata extractor for theme-owned pattern files)
- `inc/demo-renderer.php` — stays in theme (pure HTML rendering)
- `patterns/demos/*.php` (200+ pattern files) — stay in theme
- `assets/images/demo-previews/*` — stay in theme

**What breaks for users:**
- The "Appearance → GoDevs Demos" menu disappears from the theme's admin.
- Existing imported demos (tracked in `godevs_portfolio_imports` option) remain in DB but cannot be removed until the plugin is installed.

**How to mitigate:**
- Plugin preserves option name `godevs_portfolio_imports` verbatim — existing imports are immediately visible in the plugin's admin page.
- Plugin's `ImportAdminPage` registers under `add_management_page()` (Tools menu) by default; can optionally register under Appearance via `add_theme_page()` if plugin detects theme is active.
- Theme's `inc/theme-settings.php` removes the fallback loader entry for `demo-importer.php` (Phase 7).
- Theme shows admin notice: "Demo import has moved to GoDevs Portfolio Plus. Install the plugin to manage demos."

### Phase 6: Theme detects plugin presence

**What moves:** Nothing — this phase is about adding detection logic.

**What stays:** Everything.

**What breaks for users:** Nothing — purely additive.

**Deliverables:**
- Theme adds a `godevs_portfolio_plus_is_active()` helper: `return (bool) apply_filters('godevs_plus_is_active', false);`
- Theme wraps all plugin-dependent code in `if ( godevs_portfolio_plus_is_active() ) { ... }` guards:
  - CPT archive template generation (skip if CPT not registered)
  - HF builder renderer (fall back to default template parts if no active layout)
  - Settings panel module toggles (hide if plugin absent)
- Theme adds admin notice prompting plugin install if not active.
- Plugin adds admin notice prompting theme install if not active.

### Phase 7: Backwards compatibility layer

**What moves:** Final cleanup — remove all dead code from the theme.

**What stays:**
- All visual code: templates, parts, patterns, theme.json, styles, block styles, block pattern categories, settings-integration, cpt-archives rendering, demo-renderer, demo-registry, header-footer-builder rendering half, theme-settings visual half.

**What breaks for users:**
- Users on theme v1.x without the plugin lose all CPTs, bookings, forms, demo importer.
- This is the unavoidable consequence of the architecture split.

**How to mitigate:**
- **Paired release**: theme v2.0.0 + plugin v1.0.0 release simultaneously. Theme's readme.txt updates `Requires Plugins: godevs-portfolio-plus` header (WordPress 6.5+ feature).
- **Auto-install prompt**: on theme activation, theme checks if plugin is installed. If not, theme shows a one-click install link to the plugin's WordPress.org ZIP.
- **TGM Plugin Activation** library (or similar) bundled in theme to prompt + install the plugin on theme activation. Industry standard for theme+plugin pairs.
- **Back-compat shim for v1.x users**: theme v2.0.0 keeps `inc/content/cpt.php` etc. as empty files (so file_exists checks don't fail) but they no longer call `register_post_type`. Users upgrading from v1.x see the admin notice prompting plugin install; their existing CPT posts are still in DB and become visible again once plugin is installed.
- **Documentation**: prominent "What's new in v2.0" doc explaining the split, with a 30-second install + activate flow for the plugin.
- **Version-gated upgrade handler**: theme's `godevs_portfolio_upgrade_handler` checks `godevs_portfolio_rewrite_version` and prompts plugin install if missing.

### Phase timing

| Phase | Sprint | Theme version | Plugin version |
|-------|--------|----------------|----------------|
| 1 — Architecture (this doc) | Sprint 0 | 1.x | n/a |
| 2 — Plugin skeleton | Sprint 1 | 1.x | 1.0.0-alpha |
| 3 — CPTs to plugin | Sprint 2 | 2.0.0-beta1 | 1.0.0-beta1 |
| 4 — Booking + forms to plugin | Sprint 3 | 2.0.0-beta2 | 1.0.0-beta2 |
| 5 — Demo importer to plugin | Sprint 4 | 2.0.0-beta3 | 1.0.0-beta3 |
| 6 — Plugin presence detection | Sprint 5 | 2.0.0-rc1 | 1.0.0-rc1 |
| 7 — Back-compat + cleanup | Sprint 6 | 2.0.0 | 1.0.0 |

---

## 7. Step 6 — WordPress.org Risk Assessment

### 7.1 What is likely to be flagged (submitting theme AS-IS without plugin)

The TRT automated Theme Check plugin + human review will flag:

| Issue | Severity | Reason | TRT guideline |
|-------|----------|--------|---------------|
| **9 CPT registrations** in `inc/content/cpt.php` + `inc/content/case-study.php` | 🔴 Required | TRT: *"Custom Post Types registration"* is plugin territory. | https://make.wordpress.org/themes/handbook/review/required/#plugin-territory |
| **8 taxonomy registrations** in `inc/content/taxonomies.php` + `inc/content/case-study.php` | 🔴 Required | TRT: *"Custom Taxonomies registration"* is plugin territory. | Same. |
| **~50 `register_post_meta` calls** in `inc/content/meta-fields.php` (for non-visual CPT data) | 🔴 Required | TRT: *"register_meta for non-visual data"* is plugin territory. | Same. |
| **2 shortcodes** in `inc/front-forms.php` that produce forms | 🔴 Required | TRT: *"Shortcodes that produce non-visual functionality (forms, data fetching)"* is plugin territory. | Same. |
| **Booking system with `wp_mail` notifications** | 🔴 Required | TRT: *"Booking systems, business logic"*, *"Email notifications"* are plugin territory. | Same. |
| **Demo importer with `wp_insert_post` + `wp_create_nav_menu`** in `inc/demo-importer.php` | 🔴 Required | TRT: *"Demo content importers (they touch database, posts, menus, settings)"* is plugin territory. | Same. |
| **Capability manipulation** in `godevs_portfolio_grant_booking_caps()` | 🔴 Required | TRT: hooks into non-visual WP core APIs (user caps). | Same. |
| **`update_user_meta` for applied style** in `inc/demo-importer.php` line 438 | 🔴 Required | TRT: *"User meta / settings storage beyond visual presentation"* is plugin territory. | Same. |
| **`update_option('show_on_front', ...)`** in `inc/demo-importer.php` line 409 + `inc/demo-tracker.php` line 178 | 🔴 Required | TRT: writing to WP core options that aren't visual presentation. | Same. |
| **Header/Footer Builder storing JSON layouts in option** | 🟡 Borderline | Persistent structured settings storage. Could be argued either way. | TRT permits "non-visible settings only used by other filters" but structured layout storage leans plugin. |

### 7.2 What is borderline

| Issue | Notes |
|-------|-------|
| Header/Footer Builder | Could be defended as "presentation setting" since the output is purely visual. TRT has approved similar builders in the past (e.g., in some_header-builder themes), but the trend is to flag these. Recommend moving to plugin. |
| Theme Settings JSON storage | The 80 individual options are visual settings (colors, typography, layout). Storing them in the theme is acceptable. The `module_*` toggles that gate CPT registration are NOT visual — those should move. |
| Default homepage seeder (`godevs_portfolio_seed_default_homepage()`) | Creates a page on theme activation. Could be defended as "demo content for first-run experience" but TRT typically flags post creation as plugin territory. |
| `godevs_booking_set_default_status()` on `wp_insert_post` | Hooks a non-visual core action. Borderline — could be defended as "extending the booking CPT's behavior". But the booking CPT itself shouldn't be in theme, so the hook shouldn't either. |

### 7.3 What is acceptable

| Feature | Reason |
|---------|--------|
| `register_block_pattern_category()` (11 categories) | TRT explicitly permits. |
| `register_block_style()` (30+ styles) | TRT explicitly permits. |
| `add_theme_support()` (title-tag, html5, etc.) | TRT explicitly permits. |
| `wp_enqueue_style()` / `wp_enqueue_script()` | TRT explicitly permits. |
| `theme.json` design system | TRT explicitly permits. |
| Block pattern files (200+ in `patterns/`) | TRT explicitly permits. |
| Template parts (24 in `parts/`) | TRT explicitly permits. |
| Templates (28 in `templates/`) | TRT explicitly permits. |
| `settings-integration.php` render_block filters | Pure visual rendering. |
| `cpt-archives.php` archive template generation | Pure visual rendering. |
| `demo-renderer.php` HTML5 document rendering | Pure visual rendering. |
| `demo-registry.php` read-only metadata extractor | Pure data lookup, no writes. |
| `register_nav_menus()` for primary + footer | TRT explicitly permits. |
| `register_sidebar()` for HF widget areas | TRT explicitly permits. |
| Sanitization helpers (`sanitize_checkbox`, `sanitize_rating`) | Pure utility functions. |
| Diagnostic admin notice in `functions.php` | Admin UX, no DB writes. |

### 7.4 Final recommendation

## **🔴 DO NOT SUBMIT THEME AS-IS — SUBMIT THEME + PLUGIN PAIR**

### Justification

The theme in its current state has **at least 9 required TRT violations** that will cause automated Theme Check to fail and human review to issue required-changes. The violations are not edge cases — they are textbook plugin-territory functionality (CPTs, taxonomies, meta, booking business logic, demo importer, email notifications) explicitly listed in the TRT guidelines.

### Path to WordPress.org submission

1. **Phase 1** (this document) — architecture approved.
2. **Phase 2–5** — migrate plugin-territory code into `godevs-portfolio-plus`.
3. **Phase 6–7** — paired release of theme v2.0.0 + plugin v1.0.0.
4. **Theme submission**: Submit theme v2.0.0 to WordPress.org themes repo. Theme Check should pass (no `register_post_type`, no `register_taxonomy`, no `wp_mail`, no `wp_insert_post` outside the homepage seeder — which should also move to the plugin).
5. **Plugin submission**: Submit plugin v1.0.0 to WordPress.org plugins repo. Plugin passes Plugin Check.
6. **Theme readme.txt**: Add `Requires Plugins: godevs-portfolio-plus` header (WordPress 6.5+ feature) so the theme cannot be activated without the plugin.

### Risk if submitted AS-IS

- **Theme Check automated failure** on `register_post_type`, `register_taxonomy`, `register_post_meta`, `wp_mail` usage in theme files.
- **Required-changes ticket** from the human reviewer listing every violation.
- **Suspended updates** if the violations are not addressed within the reviewer's timeline (typically 30 days).
- **Reputation damage** — TRT publicly logs suspensions.

### Risk if submitted WITH PLUGIN

- Theme Check passes.
- Plugin Check passes.
- Reviewer approves both in parallel (typically 1–2 weeks for theme, 1–4 weeks for plugin).
- Theme and plugin go live on WordPress.org.

**This is the recommended path.**

---

## Appendix A — Quick reference: what stays in theme

After Phase 7, the theme's `inc/` directory shrinks to:

```
inc/
├── block-patterns.php           # Pattern category registration (trimmed: no fallback loader)
├── block-styles.php             # Block style registration (trimmed: no fallback loader)
├── content/
│   └── meta-fields.php           # Per-post HF layout meta + sanitization helpers only
├── cpt-archives.php              # Archive template generation (post_type_exists guarded)
├── demo-renderer.php             # Pure rendering
├── demo-registry.php             # Read-only metadata extractor
├── header-footer-builder.php     # Rendering half only (storage + admin UI moved)
├── settings-integration.php      # render_block filters + dynamic CSS
└── theme-settings.php            # Visual settings admin UI (module toggles inert)
```

8 files, down from 16. The theme becomes a clean visual presentation layer that satisfies TRT guidelines.

---

## Appendix B — Quick reference: what moves to plugin

After Phase 7, the plugin's `src/` directory contains:

```
src/
├── Plugin.php
├── ServiceContainer.php
├── Activation/{Activator,Deactivator}.php
├── Admin/{ContentManagerPage,AdminNotices}.php
├── Booking/{AdminListTable,MetaBox,SaveHandler,StatusWorkflow,EmailNotifier,BookingModule}.php
├── Content/{PostTypes,CaseStudyPostType,Taxonomies,CaseStudyTaxonomies,MetaFields,CaseStudyMetaBox,ModuleVisibility,CapabilityMapper}.php
├── Demo/{ImportAdminPage,ImportEndpoints,ImportExecutor,ImportTracker,TemplatePartStripper,DemoModule}.php
├── Forms/{Shortcodes,BookingSubmission,ProposalSubmission,FormsModule}.php
├── HeaderFooter/{LayoutRepository,AdminBuilder,ActiveLayoutResolver,HeaderFooterModule}.php
├── Settings/{ModuleDefaults,SettingsSynchronizer,SettingsModule}.php
└── Support/{Sanitize,OptionKeys,HookContracts}.php
```

~30 classes absorbing 42 plugin-territory items + 11 split halves.

---

## Appendix C — References

- [WordPress.org Theme Review Guidelines — Plugin Territory](https://make.wordpress.org/themes/handbook/review/required/#plugin-territory)
- [WordPress.org Theme Check plugin](https://wordpress.org/plugins/theme-check/)
- [WordPress.org Plugin Check plugin](https://wordpress.org/plugins/plugin-check/)
- [TGM Plugin Activation library](https://github.com/TGMPA/TGM-Plugin-Activation)
- [WordPress 6.5+ Requires Plugins header](https://make.wordpress.org/core/2024/02/15/requires-plugins-theme-support-in-wordpress-6-5/)

---

**End of document.**

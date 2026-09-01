# Plugin Migration Table — GoDevs Portfolio → GoDevs Portfolio Plus

> Companion to [`COMPANION-PLUGIN-ARCHITECTURE.md`](./COMPANION-PLUGIN-ARCHITECTURE.md).
> This table lists every plugin-territory piece of functionality currently
> living in the theme and prescribes its destination in the companion
> plugin `godevs-portfolio-plus`.

Legend for **Migration Risk**:
- 🟢 **Low** — Pure code move, no data migration, no breaking change for users.
- 🟡 **Medium** — Requires either a data migration step, a back-compat shim, or coordinated release timing.
- 🔴 **High** — Breaks user-facing behavior if not handled carefully; needs feature-flag or version-gated rollout.

---

## 1. Custom Post Types (CPTs)

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/content/cpt.php` — `godevs_portfolio_register_post_types()` (lines 76–318) | Registers 8 CPTs: `godevs_project`, `godevs_service`, `godevs_team`, `godevs_testimonial`, `godevs_booking`, `godevs_experience`, `godevs_education`, `godevs_faq` | `godevs-portfolio-plus/src/Content/PostTypes.php` | TRT: CPT registration is plugin territory. CPTs are persistent data — should survive theme switching. | 🟡 Medium — CPT slugs are already stable so existing posts keep working, but rewrite-rule flush timing matters. Plugin must register on `init` prio 11 (after theme setup). |
| `inc/content/cpt.php` — `godevs_portfolio_module_enabled()` (lines 42–66) | Reads `godevs_portfolio_module_*` options to decide whether a CPT is registered | `godevs-portfolio-plus/src/Content/ModuleVisibility.php` | Module toggles govern CPT registration — this is the gating logic for plugin-territory CPTs. | 🟢 Low — Pure read helper; theme reads same option to render admin UI. |
| `inc/content/cpt.php` — `godevs_portfolio_grant_booking_caps()` (lines 332–363) | Adds `edit_bookings`/`manage_bookings` caps to Administrator role via `after_switch_theme` + `admin_init` | `godevs-portfolio-plus/src/Content/CapabilityMapper.php` on `register_activation_hook` + `admin_init` | Modifies `$wp_roles` (persistent user capability storage). TRT: user meta / capability manipulation is plugin territory. | 🟡 Medium — Plugin activation hook must re-grant caps; if user deactivates plugin, optionally revoke (decision needed). |
| `inc/content/case-study.php` — `godevs_portfolio_register_case_study_cpt()` (lines 32–66) | Registers `godevs_case_study` CPT | `godevs-portfolio-plus/src/Content/CaseStudyPostType.php` | CPT registration = plugin territory. | 🟢 Low — Same slug, posts persist. |

## 2. Taxonomies

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/content/taxonomies.php` — `godevs_portfolio_register_taxonomies()` (lines 28–145) | Registers 5 taxonomies: `godevs_project_category`, `godevs_project_tag`, `godevs_service_category`, `godevs_team_department`, `godevs_faq_category` | `godevs-portfolio-plus/src/Content/Taxonomies.php` | TRT: custom taxonomy registration is plugin territory. | 🟡 Medium — Taxonomy terms survive, but term URLs depend on rewrite flush; must flush on plugin activation. |
| `inc/content/case-study.php` — `godevs_portfolio_register_case_study_taxonomies()` (lines 75–140) | Registers 3 case-study taxonomies (`type`, `industry`, `technology`) | `godevs-portfolio-plus/src/Content/CaseStudyTaxonomies.php` | Taxonomy registration = plugin territory. | 🟢 Low. |

## 3. Meta Field Registration

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/content/meta-fields.php` — `godevs_portfolio_register_meta_fields()` (lines 30–249) for all 7 CPT meta fields | Registers ~50 `register_post_meta()` calls for project/service/team/testimonial/booking/experience/education | `godevs-portfolio-plus/src/Content/MetaFields.php` | TRT: persistent post meta registration belongs with the CPT it extends. | 🟢 Low — Meta keys are already prefixed `_godevs_*` and stable; existing values persist. |
| `inc/content/meta-fields.php` — per-post `_godevs_page_{header,footer}_layout` meta (lines 222–248) | Registers layout override meta for `page` and `post` post types | **STAYS in theme** (`inc/content/meta-fields.php`) | This is a visual presentation override — pure theme territory. Theme must declare it so the block editor exposes the toggle. | 🟢 Low — No move needed. |
| `inc/content/meta-fields.php` — `godevs_portfolio_sanitize_checkbox()`, `godevs_portfolio_sanitize_rating()` (lines 258–277) | Sanitization helpers used by meta registration | Move to plugin `src/Support/Sanitize.php`; theme keeps a thin polyfill for backwards-compat | Helpers are called by `sanitize_callback` arrays in `register_post_meta`. If meta moves, helpers must move too. | 🟢 Low — Pure functions; theme can `function_exists` guard if it keeps a stub. |
| `inc/content/case-study.php` — case-study meta box UI + save handler (lines 250–425) | Meta box rendering + `save_post_godevs_case_study` handler that writes `_godevs_cs_*` meta | `godevs-portfolio-plus/src/Content/CaseStudyMetaBox.php` | Admin UI + save logic for a plugin-territory CPT. | 🟡 Medium — Save handler must keep nonce name + meta key prefixes identical or existing posts lose their data on next save. |

## 4. Booking System (full business logic)

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/booking-system.php` — list-table columns, status filter, bulk actions (lines 1–250) | Custom admin list-table UX for `godevs_booking` CPT | `godevs-portfolio-plus/src/Booking/AdminListTable.php` | Admin UI for plugin-territory CPT. | 🟡 Medium — Hook priorities (`manage_godevs_booking_posts_columns`) must match. |
| `inc/booking-system.php` — booking meta box + `save_post_godevs_booking` save handler (lines 250–424) | Booking detail meta box; writes `_godevs_booking_*` meta | `godevs-portfolio-plus/src/Booking/MetaBox.php` + `SaveHandler.php` | Booking admin UX + business logic. | 🟡 Medium — Nonce name (`godevs_booking_meta`) must be preserved verbatim. |
| `inc/booking-system.php` — `godevs_booking_send_status_email()` (lines 433–483) | Sends `wp_mail()` to client on status change | `godevs-portfolio-plus/src/Booking/EmailNotifier.php` | TRT: email notifications are plugin territory. | 🟢 Low — Pure logic move. |
| `inc/booking-system.php` — `godevs_booking_set_default_status()` on `wp_insert_post` (lines 519–532) | Auto-sets `_godevs_booking_status='pending'` on new booking posts | `godevs-portfolio-plus/src/Booking/StatusWorkflow.php` | Hooks into non-visual WP core API; belongs with booking logic. | 🟢 Low. |
| `inc/booking-system.php` — admin CSS for booking status badges (lines 488–510) | Inline admin CSS for `.godevs-booking-status-*` badges | `godevs-portfolio-plus/assets/css/admin-booking.css` | Visual presentation of plugin-managed CPT. | 🟢 Low. |

## 5. Front-End Forms

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/front-forms.php` — `godevs_booking_form_shortcode()` (lines 80–172) + `godevs_proposal_form_shortcode()` (lines 184–247) | Shortcode HTML rendering | `godevs-portfolio-plus/src/Forms/Shortcodes.php` | TRT: shortcodes that produce forms (non-visual functionality) are plugin territory. The rendered HTML may keep its template in the theme if visual style is desired. | 🟡 Medium — Shortcode tag (`godevs_booking_form`) MUST stay identical or pages with existing shortcodes break. |
| `inc/front-forms.php` — `godevs_ajax_submit_booking()` (lines 255–336) | AJAX handler: `wp_insert_post` + `update_post_meta` × 8 + `wp_mail` to admin | `godevs-portfolio-plus/src/Forms/BookingSubmission.php` | TRT: form submission handlers + wp_mail + DB writes are plugin territory. | 🔴 High — AJAX action name (`godevs_submit_booking`) + nonce name (`godevs_booking_form`) MUST be preserved verbatim, or already-embedded forms on existing pages stop working. |
| `inc/front-forms.php` — `godevs_ajax_submit_proposal()` (lines 344–397) | AJAX handler: `wp_mail` to admin (no DB write) | `godevs-portfolio-plus/src/Forms/ProposalSubmission.php` | Email-only handler — plugin territory. | 🔴 High — Same nonce/action name preservation requirement. |
| `inc/front-forms.php` — `godevs_forms_enqueue_styles()` (lines 30–66) | Enqueues `front-forms.css` + `front-forms.js` only when shortcode is on page | Plugin should enqueue its own asset bundle. Theme keeps the CSS file but plugin copies/symlinks it OR plugin bundles its own asset file with identical class hooks. | Enqueue orchestration is plugin concern; CSS file ownership is a style decision. | 🟡 Medium — The `.godevs-form` class hooks must stay identical so existing CSS works regardless of who enqueues. |

## 6. Demo Import System

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/demo-importer.php` — admin page registration `godevs_portfolio_register_admin_page()` (lines 31–40) | Adds `Appearance → GoDevs Demos` menu | `godevs-portfolio-plus/src/Demo/ImportAdminPage.php` — page now under **Tools** menu (plugin convention) OR remain under Appearance via `add_management_page()` | TRT: demo importers that touch the DB are plugin territory. Page location can change but user discoverability should be preserved via a redirect notice in theme. | 🟡 Medium — Users will look under Appearance → GoDevs Demos; theme should add a notice pointing them to the new location. |
| `inc/demo-importer.php` — admin asset enqueues (lines 61–90) | Enqueues `admin-demos.css` + `admin-demos.js` + localizes AJAX nonce | `godevs-portfolio-plus/src/Demo/ImportAdminPage.php` enqueue method | Asset enqueue should sit with the page that uses it. | 🟢 Low. |
| `inc/demo-importer.php` — AJAX endpoints (get_import_details, import_demo, remove_demo, etc.) | All AJAX handlers — call `wp_insert_post`, `wp_create_nav_menu`, `wp_update_nav_menu_item`, `update_option`, `update_user_meta` | `godevs-portfolio-plus/src/Demo/ImportEndpoints.php` | TRT: importers that create posts/menus/options are explicitly plugin territory. | 🔴 High — Action names + nonces (`godevs_demo_admin`) must be preserved or the admin JS breaks. |
| `inc/demo-importer.php` — `godevs_portfolio_seed_default_homepage()` in functions.php (lines 378–480) | Seeds default Home page on theme activation via `wp_insert_post` + `update_option('page_on_front')` | Move seeding trigger to plugin `register_activation_hook`; theme keeps a fallback that creates a stub page using a block pattern (visual only) if plugin is absent | Seeding pages on activation is borderline — currently it's data creation (plugin) but functionally serves as visual demo. Recommended: move to plugin, theme degrades gracefully. | 🔴 High — Switching users who never install the plugin would lose the auto-homepage. Theme should keep a "no-plugin" minimal seed OR document the plugin as required. |
| `inc/demo-importer.php` — `godevs_portfolio_strip_template_parts_from_content()` (used line 336) | Strips `<!-- wp:template-part -->` from imported page content | `godevs-portfolio-plus/src/Support/TemplatePartStripper.php` | Helper used only by importer; moves with it. | 🟢 Low. |
| `inc/demo-renderer.php` — `godevs_portfolio_render_demo_html()` (lines 38–77) | Renders demo HTML for iframe preview | **STAYS in theme** (`inc/demo-renderer.php`) | Pure rendering, no DB writes — visual concern. Theme is the only place the demo pattern files live anyway. | 🟢 Low. |
| `inc/demo-registry.php` — `godevs_portfolio_get_demos()` etc. | Reads demo pattern file metadata | **STAYS in theme** (`inc/demo-registry.php`) | Pure data registry, no DB writes. The patterns themselves are theme files. Plugin fetches the registry via a `godevs_portfolio_get_demos` filter so it can iterate and import. | 🟢 Low. |
| `inc/demo-tracker.php` — `godevs_portfolio_tracker_*` functions (entire file) | Records import state in `godevs_portfolio_imports` option; trashes pages, deletes menus, resets options on removal | `godevs-portfolio-plus/src/Demo/ImportTracker.php` | TRT: persistent custom settings storage + DB writes are plugin territory. | 🔴 High — Option name (`godevs_portfolio_imports`) MUST be preserved verbatim or prior imports become orphaned and un-removable. |

## 7. Header/Footer Builder

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/header-footer-builder.php` — `godevs_hf_get_layouts/save_layout/delete_layout/get_active/set_active` (lines 23–105) | Stores JSON layouts in `godevs_hf_layouts` option + active slug in `godevs_hf_active_{header,footer}` | `godevs-portfolio-plus/src/HeaderFooter/LayoutRepository.php` | TRT: persistent structured settings storage is borderline — moving to plugin improves longevity across theme switches. | 🔴 High — Option names MUST be preserved verbatim or existing layouts vanish. |
| `inc/header-footer-builder.php` — admin builder UI (AJAX endpoints, view rendering) | Admin drag-and-drop builder UI | `godevs-portfolio-plus/src/HeaderFooter/AdminBuilder.php` | Admin UI for plugin-managed data. | 🟡 Medium — AJAX action names + nonces (`godevs_settings_save`) must be preserved. |
| `inc/header-footer-builder.php` — `godevs_hf_render_layout()` front-end rendering (wp_head/wp_footer hooks) | Renders saved layouts to front-end HTML | **STAYS in theme** — theme reads layouts via `godevs_hf_get_active()` (provided by plugin or theme polyfill) and renders. Theme territory: visual rendering. | Pure rendering concern + depends on theme template-parts. | 🟡 Medium — Theme must `function_exists` guard the layout fetcher so it degrades to default template parts when plugin is absent. |
| `inc/header-footer-builder.php` — `godevs_hf_register_sidebars()` (lines 1281–1302) | Registers 2 widget areas | **STAYS in theme** — `register_sidebar` is theme-side, theme.json/sidebar support is conventional. | Widget areas are visual layout containers. | 🟢 Low. |
| `inc/header-footer-builder.php` — `godevs_hf_enqueue_css()` (lines 1260–1275) | Enqueues `header-footer-builder.css` + `hf-frontend.js` | **STAYS in theme** | Asset enqueue for front-end rendering = theme territory. | 🟢 Low. |

## 8. Theme Settings

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/theme-settings.php` — `godevs_portfolio_get_default_settings()` (lines 25–118) | Returns ~80 default settings (visual + module toggles + CPT archive layouts) | **SPLIT**: Visual defaults stay in theme; module-toggle defaults (`module_*`) move to plugin `src/Settings/ModuleDefaults.php`. | Mixed visual + business concerns. Visual settings = theme. Module toggles govern CPT registration = plugin. | 🟡 Medium — Both halves read same `godevs_portfolio_settings` option; needs careful merge logic during migration. |
| `inc/theme-settings.php` — `godevs_portfolio_get_setting()` (lines 121–124) | Reads `godevs_portfolio_*` option | Shared helper — keep in theme; plugin calls theme's function if available, else reads option directly. | Used by both visual (theme) and module-toggle (plugin) concerns. | 🟢 Low. |
| `inc/theme-settings.php` — `godevs_portfolio_settings_register_menu()` (lines 130–139) | Adds `Appearance → GoDevs Settings` menu | **STAYS in theme** — admin UI for visual settings is theme territory. | Visual settings admin page. | 🟢 Low. |
| `inc/theme-settings.php` — `godevs_portfolio_settings_register()` (lines 141–151) | `register_setting()` for ~80 options | **SPLIT**: visual settings registered in theme; module-toggle settings registered in plugin. | Same split rationale as defaults. | 🟡 Medium — Both must register same option name pattern (`godevs_portfolio_*`). |
| `inc/theme-settings.php` — AJAX save handler `godevs_portfolio_ajax_save_settings()` (lines 188–221) | Saves all settings via `update_option` | **STAYS in theme** but invokes plugin's `godevs_plus_save_module_settings()` hook so plugin can react to module toggles. | Unified settings save UX — admin should not have two separate panels. | 🟡 Medium — Plugin must hook on `godevs_portfolio_settings_saved` action. |
| `inc/theme-settings.php` — fallback loader (lines 13–19) | Pre-loads cpt/taxonomies/meta-fields/case-study/demo-registry/demo-tracker/demo-importer | Remove from theme (since those files move to plugin) OR keep as a *thin* polyfill that loads from plugin path if present. | Back-compat shim for users who don't install the plugin. | 🔴 High — Removing it abruptly breaks CPTs on legacy sites. Phase 7 (back-compat) addresses this. |
| `inc/theme-settings.php` — `godevs_portfolio_generate_dynamic_css()` | Compiles dynamic CSS from settings | **STAYS in theme** — visual concern. | Pure rendering. | 🟢 Low. |

## 9. CPT Archive Layout

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/cpt-archives.php` — `godevs_cpt_archive_generate_inner_template()` (lines 78–429) | Generates inner block markup for `core/post-template` on CPT archives based on theme settings | **STAYS in theme** — pure visual template generation. | Visual rendering only; reads CPT slug (which plugin owns) + theme settings. | 🟢 Low — Theme can `post_type_exists` guard each CPT case. |
| `inc/cpt-archives.php` — `godevs_cpt_archive_settings_map()` filter | Maps CPT slugs to settings prefixes | **STAYS in theme** — but should fire only if the CPT exists (plugin registered it). | Coupled to both CPT existence (plugin) and visual rendering (theme). | 🟢 Low. |
| `inc/cpt-archives.php` — `godevs_cpt_archive_enqueue_styles()` (line 428) | Enqueues archive grid CSS | **STAYS in theme** | Visual asset enqueue. | 🟢 Low. |

## 10. CPT Admin Manager

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/cpt-admin.php` — `godevs_cpt_admin_register_page()` (lines 21–30) | Adds `Appearance → Content Manager` menu | `godevs-portfolio-plus/src/Admin/ContentManagerPage.php` — move under Tools menu, OR keep under Appearance via `add_theme_page()` (acceptable since it's listing CPT admin links). | Admin UX that lists plugin-territory CPTs. | 🟡 Medium — Theme should show "Install GoDevs Portfolio Plus to manage content" notice if plugin absent. |
| `inc/cpt-admin.php` — `godevs_cpt_admin_get_theme_cpts()` (lines 74+) | Static array of CPT metadata | Plugin: dynamic via `get_post_types(array('_builtin'=>false))` filtered to `godevs_*` | CPT catalog should sit with the CPTs themselves. | 🟢 Low. |
| `inc/cpt-admin.php` — admin CSS enqueue (lines 35–45) | Enqueues `admin-cpt-manager.css` | Plugin `assets/css/admin-content-manager.css` | Asset for plugin page. | 🟢 Low. |

## 11. Block Patterns / Block Styles (currently contaminated fallback loaders)

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `inc/block-patterns.php` — `godevs_portfolio_register_pattern_categories()` (lines 52+) + `register_block_pattern_category()` (line 163) | Registers 11 portfolio-specific pattern categories | **STAYS in theme** — TRT permits pattern category registration in theme. | Pure visual concern. | 🟢 Low. |
| `inc/block-patterns.php` — fallback loader (lines 22–40) | Pre-loads cpt/taxonomies/meta-fields/case-study/demo-registry/demo-tracker | **REMOVE** the CPT/taxonomy/meta/case-study/demo-tracker require_once calls; keep ONLY demo-registry require (which is read-only). | Those files moved to plugin; the theme shouldn't double-load them. | 🔴 High — Removing without Phase 7 back-compat shim breaks users who never install the plugin. |
| `inc/block-styles.php` — `godevs_portfolio_register_block_styles()` (lines 57+) with 30+ `register_block_style` calls | Registers block style variants (visual only — CSS classes) | **STAYS in theme** — TRT explicitly permits block style registration. | Pure visual concern. | 🟢 Low. |
| `inc/block-styles.php` — fallback loader (lines 19–42) | Same as block-patterns.php — pre-loads CPT/taxonomy/meta/case-study/demo-registry/demo-tracker | **REMOVE** (same as above). | Same rationale. | 🔴 High. |

## 12. functions.php (theme entry point)

| Current Location | Functionality | Recommended Location | Reason | Migration Risk |
|------------------|--------------|---------------------|--------|----------------|
| `functions.php` — `godevs_portfolio_setup()` `add_theme_support()` calls (lines 29–66) | Standard theme support flags + nav menu registration | **STAYS in theme** | TRT textbook theme territory. | 🟢 Low. |
| `functions.php` — `godevs_portfolio_enqueue_styles()` (lines 79–111) | Enqueues theme.css, style.css, reveal.js | **STAYS in theme** | Visual asset enqueue. | 🟢 Low. |
| `functions.php` — `godevs_portfolio_seed_default_settings()` on `after_switch_theme` (lines 328–366) | Deletes + re-seeds `godevs_portfolio_settings` option; calls `godevs_portfolio_seed_default_homepage()` | **SPLIT**: visual-setting seed stays in theme; module-toggle seed moves to plugin's `register_activation_hook`. Homepage seeding moves to plugin entirely. | Mixed visual + business data creation. | 🟡 Medium — Both must coordinate to not stomp each other's option keys. |
| `functions.php` — `godevs_portfolio_flush_rewrites_on_switch()` (lines 493–521) | Calls `godevs_portfolio_register_post_types()` + `register_taxonomies()` + `register_case_study_*` + `flush_rewrite_rules()` on theme activation | Plugin's `register_activation_hook` should call its own registration + flush. Theme hook should be removed OR reduced to a no-op that calls `flush_rewrite_rules()` only. | CPT/taxonomy registration has moved to plugin. | 🔴 High — Theme must NOT call register_post_types after the move (function won't exist in theme). |
| `functions.php` — `godevs_portfolio_upgrade_handler()` on `admin_init` (lines 546–616) | Version-aware upgrade: re-seeds settings, re-registers CPTs/taxonomies, flushes rewrites | Plugin owns its own upgrade handler keyed on its own version option (`godevs_portfolio_plus_version`). Theme's upgrade handler keeps only the visual-settings seed step. | Coordinated upgrade logic. | 🔴 High — Two upgrade handlers running independently can race; must agree on who owns which option keys. |
| `functions.php` — `_godevs_files` array (lines 136–154) | Lists 16 inc/ files to require_once | Trim to ~8 files (visual + integration only): block-patterns, block-styles, settings-integration, demo-renderer, demo-registry, cpt-archives, theme-settings, header-footer-builder (rendering half). | The other 8 files moved to plugin. | 🔴 High — Users without plugin lose all CPTs/bookings/forms/importer. Back-compat layer (Phase 7) handles this. |

---

## Summary Tally

| Category | THEME-territory items | PLUGIN-territory items | MIXED items needing split |
|----------|----------------------|------------------------|---------------------------|
| CPTs | 0 | 9 | 0 |
| Taxonomies | 0 | 8 | 0 |
| Meta fields | 1 (per-post HF layout) | ~50 (across 7 CPTs) | 0 |
| Booking system | 0 | 6 | 0 |
| Front-end forms | 0 | 4 | 1 (shortcodes split render vs. submit) |
| Demo importer | 2 (renderer + registry) | 5 | 1 (importer split UI vs. logic) |
| Header/Footer builder | 2 (render + enqueue) | 2 (storage + admin UI) | 1 |
| Theme settings | 4 | 2 | 3 (defaults split, save handler, fallback loader) |
| CPT archives | 3 | 0 | 0 |
| CPT admin | 0 | 3 | 0 |
| Block patterns/styles | 2 (registration only) | 0 | 2 (fallback loaders need trimming) |
| functions.php | 2 | 3 | 3 (seed, flush, upgrade, file list) |
| **TOTALS** | **16** | **42** | **11** |

**Net recommendation:** 42 plugin-territory items + 11 splits must move to `godevs-portfolio-plus`. 16 theme-territory items stay. Theme shrinks from 16 inc/ files to ~8.

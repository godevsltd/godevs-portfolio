# Phase 8 — Dynamic Content Management System

**Document version:** 0.8.0
**Phase:** 8 — Dynamic Portfolio Content Management System

## Overview

Phase 8 adds a professional Dynamic Content / Custom Post Type system that allows portfolio websites to manage projects, services, team members, testimonials, bookings, experience, education, and FAQs dynamically — without touching code.

## CPTs Created

| CPT | Post Type | Public | REST | Archive | Single Template |
|---|---|---|---|---|---|
| Projects | `godevs_project` | Yes | Yes | Yes | Yes |
| Services | `godevs_service` | Yes | Yes | Yes | Yes |
| Team | `godevs_team` | Yes | Yes | Yes | Yes |
| Testimonials | `godevs_testimonial` | Yes | Yes | No | No |
| Bookings | `godevs_booking` | **No** | **No** | **No** | **No** |
| Experience | `godevs_experience` | Yes | Yes | No | No |
| Education | `godevs_education` | Yes | Yes | No | No |
| FAQs | `godevs_faq` | Yes | Yes | No | No |

## Taxonomies Created

| Taxonomy | Post Type | Type |
|---|---|---|
| `godevs_project_category` | Projects | Hierarchical |
| `godevs_project_tag` | Projects | Flat |
| `godevs_service_category` | Services | Hierarchical |
| `godevs_team_department` | Team | Hierarchical |
| `godevs_faq_category` | FAQs | Hierarchical |

## Dynamic Templates

| Template | Purpose |
|---|---|
| `archive-godevs_project.html` | Project archive with 3-column grid, featured image, categories, excerpt, pagination, empty state |
| `single-godevs_project.html` | Project single with title, categories, author, date, featured image (21/9), content, separator, next-project nav |
| `archive-godevs_service.html` | Service archive with 3-column card grid, title, excerpt, read-more |
| `single-godevs_service.html` | Service single with title, featured image, content |
| `archive-godevs_team.html` | Team archive with 3-column grid, circular portraits, names, departments |
| `single-godevs_team.html` | Team single with portrait + bio split layout |

## Module Visibility System

All 8 CPTs can be individually enabled/disabled via Appearance → GoDevs Settings → Content Modules.

**When a module is disabled:**
- The CPT is not registered
- The admin menu disappears
- No public routes are available
- **Existing content is preserved** — not deleted
- Re-enabling restores access immediately

## Booking Security

The `godevs_booking` CPT is designed for **private appointment requests**:
- `public => false` — not publicly queryable
- `show_in_rest => false` — booking data NOT exposed via REST API
- `publicly_queryable => false` — no public single pages
- `exclude_from_search => true` — not in search results
- `has_archive => false` — no public archive
- Meta fields use `auth_callback` requiring `manage_options` capability
- All booking meta fields have `show_in_rest => false`
- Capability type is `post` with `map_meta_cap => true`

## Meta Fields

All meta fields are registered via `register_post_meta()` with:
- Proper sanitization callbacks (`sanitize_text_field`, `esc_url_raw`, `sanitize_email`, `sanitize_textarea_field`, `godevs_portfolio_sanitize_checkbox`, `godevs_portfolio_sanitize_rating`)
- `auth_callback` checking `edit_posts` (public CPTs) or `manage_options` (bookings)
- `show_in_rest => true` for public CPTs, `false` for bookings

## Backward Compatibility

- 1,070 patterns — unchanged
- 102 demos — unchanged
- 12 style variations — unchanged
- 16 custom block styles — unchanged
- 23 template parts — unchanged
- Existing templates — unchanged (6 new templates added)
- Demo importer — preserved
- Theme settings — extended (Content Modules section added)
- Gutenberg compatibility — preserved (all audits pass)

## Security

- All PHP files have ABSPATH guards
- All meta fields use sanitization callbacks
- Booking data is completely private
- No direct database queries
- No remote requests
- No inline JavaScript
- No `eval()`, `exec()`, or forbidden functions
- Settings API used for all configuration
- Capability checks on all auth callbacks

## Performance

- CPT files loaded via `require_once` in functions.php (not admin-gated — needed for `init` hook)
- No external dependencies
- No JavaScript added
- No new CSS files (templates use existing design tokens)
- No new database tables
- CPT registration is lightweight (standard WordPress `register_post_type`)

## Accessibility

- All dynamic templates use semantic HTML via `tagName` block attributes
- Heading hierarchy maintained (H1 → H2 → H3)
- Empty states have descriptive text
- Featured images use proper alt text (via WordPress core)
- Navigation is keyboard accessible (via `core/navigation` and `core/post-navigation-link`)
- Focus states preserved from Phase 6/7

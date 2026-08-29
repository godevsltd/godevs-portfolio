# Theme Settings — GoDevs Portfolio

GoDevs Portfolio intentionally ships almost no theme settings. The
WordPress block theme model replaces the classic Customizer settings
with the Site Editor Styles panel. This document explains what is
configurable, where it is configured, and how a user is expected to
customise the theme.

---

## 1. Configuration surface

| What | Where it lives | How a user changes it |
|------|----------------|-----------------------|
| Design system (palette, type, spacing, layout) | `theme.json` | Site Editor → Styles → Colors / Typography / Layout |
| Style variation | `/styles/*.json` | Site Editor → Styles → Browse styles |
| Header | `parts/header.html` | Site Editor → Template Parts → Header |
| Footer | `parts/footer.html` | Site Editor → Template Parts → Footer |
| Mobile menu | `parts/mobile-menu.html` | Site Editor → Template Parts → Mobile Menu |
| Templates | `templates/*.html` | Site Editor → Templates |
| Site logo | WordPress core | Site Editor → Site Icon & Logo |
| Site tagline | WordPress core | Settings → General → Tagline |
| Site icon (favicon) | WordPress core | Settings → General → Site Icon |
| Navigation menu | WordPress core | Site Editor → Navigation |
| Custom template per page | Page Editor sidebar | Page Editor → Settings → Template |
| Per-page styles | Block Editor | Block Editor → Styles → per block |

The theme does *not* ship a Customizer panel, a settings page, or
custom block configuration UI. Anything the user wants to change is
either in the Site Editor or in the WordPress core Settings menu.

## 2. Why no settings page

WordPress.org theme review guidelines discourage custom settings
pages in block themes. The native Site Editor is the canonical
customisation surface; a second customisation surface competes with
it, confuses non-technical users, and creates maintenance burden.

The classic Customizer is still supported in WordPress 6.5+ for
backward compatibility, but block themes do not require any
Customizer sections. The theme does not register Customizer sections
or controls.

## 3. What you can change in the Site Editor

### Site-level styles
Site Editor → Styles exposes:
- **Colors** — palette tokens, custom colours. Editing a palette
  token here overrides `theme.json` for the current site.
- **Typography** — font families, font sizes, line-heights, letter-
  spacing per element.
- **Layout** — content width, wide width.
- **Blocks** — per-block style overrides (e.g. site-title font
  size).
- **Style Variations** — switch between Minimal, Dark, and the
  implicit default.

### Template parts
Site Editor → Template Parts exposes:
- **Header** — the parts/header.html markup.
- **Footer** — the parts/footer.html markup.
- **Mobile Menu** — the parts/mobile-menu.html markup.

### Templates
Site Editor → Templates exposes:
- **Front Page** — the front-page template.
- **Posts Page (Home)** — the home template.
- **Index** — the index template.
- **Page** — the page template.
- **Single** — the single template.
- **Archive** — the archive template.
- **Search** — the search template.
- **404** — the 404 template.

The user can edit any of these without touching code. Edits are
saved to the database as `wp_template` posts (or `wp_template_part`
for parts), preserving the original file markup as a fallback.

## 4. What you can change in the Customizer

The Customizer is not used for theme-specific settings in v0.1.
The native Customizer sections (Site Identity, Colors, etc.) still
appear because WordPress core registers them, but they mirror
what is configurable in the Site Editor. The recommended path is
the Site Editor.

## 5. Plugin-dependent settings

When GoDevs Core ships (Phase 8), the plugin will register:

- Portfolio / Services / Testimonials / Team / Case Studies admin
  menus and their respective settings.
- A Business Profile settings page for business name, tagline,
  logo, description, email, phone, address, hours, website, social
  links, and CTA.

The theme does not duplicate any of these. If a user wants to change
the business email displayed in the Contact pattern, they edit the
pattern directly in the Site Editor. If they want the email to be
data-driven (single source of truth across multiple patterns), they
install GoDevs Core and edit the Business Profile settings.

## 6. Settings the theme does NOT introduce

For clarity, the following settings surfaces are intentionally
*not* shipped in v0.1 and are not planned for any future version:

- A Customizer panel with theme-specific controls.
- A top-level "GoDevs" admin menu.
- A theme options page.
- A settings import/export tool.
- A pattern builder UI.
- A demo importer (Phase 9 will ship starter sites via the
  Site Editor's starter-content system, not a separate importer).
- A custom block configuration UI.

Each of these would either compete with the Site Editor, introduce
maintenance burden, or both. The native WordPress surfaces handle
the use cases these would solve.

## 7. Default values

`theme.json` ships these defaults; users can override any of them
in the Site Editor without losing their overrides when the theme
updates.

### Palette defaults (Modern / default variation)
- Primary: `#0F172A`
- Secondary: `#1E293B`
- Accent: `#FF6B57`
- Background: `#FFFFFF`
- Surface: `#F8FAFC`
- Text: `#0F172A`
- Muted: `#64748B`
- Border: `#E2E8F0`

### Typography defaults
- Body family: Inter
- Heading family: Newsreader
- Body size: 1rem (fluid to 1.05rem)
- H1 size: 3.5rem (fluid to 4.5rem)
- H2 size: 2.25rem (fluid to 2.75rem)
- H3 size: 1.5rem (fluid to 1.75rem)

### Layout defaults
- contentSize: 768px
- wideSize: 1280px

### Spacing defaults
- Default block gap: 1.5rem
- Default section padding: 4rem vertical

## 8. Where settings live

| Setting | Storage |
|---------|--------|
| `theme.json` defaults | File in the theme |
| Site-level style overrides | `wp_posts` (`wp_global_styles`) |
| Template edits | `wp_posts` (`wp_template`) |
| Template part edits | `wp_posts` (`wp_template_part`) |
| Navigation menu | `wp_posts` (`wp_navigation`) |
| Site logo | `wp_postmeta` (site icon post meta) |
| Custom template assignment per page | `wp_postmeta` (`_wp_page_template`) |

User overrides in the Site Editor are *additive* — they stack on top
of the file-based `theme.json` defaults. Updating the theme updates
the file-based defaults but preserves user overrides.

## 9. Migration

When a user updates GoDevs Portfolio from v0.1 to v0.2+:

- File-based `theme.json` defaults are updated.
- User's Site Editor overrides are preserved.
- Custom templates are preserved.
- Custom template parts are preserved.
- Navigation menus are preserved.
- The user may need to manually re-apply a new style variation's
  palette tokens to their customised blocks if they have hardcoded
  colour values (this is why patterns should always use tokens, not
  hardcoded values).

This is the standard block-theme migration story and requires no
custom migration code in the theme.

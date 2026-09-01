# GoDevs Portfolio — Pattern Quality Guide

**Document version:** 0.4.0
**Phase:** 4 — Pattern Quality Standards

This document defines the quality bar for every pattern in the GoDevs Portfolio library. Use it when authoring new patterns or auditing existing ones.

---

## 1. The Quality Bar

Every pattern must pass:

1. **Composition** — intentional, not generic
2. **Typography** — strong hierarchy, fluid scale, consistent line heights
3. **Spacing** — uses design tokens, no random values
4. **Hierarchy** — clear H1 → H2 → H3 nesting
5. **Alignment** — consistent within and across sections
6. **Image treatment** — explicit aspect ratios, no layout shift
7. **CTA hierarchy** — primary vs secondary clearly distinguished
8. **Card system** — uses registered card variants, not bespoke styles
9. **Responsive layout** — works at 360px, 768px, 1280px, 1920px
10. **Visual rhythm** — sections vary in density, not all identical
11. **Accessibility** — keyboard nav, visible focus, contrast AA
12. **Editor compatibility** — passes `audit-gutenberg-compat.py`
13. **Translation readiness** — all strings use the `godevs-portfolio` text domain
14. **Performance** — no JS, no external assets, no inline styles for layout

---

## 2. Forbidden Patterns (AI-Style Anti-Patterns)

Do not create:

### 2.1 Generic AI Landing Pages

- Hero with stacked CTA, three feature cards, pricing table, footer
- Looks like every SaaS landing page
- No editorial composition, no asymmetric layout

### 2.2 Excessive Rounded Cards

- Every section is `core/columns` of `core/group` with `border.radius: 16px+`
- Restraint is the rule — `4px` for buttons, `8px` for cards, `9999px` for pills only

### 2.3 Gradient Everywhere

- Background gradients on every section
- Accent gradients where solid colors would work better
- Use solid colors. Gradients only when they convey meaning (hero overlay, image dim).

### 2.4 Glassmorphism

- `backdrop-filter: blur()` on cards
- Translucent backgrounds with blur
- Forbidden — performance regression, accessibility risk

### 2.5 Floating Blobs

- Decorative SVG blobs in the background
- Decorative gradient orbs
- Forbidden — visual clutter

### 2.6 Giant Icons

- Emoji as UI icons (🚀 ⭐ 💡 🔥)
- Large icon fonts (Font Awesome, Material Icons)
- Forbidden — use typography, numbers, CSS shapes, or inline SVG when genuinely needed

### 2.7 Excessive Shadows

- Multiple layered shadows with glows
- Colored shadows
- Three shadow levels only (SM, MD, LG) — see `docs/DESIGN-SYSTEM.md`

### 2.8 Excessive Animation

- Scroll-triggered reveals
- Parallax
- Autoplay carousels
- Hover-only interactions
- Use minimal hover transitions (150ms ease). All longer animations must respect `prefers-reduced-motion: reduce`.

### 2.9 Repetitive Layouts

- 10 patterns that are all "three cards in a row" with different colors
- Two variations that differ only in accent color
- See `docs/PATTERN-SYSTEM.md` Section 5.2 (Visual Distinctness Rule)

---

## 3. Required Patterns (Composition Variety)

Every major category should include variety across these axes:

### 3.1 Layout systems

- Centered
- Split (asymmetric 55/45 or 45/55)
- Stacked vertical
- Editorial multi-column
- Grid (2, 3, 4 columns)
- Full-bleed / full-width
- Narrow content (constrained 640px)
- Image-first
- Typography-first

### 3.2 Density variations

- Compact (section padding XL)
- Default (section padding 2XL)
- Spacious (section padding 3XL)

### 3.3 Image treatments

- Full-bleed cover
- Framed image
- Soft shadow image
- Portrait (3/4 or 4/5)
- Landscape (16/9 or 21/9)
- Square (1/1 or 4/3)
- Editorial (no radius, sharp corners)
- Rounded (1rem radius)

### 3.4 Type treatments

- Display-led (oversized headline, minimal body)
- Body-led (medium headline, substantial body)
- Caption-led (small eyebrow + small body, gallery feel)
- Editorial (serif display + sans body, magazine feel)

---

## 4. Pattern Metadata Requirements

Every pattern file must have a complete PHP docblock header:

```php
<?php
/**
 * Title: <Category> — <Descriptive Subtitle>
 * Slug: godevs-portfolio/<category-slug>-<descriptive-slug>
 * Description: <One sentence explaining the pattern's design intent>. Recommended style variation: <Name>.
 * Categories: godevs-portfolio-<category>
 * Keywords: <3-5 comma-separated keywords>
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!-- Block markup -->
```

### Required fields

| Field | Required | Notes |
|---|---|---|
| `Title` | Yes | `<Category> — <Descriptive Subtitle>` format |
| `Slug` | Yes | Must start with `godevs-portfolio/` |
| `Description` | Yes | One sentence — explain design intent |
| `Categories` | Yes | At least one — must be a registered category slug |
| `Keywords` | Recommended | 3-5 comma-separated keywords |
| `Viewport Width` | Recommended | Typically `1280` for desktop, `768` for compact |

### Forbidden metadata

- Numbered titles (`Pattern 01`, `Hero 02`)
- Generic descriptions (`A hero pattern`)
- Missing slugs
- Slugs without namespace
- Categories that aren't registered

---

## 5. Block Markup Requirements

### 5.1 Top-level wrapper

```html
<!-- wp:group {"tagName":"section","className":"wp-block-godevs-<name>","layout":{"type":"default"}} -->
<section class="wp-block-group wp-block-godevs-<name> alignfull">
    ...
</section>
<!-- /wp:group -->
```

### 5.2 Inner content wrapper

```html
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    ...
</div>
<!-- /wp:group -->
```

### 5.3 Section header (eyebrow + H2)

```html
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
    <!-- wp:paragraph {"className":"is-style-eyebrow"} -->
    <p class="is-style-eyebrow">Section</p>
    <!-- /wp:paragraph -->
    <!-- wp:heading {"level":2} -->
    <h2 class="wp-block-heading">Section heading</h2>
    <!-- /wp:heading -->
</div>
<!-- /wp:group -->
```

### 5.4 Token references (mandatory)

All design tokens must reference presets — never hardcoded values:

```json
// Colors
"color": { "text": "var:preset|color|primary" }
"backgroundColor": "primary"

// Spacing
"spacing": { "padding": { "top": "var:preset|spacing|70" } }
"spacing": { "blockGap": "var:preset|spacing|50" }

// Typography
"typography": { "fontSize": "var:preset|font-size|large" }
"typography": { "fontFamily": "var:preset|font-family|display" }
```

### 5.5 Forbidden block names

WordPress core has ~65 registered blocks. Patterns must only reference core blocks — no plugin blocks. The `audit-gutenberg-compat.py` script validates every block name against the registered list.

Common mistakes:
- `wp:social-links` (incorrect) → use `wp:social-icons` (correct)
- `wp:hero` (doesn't exist) → use `wp:cover` or `wp:group`
- `wp:card` (doesn't exist) → use `wp:group` with a card style class

---

## 6. Accessibility Requirements

Every pattern must:

1. Have exactly one H1 (or rely on the page's title block)
2. Use strict H1 → H2 → H3 nesting (no skips)
3. Have descriptive link text (not "click here")
4. Provide visible focus states (handled by `assets/css/theme.css`)
5. Meet WCAG 2.1 AA color contrast
6. Provide alt text for every image (descriptive alt for meaningful images, empty `alt=""` for decorative)
7. Not rely on hover alone for any interaction
8. Respect `prefers-reduced-motion: reduce` (handled globally in `assets/css/theme.css`)
9. Use semantic HTML via `tagName` block attributes (`section`, `main`, `header`, `footer`, `article`, `nav`)
10. Use ARIA only when native HTML cannot express the semantics

See `docs/ACCESSIBILITY.md` for the full accessibility specification.

---

## 7. Performance Requirements

Patterns must:

1. Have **zero JavaScript** — no inline scripts, no enqueued JS per pattern
2. Have **no external assets** — use the bundled placeholder image, not stock photos
3. Have **no inline styles for layout** — use block attributes + `theme.json` styles
4. Use **lazy-loaded images** by default (`core/image` does this automatically)
5. Have **explicit aspect ratios** on all images (prevents layout shift)
6. Be **static HTML** — no PHP logic beyond the metadata header and ABSPATH guard

The pattern library scales to 500+ patterns without performance regression because patterns are static files that load only when inserted.

---

## 8. Editor Editability Requirements

After insertion, users must be able to easily modify:

- Text (every paragraph, heading, button label)
- Images (replace the placeholder with their own image)
- Buttons (change the link, change the label)
- Colors (via the block's color settings)
- Spacing (via the block's spacing settings)
- Alignment (via the block's alignment toolbar)
- Columns (add/remove columns, change widths)
- Content (add/remove blocks within the pattern)

Patterns must NOT:
- Use hardcoded URLs (except `#` placeholders)
- Use PHP includes inside block markup
- Use shortcodes inside block markup
- Use inline styles that the user cannot override via the block toolbar

---

## 9. Validation Workflow

Before merging a new pattern:

1. Author the pattern file following the metadata + markup requirements
2. Run `python3 scripts/audit-gutenberg-compat.py` — must pass with 0 issues
3. Run `python3 scripts/audit-blocks.py` — must pass with 0 issues
4. Run `python3 scripts/audit-php.py` — must pass with 0 issues
5. Run `python3 scripts/audit-structure.py` — must pass with 0 issues
6. Insert the pattern in a test page in the Site Editor — must render without errors
7. Test in every style variation — must look intentional in all 8
8. Test at 360px, 768px, 1280px, 1920px — no horizontal overflow, no broken grids
9. Test with keyboard only — every interactive element reachable, focus visible
10. Update `docs/CHANGELOG.md` under "Added"

---

## 10. Quality Checklist (Per Pattern)

```
[ ] Composition is intentional, not generic
[ ] Typography uses presets, no hardcoded sizes
[ ] Spacing uses presets, no hardcoded values
[ ] Hierarchy is strict (H1 → H2 → H3, no skips)
[ ] Image aspect ratios are explicit
[ ] CTA hierarchy is clear (primary vs secondary)
[ ] Card styles use registered variants
[ ] Responsive at 360/768/1280/1920px
[ ] Sections vary in density (not all identical)
[ ] Keyboard navigable, focus visible
[ ] Contrast meets WCAG 2.1 AA
[ ] Passes audit-gutenberg-compat.py
[ ] Passes audit-blocks.py
[ ] Passes audit-php.py
[ ] Passes audit-structure.py
[ ] All strings use godevs-portfolio text domain
[ ] No JS, no external assets
[ ] No emoji UI icons
[ ] No hardcoded colors
[ ] No inline styles for layout
[ ] Editable in the Site Editor (text, images, buttons, colors, spacing)
```

# GoDevs Portfolio — Style Variations

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the style variation system: what a variation is, how it differs from the default, the Phase 1 set, and the long-term expansion plan to 15+ variations.

---

## 1. What Is a Style Variation?

A style variation is a `styles/*.json` file that overrides the `styles` subtree of `theme.json`. It appears in the Site Editor's "Styles → Browse styles" panel.

A variation can change:
- Color palette (every preset color can be overridden)
- Font family presets
- Font size presets
- Spacing scale
- Block-level styles (button styles, heading styles, etc.)
- Element-level styles (link colors, heading colors, etc.)

A variation **cannot** change:
- Layout widths (those are in `settings.layout`, not overridable by variations)
- Template files
- Registered patterns
- Registered block styles

---

## 2. Variation vs Color Swap — Critical Distinction

A variation that only changes palette colors is a **color swap**, not a variation. Color swaps add no design value and inflate the variation count without adding capability.

### 2.1 The Three-Change Rule

Every style variation must change **at least three** of:

1. **Primary font pairing** — at minimum the display font family
2. **Color system** — background, surface, foreground, accent
3. **Spacing density** — section padding, default gaps, card padding
4. **Border radius default** — sharp vs. medium vs. pill
5. **Default shadow level** — none vs. soft vs. dramatic
6. **Section vertical rhythm** — compact vs. spacious
7. **Type scale** — large display vs. modest display

A variation that changes only the palette is rejected at PR review.

### 2.2 Examples

**Approved variation:** "Editorial"
- Font pairing: Display switches from system sans to a serif (Georgia stack)
- Color system: Warm cream background + ink black + muted accent
- Density: Slightly more spacious, larger section padding
- Radius: Sharp corners (0) on cards
- Result: Reads as a magazine / publication aesthetic

**Rejected variation:** "Blue"
- Only changes accent from `#2563EB` to `#0EA5E9`
- Rejected: only one change of seven possible axes

---

## 3. Phase 1 Variation Set

Phase 1 ships 4 variations: Default + Minimal + Dark + Editorial.

### 3.1 Default (`theme.json` itself)

The default style lives in `theme.json` directly. It is not duplicated in `styles/`.

**Characterization:**
- Editorial sans-serif (system UI)
- Warm off-white background (`#FAFAF7`)
- Near-black ink text
- Confident blue accent (`#2563EB`)
- Medium spacing, medium radii (8px cards, 4px buttons)
- Soft shadows

### 3.2 Minimal (`styles/minimal.json`)

**Characterization:**
- Same font pairing (sans-serif system)
- Pure white background (`#FFFFFF`)
- Single text color (`#111111`) — no muted variant
- Black accent (no color — accent matches text)
- Compact spacing (section padding reduced)
- Zero radius (sharp corners everywhere)
- No shadows

**Intent:** Ultra-minimalist portfolio — gallery-like presentation, no chrome.

### 3.3 Dark (`styles/dark.json`)

**Characterization:**
- Same font pairing
- Deep neutral background (`#0A0A0A`)
- Off-white text (`#FAFAF7`)
- Brighter accent (`#60A5FA` — accessible on dark)
- Same spacing as default
- Medium radii
- Elevated shadows (deeper for dark mode legibility)

**Intent:** Dark mode portfolio — favored by developers and design studios.

### 3.4 Editorial (`styles/editorial.json`)

**Characterization:**
- Display font switches to serif stack (`"Georgia", "Times New Roman", serif`)
- Body remains sans-serif (creates interesting type contrast)
- Warm cream background (`#F5F0E5`)
- Ink black text (`#1A1A1A`)
- Muted brown accent (`#8B4513`)
- Spacious spacing (larger section padding)
- Sharp corners (0 radius)
- No shadows

**Intent:** Magazine / publication portfolio — writers, journalists, essayists.

---

## 4. Long-Term Variation Plan (15+ Variations)

Target variations for Phase 2+:

| # | Name | Theme |
|---|---|---|
| 1 | Default | Editorial sans |
| 2 | Minimal | Ultra-clean gallery |
| 3 | Dark | Developer / studio |
| 4 | Editorial | Magazine / publication |
| 5 | Modern | Geometric, sharp, confident |
| 6 | Creative | Asymmetric, expressive |
| 7 | Elegant | Serif display, restrained |
| 8 | Corporate | Trustworthy, structured |
| 9 | Bold | High contrast, large type |
| 10 | Luxury | Refined, gold accents, serif |
| 11 | Tech | Mono-forward, terminal aesthetic |
| 12 | Warm | Soft palette, friendly |
| 13 | Mono | Single-hue, restrained |
| 14 | Brutalist | Raw, sharp, no decoration |
| 15 | Soft | Rounded, gentle, pastel |

Each variation ships only when it meets the Three-Change Rule and is visually distinct from every existing variation.

---

## 5. Variation Authoring Standards

### 5.1 File Structure

```json
{
    "$schema": "https://schemas.wp.org/trunk/theme.json",
    "version": 3,
    "title": "Editorial",
    "description": "A magazine-inspired portfolio aesthetic with serif display type and warm cream backgrounds.",
    "settings": {
        "color": {
            "palette": [
                { "slug": "primary", "color": "#1A1A1A", "name": "Primary" },
                { "slug": "secondary", "color": "#4A4A4A", "name": "Secondary" },
                { "slug": "accent", "color": "#8B4513", "name": "Accent" },
                { "slug": "base", "color": "#F5F0E5", "name": "Base" },
                { "slug": "surface", "color": "#FFFFFF", "name": "Surface" }
            ]
        },
        "typography": {
            "fontFamilies": [
                {
                    "slug": "display",
                    "name": "Display",
                    "fontFamily": "\"Georgia\", \"Times New Roman\", serif"
                }
            ]
        }
    },
    "styles": {
        "color": { "background": "#F5F0E5", "text": "#1A1A1A" },
        "elements": {
            "heading": {
                "typography": { "fontFamily": "var:preset|font-family|display" }
            },
            "button": {
                "color": { "background": "#1A1A1A", "text": "#F5F0E5" },
                "border": { "radius": "0" }
            }
        },
        "blocks": {
            "core/group": {
                "border": { "radius": "0" }
            }
        }
    }
}
```

### 5.2 Variation Naming

- Single word, lowercase filename (`editorial.json`)
- Title is Title Case (`Editorial`)
- Description is one sentence explaining the design intent

### 5.3 Variation Slug Convention

Variation slug matches the filename. Users select by title; slug is used internally for storage.

---

## 6. Variation Compatibility

Every variation must:

1. **Maintain WCAG 2.1 AA contrast** for all default color combinations
2. **Render every Phase 1 pattern** without broken layouts
3. **Display correctly on all 12 templates**
4. **Work with all block styles** registered in `inc/block-styles.php`
5. **Degrade gracefully** if a user overrides a color in the Site Editor

### 6.1 Contrast Verification

Before merging a variation:

- Verify text-on-background contrast ≥ 4.5:1
- Verify text-on-accent contrast ≥ 4.5:1 (for buttons)
- Verify muted-text-on-background ≥ 4.5:1
- Verify border-on-background ≥ 3:1
- Verify focus-ring-on-background ≥ 3:1

Use a contrast checker (e.g., WebAIM Contrast Checker) on actual rendered colors.

---

## 7. Variation Discovery

Variations surface in:
- Site Editor → Styles → Browse styles (visual preview)
- Site Editor → Styles → Variations (sidebar)
- Each variation shows title + a small preview thumbnail auto-generated by WordPress

The preview is auto-generated from the variation's palette + typography. The user sees a swatch row, not a full page preview.

---

## 8. Variation ↔ Pattern Interaction

Patterns must work in every variation. This is enforced by:

1. **Patterns never hardcode colors** — always reference presets
2. **Patterns never hardcode spacing** — always reference presets
3. **Patterns never hardcode radii** — set via block attributes, but inherited from variation where possible
4. **Patterns are tested in every variation before merge** — see `QA-CHECKLIST.md`

If a pattern breaks in a specific variation, the variation is the source of the bug — not the pattern.

---

## 9. Phase 2 Expansion Plans

Phase 2 will add:

1. **5+ additional variations** from the long-term target list (Section 4)
2. **Variation preview thumbnails** (1200×900 PNG per variation, auto-generated)
3. **Variation-specific block style tweaks** (e.g., shadow levels per variation)
4. **Variation documentation page** in `docs/` showing each variation's design rationale

These are documented for forward planning. Phase 1 ships the foundation variation set only.

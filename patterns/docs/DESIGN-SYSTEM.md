# GoDevs Portfolio — Design System

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the visual design system for GoDevs Portfolio. It is the source of truth for design tokens, type pairings, spacing, layout, button system, and card system. All values defined here are implemented in `theme.json` and consumed by templates and patterns.

The design direction is **premium, editorial, modern**. The objective is a portfolio presence that feels considered and intentional — never generic.

---

## 1. Design Principles

1. **Editorial typography first.** Type is the primary visual element. Large display sizes, strong hierarchy, considered pairings.
2. **Generous whitespace.** Sections breathe. Content is not crowded. Density is a deliberate choice, not a default.
3. **Strong grid systems.** Layouts are anchored to the content/wide/full width system. Asymmetric compositions are encouraged.
4. **Subtle interactions.** No excessive animation. Hover states are minimal and functional. Reduced motion is respected.
5. **Soft, considered surfaces.** Borders are subtle. Shadows are restrained. Cards feel layered without floating.
6. **Consistency over novelty.** A small set of tokens used consistently outperforms many bespoke values.
7. **Accessibility is non-negotiable.** Contrast, focus, keyboard, screen readers — see `ACCESSIBILITY.md`.

---

## 2. Color System

All colors are defined in `theme.json` under `settings.color.palette` and exposed as CSS custom properties (`--wp--preset--color--<slug>`).

### 2.1 Semantic Color Tokens

| Token | Slug | Purpose |
|---|---|---|
| Primary | `primary` | Primary brand color — buttons, links, key accents |
| Secondary | `secondary` | Secondary brand color — secondary accents, supporting UI |
| Accent | `accent` | Highlight color — used sparingly for emphasis |
| Background | `base` | Page background |
| Surface | `surface` | Card / section background |
| Surface Elevated | `surface-elevated` | Raised cards, popovers |
| Text | `foreground` / `contrast` | Primary text on background / accent surfaces |
| Text Muted | `muted` | Secondary text, captions, meta |
| Border | `border` | Hairline borders, dividers |
| Success | `success` | Positive states |
| Warning | `warning` | Caution states |
| Error | `error` | Error states |

### 2.2 Default Palette (Phase 1)

| Token | Hex | Notes |
|---|---|---|
| `primary` | `#0A0A0A` | Near-black ink for editorial base |
| `secondary` | `#3D3D3D` | Soft charcoal for secondary text |
| `accent` | `#2563EB` | Confident blue — used sparingly |
| `base` | `#FAFAF7` | Warm off-white, less clinical than pure white |
| `surface` | `#FFFFFF` | Pure white for cards |
| `surface-elevated` | `#FFFFFF` | Same as surface in default; differentiated in dark variation |
| `foreground` | `#0A0A0A` | Matches primary ink |
| `muted` | `#6B7280` | Cool gray for meta |
| `border` | `#E5E5E0` | Subtle warm gray |
| `success` | `#15803D` | Accessible green |
| `warning` | `#B45309` | Accessible amber |
| `error` | `#B91C1C` | Accessible red |
| `contrast` | `#FFFFFF` | Text on accent surfaces |

### 2.3 Color Usage Rules

- **Background variations are forbidden** as a substitute for proper style variations. A new variation must change more than one color.
- **Contrast minimum** is WCAG 2.1 AA: 4.5:1 for body text, 3:1 for large text and UI components.
- **Accent usage** is rationed — never use accent as a section background. Use it for links, primary buttons, and small emphasis.
- **Never hardcode hex values** in templates, patterns, or CSS. Always reference the preset (`var:preset|color|primary`).

---

## 3. Typography System

Typography is the dominant visual language. The system pairs a confident display face with a readable body face.

### 3.1 Font Families

| Token | Slug | Stack | Purpose |
|---|---|---|---|
| Display | `display` | System UI display stack | Headings H1–H3 |
| Body | `body` | System UI body stack | Body, headings H4–H6 |
| Mono | `mono` | SF Mono, Menlo, monospace | Code, captions, meta |

**Default stacks (Phase 1, system fonts — no external loading):**

```
--wp--preset--font-family--display: "Inter", "SF Pro Display", "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", Arial, sans-serif;

--wp--preset--font-family--body: "Inter", "SF Pro Text", "Segoe UI", system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", Arial, sans-serif;

--wp--preset--font-family--mono: "SF Mono", "JetBrains Mono", "Menlo", "Consolas", monospace;
```

A bundled self-hosted font option (Inter variable) is documented but **not enabled in Phase 1** to keep the theme dependency-free.

### 3.2 Type Scale (Fluid)

All sizes are fluid (rem-based with viewport clamps). Sizes use WordPress `settings.typography.fontSizes` with `fluid: true`.

| Token | Slug | Min (mobile) | Preferred | Max (desktop) |
|---|---|---|---|---|
| Display | `display` | 2.75rem (44px) | 8vw | 5.5rem (88px) |
| H1 | `xx-large` | 2.25rem (36px) | 5vw | 3.75rem (60px) |
| H2 | `x-large` | 1.875rem (30px) | 3.5vw | 2.75rem (44px) |
| H3 | `large` | 1.5rem (24px) | 2.5vw | 2rem (32px) |
| H4 | `medium` | 1.25rem (20px) | — | 1.5rem (24px) |
| Body | `normal` | 1rem (16px) | — | 1.125rem (18px) |
| Large Body | `medium` (alt) | 1.125rem (18px) | — | 1.25rem (20px) |
| Small | `small` | 0.875rem (14px) | — | — |
| Caption | `x-small` | 0.75rem (12px) | — | — |

**Line height defaults:** 1.1 for display, 1.2 for headings, 1.6 for body.

**Letter spacing:** `-0.02em` for display and H1; `-0.01em` for H2/H3; `0` for body; `0.04em` uppercase for captions.

### 3.3 Type Usage Rules

- H1 appears **once per page** (in the hero or the page title block).
- H2 introduces a new section. H3 introduces a subsection within H2.
- Body type is `1.125rem` (18px) for portfolio sites — readable, considered.
- Captions are uppercase + letter-spaced — used for section eyebrows.
- No font weights above 700. Display headings are 700. Body is 400.
- No italics for emphasis in body text — use weight or color.

---

## 4. Spacing System

The spacing scale is defined in `theme.json` under `settings.spacing.spacingScale` and surfaced as `--wp--preset--spacing--<slug>`.

### 4.1 Spacing Scale

| Token | Slug | Value | Use |
|---|---|---|---|
| 2XS | `20` | `0.5rem` (8px) | Tight inline gaps |
| XS | `30` | `0.75rem` (12px) | Inline gaps, tight groups |
| SM | `40` | `1rem` (16px) | Default block gap |
| MD | `50` | `1.5rem` (24px) | Section internal gaps |
| LG | `60` | `2rem` (32px) | Between subsections |
| XL | `70` | `3rem` (48px) | Section padding (mobile) |
| 2XL | `80` | `4rem` (64px) | Section padding (desktop) |
| 3XL | `90` | `6rem` (96px) | Hero padding |
| 4XL | `100` | `8rem` (128px) | Large section breaks |

The scale is **arithmetic on a 0.25rem base** — predictable and easy to reason about.

### 4.2 Spacing Usage Rules

- **Section vertical padding:** XL on mobile, 2XL on desktop (use fluid `clamp`).
- **Section internal gaps:** MD.
- **Card internal padding:** LG.
- **Button padding:** SM vertical, LG horizontal.
- **Never** use raw pixel values in patterns. Always `var:preset|spacing|<slug>`.

---

## 5. Layout System

### 5.1 Width Tokens

| Token | Value | Purpose |
|---|---|---|
| Content width | `640px` | Long-form text (article body) |
| Wide width | `1280px` | Most sections, grids |
| Full width | `100vw` | Full-bleed heroes, galleries |

Defined in `theme.json` → `settings.layout.contentSize` and `settings.layout.wideSize`.

### 5.2 Breakpoints

The theme does **not** ship device-specific templates. Fluid typography + fluid spacing + responsive core block layouts handle responsiveness.

Reference breakpoints (for design reasoning, not enforced in CSS):

| Name | Width | Notes |
|---|---|---|
| Mobile S | < 360px | Smallest supported |
| Mobile | 360–480px | Default mobile |
| Tablet | 481–768px | Small tablet |
| Desktop | 769–1280px | Desktop |
| Wide | > 1280px | Wide desktop |

### 5.3 Section Anatomy

A standard section follows this composition:

```
Group (full width)
  ├── Group (wide width, inner)
  │     ├── Group (vertical, gap MD) — header
  │     │     ├── Paragraph (eyebrow — caption style)
  │     │     └── Heading (H2)
  │     └── Group (content, gap LG)
  │           └── [pattern-specific blocks]
```

### 5.4 Grid Behavior

- **2-column grids:** `core/columns` with `1fr 1fr` on desktop, stack on mobile below 782px.
- **3-column grids:** `core/columns` with `1fr 1fr 1fr` on desktop, 1-column on mobile.
- **Portfolio grids:** `core/query` with `core/post-template` and a 3-column layout, falling back to 1-column on mobile.

---

## 6. Button System

Defined in `theme.json` → `styles.blocks.core/button.variations` and via block styles.

| Variant | Use |
|---|---|
| Primary (default) | Main CTA — solid accent background, white text |
| Outline | Secondary CTA — transparent background, accent border |
| Text | Tertiary CTA — no background, accent text, optional arrow |
| Pill | Decorative / friendly CTA — fully rounded |
| Arrow | CTA with directional affordance — uses an inline SVG arrow |

**Rules:**
- Buttons are **never** emoji icons or Unicode symbols.
- Arrow variants use a small inline SVG (`↗` glyph forbidden as it varies by font).
- Minimum touch target: 44×44px on mobile.
- Hover: subtle darken of background or border color shift. No transform scale.
- Focus: 2px accent outline with 2px offset (visible focus state).
- Disabled: 50% opacity, no pointer.

### 6.1 Button Block Styles (registered in `inc/block-styles.php`)

| Block | Style name | Slug |
|---|---|---|
| `core/button` | Outline | `outline` |
| `core/button` | Text Link | `text-link` |
| `core/button` | Pill | `pill` |

---

## 7. Card System

Cards are **not a custom block**. They are compositions of core blocks styled consistently. The card system is expressed via block styles on `core/group` and `core/columns`.

| Variant | Construction |
|---|---|
| Default Card | `core/group` with subtle border + LG padding + soft shadow |
| Bordered Card | `core/group` with 1px border, no shadow |
| Elevated Card | `core/group` with larger shadow, no border |
| Minimal Card | `core/group` no border, no shadow, only whitespace |
| Featured Card | Bordered card with accent top border or accent background tint |

### 7.1 Card Block Styles (registered in `inc/block-styles.php`)

| Block | Style name | Slug |
|---|---|---|
| `core/group` | Card Default | `card-default` |
| `core/group` | Card Bordered | `card-bordered` |
| `core/group` | Card Elevated | `card-elevated` |
| `core/group` | Card Minimal | `card-minimal` |

---

## 8. Border System

| Token | Value | Purpose |
|---|---|---|
| Border width | `1px` | Default |
| Border width (thick) | `2px` | Active states, emphasis |
| Radius small | `0.25rem` (4px) | Tags, pills small |
| Radius medium | `0.5rem` (8px) | Default card radius |
| Radius large | `1rem` (16px) | Large cards, modals |
| Radius pill | `9999px` | Buttons-pill, tags |

### 8.1 Border Usage Rules

- Cards use radius medium (8px) by default.
- Buttons use radius small (4px) by default.
- Hero / full-bleed sections use 0 radius.
- No element uses radius > 1rem — avoids "AI-generated card" look.

---

## 9. Shadow System

Shadows are restrained. Three levels only:

| Token | Value | Purpose |
|---|---|---|
| Shadow SM | `0 1px 2px rgba(10,10,10,0.05)` | Subtle elevation |
| Shadow MD | `0 4px 12px rgba(10,10,10,0.06)` | Default card |
| Shadow LG | `0 12px 32px rgba(10,10,10,0.08)` | Elevated card, modals |

No glow shadows. No colored shadows. No multi-layer shadows.

---

## 10. Motion System

Motion is **minimal** and **functional**.

| Token | Duration | Easing | Use |
|---|---|---|---|
| Fast | `120ms` | `ease-out` | Hover states, focus rings |
| Base | `200ms` | `cubic-bezier(0.4, 0, 0.2, 1)` | Default transitions |
| Slow | `400ms` | `cubic-bezier(0.4, 0, 0.2, 1)` | Section reveals (only if needed) |

### 10.1 Motion Rules

- `prefers-reduced-motion: reduce` disables all transitions longer than 1ms.
- No entrance animations triggered by scroll. (If added later, must respect reduced motion.)
- No parallax. No autoplay video. No carousel auto-advance.

---

## 11. Iconography

**No bundled icon library.** No Font Awesome, no Material Icons, no emoji.

Icons are used **only** when they materially aid comprehension:

- Navigation menu toggle (handled by `core/navigation`)
- Social icons (handled by `core/social-icons` which ships SVGs)
- Optional inline SVG for button arrows (registered centrally in `inc/block-styles.php`)

### 11.1 Forbidden Icons

Emoji as UI icons is forbidden. Examples of forbidden usage:

- 🤖 🚀 ⭐ 💡 🔥 as feature icons
- ⚠️ ✅ ❌ as status indicators (use semantic HTML + text labels)
- 📧 📞 as contact icons (use SVG or text label)

### 11.2 Permitted Icons

- Inline SVG authored by the theme team (GPL-compatible)
- WordPress core block icons (`core/social-icons` set)
- CSS shapes (e.g., a `::after` arrow drawn with borders)
- Numerical labels (1, 2, 3) for ordered features

---

## 12. Image Treatment

| Treatment | When |
|---|---|
| Full-bleed | Hero photography, portfolio covers |
| Aspect-ratio locked | Portfolio grid items (use `core/image` with `aspectRatio`) |
| Rounded corners | Portrait photos, team photos |
| Sharp corners | Editorial photos in articles |
| Subtle overlay | Cover blocks with text overlay |

Default aspect ratios for portfolio grids:

| Layout | Ratio |
|---|---|
| Square grid | `4/3` |
| Portrait grid | `3/4` |
| Wide grid | `16/9` |
| Hero | `21/9` (full-bleed cover) |

---

## 13. Style Variation Principles

A style variation is **not** a color swap. Each variation must change at least three of:

1. Primary font pairing
2. Color system (background, surface, accent)
3. Spacing density (compact vs. spacious)
4. Border radius default
5. Default shadow level
6. Section vertical rhythm

Phase 1 ships 4 variations (Default + Minimal + Dark + Editorial). See `STYLE-VARIATIONS.md` for the long-term plan.

---

## 14. Accessibility Surfaces

Accessibility is part of the design system, not a separate concern. Key surfaces:

- **Focus rings:** 2px accent outline with 2px offset — visible on every interactive element.
- **Link affordance:** Links are underlined by default. Hover removes underline only on text-decoration-skip-ink-supporting browsers.
- **Heading hierarchy:** Strict H1 → H2 → H3 nesting.
- **Color contrast:** All default palette combinations meet WCAG 2.1 AA.
- **Reduced motion:** See Motion System above.
- **Touch targets:** All interactive elements ≥ 44×44px on mobile.

See `ACCESSIBILITY.md` for the full accessibility specification.

# Responsive System — GoDevs Portfolio

The theme is mobile-first and fluid. There are no device-specific
media queries in the v0.1 design system. Layout adapts via fluid
typography, fluid spacing, and the WordPress column block's
responsive collapse. This document explains the responsive strategy
and lists the breakpoints the theme is tested against.

---

## 1. Mobile-first philosophy

The base styles target the smallest viewport (375px). Larger
viewports receive progressively richer layouts via:

- Fluid typography (font sizes scale via `clamp()` between a min
  and max size, expressed via the `fluid` property in `theme.json`).
- Fluid spacing (spacing tokens are rem-based; the user can use
  vw-based custom values if needed).
- The `core/columns` block, which collapses to a single column below
  782px by default.
- The `core/navigation` block, which switches to its overlay mode
  below 1024px via the `overlayMenu: "mobile"` attribute.

There are no `@media (max-width: 768px) { ... }` rules in the v0.1
CSS. The fluid + columns-block approach handles the responsive
adaptation natively.

## 2. Breakpoints tested

The theme is tested at the following widths. These are not the
breakpoints the theme *uses*; they are the widths the theme is
*verified* at.

| Width | Device | What is checked |
|-------|--------|-----------------|
| 1920 | Desktop (large) | Layout does not stretch beyond `wideSize` (1280px). Content centered. |
| 1440 | Desktop (typical) | Default desktop layout. Content readable. Navigation full-width. |
| 1280 | Desktop (laptop) | `wideSize` constraint visible. Wide blocks align correctly. |
| 1024 | Tablet (landscape) | Navigation switches to overlay mode. Multi-column layouts remain. |
| 768 | Tablet (portrait) | Multi-column layouts collapse to single column. Body text comfortable. |
| 480 | Phone (large) | Single column throughout. Mobile menu accessible. Touch targets ≥44px. |
| 375 | Phone (typical) | Smallest tested viewport. No horizontal scroll. Hero readable. |

## 3. Fluid typography

`theme.json` declares eight font sizes. The six larger sizes are
fluid (they scale between a `min` and `max` value via `clamp()`).

| Slug | Min | Max | Used for |
|------|-----|-----|----------|
| `caption` | 0.75rem | 0.75rem | Captions (fixed) |
| `small` | 0.875rem | 0.875rem | Small UI text (fixed) |
| `medium` | 0.95rem | 1.05rem | Body text |
| `large` | 1rem | 1.25rem | Lead paragraphs |
| `x-large` | 1.25rem | 1.75rem | h3 |
| `xx-large` | 1.75rem | 2.75rem | h2 |
| `xxx-large` | 2.5rem | 4.5rem | h1, CTA |
| `huge` | 3rem | 6.5rem | Hero headline, post-title |

The `clamp(min, preferred, max)` formula is generated automatically
by the WordPress style engine from the `fluid.min` and `fluid.max`
values in `theme.json`.

## 4. Layout containers

| Container | Width | Used for |
|-----------|-------|----------|
| Full width | 100% | Hero / CTA background bands |
| Wide (`wideSize`) | 1280px | Wide block alignment |
| Content (`contentSize`) | 768px | Default content column |

Templates use `layout: { type: "constrained" }` by default, which
centers content at `contentSize`. Full-width bands use a wrapping
`wp:group` with a full background colour and an inner `wp:group`
with `layout: { type: "constrained" }` to keep content centered.

## 5. Navigation

The `core/navigation` block handles mobile navigation natively. The
header template part declares `overlayMenu: "mobile"`, which causes
the navigation to render as a hamburger button + overlay menu at
and below 1024px.

At 1023px and below:
- The desktop navigation links are hidden.
- A hamburger button appears.
- Clicking the hamburger opens a full-screen overlay containing the
  navigation links.
- The overlay is keyboard-navigable.
- Pressing Escape closes the overlay.

Above 1024px:
- The hamburger is hidden.
- The desktop navigation links render inline.

## 6. Multi-column layouts

The `core/columns` block collapses to a single column below 782px
by default. This is WordPress core behaviour and the theme does not
override it.

Patterns that use `core/columns`:
- About (60% / 40%) — collapses to single column at 782px.
- Services (3 columns equal) — collapses to single column at 782px.
- Portfolio Grid (3 columns via Query Loop grid layout) — collapses
  to 1 column at 1024px and below (Query Loop block's grid layout
  uses a different breakpoint).
- Contact (40% / 60%) — collapses to single column at 782px.

## 7. Touch targets

The minimum touch target size on mobile is 44×44px (per Apple and
Material guidelines). The v0.1 design enforces this via:

- Button padding (`0.75rem 1.25rem`) — buttons comfortably exceed
  44px height.
- Navigation block link padding (handled by core, which uses a
  default 1rem vertical padding).
- Image-link touch targets in the portfolio grid — images render at
  `aspect-ratio: 4/3` in a column, so touch targets are 100% of
  the column width.

## 8. Mobile menu (alternative)

The `parts/mobile-menu.html` template part is an alternative mobile
menu design the user can opt into via the Site Editor. It is not
referenced by the default header template part (which uses the
Navigation block's built-in overlay).

The alternative mobile menu is a full-screen navy panel with a
vertical navigation. It is useful for sites that want a more
bespoke mobile experience than the default overlay.

## 9. Images and media

Images use:
- `aspect-ratio` (declared in the block markup) to prevent layout
  shift on load.
- `object-fit: cover` (where appropriate) to maintain aspect ratio
  when the source image does not match.
- Lazy loading (handled by WordPress core for `wp_get_attachment_image`
  and the `core/image` block).
- Responsive `srcset` (handled by WordPress core).

The portfolio grid uses `aspect-ratio: 4/3` on featured images to
keep the grid uniform regardless of the source image's aspect
ratio.

## 10. Reduced motion

All CSS transitions are guarded by `@media (prefers-reduced-motion:
no-preference)`. Users with `prefers-reduced-motion: reduce` see
static states without transitions.

The JavaScript in `navigation.js` does not include any animation
that violates the reduced-motion preference.

## 11. Horizontal scroll prevention

The theme does not introduce any element that causes horizontal
scroll on viewports ≥375px. This is verified by:

- All full-width sections use `width: 100%` or
  `max-width: <wideSize>; margin: 0 auto`.
- The `core/columns` block's column widths sum to 100%.
- Image blocks use `max-width: 100%` (WordPress core default).
- Spacing tokens are rem-based, not vw-based (vw can cause overflow
  at narrow widths when combined with other vw values).

## 12. RTL support

Block themes inherit RTL support through the WordPress style engine.
`theme.json` styles are flipped automatically for RTL languages
(Arabic, Hebrew, Persian, Urdu). The `core/columns` block flips
column order in RTL. The `core/quote` block flips the left border to
a right border.

No manual `rtl.css` file is required. The v0.1 theme is RTL-ready
out of the box.

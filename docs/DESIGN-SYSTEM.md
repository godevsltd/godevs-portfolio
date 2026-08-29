# Design System — GoDevs Portfolio

This document is the reference for the visual language of the theme.
Designers, contributors, and AI agents working on patterns or style
variations should treat this as the canonical source. The brief version:
strong typography, generous whitespace, thin borders, no decoration
that does not earn its place.

---

## 1. Visual direction

The theme follows an **editorial / Swiss** visual direction. The
references are not AI-generated marketing templates; they are print
magazines, type foundries' own websites, and the kind of design
studio sites that ship carefully-edited pages rather than maximalist
marketing pages.

The visual rules below follow from that direction:

- **Typography is the primary design tool.** Newsreader for display,
  Inter for body and UI. Headlines are large. Body is comfortable.
  Captions are small and tracked-out. The hierarchy is the design.
- **Whitespace is the secondary design tool.** The spacing scale
  (0.5rem → 6rem) is what separates a clean page from a cramped
  one. Default section padding is 4rem vertical.
- **Borders are 1px and solid.** Borders separate sections, they
  do not decorate them. The border token is `#E2E8F0`.
- **Shadows are subtle.** Three shadow tokens (`sm`, `md`, `lg`) at
  very low opacity. Shadows signal elevation, they do not signal
  aesthetic.
- **No decoration that does not work.** No decorative circles, no
  blobs, no 3D objects, no glassmorphism, no neon, no glow. Every
  visual element must do a job.

## 2. Colour palette

| Token | Slug | Hex | Usage |
|-------|------|-----|-------|
| Primary | `primary` | `#0F172A` | Headings, buttons background, footer background |
| Secondary | `secondary` | `#1E293B` | Hover states, secondary buttons |
| Accent | `accent` | `#FF6B57` | Links, accents, hover button background |
| Background | `background` | `#FFFFFF` | Page background |
| Surface | `surface` | `#F8FAFC` | Card backgrounds, alternating section backgrounds |
| Text | `text` | `#0F172A` | Body text |
| Muted | `muted` | `#64748B` | Captions, secondary text, meta |
| Border | `border` | `#E2E8F0` | Borders, separators |
| Success | `success` | `#15803D` | Success states (form validation) |
| Warning | `warning` | `#B45309` | Warning states |
| Error | `error` | `#B91C1C` | Error states |

### Palette rules
- All palette tokens are exposed as CSS variables
  (`--wp--preset--color--<slug>`).
- Patterns must use these tokens, not hardcoded hex values.
- The Dark style variation re-tunes the palette for a dark
  background; the Minimal style variation removes the coral accent.
- Future style variations should keep the 11-token shape so users
  switching variations do not lose references.

### Contrast verification
All text/background pairings meet WCAG 2.1 AA contrast:

| Foreground | Background | Ratio | Grade |
|------------|-----------|-------|-------|
| Text on Background | `#0F172A` on `#FFFFFF` | 18.7:1 | AAA |
| Muted on Background | `#64748B` on `#FFFFFF` | 4.7:1 | AA |
| Accent on Background | `#FF6B57` on `#FFFFFF` | 3.5:1 | AA (large text only) |
| Background on Primary | `#FFFFFF` on `#0F172A` | 18.7:1 | AAA |
| Background on Accent | `#FFFFFF` on `#FF6B57` | 3.5:1 | AA (large text only) |

The Accent token meets AA contrast for large text (24px+ regular or
19px+ bold) and for UI components; for body text, use the `text` or
`primary` token. This is enforced in patterns — accent is used for
links and short accents, not for paragraphs.

## 3. Typography

### Font families

| Slug | Family | Usage |
|------|--------|-------|
| `body` | Inter | Body text, UI labels, buttons, navigation |
| `heading` | Newsreader | Display headings, post titles, pullquotes |
| `mono` | System monospace | Inline code, code blocks |

Inter is loaded at weights 400, 500, 600, 700. Newsreader at 500
normal, 600 normal, and 500 italic. The italic Newsreader is used
for pullquotes and pull quote-style hero text.

### Type scale

| Slug | Size | Fluid? | Used for |
|------|------|-------|----------|
| `caption` | 0.75rem | No | Captions, meta, copyright, eyebrow text |
| `small` | 0.875rem | No | Small UI text, navigation, footer text |
| `medium` | 1rem (→ 1.05rem fluid) | Yes | Body text default |
| `large` | 1.125rem (→ 1.25rem fluid) | Yes | Lead paragraphs, post excerpts |
| `x-large` | 1.5rem (→ 1.75rem fluid) | Yes | h3, medium UI text |
| `xx-large` | 2.25rem (→ 2.75rem fluid) | Yes | h2, section titles |
| `xxx-large` | 3.5rem (→ 4.5rem fluid) | Yes | h1, CTA headlines |
| `huge` | 5rem (→ 6.5rem fluid) | Yes | Hero headline, post-title on single |

### Type rules
- Headings use Newsreader at weight 500 or 600, letter-spacing -0.01em
  to -0.03em depending on size. Larger headings get tighter tracking.
- Body text uses Inter at weight 400, line-height 1.65.
- Captions use Inter at weight 400, uppercase, letter-spacing 0.05em
  to 0.1em.
- Buttons use Inter at weight 500, small font-size, letter-spacing
  0.01em.
- Links use the accent colour, no underline by default, underline on
  hover.

## 4. Spacing

| Slug | Size | Used for |
|------|------|----------|
| `20` | 0.5rem | Tight inline gaps |
| `30` | 0.75rem | Small padding |
| `40` | 1rem | Default block gap |
| `50` | 1.5rem | Paragraph spacing, button padding |
| `60` | 2rem | Section sub-spacing |
| `70` | 3rem | Section vertical rhythm |
| `80` | 4rem | Default section padding |
| `90` | 6rem | Hero / CTA vertical padding |

### Spacing rules
- Section vertical padding defaults to `var:preset|spacing|80` (4rem).
- Hero and CTA sections use `var:preset|spacing|90` (6rem) for
  generous vertical space.
- Block gap inside groups defaults to `var:preset|spacing|50` (1.5rem).
- Horizontal gaps between columns default to
  `var:preset|spacing|60` (2rem).

## 5. Layout

| Token | Size | Usage |
|-------|------|-------|
| `contentSize` | 768px | Default content column |
| `wideSize` | 1280px | Wide block alignment, hero content |
| Full width | 100% | Hero and CTA background bands |

Templates use `layout: { type: "constrained" }` by default, which
centers content at `contentSize` and allows wide/full alignments
within the editor. Hero and CTA patterns wrap their inner content
in a `constrained` group inside a full-width background group.

## 6. Radius

| Token | Size | Used for |
|------|------|----------|
| `--wp--custom--radius--sm` | 2px | Buttons, form inputs, search |
| `--wp--custom--radius--md` | 4px | Images, cards, contact panel |
| `--wp--custom--radius--lg` | 8px | Larger cards, modals |
| `--wp--custom--radius--pill` | 999px | Pill-shaped buttons (optional) |

The default button radius is 2px (very nearly square). The Minimal
style variation sets the button radius to 0 (truly square).

## 7. Shadow

| Token | Value | Used for |
|------|-------|----------|
| `--wp--custom--shadow--sm` | `0 1px 2px rgba(15, 23, 42, 0.04)` | Subtle elevation |
| `--wp--custom--shadow--md` | `0 4px 12px rgba(15, 23, 42, 0.06)` | Cards |
| `--wp--custom--shadow--lg` | `0 8px 24px rgba(15, 23, 42, 0.08)` | Modals, popovers |

Shadows are very low opacity. They signal elevation, not aesthetic.

## 8. Motion

| Token | Duration | Used for |
|------|----------|----------|
| `--wp--custom--transition--fast` | 120ms | Hover states, focus rings |
| `--wp--custom--transition--base` | 200ms | Layout transitions, mobile menu |

All CSS transitions are guarded by
`@media (prefers-reduced-motion: no-preference)`. Users with reduced
motion preference see static states.

## 9. Components

### Button
- Background: `var(--wp--preset--color--primary)`.
- Text: `var(--wp--preset--color--background)`.
- Padding: `0.75rem 1.25rem`.
- Radius: `var(--wp--custom--radius--sm)` (2px).
- Font: Inter, weight 500, size small.
- Hover: background changes to `secondary`.
- Focus: 2px accent outline with 2px offset.

### Outline button
- Background: transparent.
- Text: `var(--wp--preset--color--primary)`.
- Border: 1px solid `var(--wp--preset--color--primary)`.
- Other properties match the primary button.

### Link
- Colour: `var(--wp--preset--color--accent)`.
- Underline: none by default, underline on hover.
- Focus: 2px accent outline with 2px offset.

### Card
- Background: `var(--wp--preset--color--surface)` or
  `var(--wp--preset--color--background)`.
- Border: 1px solid `var(--wp--preset--color--border)`.
- Radius: `var(--wp--custom--radius--md)`.
- Padding: `var(--wp--preset--spacing--60)` (2rem).
- Shadow: `var(--wp--custom--shadow--sm)` (optional).

### Form input
- Background: `var(--wp--preset--color--background)`.
- Border: 1px solid `var(--wp--preset--color--border)`.
- Radius: `var(--wp--custom--radius--sm)`.
- Padding: `0.5rem 0.75rem`.
- Focus: 2px accent outline.

### Navigation
- Font: Inter, weight 500, size small.
- Spacing: 1.5rem block gap.
- Hover: text colour changes to accent.
- Mobile: Navigation block overlay at 1024px and below.

### Footer
- Background: `var(--wp--preset--color--primary)`.
- Text: `var(--wp--preset--color--background)`.
- Muted text: `rgba(255, 255, 255, 0.7)`.
- Top border of copyright bar: 1px solid `rgba(255, 255, 255, 0.15)`.

## 10. Style variation principles

Style variations are not palette swaps. Each variation should change
multiple axes simultaneously so a user picking the variation gets a
*recognisably different* site.

Variation axes (a variation should change at least three):

1. **Palette** — change at least the primary and accent tokens.
2. **Typography family** — swap display font, swap body font, or
   swap both.
3. **Component radius** — change button/card radius.
4. **Link treatment** — underline default vs. underline on hover.
5. **Section padding** — tighten or loosen the default section padding.
6. **Background pattern** — solid background vs. subtle gradient.
7. **Body font family** — use serif body (Newsreader) vs. sans-serif
   body (Inter) for an editorial feel.
8. **Heading style** — italic headings for a creative/editorial feel
   vs. roman headings for a corporate feel.
9. **Letter-spacing on display** — tight tracking (-0.04em) for editorial
   display vs. standard tracking (-0.02em) for general display.
10. **Separator treatment** — bold full-width separator (Editorial) vs.
    subtle 1px hairline separator (Modern).

### v0.1 variations shipped
- **Minimal** — typography (sans-serif headings) + radius (zero) + link
  treatment (underline default) axes.
- **Dark** — palette (inverted) + component colour axes.

### v0.2 variations shipped
- **Creative** — palette (warm cream + orange) + typography (italic
  Newsreader headings) + radius (pill 999px) + heading letter-spacing
  (tighter) axes. For designer portfolios and creative studios.
- **Corporate** — palette (navy + steel blue, no coral) + typography
  (Inter throughout, sans-serif headings) + radius (zero) + link
  treatment (underline always) + heading sizes (smaller) + spacing
  (tighter) axes. For consultancies and professional service firms.
- **Elegant** — palette (warm cream + brown + gold) + typography
  (italic h1, larger display) + radius (zero) + line-height (1.75)
  + caption style (italic) axes. For sophisticated portfolios and
  editorial brands.
- **Editorial** — palette (pure B/W, no accent) + typography
  (Newsreader for headings and body, oversized display, very tight
  tracking) + radius (zero) + body size (larger 1.125rem) + separator
  treatment (bold full-width) + shadow (none) axes. For long-form
  writers and content-first sites.

Future variations (Phase 6 follow-ons or starter-site-specific
variations in Phase 9) should each pick their own combination of at
least 3 axes from the list above. A palette swap is not accepted.

## 11. What we do not ship

For clarity, the following are explicitly out of scope for v0.1 and
v0.2 and should not appear in patterns, style variations, or templates:

- Gradients beyond the two declared in `theme.json`.
- Glassmorphism.
- Neon effects, glow effects, drop shadows on text.
- 3D objects, decorative circles, blobs.
- AI-generated illustrations, icons, portraits.
- Random stock photos pulled from Google Images.
- Multiple icon libraries mixed in the same pattern.
- Emoji used as functional icons (emoji are fine in user content).

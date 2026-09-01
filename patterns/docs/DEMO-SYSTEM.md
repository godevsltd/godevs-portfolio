# GoDevs Portfolio — Demo System

**Document version:** 0.3.0
**Phase:** 3 — Demo Website Library

This document defines the demo system architecture: how 100+ ready portfolio websites are produced from the existing pattern library without duplicating theme source files.

---

## 1. Architecture

A demo is **not** a forked copy of the theme. It is a composition:

```
Design Tokens (theme.json)
      ↓
Style Variation (styles/*.json)
      ↓
Reusable Patterns (patterns/*)
      ↓
Templates (templates/*.html)
      ↓
Demo Composition (a single pattern file in patterns/demos/)
      ↓
Demo Website (user inserts + applies variation)
```

Each demo is a single PHP file at `patterns/demos/<slug>.php`. It is registered as a WordPress pattern in the `godevs-portfolio-demos` pattern category. Users discover demos via the Block Inserter → Patterns → "Demos" → pick one → insert. The inserted markup becomes regular block content the user can fully edit.

---

## 2. Why This Architecture

| Property | Benefit |
|---|---|
| No theme duplication | One theme update fixes bugs across all 102 demos |
| Fully Gutenberg-editable | Users edit text, images, sections, colors, spacing |
| Lightweight | Demos are static HTML — zero runtime cost when not inserted |
| WordPress.org compliant | Just more patterns in the existing library — no admin UI, no importer, no telemetry |
| No plugin required | All 102 demos work with zero plugins |
| Scalable | Adding more demos is a single PHP file per demo |

---

## 3. Demo Composition

Each demo file follows this structure:

```php
<?php
/**
 * Title: Demo — <Name> (<Category>)
 * Slug: godevs-portfolio/demo-<slug>
 * Description: <design intent>. Recommended style variation: <variation>.
 * Categories: godevs-portfolio-demos
 * Keywords: demo, <keywords>
 * Viewport Width: 1280
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!-- wp:group {<outer wrapper>} -->
<section class="wp-block-group wp-block-godevs-demo-<slug> alignfull">

    <!-- Header (template part reference) -->
    <!-- wp:template-part {"slug":"<header-variant>","theme":"godevs-portfolio","tagName":"header"} /-->

    <!-- Hero (chosen from hero compositions) -->
    <!-- Hero markup -->

    <!-- Body section (chosen from section compositions) -->
    <!-- Body markup -->

    <!-- CTA (chosen from CTA compositions) -->
    <!-- CTA markup -->

    <!-- Footer (template part reference) -->
    <!-- wp:template-part {"slug":"<footer-variant>","theme":"godevs-portfolio","tagName":"footer"} /-->

</section>
<!-- /wp:group -->
```

The demo file embeds the actual block markup inline — it does **not** reference other patterns by slug. This means users can edit any block in the demo without affecting other demos.

---

## 4. Demo Categories (11 categories, 102 demos)

| # | Category | Count | Examples |
|---|---|---|---|
| 1 | Developer / Technology | 13 | Atelier, Monolith, Northline, Gridline, Vertex, Compile, Terminal, Frame, Blueprint, Keystone, Syntax, Polyglot |
| 2 | Designer | 7 | Canvas, Palette, Studio Craft, Inkwell, Marker, Draft, Pill |
| 3 | Creative / Artist | 4 | Vivid, Fieldnotes, Atlas, Obscura |
| 4 | Photography / Visual | 9 | Aperture, Veil, Runway, Compass, Studio Light, Visage, Edifice, Exposure, Darkroom |
| 5 | Agency / Studio | 11 | Northbound, Signal, Blueprint Studio, Foundry, Workshop, Codecraft, Momentum, Perspective, Frame Works, Solo Practice, Searchlight, Split |
| 6 | Business Professional | 10 | Meridian, Criterion, Compass Rose, Ledger, Keystone Pro, Vantage, Catalyst, Advisor, Summit, Impact |
| 7 | Architecture / Interior | 8 | Plan, Atelier Arch, Interior, Spacecraft, Verdure, Grid City, Structural, Form |
| 8 | Personal Brand | 12 | Signature, Founder, Executive, Speaker, Scribe, Writer, Freelance, Creator, Professional, Personal Brand, Central, Stack, Text Link |
| 9 | Education / Academic | 8 | Scholar, Research, Professor, Teacher, Guide, Course, Academia, Thesis |
| 10 | Lifestyle / Modern Professional | 9 | Minimal, Editorial, Lux, Couture, Lifestyle, Wander, Content, Modern Freelance, Magazine, Concise |
| 11 | Specialized | 8 | Director, Producer, Curator, Copy, Journalist, PM, Technologist, Independent |

**Total: 102 demos** (exceeds the 100+ target).

See `docs/demo-matrix.csv` for the complete design matrix.

---

## 5. Naming Convention

Demos use evocative, brand-like names — not numbered slugs.

### Good (used)

| Slug | Name | Reason |
|---|---|---|
| `atelier` | Atelier | Studio / workshop aesthetic |
| `monolith` | Monolith | Solid, backend-focused |
| `northline` | Northline | Directional, editorial |
| `gridline` | Gridline | Geometric, frontend |
| `aperture` | Aperture | Photography term |
| `runway` | Runway | Fashion term |
| `editorial` | Editorial | Publication tone |
| `concise` | Concise | Ultra-minimal |

### Bad (forbidden)

- `demo-01`, `demo-02`, `demo-03` (numbered — implies interchangeable)
- `hero-a`, `hero-b` (lettered — same problem)
- `developer-1`, `developer-2` (categorical + numbered)

---

## 6. Composition Variety — Anti-Repetition Strategy

Each demo varies across multiple axes:

| Axis | Variations |
|---|---|
| Hero | 11 compositions (centered-display, centered-intro, minimal-display, large-typography, editorial-large-typography, split-profile-image, image-focus, image-focus-dark, stats-asymmetric, dark-creative-large, dark-mono-display) |
| Body section | 18 compositions (portfolio-three-col, portfolio-four-col, portfolio-two-col-large, portfolio-asymmetric, portfolio-asymmetric-dark, portfolio-minimal-list, portfolio-large-showcase, services-three-col, services-three-col-list, services-numbered, experience-resume, experience-vertical, experience-editorial, about, blog, testimonials, stats, stats-large-numbers) + "X-then-Y" composites |
| CTA | 5 compositions (minimal, split-band, full-width, full-width-dark, typography-link) |
| Header | 12 template parts (header, header-minimal, header-transparent, header-centered, header-split, header-with-search, header-with-language-switcher, header-portfolio, header-dark, header-cta, header-editorial, header-stacked) |
| Footer | 11 template parts (footer, footer-minimal, footer-cta, footer-newsletter, footer-multi-column, footer-compact, footer-dark, footer-social, footer-portfolio, footer-editorial, footer-large-type) |
| Style variation | 8 (Default, Minimal, Dark, Editorial, Modern, Creative, Elegant, Corporate) |

Total combinations: 11 × 18 × 5 × 12 × 11 × 8 = ~1 million possible. The 102 demos are deliberately chosen to be visually distinct.

### Anti-Repetition Check

Before accepting a new demo, compare against existing demos on:
1. Same hero?
2. Same section order?
3. Same header?
4. Same footer?
5. Same style variation?

If a demo matches an existing demo on 4+ of these axes, it must be redesigned or rejected.

---

## 7. Demo Quality Checklist

Every demo passes:

| Check | Requirement |
|---|---|
| Design uniqueness | Differs from every other demo on at least 3 axes |
| Content hierarchy | H1 → H2 → H3 strict nesting, one H1 per demo |
| Responsive layout | Stacks at mobile, no horizontal overflow |
| Accessibility | Visible focus, keyboard nav, contrast AA, semantic HTML |
| Gutenberg editability | Every block editable in the Site Editor |
| Pattern reuse | Uses existing pattern compositions, not bespoke markup |
| Typography consistency | All type via font size presets |
| Color consistency | All colors via palette presets |
| Image quality | Uses the theme's bundled placeholder |
| Performance | No JS, no external assets, no inline styles for layout |
| No dependencies | Works with zero plugins |

---

## 8. Style Variation Strategy

Each demo declares a recommended style variation in its PHP header:

```php
* Description: Developer portfolio with editorial typography...
* Recommended style variation: Dark.
```

Users can switch variations freely — every demo renders correctly in all 8 variations because all colors and typography reference `var:preset|color|<slug>` and `var:preset|font-size|<slug>`.

### Distribution of Variations Across 102 Demos

| Variation | Demo count |
|---|---|
| Default (in theme.json) | implicit when no other chosen |
| Minimal | ~22 |
| Dark | ~16 |
| Editorial | ~12 |
| Modern | ~18 |
| Creative | ~10 |
| Elegant | ~10 |
| Corporate | ~14 |

---

## 9. Content Strategy

Demos use **generic professional demo content** — not fake real-world claims.

### Good (used)

- "A decade of editorial design, accessibility, and front-end engineering."
- "Currently taking on two new engagements for Q3."
- "Working with founders and editorial teams on portfolio sites."

### Bad (forbidden)

- "Winner of 14 international awards."
- "Trusted by Fortune 500 companies."
- "As seen in The New York Times."
- "5-star reviews from real clients."

### Why

Demos must not present fake credentials, awards, testimonials, or statistics as factual. Demo content should be clearly generic — believable but not deceptive.

---

## 10. Image Strategy

Demos use the theme's bundled placeholder image (`assets/images/placeholder-portrait.jpg`) for all image slots. This:

- Keeps the theme lightweight (no 100+ image files)
- Avoids copyrighted stock images
- Lets users replace the placeholder with their own image
- Maintains layout polish even before the user replaces images

When users insert a demo and replace the image, the layout continues to work because every image uses `aspectRatio` to reserve space.

---

## 11. Performance Strategy

Demos add **zero runtime cost** to the active site when not inserted. They are static PHP files in `patterns/demos/`. WordPress loads them via `_load_theme_block_patterns()` (output buffering) only when:

1. The user opens the Inserter and browses the "Demos" category
2. The user inserts a demo (at which point the markup becomes regular post content)

Once inserted, the demo is just block content — no special runtime handling.

### Asset Strategy

- No CSS per demo (uses theme-wide `assets/css/theme.css`)
- No JS per demo (theme ships no JS in Phase 3)
- No external images (uses bundled placeholder)
- No external fonts (system font stacks)
- No icon library

---

## 12. Future Demo Expansion

The architecture scales to hundreds of demos without rework. To add more demos:

1. Add an entry to the `DEMOS` list in `scripts/generate-demos.py`
2. Run the generator
3. Run audits
4. Test in Site Editor

Adding a demo does not require:
- New template parts
- New style variations
- New block styles
- New PHP code
- New CSS

Each demo is a pure composition of existing primitives.

---

## 13. Demo Distribution

Demos are bundled with the theme — they appear in the Block Inserter under **Patterns → Demos**. Users pick one and insert it. No importer, no admin panel, no companion plugin.

Future phases may optionally provide:
- Demo XML exports (WXR files) for one-click full-site imports
- Per-demo preview images
- Demo-specific starter content (sample posts, media)

These are **optional companion features**, not required for the core theme to function.

---

## 14. Demo Matrix

The full design matrix is in `docs/demo-matrix.csv`. It tracks for each demo:

- `slug` — filename slug
- `name` — display name
- `category` — niche label
- `hero` — hero composition used
- `body` — body section composition
- `cta` — CTA composition
- `header` — header template part slug
- `footer` — footer template part slug
- `variation` — recommended style variation
- `description` — one-sentence design intent

Use the matrix to verify uniqueness and identify gaps for future demos.

---

## 15. Generating Demos

The demos are generated by `scripts/generate-demos.py`. The generator:

1. Reads the `DEMOS` list (102 demo definitions)
2. For each demo, picks the hero, body, CTA, header, and footer compositions
3. Concatenates the markup with the appropriate template-part references
4. Writes the PHP file with the correct metadata header
5. Writes the design matrix CSV

To regenerate all demos:

```bash
python3 /home/z/my-project/scripts/generate-demos.py
```

To add a new demo, add an entry to the `DEMOS` list and re-run.

---

## 16. Quality Validation

After generation, all demos pass:

- `audit-blocks.py` — block markup balance + JSON attribute validation
- `audit-php.py` — PHP syntax + ABSPATH guard + forbidden patterns
- `audit-structure.py` — required files + pattern metadata + no hardcoded colors + no emoji

See `docs/QA-CHECKLIST.md` for the full validation process.

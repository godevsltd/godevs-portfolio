# GoDevs Portfolio — Pattern System

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the pattern architecture, taxonomy, naming conventions, authoring standards, and growth strategy. Patterns are the primary value of the theme — they are reusable compositions of core blocks that users insert into any page or post.

The long-term target is **500+ patterns across 18 categories**. Phase 1 ships ~10 representative patterns to validate the system.

---

## 1. What Is a Pattern?

A pattern is a **reusable block composition** registered with WordPress via PHP. The pattern file declares metadata (title, description, categories, keywords, viewport width) and returns block markup.

A pattern is **not**:
- A custom block
- A template
- A short code
- A demo (a demo composes multiple patterns)

### 1.1 Pattern File Anatomy

```php
<?php
/**
 * Title: Hero — Split Profile
 * Slug: godevs-portfolio/hero-split-profile
 * Description: A two-column hero with an editorial portrait on one side and a bold display headline plus CTA on the other.
 * Categories: godevs-portfolio-hero
 * Keywords: hero, split, profile, intro
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"section","layout":{"type":"default"}} -->
<section class="wp-block-group alignfull">
    <!-- Block markup here -->
</section>
<!-- /wp:group -->
```

### 1.2 Required Metadata

| Field | Required | Notes |
|---|---|---|
| `Title` | Yes | Descriptive — see Naming Standard below |
| `Slug` | Yes | Prefixed with `godevs-portfolio/` — namespaced to avoid collisions |
| `Description` | Yes | One sentence — explains when to use this pattern |
| `Categories` | Yes | At least one — see Categories below |
| `Keywords` | Recommended | 3–5 keywords users might search |
| `Viewport Width` | Recommended | Typically `1280` for desktop patterns, `768` for compact |

---

## 2. Pattern Categories

WordPress supports a `default` category set (Buttons, Columns, Gallery, Header, Footer, etc.). GoDevs Portfolio registers **portfolio-specific categories** to organize the long-term pattern library.

### 2.1 Registered Categories

| Slug | Label | Purpose |
|---|---|---|
| `godevs-portfolio-hero` | Hero | Top-of-page introductions |
| `godevs-portfolio-about` | About | Bio / about sections |
| `godevs-portfolio-services` | Services | Service offerings, feature lists |
| `godevs-portfolio-portfolio` | Portfolio | Project showcases, grids |
| `godevs-portfolio-projects` | Projects | Case study openers, project deep-dives |
| `godevs-portfolio-skills` | Skills | Skill lists, proficiency displays |
| `godevs-portfolio-experience` | Experience | Work history, timelines |
| `godevs-portfolio-education` | Education | Education, certifications |
| `godevs-portfolio-testimonials` | Testimonials | Client / peer endorsements |
| `godevs-portfolio-team` | Team | Team grids, member profiles |
| `godevs-portfolio-pricing` | Pricing | Pricing tables, plans |
| `godevs-portfolio-blog` | Blog | Post lists, featured posts |
| `godevs-portfolio-case-study` | Case Study | Long-form case study sections |
| `godevs-portfolio-cta` | CTA | Call-to-action bands |
| `godevs-portfolio-contact` | Contact | Contact sections, forms wrappers |
| `godevs-portfolio-header` | Header | Site header variations |
| `godevs-portfolio-footer` | Footer | Site footer variations |
| `godevs-portfolio-pages` | Pages | Full-page compositions |

Categories are registered in `inc/block-patterns.php`.

### 2.2 Multi-Category Patterns

A pattern may belong to multiple categories. For example, "Hero — Split Profile" might be tagged both `godevs-portfolio-hero` and `godevs-portfolio-pages`. The first category is the **primary** category and is shown first in the inserter.

---

## 3. Naming Standard

Pattern titles follow this convention:

```
<Section> — <Descriptive Subtitle>
```

Where `<Section>` matches one of the category labels (Hero, About, Services, etc.), and `<Descriptive Subtitle>` is a short, specific phrase describing the pattern's design intent.

### 3.1 Good Names

| Title | Slug |
|---|---|
| Hero — Split Profile | `godevs-portfolio/hero-split-profile` |
| Hero — Minimal Introduction | `godevs-portfolio/hero-minimal-introduction` |
| Portfolio — Three Column Grid | `godevs-portfolio/portfolio-three-column-grid` |
| Services — Feature Cards | `godevs-portfolio/services-feature-cards` |
| About — Image and Stats | `godevs-portfolio/about-image-and-stats` |
| Testimonials — Single Quote | `godevs-portfolio/testimonials-single-quote` |
| CTA — Split Band | `godevs-portfolio/cta-split-band` |
| Contact — Inline CTA | `godevs-portfolio/contact-inline-cta` |
| Experience — Vertical Timeline | `godevs-portfolio/experience-vertical-timeline` |
| Blog — Featured Posts | `godevs-portfolio/blog-featured-posts` |

### 3.2 Bad Names (Forbidden)

```
Hero 01
Hero 02
Hero 03
Pattern A
Test Pattern
Untitled
New Hero
```

Why forbidden:
- **Numbered names** imply variants are interchangeable. They are not.
- **Generic names** ("Untitled", "New Hero") give no signal of design intent.
- **Pattern A** style gives no hint of content or layout.

### 3.3 Slug Convention

```
godevs-portfolio/<category-slug>-<descriptive-slug>
```

- All lowercase
- Hyphenated
- Namespaced with `godevs-portfolio/` prefix
- No trailing version number
- No date or year

---

## 4. Authoring Standards

### 4.1 Composition Rules

1. **Top-level wrapper is `core/group` with `tagName: "section"` and `align: "full"`.** This makes the pattern a clean section.
2. **Inner content wrapper is `core/group` with `align: "wide"`.** Section content respects the wide width.
3. **Section vertical padding** uses spacing preset XL on mobile, 2XL on desktop (fluid `clamp`).
4. **Section header** (eyebrow + H2) uses `core/group` with `layout: { type: "flex", orientation: "vertical" }` and gap SM.
5. **Section content** uses `core/group` with `layout: { type: "flex", orientation: "vertical" }` and gap LG.

### 4.2 Block Selection Rules

- Prefer `core/stack` and `core/row` over manual `core/columns` for non-equal splits.
- Use `core/columns` only for equal-width grids.
- Use `core/media-text` for any image+content split — never two-column with one image.
- Use `core/query` + `core/post-template` for any post/portfolio list — never a static `core/columns` of `core/image`s.
- Use `core/buttons` for CTAs — never `core/button` alone.

### 4.3 Styling Rules

- All colors via `var:preset|color|<slug>` — never hardcoded hex.
- All spacing via `var:preset|spacing|<slug>` — never hardcoded `rem`/`px`.
- All font sizes via `var:preset|font-size|<slug>` — never hardcoded size.
- All font families via `var:preset|font-family|<slug>`.
- Border radius via the block's `style.border.radius` — never hardcoded in CSS.
- Block-level custom class names use `wp-block-godevs-<pattern-name>` only when needed for supplementary CSS.

### 4.4 Accessibility Rules

- Every section has a visible H2 — never a section with only imagery.
- Every image has descriptive `alt` text — or empty `alt=""` if purely decorative.
- Every button/link has a text label — no icon-only buttons.
- Reading order matches visual order (use `core/stack`, not absolute positioning).
- Color contrast meets WCAG 2.1 AA in default + every variation.

### 4.5 Content Rules

- Pattern content uses **placeholder text** that hints at purpose, not Lorem Ipsum.
- Example: A services pattern shows "Brand Strategy", "Visual Identity", "Web Design" — not "Service 1, Service 2".
- Images use `core/image` with `placeholder` or a default `wp-post-image`-compatible URL. No external image URLs.

---

## 5. Pattern Library Growth Strategy

### 5.1 Phase Targets

| Phase | Pattern count | Focus |
|---|---|---|
| Phase 1 | ~10 | Representative patterns validating the system |
| Phase 2 | 50+ | Full set per major category |
| Phase 3 | 150+ | Variations on each major pattern type |
| Phase 4 | (demos consume patterns — no new patterns) | — |
| Phase 5 | 500+ | Comprehensive library covering all niches |
| Phase 6 | (audit and cull — no new patterns unless filling gaps) | Quality pass |

### 5.2 Visual Distinctness Rule

Two patterns in the same category must differ in **at least three** of:

1. Layout system (grid vs. split vs. stack vs. asymmetric)
2. Density (compact vs. spacious)
3. Image treatment (full-bleed vs. contained vs. collage)
4. Type treatment (display vs. body-led vs. caption-led)
5. CTA presence and style
6. Background treatment (solid vs. split vs. layered)

Two patterns that differ only in color or copy are **not distinct** and one should be removed.

### 5.3 Culling Strategy

At Phase 6 audit:
- Identify patterns that differ from another pattern only by color — remove one
- Identify patterns with low inserter engagement (if analytics available) — review
- Identify patterns that fail accessibility audit — fix or remove
- Identify patterns that fail responsive audit — fix or remove

The pattern library should grow through **addition of distinct designs**, not duplication.

---

## 6. Pattern Folder Layout

Patterns live in `patterns/<category>/<pattern-name>.php`. The folder name matches the category slug (without the `godevs-portfolio-` prefix). The filename matches the pattern's descriptive slug.

```
patterns/
├── hero/
│   └── split-profile.php
├── about/
│   └── image-and-stats.php
├── services/
│   └── feature-cards.php
...
```

### 6.1 Why a Folder Per Category?

When the pattern count grows past 50, a flat `patterns/` directory becomes unmanageable. Category folders keep the directory navigable and make per-category audits trivial.

The folder name does **not** need to match the pattern's registered category — that mapping happens in the pattern's PHP header. But by convention, we keep them aligned.

---

## 7. Pattern Discovery in the Inserter

Patterns surface in the WordPress inserter under two paths:

1. **Category browse:** Inserter → Patterns → [Category name] → All patterns in that category
2. **Keyword search:** Inserter → search "hero" → All patterns with "hero" in title, slug, or keywords

The Title, Description, and Keywords fields drive discovery. Investing in clear metadata directly improves pattern usability.

---

## 8. Pattern-Composition vs Template Composition

Patterns are the building blocks. Templates compose patterns. A demo composes templates with content + style variations.

```
Patterns (atomic)
      ↓
Template Parts (header, footer)
      ↓
Templates (composed of patterns + template parts)
      ↓
Demo (composed of templates + content + style variation)
```

This separation is critical to the long-term goal of 100+ demos from a shared pattern library. See `TEMPLATE-SYSTEM.md` and the demo system section of `ARCHITECTURE.md`.

---

## 9. Phase 1 Initial Pattern Set

Phase 1 ships the following representative patterns. Each was chosen to validate a different category and a different layout system.

| File | Title | Category | Layout system validated |
|---|---|---|---|
| `hero/split-profile.php` | Hero — Split Profile | Hero | Two-column split with media+text |
| `about/image-and-stats.php` | About — Image and Stats | About | Media-text + stats row |
| `services/feature-cards.php` | Services — Feature Cards | Services | Three-column grid of cards |
| `portfolio/three-column-grid.php` | Portfolio — Three Column Grid | Portfolio | Query loop + post-template grid |
| `skills/labeled-list.php` | Skills — Labeled List | Skills | Two-column label/value list |
| `experience/vertical-timeline.php` | Experience — Vertical Timeline | Experience | Stack with year+content blocks |
| `testimonials/single-quote.php` | Testimonials — Single Quote | Testimonials | Pull quote with attribution |
| `cta/split-cta.php` | CTA — Split Band | CTA | Full-bleed band with split content |
| `contact/contact-cta.php` | Contact — Inline CTA | Contact | Centered CTA with contact info |
| `blog/featured-posts.php` | Blog — Featured Posts | Blog | Query loop with featured post + 2 secondary |

This set covers:
- All major layout systems (split, stack, grid, query loop, cover)
- All major content types (text, media, stats, list, quote, CTA, contact)
- Both `core/columns` and `core/query` patterns
- Both full-bleed and contained patterns

---

## 10. Pattern Authoring Workflow

When adding a new pattern:

1. **Identify the category** — file goes in `patterns/<category>/`
2. **Pick a descriptive name** — see Naming Standard
3. **Author the metadata header** — title, slug, description, categories, keywords, viewport
4. **Compose with core blocks** — see Authoring Standards
5. **Validate the markup** — open in Site Editor, ensure it inserts and renders
6. **Test in a style variation** — switch to each style variation, ensure it still looks intentional
7. **Test responsive** — viewport at 360px, 768px, 1280px
8. **Test accessibility** — keyboard nav, focus visible, contrast AA
9. **Update `CHANGELOG.md`** under "Added"
10. **Commit** with message `Add pattern: <title>`

See `CONTRIBUTING.md` for the full workflow.

# Demo Strategy — GoDevs Portfolio

The product is designed to eventually support 100+ professional
starter sites. v0.1 ships the foundation (theme, patterns, style
variations) but not starter sites themselves. This document
explains the architecture that starter sites will use, the
quality bar each starter site must meet, and how the v0.4+
catalogue will grow without degrading into 100 copies of the
same layout.

---

## 1. Foundation scope (v0.1)

v0.1 ships:
- One default front-page template composing the eight shipped
  patterns.
- Two style variations (Minimal, Dark).
- Eight patterns (hero, about, services, portfolio-grid,
  testimonials, cta, contact, footer).
- A `theme.json` design system that all future starter sites
  inherit.

v0.1 does NOT ship:
- A separate starter site package.
- A demo importer.
- Any mechanism to switch between starter sites from the admin.

The v0.1 foundation is the substrate that future starter sites
build on.

## 2. Starter site architecture (v0.4+)

A starter site is a self-contained bundle that produces a
complete website when installed. Each starter site consists of:

1. A style variation JSON in `/styles/<name>.json` (e.g.
   `styles/developer.json`).
2. A curated set of patterns (a subset of the patterns in
   `/patterns/`, plus any starter-site-specific patterns in
   `/patterns/sites/<name>/`).
3. A starter-content XML file (`/starter-content/<name>.xml`)
   that defines the pages, posts, menus, and media the site
   ships with.
4. A screenshot (`/screenshot-<name>.png`).
5. A metadata file (`/starter-content/<name>.json`) declaring
   the starter site name, description, category, screenshot,
   and required plugins.

The theme ships a small UI (added in Phase 7) that lets the
user pick a starter site from the admin and apply it. Applying
a starter site:

1. Switches the active style variation to the starter site's
   variation.
2. Imports the starter content XML (creating pages, posts,
   menus, and media).
3. Sets the front-page template to the starter site's
   composed front-page.
4. Marks the starter site as applied in the site's options.

## 3. Starter site categories

The future 100-site catalogue is organised by category. Each
category targets a specific user type:

| Category | Example sites |
|----------|---------------|
| Developer | Backend developer, Frontend developer, WordPress developer, DevOps engineer |
| Freelancer | General freelancer, Writer, Editor, Translator |
| Designer | UI designer, UX designer, Graphic designer, Brand designer |
| Agency | Digital agency, Creative agency, Marketing agency, Branding studio |
| Startup | SaaS startup, Hardware startup, Service startup |
| Business | Consulting firm, Law firm, Accounting firm, Architecture firm |
| Creative | Photographer, Videographer, Illustrator, Music producer |
| Photographer | Wedding, Editorial, Portrait, Travel, Product |
| Consultant | Strategy consultant, Marketing consultant, Tech consultant |
| Personal Brand | Author, Speaker, Coach, Podcaster |
| Corporate | Holding company, Manufacturing, Logistics, Real estate |

Each category will ship with 5-10 starter sites at full
catalogue (Phase 9).

## 4. Quality bar

Every starter site must:

- Have its own visual identity (not just a palette swap of
  another starter site).
- Use typography appropriate for the target user (e.g. a
  photographer's site uses larger image blocks; a developer's
  site uses more code blocks).
- Use imagery appropriate for the target user (e.g. a
  photographer's site uses real photography placeholders; a
  developer's site uses terminal/code screenshots).
- Have a content structure appropriate for the target user
  (e.g. a consultant's site has a Services page and Case
  Studies page; a photographer's site has a Portfolio page
  and an About page).
- Have clear navigation (3-7 top-level menu items, no more).
- Have a responsive layout tested at 375, 768, 1024, 1280,
  1440, 1920.
- Have accessible components (skip link, focus-visible,
  semantic landmarks, contrast-checked palette).
- Have realistic demo content (no fake awards, revenue, or
  client relationships).

## 5. Anti-pattern: 100 copies of the same layout

The brief is explicit: do not ship 100 starter sites that are
colour-swapped copies of the same layout. Each starter site
should differ on at least three of the following axes:

1. **Pattern set** — different subsets of the pattern library,
   plus starter-site-specific patterns.
2. **Style variation** — different palette, typography, or
   component radius.
3. **Front-page composition** — different ordering of patterns
   on the front-page.
4. **Page set** — different pages (e.g. a consultant's site
   has a Services page; a photographer's site has a Print Store
   page).
5. **Navigation** — different menu structure.
6. **Imagery** — different default imagery (different
   placeholder service, different image treatments).

## 6. Demo content policy

Demo content must follow the AI content policy in the product
brief (section 14):

- **No fake awards, certifications, revenue, or client
  relationships.**
- **No generic AI marketing language.**
- **No AI-generated images, illustrations, or icons.**
- **No random stock photos pulled from Google Images.**
- **No fake team photos.**
- **No fake company logos.**

Fictional identities are acceptable when clearly used as
sample content (e.g. "Sample client · Head of Brand, fictional
studio" in the testimonials pattern).

## 7. Imagery sourcing

Starter sites will source imagery from:

- **Unsplash** — for photography (license: Unsplash License, free
  for commercial use).
- **Pexels** — for photography (license: Pexels License, free for
  commercial use).
- **Theme-native SVG** — for icons, decorative elements, and
  illustrations created by the theme team.
- **Bundled Inter / Newsreader** — for typography samples.

Imagery will be reviewed for licensing and authenticity before
each starter site ships.

## 8. Phase 9 progressive rollout

Phase 9 ships starter sites progressively:
- **9a (10 sites)** — Developer, Freelancer, Designer, Agency,
  Startup, Business, Creative, Photographer, Consultant, Personal
  Brand (one per category). Each site is intentionally distinct;
  no two share a layout.
- **9b (20 sites)** — Add 10 more sites, two per category. Each
  new site differs on at least three axes from its category's
  9a site.
- **9c (50 sites)** — Add 30 more sites, five per category. The
  category catalogue starts to feel comprehensive.
- **9d (75 sites)** — Add 25 more sites, ~2.5 per category.
- **9e (100+ sites)** — Add 25+ more sites, hitting 100 total.
  Beyond 100, sites are added per community request.

## 9. Starter site distribution

Starter sites ship as part of the theme, not as a separate
download. The user installs the theme and gets access to all
starter sites via the onboarding UI.

A future plugin (GoDevs Starter Sites) may ship as a separate
plugin to reduce the theme's initial download size. This is
evaluated during Phase 9.

## 10. Onboarding UX (Phase 7)

The onboarding UI (added in Phase 7) lets the user:

1. Browse starter sites by category.
2. Preview each starter site with the user's content (or with
   demo content).
3. Apply a starter site (which switches the style variation and
   imports the starter content).
4. Skip onboarding and start with the default theme (no starter
   site applied).

The onboarding UX is non-blocking. The user can skip it and
apply a starter site later via the Site Editor.

## 11. Starter site metadata schema

Each starter site's metadata file (`/starter-content/<name>.json`)
follows this schema:

```json
{
  "name": "developer",
  "title": "Developer Portfolio",
  "description": "A code-aware portfolio for backend and frontend developers.",
  "category": "Developer",
  "style": "developer",
  "screenshot": "screenshot-developer.png",
  "front_page_template": "templates/sites/developer/front-page.html",
  "patterns": [
    "godevs-portfolio/hero",
    "godevs-portfolio/services",
    "godevs-portfolio/portfolio-grid",
    "godevs-portfolio/cta",
    "godevs-portfolio/contact"
  ],
  "starter_content": "starter-content/developer.xml",
  "required_plugins": [],
  "recommended_plugins": []
}
```

The schema is consumed by the onboarding UI (Phase 7) to render
the starter site browser and by the apply-starter-site logic to
switch style variation and import content.

## 12. v0.1 deliverable

v0.1 ships the architecture this document describes, plus the
default front-page template (which is the de-facto v0.1
"starter site"). The default front-page composes:

1. Hero
2. About
3. Services (on surface band)
4. Portfolio Grid
5. CTA (on navy band)
6. Testimonials
7. Contact (on navy band)

This is the seed. Phase 9 grows the catalogue from this seed.

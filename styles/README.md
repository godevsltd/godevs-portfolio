# GoDevs Portfolio

A premium, Gutenberg-first, Full Site Editing WordPress block theme for portfolios, editorial sites, and personal brands.

**Version:** 0.1.0 — Phase 1 Foundation
**License:** GPL v2 or later
**Text Domain:** `godevs-portfolio`
**Requires WordPress:** 6.5+
**Requires PHP:** 7.4+

---

## Quick Start

1. Copy the `godevs-portfolio/` directory into `wp-content/themes/`.
2. Activate the theme under **Appearance → Themes**.
3. Visit **Appearance → Editor** to customize templates, parts, patterns, and global styles.

The theme requires **no plugins**. It activates and renders a complete experience on a fresh WordPress install.

---

## What's in Phase 1

| Artifact | Count |
|---|---|
| Templates | 12 (index, home, front-page, page, single, archive, category, tag, author, date, search, 404) |
| Template parts | 6 (header, header-minimal, header-transparent, footer, footer-minimal, footer-cta) |
| Patterns | 10 representative patterns across major categories |
| Style variations | 4 (Default + Minimal + Dark + Editorial) |
| Pattern categories | 18 portfolio-specific categories |
| Custom block styles | 7 (button × 3, card × 4, separator × 2, eyebrow × 1) |
| Documentation | 15 Markdown files in `docs/` |

---

## Documentation

Full documentation is in `docs/`. Start with:

- [`docs/PRD.md`](docs/PRD.md) — Product vision and scope
- [`docs/ARCHITECTURE.md`](docs/ARCHITECTURE.md) — File structure and principles
- [`docs/DESIGN-SYSTEM.md`](docs/DESIGN-SYSTEM.md) — Design tokens reference
- [`docs/AI-DEVELOPMENT-GUIDE.md`](docs/AI-DEVELOPMENT-GUIDE.md) — Workflow for AI agents and contributors

---

## Architecture

```
godevs-portfolio/
├── assets/           CSS, JS, fonts, images
├── docs/             Documentation (15 Markdown files)
├── inc/              PHP modules (patterns, block styles)
├── patterns/         Reusable block compositions
├── parts/            Template parts (header, footer variants)
├── styles/           Style variation JSON files
├── templates/        WordPress route templates
├── functions.php     Theme bootstrap
├── style.css         WordPress theme header
├── theme.json        Design system source of truth
└── readme.txt        WordPress.org readme
```

See [`docs/ARCHITECTURE.md`](docs/ARCHITECTURE.md) for the full structure and rationale.

---

## Long-Term Vision

GoDevs Portfolio is a scalable Gutenberg design system whose long-term targets are:

- 100+ ready demo websites
- 500+ reusable Gutenberg patterns
- 100+ page/template compositions
- 15+ style variations

Phase 1 ships the **foundation only** — capable of supporting the long-term plan without rework. See [`docs/RELEASE-ROADMAP.md`](docs/RELEASE-ROADMAP.md) for the multi-phase plan.

---

## Key Principles

- **Block-first** — Composed entirely from WordPress core blocks. No custom blocks.
- **theme.json-driven** — All design tokens (colors, typography, spacing, layout, borders) live in `theme.json`. No hardcoded values in CSS or templates.
- **Accessibility-first** — Targets WCAG 2.1 Level AA.
- **Performance-first** — No JS in Phase 1, minimal CSS, system fonts.
- **No plugin required** — Activates and renders a complete experience with zero plugins.
- **No external dependencies** — No font CDN, no icon library, no jQuery, no CSS framework.

---

## Contributing

See [`docs/CONTRIBUTING.md`](docs/CONTRIBUTING.md) for the full contributor guide. The workflow is:

```
Inspect → Plan → Implement → Validate → Review → Report
```

For AI agents, see [`docs/AI-DEVELOPMENT-GUIDE.md`](docs/AI-DEVELOPMENT-GUIDE.md).

---

## License

GPL v2 or later. See [`LICENSE`](LICENSE).

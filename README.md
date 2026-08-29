# GoDevs Portfolio

A modern, Gutenberg-first WordPress theme for freelancers, developers, designers, agencies, and professional service businesses. Built around the native Site Editor — no page builder required.

[![License: GPL v2+](https://img.shields.io/badge/License-GPL%20v2%2B-blue.svg)](LICENSE)

---

## Overview

GoDevs Portfolio is a block theme that pairs a strong editorial design system with a clean pattern library and a clearly documented plugin boundary. The theme is designed to scale from a single freelancer site to a 100+ starter-site catalogue without rewrites.

- **Editorial / Swiss visual direction** — strong typography, generous whitespace, thin borders, no decorative noise.
- **Self-hosted fonts** — Inter (body / UI) and Newsreader (display), bundled as woff2, no external requests.
- **Eight block patterns** — hero, about, services, portfolio-grid, testimonials, cta, contact, footer.
- **Two style variations** — Minimal (sans-serif, neutral palette) and Dark (inverted palette).
- **WordPress 6.5+** — full Site Editor, Style Book, fluid typography APIs.
- **Plugin boundary** — the theme works without GoDevs Core; plugin-backed features fail gracefully.

## Requirements

- WordPress 6.5 or later.
- PHP 7.4 or later.
- MySQL 5.7 or MariaDB 10.3 or later.
- A modern browser (Chrome, Firefox, Safari, Edge — latest or one version back).

## Installation

### From the WordPress admin
1. Download the theme `.zip` from the [releases page](https://github.com/godevs/godevs-portfolio/releases).
2. In your WordPress admin, go to **Appearance → Themes → Add New → Upload Theme**.
3. Choose the `.zip` and click **Install Now**, then **Activate**.
4. Open **Appearance → Editor** to customise templates, styles, and content.
5. (Optional) Install GoDevs Core (when released) to enable structured portfolio content types.

### From source
1. Clone the repository:
   ```bash
   git clone https://github.com/godevs/godevs-portfolio.git
   ```
2. Copy the `godevs-portfolio/` directory into `wp-content/themes/`.
3. Activate the theme in **Appearance → Themes**.

## Features

### Foundation (v0.1)
- Block theme architecture (`theme.json` schema v2).
- Nine block templates + one custom template (`page-no-title`).
- Three template parts (header, footer, mobile-menu).
- Eight block patterns.
- Two style variations (Minimal, Dark).
- Self-hosted Inter + Newsreader fonts.
- Translation-ready, RTL-ready, accessibility-ready foundation.

### Documentation suite
24 documents in `/docs/` covering product, architecture, design system, Gutenberg, theme settings, template system, pattern system, demo strategy, plugin boundary, responsive system, accessibility, performance, SEO, security, internationalization, WordPress.org compliance, coding standards, testing plan, QA checklist, browser compatibility, contributing, and AI development guide.

See `docs/AI-DEVELOPMENT-GUIDE.md` before contributing code — it is the canonical reference for AI agents and human contributors alike.

## Architecture

```
godevs-portfolio/
├── assets/         # CSS, JS, fonts, images
├── docs/           # 24 documentation files
├── languages/      # translation template (.pot)
├── parts/          # template parts (header, footer, mobile-menu)
├── patterns/       # 8 block patterns
├── styles/         # 2 style variations (Minimal, Dark)
├── templates/      # 10 block templates
├── tests/          # QA scaffolding
├── theme.json      # design system + block settings
├── style.css       # WordPress theme metadata header
├── functions.php   # minimal theme setup
├── index.php       # silence-is-golden fallback
├── readme.txt      # WordPress.org-format readme
├── README.md       # this file
├── CHANGELOG.md
├── LICENSE         # GPL-2.0-or-later
└── .gitignore
```

See `docs/ARCHITECTURE.md` for the full architecture document.

## Development

### Local development environment
The recommended workflow uses a local WordPress install (e.g. Local by Flywheel, DevKinsta, or `wp-env`).

```bash
# Clone the repo
git clone https://github.com/godevs/godevs-portfolio.git
cd godevs-portfolio

# Run the test suite
php tests/run.php

# Lint PHP files
find . -name "*.php" -exec php -l {} \;

# Run a local WordPress install (requires Node + Docker)
npx wp-env start
```

### Tests
The test suite lives in `/tests/`:

- `test-activation.php` — theme activates without PHP errors.
- `test-theme-json-schema.php` — `theme.json` and style variations are valid JSON.
- `test-pattern-smoke.php` — every pattern file has a valid header and parses.
- `test-templates-exist.php` — every declared template and part exists.
- `run.php` — test runner.

Run all tests: `php tests/run.php`.

See `docs/TESTING-PLAN.md` for the full test strategy and `docs/QA-CHECKLIST.md` for the pre-release checklist.

### Coding standards
The theme follows WordPress coding standards for PHP, JavaScript, CSS, and HTML. See `docs/CODING-STANDARDS.md` for the conventions and `docs/AI-DEVELOPMENT-GUIDE.md` for the AI-specific guide.

## Documentation

| Document | Purpose |
|----------|---------|
| `docs/PRD.md` | Product requirements |
| `docs/ARCHITECTURE.md` | Architecture overview |
| `docs/DEVELOPMENT-ROADMAP.md` | Phase-by-phase roadmap |
| `docs/FEATURE-SPECIFICATION.md` | v0.1 feature list |
| `docs/DESIGN-SYSTEM.md` | Visual design system |
| `docs/GUTENBERG-ARCHITECTURE.md` | Block editor integration |
| `docs/THEME-SETTINGS.md` | Customisation surface |
| `docs/TEMPLATE-SYSTEM.md` | Template layer |
| `docs/PATTERN-SYSTEM.md` | Pattern layer |
| `docs/DEMO-STRATEGY.md` | Starter site architecture |
| `docs/CORE-PLUGIN-BOUNDARY.md` | Theme vs plugin boundary |
| `docs/RESPONSIVE-SYSTEM.md` | Responsive strategy |
| `docs/ACCESSIBILITY.md` | Accessibility scope |
| `docs/PERFORMANCE.md` | Performance budget |
| `docs/SEO.md` | SEO foundation |
| `docs/SECURITY.md` | Security scope |
| `docs/INTERNATIONALIZATION.md` | i18n + RTL |
| `docs/WORDPRESS-ORG-COMPLIANCE.md` | WordPress.org preparation |
| `docs/CODING-STANDARDS.md` | Coding standards |
| `docs/TESTING-PLAN.md` | Testing strategy |
| `docs/QA-CHECKLIST.md` | Pre-release checklist |
| `docs/BROWSER-COMPATIBILITY.md` | Browser matrix |
| `docs/CONTRIBUTING.md` | Contribution guide |
| `docs/AI-DEVELOPMENT-GUIDE.md` | AI agent guide |

## Roadmap

The product is built in 17 phases. v0.1 ships Phases 0–5. See `docs/DEVELOPMENT-ROADMAP.md` for the full roadmap.

| Phase | Status | Scope |
|-------|--------|-------|
| 0 — Planning | ✅ shipped (v0.1) | PRD, architecture, feature spec, plugin boundary, WordPress.org strategy |
| 1 — Theme foundation | ✅ shipped (v0.1) | Block theme, theme.json, templates, parts, basic assets |
| 2 — Design system | ✅ shipped (v0.1) | Palette, typography, spacing, layout, buttons |
| 3 — Core templates | ✅ shipped (v0.1) | 9 templates + page-no-title custom template |
| 4 — Header & footer | ✅ shipped (v0.1) | Header, footer, mobile nav, CTA |
| 5 — Pattern library | ✅ shipped (v0.1) | 8 patterns: hero, about, services, portfolio, testimonials, cta, contact, footer |
| 6 — Style variations | ⏳ v0.2 | Modern, Minimal, Dark, Creative, Corporate, Elegant, Editorial |
| 7 — User experience | ⏳ v0.2 | Beginner setup, starter-site architecture |
| 8 — Core plugin integration | ⏳ v0.3 | Portfolio, services, testimonials, team, case studies |
| 9 — Starter sites | ⏳ v0.4+ | 10 → 20 → 50 → 75 → 100+ |
| 10 — Advanced features | ⏳ v0.4+ | Advanced portfolio, case studies, resume, booking |
| 11 — Performance | ⏳ v0.5 | CSS, JS, image, font, asset optimisation |
| 12 — Accessibility | ⏳ v0.5 | Full WCAG 2.1 AA audit |
| 13 — Security | ⏳ v0.5 | Security audit |
| 14 — QA | ⏳ v0.6 | Full QA pass |
| 15 — Documentation | ⏳ v0.6 | Final documentation |
| 16 — WordPress.org preparation | ⏳ v0.7 | Submission preparation |
| 17 — Release candidate | ⏳ v0.7+ | Final QA and release |

## Contribution

Contributions are welcome. Read `docs/CONTRIBUTING.md` before opening an issue or PR. The key rules:

- Follow WordPress coding standards.
- Respect the architecture (`docs/ARCHITECTURE.md`) and plugin boundary (`docs/CORE-PLUGIN-BOUNDARY.md`).
- Use design system tokens (no hardcoded hex or spacing in patterns).
- Test against the QA checklist (`docs/QA-CHECKLIST.md`).
- Use Conventional Commits for commit messages.

## License

The theme is licensed under the [GNU General Public License v2 or later](LICENSE).

### Bundled assets
- **Inter** font family — by Rasmus Andersson, licensed under the [SIL Open Font License 1.1](assets/fonts/INTER-OFL.txt).
- **Newsreader** font family — by Production Type, licensed under the [SIL Open Font License 1.1](assets/fonts/NEWSREADER-OFL.txt).

## Credits

- Theme architecture: GoDevs
- Inter font: Rasmus Andersson (SIL OFL 1.1)
- Newsreader font: Production Type (SIL OFL 1.1)
- Block markup conventions: WordPress core block editor handbook

## Links

- [Documentation](docs/README.md)
- [Changelog](CHANGELOG.md)
- [Contributing guide](docs/CONTRIBUTING.md)
- [AI development guide](docs/AI-DEVELOPMENT-GUIDE.md)
- [WordPress.org compliance](docs/WORDPRESS-ORG-COMPLIANCE.md)
- [Issue tracker](https://github.com/godevs/godevs-portfolio/issues)
#   g o d e v s - p o r t f o l i o  
 #   g o d e v s - p o r t f o l i o  
 
# Contributing — GoDevs Portfolio

Thank you for your interest in contributing. The theme is
maintained by GoDevs and accepts external contributions that
follow the rules in this document and in
`docs/AI-DEVELOPMENT-GUIDE.md`.

---

## 1. How to contribute

### Reporting bugs

1. Search existing GitHub issues to avoid duplicates.
2. Open a new issue with the following structure:
   - **Summary:** one sentence describing the bug.
   - **Steps to reproduce:** numbered list of steps.
   - **Expected behaviour:** what you expected.
   - **Actual behaviour:** what you saw.
   - **Environment:** WordPress version, PHP version, browser,
     OS, theme version.
   - **Screenshots:** if applicable.
   - **Possible cause:** if you have a hypothesis.
3. Wait for a maintainer to triage. Do not open a PR until the
   bug is confirmed.

### Suggesting features

1. Search existing GitHub issues for similar suggestions.
2. Open a new issue with the following structure:
   - **Problem:** what user problem does this solve?
   - **Proposal:** one paragraph describing the feature.
   - **Alternatives:** what alternatives were considered?
   - **WordPress-native:** can this be solved with native
     WordPress features (theme.json, a core block, a pattern)?
3. Wait for maintainer discussion. Do not open a PR until the
   feature is approved.

### Submitting a pull request

1. Fork the repository.
2. Create a branch: `<type>/<short-description>` (e.g.
   `feat/team-pattern`, `fix/header-focus-trap`).
3. Make your changes following the standards in
   `docs/CODING-STANDARDS.md` and `docs/AI-DEVELOPMENT-GUIDE.md`.
4. Run the automated tests: `php tests/run.php`.
5. Run the manual QA checklist from `docs/QA-CHECKLIST.md`
   against your changes.
6. Commit your changes with a Conventional Commits message
   (see §4).
7. Open a PR with a description following the template in
   `docs/AI-DEVELOPMENT-GUIDE.md` §19.
8. Wait for review. Address review feedback by pushing new
   commits (do not force-push).

## 2. Code standards

All contributions must follow `docs/CODING-STANDARDS.md`. The
key rules:

- WordPress PHP Coding Standards for PHP.
- WordPress JavaScript Coding Standards for JS.
- WordPress CSS conventions for CSS.
- Block markup conventions for HTML.
- The naming conventions in
  `docs/CODING-STANDARDS.md` §5.

PRs that introduce style violations will be flagged in review
and need to be fixed before merge.

## 3. Architecture rules

All contributions must respect the architecture in
`docs/ARCHITECTURE.md` and the plugin boundary in
`docs/CORE-PLUGIN-BOUNDARY.md`. The key rules:

- No classic PHP templating layer. Block themes only.
- No CPTs, taxonomies, shortcodes, settings pages, or REST
  routes in the theme. Those belong in GoDevs Core.
- No third-party dependencies without maintainer sign-off.
- No external requests.
- No `eval()`, no obfuscated code, no remote requests.

PRs that violate the architecture will not be merged.

## 4. Commit message convention

We use Conventional Commits, scoped to the affected area:

```
<type>(<scope>): <subject>

<body>

<footer>
```

### Types
- `feat` — a new feature.
- `fix` — a bug fix.
- `docs` — documentation only.
- `style` — formatting, missing semicolons, etc. (no code
  change).
- `refactor` — code change that neither fixes a bug nor adds a
  feature.
- `test` — adding or correcting tests.
- `chore` — build, tooling, dependencies.
- `revert` — reverting a previous commit.

### Scopes
- `theme` — root theme files (`style.css`, `functions.php`,
  `index.php`, `readme.txt`).
- `theme-json` — `theme.json` changes.
- `templates` — `templates/*.html`.
- `parts` — `parts/*.html`.
- `patterns` — `patterns/*.php`.
- `styles` — `styles/*.json` style variations.
- `assets` — `assets/*` (CSS, JS, fonts, images).
- `docs` — `docs/*.md` documentation.
- `tests` — `tests/*` test scaffolding.
- `meta` — `README.md`, `CHANGELOG.md`, `LICENSE`, `.gitignore`.

### Examples
```
feat(patterns): add team grid pattern

Adds a three-column team grid pattern for displaying team
members. Pattern includes photo, name, position, bio, and
social links.

Closes #42.
```

```
fix(header): correct mobile menu focus trap

The mobile menu overlay was not trapping focus correctly;
Tab could escape the overlay. This patch adds a focus trap
to the navigation.js script.

Fixes #87.
```

## 5. PR description template

```markdown
## What
One paragraph describing the change.

## Why
One paragraph explaining why this change belongs in the theme and not
in a plugin, a future version, or not at all.

## How
Bullet list of the files changed and why.

## Tests
Which `tests/` scripts were run. Which manual checks were performed.

## Risks
Any rules in `docs/AI-DEVELOPMENT-GUIDE.md` this change touches. Any
backward-compatibility considerations.

## WordPress.org
Any compliance surface this change touches (escaping, sanitisation,
external requests, licensing).

## Screenshots
If applicable, before / after screenshots.
```

## 6. Review process

1. A maintainer is assigned within 48 hours of PR open.
2. The maintainer reviews the PR against the code standards,
   architecture rules, and the AI development guide.
3. The maintainer either approves, requests changes, or
   rejects (with reason).
4. The contributor addresses feedback by pushing new commits.
5. Once approved, the maintainer merges the PR.

### What triggers rejection
- Architecture violation (CPT in theme, classic PHP template,
  third-party dependency without sign-off).
- Security issue (unescaped output, remote request, `eval()`).
- WordPress.org compliance issue.
- Accessibility regression.
- Performance regression beyond the budgets in
  `docs/PERFORMANCE.md` §9.
- Style violation that the contributor is unwilling to fix.

### What triggers a request for changes
- Code standards violations.
- Missing tests.
- Missing PR description sections.
- Documentation not updated for a feature change.

## 7. Branching strategy

The `main` branch is the release branch. Each release is tagged
`v<version>` from `main`.

Development happens on feature branches off `main`. PRs target
`main`. There is no `develop` branch.

For the period between releases, `main` is the bleeding edge.
If a release needs a hotfix, the hotfix PR targets `main` and
the release tag is created from `main` after the hotfix merge.

## 8. Release process

Releases are cut by the maintainer:

1. Ensure `main` passes the QA checklist
   (`docs/QA-CHECKLIST.md`).
2. Bump version in `style.css`, `readme.txt`, and
   `functions.php` (`GODEVS_PORTFOLIO_VERSION` constant).
3. Update `CHANGELOG.md` with the new version, date, and
   changes.
4. Tag the release: `git tag -s v<version> -m "Release v<version>"`.
5. Push the tag: `git push --tags`.
6. Build the distribution zip from a clean checkout.
7. Publish the release on GitHub with the changelog entry as
   the release notes.
8. For WordPress.org releases (Phase 17+), upload the
   distribution zip via SVN.

## 9. Code of conduct

Contributors are expected to follow the [WordPress Code of Conduct](https://make.wordpress.org/handbook/community-code-of-conduct/):
be respectful, be inclusive, be patient, be helpful.

Harassment, discrimination, or personal attacks will not be
tolerated. Report any incidents to `conduct@godevs.com`.

## 10. License

By contributing, you agree that your contributions are licensed
under the GPL-2.0-or-later license that covers the theme. See
`LICENSE` for the full text.

## 11. AI contributors

If you are an AI coding agent contributing to the theme, you
MUST read `docs/AI-DEVELOPMENT-GUIDE.md` before opening any
file. The guide is written specifically for AI agents and covers
the rules that AI most commonly violates (hardcoded values in
patterns, classic PHP templating, plugin boundary violations,
AI-generated demo content).

AI contributions that violate the AI development guide will be
rejected. AI contributions that follow the guide are welcome.

## 12. Questions

If you have questions before contributing, open a GitHub
discussion (not an issue) or email `contributing@godevs.com`.

# GoDevs Portfolio — AI Development Guide

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the rules and workflow for AI agents (and human developers) modifying the GoDevs Portfolio theme. It is the authoritative reference for how to make changes safely and predictably.

---

## 1. Core Principle

**Build this theme like a professional WordPress product, not like a generated code demo.**

Priorities, in order:

1. **Architecture** — Follow the documented file structure and patterns.
2. **Design System** — Use the design tokens defined in `theme.json`.
3. **Quality** — Every change is validated before merge.
4. **Reusability** — Patterns are atomic and reusable across demos.
5. **Accessibility** — Every change maintains WCAG 2.1 AA.
6. **Performance** — Every change maintains the performance budget.
7. **Scale** — The theme must scale to 500+ patterns and 100+ demos without rework.

Do **not** prioritize file count. The number of patterns or demos is not a measure of success — the design system's coherence is.

---

## 2. Workflow

Every AI development task must follow this workflow:

```
Inspect
  ↓
Plan
  ↓
Implement
  ↓
Validate
  ↓
Review
  ↓
Report
```

### 2.1 Inspect

Before modifying anything:

1. Read the relevant `docs/` files to understand the system.
2. Read the existing files you will be modifying.
3. Identify the existing architecture and conventions.
4. Identify the design tokens in use.
5. Identify whether the change fits within the documented boundaries.

**Do not** begin implementation until you understand the surrounding context. Skip this step and you will break the design system.

### 2.2 Plan

Before writing any code:

1. Identify the files that will change.
2. Identify the files that will be created.
3. Identify the design tokens that will be used.
4. Identify the validation steps that will run.
5. State the change in one sentence.

If the plan requires:
- Hardcoded colors or spacing — stop and use tokens instead.
- A new custom block — stop and use core blocks instead.
- A new plugin-like feature — stop and document it as plugin territory.
- A new external dependency — stop and reconsider.
- A change to multiple patterns at once — split into multiple tasks.

### 2.3 Implement

When writing code:

1. Follow `WORDPRESS-STANDARDS.md`.
2. Follow `DESIGN-SYSTEM.md` for visual decisions.
3. Follow `ACCESSIBILITY.md` for accessibility requirements.
4. Follow `PERFORMANCE.md` for performance requirements.
5. Follow `SECURITY.md` for security requirements.
6. Make small, logical changes — one pattern, one template, one variation at a time.

### 2.4 Validate

After implementing, run the relevant checks:

```bash
# PHP lint
php -l <file.php>

# JSON validation
python3 -m json.tool theme.json > /dev/null
python3 -m json.tool styles/<variation>.json > /dev/null

# Structure audit
ls -la patterns/<category>/
ls -la templates/
ls -la parts/
```

Run any task-specific validation (see `QA-CHECKLIST.md`).

**Do not claim a test passed unless you actually ran it.**

### 2.5 Review

After validation passes:

1. Re-read your changes.
2. Verify they match the plan.
3. Verify they don't introduce regressions.
4. Verify they don't break other patterns, templates, or variations.
5. Verify the change is minimal — no unrelated edits.

### 2.6 Report

After review, report:

1. What was changed (file list).
2. Why it was changed (one-sentence rationale).
3. What tests were run (and their results).
4. Any unresolved issues.
5. Any follow-up work recommended.

Append to `CHANGELOG.md` under "Added", "Changed", "Fixed", or "Removed".

Append to `worklog.md` (the shared multi-agent work log) with your Task ID, what you did, and what you produced.

---

## 3. Hard Rules (Non-Negotiable)

These rules are non-negotiable. Violating any of them is grounds for rejecting a change.

### 3.1 Inspect Before Modifying

Always read the file you are about to modify. Never assume its contents.

### 3.2 Never Rewrite the Project Unnecessarily

If a single pattern needs a tweak, edit that one file. Do not refactor the architecture. Do not reformat unrelated files.

### 3.3 Preserve Working Code

If existing functionality works, do not break it. Add, do not replace. If replacement is necessary, document why.

### 3.4 Follow Existing Architecture

Files go where the architecture documentation says they go. Naming follows the documented conventions. See `ARCHITECTURE.md`.

### 3.5 Use WordPress Core Functionality First

Before writing any custom code, check if WordPress core can do it:
- Need a list of posts? → `core/query`
- Need a button? → `core/button`
- Need a navigation? → `core/navigation`
- Need a search form? → `core/search`
- Need a social link list? → `core/social-icons`
- Need a header? → `core/template-part` referencing `header.html`

### 3.6 Avoid Unnecessary Dependencies

No external PHP libraries. No external JS libraries. No external font services. No icon libraries.

### 3.7 Never Create Fake Functionality

If a feature is not implemented, do not add a button that looks like it does something. Do not add a "Coming soon" label. Either implement it properly or omit it.

### 3.8 Never Use Emoji as UI Icons

Emoji as UI icons is forbidden. See `DESIGN-SYSTEM.md` Section 11. Use inline SVG, CSS shapes, or text labels.

### 3.9 Avoid AI-Looking Repetitive Designs

Two patterns that look identical except for color are not two patterns. See `PATTERN-SYSTEM.md` Section 5.2 (Visual Distinctness Rule).

### 3.10 Keep Patterns Visually Distinct

Every pattern must differ from every other pattern in its category in at least three of the axes documented in `PATTERN-SYSTEM.md`.

### 3.11 Keep Accessibility in Every Implementation

Every change is accessible. See `ACCESSIBILITY.md`. No exceptions, no deferrals.

### 3.12 Keep Translation Readiness

Every user-facing string uses the `godevs-portfolio` text domain. See `WORDPRESS-STANDARDS.md`.

### 3.13 Follow WordPress Coding Standards

See `WORDPRESS-STANDARDS.md`. Verified via WPCS.

### 3.14 Run Validation After Changes

JSON lint. PHP lint. Structure audit. See `QA-CHECKLIST.md`.

### 3.15 Report Changed Files

Every commit / change report lists the files modified and created.

### 3.16 Report Tests Performed

Every change report lists the tests run and their results.

### 3.17 Report Unresolved Issues

Honest reporting. If something is broken, say so. Do not hide issues.

### 3.18 Make Small, Logical Commits

One concern per commit. Easy to review. Easy to revert.

---

## 4. AI-Specific Anti-Patterns

These are patterns AI agents commonly produce that are forbidden in this project:

### 4.1 Placeholder Text as Content

❌ "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
✅ Real placeholder text that hints at purpose: "I build digital products that ship — fast, accessible, and considered."

### 4.2 Numbered Pattern Names

❌ `hero-01.php`, `hero-02.php`, `hero-03.php`
✅ `hero-split-profile.php`, `hero-minimal-introduction.php`, `hero-cover-image.php`

### 4.3 Excessive Gradients

❌ Background gradients on every section
✅ Solid colors. Accent gradients only when they convey meaning (e.g., hero overlay).

### 4.4 Excessive Rounded Corners

❌ Everything rounded to 24px or more
✅ 8px cards, 4px buttons. Restraint.

### 4.5 Excessive Shadows

❌ Multiple layered shadows with glows
✅ Three shadow levels total (SM, MD, LG). See `DESIGN-SYSTEM.md`.

### 4.6 Excessive Animations

❌ Scroll-triggered reveals, parallax, autoplay carousels
✅ Subtle hover transitions. Reduced motion respected.

### 4.7 Random Icons

❌ 🤖 🚀 ⭐ 💡 🔥 as feature icons
✅ Numerical labels, typography, or inline SVG (when meaningfully needed)

### 4.8 Repetitive Layouts

❌ 10 patterns that are all "three cards in a row" with different colors
✅ Each pattern uses a different layout system — split, stack, asymmetric, full-bleed, grid

### 4.9 Copy-Paste With Color Changes

❌ "Variation 1", "Variation 2", "Variation 3" — identical but for accent color
✅ Each variation changes type pairing, density, radius, and palette. See `STYLE-VARIATIONS.md`.

### 4.10 Generic Landing Page Look

❌ Hero with stacked CTA, three feature cards, pricing table, footer — looks like every SaaS landing
✅ Editorial layouts. Asymmetric compositions. Considered whitespace.

---

## 5. Decision Trees for Common Tasks

### 5.1 "I need to add a new pattern"

1. Read `PATTERN-SYSTEM.md`.
2. Identify the category. Create the file at `patterns/<category>/<name>.php`.
3. Author the metadata header.
4. Compose with core blocks. Reference design tokens.
5. Validate: PHP lint, structure audit.
6. Test in every variation.
7. Append to `CHANGELOG.md`.

### 5.2 "I need to add a new template"

1. Read `TEMPLATE-SYSTEM.md`.
2. Identify the WordPress template hierarchy slot.
3. Compose with core blocks + template parts.
4. Validate: PHP lint (none — templates are HTML), structure audit.
5. Test on a real page that matches the template.
6. Append to `CHANGELOG.md`.

### 5.3 "I need to add a new style variation"

1. Read `STYLE-VARIATIONS.md`.
2. Verify the variation meets the Three-Change Rule.
3. Create the file at `styles/<name>.json`.
4. Validate: JSON lint.
5. Test in Site Editor — verify the variation renders.
6. Test every pattern in the variation.
7. Append to `CHANGELOG.md`.

### 5.4 "I need to modify theme.json"

1. Read `DESIGN-SYSTEM.md`.
2. Identify whether the change is to settings (tokens) or styles (block-level).
3. Make the minimal change.
4. Validate: JSON lint.
5. Test in Site Editor — verify the change is reflected.
6. Test every variation — variations override styles, not settings.
7. Append to `CHANGELOG.md`.

### 5.5 "I need to add CSS"

1. Read `PERFORMANCE.md` Section 3 — confirm the CSS cannot be expressed in `theme.json`.
2. Read `WORDPRESS-STANDARDS.md` Section 3 — confirm the CSS follows standards.
3. Add to `assets/css/theme.css`.
4. Validate: visual inspection, no console errors.
5. Append to `CHANGELOG.md`.

### 5.6 "I need to add JS"

1. Read `PERFORMANCE.md` Section 4 — confirm JS is truly needed.
2. Read `WORDPRESS-STANDARDS.md` Section 2 — confirm JS follows standards.
3. Read `SECURITY.md` Section 8 — confirm JS is safe.
4. Add to `assets/js/theme.js`.
5. Enqueue in `functions.php` if not already.
6. Validate: visual inspection, no console errors, degrades without JS.
7. Append to `CHANGELOG.md`.

### 5.7 "I need to update documentation"

1. Identify which `docs/` file is relevant.
2. Read the existing content.
3. Make the minimal change.
4. Update `CHANGELOG.md` under "Changed".

### 5.8 "I need to fix a bug"

1. Identify the root cause.
2. Make the minimal fix.
3. Validate: confirm the bug is fixed.
4. Validate: confirm no regression.
5. Append to `CHANGELOG.md` under "Fixed".

---

## 6. Communication Conventions

### 6.1 Commits

Commit messages follow [Conventional Commits](https://www.conventionalcommits.org/):

```
<type>(<scope>): <subject>

<body>
```

Types: `feat`, `fix`, `docs`, `style`, `refactor`, `perf`, `test`, `chore`, `build`, `ci`.

Examples:
- `feat(patterns): add Hero — Split Profile pattern`
- `fix(theme-json): correct primary color contrast on dark variation`
- `docs(accessibility): add screen reader testing checklist`
- `perf(assets): defer theme.js loading`

### 6.2 Pull Requests

PR descriptions include:

1. **What changed** — summary
2. **Why** — rationale
3. **How** — implementation notes (if non-trivial)
4. **Validation** — tests run and their results
5. **Screenshots** — for visual changes
6. **Breaking changes** — if any
7. **Migration notes** — if any

### 6.3 Worklog

Multi-agent work log at `/home/z/my-project/worklog.md`. Append a new section per task:

```markdown
---
Task ID: <task id>
Agent: <agent name>
Task: <the task>

Work Log:
- <step 1>
- <step 2>

Stage Summary:
- <key results>
```

Read the existing worklog before starting a task to understand prior work.

---

## 7. Failure Modes (What AI Agents Get Wrong)

| Failure | Why it happens | How to avoid |
|---|---|---|
| Hardcoded colors | "Just use this hex value, it's the same" | Reference tokens — never hex |
| Custom blocks for layout | "It's easier than fighting with `core/columns`" | Use core blocks. Always. |
| Skipping validation | "It worked when I wrote it" | Run the validators. They exist for a reason. |
| Rewriting unrelated files | "While I'm here, let me clean this up" | Make small, focused changes. |
| Numbered pattern names | "I'll fix the names later" | Name patterns descriptively from the start. |
| Adding emoji icons | "It looks fun" | It looks unprofessional. Use SVG or text. |
| Overuse of `!important` | "It just needs to override" | Fix the specificity, not the symptom. |
| Phantom dependencies | "I'll just include jQuery here" | No external dependencies. Period. |
| Lying about validation | "I'm sure it works" | Run the tests. Report the actual results. |
| Inflating file counts | "More patterns = better" | Quality over quantity. Distinct designs only. |

---

## 8. Asking for Help

If you are an AI agent and:
- You cannot meet a rule — document the constraint and stop.
- You are unsure of the architecture — read `ARCHITECTURE.md` again.
- You are unsure of the design system — read `DESIGN-SYSTEM.md` again.
- You are unsure whether something is plugin territory — read `WORDPRESS-STANDARDS.md` Section 10.
- You need to add a new file type — discuss with the maintainer before proceeding.

**Do not** silently work around a constraint. Surface the issue.

---

## 9. Reference Documents

| Document | What it covers |
|---|---|
| `PRD.md` | Product vision, goals, scope |
| `ARCHITECTURE.md` | File structure, principles, anti-patterns |
| `DESIGN-SYSTEM.md` | Colors, typography, spacing, layout, components |
| `PATTERN-SYSTEM.md` | Pattern categories, naming, authoring |
| `TEMPLATE-SYSTEM.md` | Templates, template parts, composition |
| `STYLE-VARIATIONS.md` | Variation system, three-change rule |
| `ACCESSIBILITY.md` | WCAG 2.1 AA requirements |
| `PERFORMANCE.md` | Performance budget, strategies |
| `SECURITY.md` | Escaping, sanitization, attack surface |
| `WORDPRESS-STANDARDS.md` | Coding standards, conventions |
| `CONTRIBUTING.md` | Workflow for contributors |
| `QA-CHECKLIST.md` | Release readiness checklist |
| `RELEASE-ROADMAP.md` | Phase-by-phase plan |
| `CHANGELOG.md` | What changed and when |

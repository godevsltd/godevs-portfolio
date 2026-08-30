# GoDevs Portfolio — Release Roadmap

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document defines the multi-phase development plan for GoDevs Portfolio. Each phase has a clear scope, deliverables, and exit criteria.

The roadmap is **intentionally progressive** — each phase builds on the previous one without skipping foundations. Phase 1 is the foundation; later phases expand the pattern and demo library on top of it.

---

## Phase 1 — Foundation (Current)

**Goal:** Build a production-ready foundation capable of supporting the long-term pattern and demo library.

**Scope:**
- Architecture
- PRD
- Documentation (15 docs)
- Design system
- theme.json
- Templates (12)
- Template parts (6)
- Initial patterns (~10)
- Style variation foundation (4 variations)
- Coding standards
- Accessibility foundation
- Performance foundation
- Security foundation

**Exit Criteria:**
- All `docs/` files complete and project-specific
- `theme.json` valid and ships the full design system
- All 12 templates render without errors
- All 6 template parts render without errors
- All initial patterns insert via the Inserter
- All 4 style variations apply via the Site Editor
- Lighthouse Performance ≥ 90 on a default homepage
- axe DevTools shows no critical issues
- No PHP warnings or errors on theme activation
- No JavaScript console errors
- WordPress Coding Standards verified

**Status:** In progress.

---

## Phase 2 — Core Design Library

**Goal:** Build the full pattern library foundation: 50+ patterns covering all major categories with at least 5 variations per major section.

**Scope:**
- 50+ premium patterns
- Complete header system (5+ header variants)
- Complete footer system (5+ footer variants)
- Core page sections (hero, about, services, portfolio, testimonials, CTA, contact)
- Block styles registered and documented
- 5+ variations per major section (e.g., 5 hero patterns, 5 portfolio patterns)
- Custom page templates (Portfolio Landing, Case Study Page, Services Landing, About)
- Pattern-composed `front-page.html` (replacing `core/post-content` placeholder)
- Additional style variations (target: 8 total)

**Exit Criteria:**
- 50+ patterns all pass accessibility, performance, and visual QA
- Custom page templates registered and tested
- `front-page.html` renders a complete composed homepage
- Style variation count meets Three-Change Rule
- Documentation updated to reflect new patterns

**Estimated effort:** 4–6 weeks.

---

## Phase 3 — Pattern Expansion

**Goal:** Expand the pattern library to 150+ patterns covering all documented categories and major niches.

**Scope:**
- 150+ patterns total
- More portfolio layouts (grid, masonry, case study, gallery, single project)
- More creative layouts (asymmetric hero, full-bleed gallery, magazine)
- More business layouts (services grid, team, pricing, FAQ, stats)
- More blog layouts (featured posts, masonry, magazine, single post with TOC)
- Skill, experience, education, testimonials, team pattern expansion
- 12+ style variations

**Exit Criteria:**
- 150+ patterns all pass accessibility, performance, and visual QA
- Every category has at least 5 distinct patterns
- Style variation count meets Three-Change Rule
- No two patterns in the same category violate the Visual Distinctness Rule

**Estimated effort:** 8–12 weeks.

---

## Phase 4 — Demo Library

**Goal:** Compose 100+ demo websites from the existing pattern library and style variations. No new patterns created in this phase — demos are compositions.

**Scope:**
- 25 demos (developer portfolios, designer portfolios, agency sites)
- 50 demos (add photographer, architect, coach, author)
- 75 demos (add consultant, freelancer, startup, product landing)
- 100+ demos (cover all documented niches)
- Demo composition documentation (how each demo is built)
- Demo XML export files (for one-click demo import)
- Demo preview screenshots

**Exit Criteria:**
- 100+ demos available as XML exports
- Each demo uses only theme-bundled patterns and variations
- Each demo passes accessibility, performance, and responsive QA
- Demo preview screenshots auto-generated
- Documentation explains the demo composition system

**Estimated effort:** 6–10 weeks.

**Note:** Demos are compositions of existing theme resources, not forks. A demo does not duplicate theme source files.

---

## Phase 5 — Advanced Pattern Library

**Goal:** Expand the pattern library to 500+ patterns covering edge cases and niche aesthetics.

**Scope:**
- 300+ patterns
- 400+ patterns
- 500+ patterns
- 15+ style variations
- Pattern translations (community-contributed)
- Pattern preview image pipeline (auto-generated SVG previews)
- Pattern search and discovery improvements

**Exit Criteria:**
- 500+ patterns all pass accessibility, performance, and visual QA
- Pattern library is browsable by category, keyword, and variation
- No two patterns are duplicates (Phase 6 audit enforces this)
- Style variation count meets Three-Change Rule

**Estimated effort:** 12–16 weeks.

---

## Phase 6 — Quality and Optimization

**Goal:** Audit the entire theme and pattern library for quality. Cull duplicates. Fix accessibility and performance regressions.

**Scope:**
- Accessibility audit (full WCAG 2.1 AA verification across all patterns and demos)
- Performance audit (Lighthouse on every demo)
- Responsive testing (every pattern at every breakpoint)
- Browser testing (every pattern in every supported browser)
- WordPress coding standards re-verification
- Theme review preparation (run Theme Check plugin)
- Pattern deduplication (remove patterns that differ only by color)
- Documentation review and update

**Exit Criteria:**
- All audits pass with no critical issues
- All patterns meet Visual Distinctness Rule
- All demos meet performance and accessibility targets
- Documentation reflects current state

**Estimated effort:** 4–6 weeks.

---

## Phase 7 — WordPress.org Submission

**Goal:** Submit the theme to the WordPress.org Theme Directory and respond to reviewer feedback.

**Scope:**
- `readme.txt` final review
- `screenshot.png` final (1200×900, on-brand)
- License verification (every bundled asset GPL-compatible)
- Theme review checklist (manual run-through of Theme Review requirements)
- Final QA pass
- Submission
- Reviewer feedback response
- Review fixes

**Exit Criteria:**
- Theme accepted into WordPress.org Theme Directory
- All reviewer feedback resolved
- Theme publicly available

**Estimated effort:** 2–4 weeks (review time varies).

---

## Cross-Phase Constraints

These constraints apply throughout all phases:

1. **No required plugin.** Every phase's deliverables work with zero plugins.
2. **No hardcoded design tokens.** All colors, typography, spacing via `theme.json`.
3. **Block-first.** No custom blocks. Compositions use core blocks.
4. **Accessibility-first.** WCAG 2.1 AA in every phase.
5. **Performance budget maintained.** Pattern library growth does not affect runtime performance.
6. **Translation-ready.** All user-facing strings use the text domain.
7. **WordPress coding standards.** Verified in every phase.
8. **Documentation kept current.** `docs/` reflects the current state of the codebase.

---

## Phase Exit Gate

A phase exits only when:

1. All deliverables are complete.
2. All `QA-CHECKLIST.md` items pass.
3. `CHANGELOG.md` is updated with the phase's deliverables.
4. `worklog.md` reflects the phase's work.
5. No unresolved critical issues remain.

If any of these are not met, the phase is not complete. Do not advance to the next phase.

---

## Sequencing Rationale

### Why patterns before demos (Phase 3 → Phase 4)

Demos are compositions of patterns. Building demos before the pattern library is complete leads to demo-specific patterns, which break the reusability model. Build the atomic units (patterns) before composing them (demos).

### Why style variations span phases

Variations are added incrementally across phases 1–5 rather than all at once. This allows each variation to be designed with consideration for the patterns it will need to support.

### Why audit (Phase 6) follows library expansion (Phases 3–5)

Auditing a 50-pattern library is feasible. Auditing a 500-pattern library reveals systemic issues that should inform future additions. Audit last, with full context.

### Why WordPress.org submission is last (Phase 7)

Submission is a one-time gate. Submitting too early leads to review rejection and rework. Submit only when the theme is production-ready.

---

## Tracking

Phase progress is tracked via:

1. `CHANGELOG.md` — what was delivered per phase
2. `worklog.md` — daily/weekly multi-agent work log
3. This document — phase definitions and exit criteria
4. The `QA-CHECKLIST.md` — release-readiness verification

Each phase concludes with a "Phase Completion Report" appended to `CHANGELOG.md`.

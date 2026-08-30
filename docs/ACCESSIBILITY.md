# GoDevs Portfolio — Accessibility

**Document version:** 0.1.0
**Phase:** 1 — Foundation

Accessibility is part of the design system, not a separate concern. This document defines the accessibility baseline for the theme: what is required, how it is achieved, and how it is verified.

The target is **WCAG 2.1 Level AA**. Where practical, AAA is also met.

---

## 1. Accessibility Principles

1. **Native HTML over ARIA.** Use semantic elements (`<button>`, `<a>`, `<nav>`, `<main>`, `<header>`, `<footer>`, `<section>`, `<article>`) before reaching for ARIA attributes.
2. **Keyboard-first.** Every interactive element is operable by keyboard alone.
3. **Visible focus.** Every interactive element shows a visible focus state.
4. **Reduced motion respected.** All non-essential animations are disabled when `prefers-reduced-motion: reduce` is set.
5. **Sufficient contrast.** All text meets WCAG 2.1 AA contrast minimums.
6. **Semantic headings.** Heading hierarchy is strict and meaningful.
7. **No information by color alone.** Color is reinforced by text or icon.
8. **No information by motion alone.** Motion reinforces, never conveys.
9. **No interaction dependent only on hover.** All hover-affordances have keyboard equivalents.

---

## 2. Keyboard Navigation

### 2.1 Skip Link

WordPress injects a skip link automatically in block themes. The link targets the first element with `role="main"` or the first `<main>` element. Every template includes a `core/group` with `tagName: "main"` to ensure this works.

### 2.2 Focus Order

- Focus order follows visual order. No CSS positioning that breaks reading order.
- No `tabindex` greater than 0 in template markup.
- No `autofocus` attributes in templates.

### 2.3 Visible Focus

Every interactive element shows a 2px solid accent outline with a 2px offset on `:focus-visible`:

```css
*:focus-visible {
    outline: 2px solid var(--wp--preset--color--accent);
    outline-offset: 2px;
}
```

This is in `assets/css/theme.css` and applies globally. Focus rings are never removed without an equivalent visible alternative.

### 2.4 Keyboard Operability

| Element | Keyboard behavior |
|---|---|
| `core/navigation` | WordPress handles mobile toggle, sub-menu expand/collapse |
| `core/button` | Native `<button>` semantics — Enter/Space activates |
| `core/search` | Native input + button — type, Tab to button, Enter to submit |
| `core/details` | Native disclosure — Enter/Space toggles |
| `core/social-icons` | Each link is a tabbable `<a>` |
| `core/query` pagination | Tab through page links |

---

## 3. Semantic Structure

### 3.1 Heading Hierarchy

- **H1 appears exactly once per page** — either the page title block or the hero heading.
- **H2 introduces a section.** No section without an H2.
- **H3 introduces a subsection within H2.** Never skip from H2 to H4.
- **H4–H6** for fine-grained substructure if needed.
- **Block headings (`core/heading`)** set the level via the `level` attribute. Default is 2.

### 3.2 Landmark Roles

| Element | Role | Where |
|---|---|---|
| `core/group` with `tagName: "header"` | `banner` | Top of every template |
| `core/group` with `tagName: "main"` | `main` | Content of every template |
| `core/group` with `tagName: "footer"` | `contentinfo` | Bottom of every template |
| `core/navigation` | `navigation` | Inside header |
| `core/group` with `tagName: "section"` | `region` (when labeled) | Each major section in a pattern |
| `core/group` with `tagName: "article"` | `article` | Inside query loops |

### 3.3 Section Labels

Sections with `tagName: "section"` should have an `aria-label` or visible heading. WordPress automatically uses the section's heading as the accessible name when present. For purely visual sections, set an explicit `aria-label`:

```html
<!-- wp:group {"tagName":"section","ariaLabel":"Featured projects"} -->
```

---

## 4. Color and Contrast

### 4.1 Contrast Targets

| Element | Minimum | Target |
|---|---|---|
| Body text on background | 4.5:1 | 7:1 (AAA) |
| Large text (≥ 24px or ≥ 19px bold) on background | 3:1 | 4.5:1 |
| Button text on button background | 4.5:1 | 7:1 |
| Link text on background | 4.5:1 | 7:1 |
| Link text on hover (if color changes) | 4.5:1 | — |
| Border on background | 3:1 | — |
| Focus ring on background | 3:1 | — |
| Icon (meaningful) on background | 3:1 | 4.5:1 |

### 4.2 Default Palette Verification

| Combination | Foreground | Background | Ratio | Pass? |
|---|---|---|---|---|
| Body on base | `#0A0A0A` | `#FAFAF7` | 19.4:1 | Yes (AAA) |
| Muted on base | `#6B7280` | `#FAFAF7` | 4.6:1 | Yes (AA) |
| Body on surface | `#0A0A0A` | `#FFFFFF` | 21:1 | Yes (AAA) |
| Button text on primary | `#FFFFFF` | `#0A0A0A` | 19.4:1 | Yes (AAA) |
| Link on base | `#2563EB` | `#FAFAF7` | 6.5:1 | Yes (AA) |
| Border on base | `#E5E5E0` | `#FAFAF7` | 1.2:1 | Border-only — fine for visual |

### 4.3 Color Not Used Alone

Status indicators (success/warning/error) use both color and a text label. No "green dot means success" without a text label.

---

## 5. Images and Media

### 5.1 Alt Text

- Every meaningful image has descriptive `alt` text explaining what the image conveys.
- Decorative images (purely visual, no information) have empty `alt=""` — not omitted.
- Patterns ship with placeholder `alt` text that hints at purpose: `alt="Portrait of the author"` rather than `alt="image"`.

### 5.2 Featured Images

`core/post-featured-image` automatically uses the post's featured image alt text if set, falling back to empty alt if not. Pattern authors do not need to handle this — it is automatic.

### 5.3 Icons

Icons (where used) are either:
- Inline SVG with `<title>` and `role="img"` — for meaningful icons
- Inline SVG with `aria-hidden="true"` — for decorative icons (paired with a text label)
- `core/social-icons` block — handles accessibility internally

### 5.4 Captions

`core/image` supports `caption`. Captions should be used when the image needs explanation beyond what alt text provides. Captions are visible; alt text is not.

---

## 6. Forms

Phase 1 ships no forms (forms are plugin territory). When forms are integrated via a companion plugin in the future:

- Every input has a `<label>` (or `aria-label` if label is visually hidden)
- Error messages use `aria-describedby` linking to the input
- Required fields use `required` attribute AND a visible "(required)" indicator
- Submit buttons have descriptive text — never "Submit" alone, prefer "Send message" or "Subscribe"
- Form validation messages do not rely on color alone — include an icon and text

---

## 7. Motion and Animation

### 7.1 Reduced Motion

All transitions longer than 1ms are disabled when `prefers-reduced-motion: reduce` is active:

```css
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}
```

### 7.2 No Auto-Animating Content

- No carousels that auto-advance
- No video that autoplay
- No scroll-triggered animations (in Phase 1; if added later, must respect reduced motion)
- No parallax effects

### 7.3 Hover Not Required

No interaction depends solely on hover. Hover states enhance but do not convey critical information. Touch devices must have full functionality.

---

## 8. Screen Reader Support

### 8.1 Visually Hidden Text

When a link or button needs additional context for screen readers (e.g., "Read more" needs to say "Read more about [post title]"):

```html
<a href="...">
    Read more
    <span class="screen-reader-text">about "Post Title"</span>
</a>
```

The `screen-reader-text` class is registered by WordPress core. Do not redefine.

### 8.2 ARIA Usage

ARIA is used **only** when native HTML cannot express the semantics. Examples:

- `aria-label` on a `core/group` with `tagName: "section"` when no visible heading exists
- `aria-current="page"` on the current nav item (handled by `core/navigation`)
- `aria-expanded` on disclosure toggles (handled by `core/details`)

Forbidden ARIA usage:
- `role="button"` on an `<a>` (use a real `<button>` or `core/button`)
- `role="presentation"` to hide content (use `screen-reader-text` or remove the content)
- `aria-hidden="true"` on focusable elements

### 8.3 Live Regions

Phase 1 has no live regions (search results, AJAX updates). If added later, live regions must use `aria-live="polite"` for non-critical updates and `aria-live="assertive"` for critical ones.

---

## 9. Navigation Accessibility

### 9.1 Mobile Menu

`core/navigation` with `overlayMenu: "mobile"` provides an accessible mobile menu:
- Toggle button is a real `<button>` (keyboard-operable)
- Menu opens on Enter/Space
- Focus moves into the menu when opened
- Escape closes the menu and returns focus to the toggle

### 9.2 Sub-Menus

Sub-menus open on hover (mouse) and on Enter (keyboard). Escape closes the sub-menu and returns focus to the parent item.

### 9.3 Current Page Indication

`core/navigation` automatically adds `aria-current="page"` to the link matching the current page. This is exposed to assistive technology and styled visually.

---

## 10. 404 and Error Pages

`404.html` must:
- Use an H1 with clear "Page not found" text
- Provide guidance text explaining the situation
- Provide a search form (`core/search`)
- Provide navigation to key pages (`core/navigation`)

---

## 11. Readability

### 11.1 Line Length

Article body width is `640px` (content width). This yields approximately 65–75 characters per line — the readability sweet spot.

### 11.2 Line Height

- Body: 1.6
- Headings: 1.2 (large headings need tighter line height)
- Display: 1.1

### 11.3 Language

- All user-facing strings use `__()` / `_x()` / `_n()` with the `godevs-portfolio` text domain
- `language_attributes()` (handled by WordPress core) outputs the correct `lang` attribute
- Patterns ship placeholder text in English — translation-ready

---

## 12. Accessibility Audit Checklist

Before marking any pattern, template, or variation complete:

### Structure
- [ ] H1 appears exactly once
- [ ] Heading hierarchy is strict (no H2 → H4 jumps)
- [ ] Landmarks present (`<header>`, `<main>`, `<footer>`, `<nav>`)
- [ ] Sections with no visible heading have `aria-label`

### Keyboard
- [ ] All interactive elements reachable by Tab
- [ ] Focus order matches visual order
- [ ] Focus state is visible on every interactive element
- [ ] No keyboard traps

### Color and Contrast
- [ ] Body text contrast ≥ 4.5:1
- [ ] Large text contrast ≥ 3:1
- [ ] Button text contrast ≥ 4.5:1
- [ ] Border contrast ≥ 3:1 (where borders convey meaning)
- [ ] No information by color alone

### Images
- [ ] All meaningful images have descriptive alt
- [ ] All decorative images have empty alt
- [ ] Icons have either `<title>` and `role="img"` or `aria-hidden="true"`

### Motion
- [ ] No autoplaying content
- [ ] `prefers-reduced-motion` respected
- [ ] No interaction depends solely on hover

### Forms (if any)
- [ ] Every input has a label
- [ ] Required fields marked
- [ ] Error messages link to inputs via `aria-describedby`

### Screen Reader
- [ ] No ARIA on native semantics (`role="button"` on `<button>`)
- [ ] `aria-hidden="true"` not on focusable elements
- [ ] Visually hidden text uses `screen-reader-text` class

### Reduced Motion
- [ ] All animations disabled under `prefers-reduced-motion: reduce`
- [ ] No autoplay
- [ ] No scroll-triggered reveals

---

## 13. Tools for Verification

### 13.1 Manual Testing

- Tab through every page using only the keyboard
- Zoom to 200% in browser — verify no horizontal scroll, no broken layouts
- Use a screen reader (NVDA on Windows, VoiceOver on macOS/iOS) on a sample page
- Test on a touch device — verify no hover-only interactions

### 13.2 Automated Tools

- **axe DevTools** — browser extension that audits a page for WCAG violations
- **WAVE** — browser extension for visual accessibility audit
- **Lighthouse Accessibility audit** — Chrome DevTools
- **Pa11y** — CLI accessibility tester
- **WebAIM Contrast Checker** — for verifying color contrast

### 13.3 Recommended Workflow

1. Develop pattern/template/variation
2. Run axe DevTools on a page rendering it
3. Manually tab through the page
4. Verify contrast with WebAIM Contrast Checker
5. Test on mobile + touch
6. Test with a screen reader
7. Resolve any findings before merge

---

## 14. Phase 2 Accessibility Plans

- Full audit of every Phase 1 pattern with axe
- Screen reader testing pass on every template
- Keyboard-only full site navigation test
- Cognitive accessibility review (plain language, predictable navigation)
- RTL (right-to-left) language support review

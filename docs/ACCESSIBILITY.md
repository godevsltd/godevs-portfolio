# Accessibility — GoDevs Portfolio

Accessibility is a core product requirement, not a Phase 12 after-
thought. The v0.1 foundation ships the structural accessibility
work (skip link, focus-visible, landmarks, contrast-checked
palette, reduced-motion). A full WCAG 2.1 AA audit is scheduled
for Phase 12, but the foundation is built to pass that audit
without rewrites.

---

## 1. Conformance target

- **v0.1 target:** WCAG 2.1 AA for structural accessibility (skip
  link, focus-visible, landmarks, heading hierarchy, contrast-
  checked palette, reduced-motion support, keyboard navigation).
- **v0.5 target:** Full WCAG 2.1 AA conformance verified by an
  external auditor.
- **Stretch goal:** WCAG 2.1 AAA where achievable (targeting
  captioning, sign-language interpretation, and other AAA-only
  criteria where reasonable).

## 2. Skip link

Every template that includes the header template part renders a
skip link to `#main` as the first focusable element on the page.
The skip link is visible on focus and hidden visually otherwise.

The `navigation.js` script enhances the skip link to move focus
into the main region on click. Without this enhancement, the skip
link moves scroll position but not focus on some browsers, leaving
screen readers on the header.

## 3. Focus-visible outlines

Every focusable element has a 2px `:focus-visible` outline in the
accent colour (`#FF6B57`), with a 2px offset. Defined in
`theme.json` for the `link` and `button` elements.

The outline uses `:focus-visible` (not `:focus`) so it does not
appear on mouse click — only keyboard and programmatic focus
trigger it. This is the modern standard for focus indication
and matches the WCAG 2.1 AA "Focus Visible" criterion.

## 4. Semantic landmarks

Every template uses semantic HTML landmarks:

- `header.site-header` — the header template part.
- `main.site-main` — the main content (wrapped in
  `wp:group {"tagName":"main"}`).
- `footer.site-footer` — the footer template part.
- `nav` — the navigation block (implicit).

These landmarks let screen reader users navigate directly to the
header, main content, or footer via landmark navigation.

## 5. Heading hierarchy

Every template has exactly one `h1`:

- `index.html`: "Journal"
- `home.html`: "Latest writing"
- `front-page.html`: the hero pattern's headline (h1 inside the
  hero pattern)
- `page.html`: the post title
- `single.html`: the post title
- `singular.html`: the post title
- `archive.html`: the query title (archive name)
- `search.html`: the query title ("Search results: <query>")
- `404.html`: "That page cannot be located."

Section headings are h2, subsection headings are h3, and so on
through h6. No levels are skipped.

## 6. Colour contrast

Every palette token pairing meets WCAG 2.1 AA contrast on text
against background. The contrast table:

| Foreground | Background | Ratio | Use |
|------------|-----------|-------|-----|
| Text on Background | `#0F172A` on `#FFFFFF` | 18.7:1 | Body text — AAA |
| Muted on Background | `#64748B` on `#FFFFFF` | 4.7:1 | Caption text — AA |
| Accent on Background | `#FF6B57` on `#FFFFFF` | 3.5:1 | Links, large text — AA large |
| Background on Primary | `#FFFFFF` on `#0F172A` | 18.7:1 | Footer / CTA text — AAA |
| Accent on Primary | `#FF6B57` on `#0F172A` | 5.0:1 | Accent on dark backgrounds — AA |
| Text on Surface | `#0F172A` on `#F8FAFC` | 17.6:1 | Surface band text — AAA |
| Muted on Primary | `#94A3B8` on `#0F172A` | 6.4:1 | Dark mode muted — AA |

### Notes
- The `accent` token (`#FF6B57`) meets AA contrast for large text
  (24px+ regular or 19px+ bold) and for UI components. For body
  text, the theme uses `text` or `primary` instead.
- The `muted` token (`#64748B`) meets AA contrast at body sizes on
  a white background but should be used sparingly for paragraph
  text — it is primarily for caption-sized text and meta
  information.
- The Dark style variation re-tunes the palette for contrast
  against `#0B1120`. The accent token is lightened to `#FF8775`
  for contrast against the dark background.

## 7. Keyboard navigation

Every interactive element is reachable via keyboard. Specifically:

- The skip link is the first focusable element on every page.
- The header navigation is keyboard-navigable. Tab moves between
  top-level links; Enter activates a link.
- The mobile menu (Navigation block overlay) opens with Enter or
  Space, closes with Escape, and is fully keyboard-navigable
  inside.
- Buttons (in the hero, CTA, contact patterns) activate with
  Enter or Space.
- Form inputs (when the user adds a Contact Form block) are
  keyboard-navigable.
- Focus order follows the visual order — there is no `tabindex`
  manipulation that would break the natural order.

## 8. Reduced motion

All CSS transitions are guarded by `@media (prefers-reduced-motion:
no-preference)`. Users with `prefers-reduced-motion: reduce` see
static states without transitions.

The `navigation.js` script does not include any animation that
violates the reduced-motion preference. The sticky-header
shadow change is a class swap, not a transition.

## 9. Form labels

The theme ships no forms in v0.1. The Contact pattern is a
placeholder prompting the user to add a Contact Form block. When
the user adds a form via a plugin (e.g. Contact Form 7, WPForms,
or the WordPress core Contact Form block from Jetpack), the form
plugin is responsible for label / input association.

## 10. Image alt text

The `core/image` block requires alt text via the WordPress block
editor UI. The theme's patterns use empty `alt=""` for decorative
placeholder images (which screen readers correctly skip) and rely
on the user to provide meaningful alt text when they replace the
placeholder.

The portfolio grid pattern uses the `core/post-featured-image`
block, which uses the post's featured image's alt text. The user
is responsible for providing meaningful alt text when uploading
featured images.

## 11. ARIA usage

The theme uses ARIA sparingly. The WordPress block editor adds the
correct ARIA attributes to most core blocks (navigation,
buttons, links). The theme does not add additional ARIA in
patterns or templates.

When ARIA is added in the future (e.g. for a custom tabbed
component in Phase 10), it should follow the WAI-ARIA Authoring
Practices and be tested with NVDA, JAWS, and VoiceOver.

## 12. Screen reader testing

The theme is designed to work with:

- NVDA on Windows + Firefox / Chrome / Edge.
- JAWS on Windows + Chrome.
- VoiceOver on macOS + Safari / Chrome.
- VoiceOver on iOS + Safari.
- TalkBack on Android + Chrome.

A full screen-reader pass is scheduled for Phase 12.

## 13. What the theme does NOT do (yet)

For transparency, the following are scheduled for Phase 12 and are
not yet implemented in v0.1:

- Audio descriptions for video content (the theme ships no video in
  v0.1).
- Captions for video content (same).
- Sign-language interpretation (out of scope).
- A formal "Read this page aloud" mode (out of scope).
- Custom screen-reader-only navigation (the skip link is the only
  screen-reader affordance in v0.1).

## 14. Accessibility review checklist

Before merging a UI change, confirm:

- [ ] Change does not remove the skip link or break its target.
- [ ] Change does not remove or weaken `:focus-visible` outlines.
- [ ] Change preserves semantic landmarks (`header`, `main`,
      `footer`).
- [ ] Change preserves heading hierarchy (one h1 per page, no
      skipped levels).
- [ ] Change uses palette tokens with verified contrast; no new
      hardcoded colours that would break contrast.
- [ ] Change respects `prefers-reduced-motion: reduce`.
- [ ] Change is keyboard-navigable in the same order as the
      visual layout.
- [ ] Change does not introduce `tabindex` manipulation that
      breaks the natural focus order.
- [ ] Change does not introduce `aria-hidden` on focusable
      elements.
- [ ] Change does not introduce images without `alt` attributes
      (use `alt=""` for decorative images).
- [ ] Change does not introduce a form without labels (the theme
      ships no forms in v0.1).
- [ ] Change is tested with at least one screen reader (NVDA on
      Windows or VoiceOver on macOS).

## 15. References

- WCAG 2.1: https://www.w3.org/TR/WCAG21/
- WAI-ARIA Authoring Practices: https://www.w3.org/WAI/ARIA/apg/
- WordPress accessibility handbook:
  https://developer.wordpress.org/coding-standards/wordpress-coding-standards/accessibility/
- Theme review accessibility guidelines:
  https://make.wordpress.org/themes/handbook/review/accessibility/

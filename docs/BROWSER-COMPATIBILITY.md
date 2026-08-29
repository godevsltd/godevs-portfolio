# Browser Compatibility — GoDevs Portfolio

The theme targets modern browsers. The minimum supported versions
are aligned with the WordPress 6.5+ browser matrix. This document
lists the supported browsers, the features the theme uses, and
the fallback behaviour for older browsers.

---

## 1. Supported browsers

| Browser | Minimum version | Test matrix |
|---------|-----------------|-------------|
| Chrome | Latest + 1 version back | Windows, macOS, Linux, Android |
| Firefox | Latest + 1 version back | Windows, macOS, Linux |
| Safari | Latest + 1 version back | macOS, iOS |
| Edge | Latest + 1 version back | Windows |

The theme does NOT support:

- Internet Explorer (any version). WordPress 6.5+ does not
  support IE.
- Chrome below version 88 (released January 2021).
- Firefox below version 87 (released March 2021).
- Safari below version 14 (released September 2020).
- Edge below version 88 (released January 2021).

## 2. CSS features used

The theme uses the following CSS features. All are supported in
the supported browsers:

- CSS custom properties (`var(--wp--preset--color--primary)`).
  Supported since Chrome 49, Firefox 31, Safari 9.1, Edge 16.
- `clamp()` for fluid typography. Supported since Chrome 79,
  Firefox 75, Safari 13.1, Edge 79.
- `aspect-ratio`. Supported since Chrome 88, Firefox 89, Safari
  15, Edge 88.
- `object-fit`. Supported since Chrome 32, Firefox 36, Safari
  10, Edge 16.
- `:focus-visible`. Supported since Chrome 86, Firefox 88,
  Safari 15.4, Edge 86.
- `position: sticky`. Supported since Chrome 56, Firefox 32,
  Safari 13, Edge 16.
- Flexbox (`display: flex`). Supported since Chrome 29, Firefox
  28, Safari 9, Edge 16.
- CSS Grid (`display: grid`). Supported since Chrome 57,
  Firefox 52, Safari 10.1, Edge 16.
- `prefers-reduced-motion` media query. Supported since Chrome
  74, Firefox 63, Safari 10.1, Edge 79.
- `:has()` selector. Not used in v0.1; planned for v0.5+
  patterns (when supported by all target browsers).

## 3. JavaScript features used

The theme's `navigation.js` uses the following JS features. All
are supported in the supported browsers:

- `const` and `let`. ES2015. Supported since Chrome 49, Firefox
  44, Safari 10, Edge 14.
- Arrow functions. ES2015. Same.
- `document.addEventListener('DOMContentLoaded', ...)`. DOM
  Level 2. Supported since the dinosaurs.
- `document.querySelector` and `document.querySelectorAll`. DOM
  Level 4. Supported since Chrome 1, Firefox 3.5, Safari 3.1,
  Edge 12.
- `Element.classList`. DOM Level 4. Supported since Chrome 8,
  Firefox 3.6, Safari 5.1, Edge 12.
- `Element.focus({ preventScroll: true })`. ES2018 (DOM
  extension). Supported since Chrome 64, Firefox 65, Safari
  14, Edge 79.
- `Element.scrollIntoView()`. DOM Level 4. Supported since
  Chrome 61, Firefox 36, Safari 5.1, Edge 79.

The theme does NOT use:

- `Promise.allSettled` (ES2020). Not supported in Safari 13.
- `Array.prototype.at()` (ES2022). Not supported in Safari
  14.
- Top-level await (ES2022). Not supported in Safari 14.
- `:has` selector (CSS). Not supported in Firefox 100-120.

## 4. WordPress core features used

The theme relies on WordPress core's bundled normalisations:

- The block editor (`gutenberg`) ships its own CSS and JS for
  the editor; the theme does not need to provide editor-
  specific polyfills.
- The Site Editor and the block editor are supported in the
  same browser matrix as the theme.
- WordPress core's `wp-includes/css/dist/block-library/style.css`
  provides default block styles. The theme overrides via
  `theme.json`.

## 5. Fallback behaviour

### Older browsers (not supported)

The theme does not provide fallbacks for browsers outside the
supported matrix. If a user opens the site in IE 11, the site
will render with degraded styling (no CSS custom properties, no
fluid typography, no grid layouts). The site remains usable
(content is readable, links work), but the visual design is
degraded.

This matches WordPress core's behaviour — WordPress 6.5+ does
  not support IE.

### Reduced-motion browsers

Browsers that do not support `prefers-reduced-motion` (very
old browsers) will see the theme with all transitions enabled.
The transitions are short (120-200ms) and not essential to
usability.

### JavaScript-disabled browsers

The theme's `navigation.js` is the only front-end JS. If JS is
disabled:

- The sticky header still works (CSS `position: sticky`).
- The mobile menu still works (the Navigation block has its
  own JS via WordPress core; if JS is disabled, the mobile
  menu shows as a non-overlay expanded menu).
- The skip link still works (the user clicks, the browser
  navigates to `#main`, the focus moves via the native anchor
  behaviour). The `navigation.js` enhancement to move focus
  programmatically does not run, but the skip link still
  works via the native browser behaviour.

### Print browsers

The theme ships `print.css` for print styles. Print styles are
applied via the `media="print"` stylesheet, which all major
browsers support.

## 6. Cross-browser testing matrix

The theme is tested in the following combinations before each
release:

| Browser | OS | Test environment |
|---------|-----|------------------|
| Chrome (latest) | Windows | BrowserStack or local |
| Chrome (latest) | macOS | BrowserStack or local |
| Chrome (latest) | Linux | Local |
| Chrome (latest - 1) | macOS | BrowserStack |
| Firefox (latest) | Windows | BrowserStack or local |
| Firefox (latest) | macOS | BrowserStack or local |
| Firefox (latest) | Linux | Local |
| Firefox (latest - 1) | macOS | BrowserStack |
| Safari (latest) | macOS | Local |
| Safari (latest - 1) | macOS | BrowserStack |
| Safari iOS (latest) | iPhone | Local or BrowserStack |
| Edge (latest) | Windows | BrowserStack or local |
| Edge (latest - 1) | Windows | BrowserStack |
| Chrome Android (latest) | Pixel | Local or BrowserStack |

A full cross-browser pass is scheduled for Phase 14 (QA).

## 7. Responsive test matrix

The theme is tested at the following widths on each browser:

- 1920 (large desktop)
- 1440 (typical desktop)
- 1280 (small laptop)
- 1024 (iPad landscape)
- 768 (iPad portrait)
- 480 (large phone)
- 375 (typical phone)

A full responsive pass is scheduled for Phase 14 (QA).

## 8. Mobile-specific behaviour

### Touch targets
All interactive elements have at least a 44×44px touch target
on mobile. Buttons use `0.75rem 1.25rem` padding, which gives a
~44px height with the default line-height.

### Hover states
Hover states (`:hover`) are not triggered on touch devices. The
theme's hover styles are progressive enhancement — touch users
see the default state, which is also accessible.

### Active states
The `:active` pseudo-class is used for touch-active states on
buttons and links. This provides visual feedback when the user
taps a button.

### Tap delay
The theme does not introduce any tap delay (the old 300ms
mobile tap delay). Modern browsers removed this delay for
sites with the `viewport` meta tag, which WordPress core adds
automatically.

## 9. Print compatibility

The theme's `print.css` is tested in:

- Chrome's "Print to PDF".
- Firefox's "Print Preview".
- Safari's "Print" (the strictest of the three).
- Edge's "Print" (Chromium-based; same as Chrome).

Print styles strip chrome (header, footer, navigation),
reset colours to black-on-white, and add `page-break-inside:
avoid` for images, figures, and tables.

## 10. References

- WordPress browser support matrix:
  https://make.wordpress.org/core/handbook/browsers/
- caniuse.com for feature support checks:
  https://caniuse.com/
- MDN Web Docs for CSS / JS feature support:
  https://developer.mozilla.org/

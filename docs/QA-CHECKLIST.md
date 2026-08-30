# GoDevs Portfolio — QA Checklist

**Document version:** 0.1.0
**Phase:** 1 — Foundation

This document is the release-readiness checklist. Before marking any phase complete, run every applicable check and record the result.

The rule: **do not claim a test passed unless you actually ran it.**

---

## 1. Structure Audit

### 1.1 Required Files Exist

```
[ ] style.css                    — WordPress theme header
[ ] theme.json                   — Design tokens
[ ] functions.php                — Theme bootstrap
[ ] readme.txt                   — WordPress.org readme
[ ] screenshot.png               — 1200×900 (Phase 1: placeholder)
[ ] LICENSE                      — GPL v2 or later
[ ] .editorconfig                — Editor config
```

### 1.2 Required Directories Exist

```
[ ] assets/css/
[ ] assets/js/
[ ] assets/fonts/
[ ] assets/images/
[ ] docs/
[ ] inc/
[ ] patterns/
[ ] parts/
[ ] styles/
[ ] templates/
```

### 1.3 Pattern Subdirectories Exist

```
[ ] patterns/hero/
[ ] patterns/about/
[ ] patterns/services/
[ ] patterns/portfolio/
[ ] patterns/projects/
[ ] patterns/skills/
[ ] patterns/experience/
[ ] patterns/education/
[ ] patterns/testimonials/
[ ] patterns/team/
[ ] patterns/pricing/
[ ] patterns/blog/
[ ] patterns/case-study/
[ ] patterns/cta/
[ ] patterns/contact/
[ ] patterns/header/
[ ] patterns/footer/
[ ] patterns/pages/
```

### 1.4 Templates Present

```
[ ] templates/index.html
[ ] templates/home.html
[ ] templates/front-page.html
[ ] templates/page.html
[ ] templates/single.html
[ ] templates/archive.html
[ ] templates/category.html
[ ] templates/tag.html
[ ] templates/author.html
[ ] templates/date.html
[ ] templates/search.html
[ ] templates/404.html
```

### 1.5 Template Parts Present

```
[ ] parts/header.html
[ ] parts/header-minimal.html
[ ] parts/header-transparent.html
[ ] parts/footer.html
[ ] parts/footer-minimal.html
[ ] parts/footer-cta.html
```

### 1.6 Style Variations Present

```
[ ] styles/minimal.json
[ ] styles/dark.json
[ ] styles/editorial.json
```

---

## 2. JSON Validation

Run for every JSON file:

```bash
python3 -m json.tool <file> > /dev/null && echo "OK: <file>"
```

Files to check:

```
[ ] theme.json
[ ] styles/minimal.json
[ ] styles/dark.json
[ ] styles/editorial.json
```

---

## 3. PHP Validation

Run for every PHP file:

```bash
php -l <file>
```

Files to check:

```
[ ] functions.php
[ ] inc/block-patterns.php
[ ] inc/block-styles.php
[ ] inc/theme-setup.php
[ ] patterns/hero/split-profile.php
[ ] patterns/about/image-and-stats.php
[ ] patterns/services/feature-cards.php
[ ] patterns/portfolio/three-column-grid.php
[ ] patterns/skills/labeled-list.php
[ ] patterns/experience/vertical-timeline.php
[ ] patterns/testimonials/single-quote.php
[ ] patterns/cta/split-cta.php
[ ] patterns/contact/contact-cta.php
[ ] patterns/blog/featured-posts.php
```

---

## 4. Functionality Tests

### 4.1 Theme Activation

```
[ ] Theme activates without PHP warnings
[ ] Theme activates without fatal errors
[ ] No "required plugin" notice shown
[ ] Site Editor opens without errors
[ ] Global Styles panel shows the theme's palette
[ ] Style variations appear under Styles → Browse styles
```

### 4.2 Template Rendering

For each route, verify the page renders without errors:

```
[ ] Homepage (latest posts) → home.html / index.html
[ ] Homepage (static front page) → front-page.html
[ ] Static page → page.html
[ ] Single post → single.html
[ ] Archive → archive.html
[ ] Category archive → category.html
[ ] Tag archive → tag.html
[ ] Author archive → author.html
[ ] Date archive → date.html
[ ] Search results → search.html
[ ] 404 (visit non-existent URL) → 404.html
```

### 4.3 Header and Footer

```
[ ] Default header renders logo + nav + CTA
[ ] Default footer renders columns + copyright
[ ] Header-minimal renders logo + nav only
[ ] Footer-minimal renders logo + copyright only
[ ] Header-transparent renders correctly when used over a hero
[ ] Footer-cta renders CTA band + footer content
```

### 4.4 Navigation

```
[ ] Desktop navigation shows menu items
[ ] Mobile navigation toggles open/close
[ ] Mobile toggle is keyboard-operable (Enter/Space)
[ ] Escape closes mobile menu
[ ] Current page indicator (aria-current="page") works
[ ] Sub-menus expand on hover (desktop)
[ ] Sub-menus expand on Enter (keyboard)
```

### 4.5 Query Loop

```
[ ] Default homepage query renders latest 10 posts
[ ] Each post in loop shows: featured image, title, excerpt, date, read more
[ ] Empty state ("noResults") shows when query returns 0 posts
[ ] Pagination works (when posts > perPage)
```

### 4.6 Patterns

For each Phase 1 pattern:

```
[ ] Pattern appears in Inserter under correct category
[ ] Pattern inserts without errors
[ ] Pattern renders correctly in editor
[ ] Pattern renders correctly on front-end
[ ] Pattern works in every style variation
[ ] Pattern is responsive (360px, 768px, 1280px)
```

---

## 5. Design QA

### 5.1 Typography

```
[ ] Display size is fluid and clamps between min/max
[ ] H1 appears exactly once per page
[ ] H2 introduces each section
[ ] H3 nests under H2 (no H2 → H4 jumps)
[ ] Body text is readable (1.125rem, 1.6 line-height)
[ ] Caption text is uppercase + letter-spaced
[ ] No hardcoded font sizes in patterns
```

### 5.2 Spacing

```
[ ] Section padding is XL on mobile, 2XL on desktop
[ ] Section internal gaps are MD
[ ] Card internal padding is LG
[ ] No hardcoded rem/px values in patterns
[ ] Spacing scale used consistently
```

### 5.3 Colors

```
[ ] No hardcoded hex values in patterns
[ ] All colors reference palette presets
[ ] Accent used sparingly (links, primary buttons, emphasis)
[ ] Background variations are not used as color swaps
[ ] Color combinations meet WCAG 2.1 AA contrast
```

### 5.4 Alignment

```
[ ] Headings align consistently (left or center, not mixed)
[ ] Button groups align consistently
[ ] Image alignment follows pattern design intent
[ ] No unintentional ragged edges
```

### 5.5 Consistency

```
[ ] Same pattern looks the same across pages
[ ] Same block style applies consistently
[ ] Card system used uniformly
[ ] Button system used uniformly
```

---

## 6. Accessibility QA

### 6.1 Keyboard Navigation

```
[ ] Skip link visible on Tab focus
[ ] Skip link targets main content
[ ] All interactive elements reachable via Tab
[ ] Focus order matches visual order
[ ] Visible focus state on every interactive element
[ ] No keyboard traps
[ ] Escape closes mobile menu, sub-menus, modals
```

### 6.2 Focus

```
[ ] Focus outline is 2px solid accent
[ ] Focus offset is 2px
[ ] Focus visible on buttons, links, inputs, mobile menu toggle
[ ] :focus-visible (not :focus) used to avoid mouse-focus rings
```

### 6.3 Contrast

Verify every text/background combination:

```
[ ] Body text on background: ≥ 4.5:1
[ ] Muted text on background: ≥ 4.5:1
[ ] Link text on background: ≥ 4.5:1
[ ] Button text on button background: ≥ 4.5:1
[ ] Large text (≥ 24px) on background: ≥ 3:1
[ ] Border on background: ≥ 3:1 (where borders convey meaning)
[ ] Focus ring on background: ≥ 3:1
```

Tools: WebAIM Contrast Checker, axe DevTools, Lighthouse Accessibility audit.

### 6.4 Headings

```
[ ] H1 appears exactly once per page
[ ] Heading hierarchy is strict (no skips)
[ ] Headings are descriptive (not "Click here" or "Read more")
```

### 6.5 Navigation

```
[ ] Navigation has accessible label (aria-label or visible heading)
[ ] Current page link has aria-current="page"
[ ] Mobile menu toggle has aria-expanded reflecting state
[ ] Sub-menus have appropriate aria attributes
```

### 6.6 Forms (if any in Phase 1 — none expected)

```
[ ] Every input has a label (or aria-label)
[ ] Required fields marked with required attribute + visible indicator
[ ] Error messages link to inputs via aria-describedby
[ ] Submit buttons have descriptive text
```

### 6.7 Images

```
[ ] Meaningful images have descriptive alt text
[ ] Decorative images have empty alt=""
[ ] Featured images use the post's featured image alt
[ ] No "image.jpg" or "photo" alt text — descriptive only
```

### 6.8 Motion

```
[ ] prefers-reduced-motion: reduce disables non-essential transitions
[ ] No autoplay (video, carousel)
[ ] No scroll-triggered animations
[ ] No parallax
```

### 6.9 Screen Reader

```
[ ] Run NVDA / VoiceOver on a sample page
[ ] Page reads in logical order
[ ] Headings announce correctly
[ ] Links announce meaningfully
[ ] Images announce alt text
[ ] No aria-hidden on focusable elements
```

---

## 7. Performance QA

### 7.1 Asset Sizes

```
[ ] style.css < 50 KB uncompressed
[ ] assets/css/theme.css < 20 KB uncompressed
[ ] assets/js/theme.js < 5 KB (Phase 1: empty file)
[ ] theme.json < 30 KB
[ ] screenshot.png < 300 KB
[ ] Total theme size < 2 MB (excluding docs)
```

### 7.2 Runtime Metrics

Run Lighthouse on:

```
[ ] Homepage (latest posts) — Performance ≥ 90
[ ] Static front page — Performance ≥ 90
[ ] Single post — Performance ≥ 90
[ ] 404 page — Performance ≥ 90
```

### 7.3 Page Weight

```
[ ] Default homepage total page weight ≤ 100 KB (excluding images)
[ ] HTTP request count ≤ 8 on default homepage
[ ] No render-blocking JS
[ ] No external font CDN
[ ] No jQuery dependency (only enqueue if a core block needs it; WordPress handles this)
```

### 7.4 Image Strategy

```
[ ] Images use loading="lazy" by default
[ ] Hero image (above the fold) uses loading="eager" (if applicable)
[ ] All images have explicit width/height or aspectRatio (no CLS)
[ ] No images larger than necessary (srcset used)
```

### 7.5 Caching Compatibility

```
[ ] Theme works with WP Super Cache
[ ] Theme works with W3 Total Cache
[ ] Theme works with WP Rocket
[ ] Theme works behind Cloudflare
```

---

## 8. WordPress Compliance

### 8.1 Coding Standards

```
[ ] PHP files follow WordPress Coding Standards
[ ] All output escaped (esc_html, esc_attr, esc_url, wp_kses_post)
[ ] All input sanitized (sanitize_text_field, etc.) — Phase 1: no input
[ ] Translation functions used with text domain "godevs-portfolio"
[ ] No inline JavaScript
[ ] No inline styles in templates
[ ] No hardcoded URLs (use get_template_directory_uri())
```

### 8.2 Translation

```
[ ] Text domain "godevs-portfolio" declared in style.css
[ ] All user-facing strings use __(), _e(), _x(), _n(), or escaping variants
[ ] No hardcoded user-facing text
[ ] .pot file generated (or generation documented)
[ ] Test with a translation plugin (e.g., Loco Translate) — no broken strings
```

### 8.3 Security

```
[ ] No eval(), exec(), system(), passthru()
[ ] No file_get_contents(), file_put_contents() with user input
[ ] No include/require with user input
[ ] No $wpdb direct queries
[ ] No unserialize() with user input
[ ] No add_menu_page(), add_submenu_page() (Phase 1: no admin UI)
[ ] No after_switch_theme database modifications
```

### 8.4 Licensing

```
[ ] LICENSE file ships GPL v2 or later
[ ] style.css header declares GPL v2 or later
[ ] readme.txt declares GPL v2 or later
[ ] All bundled assets (if any) are GPL-compatible
[ ] No external GPL-incompatible dependencies
```

### 8.5 Theme Review

Run the Theme Check plugin (if available):

```
[ ] No "required" warnings
[ ] No "warning" level issues (fix before submission)
[ ] "Recommended" issues reviewed and addressed where reasonable
```

If Theme Check plugin is not available, manually verify:

```
[ ] No deprecated function usage
[ ] No <title> tag in head (handled by add_theme_support('title-tag'))
[ ] No add_custom_background(), add_custom_image_header() (deprecated)
[ ] No automatic feed links hardcoded (handled by add_theme_support('automatic-feed-links'))
```

---

## 9. Responsive QA

Test at these widths:

```
[ ] 360px (small mobile)
[ ] 414px (large mobile)
[ ] 768px (tablet portrait)
[ ] 1024px (tablet landscape / small desktop)
[ ] 1280px (desktop)
[ ] 1920px (wide desktop)
```

At each width, verify:

```
[ ] No horizontal scroll
[ ] No overlapping elements
[ ] Text remains readable (no tiny text)
[ ] Touch targets ≥ 44×44px on mobile
[ ] Mobile menu activates below 782px (WordPress breakpoint)
[ ] Images scale appropriately
[ ] Layout reflows (columns stack to rows)
```

---

## 10. Cross-Browser QA

Test in:

```
[ ] Chrome (latest) — macOS / Windows
[ ] Firefox (latest) — macOS / Windows
[ ] Safari (latest) — macOS
[ ] Edge (latest) — Windows
[ ] iOS Safari (latest) — iPhone
[ ] Android Chrome (latest)
```

Verify:

```
[ ] Layouts render the same
[ ] Typography renders the same (note: system font stacks may differ by OS — that's acceptable)
[ ] No JavaScript console errors
[ ] No CSS warnings
```

---

## 11. Style Variation QA

For each variation (Default, Minimal, Dark, Editorial):

### 11.1 Visual

```
[ ] Variation appears in Styles → Browse styles
[ ] Variation applies when selected
[ ] Palette changes correctly
[ ] Typography changes correctly
[ ] Spacing changes correctly (if variation modifies spacing)
[ ] Border radius changes correctly (if variation modifies radius)
```

### 11.2 Pattern Compatibility

For each pattern in each variation:

```
[ ] Pattern renders without errors
[ ] Pattern maintains visual intent
[ ] Pattern does not break layout
[ ] Pattern maintains AA contrast
```

### 11.3 Template Compatibility

For each template in each variation:

```
[ ] Template renders without errors
[ ] Header / footer match variation
[ ] Body content matches variation
```

---

## 12. Documentation QA

### 12.1 Required Documents

```
[ ] docs/PRD.md
[ ] docs/ARCHITECTURE.md
[ ] docs/DESIGN-SYSTEM.md
[ ] docs/PATTERN-SYSTEM.md
[ ] docs/TEMPLATE-SYSTEM.md
[ ] docs/STYLE-VARIATIONS.md
[ ] docs/ACCESSIBILITY.md
[ ] docs/PERFORMANCE.md
[ ] docs/SECURITY.md
[ ] docs/WORDPRESS-STANDARDS.md
[ ] docs/AI-DEVELOPMENT-GUIDE.md
[ ] docs/CONTRIBUTING.md
[ ] docs/QA-CHECKLIST.md
[ ] docs/RELEASE-ROADMAP.md
[ ] docs/CHANGELOG.md
```

### 12.2 Documentation Quality

```
[ ] Documents are project-specific (no Lorem Ipsum)
[ ] Documents reflect the current state of the codebase
[ ] Code examples are syntactically valid
[ ] Links between documents work
[ ] No "TODO" placeholders in Phase 1 deliverables
```

---

## 13. Final Pre-Release Verification

Before marking Phase 1 complete:

```
[ ] All sections above pass
[ ] No "known issues" remain unresolved (or are explicitly documented)
[ ] CHANGELOG.md updated with Phase 1 entry
[ ] worklog.md updated with final summary
[ ] Theme activates cleanly on a fresh WordPress 6.5+ install
[ ] No PHP warnings or errors
[ ] No JavaScript console errors
[ ] All 12 templates render
[ ] All 6 template parts render
[ ] All 10 patterns insert and render
[ ] All 4 style variations apply
```

---

## 14. Test Reporting Format

When reporting test results:

```markdown
## Test Report — <Phase / Date>

### Passed

- <Test 1>
- <Test 2>

### Failed

- <Test N>
  - Steps to reproduce: <steps>
  - Expected: <expected>
  - Actual: <actual>
  - Severity: <blocker / high / medium / low>
  - Status: <open / in-progress / resolved>

### Not Tested

- <Test M>
  - Reason: <why not tested>
```

Honest reporting. Do not claim a test passed if it did not. Do not omit failed tests.

---

## 15. Tools Reference

| Tool | Use |
|---|---|
| `php -l <file>` | PHP syntax check |
| `python3 -m json.tool <file>` | JSON validation |
| Theme Check plugin | WordPress.org theme review checks |
| Lighthouse (Chrome DevTools) | Performance, accessibility, SEO audit |
| axe DevTools | Accessibility audit |
| WAVE | Accessibility visual audit |
| WebAIM Contrast Checker | Color contrast verification |
| NVDA / VoiceOver | Screen reader testing |
| BrowserStack / LambdaTest | Cross-browser testing |

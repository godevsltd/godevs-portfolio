# QA Checklist — GoDevs Portfolio

A condensed checklist to run before any v0.x release. The
checklist is derived from `docs/TESTING-PLAN.md` and
`docs/WORDPRESS-ORG-COMPLIANCE.md`. The release manager checks
every box; any unchecked box blocks the release.

---

## 1. Pre-release

- [ ] All automated tests in `/tests/` pass.
- [ ] No `php -l` syntax errors in any PHP file.
- [ ] No uncommitted changes in the working tree.
- [ ] `CHANGELOG.md` updated with the new version and date.
- [ ] `style.css` `Version:` header updated to the new version.
- [ ] `readme.txt` `Stable tag:` updated to the new version.
- [ ] `readme.txt` `Tested up to:` updated to the latest tested
      WordPress version.
- [ ] `theme.json` `$schema` URL is current.
- [ ] All bundled font license files present
      (`INTER-OFL.txt`, `NEWSREADER-OFL.txt`).
- [ ] `.gitignore` excludes development artefacts.
- [ ] No `.git` directory in the distribution zip.

## 2. Activation

- [ ] Theme activates on a clean WordPress 6.5+ install.
- [ ] No PHP warnings, notices, or errors in `debug.log` with
      `WP_DEBUG = true`.
- [ ] Theme appears in Appearance → Themes with the correct
      name, version, and screenshot.
- [ ] Site Editor opens without errors.
- [ ] No admin notices on activation.

## 3. Templates

- [ ] `index.html` renders posts list.
- [ ] `home.html` renders posts list (when set as Posts Page).
- [ ] `front-page.html` renders composed homepage.
- [ ] `page.html` renders static page with title.
- [ ] `page-no-title.html` renders static page without title
      (custom template).
- [ ] `single.html` renders single post with date, title,
      terms, featured image, content, post navigation,
      comments.
- [ ] `singular.html` renders single CPT (test with a CPT
      plugin or via GoDevs Core in Phase 8).
- [ ] `archive.html` renders archive page.
- [ ] `search.html` renders search results page.
- [ ] `404.html` renders 404 page.

## 4. Template parts

- [ ] `header.html` renders logo, navigation, and CTA.
- [ ] `footer.html` renders multi-column footer.
- [ ] `mobile-menu.html` renders alternative mobile menu.
- [ ] All three parts are declared in `theme.json`
      `templateParts`.
- [ ] All three parts appear in the Site Editor → Template
      Parts panel.

## 5. Patterns

- [ ] `godevs-portfolio/hero` inserts without errors.
- [ ] `godevs-portfolio/about` inserts without errors.
- [ ] `godevs-portfolio/services` inserts without errors.
- [ ] `godevs-portfolio/portfolio-grid` inserts without
      errors.
- [ ] `godevs-portfolio/testimonials` inserts without
      errors.
- [ ] `godevs-portfolio/cta` inserts without errors.
- [ ] `godevs-portfolio/contact` inserts without errors.
- [ ] `godevs-portfolio/footer` inserts without errors.
- [ ] All eight patterns appear in the Site Editor inserter.
- [ ] All eight patterns are responsive at 375, 768, 1024,
      1280, 1440, 1920.
- [ ] All eight patterns use design system tokens (no
      hardcoded hex or spacing).

## 6. Style variations

- [ ] `Minimal` variation appears in Styles → Browse Styles.
- [ ] Switching to `Minimal` changes typography to Inter for
      headings.
- [ ] Switching to `Minimal` removes button radius.
- [ ] `Dark` variation appears in Styles → Browse Styles.
- [ ] Switching to `Dark` changes palette to dark background.
- [ ] Switching back to default restores original palette and
      typography.

## 7. Site Editor

- [ ] Site logo can be replaced.
- [ ] Site tagline can be edited.
- [ ] Navigation menu can be edited.
- [ ] Header template part can be edited and saved.
- [ ] Footer template part can be edited and saved.
- [ ] Mobile menu template part can be edited and saved.
- [ ] Each template can be edited and saved.
- [ ] Reset to original works (clears user overrides).

## 8. Responsive

- [ ] Layout works at 375 (iPhone SE).
- [ ] Layout works at 768 (iPad portrait).
- [ ] Layout works at 1024 (iPad landscape).
- [ ] Layout works at 1280 (small laptop).
- [ ] Layout works at 1440 (typical desktop).
- [ ] Layout works at 1920 (large desktop).
- [ ] No horizontal scroll at 375.
- [ ] Navigation switches to overlay mode at 1024 and below.
- [ ] Mobile menu opens with Enter / Space.
- [ ] Mobile menu closes with Escape.

## 9. Accessibility

- [ ] Skip link is the first focusable element on every page.
- [ ] Skip link moves focus to `#main` on click.
- [ ] All focusable elements have visible `:focus-visible`
      indicators.
- [ ] Heading hierarchy is correct (one h1 per page, no
      skipped levels).
- [ ] Semantic landmarks (`header`, `main`, `footer`) are
      present.
- [ ] Sufficient colour contrast (verified in
      `docs/ACCESSIBILITY.md` §6).
- [ ] Reduced motion preference disables all transitions.
- [ ] Keyboard navigation works for every interactive element.
- [ ] NVDA reads the page in the correct order on a Windows +
      Firefox test.
- [ ] VoiceOver reads the page in the correct order on a
      macOS + Safari test.

## 10. Performance

- [ ] Lighthouse mobile score >= 95 on the default front-page
      with no plugins.
- [ ] LCP < 2.5s on a fast 3G profile.
- [ ] TBT < 200ms on a fast 3G profile.
- [ ] CLS < 0.1.
- [ ] No external requests on the front-end (verified via
      Chrome DevTools Network panel).
- [ ] No render-blocking resources.
- [ ] `navigation.js` is deferred.
- [ ] Fonts are preloaded.

## 11. Security

- [ ] No PHP warnings, notices, or errors with `WP_DEBUG =
      true` and `WP_DEBUG_LOG = true`.
- [ ] No unescaped `echo` in `functions.php` (grep for `echo`).
- [ ] No remote requests (grep for `wp_remote_get`,
      `wp_remote_post`, `curl_`, `file_get_contents`).
- [ ] No `eval()` (grep for `eval`).
- [ ] No `include` of user-controlled paths.
- [ ] No `base64_decode` (grep).
- [ ] No `preg_replace` with `/e` modifier (deprecated PHP
      feature).
- [ ] No short open tags (`<?` without `php`).
- [ ] All output escaped via `esc_html`, `esc_attr`, `esc_url`,
      `wp_kses_post`.

## 12. Internationalization

- [ ] `godevs-portfolio.pot` file exists in `/languages/`.
- [ ] `load_theme_textdomain()` is called in `functions.php`.
- [ ] Text domain `godevs-portfolio` is used throughout.
- [ ] Switching site language to Arabic or Hebrew flips layout
      to RTL.
- [ ] No hardcoded user-facing PHP strings (all in block
      markup or via i18n functions).

## 13. Plugin boundary

- [ ] Theme activates and renders without GoDevs Core.
- [ ] Body class `godevs-core-inactive` is present on the
      front-end.
- [ ] `GODEVS_PORTFOLIO_CORE_ACTIVE` constant is `false`.
- [ ] No fatal errors when GoDevs Core is not installed.
- [ ] All eight patterns render with static content when the
      plugin is inactive.

## 14. WordPress.org compliance

- [ ] `style.css` declares all required headers (Theme Name,
      Author, Description, Version, License, License URI, Text
      Domain).
- [ ] `readme.txt` is in WordPress.org format.
- [ ] `LICENSE` is the GPL-2.0 text.
- [ ] Bundled font license files present.
- [ ] No external requests.
- [ ] No CPTs, taxonomies, shortcodes, settings pages, REST
      routes registered by the theme.
- [ ] No `add_theme_support` for features the theme does not
      use.
- [ ] Theme is accessibility-ready (skip link, focus-visible,
      landmarks, contrast, reduced motion).

## 15. Browser compatibility

- [ ] Chrome (latest) on Windows, macOS, Linux.
- [ ] Firefox (latest) on Windows, macOS, Linux.
- [ ] Safari (latest) on macOS.
- [ ] Edge (latest) on Windows.
- [ ] Safari iOS (latest) on iPhone.
- [ ] Chrome Android (latest) on Pixel or Samsung.

## 16. Documentation

- [ ] All 24 docs in `/docs/` are up to date.
- [ ] `README.md` is up to date.
- [ ] `readme.txt` is up to date.
- [ ] `CHANGELOG.md` lists the new version with date.
- [ ] `docs/FEATURE-SPECIFICATION.md` reflects the v0.1
      feature set.
- [ ] `docs/AI-DEVELOPMENT-GUIDE.md` reflects the v0.1
      architecture.

## 17. Release

- [ ] All sections above pass.
- [ ] Distribution zip created from a clean checkout (no
      `.git`, no `node_modules`, no `tests/`).
- [ ] Zip named `godevs-portfolio-<version>.zip`.
- [ ] Zip tested by installing on a clean WordPress install.
- [ ] Release notes drafted (one-paragraph summary + bulleted
      list of changes).
- [ ] Release tagged in Git: `v<version>`.
- [ ] Release published on GitHub (or wherever the theme is
      distributed).
- [ ] WordPress.org submission package prepared (Phase 16/17).

## 18. Post-release

- [ ] Monitor GitHub issues for the first 7 days.
- [ ] Respond to bug reports within 48 hours.
- [ ] Issue a patch release (`v0.1.1`, etc.) for any critical
      bugs found.
- [ ] Update `CHANGELOG.md` with patch release notes.
- [ ] Update `docs/DEVELOPMENT-ROADMAP.md` to mark the released
      phase as shipped.

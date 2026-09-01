# Runtime Test Plan — GoDevs Portfolio

**Theme:** GoDevs Portfolio
**Version:** 1.0.0
**Date:** 2026-09-01
**Purpose:** Executable checklist for real WordPress runtime validation. Run this on a fresh WordPress 6.5+ + PHP 8.2+ environment. Do NOT mark a test PASS unless you actually ran it and observed the result.

---

## 0. Environment Setup

### Required

| Component | Minimum | Recommended |
|-----------|---------|-------------|
| WordPress | 6.5 | 6.7 latest |
| PHP | 7.4 | 8.2+ |
| MySQL | 5.7 | 8.0 / MariaDB 10.6+ |
| Browser | Latest Chrome / Firefox / Safari | Latest Chrome |
| Memory limit | 256MB | 512MB |
| Max execution time | 60s | 120s |

### Test environments

Pick ONE:

**Option A — Local by Flywheel** (easiest):
1. Download Local: https://localwp.com/
2. Create a new site: name `godevs-test`, preferred -> Custom -> WP 6.7 + PHP 8.2 + MySQL 8.0
3. Start the site
4. WP Admin → Appearance → Themes → Add New → Upload Theme → upload `godevs-portfolio-beta-1.0.0.zip`

**Option B — Docker**:
```bash
docker run --name godevs-test -p 8080:80 -d \
  -e WORDPRESS_DB_HOST=db \
  -e WORDPRESS_DB_USER=wp \
  -e WORDPRESS_DB_PASSWORD=wp \
  -e WORDPRESS_DB_NAME=wp \
  --link godevs-mysql:db \
  wordpress:6.7-php8.2-apache
# Then upload theme via WP Admin OR docker cp into wp-content/themes/
```

**Option C — XAMPP + manual WP install**:
1. Install XAMPP
2. Start Apache + MySQL
3. Download WordPress 6.7 from https://wordpress.org/
4. Extract to `htdocs/godevs-test/`
5. Visit `http://localhost/godevs-test/` and run the install wizard

### Recommended plugins to install

- **Query Monitor** — for PHP error/SQL/HTTP API debugging
- **Debug Bar** — additional diagnostics
- **WP-CLI** — for fast command-line operations

### wp-config.php debugging

Set these in `wp-config.php` BEFORE testing:

```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);     // Logs to wp-content/debug.log
define('WP_DEBUG_DISPLAY', false); // Don't show on screen
define('SCRIPT_DEBUG', true);     // Use unminified JS/CSS
@ini_set('display_errors', 0);
```

Tail the log in another terminal: `tail -f wp-content/debug.log`

### Required browser tools

Open DevTools → Console + Network tabs before each test. Keep an eye on:
- JavaScript console errors (red)
- Failed network requests (4xx, 5xx)
- Mixed-content warnings
- 404s for missing assets

---

## 1. Test Matrix

Each test below has:

**Action** — what to do
**Expected Result** — what should happen
**Actual Result** — fill in
**PASS / FAIL** — circle one
**Notes** — anything notable

---

### Test 1: Fresh Activation

**Action:**
1. WP Admin → Appearance → Themes → Add New → Upload Theme
2. Choose `godevs-portfolio-beta-1.0.0.zip`
3. Click Install Now
4. Click Activate

**Expected Result:**
- Activation completes without error
- Browser redirects to Themes page
- After ~2 seconds, a transient flag triggers redirect to `themes.php?page=godevs-portfolio-settings&welcome=1`
- Welcome notice appears in admin: "Welcome to GoDevs Portfolio"
- Dashboard widget appears on `/wp-admin/index.php`: "GoDevs Portfolio — Quick Start"

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 2: Theme Functionality Sanity Check

**Action:**
1. Visit the homepage
2. Visit `?p=1` (a single post if one exists)
3. Visit `/shop/` or any non-existent URL (404)
4. Open WP Admin → Appearance → Site Editor

**Expected Result:**
- Homepage renders with the default hero pattern
- Single post renders with content + featured image
- 404 page shows search + nav + CTA
- Site Editor opens without error
- No PHP warnings in debug.log
- No JS errors in browser console
- No 404s in Network tab

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 3: Demo A Import

**Action:**
1. WP Admin → Appearance → GoDevs Demos
2. Find the **Aperture** demo (or first complete demo in the list)
3. Click **Preview** to view in modal — verify it loads
4. Close preview
5. Click **Import**
6. Confirm the "Are you sure?" dialog
7. Wait for progress bar to reach 100%
8. Observe the success message

**Expected Result:**
- Progress bar shows steps: Preparing → Pages → Navigation → Homepage → Layout → Complete
- Each step turns green as it completes
- No errors during import
- Success message appears: "Demo imported successfully"
- After-import notice appears on next admin page load with action buttons
- Homepage now shows the demo content
- Header now shows the demo's header
- Footer now shows the demo's footer
- Navigation menu appears with correct links
- No PHP errors in debug.log
- Import lock is released (verify via WP-CLI: `wp transient get godevs_import_lock` → returns empty)

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 4: Demo B → Switch from A to B

**Action:**
1. After Test 3, return to Appearance → GoDevs Demos
2. Find a DIFFERENT demo (e.g., **Minimal**)
3. Click Import
4. Confirm
5. Wait for completion

**Expected Result:**
- Old demo's pages are trashed (not deleted — verify in Trash)
- Old demo's navigation menu is deleted
- Old demo's style variation is reset
- New demo's pages are created
- New demo's homepage is set as front page
- New demo's style variation is applied
- No leftover content from Demo A
- No 404s on internal links
- Import lock released

**Verify:**
```bash
wp post list --post_type=page --field=post_title
wp menu list --fields=name,locations
wp option get page_on_front
```

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 5: Demo C Import

**Action:**
1. Repeat Test 4 with a third demo (e.g., **Director**)

**Expected Result:** Same as Test 4.

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 6: Demo A Re-import

**Action:**
1. After Test 5, import Demo A again (the one from Test 3)
2. Confirm
3. Wait for completion

**Expected Result:**
- The "re-import same demo" path is exercised
- All previous Demo C pages are trashed
- Demo A pages are re-created with original slugs (NOT `home-2` etc.)
- No duplicate content
- Import lock released

**Verify:** `wp post list --post_type=page --field=post_name` shows clean slugs without `-2` suffix.

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 7: User Content Protection

**Action:**
1. Create 3 user pages with random titles (e.g., "My Custom Page 1")
2. Create 2 user posts
3. Upload 1 media item
4. Create a custom navigation menu: "My Menu"
5. Note the IDs: `wp post list --field=ID --post_type=page`
6. Now import any demo
7. After import, verify ALL your custom content still exists

**Expected Result:**
- All 3 user pages still exist with same IDs
- All 2 user posts still exist
- Uploaded media still in Media Library
- "My Menu" still exists in `wp_terms`
- "My Menu" may no longer be assigned to a location (this is expected — demo importer sets its own menu) — but the menu itself is not deleted
- No user post meta is lost

**Verify:**
```bash
wp post list --post_type=page --field=ID --post_status=any  # Should include your page IDs
wp post list --post_type=post --field=ID --post_status=any  # Should include your post IDs
wp menu list  # "My Menu" should still be in the list
```

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 8: Gutenberg Block Insertion

**Action:**
1. WP Admin → Pages → Add New
2. Insert a `core/button` block
3. Open the Styles panel in the sidebar
4. Verify the custom styles appear: `primary`, `outline`, `ghost`, `link` (and any others)
5. Apply the `primary` style → verify visual change in editor
6. Save → reload editor → verify style persisted
7. Publish → view frontend → verify style applied
8. Edit again → switch to `outline` → save → verify

**Expected Result:**
- All 4+ button block styles appear in the Styles panel
- No "This block contains unexpected or invalid content" warning
- Style persists across save/reload
- Frontend matches editor

**Repeat for:**
- `core/group` (should show 15 card styles: bordered, elevated, pro, media, compact, accent, profile, quote, etc.)
- `core/separator` (should show 2 styles)
- `core/image` (should show 4 styles)
- `core/paragraph` (should show 1 style)

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 9: Pattern Insertion

**Action:**
1. WP Admin → Pages → Add New
2. Click the + button → Patterns tab
3. For EACH of the 16 categories, insert 1 representative pattern:
   - Hero: insert any hero pattern
   - Services: insert any services pattern
   - Portfolio: insert any portfolio pattern
   - About: insert any about pattern
   - Testimonials: insert any testimonials pattern
   - CTA: insert any CTA pattern
   - Stats: insert any stats pattern
   - FAQ: insert any FAQ pattern
   - Pricing: insert any pricing pattern
   - Team: insert any team pattern
   - Contact: insert any contact pattern
   - Experience: insert any experience pattern
   - Education: insert any education pattern
   - Case Studies: insert any case study pattern
   - Booking: insert any booking pattern
   - Demos: insert any demo pattern (small one)
4. For each: save, reload, verify no block recovery needed, view frontend

**Expected Result:**
- All 16 categories appear in the inserter
- Patterns insert without "Invalid block" warnings
- Patterns render correctly in editor and frontend
- No block recovery needed after save/reload

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 10: Block Styles Coverage

**Action:**
1. Create a new page
2. Insert each of these block types and verify the custom styles:
   - `core/button` → check 4 styles
   - `core/group` → check 15 card styles
   - `core/separator` → check 2 styles
   - `core/image` → check 4 styles
   - `core/paragraph` → check 1 style

**Expected Result:**
- Total: 26 block styles registered (4+15+2+4+1)
- Each style has matching CSS in editor and frontend

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 11: Header Builder Workflow

**Action:**
1. WP Admin → Appearance → GoDevs Settings → Header & Footer tab
2. Click "Browse Templates"
3. Verify all 10 starter headers display as cards with SVG miniatures
4. Verify the active header (if any) has a green checkmark
5. Click on a starter header → preview opens
6. Verify the SVG miniature matches the layout (logo position, nav, button)
7. Click "Apply" → success notice
8. Visit frontend → verify header renders
9. Test responsive: < 768px → hamburger menu appears
10. Click hamburger → menu opens
11. Click nav item → navigates
12. Scroll 20px → sticky header activates (if enabled)
13. Return to builder → click "Edit" → modify the header → Save
14. Reload → verify edits persisted

**Expected Result:**
- All 10 starter headers show real SVG miniatures (not generic placeholders)
- Miniatures accurately reflect each layout's structure
- Active header is clearly indicated
- Apply works without error
- Frontend renders the applied header
- Mobile hamburger menu works
- Sticky behavior works
- Edits persist after save

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 12: Footer Builder Workflow

**Action:**
1. Repeat Test 11 but for footer
2. Test all 10 starter footers

**Expected Result:** Same as Test 11 but for footers.

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 13: Theme Settings — Change → Save → Reload → Verify

**Action:**
For EACH of the following settings, change the value, save, hard refresh frontend, verify the change took effect:

| Setting | Change to | Verify on frontend |
|---------|-----------|-------------------|
| accent_color | #DC2626 (red) | All accent-colored elements turn red |
| text_color | #1F2937 | Body text color changes |
| background_color | #F9FAFB | Background color changes |
| container_width | 1440 | Container widens |
| card_radius | 16px | Card corners rounder |
| button_radius | 24px | Buttons become pill-shaped |
| blog_layout | list | Blog archive shows list layout |
| blog_columns | 2 | Blog archive shows 2 columns |
| portfolio_columns | 4 | Portfolio archive shows 4 columns |
| header_style | dark | Header switches to dark variant |
| footer_style | social | Footer switches to social layout |
| header_sticky | off | Header no longer sticks on scroll |
| footer_copyright | off | Copyright text disappears from footer |
| footer_social | off | Social icons disappear from footer |
| motion_enabled | off | Reveal animations no longer play |
| reduced_motion | on | All animations disabled |
| header_cta_text | "Sign Up" | CTA button appears in header |
| header_cta_link | "#signup" | CTA links to #signup |

**Expected Result:**
- Every setting takes effect on frontend after save + hard refresh
- No dead-end settings (every setting has a visible effect)
- Settings persist across page reloads
- Dynamic CSS is regenerated on save

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 14: Settings Search

**Action:**
1. Go to Appearance → GoDevs Settings
2. Click in the search box (or press `/` keyboard shortcut)
3. Type "color" → verify only Color-related sections appear
4. Type "header" → verify Header section appears
5. Type "typography" → verify Typography section appears
6. Type "nonexistent" → verify "No matching settings" message appears
7. Click the X clear button → verify all sections reappear
8. Press ESC while focused on search → verify search clears

**Expected Result:**
- Search filters sidebar in real-time
- Search auto-jumps to first matching section
- Clear button (X) restores all sections
- ESC clears search
- `/` keyboard shortcut focuses search
- Result count appears ("3 sections found")

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 15: Templates — All Types

**Action:**
Visit each of these template types and verify rendering:

| Template | How to test |
|----------|------------|
| Front Page | Visit homepage |
| Home (blog) | Set Settings → Reading → "Posts page" → visit |
| Page | Create a page, visit |
| Single Post | Create a post, visit |
| Archive | Visit `/archive/` if it exists, or any date archive |
| Search | Visit `/?s=test` |
| 404 | Visit any non-existent URL |
| Author | Visit `/author/admin/` |
| Date | Visit `/2024/` |
| Category | Visit a category archive |
| Tag | Visit a tag archive |
| CPT archives (7) | Visit `/projects/`, `/services/`, `/team/`, `/testimonials/`, `/experience/`, `/education/`, `/case-studies/` |
| CPT singles (7) | Create one of each CPT, visit each |

**Expected Result:**
- All templates render with correct header + footer
- Query loops work (posts appear)
- Pagination works (if more posts than per-page)
- Featured images render
- Empty states work ("No posts found")
- No PHP warnings in debug.log
- No layout overflow

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 16: CPT Archives — Layout Switching

**Action:**
1. Create 6+ `godevs_project` posts with featured images
2. Visit `/projects/`
3. Note the current layout (default = grid 3 columns)
4. WP Admin → GoDevs Settings → Portfolio
5. Change layout to `list` → Save → refresh `/projects/` → verify list layout
6. Change columns to `4` → Save → refresh → verify 4 columns
7. Change layout to `showcase` (if available) → Save → refresh → verify

**Expected Result:**
- Layout change takes effect on frontend
- Column count change takes effect
- CSS grid is correctly applied
- No leftover styling from previous layout

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 17: Search + 404

**Action:**
1. Visit `/?s=hello`
2. Verify search results page renders
3. Visit `/?s=zzzznonexistent`
4. Verify empty state renders ("Nothing found")
5. Visit `/this-page-does-not-exist/`
6. Verify 404 page renders with search + nav + CTA

**Expected Result:**
- Search results page works
- Empty state is friendly, not scary
- 404 page is helpful, suggests navigation

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 18: Mobile Navigation

**Action:**
1. On desktop browser, open DevTools → Toggle device toolbar (Ctrl+Shift+M)
2. Set viewport to 375px (iPhone SE)
3. Visit homepage
4. Verify hamburger menu appears (no full nav)
5. Click hamburger → menu opens
6. Click a menu item → navigates
7. Press ESC → menu closes
8. Click outside menu → menu closes

**Expected Result:**
- Hamburger icon visible < 768px
- Menu opens/closes smoothly
- Navigation works
- ESC closes
- Click-outside closes
- No horizontal scroll

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 19: Responsive Layouts

**Action:**
Test the site at each of these widths and verify no horizontal overflow:

| Width | Type | What to check |
|-------|------|---------------|
| 1440px | Desktop | Standard layout |
| 1280px | Laptop | Layout intact |
| 1024px | Tablet landscape | Columns collapse to 2 |
| 768px | Tablet portrait | Hamburger menu, columns to 1 |
| 480px | Mobile | Padding reduced, font sizes smaller |
| 375px | iPhone SE | No overflow, tap targets ≥44px |

**Expected Result:**
- No horizontal overflow at any breakpoint
- Tap targets ≥44px on mobile
- Text remains readable
- Images scale appropriately
- No overlapping elements

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 20: Error Handling

**Action:**
1. Try to submit the booking form with empty fields → verify inline error appears
2. Try with invalid email → verify "Please enter a valid email address"
3. Try the proposal form with same scenarios
4. Try to access admin settings as a subscriber → verify "Insufficient permissions"
5. Trigger a 404 → verify the friendly 404 page
6. Try to import a "coming soon" demo (if any) → verify "This demo is coming soon"

**Expected Result:**
- All form errors show inline with clear messages
- Permission errors show user-friendly message
- 404 is helpful, not scary
- No raw PHP errors exposed
- No stack traces visible to users

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 21: Import Interruption

**Action:**
1. Start a demo import
2. IMMEDIATELY refresh the page (don't wait for completion)
3. Return to the demo library page
4. Verify the import lock is released
5. Try importing another demo → verify it works (no "Another import in progress" error)

**Expected Result:**
- After refresh, the lock is not stuck
- New import can start within 60 seconds (or immediately if lock cleared)
- No "stuck import" state
- No partial demo content left orphaned (or if there is, the next import cleans it up via tracker)

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

### Test 22: Cache Behavior

**Action:**
1. Install a caching plugin (e.g., W3 Total Cache or WP Super Cache)
2. Enable page caching
3. Visit the homepage
4. Change a theme setting (e.g., accent color)
5. Hard refresh
6. Verify the new color appears

**Expected Result:**
- Cache is invalidated when settings change
- New CSS is regenerated and served
- No stale styles persist after save

**Verify:** Check `wp_options` for `godevs_portfolio_dynamic_css` — should contain the new color value.

**Actual Result:** ____________________________________

**PASS / FAIL**

**Notes:**

---

## 2. Summary

After running all 22 tests, fill in this summary:

### Test Results

| Test | Result | Notes |
|------|--------|-------|
| 1. Fresh activation | PASS/FAIL | |
| 2. Theme sanity | PASS/FAIL | |
| 3. Demo A import | PASS/FAIL | |
| 4. Demo A → B switch | PASS/FAIL | |
| 5. Demo C import | PASS/FAIL | |
| 6. Demo A re-import | PASS/FAIL | |
| 7. User content protection | PASS/FAIL | |
| 8. Gutenberg blocks | PASS/FAIL | |
| 9. Pattern insertion | PASS/FAIL | |
| 10. Block styles | PASS/FAIL | |
| 11. Header builder | PASS/FAIL | |
| 12. Footer builder | PASS/FAIL | |
| 13. Theme settings | PASS/FAIL | |
| 14. Settings search | PASS/FAIL | |
| 15. Templates | PASS/FAIL | |
| 16. CPT archives | PASS/FAIL | |
| 17. Search + 404 | PASS/FAIL | |
| 18. Mobile nav | PASS/FAIL | |
| 19. Responsive | PASS/FAIL | |
| 20. Error handling | PASS/FAIL | |
| 21. Import interruption | PASS/FAIL | |
| 22. Cache behavior | PASS/FAIL | |

### Overall

- **Tests passed:** ___ / 22
- **Tests failed:** ___ / 22
- **Blocker issues found:** ___
- **High issues found:** ___

### Verdict

- [ ] 🟢 ALL TESTS PASSED — Beta validated
- [ ] 🟡 MINOR ISSUES — Beta validated with documented gaps
- [ ] 🔴 BLOCKER FOUND — Not ready for beta

### Sign-off

**Tester:** ____________________________________

**Date:** ____________________________________

**Environment:** WordPress _____ + PHP _____ + MySQL _____ + Browser _____

---

## Appendix A — WP-CLI Quick Reference

```bash
# Site setup
wp db reset --yes
wp core install --url=http://localhost --title="GoDevs Test" --admin_user=admin --admin_password=password --admin_email=admin@example.com

# Theme activation
wp theme activate godevs-portfolio

# Verify activation
wp option get godevs_portfolio_settings
wp option get page_on_front
wp option get show_on_front

# Demo tracker
wp option get godevs_demo_tracker
wp post list --post_type=page --meta_key=_godevs_demo_page --format=count

# Check import lock
wp transient get godevs_import_lock
wp transient delete godevs_import_lock  # Force clear if stuck

# Check global styles
wp post list --post_type=wp_global_styles --fields=ID,post_title,post_status

# Verify nav menus
wp menu list --fields=slug,name,locations

# Reset style variation
wp eval 'delete_user_meta(get_current_user_id(), "godevs-portfolio-applied-style");'

# Regenerate POT (after string changes)
wp i18n make-pot /path/to/godevs-portfolio /path/to/godevs-portfolio/languages/godevs-portfolio.pot --domain=godevs-portfolio

# Flush permalinks
wp rewrite flush

# Check PHP errors
wp eval 'error_reporting(E_ALL); ini_set("display_errors", 1); echo "WP_DEBUG: " . WP_DEBUG;'

# Tail debug log
tail -f wp-content/debug.log
```

---

## Appendix B — Common Issues & Fixes

### "Another import is in progress" stuck

```bash
wp transient delete godevs_import_lock
```

### Pages 404 after import

```bash
wp rewrite flush
```

### Style variation not applied

```bash
wp eval 'delete_user_meta(get_current_user_id(), "godevs-portfolio-applied-style");'
```
Then re-import.

### CPT archives show default layout (not your settings)

Visit `wp-admin/options-permalink.php` and click Save Changes to flush rewrites.

### Forms not submitting

Check that `wp_mail()` is configured. Test with:
```bash
wp eval 'var_dump(wp_mail("you@example.com", "Test", "Hello"));'
```

---

*End of Runtime Test Plan.*

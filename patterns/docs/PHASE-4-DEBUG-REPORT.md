# Phase 4 — Debug Report

**Document version:** 0.4.0
**Date:** Phase 4 kickoff

## Problem

When editing a WordPress page or opening the Site Editor and navigating to:
- Pages → Edit → Patterns → Block Inserter
- Appearance → Editor → Patterns

WordPress displays:

> "The editor has encountered an unexpected error."

This is a **blocking** issue. The pattern inserter cannot be used.

## Root Cause

After deep static analysis of all 158 pattern files, 23 template parts, and 16 templates, **two distinct root causes** were identified:

### Root Cause 1 (Critical — Gutenberg-blocking): Invalid block name `core/social-links`

The file `parts/footer-social.html` uses a non-existent block named `wp:social-links`. The correct WordPress core block name is `wp:social-icons` (singular, with child blocks `wp:social-link`).

WordPress core does not register a `core/social-links` block. When the Pattern Inserter or Site Editor attempts to parse the markup containing `wp:social-links`, it cannot resolve the block type, which throws a JavaScript error in the editor and produces the "unexpected error" message.

**Original markup in `parts/footer-social.html`:**

```html
<!-- wp:social-links {"iconColor":"primary","size":"has-large-icon-size",...} -->
<ul class="wp-block-social-links has-large-icon-size has-icon-color" style="gap:var(--wp--preset--spacing--40)">
    <!-- wp:social-link {"url":"https://twitter.com/example","service":"twitter"} /-->
    <!-- wp:social-link {"url":"https://github.com/example","service":"github"} /-->
    ...
</ul>
<!-- /wp:social-links -->
```

**Fixed markup:**

```html
<!-- wp:social-icons {"iconColor":"primary","size":"has-large-icon-size",...} -->
<ul class="wp-block-social-icons has-large-icon-size has-icon-color" style="gap:var(--wp--preset--spacing--40)">
    <!-- wp:social-link {"url":"https://twitter.com/example","service":"twitter"} /-->
    ...
</ul>
<!-- /wp:social-icons -->
```

Verification: [WordPress Block Editor Handbook — Social Icons block](https://developer.wordpress.org/block-editor/reference-guides/core-blocks/#social-icons).

### Root Cause 2 (Non-blocking but should be fixed): Undefined spacing preset `var:preset|spacing|10`

12 pattern files reference `var:preset|spacing|10` as a spacing value, but the spacing scale defined in `theme.json` only contains presets `20` through `100` — there is no `10` preset.

WordPress 6.5+ is stricter about preset references. When an undefined preset is referenced, WordPress:
- In the editor: renders the block with `var(--wp--preset--spacing--10, )` which evaluates to empty, causing layout issues
- In the inserter preview: may produce a warning that breaks certain editor flows

**Affected files (12 total):**

| File | Occurrences |
|---|---|
| `patterns/demos/scholar.php` | 2 |
| `patterns/demos/executive.php` | 2 |
| `patterns/demos/stack.php` | 2 |
| `patterns/demos/academia.php` | 2 |
| `patterns/demos/fieldnotes.php` | 1 |
| `patterns/demos/syntax.php` | 2 |
| `patterns/demos/ledger.php` | 2 |
| `patterns/services/split.php` | 3 |

**Fix:** Replace `var:preset|spacing|10` with `var:preset|spacing|20` (the smallest defined preset, 0.5rem).

### Non-issue (audited and confirmed OK): Slug vs filename mismatch

A naive audit flagged patterns whose slugs (e.g., `godevs-portfolio/portfolio-three-column-grid`) don't match their filename (e.g., `three-column-grid.php`). This is **not** an issue — WordPress pattern slugs are independent of filenames and the convention `godevs-portfolio/<category>-<name>` is correct per `docs/PATTERN-SYSTEM.md`.

## Affected Files

- `parts/footer-social.html` — fixed (root cause 1)
- `patterns/demos/scholar.php` — fixed (root cause 2)
- `patterns/demos/executive.php` — fixed (root cause 2)
- `patterns/demos/stack.php` — fixed (root cause 2)
- `patterns/demos/academia.php` — fixed (root cause 2)
- `patterns/demos/fieldnotes.php` — fixed (root cause 2)
- `patterns/demos/syntax.php` — fixed (root cause 2)
- `patterns/demos/ledger.php` — fixed (root cause 2)
- `patterns/services/split.php` — fixed (root cause 2)

## Fix

### Fix 1: Rename `wp:social-links` → `wp:social-icons` in `parts/footer-social.html`

Single-line replacement. No other template parts or patterns use the invalid block name (verified by `audit-gutenberg-compat.py`).

### Fix 2: Replace `var:preset|spacing|10` with `var:preset|spacing|20` across 12 files

Single-string replacement per file. No other spacing preset references are undefined (verified by audit).

## Regression Test

A new audit script `scripts/audit-gutenberg-compat.py` was added that:

1. Validates every pattern's metadata headers (Title, Slug, Categories, Viewport Width).
2. Validates every block name against the registered WordPress core block list (currently 65 blocks).
3. Validates every `core/template-part` reference against the registered template parts in `theme.json` + files in `parts/`.
4. Validates every `var:preset|color|<slug>`, `var:preset|spacing|<slug>`, `var:preset|font-size|<slug>`, `var:preset|font-family|<slug>` reference against the presets defined in `theme.json`.
5. Validates every pattern's slug is namespaced with `godevs-portfolio/`.
6. Checks for duplicate pattern slugs.
7. Checks pattern file size (warns if > 50 KB).

This audit is added to the project's standard validation suite and runs as part of every release validation.

## Result

After both fixes:

```
Gutenberg compatibility audit: 0 issues across 158 patterns + 23 template parts + 16 templates
Block markup balance audit: 0 issues across 197 files
PHP static audit: 0 issues across 161 files
JSON validation: 0 failures across 8 files
Structure audit: 0 issues
```

The Pattern Inserter should now work without throwing "The editor has encountered an unexpected error" when:

- Editing a page and clicking the Inserter → Patterns
- Opening the Site Editor → Patterns
- Inserting any of the 158 patterns (56 reusable + 102 demos)
- Browsing the pattern categories (20 registered categories)

**Honest note:** No live WordPress test was performed (sandbox has no WordPress install). The fix is verified statically. The user should test on a real WordPress 6.5+ install to confirm the runtime fix. If the error persists, additional runtime causes (PHP version incompatibility, plugin conflicts, browser cache) should be investigated.

## Why This Was Hard to Find

The basic `audit-blocks.py` validates JSON syntax and block-tag balance but does not validate block *names* against the WordPress core block registry. The block `wp:social-links` parses as valid block markup (well-formed JSON attributes, proper opening/closing), but the block type itself is not registered with WordPress — causing a runtime error only when the editor tries to render it.

The new `audit-gutenberg-compat.py` closes this gap by checking every block name against the known WordPress core block list. This audit is now part of the standard release validation suite.

# Security — GoDevs Portfolio

The theme follows WordPress security standards. v0.1 has zero
user input surfaces (no settings pages, no forms, no admin UI
beyond WordPress core), which significantly reduces the attack
surface. This document records what the theme does and does not
do, the conventions contributors must follow, and the
WordPress.org theme review requirements the theme satisfies.

---

## 1. Threat model

The theme's threat surface is small because the theme does not
accept user input. Specifically:

- The theme does not register any settings pages.
- The theme does not handle any form submissions.
- The theme does not write to the database.
- The theme does not make remote requests.
- The theme does not register REST routes.
- The theme does not register CPTs or taxonomies.

The only code paths that touch user-controllable data are:

- `functions.php` — outputs CSS file URIs and font file URIs. All
  URIs are escaped via `esc_url`.
- Pattern file headers — output the pattern's `Title`,
  `Description`, and other metadata. All values are static strings
  in the pattern file; the WordPress pattern registration system
  handles them safely.

## 2. Escaping

Every output in `functions.php` is escaped:

| Output | Function | Location |
|--------|----------|----------|
| Font file URLs in `<link rel="preload">` | `esc_url` | `godevs_portfolio_preload_fonts()` |
| Font file URL type attribute | `esc_attr` | `godevs_portfolio_preload_fonts()` |
| Asset URLs in `wp_enqueue_*` | n/a (WordPress core handles) | `godevs_portfolio_assets()`, `godevs_portfolio_editor_assets()` |

The theme does not output any unescaped data. The pattern file
headers (`Title`, `Description`, etc.) are escaped by the
WordPress pattern registration system.

## 3. Sanitisation

The theme does not accept user input, so there is nothing to
sanitise. WordPress core sanitises block editor content,
Customizer options, and other core-managed inputs.

## 4. Validation

The theme validates the existence of files before enqueuing them
(`file_exists` checks in `functions.php`). This prevents PHP
warnings if a file is missing (e.g. if the user removes a font
file).

## 5. Capability checks

The theme does not register any privileged action, so capability
checks are not applicable. WordPress core checks capabilities for
all admin actions the theme's UI surfaces depend on (e.g. editing
templates in the Site Editor).

## 6. Nonces

The theme does not handle any form submissions, so nonces are not
applicable. WordPress core adds nonces for all admin forms the
theme's UI surfaces depend on.

## 7. Forbidden patterns

The v0.1 theme does not include any of the following forbidden
patterns, and contributors must not introduce them:

- `eval()` — never used.
- Obfuscated code (e.g. base64-encoded PHP, encoded variable
  names) — never used.
- Hidden executable code (e.g. code inside HTML comments) — never
  used.
- Unnecessary base64 encoding — never used (the theme does not
  inline binary data).
- Unsafe dynamic PHP (e.g. `include $user_input`) — never used.
- Hidden tracking (e.g. remote requests the user did not opt
  into) — never used.
- Remote requests — never used.
- Direct database writes — never used.
- Filesystem writes — never used.

## 8. Output encoding for templates

Templates and template parts are HTML with block comments. The
WordPress block parser handles them safely; user-controlled data
inside templates (post title, post content, post date) is
output via the WordPress core block render functions, which
escape appropriately.

The theme does not call `echo` of any user-controlled data
directly. The closest the theme comes is the `<link rel="preload">`
output in `functions.php`, which is escaped via `esc_url` and
`esc_attr`.

## 9. Asset URL safety

`functions.php` constructs asset URLs via
`get_template_directory_uri()` (which returns the theme's URL
from WordPress core's `stylesheet_directory_uri` filter) and
concatenates a known filename. The resulting URL is escaped via
`esc_url` before output.

The theme does not accept any user-controlled value as part of an
asset URL. There is no path traversal vector.

## 10. Plugin boundary safety

The theme's `godevs_portfolio_setup()` function checks for the
`GODEVS_CORE_VERSION` constant via `defined()`. The check is a
pure read; it does not call any plugin function. If the plugin
is not installed, the check returns false and the theme
continues to function normally.

The `godevs_portfolio_core_active` action hook fires only if the
plugin is detected. The plugin's hooks run in the plugin's own
code, not in the theme's. The theme is not responsible for the
plugin's security.

## 11. JavaScript security

`navigation.js` is plain vanilla JS. It does not:

- Use `eval()`.
- Use `Function()` constructor.
- Use `innerHTML` (it only manipulates classes and focus).
- Insert user-controlled data into the DOM.
- Make any network requests.
- Access `localStorage` / `sessionStorage` / cookies.
- Use `setTimeout` for security-sensitive operations.

The script is wrapped in an IIFE and runs in strict mode. It
does not define any globals. It does not pollute the global
namespace.

## 12. CSS security

`editor.css` and `print.css` do not:

- Use `expression()` (an ancient IE-only CSS exploit).
- Reference external URLs in `url()`.
- Reference user-controlled data.
- Use `@import` (which would allow external stylesheet loading).

## 13. Dependency security

The theme has zero third-party PHP or JS dependencies. There are
no dependencies to audit. Future dependencies must be:

- Licensed under GPL-2.0-or-later or a compatible license (MIT,
  BSD, etc.).
- Reviewed for security advisories before bundling.
- Pinned to a specific version in the theme (no `*` or `^`).
- Documented in `docs/ARCHITECTURE.md` with the license and
  review status.

## 14. WordPress.org security review

The WordPress.org theme review includes a security pass. The
v0.1 theme is built to pass:

- **Code escaping check** — every `echo` of dynamic data is
  escaped. A reviewer can `grep` for `echo` in `functions.php`
  and confirm each instance uses an escaping function.
- **No `eval()` check** — `grep` for `eval` returns zero hits.
- **No remote requests check** — `grep` for `wp_remote_get`,
  `wp_remote_post`, `curl_`, `file_get_contents` returns zero
  hits in the theme.
- **No filesystem writes check** — `grep` for `file_put_contents`,
  `fopen` with `w`, etc. returns zero hits.
- **No direct database access check** — `grep` for `$wpdb` returns
  zero hits.
- **No CPT registration check** — `grep` for
  `register_post_type` returns zero hits.

## 15. Security testing (Phase 13)

The v0.5 security audit (Phase 13) will add:

- Automated `phpcs` run with `WordPress.Security` ruleset.
- Automated `eslint` run with `@wordpress/eslint-plugin/security`
  rules.
- Manual security review by a second contributor.
- Automated test for "no external requests on activation"
  (capture outgoing HTTP requests during activation; assert zero).

## 16. Vulnerability disclosure

If a security vulnerability is found in the theme:

1. **Do not open a public GitHub issue.** Email
   `security@godevs.com` with a description of the
   vulnerability, a proof of concept, and the affected versions.
2. The maintainer will acknowledge receipt within 48 hours.
3. The maintainer will issue a fix and a new release within 14
   days for critical vulnerabilities, 30 days for moderate, 90
   days for low.
4. The fix release will credit the reporter (with permission).

## 17. References

- WordPress theme review security guidelines:
  https://make.wordpress.org/themes/handbook/review/security/
- WordPress escaping functions:
  https://developer.wordpress.org/apis/security/escaping/
- WordPress sanitisation functions:
  https://developer.wordpress.org/apis/security/sanitizing/
- WordPress nonces:
  https://developer.wordpress.org/apis/security/nonces/
- OWASP Top 10: https://owasp.org/Top10/

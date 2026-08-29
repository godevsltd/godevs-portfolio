# Bundled fonts

GoDevs Portfolio bundles two open-licensed font families in this directory:

| Family | Designer / Foundry | License |
|--------|---------------------|---------|
| Inter  | Rasmus Andersson   | SIL Open Font License 1.1 |
| Newsreader | Production Type  | SIL Open Font License 1.1 |

Both licenses permit free redistribution. A copy of each SIL OFL is shipped
alongside this README as `INTER-OFL.txt` and `NEWSREADER-OFL.txt`.

## Required files

`theme.json` declares `@font-face` rules pointing at the following files. The
theme will not load its fonts until these files are present:

```
inter-400.woff2
inter-500.woff2
inter-600.woff2
inter-700.woff2
newsreader-500.woff2
newsreader-600.woff2
newsreader-500-italic.woff2
```

`functions.php` also preloads `inter-400.woff2`, `inter-500.woff2`, and
`newsreader-500.woff2` via `<link rel="preload">` for LCP optimisation.

## How to fetch the woff2 files

The most reproducible way to fetch woff2 files licensed for redistribution is
via the `@fontsource` packages — they bundle the same Google Fonts binaries
that ship under the SIL OFL.

```bash
# Inside a scratch npm project:
npm install @fontsource/inter @fontsource/newsreader
# Then copy the relevant woff2 files from
#   node_modules/@fontsource/inter/files/
#   node_modules/@fontsource/newsreader/files/
# into this directory with the file names above.
```

The exact file names are used because `theme.json` fontFace entries reference
them by name. If you prefer Google's CSS API, the same binaries can be
downloaded with the modern User-Agent header (Chrome) which serves woff2.

## Why we do not use Google Fonts CDN

Loading fonts from `fonts.googleapis.com` adds a third-party DNS lookup and a
render-blocking stylesheet request — both hurt LCP and violate the
WordPress.org external-resources guideline for block themes. Bundling the
woff2 files keeps everything self-hosted and compliant.

## Variable fonts?

Inter and Newsreader both ship variable-font variants. We deliberately use
static instances for v0.1 — static woff2 files are smaller per weight and
avoid the CSS range-resolution complexity required by variable fonts. The
font system can be upgraded to variable fonts in a later phase without
breaking user content.

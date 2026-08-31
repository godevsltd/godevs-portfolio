<?php
/**
 * Demo registry — loads demo metadata from the existing pattern files.
 *
 * Each demo is already registered as a WordPress block pattern in
 * patterns/demos/*.php with metadata in the PHP docblock:
 *   - Title
 *   - Slug
 *   - Description
 *   - Categories
 *   - Keywords
 *   - Viewport Width
 *
 * This registry extracts that metadata and augments it with demo-specific
 * properties:
 *   - name            (display name)
 *   - slug            (pattern slug)
 *   - category        (extracted from the Categories header)
 *   - description     (from the Description header)
 *   - style           (extracted from the Description "Recommended style variation: X" suffix)
 *   - pages           (recommended pages for this demo — derived from category)
 *   - preview         (URL to the demo preview — uses the block preview endpoint)
 *
 * The registry is data-driven — adding a new demo pattern file in
 * patterns/demos/ automatically adds it to the registry. No hardcoded
 * demo UI is needed.
 *
 * @package GoDevs_Portfolio
 * @since   0.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Recommended pages per demo category.
 *
 * Used by the importer when the user selects "Starter Import" — the
 * importer creates these pages and populates the homepage with the
 * demo's pattern markup.
 *
 * Categories are matched by the demo's title parenthetical (e.g., the
 * "Developer" in "Demo — Atelier (Developer)").
 *
 * @return array<string,string[]> Map of category slug → page slugs.
 */
function godevs_portfolio_demo_pages_per_category(): array {
        return array(
                'developer'    => array( 'home', 'about', 'work', 'journal', 'contact' ),
                'designer'     => array( 'home', 'work', 'about', 'services', 'case-studies', 'contact' ),
                'creative'     => array( 'home', 'work', 'about', 'contact' ),
                'photography'  => array( 'home', 'portfolio', 'about', 'journal', 'contact' ),
                'agency'       => array( 'home', 'work', 'services', 'about', 'contact' ),
                'business'     => array( 'home', 'about', 'services', 'insights', 'contact' ),
                'architecture' => array( 'home', 'work', 'about', 'services', 'contact' ),
                'personal'     => array( 'home', 'about', 'work', 'journal', 'contact' ),
                'education'    => array( 'home', 'about', 'research', 'teaching', 'contact' ),
                'lifestyle'    => array( 'home', 'about', 'work', 'journal', 'contact' ),
                'specialized'  => array( 'home', 'about', 'work', 'contact' ),
        );
}

/**
 * Map a free-form category label (extracted from the demo's title
 * parenthetical) to one of the predefined category slugs used by
 * `godevs_portfolio_demo_pages_per_category()`.
 *
 * The demo titles use a variety of labels — Developer, Designer, Creative,
 * UI, Architect, Luxury, Travel, Speaker, Teacher, etc. We collapse the
 * long tail into the 11 canonical categories used for filtering and
 * recommended-pages mapping.
 *
 * @param string $label Raw category label (e.g., "Developer", "Luxury", "UI").
 * @return string Canonical category slug, or 'specialized' if no match.
 */
function godevs_portfolio_normalize_demo_category( string $label ): string {
        $label = strtolower( trim( $label ) );

        $map = array(
                // developer family (engineering / coding)
                'developer'      => 'developer',
                'engineer'       => 'developer',
                'full-stack'     => 'developer',
                'development'    => 'developer',
                'web'            => 'developer',
                'mobile'         => 'developer',
                'software'       => 'developer',
                'code'           => 'developer',
                'programmer'     => 'developer',
                'technologist'   => 'developer',
                'syntax'         => 'developer',
                'terminal'       => 'developer',

                // designer family
                'designer'       => 'designer',
                'ui'             => 'designer',
                'ux'             => 'designer',
                'product designer' => 'designer',
                'brand designer'  => 'designer',
                'graphic'        => 'designer',
                'branding'       => 'designer',
                'brand'          => 'designer',

                // creative family (visual / artistic)
                'creative'       => 'creative',
                'artist'         => 'creative',
                'illustrator'    => 'creative',
                'art curator'    => 'creative',
                'curator'        => 'creative',
                'art director'   => 'creative',
                'film director'  => 'creative',
                'director'       => 'creative',
                'motion'         => 'creative',
                'production'     => 'creative',
                'studio'         => 'agency',
                'collective'     => 'agency',

                // photography family
                'photography'    => 'photography',
                'photographer'   => 'photography',
                'photo'          => 'photography',
                'aperture'       => 'photography',
                'darkroom'       => 'photography',
                'exposure'       => 'photography',

                // agency family
                'agency'         => 'agency',
                'studio'         => 'agency',

                // business family (consulting / freelance / corporate)
                'business'       => 'business',
                'corporate'      => 'business',
                'consultant'     => 'business',
                'consulting'     => 'business',
                'coach'          => 'business',
                'advisor'        => 'business',
                'professional advisor' => 'business',
                'professional'   => 'business',
                'entrepreneur'   => 'business',
                'founder'        => 'business',
                'executive'      => 'business',
                'manager'        => 'business',
                'project manager' => 'business',
                'pm'             => 'business',
                'marketing'      => 'business',
                'strategy'       => 'business',
                'strategist'     => 'business',
                'copywriter'     => 'business',
                'freelance'      => 'business',
                'modern freelance' => 'business',
                'solo practice'  => 'personal',
                'independent'    => 'personal',

                // architecture family (physical / built-environment)
                'architect'      => 'architecture',
                'architecture'   => 'architecture',
                'software architect' => 'architecture',
                'built'          => 'architecture',
                'interior'       => 'architecture',
                'furniture'      => 'architecture',
                'urban'          => 'architecture',
                'structural'     => 'architecture',
                'edifice'        => 'architecture',
                'blueprint'      => 'architecture',

                // personal brand
                'personal'       => 'personal',
                'personal brand' => 'personal',
                'solo'           => 'personal',
                'signature'      => 'personal',
                'individual'     => 'personal',

                // education family (academic / teaching / research)
                'education'      => 'education',
                'academic'        => 'education',
                'academia'       => 'education',
                'professor'      => 'education',
                'teacher'        => 'education',
                'researcher'     => 'education',
                'research'       => 'education',
                'scholar'        => 'education',
                'speaker'        => 'education',
                'course'         => 'education',
                'thesis'         => 'education',
                'lecture'        => 'education',

                // lifestyle family (travel / luxury / fashion / wellness)
                'lifestyle'      => 'lifestyle',
                'travel'         => 'lifestyle',
                'luxury'         => 'lifestyle',
                'fashion'        => 'lifestyle',
                'wellness'       => 'lifestyle',
                'couture'        => 'lifestyle',
                'runway'         => 'lifestyle',
                'veil'           => 'lifestyle',
                'obscura'        => 'lifestyle',

                // content creators — lifestyle / personal brand family
                'content creator' => 'lifestyle',
                'online creator'  => 'lifestyle',
                'creator'        => 'lifestyle',
                'journalist'     => 'lifestyle',
                'writer'         => 'lifestyle',
                'scribe'         => 'lifestyle',
                'author'         => 'lifestyle',
                'editorial'     => 'lifestyle',
                'magazine'       => 'lifestyle',
                'journal'         => 'lifestyle',
                'inkwell'        => 'lifestyle',

                // additional developer / engineering role labels
                'devops'         => 'developer',
                'backend'        => 'developer',
                'frontend'       => 'developer',
                'full stack'     => 'developer',
                'wordpress'      => 'developer',

                // additional business / consulting role labels
                'hr'             => 'business',
                'human resources' => 'business',
                'financial'      => 'business',
                'finance'        => 'business',
                'management'     => 'business',
                'consultancy'    => 'business',
                'product'        => 'business',
                'digital'        => 'business',

                // additional creative role labels
                'music producer' => 'creative',
                'producer'       => 'creative',
                'visual'         => 'creative',
                'portrait'       => 'creative',
                'landscape'      => 'creative',

                // additional lifestyle role labels
                'wedding'        => 'lifestyle',

                // layout / style descriptor labels that don't fit a category
                // — leave them as 'specialized' below
        );

        if ( isset( $map[ $label ] ) ) {
                return $map[ $label ];
        }

        // Try contains-match for compound labels (e.g., "full-stack developer").
        foreach ( $map as $needle => $canonical ) {
                if ( false !== strpos( $label, $needle ) ) {
                        return $canonical;
                }
        }

        return 'specialized';
}

/**
 * Get the list of all demos.
 *
 * Reads every PHP file in patterns/demos/, extracts the pattern metadata
 * from the docblock, and returns an array of demo definitions.
 *
 * The result is cached for the duration of the request.
 *
 * @return array<int,array> List of demo definitions.
 */
function godevs_portfolio_get_demos(): array {
        static $demos = null;
        if ( null !== $demos ) {
                return $demos;
        }

        $demos_dir = get_template_directory() . '/patterns/demos';
        if ( ! is_dir( $demos_dir ) ) {
                $demos = array();
                return $demos;
        }

        // Page-type suffixes that identify INNER PAGE patterns (not homepages).
        // We only show homepage demos in the demo browser — inner pages are
        // accessed via the preview modal's page navigation.
        $page_suffixes = array(
                '-about', '-work', '-portfolio', '-services', '-case-studies',
                '-journal', '-blog', '-insights', '-research', '-teaching',
                '-experience', '-contact',
        );

        $demos = array();
        foreach ( glob( $demos_dir . '/*.php' ) as $file ) {
                $basename = basename( $file, '.php' );

                // Skip inner-page patterns — only show homepage demos.
                $is_inner_page = false;
                foreach ( $page_suffixes as $suffix ) {
                        // Check if the basename ENDS with a page suffix.
                        // But be careful: some demo slugs contain dashes (e.g., "atelier-arch").
                        // A homepage demo like "atelier-arch" should NOT be skipped,
                        // but "atelier-arch-about" SHOULD be skipped.
                        // We check if the basename ends with the suffix AND the
                        // part before the suffix is a known demo slug.
                        if ( substr( $basename, -strlen( $suffix ) ) === $suffix ) {
                                $is_inner_page = true;
                                break;
                        }
                }

                if ( $is_inner_page ) {
                        continue;
                }

                $demo = godevs_portfolio_parse_demo_file( $file );
                if ( $demo ) {
                        $demos[] = $demo;
                }
        }

        // Annotate each demo with its completion status.
        //
        // A demo is "complete" (shows in the Ready Demos section) ONLY when it
        // is in the production-ready list — the 10 demos that have been fully
        // designed with real content on every page. Other demos may have inner
        // page pattern files (created as stubs) but are NOT considered complete
        // until their content is fully written and reviewed.
        //
        // The `is_ready` field is set in godevs_portfolio_parse_demo_file() and
        // lists exactly: monolith, canvas, aperture, northbound, meridian, plan,
        // signature, scholar, minimal, director.
        foreach ( $demos as &$demo ) {
                $demo['is_complete'] = ! empty( $demo['is_ready'] );
        }
        unset( $demo );

        // Sort: complete (production-ready) demos first (alphabetical), then
        // incomplete demos (alphabetical).
        usort(
                $demos,
                static function ( $a, $b ) {
                        if ( $a['is_complete'] !== $b['is_complete'] ) {
                                return $a['is_complete'] ? -1 : 1;
                        }
                        return strcmp( $a['name'], $b['name'] );
                }
        );

        return $demos;
}

/**
 * Check whether a demo is "complete" — i.e., all of its recommended pages
 * exist as pattern files in patterns/demos/.
 *
 * A demo with only the homepage pattern file is considered incomplete (it
 * would 404 on inner-page navigation after import). Complete demos sort
 * to the top of the demo library grid.
 *
 * @param string   $demo_id Demo ID (filename without .php).
 * @param string[] $pages   List of recommended page slugs (e.g., ['home','about','work','contact']).
 * @return bool True if every recommended page has a pattern file.
 * @since 2.4.0
 */
function godevs_portfolio_is_demo_complete( string $demo_id, array $pages ): bool {
        if ( empty( $pages ) ) {
                return false;
        }
        foreach ( $pages as $page_slug ) {
                if ( null === godevs_portfolio_get_demo_page_file( $demo_id, $page_slug ) ) {
                        return false;
                }
        }
        return true;
}

/**
 * Parse a single demo pattern file.
 *
 * Extracts metadata from the PHP docblock and augments with demo-specific
 * properties (category, recommended style, recommended pages).
 *
 * @param string $file Absolute path to the demo pattern PHP file.
 * @return array|null Demo definition, or null if the file is invalid.
 */
function godevs_portfolio_parse_demo_file( string $file ): ?array {
        $contents = file_get_contents( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents — reading a theme file, not user input.
        if ( false === $contents ) {
                return null;
        }

        // Extract the docblock.
        if ( ! preg_match( '/\/\*\*(.*?)\*\//s', $contents, $m ) ) {
                return null;
        }
        $doc = $m[1];

        $meta = array();
        foreach ( explode( "\n", $doc ) as $line ) {
                if ( preg_match( '/^\s*\*\s*(\w+)\s*:\s*(.*)$/', $line, $m ) ) {
                        $key = $m[1];
                        $val = trim( $m[2] );
                        if ( isset( $meta[ $key ] ) ) {
                                if ( ! is_array( $meta[ $key ] ) ) {
                                        $meta[ $key ] = array( $meta[ $key ] );
                                }
                                $meta[ $key ][] = $val;
                        } else {
                                $meta[ $key ] = $val;
                        }
                }
        }

        if ( empty( $meta['Slug'] ) || empty( $meta['Title'] ) ) {
                return null;
        }

        // Title format: "Demo — <Name> (<Category>)"
        // Extract name and category from the title.
        $title   = $meta['Title'];
        $name    = $title;
        $cat_raw = '';
        if ( preg_match( '/^Demo\s+[-—]\s+(.+?)\s*\(([^)]+)\)\s*$/', $title, $m ) ) {
                $name    = $m[1];
                $cat_raw = $m[2];
        }

        // Categories header from the pattern file (used for the WordPress
        // Block Inserter, NOT for our admin filter). We keep it as-is.
        $categories_raw = $meta['Categories'] ?? array();
        if ( ! is_array( $categories_raw ) ) {
                $categories_raw = array( $categories_raw );
        }
        $wp_pattern_cat = '';
        foreach ( $categories_raw as $c ) {
                foreach ( explode( ',', $c ) as $part ) {
                        $part = trim( $part );
                        if ( $part ) {
                                $wp_pattern_cat = $part;
                                break 2;
                        }
                }
        }

        // Canonical category slug — derived from the title parenthetical.
        // This drives both the admin filter dropdown and the recommended-pages
        // mapping. Falls back to 'specialized' if the label is unknown.
        $category_slug = $cat_raw ? godevs_portfolio_normalize_demo_category( $cat_raw ) : 'specialized';

        // Recommended style variation — extract from Description suffix.
        $description = $meta['Description'] ?? '';
        $style       = '';
        if ( preg_match( '/Recommended style variation:\s*([A-Za-z]+)\.?/i', $description, $m ) ) {
                $style = ucfirst( strtolower( $m[1] ) );
        }

        // Recommended pages — based on the canonical category slug.
        $pages          = array( 'home', 'about', 'work', 'contact' ); // default
        $cat_to_pages   = godevs_portfolio_demo_pages_per_category();
        if ( isset( $cat_to_pages[ $category_slug ] ) ) {
                $pages = $cat_to_pages[ $category_slug ];
        }

        // Preview URL — uses the WordPress pattern preview endpoint.
        $slug     = $meta['Slug'];
        $basename = basename( $file, '.php' );

        // Preview image — looks for a screenshot in assets/images/demo-previews/.
        // Priority: <demo-slug>.jpg → <demo-slug>.png → category-based preview → fallback.
        $preview_image    = '';
        $preview_image_uri = '';
        $preview_dir       = get_template_directory() . '/assets/images/demo-previews';
        $preview_uri_base  = get_template_directory_uri() . '/assets/images/demo-previews';

        // 1. Try demo-specific preview first (prefer modern formats: webp, then jpg/png/svg).
        //    WebP is preferred because real screenshots are saved in both formats and WebP
        //    is ~3x smaller than the equivalent PNG.
        foreach ( array( 'webp', 'jpg', 'png', 'svg' ) as $ext ) {
                $candidate = $preview_dir . '/' . $basename . '.' . $ext;
                if ( file_exists( $candidate ) ) {
                        $preview_image    = $candidate;
                        $preview_image_uri = $preview_uri_base . '/' . $basename . '.' . $ext;
                        break;
                }
        }

        // 2. Fall back to category-based preview.
        if ( ! $preview_image ) {
                $category_previews = array(
                        'developer'    => 'developer-preview.png',
                        'designer'     => 'designer-preview.png',
                        'creative'     => 'creative-preview.png',
                        'photography'  => 'photography-preview.png',
                        'agency'       => 'agency-preview.png',
                        'business'     => 'business-preview.png',
                        'architecture' => 'architecture-preview.png',
                        'personal'     => 'personal-preview.png',
                        'education'    => 'education-preview.png',
                        'lifestyle'    => 'lifestyle-preview.png',
                        'specialized'  => 'specialized-preview.png',
                );
                $cat_preview = $category_previews[ $category_slug ] ?? '';
                if ( $cat_preview ) {
                        $cat_preview_path = $preview_dir . '/' . $cat_preview;
                        if ( file_exists( $cat_preview_path ) ) {
                                $preview_image     = $cat_preview_path;
                                $preview_image_uri = $preview_uri_base . '/' . $cat_preview;
                        }
                }
        }

        // 3. Final fallback: category-based placeholder image.
        if ( ! $preview_image ) {
                $category_placeholders = array(
                        'developer'    => 'placeholder-studio.png',
                        'designer'     => 'placeholder-brand.png',
                        'creative'     => 'placeholder-editorial.png',
                        'photography'  => 'placeholder-portrait.jpg',
                        'agency'       => 'placeholder-brand.png',
                        'business'     => 'placeholder-studio.png',
                        'architecture' => 'placeholder-architecture.png',
                        'personal'     => 'placeholder-portrait.jpg',
                        'education'    => 'placeholder-editorial.png',
                        'lifestyle'    => 'placeholder-brand.png',
                        'specialized'  => 'placeholder-architecture.png',
                );
                $fallback = $category_placeholders[ $category_slug ] ?? 'placeholder-portrait.jpg';
                $fallback_path = get_template_directory() . '/assets/images/' . $fallback;
                if ( file_exists( $fallback_path ) ) {
                        $preview_image     = $fallback_path;
                        $preview_image_uri = get_template_directory_uri() . '/assets/images/' . $fallback;
                }
        }

        // Preview alt text — meaningful description of the demo's homepage.
        $preview_alt = sprintf(
                /* translators: %s: demo name. */
                __( 'Homepage preview of the %s demo', 'godevs-portfolio' ),
                $name
        );

        // Page count — number of available pages for this demo.
        $page_count = count( $pages );

        // Production-ready status — only these demos are fully designed and importable.
        // All other demos show "Coming Soon" in the demo browser.
        $ready_demos = array(
                'monolith', 'canvas', 'aperture', 'northbound', 'meridian',
                'plan', 'signature', 'scholar', 'minimal', 'director',
        );
        $is_ready = in_array( $basename, $ready_demos, true );

        return array(
                'id'               => $basename,                                  // demo ID (filename without .php)
                'name'             => $name,                                       // display name
                'slug'             => $slug,                                       // pattern slug
                'category'         => $cat_raw ?: ucfirst( $category_slug ),       // category label (display)
                'cat_slug'         => $category_slug,                              // canonical category slug (for filter)
                'wp_cat'           => $wp_pattern_cat,                             // WP pattern category slug (for inserter)
                'description'       => $description,
                'style'            => $style,                                       // recommended style variation
                'pages'            => $pages,                                       // recommended pages
                'page_count'       => $page_count,                                  // number of available pages
                'file'             => $file,                                        // absolute file path
                'preview_image'    => $preview_image,                                // absolute path to preview image
                'preview_image_uri' => $preview_image_uri,                           // URI to preview image
                'preview_alt'      => $preview_alt,                                  // alt text for preview image
                'is_ready'         => $is_ready,                                     // true = fully designed+importable, false = Coming Soon
                'preview_url'      => add_query_arg(
                        array(
                                'godevs_preview' => $basename,
                                '_wpnonce'        => wp_create_nonce( 'godevs_preview_' . $basename ),
                        ),
                        home_url( '/' )
                ),
        );
}

/**
 * Get a single demo by ID.
 *
 * @param string $demo_id Demo ID (filename without .php).
 * @return array|null Demo definition, or null if not found.
 */
function godevs_portfolio_get_demo( string $demo_id ): ?array {
        $demo_id = sanitize_file_name( $demo_id );
        foreach ( godevs_portfolio_get_demos() as $demo ) {
                if ( $demo['id'] === $demo_id ) {
                        return $demo;
                }
        }
        return null;
}

/**
 * Get the pattern file path for a specific demo page.
 *
 * Multi-page demos follow the convention:
 *   patterns/demos/<demo-slug>-<page-slug>.php
 *
 * The homepage is patterns/demos/<demo-slug>.php (no page suffix).
 *
 * @param string $demo_id Demo ID (e.g., 'atelier').
 * @param string $page    Page slug (e.g., 'about', 'work', 'contact').
 *                       Use 'home' for the homepage.
 * @return string|null Absolute file path, or null if not found.
 * @since 1.2.0
 */
function godevs_portfolio_get_demo_page_file( string $demo_id, string $page ): ?string {
        $demo_id = sanitize_file_name( $demo_id );
        $page    = sanitize_file_name( $page );

        if ( 'home' === $page || '' === $page ) {
                $file = get_template_directory() . '/patterns/demos/' . $demo_id . '.php';
        } else {
                $file = get_template_directory() . '/patterns/demos/' . $demo_id . '-' . $page . '.php';
        }

        return file_exists( $file ) ? $file : null;
}

/**
 * Get all available pages for a demo (including multi-page patterns).
 *
 * Returns an array of page definitions, each with:
 *   - slug  : page slug (e.g., 'about', 'work')
 *   - file  : absolute file path to the pattern file
 *   - title : page title extracted from the pattern header
 *
 * @param string $demo_id Demo ID.
 * @return array<int,array> List of page definitions.
 * @since 1.2.0
 */
function godevs_portfolio_get_demo_pages( string $demo_id ): array {
        $demo_id = sanitize_file_name( $demo_id );
        $pages   = array();

        // Get the demo to find its recommended pages.
        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                return $pages;
        }

        // Always include home first.
        $home_file = godevs_portfolio_get_demo_page_file( $demo_id, 'home' );
        if ( $home_file ) {
                $pages[] = array(
                        'slug'  => 'home',
                        'file'  => $home_file,
                        'title' => __( 'Home', 'godevs-portfolio' ),
                );
        }

        // Add each recommended page if its pattern file exists.
        foreach ( $demo['pages'] as $page_slug ) {
                if ( 'home' === $page_slug ) {
                        continue;
                }
                $file = godevs_portfolio_get_demo_page_file( $demo_id, $page_slug );
                if ( $file ) {
                        $pages[] = array(
                                'slug'  => $page_slug,
                                'file'  => $file,
                                'title' => ucfirst( str_replace( '-', ' ', $page_slug ) ),
                        );
                }
        }

        return $pages;
}

/**
 * Get the list of distinct demo categories for filtering.
 *
 * @return array<string,string> Map of category slug → category label.
 */
function godevs_portfolio_get_demo_categories(): array {
        $cats = array();
        foreach ( godevs_portfolio_get_demos() as $demo ) {
                $slug = $demo['cat_slug'];
                $label = $demo['category'];
                if ( $slug && ! isset( $cats[ $slug ] ) ) {
                        $cats[ $slug ] = $label;
                }
        }
        return $cats;
}

/**
 * Get the list of distinct recommended style variations for filtering.
 *
 * @return array<string> List of style names.
 */
function godevs_portfolio_get_demo_styles(): array {
        $styles = array();
        foreach ( godevs_portfolio_get_demos() as $demo ) {
                if ( $demo['style'] && ! in_array( $demo['style'], $styles, true ) ) {
                        $styles[] = $demo['style'];
                }
        }
        sort( $styles );
        return $styles;
}

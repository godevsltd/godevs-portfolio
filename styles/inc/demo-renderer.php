<?php
/**
 * Live demo renderer — serves fully-rendered HTML5 documents for iframe preview.
 *
 * This file ports the Python `scripts/render-demo-html.py` logic to PHP so
 * that the admin preview modal can load a real, styled page in an `<iframe>`
 * instead of injecting raw block markup into a div (which had no CSS context).
 *
 * The renderer:
 *   1. Reads the demo pattern file (homepage or inner page)
 *   2. Strips the PHP docblock + ABSPATH exit guard
 *   3. Replaces `<?php echo esc_url(get_template_directory_uri() . '/path'); ?>`
 *      calls with real URLs to the theme's asset files
 *   4. Resolves `<!-- wp:template-part {"slug":"xxx"} /-->` by inlining the
 *      corresponding `parts/xxx.html` file (recursive)
 *   5. Replaces dynamic block stubs (wp:site-logo, wp:navigation, wp:site-title,
 *      wp:social-icons) with placeholder HTML
 *   6. Expands `var:preset|spacing|40` references into `var(--wp--preset--spacing--40)`
 *   7. Fixes wp:cover block elements with inline absolute positioning
 *   8. Wraps the result in an HTML5 document with the Inter webfont, theme.css,
 *      and CSS variables derived from theme.json
 *
 * @package GoDevs_Portfolio
 * @since   2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Render a single demo page as a complete HTML5 document.
 *
 * @param string $demo_id Demo ID (filename without .php).
 * @param string $page    Page slug ('home', 'about', 'work', etc.).
 * @return string Complete HTML5 document, or empty string on failure.
 */
function godevs_portfolio_render_demo_html( string $demo_id, string $page ): string {
        $demo_id = sanitize_file_name( $demo_id );
        $page    = sanitize_file_name( $page );

        if ( 'home' === $page || '' === $page ) {
                $file = get_template_directory() . '/patterns/demos/' . $demo_id . '.php';
        } else {
                $file = get_template_directory() . '/patterns/demos/' . $demo_id . '-' . $page . '.php';
        }

        if ( ! file_exists( $file ) ) {
                return '';
        }

        $text = file_get_contents( $file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents — reading a theme file.
        if ( false === $text ) {
                return '';
        }

        // 1. Strip PHP docblock + ABSPATH exit guard.
        $text = godevs_portfolio_render_strip_php_header( $text );

        // 2. Replace PHP echoes with real theme URLs.
        $text = godevs_portfolio_render_replace_php_echoes( $text );

        // 3. Resolve template-part references (recursive).
        $text = godevs_portfolio_render_resolve_template_parts( $text );

        // 4. Replace dynamic block stubs.
        $text = godevs_portfolio_render_replace_dynamic_blocks( $text );

        // 5. Expand preset references in inline styles.
        $text = godevs_portfolio_render_expand_preset_refs( $text );

        // 6. Fix cover block elements with inline absolute positioning.
        $text = godevs_portfolio_render_fix_cover_blocks( $text );

        // 7. Wrap in HTML5 document.
        return godevs_portfolio_render_wrap_html( $text, $demo_id, $page );
}

/**
 * Strip the PHP docblock + ABSPATH exit guard at the top of demo files.
 */
function godevs_portfolio_render_strip_php_header( string $text ): string {
        $pattern = '/^<\?php\s*\/\*\*.?\*\/\s*if\s*\(\s*!\s*defined\(\s*[\'"]ABSPATH[\'"]\s*\)\s*\)\s*\{[^}]*\}\s*\?>\s*/s';
        return preg_replace( $pattern, '', $text, 1 );
}

/**
 * Replace `<?php echo esc_url(get_template_directory_uri() . '/path'); ?>`
 * with real URLs to theme asset files.
 */
function godevs_portfolio_render_replace_php_echoes( string $text ): string {
        $pattern = '/<\?php\s+echo\s+esc_url\(\s*get_template_directory_uri\(\)\s*\.\s*\'([^\']+)\'\s*\)\s*;\s*\?>/';
        return preg_replace_callback(
                $pattern,
                static function ( $m ) {
                        $asset_path = ltrim( $m[1], '/' );
                        return esc_url( get_template_directory_uri() . '/' . $asset_path );
                },
                $text
        );
}

/**
 * Resolve `<!-- wp:template-part {"slug":"xxx"} /-->` by inlining parts/xxx.html.
 * Recursive — parts that reference other parts are resolved too.
 */
function godevs_portfolio_render_resolve_template_parts( string $text, int $depth = 0 ): string {
        if ( $depth > 5 ) {
                return $text;
        }

        $pattern = '/<!--\s*wp:template-part\s+\{"slug":"([^"]+)","theme":"godevs-portfolio"[^}]*\}\s*\/?-->/';

        return preg_replace_callback(
                $pattern,
                static function ( $m ) use ( $depth ) {
                        $slug      = $m[1];
                        $part_path = get_template_directory() . '/parts/' . $slug . '.html';
                        if ( ! file_exists( $part_path ) ) {
                                return "<!-- template-part {$slug} not found -->";
                        }
                        $part_content = file_get_contents( $part_path ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
                        if ( false === $part_content ) {
                                return '';
                        }
                        // Recursively resolve nested template-parts.
                        $part_content = godevs_portfolio_render_resolve_template_parts( $part_content, $depth + 1 );
                        // Replace PHP echoes inside the part.
                        $part_content = godevs_portfolio_render_replace_php_echoes( $part_content );
                        // Replace dynamic blocks inside the part.
                        $part_content = godevs_portfolio_render_replace_dynamic_blocks( $part_content );
                        return $part_content;
                },
                $text
        );
}

/**
 * Replace dynamic WordPress blocks (site-logo, navigation, site-title,
 * social-icons) with placeholder HTML so static rendering shows layout.
 */
function godevs_portfolio_render_replace_dynamic_blocks( string $text ): string {
        // wp:site-logo → placeholder logo (dark square with rounded corners).
        $text = preg_replace_callback(
                '/<!--\s*wp:site-logo\s+(\{[^}]*\})\s*\/?-->/',
                static function ( $m ) {
                        $width = 36;
                        if ( preg_match( '/"width":(\d+)/', $m[1], $wm ) ) {
                                $width = (int) $wm[1];
                        }
                        return '<div style="width:' . $width . 'px;height:' . $width . 'px;background:#0A0A0A;border-radius:6px;display:inline-block;flex-shrink:0"></div>';
                },
                $text
        );
        $text = preg_replace(
                '/<!--\s*wp:site-logo\s*\/?-->/',
                '<div style="width:36px;height:36px;background:#0A0A0A;border-radius:6px;display:inline-block;flex-shrink:0"></div>',
                $text
        );

        // wp:site-title → "GoDevs" wordmark.
        $text = preg_replace(
                '/<!--\s*wp:site-title(?:\s+\{[^}]*\})?\s*\/?-->/',
                '<span style="font-weight:600;font-size:1.125rem;letter-spacing:-0.01em">GoDevs</span>',
                $text
        );

        // wp:navigation → placeholder nav with generic items.
        $nav_html = '<nav style="display:flex;align-items:center;gap:0">'
                . '<a href="#" style="color:inherit;text-decoration:none;font-size:0.9375rem;font-weight:500;margin-left:32px;opacity:0.85">Home</a>'
                . '<a href="#" style="color:inherit;text-decoration:none;font-size:0.9375rem;font-weight:500;margin-left:32px;opacity:0.85">About</a>'
                . '<a href="#" style="color:inherit;text-decoration:none;font-size:0.9375rem;font-weight:500;margin-left:32px;opacity:0.85">Work</a>'
                . '<a href="#" style="color:inherit;text-decoration:none;font-size:0.9375rem;font-weight:500;margin-left:32px;opacity:0.85">Contact</a>'
                . '</nav>';
        $text = preg_replace(
                '/<!--\s*wp:navigation(?:\s+\{[^}]*\})?\s*\/?-->/',
                $nav_html,
                $text
        );

        // wp:social-icons → placeholder row of social dots.
        $social_html = '<ul style="list-style:none;padding:0;margin:0;display:flex">'
                . '<li style="display:inline-block;width:32px;height:32px;background:currentColor;border-radius:999px;opacity:0.7;margin-right:12px;text-align:center;line-height:32px;font-size:12px;color:#fff">X</li>'
                . '<li style="display:inline-block;width:32px;height:32px;background:currentColor;border-radius:999px;opacity:0.7;margin-right:12px;text-align:center;line-height:32px;font-size:12px;color:#fff">in</li>'
                . '<li style="display:inline-block;width:32px;height:32px;background:currentColor;border-radius:999px;opacity:0.7;margin-right:12px;text-align:center;line-height:32px;font-size:12px;color:#fff">GH</li>'
                . '<li style="display:inline-block;width:32px;height:32px;background:currentColor;border-radius:999px;opacity:0.7;text-align:center;line-height:32px;font-size:12px;color:#fff">Be</li>'
                . '</ul>';
        $text = preg_replace(
                '/<!--\s*wp:social-icons(?:\s+\{[^}]*\})?\s*\/?-->/',
                $social_html,
                $text
        );

        // wp:social-link → empty (handled by parent social-icons replacement).
        $text = preg_replace(
                '/<!--\s*wp:social-link(?:\s+\{[^}]*\})?\s*\/?-->/',
                '',
                $text
        );

        return $text;
}

/**
 * Expand `var:preset|spacing|40` references into `var(--wp--preset--spacing--40)`.
 */
function godevs_portfolio_render_expand_preset_refs( string $text ): string {
        $pattern = '/var:preset\|(spacing|color|font-family|font-size|font-weight|line-height|shadow)\|([\w-]+)/';
        return preg_replace_callback(
                $pattern,
                static function ( $m ) {
                        return 'var(--wp--preset--' . $m[1] . '--' . $m[2] . ')';
                },
                $text
        );
}

/**
 * Fix wp:cover block elements with inline position:absolute styling.
 *
 * The global `img { max-width:100%; height:auto }` reset would otherwise
 * override our CSS rules in some browsers.
 */
function godevs_portfolio_render_fix_cover_blocks( string $text ): string {
        // Fix cover background image: add inline absolute positioning.
        $text = preg_replace_callback(
                '/(<img class="wp-block-cover__image-background"[^>]*?)(\/?>)/s',
                static function ( $m ) {
                        $before = $m[1];
                        $after  = $m[2];
                        $inline = 'position:absolute !important;inset:0 !important;width:100% !important;height:100% !important;max-width:none !important;object-fit:cover !important;z-index:0 !important';
                        if ( false !== strpos( $before, 'style="' ) ) {
                                return preg_replace( '/style="([^"]*)"/', 'style="$1;' . $inline . '"', $before, 1 ) . $after;
                        }
                        return $before . ' style="' . $inline . '"' . $after;
                },
                $text
        );

        // Fix cover background overlay span: add inline absolute positioning + opacity.
        $text = preg_replace_callback(
                '/(<span[^>]*class="wp-block-cover__background[^"]*"[^>]*?)(\/?>)/s',
                static function ( $m ) {
                        $before = $m[1];
                        $after  = $m[2];
                        $opacity = 1;
                        if ( preg_match( '/has-background-dim-(\d+)/', $before, $dm ) ) {
                                $opacity = (int) $dm[1] / 100;
                        }
                        $inline = 'position:absolute !important;inset:0 !important;z-index:1 !important;opacity:' . $opacity . ' !important;background-color:#0A0A0A !important';
                        if ( false !== strpos( $before, 'style="' ) ) {
                                return preg_replace( '/style="([^"]*)"/', 'style="$1;' . $inline . '"', $before, 1 ) . $after;
                        }
                        return $before . ' style="' . $inline . '"' . $after;
                },
                $text
        );

        // Fix cover inner container: add inline relative positioning.
        $text = preg_replace_callback(
                '/(<div class="wp-block-cover__inner-container")(\/?>)/s',
                static function ( $m ) {
                        return $m[1] . ' style="position:relative !important;z-index:2 !important;width:100%;max-width:1280px;margin:0 auto;padding:0 2rem"' . $m[2];
                },
                $text
        );

        return $text;
}

/**
 * Build a `:root { --wp--preset--*: ... }` CSS block from theme.json.
 */
function godevs_portfolio_render_build_css_vars(): string {
        $theme_json_path = get_template_directory() . '/theme.json';
        if ( ! file_exists( $theme_json_path ) ) {
                return '';
        }
        $theme = json_decode( file_get_contents( $theme_json_path ), true ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
        if ( ! is_array( $theme ) ) {
                return '';
        }

        $lines = array( ':root {' );

        // Color palette.
        foreach ( $theme['settings']['color']['palette'] as $color ) {
                $lines[] = '  --wp--preset--color--' . $color['slug'] . ': ' . $color['color'] . ';';
        }

        // Font families.
        foreach ( $theme['settings']['typography']['fontFamilies'] as $ff ) {
                $lines[] = '  --wp--preset--font-family--' . $ff['slug'] . ': ' . $ff['fontFamily'] . ';';
        }

        // Font sizes (use the max fluid value or the size value).
        foreach ( $theme['settings']['typography']['fontSizes'] as $fs ) {
                $size = isset( $fs['fluid'] ) ? $fs['fluid']['max'] : $fs['size'];
                $lines[] = '  --wp--preset--font-size--' . $fs['slug'] . ': ' . $size . ';';
        }

        // Spacing sizes.
        foreach ( $theme['settings']['spacing']['spacingSizes'] as $sp ) {
                $lines[] = '  --wp--preset--spacing--' . $sp['slug'] . ': ' . $sp['size'] . ';';
        }

        // Shadow presets.
        foreach ( $theme['settings']['shadow']['presets'] as $sh ) {
                $lines[] = '  --wp--preset--shadow--' . $sh['slug'] . ': ' . $sh['shadow'] . ';';
        }

        // Motion tokens.
        $motion = $theme['settings']['custom']['motion'];
        $lines[] = '  --wp--custom--motion--duration--fast: ' . $motion['duration']['fast'] . ';';
        $lines[] = '  --wp--custom--motion--duration--base: ' . $motion['duration']['base'] . ';';
        $lines[] = '  --wp--custom--motion--duration--slow: ' . $motion['duration']['slow'] . ';';
        $lines[] = '  --wp--custom--motion--ease: ' . $motion['ease'] . ';';

        // Layout.
        $layout = $theme['settings']['layout'];
        $lines[] = '  --wp--style--root--content-size: ' . $layout['contentSize'] . ';';
        $lines[] = '  --wp--style--root--wide-size: ' . $layout['wideSize'] . ';';

        // Root styles.
        $root_styles = $theme['styles'];
        $bg   = $root_styles['color']['background'];
        $text = $root_styles['color']['text'];
        $bg   = preg_replace( '/var:preset\|color\|/', 'var(--wp--preset--color--', $bg );
        if ( 0 === strpos( $bg, 'var(--wp--preset--color--' ) && ')' !== substr( $bg, -1 ) ) {
                $bg .= ')';
        }
        $text = preg_replace( '/var:preset\|color\|/', 'var(--wp--preset--color--', $text );
        if ( 0 === strpos( $text, 'var(--wp--preset--color--' ) && ')' !== substr( $text, -1 ) ) {
                $text .= ')';
        }

        $lines[] = '  --wp--preset--color--background: ' . $bg . ';';
        $lines[] = '  --wp--preset--color--text: ' . $text . ';';
        $lines[] = '}';
        $lines[] = '';
        $lines[] = 'body {';
        $lines[] = '  background: ' . $bg . ';';
        $lines[] = '  color: ' . $text . ';';
        $lines[] = '  font-family: var(--wp--preset--font-family--body);';
        $lines[] = '  font-size: var(--wp--preset--font-size--normal);';
        $lines[] = '  line-height: ' . $root_styles['typography']['lineHeight'] . ';';
        $lines[] = '  margin: 0;';
        $lines[] = '  padding: 0;';
        $lines[] = '}';

        return implode( "\n", $lines );
}

/**
 * Wrap rendered block markup in a complete HTML5 document.
 */
function godevs_portfolio_render_wrap_html( string $body_markup, string $demo_id, string $page ): string {
        $css_vars = godevs_portfolio_render_build_css_vars();

        // Read the theme CSS and expand preset refs in it.
        $theme_css_path = get_template_directory() . '/assets/css/theme.css';
        $theme_css      = file_exists( $theme_css_path ) ? file_get_contents( $theme_css_path ) : ''; // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
        $theme_css      = godevs_portfolio_render_expand_preset_refs( $theme_css );

        $page_titles = array(
                'home' => 'Home', 'about' => 'About', 'work' => 'Work', 'portfolio' => 'Portfolio',
                'services' => 'Services', 'case-studies' => 'Case Studies', 'journal' => 'Journal',
                'insights' => 'Insights', 'contact' => 'Contact', 'research' => 'Research',
                'teaching' => 'Teaching',
        );
        $page_title = $page_titles[ $page ] ?? ucfirst( $page );
        $title      = ucfirst( $demo_id ) . ' — ' . $page_title;

        // Static-render adjustments CSS (loaded from external file to avoid
        // brace-counting issues with PHP heredoc syntax in static audits).
        $static_css_path = get_template_directory() . '/assets/css/demo-preview.css';
        $static_css      = file_exists( $static_css_path ) ? file_get_contents( $static_css_path ) : ''; // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
        $static_css      = godevs_portfolio_render_expand_preset_refs( $static_css );

        // Use system fonts for the demo preview (no external CDN — WordPress.org compliant).
        $no_nav_js = '<script>document.addEventListener("click", function(e){if(e.target.tagName==="A"){e.preventDefault();}}, false);</script>';

        return '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>' . esc_html( $title ) . '</title>
<style>
' . $css_vars . '

/* Theme CSS (preset refs expanded) */
' . $theme_css . '

/* Static-render adjustments */
' . $static_css . '
</style>
</head>
<body>
' . $body_markup . '
' . $no_nav_js . '
</body>
</html>';
}

/**
 * AJAX endpoint: stream a fully-rendered demo page as text/html.
 *
 * Used by the admin preview modal's `<iframe src="...">`. Returns a complete
 * HTML5 document with the theme's CSS, fonts, and resolved template-parts so
 * the iframe shows the real rendered page (not raw block markup).
 *
 * URL: admin-ajax.php?action=godevs_render_demo_page&demo=<id>&page=<slug>&_wpnonce=<nonce>
 *
 * @return void Streams text/html.
 * @since 2.5.0
 */
function godevs_portfolio_ajax_render_demo_page_html(): void {
        // Verify nonce (allow either GET or POST).
        $nonce = isset( $_REQUEST['_wpnonce'] ) ? sanitize_key( wp_unslash( $_REQUEST['_wpnonce'] ) ) : '';
        if ( ! wp_verify_nonce( $nonce, 'godevs_render_demo_page' ) ) {
                status_header( 403 );
                wp_die( esc_html__( 'Nonce verification failed.', 'godevs-portfolio' ) );
        }

        // Capability check — preview is available to anyone who can edit_posts
        // (so editors can preview too, not just admins).
        if ( ! current_user_can( 'edit_posts' ) ) {
                status_header( 403 );
                wp_die( esc_html__( 'Insufficient permissions.', 'godevs-portfolio' ) );
        }

        $demo_id = isset( $_REQUEST['demo'] ) ? sanitize_file_name( wp_unslash( $_REQUEST['demo'] ) ) : '';
        $page    = isset( $_REQUEST['page'] ) ? sanitize_file_name( wp_unslash( $_REQUEST['page'] ) ) : 'home';

        if ( ! $demo_id ) {
                status_header( 400 );
                wp_die( esc_html__( 'Missing demo ID.', 'godevs-portfolio' ) );
        }

        // Verify the demo exists.
        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                status_header( 404 );
                wp_die( esc_html__( 'Demo not found.', 'godevs-portfolio' ) );
        }

        $html = godevs_portfolio_render_demo_html( $demo_id, $page );

        if ( '' === $html ) {
                status_header( 404 );
                wp_die( esc_html__( 'Could not render demo page.', 'godevs-portfolio' ) );
        }

        // Stream as text/html with a long cache lifetime (the rendered HTML
        // only changes when the theme updates — let the browser cache it).
        header( 'Content-Type: text/html; charset=utf-8' );
        header( 'Cache-Control: private, max-age=3600' );
        header( 'X-Content-Type-Options: nosniff' );

        echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — rendered from sanitized theme files, not user input.
        exit;
}
add_action( 'wp_ajax_godevs_render_demo_page', 'godevs_portfolio_ajax_render_demo_page_html' );

/**
 * Generate a nonce-protected URL for the iframe src.
 *
 * @param string $demo_id Demo ID.
 * @param string $page    Page slug.
 * @return string Full admin-ajax URL with nonce.
 */
function godevs_portfolio_render_demo_page_url( string $demo_id, string $page = 'home' ): string {
        return add_query_arg(
                array(
                        'action'   => 'godevs_render_demo_page',
                        'demo'     => sanitize_file_name( $demo_id ),
                        'page'     => sanitize_file_name( $page ),
                        '_wpnonce' => wp_create_nonce( 'godevs_render_demo_page' ),
                ),
                admin_url( 'admin-ajax.php' )
        );
}

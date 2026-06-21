<?php
/**
 * Kahel theme bootstrap.
 *
 * Registers theme supports, navigation menus, and front-end assets. Wireframe
 * templates live in /HTML during development; PHP templates will replace them
 * as the theme is ported to WordPress.
 *
 * @package Kahel
 * @since   1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme version.
 *
 * Bump when releasing asset or template changes that should bust caches.
 *
 * @since 1.0.0
 */
define( 'KAHEL_VERSION', '1.0.12' );

/**
 * Absolute path to the theme directory (trailing slash).
 *
 * @since 1.0.0
 */
define( 'KAHEL_DIR', get_template_directory() . '/' );

/**
 * Public URL to the theme directory (trailing slash).
 *
 * @since 1.0.0
 */
define( 'KAHEL_URI', get_template_directory_uri() . '/' );

/**
 * Register theme features and WordPress core integrations.
 *
 * Called on `after_setup_theme`. Add supports here rather than in templates
 * so third-party plugins can rely on consistent theme capabilities.
 *
 * @since 1.0.0
 *
 * @return void
 */
function kahel_setup() {
	// Make strings translatable from /languages.
	load_theme_textdomain( 'kahel', KAHEL_DIR . 'languages' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Featured images for story cards, hero blocks, and archives.
	add_theme_support( 'post-thumbnails' );

	// HTML5 markup for core components and comment forms.
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'search-form',
			'style',
			'script',
		)
	);

	// Block editor: wide/full alignments and responsive embeds.
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );

	// Feed links in <head>.
	add_theme_support( 'automatic-feed-links' );

	// Custom logo — swap dimensions once header markup is finalized in PHP.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 48,
			'width'       => 160,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Navigation locations used by header.php (mega menu walker can target `primary`).
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'kahel' ),
			'footer'  => __( 'Footer Navigation', 'kahel' ),
		)
	);
}
add_action( 'after_setup_theme', 'kahel_setup' );

/**
 * Set the global $content_width for embedded media and oEmbeds.
 *
 * @since 1.0.0
 *
 * @return void
 */
function kahel_content_width() {
	$GLOBALS['content_width'] = 720;
}
add_action( 'after_setup_theme', 'kahel_content_width', 0 );

/**
 * Register widget areas.
 *
 * Footer newsletter and sidebar slots can be wired to these IDs in footer.php.
 *
 * @since 1.0.0
 *
 * @return void
 */
function kahel_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'kahel' ),
			'id'            => 'footer-1',
			'description'   => __( 'Widgets in the footer brand column.', 'kahel' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'kahel_widgets_init' );

/**
 * Resolve a cache-busting version string for a theme asset.
 *
 * Uses the file modification time in development so CSS/JS updates apply
 * immediately. Falls back to KAHEL_VERSION when the file is missing.
 *
 * @since 1.0.0
 *
 * @param string $relative_path Path relative to the theme root, e.g. `assets/main.css`.
 *
 * @return string Version string safe for wp_enqueue_*().
 */
function kahel_asset_version( $relative_path ) {
	$absolute_path = KAHEL_DIR . ltrim( $relative_path, '/' );

	if ( is_readable( $absolute_path ) ) {
		return (string) filemtime( $absolute_path );
	}

	return KAHEL_VERSION;
}

/**
 * Add resource hints for performance (optional preconnect targets).
 *
 * Self-hosted fonts need no third-party hints. Hook remains for future CDN use.
 *
 * @since 1.0.0
 *
 * @param array  $urls          URLs to print for the relation type.
 * @param string $relation_type Relation type (e.g. `preconnect`, `dns-prefetch`).
 *
 * @return array
 */
function kahel_resource_hints( $urls, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		// Example: $urls[] = '//example-cdn.com';
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'kahel_resource_hints', 10, 2 );

/**
 * Customize excerpt length for archive and search story cards.
 *
 * @since 1.0.0
 *
 * @param int $length Default excerpt length in words.
 *
 * @return int
 */
function kahel_excerpt_length( $length ) {
	return 22;
}
add_filter( 'excerpt_length', 'kahel_excerpt_length' );

/**
 * Customize excerpt “read more” suffix.
 *
 * @since 1.0.0
 *
 * @param string $more Default suffix.
 *
 * @return string
 */
function kahel_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'kahel_excerpt_more' );

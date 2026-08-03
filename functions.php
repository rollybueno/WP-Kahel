<?php
/**
 * Kahel theme functions.
 *
 * @package Kahel
 * @since 0.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue front-end styles.
 *
 * style.css is theme metadata only — overrides live in assets/css/main.css.
 *
 * @since 0.1.0
 *
 * @return void
 */
function kahel_enqueue_styles() {
	wp_enqueue_style(
		'kahel-main',
		get_parent_theme_file_uri( 'assets/css/main.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_style_add_data(
		'kahel-main',
		'path',
		get_parent_theme_file_path( 'assets/css/main.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'kahel_enqueue_styles' );

/**
 * Theme supports.
 *
 * @since 0.1.0
 *
 * @return void
 */
function kahel_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/main.css' );
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'after_setup_theme', 'kahel_setup' );

/**
 * Register pattern categories before theme patterns load.
 *
 * @since 0.1.1
 *
 * @return void
 */
function kahel_register_pattern_categories() {
	register_block_pattern_category(
		'kahel',
		array(
			'label' => __( 'Kahel', 'kahel' ),
		)
	);
}
add_action( 'init', 'kahel_register_pattern_categories', 5 );

/**
 * Register theme block styles.
 *
 * @since 0.1.5
 *
 * @return void
 */
function kahel_register_block_styles() {
	register_block_style(
		'core/quote',
		array(
			'name'         => 'accent',
			'label'        => __( 'Accent', 'kahel' ),
			'inline_style' => '.wp-block-quote.is-style-accent{padding:var(--wp--preset--spacing--50);border-left:4px solid var(--wp--preset--color--orange);background:var(--wp--preset--color--cream);}',
		)
	);
}
add_action( 'init', 'kahel_register_block_styles' );

/**
 * Hide the single deck excerpt unless a manual excerpt is set.
 *
 * Prevents auto-generated excerpts from duplicating post content.
 * Also gates the page intro excerpt the same way.
 *
 * @since 0.1.0
 *
 * @param string   $block_content Rendered block HTML.
 * @param array    $block         Parsed block.
 * @return string
 */
function kahel_render_manual_excerpt_deck_only( $block_content, $block ) {
	if ( ! is_singular() ) {
		return $block_content;
	}

	$class_name = '';
	if ( ! empty( $block['attrs']['className'] ) ) {
		$class_name = (string) $block['attrs']['className'];
	}

	$is_gated = str_contains( $class_name, 'kahel-single-deck' )
		|| str_contains( $class_name, 'kahel-page-intro' );

	if ( ! $is_gated ) {
		return $block_content;
	}

	if ( ! has_excerpt() ) {
		return '';
	}

	return $block_content;
}
add_filter( 'render_block_core/post-excerpt', 'kahel_render_manual_excerpt_deck_only', 10, 2 );

/**
 * Exclude the current post from related Query Loop blocks.
 *
 * Runs against the post-template block; flag via query.kahelExcludeCurrent
 * or a kahel-related-query className.
 *
 * @since 0.1.0
 *
 * @param array    $query Array of WP_Query arguments.
 * @param WP_Block $block The block instance.
 * @return array
 */
function kahel_related_query_exclude_current( $query, $block ) {
	if ( ! is_singular() ) {
		return $query;
	}

	$should_exclude = ! empty( $block->context['query']['kahelExcludeCurrent'] );

	if ( ! $should_exclude ) {
		$attrs      = is_array( $block->attributes ) ? $block->attributes : array();
		$class_name = isset( $attrs['className'] ) ? (string) $attrs['className'] : '';
		$should_exclude = str_contains( $class_name, 'kahel-related-query' );
	}

	if ( ! $should_exclude ) {
		return $query;
	}

	$current_id = (int) get_queried_object_id();

	if ( ! $current_id ) {
		return $query;
	}

	$excluded              = isset( $query['post__not_in'] ) ? array_map( 'intval', (array) $query['post__not_in'] ) : array();
	$excluded[]            = $current_id;
	$query['post__not_in'] = array_values( array_unique( $excluded ) );

	return $query;
}
add_filter( 'query_loop_block_query_vars', 'kahel_related_query_exclude_current', 10, 2 );

/**
 * Match the archive prototype grid density (six stories per page).
 *
 * Inherited Query Loops use Reading Settings; this keeps the blog and
 * taxonomy archives aligned with HTML/archive.html.
 *
 * @since 0.1.6
 *
 * @param WP_Query $query Main query.
 * @return void
 */
function kahel_archive_posts_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( $query->is_home() || $query->is_category() || $query->is_tag() || $query->is_author() || $query->is_date() ) {
		$query->set( 'posts_per_page', 6 );
		$query->set( 'ignore_sticky_posts', true );
	}
}
add_action( 'pre_get_posts', 'kahel_archive_posts_per_page' );

/**
 * Estimate reading time in minutes for a post.
 *
 * @since 0.1.6
 *
 * @param int $post_id Post ID.
 * @return int
 */
function kahel_get_reading_time_minutes( $post_id = 0 ) {
	$post_id = $post_id ? (int) $post_id : (int) get_the_ID();
	$content = (string) get_post_field( 'post_content', $post_id );
	$words   = str_word_count( wp_strip_all_tags( $content ) );

	return max( 1, (int) ceil( $words / 200 ) );
}

/**
 * Append estimated reading time to archive story meta (prototype: "Food · 6 min read").
 *
 * @since 0.1.6
 *
 * @param string $block_content Rendered HTML.
 * @param array  $block         Parsed block.
 * @return string
 */
function kahel_render_archive_story_meta( $block_content, $block ) {
	$class_name = '';
	if ( ! empty( $block['attrs']['className'] ) ) {
		$class_name = (string) $block['attrs']['className'];
	}

	if ( ! str_contains( $class_name, 'kahel-archive-story-meta' ) ) {
		return $block_content;
	}

	$minutes = kahel_get_reading_time_minutes();
	$label   = sprintf(
		/* translators: %d: estimated reading time in minutes */
		_n( '%d min read', '%d min read', $minutes, 'kahel' ),
		$minutes
	);

	$text = trim( wp_strip_all_tags( $block_content ) );
	if ( '' === $text ) {
		return sprintf(
			'<p class="kahel-archive-story-meta has-utility-font-size">%s</p>',
			esc_html( $label )
		);
	}

	$suffix = ' · ' . esc_html( $label );

	if ( preg_match( '/<\/(p|div)>\s*$/', $block_content ) ) {
		return (string) preg_replace( '/<\/(p|div)>\s*$/', $suffix . '</$1>', $block_content, 1 );
	}

	return $block_content . $suffix;
}
add_filter( 'render_block_core/post-terms', 'kahel_render_archive_story_meta', 10, 2 );

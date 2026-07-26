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

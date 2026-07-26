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
 * Block themes do not load style.css automatically.
 *
 * @since 0.1.0
 *
 * @return void
 */
function kahel_enqueue_styles() {
	wp_enqueue_style(
		'kahel-style',
		get_parent_theme_file_uri( 'style.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_style_add_data(
		'kahel-style',
		'path',
		get_parent_theme_file_path( 'style.css' )
	);
}
add_action( 'wp_enqueue_scripts', 'kahel_enqueue_styles' );

/**
 * Load editor styles so footer classes match the front end.
 *
 * @since 0.1.0
 *
 * @return void
 */
function kahel_editor_style() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'kahel_editor_style' );

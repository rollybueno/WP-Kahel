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
 * Load editor styles so class overrides match the front end.
 *
 * @since 0.1.0
 *
 * @return void
 */
function kahel_editor_style() {
	add_editor_style( 'assets/css/main.css' );
}
add_action( 'after_setup_theme', 'kahel_editor_style' );

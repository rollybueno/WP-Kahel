<?php
/**
 * Title: Archive header
 * Slug: kahel/archive-header
 * Categories: kahel
 * Description: Stories archive page header with eyebrow, title, and intro.
 * Keywords: archive, stories, header
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.6
 */

?>
<!-- wp:group {"align":"wide","className":"kahel-archive-header","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide kahel-archive-header">
	<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
	<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'The complete archive', 'kahel' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"className":"kahel-archive-title","fontSize":"huge"} -->
	<h1 class="wp-block-heading kahel-archive-title has-huge-font-size"><?php esc_html_e( 'All stories.', 'kahel' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"kahel-archive-intro","fontSize":"lead"} -->
	<p class="kahel-archive-intro has-lead-font-size"><?php esc_html_e( 'Essays, conversations, recipes, and photographs about the details that give everyday life its shape.', 'kahel' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

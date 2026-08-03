<?php
/**
 * Title: Purpose band
 * Slug: kahel/page-purpose
 * Categories: kahel
 * Description: Dark purpose band with heading and supporting copy.
 * Keywords: page, purpose, about, ink
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.8
 */

?>
<!-- wp:group {"align":"full","className":"kahel-purpose","backgroundColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-purpose has-ink-background-color has-background">

	<!-- wp:columns {"align":"wide","className":"kahel-purpose-inner"} -->
	<div class="wp-block-columns alignwide kahel-purpose-inner">

		<!-- wp:column {"className":"kahel-purpose-heading"} -->
		<div class="wp-block-column kahel-purpose-heading">
			<!-- wp:paragraph {"className":"kahel-kicker kahel-purpose-kicker","textColor":"orange","fontSize":"caption"} -->
			<p class="kahel-kicker kahel-purpose-kicker has-orange-color has-text-color has-caption-font-size"><?php esc_html_e( 'Why Kahel exists', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"kahel-editorial-section-title kahel-purpose-title","textColor":"cream"} -->
			<h2 class="wp-block-heading kahel-editorial-section-title kahel-purpose-title has-cream-color has-text-color"><?php esc_html_e( 'A strong point of view, without a closed system.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kahel-purpose-body"} -->
		<div class="wp-block-column kahel-purpose-body">
			<!-- wp:paragraph {"className":"kahel-purpose-feature"} -->
			<p class="kahel-purpose-feature"><?php esc_html_e( 'Many flexible themes begin as a blank canvas. Kahel begins with a voice.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"kahel-purpose-copy"} -->
			<p class="kahel-purpose-copy"><?php esc_html_e( 'It offers a polished editorial direction from the moment it is activated, then lets you make it your own through the Site Editor. You keep the simplicity and portability of core WordPress blocks while gaining a thoughtful foundation for typography, color, rhythm, and storytelling.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<?php
/**
 * Title: Editorial hero
 * Slug: kahel/page-editorial-hero
 * Categories: kahel
 * Description: Two-column editorial hero with title emphasis and a meaning note.
 * Keywords: page, hero, editorial, about
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.8
 */

?>
<!-- wp:group {"align":"full","className":"kahel-editorial-hero-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-editorial-hero-section">

	<!-- wp:columns {"align":"wide","className":"kahel-editorial-hero"} -->
	<div class="wp-block-columns alignwide kahel-editorial-hero">

		<!-- wp:column {"className":"kahel-editorial-hero-copy"} -->
		<div class="wp-block-column kahel-editorial-hero-copy">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'A Filipino-inspired WordPress theme', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"kahel-editorial-title","fontSize":"huge"} -->
			<h1 class="wp-block-heading kahel-editorial-title has-huge-font-size"><?php echo wp_kses_post( __( 'Warm by nature.<br /><em>Bold by design.</em>', 'kahel' ) ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"kahel-editorial-lead","fontSize":"lead"} -->
			<p class="kahel-editorial-lead has-lead-font-size"><?php esc_html_e( 'Kahel gives writers, publishers, and creative teams a memorable editorial home—without asking them to trade the native WordPress experience for a page builder.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kahel-editorial-hero-aside"} -->
		<div class="wp-block-column kahel-editorial-hero-aside">
			<!-- wp:group {"className":"kahel-editorial-hero-note","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-editorial-hero-note">
				<!-- wp:paragraph {"className":"kahel-editorial-word"} -->
				<p class="kahel-editorial-word"><?php esc_html_e( 'kahel', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"kahel-editorial-note-meta"} -->
				<p class="kahel-editorial-note-meta"><strong><?php esc_html_e( 'Filipino', 'kahel' ); ?></strong> · <?php esc_html_e( 'orange', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"kahel-editorial-note-copy","fontSize":"small"} -->
				<p class="kahel-editorial-note-copy has-small-font-size"><?php esc_html_e( 'A familiar word. A vivid color. A starting point for a theme made with warmth, clarity, and character.', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

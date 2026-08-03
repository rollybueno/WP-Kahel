<?php
/**
 * Title: Origin split
 * Slug: kahel/page-origin-split
 * Categories: kahel
 * Description: Story split with fruit visual, copy, and quality tags.
 * Keywords: page, origin, story, split, about
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.8
 */

?>
<!-- wp:group {"align":"full","className":"kahel-origin-split-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-origin-split-section">

	<!-- wp:columns {"align":"wide","className":"kahel-origin-split"} -->
	<div class="wp-block-columns alignwide kahel-origin-split">

		<!-- wp:column {"className":"kahel-origin-visual-col"} -->
		<div class="wp-block-column kahel-origin-visual-col">
			<!-- wp:group {"className":"kahel-origin-visual","layout":{"type":"default"}} -->
			<div class="wp-block-group kahel-origin-visual">
				<!-- wp:html -->
				<div class="kahel-origin-fruit" role="img" aria-label="<?php echo esc_attr__( 'Abstract orange fruit composition', 'kahel' ); ?>"></div>
				<!-- /wp:html -->
				<!-- wp:paragraph {"className":"kahel-origin-label"} -->
				<p class="kahel-origin-label"><?php esc_html_e( '01 · Pinagmulan', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kahel-origin-copy"} -->
		<div class="wp-block-column kahel-origin-copy">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'The story in the name', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"kahel-editorial-section-title kahel-origin-title"} -->
			<h2 class="wp-block-heading kahel-editorial-section-title kahel-origin-title"><?php esc_html_e( 'Rooted in a word that feels like home.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"kahel-feature-text kahel-origin-feature"} -->
			<p class="kahel-feature-text kahel-origin-feature"><?php esc_html_e( 'Kahel takes its name from the Filipino word for orange. The connection is more than a color choice: it shapes the theme’s entire personality.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"kahel-origin-copy","textColor":"muted"} -->
			<p class="kahel-origin-copy has-muted-color has-text-color"><?php esc_html_e( 'Orange can be bright without being loud, familiar without being ordinary, and energetic without losing warmth. Kahel translates those qualities into confident type, sunlit color, generous space, and layouts that invite readers to stay awhile.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"kahel-origin-tags","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group kahel-origin-tags">
				<!-- wp:paragraph {"className":"kahel-origin-tag"} -->
				<p class="kahel-origin-tag"><?php esc_html_e( 'Warm', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-origin-tag"} -->
				<p class="kahel-origin-tag"><?php esc_html_e( 'Editorial', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-origin-tag"} -->
				<p class="kahel-origin-tag"><?php esc_html_e( 'Expressive', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-origin-tag"} -->
				<p class="kahel-origin-tag"><?php esc_html_e( 'Approachable', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

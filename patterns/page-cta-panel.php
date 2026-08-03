<?php
/**
 * Title: CTA panel
 * Slug: kahel/page-cta-panel
 * Categories: kahel
 * Description: Two-column call-to-action panel with primary button and text link.
 * Keywords: page, cta, call to action, about, panel
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.8
 */

?>
<!-- wp:group {"align":"full","className":"kahel-cta-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-cta-section" id="start">

	<!-- wp:columns {"align":"wide","className":"kahel-cta-panel","backgroundColor":"orange"} -->
	<div class="wp-block-columns alignwide kahel-cta-panel has-orange-background-color has-background">

		<!-- wp:column {"className":"kahel-cta-heading"} -->
		<div class="wp-block-column kahel-cta-heading">
			<!-- wp:paragraph {"className":"kahel-kicker kahel-cta-kicker","fontSize":"caption"} -->
			<p class="kahel-kicker kahel-cta-kicker has-caption-font-size"><?php esc_html_e( 'Start with warmth', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"kahel-editorial-section-title kahel-cta-title"} -->
			<h2 class="wp-block-heading kahel-editorial-section-title kahel-cta-title"><?php esc_html_e( 'Make your next story unmistakably yours.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kahel-cta-actions"} -->
		<div class="wp-block-column kahel-cta-actions">
			<!-- wp:paragraph {"className":"kahel-cta-copy"} -->
			<p class="kahel-cta-copy"><?php esc_html_e( 'Install Kahel, open the Site Editor, and shape a publication with a distinctly Filipino spark.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"kahel-cta-links","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group kahel-cta-links">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"ink","textColor":"cream","className":"kahel-cta-primary"} -->
					<div class="wp-block-button kahel-cta-primary"><a class="wp-block-button__link has-cream-color has-ink-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e( 'Download Kahel', 'kahel' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:paragraph {"className":"kahel-cta-text-link"} -->
				<p class="kahel-cta-text-link"><a href="#"><?php echo wp_kses_post( __( 'View the demo <span aria-hidden="true">→</span>', 'kahel' ) ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

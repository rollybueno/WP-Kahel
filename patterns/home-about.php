<?php
/**
 * Title: Home about
 * Slug: kahel/home-about
 * Categories: kahel
 * Description: About the journal with fruit visual, chips, and links.
 * Keywords: home, about, origin
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","className":"kahel-home-section kahel-home-about-section","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-section kahel-home-about-section has-surface-background-color has-background">

	<!-- wp:columns {"align":"wide","className":"kahel-home-about"} -->
	<div class="wp-block-columns alignwide kahel-home-about">

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"className":"kahel-home-about-visual","layout":{"type":"default"}} -->
			<div class="wp-block-group kahel-home-about-visual" role="img" aria-label="<?php esc_attr_e( 'Abstract orange fruit illustration', 'kahel' ); ?>">
				<!-- wp:html -->
				<span class="kahel-home-about-fruit" aria-hidden="true"></span>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","className":"kahel-home-about-copy"} -->
		<div class="wp-block-column kahel-home-about-copy" style="flex-basis:50%">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'About the journal', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-home-about-title","fontSize":"section"} -->
			<h2 class="wp-block-heading kahel-home-about-title has-section-font-size"><?php esc_html_e( 'A record of things worth noticing.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"kahel-home-about-copy-text","textColor":"muted","fontSize":"lead"} -->
			<p class="kahel-home-about-copy-text has-muted-color has-text-color has-lead-font-size"><?php esc_html_e( '“Kahel” is a familiar word for orange in the Philippines. It is also our reminder to pay attention: to color, season, memory, and the quiet knowledge held in everyday routines. This journal is an open notebook for those observations.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"kahel-home-chips","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group kahel-home-chips" aria-label="<?php esc_attr_e( 'Kahel qualities', 'kahel' ); ?>">
				<!-- wp:paragraph {"className":"kahel-home-chip"} -->
				<p class="kahel-home-chip"><?php esc_html_e( 'Place', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-home-chip"} -->
				<p class="kahel-home-chip"><?php esc_html_e( 'Food', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-home-chip"} -->
				<p class="kahel-home-chip"><?php esc_html_e( 'Craft', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-home-chip"} -->
				<p class="kahel-home-chip"><?php esc_html_e( 'Memory', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:buttons {"className":"kahel-home-actions"} -->
			<div class="wp-block-buttons kahel-home-actions">
				<!-- wp:button {"className":"kahel-button-outline"} -->
				<div class="wp-block-button kahel-button-outline"><a class="wp-block-button__link wp-element-button" href="/about/"><?php esc_html_e( 'Our story', 'kahel' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"className":"kahel-home-text-link","textColor":"orange-deep","fontSize":"small"} -->
			<p class="kahel-home-text-link has-orange-deep-color has-text-color has-small-font-size"><a href="/about/"><?php esc_html_e( 'Meet the contributors →', 'kahel' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

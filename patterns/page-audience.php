<?php
/**
 * Title: Audience section
 * Slug: kahel/page-audience
 * Categories: kahel
 * Description: Sticky intro with numbered audience list items.
 * Keywords: page, audience, about, who
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.8
 */

?>
<!-- wp:group {"align":"full","className":"kahel-audience-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-audience-section">

	<!-- wp:columns {"align":"wide","className":"kahel-audience"} -->
	<div class="wp-block-columns alignwide kahel-audience">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-audience-intro","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-audience-intro">
				<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
				<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'Made for story-driven work', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"className":"kahel-editorial-section-title kahel-audience-title"} -->
				<h2 class="wp-block-heading kahel-editorial-section-title kahel-audience-title"><?php echo wp_kses_post( __( 'Bring your subject.<br />Kahel brings the rhythm.', 'kahel' ) ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"kahel-audience-copy","textColor":"muted"} -->
				<p class="kahel-audience-copy has-muted-color has-text-color"><?php esc_html_e( 'Start with a complete editorial language, then adapt it to the people, places, and ideas you want to share.', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-audience-list","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-audience-list">

				<!-- wp:group {"className":"kahel-audience-item","layout":{"type":"default"}} -->
				<div class="wp-block-group kahel-audience-item">
					<!-- wp:paragraph {"className":"kahel-audience-item-number"} -->
					<p class="kahel-audience-item-number">01</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"className":"kahel-audience-item-body","layout":{"type":"constrained"}} -->
					<div class="wp-block-group kahel-audience-item-body">
						<!-- wp:heading {"level":3,"className":"kahel-audience-item-title"} -->
						<h3 class="wp-block-heading kahel-audience-item-title"><?php esc_html_e( 'Independent publishers', 'kahel' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-audience-item-copy"} -->
						<p class="kahel-audience-item-copy"><?php esc_html_e( 'Build a journal or magazine with a strong identity from day one.', 'kahel' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"kahel-audience-item","layout":{"type":"default"}} -->
				<div class="wp-block-group kahel-audience-item">
					<!-- wp:paragraph {"className":"kahel-audience-item-number"} -->
					<p class="kahel-audience-item-number">02</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"className":"kahel-audience-item-body","layout":{"type":"constrained"}} -->
					<div class="wp-block-group kahel-audience-item-body">
						<!-- wp:heading {"level":3,"className":"kahel-audience-item-title"} -->
						<h3 class="wp-block-heading kahel-audience-item-title"><?php esc_html_e( 'Writers & photographers', 'kahel' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-audience-item-copy"} -->
						<p class="kahel-audience-item-copy"><?php esc_html_e( 'Give essays, field notes, and visual stories room to breathe.', 'kahel' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"kahel-audience-item","layout":{"type":"default"}} -->
				<div class="wp-block-group kahel-audience-item">
					<!-- wp:paragraph {"className":"kahel-audience-item-number"} -->
					<p class="kahel-audience-item-number">03</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"className":"kahel-audience-item-body","layout":{"type":"constrained"}} -->
					<div class="wp-block-group kahel-audience-item-body">
						<!-- wp:heading {"level":3,"className":"kahel-audience-item-title"} -->
						<h3 class="wp-block-heading kahel-audience-item-title"><?php esc_html_e( 'Creative studios', 'kahel' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-audience-item-copy"} -->
						<p class="kahel-audience-item-copy"><?php esc_html_e( 'Present projects and thinking with clarity, warmth, and confidence.', 'kahel' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"kahel-audience-item","layout":{"type":"default"}} -->
				<div class="wp-block-group kahel-audience-item">
					<!-- wp:paragraph {"className":"kahel-audience-item-number"} -->
					<p class="kahel-audience-item-number">04</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"className":"kahel-audience-item-body","layout":{"type":"constrained"}} -->
					<div class="wp-block-group kahel-audience-item-body">
						<!-- wp:heading {"level":3,"className":"kahel-audience-item-title"} -->
						<h3 class="wp-block-heading kahel-audience-item-title"><?php esc_html_e( 'Purpose-led organizations', 'kahel' ); ?></h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-audience-item-copy"} -->
						<p class="kahel-audience-item-copy"><?php esc_html_e( 'Turn research, community knowledge, and updates into inviting narratives.', 'kahel' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

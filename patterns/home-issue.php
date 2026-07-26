<?php
/**
 * Title: Home issue
 * Slug: kahel/home-issue
 * Categories: kahel
 * Description: Citrus issue intro with a four-item reading timeline.
 * Keywords: home, issue, timeline, citrus
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","className":"kahel-home-section kahel-home-issue-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-section kahel-home-issue-section">

	<!-- wp:columns {"align":"wide","className":"kahel-home-issue"} -->
	<div class="wp-block-columns alignwide kahel-home-issue">

		<!-- wp:column {"width":"40%","className":"kahel-home-issue-intro"} -->
		<div class="wp-block-column kahel-home-issue-intro" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'The citrus issue', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-home-issue-title","fontSize":"section"} -->
			<h2 class="wp-block-heading kahel-home-issue-title has-section-font-size"><?php esc_html_e( 'Four ways to follow the season.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons {"className":"kahel-home-actions"} -->
			<div class="wp-block-buttons kahel-home-actions">
				<!-- wp:button {"className":"kahel-button-outline"} -->
				<div class="wp-block-button kahel-button-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e( 'Read the issue', 'kahel' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"className":"kahel-home-text-link","textColor":"orange-deep","fontSize":"small"} -->
			<p class="kahel-home-text-link has-orange-deep-color has-text-color has-small-font-size"><a href="#journal"><?php esc_html_e( 'See all articles →', 'kahel' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"className":"kahel-home-timeline","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-home-timeline">
				<!-- wp:group {"className":"kahel-home-timeline-item","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-home-timeline-item">
					<!-- wp:heading {"level":3,"className":"kahel-home-timeline-title","fontSize":"feature"} -->
					<h3 class="wp-block-heading kahel-home-timeline-title has-feature-font-size"><?php esc_html_e( 'Meet the growers', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'In the foothills of Batangas, three families tend small orchards planted across generations.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"kahel-home-timeline-item","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-home-timeline-item">
					<!-- wp:heading {"level":3,"className":"kahel-home-timeline-title","fontSize":"feature"} -->
					<h3 class="wp-block-heading kahel-home-timeline-title has-feature-font-size"><?php esc_html_e( 'Save the peel', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'A kitchen notebook for turning rinds into marmalade, cordial, seasoning, and candied fruit.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"kahel-home-timeline-item","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-home-timeline-item">
					<!-- wp:heading {"level":3,"className":"kahel-home-timeline-title","fontSize":"feature"} -->
					<h3 class="wp-block-heading kahel-home-timeline-title has-feature-font-size"><?php esc_html_e( 'Study the color', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Artists and dyers reflect on orange pigments, fading light, and colors borrowed from nature.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"kahel-home-timeline-item","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-home-timeline-item">
					<!-- wp:heading {"level":3,"className":"kahel-home-timeline-title","fontSize":"feature"} -->
					<h3 class="wp-block-heading kahel-home-timeline-title has-feature-font-size"><?php esc_html_e( 'Share the harvest', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Neighbors remember market mornings, backyard trees, and fruit passed over garden walls.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
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

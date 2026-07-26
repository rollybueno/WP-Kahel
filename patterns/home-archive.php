<?php
/**
 * Title: Home archive
 * Slug: kahel/home-archive
 * Categories: kahel
 * Description: Archive intro with supporting copy, actions, and summary stats.
 * Keywords: home, archive, stats
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","className":"kahel-home-section kahel-home-archive","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-section kahel-home-archive has-surface-background-color has-background">

	<!-- wp:columns {"align":"wide","className":"kahel-home-archive-head"} -->
	<div class="wp-block-columns alignwide kahel-home-archive-head">
		<!-- wp:column {"width":"58%"} -->
		<div class="wp-block-column" style="flex-basis:58%">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'The archive', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-home-archive-title","fontSize":"section"} -->
			<h2 class="wp-block-heading kahel-home-archive-title has-section-font-size"><?php esc_html_e( 'Collected slowly, shared freely.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"42%","className":"kahel-home-archive-aside"} -->
		<div class="wp-block-column kahel-home-archive-aside" style="flex-basis:42%">
			<!-- wp:paragraph {"className":"kahel-home-archive-copy","textColor":"muted"} -->
			<p class="kahel-home-archive-copy has-muted-color has-text-color"><?php esc_html_e( 'Each issue brings together essays, conversations, recipes, and photographs from contributors close to home and farther afield.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"kahel-home-actions","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group kahel-home-actions">
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"kahel-button-outline"} -->
					<div class="wp-block-button kahel-button-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e( 'Open the archive', 'kahel' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
				<!-- wp:paragraph {"className":"kahel-home-text-link","textColor":"orange-deep","fontSize":"small"} -->
				<p class="kahel-home-text-link has-orange-deep-color has-text-color has-small-font-size"><a href="#journal"><?php esc_html_e( 'Start reading', 'kahel' ); ?> <span aria-hidden="true">→</span></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","className":"kahel-home-stats"} -->
	<div class="wp-block-columns alignwide kahel-home-stats" aria-label="<?php esc_attr_e( 'Archive summary', 'kahel' ); ?>">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-home-stat","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-home-stat">
				<!-- wp:paragraph {"className":"kahel-home-stat-value","fontSize":"stat"} -->
				<p class="kahel-home-stat-value has-stat-font-size">48</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-home-stat-label"} -->
				<p class="kahel-home-stat-label"><?php esc_html_e( 'Long-form stories', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-home-stat","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-home-stat">
				<!-- wp:paragraph {"className":"kahel-home-stat-value","fontSize":"stat"} -->
				<p class="kahel-home-stat-value has-stat-font-size">16</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-home-stat-label"} -->
				<p class="kahel-home-stat-label"><?php esc_html_e( 'Contributing voices', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-home-stat","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-home-stat">
				<!-- wp:paragraph {"className":"kahel-home-stat-value","fontSize":"stat"} -->
				<p class="kahel-home-stat-value has-stat-font-size">7</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"kahel-home-stat-label"} -->
				<p class="kahel-home-stat-label"><?php esc_html_e( 'Places explored', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<?php
/**
 * Title: Principles grid
 * Slug: kahel/page-principles
 * Categories: kahel
 * Description: Four numbered principle cards in a two-by-two grid.
 * Keywords: page, principles, features, cards, about
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.8
 */

?>
<!-- wp:group {"align":"full","className":"kahel-principles-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-principles-section" id="principles">

	<!-- wp:columns {"align":"wide","className":"kahel-principles-head"} -->
	<div class="wp-block-columns alignwide kahel-principles-head">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'Four guiding principles', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-editorial-section-title kahel-principles-title"} -->
			<h2 class="wp-block-heading kahel-editorial-section-title kahel-principles-title"><?php esc_html_e( 'Designed to be useful in the real world.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"className":"kahel-principles-copy","textColor":"muted"} -->
			<p class="kahel-principles-copy has-muted-color has-text-color"><?php esc_html_e( 'Each principle shapes both how the theme looks and how it behaves once real content, editors, and changing needs enter the picture.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","className":"kahel-principles-grid"} -->
	<div class="wp-block-columns alignwide kahel-principles-grid">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-principle-card kahel-principle-card--orange","backgroundColor":"orange","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-principle-card kahel-principle-card--orange has-orange-background-color has-background">
				<!-- wp:paragraph {"className":"kahel-principle-number"} -->
				<p class="kahel-principle-number">01</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"kahel-principle-title"} -->
					<h3 class="wp-block-heading kahel-principle-title"><?php esc_html_e( 'Native first', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"kahel-principle-copy"} -->
					<p class="kahel-principle-copy"><?php esc_html_e( 'Built for the Site Editor and core blocks, with no required page builder or custom-block plugin.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-principle-card kahel-principle-card--cream","backgroundColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-principle-card kahel-principle-card--cream has-cream-background-color has-background">
				<!-- wp:paragraph {"className":"kahel-principle-number"} -->
				<p class="kahel-principle-number">02</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"kahel-principle-title"} -->
					<h3 class="wp-block-heading kahel-principle-title"><?php esc_html_e( 'Opinionated, not rigid', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"kahel-principle-copy"} -->
					<p class="kahel-principle-copy"><?php esc_html_e( 'A recognizable visual identity supported by global styles that remain easy to personalize.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-principle-card kahel-principle-card--leaf","backgroundColor":"leaf","textColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-principle-card kahel-principle-card--leaf has-cream-color has-leaf-background-color has-text-color has-background">
				<!-- wp:paragraph {"className":"kahel-principle-number"} -->
				<p class="kahel-principle-number">03</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"kahel-principle-title"} -->
					<h3 class="wp-block-heading kahel-principle-title"><?php esc_html_e( 'Made for stories', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"kahel-principle-copy"} -->
					<p class="kahel-principle-copy"><?php esc_html_e( 'Clear hierarchy, readable measure, and expressive patterns keep the focus on meaningful content.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-principle-card kahel-principle-card--ink","backgroundColor":"ink","textColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-principle-card kahel-principle-card--ink has-cream-color has-ink-background-color has-text-color has-background">
				<!-- wp:paragraph {"className":"kahel-principle-number"} -->
				<p class="kahel-principle-number">04</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"className":"kahel-principle-title"} -->
					<h3 class="wp-block-heading kahel-principle-title"><?php esc_html_e( 'Light on dependencies', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"kahel-principle-copy"} -->
					<p class="kahel-principle-copy"><?php esc_html_e( 'Local fonts and a focused PHP layer provide a straightforward foundation you can understand and extend.', 'kahel' ); ?></p>
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

<?php
/**
 * Title: Home hero
 * Slug: kahel/home-hero
 * Categories: kahel
 * Description: Front-page hero with journal intro and four topic cards.
 * Keywords: home, hero, topics, front
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","className":"kahel-home-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-hero">

	<!-- wp:group {"align":"wide","className":"kahel-home-hero-inner","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="wp-block-group alignwide kahel-home-hero-inner">

		<!-- wp:group {"className":"kahel-home-hero-copy","layout":{"type":"constrained","contentSize":"930px","justifyContent":"left"}} -->
		<div class="wp-block-group kahel-home-hero-copy">

			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'An independent journal of everyday life', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"kahel-home-title","fontSize":"huge"} -->
			<h1 class="wp-block-heading kahel-home-title has-huge-font-size"><?php echo wp_kses_post( __( 'Stories gathered under the <em>afternoon sun.</em>', 'kahel' ) ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"kahel-home-lead","textColor":"muted","fontSize":"lead"} -->
			<p class="kahel-home-lead has-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'Kahel follows the people, places, meals, and small rituals that bring warmth and meaning to ordinary days.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","className":"kahel-home-topics"} -->
		<div class="wp-block-columns alignwide kahel-home-topics">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"kahel-home-topic kahel-home-topic--1","backgroundColor":"orange","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
				<div class="wp-block-group kahel-home-topic kahel-home-topic--1 has-orange-background-color has-background">
					<!-- wp:group {"className":"kahel-home-topic-top","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group kahel-home-topic-top">
						<!-- wp:paragraph {"className":"kahel-home-topic-number"} -->
						<p class="kahel-home-topic-number">01</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"kahel-home-topic-icon"} -->
						<p class="kahel-home-topic-icon" aria-hidden="true">↗</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":2,"className":"kahel-home-topic-title","fontSize":"h2"} -->
						<h2 class="wp-block-heading kahel-home-topic-title has-h2-font-size"><?php esc_html_e( 'Field notes', 'kahel' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-home-topic-copy","fontSize":"small"} -->
						<p class="kahel-home-topic-copy has-small-font-size"><?php esc_html_e( 'Observations from streets, gardens, and open roads.', 'kahel' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"kahel-home-topic kahel-home-topic--2","backgroundColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
				<div class="wp-block-group kahel-home-topic kahel-home-topic--2 has-cream-background-color has-background">
					<!-- wp:group {"className":"kahel-home-topic-top","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group kahel-home-topic-top">
						<!-- wp:paragraph {"className":"kahel-home-topic-number"} -->
						<p class="kahel-home-topic-number">02</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"kahel-home-topic-icon"} -->
						<p class="kahel-home-topic-icon" aria-hidden="true">✦</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":2,"className":"kahel-home-topic-title","fontSize":"h2"} -->
						<h2 class="wp-block-heading kahel-home-topic-title has-h2-font-size"><?php esc_html_e( 'At the table', 'kahel' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-home-topic-copy","fontSize":"small"} -->
						<p class="kahel-home-topic-copy has-small-font-size"><?php esc_html_e( 'Recipes, ingredients, and the stories shared over food.', 'kahel' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"kahel-home-topic kahel-home-topic--3","backgroundColor":"ink","textColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
				<div class="wp-block-group kahel-home-topic kahel-home-topic--3 has-ink-background-color has-cream-color has-text-color has-background">
					<!-- wp:group {"className":"kahel-home-topic-top","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group kahel-home-topic-top">
						<!-- wp:paragraph {"className":"kahel-home-topic-number","textColor":"orange"} -->
						<p class="kahel-home-topic-number has-orange-color has-text-color">03</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"kahel-home-topic-icon"} -->
						<p class="kahel-home-topic-icon" aria-hidden="true">⌘</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":2,"className":"kahel-home-topic-title","fontSize":"h2"} -->
						<h2 class="wp-block-heading kahel-home-topic-title has-h2-font-size"><?php esc_html_e( 'Made by hand', 'kahel' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-home-topic-copy","fontSize":"small"} -->
						<p class="kahel-home-topic-copy has-small-font-size"><?php esc_html_e( 'Conversations with artists, growers, and makers.', 'kahel' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"kahel-home-topic kahel-home-topic--4","backgroundColor":"apricot","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
				<div class="wp-block-group kahel-home-topic kahel-home-topic--4 has-apricot-background-color has-background">
					<!-- wp:group {"className":"kahel-home-topic-top","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group kahel-home-topic-top">
						<!-- wp:paragraph {"className":"kahel-home-topic-number"} -->
						<p class="kahel-home-topic-number">04</p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"kahel-home-topic-icon","textColor":"orange-deep"} -->
						<p class="kahel-home-topic-icon has-orange-deep-color has-text-color" aria-hidden="true">✓</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":2,"className":"kahel-home-topic-title","fontSize":"h2"} -->
						<h2 class="wp-block-heading kahel-home-topic-title has-h2-font-size"><?php esc_html_e( 'Near &amp; far', 'kahel' ); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"className":"kahel-home-topic-copy","fontSize":"small"} -->
						<p class="kahel-home-topic-copy has-small-font-size"><?php esc_html_e( 'Patient guides to places worth knowing slowly.', 'kahel' ); ?></p>
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

</div>
<!-- /wp:group -->

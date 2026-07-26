<?php
/**
 * Title: Page values
 * Slug: kahel/page-values
 * Categories: featured, text, kahel
 * Description: Editorial principles grid with three numbered value cards.
 * Keywords: values, principles, about, cards
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.0
 */

?>
<!-- wp:group {"align":"full","className":"kahel-values","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-values has-surface-background-color has-background">

	<!-- wp:columns {"align":"wide","verticalAlignment":"bottom","className":"kahel-values-head"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom kahel-values-head">

		<!-- wp:column {"verticalAlignment":"bottom","width":"58%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:58%">

			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'How we work', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"kahel-values-title","fontSize":"section"} -->
			<h2 class="wp-block-heading kahel-values-title has-section-font-size"><?php esc_html_e( 'A few editorial principles.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"42%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:42%">

			<!-- wp:paragraph {"textColor":"muted","fontSize":"lead"} -->
			<p class="has-muted-color has-text-color has-lead-font-size"><?php esc_html_e( 'These simple ideas guide what we notice, how we collaborate, and what eventually reaches the page.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","className":"kahel-values-grid","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide kahel-values-grid">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"className":"kahel-value-card","style":{"spacing":{"padding":{"top":"var(--wp--custom--page--value-card-padding)","bottom":"var(--wp--custom--page--value-card-padding)","left":"var(--wp--custom--page--value-card-padding)","right":"var(--wp--custom--page--value-card-padding)"}},"border":{"radius":"var(--wp--custom--radius--xl)"}},"backgroundColor":"orange","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-value-card has-orange-background-color has-background" style="border-radius:var(--wp--custom--radius--xl);padding-top:var(--wp--custom--page--value-card-padding);padding-right:var(--wp--custom--page--value-card-padding);padding-bottom:var(--wp--custom--page--value-card-padding);padding-left:var(--wp--custom--page--value-card-padding)">

				<!-- wp:paragraph {"fontSize":"caption"} -->
				<p class="has-caption-font-size"><?php esc_html_e( '01', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">

					<!-- wp:heading {"level":3,"className":"kahel-value-card-title","fontSize":"feature"} -->
					<h3 class="wp-block-heading kahel-value-card-title has-feature-font-size"><?php esc_html_e( 'Stay curious', 'kahel' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php esc_html_e( 'Begin with a real question and follow where the details lead.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"className":"kahel-value-card","style":{"spacing":{"padding":{"top":"var(--wp--custom--page--value-card-padding)","bottom":"var(--wp--custom--page--value-card-padding)","left":"var(--wp--custom--page--value-card-padding)","right":"var(--wp--custom--page--value-card-padding)"}},"border":{"radius":"var(--wp--custom--radius--xl)"}},"backgroundColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-value-card has-cream-background-color has-background" style="border-radius:var(--wp--custom--radius--xl);padding-top:var(--wp--custom--page--value-card-padding);padding-right:var(--wp--custom--page--value-card-padding);padding-bottom:var(--wp--custom--page--value-card-padding);padding-left:var(--wp--custom--page--value-card-padding)">

				<!-- wp:paragraph {"fontSize":"caption"} -->
				<p class="has-caption-font-size"><?php esc_html_e( '02', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">

					<!-- wp:heading {"level":3,"className":"kahel-value-card-title","fontSize":"feature"} -->
					<h3 class="wp-block-heading kahel-value-card-title has-feature-font-size"><?php esc_html_e( 'Listen carefully', 'kahel' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php esc_html_e( 'Let people describe their own lives, work, and communities.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"className":"kahel-value-card","style":{"spacing":{"padding":{"top":"var(--wp--custom--page--value-card-padding)","bottom":"var(--wp--custom--page--value-card-padding)","left":"var(--wp--custom--page--value-card-padding)","right":"var(--wp--custom--page--value-card-padding)"}},"border":{"radius":"var(--wp--custom--radius--xl)"}},"backgroundColor":"ink","textColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-value-card has-ink-background-color has-cream-color has-text-color has-background" style="border-radius:var(--wp--custom--radius--xl);padding-top:var(--wp--custom--page--value-card-padding);padding-right:var(--wp--custom--page--value-card-padding);padding-bottom:var(--wp--custom--page--value-card-padding);padding-left:var(--wp--custom--page--value-card-padding)">

				<!-- wp:paragraph {"textColor":"orange","fontSize":"caption"} -->
				<p class="has-orange-color has-text-color has-caption-font-size"><?php esc_html_e( '03', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">

					<!-- wp:heading {"level":3,"className":"kahel-value-card-title","fontSize":"feature"} -->
					<h3 class="wp-block-heading kahel-value-card-title has-feature-font-size"><?php esc_html_e( 'Share generously', 'kahel' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php esc_html_e( 'Make useful knowledge clear, welcoming, and easy to return to.', 'kahel' ); ?></p>
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

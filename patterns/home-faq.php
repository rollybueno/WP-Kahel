<?php
/**
 * Title: Home FAQ
 * Slug: kahel/home-faq
 * Categories: kahel
 * Description: Field-guide FAQ accordion for the front page.
 * Keywords: home, faq, details
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","anchor":"faq","className":"kahel-home-section kahel-home-faq-section","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-section kahel-home-faq-section has-surface-background-color has-background" id="faq">

	<!-- wp:columns {"align":"wide","className":"kahel-home-faq"} -->
	<div class="wp-block-columns alignwide kahel-home-faq">

		<!-- wp:column {"width":"38%"} -->
		<div class="wp-block-column" style="flex-basis:38%">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'Field guide', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-home-faq-title","fontSize":"section"} -->
			<h2 class="wp-block-heading kahel-home-faq-title has-section-font-size"><?php esc_html_e( 'A few citrus notes.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted"} -->
			<p class="has-muted-color has-text-color"><?php esc_html_e( 'Simple answers gathered for the season—from choosing fruit at the market to making use of every peel.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"62%"} -->
		<div class="wp-block-column" style="flex-basis:62%">
			<!-- wp:group {"className":"kahel-home-faq-list","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-home-faq-list">

				<!-- wp:details {"showContent":true,"className":"kahel-home-faq-item"} -->
				<details class="wp-block-details kahel-home-faq-item" open>
					<summary><?php esc_html_e( 'When are local citrus fruits in season?', 'kahel' ); ?></summary>
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Harvest times vary by variety and region. Calamansi can fruit throughout the year, while many larger citrus varieties are most abundant during the cooler months.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- wp:details {"className":"kahel-home-faq-item"} -->
				<details class="wp-block-details kahel-home-faq-item">
					<summary><?php esc_html_e( 'How do you choose good fruit at the market?', 'kahel' ); ?></summary>
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Look for fruit that feels heavy for its size, with fragrant skin and no soft patches. Small marks on the peel rarely affect the flesh inside.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- wp:details {"className":"kahel-home-faq-item"} -->
				<details class="wp-block-details kahel-home-faq-item">
					<summary><?php esc_html_e( 'What can be made with leftover peel?', 'kahel' ); ?></summary>
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Washed peel can flavor sugar, salt, vinegar, tea, and baked goods. It can also be simmered into marmalade or candied for a simple sweet.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- wp:details {"className":"kahel-home-faq-item"} -->
				<details class="wp-block-details kahel-home-faq-item">
					<summary><?php esc_html_e( 'Can citrus trees grow in small spaces?', 'kahel' ); ?></summary>
					<!-- wp:paragraph {"textColor":"muted"} -->
					<p class="has-muted-color has-text-color"><?php esc_html_e( 'Many varieties grow well in large containers with strong sunlight, good drainage, and regular feeding. Smaller trees still need room for their roots and canopy.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

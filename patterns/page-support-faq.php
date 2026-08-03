<?php
/**
 * Title: Support FAQ
 * Slug: kahel/page-support-faq
 * Categories: kahel
 * Description: FAQ accordion for pitches, partnerships, and support questions.
 * Keywords: page, faq, support, details, contact
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.7
 */

?>
<!-- wp:group {"align":"full","className":"kahel-contact-faq-section","backgroundColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-contact-faq-section has-cream-background-color has-background">

	<!-- wp:columns {"align":"wide","className":"kahel-contact-faq"} -->
	<div class="wp-block-columns alignwide kahel-contact-faq">

		<!-- wp:column {"className":"kahel-contact-faq-intro"} -->
		<div class="wp-block-column kahel-contact-faq-intro">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'Before you write', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-contact-section-title kahel-contact-faq-title"} -->
			<h2 class="wp-block-heading kahel-contact-section-title kahel-contact-faq-title"><?php esc_html_e( 'A few useful answers.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kahel-contact-faq-content"} -->
		<div class="wp-block-column kahel-contact-faq-content">
			<!-- wp:group {"className":"kahel-contact-faq-list","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-contact-faq-list">

				<!-- wp:details {"className":"kahel-contact-faq-item"} -->
				<details class="wp-block-details kahel-contact-faq-item">
					<summary><?php esc_html_e( 'Do you accept unsolicited contributions?', 'kahel' ); ?></summary>
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Yes. A concise proposal is usually more useful than a finished piece because it gives us room to shape the story together.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- wp:details {"className":"kahel-contact-faq-item"} -->
				<details class="wp-block-details kahel-contact-faq-item">
					<summary><?php esc_html_e( 'Do contributors need to be based in the Philippines?', 'kahel' ); ?></summary>
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'No. Kahel is Filipino in inspiration and open in outlook. We welcome thoughtful work rooted in many places and communities.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- wp:details {"className":"kahel-contact-faq-item"} -->
				<details class="wp-block-details kahel-contact-faq-item">
					<summary><?php esc_html_e( 'Can organizations propose partnerships?', 'kahel' ); ?></summary>
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Yes, when the collaboration respects editorial independence and creates something genuinely useful or meaningful for readers.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
				</details>
				<!-- /wp:details -->

				<!-- wp:details {"className":"kahel-contact-faq-item"} -->
				<details class="wp-block-details kahel-contact-faq-item">
					<summary><?php esc_html_e( 'Can I ask for help using the Kahel theme?', 'kahel' ); ?></summary>
					<!-- wp:paragraph -->
					<p><?php esc_html_e( 'Absolutely. Include your WordPress version, a link or screenshot, and a clear description of what you expected to happen.', 'kahel' ); ?></p>
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

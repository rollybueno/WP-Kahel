<?php
/**
 * Title: Inquiry hero
 * Slug: kahel/page-inquiry-hero
 * Categories: kahel
 * Description: Full-width inquiry hero with intro copy and a general email aside.
 * Keywords: page, hero, inquiry, email, contact
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.7
 */

?>
<!-- wp:group {"align":"full","className":"kahel-contact-hero-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-contact-hero-section">

	<!-- wp:columns {"align":"wide","className":"kahel-contact-hero"} -->
	<div class="wp-block-columns alignwide kahel-contact-hero">

		<!-- wp:column {"className":"kahel-contact-hero-copy"} -->
		<div class="wp-block-column kahel-contact-hero-copy">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'Contact Kahel', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"className":"kahel-contact-title","fontSize":"huge"} -->
			<h1 class="wp-block-heading kahel-contact-title has-huge-font-size"><?php echo wp_kses_post( __( 'Let’s begin with a <em>good conversation.</em>', 'kahel' ) ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"kahel-contact-lead","fontSize":"lead"} -->
			<p class="kahel-contact-lead has-lead-font-size"><?php esc_html_e( 'Have a story to share, a project to propose, or a question about the journal? Choose the path that fits and write to us directly.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kahel-contact-hero-aside-col"} -->
		<div class="wp-block-column kahel-contact-hero-aside-col">
			<!-- wp:group {"className":"kahel-contact-hero-aside","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-contact-hero-aside">
				<!-- wp:html -->
				<span class="kahel-contact-sun" aria-hidden="true"></span>
				<!-- /wp:html -->

				<!-- wp:paragraph {"className":"kahel-contact-aside-label"} -->
				<p class="kahel-contact-aside-label"><?php esc_html_e( 'General inquiries', 'kahel' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"kahel-contact-aside-email"} -->
				<p class="kahel-contact-aside-email"><a href="mailto:hello@kahel.example">hello@kahel.example</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"kahel-contact-aside-note"} -->
				<p class="kahel-contact-aside-note"><?php echo wp_kses_post( __( 'Based in the Philippines.<br />Reading messages from everywhere.', 'kahel' ) ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

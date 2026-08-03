<?php
/**
 * Title: Email routes
 * Slug: kahel/page-email-routes
 * Categories: kahel
 * Description: Three email desks with direct mailto routes.
 * Keywords: page, routes, email, desks, contact
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.7
 */

?>
<!-- wp:group {"align":"full","className":"kahel-contact-routes","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-contact-routes has-surface-background-color has-background">

	<!-- wp:columns {"align":"wide","className":"kahel-contact-routes-head"} -->
	<div class="wp-block-columns alignwide kahel-contact-routes-head">
		<!-- wp:column {"className":"kahel-contact-routes-intro"} -->
		<div class="wp-block-column kahel-contact-routes-intro">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'Find the right desk', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-contact-section-title kahel-contact-routes-title"} -->
			<h2 class="wp-block-heading kahel-contact-section-title kahel-contact-routes-title"><?php esc_html_e( 'Where should your note go?', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kahel-contact-routes-aside"} -->
		<div class="wp-block-column kahel-contact-routes-aside">
			<!-- wp:paragraph {"className":"kahel-contact-routes-copy","textColor":"muted"} -->
			<p class="kahel-contact-routes-copy has-muted-color has-text-color"><?php esc_html_e( 'A direct email keeps things simple. Tell us enough to understand the idea; there is no need for a perfect pitch.', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","className":"kahel-contact-route-grid"} -->
	<div class="wp-block-columns alignwide kahel-contact-route-grid">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-contact-route-card kahel-contact-route-editorial","backgroundColor":"orange","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-contact-route-card kahel-contact-route-editorial has-orange-background-color has-background">
				<!-- wp:paragraph {"className":"kahel-contact-route-number"} -->
				<p class="kahel-contact-route-number">01</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"className":"kahel-contact-route-body","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-contact-route-body">
					<!-- wp:paragraph {"className":"kahel-contact-route-kicker"} -->
					<p class="kahel-contact-route-kicker"><?php echo wp_kses_post( __( 'Stories &amp; pitches', 'kahel' ) ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"className":"kahel-contact-route-title"} -->
					<h3 class="wp-block-heading kahel-contact-route-title"><?php esc_html_e( 'Editorial', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"kahel-contact-route-copy"} -->
					<p class="kahel-contact-route-copy"><?php esc_html_e( 'Send essays, photo stories, field notes, or an idea you would like to develop with us.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"kahel-contact-route-link"} -->
					<p class="kahel-contact-route-link"><a href="mailto:stories@kahel.example">stories@kahel.example <span aria-hidden="true">↗</span></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-contact-route-card kahel-contact-route-partnerships","backgroundColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-contact-route-card kahel-contact-route-partnerships has-cream-background-color has-background">
				<!-- wp:paragraph {"className":"kahel-contact-route-number"} -->
				<p class="kahel-contact-route-number">02</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"className":"kahel-contact-route-body","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-contact-route-body">
					<!-- wp:paragraph {"className":"kahel-contact-route-kicker"} -->
					<p class="kahel-contact-route-kicker"><?php echo wp_kses_post( __( 'Projects &amp; collaborations', 'kahel' ) ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"className":"kahel-contact-route-title"} -->
					<h3 class="wp-block-heading kahel-contact-route-title"><?php esc_html_e( 'Partnerships', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"kahel-contact-route-copy"} -->
					<p class="kahel-contact-route-copy"><?php esc_html_e( 'Propose a thoughtful collaboration, commissioned story, event, or community project.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"kahel-contact-route-link"} -->
					<p class="kahel-contact-route-link"><a href="mailto:partners@kahel.example">partners@kahel.example <span aria-hidden="true">↗</span></a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"kahel-contact-route-card kahel-contact-route-general","backgroundColor":"ink","textColor":"cream","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
			<div class="wp-block-group kahel-contact-route-card kahel-contact-route-general has-cream-color has-ink-background-color has-text-color has-background">
				<!-- wp:paragraph {"className":"kahel-contact-route-number"} -->
				<p class="kahel-contact-route-number">03</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"className":"kahel-contact-route-body","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-contact-route-body">
					<!-- wp:paragraph {"className":"kahel-contact-route-kicker"} -->
					<p class="kahel-contact-route-kicker"><?php esc_html_e( 'Everything else', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"className":"kahel-contact-route-title"} -->
					<h3 class="wp-block-heading kahel-contact-route-title"><?php esc_html_e( 'Say hello', 'kahel' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"kahel-contact-route-copy"} -->
					<p class="kahel-contact-route-copy"><?php esc_html_e( 'Share feedback, ask a question, report an issue, or simply tell us what brought you here.', 'kahel' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"kahel-contact-route-link"} -->
					<p class="kahel-contact-route-link"><a href="mailto:hello@kahel.example">hello@kahel.example <span aria-hidden="true">↗</span></a></p>
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

<?php
/**
 * Title: Home featured
 * Slug: kahel/home-featured
 * Categories: kahel
 * Description: Featured stories section with a two-up query on an ink background.
 * Keywords: home, featured, stories, query
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","className":"kahel-home-section kahel-home-featured","backgroundColor":"ink","textColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-section kahel-home-featured has-cream-color has-ink-background-color has-text-color has-background">

	<!-- wp:group {"align":"wide","className":"kahel-home-featured-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide kahel-home-featured-head">
		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-color has-text-color has-caption-font-size"><?php esc_html_e( 'Featured stories', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-home-featured-title","fontSize":"section"} -->
			<h2 class="wp-block-heading kahel-home-featured-title has-section-font-size"><?php esc_html_e( 'A closer look at familiar places.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"kahel-home-text-link kahel-home-featured-link","textColor":"apricot","fontSize":"small"} -->
		<p class="kahel-home-text-link kahel-home-featured-link has-apricot-color has-text-color has-small-font-size"><a href="/"><?php esc_html_e( 'Browse all stories', 'kahel' ); ?> <span aria-hidden="true">→</span></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":21,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","className":"kahel-home-featured-query"} -->
	<div class="wp-block-query alignwide kahel-home-featured-query">
		<!-- wp:post-template {"className":"kahel-home-featured-grid","layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:group {"className":"kahel-home-project","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-home-project">
				<!-- wp:group {"className":"kahel-home-project-visual","layout":{"type":"default"}} -->
				<div class="wp-block-group kahel-home-project-visual">
					<!-- wp:html -->
					<span class="kahel-home-project-art"></span>
					<!-- /wp:html -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"kahel-home-project-meta","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
				<div class="wp-block-group kahel-home-project-meta">
					<!-- wp:group {"className":"kahel-home-project-copy","layout":{"type":"constrained"}} -->
					<div class="wp-block-group kahel-home-project-copy">
						<!-- wp:post-title {"isLink":true,"level":3,"className":"kahel-home-project-title"} /-->
						<!-- wp:post-terms {"term":"category","separator":" · ","className":"kahel-home-project-terms","fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"className":"kahel-home-project-result"} -->
					<p class="kahel-home-project-result"></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->

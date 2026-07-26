<?php
/**
 * Title: Home latest
 * Slug: kahel/home-latest
 * Categories: kahel
 * Description: Latest stories query grid for the front page journal section.
 * Keywords: home, journal, latest, query
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","anchor":"journal","className":"kahel-home-section kahel-home-latest","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-section kahel-home-latest has-base-background-color has-background" id="journal">

	<!-- wp:group {"align":"wide","className":"kahel-home-section-head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group alignwide kahel-home-section-head">
		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
			<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php esc_html_e( 'Latest stories', 'kahel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"className":"kahel-home-latest-title","fontSize":"section"} -->
			<h2 class="wp-block-heading kahel-home-latest-title has-section-font-size"><?php esc_html_e( 'Notes from near and far.', 'kahel' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"className":"kahel-home-text-link","textColor":"orange-deep","fontSize":"small"} -->
		<p class="kahel-home-text-link has-orange-deep-color has-text-color has-small-font-size"><a href="/"><?php esc_html_e( 'View all stories →', 'kahel' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","className":"kahel-home-latest-query"} -->
	<div class="wp-block-query alignwide kahel-home-latest-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"kahel-home-article","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-home-article">
				<!-- wp:group {"className":"kahel-home-article-art","layout":{"type":"constrained"}} -->
				<div class="wp-block-group kahel-home-article-art">
					<!-- wp:post-featured-image {"isLink":true,"className":"kahel-home-article-media"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:post-terms {"term":"category","separator":" · ","className":"kahel-home-article-meta","fontSize":"utility"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"feature"} /-->
				<!-- wp:post-excerpt {"moreText":"","excerptLength":22,"className":"kahel-home-article-excerpt","fontSize":"small"} /-->
				<!-- wp:read-more {"content":"Read more →","className":"kahel-home-article-more"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->

<?php
/**
 * Title: Archive · Results
 * Slug: kahel/archive-loop
 * Categories: kahel
 * Description: Story grid, pagination, and empty state for the posts page, archives, and search.
 * Keywords: archive, search, query, stories
 * Viewport Width: 1180
 * Inserter: no
 *
 * @package Kahel
 * @since 1.1.0
 */

?>
<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","className":"kahel-archive-query"} -->
<div class="wp-block-query alignwide kahel-archive-query">

	<!-- wp:post-template {"className":"kahel-archive-grid","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"className":"kahel-archive-story","layout":{"type":"constrained"}} -->
		<div class="wp-block-group kahel-archive-story">
			<!-- wp:group {"className":"kahel-archive-story-art","layout":{"type":"constrained"}} -->
			<div class="wp-block-group kahel-archive-story-art">
				<!-- wp:post-featured-image {"isLink":true,"className":"kahel-archive-story-media"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-terms {"term":"category","separator":" · ","className":"kahel-archive-story-meta","fontSize":"utility"} /-->

			<!-- wp:post-title {"isLink":true,"level":2,"className":"kahel-archive-story-title","fontSize":"feature"} /-->

			<!-- wp:post-excerpt {"moreText":"","excerptLength":22,"className":"kahel-archive-story-excerpt","fontSize":"small"} /-->

			<!-- wp:read-more {"content":"Read more →","className":"kahel-archive-story-more"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"className":"kahel-pagination","paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"textColor":"muted"} -->
		<p class="has-muted-color has-text-color"><?php esc_html_e( 'No stories found.', 'kahel' ); ?></p>
		<!-- /wp:paragraph -->
		<?php if ( is_search() ) : ?>
			<?php echo kahel_search_block(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in kahel_search_block(). ?>
		<?php endif; ?>
	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

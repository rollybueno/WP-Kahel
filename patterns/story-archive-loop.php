<?php
/**
 * Title: Story archive loop
 * Slug: kahel/story-archive-loop
 * Categories: featured, query
 * Description: Story grid with pagination for archive, author, and search templates.
 *
 * @package Kahel
 * @since   1.0.22
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Story archive loop","patternName":"kahel/story-archive-loop"},"align":"full","className":"story-archive-loop","style":{"spacing":{"padding":{"top":"72px","bottom":"88px","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<section class="wp-block-group alignfull story-archive-loop" style="padding-top:72px;padding-right:var(--wp--preset--spacing--xl);padding-bottom:88px;padding-left:var(--wp--preset--spacing--xl)"><!-- wp:group {"metadata":{"name":"Story archive loop inner"},"className":"story-archive-loop-inner","layout":{"type":"default"}} -->
<div class="wp-block-group story-archive-loop-inner"><!-- wp:query {"queryId":6,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"metadata":{"name":"Archive query"},"className":"story-archive-query","layout":{"type":"default"}} -->
<div class="wp-block-query story-archive-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px","margin":{"bottom":"74px"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:pattern {"slug":"kahel/story-card"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"kahel/search-empty"} /-->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"className":"story-archive-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Previous","className":"prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next","className":"next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>

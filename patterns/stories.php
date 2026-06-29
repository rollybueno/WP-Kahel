<?php
/**
 * Title: Stories
 * Slug: kahel/stories
 * Categories: featured, query
 * Description: Homepage stories grid powered by the latest posts query loop.
 *
 * @package Kahel
 * @since   1.0.0
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Stories","patternName":"kahel/stories"},"align":"full","className":"stories","style":{"spacing":{"padding":{"top":"104px","bottom":"92px","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<section class="wp-block-group alignfull stories" style="padding-top:104px;padding-right:var(--wp--preset--spacing--xl);padding-bottom:92px;padding-left:var(--wp--preset--spacing--xl)"><!-- wp:group {"metadata":{"name":"Stories heading"},"className":"section-heading section-heading-center","layout":{"type":"default"}} -->
<div class="wp-block-group section-heading section-heading-center"><!-- wp:paragraph {"align":"center","className":"section-label","fontSize":"small"} -->
<p class="has-text-align-center section-label has-small-font-size">Stories</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"className":"section-title"} -->
<h2 class="wp-block-heading section-title has-text-align-center">Real work, real results</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"section-kicker","fontSize":"medium"} -->
<p class="has-text-align-center section-kicker has-medium-font-size">See how we&#8217;ve shaped narratives that matter</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":4,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"name":"Stories query"},"className":"stories-query","layout":{"type":"default"}} -->
<div class="wp-block-query stories-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px","margin":{"bottom":"74px"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:pattern {"slug":"kahel/story-card"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">No stories published yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"center-action","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group center-action"><!-- wp:buttons {"className":"button-row","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"12px"}}} -->
<div class="wp-block-buttons button-row"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View all</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>

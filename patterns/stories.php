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
<div class="wp-block-query stories-query"><!-- wp:post-template {"className":"story-grid","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"tagName":"article","metadata":{"name":"Story card"},"className":"story-card","layout":{"type":"default"}} -->
<article class="wp-block-group story-card"><!-- wp:group {"className":"story-image","layout":{"type":"default"}} -->
<div class="wp-block-group story-image"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"large","linkDestination":"post"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"story-meta","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"18px"}}} -->
<div class="wp-block-group story-meta"><!-- wp:post-terms {"term":"category","separator":" ","className":"story-category"} /-->

<!-- wp:post-time-to-read {"displayAsRange":false,"fontSize":"small","className":"story-read-time"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"className":"story-title"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":18,"className":"story-text text-sm"} /-->

<!-- wp:read-more {"content":"Read more","className":"text-link"} /--></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">No stories published yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"className":"center-action","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group center-action"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">View all</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>

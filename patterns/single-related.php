<?php
/**
 * Title: Single related posts
 * Slug: kahel/single-related
 * Categories: featured, query
 * Description: Related stories grid for the single post template.
 *
 * @package Kahel
 * @since   1.0.0
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Related posts","patternName":"kahel/single-related"},"align":"full","className":"related-posts","backgroundColor":"background-secondary","style":{"spacing":{"padding":{"top":"88px","bottom":"88px","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px","style":"solid"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<section class="wp-block-group alignfull related-posts has-background-secondary-background-color has-background" style="border-top-color:var(--wp--preset--color--border-light);border-top-style:solid;border-top-width:1px;padding-top:88px;padding-right:var(--wp--preset--spacing--xl);padding-bottom:88px;padding-left:var(--wp--preset--spacing--xl)"><!-- wp:group {"metadata":{"name":"Related posts header"},"className":"related-posts-header","layout":{"type":"default"}} -->
<div class="wp-block-group related-posts-header"><!-- wp:paragraph {"className":"section-label","fontSize":"small"} -->
<p class="section-label has-small-font-size">Related stories</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"className":"section-title"} -->
<h2 class="wp-block-heading section-title">Keep reading</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":5,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"name":"Related posts query"},"className":"related-posts-query","layout":{"type":"default"}} -->
<div class="wp-block-query related-posts-query"><!-- wp:post-template {"className":"story-grid","layout":{"type":"grid","columnCount":3}} -->
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
<p class="has-text-align-center">No related stories yet.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>

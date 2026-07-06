<?php
/**
 * Title: Story card
 * Slug: kahel/story-card
 * Categories: featured, query
 * Description: Single story card markup for query loops.
 * Inserter: no
 *
 * @package Kahel
 * @since   1.0.26
 */
?>
<!-- wp:group {"tagName":"article","metadata":{"name":"Story card"},"className":"is-style-story-card","layout":{"type":"default"}} -->
<article class="wp-block-group is-style-story-card"><!-- wp:group {"className":"is-style-story-image","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-story-image"><!-- wp:post-featured-image {"isLink":true,"sizeSlug":"large","linkDestination":"post"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-story-meta","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group is-style-story-meta"><!-- wp:post-terms {"term":"category","separator":" ","className":"is-style-story-category"} /-->

<!-- wp:post-time-to-read {"displayAsRange":false,"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":18,"fontSize":"medium"} /-->

<!-- wp:read-more {"content":"Read more"} /--></article>
<!-- /wp:group -->

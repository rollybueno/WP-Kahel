<?php
/**
 * Title: Hero
 * Slug: kahel/hero
 * Categories: banner, featured
 * Description: Homepage hero with headline, copy, CTAs, and image placeholders.
 *
 * @package Kahel
 * @since   1.0.0
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero","categories":["banner"],"patternName":"kahel/hero"},"align":"full","className":"hero","style":{"spacing":{"padding":{"top":"88px","bottom":"96px","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}},"border":{"bottom":{"color":"var:preset|color|kahel-200","width":"1px","style":"solid"}}},"backgroundColor":"background-accent","layout":{"type":"constrained","contentSize":"1440px"}} -->
<section class="wp-block-group alignfull hero has-background-accent-background-color has-background" style="border-bottom-color:var(--wp--preset--color--kahel-200);border-bottom-style:solid;border-bottom-width:1px;padding-top:88px;padding-right:var(--wp--preset--spacing--xl);padding-bottom:96px;padding-left:var(--wp--preset--spacing--xl)"><!-- wp:group {"metadata":{"name":"Hero grid"},"className":"hero-grid","layout":{"type":"default"}} -->
<div class="wp-block-group hero-grid"><!-- wp:group {"metadata":{"name":"Hero copy"},"className":"hero-copy","layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
<div class="wp-block-group hero-copy"><!-- wp:group {"metadata":{"name":"Hero copy top"},"className":"hero-copy-top","layout":{"type":"default"}} -->
<div class="wp-block-group hero-copy-top"><!-- wp:paragraph {"className":"section-label","fontSize":"small"} -->
<p class="section-label has-small-font-size">Editorial studio</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"section-title hero-title"} -->
<h1 class="wp-block-heading section-title hero-title">Stories that matter, told with precision</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Hero text"},"className":"hero-text","layout":{"type":"default"}} -->
<div class="wp-block-group hero-text"><!-- wp:paragraph {"className":"section-kicker","fontSize":"medium"} -->
<p class="section-kicker has-medium-font-size">Chronicle Press brings clarity to complex narratives. We transform raw information into compelling stories that resonate with your audience and drive real results.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"button-row","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons button-row"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Start now</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Learn more</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Hero image large"},"className":"hero-image-large","layout":{"type":"default"}} -->
<div class="wp-block-group hero-image-large"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Hero images stack"},"className":"hero-images-stack","style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group hero-images-stack"><!-- wp:group {"className":"hero-image-small","layout":{"type":"default"}} -->
<div class="wp-block-group hero-image-small"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-image-small","layout":{"type":"default"}} -->
<div class="wp-block-group hero-image-small"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<?php
/**
 * Title: Testimonial
 * Slug: kahel/testimonial
 * Categories: featured, text
 * Description: Centered client testimonial with logo, quote, and author details.
 *
 * @package Kahel
 * @since   1.0.0
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Testimonial","patternName":"kahel/testimonial"},"align":"full","className":"testimonial section-bordered","backgroundColor":"background-accent","style":{"spacing":{"padding":{"top":"106px","bottom":"108px","left":"var:preset|spacing|xl","right":"var:preset|spacing|xl"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<section class="wp-block-group alignfull testimonial section-bordered has-background-accent-background-color has-background" style="padding-top:106px;padding-right:var(--wp--preset--spacing--xl);padding-bottom:108px;padding-left:var(--wp--preset--spacing--xl)"><!-- wp:group {"metadata":{"name":"Testimonial inner"},"className":"testimonial-inner","layout":{"type":"default"}} -->
<div class="wp-block-group testimonial-inner"><!-- wp:group {"className":"logo-row testimonial-logo","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group logo-row testimonial-logo"><!-- wp:group {"className":"logo-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"10px"}}} -->
<div class="wp-block-group logo-item"><!-- wp:html -->
<span class="webflow-mark" aria-hidden="true"></span>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p>Webflow</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:quote {"textAlign":"center","className":"testimonial-quote"} -->
<blockquote class="wp-block-quote testimonial-quote has-text-align-center"><p>&#8220;Chronicle Press didn&#8217;t just edit our investigation, they sharpened our thinking. The story landed harder because they understood what we were really trying to say.&#8221; — Sarah Chen, Editor, Metro News</p></blockquote>
<!-- /wp:quote -->

<!-- wp:html -->
<div class="author-avatar" aria-hidden="true"><span></span></div>
<!-- /wp:html -->

<!-- wp:paragraph {"align":"center","className":"author-name","fontSize":"small"} -->
<p class="has-text-align-center author-name has-small-font-size">Sarah Chen</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"author-role","fontSize":"small"} -->
<p class="has-text-align-center author-role has-small-font-size">Editor, Metro News</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>

<?php
/**
 * Title: Search empty
 * Slug: kahel/search-empty
 * Categories: text
 * Description: Empty state for search and archive queries with no results.
 *
 * @package Kahel
 * @since   1.0.22
 */
?>
<!-- wp:group {"metadata":{"name":"Search empty"},"className":"search-empty","layout":{"type":"default"}} -->
<div class="wp-block-group search-empty"><!-- wp:heading {"level":2,"className":"search-empty-title"} -->
<h2 class="wp-block-heading search-empty-title">No stories matched your search</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"search-empty-text","fontSize":"medium"} -->
<p class="search-empty-text has-medium-font-size">Try different keywords, check your spelling, or browse our latest stories from the homepage.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"button-row","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons button-row"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Back to home</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Browse stories</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php
/**
 * Title: Editorial quote
 * Slug: kahel/page-editorial-quote
 * Categories: kahel
 * Description: Large cream pull-quote panel with caption.
 * Keywords: page, quote, editorial, about
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.8
 */

?>
<!-- wp:group {"align":"full","className":"kahel-editorial-quote-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-editorial-quote-section">

	<!-- wp:group {"align":"wide","className":"kahel-editorial-quote","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide kahel-editorial-quote">
		<!-- wp:paragraph {"className":"kahel-editorial-quote-text"} -->
		<p class="kahel-editorial-quote-text"><?php esc_html_e( '“A theme should give you somewhere meaningful to begin—not somewhere you are forced to stay.”', 'kahel' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"kahel-editorial-quote-caption"} -->
		<p class="kahel-editorial-quote-caption"><?php esc_html_e( 'Kahel’s approach to design', 'kahel' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<?php
/**
 * Title: Home quote
 * Slug: kahel/home-quote
 * Categories: kahel
 * Description: Featured quotation card for the front page.
 * Keywords: home, quote, proof
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.4
 */

?>
<!-- wp:group {"align":"full","className":"kahel-home-quote","backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull kahel-home-quote has-surface-background-color has-background">

	<!-- wp:group {"align":"wide","className":"kahel-home-quote-card","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide kahel-home-quote-card">
		<!-- wp:paragraph {"className":"kahel-home-quote-mark"} -->
		<p class="kahel-home-quote-mark" aria-hidden="true">“</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"className":"kahel-home-quote-text"} -->
		<h2 class="wp-block-heading kahel-home-quote-text"><?php esc_html_e( 'To know a place, begin with the things people do when they think no one is watching.', 'kahel' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"kahel-home-quote-person","fontSize":"small"} -->
		<p class="kahel-home-quote-person has-small-font-size"><strong><?php esc_html_e( 'Mara Villanueva', 'kahel' ); ?></strong><br /><span><?php echo wp_kses_post( __( 'From “The Last Light<br />on Escolta”', 'kahel' ) ); ?></span></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

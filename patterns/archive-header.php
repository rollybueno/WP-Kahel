<?php
/**
 * Title: Archive · Header
 * Slug: kahel/archive-header
 * Categories: kahel
 * Description: Stories archive page header with eyebrow, title, and intro. Search, taxonomies, authors, and dates use the queried view.
 * Keywords: archive, stories, header, search
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.6
 */

$header = kahel_get_archive_header();

?>
<!-- wp:group {"align":"wide","className":"kahel-archive-header","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide kahel-archive-header">
	<!-- wp:paragraph {"className":"kahel-kicker","textColor":"orange-deep","fontSize":"caption"} -->
	<p class="kahel-kicker has-orange-deep-color has-text-color has-caption-font-size"><?php echo esc_html( $header['kicker'] ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"className":"kahel-archive-title","fontSize":"huge"} -->
	<h1 class="wp-block-heading kahel-archive-title has-huge-font-size"><?php echo esc_html( $header['title'] ); ?></h1>
	<!-- /wp:heading -->

	<?php if ( '' !== $header['intro'] ) : ?>
		<!-- wp:paragraph {"className":"kahel-archive-intro","fontSize":"lead"} -->
		<p class="kahel-archive-intro has-lead-font-size"><?php echo esc_html( $header['intro'] ); ?></p>
		<!-- /wp:paragraph -->
	<?php endif; ?>

	<?php if ( ! empty( $header['show_search'] ) ) : ?>
		<?php echo kahel_search_block(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped in kahel_search_block(). ?>
	<?php endif; ?>
</div>
<!-- /wp:group -->

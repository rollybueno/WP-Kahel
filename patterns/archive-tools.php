<?php
/**
 * Title: Archive tools
 * Slug: kahel/archive-tools
 * Categories: kahel
 * Description: Category filter chips and story count for the archive page.
 * Keywords: archive, filters, stories
 * Viewport Width: 1180
 * Inserter: yes
 *
 * @package Kahel
 * @since 0.1.6
 */

$posts_page_id = (int) get_option( 'page_for_posts' );
$all_url       = $posts_page_id ? get_permalink( $posts_page_id ) : home_url( '/' );
$all_active    = is_home() && ! is_category() && ! is_tag() && ! is_author() && ! is_date();

$filters = array(
	array(
		'label'  => __( 'All', 'kahel' ),
		'url'    => $all_url,
		'active' => $all_active,
	),
);

$categories = get_categories(
	array(
		'taxonomy'   => 'category',
		'hide_empty' => true,
		'parent'     => 0,
		'orderby'    => 'name',
		'order'      => 'ASC',
	)
);

if ( ! is_wp_error( $categories ) ) {
	foreach ( $categories as $category ) {
		$url = get_term_link( $category );
		if ( is_wp_error( $url ) ) {
			continue;
		}

		$filters[] = array(
			'label'  => $category->name,
			'url'    => $url,
			'active' => is_category( $category->term_id ),
		);
	}
}

$counts = wp_count_posts( 'post' );
$count  = ( isset( $counts->publish ) ) ? (int) $counts->publish : 0;

$count_label = sprintf(
	/* translators: %s: number of published stories */
	_n( '%s story', '%s stories', $count, 'kahel' ),
	number_format_i18n( $count )
);

?>
<!-- wp:group {"align":"wide","className":"kahel-archive-tools","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide kahel-archive-tools">
	<!-- wp:html -->
	<nav class="kahel-archive-filters" aria-label="<?php echo esc_attr__( 'Filter stories', 'kahel' ); ?>">
		<?php foreach ( $filters as $filter ) : ?>
			<a
				class="kahel-archive-filter<?php echo ! empty( $filter['active'] ) ? ' is-active' : ''; ?>"
				href="<?php echo esc_url( $filter['url'] ); ?>"
				<?php echo ! empty( $filter['active'] ) ? ' aria-current="page"' : ''; ?>
			><?php echo esc_html( $filter['label'] ); ?></a>
		<?php endforeach; ?>
	</nav>
	<!-- /wp:html -->

	<!-- wp:paragraph {"className":"kahel-archive-count"} -->
	<p class="kahel-archive-count"><?php echo esc_html( $count_label ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

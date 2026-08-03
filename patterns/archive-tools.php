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

$filter_defs = array(
	array(
		'label' => __( 'All', 'kahel' ),
		'url'   => $all_url,
		'active'=> $all_active,
	),
	array(
		'label' => __( 'Places', 'kahel' ),
		'slug'  => 'places',
	),
	array(
		'label' => __( 'Food', 'kahel' ),
		'slug'  => 'food',
	),
	array(
		'label' => __( 'Craft', 'kahel' ),
		'slug'  => 'craft',
	),
	array(
		'label' => __( 'Field notes', 'kahel' ),
		'slug'  => 'field-notes',
	),
);

$filters = array();
foreach ( $filter_defs as $def ) {
	if ( isset( $def['url'] ) ) {
		$filters[] = $def;
		continue;
	}

	$term = get_term_by( 'slug', $def['slug'], 'category' );
	$url  = ( $term && ! is_wp_error( $term ) ) ? get_term_link( $term ) : $all_url;
	if ( is_wp_error( $url ) ) {
		$url = $all_url;
	}

	$filters[] = array(
		'label'  => $def['label'],
		'url'    => $url,
		'active' => $term && ! is_wp_error( $term ) && is_category( $term->term_id ),
	);
}

if ( is_category() ) {
	$term  = get_queried_object();
	$count = ( $term && isset( $term->count ) ) ? (int) $term->count : 0;
} else {
	$counts = wp_count_posts( 'post' );
	$count  = isset( $counts->publish ) ? (int) $counts->publish : 0;
}

$count_label = sprintf(
	/* translators: %s: number of stories */
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

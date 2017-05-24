<?php
// Register Taxonomy Location
// Taxonomy Key: location
function create_location_tax() {

	$labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name', 'coa-location' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'coa-location' ),
		'search_items'      => __( 'Search Locations', 'coa-location' ),
		'all_items'         => __( 'All Locations', 'coa-location' ),
		'parent_item'       => __( 'Parent Location', 'coa-location' ),
		'parent_item_colon' => __( 'Parent Location:', 'coa-location' ),
		'edit_item'         => __( 'Edit Location', 'coa-location' ),
		'update_item'       => __( 'Update Location', 'coa-location' ),
		'add_new_item'      => __( 'Add New Location', 'coa-location' ),
		'new_item_name'     => __( 'New Location Name', 'coa-location' ),
		'menu_name'         => __( 'Location', 'coa-location' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'coa-location' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
	);
	register_taxonomy( 'location', array('post'), $args );

}
add_action( 'init', 'create_location_tax' );

// Journal CPT
/*
function register_cpt_journal() {

	$labels = array(
		'name' => __( 'Journals', 'journal' ),
		'singular_name' => __( 'Journal', 'journal' ),
		'add_new' => __( 'Add New', 'journal' ),
		'add_new_item' => __( 'Add New Journal', 'journal' ),
		'edit_item' => __( 'Edit Journal', 'journal' ),
		'new_item' => __( 'New Journal', 'journal' ),
		'view_item' => __( 'View Journal', 'journal' ),
		'search_items' => __( 'Search Journals', 'journal' ),
		'not_found' => __( 'No journals found', 'journal' ),
		'not_found_in_trash' => __( 'No journals found in Trash', 'journal' ),
		'parent_item_colon' => __( 'Parent Journal:', 'journal' ),
		'menu_name' => __( 'Journals', 'journal' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'comments', 'revisions', 'page-attributes' ),
		'taxonomies' => array( 'category', 'post_tag', 'location' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-book',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);

	register_post_type( 'journal', $args );
}
add_action( 'init', 'register_cpt_journal' );
*/

// Locations List
function coa_get_the_locations() {
	$args = array( 'hide_empty=0' );
 
	$terms = get_terms( array('taxonomy'=>'location', $args ) );
	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	    $count = count( $terms );
	    $i = 0;
	    $term_list = '<p class="my_term-archive">';
	    foreach ( $terms as $term ) {
	        $i++;
	        $term_list .= '<a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a>';
	        if ( $count != $i ) {
	            $term_list .= ' &middot; ';
	        }
	        else {
	            $term_list .= '</p>';
	        }
	    }
	    echo $term_list;
	}
}
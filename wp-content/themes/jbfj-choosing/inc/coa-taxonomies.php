<?php
// Register Taxonomy Location
// Taxonomy Key: location
function create_location_tax() {

	$labels = array(
		'name'              => _x( 'Locations', 'taxonomy general name', 'coa-locations' ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', 'coa-locations' ),
		'search_items'      => __( 'Search Locations', 'coa-locations' ),
		'all_items'         => __( 'All Locations', 'coa-locations' ),
		'parent_item'       => __( 'Parent Location', 'coa-locations' ),
		'parent_item_colon' => __( 'Parent Location:', 'coa-locations' ),
		'edit_item'         => __( 'Edit Location', 'coa-locations' ),
		'update_item'       => __( 'Update Location', 'coa-locations' ),
		'add_new_item'      => __( 'Add New Location', 'coa-locations' ),
		'new_item_name'     => __( 'New Location Name', 'coa-locations' ),
		'menu_name'         => __( 'Location', 'coa-locations' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Locations', 'coa-locations' ),
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

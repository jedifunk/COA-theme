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

// Grab first image in post & use as thumbnail
//Grab image
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  // if(empty($first_img)) {
  //   $first_img = "/path/to/default.png";
  // }
  return $first_img;
}

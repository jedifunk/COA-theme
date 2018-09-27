<?php
// Add image sizes
add_image_size( 'large_sq', 575, 575, true );
add_image_size( 'med_vert', 375, 500, true );

// Use first image as featured image
function main_image($size=null) {
    $args = array(
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'order' => 'desc'
    );
	$files = get_children($args);

	if ($files) :
		$keys = array_reverse(array_keys($files));
		$j = 0;
		$num = $keys[$j];
		$image = wp_get_attachment_image($num, $size);
		$imagepieces = explode('"', $image);
		$imagepath = $imagepieces[1];
		$main = wp_get_attachment_url($num);

		return $image;
	endif;
}

// Output PHP to console when needed ... just call console(your stuff here)
function console($data) {
    echo("<script>console.log('PHP: ".$data."');</script>");
}
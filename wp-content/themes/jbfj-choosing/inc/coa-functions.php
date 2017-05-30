<?php
function main_image() {
	$files = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image&order=desc');
	
	if($files) :
		$keys = array_reverse(array_keys($files));
		$j=0;
		$num = $keys[$j];
		$image=wp_get_attachment_image($num, 'large', true);
		$imagepieces = explode('"', $image);
		$imagepath = $imagepieces[1];
		$main=wp_get_attachment_url($num);
		$template=get_template_directory();
		$the_title=get_the_title();
		print "<img src='$main' alt='$the_title' class='frame' />";
	endif;
}
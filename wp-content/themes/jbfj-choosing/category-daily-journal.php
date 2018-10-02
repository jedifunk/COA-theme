<?php
/**
 * Journal Archive page
 *
 * @package Choosing_Our_Adventure
 */

get_header();

$journal = get_queried_object();

$locations = get_terms(
	array(
		'taxonomy' => 'location',
		'hide_empty' => 0
	)
);
?>

	<div id="primary" class="content-area wrapper">
		<header class="page-header">
			<?php
			echo $journal->name;
			?>
		</header><!-- .page-header -->

		<div class="grid-wrapper">
			<main id="main" class="site-main" role="main">
				<ul>
				<?php
				foreach ($locations as $location) :
					$args = array(
						'location' => $location->slug,
						'category' => $journal->slug,
					);

					echo '<li><h2>';
					echo $location->name;
					echo '</h2></li>';



			endforeach;
			 ?>
		 </ul>
			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php
get_footer();

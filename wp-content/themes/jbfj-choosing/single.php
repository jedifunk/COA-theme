<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Choosing_Our_Adventure
 */

get_header(); ?>

	<div id="primary" class="content-area wrapper">
		<div class="grid-wrapper">
			<main id="main" class="site-main" role="main">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					the_post_navigation(
						array(
							'prev_text' => __('<i class="fa fa-angle-left"></i> %title'),
							'next_text' => __('%title <i class="fa fa-angle-right"></i>')
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php
get_footer();

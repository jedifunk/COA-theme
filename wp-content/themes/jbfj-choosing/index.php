<?php
/**
 * The main template file
 *
 * @package Choosing_Our_Adventure
 */

get_header();

if ( ! is_paged() ) :

include_once('h.php');

else : ?>

	<div id="primary" class="content-area wrapper">
		<div class="grid-wrapper">
			<main class="content inner-grid">

			<?php
			if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

				    get_template_part( 'template-parts/content', 'simple' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
			<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php
endif;

get_footer();

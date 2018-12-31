<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Choosing_Our_Adventure
 */

get_header(); ?>

	<div id="primary" class="content-area wrapper">
		<header class="page-header">
    		    <h1 class="page-title">
			<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				single_term_title();
			?>
    		    </h1>
		</header><!-- .page-header -->

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
		</div>
	</div><!-- #primary -->

<?php
get_footer();

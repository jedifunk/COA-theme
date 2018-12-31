<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Choosing_Our_Adventure
 */

get_header(); ?>

	<section id="primary" class="content-area wrapper">
        
        <header class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'jbfj-choosing' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header><!-- .page-header -->
		
		<div class="grid-wrapper">
		    <main id="main" class="content inner-grid">
        		<?php
        		if ( have_posts() ) :
        		
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
	</section><!-- #primary -->

<?php
get_footer();

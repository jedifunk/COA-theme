<?php
/**
 * Homepage
 *
 * @package Choosing_Our_Adventure
 */
get_header(); ?>

	<div id="primary" class="content-area wrapper">
		<main id="main" class="site-main" role="main">
			
			<div class="featured flex-wrapper">
				<?php 
					$args = array(
						'post_status' => 'publish',
						'cat' => 9,
						'posts_per_page' => 2,
						
						
					);
					
					$feat = new WP_Query( $args );
					
					if ( $feat->have_posts() ) : while ( $feat->have_posts() ) : $feat->the_post();
					
					// Get BKG image
					if ( get_the_post_thumbnail($post->ID) != '' ) {
					   $feat_img = the_post_thumbnail();					
					} else {
						$feat_img = main_image();					
					}
					
				?>
					<div class="featured-item" style="background-image:<?php echo $feat_img; ?>">
						<div class="featured-item-content">
							<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
							<div class="entry-meta">
								<?php jbfj_choosing_posted_on(); ?>
							</div><!-- .entry-meta -->
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer();
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
						//$feat_img = main_image();
						$feat_img = 'http://placehold.it/500x500';
					}

				?>
					<div class="featured-item">
						<figure>
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<img src="<?php echo $feat_img; ?>" alt="<?php the_title(); ?>" />
							</a>
							<figcaption>
								<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
								<div class="entry-meta">
									<?php jbfj_choosing_posted_on(); ?>
								</div><!-- .entry-meta -->
							</figcaption>
						</figure>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>

			<div class="featured featured-lg flex-wrapper">
				<?php
					$args = array(
						'post_status' => 'publish',
						'cat' => 9,
						'posts_per_page' => 3,
					);

					$feat = new WP_Query( $args );

					if ( $feat->have_posts() ) : while ( $feat->have_posts() ) : $feat->the_post();

					// Get BKG image
					if ( get_the_post_thumbnail($post->ID) != '' ) {
					   $feat_img = the_post_thumbnail();
					} else {
						//$feat_img = main_image();
						$feat_img = 'http://placehold.it/300x500';
					}

				?>
					<div class="featured-item">
						<figure>
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<img src="<?php echo $feat_img; ?>" alt="<?php the_title(); ?>" />
							</a>
							<figcaption>
								<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
								<div class="entry-meta">
									<?php jbfj_choosing_posted_on(); ?>
								</div><!-- .entry-meta -->
							</figcaption>
						</figure>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>

			<div class="grid-wrapper">

				<div class="content inner-grid">
					<?php
					$args = array(
						'cat' => 15,
						'category__not_in' => 4
					);
					$all = new WP_Query( $args );
					if ( $all->have_posts() ) : while ( $all->have_posts() ) : $all->the_post();
						get_template_part( 'template-parts/content', 'front' );
					endwhile; wp_reset_postdata(); endif; ?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();

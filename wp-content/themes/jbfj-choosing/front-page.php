<?php
/**
 * Homepage
 *
 * @package Choosing_Our_Adventure
 */
get_header(); ?>

	<div class="hero">
		<?php
			if ( get_theme_mod( 'hero_image' ) ) :
		?>
		<img src="<?php echo get_theme_mod( 'hero_image' ); ?>" />
		<?php else : ?>
		<img src="http://placehold.it/1600x600" />
		<?php endif; ?>
	</div>
	<div id="primary" class="content-area wrapper">
		<main id="main" class="site-main" role="main">

			<div class="featured flex-wrapper">
				<?php
					$args = array(
						'post_status' => 'publish',
						//'category_name' => 'featured',
						'post__in' => get_option( 'sticky_posts' ),
						'posts_per_page' => 2,
						'ignore_sticky_posts' => 1
					);

					$feat = new WP_Query( $args );

					if ( $feat->have_posts() ) : while ( $feat->have_posts() ) : $feat->the_post();

					// Get BKG image
					if ( get_the_post_thumbnail($post->ID) != '' ) {
					   $feat_img = the_post_thumbnail();
					} else {
						//$feat_img = main_image();
						$feat_img = 'http://placehold.it/575x575';
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
									<?php jbfj_choosing_entry_footer($post->ID); ?>
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
						//'category_name' => 'featured',
						'post__in' => get_option( 'sticky_posts' ),
						'offset' => 2,
						'posts_per_page' => 3,
						'ignore_sticky_posts' => 1
					);

					$feat = new WP_Query( $args );

					if ( $feat->have_posts() ) : while ( $feat->have_posts() ) : $feat->the_post();

					// Get BKG image
					if ( get_the_post_thumbnail($post->ID) != '' ) {
					   $feat_img = the_post_thumbnail();
					} else {
						//$feat_img = main_image();
						$feat_img = 'http://placehold.it/375x500';
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
									<?php jbfj_choosing_entry_footer($post->ID); ?>
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
						'category__not_in' => 4,
						'ignore_sticky_posts' => 1,
						'paged' => $paged
					);
					$all = new WP_Query( $args );
					if ( $all->have_posts() ) : while ( $all->have_posts() ) : $all->the_post();
						get_template_part( 'template-parts/content', 'front' );
					endwhile;
					the_posts_navigation(
						array(
							'prev_text' => __('<i class="fa fa-angle-left"></i> Older Posts'),
							'next_text' => __('Newer Posts <i class="fa fa-angle-right"></i>')
						)
					);
					wp_reset_postdata(); endif; ?>
				</div>

				<?php get_sidebar(); ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();

<?php
/*
* Front page only
*
* @package Choosing_Our_Adventure
*/
// Get BKG image
if ( get_the_post_thumbnail($post->ID) != '' ) {
   $feat_img = the_post_thumbnail();
} else {
	$feat_img = main_image();
	//$feat_img = 'http://placehold.it/500x250';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<img src="<?php echo $feat_img; ?>" alt="<?php the_title(); ?>" />
		</a>
		<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php jbfj_choosing_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'jbfj-choosing' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jbfj-choosing' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php jbfj_choosing_entry_footer($post->ID); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
/**
 * The header for our theme
 *
 * @package Choosing_Our_Adventure
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jbfj-choosing' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper flex-wrapper">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'menu' => 'main-nav' ) ); ?>
			</nav><!-- #site-navigation -->
			<?php get_search_form(); ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

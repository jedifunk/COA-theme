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
<meta name="google-site-verification" content="wWM0iUQAaJfYOliJ1qqOwls-eCBbw-TWQqNOBlE5ao0" />
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TC542ZZ');</script>
<!-- End Google Tag Manager -->

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
				<?php wp_nav_menu( array( 'menu' => 'main-nav', 'container' => '' ) ); ?>
			</nav><!-- #site-navigation -->
			<?php get_search_form(); ?>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

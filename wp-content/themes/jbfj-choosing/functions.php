<?php
/**
 * Choosing Our Adventure functions and definitions
 *
 * @package Choosing_Our_Adventure
 */

if ( ! function_exists( 'jbfj_choosing_setup' ) ) :

function jbfj_choosing_setup() {

	load_theme_textdomain( 'jbfj-choosing', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'jbfj-choosing' ),
	) );
	
}
endif;
add_action( 'after_setup_theme', 'jbfj_choosing_setup' );

function jbfj_choosing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jbfj_choosing_content_width', 640 );
}
add_action( 'after_setup_theme', 'jbfj_choosing_content_width', 0 );

function jbfj_choosing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jbfj-choosing' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jbfj-choosing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jbfj_choosing_widgets_init' );


function jbfj_choosing_scripts() {
	wp_enqueue_style( 'jbfj-choosing-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jbfj_choosing_scripts' );

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';

<?php
/**
 * Choosing Our Adventure Theme Customizer
 *
 * @package Choosing_Our_Adventure
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function jbfj_choosing_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'hero_image' )->transport = 'postMessage';

	// Add Hero Section
	$wp_customize->add_section( 'hero' , array(
	    'title' => __( 'Hero Image', 'jbfj-choosing' ),
	    'priority' => 1
	) );
	// Add Logo Settings
	$wp_customize->add_setting( 'hero_image' , array( 'default' => '' ));
	$wp_customize->add_control(
		new WP_Customize_Image_Control( $wp_customize, 'hero_image', array(
			    'label' => __( 'Hero Image', 'jbfj-choosing' ),
			    'section' => 'hero',
	            'settings' => 'hero_image'
			)
		)
	);
}
add_action( 'customize_register', 'jbfj_choosing_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function jbfj_choosing_customize_preview_js() {
	wp_enqueue_script( 'jbfj_choosing_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'jbfj_choosing_customize_preview_js' );

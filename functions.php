<?php

/* ---------------------------------------------------------------------------------------------
   THEME SETUP
   --------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'southwicklow_setup' ) ) {

	function southwicklow_setup() {

		// Automatic feed
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size
		set_post_thumbnail_size( 870, 9999 );

		// Custom Image Sizes
		add_image_size( 'southwicklow_fullscreen', 1860, 9999 );

		// Custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 300,
			'width'       => 600,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery' ) );

		// Declare WooCommerce support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Title tag
		add_theme_support( 'title-tag' );

				//add CSS
//		add_editor_style('/assets/plugins/bootstrap/css/bootstrap.min.css');
//		add_editor_style('/assets/css/essentials.css');
//		add_editor_style('/assets/css/layout.css');
//		add_editor_style('/assets/css/header-1.css');
//		add_editor_style('/assets/css/color_scheme/orange.css');
//		add_editor_style('/assets/css/cocoen.min.css');

		// Add nav menu
		register_nav_menu( 'primary-menu', __( 'Primary Menu', 'southwicklow' ) );
		register_nav_menu( 'footer-menu', __( 'Footer Menu', 'southwicklow-Footer' ) );
		register_nav_menu( 'social-menu', __( 'Social Menu', 'southwicklow-Social' ) );

		// Add excerpts to pages
		add_post_type_support( 'page', array( 'excerpt' ) );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Make the theme translation ready
		load_theme_textdomain( 'southwicklow', get_template_directory() . '/languages' );
		
		
		wp_enqueue_style( 'southwicklow-style', get_template_directory_uri() . '/style.css', $dependencies );

	}
	add_action( 'after_setup_theme', 'southwicklow_setup' );

	function wmpudev_enqueue_icon_stylesheet() {
		wp_register_style( 'fontawesome', 'https:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'fontawesome');
	}
	add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );

} // End if().


class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}
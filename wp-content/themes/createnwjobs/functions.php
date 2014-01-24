<?php
/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 900;

function createnwjobs_setup() {
	/*
	 * Makes Simple fluid available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Simple Fluid, use a find and replace
	 * to change 'createnwjobs' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'createnwjobs', get_template_directory() . '/languages' );
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	//add_theme_support('nav-menu');
	register_nav_menu( 'primary', __( 'Primary Menu', 'createnwjobs' ) );
        register_nav_menu( 'secondary', __( 'Secondary Menu', 'createnwjobs' ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => '', 'default-image' => '', 'wp-head-callback' => '_custom_background_cb', 'admin-head-callback' => '', 'admin-preview-callback' => ''
	));

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'createnwjobs_setup' );
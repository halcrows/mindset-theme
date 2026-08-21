<?php

function mindset_enqueues() {
	// Load style.css on the front-end
	wp_enqueue_style(
		'mindset-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);

	// Load normalize.css
	wp_enqueue_style(
		'mindset-normalize',
		get_theme_file_uri( 'assets/css/normalize.css' ),
		array(),
		'12.1.0'
	);

	// Load the Scroll to Top script
	wp_enqueue_script(
		'mindset-scroll-to-top',
		get_theme_file_uri( 'assets/js/scroll-to-top.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		array( 'strategy' => 'defer' )
	);

    // Load the Contact Scroll Color script on the contact page
    if ( is_page( 'contact' ) ) {
	wp_enqueue_script(
		'mindset-contact-scroll-color',
		get_theme_file_uri( 'assets/js/contact-scroll-color.js' ),
		array( 'mindset-scroll-to-top' ),
		wp_get_theme()->get( 'Version' ),
		array( 'strategy' => 'defer' )
	);
}
}
add_action( 'wp_enqueue_scripts', 'mindset_enqueues' );

function mindset_setup() {
	// Load style.css in the Site and Block Editor
	add_editor_style( get_stylesheet_uri() );

    // Crop images to 400px by 200px
    add_image_size( '400x200', 400, 200, true );

    // Crop images to 800px by 400px
    add_image_size( '800x400', 800, 400, true );
}
add_action( 'after_setup_theme', 'mindset_setup' );

// Make custom sizes selectable from WordPress admin.
function mindset_add_custom_image_sizes( $size_names ) {
	$new_sizes = array(
        '400x200' => __( '400x200', 'mindset-theme' ),
        '800x400' => __( '800x400', 'mindset-theme' ),
	);

	return array_merge( $size_names, $new_sizes );
}
add_filter( 'image_size_names_choose', 'mindset_add_custom_image_sizes' );

// Load custom blocks.
require get_theme_file_path() . '/mindset-blocks/mindset-blocks.php';

/**
* Custom Post Types & Custom Taxonomies
*/
require get_template_directory() . '/inc/post-types-taxonomies.php';
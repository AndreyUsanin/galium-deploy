<?php 

function _themename_assets() {
	wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'tiny-slider', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( '_themename-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts','_themename_assets');


function _themename_admin_assets() {
	wp_enqueue_style( '_themename-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( '_themename-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true);
}

add_action('admin_enqueue_scripts','_themename_admin_assets');
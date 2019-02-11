<?php

require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');


function theme_features(){
  add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('page_doc_main', 300, 400, true);
	add_image_size('page_doc_thumb', 150, 150, true);
  register_nav_menu('mainMenuLocation', 'Main Menu');
  register_nav_menu('sideMenuLocation', 'Side Menu');
}

add_action('after_setup_theme', 'theme_features');

// ACF OPTION PAGE

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
}


function wph_add_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['pls'] = 'text/playlist';
  return $mimes;
}
add_filter('upload_mimes', 'wph_add_mime_types');


// REMOVE CF7 TAGS
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
    return false;
} 

?>
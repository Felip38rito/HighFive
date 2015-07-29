<?php 
/**
 * Highfive functions and definitions
 * 
 * Functions that are used as html helpers in this theme are prefixed with h5_
 * 
 */ 

function h5_get_content($content, $option = null) {
	return get_template_part('templates/content/' . $content, $option);
}

function h5_get_partial($partial, $option = null) {
	return get_template_part('templates/partials/' . $partial, $option);
}

function h5_get_stylesheet($name, $media = 'screen') {
	return printf('<link rel="stylesheet" href="%s/assets/css/%s.css" media="%s">'."\n", get_template_directory_uri(), $name, $media);
}

function h5_get_script($name) {
	return printf('<script type="text/javascript" src="%s/assets/js/%s"></script>'."\n", get_template_directory_uri(), $name);
}


/**
 * Functions to the WP core
 * 
 * First of all: Removing the emoji REQUIRED support on wordpress
 */

add_action('init', 'h5_remove_emoji');
 
function h5_remove_emoji() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'h5_remove_tinymce_emoji' );
} 

function h5_remove_tinymce_emoji($plugins) {
	if(!is_array($plugins)) {
		return array();
	}

	return array_diff( $plugins, array( 'wpemoji' ) );
}


<?php
/*
Plugin Name: CF _url() Shortcodes
Description: Shortcode access to WordPress' _url() functions.
Version: 1.0
Author: Crowd Favorite
Author URI: http://crowdfavorite.com
*/

// ini_set('display_errors', '1'); ini_set('error_reporting', E_ALL);

function cfurlsc_content_url($atts) {
	extract(shortcode_atts(array(
		'path' => null
	), $atts));
	return content_url($path);
}
add_shortcode('content_url', 'cfurlsc_content_url');

function cfurlsc_admin_url($atts) {
	extract(shortcode_atts(array(
		'path' => null
	), $atts));
	return admin_url($path);
}
add_shortcode('admin_url', 'cfurlsc_admin_url');

function cfurlsc_site_url($atts) {
	extract(shortcode_atts(array(
		'path' => null
	), $atts));
	return site_url($path);
}
add_shortcode('site_url', 'cfurlsc_site_url');

function cfurlsc_includes_url($atts) {
	extract(shortcode_atts(array(
		'path' => null
	), $atts));
	return includes_url($path);
}
add_shortcode('includes_url', 'cfurlsc_includes_url');

function cfurlsc_plugins_url($atts) {
	extract(shortcode_atts(array(
		'path' => null
	), $atts));
	return plugins_url($path);
}
add_shortcode('plugins_url', 'cfurlsc_plugins_url');


function cfurlsc_home_url($atts) {
	extract(shortcode_atts(array(
		'path' => null
	), $atts));
	return str_replace(get_bloginfo('wpurl'), get_bloginfo('home'), site_url($path));
}
add_shortcode('home_url', 'cfurlsc_home_url');

?>
<?php
/*
Plugin Name: PreviewApp
Plugin URI: https://preview.team/
Description: Plugin d'installation de preview sur votre site wordpress
Version: 1.1.9
Author: Preview
Author URI: https://preview.team/
License: GPL2
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define( 'PREVIEWAPP_VERSION', '4.0.3' );
define( 'PREVIEWAPP__MINIMUM_WP_VERSION', '3.1' );

// modification des headers pour les mettre en SameOrigin quand preview est activ
@header('X-FRAME-OPTIONS: ALLOW-FROM https://projects.preview.team');
@header('Access-Control-Allow-Origin: *');

add_action('wp_head', function() {
	wp_enqueue_script('PreViewApp', '//projects.preview.team/injection.min.js');
});
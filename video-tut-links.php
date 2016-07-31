<?php
/*
Plugin Name: Video Tutorials Links
Plugin URI: http://alexrusin.com/p=101
Description: This pluggin adds video tutorials that open in colorbox to the tool (admin) bar
Version: 1.0.0
Author: Alex Rusin
Author URI: http://alexrusin.com
License: GPL2
*/

if(!defined('ABSPATH')){
	exit;
}

define('VERSION', 1);

function vtut_enqueue_scripts(){
	wp_enqueue_style(
		'colorbox-style',
		plugins_url('css/colorbox.css', __FILE__)
		);

	wp_enqueue_script(
		'jquery-colorbox',
		plugins_url('js/jquery.colorbox.js', __FILE__),
		array('jquery'),
		VERSION,
		false
	);

	wp_enqueue_script(
		'open-link',
		plugins_url('js/open-link.js', __FILE__),
		array('jquery', 'jquery-colorbox'),
		VERSION,
		false
	);
}

add_action( 'init', 'vtut_enqueue_scripts');

require_once (plugin_dir_path(__FILE__).'admin-toolbar-menu.php');
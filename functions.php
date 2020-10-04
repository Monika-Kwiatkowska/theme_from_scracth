<?php
	
function penguin_script_enqueue() {
	
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/penguin.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/penguin.js', array(), '1.0.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'penguin_script_enqueue');

function penguin_theme_setup() {
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'penguin_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
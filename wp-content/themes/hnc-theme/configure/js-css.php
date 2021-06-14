<?php

function _add_javascript() {
	wp_enqueue_script('slick-slider', get_stylesheet_directory_uri() . '/assets/vendor/slick/slick.min.js',array('jquery'), false, true );
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/assets/dist/js/main.js',array('jquery'), false, true );
}
add_action('wp_enqueue_scripts', '_add_javascript', 100);

function _add_stylesheets() {
	wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
	wp_enqueue_style('Font_Awesome');
	wp_enqueue_style( 'slick-css', untrailingslashit( get_template_directory_uri() ) . '/assets/vendor/slick/slick.css', [], false, 'all' );
	wp_enqueue_style( 'slick-theme-css', untrailingslashit( get_template_directory_uri() ) . '/assets/vendor/slick/slick-theme.css', ['slick-css'], false, 'all' );
	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/dist/css/main.css', array(), null, 'all' );
}
add_action('wp_enqueue_scripts', '_add_stylesheets');


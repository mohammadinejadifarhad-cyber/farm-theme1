<?php
// functions.php

// Theme setup
function farm_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'farm'),
        'footer' => __('Footer Menu', 'farm'),
    ));
}
add_action('after_setup_theme', 'farm_setup');

// Enqueue styles and scripts
function farm_enqueue_scripts() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'farm_enqueue_scripts');

// Custom post types
require get_template_directory() . '/inc/custom-post-types.php';

// Customizer settings
require get_template_directory() . '/inc/customizer.php';
?>
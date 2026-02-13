<?php
// Setup theme features and functionality

function farm_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register a custom navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'farm'),
    ));

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
}

// Hook the setup function to the after_setup_theme action
add_action('after_setup_theme', 'farm_setup');
?>
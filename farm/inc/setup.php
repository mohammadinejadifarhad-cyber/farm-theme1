<?php
/**
 * Setup theme features and functionality.
 *
 * @package farm
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'farm_setup' ) ) {
    function farm_setup() {
        add_theme_support( 'post-thumbnails' );

        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'farm' ),
                'footer'  => __( 'Footer Menu', 'farm' ),
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        add_theme_support(
            'custom-logo',
            array(
                'height'      => 100,
                'width'       => 400,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );

        add_theme_support( 'title-tag' );
    }
}
add_action( 'after_setup_theme', 'farm_setup' );

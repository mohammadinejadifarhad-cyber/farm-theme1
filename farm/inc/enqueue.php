<?php
/**
 * Enqueue scripts and styles.
 *
 * @package farm
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'farm_enqueue_scripts' ) ) {
    function farm_enqueue_scripts() {
        wp_enqueue_style(
            'farm-main-style',
            get_template_directory_uri() . '/assets/css/main.css',
            array(),
            defined( 'FARM_VERSION' ) ? FARM_VERSION : '1.0.0'
        );

        wp_enqueue_script(
            'farm-main-script',
            get_template_directory_uri() . '/assets/js/main.js',
            array( 'jquery' ),
            defined( 'FARM_VERSION' ) ? FARM_VERSION : '1.0.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'farm_enqueue_scripts' );

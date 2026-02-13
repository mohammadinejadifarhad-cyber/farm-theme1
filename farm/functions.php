<?php
/**
 * Theme bootstrap file.
 *
 * @package farm
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! defined( 'FARM_VERSION' ) ) {
    $theme = wp_get_theme();
    define( 'FARM_VERSION', $theme->get( 'Version' ) ? $theme->get( 'Version' ) : '1.0.0' );
}

$farm_includes = array(
    '/inc/setup.php',
    '/inc/enqueue.php',
    '/inc/customizer.php',
);

foreach ( $farm_includes as $farm_file ) {
    $farm_path = get_template_directory() . $farm_file;
    if ( file_exists( $farm_path ) ) {
        require_once $farm_path;
    }
}

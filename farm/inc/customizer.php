<?php
/**
 * Theme customizer settings.
 *
 * @package farm
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'farm_customize_register' ) ) {
    function farm_customize_register( $wp_customize ) {
        $wp_customize->add_section(
            'farm_theme_options',
            array(
                'title'    => __( 'Theme Options', 'farm' ),
                'priority' => 30,
            )
        );

        $wp_customize->add_setting(
            'farm_logo',
            array(
                'sanitize_callback' => 'absint',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'farm_logo_control',
                array(
                    'label'    => __( 'Upload Logo', 'farm' ),
                    'section'  => 'farm_theme_options',
                    'settings' => 'farm_logo',
                )
            )
        );

        $wp_customize->add_setting(
            'farm_footer_text',
            array(
                'default'           => '© ' . wp_date( 'Y' ) . ' Your Company Name. All rights reserved.',
                'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
            'farm_footer_text_control',
            array(
                'label'    => __( 'Footer Text', 'farm' ),
                'section'  => 'farm_theme_options',
                'settings' => 'farm_footer_text',
                'type'     => 'text',
            )
        );
    }
}
add_action( 'customize_register', 'farm_customize_register' );

<?php
function farm_customize_register( $wp_customize ) {
    // Add a section for the theme options
    $wp_customize->add_section( 'farm_theme_options', array(
        'title'    => __( 'Theme Options', 'farm' ),
        'priority' => 30,
    ) );

    // Add a setting for the logo
    $wp_customize->add_setting( 'farm_logo' );

    // Add a control for the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'farm_logo_control', array(
        'label'    => __( 'Upload Logo', 'farm' ),
        'section'  => 'farm_theme_options',
        'settings' => 'farm_logo',
    ) ) );

    // Add a setting for the footer text
    $wp_customize->add_setting( 'farm_footer_text', array(
        'default' => __( '© ' . date( 'Y' ) . ' Your Company Name. All rights reserved.', 'farm' ),
    ) );

    // Add a control for the footer text
    $wp_customize->add_control( 'farm_footer_text_control', array(
        'label'    => __( 'Footer Text', 'farm' ),
        'section'  => 'farm_theme_options',
        'settings' => 'farm_footer_text',
        'type'     => 'text',
    ) );
}

add_action( 'customize_register', 'farm_customize_register' );
?>
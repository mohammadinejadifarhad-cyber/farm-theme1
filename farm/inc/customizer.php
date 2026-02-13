<?php
function farm_customize_register( $wp_customize ) {
    // افزودن یک بخش برای گزینه‌های پوسته
    $wp_customize->add_section( 'farm_theme_options', array(
        'title'    => __( 'گزینه‌های پوسته', 'farm' ),
        'priority' => 30,
    ) );

    // افزودن تنظیمات لوگو
    $wp_customize->add_setting( 'farm_logo' );

    // افزودن کنترل لوگو
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'farm_logo_control', array(
        'label'    => __( 'بارگذاری لوگو', 'farm' ),
        'section'  => 'farm_theme_options',
        'settings' => 'farm_logo',
    ) ) );

    // افزودن تنظیمات متن پابرگ
    $wp_customize->add_setting( 'farm_footer_text', array(
        'default' => __( '© ' . date( 'Y' ) . ' نام شرکت شما. تمامی حقوق محفوظ است.', 'farm' ),
    ) );

    // افزودن کنترل متن پابرگ
    $wp_customize->add_control( 'farm_footer_text_control', array(
        'label'    => __( 'متن پابرگ', 'farm' ),
        'section'  => 'farm_theme_options',
        'settings' => 'farm_footer_text',
        'type'     => 'text',
    ) );
}

add_action( 'customize_register', 'farm_customize_register' );
?>

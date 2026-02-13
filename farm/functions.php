<?php
// فایل functions.php

// راه‌اندازی پوسته
function farm_setup() {
    // افزودن پشتیبانی از تصویر شاخص
    add_theme_support('post-thumbnails');

    // ثبت فهرست‌های ناوبری
    register_nav_menus(array(
        'primary' => __('فهرست اصلی', 'farm'),
        'footer' => __('فهرست پابرگ', 'farm'),
    ));
}
add_action('after_setup_theme', 'farm_setup');

// بارگذاری استایل‌ها و اسکریپت‌ها
function farm_enqueue_scripts() {
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'farm_enqueue_scripts');

// نوع نوشته‌های سفارشی
require get_template_directory() . '/inc/custom-post-types.php';

// تنظیمات سفارشی‌ساز
require get_template_directory() . '/inc/customizer.php';
?>

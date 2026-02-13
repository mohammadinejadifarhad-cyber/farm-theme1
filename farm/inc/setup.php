<?php
// راه‌اندازی قابلیت‌ها و امکانات پوسته

function farm_setup() {
    // افزودن پشتیبانی از تصویر شاخص
    add_theme_support('post-thumbnails');

    // ثبت فهرست ناوبری سفارشی
    register_nav_menus(array(
        'primary' => __('فهرست اصلی', 'farm'),
    ));

    // افزودن پشتیبانی از نشانه‌گذاری HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // افزودن پشتیبانی از لوگوی سفارشی
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));
}

// اتصال تابع راه‌اندازی به اکشن after_setup_theme
add_action('after_setup_theme', 'farm_setup');
?>

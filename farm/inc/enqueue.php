<?php
function farm_enqueue_scripts() {
    // بارگذاری فایل استایل اصلی
    wp_enqueue_style('farm-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');

    // بارگذاری فایل جاوااسکریپت اصلی
    wp_enqueue_script('farm-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'farm_enqueue_scripts');
?>

<?php
// ثبت نوع نوشته سفارشی برای محصولات
function farm_register_product_post_type() {
    $labels = array(
        'name'                  => _x('محصولات', 'Post Type General Name', 'farm'),
        'singular_name'         => _x('محصول', 'Post Type Singular Name', 'farm'),
        'menu_name'             => __('محصولات', 'farm'),
        'name_admin_bar'        => __('محصول', 'farm'),
        'archives'              => __('بایگانی محصولات', 'farm'),
        'attributes'            => __('ویژگی‌های محصول', 'farm'),
        'parent_item_colon'     => __('محصول مادر:', 'farm'),
        'all_items'             => __('همه محصولات', 'farm'),
        'add_new_item'          => __('افزودن محصول جدید', 'farm'),
        'add_new'               => __('افزودن جدید', 'farm'),
        'new_item'              => __('محصول جدید', 'farm'),
        'edit_item'             => __('ویرایش محصول', 'farm'),
        'update_item'           => __('به‌روزرسانی محصول', 'farm'),
        'view_item'             => __('مشاهده محصول', 'farm'),
        'view_items'            => __('مشاهده محصولات', 'farm'),
        'search_items'          => __('جستجوی محصول', 'farm'),
        'not_found'             => __('یافت نشد', 'farm'),
        'not_found_in_trash'    => __('در زباله‌دان یافت نشد', 'farm'),
        'featured_image'        => __('تصویر شاخص', 'farm'),
        'set_featured_image'    => __('تنظیم تصویر شاخص', 'farm'),
        'remove_featured_image' => __('حذف تصویر شاخص', 'farm'),
        'use_featured_image'    => __('استفاده به‌عنوان تصویر شاخص', 'farm'),
        'insert_into_item'      => __('درج در محصول', 'farm'),
        'uploaded_to_this_item' => __('بارگذاری‌شده برای این محصول', 'farm'),
        'items_list'            => __('فهرست محصولات', 'farm'),
        'items_list_navigation'  => __('ناوبری فهرست محصولات', 'farm'),
        'filter_items_list'     => __('پالایش فهرست محصولات', 'farm'),
    );
    $args = array(
        'label'                 => __('محصول', 'farm'),
        'description'           => __('نوع نوشته سفارشی برای محصولات کشاورزی', 'farm'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type('product', $args);
}
add_action('init', 'farm_register_product_post_type');
?>

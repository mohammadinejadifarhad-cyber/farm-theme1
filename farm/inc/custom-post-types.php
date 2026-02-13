<?php
// Register Custom Post Type for Products

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'farm_register_product_post_type' ) ) {
    function farm_register_product_post_type() {
        $labels = array(
            'name'                  => _x('Products', 'Post Type General Name', 'farm'),
            'singular_name'         => _x('Product', 'Post Type Singular Name', 'farm'),
            'menu_name'             => __('Products', 'farm'),
            'name_admin_bar'        => __('Product', 'farm'),
            'archives'              => __('Product Archives', 'farm'),
            'attributes'            => __('Product Attributes', 'farm'),
            'parent_item_colon'     => __('Parent Product:', 'farm'),
            'all_items'             => __('All Products', 'farm'),
            'add_new_item'          => __('Add New Product', 'farm'),
            'add_new'               => __('Add New', 'farm'),
            'new_item'              => __('New Product', 'farm'),
            'edit_item'             => __('Edit Product', 'farm'),
            'update_item'           => __('Update Product', 'farm'),
            'view_item'             => __('View Product', 'farm'),
            'view_items'            => __('View Products', 'farm'),
            'search_items'          => __('Search Product', 'farm'),
            'not_found'             => __('Not found', 'farm'),
            'not_found_in_trash'    => __('Not found in Trash', 'farm'),
            'featured_image'        => __('Featured Image', 'farm'),
            'set_featured_image'    => __('Set featured image', 'farm'),
            'remove_featured_image' => __('Remove featured image', 'farm'),
            'use_featured_image'    => __('Use as featured image', 'farm'),
            'insert_into_item'      => __('Insert into product', 'farm'),
            'uploaded_to_this_item' => __('Uploaded to this product', 'farm'),
            'items_list'            => __('Products list', 'farm'),
            'items_list_navigation' => __('Products list navigation', 'farm'),
            'filter_items_list'     => __('Filter products list', 'farm'),
        );
        $args = array(
            'label'               => __('Product', 'farm'),
            'description'         => __('Custom post type for agricultural products', 'farm'),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'thumbnail'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );
        register_post_type('product', $args);
    }
}
add_action('init', 'farm_register_product_post_type');

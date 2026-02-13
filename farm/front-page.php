<?php
/**
 * The front page template file
 *
 * This is the template that displays the front page of the site.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package farm
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<div class="front-page-content">
    <h1><?php esc_html_e( 'به کسب‌وکار کشاورزی ما خوش آمدید', 'farm' ); ?></h1>
    <p><?php esc_html_e( 'مرجع کامل شما برای خرید کودها و سموم باکیفیت.', 'farm' ); ?></p>
    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn"><?php esc_html_e( 'اکنون خرید کنید', 'farm' ); ?></a>
</div>

<?php get_footer(); ?>

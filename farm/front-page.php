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

get_header(); ?>

<div class="front-page-content">
    <h1>به کسب‌وکار کشاورزی ما خوش آمدید</h1>
    <p>مرجع کامل شما برای خرید کودها و سموم باکیفیت.</p>
    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn">اکنون خرید کنید</a>
</div>

<?php
get_footer();
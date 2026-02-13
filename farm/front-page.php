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
    <h1>Welcome to Our Agricultural Business</h1>
    <p>Your one-stop shop for high-quality fertilizers and pesticides.</p>
    <a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn">Shop Now</a>
</div>

<?php
get_footer();
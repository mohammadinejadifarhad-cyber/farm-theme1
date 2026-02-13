<?php
/**
 * Site Branding
 *
 * Displays the site title and logo.
 */
?>

<div class="site-branding">
    <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php endif; ?>

    <div class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
    </div>

    <?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-description"><?php bloginfo( 'description' ); ?></h1>
    <?php else : ?>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    <?php endif; ?>
</div>
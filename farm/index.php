<?php
/**
 * The main template file.
 *
 * This is the fallback template for all other templates in the theme.
 *
 * @package farm
 */

get_header(); ?>

<main id="main" class="site-main">
    <section class="content-area">
        <div class="container">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content/content', get_post_type() );
                endwhile;
            else :
                get_template_part( 'template-parts/content/content', 'none' );
            endif;
            ?>
        </div>
    </section>
</main>

<?php
get_sidebar();
get_footer();
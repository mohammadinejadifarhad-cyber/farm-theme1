<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main" class="site-main" role="main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content/content', 'single' );

        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile;
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();

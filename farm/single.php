<?php
get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content/content', 'single' );

        // اگر دیدگاه‌ها باز باشند یا دست‌کم یک دیدگاه وجود داشته باشد، قالب دیدگاه‌ها بارگذاری می‌شود.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // پایان حلقه.
    ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();

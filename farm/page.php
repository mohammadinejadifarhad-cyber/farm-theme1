<?php
/**
 * قالب نمایش برگه‌های تکی.
 *
 * @package farm
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content/content', 'page' );

            // اگر دیدگاه‌ها باز باشند یا دست‌کم یک دیدگاه وجود داشته باشد، قالب دیدگاه‌ها بارگذاری می‌شود.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }

        endwhile; // پایان حلقه.
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

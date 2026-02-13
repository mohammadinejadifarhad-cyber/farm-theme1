<?php
// 404.php - Template for displaying 404 pages (not found)

get_header(); ?>

<main id="main" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'اوه! این صفحه پیدا نشد.', 'farm' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e( 'به نظر می‌رسد چیزی در این نشانی پیدا نشد. شاید جستجو کمک کند؟', 'farm' ); ?></p>

            <?php get_search_form(); ?>

            <p><?php esc_html_e( 'یا به ', 'farm' ); ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'صفحه اصلی', 'farm' ); ?></a>.</p>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_footer();
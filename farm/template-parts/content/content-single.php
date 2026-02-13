<?php
// This file defines the layout for the content of a single post.

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="entry-meta">
                    <?php
                    printf(
                        /* translators: 1: post date, 2: post author */
                        esc_html__( 'منتشر شده در %1$s توسط %2$s', 'farm' ),
                        esc_html( get_the_date() ),
                        esc_html( get_the_author() )
                    );
                    ?>
                </div>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <?php
                $categories = get_the_category_list( esc_html__( '، ', 'farm' ) );
                if ( $categories ) {
                    echo esc_html__( 'دسته‌بندی‌ها: ', 'farm' ) . wp_kses_post( $categories );
                }
                ?>
            </footer>
        </article>
        <?php
    endwhile;
endif;

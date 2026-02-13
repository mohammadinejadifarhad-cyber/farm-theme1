<?php
// This file defines the layout for the content of a single post.

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                <div class="entry-meta">
                    <?php
                    echo 'منتشر شده در ' . get_the_date() . ' توسط ' . get_the_author();
                    ?>
                </div>
            </header>

            <div class="entry-content">
                <?php
                the_content();
                ?>
            </div>

            <footer class="entry-footer">
                <?php
                echo 'دسته‌بندی‌ها: ' . get_the_category_list( '، ' );
                ?>
            </footer>
        </article>
    <?php endwhile;
endif; 
?>
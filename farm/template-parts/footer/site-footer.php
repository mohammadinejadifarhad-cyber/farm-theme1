<?php
/**
 * Site Footer Template
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package farm
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <p>
            <?php
            $footer_text = get_theme_mod( 'farm_footer_text', '© ' . wp_date( 'Y' ) . ' Your Company Name. All rights reserved.' );
            echo esc_html( $footer_text );
            ?>
        </p>
        <p><?php esc_html_e( 'ارائه کودها و سموم باکیفیت برای نیازهای کشاورزی شما.', 'farm' ); ?></p>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>

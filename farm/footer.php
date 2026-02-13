<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<footer>
    <div class="footer-content">
        <p>
            <?php
            $footer_text = get_theme_mod( 'farm_footer_text', '© ' . wp_date( 'Y' ) . ' Your Company Name. All rights reserved.' );
            echo esc_html( $footer_text );
            ?>
        </p>
        <p><?php esc_html_e( 'ما را دنبال کنید:', 'farm' ); ?></p>
        <ul>
            <li><a href="#"><?php esc_html_e( 'فیسبوک', 'farm' ); ?></a></li>
            <li><a href="#"><?php esc_html_e( 'توییتر', 'farm' ); ?></a></li>
            <li><a href="#"><?php esc_html_e( 'اینستاگرام', 'farm' ); ?></a></li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package TellyPress
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div id="footer-container">
            <div class="site-info">
                <?php do_action( 'tellypress_credits' ); ?>
                <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'tellypress' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'tellypress' ), 'WordPress'); ?></a> &amp; <a href="http://wordpress.org/themes/tellypress" title="<?php esc_attr_e( 'TellyPress theme by Rohit Tripathi', 'tellypress' ); ?>"><?php printf( __( '%s', 'tellypress' ), 'TellyPress'); ?></a>
            </div><!-- .site-info -->
            
            <div id="footer-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
            </div>
            
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
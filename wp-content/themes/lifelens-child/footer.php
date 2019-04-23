<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lifelens
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="d-flex">
            <div class="footer-first-menu">
                <p>LEARN</p>
                <div class="style-footer-first-menu">
                    <?php wp_nav_menu('menu=first_footer_menu'); ?>
                </div>
            </div>
            <div class="footer-second-menu">
                <p>CONNECT</p>
                <div class="footer-second-menu">
                    <?php wp_nav_menu('menu=second_footer_menu'); ?>
                </div>
            </div>
            <div class="contact-form">
                <p>JOIN</p>
                <?php echo do_shortcode('[contact-form-7 id="404" title="footer-form"]'); ?>
            </div>
        </div>







	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container-fluid p-3 p-md-5 text-center">
			<p class="site=disclaimer">
The information on this site is not intended or implied to be a substitute for professional medical advice, diagnosis or treatment. All content, including text, graphics, images and information, contained on or available through this web site is for general information purposes only. The International Society for the Study of Self-Injury makes no representation and assumes no responsibility for the accuracy of information contained on or available through this  site, and such information is subject to change without notice. <strong>You are encouraged to confirm any information obtained from or through this web site with other sources, and review all information regarding any medical condition or treatment with your physician.

Please review our <a href="">Privacy Policy. </a></strong>
			</p>
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <br>
                <a class="credits" ><small> Web Design by Diana M. Steakley-Freeman <span class="sep"> | </span>Proudly Powered by Wordpress</small></a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
<script>
AOS.init({
	duration: 1200
});
</script>
</html>
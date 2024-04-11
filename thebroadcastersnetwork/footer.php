<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
	</div><!-- #page -->
	<footer id="colophon" class="site-footer full-width clearfix" role="contentinfo">
		<div class="site-info limit-width clearfix">
			<div class="ft-logo-cont">
				<a class="ftr-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="The Broadcasters Network Logo">
				</a>
			</div>
			<div class="ftr-right-info">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> Thebroadcastersnetwork.com All Rights Reserved. Powered by 2Plus Ltd</p>
				<ul class="social-icons">
					<li class="fb"><a href="#">facebook</a></li>
					<li class="tw"><a href="#">twitter</a></li>
					<li class="yt"><a href="#">youtube</a></li>
					<li class="rss"><a href="#">rss</a></li>
				</ul>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php wp_footer(); ?>
</body>
</html>
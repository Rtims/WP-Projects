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
			<div class="featured-page full-width clearfix">
				<div class="featured-page-container clearfix">
					<div class="fpage-cont clearfix">
						<div class="fpage-info">
							<h3>Airport transfers</h3>
							<p>We can provide suitable vehicles for single passengers right up to parties of 8 with lowest prices</p>
							<a href="http://acxexpress.com/airport-transfers">Learn More...</a>
						</div>
						<a href="http://acxexpress.com/airport-transfers/" target="_blank" class="btn-red fpage-btn">Book an airport transfer</a>
						<div class="fpage-thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/airport-thumb.jpg"/>
						</div>
					</div>
					<div class="fpage-cont clearfix">
						<div class="fpage-info">
							<h3>Business Accounts</h3>
							<p>For Business & Corporations of all sizes we offer a priority business account.</p>
							<a href="http://acxexpress.com/business-accounts">Learn More...</a>
						</div>
						<a href="http://acxexpress.com/business-accounts" target="_blank" class="btn-red fpage-btn">Book a courier</a>
						<div class="fpage-thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/thumb2.png"/>
						</div>
					</div>
					<div class="fpage-cont clearfix">
						<div class="fpage-info">
							<h3>Drive with us</h3>
							<p>We are always happy to hear from quality Licenced Private Hire Drivers interested in joining our growing fleet.</p>
							<a href="http://acxexpress.com/drivers">Learn More...</a>
						</div>
						<a href="http://acxexpress.com/drivers" target="_blank" class="btn-red fpage-btn">Register as a driver</a>
						<div class="fpage-thumb">
							<img src="<?php echo get_template_directory_uri(); ?>/images/thumb3.png"/>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-content full-width clearfix">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Bottom Menu') ) : ?><?php endif; ?>
				<div class="bot-cont">
					<h3>Downloads Our Apps</h3>
					<a target="_blank" href="https://itunes.apple.com/gb/app/acx-express-mincabs/id1042628112?mt=8" class="display-block"><img src="http://acxexpress.com/wp-content/uploads/2015/10/appstore.jpg"/></a>
					<a target="_blank" href="https://play.google.com/store/apps/details?id=com.autocab.taxibooker.acxexpressminicabs.bromley&hl=en_GB" class="display-block"><img src="http://acxexpress.com/wp-content/uploads/2015/10/googleplay.png"/></a>
				</div>
				<div class="bot-cont">
					<h3>Follow Us On</h3>
					<ul class="social-icons">
						<li class="fb"><a target="_blank" href="https://www.facebook.com/acxexpress">fb</a></li>
						<li class="tw"><a target="_blank" href="https://twitter.com/Acxexpresscabs">tw</a></li>
						<li class="gg"><a target="_blank" href="https://plus.google.com/114138778602249503344/about">gg</a></li>
					</ul>
					<img src="http://acxexpress.com/wp-content/uploads/2015/10/ftr-logo.png"/>
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #page -->
	<footer id="colophon" class="site-footer full-width clearfix" role="contentinfo">
		<div class="site-info limit-width clearfix">
			<div class="ftr-right-info">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
				<p class="copyright">&copy; Acx Express Ltd. Registered in England Co No 09149908 Licensed by Transport for London <br/> Operator Licence No 8983. VAT Reg No 208959962</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php wp_footer(); ?>
</body>
</html>
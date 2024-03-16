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
	<div class="upper-footer container-fluid container-padding text-align-center">
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="centered">Do You Need More Help?</h3>
					<p>
						Thank you for visiting the Pressure Washer Review. We hope that your reviews, purchase tips and useful articles will help you find the right pressure washer <br/> for your needs (today) and use it (correctly) so as not to damage the surface or yourself. 
					</p>
				</div>
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer full-width clearfix" role="contentinfo">
		<div class="site-info container clearfix">
			<div class="ftr-text">
				<h3 class="centered">In a Rush?</h3>
				<p>Then select your electric power washer in less than 3 minutes in our manual no BS by clicking on the button below:</p>
				<a class="btn-ftr" href="#">See Our Best Shopping Guide Here</a>
			</div>
			<div class="ftr-info">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
				<p class="copyright">&copy; Copyright <?php echo date('Y'); ?> pressurewashersreviewed.com All Rights Reserved.</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php wp_footer(); ?>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
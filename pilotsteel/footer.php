<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer id="colophon" class="site-footer contact" role="contentinfo">
    <?php if ( is_page('contact') ): ?>
    	<div class="ftr-top ls-text-align-center ls-section-padding container-fluid clearfix">
    		<div class="container">
    			<div class="row">
    	            <div class="section-top section-thead ls-text-align-left col-12 clearfix">
    	                <h3 class="thead-border-center">How Can We Help?</h3>
    	            </div>
    	        </div>
            	<div class="contact-form-cont row">
                    <div class="cf-cont-left ls-text-align-left col-md-8 col-xs-12">
                        <h4>Send us a Message</h4>
                        <div class="form-style">
                        	<?php echo do_shortcode('[contact-form-7 id="14" title="Contact Form"]'); ?>
                        </div>
                    </div>
                    <div class="cf-cont-right ls-text-align-left col-md-4 col-xs-12">
                        <h4>Our Contact Information</h4>
                        <ul class="contact-icons-list">
                            <li class="row">
                                <div class="ls-no-padding-side col-md-1">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                </div>
                                <div class="col-md-11">
                                    2301 Triad Dr. Owensboro, KY 42301
                                </div>
                            </li>
                            <li class="row">
                                <div class="ls-no-padding-side col-md-1">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-11">
                                    (270) 684-8030
                                </div>
                            </li>
                            <li class="row">
                                <div class="ls-no-padding-side col-md-1">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-11">
                                    info@pilotsteel.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
    	    </div>
    	</div>
    <?php endif; ?>
	<div class="ftr-bottom ls-text-align-center container-fluid clearfix">
		<div class="container">
			<p>&copy; Copyright <?php echo date('Y'); ?> PilotSteel.com  All Rights Reserved</p>
			<p>2301 Triad Dr. Owensboro, KY 42301   |   Phone: (270) 684-8030   |  Fax: (270) 684-9030</p>
		</div>
	</div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>

<?php wp_footer(); ?>
</body>
</html>

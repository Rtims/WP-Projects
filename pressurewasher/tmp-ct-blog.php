<?php
/*
Template Name: Custom Blog
*/

get_header(); ?>

<div id="main" class="site-main container-fluid clearfix">
	<div id="primary" class="content-area container-padding clearfix">
		<div class="container">
			
			<div class="row">
				<?php echo do_shortcode('[ct_blog_post]'); ?>
			</div>

		</div>
	</div><!-- #primary -->
</div><!-- #main -->


<?php get_footer(); ?>
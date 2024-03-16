<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area ls-section-padding full-width clearfix">
	<div class="container">
		<div class="row">
			<div id="content" class="site-content col" role="main">

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the single post content template.
						get_template_part( 'template-parts/content', 'single' );

					endwhile;
					?>
				
			</div>
		</div>
	</div><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>

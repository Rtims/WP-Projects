<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="main" class="site-main container-fluid clearfix">
	<div id="primary" class="content-area container-padding clearfix">
		<div class="container">
			<div class="row">
				<div id="content" class="col-12 col-md-8 site-content clearfix" role="main">

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php twentythirteen_post_nav(); ?>
						<?php comments_template(); ?>

					<?php endwhile; ?>

				</div><!-- #content -->
				<div class="col-12 col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->
</div><!-- #main -->

<?php get_footer(); ?>
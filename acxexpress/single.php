<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area container-padding limit-width clearfix">
		<div id="content" class="site-content clearfix" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->
<?php get_footer(); ?>
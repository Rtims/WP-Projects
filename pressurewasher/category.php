<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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

					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<h2 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h2>

							<?php if ( category_description() ) : // Show an optional category description ?>
							<div class="archive-meta"><?php echo category_description(); ?></div>
							<?php endif; ?>
						</header><!-- .archive-header -->

						<?php /* The loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>

						<?php //twentythirteen_paging_nav(); ?>

					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>

				</div><!-- #content -->
				<div class="col-12 col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->
</div><!-- #main -->

<?php get_footer(); ?>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area  ls-section-padding full-width clearfix">
		<div class="container">
			<div class="row">

				<section class="error-404 not-found col-md-8 col-xs-12">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

				<?php get_sidebar( 'content-bottom' ); ?>

			</div>
		</div><!-- .site-main -->

	</div><!-- .content-area -->
	
<?php get_footer(); ?>

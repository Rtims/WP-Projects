<?php
/*
Template Name: Homepage Template
*/
get_header(); ?>

<div id="primary" class="content-area full-width clearfix">
	<div id="content" class="site-content limit-width clearfix" role="main">
		<div class="span-8 content clearfix">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h2 class="entry-title"><?php the_title(); ?></h2>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->

			<?php endwhile; ?>
		</div>

		<div class="sidebar clearfix">
			<h2>Special Offers</h2>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

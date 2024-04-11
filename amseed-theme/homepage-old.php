<?php
/*
Template Name: Homepage Template
*/
get_header(); ?>

<div class="top5-ecigs full-width clearfix">
	<div class="limit-width clearfix">
		<?php  $args = array( 'post_type' => 'top_ecigs', 'posts_per_page' => 5 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
	  	<div class="top5-container">
	  		<div class="top5-thumb"><?php the_post_thumbnail(); ?></div>
			<h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
			<div class="top5-content">
				<?php echo substr(get_the_excerpt(), 0, 90); ?>
			</div>
			<a class="read-more" href="<?php echo get_permalink(); ?>">Read More</a>
		</div>
		<?php endwhile; ?>
	</div>
</div>

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
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

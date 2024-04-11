<?php
/*
Template Name: Homepage Template
*/
get_header(); ?>


<div class="top-content container-padding full-width clearfix">
	<?php $my_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => array( 89, 101, 93 ) ) ); ?>
    <?php if ( $my_query->have_posts() ) : ?>
	<div class="featured-page-container clearfix">
		<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<div class="fpage-cont clearfix">
				<div class="fpage-thumb thumb-rounded">
					<?php echo the_post_thumbnail('fpage-thumb'); ?>
				</div>
				<div class="entry-content">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php echo substr(get_the_excerpt(), 0,100); ?></p>
					<a class="btn-white" href="<?php the_permalink(); ?>">View Page <i class="btn-arrow"></i></a>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
</div>
<div class="about-us container-padding full-width clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="about-us-cont">
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<p><?php echo substr(get_the_excerpt(), 0,350); ?></p>
					<a class="btn-purple" href="<?php the_permalink(); ?>">Read More<i class="fa fa-caret-right"></i></a>
				</div><!-- .entry-content -->
			</div>
	<?php endwhile; ?>
</div>
<div class="featured-station full-width clearfix">
	<h1>Our Blog</h1>
	<div class="feat-outer-cont">
		<?php $the_query = new WP_Query( 'posts_per_page=8' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<div class="feature-station-container clearfix">
			<div class="fpw-featured-image">
				<?php the_post_thumbnail('blog-thumb'); ?>
			</div>
			<h3 class="fpw-page-title">
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</h3>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<div class="full-width clearfix">
		<a class="btn-orange btn-center" href="/thebroadcastersnetwork.org/our-blog/">See all our Blog Posts<i class="fa fa-caret-right"></i></a>
	</div>
</div>

<?php get_footer(); ?>

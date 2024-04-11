<?php
/*
Template Name: Homepage Template
*/
get_header(); ?>


<div class="top-content container-padding full-width clearfix">
	<div class="top-homepage-icons text-align-center">
		<i class="fa fa-clock-o"></i>
		<h3>Faster pickups</h3>
	</div>
	<div class="top-homepage-icons text-align-center">
		<i class="fa fa-car"></i>
		<h3>Up to 40% cheaper than black taxis</h3>
	</div>
	<div class="top-homepage-icons text-align-center">
		<i class="fa fa-mobile"></i>
		<h3>Book and track your car live</h3>
	</div>
</div>
<div class="full-width homepage-content text-align-center clearfix">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="home-page-heading">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<div class="btn-wrapper full-width clearfix">
					<a target="_blank" href="http://acxexpress.com/business-accounts/" class="btn-red">Business</a>
					<a target="_blank" href="http://account.acxexpress.com" class="btn-black">Personal</a>
				</div>
			</div><!-- .entry-content -->
		</article><!-- #post -->
	<?php endwhile; ?>
</div>
<div class="qoute-book full-width clearfix">
	<div class="limit-width clearfix">
		<a href="http://book.acxexpress.com/" target="_blank" class="btn-qoute">Quote book and track your car online now <span></span></a>
	</div>
</div>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer class="site-footer">
			<?php if ( is_front_page() ) : ?>
				<div class="latest-news full-width clearfix">
					<div class="limit-width clearfix">
						<h1>Latest News</h1>
						<?php query_posts( 'posts_per_page=4' ); ?>
							<?php while ( have_posts() ) : the_post(); ?>
							    <div class="latest-news-container clearfix">
							    	<div class="latest-news-thumb">
							    		<?php the_post_thumbnail(); ?>
							    	</div>
							    	<h5><?php the_title(); ?></h5>
							    	<div class="latest-news-content">
							    		<?php echo substr(get_the_excerpt(), 0, 60); ?>
							    	</div>
							    	<a href="<?php the_permalink(); ?>" class="btn-orange">Read More</a>
							    </div>
							<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			<?php endif ?>
			<div class="site-info full-width clearfix">
				<span class="limit-width clearfix">
					&copy; Copyrights <?php echo date('Y'); ?> - <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Amseed.com</a> All Rights Reserved
				</span>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
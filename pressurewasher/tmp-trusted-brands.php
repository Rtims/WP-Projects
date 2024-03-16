<?php
/*
Template Name: Trusted Brands
*/
get_header(); ?>

<div class="bg-grey container-fluid clearfix">
	<div class="container container-padding">
		<div class="row">
			<?php $args = array( 'post_type' => 'trusted_brands', 'posts_per_page' => 15 );
			$loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-12 col-md-4">
					<div class="washer-compare text-align-center">
						<div class="hm-pthumb">
							<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
						</div>
						<h3 class="centered"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<div class="row btn-row">
							<a href="<?php the_permalink(); ?>" class="btn-1">View Details<i class="far fa-check-circle"></i></a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
<!--  -->
<?php
/*
Template Name: Homepage Template
*/
get_header(); ?>

<div class="container-fluid clearfix">
	<div class="container container-padding">
		<div class="sec-title text-align-center">
			<h2>Featured Pressure Washer Reviews</h2>
		</div>
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="container-flud">
					<img src="<?php echo get_template_directory_uri(); ?>/images/best-pressure-washer.jpg" alt="Best Pressure Washer"/>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="container-flud">
					<h3>Introducing The 7 Best Pressure Washers – Updated February 2020</h3>
					<p>
						Here is our new, updated guide to the 7 best high pressure cleaners for 2020. 36 high pressure cleaners have been re-tested in the last six weeks, our notes have been updated on the website and the rating criteria have been revised.
					</p><br/>
					<p><b>Exciting changes have been made:</b></p>
					<ul class="listed">
						<li>4 new pressure washer in the top list</li>
						<li>News and best pictures are included, so you can see the pressure washers more carefully.</li>
						<li>Take a look at the new grey update fields and pink warning fields to quickly find out why each pressure washer is on the list, and see if your best pressure washer is on sale today.</li>
					</ul>
					<a href="https://www.pressurewashersreviewed.com/introducing-the-7-best-pressure-washers-updated-february-2020/" class="btn-1">See Best 7 Here<i class="far fa-check-circle"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bg-grey container-fluid clearfix">
	<div class="container container-padding">
		<div class="sec-title text-align-center">
			<h2>Choose By Cleaning Power</h2>
		</div>
		<div class="row">
			<?php echo do_shortcode('[cleaningp]'); ?>
		</div>
	</div>
</div>


<div class="container-fluid clearfix">
	<div class="container container-padding">
		<div class="row">
			<div class="col-12 col-md-8">
				<div class="container-flud">
					<ul class="row hm-lt-post">
						<?php $the_query = new WP_Query( 'posts_per_page=6' ); ?>
						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
							<li class="col-md-12">
								<div class="hm-pthumb">
									<span class="dis-cat"><?php the_category(', '); ?></span>
									<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
								</div>
								<div class="hm-pinfo">
									<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									<span></span><?php the_excerpt(); ?></span>
									<a href="<?php the_permalink(); ?>" class="btn-2">Read More<i class="far fa-check-circle"></i></a>
								</div>
							</li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<?php get_sidebar(); ?>					
			</div>
		</div>
	</div>
</div>

<div class="bg-grey container-fluid clearfix">
	<div class="container container-padding">
		<div class="sec-title text-align-center">
			<h2>Compare Gas and Electric Power</h2>
			<p>
				For around your home the most affordable gas and most expensive electric pressure cleaner match up at around $250. Here are the pros and cons of each pressure washer style
			</p>
		</div>
		<div class="row">
			<?php $args = array( 'post_type' => 'washer_compare', 'posts_per_page' => 2 );
			$loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-12 col-md-6">
					<div class="washer-compare text-align-center">
						<div class="hm-pthumb">
							<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
						</div>
						<h3 class="centered"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<span class="compare-price"><b>Price:</b> <?php echo get_field( 'price' ); ?></span>
						<a href="<?php the_permalink(); ?>" class="btn-1">Read More<i class="far fa-check-circle"></i></a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<div class="container-fluid clearfix">
	<div class="container container-padding">
		<div class="sec-title text-align-center">
			<h2>Trusted Pressure Cleaner Brands</h2>
			<p>
				Do you have experience dealing with an awesome power tool brand? Do you trust a certain power equipment brand more than the rest because of past experiences? Have you heard consistent positive reviews from friends and in forums online about a certain top performer?
			</p>
		</div>
		<div class="row">
			<?php $args = array( 'post_type' => 'trusted_brands', 'posts_per_page' => 4 );
			$loop = new WP_Query( $args ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-12 col-md-3">
					<div class="trusted-brands text-align-center">
						<div class="hm-pthumb">
							<span class="dis-cat"><?php the_category(', '); ?></span>
							<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
						</div>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn-2">Read More<i class="far fa-check-circle"></i></a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<div class="row btn-row">
			<a href="/9-trusted-pressure-cleaner-brands" class="btn-1">View All <i class="far fa-check-circle"></i></a>
		</div>
	</div>
</div>

<?php get_footer(); ?>
<!--  -->
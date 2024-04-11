<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
	<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider();
	});
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header full-width clearfix" role="banner">
			<div class="top-header limit-width clearfix">
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/amseed-logo.png" alt="Amseed Logo"/>
				</a>
				<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
			</div>
			<div id="navbar" class="navbar full-width clearfix">
				<nav id="site-navigation" class="navigation main-navigation limit-width clearfix" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<?php if ( is_front_page() ): ?>
			<div class="main-slider full-width clearfix">
				<?php $args = array( 'post_type' => 'homepage slider', 'posts_per_page' => 3 ); $the_query = new WP_Query( $args ); ?>

					<?php if ( $the_query->have_posts() ) : ?>
						<div class="slider-containder limit-width clearfix">
							<ul class="bxslider">
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<li>
										<div class="slider-thumb">
											<?php the_post_thumbnail('full'); ?>
										</div>
										<div class="slider-discription">
											<h1><?php the_title(); ?></h1>
											<span><?php the_excerpt(); ?></span>
											<a class="slider-btn" href="<?php the_permalink(); ?>">Read More</a>
										</div>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>

			</div>
			<div class="text-ads full-width clearfix">
				<div class="limit-width clearfix">
					<h1>Top five E-Liquid Brands</h1>
				</div>
			</div>
		<?php endif; ?>
		
		<div id="main" class="site-main">

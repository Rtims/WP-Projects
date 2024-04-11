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
			$('header #navbar .searchform').addClass('clearfix');
		});
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="full-width clearfix" role="banner">
			<div class="top-header limit-width clearfix">
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/amseed-logo.png" alt="Amseed Logo"/>
				</a>
				<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
			</div>
			<div id="navbar" class="navbar full-width clearfix">
				<nav id="site-navigation" class="navigation main-navigation limit-width clearfix" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php get_search_form('clearfix'); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		</header><!-- #masthead -->

		<?php if ( is_front_page() ): ?>
			<div class="main-slider top5-ecigs full-width clearfix">
				<h1>Top five E-Liquid Brands</h1>
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
		<?php endif; ?>
		
		<div id="main" class="site-main">

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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<link href='https://fonts.googleapis.com/css?family=Roboto|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Libre+Franklin:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/global.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<?php if(is_page()) { $page_slug = ''.$post->post_name; } ?>
<body <?php body_class($page_slug); ?>>
	<header id="masthead" class="container-fluid home-hdr clearfix" role="banner">
		<div class="container">
			<div class="row">
				<div class="logo-container col col-md-4">
					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Pressure Washer Review Logo">
					</a>
				</div>
				<div id="navbar" class="col col-md-8 navbar navbar-expand-md navbar-dark clearfix">					
					<button class="navbar-toggler alignright" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<nav class="navigation main-navigation clearfix collapse navbar-collapse" id="navbarCollapse" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu navbar-nav mr-auto' ) ); ?>
					</nav><!-- #site-navigation -->
				</div><!-- #navbar -->
			</div>
		</div>
	</header><!-- #masthead -->

	<?php if(is_front_page()) : ?>
		<div class="main-slider container-fluid clearfix">
			<div class="overlay-mobile-bg"></div>		
			<?php $args = array( 'post_type' => 'homepage_slogan', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args ); ?>
			<div class="slider-info container">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<h1 class="centered homepage-slider-tagline"><?php the_title(); ?></h1>
					<span class="slider-tagline"><?php the_excerpt(); ?></span>
					<a class="btn-hm-slogan btn-1" href="<?php echo get_field( 'Button' ); ?>">Get Started Now <i class="far fa-check-circle"></i></a>
				<?php endwhile; ?>
			</div>
			<?php echo do_shortcode('[metaslider id="11"]'); ?>
			<?php echo do_shortcode('[metaslider id="8"]'); ?>
		</div>
	<?php elseif( is_single() || is_page() ) : ?>
		<div class="inner-page-title container-fluid clearfix">
			<div class="container container-padding text-align-center">
				<h1><?php echo the_title(); ?></h1>
			</div>
		</div>
	<?php elseif( is_archive() ) : ?>
		<div class="inner-page-title container-fluid clearfix">
			<div class="container container-padding text-align-center">
				<h1>Archives</h1>
			</div>
		</div>
	<?php endif; ?>


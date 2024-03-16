<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<!-- Font Awesome Fonts -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand:400,700" rel="stylesheet">

    <!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.min.css" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header container-fluid clearfix" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-12">
					<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
					</a>	
				</div>
				<div class="col-md-9 col-xs-12">
					<nav id="site-navigation" class="navigation main-navigation navbar navbar-expand-lg ls-text-align-right" role="navigation">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
			            </button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<?php if ( is_front_page() ): ?>
		<div class="main-section ls-main-section-padding ls-text-align-center container-fluid clearfix">
			<div class="main-container container">
				<?php  $args = array( 'post_type' => 'main_tagline', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<h2><?php echo rwmb_meta( 'sub_title' ); ?></h2>
					<h1><?php echo rwmb_meta( 'main_title' ); ?></h1>
					<span><?php echo rwmb_meta( 'main_slogan' ); ?></span>
					<a href="<?php echo rwmb_meta( 'btn_red_link' ); ?>" class="main-btn btn-red transition">Our Services</a>
					<a href="<?php echo rwmb_meta( 'btn_blue_link' ); ?>" class="main-btn btn-blue transition">Talk to Us</a>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
			<video autoplay loop id="video-background" muted plays-inline>
			  	<source src="<?php echo get_template_directory_uri(); ?>/images/video.mp4" type="video/mp4">
			</video>
		</div>
	<?php elseif ( is_page('contact') ): ?>
	<?php else : ?>
	<div class="title-section ls-section-padding-small parallax-counter parallaxBg1 container-fluid clearfix">
		<div class="main-container container">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<?php if ( is_archive() ) : ?>
						<?php post_type_archive_title( '<h3 class="page-title">', '</h3>' ); ?>
					<?php else : ?>
						<?php the_title( '<h3 class="page-title">', '</h3>' ); ?>
					<?php endif; ?>
				</div>
				<div class="ls-text-align-right col-md-6 col-xs-12">
					<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>'); 
					}?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>


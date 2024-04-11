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
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/ico.ico" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/global.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<script>
		window.twttr = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0],
		    t = window.twttr || {};
		  if (d.getElementById(id)) return t;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "https://platform.twitter.com/widgets.js";
		  fjs.parentNode.insertBefore(js, fjs);
		 
		  t._e = [];
		  t.ready = function(f) {
		    t._e.push(f);
		  };
		 
		  return t;
		}(document, "script", "twitter-wjs"));
	</script>
</head>
<?php if(is_page()) { $page_slug = ''.$post->post_name; } ?>
<body <?php body_class($page_slug); ?>>
	<div id="page" class="site-container limit-width" class="hfeed site">
		<header id="masthead" class="full-width clearfix" role="banner">
			<div class="limit-width container-padding clearfix">
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="The Broadcasters Network Logo">
				</a>
				<div class="radio-player">
					<?php echo do_shortcode('[wonderplugin_audio id="1"]'); ?>
				</div>
			</div>
		</header><!-- #masthead -->
		<div id="navbar" class="navbar full-width clearfix">
			<nav id="site-navigation" class="navigation main-navigation limit-width clearfix" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				<?php get_search_form(); ?>
			</nav><!-- #site-navigation -->
		</div><!-- #navbar -->

		<?php if(is_front_page()) : ?>
			<div class="main-slider full-width clearfix">
				<?php $args = array( 'post_type' => 'slider_slogan', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args ); ?>
				<div class="slider-info">
					<h3 class="homepage-slider-tagline">
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<?php the_title(); ?>
						<?php endwhile; ?>
					</h3>
					<a class="btn-orange" href="<?php echo get_page_link(105); ?>">Listen Now<i class="fa fa-caret-right"></i></a>
				</div>
				<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
			</div>
		<?php endif; ?>

		<div id="main" class="site-main full-width clearfix">

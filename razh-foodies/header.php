<?php
/**
 * Header — Bootstrap 5
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(is_front_page()): ?>
  <meta name="description" content="Order fresh traditional native kakanin in Tagum City from Razh Foodies. Sapin-sapin, puto, bibingka, maja blanca, biko, kutsinta &amp; more. Call 09852335090.">
  <meta name="keywords" content="kakanin Tagum City, native kakanin Tagum, Filipino delicacies Tagum City, sapin-sapin Tagum, puto Tagum, biko Tagum, Razh Foodies, 09852335090">
  <?php endif; ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/header','announce'); ?>
<?php get_template_part('template-parts/header','nav'); ?>

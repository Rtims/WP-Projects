<?php
/**
 * WooCommerce template wrapper
 */
get_header();
?>
<main id="main" class="shop-container">
	<div class="container">
			<?php woocommerce_content(); ?>
	</div>
</main>
<?php get_footer(); ?>

<?php
/**
 * Custom template for displaying product content within loops
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Check if the product is valid
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( 'col', $product ); ?>>

    <div class="product-card-inner">
        
        <!-- 1. Product Image -->
        <div class="product-image-wrapper">
            <?php echo $product->get_image( 'medium' ); ?>
        </div>

        <!-- 2. Product Title -->
        <h3 class="product-title">
            <a href="<?php echo esc_url( $product->get_permalink() ); ?>">
                <?php echo esc_html( $product->get_name() ); ?>
            </a>
        </h2>

        <!-- 3. Product Price -->
        <div class="product-price">
            <?php echo $product->get_price_html(); ?>
        </div>

        <!-- 4. Add to Cart Button -->
        <div class="product-actions">
            <?php woocommerce_template_loop_add_to_cart(); ?>
        </div>

    </div>

</li>

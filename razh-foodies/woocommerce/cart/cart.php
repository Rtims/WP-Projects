<?php
/**
 * Bootstrap 5 Cart template
 */
defined('ABSPATH') || exit;
get_header();
?>
<main id="main" class="py-5">
<div class="container">
  <h1 class="fw-bold mb-4" style="font-family:var(--razh-font-display);color:var(--razh-red-dark);">
    <i class="bi bi-cart3 me-2"></i><?php esc_html_e('Your Cart','razh-foodies'); ?>
  </h1>
  <?php wc_print_notices(); do_action('woocommerce_before_cart'); ?>

  <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
    <?php do_action('woocommerce_before_cart_table'); ?>

    <div class="table-responsive rounded-3 border overflow-hidden mb-4">
      <table class="table table-hover align-middle mb-0 shop_table woocommerce-cart-form__contents">
        <thead>
          <tr style="background:var(--razh-red);">
            <th class="text-white fw-bold py-3" style="width:60px;">&nbsp;</th>
            <th class="text-white fw-bold py-3" style="width:100px;">&nbsp;</th>
            <th class="text-white fw-bold py-3"><?php esc_html_e('Product','razh-foodies'); ?></th>
            <th class="text-white fw-bold py-3 text-end"><?php esc_html_e('Price','razh-foodies'); ?></th>
            <th class="text-white fw-bold py-3 text-center"><?php esc_html_e('Qty','razh-foodies'); ?></th>
            <th class="text-white fw-bold py-3 text-end"><?php esc_html_e('Subtotal','razh-foodies'); ?></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item):
            $product   = $cart_item['data'];
            $product_id = $cart_item['product_id'];
            if (!$product || !$product->exists() || $cart_item['quantity'] === 0) continue;
          ?>
          <tr class="woocommerce-cart-form__cart-item">
            <td>
              <a href="<?php echo esc_url(wc_get_cart_remove_url($cart_item_key)); ?>"
                 class="btn btn-sm btn-outline-danger rounded-circle p-1 lh-1"
                 aria-label="<?php esc_attr_e('Remove','razh-foodies'); ?>">
                <i class="bi bi-x"></i>
              </a>
            </td>
            <td>
              <a href="<?php echo esc_url(get_permalink($product_id)); ?>" class="d-block rounded-3 overflow-hidden" style="width:80px;">
                <?php echo $product->get_image('thumbnail',['class'=>'img-fluid']); ?>
              </a>
            </td>
            <td>
              <a href="<?php echo esc_url(get_permalink($product_id)); ?>" class="fw-bold text-decoration-none" style="color:var(--razh-red-dark);">
                <?php echo wp_kses_post($product->get_name()); ?>
              </a>
            </td>
            <td class="text-end razh-price">
              <?php echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($product), $cart_item, $cart_item_key); ?>
            </td>
            <td class="text-center">
              <?php woocommerce_quantity_input(['input_name'=>"cart[{$cart_item_key}][qty]",'input_value'=>$cart_item['quantity'],'max_value'=>$product->get_max_purchase_quantity(),'min_value'=>'0'], $product); ?>
            </td>
            <td class="text-end razh-price">
              <?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
            </td>
          </tr>
          <?php endforeach; ?>
          <tr>
            <td colspan="6" class="py-3">
              <div class="d-flex flex-wrap gap-3 align-items-center justify-content-between">
                <?php if (wc_coupons_enabled()): ?>
                <div class="input-group" style="max-width:320px;">
                  <input type="text" name="coupon_code" class="form-control" placeholder="<?php esc_attr_e('Coupon code','razh-foodies'); ?>" />
                  <button type="submit" name="apply_coupon" class="btn btn-outline-primary fw-bold">
                    <?php esc_html_e('Apply','razh-foodies'); ?>
                  </button>
                </div>
                <?php endif; ?>
                <button type="submit" name="update_cart" class="btn btn-outline-secondary fw-bold">
                  <i class="bi bi-arrow-clockwise me-1"></i><?php esc_html_e('Update Cart','razh-foodies'); ?>
                </button>
              </div>
              <?php wp_nonce_field('woocommerce-cart','woocommerce-cart-nonce'); ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php do_action('woocommerce_after_cart_table'); ?>
  </form>

  <div class="cart-collaterals"><?php do_action('woocommerce_cart_collaterals'); ?></div>
  <?php do_action('woocommerce_after_cart'); ?>
</div>
</main>
<?php get_footer(); ?>

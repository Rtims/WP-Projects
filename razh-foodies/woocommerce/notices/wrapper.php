<?php
/**
 * Bootstrap-styled WooCommerce notices
 */
defined('ABSPATH') || exit;
if (!function_exists('woocommerce_notices')) return;

$notices = wc_get_notices();
if (empty($notices)) return;

foreach ($notices as $notice_type => $notices_arr) :
    if (empty($notices_arr)) continue;
    $class = match($notice_type) {
        'error'   => 'alert alert-danger',
        'success' => 'alert alert-success',
        default   => 'alert alert-info',
    };
    $icon  = match($notice_type) {
        'error'   => '<i class="bi bi-exclamation-triangle-fill me-2"></i>',
        'success' => '<i class="bi bi-check-circle-fill me-2"></i>',
        default   => '<i class="bi bi-info-circle-fill me-2"></i>',
    };
    foreach ($notices_arr as $notice) :
?>
<div class="<?php echo esc_attr($class); ?> rounded-3 border-0 mb-3" role="alert">
    <?php echo wp_kses_post($icon . (is_array($notice) ? $notice['notice'] : $notice)); ?>
</div>
<?php
    endforeach;
endforeach;
wc_clear_notices();

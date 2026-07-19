<?php
/**
 * Razh Foodies — functions.php
 * Bootstrap 5 + WooCommerce + Custom Hooks
 */

defined('ABSPATH') || exit;

define('RAZH_VERSION', '1.0.0');
define('RAZH_DIR',     get_template_directory());
define('RAZH_URI',     get_template_directory_uri());

/* ═══════════════════════════════════
   1. THEME SETUP
═══════════════════════════════════ */
function razh_setup() {
    load_theme_textdomain('razh-foodies', RAZH_DIR . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption','style','script']);
    add_theme_support('custom-logo', ['height'=>120,'width'=>120,'flex-height'=>true,'flex-width'=>true]);
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('woocommerce', [
        'thumbnail_image_width' => 600,
        'single_image_width'    => 800,
        'product_grid'          => ['default_rows'=>3,'min_rows'=>1,'max_rows'=>8,'default_columns'=>4,'min_columns'=>2,'max_columns'=>5],
    ]);
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_image_size('razh-product',    600, 450, true);
    add_image_size('razh-product-lg', 800, 600, true);
    add_image_size('razh-hero',      1280, 600, true);
    register_nav_menus([
        'primary'  => __('Primary Navigation', 'razh-foodies'),
        'footer-1' => __('Footer — Kakanin Products', 'razh-foodies'),
        'footer-2' => __('Footer — Quick Links', 'razh-foodies'),
        'footer-3' => __('Footer — Info', 'razh-foodies'),
    ]);
}
add_action('after_setup_theme', 'razh_setup');

/* ═══════════════════════════════════
   2. ENQUEUE — BOOTSTRAP 5 + THEME
═══════════════════════════════════ */
function razh_enqueue() {
    // Google Fonts
    wp_enqueue_style('razh-fonts',
        'https://fonts.googleapis.com/css2?family=Lilita+One&family=Nunito:wght@400;600;700;800;900&family=Dancing+Script:wght@700&display=swap',
        [], null);

    // Bootstrap 5 CSS (CDN)
    wp_enqueue_style('bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [], '5.3.3');

    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        [], '1.11.3');

    // Theme stylesheet
    wp_enqueue_style('razh-style',  get_stylesheet_uri(), ['bootstrap'], RAZH_VERSION);
    wp_enqueue_style('razh-main',   RAZH_URI . '/assets/css/main.css', ['razh-style'], RAZH_VERSION);

    // Bootstrap 5 JS Bundle (includes Popper)
    wp_enqueue_script('bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [], '5.3.3', true);

    // Theme JS
    wp_enqueue_script('razh-main', RAZH_URI . '/assets/js/main.js', ['jquery','bootstrap'], RAZH_VERSION, true);
    wp_localize_script('razh-main', 'razhData', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('razh_nonce'),
        'cartUrl' => function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/'),
        'shopUrl' => function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/shop/'),
    ]);
    if (is_singular() && comments_open() && get_option('thread_comments')) wp_enqueue_script('comment-reply');
}
add_action('wp_enqueue_scripts', 'razh_enqueue');

/* ═══════════════════════════════════
   3. WOOCOMMERCE CONFIG
═══════════════════════════════════ */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper',     10);
remove_action('woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', function() { echo '<div class="container py-5">'; }, 10);
add_action('woocommerce_after_main_content', function() { echo '</div>">'; }, 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_filter('loop_shop_columns',                      fn() => 4);
add_filter('loop_shop_per_page',                     fn() => 12, 20);
add_filter('woocommerce_product_thumbnails_columns', fn() => 4);
add_filter('woocommerce_show_page_title',            '__return_false');

// Shop header banner
add_action('woocommerce_before_main_content', 'razh_wc_shop_banner', 5);
function razh_wc_shop_banner() {
    if (!is_shop() && !is_product_category()) return;
    $title = is_shop() ? __('Our Native Kakanin','razh-foodies') : get_queried_object()->name;
    $sub   = is_shop() ? __('Traditional Filipino kakanin, freshly made daily in Tagum City','razh-foodies') : get_queried_object()->description;
    echo '<div class="razh-shop-banner text-center py-4 mb-4"><h1 class="display-5 fw-bold text-white mb-2">' . esc_html($title) . '</h1>';
    if ($sub) echo '<p class="text-white opacity-75 mb-0">' . esc_html($sub) . '</p>';
    echo '</div>';
}

// Product category label
add_action('woocommerce_before_shop_loop_item_title', 'razh_product_category_label', 5);
function razh_product_category_label() {
    global $product;
    $cats = get_the_terms($product->get_id(), 'product_cat');
    if ($cats && !is_wp_error($cats)) {
        echo '<div class="razh-product-cat">' . esc_html(reset($cats)->name) . '</div>';
    }
}

// Remove default add to cart from loop, re-add custom
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

add_action('woocommerce_after_shop_loop_item', 'razh_loop_footer', 10);
function razh_loop_footer() {
    global $product;
    echo '<div class="razh-card-footer d-flex align-items-center justify-content-between mt-auto px-3 pb-3">';
    echo '<div class="razh-price fw-bold">' . wp_kses_post($product->get_price_html()) . '</div>';
    echo '<a href="' . esc_url($product->add_to_cart_url()) . '" data-quantity="1" class="btn razh-btn-add-cart add_to_cart_button ajax_add_to_cart" data-product_id="' . esc_attr($product->get_id()) . '" aria-label="' . esc_attr__('Add to cart','razh-foodies') . '"><i class="bi bi-cart-plus"></i></a>';
    echo '</div>';
}

// Wrap image area
add_action('woocommerce_before_shop_loop_item', function() { echo '<div class="razh-card-img-wrap position-relative'; }, 5);
add_action('woocommerce_before_shop_loop_item_title', function() { echo '</div><div class="razh-card-body px-3 pt-3 flex-grow-1 d-flex flex-column">'; }, 1);
add_action('woocommerce_after_shop_loop_item', function() { echo '</div>'; }, 20);

// Wishlist btn
add_action('woocommerce_before_shop_loop_item_title', 'razh_wishlist_btn_loop', 8);
function razh_wishlist_btn_loop() {
    echo '<button class="razh-wishlist-btn position-absolute" aria-label="' . esc_attr__('Wishlist','razh-foodies') . '"><i class="bi bi-heart"></i></button>';
}

/* ═══════════════════════════════════
   4. WIDGET AREAS
═══════════════════════════════════ */
function razh_widgets_init() {
    register_sidebar(['name'=>__('Shop Sidebar','razh-foodies'),'id'=>'shop-sidebar','before_widget'=>'<div class="razh-widget mb-4 %2$s">','after_widget'=>'</div>','before_title'=>'<h5 class="razh-widget-title fw-bold mb-3">','after_title'=>'</h5>']);
}
add_action('widgets_init', 'razh_widgets_init');

/* ═══════════════════════════════════
   5. LOCAL SEO SCHEMA
═══════════════════════════════════ */
function razh_local_seo_schema() {
    if (!is_front_page() && !is_shop()) return;
    $schema = ['@context'=>'https://schema.org','@type'=>'FoodEstablishment','name'=>'Razh Foodies','description'=>'Traditional Native Kakanin in Tagum City, Davao del Norte','telephone'=>'+639852335090','servesCuisine'=>'Filipino','priceRange'=>'₱','address'=>['@type'=>'PostalAddress','addressLocality'=>'Tagum City','addressRegion'=>'Davao del Norte','postalCode'=>'8100','addressCountry'=>'PH'],'openingHoursSpecification'=>[['@type'=>'OpeningHoursSpecification','dayOfWeek'=>['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'],'opens'=>'07:00','closes'=>'20:00']],'sameAs'=>['https://www.facebook.com/razh.foodies'],'areaServed'=>['@type'=>'City','name'=>'Tagum City'],'paymentAccepted'=>'Cash, GCash, Maya','url'=>home_url('/')];
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}
add_action('wp_head', 'razh_local_seo_schema');

/* ═══════════════════════════════════
   6. CART FRAGMENTS
═══════════════════════════════════ */
add_filter('woocommerce_add_to_cart_fragments', function($f) {
    $c = WC()->cart->get_cart_contents_count();
    $f['.razh-cart-count'] = '<span class="razh-cart-count badge">' . $c . '</span>';
    $f['.razh-float-cart-count'] = '<span class="razh-float-cart-count badge">' . $c . '</span>';
    return $f;
});

/* ═══════════════════════════════════
   7. HELPERS
═══════════════════════════════════ */
function razh_get_logo_url() {
    if (has_custom_logo()) { $id = get_theme_mod('custom_logo'); $url = wp_get_attachment_image_url($id,'full'); if ($url) return $url; }
    return get_template_directory_uri() . '/assets/images/logo.jpg';
}
function razh_get_cart_count() { return (function_exists('WC') && WC()->cart) ? WC()->cart->get_cart_contents_count() : 0; }
function razh_get_cart_url()   { return function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/'); }
function razh_get_shop_url()   { return function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/shop/'); }
add_filter('body_class', fn($c) => array_merge($c, is_woocommerce()||is_cart()||is_checkout() ? ['razh-wc-page'] : [], is_front_page() ? ['razh-home'] : []));
add_filter('excerpt_length', fn() => 18, 999);

/* ═══════════════════════════════════
   8. INCLUDE SUB-FILES
═══════════════════════════════════ */
require_once RAZH_DIR . '/inc/nav-walker.php';
require_once RAZH_DIR . '/inc/footer-walker.php';
require_once RAZH_DIR . '/inc/customizer.php';

add_filter( 'woocommerce_redirect_single_search_result', '__return_false' );
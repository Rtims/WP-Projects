<?php
/**
 * Razh Foodies Footer Walker & Fallbacks — Bootstrap 5
 */
class Razh_Footer_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=null, $id=0) {
        $output .= sprintf(
            '<a href="%s"><i class="bi bi-chevron-right me-1" style="font-size:0.65rem;opacity:0.6;"></i>%s</a>',
            esc_url($item->url), esc_html($item->title)
        );
    }
    function start_lvl(&$output, $depth=0, $args=null) {}
    function end_lvl(&$output,   $depth=0, $args=null) {}
    function end_el(&$output,    $item,    $depth=0, $args=null) {}
}

function razh_footer_kakanin_links() {
    $items = [
        'sapin-sapin'  => 'Sapin Sapin',
        'puto-flan'    => 'Puto Flan',
        'puto-cheese'  => 'Puto Cheese',
        'puto-salted-egg'  => 'Puto Salted Egg',
        'biko-ube'     => 'Biko Ube',
        'biko-latik'   => 'Biko Latik',
        'maja-blanca'  => 'Maja Blanca',
        'kutsinta'     => 'Kutsinta',
        'palitaw'      => 'Palitaw',
        'pichi-pichi'  => 'Pichi Pichi',
        'cassava-cake' => 'Cassava Cake',
        'bitso-bitso'  => 'Bitso Bitso',
        'ube-turon'    => 'Ube Turon',
        'ube-butchi'   => 'Ube Butchi',
    ];
    echo '<div class="razh-footer-links">';
    foreach ($items as $slug => $name) {
        printf(
            '<a href="%s"><i class="bi bi-chevron-right me-1" style="font-size:0.65rem;opacity:0.6;"></i>%s</a>',
            esc_url(home_url('/product/' . $slug . '/')),
            esc_html($name)
        );
    }
    echo '</div>';
}

function razh_footer_quick_links() {
    $shop = function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : home_url('/shop/');
    $cart = function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/');
    $items = [
        $shop                            => 'Shop All',
        home_url('/bilao-orders/')       => 'Bilao Orders',
        home_url('/occasions/')          => 'For Occasions',
        $cart                            => 'My Cart',
        home_url('/contact/')            => 'Contact Us',
    ];
    echo '<div class="razh-footer-links">';
    foreach ($items as $url => $label) {
        printf(
            '<a href="%s"><i class="bi bi-chevron-right me-1" style="font-size:0.65rem;opacity:0.6;"></i>%s</a>',
            esc_url($url), esc_html($label)
        );
    }
    echo '</div>';
}

function razh_footer_info_links() {
    $items = [
        home_url('/delivery/')               => 'Delivery Coverage',
        home_url('/delivery/#bulk')          => 'Bulk Orders',
        home_url('/faq/')                    => 'FAQ',
        get_privacy_policy_url()             => 'Privacy Policy',
        home_url('/terms-and-conditions/')   => 'Terms & Conditions',
    ];
    echo '<div class="razh-footer-links">';
    foreach ($items as $url => $label) {
        printf(
            '<a href="%s"><i class="bi bi-chevron-right me-1" style="font-size:0.65rem;opacity:0.6;"></i>%s</a>',
            esc_url($url), esc_html($label)
        );
    }
    echo '</div>';
}

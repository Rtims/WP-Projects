<?php
/**
 * Bootstrap 5 Nav Walker
 * Completely PHP 8+ Compliant
 */

class Razh_BS5_Nav_Walker extends Walker_Nav_Menu {
    // Left empty intentionally. PHP 8 will read this natively from the core class.
    public $has_children; 

    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="dropdown-menu border-0 shadow-sm">';
    }

    function end_lvl(&$output, $depth = 0, $args = null) { 
        $output .= '</ul>'; 
    }

    // Updated $item parameter to handle standard objects/posts safely for strict PHP signatures
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? [] : (array)$item->classes;
        $active  = in_array('current-menu-item', $classes) || in_array('current_page_item', $classes);
        $has_sub = in_array('menu-item-has-children', $classes);

        if ($depth === 0) {
            $output .= '<li class="nav-item' . ($has_sub ? ' dropdown' : '') . '">';
            if ($has_sub) {
                $output .= sprintf(
                    '<a class="nav-link dropdown-toggle%s" href="%s" data-bs-toggle="dropdown" aria-expanded="false">%s</a>',
                    $active ? ' active' : '', esc_url($item->url), esc_html($item->title)
                );
            } else {
                $output .= sprintf(
                    '<a class="nav-link%s" href="%s"%s>%s</a>',
                    $active ? ' active' : '', esc_url($item->url),
                    $item->target ? ' target="'.esc_attr($item->target).'"' : '',
                    esc_html($item->title)
                );
            }
        } else {
            $output .= sprintf(
                '<li><a class="dropdown-item fw-bold" href="%s">%s</a>',
                esc_url($item->url), esc_html($item->title)
            );
        }
    }
    
    function end_el(&$output, $item, $depth = 0, $args = null) { 
        $output .= '</li>'; 
    }
}

function razh_default_nav_bs() {
    $links = [
        razh_get_shop_url()             => 'Shop',
        home_url('/bilao/')      => 'Bilao Orders',
        home_url('/product-category/')  => 'Categories',
        home_url('/occasions/')         => 'For Occasions',
        home_url('/contact/')           => 'Contact',
    ];
    foreach ($links as $url => $label) {
        printf('<li class="nav-item"><a class="nav-link" href="%s">%s</a></li>', esc_url($url), esc_html($label));
    }
}
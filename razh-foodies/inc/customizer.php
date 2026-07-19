<?php
/**
 * Razh Foodies Theme Customizer — Bootstrap 5 build
 */
defined('ABSPATH') || exit;

function razh_customize_register($wp_customize) {

    $wp_customize->add_panel('razh_panel', [
        'title'    => __('Razh Foodies Settings','razh-foodies'),
        'priority' => 130,
    ]);

    /* ── Contact ── */
    $wp_customize->add_section('razh_contact',['title'=>__('Contact Information','razh-foodies'),'panel'=>'razh_panel']);
    foreach ([
        'razh_phone'   => ['label'=>__('Phone','razh-foodies'),       'default'=>'09852335090'],
        'razh_fb_url'  => ['label'=>__('Facebook URL','razh-foodies'), 'default'=>'https://www.facebook.com/razh.foodies'],
        'razh_address' => ['label'=>__('Address','razh-foodies'),      'default'=>'Tagum City, Davao del Norte'],
        'razh_gcash'   => ['label'=>__('GCash Number','razh-foodies'), 'default'=>'09852335090'],
    ] as $id => $f) {
        $wp_customize->add_setting($id,['default'=>$f['default'],'sanitize_callback'=>'sanitize_text_field','transport'=>'refresh']);
        $wp_customize->add_control($id,['label'=>$f['label'],'section'=>'razh_contact','type'=>'text']);
    }

    /* ── Hero ── */
    $wp_customize->add_section('razh_hero',['title'=>__('Hero Banner','razh-foodies'),'panel'=>'razh_panel']);
    foreach ([
        'razh_hero_title'    => ['label'=>__('Title','razh-foodies'),       'default'=>'Traditional Native Kakanin', 'type'=>'text'],
        'razh_hero_subtitle' => ['label'=>__('Subtitle','razh-foodies'),    'default'=>'Lutong-bahay, pang-okasyon!','type'=>'text'],
        'razh_hero_desc'     => ['label'=>__('Description','razh-foodies'), 'default'=>'Authentic homemade Filipino kakanin freshly made every day in Tagum City.','type'=>'textarea'],
    ] as $id => $f) {
        $wp_customize->add_setting($id,['default'=>$f['default'],'sanitize_callback'=>$f['type']==='textarea'?'sanitize_textarea_field':'sanitize_text_field']);
        $wp_customize->add_control($id,['label'=>$f['label'],'section'=>'razh_hero','type'=>$f['type']]);
    }

    /* ── Announce Bar ── */
    $wp_customize->add_section('razh_announce',['title'=>__('Announcement Bar','razh-foodies'),'panel'=>'razh_panel']);
    $wp_customize->add_setting('razh_announce_text',['default'=>'FREE DELIVERY sa Tagum City — Min. order ₱350','sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control('razh_announce_text',['label'=>__('Announcement Text','razh-foodies'),'section'=>'razh_announce','type'=>'text']);

    /* ── Colors ── */
    $wp_customize->add_section('razh_colors',['title'=>__('Brand Colors','razh-foodies'),'panel'=>'razh_panel']);
    foreach ([
        'razh_color_red'    => ['label'=>__('Primary Red','razh-foodies'),  'default'=>'#C41230'],
        'razh_color_dark'   => ['label'=>__('Dark Red','razh-foodies'),     'default'=>'#8B0E22'],
        'razh_color_yellow' => ['label'=>__('Brand Yellow','razh-foodies'), 'default'=>'#F7E840'],
    ] as $id => $s) {
        $wp_customize->add_setting($id,['default'=>$s['default'],'sanitize_callback'=>'sanitize_hex_color','transport'=>'postMessage']);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,$id,['label'=>$s['label'],'section'=>'razh_colors']));
    }
}
add_action('customize_register','razh_customize_register');

/* Output custom CSS variables */
function razh_customizer_css() {
    $red    = get_theme_mod('razh_color_red',    '#C41230');
    $dark   = get_theme_mod('razh_color_dark',   '#8B0E22');
    $yellow = get_theme_mod('razh_color_yellow', '#F7E840');
    echo "<style id='razh-custom-colors'>:root{--razh-red:{$red};--bs-primary:{$red};--razh-red-dark:{$dark};--razh-yellow:{$yellow};}</style>\n";
}
add_action('wp_head','razh_customizer_css',999);

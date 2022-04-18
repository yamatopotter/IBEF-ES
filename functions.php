<?php

//Limpar Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link',10,0);
remove_action('wp_head', 'ajacent_post_rel_link_wp_head',10,0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script',7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Registro dos arquivos CSS e JS
function register_assets() {
    // bootstrap e bootstrap icons
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('bootstrap-icon', get_template_directory_uri() . '/assets/css/bootstrap-icons.css');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');

    // main style
    wp_register_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

    // main.js
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js');

    // lightGallery
    wp_register_style('lightGallery', get_template_directory_uri() . './assets/plugins/lightGallery/css/lightgallery-bundle.min.css');
    wp_register_script('lightGallery', get_template_directory_uri() . './assets/plugins/lightGallery/lightgallery.umd.js');
    wp_register_script('lightGallery-zoom-function', get_template_directory_uri() . './assets/plugins/lightGallery/plugins/zoom/lg-zoom.umd.js"');
    wp_register_script('lightGallery-thumbnail-function', get_template_directory_uri() . './assets/plugins/lightGallery/plugins/thumbnail/lg-thumbnail.umd.js');
}

// Inserção dos scripts na página
function enqueue_site_assets() {
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('main');
    wp_enqueue_script('lightGallery');
    wp_enqueue_script('lightGallery-zoom-function');
    wp_enqueue_script('lightGallery-thumbnail-function');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icon');
    wp_enqueue_style('main-style');
    wp_enqueue_style('lightGallery');
}

//Realiza a função de registrar os arquivos e os inserir na página.
add_action('init', function () {
    register_assets();
    enqueue_site_assets();
});

// Suporte ao menu no tema
add_theme_support('menus');

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

add_action( 'init', 'register_my_menu' );

// Corrigindo LI do menu
function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

?>
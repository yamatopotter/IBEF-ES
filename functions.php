<?php

require_once("functions/custom-controls.php");
require_once('functions/custom-theme.php');
require_once("functions/assets.php");

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

// Adiciona suporte ao thumbnail de posts e remove a exibição da barra de administração quando logado
add_action('init', function () {
    add_theme_support('post-thumbnails');
    show_admin_bar(false);
});

// Retorna alguma opção do tema customizado
function returnThemeObject($prop){
    echo get_theme_mod($prop);
}


?>
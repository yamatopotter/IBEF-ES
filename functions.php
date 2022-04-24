<?php

require_once("functions/custom-controls.php");
require_once("functions/custom-post-types.php");
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

function the_thumbnail($size = null) {
    if ($thumb = get_thumbnail($size, null)) {
        echo $thumb->src;
    }
}

function get_the_thumbnail($size = null) {
    if ($thumb = get_thumbnail($size, null)) {
        return $thumb->src;
    }
    return '';
}

function get_thumbnail($size = null, $ID = null) {
    if ($ID != null) {
        $attachment = get_post($ID);
        $meta = json_decode(json_encode(wp_get_attachment_metadata($ID)));
    } else {
        global $post;
        $attachment = get_post(get_post_thumbnail_id($post->ID));
        $meta = json_decode(json_encode(wp_get_attachment_metadata(get_post_thumbnail_id($post->ID))));
    }
    $src = $attachment->guid;
    if ($size != null) {
        if (!empty($meta->sizes->{$size})) {
            $a = explode('/', $meta->file);
            $file = $a[count($a) - 1];
            $src = str_replace($file, $meta->sizes->{$size}->file, $src);
        }
    }
    return (object)array(
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => $src,
        'title' => $attachment->post_title
    );
}

// Adiciona reticencias no final do excerpt
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Quantidade do excerpt diferente do padrão

function limit_excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

// Limite de caracteres do excerpt

function the_excerpt_30($length){
    return 30;
}
add_filter('excerpt_length', 'the_excerpt_30');

function returnDateEvent($postId){
    return date_format(date_create(get_post_meta($postId, '_event_date', true)), 'd');
}

function returnMonthEvent($postId){
    return date_format(date_create(get_post_meta($postId, '_event_date', true)), 'M');
}

function returnFullDateEvent($postId){
    return date_format(date_create(get_post_meta($postId, '_event_date', true)), 'd-m-Y');
}

function returnCustomObject($name){
    $custom = get_post_custom();
    $customObject = $custom[$name][0];
    return $customObject;
}


?>
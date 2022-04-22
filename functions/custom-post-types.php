<?php

add_action('init', 'register_post_types');

function register_post_types(){
    register_post_type('noticias', array(
        'labels' => array(
            'name' => __('Notícia'),
            'singular_name' => __('Notícia'),
            'add_new' => __('Adicionar nova notícia'),
            'add_new_item' => __('Adicionar nova notícia'),
            'edit_item' => __('Editar notícia'),
            'new_item' => __('Nova notícia'),
            'all_items' => __('Todas as notícias'),
            'view_item' => __('Exibir notícia'),
            'search_items' => __('Buscar notícia'),
            'not_found' => __('Nenhuma notícia encontrado'),
            'not_found_in_trash' => __('Nenhum item encontrado na Lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Notícias'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-media-document',
        'has_archive' => true,
        'rewrite' => array('slug' => 'noticias'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'excerpt', 'editor', 'thumbnail'
        )
    ));
}
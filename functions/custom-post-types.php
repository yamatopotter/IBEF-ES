<?php

add_action('init', 'register_post_types');

function register_post_types(){
    // Notícias
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

    // Eventos
    register_post_type('eventos', array(
        'labels' => array(
            'name' => __('Eventos'),
            'singular_name' => __('Evento'),
            'add_new' => __('Adicionar novo'),
            'add_new_item' => __('Adicionar novo evento'),
            'edit_item' => __('Editar evento'),
            'new_item' => __('Novo evento'),
            'all_items' => __('Todas as evento'),
            'view_item' => __('Exibir evento'),
            'view_items' => __('Exibir eventos'),
            'search_items' => __('Buscar notícia'),
            'not_found' => __('Nenhum evento encontrado'),
            'not_found_in_trash' => __('Nenhum evento encontrado na lixeira'),
            'archives' => ('Histórico de eventos'),
            'parent_item_colon' => '',
            'menu_name' => 'Eventos'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'public_queryable' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'eventos'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'excerpt', 'editor', 'thumbnail', 'custom-fields'
        )
    ));

    // Mantenedores

    register_post_type('mantenedor', array(
        'labels' => array(
            'name' => __('Mantenedores'),
            'singular_name' => __('Mantenedor'),
            'add_new' => __('Adicionar novo'),
            'add_new_item' => __('Adicionar novo mantenedor'),
            'edit_item' => __('Editar mantenedor'),
            'new_item' => __('Novo mantenedor'),
            'all_items' => __('Todas os mantenedores'),
            'view_item' => __('Exibir mantenedor'),
            'view_items' => __('Exibir mantenedores'),
            'search_items' => __('Buscar mantenedores'),
            'not_found' => __('Nenhum mantenedor encontrado'),
            'not_found_in_trash' => __('Nenhum mantenedor encontrado na lixeira'),
            'archives' => ('Histórico de mantenedores'),
            'parent_item_colon' => '',
            'menu_name' => 'Mantenedores'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-heart',
        'public_queryable' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'taxonomies' => array('mantenedor_category'),
        'rewrite' => array('slug' => 'mantenedor'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));
}
// --------------------- Metabox - Evento - Data do Evento ------------------------------
function add_event_metaboxes(){
    add_meta_box(
        "post_metadata_events_post", //div id contendo os campos renderizados
        "Dia do Evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "side", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_event_metaboxes');

// Função que realiza o salvamento das informações
function save_post_meta_box(){
    global $post;
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    update_post_meta($post->ID,"_event_date", sanitize_text_field($_POST['_event_date']));
}

add_action('save_post', 'save_post_meta_box');

// Função de callback
function post_meta_box_events_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_event_date'][0];
    echo "<input type=\"date\" name=\"_event_date\" value=\"".$fieldData."\" placeholder=\"Dia do Evento\"> ";
}

// ---------------- Metabox - Mantenedor - Link para a imagem -------------------------

function add_link_mantenedor_metaboxes(){
    add_meta_box(
        "post_metadata_link_mantenedor_post", //div id contendo os campos renderizados
        "Link do Mantenedor",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_link_mantenedor_post", //callback para renderizar os campos
        "mantenedor", //nome do tipo do post onde queremos que a caixa renderize
        "normal", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_link_mantenedor_metaboxes');

// Função que realiza o salvamento das informações
function save_post_meta_box_mantenedor(){
    global $post;
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    update_post_meta($post->ID,"_link_mantenedor", sanitize_text_field($_POST['_link_mantenedor']));
}

add_action('save_post', 'save_post_meta_box_mantenedor');

// Função de callback
function post_meta_box_link_mantenedor_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_link_mantenedor'][0];
    echo "<input type=\"text\" name=\"_link_mantenedor\" value=\"".$fieldData."\" placeholder=\"Link para o site do mantenedor\" style='padding: 10px; width: 100%; display: block'> ";
}

// -----------------------------Categoria para os tipos de mantenedores ----------------------
function mantenedor_category() {	
	$labels = array(
		'name'              => _x( 'Mantenedores', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'mantenedor', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Procurar mantenedores', 'textdomain' ),
		'all_items'         => __( 'Todos os mantenedores', 'textdomain' ),
		'parent_item'       => __( 'Parent mantenedor', 'textdomain' ),
		'parent_item_colon' => __( 'Parent mantenedor:', 'textdomain' ),
		'edit_item'         => __( 'Editar mantenedor', 'textdomain' ),
		'update_item'       => __( 'Atualizar mantenedor', 'textdomain' ),
		'add_new_item'      => __( 'Adicionar tipo de mantenedor', 'textdomain' ),
		'new_item_name'     => __( 'Novo tipo de mantenedor', 'textdomain' ),
		'menu_name'         => __( 'Mantenedor', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Tipo do mantenedor', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => false,
	);
	register_taxonomy( 'mantenedor', array('mantenedor'), $args );
}
add_action( 'init', 'mantenedor_category' );

?>
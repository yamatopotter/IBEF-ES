<?php

function register_post_types(){
    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo notícias                         */
    /* -------------------------------------------------------------------------- */

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
        'taxonomies' => array('category', 'post_tag'),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'noticias'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'excerpt', 'editor', 'thumbnail'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                           Registro do tipo Mídia                           */
    /* -------------------------------------------------------------------------- */

    register_post_type('midia', array(
        'labels' => array(
            'name' => __('Mídia'),
            'singular_name' => __('Mídia'),
            'add_new' => __('Adicionar nova'),
            'add_new_item' => __('Adicionar nova mídia'),
            'edit_item' => __('Editar mídia'),
            'new_item' => __('Nova mídia'),
            'all_items' => __('Todas as mídias'),
            'view_item' => __('Exibir mídia'),
            'view_items' => __('Exibir mídias'),
            'search_items' => __('Buscar mídia'),
            'not_found' => __('Nenhuma mídia encontrado'),
            'not_found_in_trash' => __('Nenhuma mídia encontrado na lixeira'),
            'archives' => ('Histórico de mídias'),
            'parent_item_colon' => '',
            'menu_name' => 'IBEF na Mídia'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-id-alt',
        'public_queryable' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'midia'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Informe                          */
    /* -------------------------------------------------------------------------- */
    
    register_post_type('informe', array(
        'labels' => array(
            'name' => __('Informe'),
            'singular_name' => __('Informe'),
            'add_new' => __('Adicionar nova'),
            'add_new_item' => __('Adicionar novo informe'),
            'edit_item' => __('Editar informe'),
            'new_item' => __('Novo informe'),
            'all_items' => __('Todos os informe'),
            'view_item' => __('Exibir informe'),
            'view_items' => __('Exibir informes'),
            'search_items' => __('Buscar informe'),
            'not_found' => __('Nenhum informe encontrado'),
            'not_found_in_trash' => __('Nenhum informe encontrado na lixeira'),
            'archives' => ('Histórico de informes'),
            'parent_item_colon' => '',
            'menu_name' => 'Informe'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-info-outline',
        'public_queryable' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'informe'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Eventos                          */
    /* -------------------------------------------------------------------------- */

    register_post_type('eventos', array(
        'labels' => array(
            'name' => __('Eventos'),
            'singular_name' => __('Evento'),
            'add_new' => __('Adicionar novo'),
            'add_new_item' => __('Adicionar novo evento'),
            'edit_item' => __('Editar evento'),
            'new_item' => __('Novo evento'),
            'all_items' => __('Todos os evento'),
            'view_item' => __('Exibir evento'),
            'view_items' => __('Exibir eventos'),
            'search_items' => __('Buscar evento'),
            'not_found' => __('Nenhum evento encontrado'),
            'not_found_in_trash' => __('Nenhum evento encontrado na lixeira'),
            'archives' => ('Histórico de eventos'),
            'parent_item_colon' => '',
            'menu_name' => 'Eventos'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'public_queryable' => true,
        'hierarchical' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'eventos'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Diretoria                        */
    /* -------------------------------------------------------------------------- */

    register_post_type('diretoria', array(
        'labels' => array(
            'name' => __('Diretoria'),
            'singular_name' => __('Diretoria'),
            'add_new' => __('Adicionar novo membro'),
            'add_new_item' => __('Adicionar novo membro'),
            'edit_item' => __('Editar membro'),
            'new_item' => __('Novo membro'),
            'all_items' => __('Todos os membros'),
            'view_item' => __('Exibir membro'),
            'view_items' => __('Exibir membros'),
            'search_items' => __('Buscar membros'),
            'not_found' => __('Nenhum membro encontrado'),
            'not_found_in_trash' => __('Nenhum membro encontrado na lixeira'),
            'archives' => ('Todos de Membros'),
            'parent_item_colon' => '',
            'menu_name' => 'Diretoria'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'public_queryable' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'taxonomies' => array('diretor_category'),
        'rewrite' => array('slug' => 'diretoria'),
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Mantenedores                     */
    /* -------------------------------------------------------------------------- */

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
        'show_in_rest' => true,
        'query_var' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'supports' => array(
            'title', 'thumbnail', 'custom-fields'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Galerias                         */
    /* -------------------------------------------------------------------------- */
     register_post_type('galerias', array(
        'labels' => array(
            'name' => __('Galeria de Fotos'),
            'singular_name' => __('Galeria de Foto'),
            'add_new' => __('Adicionar nova galeria'),
            'add_new_item' => __('Adicionar nova galeria'),
            'edit_item' => __('Editar galeria'),
            'new_item' => __('Nova galeria'),
            'all_items' => __('Todas as galerias'),
            'view_item' => __('Exibir galeria'),
            'search_items' => __('Buscar galerias'),
            'not_found' => __('Nenhuma galeria encontrado'),
            'not_found_in_trash' => __('Nenhuma galeria encontrada na Lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Galeria de Fotos'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-gallery',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'fotos'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail'
        )
    ));

    /* -------------------------------------------------------------------------- */
    /*                          Registro do tipo Convênios                        */
    /* -------------------------------------------------------------------------- */
    register_post_type('convenios', array(
        'labels' => array(
            'name' => __('Convênios'),
            'singular_name' => __('Convênio'),
            'add_new' => __('Adicionar novo convênio'),
            'add_new_item' => __('Adicionar novo convênio'),
            'edit_item' => __('Editar convênio'),
            'new_item' => __('Novo convênio'),
            'all_items' => __('Todos os convênios'),
            'view_item' => __('Exibir convênio'),
            'search_items' => __('Buscar convênios'),
            'not_found' => __('Nenhum convênio encontrado'),
            'not_found_in_trash' => __('Nenhum convênio encontrado na Lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Convênios'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-star-empty',
        'has_archive' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'convenio'),
        'show_in_nav_menus' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail'
        )
    ));
}

add_action('init', 'register_post_types');
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

// --------------------- Metabox - Evento - Link de Inscrição -------------------------
function add_link_event_metaboxes(){
    add_meta_box(
        "post_metadata_link_events_post", //div id contendo os campos renderizados
        "Link para inscrição do evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_link_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "normal", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_link_event_metaboxes');

// Função que realiza o salvamento das informações
function save_link_post_meta_box(){
    global $post;
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    update_post_meta($post->ID,"_event_link", sanitize_text_field($_POST['_event_link']));
}

add_action('save_post', 'save_link_post_meta_box');

// Função de callback
function post_meta_box_link_events_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_event_link'][0];
    echo "<input type=\"text\" name=\"_event_link\" value=\"".$fieldData."\" placeholder=\"Link de inscrição do evento\" style='padding: 10px; width: 100%; display: block'> ";
}

// --------------------- Metabox - Evento - Local ------------------------------
function add_local_event_metaboxes(){
    add_meta_box(
        "post_metadata_local_events_post", //div id contendo os campos renderizados
        "Local do Evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_local_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "side", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_local_event_metaboxes');

// Função que realiza o salvamento das informações
function save_post_local_event_meta_box(){
    global $post;
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    update_post_meta($post->ID,"_local_event", sanitize_text_field($_POST['_local_event']));
}

add_action('save_post', 'save_post_local_event_meta_box');

// Função de callback
function post_meta_box_local_events_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_local_event'][0];
    echo "<input type=\"text\" name=\"_local_event\" value=\"".$fieldData."\" placeholder=\"Local do Evento\"> ";
}

/* -------------------------------------------------------------------------- */
/*                    Metabox de teste para post especifico                   */
/* -------------------------------------------------------------------------- */

// function add_test_metaboxes(){
//     add_meta_box(
//         "post_metadata_test_post", //div id contendo os campos renderizados
//         "Local do Evento",  //Titulo da sessão que será mostrado como texto
//         "post_meta_box_test_post", //callback para renderizar os campos
//         'page', //nome do tipo do post onde queremos que a caixa renderize
//         "normal", //local na tela onde ele vai ficar
//         "low" //prioridade de exibição
//     );
// }

// add_action("admin_init", 'add_test_metaboxes');

// // Função que realiza o salvamento das informações
// function save_post_test_meta_box(){
//     global $post;
//     if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
//         return;
//     }
//     update_post_meta($post->ID,"_local_event", sanitize_text_field($_POST['_local_event']));
// }

// add_action('save_post', 'save_post_test_meta_box');

// // Função de callback
// function post_meta_box_test_post(){
//     global $post;

//     $template_path = get_post_meta(get_the_ID(), '_wp_page_template', true);
//     $templates = wp_get_theme()->get_page_templates();
//     $pageModel = $templates[$template_path];

//     if($pageModel == 'Eventos e Programas'){
//         $custom = get_post_custom($post->ID);
//         $fieldData = $custom['_local_event'][0];
//         echo "<input type=\"text\" name=\"_local_event\" value=\"".$fieldData."\" placeholder=\"Local do Evento\"> ";
//     }else{
//         echo "Campo disponivel apenas para outro modelo de página.";
//     } 
// }

// --------------------- Metabox - Evento - Tema ------------------------------
function add_tema_event_metaboxes(){
    add_meta_box(
        "post_metadata_tema_events_post", //div id contendo os campos renderizados
        "Tema do Evento",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_tema_events_post", //callback para renderizar os campos
        "eventos", //nome do tipo do post onde queremos que a caixa renderize
        "side", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_tema_event_metaboxes');

// Função que realiza o salvamento das informações
function save_post_tema_event_meta_box(){
    global $post;
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    update_post_meta($post->ID,"_tema_event", sanitize_text_field($_POST['_tema_event']));
}

add_action('save_post', 'save_post_tema_event_meta_box');

// Função de callback
function post_meta_box_tema_events_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_tema_event'][0];
    echo "<input type=\"text\" name=\"_tema_event\" value=\"".$fieldData."\" placeholder=\"Tema do Evento\"> ";
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

// ---------------- Metabox - Diretoria - Cargo da Pessoa -------------------------

function add_cargo_diretoria_metaboxes(){
    add_meta_box(
        "post_metadata_cargo_diretoria_post", //div id contendo os campos renderizados
        "Cargo da Pessoa",  //Titulo da sessão que será mostrado como texto
        "post_meta_box_cargo_diretoria_post", //callback para renderizar os campos
        "diretoria", //nome do tipo do post onde queremos que a caixa renderize
        "normal", //local na tela onde ele vai ficar
        "low" //prioridade de exibição
    );
}

add_action("admin_init", 'add_cargo_diretoria_metaboxes');

// Função que realiza o salvamento das informações
function save_post_meta_box_cargo_diretoria(){
    global $post;
    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }
    update_post_meta($post->ID,"_cargo_diretoria", sanitize_text_field($_POST['_cargo_diretoria']));
}

add_action('save_post', 'save_post_meta_box_cargo_diretoria');

// Função de callback
function post_meta_box_cargo_diretoria_post(){
    global $post;
    $custom = get_post_custom($post->ID);
    $fieldData = $custom['_cargo_diretoria'][0];
    echo "<input type=\"text\" name=\"_cargo_diretoria\" value=\"".$fieldData."\" placeholder=\"Cargo da pessoa\" style='padding: 10px; width: 100%; display: block'> ";
}

// --------------- Metabox - Mídia - PDF -----------------------------
function add_midia_pdf_meta_boxes() {  
    add_meta_box(
        'post_metadata_midia_pdf_post', 
        'PDF da Mídia',
        'post_meta_box_midia_pdf_post',
        'midia',
        'normal',
        'high');  
}
add_action('add_meta_boxes', 'add_midia_pdf_meta_boxes');  

function post_meta_box_midia_pdf_post() {  
    global $post;
    $custom = get_post_meta($post->ID, 'midia_pdf', true);
    $fieldData = $custom['url'];
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
    $html = '<p class="description">';
    $html .= 'Upload da mídia em PDF';
    $html .= '</p>';
    $html .= '<input type="file" id="midia_pdf" name="midia_pdf" value="" size="40" accept=".pdf">';
    if(!empty($fieldData)){
        $html .= '<p class="alert">';
        $html .= "Já existe um arquivo para esse mídia. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
    }
    echo $html;
}

function save_post_meta_box_midia_pdf($id) {
    if(!empty($_FILES['midia_pdf']['name'])) {
        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['midia_pdf']['name']));
        $uploaded_type = $arr_file_type['type'];

        if(in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['midia_pdf']['name'], null, file_get_contents($_FILES['midia_pdf']['tmp_name']));
            if(isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'midia_pdf', $upload);
            }
        }
        else {
            wp_die("O arquivo que tentou subir não é um PDF.");
        }
    }
}
add_action('save_post', 'save_post_meta_box_midia_pdf');

function update_edit_form_midia_pdf() {
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_midia_pdf');

// --------------- Metabox - Informe - PDF -----------------------------
function add_informe_pdf_meta_boxes() {  
    add_meta_box(
        'post_metadata_informe_pdf_post', 
        'PDF da Mídia',
        'post_meta_box_informe_pdf_post',
        'informe',
        'normal',
        'high');  
}
add_action('add_meta_boxes', 'add_informe_pdf_meta_boxes');  

function post_meta_box_informe_pdf_post() {  
    global $post;
    $custom = get_post_meta($post->ID, 'informe_pdf', true);
    wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
    $html = '<p class="description">';
    $html .= 'Upload do informe em PDF';
    $html .= '</p>';
    $html .= '<input type="file" id="informe_pdf" name="informe_pdf" value="" size="40" accept=".pdf">';
    if(!empty($custom['url'])){
        $fieldData = $custom['url'];
        $html .= '<p class="alert">';
        $html .= "Já existe um arquivo para esse informe. Clique <a href='$fieldData' target='_blank'>aqui</a> para visualizar";
        $html .= '</p>';
    }
    echo $html;
}

function save_post_meta_box_informe_pdf($id) {
    if(!empty($_FILES['informe_pdf']['name'])) {
        $supported_types = array('application/pdf');
        $arr_file_type = wp_check_filetype(basename($_FILES['informe_pdf']['name']));
        $uploaded_type = $arr_file_type['type'];

        if(in_array($uploaded_type, $supported_types)) {
            $upload = wp_upload_bits($_FILES['informe_pdf']['name'], null, file_get_contents($_FILES['informe_pdf']['tmp_name']));
            if(isset($upload['error']) && $upload['error'] != 0) {
                wp_die('Houve um erro no upload do arquivo. Erro: ' . $upload['error']);
            } else {
                update_post_meta($id, 'informe_pdf', $upload);
            }
        }
        else {
            wp_die("O arquivo que tentou subir não é um PDF.");
        }
    }
}
add_action('save_post', 'save_post_meta_box_informe_pdf');

function update_edit_form_informe_pdf() {
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form_informe_pdf');

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
		'show_in_rest' => true,
	);
	register_taxonomy( 'mantenedor', array('mantenedor'), $args );
}
add_action( 'init', 'mantenedor_category' );

// -----------------------------Categoria para os tipos de convênios ----------------------
function convenio_category() {	
	$labels = array(
		'name'              => _x( 'Tipo de Convênio', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Convênios', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Procurar convênios', 'textdomain' ),
		'all_items'         => __( 'Todos os convênios', 'textdomain' ),
		'parent_item'       => __( 'Parent convênio', 'textdomain' ),
		'parent_item_colon' => __( 'Parent convênio:', 'textdomain' ),
		'edit_item'         => __( 'Editar convênio', 'textdomain' ),
		'update_item'       => __( 'Atualizar convênio', 'textdomain' ),
		'add_new_item'      => __( 'Adicionar tipo de convênio', 'textdomain' ),
		'new_item_name'     => __( 'Novo tipo de convênio', 'textdomain' ),
		'menu_name'         => __( 'Tipo de convênio', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Tipo do Convênio', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'convenio', array('convenios'), $args );
}
add_action( 'init', 'convenio_category' );

// ----------------------------Categoria para os tipos de diretores -----------------------------
function diretor_category() {

	$labels = array(
		'name'              => _x( 'Área da diretoria', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Área da diretoria', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Procurar diretores', 'textdomain' ),
		'all_items'         => __( 'Todos as áreas', 'textdomain' ),
		'parent_item'       => __( 'Parent diretor', 'textdomain' ),
		'parent_item_colon' => __( 'Parent diretor:', 'textdomain' ),
		'edit_item'         => __( 'Editar diretor', 'textdomain' ),
		'update_item'       => __( 'Atualizar diretor', 'textdomain' ),
		'add_new_item'      => __( 'Adicionar nova área', 'textdomain' ),
		'new_item_name'     => __( 'New diretor Name', 'textdomain' ),
		'menu_name'         => __( 'Setores da Diretoria', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Área da diretoria', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'diretor', array('diretoria'), $args );

}
add_action( 'init', 'diretor_category' );
?>
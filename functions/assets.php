<?php
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
    wp_register_style('lightGallery', get_template_directory_uri() . '/assets/plugins/lightGallery/css/lightgallery-bundle.min.css');
    wp_register_script('lightGallery', get_template_directory_uri() . '/assets/plugins/lightGallery/lightgallery.umd.js');
    // wp_register_script('lightGallery-zoom-function', get_template_directory_uri() . '/assets/plugins/lightGallery/plugins/zoom/lg-zoom.umd.js"');
    wp_register_script('lightGallery-thumbnail-function', get_template_directory_uri() . '/assets/plugins/lightGallery/plugins/thumbnail/lg-thumbnail.umd.js');
}

// Inserção dos scripts na página
function enqueue_site_assets() {
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('main', '', array(), '1.0', true);
    wp_enqueue_script('lightGallery');
    // wp_enqueue_script('lightGallery-zoom-function');
    wp_enqueue_script('lightGallery-thumbnail-function');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icon');
    wp_enqueue_style('main-style');
    wp_enqueue_style('lightGallery');
}

//Realiza a função de registrar os arquivos e os inserir na página.
add_action('init', function () {
    if (!(is_admin())) {
        register_assets();
    }
    enqueue_site_assets();
});

?>
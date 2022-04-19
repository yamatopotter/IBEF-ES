<?php

function theme_customizer_settings( $wp_customize ) {
    // --------------------------- Global -----------------------------------------

    $wp_customize->add_section( 'global-config', array(
        'priority'   => 1,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Configurações Globais',
        'description'    => 'Realiza mudanças globais no sistema'
    ) );
    // Logo do Menu
    $wp_customize->add_setting(
        'logo_menu',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'logo_menu',
        array(
            'label'      => __( 'Logo do Menu', 'logo_menu' ),
            'settings'   => 'logo_menu',
            'section'    => 'global-config',
            'type'       => 'image'
        )
    ) );

    // --------------------------- Página Inicial ---------------------------------

    // Sessão no menu principal
    $wp_customize->add_panel( 'front-page', array(
        'priority'   => 2,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Página inicial',
        'description'    => 'Altera configurações da página inicial'
    ) );

    // Submenu do menu principal
    $wp_customize->add_section( 'intro', array(
        'title'      => __( 'Cabeçalho' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    // Título da intro 

    $wp_customize->add_setting(
        'titulo_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_intro',
        array(
            'label'      => __( 'Título da introdução', 'titulo_label' ),
            'settings'   => 'titulo_intro',
            'section'    => 'intro',
            'type'       => 'text'
        )
    ) );

    // Texto da intro
    $wp_customize->add_setting(
        'texto_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'texto_intro',
        array(
            'label'      => __( 'Texto da introdução', 'titulo_label' ),
            'settings'   => 'texto_intro',
            'section'    => 'intro',
            'type'       => 'textarea'
        )
    ) );

    // Imagem de background Intro
    $wp_customize->add_setting(
        'bg_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'bg_intro',
        array(
            'label'      => __( 'Background da introdução', 'bg_intro' ),
            'settings'   => 'bg_intro',
            'section'    => 'intro',
            'type'       => 'image'
        )
    ) );

    // Checkbox para ver se vai adicionar o botão ou não

    $wp_customize->add_setting(
        'exibir_botao_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'exibir_botao_intro',
        array(
            'label'      => __( 'Exibir botão da introdução?', 'exibir_botao_intro_label' ),
            'settings'   => 'exibir_botao_intro',
            'section'    => 'intro',
            'type'       => 'checkbox'
        )
    ) );
    
    // Texto e link do botão
    $wp_customize->add_setting(
        'link_botao_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'link_botao_intro',
        array(
            'label'      => __( 'Link do botão da Introdução', 'link_botao_intro_label' ),
            'settings'   => 'link_botao_intro',
            'section'    => 'intro',
            'type'       => 'text'
        )
    ) );

    $wp_customize->add_setting(
        'texto_botao_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'texto_botao_intro',
        array(
            'label'      => __( 'Texto do botão da introdução', 'texto_botao_intro_label' ),
            'settings'   => 'texto_botao_intro',
            'section'    => 'intro',
            'type'       => 'text'
        )
    ) );

    // Submenu do menu principal -------------------------- Sobre Nós ---------------------------
    $wp_customize->add_section( 'sobre_nos', array(
        'title'      => __( 'Sobre Nós' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    // Título do bloco sobre nós - TODO
    $wp_customize->add_setting(
        'link_botao_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'link_botao_intro',
        array(
            'label'      => __( 'Link do botão da Introdução', 'link_botao_intro_label' ),
            'settings'   => 'link_botao_intro',
            'section'    => 'intro',
            'type'       => 'text'
        )
    ) );

    // Texto do bloco sobre nós - TODO
    $wp_customize->add_setting(
        'link_botao_intro',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'link_botao_intro',
        array(
            'label'      => __( 'Link do botão da Introdução', 'link_botao_intro_label' ),
            'settings'   => 'link_botao_intro',
            'section'    => 'intro',
            'type'       => 'text'
        )
    ) );

    // Escolha da página

    $wp_customize->add_setting( 'cor_destaque',
    array(
        'default' => '',
        'transport' => 'refresh',
    )
    );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor_destaque',
    array(
        'label' => __( 'Cor de Destaque', 'cor_destaque_pick' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'label'      => __( 'Cor dos Títulos', 'mytheme' ),
            'section'    => 'cores_section',
            'settings'   => 'cor_destaque',
        ),
    )
    ) );
    
    $wp_customize->add_setting( 'cor_texto_header',
    array(
        'default' => '',
        'transport' => 'refresh',
    ) );

}

add_action( 'customize_register', 'theme_customizer_settings' );
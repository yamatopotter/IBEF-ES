<?php

function theme_customizer_settings( $wp_customize ) {
    /**
     * Configurações Globais
     */

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

    /**
     * Configurações da página inicial
     */


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

    // Checkbox para ver se vai adicionar o botão da intro ou não

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
    
    // Texto e link do botão da intro
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

    /**
     * SUBMENU Página Principal -> Sobre nós
     */

    $wp_customize->add_section( 'sobre_nos', array(
        'title'      => __( 'Sobre Nós' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    // Imagem do sobre nós
    $wp_customize->add_setting(
        'img_sobre_nos',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'img_sobre_nos',
        array(
            'label'      => __( 'Imagem do Sobre Nós', 'img_sobre_nos' ),
            'settings'   => 'img_sobre_nos',
            'section'    => 'sobre_nos',
            'type'       => 'image'
        )
    ) );

    //Título do bloco sobre nós
    $wp_customize->add_setting(
        'titulo_sobre_nos',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_sobre_nos',
        array(
            'label'      => __( 'Título do bloco sobre nós', 'titulo_sobre_nos_label' ),
            'settings'   => 'titulo_sobre_nos',
            'section'    => 'sobre_nos',
            'type'       => 'text'
        )
    ) );

    //Subtítulo do bloco sobre nós
    $wp_customize->add_setting(
        'subtitulo_sobre_nos',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtitulo_sobre_nos',
        array(
            'label'      => __( 'Subtítulo do bloco sobre nós', 'subtitulo_sobre_nos_label' ),
            'settings'   => 'subtitulo_sobre_nos',
            'section'    => 'sobre_nos',
            'type'       => 'text'
        )
    ) );

    // Texto do bloco sobre nós
    $wp_customize->add_setting(
        'texto_sobre_nos',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'texto_sobre_nos',
        array(
            'label'      => __( 'Texto do bloco sobre nós', 'texto_sobre_nos_label' ),
            'settings'   => 'texto_sobre_nos',
            'section'    => 'sobre_nos',
            'type'       => 'textarea'
        )
    ) );

    // Seleção da página para link do bloco sobre nós
    $wp_customize->add_setting(
        'pagina_sobre_nos',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pagina_sobre_nos',
        array(
            'label'      => __( 'Página para linkar o botão saiba mais', 'pagina_sobre_nos_label' ),
            'settings'   => 'pagina_sobre_nos',
            'section'    => 'sobre_nos',
            'type'       => 'dropdown-pages'
        )
    ) );

    /**
     * SUBMENU Página Principal -> Últimas notícias
     */
    $wp_customize->add_section( 'ultimas_noticias', array(
        'title'      => __( 'Últimas Notícias' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    //Título do bloco ultimas notícias
    $wp_customize->add_setting(
        'titulo_ultimas_noticias',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_ultimas_noticias',
        array(
            'label'      => __( 'Título do bloco últimas notícias', 'titulo_ultimas_noticias_label' ),
            'settings'   => 'titulo_ultimas_noticias',
            'section'    => 'ultimas_noticias',
            'type'       => 'text'
        )
    ) );

     //Subtítulo do bloco ultimas notícias
     $wp_customize->add_setting(
        'subtitulo_ultimas_noticias',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtitulo_ultimas_noticias',
        array(
            'label'      => __( 'Subtítulo do bloco últimas notícias', 'subtitulo_ultimas_noticias_label' ),
            'settings'   => 'subtitulo_ultimas_noticias',
            'section'    => 'ultimas_noticias',
            'type'       => 'text'
        )
    ) );

    /**
     *  SUBMENU Página Principal -> Eventos 
     */
    $wp_customize->add_section( 'eventos', array(
        'title'      => __( 'Eventos' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    //Título do bloco eventos
    $wp_customize->add_setting(
        'titulo_eventos',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_eventos',
        array(
            'label'      => __( 'Título do bloco de eventos', 'titulo_eventos_label' ),
            'settings'   => 'titulo_eventos',
            'section'    => 'eventos',
            'type'       => 'text'
        )
    ) );

     //Subtítulo do bloco eventos
     $wp_customize->add_setting(
        'subtitulo_eventos',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtitulo_eventos',
        array(
            'label'      => __( 'Subtítulo do bloco de eventos', 'subtitulo_eventos_label' ),
            'settings'   => 'subtitulo_eventos',
            'section'    => 'eventos',
            'type'       => 'text'
        )
    ) );

   /**
    * SUBMENU Página Principal -> Mídia
    */

      $wp_customize->add_section( 'midia', array(
        'title'      => __( 'Mídia' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    //Título do bloco mídia
    $wp_customize->add_setting(
        'titulo_midia',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_midia',
        array(
            'label'      => __( 'Título do bloco de mídia', 'titulo_midia_label' ),
            'settings'   => 'titulo_midia',
            'section'    => 'midia',
            'type'       => 'text'
        )
    ) );

     //Subtítulo do bloco mídia
     $wp_customize->add_setting(
        'subtitulo_midia',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtitulo_midia',
        array(
            'label'      => __( 'Subtítulo do bloco de mídia', 'subtitulo_midia_label' ),
            'settings'   => 'subtitulo_midia',
            'section'    => 'midia',
            'type'       => 'text'
        )
    ) );

    /**
     * SUBMENU Página Principal -> Podcast
     */
    $wp_customize->add_section( 'podcast', array(
        'title'      => __( 'Podcast' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    //Título do bloco podcast 
    $wp_customize->add_setting(
        'titulo_podcast',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_podcast',
        array(
            'label'      => __( 'Título do bloco de podcast', 'titulo_podcast_label' ),
            'settings'   => 'titulo_podcast',
            'section'    => 'podcast',
            'type'       => 'text'
        )
    ) );

    //Subtítulo do bloco podcast 
     $wp_customize->add_setting(
        'subtitulo_podcast',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtitulo_podcast',
        array(
            'label'      => __( 'Subtítulo do bloco de podcast', 'subtitulo_podcast_label' ),
            'settings'   => 'subtitulo_podcast',
            'section'    => 'podcast',
            'type'       => 'text'
        )
    ) );

    //Código do Spotify 
      $wp_customize->add_setting(
        'iframe_podcast',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'iframe_podcast',
        array(
            'label'      => __( 'Código do player do podcast', 'iframe_podcast_label' ),
            'settings'   => 'iframe_podcast',
            'section'    => 'podcast',
            'type'       => 'textarea'
        )
    ) );

    /**
     * SUBMENU Página Principal -> Mantenedores
     */
    $wp_customize->add_section( 'mantenedores', array(
        'title'      => __( 'Mantenedores' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    //Título do bloco Mantenedores
    $wp_customize->add_setting(
        'titulo_mantenedores',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_mantenedores',
        array(
            'label'      => __( 'Título do bloco de mantenedores', 'titulo_mantenedores_label' ),
            'settings'   => 'titulo_mantenedores',
            'section'    => 'mantenedores',
            'type'       => 'text'
        )
    ) );

    //Subtítulo do bloco Mantenedores
     $wp_customize->add_setting(
        'subtitulo_mantenedores',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtitulo_mantenedores',
        array(
            'label'      => __( 'Subtítulo do bloco de mantenedores', 'subtitulo_mantenedores_label' ),
            'settings'   => 'subtitulo_mantenedores',
            'section'    => 'mantenedores',
            'type'       => 'text'
        )
    ) );

    // Mantenedor Diamante

    //Título da categoria diamante
    $wp_customize->add_setting(
        'titulo_categoria_diamante',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_categoria_diamante',
        array(
            'label'      => __( 'Título da categoria diamante', 'titulo_categoria_diamante_label' ),
            'settings'   => 'titulo_categoria_diamante',
            'section'    => 'mantenedores',
            'type'       => 'text'
        )
    ) );

    // Categoria a ser listada na área de diamantes
    $wp_customize->add_setting( 'categoria_bloco_diamante',
	array(
		'default' => '',
		'transport' => 'refresh',
	));

    $wp_customize->add_control(  new WP_Customize_Control(
        $wp_customize,
        'categoria_bloco_diamante',
        array(
            'label'      => __( 'Categoria a ser listada no bloco de mantenedores diamante', 'categoria_bloco_diamante_label' ),
            'settings'   => 'categoria_bloco_diamante',
            'section'    => 'mantenedores',
            'type'       => 'select',
            'choices' => returnCustomTerm('mantenedor')
        )
    ) );

    // Mantenedor Master

    //Título da categoria master
    $wp_customize->add_setting(
        'titulo_categoria_master',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_categoria_master',
        array(
            'label'      => __( 'Título da categoria master', 'titulo_categoria_master_label' ),
            'settings'   => 'titulo_categoria_master',
            'section'    => 'mantenedores',
            'type'       => 'text'
        )
    ) );

    // Categoria a ser listada na área de master

    $wp_customize->add_setting( 'categoria_bloco_master',
	array(
		'default' => '',
		'transport' => 'refresh',
	));

    $wp_customize->add_control(  new WP_Customize_Control(
        $wp_customize,
        'categoria_bloco_master',
        array(
            'label'      => __( 'Categoria a ser listada no bloco de mantenedores master', 'categoria_bloco_master_label' ),
            'settings'   => 'categoria_bloco_master',
            'section'    => 'mantenedores',
            'type'       => 'select',
            'choices' => returnCustomTerm('mantenedor')
        )
    ) );

    // Mantenedor Sênior

    //Título da categoria senior 
     $wp_customize->add_setting(
        'titulo_categoria_senior',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_categoria_senior',
        array(
            'label'      => __( 'Título da categoria senior', 'titulo_categoria_senior_label' ),
            'settings'   => 'titulo_categoria_senior',
            'section'    => 'mantenedores',
            'type'       => 'text'
        )
    ) );

    // Categoria a ser listada na área de senior

     $wp_customize->add_setting( 'categoria_bloco_senior',
     array(
         'default' => '',
         'transport' => 'refresh',
     ));
 
     $wp_customize->add_control(  new WP_Customize_Control(
         $wp_customize,
         'categoria_bloco_senior',
         array(
             'label'      => __( 'Categoria a ser listada no bloco de mantenedores sêniors', 'categoria_bloco_senior_label' ),
             'settings'   => 'categoria_bloco_senior',
             'section'    => 'mantenedores',
             'type'       => 'select',
             'choices' => returnCustomTerm('mantenedor')
         )
     ) );

    // Mantenedor Pleno

    //Título da categoria pleno 
    $wp_customize->add_setting(
        'titulo_categoria_pleno',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_categoria_pleno',
        array(
            'label'      => __( 'Título da categoria pleno', 'titulo_categoria_pleno_label' ),
            'settings'   => 'titulo_categoria_pleno',
            'section'    => 'mantenedores',
            'type'       => 'text'
        )
    ) );

    // Categoria a ser listada na área de pleno

     $wp_customize->add_setting( 'categoria_bloco_pleno',
     array(
         'default' => '',
         'transport' => 'refresh',
     ));
 
     $wp_customize->add_control(  new WP_Customize_Control(
         $wp_customize,
         'categoria_bloco_pleno',
         array(
             'label'      => __( 'Categoria a ser listada no bloco de mantenedores pleno', 'categoria_bloco_pleno_label' ),
             'settings'   => 'categoria_bloco_pleno',
             'section'    => 'mantenedores',
             'type'       => 'select',
             'choices' => returnCustomTerm('mantenedor')
         )
     ) );

    // Mantenedor Apoiador
    
     //Título da categoria apoiador
    $wp_customize->add_setting(
        'titulo_categoria_apoiador',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_categoria_apoiador',
        array(
            'label'      => __( 'Título da categoria apoiador ', 'titulo_categoria_apoiador_label' ),
            'settings'   => 'titulo_categoria_apoiador',
            'section'    => 'mantenedores',
            'type'       => 'text'
        )
    ) );

    // Categoria a ser listada na área de apoiador

     $wp_customize->add_setting( 'categoria_bloco_apoiador',
     array(
         'default' => '',
         'transport' => 'refresh',
     ));
 
     $wp_customize->add_control(  new WP_Customize_Control(
         $wp_customize,
         'categoria_bloco_apoiador',
         array(
             'label'      => __( 'Categoria a ser listada no bloco de mantenedores apoiadores', 'categoria_bloco_apoiador_label' ),
             'settings'   => 'categoria_bloco_apoiador',
             'section'    => 'mantenedores',
             'type'       => 'select',
             'choices' => returnCustomTerm('mantenedor')
         )
     ) );

    /**
     * SUBMENU Página Principal -> Footer
     */
     $wp_customize->add_section( 'footer', array(
        'title'      => __( 'Rodapé' ),
        'priority'   => 0,
        'panel'    => 'front-page'
    ) );

    //Telefone de contato
    $wp_customize->add_setting(
        'telefone_contato',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'telefone_contato',
        array(
            'label'      => __( 'Telefone', 'telefone_contato_label' ),
            'settings'   => 'telefone_contato',
            'section'    => 'footer',
            'type'       => 'text'
        )
    ) );

    //Email de contato
    $wp_customize->add_setting(
        'email_contato',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'email_contato',
        array(
            'label'      => __( 'E-mail', 'email_contato_label' ),
            'settings'   => 'email_contato',
            'section'    => 'footer',
            'type'       => 'text'
        )
    ) );
    
    //Endereço do Escritório
    $wp_customize->add_setting(
        'endereco_contato',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'endereco_contato',
        array(
            'label'      => __( 'Endereço', 'endereco_contato_label' ),
            'settings'   => 'endereco_contato',
            'section'    => 'footer',
            'type'       => 'text'
        )
    ) );

    //Código do Google Maps
     $wp_customize->add_setting(
        'iframe_maps',
        array(
            'default' => '',
            'transport'=>'refresh'
        )
    );
    
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'iframe_maps',
        array(
            'label'      => __( 'Código do iframe do Google Maps', 'iframe_maps_label' ),
            'settings'   => 'iframe_maps',
            'section'    => 'footer',
            'type'       => 'textarea'
        )
    ) );

    /**
     * Páginas Internas
     */
    $wp_customize->add_panel( 'archives', array(
        'priority'   => 3,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Páginas Internas',
        'description'    => 'Altera configurações das páginas que listam conteúdos'
    ));

    /**
     * SUBMENU Páginas Internas -> Notícias
     */
    $wp_customize->add_section( 'archive_noticia', array(
        'title'      => __( 'Noticias' ),
        'panel'     => 'archives',
        'priority'   => 0,
    ));

    // Título da archive de notícias 

    $wp_customize->add_setting(
        'titulo_archive_noticias',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_archive_noticias',
        array(
            'label'      => __( 'Título da Página', 'titulo_archive_noticias_label' ),
            'settings'   => 'titulo_archive_noticias',
            'section'    => 'archive_noticia',
            'type'       => 'text'
        )
    ));

    // Quantidade de post de notícias

    $wp_customize->add_setting(
        'quantidade_posts_noticias',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'quantidade_posts_noticias',
        array(
            'label'      => __( 'Quantidade de Post', 'quantidade_posts_noticias_label' ),
            'settings'   => 'quantidade_posts_noticias',
            'section'    => 'archive_noticia',
            'type'       => 'number'
        )
    ));

     /**
      * SUBMENU Páginas Internas -> Eventos
      */
     $wp_customize->add_section( 'archive_eventos', array(
        'title'      => __( 'Eventos' ),
        'panel'     => 'archives',
        'priority'   => 0,
    ));

    // Título da archive de Eventos

    $wp_customize->add_setting(
        'titulo_archive_eventos',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_archive_eventos',
        array(
            'label'      => __( 'Título da Página', 'titulo_archive_eventos_label' ),
            'settings'   => 'titulo_archive_eventos',
            'section'    => 'archive_eventos',
            'type'       => 'text'
        )
    ));

    // Quantidade de posts de eventos
    $wp_customize->add_setting(
        'quantidade_posts_eventos',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'quantidade_posts_eventos',
        array(
            'label'      => __( 'Quantidade de Post', 'quantidade_posts_eventos_label' ),
            'settings'   => 'quantidade_posts_eventos',
            'section'    => 'archive_eventos',
            'type'       => 'number'
        )
    ));

    /**
     * SUBMENU Páginas Internas -> Mídia
     */
    $wp_customize->add_section( 'archive_midia', array(
        'title'      => __( 'Mídia' ),
        'panel'     => 'archives',
        'priority'   => 0,
    ));

    // Título da archive de mídia

    $wp_customize->add_setting(
        'titulo_archive_midia',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_archive_midia',
        array(
            'label'      => __( 'Título da Página', 'titulo_archive_midia_label' ),
            'settings'   => 'titulo_archive_midia',
            'section'    => 'archive_midia',
            'type'       => 'text'
        )
    ));

    // Quantidade de posts de mídia
    $wp_customize->add_setting(
        'quantidade_posts_midia',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'quantidade_posts_midia',
        array(
            'label'      => __( 'Quantidade de Post', 'quantidade_posts_midia_label' ),
            'settings'   => 'quantidade_posts_midia',
            'section'    => 'archive_midia',
            'type'       => 'number'
        )
    ));

    /**
     * SUBMENU Páginas Internas -> Galerias de fotos
     */
    $wp_customize->add_section( 'archive_fotos', array(
        'title'      => __( 'Galerias de Fotos' ),
        'panel'     => 'archives',
        'priority'   => 0,
    ));

    // Título da archive de galerias

    $wp_customize->add_setting(
        'titulo_archive_fotos',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_archive_fotos',
        array(
            'label'      => __( 'Título da Página', 'titulo_archive_fotos_label' ),
            'settings'   => 'titulo_archive_fotos',
            'section'    => 'archive_fotos',
            'type'       => 'text'
        )
    ));

    // Quantidade de posts de galerias
    $wp_customize->add_setting(
        'quantidade_posts_fotos',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'quantidade_posts_midia',
        array(
            'label'      => __( 'Quantidade de Post', 'quantidade_posts_fotos_label' ),
            'settings'   => 'quantidade_posts_fotos',
            'section'    => 'titulo_archive_fotos',
            'type'       => 'number'
        )
    ));

    /**
     * SUBMENU Páginas Internas -> Diretoria
     */
    $wp_customize->add_section( 'archive_diretoria', array(
        'title'      => __( 'Página da Diretoria' ),
        'panel'     => 'archives',
        'priority'   => 0,
    ));

    // Título da archive de Diretoria

    $wp_customize->add_setting(
        'titulo_archive_diretoria',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_archive_diretoria',
        array(
            'label'      => __( 'Título da Página', 'titulo_archive_diretoria_label' ),
            'settings'   => 'titulo_archive_diretoria',
            'section'    => 'archive_diretoria',
            'type'       => 'text'
        )
    ));

    /**
     * SUBMENU Páginas Internas -> Informes
     */
     $wp_customize->add_section( 'archive_informe', array(
        'title'      => __( 'Informe' ),
        'panel'     => 'archives',
        'priority'   => 0,
    ));

    // Título da archive de informes

    $wp_customize->add_setting(
        'titulo_archive_informe',
        array(
            'default' => '',
            'transport'=>'refresh'
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'titulo_archive_informe',
        array(
            'label'      => __( 'Título da Página', 'titulo_archive_informe_label' ),
            'settings'   => 'titulo_archive_informe',
            'section'    => 'archive_informe',
            'type'       => 'text'
        )
    ));
}

function returnCustomTerm($nameTerm){
    $terms = get_terms(array(
        'taxonomy' => $nameTerm,
        'hide_empty' => false,
    ));
    $cats = array();

    foreach( $terms as $term ) {

        // uncomment to see all $category data
        #print_r($category);
    
        if( $i == 0 ){
    
            $default = $term->term_id;
            $i++;
    
        }
        $cats[$term->name] = $term->name;
    }

    return $cats;

}

add_action( 'customize_register', 'theme_customizer_settings' );
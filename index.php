<?php
    // add header
    get_header();
    // query noticias posts
    $news_query = new WP_Query(array(
        'post_type' => 'noticias',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => 3));
    $events_query = new WP_Query(array(
        'post_type' => 'eventos' ,
        'orderby' => '_event_date',
        'meta_key' => '_event_date',
        'order' => 'DESC',
        'posts_per_page' => 3
    ));
    $midia_query = new WP_Query(array(
        'post_type' => 'midia' ,
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => 3
    ));
    $mantenedor_diamante_query = new WP_Query(array(
        'post_type' => 'mantenedor', 
        'tax_query' => array(
            array (
                'taxonomy' => 'mantenedor',
                'field' => 'slug',
                'terms' => get_theme_mod('categoria_bloco_diamante'),
            )
    )));
    $mantenedor_master_query = new WP_Query(array(
        'post_type' => 'mantenedor', 
        'tax_query' => array(
            array (
                'taxonomy' => 'mantenedor',
                'field' => 'slug',
                'terms' => get_theme_mod('categoria_bloco_master'),
            )
    )));
    $mantenedor_senior_query = new WP_Query(array(
        'post_type' => 'mantenedor', 
        'tax_query' => array(
            array (
                'taxonomy' => 'mantenedor',
                'field' => 'slug',
                'terms' => get_theme_mod('categoria_bloco_senior'),
            )
    )));
    $mantenedor_pleno_query = new WP_Query(array(
        'post_type' => 'mantenedor', 
        'tax_query' => array(
            array (
                'taxonomy' => 'mantenedor',
                'field' => 'slug',
                'terms' => get_theme_mod('categoria_bloco_pleno'),
            )
    )));
    $mantenedor_apoiador_query = new WP_Query(array(
        'post_type' => 'mantenedor', 
        'tax_query' => array(
            array (
                'taxonomy' => 'mantenedor',
                'field' => 'slug',
                'terms' => get_theme_mod('categoria_bloco_apoiador'),
            )
    )));
?>
    <main class="main-index">
        <section class="intro">
            <div class="container">
                <div class="col-12 col-lg-5">

                    <h1 class="title-intro"><?php returnThemeObject('titulo_intro'); ?></h1>
                    <p><?php returnThemeObject('texto_intro');?></p>

                    <?php if(get_theme_mod('exibir_botao_intro')):?>
                        <a href="<?php returnThemeObject('link_botao_intro'); ?>" class="btn btn-link link-light"><?php returnThemeObject('texto_botao_intro'); ?> <i class="bi bi-arrow-right"></i></a>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <section class="about-us">
            <div class="container">

                <h1 class="title"><?php returnThemeObject('titulo_sobre_nos'); ?></h1>
                <p class="subtitle"><?php returnThemeObject('subtitulo_sobre_nos'); ?></p>
                <div class="row">

                    <div class="col-12 col-lg-6">
                        <img src="<?php returnThemeObject('img_sobre_nos'); ?>" alt="">
                    </div>
        
                    <div class="col-12 col-lg-6">
                        <p><?php returnThemeObject('texto_sobre_nos'); ?></p>
        
                        <a href="<?php returnThemeObject('pagina_sobre_nos'); ?>" class="btn btn-link">Saiba mais <i class="bi bi-arrow-right"></i></a>
                    </div>

                </div>
    

            </div>
        </section>

        <section class="events">
            <div class="container">

                <h1 class="title"><?php returnThemeObject('titulo_eventos'); ?></h1>
                <p class="subtitle"><?php returnThemeObject('subtitulo_eventos'); ?></p>
               
                <div class="row event-card-list">

                    <?php require_once('list-eventos.php'); ?>
    
                </div>

                <div class="row button-more">

                    <a href="<?php echo get_post_type_archive_link( 'eventos' ); ?>" class="btn link">Veja outros eventos <i class="bi bi-arrow-right"></i></a>

                </div>

            </div>
        </section>

        <section class="latest-news">
            <div class="container">
                
                <h1 class="title"><?php returnThemeObject('titulo_midia'); ?></h1>
                <p class="subtitle"><?php returnThemeObject('subtitulo_midia'); ?></p>
    
                <div class="row">
    
                    <?php require_once('list-midia.php'); ?>

                </div>

                <div class="row button-more">
                    <a href="<?php echo get_post_type_archive_link('midia'); ?>" class="btn link">Ver outras presenças <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="spotify">
            <div class="container">
                <h1 class="title"><?php returnThemeObject('titulo_podcast'); ?></h1>
                <p class="subtitle"><?php returnThemeObject('subtitulo_podcast'); ?></p>

                <?php returnThemeObject('iframe_podcast'); ?>

            </div>
        </section>

        <section class="latest-news">
            <div class="container">
                
                <h1 class="title"><?php returnThemeObject('titulo_ultimas_noticias'); ?></h1>
                <p class="subtitle"><?php returnThemeObject('subtitulo_ultimas_noticias'); ?></p>
    
                <div class="row">
    
                    <?php require_once('list-noticias.php'); ?>

                </div>

                <div class="row button-more">
                    <a href="<?php echo get_post_type_archive_link( 'noticias' ); ?>" class="btn link">Ver outras matérias <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="members" id="mantenedores">
            <div class="container">

                <h1 class="title"><?php returnThemeObject('titulo_mantenedores'); ?></h1>
                <p class="subtitle"><?php returnThemeObject('subtitulo_mantenedores'); ?></p>
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3><?php returnThemeObject('titulo_categoria_diamante'); ?></h3>

                    <?php while($mantenedor_diamante_query->have_posts()): $mantenedor_diamante_query->the_post(); $postId = $events_query->post->ID;?>
                        <?php if(get_the_thumbnail()): ?>
                            <a href="<?php echo returnCustomObject('_link_mantenedor'); ?>" target="_blank">
                                <img class="mantenedor-diamante" src="<?php the_thumbnail('medium-rectangle') ?>">
                            </a>
                        <?php  ?>
                    <?php endif; endwhile; ?>
                </div>
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3><?php returnThemeObject('titulo_categoria_master'); ?></h3>

                    <?php while($mantenedor_master_query->have_posts()): $mantenedor_master_query->the_post(); $postId = $events_query->post->ID;?>
                        <?php if(get_the_thumbnail()): ?>
                            <a href="<?php echo returnCustomObject('_link_mantenedor'); ?>" target="_blank">
                                <img class="mantenedor-master" src="<?php the_thumbnail('medium-rectangle') ?>">
                            </a>
                        <?php  ?>
                    <?php endif; endwhile; ?>
                </div>
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3><?php returnThemeObject('titulo_categoria_senior'); ?></h3>

                    <?php while($mantenedor_senior_query->have_posts()): $mantenedor_senior_query->the_post(); $postId = $events_query->post->ID;?>
                        <?php if(get_the_thumbnail()): ?>
                            <a href="<?php echo returnCustomObject('_link_mantenedor'); ?>" target="_blank">
                                <img class="mantenedor-senior" src="<?php the_thumbnail('medium-rectangle') ?>">
                            </a>
                        <?php  ?>
                    <?php endif; endwhile; ?>
                </div>

                <div class="row d-flex justify-content-center text-center member-list">
                    <h3><?php returnThemeObject('titulo_categoria_pleno'); ?></h3>

                    <?php while($mantenedor_pleno_query->have_posts()): $mantenedor_pleno_query->the_post(); $postId = $events_query->post->ID;?>
                        <?php if(get_the_thumbnail()): ?>
                            <a href="<?php echo returnCustomObject('_link_mantenedor'); ?>" target="_blank">
                                <img class="mantenedor-pleno" src="<?php the_thumbnail('medium-rectangle') ?>">
                            </a>
                        <?php  ?>
                    <?php endif; endwhile; ?>
                </div>
    
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3><?php returnThemeObject('titulo_categoria_apoiador'); ?></h3>

                    <?php while($mantenedor_apoiador_query->have_posts()): $mantenedor_apoiador_query->the_post(); $postId = $events_query->post->ID;?>
                        <?php if(get_the_thumbnail()): ?>
                            <a href="<?php echo returnCustomObject('_link_mantenedor'); ?>" target="_blank">
                                <img class="mantenedor-apoiador" src="<?php the_thumbnail('medium-rectangle') ?>">
                            </a>
                        <?php  ?>
                    <?php endif; endwhile; ?>
                </div>

            </div>
        </section>

<?php
    // add header
    get_footer();
?>
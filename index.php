<?php
    // add header
    get_header();
    // query noticias posts
    $news_query = new WP_Query(array('post_type' => 'noticias' , 'orderby' => 'publish_date', 'order' => 'DESC', 'posts_per_page' => 3));
    $events_query = new WP_Query(array('post_type' => 'eventos' , 'orderby' => 'publish_date', 'order' => 'DESC', 'posts_per_page' => 3));

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

        <section class="events">
            <div class="container">

                <h1 class="title">Eventos</h1>
                <p class="subtitle">Acompanhe nossos próximos eventos</p>
               
                <div class="row event-card-list">

                    <?php require_once('list-eventos.php'); ?>
    
                </div>

                <div class="row button-more">

                    <a href="" class="btn link">Veja outros eventos <i class="bi bi-arrow-right"></i></a>

                </div>

            </div>
        </section>

        <section class="spotify">
            <div class="container">
                <h1 class="title">Podcast IBEF</h1>
                <p class="subtitle">Fique por dentro das ultimas notícias</p>

                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/2tEGtFbAUH6nQLs5RcICrF?utm_source=generator&theme=0" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>

            </div>
        </section>

        <section class="members">
            <div class="container">

                <h1 class="title">Mantenedores do IBEF-ES</h1>
                <p class="subtitle">Conheça os mantenedores do IBEF-ES</p>
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3>Mantenedores diamante</h3>
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-diamante">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-diamante">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-diamante">
                </div>
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3>Mantenedores master</h3>
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-master">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-master">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-master">
                </div>
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3>Mantenedores sênior</h3>
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-senior">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-senior">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-senior">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-senior">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-senior">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-senior">
                </div>
    
                <div class="row d-flex justify-content-center text-center member-list">
                    <h3>Apoiadores</h3>
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                    <img src="./assets/img/mantenedor.png" alt="" class="mantenedor-apoiador">
                </div>

            </div>
        </section>
<?php
    // add header
    get_header();
    if(have_posts()):while(have_posts()):the_post();
?>

    <main>

        <section class="post-title">

            <div class="container">

                <span class="post-category">
                    <?php the_category(); ?>
                </span>

                <h1><?php the_title(); ?></h1>

            </div>

        </section>

        <div class="container">
            <section class="post-data">
                <p class="date">
                    Publicado <?php the_date(); ?> por <?php echo get_the_author_meta('display_name', $user_id ); ?>
                </p>
    
                <p class="tag">
                    <?php the_tags(); ?>
                </p>
            </section>
        </div>

        <section class="post-content">

            <div class="container">

                <img src="./assets/img/post-image.jpg" alt="" class="main-pic">
                
                <div class="post-text">
                    
                    <?php the_content(); ?>    

                </div>

            </div>
            
        </section>

        <section class="contact">

            <div class="container">

                <h1 class="title">Contato</h1>

                <div class="row">
                    <div class="col-4">
                        <i class="bi-phone"></i>
                        <p>Telefone</p>
                        <a href="telefone">+55 (27) 99864-1411</a>
                    </div>
                    <div class="col-4">
                        <i class="bi-envelope"></i>
                        <p>E-mail</p>
                        <a href="email">ibefes@ibefes.org.br</a>
                    </div>
                    <div class="col-4">
                        <i class="bi-pin-map"></i>
                        <p>Local</p>
                        <a href="endereço">R. João da Cruz, 25 – 4º Andar – Praia do Canto, Vitória – ES</a>
                    </div>
                </div>

            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d935.5249127000653!2d-40.291654!3d-20.296142!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x947a6d669fd60662!2sNaCapital%20Escrit%C3%B3rios%20%26%20Coworking!5e0!3m2!1spt-BR!2sbr!4v1648217561816!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map"></iframe>

        </section>

    <?php
        endwhile; endif;
    // add header
    get_footer();
?>
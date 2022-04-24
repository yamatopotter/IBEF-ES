<?php
    // add header
    get_header();
    if(have_posts()):while(have_posts()):the_post();
?>

    <main>

        <section class="post-title">

            <div class="container">

                <span class="post-category">
                    Evento
                </span>

                <h1><?php the_title();?></h1>

            </div>

        </section>

        <section class="event-data">
            
            <div class="container">

                <div class="row event-card-list">

                    <div class="col-6">
                        <h2>Data</h2>
                        <p><?php echo returnFullDateEvent(get_the_ID()); ?></p>

                        <h2>Local</h2>
                        <p><?php echo returnCustomObject('_local_event'); ?></p>

                        <h2>Tema</h2>
                        <p><?php echo returnCustomObject('_tema_event'); ?></p>

                        <h2>Sobre o Evento</h2>
                        <?php the_content(); ?>

                        <h2>Inscrições</h2>
                        <p>Para se increver no evento, clique no botão abaixo.</p>
                        <a href="<?php echo returnCustomObject('_event_link'); ?>" class="btn-link" target=_blank>Clique aqui para se inscrever no evento <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <div class="col-6">
                        <?php if(get_the_thumbnail()): ?>
                                <img class="event-pic" src="<?php the_thumbnail('large-rectangle') ?>">
                        <?php endif; ?>
                    </div>

                </div>
    
        </div>

        <?php
        endwhile; endif;
    // add header
    get_footer();
?>
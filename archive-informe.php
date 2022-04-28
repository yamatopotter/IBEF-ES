<?php
    // add header
    get_header();
    $informe_query = new WP_Query(array(
        'post_type' => 'informe' ,
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => 16,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1));

?>

    <main>

        <section class="post-title">

            <div class="container">

                <h1><?php echo get_theme_mod('titulo_archive_informe', 'IBEF Informa'); ?></h1>

            </div>

        </section>

        <section class="event-list informe">

            <div class="container">

                <div class="row event-card-list calendar-list">

                    <?php while($informe_query->have_posts()): $informe_query->the_post(); $postId = $informe_query->post->ID;?>

                    <div class="col-3 d-flex align-items-strech">

                        <article>
                            <i class="bi bi-journal"></i>
                            <h1><a href="<?php echo returnInformeFile($postId); ?>" target="_blank"><?php the_title(); ?></a></h1>    
                            <a href="<?php echo returnInformeFile($postId); ?>" target="_blank" class="btn link">Veja o informe <i class="bi bi-arrow-right"></i></a>   
                        </article>

                    </div>

                    <?php endwhile; ?>
            </div>

        </section>

        <nav class="post-navigation">

            <div class="container">
                <div class="row">

                    <?php next_posts_link('<i class="bi bi-arrow-left"></i> Presenças Anteriores'); ?> 
                    <?php previous_posts_link('Presenças Recentes <i class="bi bi-arrow-right"></i>'); ?>

                </div>
            </div>

        </nav>


<?php get_footer(); ?>
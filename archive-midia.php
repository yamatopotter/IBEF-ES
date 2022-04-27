<?php
    // add header
    get_header();
    $midia_query = new WP_Query(array(
        'post_type' => 'midia' ,
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => get_theme_mod('quantidade_posts_midia', 12),
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1));
    
?>

    <main>

        <section class="post-title">

            <div class="container">

                <h1><?php echo get_theme_mod('titulo_archive_midia', 'IBEF-ES na Mídia'); ?></h1>

            </div>

        </section>

        <section class="event-list">

            <div class="container">

                <div class="row event-card-list calendar-list">

                    <?php while($midia_query->have_posts()): $midia_query->the_post(); $postId = $midia_query->post->ID;?>

                    <div class="col-3 d-flex align-items-strech">

                        <article class="card">
                            <?php if(get_the_thumbnail()): ?>
                                <a href="<?php echo returnLinkFile($postId); ?>" target="_blank">
                                    <img class="news-pic" src="<?php the_thumbnail('medium-rectangle'); ?>">
                                </a>
                            <?php endif ?>
                            <h1><a href="<?php echo returnLinkFile($postId); ?>" target="_blank"><?php the_title(); ?></a></h1>    
                            <a href="<?php echo returnLinkFile($postId); ?>" target="_blank" class="btn link">Veja Mais <i class="bi bi-arrow-right"></i></a>   
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
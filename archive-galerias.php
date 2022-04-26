<?php
    // add header
    get_header();
    $gallery_query = new WP_Query(array(
        'post_type' => 'galerias',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => get_theme_mod('quantidade_posts_fotos', 12),
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1));
?>

    <main>

        <section class="post-title">

            <div class="container">

                <h1><?php echo get_theme_mod('titulo_archive_fotos'); ?></h1>

            </div>

        </section>

        <section class="event-list">

            <div class="container">

                <div class="row event-card-list calendar-list">

                    <?php while($gallery_query->have_posts()): $gallery_query->the_post(); ?>

                    <div class="col-3 d-flex align-items-strech">

                        <article class="card">

                            <?php if(get_the_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="news-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                                </a>
                            <?php endif; ?>

                            <h1><?php the_title(); ?></h1>
                            <a href="<?php the_permalink(); ?>" class=" btn link">Ver Mais <i class="bi bi-arrow-right"></i></a>

                        </article>

                    </div>

                    <?php endwhile; ?>
            </div>

        </section>

        <nav class="post-navigation">

            <div class="container">
                <div class="row">

                    <?php next_posts_link('<i class="bi bi-arrow-left"></i> Galerias Anteriores'); ?> 
                    <?php previous_posts_link('Galerias Recentes <i class="bi bi-arrow-right"></i>'); ?>

                </div>
            </div>

        </nav>


<?php get_footer(); ?>
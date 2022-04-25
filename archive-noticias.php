<?php
    // add header
    get_header();
    $news_query = new WP_Query(array(
        'post_type' => 'noticias',
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => get_theme_mod('quantidade_posts_noticias', 6),
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1));
?>

    <main>

        <section class="post-title">

            <div class="container">

                <h1><?php echo get_theme_mod('titulo_archive_noticias', 'Notícias'); ?></h1>

            </div>

        </section>

        <section class="post-list">
            
            <div class="container">

            <?php while($news_query->have_posts()): $news_query->the_post(); ?>
                <article class="row">

                    <div class="col-4">
                        <?php if(get_the_thumbnail()): ?>
                            <img class="main-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                        <?php endif ?>
                    </div>

                    <div class="col-8 d-flex flex-column justify-content-center">
                        <h1><?php the_title(); ?></h1>
                        <div class="post-info">
                            <span class="category"><?php the_category(); ?></span>
                            <span class="published">Publicado por <?php echo get_the_author_meta('display_name', $user_id ); ?> -  <?php the_date(); ?></span>
                        </div>
                        <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="btn-link">Leia mais <i class="bi bi-arrow-right"></i></a></p>
                    </div>

                </article>

                <div class="div-post"></div>

            <?php endwhile; ?>

            </div>

        </section>

        <nav class="post-navigation">

            <div class="container">
                <div class="row">
                    <?php next_posts_link('<i class="bi bi-arrow-left"></i> Postagens Anteriores'); ?>
                    <?php previous_posts_link('Postagens Recentes <i class="bi bi-arrow-right"></i>'); ?>
                </div>
            </div>

        </nav>

<?php get_footer(); ?>
<?php
    // add header
    get_header();
    $events_query = new WP_Query(array(
        'post_type' => 'eventos',
        'orderby' => '_event_date',
        'meta_key' => '_event_date',
        'order' => 'DESC',
        'posts_per_page' => get_theme_mod('quantidade_posts_eventos', 12),
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1));
?>

    <main>

        <section class="post-title">

            <div class="container">

                <h1 class="title"><?php echo get_theme_mod('titulo_archive_eventos'); ?></h1>

            </div>

        </section>

        <section class="event-list">

            <div class="container">

                <div class="row event-card-list calendar-list">

                <?php while($events_query->have_posts()): $events_query->the_post(); $postId = $events_query->post->ID ?>
                    <div class="col-12 col-md-6 col-lg-3 d-flex align-items-strech">

                        <article class="card">

                            <div class="calendar">
                            <?php
                                    $date = date("d-m-Y");
                                    $dateEvent = returnFullDateEvent($postId);

                                    if(strtotime($date) > strtotime($dateEvent)):
                                ?>
                                    <span class="day past-event">
                                <?php else: ?>
                                    <span class="day">
                                <?php endif; ?>
                                    <?php echo returnDateEvent($postId) ?>
                                </span>
                                <span class="month"><?php echo returnMonthEvent($postId) ?></span>
                            </div>

                            <?php if(get_the_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="news-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                                </a>
                            <?php endif ?>

                            <h1><?php the_title(); ?></h1>
                            <a href="<?php the_permalink(); ?>" class=" btn link">Ver Mais <i class="bi bi-arrow-right"></i></a>

                        </article>

                    </div>
                <?php endwhile; ?>

                </div>


            </div>

        </section>

        <nav class="post-navigation">

            <div class="container">
                <div class="row">

                    <?php next_posts_link('<i class="bi bi-arrow-left"></i> Eventos Anteriores'); ?> 
                    <?php previous_posts_link('Eventos Recentes <i class="bi bi-arrow-right"></i>'); ?>
                    
                </div>
            </div>

        </nav>


       <?php get_footer(); ?>
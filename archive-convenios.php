<?php
    // add header
    get_header();

    $terms = get_terms([
        'taxonomy' => 'convenio',
        'hide_empty' => true,
        'args' => array(
            'orderby' => name,
            'hide_empty' => 0
        )
    ]); 
?>

    <main>

        <section class="post-title">

            <div class="container">

                <h1 class="title"><?php echo get_theme_mod('titulo_archive_convenio'); ?></h1>

            </div>

        </section>

        <section class="convenio-list">

            <div class="container">

            <?php 
                for($i = 0; $i<count($terms); $i++): 
                    $events_query = new WP_Query(array(
                        'post_type' => 'convenios',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'convenio',
                                'terms' => $terms[$i],
                                )
                            )
                    ));
            ?>

                <div class="row event-card-list calendar-list convenio-list">

                    <div class="col-12">
                        <h2 class="convenio-title"><?= $terms[$i]->name ?></h2>
                    </div>

                    <?php while($events_query->have_posts()): $events_query->the_post(); $postId = $events_query->post->ID ?>
                        <div class="col-12 col-md-6 col-lg-3 d-flex align-items-strech">

                            <article class="card">

                                <?php if(get_the_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="news-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                                    </a>
                                <?php endif ?>

                                <h1><?php the_title(); ?></h1>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class=" btn link">Ver Mais <i class="bi bi-arrow-right"></i></a>

                            </article>

                        </div>
                    <?php endwhile; ?>

                </div>
            
            <?php endfor; ?>

            </div>

        </section>

       <?php get_footer(); ?>
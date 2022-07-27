<?php
    // add header
    get_header();
    if(have_posts()):while(have_posts()):the_post();
?>

    <main>

        <section class="post-title">

            <div class="container">

                <span class="post-category">
                    <?= get_convenio_category($post->post_type); ?>
                </span>

                <h1 class="title"><?php the_title();?></h1>

            </div>

        </section>

        <section class="convenio-data">
            
            <div class="container">

                <div class="row event-card-list">

                    <div class="col-12 order-2 col-lg-6">

                        <h2>Sobre a parceria</h2>
                        <?php the_content(); ?>

                    </div>

                    <div class="col-12 col-lg-6 order-lg-2">
                        <?php if(get_the_thumbnail()): ?>
                                <img class="convenio-pic" src="<?php the_thumbnail('large-rectangle') ?>">
                        <?php endif; ?>
                    </div>

                </div>
    
        </div>

        <?php
        endwhile; endif;
    // add header
    get_footer();
?>
<?php
    // add header
    get_header();
    if(have_posts()):while(have_posts()):the_post();
?>

    <main>

        <section class="post-title">

            <div class="container">

                <span class="post-category">
                    <?php the_category(', '); ?>
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

    <?php
        endwhile; endif;
    // add header
    get_footer();
?>
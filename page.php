<?php
    // add header
    get_header();
    if(have_posts()):while(have_posts()):the_post();
?>

    <main>

        <section class="post-title">

            <div class="container">

                <h1><?php the_title(); ?></h1>

            </div>

        </section>

        <section class="post-content">

            <div class="container">
                
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
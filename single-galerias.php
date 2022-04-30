<?php
    // add header
    get_header();
    if(have_posts()):while(have_posts()):the_post();
?>
    <main>

        <section class="post-title">

            <div class="container">

                <span class="post-category">
                    Galeria de Fotos
                </span>

                <h1><?php the_title(); ?></h1>

            </div>

        </section>

        <div class="container">
            <section class="post-data">
                <p class="date">
                    Publicado <?php the_date(); ?>
                </p>
            </section>
        </div>

        <section class="gallery-content">

            <div class="container">

            <?php the_content(); ?>

            </div>
            
        </section>

        <?php  endwhile; endif; ?>

    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'), {
            plugins: [lgThumbnail],
        });
    </script>

<?php
    // add header
    get_footer();
?>
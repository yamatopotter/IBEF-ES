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

                <!-- <div id="lightgallery" class="lightgallery">
                    <a href="./assets/img/gallery/1.jpg">
                        <img alt="img1" src="./assets/img/gallery/1.jpg" class="thumbnail"/>
                    </a>
                    <a href="./assets/img/gallery/2.jpg">
                        <img alt="img2" src="./assets/img/gallery/2.jpg" class="thumbnail"/>
                    </a>
                    <a href="./assets/img/gallery/3.jpg">
                        <img alt="img2" src="./assets/img/gallery/3.jpg" class="thumbnail"/>
                    </a>
                    <a href="./assets/img/gallery/4.jpg">
                        <img alt="img2" src="./assets/img/gallery/4.jpg" class="thumbnail"/>
                    </a>
                    <a href="./assets/img/gallery/5.jpg">
                        <img alt="img2" src="./assets/img/gallery/5.jpg" class="thumbnail"/>
                    </a>
                    <a href="./assets/img/gallery/6.jpg">
                        <img alt="img2" src="./assets/img/gallery/6.jpg" class="thumbnail"/>
                    </a>
                </div> -->

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
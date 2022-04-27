<?php 
    /* Template Name: Eventos e Programas */
    get_header();    
?>
    <main>

    <section class="post-title">

        <div class="container">

            <h1><?php the_title(); ?></h1>

        </div>

    </section>

    <section class="post-content eventos-e-programas">

        <div class="container">
            
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="post-text">
                    
                        <?php the_content(); ?>    

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <?php if(get_the_thumbnail()): ?>
                        <img class="evento-programa-pic" src="<?php the_thumbnail('original') ?>">
                    <?php endif ?> 
                </div>
            </div>
            

        </div>
    
    </section>
    
<?php 
    get_footer();
?>
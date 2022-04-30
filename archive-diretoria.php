<?php get_header(); ?>
<?php $categorias = get_terms('diretor');?>
    <main>

        <section class="post-title">

            <div class="container">

                <h1 class="title"><?php echo get_theme_mod('titulo_archive_diretoria', 'Diretoria'); ?></h1>

            </div>

        </section>

        <section class="board">
            <?php foreach($categorias as $categoria):?>
                <div class="board-specified">
                    <div class="container">

                        <h2 class="subtitle"><?php print_r($categoria->name); ?></h2>

                        <div class="row d-flex justify-content-center">

                            <?php $diretoria_query = new WP_Query(array(
                                'post_type' => 'diretoria',
                                'orderby' => 'publish_date',
                                'order' => 'DESC',
                                'tax_query' => array(
                                    array (
                                        'taxonomy' => 'diretor',
                                        'field' => 'slug',
                                        'terms' => $categoria->slug,
                                    )
                            )));?>
    

                            <?php while($diretoria_query->have_posts()): $diretoria_query->the_post(); $postId = $diretoria_query->post->ID;?>
                            <div class="col-6 col-md-4 col-lg-3  board-data">
        
                                <?php if(get_the_thumbnail()): ?>
                                    <img class="board-pic" src="<?php the_thumbnail('medium-square'); ?>">
                                <?php endif; ?>
        
                                <span class="role"><?php echo returnCustomObject('_cargo_diretoria'); ?></span>
        
                                <span class="name-person"><?php the_title(); ?></span>
        
                            </div>
                            <?php endwhile?>
                            
                    </div>

                    </div>

                </div>
            <?php endforeach; ?>

            </div>
            
        </section>

<?php get_footer(); ?>
<?php 
    get_header(); 

    global $wp_query; 
    $curauth = $wp_query->get_queried_object();
    $cat = $curauth -> term_id;
    $news_query = new WP_Query(array(
        'post_type' => 'noticias',
        'cat' => $cat,
        'orderby' => 'publish_date',
        'order' => 'DESC',
        'posts_per_page' => get_theme_mod('quantidade_posts_noticias', 6),
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1));    
?>

<main>

        <section class="post-title">

            <div class="container">

                <h1><?php single_cat_title();  ?></h1>

            </div>

        </section>
 
        <section class="post-list">
            
            <div class="container">

                <?php require_once('list-noticias-row.php'); ?>

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
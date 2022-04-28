<?php while($news_query->have_posts()): $news_query->the_post(); ?>
    <article class="row">

        <div class="col-4">
            <?php if(get_the_thumbnail()): ?>
                <img class="main-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
            <?php endif ?>
        </div>

        <div class="col-8 d-flex flex-column justify-content-center">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="post-info">
                <span class="category"><?php the_category(', '); ?></span>
                <span class="published">Publicado por <?php echo get_the_author_meta('display_name', $user_id ); ?> -  <?php the_date(); ?></span>
            </div>
            <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="btn-link">Leia mais <i class="bi bi-arrow-right"></i></a></p>
        </div>

    </article>

    <div class="div-post"></div>

<?php endwhile; ?>
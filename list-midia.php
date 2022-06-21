<?php while($midia_query->have_posts()): $midia_query->the_post(); $postId = $midia_query->post->ID; ?>
    <div class="col-12 col-lg-4 d-flex align-items-strech">
        <article class="card">
            <?php if(get_the_thumbnail()): ?>
                <a href="<?php echo returnLinkFile($postId); ?>" target="_blank">
                    <img class="news-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                </a>
            <?php endif ?>
            <h1><a href="<?php echo returnLinkFile($postId); ?>" target="_blank"><?php the_title(); ?></a></h1>    
            <a href="<?php echo returnLinkFile($postId); ?>" target="_blank" class="btn link">Veja Mais <i class="bi bi-arrow-right"></i></a>   
        </article>
    </div>
<?php endwhile; ?>
<?php while($news_query->have_posts()): $news_query->the_post(); ?>
    <div class="col-12 col-lg-4 d-flex align-items-strech">
        <article class="card">
            <?php if(get_the_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>" target="_self">
                    <img class="news-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                </a>
            <?php endif ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>    
            <p><?php the_excerpt(); ?></p>     
            <a href="<?php the_permalink(); ?>" class="btn link">Leia Mais <i class="bi bi-arrow-right"></i></a>   
        </article>
    </div>
<?php endwhile; ?>
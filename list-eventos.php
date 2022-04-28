<?php while($events_query->have_posts()): $events_query->the_post(); $postId = $events_query->post->ID ?>
    <div class="col-12 col-lg-4 d-flex align-items-strech">

        <article class="card">
            <div class="calendar">
                <?php
                    $date = date("d-m-Y");
                    $dateEvent = returnFullDateEvent($postId);

                    if($date > $dateEvent):
                ?>
                    <span class="day past-event">
                <?php else: ?>
                    <span class="day">
                <?php endif; ?>
                    <?php echo returnDateEvent($postId) ?>
                </span>
                <span class="month"><?php echo returnMonthEvent($postId) ?></span>
            </div>

            <?php if(get_the_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>" target="_self">
                    <img class="news-pic" src="<?php the_thumbnail('medium-rectangle') ?>">
                </a>
            <?php endif ?>
            <h1><? the_title(); ?></h1>    
            <a href="<?php the_permalink(); ?>" class="btn link">Ver Mais <i class="bi bi-arrow-right"></i></a>        
        </article>

    </div>
<?php endwhile; ?>
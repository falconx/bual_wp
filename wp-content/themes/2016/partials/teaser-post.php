<article class="row teaser cf">

    <div class="columns medium-9 medium-push-3">
        <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>

        <ul class="meta">
            <?php if( $post_type === 'bual_event' ) { ?>
                <li>Event starts: <?php echo date('d M Y, h:ia', $date); ?> </li>
            <?php } ?>

            <li>Posted: <?php the_time('d M Y'); ?></li>
            <li><a href="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 response', '% Comments'); ?></a>
        </ul>

        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>

        <ul class="links">
            <li><a href="<?php the_permalink(); ?>" class="button">Read more</a></li>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="button social facebook">Share</a></li>
            <li><a href="http://twitter.com/share?text=Easter/Spring Bazaar&url=<?php the_permalink(); ?>" class="button social twitter">Twitter</a></li>
            <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="button social google">Share</a></li>
        </ul>
    </div>

    <div class="columns medium-3 medium-pull-9">
        <div class="badge">
            <span class="icon-news"></span>
        </div>
    </div>

</article>
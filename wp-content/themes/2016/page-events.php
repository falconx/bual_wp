<?php get_header(); ?>

<div role="main">

    <div class="row">
        <div class="columns small-12">

            <?php

            if( get_query_var('paged') ) {
                $paged = get_query_var('paged');
            } else if( get_query_var('page') ) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }

            $q = new WP_Query(array(
                'post_type' => 'bual_event',
                'posts_per_page' => 5,
                'paged' => $paged,
            ));

            ?>

            <?php while ( $q->have_posts() ) : $q->the_post(); ?>

                <?php get_template_part( 'partials/teaser', 'bual_event' ); ?>

            <?php endwhile; ?>

            <div class="pagination">
                <?php

                $big = 999999999; // Need an unlikely integer

                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url( get_pagenum_link( $big ) )),
                    'format' => '?paged=%#%',
                    'current' => max( 1, $paged ),
                    'total' => $q->max_num_pages,
                ));

                ?>
            </div>

            <?php wp_reset_query(); ?>

        </div>
    </div><!-- .row -->

</div><!-- [role="main"] -->

<?php get_footer(); ?>
<?php get_header(); ?>

<div id="page-contact" role="main">

    <div class="row">
        <div class="columns large-6">

            <?php if( have_posts() ): ?>
                <?php while( have_posts() ) : the_post(); ?>
                    <?php the_title('<h2>', '</h2>'); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="columns large-6">
            <h3>Useful Contacts</h3>
            <ul id="useful-contacts" class="row">

                <?php $loop = new WP_Query( array( 'post_type' => 'bual_contact' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <?php

                    $name    = get_field('name');
                    $email   = get_field('email');
                    $image   = get_field('image');
                    $number  = get_field('phone_number');
                    $website = get_field('website');

                    ?>

                    <li class="columns small-12 medium-4 large-6 end">
                        <?php if( $image ) { ?>
                            <img src="<?php echo $image['url']; ?>" />
                        <?php } ?>

                        <h4><?php the_title(); ?></h4>
                    
                        <ul>
                            <?php if( $name ) { ?>
                                <li class="name"><?php echo $name; ?></li>
                            <?php } ?>

                            <?php if( $email ) { ?>
                                <li><?php echo $email; ?></li>
                            <?php } ?>

                            <?php if( $number ) { ?>
                                <li><?php echo $number; ?></li>
                            <?php } ?>

                            <?php if( $website ) { ?>
                                <li><a href="<?php echo $website; ?>"><?php echo $website; ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>

                <?php endwhile; wp_reset_query(); ?>

            </div>
        </div>
    </div><!-- .row -->

</div><!-- [role="main"] -->

<?php get_footer(); ?>
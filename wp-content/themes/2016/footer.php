
    <div id="footer">

        <div class="row">
            <div class="columns medium-3">
            	<img class="logo" src="<?php echo get_bloginfo('template_directory') ?>/images/logo-light.png" />
            </div>
            <div class="columns medium-3">
                <?php

                wp_nav_menu(array(
                    'menu' => 'Footer Links',
                    'theme_location' => '__no_such_location',
                    'fallback_cb' => false,
                ));

                ?>
            </div>
            <div class="columns medium-3">
            <a href="https://github.com/falconx">A Matt Layton development</a>
            </div>
        </div>

        <div class="row">
            <div class="columns small-12">
                <?php wp_footer(); ?>
            </div>
        </div>

    </div><!-- #footer -->

</body>
</html>
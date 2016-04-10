<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/foundation.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory') ?>/js/bright.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="header">

        <a href="<?php echo home_url(); ?>" class="logo medium-down" title="Brighten up a Life home">
            <img src="<?php echo get_bloginfo('template_directory') ?>/images/logo.png" />
        </a>

        <?php

        wp_nav_menu(array(
            'menu' => 'Main Menu',
            'theme_location' => '__no_such_location',
            'menu_id' => 'main-menu',
            'fallback_cb' => false,
        ));

        ?>

        <div class="row">
            <div class="columns small-12">
                <?php

                wp_nav_menu(array(
                    'menu' => 'Social Links',
                    'theme_location' => '__no_such_location',
                    'menu_id' => 'social-links',
                    'fallback_cb' => false,
                ));

                ?>
            </div>
        </div>

    </div><!-- #header -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php //bloginfo('name');       ?> <?php //wp_title('|', true, 'left');       ?></title>
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title> 

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/flexslider.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/demos.css">
        <!--<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.css"/>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.theme.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.accordion.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.all.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.autocomplete.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.button.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.datepicker.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.dialog.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.menu.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.progressbar.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.resizable.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.selectable.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.slider.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.spinner.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.tabs.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/themes/base/jquery.ui.tooltip.css"/>

        <?php
        /*
         *  Add this to support sites with sites with threaded comments enabled.
         */
//        if (is_singular() && get_option('thread_comments'))
//            wp_enqueue_script('comment-reply');

        wp_head();

        wp_get_archives('type=monthly&format=link');
        ?>
    </head>
    <body>

        <div id="wrapper">
            <header>
                <a href="index.php"><img class="logo" src="http://localhost/portfolio/wp-content/uploads/2013/11/logo.jpg" /></a>
                <div class="social">
                    <a target="_blank" href="http://www.fb.com/a.sabri.86"><img src="http://localhost/Customtheme/wp-content/uploads/2013/11/fb-icon.jpg"/></a>
                    <a target="_blank" href="http://www.twitter.com"><img src="http://localhost/Customtheme/wp-content/uploads/2013/11/twitter-icon.jpg"/></a>
                    <a target="_blank" href="http://www.linkedin.com"><img src="http://localhost/Customtheme/wp-content/uploads/2013/11/linkedin-icon.jpg"/></a>
                    <a target="_blank" href="http://www.youtube.com"><img src="http://localhost/Customtheme/wp-content/uploads/2013/11/youtube-icon.jpg"/></a>
                </div>
                <h1><a href="http://localhost/portfolio"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>

            </header>
            <?php wp_nav_menu(array('sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu')); ?>
            <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js" ></script>
            <script src="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/ui/jquery.ui.core.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/ui/jquery.ui.widget.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/jquery-ui-1.10.3/ui/jquery.ui.accordion.js"></script>
            <script type="text/javascript">
                // Can also be used with $(document).ready()
                jQuery(window).load(function() {
                    jQuery('.flexslider').flexslider({
                        animation: "slide"
                    });

                    jQuery(".accordion").accordion({
                        collapsible: true,
                        active: false
                    });

                });
            </script>
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" charset="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'clickmaterial'); ?></a>

    <header id="masthead" class="site-header" role="banner">

        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" rel="home"
                       href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                </div>

                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>

                </div>
                <!-- .navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- .navbar .navbar-default -->
    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">

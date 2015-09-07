<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package clickmaterial
 */

get_header(); ?>

    <div class="container">
        <div class="row">

            <div class="container">
                <div class="row">

                    <div id="primary" class="col-md-8 col-lg-8">
                        <main id="main" class="site-main" role="main">

                            <?php while (have_posts()) : the_post(); ?>

                                <?php get_template_part('content', 'page'); ?>

                            <?php endwhile; // end of the loop. ?>

                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->

                    <?php get_sidebar(); ?>

                </div>
                <!-- .row -->
            </div>
            <!-- .container -->

            <?php get_sidebar(); ?>
        </div>
        <!-- .row -->
    </div> <!-- .container -->

<?php get_footer(); ?>
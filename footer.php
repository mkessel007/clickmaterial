<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package clickmaterial
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-info pull-right">
                    <?php printf(__('%1$s by %2$s.', 'clickmaterial'), 'Clickmaterial', '<a href="http://rivers.click" target="_blank" rel="designer">Jon Rivers</a>'); ?>
                </div>
                <!-- .site-info -->
            </div>
            <!-- col-lg-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .containr -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

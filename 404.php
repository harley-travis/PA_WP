<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Travis Harley
 * @since Travis Harley 1.0
 */

get_header(); ?>
    <body>
        <header>
            <?php get_template_part('/includes/page-header'); ?>
            <div class="clear"></div><!-- clear -->
        </header>
        <div class="body-content">
            <div class="body-content-wrapper">
                <div class="page-content">
                    <p class="read-message">The page you are looking for does not exist.</p>
                </div><!-- .page-content -->
            </div><!-- body-content-wrapper -->
        </div><!-- body-content -->
        <?php
        get_footer();
        ?>
        <?php get_template_part('/includes/bottomJavascript'); ?>
    </body>
</html>

<?php
/**
 *
 * Single Post Template: Articles
 *
 * This template is used for the subpages of the travis harley Template. 
 *
 * @link https://travisharley.com
 *
 * @package WordPress
 * @subpackage Travis Harley
 * @since Travis Harley 1.0
 */
get_header(); ?>
<body>
        <header>
            <?php get_template_part('/includes/page-header'); ?>
        </header>
        <div class="body-content">
            <div class="container-fluid banner-services-top">
                <div class="banner-services-top-wrapper">
                    <!-------------------- LOOP PAGE TITLE -------------------->
                     <?php while (have_posts()) : the_post(); ?>
                        <h1 class="subpage-heading"><?php the_title(); ?></h1>  
                    <?php endwhile; ?>
                </div>
            </div><!-- banner-top -->
            
            <!--------------------- LOOP PAGE CONTENT --------------------->
            <div class="container page-content">
                <div class="col-md-9 page-content-left">
                    <!-- loop page, get content -->
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content('[...]'); ?> 
                    <?php endwhile; ?>
                </div><!-- page-content-left -->
                
                
                <!--------------------- SIDEBAR NAVI --------------------->
                <div class="col-md-3 page-content-right">
                    <div class="side-nav">
                        <?php get_template_part('/includes/sidebar'); ?>  
                    </div><!-- side-nav -->
                </div><!-- page-content-right -->                
            </div><!-- page content -->
           
        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>

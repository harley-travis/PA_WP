<?php
/**
 *
 * Template Name: Articles
 *
 * This template is used for the subpages of the Peak Audio and Video Template. 
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
            <div class="container-fluid banner-services-top wrap push">
                <div class="banner-services-top-wrapper">
                    <!-- loop the pages, get title -->
                     <?php while (have_posts()) : the_post(); ?>
                        <h1 class="subpage-heading"><?php the_title(); ?></h1>  
                    <?php endwhile; ?>
                </div>
            </div><!-- banner-top -->
            
            <!--------------------- LAST POST CONTENT --------------------->
            <div class="container page-content wrap push">
                <div class="col-md-9 page-content-left">
                    <!-- loop page, get content -->
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content('[...]'); ?> 
                    <?php endwhile; ?>
                </div><!-- page-content-left -->
                
                <!--------------------- SIDEBAR NAVI --------------------->
                <div class="col-md-3 page-content-right">
                    <div class="side-nav">
                        <ul class="articles-ul">
                            <?php wp_list_categories(array(
                                "title_li"      => "",
                                "order"         => "ASC",
                                "hide_empty"    => "1",
                                "show_count"    => "1"
                            )); ?>
                        </ul>
                    </div><!-- articles-nav -->
                    <div class="side-nav">
                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar1')) : ?>
                        <?php endif; ?>
                    </div><!-- side-nav -->
                </div><!-- page-content-right -->                
            </div><!-- page content -->

        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>

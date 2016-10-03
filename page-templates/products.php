<?php
/**
 *
 * Template Name: Products
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
            <div class="container-fluid products-content wrap push">
                <div class="container-fluid products-banner">
                    <div class="pb-wrapper">
                        <h1 class="products-intro-heading"><?php the_field('product-title'); ?></h1>
                        <div class="pb-intro">
                            <p><?php the_field('product-blurb'); ?></p>
                        </div><!-- products-banner-wrapper -->
                        <div class="pb-down">
                            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                        </div><!-- pb-down -->
                    </div><!-- product-banner-wrapper -->
                </div><!-- products-banner -->
                <div class="container-fluid p-peak-view">
                    <div class="container ppv-wrapper">
                        <div class="col-md-4 col-md-push-8 col-sm-6 col-xs-12 buried-5">
                            <img src="<?php the_field('product-img-1'); ?>" class="ppv-icon" alt="">
                        </div><!-- p-peak-view-img -->
                        <div class="col-md-8 col-md-pull-4 col-sm-6 col-xs-12 ppv-info">
                            <a href="<?php the_field('product-link-1'); ?>"><img src="<?php the_field('product-title-1'); ?>" class="product-logo" alt=""></a>
                            <p><?php the_field('product-text-1'); ?></p>
                        </div><!-- p-peak-view-info -->
                    </div><!-- p-peak-view-wrapper -->
                </div><!-- p-peak-view -->
                <div class="container-fluid p-peak-link">
                    <div class="container ppl-wrapper">
                        <div class="col-md-5 col-sm-6 col-xs-12 buried-1">
                            <img src="<?php the_field('product-img-2'); ?>" class="img-phone" alt="">
                        </div><!-- p-peak-link-img -->
                        <div class="col-md-7 col-sm-6 col-xs-12 ppl-info">
                            <a href="<?php the_field('product-link-2'); ?>"><img src="<?php the_field('product-title-2'); ?>" class="product-logo" alt=""></a>
                            <p><?php the_field('product-text-2'); ?></p>
                        </div><!-- p-peak-link-info -->
                    </div><!-- p-peak-link-wrapper -->
                </div><!-- p-peak-link -->
                <div class="container-fluid p-peak-edge">
                    <div class="container ppe-wrapper">
                        <div class="row">
                            <a href="<?php the_field('product-link-3'); ?>"><img src="<?php the_field('product-title-3'); ?>" class="product-logo" alt=""></a>
                            <p><?php the_field('product-text-3'); ?></p>
                        </div><!-- row -->
                        <div class="ppe-info buried-4">
                            <img src="<?php the_field('product-img-3'); ?>" class="img" alt="">
                        </div><!-- ppe-info -->
                    </div><!-- p-peak-edge-wrapper -->
                </div><!-- p-peak-edge -->
            </div><!-- products-content -->
            
            <!-- loop page, get content -->
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content('[...]'); ?> 
            <?php endwhile; ?>

        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>

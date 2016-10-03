<?php
/**
 *
 * Template Name: Services
 *
 * This template is used for the subpages of the Peak Security Template. 
 *
 * @link https://peakalarm.com
 *
 * @package WordPress
 * @subpackage Peak Alarm
 * @since Peak Alarm 1.0
 */
get_header(); ?>
    <body>
        <header>
            <?php get_template_part('/includes/page-header'); ?>
        </header>
        <div class="body-content"> 
            <div class="container-fluid products-content wrap push">
                <div class="container-fluid services-banner" style="background-image: url('<?php the_field('banner-img'); ?>');">
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
                <div class="container-fluid services-section odd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 serv-icon">
                                <?php the_field('service-1-icon'); ?>
                            </div><!-- service-icon -->
                            <div class="col-md-9 col-sm-8 col-xs-12 serv-text-left">
                                <?php the_field('service-1-text'); ?>
                                <div class="service-btn">
                                    <a href="<?php the_field('service-1-btn'); ?>" class="peak-btn services-btn btn-right" type="button">Learn More</a>
                                </div><!-- service-btn -->
                            </div><!-- service-info -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- container-fluid -->
                <div class="container-fluid services-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-md-push-9 col-sm-4 col-sm-push-8 serv-icon">
                                <?php the_field('service-2-icon'); ?>
                            </div><!-- service-icon -->
                            <div class="col-md-9 col-md-pull-3 col-sm-8 col-sm-pull-4 col-xs-12 service-info">
                                <?php the_field('service-2-text'); ?>
                                <div class="service-btn">
                                    <a href="<?php the_field('service-2-btn'); ?>" class="peak-btn services-btn">Learn More</a>
                                </div><!-- service-btn -->
                            </div><!-- service-info -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- container-fluid -->
                <div class="container-fluid services-section odd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 serv-icon">
                                <?php the_field('service-3-icon'); ?>
                            </div><!-- service-icon -->
                            <div class="col-md-9 col-sm-8 col-xs-12 serv-text-left">
                                <?php the_field('service-3-text'); ?>
                                <div class="service-btn">
                                    <a href="<?php the_field('service-3-btn'); ?>" class="peak-btn services-btn btn-right">Learn More</a>
                                </div><!-- service-btn -->
                            </div><!-- service-info -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- container-fluid -->
                <div class="container-fluid additional-info">
                    <div class="container addInfo-wrapper">
                        <div class="row buried-4">
                            <img src="<?php the_field('product-img-1'); ?>" class="add-info-img" alt="">
                        </div><!-- p-peak-link-img -->
                        <div class="row addInfo-info">
                            <p><?php the_field('product-text-1'); ?></p>
                            <div class="addInfo-btn">
                                <a href="<?php the_field('product-btn-1'); ?>" class="cta-btn serviceBtn">Learn More</a>
                            </div><!-- addinfo-btn -->
                        </div><!-- p-peak-link-info -->
                    </div><!-- p-peak-link-wrapper -->
                </div><!-- p-peak-link -->
                <div class="container-fluid services-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-md-push-9 col-sm-4 col-sm-push-8 serv-icon">
                                <?php the_field('service-4-icon'); ?>
                            </div><!-- service-icon -->
                            <div class="col-md-9 col-md-pull-3 col-sm-8 col-sm-pull-4 col-xs-12 service-info">
                                <?php the_field('service-4-text'); ?>
                                <div class="service-btn">
                                    <a href="<?php the_field('service-4-btn'); ?>" class="peak-btn services-btn">Learn More</a>
                                </div><!-- service-btn -->
                            </div><!-- service-info -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- container-fluid -->
                <div class="container-fluid services-section odd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 serv-icon">
                                <?php the_field('service-5-icon'); ?>
                            </div><!-- service-icon -->
                            <div class="col-md-9 col-sm-8 col-xs-12 serv-text-left">
                                <?php the_field('service-5-text'); ?>
                                <div class="service-btn">
                                    <a href="<?php the_field('service-5-btn'); ?>" class="peak-btn services-btn btn-right">Learn More</a>
                                </div><!-- service-btn -->
                            </div><!-- service-info -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- container-fluid -->
                <div class="container-fluid services-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-md-push-9 col-sm-4 col-sm-push-8 serv-icon">
                                <?php the_field('service-6-icon'); ?>
                            </div><!-- service-icon -->
                            <div class="col-md-9 col-md-pull-3 col-sm-8 col-sm-pull-4 col-xs-12 service-info">
                                <?php the_field('service-6-text'); ?>
                                <div class="service-btn">
                                    <a href="<?php the_field('service-6-btn'); ?>" class="peak-btn services-btn">Learn More</a>
                                </div><!-- service-btn -->
                            </div><!-- service-info -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- container-fluid -->
                <div class="container-fluid services-section odd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 serv-icon">
                                <?php the_field('service-7-icon'); ?>
                            </div><!-- service-icon -->
                            <div class="col-md-9 col-sm-8 col-xs-12 serv-text-left">
                                <?php the_field('service-7-text'); ?>
                                <div class="service-btn">
                                    <a href="<?php the_field('service-7-btn'); ?>" class="peak-btn services-btn btn-right">Learn More</a>
                                </div><!-- service-btn -->
                            </div><!-- service-info -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- container-fluid -->
                

            
            <!-- loop page, get content -->
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content('[...]'); ?> 
            <?php endwhile; ?>

        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>
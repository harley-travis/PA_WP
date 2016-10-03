<?php
/**
 *
 * Template Name: About BETA
 *
 * This template is used for the subpages of the Peak Security Template. 
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
            
            <!--------------------- LOOP PAGE CONTENT --------------------->
            <div class="container page-content wrap push">
                <div class="col-md-9 page-content-left">
                    <img src="<?php the_field('subpage-img'); ?>" class="subpage-header-img">

                    <!-- loop page, get content -->
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content('[...]'); ?> 
                    <?php endwhile; ?>
         
                    
                    <div class="services-cta">
                        <h3>Contact us today</h3>
                        <p>If you have any questions regarding our services, please contact us today. We cater to both residential and commercial clients. Call us today at <a href="tel:888-445-5731">888-445-5731</a>, or visit our Contact us page to send us an email.</p>
                        <div class="service-btn-zone">
                            <a href="<?php echo WORDPRESS_URL; ?>/contact/" class="services-cta-ln btn">Contact Us</a>
                        </div><!-- service-btn-zone -->
                    </div><!-- services-cta -->
                </div><!-- page-content-left -->
                
                <!--------------------- SIDEBAR NAVI --------------------->
                <div class="col-md-3 page-content-right">
                    <div class="side-nav">                        
                        <?php get_template_part('/includes/sidebar'); ?>                    
                    </div><!-- side-nav -->
                </div><!-- page-content-right -->                
            </div><!-- page content -->
            
            <div class="container-fluid about-rotator">
                <div id="about-slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#about-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#about-slider" data-slide-to="1"></li>
                        <li data-target="#about-slider" data-slide-to="2"></li>
                        <li data-target="#about-slider" data-slide-to="3"></li>
                        <li data-target="#about-slider" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php the_field('about-img-1'); ?>" alt="" class="about-img">
                        </div>
                        <!-- slide 2 -->
                        <div class="item">
                            <img src="<?php the_field('about-img-2'); ?>" alt="" class="about-img">
                        </div>
                        <!-- slide 3 -->
                        <div class="item">
                            <img src="<?php the_field('about-img-3'); ?>" alt="" class="about-img">
                        </div>
                        <!-- slide 4 -->
                        <div class="item">
                            <img src="<?php the_field('about-img-4'); ?>" alt="" class="about-img">
                        </div>
                        <!-- slide 5 -->
                        <div class="item">
                            <img src="<?php the_field('about-img-5'); ?>" alt="" class="about-img">
                        </div>
                    </div><!-- carousell-inner -->
                    <a href="#about-slider" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-shevron-left" aria-hidden="true"></span>
                    </a>
                    <a href="#about-slider" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-shevron-right" aria-hidden="true"></span>
                    </a>
                </div><!-- about-slider -->
            </div><!-- about-rotator -->
            
            <div class="col-md-9 page-content-left left-over">
                <?php the_field('about-text'); ?>
            </div><!-- left -->

        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://www.travisharley.com/
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
        <div class="container-fluid banner wrap push">
            <?php get_template_part('/includes/banner'); ?>
        </div><!-- banner -->
        
        <!---------------------- LOOP PAGE INFORMATION ---------------------->
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content('[...]'); ?> 
        <?php endwhile; ?>

        <div class="container-fluid newsletter wrap push">
            <div class="container newsletter">
                <div class="row">
                    <div class="col-md-7 col-xs-12 newsletter-text">
                        <span class="newsletter-text">Join Our Community By Signing Up For Our Newsletter</span>
                    </div>
                    <div class="col-md-5">
                        [form]
                    </div>
                </div><!-- row -->
            </div><!-- newsletter -->
        </div><!-- newsletter -->
        <div class="container s-1-carousel wrap push">
            <div id="slide-1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- slide 1 -->
                    <div class="item active slide-1">
                        <div class="carousel-container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 s-1-img">
                                    <img src="<?php the_field('slide-1-img'); ?>" class="slide-img">
                                </div><!-- s-1-img -->
                                <div class="col-md-8 col-sm-6 col-xs-12 s-1-info">
                                    <div class="s-1-heading">
                                        <h2 class="s-1-h"><?php the_field('slide-1-title'); ?></h2>
                                    </div><!-- s-1-heading -->
                                    <div class="s-1-text">
                                        <?php the_field('slide-1-text'); ?>
                                    </div><!-- s-1-text -->
                                    <div class="s-1-btn">
                                        <a href="<?php the_field('slide-1-btn-url'); ?>" class="btn"><?php the_field('slide-1-btn-name'); ?></a>
                                    </div><!-- s-1-btn -->
                                </div><!-- s-1-info -->
                            </div><!-- row -->
                        </div><!-- carousel-container -->
                    </div>
                    <!-- slide 2 -->
                    <div class="item slide-1">
                        <div class="carousel-container">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 s-1-img">
                                    <img src="<?php the_field('slide-1-img-2'); ?>" class="slide-img">
                                </div><!-- s-1-img -->
                                <div class="col-md-8 col-sm-6 col-xs-12 s-1-info">
                                    <div class="s-1-heading">
                                        <h2 class="s-1-h"><?php the_field('slide-1-title-2'); ?></h2>
                                    </div><!-- s-1-heading -->
                                    <div class="s-1-text">
                                        <?php the_field('slide-1-text-2'); ?>
                                    </div><!-- s-1-text -->
                                    <div class="s-1-btn">
                                        <a href="<?php the_field('slide-1-btn-url-2'); ?>" class="btn"><?php the_field('slide-1-btn-name'); ?></a>
                                    </div><!-- s-1-btn -->
                                </div><!-- s-1-info -->
                            </div><!-- row -->
                        </div><!-- carousel-container -->
                    </div>
                </div><!-- carousell-inner -->
            </div><!-- slide-1 -->
        </div><!-- s-1-carousel -->
        <div class="s-1-directions wrap push">
            <a href="#slide-1" class="" role="button" data-slide-to="0">
                Residential <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a href="#slide-1" class="" role="button" data-slide-to="1">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Commerical 
            </a>
        </div><!-- s-1-directions -->
        <div class="container-fluid services wrap push">
            <?php get_template_part('/includes/services'); ?>
        </div><!-- services -->
        <div class="container-fluid home-security wrap push">
            <div class="container h-s-wrapper">
                <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-8 h-s-img">
                    <img src="<?php the_field('link-img'); ?>" class="slide-img"><div class="sticker-1"></div>
                </div><!-- h-s-img -->
                <div class="col-md-8 col-sm-6 col-xs-12 col-md-pull-4 h-s-info">
                    <div class="h-s-title">
                        <img src="<?php the_field('link-heading'); ?>" class="product-logo" alt="">
                    </div><!-- h-s-title -->
                    <div class="h-s-text">
                        <p><?php the_field('link-text'); ?></p> 
                    </div><!-- h-s-text -->
                    <div class="h-s-btn">
                        <a href="<?php the_field('link-btn'); ?>" class="btn">Learn More</a>
                    </div><!-- b-s-btn -->
                </div><!-- h-s-info -->
            </div><!-- h-s-wrapper -->
        </div><!-- home-security -->
         <section class="container-fluid module parallax business-security wrap push" style="background-image: url('<?php the_field('view-bg'); ?>');">
             <div class="biz-wrappa">
                 <img src="<?php bloginfo('template_directory'); ?>/img/home/border2.png" class="borderthing">
                    <div class="container b-s-wrapper">
                        <div class="col-md-6 col-sm-6 col-xs-12 b-s-img">
                            <img src="<?php the_field('view-img'); ?>" class="slide-img"><div class="sticker-1"></div>
                        </div><!-- b-s-img -->
                        <div class="col-md-6 col-sm-6 col-xs-12 b-s-info-odd">
                            <div class="b-s-title">
                                <img src="<?php the_field('view-heading'); ?>" class="product-logo" alt="">
                            </div><!-- b-s-title -->
                            <div class="b-s-text">
                                <p><?php the_field('view-text'); ?></p>
                            </div><!-- b-s-text -->
                            <div class="b-s-btn">
                                <a href="<?php the_field('view-btn'); ?>" class="btn">Learn More</a>
                            </div><!-- b-s-btn -->
                        </div><!-- b-s-info -->
                    </div><!-- b-s-wrapper -->
                <img src="<?php bloginfo('template_directory'); ?>/img/home/border.png" class="borderthing borderthingBottom">
             </div><!-- biz-wrappa -->
        </section><!-- business-seurity -->     
        <div class="container-fluid peak-edge wrap push">
            <div class="container h-s-wrapper">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-push-6 h-s-img">
                    <img src="<?php the_field('edge-img'); ?>" class="slide-img">
                </div><!-- h-s-img -->
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-pull-6 h-s-info">
                    <div class="h-s-title">
                        <img src="<?php the_field('edge-heading'); ?>" class="product-logo" alt="">
                    </div><!-- h-s-title -->
                    <div class="h-s-text">
                        <p><?php the_field('edge-text'); ?></p> 
                    </div><!-- h-s-text -->
                    <div class="h-s-btn">
                        <a href="<?php the_field('edge-btn'); ?>" class="btn">Learn More</a>
                    </div><!-- b-s-btn -->
                </div><!-- h-s-info -->
            </div><!-- h-s-wrapper -->
        </div><!-- home-security -->
        <div class="container-fluid more-info wrap push">
            <div class="container m-i-wrapper">
                <div class="col-md-8 col-sm-6 col-xs-12 m-t-text">
                    <p><?php the_field('cta-text'); ?></p>
                </div><!-- m-t-text -->
                <div class="col-md-4 col-sm-6 col-xs-12 m-t-btn">   
                    <a href="<?php the_field('cta-btn'); ?>" class="cta-btn">Learn More</a>
                </div><!-- m-t-btn -->
            </div><!-- m-i-wrapper -->  
        </div><!-- more-info -->
        <div class="container-fluid embed-responsive embed-responsive-16by9 video-section-mobile wrap push" id="video">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l0fu_oO2n-Y" frameborder="0" allowfullscreen></iframe>
        </div><!-- video-section -->
        <div class="peak-company-intro wrap push">
            <h2 class="peak-comp-int">Visit Other Peak Companies</h2>
        </div><!-- peak-company-intro -->
        <div class="container-fluid peak-companies wrap push">
            <div class="container peak-wrapper">
                <div class="col-sm-6 col-xs-12 peak-col">
                    <a href="http://peakguard.com" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/img/logos/peak-security.png" class="company-logo-img" id="alarm"></a>
                    <div class="peak-service">
                        <a href="http://peakguard.com" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/img/icons/peak-security-icon.png" class="service-img"></a>
                    </div><!-- peak-services -->
                </div><!-- peak-col -->
                <div class="col-sm-6 col-xs-12 peak-col">
                    <a href="http://peakav.net" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/img/logos/peakav.png" class="company-logo-img"></a>
                    <div class="peak-service">
                        <a href="http://peakav.net" target="_blank" ><img src="<?php bloginfo('template_directory'); ?>/img/icons/peak-av-icon.png" class="service-img"></a>
                    </div><!-- peak-services -->
                </div><!-- peak-col -->
            </div><!-- peak-wrapper -->
        </div><!-- peak-companies -->
        <div class="container-fluid contact-form-home wrap push">
            <div class="container form-group contact-form-home-wrapper">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 contact-form-heading">
                        <h2>Contact Us Today</h2>
                    </div><!-- contact-form-heading -->
                    <div class="col-sm-6 col-xs-12 contact-home-phone">
                        <h2><span class="glyphicon glyphicon-earphone contact-phone-icon" aria-hidden="true"></span> 1-888-822-7231</h2>
                    </div><!-- contact-form-phone -->
                </div><!-- row -->
                <div class="row">
                    <div class="error-msg">
                        <div id="errorDiv"></div>
                        <div id="successDiv"></div>
                    </div><!-- error-msg -->
                    <div class="col-md-6 col-xs-12 contact-form-name">
                        <label for="name">Name <span class="red">*</span></label>
                        <input type="text" id="name" class="form-control">
                    </div><!-- contact-form-name -->
                    <div class="col-md-6 col-xs-12  contact-form-email">
                        <label for="email">Email <span class="red">*</span></label>
                        <input type="text" id="address" class="form-control">
                    </div><!-- contact-form-email -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-md-12 contact-form-phone">
                        <label for="email">Phone Number <span class="red">*</span></label>
                        <input type="text" id="phone" class="form-control">
                    </div><!-- contact-form-phone -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-xs-12 contact-form-message">
                        <label for="comment">Message <span class="red">*</span></label>
                        <textarea class="form-control" rows="5" id="message"></textarea>
                    </div><!-- contact-form-message -->
                </div><!-- row -->
                <div class="row">
                    <div class="col-xs-12 contact-form-btn">
                        <button type="button" id="send" class="btn btn-info">Send Message</button>
                    </div><!-- contact-form- btn -->
                </div><!-- row -->
            </div><!-- container-form-home-wrapper -->
        </div><!-- container-form-home -->
        <?php get_footer(); ?>
    </body>
</html>

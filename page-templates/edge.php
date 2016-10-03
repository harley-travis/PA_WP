<?php
/**
 *
 * Template Name:  Edge
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
                <div class="container-fluid p-pkg-banner" style="background-image: url('<?php the_field('banner-bg'); ?>');">
                    <div class="container pkg-banner-wrapper">
                        <div class="pkg-title">
                            <div class="pkg-logo">
                                <img src="<?php the_field('product-logo'); ?>" class="product-logo-img">
                            </div><!-- product-logo -->
                            <div class="product-logline">
                                <p><?php the_field('product-logline'); ?></p>
                            </div><!-- product-logline -->
                            <div class="product-cta">
                                <a href="tel:<?php the_field('phone-number'); ?>" class="product-number"><?php the_field('phone-number'); ?></a>
                            </div><!-- product-cta -->
                        </div><!-- pkg-title -->
                    </div><!-- p-pkg-b-wrapper -->
                </div><!-- p-pkg-banner -->
                <div class="container-fluid p-pkg-s-1">
                    <div class="container p-pkg-s-1-wrapper">
                        <div class="pkg-house-text">
                            <h2><?php the_field('page-heading'); ?></h2>
                            <p><?php the_field('page-text'); ?></p>
                        </div><!-- pkg-house-text -->
                        <div class="pkg-house">
                            <img src="<?php the_field('page-img'); ?>" class="img">
                        </div><!-- pkg-house -->
                    </div><!-- p-pkg-s-1-wrapper -->
                </div><!-- p-pkg-s-1 -->
                <div class="container-fluid products-listing">
                    <div class="container products-listing-wrapper">
                        <div class="row">
                            <div class="f-p-wrapper">
                                <h4 class="f-p-heading"><?php the_field('products-heading'); ?></h4>
                            </div><!-- f-p-left -->
                        </div><!-- row -->
                        <div class="row pkg-options">
                            <ul class="col-sm-4 pricing-column">
                                <li class="int-pricing-column-header">
                                    <span class="services-pkg-head"><?php the_field('serviceslist-heading'); ?></span>
                                </li>
                                <li class="int-pricing-column-row odd"><?php the_field('serviceslist-1'); ?></li>
                                <li class="int-pricing-column-row even"><?php the_field('serviceslist-2'); ?></li>
                                <li class="int-pricing-column-row odd"><?php the_field('serviceslist-3'); ?></li>
                                <li class="int-pricing-column-row even"><?php the_field('serviceslist-4'); ?></li>
                                <li class="int-pricing-column-row odd"><?php the_field('serviceslist-5'); ?></li>
                                <li class="int-pricing-column-row even"><?php the_field('serviceslist-6'); ?></li>
                                <li class="int-pricing-column-row odd"><?php the_field('serviceslist-7'); ?></li>
                                <li class="int-pricing-column-row even"><?php the_field('serviceslist-8'); ?></li>
                                <li class="int-pricing-column-row odd"><?php the_field('serviceslist-9'); ?></li>
                                <li class="int-pricing-column-row even"><?php the_field('serviceslist-10'); ?></li>
                            </ul><!-- pricing-column -->
                            <ul class="col-sm-4 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-1"><?php the_field('pkg-1'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-1'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-1'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-1'); ?>" class="price-btn"><?php the_field('pkg-btn-text-1'); ?></a>
                                    </div><!-- pkg-btn -->
                                </li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-1-1'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-1-2'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-1-3'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-1-4'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-1-5'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-1-6'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-1-7'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-1-8'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-1-9'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-1-10'); ?></li>
                            </ul><!-- pricing-column -->
                            <ul class="col-sm-4 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-2"><?php the_field('pkg-2'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-2'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-1'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-1'); ?>" class="price-btn"><?php the_field('pkg-btn-text-1'); ?></a>
                                    </div><!-- pkg-btn -->
                                </li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-2-1'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-2-2'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-2-3'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-2-4'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-2-5'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-2-6'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-2-7'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-2-8'); ?></li>
                                <li class="pricing-column-row odd"><?php the_field('pkg-service-2-9'); ?></li>
                                <li class="pricing-column-row even"><?php the_field('pkg-service-2-10'); ?></li>
                            </ul><!-- pricing-column -->
                        </div><!-- pkg-options -->   
                        <div class="pkg-layout-mobile">
                            <ul class="col-md-4 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-1"><?php the_field('pkg-1'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-1'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-1'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-1'); ?>" class="price-btn"><?php the_field('pkg-btn-text-1'); ?></a>
                                    </div><!-- pkg-btn -->
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-1'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-1'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-2'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-2'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-3'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-3'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-4'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-4'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-5'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-5'); ?>
                                    </div>
                                </li>
                            </ul><!-- pricing-column -->
                            <ul class="col-md-4 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-2"><?php the_field('pkg-2'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-2'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-2'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-1'); ?>" class="price-btn"><?php the_field('pkg-btn-text-1'); ?></a>
                                    </div><!-- pkg-btn -->
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-1'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-1'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-2'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-2'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-3'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-3'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-4'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-4'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-5'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-5'); ?>
                                    </div>
                                </li>
                            </ul><!-- pricing-column -->
                        </div><!-- pkg-layout-mobile -->
                    </div><!-- products-listing-wrapper -->
                </div><!-- products-listing -->
                <div class="container-fluid more-info">
                    <div class="container m-i-wrapper">
                        <div class="col-md-8 col-sm-6 col-xs-12 m-t-text">
                            <p>Get More Information About Home and Business Security</p>
                        </div><!-- m-t-text -->
                        <div class="col-md-4 col-sm-6 col-xs-12 m-t-btn">   
                            <a href="#" class="cta-btn">Learn More</a>
                        </div><!-- m-t-btn -->
                    </div><!-- m-i-wrapper -->  
                </div><!-- more-info -->
                <div class="container-fluid contact-form-home">
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
            </div><!-- products-content -->
            
            <!-- loop page, get content -->
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content('[...]'); ?> 
            <?php endwhile; ?>
        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>

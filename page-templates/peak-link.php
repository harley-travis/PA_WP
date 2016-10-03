<?php
/**
 *
 * Template Name: Peak Link
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
                <div class="container-fluid p-pkg-banner" style="background-image: url('<?php the_field('banner-bg'); ?>');">
                    <div class="container p-pkg-b-wrapper">
                        <div class="col-md-8 col-md-push-4 col-sm-6 col-sm-push-6 col-xs-12 pkg-title">
                            <div class="product-pkg-logo">
                                <img src="<?php the_field('product-logo'); ?>" class="product-logo-img">
                            </div><!-- product-logo -->
                            <div class="product-logline">
                                <p><?php the_field('product-logline'); ?></p>
                            </div><!-- product-logline -->
                            <div class="product-cta">
                                <a href="tel:<?php the_field('phone-number'); ?>" class="product-number"><?php the_field('phone-number'); ?></a>
                            </div><!-- product-cta -->
                        </div><!-- pkg-title -->
                        <div class="col-md-4 col-md-pull-8 col-sm-6 col-sm-pull-6 col-xs-12 pkg-list">
                            <h3 class="pkg-heading"><?php the_field('list-title'); ?> <span class="glyphicon glyphicon-paperclip pkgh-glif" aria-hidden="true"></span></h3>
                            <div class="pkg-list-wrapper">
                                <ul class="elite-services">
                                    <li class="elite-list"><?php the_field('list-1'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-2'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-3'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-4'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-5'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-6'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-7'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-8'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                    <li class="elite-list"><?php the_field('list-9'); ?> <span class="glyphicon glyphicon-check pkg-check" aria-hidden="true"></span></li>
                                </ul>
                            </div><!-- pkg-list-wrapper -->
                        </div><!-- pkg-list -->
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
                        <div class="f-p-wrapper row">
                            <div class="col-md-6 col-xs-12 f-p-left">
                                <h4 class="f-p-heading"><?php the_field('products-heading'); ?></h4>
                            </div><!-- f-p-left -->
                            <div class="col-md-6 col-xs-12 f-p-right">
                                <h5></h5>
                            </div><!-- f-p-right -->
                        </div><!-- row -->
                        <div class="row products-wrapper">
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-1'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-1'); ?></h3></div>
                            </div><!-- product-item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-2'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-2'); ?></h3></div>
                            </div><!-- product-item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-3'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-3'); ?></h3></div>
                            </div><!-- product-item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-4'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-4'); ?></h3></div>
                            </div><!-- product-item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-5'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-5'); ?></h3></div>
                            </div><!-- product-item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-6'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-6'); ?></h3></div>
                            </div><!-- product-item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-7'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-7'); ?></h3></div>
                            </div><!-- product-item -->
                            <div class="col-md-3 col-sm-6 col-xs-12 product-item">
                                <div class="item-img"><img src="<?php the_field('product-img-8'); ?>" class="p-item-img"></div>
                                <div class="item-title"><h3 class="i-t-heading"><?php the_field('product-title-8'); ?></h3></div>
                            </div><!-- product-item -->
                        </div><!-- row -->
                    </div><!-- products-listing-wrapper -->
                </div><!-- products-listing -->
                <div class="container-fluid products-listing">
                    <div class="container products-listing-wrapper">
                        <div class="row">
                            <div class="f-p-wrapper">
                                <h4 class="f-p-heading"><?php the_field('pricing-heading'); ?></h4>
                            </div><!-- f-p-left -->
                        </div><!-- row -->
                        <div class="row pkg-options">
                            <ul class="col-sm-3 pricing-column">
                                <li class="int-pricing-column-header-pl">
                                    <span class="services-pkg-head"><?php the_field('serviceslist-heading'); ?></span>
                                </li>
                                <li class="int-pricing-column-row pl-row1 odd"><?php the_field('serviceslist-1'); ?></li>
                                <li class="int-pricing-column-row pl-row2 even"><?php the_field('serviceslist-2'); ?></li>
                                <li class="int-pricing-column-row pl-row3 odd"><?php the_field('serviceslist-3'); ?></li>
                                <li class="int-pricing-column-row pl-row4 even"><?php the_field('serviceslist-4'); ?></li>
                                <li class="int-pricing-column-row pl-row5 odd"><?php the_field('serviceslist-5'); ?></li>
                                <li class="int-pricing-column-row pl-row6 even"><?php the_field('serviceslist-6'); ?></li>
                                <li class="int-pricing-column-row pl-row7 odd">
                                    <?php the_field('serviceslist-7'); ?>
                                    <ul class="sub-product-list">
                                        <li class="spl-list"><?php the_field('sub-service-7-1'); ?></li>
                                    </ul>
                                </li>
                                <li class="int-pricing-column-row pl-row8 even">
                                    <?php the_field('serviceslist-8'); ?>
                                    <ul class="sub-product-list">
                                        <li class="spl-list"><?php the_field('sub-service-8-1'); ?></li>
                                        <li class="spl-list"><?php the_field('sub-service-8-2'); ?></li>
                                        <li class="spl-list"><?php the_field('sub-service-8-3'); ?></li>
                                    </ul>
                                </li>
                                <li class="int-pricing-column-row pl-row9 odd">
                                    <?php the_field('serviceslist-9'); ?>
                                    <ul class="sub-product-list">
                                        <li class="spl-list"><?php the_field('sub-service-9-1'); ?></li>
                                        <li class="spl-list"><?php the_field('sub-service-9-2'); ?></li>
                                    </ul>
                                </li>
                                <li class="int-pricing-column-row pl-row10 even"><?php the_field('serviceslist-10'); ?></li>
                                <li class="int-pricing-column-row pl-row11 odd"><?php the_field('serviceslist-11'); ?></li>
                                <li class="int-pricing-column-row pl-row12 even">
                                    <?php the_field('serviceslist-12'); ?>
                                    <ul class="sub-product-list">
                                        <li class="spl-list"><?php the_field('sub-service-12-1'); ?></li>
                                    </ul>
                                </li>
                                <li class="int-pricing-column-row pl-row13 odd"><?php the_field('serviceslist-13'); ?></li>
                                <li class="int-pricing-column-row pl-row14 even"><?php the_field('serviceslist-14'); ?></li>
                            </ul><!-- pricing-column -->
                            <ul class="col-sm-3 pricing-column">
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
                                <li class="pricing-column-row pl-row1 odd"><?php the_field('pkg-service-1-1'); ?></li>
                                <li class="pricing-column-row pl-row2 even"><?php the_field('pkg-service-1-2'); ?></li>
                                <li class="pricing-column-row pl-row3 odd"><?php the_field('pkg-service-1-3'); ?></li>
                                <li class="pricing-column-row pl-row4 even"><?php the_field('pkg-service-1-4'); ?></li>
                                <li class="pricing-column-row pl-row5 odd"><?php the_field('pkg-service-1-5'); ?></li>
                                <li class="pricing-column-row pl-row6 even"><?php the_field('pkg-service-1-6'); ?></li>
                                <li class="pricing-column-row pl-row7 emPad odd"><?php the_field('pkg-service-1-7'); ?></li>
                                <li class="pricing-column-row pl-row8 haPad even"><?php the_field('pkg-service-1-8'); ?></li>
                                <li class="pricing-column-row pl-row9 epPad odd"><?php the_field('pkg-service-1-9'); ?></li>
                                <li class="pricing-column-row pl-row10 even"><?php the_field('pkg-service-1-10'); ?></li>
                                <li class="pricing-column-row pl-row11 odd"><?php the_field('pkg-service-1-11'); ?></li>
                                <li class="pricing-column-row pl-row12 rsPad even"><?php the_field('pkg-service-1-12'); ?></li>
                                <li class="pricing-column-row pl-row13 odd"><?php the_field('pkg-service-1-13'); ?></li>
                                <li class="pricing-column-row pl-row14 even"><?php the_field('pkg-service-1-14'); ?></li>
                            </ul><!-- pricing-column -->
                            <ul class="col-sm-3 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-2"><?php the_field('pkg-2'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-2'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-2'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-2'); ?>" class="price-btn"><?php the_field('pkg-btn-text-2'); ?></a>
                                    </div><!-- pkg-btn -->
                                </li>
                                <li class="pricing-column-row pl-row1 odd"><?php the_field('pkg-service-2-1'); ?></li>
                                <li class="pricing-column-row pl-row2 even"><?php the_field('pkg-service-2-2'); ?></li>
                                <li class="pricing-column-row pl-row3 odd"><?php the_field('pkg-service-2-3'); ?></li>
                                <li class="pricing-column-row pl-row4 even"><?php the_field('pkg-service-2-4'); ?></li>
                                <li class="pricing-column-row pl-row5 odd"><?php the_field('pkg-service-2-5'); ?></li>
                                <li class="pricing-column-row pl-row6 even"><?php the_field('pkg-service-2-6'); ?></li>
                                <li class="pricing-column-row pl-row7 emPad odd"><?php the_field('pkg-service-2-7'); ?></li>
                                <li class="pricing-column-row pl-row8 haPad even"><?php the_field('pkg-service-2-8'); ?></li>
                                <li class="pricing-column-row pl-row9 epPad odd"><?php the_field('pkg-service-2-9'); ?></li>
                                <li class="pricing-column-row pl-row10 even"><?php the_field('pkg-service-2-10'); ?></li>
                                <li class="pricing-column-row pl-row11 odd"><?php the_field('pkg-service-2-11'); ?></li>
                                <li class="pricing-column-row pl-row12 rsPad even"><?php the_field('pkg-service-2-12'); ?></li>
                                <li class="pricing-column-row pl-row13 odd"><?php the_field('pkg-service-2-13'); ?></li>
                                <li class="pricing-column-row pl-row14 even"><?php the_field('pkg-service-2-14'); ?></li>
                            </ul><!-- pricing-column -->
                            <ul class="col-sm-3 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-3"><?php the_field('pkg-3'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-3'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-2'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-2'); ?>" class="price-btn"><?php the_field('pkg-btn-text-2'); ?></a>
                                    </div><!-- pkg-btn -->
                                </li>
                                <li class="pricing-column-row pl-row1 odd"><?php the_field('pkg-service-3-1'); ?></li>
                                <li class="pricing-column-row pl-row2 even"><?php the_field('pkg-service-3-2'); ?></li>
                                <li class="pricing-column-row pl-row3 odd"><?php the_field('pkg-service-3-3'); ?></li>
                                <li class="pricing-column-row pl-row4 even"><?php the_field('pkg-service-3-4'); ?></li>
                                <li class="pricing-column-row pl-row5 odd"><?php the_field('pkg-service-3-5'); ?></li>
                                <li class="pricing-column-row pl-row6 even"><?php the_field('pkg-service-3-6'); ?></li>
                                <li class="pricing-column-row pl-row7 emPad odd"><?php the_field('pkg-service-3-7'); ?></li>
                                <li class="pricing-column-row pl-row8 haPad even"><?php the_field('pkg-service-3-8'); ?></li>
                                <li class="pricing-column-row pl-row9 epPad odd"><?php the_field('pkg-service-3-9'); ?></li>
                                <li class="pricing-column-row pl-row10 even"><?php the_field('pkg-service-3-10'); ?></li>
                                <li class="pricing-column-row pl-row11 odd"><?php the_field('pkg-service-3-11'); ?></li>
                                <li class="pricing-column-row pl-row12 rsPad even"><?php the_field('pkg-service-3-12'); ?></li>
                                <li class="pricing-column-row pl-row13 odd"><?php the_field('pkg-service-3-13'); ?></li>
                                <li class="pricing-column-row pl-row14 even"><?php the_field('pkg-service-3-14'); ?></li>
                            </ul><!-- pricing-column -->
                        </div><!-- pkg-options -->
                        <div class="pkg-layout-mobile">
                            <ul class="col-md-3 pricing-column">
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
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-6'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-6'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-7'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-7'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-8'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-8'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-9'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-9'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-10'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-10'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-11'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-1-11'); ?>
                                    </div>
                                </li>
                            </ul><!-- pricing-column -->
                            <ul class="col-md-3 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-2"><?php the_field('pkg-2'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-2'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-2'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-2'); ?>" class="price-btn"><?php the_field('pkg-btn-text-2'); ?></a>
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
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-6'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-6'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-7'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-7'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-8'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-8'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-9'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-9'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-10'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-10'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-11'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-2-11'); ?>
                                    </div>
                                </li>
                            </ul><!-- pricing-column -->
                            <ul class="col-md-3 pricing-column">
                                <li class="pricing-column-header">
                                    <span class="pricing-heading box-3"><?php the_field('pkg-3'); ?></span>
                                    <div class="price">
                                        <span class="amount"><?php the_field('pkg-price-3'); ?></span><span class="month"><?php the_field('pkg-monthly'); ?></span>
                                    </div><!-- column-pricing -->
                                    <div class="pkg-term">
                                        <h6 class="term"><?php the_field('pkg-agreement-2'); ?></h6>
                                    </div><!-- pkg-term -->
                                    <div class="pkg-btn">
                                        <a href="<?php the_field('pkg-btn-2'); ?>" class="price-btn"><?php the_field('pkg-btn-text-2'); ?></a>
                                    </div><!-- pkg-btn -->
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-1'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-1'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-2'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-2'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-3'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-3'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-4'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-4'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-5'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-5'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-6'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-6'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-7'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-7'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-8'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-8'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-9'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-9'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-10'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-10'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-11'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-11'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-12'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-12'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row odd">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-13'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-13'); ?>
                                    </div>
                                </li>
                                <li class="pricing-column-row even">
                                    <div class="col-sm-6 col-xs-9 p-txt-left">
                                        <?php the_field('serviceslist-14'); ?>
                                    </div>
                                    <div class="col-sm-6 col-xs-3 p-txt-right">
                                        <?php the_field('pkg-service-3-14'); ?>
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
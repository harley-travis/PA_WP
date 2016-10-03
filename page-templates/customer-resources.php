<?php
/**
 *
 * Template Name: Customer Resources
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
                <div class="banner-services-top-wrapper wrap push">
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
         
                    
                    <div class="customer-forms">
                        <h2 class="forms-title"><?php the_field('forms-title-1'); ?></h2>
                        
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <?php the_field('file-heading-1'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-1'); ?>" download><?php the_field('file-heading-1'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <?php the_field('file-heading-2'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-2'); ?>" download><?php the_field('file-heading-2'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <?php the_field('file-heading-3'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-3'); ?>" download><?php the_field('file-heading-3'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <?php the_field('file-heading-4'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-4'); ?>" download><?php the_field('file-heading-4'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- customer-forms -->
                    
                    
                    <div class="customer-forms">
                        <h2 class="forms-title"><?php the_field('forms-title-2'); ?></h2>
                        
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            <?php the_field('file-heading-5'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-5'); ?>" download><?php the_field('file-heading-5'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <?php the_field('file-heading-6'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-6'); ?>" download><?php the_field('file-heading-6'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <?php the_field('file-heading-7'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-7'); ?>" download><?php the_field('file-heading-7'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEight">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            <?php the_field('file-heading-8'); ?> <span class="glyphicon glyphicon-download" aria-hidden="true"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                    <div class="panel-body">
                                        <a href="<?php the_field('file-8'); ?>" download><?php the_field('file-heading-8'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- customer-forms -->
                    
                    
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

        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>

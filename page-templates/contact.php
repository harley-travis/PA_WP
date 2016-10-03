<?php
/**
 *
 * Template Name: Contact
 *
 * This template is used for the subpages of the Peak Alarm Template. 
 *
 * @link https://peakalarm.comt
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
            <div class="container-fluid contact-banner-services-top wrap push">
                <div class="contact-banner-services-top-wrapper">
                    <!-------------------- LOOP PAGE TITLE -------------------->
                     <?php while (have_posts()) : the_post(); ?>
                        <h1 class="contact-heading"><?php the_title(); ?></h1>  
                        <a href="tel:888-822-7231" class="product-number">1-888-822-7231</a>
                    <?php endwhile; ?>
                </div>
            </div><!-- banner-top -->
            <div class="container-fluid contact-page-content wrap push">
                <div class="container contact-wrapper">
                    <div class="col-md-9 col-sm-12 contact-left">
                        <!-------------------- CONTENT PAGE LOOP -------------------->
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content('[...]'); ?> 
                        <?php endwhile; ?> 
                        <!-------------------- CONTENT PAGE LOOP -------------------->

                        <!-------------------- CONTACT FORM -------------------->
                        <div class="contactus-form">
                            <div class="error-msg">
                                <div id="errorDiv"></div>
                                <div id="successDiv"></div>
                            </div><!-- error-msg -->
                            <form>
                                <div class="form-group">
                                    <label for="name">Full Name: <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail Address: <span class="red">*</span></label>
                                    <input type="text" id="address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="label-margin">Telephone: <span class="red">*</span></label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea class="form-control" name="message" id="message" rows="10"></textarea>
                                </div>
                                <button type="button" id="send" class="btn btn-info">Send Message</button>
                            </form>
                        </div><!-- contact-form -->
                    </div><!-- contact-left -->
                    <div class="col-md-3 col-sm-12 contact-right">
                        <div class="side-nav">                        
                            <?php get_template_part('/includes/sidebar'); ?>                    
                        </div><!-- side-nav -->
                    </div><!-- right -->
                </div><!-- contact-wrapper -->
                <div class="container-fluid locations-wrapper">
                    <div class="container side-nav-bar-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 location">
                            <h3 class="contact-information">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td class="location-table"><span class="glyphicon glyphicon-map-marker location-icon" aria-hidden="true"></span> </td>
                                        <td><strong class="location-header"><?php the_field('location-1'); ?></strong></td>
                                    </tr>
                                </table>
                            </h3>
                            <table class="table" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-earphone location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><a href="tel:<?php the_field('phone-1'); ?>" class="contact-link"><?php the_field('phone-1'); ?></a></td>
                                </tr>
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-home location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><?php the_field('address-1'); ?></td>
                                </tr>
                            </table>
                        </div><!-- location  -->
                        <div class="col-md-3 col-sm-6 col-xs-12 location">
                            <h3 class="contact-information">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td class="location-table"><span class="glyphicon glyphicon-map-marker location-icon" aria-hidden="true"></span> </td>
                                        <td><strong class="location-header"><?php the_field('location-2'); ?></strong></td>
                                    </tr>
                                </table>
                            </h3>
                            <table class="table" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-earphone location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><a href="tel:<?php the_field('phone-2'); ?>" class="contact-link"><?php the_field('phone-2'); ?></a></td>
                                </tr>
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-home location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><?php the_field('address-2'); ?></td>
                                </tr>
                            </table>
                        </div><!-- location  -->
                        <div class="col-md-3 col-sm-6 col-xs-12 location">
                            <h3 class="contact-information">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td class="location-table"><span class="glyphicon glyphicon-map-marker location-icon" aria-hidden="true"></span> </td>
                                        <td><strong class="location-header"><?php the_field('location-3'); ?></strong></td>
                                    </tr>
                                </table>
                            </h3>
                            <table class="table" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-earphone location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><a href="tel:<?php the_field('phone-3'); ?>" class="contact-link"><?php the_field('phone-3'); ?></a></td>
                                </tr>
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-home location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><?php the_field('address-3'); ?></td>
                                </tr>
                            </table>
                        </div><!-- location  -->
                        <div class="col-md-3 col-sm-6 col-xs-12 location">
                            <h3 class="contact-information">
                                <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td class="location-table"><span class="glyphicon glyphicon-map-marker location-icon" aria-hidden="true"></span> </td>
                                        <td><strong class="location-header"><?php the_field('location-4'); ?></strong></td>
                                    </tr>
                                </table>
                            </h3>
                            <table class="table" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-earphone location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><a href="tel:<?php the_field('phone-4'); ?>" class="contact-link"><?php the_field('phone-4'); ?></a></td>
                                </tr>
                                <tr>
                                    <td class="location-table"><span class="glyphicon glyphicon-home location-icon" aria-hidden="true"></span></td>
                                    <td class="location-table"><?php the_field('address-4'); ?></td>
                                </tr>
                            </table>
                        </div><!-- location  -->
                    </div><!--side-nav-bar --> 
                </div><!-- locations-wrapper -->
                <div id="map-canvas"></div><!-- maps -->
             </div><!-- contact page content -->
        </div><!-- body-content -->
        <?php get_footer(); ?>
    </body>
</html>





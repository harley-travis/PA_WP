<?php
/**
 * The Head for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Travis Harley
 * @since Travis Harley 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php the_title('Peak Alarm | '); ?></title>

    <?php require_once(dirname(__FILE__)."/config.php"); ?>
    
    <!------------------------- META INFO ------------------------------->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#E73C30" />
    
     <!------------------------- NORMALIZE ------------------------------->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
    
    <!------------------------- MAIN STYLESHEET ------------------------->
    <link type="text/css" rel="stylesheet" href="<?php echo trailingslashit( get_bloginfo('template_url') ); ?>style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile.css" />
       
    <!------------------------- CSS LIBRARIES --------------------------->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />
    
    <!------------------------- JQUERY LIBRARIES ------------------------>
    <script src="<?php bloginfo('template_directory'); ?>/js/1.9.1/jquery.min.js"></script>
        
    <!------------------------- JAVASCRIPTS ----------------------------->
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/services.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/headScroll.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/sidebar.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/waypoints.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/animate.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery-c.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> 
    <script src="<?php bloginfo('template_directory'); ?>/js/map.js"></script>
    
    <!------------------------- BIGSLIDE -------------------------------->
    <script src="<?php bloginfo('template_directory'); ?>/js/bigslide.js"></script>
    
    <!------------------------- ANALYTICS ------------------------------->
    
    
    
    <!------------------------- INITIALIZE PLUGINS ---------------------->
    <!----- BIGSLIDE ONLOAD ----->
    <script>
        $(document).ready(function() {
            $('.menu-link').bigSlide();
            
            // hide empty subpage img fields
            if($('img.subpage-header-img').attr('src') != ""){
             
            }else{
                  $('.subpage-header-img').css({"display": "none"});
            }
            
            
        });        
    </script>
    
	<?php wp_head(); ?>
    
</head>

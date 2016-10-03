<?php

// this removes the top bar from the website when you are logged in as admin

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

?>

<?php


// this is for the mailchip widget on home page
if(function_exists('register_sidebar'))
    register_sidebar(array(
        
          'name' => 'newsletter',
          'before_widget' => '<div class="newsletter-widget">',
          'after_widget' => '</div>',
          'before_title' => '<h4 class="newsletter-title">',
          'after_title' => '</h4>',
    ));



// this is the widget for the sidebar
if(function_exists('register_sidebar'))
    register_sidebar(array(
        
          'name' => 'sidebar1',
          'before_widget' => '<div class="side-nav-bar">',
          'after_widget' => '</div>',
          'before_title' => '<h4 class="hide-title">',
          'after_title' => '</h4>',
    ));

?>

<?php 

function my_myme_types($mime_types){
    $mime_types['doc'] = 'application/msword'; //Adding word docs extension
    $mime_types['pdf'] = 'application/pdf'; //Adding pdf files
    return $mime_types;
}


?>
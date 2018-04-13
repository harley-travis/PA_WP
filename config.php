<?php
//Root paths
define("PATH_ROOT_ABS","/home/web/public_html/peakalarm/wp-content/themes/peakalarm");
define("PATH_ROOT_REL","/");
define("PATH_FULL_ABS",PATH_ROOT_ABS.PATH_ROOT_REL);
define("WORDPRESS_DIR", "http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm");
define("WORDPRESS_URL", "http://dev.peakalarm.com/peakalarm/index.php");

//Helper paths
define("PATH_CLASSES",PATH_FULL_ABS."email/class/");
define("PATH_HANDLERS",PATH_FULL_ABS."email/handler/");
define("PATH_LIB_PHP",PATH_FULL_ABS."email/lib/php/");

//Mailer Settings
$MailerAddr[] = "tharley@peakalarm.com";

define("MAILER_MAILTO",serialize($MailerAddr));
define("MAILER_ADDRESS","");
define("MAILER_SUBJECT","PeakAlarm.com Information Request");
?>

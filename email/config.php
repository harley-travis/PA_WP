<?php
//Root paths
define("PATH_ROOT_ABS","/home/web/public_html/peakalarm/wp-content/themes/peakalarm");
define("PATH_ROOT_REL","/");
define("PATH_FULL_ABS",PATH_ROOT_ABS.PATH_ROOT_REL);

//Helper paths
define("PATH_CLASSES",PATH_FULL_ABS."email/class/");
define("PATH_HANDLERS",PATH_FULL_ABS."email/handler/");
define("PATH_LIB_PHP",PATH_FULL_ABS."email/lib/php/");

//Mailer Settings
$MailerAddr[] = "test@test.com";
//$MailerAddr[] = "test@test.com";

define("MAILER_MAILTO",serialize($MailerAddr));
define("MAILER_ADDRESS","172.20.1.56");
define("MAILER_SUBJECT","testsite.com Information Request");
?>

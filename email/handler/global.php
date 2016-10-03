<?php
//Config file
require_once(dirname(__FILE__)."/../../config.php");   

//Required classes
require_once(PATH_CLASSES."/class.Mailer.php");

if(!isset($_REQUEST['action'])){
	die("HANDLER ERROR: Invalid action specified");	
}

switch($_REQUEST['action']){
	case "sendMessage":
		sendMessage($_REQUEST);
		break;
}

function sendMessage($Data){
	$Mailer = new Mailer();
	
	if($Mailer->SendMessage($Data['name'],$Data['address'],$Data['phone'],$Data['message']))
		exit(json_encode(array("success"=>true)));	
	else
		exit(json_encode(array("error"=>$Mailer->Errors)));	
}


?>







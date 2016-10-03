<?php
require_once(dirname(__FILE__)."/../../config.php"); 
require_once(PATH_LIB_PHP."phpmailer/PHPMailerAutoload.php");

class Mailer{
	
	var $ServerAddress = MAILER_ADDRESS;
	var $MailSubject = MAILER_SUBJECT;
	var $MailTo = MAILER_MAILTO;
	var $Errors = array();
	
	var $PostName;
	var $PostAddress;
	var $PostMessage;
    var $PostPhone;

	
	public function Mailer(){
		$this->MailTo = unserialize($this->MailTo);	
	}
	
	public function SendMessage($name,$address,$phone,$message){
		
        $this->PostName = $name;
		$this->PostAddress = $address;
        $this->PostPhone = $phone;
		$this->PostMessage = $message;
		
        if(strlen($message) < 1)
            $this->PostMessage = "Message not entered.";
        
		if(!$this->validatePost())
			return false;
		
		if(!$this->send())
			return false;
			
		return true;			
	}
    
	
	private function send(){
		
		$mail = new PHPMailer();
		$mail->isSMTP(); 
		$mail->Host = $this->ServerAddress;
		$mail->SMTPAuth = false;
		$mail->isHTML(true);
		
		$mail->Subject = $this->MailSubject;
		$mail->setFrom($this->PostAddress);
		$mail->addReplyTo($this->PostAddress);
		
		foreach($this->MailTo as $address){
			$mail->addAddress($address);
		}
		
		$Body = "Hello,<br></br>";
		$Body.= $this->PostName." has requested that you contact him or her at your earliest convenience.<br><br>";
		$Body.= "Here are the details: <br><br>";
		$Body.= "Lead Name: ".$this->PostName."<br>";
		$Body.= "Email Address: " .$this->PostAddress."<br>";
		$Body.= "Phone Number: " .$this->PostPhone."<br>";
		$Body.= "Message: ".$this->PostMessage;		
                
		$mail->Body = $Body;
		
		if(!$mail->send()){
			$this->appendError($mail->ErrorInfo);
			return false;
		}
		
		return true;	
	}
	    
	private function validatePost(){
		if(!$this->PostName){
			$this->appendError("Please enter your name.");
		}
		
		if(!$this->PostAddress){
			$this->appendError("Please enter your email address.");
		}
		
		if(!$this->PostPhone){
			$this->appendError("Please enter your phone number.");
		}        
		
		if(count($this->Errors) > 0)
			return false;
		
		return true;	
	}
    

	
	private function appendError($message){
		$this->Errors[] = $message;			
	}
}

?>
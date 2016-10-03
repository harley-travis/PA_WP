var Contact = {
	Reset: function(){
		Contact.Slim.Reset();
		Contact.Full.Reset();
	},
	Slim: {
		Reset: function(){			
			Contact.Slim.Error('',true);
			Contact.Slim.Success('',true);
			
			$("#slimName").val('');
			$("#slimAddress").val('');
			$("#slimPhone").val('');
		},
		Submit: function(){
			if(Contact.Slim.Validate()){
				if(Contact.Slim.Send($("#slimName").val(),$("#slimAddress").val(),$("#slimPhone").val())){
					return true;	
				}
			}
			return false;
		},
		Validate: function(){
			if($("#slimName").val().length < 1){
				Contact.Slim.Error("You must enter a name.");
				return false;	
			}
			
			if($("#slimAddress").val().length < 1){
				Contact.Slim.Error("You must enter an email address.");
				return false;	
			}
			
			if($("#slimPhone").val().length < 1){
				Contact.Slim.Error("Please enter a phone number.");
				return false;	
			}
			
			return true;	
		},
		Success: function(message,clear){
			if(clear){
				$("#slimSuccessDiv").hide();
				$("#slimSuccessDiv").html('');	
			}else{
				$("#slimSuccessDiv").show();
				$("#slimSuccessDiv").html(message);
			}
		},
		Error: function(message,clear){
			if(clear){
				$("#slimErrorDiv").hide();
				$("#slimErrorDiv").html('');	
			}else{
				$("#slimErrorDiv").show();
				$("#slimErrorDiv").html(message);
			}
		},
		Send: function(name,address,phone){
			$.ajax('http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm/email/handler/global.php', {
				cache: false,
				type: 'POST',
				data: {
					action: 'sendMessage',
					name: name,
					address: address,
					phone: phone,
                    message: ''
				},
				dataType:"json",
				error: function(jqXHR, textStatus, xhr){
					Contact.Slim.Error("Sorry, there was a problem sending your message. Please try again.");	
					return false;		
				},
				success: function(data, textStatus, xhr){
					if(data.success){
						Contact.Slim.Reset();
						Contact.Slim.Success("Your message was sent successfully. Thank you for contacting us. We will contact you within 24 hours.");						
					}else{
						Contact.Slim.Error(data.error);	
					}
				}
			});			
		}
	},
	Full: {
		Reset: function(){			
			Contact.Full.Error('',true);
			Contact.Full.Success('',true);
			
			$("#name").val('');
			$("#address").val('');
			$("#message").val('');
			$("#phone").val('');
		},
		Submit: function(){
			if(Contact.Full.Validate()){
				if(Contact.Full.Send($("#name").val(),$("#address").val(),$("#phone").val(),$("#message").val())){
					return true;	
				}
			}
			return false;
		},
		Validate: function(){
			if($("#name").val().length < 1){
				Contact.Full.Error("You must enter a name.");
				return false;	
			}
			
			if($("#address").val().length < 1){
				Contact.Full.Error("You must enter an email address.");
				return false;	
			}
			
			if($("#phone").val().length < 1){
				Contact.Full.Error("Please enter your phone number.");
				return false;	
			}
			
			return true;	
		},
		Success: function(message,clear){
			if(clear){
				$("#successDiv").hide();
				$("#successDiv").html('');	
			}else{
				$("#successDiv").show();
				$("#successDiv").html(message);
			}
		},
		Error: function(message,clear){
			if(clear){
				$("#errorDiv").hide();
				$("#errorDiv").html('');	
			}else{
				$("#errorDiv").show();
				$("#errorDiv").html(message);
			}
		},
		Send: function(name,address,phone,message){
			$.ajax('http://dev.peakalarm.com/peakalarm/wp-content/themes/peakalarm/email/handler/global.php', {
				cache: false,
				type: 'POST',
				data: {
					action: 'sendMessage',
					name: name,
					address: address,
					phone: phone,
					message: message					
				},
				dataType:"json",
				error: function(jqXHR, textStatus, xhr){
					Contact.Full.Error("Sorry, there was a problem sending your message. Please try again.");	
					return false;		
				},
				success: function(data, textStatus, xhr){
					if(data.success){
						Contact.Full.Reset();
						Contact.Full.Success("Your message was sent successfully. Thank you for contacting us. We will contact you within 24 hours.");						
					}else{
						Contact.Full.Error(data.error);	
					}
				}
			});			
		}
	}	
};

$(document).ready(function(e) {
	Contact.Reset();
    
	$("#send").click(function(){
		Contact.Full.Submit();
	});
    $("#homeSend").click(function(){
		Contact.Slim.Submit();
	});
});
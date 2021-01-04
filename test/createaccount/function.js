function checkPasswordMatch()
	{
		//grab the password
		var pw = $("#password").val();
		//grab the password confirmation
		var cpw = $("#confirm_password").val();
		//password comparison
		if(pw != cpw)
		{
			//display text, button state
			$("#password-check").css('color', 'red');
			$("#password-check").html("Passwords do not match!");
			document.getElementById('submit').disabled = true;
		}
		else
		{
			//display text, button state
			$("#password-check").html("");
			document.getElementById('submit').disabled = false;
		}
	}
	
	//run as soon as page opens
	$(document).ready(function () 
	{
		//live validation
		$("#password, #confirm_password").keyup(checkPasswordMatch);
	}
	);
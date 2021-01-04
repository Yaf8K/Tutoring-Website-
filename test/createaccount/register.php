<?php /*
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$emailAddress = $_POST['emailaddress'];
	$password = $_POST['password'];
	//$salt = "39747fxCAK$#@($&&%*!#)Jjdw_U9DJLA93444$&@*$&%)3819";
	//$encryptedPassword = md5($password.$salt);
	$hashPW = password_hash($password, PASSWORD_DEFAULT);
	$host = "localhost";
	$dbusername = "concordt_admin";
	$dbpassword = "Seeyouatcu";
	$dbname = "concordt_accounts";
	
	
	//Database connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	$check_email = mysqli_query($conn, "SELECT login FROM accounts WHERE login = '$emailAddress'");
	
	if(mysqli_connect_error())
	{
		die('Connect Error (' . mysqli_connect_errno() . ')'
		. mysqli_connect_error());
	}
	else
	{
		if(mysqli_num_rows($check_email) > 0)
		{
			echo("Email Already Exists.");
		}
		else
		{
			$sql = "INSERT INTO accounts (first_name, last_name, login, password)
			VALUES ('$firstName','$lastName','$emailAddress','$hashPW')";
			if($conn->query($sql))
			{
				echo "Registration Complete";
			}
			else
			{
				echo "Try again later";
			}
		}
		$conn->close();
	}
	*/
?>

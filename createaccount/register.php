<?php
//grab info about the user
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$emailAddress = $_POST['emailaddress'];
	$password = $_POST['password'];
	//encrypt their password
	$hashed_pw = password_hash($password, PASSWORD_DEFAULT);
	//variables to connect to database
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
		//checks to see if email already exists
		if(mysqli_num_rows($check_email) > 0)
		{
			$Exists = "Email Already Exists";
			echo "<script type='text/javascript'>window.location = '/createaccount' ; alert('$Exists');</script>";
		}
		//inserts new user into the accounts table based on info they put in text boxes
		else
		{
			//query to insert new user into accounts table
			$sql = "INSERT INTO accounts (first_name, last_name, login, password)
			VALUES ('$firstName','$lastName','$emailAddress','$hashed_pw')";
			if($conn->query($sql))
				//if everything goes good, success
			{
				$Good = "Registration Complete!";
				echo "<script type='text/javascript'>window.location = '../' ; alert('$Good');</script>";
			}
			else
			{
				//some error happened w/database
				$Bad = "Something Went Wrong; Try Again Later";
				echo "<script type='text/javascript'>window.location = '/createaccount' ; alert('$Bad');</script>";
			}
		}
		$conn->close();
	}
?>

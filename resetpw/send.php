<?php

//connect to the database

	$con = mysqli_connect("localhost", "concordt_admin", "Seeyouatcu");



	if(!$con)



	{



		die('Connection Failed'.mysqli_error());



	}



	mysqli_select_db($con, "concordt_accounts");

	

	

	//mail stuff like who from, message content, who to send to, subject, etc. self explanatory

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "admin@concordtutors.tk";

    $email = $_POST["emailaddress"];

    $to = $email;

    $subject = "Concord Tutors Password";

	$result = mysqli_query($con, "SELECT `password` FROM accounts WHERE `login` = '$email'");

	$row = mysqli_fetch_assoc($result);

	$password = $row['password'];

    $message = "Someone requested your password via the forgot password page.\nSorry, but we encrypted your password for security reasons and can't currently decrypt it.\nJust create a new account for now.\nYour encrypted password is: '$password'";

    $headers = "From:" . $from;

	//if user email doesn't exist

	if(mysqli_num_rows($result) == 0)

	{

		echo "<script type='text/javascript'>window.location = '/resetpw/index.html' ; alert('Invalid Email');</script>";

	}

	else

		//success

	{

    mail($to,$subject,$message, $headers);

    $Emailed = "Your password has been emailed to you.";

	echo "<script type='text/javascript'>window.location = '../' ; alert('$Emailed');</script>";

	}

?>


<?php

//connect to the database

	$con = mysqli_connect("localhost", "concordt_admin", "Seeyouatcu");



	if(!$con)



	{



		die('Connection Failed'.mysqli_error());



	}

	

	mysqli_select_db($con, "concordt_accounts");

	
	$token = bin2hex(random_bytes(2));
	

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

    $message = "Here is a link to reset your password: www.concordtutors.tk/test/resetpw/reset.php \n Your token is " . $token .;

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
	
	mysqli_select_db($con, "password_resets");
	
	$sql = "INSERT INTO password_resets(login, token) VALUES ('$email', '$token')";
    $results = mysqli_query($db, $sql);

    $Emailed = "Your password has been emailed to you.";

	echo "<script type='text/javascript'>window.location = '../' ; alert('$Emailed');</script>";

	}

?>


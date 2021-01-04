<?php



	//mail stuff

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "admin@concordtutors.tk";

	//grab inputs

	$firstName = $_POST["firstname"];

	$lastName = $_POST["lastname"];

    $email = $_POST["email"];

	$courses = $_POST["courses"];

	$tutor = $_POST["myTutor"];

	$comments = $_POST["comments"];

	//do logic for who to send to

	if($tutor == "Duy")

	{

		$to = "cututorservices@gmail.com";

	}

	else if($tutor == "Tyler")

	{

		$to = "cututorservices@gmail.com";

	}

	else if($tutor == "Brianna")

	{

		$to = "cututorservices@gmail.com";

	}

	else if($tutor == "Diego")

	{

		$to = "cututorservices@gmail.com";

	}

	else

	{

		//do nothing currently.

	}

	//continue mail stuff

    $subject = "Tutor Request";

    $message = "Hi,\n$firstName $lastName requested a tutor session with you.  \n\nDetails: \nEmail: $email \nCourses: $courses \nComments: $comments";

    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

    $Emailed = "Tutor Request Received";

	echo "<script type='text/javascript'>window.location = '/viewschedule' ; alert('$Emailed');</script>";

?>


<?php
/*
$email = $_POST["emailaddress"];

$pass = $_POST["password"];

$con = mysqli_connect("localhost", "concordt_admin", "Seeyouatcu");

if(!$con)

{

	die('Connection Failed'.mysqli_error());

}

mysqli_select_db($con, "concordt_accounts");

//echo "SELECT `login`, `password` FROM accounts WHERE `login` = '$email'";

$result = mysqli_query($con, "SELECT `login` FROM accounts WHERE `login` = '$email'");
$hashedPassword = mysqli_query($con, "SELECT `password` FROM accounts WHERE `login` = '$email'");
$myQuery = "SELECT `password` FROM accounts WHERE `login` = '$email'";
$result1 = mysqli_query($con,$myQuery);
//print out the encrypted password
while ($rows = mysqli_fetch_array($result1)){
	echo $rows['password'];
}
echo "<br>";
//print out the plain text password
echo $pass;
echo "<br>";
$row = mysqli_fetch_array($result);

if($row["login"]==$email) //&& $row["password"]==$pass)
{
	echo "Hello";
	$isCorrect = password_verify($pass,$hashedPassword);
	if($isCorrect)
	{
	echo"You are validated!";
	}
	else
	{
		echo "You aren't validated";
	}
	
}
else
{
	echo"User doesn't exist.";
}
*/
?>
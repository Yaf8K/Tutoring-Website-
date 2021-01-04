<?php
	$password = $_POST['password'];
	
	$con = mysqli_connect("localhost", "concordt_admin", "Seeyouatcu");



	if(!$con)



	{



		die('Connection Failed'.mysqli_error());



	}



	mysqli_select_db($con, "concordt_accounts");


	$result = mysqli_query($con, "SELECT `login` FROM accounts WHERE `login` = '$email'");
  if(mysql_num_rows($result)==1)
  {
    ?>
    <form method="post" action="update.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
	
	
	$sql = "SELECT login FROM password_resets WHERE token='$token' LIMIT 1";
	$results = mysqli_query($con, $sql);
	$email = mysqli_fetch_assoc($results)['login'];
	
	if ($email) {
      $hashed_pw = password_hash($password, PASSWORD_DEFAULT);
      $sql = "UPDATE accounts SET password='$hashed_pw' WHERE login='$email'";
      $results = mysqli_query($db, $sql);
      header('location: index.php');
    }
  }
}
?>
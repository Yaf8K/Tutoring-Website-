



<!DOCTYPE html>



<html lang="en">



<head>

<title>Concord University Tutor Website</title>



<!-- begin bootstrap stuffs -->

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css"

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- end bootstrap stuffs -->

</head>



<body>

<center>
<!--grab main logo-->
<img src="logo.png" width="50%" height="50%">

</center>
	<!--use the login-form style for the form-->
	<div class="login-form">

		

		<!--when user presses the button, they get directed to this script-->

		<form action="login.php" method="post">



			<h2 class="text-center">Concord University</h2>

			<h3 class="text-center">Tutor Services</h3>

			

			<!--User's Email Address-->

			<div class="form-group">

				<input type="email" class="form-control" placeholder="Email" required="required" id="emailaddress" name="emailaddress">

			</div>



			<!--User's Password-->

			<div class="form-group">

				<input type="password" class="form-control" placeholder="Password" required="required id="password name="password"">

			</div>



			<!--Login Button-->

			<div class="form-group">

				<button type="submit" class="btn btn-primary btn-block" id="submit" name="submit">Log in</button>

			</div>



			<!--Remember Me Checkbox-->

			<div class="clearfix">

				<label class="pull-left checkbox-inline"><input type="checkbox" id="rememberme" name="rememberme"> Remember me</label>

				<!--Forgot Password Link-->

				<a href="/resetpw" class="pull-right">Forgot Password?</a>

			</div>        

			<br>

			

			<!--Create an Account Link-->

			<p class="text-center"><a href="http://concordtutors.tk/createaccount/">Create an Account</a></p>

		</form>



	</div>
<!--our footer-->
<div class="footer"><strong>Copyright &copy; 2020 </strong></div>

</body>

</html>                                		                            


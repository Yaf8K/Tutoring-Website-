<!--script to redirect users to the login page if they aren't logged in.-->
<?php
    session_start();

    if(!isset($_SESSION['loggedin'])) 
	{
        header("Location: ../index.html");
    }
?>
<!DOCTYPE html>

<html lang="en">

<head>
<title> Request Tutor Session </title>

<!-- begin bootstrap stuffs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css'>
<link rel="stylesheet" href='/viewschedule/style1.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js'></script>
<script  src="http://concordtutors.tk/navscript.js"></script>
<!-- end bootstrap stuffs -->
</head>

<body>
<!--begin navbar-->
<nav class="navbar navbar-light main-nav">
  <div class="container">
    <ul class="nav navbar-nav">
	  <!--current-->
      <li class="nav-item"><a class="nav-link" href="http://concordtutors.tk/home/">Home</a></li>
	  <!--current-->
      <li class="nav-item" data-target="#schedules"><a class="nav-link">Schedules</a></li>
      <li class="nav-item"><a class="nav-link" href="http://concordtutors.tk/home/viewtutors.php">Tutors</a></li>
    </ul>
  </div>
</nav>

<!--Schedules Sub Menu-->
<nav class="navbar navbar-light sub-nav">
  <div class="container">
    <ul class="nav navbar-nav" id="schedules">
      <li class="nav-item"><a class="nav-link" href="http://concordtutors.tk/viewschedule/">Tutor Schedule</a></li>
	  <li class="nav-item"><a class="nav-link" href="http://concordtutors.tk/viewschedule/inclement.php">Inclement Weather Schedule</a></li>
	  <li class="nav-item"><a class="nav-link" href="http://concordtutors.tk/viewschedule/special.php">Special Events Schedule</a></li>
    </ul>
	<!--
    <ul class="nav navbar-nav" id="auctions">
      <li class="nav-item"><a class="nav-link" href="#/current-auctions">current auctions</a></li>
      <li class="nav-item"><a class="nav-link" href="#/auctioneers">auctioneers</a></li>
      <li class="nav-item"><a class="nav-link" href="#/featured-lots">featured lots</a></li>
    </ul>
	-->
  </div>
</nav>
<!--end navbar-->
<center>
<!--grab main logo-->
<img src="/logo.png" width="50%" height="50%">
</center>
<!--reuse same form class because too lazy to make new one-->
<div class="create-account-form">
		<!--when the user presses the button, it runs this script-->
		<form action="/viewschedule/request.php" method="post">

			<!--begin content of form-->
			<h2 class="text-center">Request a Session</h2>
			<h6 class="text-center">*Tutors are not required to accept session requests</h6>
			<!--drop down box to select tutor-->
			<div class="form-group">
			<label>Select Tutor: </label>
			<select name="myTutor">
               <option value = "Duy">Duy Le</option>
               <option value = "Tyler">Tyler Miller</option>
               <option value = "Brianna">Brianna Cochran</option>
               <option value = "Diego">Diego Perez</option>
            </select>
			</div>
			<!--begin grabbing info about the user-->
			<div class="form-group">
				<input type="text" class="form-control" placeholder="First Name" required="required" id="firstname" name="firstname">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" placeholder="Last Name" required="required" id="lastname" name="lastname">
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Email Address" required="required" id="Email" name="email">
			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Courses to be Tutored"required" id="Courses" name="courses">
			</div>
			
			<div class="form-group">
				<textarea name="comments" id="comments" placeholder="Comments (please make sure to include a date and time that you want to meet! - Tutors will not get back to you if you do not include this information.)"></textarea>
			</div>
			<!--submit button-->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block" id="submit">Request a Session</button>
			</div>
		</form>
	</div>
	<!--our footer-->
<div class="footer"><strong>Copyright &copy; 2020  </strong></div>
</body>
</html>                                		                            
<!--script to redirect users to the login page if they aren't logged in.-->
<?php

    session_start();



    if(!isset($_SESSION['loggedin'])) 

	{
        header("Location: ../");

    }

?>
<!DOCTYPE html>
<html lang="en">
<!--grab all of the bootstrap and tutor table css and icon-->
<head>
	<title>Special Events Schedule </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js'></script>
	<script  src="http://concordtutors.tk/navscript.js"></script>
</head>
<body>
<!--begin navbar-->
<nav class="navbar navbar-light main-nav">
  <div class="container">
    <ul class="nav navbar-nav">
	  <!--current-->
      <li class="nav-item"><a class="nav-link" href="http://concordtutors.tk/home/">Home</a></li>
	  <!--current-->
      <li class="nav-item active" data-target="#schedules"><a class="nav-link">Schedules</a></li>
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
<!--grab the main logo-->
<img src="/logo.png" width="50%" height="50%">
</center>
<!--begin creating the massive table-->
	<div class="login-form">
			<font color="black"><h2 class="text-center">Special Events Schedule</h2>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Tutors</th>
								<th class="column100 column2" data-column="column2">Offered Courses</th>
								<th class="column100 column3" data-column="column3">Monday</th>
								<th class="column100 column4" data-column="column4">Tuesday</th>
								<th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Schedule</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"><a href="Duy.php">Duy Le</a></td>
								<td class="column100 column2" data-column="column2">CS151, MATH 101, 101C, 103, 103C, 104, 105 ,105C 253, </td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">11:00am-1:55pm</td>
								<td class="column100 column5" data-column="column5">1:15pm-1:55pm</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8"><a href="ScheduleSession.php">Schedule Session</a></td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1"><a href="Tyler.php">Tyler Miller</a></td>
								<td class="column100 column2" data-column="column2">CS151, MATH101, 101C, 103, 103C, 104, 105, 105C, 253, </td>
								<td class="column100 column3" data-column="column3">4:00pm-5:30pm</td>
								<td class="column100 column4" data-column="column4">8:45am-9:25am</td>
								<td class="column100 column5" data-column="column5">8:45am-9:25am</td>
								<td class="column100 column6" data-column="column6">4:00pm-5:30pm</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8"><a href="ScheduleSession.php">Schedule Session</a></td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1"><a href="Diego.php">Diego Perez</a></td>
								<td class="column100 column2" data-column="column2">CS151, MATH101, 101C, 103, 103C, 104, 253</td>
								<td class="column100 column3" data-column="column3">--</td>
								<td class="column100 column4" data-column="column4">9:30am - 10:55am</td>
								<td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:30am - 10:55am</td>
								<td class="column100 column7" data-column="column7">11:00am-11:40am</td>
								<td class="column100 column8" data-column="column8"><a href="ScheduleSession.php">Schedule Session</a></td>
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1"><a href="Brianna.php">Brianna Cochran</a></td>
								<td class="column100 column2" data-column="column2">CS151, MATH 101, 101C ,103 ,103C,104,105,105C,253</td>
								<td class="column100 column3" data-column="column3">8:45am-9:25am  11:00am-11:40am</td>
								<td class="column100 column4" data-column="column4">--</td>
								<td class="column100 column5" data-column="column5">8:45am-9:25am  11:00am-11:40am</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">8:45am-9:25am</td>
								<td class="column100 column8" data-column="column8"><a href="ScheduleSession.php">Schedule Session</a></td>
							</tr>
						</tbody>
					</table>
				</div>
	<!--grab other required materials for the table/animations-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<!--our copyright footer-->
	<div class="footer"><strong>Copyright &copy; 2020 </strong></div>
</body>
</html>


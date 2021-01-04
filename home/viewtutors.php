<!--script to redirect users to the login page if they aren't logged in.-->

<?php

    session_start();



    if(!isset($_SESSION['loggedin'])) 

	{

        header("Location: ../");

    }

?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js'></script>
<script  src="http://concordtutors.tk/navscript.js"></script>




</head>

<body>

<!-- -->


<!--begin navbar-->
<nav class="navbar navbar-light main-nav">
  <div class="container">
    <ul class="nav navbar-nav">
	  <!--current-->
      <li class="nav-item"><a class="nav-link" href="http://concordtutors.tk/home/">Home</a></li>
	  <!--current-->
      <li class="nav-item" data-target="#schedules"><a class="nav-link">Schedules</a></li>
      <li class="nav-item active"><a class="nav-link" href="http://concordtutors.tk/home/viewtutors.php">Tutors</a></li>
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

<div>

		<!--grab main logo-->

		<center><img src="/logo.png" width="40%" height="30%"></center>

		<center>

<!-- simple text containing information-->
	<div class="pg">




  </div>

  </center>

  </center>

  <!--bulleted list containing links to each tutor's profile-->

<!-- -->
<div>
    <div class="pricing-wrapper clearfix">
        <!-- --->
        <h1 class="pricing-table-title">Available Tutors </h1>

  <!--Brianna Cochran SECTION -->

        <div class="pricing-table">
            <h3 class="pricing-title"><a href="http://concordtutors.tk/viewschedule/Brianna.php">Brianna Cochran</a></h3>
            <div class="price">Computer Science Mathematics</div>
            <!--Brianna Cochran -->
            <ul class="table-list">
              <li>Math 101, 101C</li>
              <li>Math 103, 103C</li>
              <li>Math 104      </li>
              <li>Math 105, 105C</li>
              <li>Math 253</li>
              <li>CS   151 </li>
          </ul>
            <!-- CHECK OUT HIS PAGE -->
            <div class="table-buy">
                
                <a href="http://concordtutors.tk/viewschedule/ScheduleSession.php" class="pricing-action">Schedule Session</a>
            </div>
        </div>



  <!-- Diego's PAGE -->

        <div class="pricing-table ">
            <h3 class="pricing-title"><a href="http://concordtutors.tk/viewschedule/Diego.php">Diego Perez</a></h3>
            <div class="price">Computer Science Mathematics</div>


            <!-- Classes to be tutored -->
            <ul class="table-list">
              <li>Math 101, 101C</li>
              <li>Math 103, 103C</li>
              <li>Math 104      </li>
			  <li>--------</li>
              <li>Math 253</li>
              <li>CS   151 </li>
          </ul>


            <!-- Schedule session -->
            <div class="table-buy">
                
                <a href="http://concordtutors.tk/viewschedule/ScheduleSession.php" class="pricing-action">Schedule Session</a>
            </div>
        </div>




        <!-- DUY LEE's PAGE -->

              <div class="pricing-table ">
                  <h3 class="pricing-title"><a href="http://concordtutors.tk/viewschedule/Duy.php">Due Lee</a></h3>
                  <div class="price">Computer Science Mathematics</div>


                    <!-- Classes Offered  -->
                  <ul class="table-list">
                      <li>Math 101, 101C</li>
                      <li>Math 103, 103C</li>
                      <li>Math 104      </li>
                      <li>Math 105, 105C</li>
                      <li>Math 253</li>
                      <li>CS   151 </li>
                  </ul>


                  <!-- Schedule session -->
                  <div class="table-buy">
                   
                      <a href="http://concordtutors.tk/viewschedule/ScheduleSession.php" class="pricing-action">Schedule Session</a>
                  </div>
              </div>

<!-- Tyler Miller -->

        <div class="pricing-table ">
            <h3 class="pricing-title"><a href="http://concordtutors.tk/viewschedule/Tyler.php">Tyler Miller</a></h3>
            <div class="price">Computer Science Mathematics</div>
            <!-- Classes Offered  -->
            <ul class="table-list">
              <li>Math 101, 101C</li>
              <li>Math 103, 103C</li>
              <li>Math 104      </li>
              <li>Math 105, 105C</li>
              <li>Math 253</li>
              <li>CS   151 </li>
          </ul>
            <!--Schedule a session -->
            <div class="table-buy">
                <a href="http://concordtutors.tk/viewschedule/ScheduleSession.php" class="pricing-action">Schedule Session</a>
            </div>
        </div>

    </div>
  </div>

    <div class="footer"><strong>Copyright 2020 &copy;</strong></div>
</body>

</html>

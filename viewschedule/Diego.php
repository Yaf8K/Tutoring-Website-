<!--script to redirect users to the login page if they aren't logged in.-->
<?php
    session_start();

    if(!isset($_SESSION['loggedin'])) 
	{
        header("Location: ../index.html");
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="/home/style.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js'></script>
<script  src="http://concordtutors.tk/navscript.js"></script>
<title>Diego Perez</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--inline css because too lazy to put in external css-->
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.title-center{

  margin: 1em 0 0.5em 0;
  color: Black;
  font-weight: normal;
  font-family: 'Ultra', sans-serif, ;   
  font-size: 36px;
  line-height: 42px;
  text-transform: uppercase;
  text-shadow: 0 2px white, 0 3px #777;
}
.column {
  float: center;
  width: 100%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.card {
  box-shadow: 2px 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  margin: auto;
  text-align: center;
 background: #f7f7f7;
  border-style: solid;
  border-color: Maroon;
  border-width: 5px;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: Maroon;
  font-size: 18px;
}
.footer 
  {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    height: 20px;
    background-color: #efefef;
    text-align: center;
  }

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: Maroon;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

body, html {
background-image: url("/bg.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


</style>
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
<!--end navbar--><center>
	<!--grab the main logo-->
  <img src="/logo.png" width="50%" height="50%">
</center>
	<!--begin content of page-->
<center><h1 class="title-center">Introducing Tutor Diego Perez</h1>
</center>
<br>

<div class="row">
  <div class="column">
    <div class="card">
	<!--get tutor's picture-->
      <img src="Diego.png" alt="diego" style="width:100%">
      <div class="container">
	  <!--finishing up the tutor's card-->
        <h1>Diego Perez</h1>

        <p class="title">Computer Science/Mathematics</p>

        <p>Some text that describes me lorem ipsum ipsum lorem.
        Some text that describes me lorem ipsum ipsum lorem
      Some text that describes me lorem ipsum ipsum lorem
    Some text that describes me lorem ipsum ipsum lorem</p>
   
        <p><button class="button">martiperezd13@mycu.concord.edu</button></p>
      </div>
    </div>
  </div>
<!--our footer-->
<div class="footer"><strong>Copyright 2020 &copy; </strong></div>
</body>
</html>

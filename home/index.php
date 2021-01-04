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

<head>
<title>Home Page</title>

<!-- begin bootstrap stuffs -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="/home/style.css">
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
      <li class="nav-item active"><a class="nav-link" href="http://concordtutors.tk/home/">Home</a></li>
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
<!--end navbar-->	<!--inline css, too lazy to externalize.-->
	<style type="text/css">
		.contact-info
		{
			margin-top: 20px;
			padding: 25px;
			background-color: rgba(0,0,0,.4);;
			height: 100%;
			width: 50%;
			margin-left: 10px;
			border-radius: 15px;
			color: white;


		}
		.slide-image 
		{
			width: 500px;
			height: 300px;
			overflow: hidden;
			/* margin-left: -500px; */
		}

		.slide-image div 
		{
			transition: all 3s;
		}

		.slide-image img 
		{
			display: inline-block;
		}
	</style>
	
<center>
	<!--grab main logo-->
<img src="/logo.png" width="50%" height="50%">
<!--begin content-->
<div class="contact-info">
			<center>
			Welcome to the Concord Tutor Website
			<br>
			"Come to Learn, Go to Serve"
			</center>
			<br>
			As the motto of our university declares, we have some brilliant students who are willing to help others who are having difficulty with their class work. 
			Our tutors are here to help any student in need, completely free of charge, with a variety of computer science and mathematics courses.  
			Tutors can help students during their office hours, which are listed on the website, and take personal tutor session requests if you can't make it to their office hours. 
			A full list of courses being tutored and the times at which they are tutored are listed on the view schedule page. 
			So what are you waiting for?  Come meet the current tutors!
		
	</div>
</center>
<!--middle of page content, inside of form to look nice-->
<div class="create-account-form">



		<form>

			<h2 class="text-center">Concord Tutoring Services</h2>
			<legend></legend>
			<center>
			<img src="concordt.png" width="50%" height="50%">
			</center>
			<br>
			<div class="form-group">
			<!--users click button, goes to view schedule-->
				<input type="button" onclick="window.location.href = '../viewschedule/';" class = "btn btn-primary btn-block" value="View Schedule"/>
			</div>


			<div class="form-group">
			<!--users click button, goes to tutor list-->
				<input type="button" onclick="window.location.href = 'viewtutors.php';" class = "btn btn-primary btn-block" value="View Tutors"/>
			</div>
			<br>
			<p align="center"><i>Computer Science & Mathematics Dept.</i></p>
		</form>


	</div>
	<!--more inline css because lazy-->
	<style type="text/css">
		
		#slidy-container 
		{ 
			width: 30%; overflow: hidden; margin: 0 auto;
			padding-top: 20px;
			padding-bottom: 5%;
		}
		#slide-image1
		{
			border-radius: 15px;
		}
	</style>

</div>
<center>
<!--begin html and javascript for the animated picture slider, referencing stock images-->
<div id="slidy-container">
  <figure id="slidy">
			<img src="images1.jpg" alt="images1.jpg" width="500px" height="300px" id="slide-image1">
			<img src="images2.jpg" alt="images2.jpg" width="500px" height="300px" id="slide-image2">
			<img src="images3.jpg" alt="images3.jpg" width="500px" height="300px" id="slide-image3">
			<img src="images4.jpg" alt="images4.jpg" width="500px" height="300px" id="slide-image4">
			<img src="images5.jpg" alt="images5.jpg" width="500px" height="300px" id="slide-image5">
			<img src="images6.jpg" alt="images6.jpg" width="500px" height="300px" id="slide-image6">
  </figure>
</div>
</center>
<script type="text/javascript">
var timeOnSlide = 3, 		
timeBetweenSlides = 1, 	
    animationstring = 'animation',
    animation = false,
    keyframeprefix = '',
    domPrefixes = 'Webkit Moz O Khtml'.split(' '), 
    pfx  = '',
    slidy = document.getElementById("slidy"); 
if (slidy.style.animationName !== undefined) { animation = true; } 

if( animation === false ) {
  for( var i = 0; i < domPrefixes.length; i++ ) {
    if( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
      pfx = domPrefixes[ i ];
      animationstring = pfx + 'Animation';
      keyframeprefix = '-' + pfx.toLowerCase() + '-';
      animation = true;
      break;
    }
  }
}

if( animation === false ) {
  
} else {
  var images = slidy.getElementsByTagName("img"),
      firstImg = images[0], 
      
      imgWrap = firstImg.cloneNode(false);  
  slidy.appendChild(imgWrap); 
  var imgCount = images.length, 
      totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), 
      slideRatio = (timeOnSlide / totalTime)*100, 
      moveRatio = (timeBetweenSlides / totalTime)*100, 
      basePercentage = 100/imgCount, 
      position = 0, 
      css = document.createElement("style"); 
  css.type = "text/css";
  css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; 
  css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }\n";
  css.innerHTML += "@"+keyframeprefix+"keyframes slidy {\n"; 
  for (i=0;i<(imgCount-1); i++) { 
    position+= slideRatio; 
    css.innerHTML += position+"% { left: -"+(i * 100)+"%; }\n";
    position += moveRatio; 
    css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }\n";
}
  css.innerHTML += "}\n";
  css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }\n"; 
document.body.appendChild(css); 
}

</script>
<!--our footer-->
<div class="footer"><strong>Copyright &copy; 2020 </strong></div>
</body>
</html>                                		                            
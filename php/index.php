<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Indian Railways </title>
	<link rel="shortcut icon" href="images/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/bootstrap.css" rel="stylesheet" >
	<link href="css/Default.css" rel="stylesheet" >	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<a href = "index.php">
            <div style="float:left;width:140px;">
				<img src="images/logo.jpg"/>
			</div>	
            </a>    
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php">INDIAN RAILWAYS</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a style="color:blue"class="brand" href="index.php" >HOME</a>
				<a style="color:blue"class="brand" href="train.php" >FIND TRAIN</a>
				<a style="color:blue"class="brand" href="reservation.php">RESERVATION</a>
				<a style="color:blue"class="brand" href="profile.php">PROFILE</a>
                <a style="color:blue"class="brand" href="display.php">HISTORY</a>  
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/6.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/7.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/8.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/9.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/10.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/11.png"style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b> Heart welcome to INDIAN RAILWAYS ONLINE WESITE</b></p>
				<br>
				<p><b>The Railway ministry has posted the rate list on his Twitter account while asking people to lodge a complaint if they are overcharged.</b></p><br>
				<p><b>The Comptroller and Auditor General (CAG) has asked the railways to revise passenger fares and curtail concessional passes to recover its operating cost in a phased manner.</b></p><br>
				<p><b>Railway issues new catering policy for better food.</b></p><br>
				<p><b>Passengers will now be involved in judging cleanliness level of popular trains including Rajdhani, Shatabdi and Duronto as well as major stations across the country.</b><p><br>
                <p><b> COVID REGULATIONS: Maintain at least a 1-metre distance between yourself and others to reduce your risk of infection when they cough, sneeze or speak. Maintain an even greater distance between yourself and others when indoors. The further away, the better.
Make wearing a mask a normal part of being around other people. The appropriate use, storage and cleaning or disposal are essential to make masks as effective as possible.</b><p><br>
			     </div>
			</marquee>
			</div>
		</div>
		
		<!-- Copyright -->
<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2020 all rights reserved.</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info">	All rights reserved by INDIAN GOVT. </p>
			</div>
		</div>
		</footer>	</div>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>
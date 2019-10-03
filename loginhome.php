<?php
// Start the session
session_start();
?>
<html>
<head>
  <title> My Profile </title>
  </head>
<body>
<?php
include("config.php");
	$conn = new mysqli($host, $username, $password, $dbname);
$login_user=$_SESSION['login_user'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="https://i.ibb.co/4JBpHSK/Capture.png" type="image/x-icon">
<title>Home page </title>
<link rel="stylesheet" type="text/css" href="theme.css">
<head>
<body class="home">
<ul class="top"> 	
<li class="top"><a class="top" href="logout.php"> SIGN OUT  </a> </li>
</ul> 
<div style="font-family: comic sans ms; font-style: italic; color: green; font-size: 40px; text-shadow: 1px 1px 2px #000000;">
<img src="https://i.ibb.co/4JBpHSK/Capture.png" alt="logo" border="0" height="70" width="65"> DietGuru </div>
<br>
<div style="font-family: comic sans ms; font-style: italic; color: green; font-size: 40px; text-shadow: 1px 1px 2px #000000;">
<p> <?php echo $login_user ?> </p> </div>
<div style="font-family: verdana; font-style: italic; color: #6B5B95; font-size: 26px; text-shadow: 1px 1px 2px #ffafff; "> <strong> Your One Stop Destination To A Healthy Lifestyle </strong> </div>
<br>
<ul class="mid">
	<li class="mid"> <a class="mid" href="loginhome.php" style="border-style: solid; border-width: 1px 1px 1px 1px; background-color: #ffffff; color:  #000000;"> Home </a> </li>
	<li class="mid"> <a class="mid" href="About.html"> About </a> </li>
	<li class="mid"> <a class="mid" href="Help.html">  Help </a> </li>
	<li class="mid"> <a class="mid" href="contactus.html"> Contact Us </a> </li>
	<li class="mid"> <a class="mid" href="myprofile.php"> My Profile </a> </li>
</ul>
<br>
<br>
<br>
<br>
	 <iframe  align="left" width="580" height="375" src="https://www.youtube.com/embed/7UDx1RF9Oho" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="bodydiv">
	WELCOME TO DIETGURU <br>
</div>
<br>
<br>
	<p>	Enter your details  </p> <br><br>
	<p>	Choose your diet plan  </p> <br> <br>
	<p> Get your weekly/daily diet chart </p> <br> <br>
	<p>	Get Reminders </p> <br> <br>
	<p> Stay Healthy!	</p> <br> <br>
	<section>
</body>
</html>
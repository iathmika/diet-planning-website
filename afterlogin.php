<!DOCTYPE html>
<html>
<head>
<style>

.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
	margin-left: 1250px;
	font-family: verdana;
}

.dropdown {
    position: relative;
    display: inline-block;
	
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #66b2b2;
    min-width: 150px;
    z-index: 1;
	margin-left: 1250px;
}

.dropdown-content a {
    color: #004c4c;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	
	font-family:georgia,garamond,serif;font-size:16px;font-style:italic;
}

.dropdown-content a:hover {background-color: white;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: grey;}

</style>
<link rel="stylesheet" type="text/css" href="theme.css">
</head>

<div class="dropdown">
<button class="dropbtn"><?php echo $_POST["name"]; ?></button>
<div class="dropdown-content">

<a href="myprofile.html"  ><strong>My Profile</strong></a>
<a href="mydietplan.html" ><strong>My Diet Plans</strong></a>
<a href=""  ><strong>Logout<strong></a>


</div>
</div>
<link rel="stylesheet" type="text/css" href="theme.css">
<head>
<body class="home"> 
<img src="https://i.ibb.co/cXqhQDx/logo.jpg" alt="logo" border="0" height="80" width="250">

<br><br>

<div style="font-family: verdana; font-style: italic; color: white; font-size: 22px; text-shadow: 2px 2px 4px #000000; "> <strong> Your One Stop Destination To A Healthy Lifestyle </strong> </div>
<br>

<ul class="mid">
		<li class="mid"> <a class="mid" href="Homepage.html"> Home </a> </li>
	<li class="mid"> <a class="mid" href="About.html"> About </a> </li>
	<li class="mid"> <a class="mid" href="Help.html">  Help </a> </li>
	<li class="mid"> <a class="mid" href="contactus.html"> Contact Us </a> </li>
	
	
</ul>
<br>
<br>
<br>
<br>
</body>
</html>
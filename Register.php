<?php
include("config.php");
session_start();
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
#echo "Connected successfully";

$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$country = $_POST["country"];
$Phone = $_POST["Phone"];
$username = $_POST["username"];
$Password = $_POST["Password"];
$Security = $_POST["Security"];
$Answer = $_POST["Answer"];
$sql = "INSERT INTO userdetails VALUES ('$FirstName','$LastName','$Email','$country','$Phone','$username','$Password','$Security','$Answer')";
if ($conn->query($sql) === TRUE) {
    echo "Sign in successful!";
	header("location: loginhome.php");
} else {
	echo "Error: " . $conn->error;
}
?>
<html>
<head>
<title> Sign up </title>
<meta http-equiv="refresh" content="1; url=Homepage.html">
<link rel="stylesheet" type="text/css" href="theme.css">
<head>
<br>
</body>
</html>

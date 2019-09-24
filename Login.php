<!DOCTYPE html>
<html>
<head>
<title> Sign up </title>
<!--<meta http-equiv="refresh" content="1; url=Userhome.php">-->
<link rel="stylesheet" type="text/css" href="theme.css">
<head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DietGuru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
#echo "Connected successfully";
$un = $_POST["Username"];
$pw = $_POST["Password"];
$sql = "SELECT * FROM user_details WHERE username='$un' and Password = '$pw'";
$result = mysqli_query($conn,$sql);
	$count  = mysqli_num_rows($result);
	if($count===0) {
		echo 'Wrong';
	} else {
		echo 'Right';
    }
    mysqli_close($conn);
?>
<br>

</body>
</html>
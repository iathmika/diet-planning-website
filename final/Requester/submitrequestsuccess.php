<?php
define('TITLE', 'Success');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 
 $bmi = $row['bmi'];
  if ($bmi <= 18.5)
  { $output = 'UNDERWEIGHT'; } 
  else if ($bmi > 18.5 AND $bmi<=24.9 )
   { $output = 'NORMAL WEIGHT'; } 
   else if ($bmi > 24.9 AND $bmi<=29.9) 
   { $output = 'OVERWEIGHT'; }
    else if ($bmi > 30.0) { $output = 'OBESE'; }

 
 echo "<div class='ml-5 mt-5'>
 <table class='table'>
  <tbody>
   <tr>
     <th>Request ID</th>
     <td>".$row['request_id']."</td>
   </tr>
   <tr>
     <th>Name</th>
     <td>".$row['requester_name']."</td>
   </tr>
   <tr>
   <th>Email ID</th>
   <td>".$row['requester_email']."</td>
  </tr>
  <tr>
   <th>BMI</th>
   <td>".$row['bmi']."</td>
  </tr>
  
  <tr>
  <th>You are</th>
  <td>  $output </td>
   </tr>
   





   <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form></td>
  </tr>
  </tbody>
 </table> </div>
 ";


} else {
  echo "Failed";
}
?>


<?php
include('includes/footer.php'); 
$conn->close();
?>
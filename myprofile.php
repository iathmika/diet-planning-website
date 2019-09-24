<html>
<head>
  <title> myprofile </title>
  </head>
<body>
  <?php

$id=$_SESSION['SESS_MEMBER_ID'];
$result3 = mysql_query("SELECT * FROM user_details where username='$_POST[username]'");
while($row3 = mysql_fetch_array($result3))
{ 
$fname=$row3['FirstName'];
$lname=$row3['LastName'];
$email=$row3['Email'];
$country=$row3['country'];
$phone=$row3['Phone'];
}

?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="logout.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Phone:</div></td>
    <td valign="top"><?php echo $phone ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Country:</div></td>
    <td valign="top"><?php echo $country ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email: </div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
</table>

</body>
</html>
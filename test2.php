<?php
$email = $_GET['email'];
//echo $email;
include_once('config.php');
$result = mysqli_query ($conn , "SELECT * FROM ajaxdb.user WHERE user_email = '".$email."'");
$rows = mysqli_num_rows($result);
//echo $rows;
if($rows > 0 )
{
	echo "<mark><font color='#FF0000'>Email not available</font></mark>";

}
else {
	echo "<mark><font color='#00CC00'>Email Available</font></mark>";

	} ?>




					
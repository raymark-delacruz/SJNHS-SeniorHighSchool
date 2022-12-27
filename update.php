<?php
session_start();
session_destroy();
include("config.php");
$name=$_POST['name'];
$password=$_POST['password'];
 mysqli_query($conn, "UPDATE user
SET user_name = '$name', user_password = '$password', user_status = '0'
WHERE user_email = '$_SESSION[email]';");
	echo "<script language='javascript'>window.alert('Success! Your account is now updated!');
		window.location='index.php';</script>";
?>
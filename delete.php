<?php
session_start();
session_destroy();
include("config.php");
 mysqli_query($conn, "DELETE FROM `user` WHERE user_email = '$_SESSION[email]';");
	echo "<script language='javascript'>window.alert('Your Account have been deleted!');
		window.location='index.php';</script>";
?>
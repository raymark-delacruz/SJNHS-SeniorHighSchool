<?php
session_start();
include_once('config.php');
$id       = $_POST['id'];
$name     = $_POST['name'];
$email    = $_POST['email'];
$country  = $_POST['country'];
$password = $_POST['password'];
	$result = mysqli_query($conn , "select * from user where user_id='$id'");
		if(mysqli_num_rows($result)>0){
			$query = mysqli_query($conn, "UPDATE user SET user_name = '$name',  user_email = '$email', user_country = '$country', user_password = '$password' WHERE user_id = '$id';");
					echo "<script language='javascript'>window.alert('The Account is now updated!');
		window.location='users.php';</script>";
						}
						else {
							 echo "<script language='javascript'>window.alert('Failed!');
		window.location='users.php';</script>";
							}	

 ?>
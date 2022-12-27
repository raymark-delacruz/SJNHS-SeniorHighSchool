<?php
session_start();
include_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
	$result = mysqli_query($conn , "select * from user where user_email='$email'");
		if(mysqli_num_rows($result)>0){
			$query = mysqli_query($conn,"UPDATE user
				SET user_password = '$password'
				WHERE user_email = '$email';");
					echo "<script language='javascript'>window.alert('Success! Your account is now updated. You can now login.');
					window.location='index.php';</script>";
						}
						else {
							echo "<script language='javascript'>window.alert('Wrong Email!');
	window.location='index.php';</script>";
							}	

 ?>
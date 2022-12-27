<?php
session_start();
include_once('config.php');
$id = $_POST['id'];
	$result = mysqli_query($conn , "select * from user where user_id='$id'");
		if(mysqli_num_rows($result)>0){
			$query = mysqli_query($conn, "DELETE FROM `user` WHERE user_id = '$id';");
					 echo "<script language='javascript'>window.alert('An Account have been deleted!');
		window.location='users.php';</script>";
						}
						else {
							 echo "<script language='javascript'>window.alert('Failed!');
		window.location='users.php';</script>";
							}	

 ?>
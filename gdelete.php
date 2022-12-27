<?php
session_start();
include_once('config.php');
$id = $_POST['id'];
	$result = mysqli_query($conn , "select * from grade where id='$id'");
		if(mysqli_num_rows($result)>=1){
		$query = mysqli_query($conn, "DELETE FROM `grade` WHERE id = '$id';");
		 echo "<script language='javascript'>window.alert('Grade have been deleted!');
		window.location='grades.php';</script>";
						}	

 ?>
<?php
session_start();
include_once('pconfig.php');
$id = $_POST['id'];
	$result = mysqli_query($conn , "select * from posts where id='$id'");
		if(mysqli_num_rows($result)>0){
			$query = mysqli_query($conn, "DELETE FROM `posts` WHERE id = '$id';");
					 echo "<script language='javascript'>window.alert('The post have been deleted!');
		window.location='lobby.php';</script>";
						}
						else {
							 echo "<script language='javascript'>window.alert('Failed! Wrong ID');
		window.location='lobby.php';</script>";
							}	

 ?>
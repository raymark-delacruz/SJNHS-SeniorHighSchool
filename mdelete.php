<?php
session_start();
include_once('mconfig.php');
$id = $_POST['id'];
	$result = mysqli_query($conn , "select * from message where id='$id'");
		if(mysqli_num_rows($result)>0){
			$query = mysqli_query($conn, "DELETE FROM `message` WHERE id = '$id';");
					 echo "<script language='javascript'>window.alert('The message have been deleted!');
		window.location='mymessage.php';</script>";
						}
						else {
							 echo "<script language='javascript'>window.alert('Failed! Wrong ID');
		window.location='mymessage.php';</script>";
							}	

 ?>
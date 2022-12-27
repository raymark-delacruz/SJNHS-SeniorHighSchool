<?php
session_start();
include_once('config.php');
$id   = $_POST['id'];
$name = $_POST['name'];
$rws  = $_POST['rws'];
$pap  = $_POST['pap'];
$ridl = $_POST['ridl'];
$stat = $_POST['stat'];
$pd   = $_POST['pd'];
$ps   = $_POST['ps'];
$net  = $_POST['net'];
$pe   = $_POST['pe'];
	$result = mysqli_query($conn , "select * from grade where id='$id'");
		if(mysqli_num_rows($result)>0){
			$query = mysqli_query($conn, "UPDATE grade SET name = '$name',  rws = '$rws', pagbasa = '$pap', research = '$ridl', stat = '$stat', perdev = '$pd', physics = '$ps', net = '$net', pe = '$pe' WHERE id = '$id';");
			echo "<script language='javascript'>window.alert('Success! Grades are now updated');
		window.location='grades.php';</script>";
						}
 ?>
<?php
session_start();
include_once('config.php');
$result= mysqli_query($conn , "SELECT * FROM chat");
while ($row = mysqli_fetch_assoc($result)){
	if($row['chat_person_name'] == 'Raymark' and "$_SESSION[name]" ){
		echo "<strong><font color='red'>Admin:</font></strong> ";
		echo $row['chat_value']."<font color='green'> - &nbsp;(" ;
		echo $row['chat_time'].")</font><br>";
	}
	elseif($row['chat_person_name'] == "$_SESSION[name]" ){
		echo "<strong><font color='blue'>You:</font></strong> ";
		echo $row['chat_value']."<font color='green'> - &nbsp;(" ;
		echo $row['chat_time'].")</font><br>";
	}
	else{
		echo "<font color='blue'>$row[chat_person_name]:</font> ";
		echo $row['chat_value']."<font color='green'> - &nbsp;(" ;
		echo $row['chat_time'].")</font><br>";
	}
}
if(mysqli_num_rows($result)>99){
	$query = mysqli_query($conn,"DELETE from chat");
	echo "<center><font size='5px' color='red'>Limit Reached</font></center>";
	}
	elseif(mysqli_num_rows($result)<1){
	echo "<center><br / ><br / ><br / ><br / ><br / ><br / ><font size='3px' color='blue'>No messages yet.</font></center>";
	}
?>
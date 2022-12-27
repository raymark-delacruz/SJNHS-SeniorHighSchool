<?php
include_once('config.php');
$result= mysqli_query($conn , "SELECT * FROM user");
while ($row = mysqli_fetch_assoc($result)){
	if($row['user_status'] == 1 ){
		if($row['user_role'] == 'admin' ){
		echo " <span style='padding-left:3px;'</span><font color='#009900'> <font size='1px'><i class='fa fa-star'></i></font> " .$row['user_name'].""."</font><br>";
		}
		elseif($row['user_role'] == 'teacher' ){
		echo " <span style='padding-left:3px;'</span><font color='#009900'> <font size='1px'><i class='fa fa-square'></i></font> " .$row['user_name'].""."</font><br>";}
		else{
			echo " <span style='padding-left:3px;'</span><font color='#009900'> <font size='1px'><i class='fa fa-circle'></i></font> " .$row['user_name'].""."</font><br>";}
}
	elseif($row['user_status'] == 0 ){
		if($row['user_role'] == 'admin' ){
		echo " <span style='padding-left:3px;'</span><font color='#FF0000'> <font size='1px'><i class='fa fa-star'></i></font> " .$row['user_name'].""."</font><br>";
		}
		elseif($row['user_role'] == 'teacher' ){
		echo " <span style='padding-left:3px;'</span><font color='#FF0000'> <font size='1px'><i class='fa fa-square'></i></font> " .$row['user_name'].""."</font><br>";}
		else{
			echo " <span style='padding-left:3px;'</span><font color='#FF0000'> <font size='1px'><i class='fa fa-circle'></i></font> " .$row['user_name'].""."</font><br>";}
	}
}

?>
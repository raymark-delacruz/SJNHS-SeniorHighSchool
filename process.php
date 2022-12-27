<?php
session_start();
include_once('config.php');
$email = $_POST['email'];
$password = $_POST['password'];
					
					$result = mysqli_query($conn , "select * from user where user_email='$email' and user_password='$password'");
					while($row = mysqli_fetch_assoc($result))
					{
						$name = $row['user_name'];
						$role = $row['user_role'];
						}
					
					
					if(mysqli_num_rows($result)>0){
						echo "success";
						$_SESSION['email'] = $email;
						$_SESSION['name'] = $name;
						$_SESSION['role'] = $role;
						
						$query = mysqli_query($conn,"UPDATE user
SET user_status = '1'
WHERE user_email = '$email';");
						
						header('location: index.php');
						
						}
						else {
							echo "<script language='javascript'>window.alert('Wrong username or password');
	window.location='index.php';</script>";
							}	
	

 ?>
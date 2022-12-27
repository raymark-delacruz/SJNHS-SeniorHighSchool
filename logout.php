<?php
session_start();
 ?>
 <?php						
if (isset($_GET['logout'])){
	$result = mysqli_query($conn, "UPDATE user
SET user_status = '0'
WHERE user_email = '$_SESSION[email]';");
session_destroy();
	echo "<script language='javascript'>window.alert('<input type='submit' name='logout'>Logged Out</input>');
		window.location='index.php';</script>";
	}

?>
<form action="">
<input type="submit" name="logout" value="logout">
</form>
<?php
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		//session_destroy();
		header('location: index.php');
		}

 ?>
 
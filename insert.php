<?php
$name     = $_POST['name'];
$email    = $_POST['email'];
$country  = $_POST['country'];
$password = $_POST['pass1'];
$role     = $_POST['role'];

include_once('config.php');
$result = mysqli_query($conn, "INSERT INTO `ajaxdb`.`user`
            (`user_id`,
             `user_name`,
             `user_email`,
             `user_password`,
             `user_country`,
             `user_status`,
             `user_role`)
VALUES (NULL,
        '$name',
        '$email',
        '$password',
        '$country',
        '0',
		'$role');");
if ($result) {
    echo "<script language='javascript'>window.alert('Success!');
	window.location='index.php';</script>";
} else {
    echo "<script language='javascript'>window.alert('Failed! Email already exist!');
	window.location='index.php';</script>";
}
?>
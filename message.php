<?php
$name     = $_POST['name'];
$email    = $_POST['email'];
$subject  = $_POST['subject'];
$message = $_POST['message'];

include_once('mconfig.php');
$result = mysqli_query($conn, "INSERT INTO `messagedb`.`message`
            (`name`,
             `email`,
             `subject`,
             `message`)
VALUES ('$name',
        '$email',
        '$subject',
        '$message');");
if ($result) {
    echo "<script language='javascript'>window.alert('Message Recieved!');
	window.location='index.php';</script>";
} else {
    echo "<script language='javascript'>window.alert('Failed! Something went wrong!');
	window.location='index.php';</script>";
}

?>
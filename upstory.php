<?php
$name     = $_POST['name'];
$story    = $_POST['story'];

include_once('pconfig.php');
$result = mysqli_query($conn, "INSERT INTO `postdb`.`posts`
            (`id`,
             `name`,
             `story`)
VALUES ('NULL',
        '$name',
        '$story');");
if ($result) {
    echo "<script language='javascript'>window.alert('Your story is now uploaded!');
	window.location='lobby.php';</script>";
} else {
    echo "<script language='javascript'>window.alert('Failed! Something went wrong!');
	window.location='lobby.php';</script>";
}

?>
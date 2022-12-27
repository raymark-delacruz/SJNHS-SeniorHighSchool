<?php
$name     = $_POST['name'];
$rws    = $_POST['rws'];
$pap  = $_POST['pap'];
$ridl  = $_POST['ridl'];
$stat  = $_POST['stat'];
$pd  = $_POST['pd'];
$ps  = $_POST['ps'];
$net  = $_POST['net'];
$pe  = $_POST['pe'];

include_once('config.php');
$result = mysqli_query($conn, "INSERT INTO `ajaxdb`.`grade`
            (`id`,
             `name`,
             `rws`,
             `pagbasa`,
             `research`,
             `stat`,
             `perdev`,
             `physics`,
             `net`,
             `pe`)
VALUES ('NULL',
        '$name',
        '$rws',
        '$pap',
        '$ridl',
        '$stat',
        '$pd',
        '$ps',
        '$net',
        '$pe');");
if ($result) {
    echo "<script language='javascript'>window.alert('Success!');
	window.location='grades.php';</script>";
} else {
    echo "<script language='javascript'>window.alert('Failed! Something went wrong!');
	window.location='grades.php';</script>";
}

?>
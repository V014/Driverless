<?php
session_start();
include ('connection.php');
include ('utils.php');

$id = $_SESSION['id'];
$message = esctxt($connection, $_SESSION['message']);
date_default_timezone_set("Africa/Blantyre");
$date = date("Y-m-d");
$time = date("h:i:s");

$query = "INSERT INTO `feedback` VALUES(NULL, $id, '$message', '$date', '$time')";
$result = $connection -> query($query);
if($result) {
    $_SESSION['reply'] = "sent";
    redirect_to('../../contact-us.php');
} else {
    $_SESSION['reply'] = "error";
    redirect_to('../../contact-us.php');
}
?>
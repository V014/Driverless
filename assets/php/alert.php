<?php
$id = $_SESSION['id'];
date_default_timezone_set("Africa/Blantyre");
$date = date("Y-m-d");
$time = date("h:i:s");
if (isset($_SESSION['locked'])) {
	$query = "INSERT INTO `alert` VALUES(NULL, $id, 'login attempt limit reached', '$date', '$time')";
	$result = $connection -> fetch_assoc();
}
?>
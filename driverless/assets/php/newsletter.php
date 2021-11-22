<?php
session_start();
$id = $_SESSION['id'];
include ('connection.php');
include('utils.php');
$date = date("Y-m-d");

if (isset($_SESSION['id'])) {
	# check to see if customer is already subscribed
	$query = "SELECT * FROM `newsletter` WHERE `customer_id` = $id";
	$result = $connection -> query($query);
	$row = $result -> fetch_assoc();

	if (isset($_POST['signup'])) {
		if($row) {
		$_SESSION['reply'] = "listed";
		redirect_to("../../newsletter.php");
		} else {
			$query2 = "INSERT INTO `newsletter` VALUES(NULL, $id, '$date')";
			$result2 = $connection -> query($query2);
			if($result2) {
				$_SESSION['reply'] = "subscribed";
				redirect_to("../../newsletter.php");
			} else {
				$_SESSION['reply'] = "error";
				redirect_to("../../newsletter.php");
			}
		}
	}

	if (isset($_POST['cancel'])) {
		if($row) {
		$query2 = "DELETE FROM `newsletter` WHERE `customer_id` = $id";
		$result2 = $connection -> query($query2);
			if($result2) {
				$_SESSION['reply'] = "unsubscribed";
				redirect_to("../../newsletter.php");
			} else {
				$_SESSION['reply'] = "error";
				redirect_to("../../newsletter.php");
			}
		} else {
			$_SESSION['reply'] = "not listed";
			redirect_to("../../newsletter.php");
		}
	}
} else {
	redirect_to("../../login.php");
}
?>
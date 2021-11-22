<?php
session_start();
include ('connection.php');
include ('utils.php');
// if the button register is pressed, insert user into database
if(isset($_POST['signup'])){
	// esctxt is a function being called from the utils.php file to escape sql injection.
	$fullname = esctxt($connection, $_POST['fullname']);
	$email = esctxt($connection, $_POST['email']);
	$dob = esctxt($connection, $_POST['dob']);
	$username = esctxt($connection, $_POST['username']);
	$password = esctxt($connection, $_POST['password']);
	$address = esctxt($connection, $_POST['address']);
	$postcode = esctxt($connection, $_POST['postcode']);
	$date = date("Y-m-d");
	// check if any of the details are identical
	$query = "SELECT `username`, `password` FROM `customer` WHERE `username` = '$username' And `password` = '$password'";
	$result = $connection -> query($query);
	$row = $result -> fetch_assoc();
	$firstuser = $row['username'];
	$firstpass = $row['password'];
	// if there is a similar email in the db tell the user
	if($firstuser === $username && $firstpass === $password){
		$_SESSION['reply'] = "used";
		redirect_to("../../registration.php"); // redirect user to home page
		exit();
	}else{
		// insert the user cridentials
		$query2 = "INSERT INTO `customer` VALUES(NULL, '$fullname', '$username', '$password', '$email', '$dob', '$address', '$postcode', '$date')";
		$results2 = $connection -> query($query2);

		$query3 = "SELECT `id` FROM `customer` WHERE `username` = '$username' AND `password` = '$password'";
		$results3 = $connection -> query($query3);
		$row = $results3 -> fetch_assoc();
		$id = $row['id'];
		if($results2){
			$_SESSION['id'] = $id;
			$_SESSION['reply'] = "logged";
			redirect_to("../../home.php"); // redirect to login if invalid
			exit();
		}else{
			$_SESSION['reply'] = "error";
			redirect_to("../../registration.php"); // redirect to login if invalid
			exit();
		}
	}
}
?>
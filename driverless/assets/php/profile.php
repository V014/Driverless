<?php
session_start();
$id = $_SESSION['id'];
include ('connection.php');
include('utils.php');
if(isset($_POST['update'])){
	
	$email = escTxt($connection, $_POST['email']);
	$password = escTxt($connection, $_POST['password']);
	$fullname = escTxt($connection, $_POST['fullname']);
	$dob = escTxt($connection, $_POST['dob']);
	$address = escTxt($connection, $_POST['address']);
	$postcode = escTxt($connection, $_POST['postcode']);
	$username = escTxt($connection, $_POST['username']);
 
	// check if username and password are already in use
	$query = "SELECT `username` FROM `customer` WHERE `id` = '$id'";
	$result = $connection -> query($query);
	$row = $result -> fetch_assoc();
	$currentuser = $row['username'];

	// if new username is identical to the actual username
	if($currentuser === $username){
		// update other details except username
		$query2 = "UPDATE `customer` SET `fullname` = '$fullname', `email` = '$email', `postcode` = '$postcode', `dob` = '$dob', `address` = '$address', `password` = '$password' WHERE `id` = $id";
		$result2 = $connection -> query($query2);
		$_SESSION['reply'] = "updated";
		redirect_to("../../profile.php");
		exit();
	// if username is not idential
	}else{
		// scan customer table for identiacl username again
		$query3 = "SELECT `username` FROM `customer` WHERE `username` = '$username'";
		$result3 = $connection -> query($query3);
		$row = $result3 -> fetch_assoc();
		$identical = $row['username'];
		// if a match has been found
		if($identical === $username){
			$_SESSION['reply'] = "used";
			redirect_to("../../profile.php"); // redirect to profile page
			exit();
		}else{
			// if username isn't identical to the actual, then update
			$query3 = "UPDATE `customer` SET `fullname` = '$fullname', `email` = '$email', `postcode` = '$postcode', `dob` = '$dob', `address` = '$address', `username` = '$username', `password` = '$password' WHERE `id` = $id";
			$result3 = $connection -> query($query3);
			$_SESSION['reply'] = "updated";
			redirect_to("../../profile.php");
			exit();
		}
	}
}
?>
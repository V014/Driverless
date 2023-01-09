<?php
session_start();
include('connection.php');
include('utils.php'); 
if(isset($_POST['login'])){
	$username = esctxt($connection, $_POST['username']);
	$password = esctxt($connection, $_POST['password']);
	// query the user cridentials
	$query = "SELECT `id` FROM customer WHERE `username` = '$username' And `password` = '$password'";
	$results = $connection -> query($query);
	$row = $results -> fetch_assoc();
	$id = $row['id'];
	// check to see if there is a valid result
	if($row){
		$_SESSION['id'] = $id;
		$_SESSION['reply'] = "logged";
		redirect_to("../../home.php"); // redirect to page if valid
		exit();
	}else{
		$_SESSION['reply'] = "error";
		redirect_to("../../login.php"); // redirect to login if invalid
		exit();
	}
}
?>
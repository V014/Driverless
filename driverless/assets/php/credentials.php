<?php
if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	$query = "SELECT * FROM customer WHERE `id` = $id";
    $result = $connection -> query($query);
    $row = $result -> fetch_assoc();
    $address = $row['address'];
    $dob = $row['dob'];
    $email = $row['email'];
    $fullname = $row['fullname'];
    $password = $row['password'];
    $postcode = $row['postcode'];
    $username = $row['username'];
} else {
    $_SESSION['login'];
    redirect_to("/driverless/login.php");
}
?>
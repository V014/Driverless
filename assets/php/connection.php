<?php
// connection to database
$host = "localhost";
$user = "root";
$pass = "";
$db = "driverless";
$connection = mysqli_connect($host, $user, $pass, $db) 
or die ("Experiencing a problem while connecting to the database, please notify the admin");
?>
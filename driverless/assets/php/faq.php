<?php
include ('connection.php');
include ('utils.php');

$query = "SELECT * FROM `faq`";
$result = $connection -> query($query);

?>
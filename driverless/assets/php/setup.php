<?php
session_start();
include ('utils.php');
if(isset($_POST['setup'])){
	// create a connection to the database
	$host = "localhost";
	$username = "root";
	$password = "";
	$connection = mysqli_connect($host, $username, $password);

	// if failed, end process
	if(!$connection){
		die("system failed to deploy");
	} else {
		$query1 = "CREATE DATABASE IF NOT EXISTS `driverless`";
		$result1 = mysqli_query($connection, $query1);

		if($result1){
			$connection = mysqli_connect($host, $username, $password, 'driverless') 
			or die ("Experiencing a problem while connecting to the database, please notify the admin");

			$query2 = "CREATE TABLE `customer` ( `id` INT(7) NOT NULL AUTO_INCREMENT , `fullname` VARCHAR(30) , `username` VARCHAR(30) , `password` TEXT NOT NULL , `email` VARCHAR(30) NOT NULL , `dob` DATE , `address` TEXT  , `postcode` VARCHAR(30) , `joined` DATE NOT NULL , PRIMARY KEY (`id`))";
			$result2 = $connection -> query($query2);

			$query3 = "CREATE TABLE `feedback` ( `id` INT(7) NOT NULL AUTO_INCREMENT , `customer_id` INT(7) NOT NULL , `message` TEXT NOT NULL , `date` DATE NOT NULL , `time` TIME NOT NULL , PRIMARY KEY (`id`) , FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`))";
			$result3 = $connection -> query($query3);

			$query4 = "CREATE TABLE `reply` ( `id` INT(7) NOT NULL AUTO_INCREMENT , `customer_id` INT(7) NOT NULL , `message` TEXT NOT NULL , `date` DATE NOT NULL , `time` TIME NOT NULL , PRIMARY KEY (`id`) , FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`))";
			$result4 = $connection -> query($query4);

			$query5 = "CREATE TABLE `newsletter` ( `id` INT(7) NOT NULL AUTO_INCREMENT , `customer_id` INT(7) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`) , FOREIGN KEY (`customer_id`) REFERENCES `customer`(`id`))"; 
			$result5 = $connection -> query($query5);

			$query6 = "CREATE TABLE `faq` ( `id` INT(7) NOT NULL AUTO_INCREMENT , `question` TEXT NOT NULL , `answer` TEXT NOT NULL , PRIMARY KEY (`id`))";
			$result6 = $connection -> query($query6);

			$query7 = "INSERT INTO `faq` (`id`, `question`, `answer`) VALUES (NULL, 'How do I check for electric charging stations?', 'Visit the brand of the vehicle you are interested in and navigate to power station distribution in my area.'), (NULL, 'How long does it take for a car to reach the UK?', 'Depending on weather conditions and the efficiency of the delivery team, usually a week or less.'), (NULL, 'Do I have to know how to drive to own an autonomous vehicle?', 'There should be at least one responsible person with a drivers license within the car.')";
			$result7 = $connection -> query($query7);

				if($result2 && $result3 && $result4 && $result5 && $result6 && $query7){
					$_SESSION['reply'] = "deployed";
					redirect_to("../../setup.php");
				} else {
					$_SESSION['reply'] = "gotoindex";
					redirect_to("../../setup.php");
				}
		}else {
			$_SESSION['reply'] = "error";
			redirect_to("../../setup.php");
		}
	}
}
?>
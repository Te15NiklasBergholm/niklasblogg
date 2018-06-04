<?php
$server = "localhost";
$user = "niklas";
$pass = "Te15";
$dbname = "n_blog";

try {
	$conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);					
} catch (Exception $e) {													
	echo $e->getMessage();													
}

?>

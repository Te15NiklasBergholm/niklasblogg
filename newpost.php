<?php
	require_once("dbconnection.php");
	$message = "";

	if(isset($_POST['title']) && isset($_POST['message'])) {

		$query = $conn->prepare("INSERT INTO artiklar(title, message) 
			VALUES (:title, :message)");
		
		try {
			$query->execute(array(
				"title" => $_POST['title'],
				"message" => $_POST['message']
			));
		} catch (Exception $e) {
					// Tycker vi skiter i alla exceptions helt ärligt, borde hanteras men...
		}									
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>New Posts</title>
</head>
<body>

<div class="navbar">
	<ul>
		<li><a href="posts.php">Posts</a></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="newpost.php">New</a></li>
	</ul>
</div>
<div>
	<div>
		<form action="newpost.php" method="post">
		Title: <input type="text" name="title"><br>
		Message: <input type="text" name="message"><br>
		<input type="submit" name="Save">
</form>
	</div>
</div>
<div>
	<div>
	<?php

	?>
	</div>
</div>


</body>
</html>
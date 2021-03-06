<?php
	require_once("dbconnection.php");
	$message = "";

	if(isset($_POST['title']) && isset($_POST['message'])) {

		$query = $conn->prepare("INSERT INTO artiklar(title, message) 
			VALUES (:title, :message)");
		
		try {
			$query->execute(array(
				"title" => filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS),
				"message" => filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS)
			));
		} catch (Exception $e) {
					// Struntar i alla exceptions helt, borde hanteras men...
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
<?php
	require_once("dbconnection.php");
	$query = "SELECT id, title, message FROM artiklar ORDER BY id DESC";
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Posts</title>
</head>
<body>
<div class="navbar">
	<ul>
		<li><a href="posts.php">Posts</a></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="newpost.php">New</a></li>
	</ul>
</div>
<div class="ruta">
<div class="post">
<?php
	$result = $conn->prepare($query);
	$result->execute();
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<article><h1> ". htmlentities($row['title']) . " </h1>";
		echo "<p> ". htmlentities($row['message']) ." </p>";
		echo "</article>";
	}
?>
</div>
</div>

</body>
</html>
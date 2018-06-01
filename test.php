<?php

$dbh = new PDO("mysql:host=localhost;dbname=posts;charset=utf8",
	"root",
	"")

$sql = "select * from posts";

$stmt = $dbh->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo "<pre>" . print_r($row,1) . "</pre>";
}



?>
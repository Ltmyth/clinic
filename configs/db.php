<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=voice','root','');
} catch (PDOException $e) {
	exit('Database error.');
}

$connect = mysqli_connect('localhost','root','','voice');

?>
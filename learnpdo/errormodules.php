<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=project', 'inchoo', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
	$user = $db->prepare("
		SELECT * FROM users
		WHERE username = :username
	");
	$user->execute([]);
} catch (PDOException $e) {
	die('Something went wrong.');
}

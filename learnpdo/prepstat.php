<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=project;port=3306', 'inchoo', 'password');

$username = $_GET['username'];
$user = $db->prepare("
	SELECT * FROM users
	WHERE username = :username
");

$user->bindValue(':username', $_GET['username']);

$user->execute();

$user = $user->fetch(PDO::FETCH_OBJ); 

var_dump($user);

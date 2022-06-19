<?php

$pdo = new PDO("mysql:host=localhost;dbname=my_project", 'root', '');

$sql = "SELECT image FROM `images` WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $_GET['id']]);
$name = $statement->fetch(PDO::FETCH_ASSOC);
unlink($_SERVER['DOCUMENT_ROOT'] . "/uploads/" . $name['image']);

$sql = "DELETE FROM `images` WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute(['id' => $_GET['id']]);



header('Location: /task_19.php');

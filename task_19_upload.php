<?php

function uploadImage($image)
{
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . "." . $extension;

    move_uploaded_file($image['tmp_name'], "uploads/" . $filename);

    return $filename;
}

$filename = uploadImage($_FILES['image']);

$pdo = new PDO("mysql:host=localhost;dbname=my_project", 'root','');
$sql = "INSERT INTO `images` (image) VALUES (:image)";
$statement = $pdo->prepare($sql);
$statement->execute(['image' => $filename]);

header('Location: /task_19.php');

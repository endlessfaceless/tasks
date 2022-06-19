<?php

$pdo = new PDO("mysql:host=localhost;dbname=my_project;", 'root','');

for ($i = 0; $i < count($_FILES['image']['name']); $i++)
{
    $filename = uploadImage($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
    $statement = $pdo->prepare("INSERT INTO `images` (image) VALUES (:image)");
    $statement->execute(['image' => $filename]);
}

function uploadImage($name, $tmp_name)
{
    $extension = pathinfo($name, PATHINFO_EXTENSION);
    $filename = uniqid() . "." . $extension;

    move_uploaded_file($tmp_name, "uploads/" . $filename);

    return $filename;
}

header('Location: /task_20.php');
<?php
// Выделяем переменную для удобства доступа к массиву POST.
$text = $_POST['text'];

// Соединяемся с базой через PDO.
$pdo = new PDO("mysql:host=localhost;dbname=my_project;", 'root', '');

// Готовим SQL запрос.
$statement = $pdo->prepare("INSERT INTO `task11` (text) VALUES (:text)");

//Выполняем запрос. (ключ 'text' указывает на метку в запросе (:text) и берет значение из суперглобального массива POST в который были переданы данные через инпут с неймом "name")
// Метка в запросе и ключ в массиве в execute должны быть одинаковыми.
$statement->execute(['text' => $text]);

// Редирект обратно на главную.
header('Location: /task_11.php');
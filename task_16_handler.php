<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// 1. Получить пользователя по email
$pdo = new PDO("mysql:host=localhost;dbname=my_project;", 'root', '');
$sql = "SELECT * FROM `task16` WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

// 2. Нужно проверить результат
    // 2.1 Если пользователь отсутствует, пишем флеш сообщение: неверный логин или пароль и возвращаем пользователя назад.
if(empty($user))
{
    $_SESSION['error'] = "Неверный логин или пароль";
    header('Location: /task_16.php');
    exit;
}

// 3. Если пользователь есть: то сравниваем пароли
    // 3.1 Если пароль не совпадает, то пишем флеш сообщение: неверный логин или пароль
if(!password_verify($password, $user['password']))
{
    $_SESSION['error'] = "Неверный логин или пароль";
    header('Location: /task_16.php');
    exit;
}

// 4. Записываем пользователя в сессию
$_SESSION['user'] = ['email' => $user['email'], 'id' => $user['id']];

// 5. Возвращаем пользователя .php
header('Location: /task_17.php');
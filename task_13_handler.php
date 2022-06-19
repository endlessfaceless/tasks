<?php
// Старт сессии
session_start();

// Переменные для удобства доступа
$email = $_POST['email'];

// Подключение к базе
$pdo = new PDO("mysql:host=localhost;dbname=my_project", 'root','');

// Подготовка запроса на проверку дубликата учетных данных
$statement = $pdo->prepare("SELECT * FROM `task13` WHERE email=:email");
$statement->execute(['email' => $email]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

// Если пользователь есть (в $result есть что-то) то выводим danger и останавливаем скрипт
if(!empty($result))
{
    $message = 'Этот электронный адрес уже используется';
    $_SESSION['danger'] = $message;
    header('Location: /task_13.php');
    exit;
}

// Хеширование пароля
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Если $result = false записываем данные пользователя в БД
$statement = $pdo->prepare("INSERT INTO `task13` (email, password) VALUES (:email, :password)");
$statement->execute(
    [
        'email' => $email,
        'password' => $password
    ]
);
$message = 'Вы успешно зарегистрировались';
$_SESSION['success'] = $message;
header('Location: /task_13.php');
<?php
// Запускаем сессию
session_start();

// Выделяем переменную для удобства доступа к массиву POST.
$text = $_POST['text'];

// Соединяемся с базой через PDO.
$pdo = new PDO("mysql:host=localhost;dbname=my_project;", 'root', '');

// Запрос на проверку "дубликата" записи в таблице (если записи нет, то var_dump($task) вернет false) тогда
// идём дальше  по коду и записываем эту запись в таблицу
$sql = "SELECT * FROM `task12` WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

// Если же $task содержит текст, который ввел пользователь, то !empty($task) вернет true и тогда в массив $_SESSION
// записываем текст нашего flash сообщения и прекращаем скрипт через exit
if(!empty($task))
{
    $message = 'Введенная запись уже присутствует в таблице!';
    $_SESSION['danger'] = $message;

    header('Location: /task_12.php');
    exit;
}

// Готовим SQL запрос.
$statement = $pdo->prepare("INSERT INTO `task12` (text) VALUES (:text)");

//Выполняем запрос. (ключ 'text' указывает на метку в запросе (:text) и берет значение из суперглобального массива POST
// в который были переданы данные через инпут с неймом "name")
// Метка в запросе и ключ в массиве в execute должны быть одинаковыми.
$statement->execute(['text' => $text]);

// Флеш сообщение пользователю о том, что запись была добавлена в БД
$message = 'Вы записали данные в таблицу!';
$_SESSION['success'] = $message;

// Редирект обратно на главную.
header('Location: /task_12.php');
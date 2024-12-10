<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Простая обработка сообщения (отправка на email, запись в файл или БД)
    mail('youremail@example.com', "Сообщение от $name", $message, "From: $email");

    echo "Спасибо за ваше сообщение!";
} else {
    echo "Ошибка!";
}
?>

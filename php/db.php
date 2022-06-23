<?php
$host = 'localhost'; // хост
//quest -------------------------------
$database = 'Dyelog';  // название БД
//quest -------------------------------
$charset = 'utf8'; // кодировка
$user = 'root'; // пользователь
$password = ''; // пароль

$pdo = new PDO("mysql:host=$host;dbname=$database; char
set=$charset ", $user, $password); //установка соединения
?>
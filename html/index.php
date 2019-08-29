<?php


$dsn = 'mysql:dbname=test;host=mysql';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Подключились к БД';
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

phpinfo();
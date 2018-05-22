<?php

try {
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=neanneedevoyages', 'root','root');
    $pdo->exec("SET NAMES UTF8");
} catch (PDOException $exception) {
    require "databaseDied.php";
    die($exception->getMessage());
}

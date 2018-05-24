<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=neanneedevoyages;port=3307', 'root','');
} catch (PDOException $exception) {
    require "databaseDied.php";
    die($exception->getMessage());
}
$pdo->exec("SET NAMES UTF8");

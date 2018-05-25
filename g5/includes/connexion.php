<?php
try {
    $db = new PDO('mysql:dbname=uneanneedevoyage;host=localhost:3306', 'root', '');
} catch (PDOException $exception) {
    die($exception->getMessage());
}


<?php
try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=Voyage', 'root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}


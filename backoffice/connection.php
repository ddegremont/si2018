<?php
try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=Voyage', 'root','rootroot1');
} catch (PDOException $exception) {
    die($exception->getMessage());
}


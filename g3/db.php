<?php
try {
    $conn = new PDO('mysql:dbname=UADV;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

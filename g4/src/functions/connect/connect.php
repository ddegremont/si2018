<?php
function connect(): PDO
{
    $host       = "localhost";
    $port       = "3306";
    $dbname     = "perfect_website";
    $username   = "root";
    $password   = "root";
    try {
        $connection = new PDO("mysql:host=" . $host . ";dbname=" . $dbname . ";port=" . $port, $username, $password);
    } catch(Exception $exception) {
        echo "Fatal error: couldn't not connect to the database.";
        exit;
    }
    return $connection;
}
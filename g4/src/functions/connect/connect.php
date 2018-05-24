<?php
function connect(): PDO
{
    $host       = "127.0.0.1";
    $port       = "3306";
    $dbname     = "perfect_website";
    $username   = "root";
    $password   = "yourpassword";
    try {
        $connection = new PDO("mysql:host=" . $host . ";dbname=" . $dbname . ";port=" . $port, $username, $password);
    } catch(Exception $exception) {
        echo "Fatal error: couldn't not connect to the database.";
        exit;
    }
    return $connection;
}

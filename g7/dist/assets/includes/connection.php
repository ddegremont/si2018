<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 22/05/2018
 * Time: 02:39
 */

try {
    $pdo = new PDO('mysql:host=localhost;port=3307;dbname=perfect_site', 'root', 'juilletjuillet');
    $pdo->exec("SET NAMES UTF8");
} catch (PDOException $exception) {
    require "databaseFalse.php";
    die($exception->getMessage());
}

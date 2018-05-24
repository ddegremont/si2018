<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 01/05/2018
 * Time: 18:08
 */
session_start();
require_once "../connection.php";

$request = 'UPDATE
            `Fiche`
            SET
            `name` = :name,
            `desc`= :desc,
            `rating` = :rating,
            `location` = :location,
            `cost` = :cost
            WHERE
            `id` = :id
;';
$stmt = $connection->prepare($request);
$stmt->bindParam(':id', htmlspecialchars($_POST['id']));
$stmt->bindParam(':name', htmlspecialchars($_POST['name']));
$stmt->bindParam(':desc', htmlspecialchars($_POST['desc']));
$stmt->bindParam(':rating', htmlspecialchars($_POST['rating']));
$stmt->bindParam(':location', htmlspecialchars($_POST['location']));
$stmt->bindParam(':cost', htmlspecialchars($_POST['cost']));
$stmt->execute();
header('Location: index.php');
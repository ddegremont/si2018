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
            `Bon`
            SET
            `date` = :date,
            `from`= :from,
            `to` = :to,
            `image` = :image,
            `alt` = :alt,
            `price` = :price
            WHERE
            `id` = :id
;';
$stmt = $connection->prepare($request);
$stmt->bindParam(':id', htmlspecialchars($_POST['id']));
$stmt->bindParam(':date', htmlspecialchars($_POST['date']));
$stmt->bindParam(':from', htmlspecialchars($_POST['from']));
$stmt->bindParam(':to', htmlspecialchars($_POST['to']));
$stmt->bindParam(':image', htmlspecialchars($_POST['image']));
$stmt->bindParam(':alt', htmlspecialchars($_POST['alt']));
$stmt->bindParam(':price', htmlspecialchars($_POST['price']));
$stmt->execute();
header('Location: index.php');
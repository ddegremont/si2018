<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 19/04/2018
 * Time: 19:14
 */
require_once "../connection.php";

$request = 'INSERT INTO
          `Bon` 
          (`date`, `from`, `to`, `image`, `alt`, `price`)
        VALUES
          (:date, :from, :to, :image, :alt, :price)
;';

$stmt = $connection->prepare($request);
$stmt->bindParam(':date', htmlspecialchars($_POST['date']));
$stmt->bindParam(':from', htmlspecialchars($_POST['from']));
$stmt->bindParam(':to', htmlspecialchars($_POST['to']));
$stmt->bindParam(':image', htmlspecialchars($_POST['image']));
$stmt->bindParam(':alt', htmlspecialchars($_POST['alt']));
$stmt->bindParam(':price', htmlspecialchars($_POST['price']));
$stmt->execute();
header('Location: index.php');

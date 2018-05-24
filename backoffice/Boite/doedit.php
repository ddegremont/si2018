<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 01/05/2018
 * Time: 18:08
 */

require_once "../connection.php";

$request = 'UPDATE
            `Boite`
            SET
            `name` = :name,
            `image` = :image,
            `alt` = :alt,
            `type` = :type
            WHERE
            `id` = :id
;';
$stmt = $connection->prepare($request);
$stmt->bindParam(':id', htmlspecialchars($_POST['id']));
$stmt->bindParam(':name', htmlspecialchars($_POST['name']));
$stmt->bindParam(':image', htmlspecialchars($_POST['image']));
$stmt->bindParam(':alt', htmlspecialchars($_POST['alt']));
$stmt->bindParam(':type', htmlspecialchars($_POST['type']));
$stmt->execute();
header('Location: index.php');
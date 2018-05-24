<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 19/04/2018
 * Time: 19:14
 */

require_once "../connection.php";


$request = 'INSERT INTO
          `Boite` 
          (`name`, `type`, `image`, `alt`)
        VALUES
          (:name, :type, :image, :alt)
;';

$stmt = $connection->prepare($request);
$stmt->bindParam(':name', htmlspecialchars($_POST['name']));
$stmt->bindParam(':image', htmlspecialchars($_POST['image']));
$stmt->bindParam(':alt', htmlspecialchars($_POST['alt']));
$stmt->bindParam(':type', htmlspecialchars($_POST['type']));
$stmt->execute();
header('Location: index.php');

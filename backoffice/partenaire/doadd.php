<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 19/04/2018
 * Time: 19:14
 */

require_once "../connection.php";

if (empty($_POST['name']) || empty($_POST['image']) || empty($_POST['alt']) || empty($_POST['type'])) {
    header('Location: error.php');
    exit;
}

$request = 'INSERT INTO
          `Partenaire`
          (`name`, `image`, `alt`, `type`)
        VALUES
          (:name, :image, :alt, :type)
;';

$stmt = $connection->prepare($request);
$stmt->bindParam(':name', htmlspecialchars($_POST['name']));
$stmt->bindParam(':image', htmlspecialchars($_POST['image']));
$stmt->bindParam(':alt', htmlspecialchars($_POST['alt']));
$stmt->bindParam(':type', htmlspecialchars($_POST['type']));
$stmt->execute();
header('Location: index.php');

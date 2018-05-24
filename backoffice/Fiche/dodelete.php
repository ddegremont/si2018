<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 19/04/2018
 * Time: 20:50
 */

require_once "../connection.php";
$request =
    'DELETE FROM
    `Fiche`
    WHERE
    `id` = :id
;';
$stmt = $connection->prepare($request);
$stmt->bindParam(':id', htmlspecialchars($_POST['id']));
$stmt->execute();

header('Location: index.php');

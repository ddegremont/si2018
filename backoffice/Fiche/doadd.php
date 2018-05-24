<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 19/04/2018
 * Time: 19:14
 */
session_start();
require_once "../connection.php";

$request = 'INSERT INTO
          `Fiche` 
          (`name`, `desc`, `rating`, `location`, `cost`)
        VALUES
          (:name, :desc, :rating, :location, :cost)
;';

$stmt = $connection->prepare($request);
$stmt->bindParam(':name', htmlspecialchars($_POST['name']));
$stmt->bindParam(':desc', htmlspecialchars($_POST['desc']));
$stmt->bindParam(':rating', htmlspecialchars($_POST['rating']));
$stmt->bindParam(':location', htmlspecialchars($_POST['location']));
$stmt->bindParam(':cost', htmlspecialchars($_POST['cost']));
$stmt->execute();
header('Location: index.php');

<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 19/04/2018
 * Time: 19:14
 */

require_once "../connection.php";

if (empty($_POST['title']) || empty($_POST['texte']) || empty($_POST['image']) || empty($_POST['alt']) || empty($_POST['auteur'])
    || empty($_POST['signature']) || empty($_POST['logo'])) {
    header('Location: error.php');
    exit;
}

$request = 'INSERT INTO
          `Article` 
          (`title`, `texte`, `image`, `alt`, `date`, `auteur`, `signature`, `logo`)
        VALUES
          (:title, :texte, :image, :alt, :date, :auteur, :signature, :logo)
;';

$stmt = $connection->prepare($request);
$stmt->bindParam(':title', htmlspecialchars($_POST['title']));
$stmt->bindParam(':texte', htmlspecialchars($_POST['texte']));
$stmt->bindParam(':image', htmlspecialchars($_POST['image']));
$stmt->bindParam(':alt', htmlspecialchars($_POST['alt']));
$stmt->bindParam(':date', htmlspecialchars($_POST['date']));
$stmt->bindParam(':auteur', htmlspecialchars($_POST['auteur']));
$stmt->bindParam(':signature', htmlspecialchars($_POST['signature']));
$stmt->bindParam(':logo', htmlspecialchars($_POST['logo']));
$stmt->execute();
header('Location: index.php');

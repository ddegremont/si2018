<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 01/05/2018
 * Time: 18:08
 */
session_start();
require_once "../connection.php";
if (empty($_POST['title']) || empty($_POST['texte']) || empty($_POST['image']) || empty($_POST['alt'])||
    empty($_POST['date']) || empty($_POST['auteur']) || empty($_POST['signature']) || empty($_POST['logo'])) {
    header('Location: error.php');
    exit;
}

$request = 'UPDATE
            `Article`
            SET
            `title` = :title,
            `texte`= :texte,
            `image` = :image,
            `alt` = :alt,
            `date` = :date,
            `auteur` = :auteur,
            `signature` = :signature,
            `logo` = :logo
            WHERE
            `id` = :id
;';
$stmt = $connection->prepare($request);
$stmt->bindParam(':id', htmlspecialchars($_POST['id']));
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
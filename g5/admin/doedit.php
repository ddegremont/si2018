<?php
require_once "../includes/connexion.php";

if (!isset($_POST["h2"]) || $_POST["h2"]==="" || !isset($_POST["text"]) || $_POST["text"]==="" || !isset($_POST["img"]) || $_POST["img"]==="") {
    header("Location: ./?error");
    exit();
}

$sql = "UPDATE
   `article`
SET
    `h2` = :h2,
    `text` = :p,
    `img` = :img
WHERE
   `id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':h2', $_POST['h2']);
$stmt->bindValue(':p', $_POST['text']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->execute();

header('Location: index.php');

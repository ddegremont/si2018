<?php
require_once "../includes/connexion.php";

if (!isset($_POST["h2"]) || $_POST["h2"]==="" || !isset($_POST["text"]) || $_POST["text"]==="" || !isset($_POST["img"]) || $_POST["img"]==="") {
    header("Location: ./?error");
    exit();
}

$sql = "INSERT INTO
   `article`
   (`id`, 
   `h2`,
    `text`,
     `img`)
      VALUES
   (NULL,
    :h2, 
    :p, 
    :img);";

$stmt = $db->prepare($sql);
$stmt->bindValue(':h2', $_POST['h2']);
$stmt->bindValue(':p', $_POST['text']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->execute();

header('Location: index.php');

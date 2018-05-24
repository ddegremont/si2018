<?php

require_once "../../db.php";

if (!isset($_POST['title']) || !isset($_POST['subtitle']) || !isset($_POST['img']) || !isset($_POST['text']) ||  $_POST['title']==="" || $_POST['subtitle']==="" || $_POST['img']==="" || $_POST['text']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$sql = "UPDATE
          `article`
        SET
           `title` = :title,
           `subtitle` = :subtitle,
           `img` = :img,
           `text` = :text
        WHERE
           id = :id
        ;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':subtitle', $_POST['subtitle']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':text', $_POST['text']);
$stmt->execute();

header('Location: ../article_admin.php');
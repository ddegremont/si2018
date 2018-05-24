<?php

require_once "../../db.php";

if (!isset($_POST['img']) || !isset($_POST['title']) || !isset($_POST['author']) || $_POST['img']==="" || $_POST['title']==="" || $_POST['author']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$sql = "UPDATE
          `imgbox`
        SET
           `img` = :img,
           `title` = :title,
           `author` = :author
        WHERE
           id = :id
        ;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':author', $_POST['author']);
$stmt->execute();

header('Location: ../img_admin.php');
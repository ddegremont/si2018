<?php
require_once "../includes/init_db.php";

if (!isset($_POST["factsheet"])) {
    header("Location: ./?error");
    exit();
}

$factsheet = $_POST["factsheet"];

if ($_FILES['factsheet']["tmp_name"]["imgfile"]!=="") {
    $check = getimagesize($_FILES['factsheet']["tmp_name"]["imgfile"]);
    if($check === false) {
        header('Location: ./?error_file_format');
        exit();
    }
    $extension=pathinfo($_FILES["factsheet"]['name']['imgfile'], PATHINFO_EXTENSION);

    $sql = "UPDATE
    `factsheet`
        SET
    `img` = :img
        WHERE
    `id` = :id
    ;";
    $stmt = $db->prepare($sql);    
    $stmt->bindValue(':id', $factsheet['id']);
    $stmt->bindValue(':img', $extension);
    $stmt->execute();
    $target_file = "../uploads/factsheet/" . $factsheet['id'] . "." . $extension;
    move_uploaded_file($_FILES['factsheet']["tmp_name"]["imgfile"], "./".$target_file);
}

$sql = "UPDATE
    `factsheet`
        SET
    `title` = :title,
    `category` = :category,
    `text` = :text,
    `alt` = :alt,
    `mark` = :mark,
    `slug` = :slug

        WHERE
    `id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $factsheet['id']);
$stmt->bindValue(':title', $factsheet['title']);
$stmt->bindValue(':category', $factsheet['category']);
$stmt->bindValue(':text', $factsheet['text']);
$stmt->bindValue(':alt', $factsheet['alt']);
$stmt->bindValue(':mark', $factsheet['mark']);
$stmt->bindValue(':slug', $factsheet['slug']);
$stmt->execute();

header('Location: ./show.php?id='.$factsheet["id"]);

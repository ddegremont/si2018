<?php
require_once "../includes/init_db.php";

if (!isset($_POST["factsheet"]) || $_POST["factsheet"]["title"]=="" || $_POST["factsheet"]["category"]=="" || $_POST["factsheet"]["text"]=="" || $_POST["factsheet"]["alt"]=="" || $_POST["factsheet"]["mark"]=="" || $_POST["factsheet"]["slug"]=="") {
    header("Location: ./?error");
    exit();
}

$factsheet = $_POST['factsheet'];


//vérifie que le fichier choisi est une factsheet
$check = getimagesize($_FILES['factsheet']["tmp_name"]["imgfile"]);
if($check === false) {
    header('Location: ./?error_file_format');
    exit();
}

$extension=pathinfo($_FILES['factsheet']["name"]["imgfile"], PATHINFO_EXTENSION);

$sql = "INSERT INTO
   `factsheet`
   (`id`, `title`, `category`, `text`, `img`, `alt`, `mark`, `slug`)
      VALUES
   (NULL, :title, :category, :text, :img, :alt, :mark, :slug)
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':title', $factsheet['title']);
$stmt->bindValue(':category', $factsheet['category']);
$stmt->bindValue(':text', $factsheet['text']);
$stmt->bindValue(':img', $extension);
$stmt->bindValue(':alt', $factsheet['alt']);
$stmt->bindValue(':mark', $factsheet['mark']);
$stmt->bindValue(':slug', $factsheet['slug']);
$stmt->execute();

$target_file = "../uploads/factsheet/" . $db->lastInsertId() . "." . $extension;
move_uploaded_file($_FILES['factsheet']["tmp_name"]["imgfile"], "./".$target_file);

// var_dump($factsheet);
header('Location: ./?id='.$db->lastInsertId());

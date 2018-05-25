<?php
require_once "../includes/init_db.php";

// var_dump($_POST);

if (!isset($_POST["imagebox"]) || $_POST["imagebox"]["title"]=="" || $_POST["imagebox"]["alt"]=="" || $_POST["imagebox"]["description"]=="" ) {
    header("Location: ./?error");
    exit();
}

$imagebox = $_POST['imagebox'];


//vérifie que le fichier choisi est une image
$check = getimagesize($_FILES['imagebox']["tmp_name"]["file"]);
if($check === false) {
    header('Location: ./?error_file_format');
    exit();
}

$extension=pathinfo($_FILES['imagebox']["name"]["file"], PATHINFO_EXTENSION);

$sql = "INSERT INTO
   `imagebox`
   (`id`, `title`, `img`, `alt`, `description`)
      VALUES
   (NULL, :title, :img, :alt, :description)
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':title', $imagebox['title']);
$stmt->bindValue(':img', $extension);
$stmt->bindValue(':alt', $imagebox['alt']);
$stmt->bindValue(':description', $imagebox['description']);
$stmt->execute();

$target_file = "../uploads/imagebox/" . $db->lastInsertId() . "." . $extension;
move_uploaded_file($_FILES['imagebox']["tmp_name"]["file"], "./".$target_file);
header('Location: ./?id='.$db->lastInsertId());
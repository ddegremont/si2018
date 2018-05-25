<?php
require_once "../includes/init_db.php";

if (!isset($_POST["partner"]) || $_POST["partner"]["name"]=="" || $_POST["partner"]["alt"]=="" || $_POST["partner"]["link"]=="" ) {
    header("Location: ./?error");
    exit();
}

$partner = $_POST['partner'];


//vérifie que le fichier choisi est une image
$check = getimagesize($_FILES['partner']["tmp_name"]["file"]);
if($check === false) {
    header('Location: ./?error_file_format');
    exit();
}

$extension=pathinfo($_FILES['partner']["name"]["file"], PATHINFO_EXTENSION);

$sql = "INSERT INTO
   `partner`
   (`id`, `name`, `logo`, `alt`, `link`)
      VALUES
   (NULL, :name, :logo, :alt, :link)
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':name', $partner['name']);
$stmt->bindValue(':logo', $extension);
$stmt->bindValue(':alt', $partner['alt']);
$stmt->bindValue(':link', $partner['link']);
$stmt->execute();

$target_file = "../uploads/partner/" . $db->lastInsertId() . "." . $extension;
move_uploaded_file($_FILES['partner']["tmp_name"]["file"], "./".$target_file);

header('Location: ./?id='.$db->lastInsertId());
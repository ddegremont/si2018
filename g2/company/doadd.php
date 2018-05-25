<?php
require_once "../includes/init_db.php";
var_dump($_POST["company"]);

if (!isset($_POST["company"]) || $_POST["company"]["name"]=="" || $_POST["company"]["signature"]=="" || $_POST["company"]["twitter-account"]=="" ) {
    header("Location: ./?error");
    exit();
}

$company = $_POST['company'];


//vérifie que le fichier choisi est une image
$check = getimagesize($_FILES['company']["tmp_name"]["logo"]);
if($check === false) {
    header('Location: ./?error_file_format');
    exit();
}

$extension=pathinfo($_FILES["company"]['name']['logo'], PATHINFO_EXTENSION);

$sql = "INSERT INTO
   `company`
   (`id`, `name`, `logo`, `signature`, `twitter-account`)
      VALUES
   (NULL, :name, :logo, :signature, :twitterAccount)
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':name', $company['name']);
$stmt->bindValue(':logo', $extension);
$stmt->bindValue(':signature', $company['signature']);
$stmt->bindValue(':twitterAccount', $company['twitter-account']);
$stmt->execute();

$target_file = "../uploads/company/" . $db->lastInsertId() . "." . $extension;
move_uploaded_file($_FILES['company']["tmp_name"]["logo"], "./".$target_file);

header('Location: ./?id='.$db->lastInsertId());
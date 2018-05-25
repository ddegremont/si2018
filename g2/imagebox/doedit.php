<?php
require_once "../includes/init_db.php";

if (!isset($_POST["imagebox"])) {
    header("Location: ./?error");
    exit();
}

$imagebox = $_POST["imagebox"];
if ($_FILES['imagebox']["tmp_name"]["file"]!=="") {
    $check = getimagesize($_FILES['imagebox']["tmp_name"]["file"]);
    if($check === false) {
        header('Location: ./?error_file_format');
        exit();
    }
    $extension=pathinfo($_FILES["imagebox"]['name']['file'], PATHINFO_EXTENSION);
    var_dump($extension);

    $sql = "UPDATE
    `imagebox`
        SET
    `img` = :img
        WHERE
    `id` = :id
    ;";
    $stmt = $db->prepare($sql);    
    $stmt->bindValue(':id', $imagebox['id']);
    $stmt->bindValue(':img', $extension);
    $stmt->execute();
    $target_file = "../uploads/imagebox/" . $imagebox['id'] . "." . $extension;
    move_uploaded_file($_FILES['imagebox']["tmp_name"]["file"], "./".$target_file);
}

$sql = "UPDATE
    `imagebox`
        SET
    `title` = :title,
    `alt` = :alt,
    `description` = :description
        WHERE
    `id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $imagebox['id']);
$stmt->bindValue(':title', $imagebox['title']);
$stmt->bindValue(':alt', $imagebox['alt']);
$stmt->bindValue(':description', $imagebox['description']);
$stmt->execute();


// header('Location: ./show.php?id='.$imagebox["id"]);

<?php
require_once "../includes/init_db.php";

if (!isset($_POST["partner"])) {
    header("Location: ./?error");
    exit();
}

$partner = $_POST["partner"];

if ($_FILES['partner']["tmp_name"]["file"]!=="") {
    $check = getimagesize($_FILES['partner']["tmp_name"]["file"]);
    if($check === false) {
        header('Location: ./?error_file_format');
        exit();
    }
    $extension=pathinfo($_FILES["partner"]['name']['file'], PATHINFO_EXTENSION);

    $sql = "UPDATE
    `partner`
        SET
    `logo` = :logo
        WHERE
    `id` = :id
    ;";
    $stmt = $db->prepare($sql);    
    $stmt->bindValue(':id', $partner['id']);
    $stmt->bindValue(':logo', $extension);
    $stmt->execute();
    $target_file = "../uploads/partner/" . $partner['id'] . "." . $extension;
    move_uploaded_file($_FILES['partner']["tmp_name"]["file"], "./".$target_file);
}

$sql = "UPDATE
    `partner`
        SET
    `name` = :name,
    `alt` = :alt,
    `link` = :link
        WHERE
    `id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $partner['id']);
$stmt->bindValue(':name', $partner['name']);
$stmt->bindValue(':alt', $partner['alt']);
$stmt->bindValue(':link', $partner['link']);
$stmt->execute();


header('Location: ./show.php?id='.$partner["id"]);

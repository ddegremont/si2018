<?php
require_once "../includes/init_db.php";

if (!isset($_POST["company"])) {
    header("Location: ./?error");
    exit();
}

$company = $_POST["company"];

if ($_FILES['company']["tmp_name"]["logo"]!=="") {
    $check = getimagesize($_FILES['company']["tmp_name"]["logo"]);
    if($check === false) {
        header('Location: ./?error_file_format');
        exit();
    }
    $extension=pathinfo($_FILES["company"]['name']['logo'], PATHINFO_EXTENSION);

    $sql = "UPDATE
    `company`
        SET
    `logo` = :logo
        WHERE
    `id` = :id
    ;";
    $stmt = $db->prepare($sql);    
    $stmt->bindValue(':id', $company['id']);
    $stmt->bindValue(':logo', $extension);
    $stmt->execute();
    $target_file = "../uploads/company/" . $company['id'] . "." . $extension;
    move_uploaded_file($_FILES['company']["tmp_name"]["logo"], "./".$target_file);
}

$sql = "UPDATE
    `company`
        SET
    `name` = :name,
    `signature` = :signature,
    `twitter-account` = :twitterAccount
        WHERE
    `id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $company['id']);
$stmt->bindValue(':name', $company['name']);
$stmt->bindValue(':signature', $company['signature']);
$stmt->bindValue(':twitterAccount', $company['twitter-account']);
$stmt->execute();


header('Location: ./show.php?id='.$company["id"]);

<?php
require_once "../includes/init_db.php";

if (!isset($_POST["article"])) {
    header("Location: ./?error");
    exit();
}

$article = $_POST["article"];

if ($_FILES['article']["tmp_name"]["img"]!=="") {
    $check = getimagesize($_FILES['article']["tmp_name"]["img"]);
    if($check === false) {
        header('Location: ./?error_file_format');
        exit();
    }
    $extension=pathinfo($_FILES["article"]['name']['img'], PATHINFO_EXTENSION);

    $sql = "UPDATE
    `article`
        SET
    `img` = :img
        WHERE
    `id` = :id
    ;";
    $stmt = $db->prepare($sql);    
    $stmt->bindValue(':id', $article['id']);
    $stmt->bindValue(':img', $extension);
    $stmt->execute();
    $target_file = "../uploads/article/" . $article['id'] . "." . $extension;
    move_uploaded_file($_FILES['article']["tmp_name"]["img"], "./".$target_file);
}

$sql = "UPDATE
    `article`
        SET
    `title` = :title,
    `subtitle` = :subtitle,
    `text` = :text,
    `slug` = :slug
        WHERE
    `id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $article['id']);
$stmt->bindValue(':title', $article['title']);
$stmt->bindValue(':subtitle', $article['subtitle']);
$stmt->bindValue(':text', $article['text']);
$stmt->bindValue(':slug', $article['slug']);
$stmt->execute();

header('Location: ./show.php?id='.$article["id"]);

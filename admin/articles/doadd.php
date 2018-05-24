<?php
if (!isset($_POST['article'])) {
    header("Location: index.php");
    exit;
}
require_once "../connection.php";
require_once "../functions.php";
$article = $_POST['article'];
$sql = "INSERT INTO `articles` (
    `title`,
    `subtitle`,
    `content`,
    `link`,
    `details`,
    `deadline`,
    `cover_img`
    )
    VALUES
   (
    :title,
    :subtitle,
    :content,
    :link,
    :details,
    :deadline,
    :cover_img
   );";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $article['title']);
$stmt->bindValue(':subtitle', $article['subtitle']);
$stmt->bindValue(':content', $article['content']);
$stmt->bindValue(':link', $article['link']);
$stmt->bindValue(':details', $article['details']);
$stmt->bindValue(':deadline', $article['deadline']);
$stmt->bindValue(':cover_img', $article['cover_img']);
$stmt->execute();
handlePDOError($stmt);
header("Location: index.php");





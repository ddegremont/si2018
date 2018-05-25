<?php
if ( !isset($_POST['article']) ) {
    header("Location: index.php?error=noeditdataposted");
    exit;
}
require_once '../connection.php';
require_once '../functions.php';
$article = $_POST['article'];
$sql = "UPDATE
    `articles`
  SET
    `title` = :title,
    `subtitle` = :subtitle,
    `content` = :content,
    `twitter_link` = :link,
    `details` = :details,
    `deadline` = :deadline,
    `cover_img` = :cover_img
  WHERE
    `id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', htmlspecialchars($article['id']));
$stmt->bindValue(':title', htmlspecialchars($article['title']));
$stmt->bindValue(':subtitle', htmlspecialchars($article['subtitle']));
$stmt->bindValue(':content', htmlspecialchars($article['content']));
$stmt->bindValue(':link', htmlspecialchars($article['link']));
$stmt->bindValue(':details', htmlspecialchars($article['details']));
$stmt->bindValue(':deadline', htmlspecialchars($article['deadline']));
$stmt->bindValue(':cover_img', htmlspecialchars($article['cover_img']));
$stmt->execute();
handlePDOError($stmt);
header("Location: index.php");

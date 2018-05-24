<?php
if (!isset($_POST['article'])) {
    header("Location: admin/index.php");
    exit;
}
require_once "../connection.php";
require_once "../functions.php";
$article = $_POST['article'];
$sql = "DELETE FROM
    `articles`
  WHERE
    `id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $article['id']);
$stmt->execute();
handlePDOError($stmt);
header("Location: index.php");
<?php

function handlePDOError(PDOStatement $stmt): void
{
    if ($stmt->errorCode() != '00000') {
        throw new \Exception($stmt->errorInfo()[1]);
    }
}

function getArticleData($pdo)
{
    $sql = "SELECT 
    `title`,
    `subtitle`,
    `content`,
    `link`,
    `details`,
    `deadline`,
    `cover_img`
  FROM
   `articles`
  WHERE
  `id` = :id 
  ;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    handlePDOError($stmt);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row === false) {
        header("Location : admin.php?error=noidtoedit");
        exit;
    }
}
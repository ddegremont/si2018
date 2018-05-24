<?php

require_once "../includes/functions.php";
require_once "../includes/connection.php";

$pages = getPages($pdo);
if(isset($_POST['title']) || isset($_POST['subtitle']) || isset($_POST['content']) || isset($_POST['img_src']) || isset($_POST['img_alt'])){
    $title = $_POST['title'];
    $slug = slugify($title);
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];
    $img_src = $_POST['img_src'];
    $img_alt = $_POST['img_alt'];
}

$sql = "SELECT
`id`,
`title`,
`subtitle`,
`content`,
`img_src`,
`img_alt`,
`slug`
FROM
`articles`
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<p><?=$row['id']. ' ' .$row['title']. ' ' .$row['subtitle']. ' ' .$row['content']. ' ' .$row['img_src']. ' ' .$row['img_alt']. ' ' .$row['slug'] ?></p>

<p><a href="login.php">Retours vers la home</a></p>
<p><a href="edit.php?id=<?=$row['id'] ?>">Modifer</a></p>
<p><a href="delete.php?id=<?=$row['id'] ?>">Supprimer</a></p>


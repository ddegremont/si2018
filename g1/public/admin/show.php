<?php

require_once "../includes/functions.php";
require_once "../includes/connection.php";

$pages = getPages($pdo);
if(isset($_POST['title']) || isset($_POST['h1']) || isset($_POST['p']) || isset($_POST['span-text']) || isset($_POST['span-class']) || isset($_POST['nav-title'])){
    $title = $_POST['title'];
    $slug = slugify($title);
    $h1 = $_POST['h1'];
    $p = $_POST['p'];
    $spanClass = $_POST['span-class'];
    $spanText = $_POST['span-text'];
    $navTitle = $_POST['nav-title'];
}

$sql = "SELECT 
    `id`,
    `title`,
    `slug`,
    `h1`,
    `p`,
    `span-class`,
    `span-text`,
    `nav-title`
FROM
    `page`
WHERE 
    `id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<p><?=$row['id']. ' ' .$row['title']. ' ' .$row['h1']. ' ' .$row['p']. ' ' .$row['span-class']. ' ' .$row['span-text']. ' ' .$row['title'] ?></p>

<p><a href="index.php">Retours vers la home</a></p>
<p><a href="edit.php?id=<?=$row['id'] ?>">Modifer</a></p>
<p><a href="delete.php?id=<?=$row['id'] ?>">Supprimer</a></p>


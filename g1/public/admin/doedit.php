<?php
require_once "../includes/functions.php";
require_once "../includes/connection.php";

if(!isset($_POST['title']) || !isset($_POST['subtitle']) || !isset($_POST['content']) || !isset($_POST['img_src']) || !isset($_POST['img_alt'])|| !isset($_POST['slug'])){
    header("Location: login.php");
}else{
    $slug = slugify($_POST['title']);
}

$sql = "UPDATE 
  `articles` 
SET 
    `title` = :title,
    `subtitle` = :subtitle,
    `content` = :content,
    `img_src` = :imgSrc,
    `img_alt` = :imgAlt,
    `slug` = :slug
WHERE 
  `id` = :id
;";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindParam(':title',$_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(':subtitle',$_POST['subtitle'], PDO::PARAM_STR);
$stmt->bindParam(':content',$_POST['content'], PDO::PARAM_STR);
$stmt->bindParam(':imgSrc',$_POST['img_src'], PDO::PARAM_STR);
$stmt->bindParam(':imgAlt',$_POST['img_alt'], PDO::PARAM_STR);
$stmt->bindParam(':slug',$slug, PDO::PARAM_STR);
$stmt->execute();

header("Location:login.php");

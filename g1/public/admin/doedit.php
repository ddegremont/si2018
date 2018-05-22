<?php
require_once "../includes/functions.php";
require_once "../includes/connection.php";

if(!isset($_POST['title']) || !isset($_POST['h1']) || !isset($_POST['p']) || !isset($_POST['span-text']) || !isset($_POST['span-class']) || !isset($_POST['img-alt']) || !isset($_POST['img-src'])|| !isset($_POST['nav-title'])){
    header("Location: index.php");
}else{
    $slug = slugify($_POST['title']);
}

$sql = "UPDATE 
  `page` 
SET 
    `title` = :title,
    `slug` = :slug,
    `h1` = :h1,
    `p` = :p,
    `span-class` = :spanClass,
    `span-text` = :spanText,
    `img-alt` = :imgAlt,
    `img-src` = :imgSrc,
    `nav-title` = :navTitle
WHERE 
  `id` = :id
;";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->bindParam(':slug',$slug, PDO::PARAM_STR);
$stmt->bindParam(':title',$_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(':h1',$_POST['h1'], PDO::PARAM_STR);
$stmt->bindParam(':p',$_POST['p'], PDO::PARAM_STR);
$stmt->bindParam(':spanClass',$_POST['span-class'], PDO::PARAM_STR);
$stmt->bindParam(':spanText',$_POST['span-text'], PDO::PARAM_STR);
$stmt->bindParam(':imgAlt',$_POST['img-alt'], PDO::PARAM_STR);
$stmt->bindParam(':imgSrc',$_POST['img-src'], PDO::PARAM_STR);
$stmt->bindParam(':navTitle',$_POST['nav-title'], PDO::PARAM_STR);
$stmt->execute();

header("Location:index.php");

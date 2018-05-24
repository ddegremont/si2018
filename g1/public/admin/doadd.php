<?php
require_once "../includes/connection.php";
require_once "../includes/functions.php";

if(!empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['content']) && !empty($_POST['img_src']) && !empty($_POST['img_alt'])){
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];
    $imgAlt = $_POST['img_alt'];
    $imgSrc = $_POST['img_src'];
    $slug = slugify($title);
} else{
    header('Location: login.php');
}

$sql = "INSERT INTO `articles` (
`title`,
`subtitle`,
`content`,
`img_src`,
`img_alt`,
`slug`
)
VALUES(
  :title,
  :subtitle,
  :content,
  :imgAlt,
  :imgSrc,
  :slug
  )
;";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':title',$title, PDO::PARAM_STR);
$stmt->bindParam(':subtitle',$subtitle, PDO::PARAM_STR);
$stmt->bindParam(':content',$content, PDO::PARAM_STR);
$stmt->bindParam(':imgAlt',$imgAlt, PDO::PARAM_STR);
$stmt->bindParam(':imgSrc',$imgSrc, PDO::PARAM_STR);
$stmt->bindParam(':slug',$slug, PDO::PARAM_STR);
$stmt->execute();

header('Location: login.php');

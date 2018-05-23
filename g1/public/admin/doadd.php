<?php
require_once "../includes/connection.php";
require_once "../includes/functions.php";

if(!empty($_POST['title']) && !empty($_POST['h1']) && !empty($_POST['p']) && !empty($_POST['span-text']) ||
    !empty($_POST['span-class']) && !empty($_POST['img-alt']) && !empty($_POST['img-src']) && !empty($_POST['nav-title'])){
    $title = $_POST['title'];
    $slug = slugify($title);
    $h1 = $_POST['h1'];
    $p = $_POST['p'];
    $spanClass = $_POST['span-class'];
    $spanText = $_POST['span-text'];
    $imgAlt = $_POST['img-alt'];
    $imgSrc = $_POST['img-src'];
    $navTitle = $_POST['nav-title'];
} else{
    header('Location: login.php');
}

$sql = "INSERT INTO `page` (
`title`,
`slug`,
`h1`,
`p`,
`span-class`,
`span-text`,
`img-alt`,
`img-src`,
`nav-title`
)
VALUES(
  :title,
  :slug,
  :h1,
  :p,
  :spanClass,
  :spanText,
  :imgAlt,
  :imgSrc,
  :navTitle
  )
;";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':title',$title, PDO::PARAM_STR);
$stmt->bindParam(':slug',$slug, PDO::PARAM_STR);
$stmt->bindParam(':h1',$h1, PDO::PARAM_STR);
$stmt->bindParam(':p',$p, PDO::PARAM_STR);
$stmt->bindParam(':spanClass',$spanClass, PDO::PARAM_STR);
$stmt->bindParam(':spanText',$spanText, PDO::PARAM_STR);
$stmt->bindParam(':imgAlt',$imgAlt, PDO::PARAM_STR);
$stmt->bindParam(':imgSrc',$imgSrc, PDO::PARAM_STR);
$stmt->bindParam(':navTitle',$navTitle, PDO::PARAM_STR);
$stmt->execute();

header('Location: login.php');

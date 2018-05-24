<?php

require_once "../../db.php";

if (!isset($_GET['id'])) {
    header('Location:index.php');
    exit();
}
$sql = "SELECT
          `id`,
          `title`,
          `subtitle`,
          `img`,
          `text`,
          `label`,
          `logo`,
          `tag`
        FROM
          `compagnie`
        WHERE
          id = :id
    ;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_GET["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
if (!isset($row['id'])) {
    header('Location:index.php?error');
    exit();
}
?>

<a href="../article/article_admin.php"><h4>go back</h4></a>

<h2><?=$row["title"]?></h2>
<h3><?=$row["subtitle"]?></h3>
<img src="<?=$row["img"]?>" alt="">
<p><?=$row["text"]?></p>
<p><?=$row["label"]?></p>
<img src="<?=$row["logo"]?>" alt="">

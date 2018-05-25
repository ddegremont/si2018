<?php

require_once "../../db.php";

if (!isset($_GET['id'])) {
    header('Location:admin.php');
    exit();
}


$sql = "SELECT
          `id`,
          `title`,
          `subtitle`,
          `img`,
          `text`,
          `tag`
        FROM
          article
        WHERE
          id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_GET["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if (!isset($row['title'])) {
    echo $row["title"];
    header('Location:index.php?error');
    exit();
}

?>


<h3><a href="article_admin.php">go back</a></h3>


<form action="do/doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <p>Title :</p>
    <input type="text" name='title' value="<?=$row["title"]?>">
    <p>Subtitle :</p>
    <input type="text" name='subtitle' value="<?=$row["subtitle"]?>">
    <p>Image's link :</p>
    <input type="text" name='img' value="<?=$row["img"]?>">
    <p>Text :</p>
    <textarea name="text"  cols="30" rows="10"><?=$row["text"]?></textarea>
    <hr>
    <input type="submit">
</form>
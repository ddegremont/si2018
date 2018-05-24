<?php

require_once "../db.php";

if (!isset($_GET['id'])) {
    header('Location:admin.php');
    exit();
}


$sql = "SELECT
          `id`,
          `img`,
          `title`,
          `author`
        FROM
          imgbox
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


<h3><a href="img_admin.php">go back</a></h3>


<form action="do/doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <p>Image's Link :</p>
    <input type="text" name='img' value="<?=$row["img"]?>">
    <p>Title :</p>
    <input type="text" name='title' value="<?=$row["title"]?>">
    <p>Author :</p>
    <input type="text" name='author' value="<?=$row["author"]?>"
    <hr>
    <input type="submit">
</form>
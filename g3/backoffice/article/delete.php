<?php

require_once "../../db.php";

if (!isset($_GET['id'])) {
    header('Location:admin.php');
    exit();
}

$sql = "SELECT
          `id`,
          `title`
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
    header('Location:admin.php');
    exit();
}

?>

<h2>êtes vous sûr de vouloir supprimer <?=$row["title"]?> ?</h2>
<form action="do/dodelete.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="submit" value="Oui, je le suis">
</form>
<h3><a href="article_admin.php">non oops !!!</a></h3>
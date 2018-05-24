<?php

require_once "../db.php";

if (!isset($_GET['id'])) {
    header('Location:admin.php');
    exit();
}


$sql = "SELECT
          `id`,
          `name`,
          `label`,
          `logo`
        FROM
          compagnie
        WHERE
          id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_GET["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if (!isset($row['name'])) {
    echo $row["name"];
    header('Location:index.php?error');
    exit();
}

?>


<h3><a href="compagnie_admin.php">go back</a></h3>


<form action="do/doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <p>Nom :</p>
    <input type="text" name='name' value="<?=$row["name"]?>">
    <p>Signature :</p>
    <input type="text" name='label' value="<?=$row["label"]?>">
    <p>Logo :</p>
    <input type="text" name='logo' value="<?=$row["logo"]?>">
    <hr>
    <input type="submit">
</form>
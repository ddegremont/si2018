<?php

require_once "../db.php";

if (!isset($_GET['id'])) {
    header('Location:admin.php');
    exit();
}


$sql = "SELECT
          `id`,
          `name`,
          `adresse`,
          `classement`,
          `phone`,
          `price`
        FROM
          hundred
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
<style media="screen">
    <?php include '../backoffice.css'; ?>
</style>


<h3><a href="hundred_admin.php">go back</a></h3>


<form action="do/doedit.php" method="post">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <p>Nom :</p>
    <input type="text" name='name' value="<?=$row["name"]?>">
    <p>Adresse :</p>
    <input type="text" name='adresse' value="<?=$row["adresse"]?>">
    <p>Classement :</p>
    <input class="classement" type="number" min="1" max="100" step="1" name='classement' value="<?=$row["classement"]?>">
    <p>Numéro de téléphone :</p>
    <input type="tel" name='phone' value="<?=$row["phone"]?>">
    <p>Prix moyen :</p>
    <input type="text" name='price' value="<?=$row["price"]?>">
    <hr>
    <input type="submit">
</form>
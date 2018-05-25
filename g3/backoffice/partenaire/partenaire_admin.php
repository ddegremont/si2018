<?php

include "../../db.php";



$sql = "SELECT
    `id`,
    `name`
      FROM
    `partenaire`
    ;";

$stmt = $conn->prepare($sql);
$stmt->execute();

?>
<style media="screen">
<?php include '../../backoffice.css'; ?>
</style>
<h2><a href="../../main.php">home</a></h2>


<h2>Add Partenaire</h2>

<form action="do/doadd.php" enctype="multipart/form-data" method="post">
    <input type="text" name="name" placeholder="partenaire">
    </br>
    <input type="text" name="logo" placeholder="logo">
    </br>
    <input type="text" name="alt" placeholder="logo's alt">
    </br>
    <input type="submit">
</form>

<table border="1">
    <tr>
        <th>ID</th>
        <th>partenaire</th>
        <th>modifier</th>
        <th>supprimer</th>
    </tr>
    <?php
    while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>

        <tr>
            <td><?=$row["id"]?></td>
            <td><?=$row["name"]?></td>
            <td><a href="edit.php?id=<?=$row["id"]?>">edit</a></td>
            <td><a href="delete.php?id=<?=$row["id"]?>">delete</a></td>
        </tr>

    <?php endwhile ?>
</table>
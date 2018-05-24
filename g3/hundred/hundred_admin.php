<?php

include "../db.php";



$sql = "SELECT
    `id`,
    `name`
      FROM
    `hundred`
    ;";

$stmt = $conn->prepare($sql);
$stmt->execute();

?>

<style media="screen">
<?php include '../backoffice.css'; ?>
</style>

<h2><a href="../main.php">home</a></h2>


<h2>Add</h2>

<form action="do/doadd.php" enctype="multipart/form-data" method="post">
    <input type="text" name="name" placeholder="nom de l'établissement">
    </br>
    <input type="text" name="adresse" placeholder="adresse">
    </br>
    <input class="classement" type="number" min="1" max="100" step="1" name="classement" placeholder="classement">
    </br>
    <input type="tel" name="phone" placeholder="numéro de téléphone">
    </br>
    <input type="text" name="price" placeholder="prix moyen">
    </br>
    <input type="submit">
</form>

<table border="1">
    <tr>
        <th>ID</th>
        <th>nom</th>
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
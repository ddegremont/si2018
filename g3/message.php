<?php

include "db.php";



$sql = "SELECT
    `id`,
    `type`,
    `entreprise`,
    `name`,
    `email`,
    `phone`,
    `message`
      FROM
    `message`
    ;";

$stmt = $conn->prepare($sql);
$stmt->execute();

?>

<table border="1">
    <tr>
        <th>message d'un</th>
        <th>entreprise</th>
        <th>nom</th>
        <th>email</th>
        <th>numéro</th>
        <th>message</th>
    </tr>
    <?php
    while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>

        <tr>
            <td><?=$row["type"]?></td>
            <td><?=$row["entreprise"]?></td>
            <td><?=$row["name"]?></td>
            <td><?=$row["email"]?></td>
            <td><?=$row["phone"]?></td>
            <td><?=$row["message"]?></td>
        </tr>

    <?php endwhile ?>
</table>
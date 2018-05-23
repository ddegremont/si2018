<?php

function handlePDOError(PDOStatement $stmt): void
{
    if ($stmt->errorCode() != '00000') {
        throw new \Exception($stmt->errorInfo()[1]);
    }
}

function displayEstablishementsList(\PDO $pdo)
{
    $sql = "SELECT
              `id`,
              `cover_img_src`,
              `name`,
              `type`
            FROM
              `establishement`
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    handlePDOError($stmt);
    ?>
        <tbody>
            <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <th><?=$row["id"]?></th>
                    <td><img src="<?=$row["cover_img_src"]?>" alt="">-</td>
                    <td><?=$row["name"]?></td>
                    <td>-</td>
                    <td><?=$row["type"]?></td>
                    <td><a href="show.php?id=<?=$row["id"]?>">éditer</a></td>
                    <td><a href="delete.php?id=<?=$row["id"]?>">supprimer</a></td>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
    <?php
}
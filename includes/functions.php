<?php

function handlePDOError(PDOStatement $stmt): void
{
    if ($stmt->errorCode() != '00000') {
        throw new \Exception($stmt->errorInfo()[1]);
    }
}

function displayEstablishementsList(\PDO $pdo): ?array
{
    $sql = "SELECT 
              `id`,
              `country_id`,
              `name`,
              `type`,
              `main_pic`
            FROM
              `establishement`, `country`
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    handlePDOError($stmt);
    ?>
    <h2> Etablissements </h2>
    <table>
        <thead>
            <tr>
                <td>id</td>
                <td>thumbnail</td>
                <td>nom</td>
                <td>ville</td>
                <td>type d'établissement</td>
            </tr>
        </thead>
        <tbody>
            <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><img src="<?=$row["img_"]?>" alt=""></td>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
    <?php
}
<?php
require_once '../connection.php';
require_once '../functions.php';
require_once '../header.php';
?>
<h2>Etablissements</h2>
<p>Ici, vous gérez les établissements que vous voulez conseiller</p>
    <a href="add.php">ajouter un nouvel établissement</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">thumbnail</th>
            <th scope="col">nom</th>
            <th scope="col">ville</th>
            <th scope="col">type d'établissement</th>
            <th scope="col">editer</th>
            <th scope="col">supprimer</th>
        </tr>
        </thead>
<?php
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
require_once '../footer.php';

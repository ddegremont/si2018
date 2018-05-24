<?php
require_once '../connection.php';
require_once '../functions.php';
?>
    <h2>Partenaires</h2>
    <a href="../index.php">Home admin</a>
    <p>Ici, vous gérez les partenaires</p>
    <a href="add.php">Ajouter un nouveau partenaire</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">thumbnail</th>
            <th scope="col">nom</th>
            <th scope="col">editer</th>
            <th scope="col">supprimer</th>
        </tr>
        </thead>
        <?php
        $sql = "SELECT
              `id`,
              `name`,
              `logo_src`
            FROM
              `partners`
            ;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        handlePDOError($stmt);
        ?>
        <tbody>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <th><?=$row["id"]?></th>
                <td><img src="<?=$row["logo_src"]?>"></td>
                <td><?=$row["name"]?></td>
                <td><a href="show.php?id=<?=$row["id"]?>">éditer</a></td>
                <td><a href="delete.php?id=<?=$row["id"]?>">supprimer</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
<?php
require_once '../footer.php';

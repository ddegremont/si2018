<?php
require_once '../connection.php';
require_once '../functions.php';
?>
    <h2>Articles</h2>
    <a href="../index.php">Home admin</a>
    <p>Ici, vous gérez les articles</p>
    <a href="./add.php">ajouter un article</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nom de l'article</th>
            <th scope="col">infos</th>
            <th scope="col">supprimer</th>
        </tr>
        </thead>
        <?php
        $sql = "SELECT
              `id`,
              `title`
            FROM
              `articles`
            ;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        handlePDOError($stmt);
        ?>
        <tbody>
        <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <th><?=$row["id"]?></th>
                <td><?=$row["title"]?></td>
                <td><a href="edit.php?id=<?=$row["id"]?>">editer</a></td>
                <td><a href="delete.php?id=<?=$row["id"]?>">supprimer</a></td>
            </tr>
        <?php endwhile;?>
        </tbody>
    </table>
<?php
require_once '../footer.php';

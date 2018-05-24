<?php
include 'admin_header.php';
require_once "../includes/connection.php";

$sql = "SELECT
`id`,
`title`
FROM
`articles`
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();?>

</div>
<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
                <h3 class="section_title">Voulez-vous vraiment supprimer l'article " <?=$row['title']?> " ?</h3>
                <form action="dodelete.php" method="post">
                    <input type="hidden" name="id" value="<?=$_GET['id']?>">
                    <input class="btn btn-danger" type="submit" name="submit" value="Oui">
                    <a class="btn btn-primary" href="index.php">Non</a>
                </form>
        <?php endwhile;?>
        </table>
    </div>
</div>
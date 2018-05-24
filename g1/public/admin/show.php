<?php
include 'admin_header.php';
require_once "../includes/functions.php";
require_once "../includes/connection.php";

$pages = getPages($pdo);
if(isset($_POST['title']) || isset($_POST['subtitle']) || isset($_POST['content']) || isset($_POST['img_src']) || isset($_POST['img_alt'])){
    $title = $_POST['title'];
    $slug = slugify($title);
    $subtitle = $_POST['subtitle'];
    $content = $_POST['content'];
    $img_src = $_POST['img_src'];
    $img_alt = $_POST['img_alt'];
}

$sql = "SELECT
`id`,
`title`,
`subtitle`,
`content`,
`img_src`,
`img_alt`,
`slug`
FROM
`articles`
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>



<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Tous les articles</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Sous-titre</th>
                    <th>Contenu</th>
                    <th>Image SRC</th>
                    <th>Image ALT</th>
                    <th>Slug</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['title']?></td>
                        <td><?=$row['subtitle']?></td>
                        <td><?=$row['content']?></td>
                        <td><?=$row['img_src']?></td>
                        <td><?=$row['img_alt']?></td>
                        <td><?=$row['slug']?></td>
                        <td><a href='edit.php?id=<?=$row['id'] ?>' class='btn btn-info'>Modifier</a></td>
                        <td><a href='delete.php?id=<?=$row['id'] ?>' class='btn btn-danger'>Supprimer</a></td>
                    </tr>
            </table>
            <div><a href="index.php" class="btn btn-primary">Retours vers la home</a></div>
        </div>
    </div>
</div>




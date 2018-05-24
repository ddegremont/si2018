<?php
include 'admin_header.php';
require_once '../includes/connection.php';

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


    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <div><a href="index.php" class="btn btn-primary">Retour vers la home</a></div>
                <h3 class="section_title">Modifier l'article : <?=$row['title']?></h3>
                <form action="doedit.php" method="POST">
                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <div class="form-group">
                        <label for="title">Titre de l'article</label>
                        <input name="title" type="text" class="form-control" value="<?=$row['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Sous-titre de l'article</label>
                        <input name="subtitle" type="text" class="form-control" value="<?=$row['subtitle']?>">
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu de l'article</label>
                        <input name="content" type="text" class="form-control" value="<?=$row['content']?>">
                    </div>
                    <div class="form-group">
                        <label for="img_src">Source de l'image</label>
                        <input name="img_src" type="text" class="form-control" value="<?=$row['img_src']?>">
                    </div>
                    <div class="form-group">
                        <label for="img_alt">ALT de l'image</label>
                        <input name="img_alt" type="text" class="form-control" value="<?=$row['img_alt']?>">
                    </div>
                    <input class="btn btn-success" type="submit" name="submit" value="Enregistrer">
                </form>
        </div>
    </div>

<?php
include 'admin_footer.php';
?>
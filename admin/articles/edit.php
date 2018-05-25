<?php
if (!isset($_GET['id'])) {
    header("Location : index.php?error=noid");
    exit;
}
require_once '../connection.php';
require_once '../functions.php';
include "../header.php";
$sql = "SELECT 
    `id`,
    `title`,
    `subtitle`,
    `content`,
    `twitter_link`,
    `details`,
    `deadline`,
    `cover_img`
  FROM
   `articles`
  WHERE
  `id` = :id 
;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
handlePDOError($stmt);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: admin.php?error=noidtoedit");
    exit;
}
?>
<div class="container">
    <h2>Editer un article</h2>
    <a href="./index.php">retour aux articles</a>
    <form action="doedit.php" method="post">
        <input type="hidden" name="article[id]" value="<?=$row['id']?>">
        <div class="form-group">
            <label for="name"> Titre </label>
            <input type="text" class="form-control" name="article[title]" value="<?=$row['title']?>">
        </div>

        <div class="form-group">
            <label for="subtitle"> Sous titre </label>
            <input type="text" class="form-control" name="article[subtitle]" value="<?=$row['subtitle']?>">
        </div>

        <div class="form-group">
            <label for="content"> contenu de l'article </label>
            <textarea class="form-control" name="article[content]" ><?=$row['content']?></textarea>
        </div>

        <div class="form-group">
            <label for="link"> lien (optionnel) </label>
            <input class="form-control" name="article[link]" ><?=$row['link']?>
        </div>

        <div class="form-group">
            <label for="details"> details </label>
            <input type="text" class="form-control" name="article[details]" value="<?=$row['details']?>">
        </div>

        <div class="form-group">
            <label for="deadline"> date limite </label>
            <input type="date" class="form-control" name="article[deadline]" value="<?=$row['deadline']?>">
        </div>

        <div class="form-group">
            <label for="cover_img"> image de couverture </label>
            <input type="text" class="form-control" name="article[cover_img]" value="<?=$row['cover_img']?>">
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>

    </form>

</div>
<?php include "../footer.php";

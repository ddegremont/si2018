<?php
if (!isset($_GET['id'])) {
    header("Location: index.php?error=noeditdataposted");
    exit;
}
require_once "../connection.php";
require_once "../functions.php";
$sql = "SELECT 
    `id`,
    `title`,
    `subtitle`,
    `content`,
    `link`,
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
<form action="dodelete.php" method="post">
    <h1>supprimer l'article ?</h1>
    <input type="hidden" name="article[id]" value="<?=$_GET['id']?>">
    <h2><?=$row['title']?></h2>
    <button type="submit">Oui</button>
    <a href="index.php">non</a>
</form>

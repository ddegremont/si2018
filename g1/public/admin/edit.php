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

<form action="doedit.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <input name = "title" type="text" placeholder="title" value="<?= $row['title'] ?>">
    <input name = "subtitle" type="text" placeholder="subtitle" value="<?= $row['subtitle'] ?>">
    <input name = "content" type="text" placeholder="content" value="<?= $row['content'] ?>">
    <input name = "img_src" type="text" placeholder="img_src" value="<?= $row['img_src'] ?>">
    <input name = "img_alt" type="text" placeholder="img_alt" value="<?= $row['img_alt'] ?>">
    <button type="submit">Modifer</button>
</form>

<p><a href="login.php">Retour vers la home</a></p>

<?php
include 'admin_footer.php';
?>
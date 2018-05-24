<?php

require_once "../../db.php";

if (!isset($_GET['id'])) {
    header('Location:index.php');
    exit();
}
$sql = "SELECT
          `id`,
          `title`,
          `subtitle`,
          `img`,
          `text`,
          `compagnie`,
          `tag`
        FROM
          `article`
        WHERE
          id = :id
    ;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_GET["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
if (!isset($row['id'])) {
    header('Location:index.php?error');
    exit();
}
?>

<style media="screen">
<?php include '../../backoffice.css'; ?>
</style>

<a href="article_admin.php"><h4>go back</h4></a>

<h2><?=$row["title"]?></h2>
<h3><?=$row["subtitle"]?></h3>
<img src="<?=$row["img"]?>" alt="">
<p><?=$row["text"]?></p>

<?php

$sqlCompagnie = "SELECT
          `id`,
          `name`,
          `logo`,
          `label`
        FROM
          `compagnie`
        WHERE
          id = :id
    ;";

$stmt = $conn->prepare($sqlCompagnie);
$stmt->bindValue(":id", $row["compagnie"]);
$stmt->execute();
$row2=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<p class="compagnieName"><?=$row2["name"]?></p>
<p><?=$row2["logo"]?></p>
<p><?=$row2["label"]?></p>

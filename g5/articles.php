<?php
require_once "includes/connexion.php";
include_once "includes/header.php";

$sql = "SELECT
            `h2`,
            `text`,
            `img`
        FROM
            `article`
        ;";

$stmt = $db->prepare($sql);
//$stmt->bindParam(":id",$_GET['id'], PDO::PARAM_STR);
$stmt->bindParam(":id",$_GET['id'], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="bonPlan-TitleContent">
  <h2 class="title">Bon plan aérien</h2>
  <div class="souligne"></div>
</div>
<section class="articles-Section">

<?php
foreach ($row as $rows){
  ?>
    <div class="articles">
      <div class="articles-ImgContent">
        <div class="articles-TextContent">
          <h2 class="articles-Title"><?=$rows['h2']?></h2>
          <p class="articles-Subtitle"><?=$rows['text']?></p>
        </div>
        <img class="articles-Img" alt="image_article" src="img/<?=$rows['img']?>">
      </div>
    </div>
<?php
}
?>

</section>

<?php
include_once "includes/footer.php"
?>

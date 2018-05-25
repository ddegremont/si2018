<?php
require_once "includes/connexion.php";
require_once "includes/twitter.php";
include_once "header.php";

$sql = "SELECT 
  `id`, 
  `img`, 
  `title`, 
  `location`, 
  `text`, 
  `iframe`, 
  `qr`
FROM
  `top100`
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row === false) {
	header("Location: error404.php");
    exit;
}
        
?>
<section class="fiche">
	<div class="container">
   	<div class="title">
   		<h2><?=$row["title"]?></h2>
		<h3><?=$row["location"]?></h3>
   	</div>
    	<img src="<?=$row["img"]?>" alt="aeroport">
    <div class="info">
		<div class="left">
			<h1>Information</h1>
			<p><?=$row["text"]?></p>
		</div>
		<div class="right">
			<iframe src="<?=$row["iframe"]?>" frameborder="0" style="border:0" allowfullscreen></iframe>
			<img src="<?=$row["qr"]?>" alt="aeroport">
		</div>
	</div>
	</div>
</section>
<?php 
include_once "footer.php";
?>
<?php
require_once "includes/connexion.php";
require_once "includes/twitter.php";
include_once "header.php";
$sql = "SELECT 
  `id`, 
  `img`, 
  `title`, 
  `location`, 
  `text`
FROM
  top100
;";
$stmt = $bdd->prepare($sql);
$stmt->execute();
errorHandler($stmt);
?>
<section class="top100">
	<div class="container">
		<div class="title">
			<h3>Top 100</h3>
		</div>
	</div>
  <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
   <div class="hotels">
    <a href="fiche.php?id=<?=$row["id"]?>">
    	<div class="left">
    		<img src="<?=$row["img"]?>" alt="aeroport">
    	</div>
    	<div class="right">
			<h2><?=$row["title"]?></h2>
			<h3><?=$row["location"]?></h3>
			<p><?=$row["text"]?></p>
    	</div>
    </a>
    </div>
    <?php endwhile;?>
</section>
<?php 
include_once "footer.php";
?>
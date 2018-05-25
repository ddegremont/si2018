<?php 
require_once "function.php";
require_once "../includes/connexion.php";
head("Edit", true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
require_once "../includes/connexion.php";
if ($_GET['test'] == 3) {

$sql = "SELECT 
  `id`, 
  `name`
FROM
  `alde`
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
    
?>

<div class="col-md-4">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID :</b> <?=$row["id"]?></li>
                <li class="list-group-item"><b>Name :</b> <?=$row["name"]?></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="../includes/doedit.php?test=3" method="post">
        <div class="form-group">
            <label for="name">Entrer @TwitterName</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["name"] ?>">
        </div>
        <div class="float-right">
            <a href="index.php" class="btn btn-light">cancel</a>
            <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
            <button type="submit" class="btn btn-success">Edit</button>            
        </div>
    </form>
</div>

<?php
} elseif ($_GET['test'] == 1) {
    $sql = "SELECT 
      `id`, 
      `img`, 
      `titre`
    FROM
      `kin`
    WHERE 
      `id` = :id
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="col-md-4">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID :</b> <?=$row["id"]?></li>
                <li class="list-group-item"><img src="<?=$row["img"]?>" style="max-width:100%;" alt="oui"> </li>
                <li class="list-group-item"><b>Titre :</b> <?=$row["titre"]?></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="../includes/doedit.php?test=1" method="post">
        <div class="form-group">
            <label for="img">img Name</label>
            <input type="text" class="form-control" id="img" name="img" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["img"] ?>">
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["titre"] ?>">
        </div>
        <div class="float-right">
            <a href="index.php" class="btn btn-light">cancel</a>
            <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
            <button type="submit" class="btn btn-success">Edit</button>            
        </div>
    </form>
</div>


<?php

} elseif ($_GET['test'] == 2) {
    $sql = "SELECT 
      `id`, 
      `img`,
      `url`
    FROM
      `moman`
    WHERE 
      `id` = :id
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="col-md-4">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID :</b> <?=$row["id"]?></li>
                <li class="list-group-item"><img src="<?=$row["img"]?>" style="max-width:100%;" alt="oui"> </li>
                <li class="list-group-item"><b>url :</b> <?=$row["url"]?></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="../includes/doedit.php?test=2" method="post">
        <div class="form-group">
            <label for="img">img Name</label>
            <input type="text" class="form-control" id="img" name="img" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["img"] ?>">
        </div>
        <div class="form-group">
            <label for="url">url Name</label>
            <input type="text" class="form-control" id="url" name="url" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["url"] ?>">
        </div>
        <div class="float-right">
            <a href="index.php" class="btn btn-light">cancel</a>
            <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
            <button type="submit" class="btn btn-success">Edit</button>            
        </div>
    </form>
</div>


<?php

	
} elseif ($_GET['test'] == 0) {
    $sql = "SELECT 
      `id`, 
      `text`
    FROM
      `annonce`
    WHERE 
      `id` = :id
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="col-md-4">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID :</b> <?=$row["id"]?></li>
                <li class="list-group-item"><b>text :</b> <?=$row["text"]?></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="../includes/doedit.php?test=0" method="post">
        <div class="form-group">
            <label for="text">text :</label>
            <input type="text" class="form-control" id="text" name="text" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["text"] ?>">
        </div>
        <div class="float-right">
            <a href="index.php" class="btn btn-light">cancel</a>
            <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
            <button type="submit" class="btn btn-success">Edit</button>            
        </div>
    </form>
</div>


<?php

} elseif ($_GET['test'] == 4) {
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
?>

<div class="col-md-4">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>ID :</b> <?=$row["id"]?></li>
                <li class="list-group-item"><img src="<?=$row["img"]?>" alt=""> </li>
                <li class="list-group-item"><b>title :</b> <?=$row["title"]?></li>
                <li class="list-group-item"><b>location :</b> <?=$row["location"]?></li>
                <li class="list-group-item"><b>text :</b> <?=$row["text"]?></li>
                <li class="list-group-item"><iframe src="<?=$row["iframe"]?>" frameborder="0" style="border:0" allowfullscreen></iframe></li>
				<li class="list-group-item"><img src="<?=$row["qr"]?>" alt=""> </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="../includes/doedit.php?test=4" method="post">
        <div class="form-group">
            <label for="img">img url :</label>
            <input type="text" class="form-control" id="img" name="img" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["img"] ?>">
        </div>
        <div class="form-group">
            <label for="title">hotel name :</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["title"] ?>">
        </div>
        <div class="form-group">
            <label for="location">adresse :</label>
            <input type="text" class="form-control" id="location" name="location" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["location"] ?>">
        </div>
        <div class="form-group">
            <label for="text">hotel description :</label>
            <input type="text" class="form-control" id="text" name="text" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?= $row["text"] ?>">
        </div>
        <div class="form-group">
            <label for="iframe">balise iframe google map :</label>
            <input type="text" class="form-control" id="iframe" name="iframe" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?=$row["iframe"] ?>">
        </div>
        <div class="form-group">
            <label for="qr">qr url :</label>
            <input type="text" class="form-control" id="qr" name="qr" aria-describedby="nameHelp" placeholder="Belle qui tiens ma vie" value="<?=$row["qr"]?>">
        </div>
        <div class="float-right">
            <a href="index.php" class="btn btn-light">cancel</a>
            <input type="text" name="id" value="<?=$row["id"]?>" style="display: none;">
            <button type="submit" class="btn btn-success">Edit</button>            
        </div>
    </form>
</div>


<?php

}
if ($row === false) {
    header("Location: ../error404.php");
    exit;
}
	
footer();
?>

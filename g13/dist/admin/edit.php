<?php
require_once "./connection.php";
require_once "./adminFunctions.php";

$info = getInfo($_GET['id'], $pdo);
?>
<form action="./doedit.php" method="post">
	<input type="hidden" name="id" value="<?=$info['id']?>">
	continent : <input type="text" name="continent" value="<?=$info['continent']?>"><br>
	country : <input type="text" name="country" value="<?=$info['country']?>"><br>
	type : <input type="text" name="type" value="<?=$info['type']?>"><br>
	picture_src : <input type="text" name="pictureSrc" value="<?=$info['pictureSrc']?>"><br>
	name : <input type="text" name="name" value="<?=$info['name']?>"><br>
	rating : <input type="text" name="rating" value="<?=$info['rating']?>"><br>
	location : <input type="text" name="location" value="<?=$info['location']?>"><br>
	description : <input type="text" name="description" value="<?=$info['description']?>"><br>
	information : <input type="text" name="information" value="<?=$info['information']?>"><br>
	hours : <input type="text" name="hours" value="<?=$info['hours']?>"><br>
	<input type="submit" value="Submit">
</form>
<br>
<a href="./index.php">Accueil</a>

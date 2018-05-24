<?php
date_default_timezone_set('UTC');
$today = date("j/n/Y");
?>
<h1>Ajouter une fiche</h1>
<form action="doadd.php" method="post">
    <input placeholder="name" type="text" name="name">
    <input placeholder="desc" type="text" name="desc">
    <input placeholder="rating" type="text" name="rating">
    <input placeholder="location" type="text" name="location">
    <input placeholder="cost" type="text" name="cost">
    <input placeholder="title" type="submit" value="Ajouter">
</form>

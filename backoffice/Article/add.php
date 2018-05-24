<?php
date_default_timezone_set('UTC');
$today = date("j/n/Y");
?>
<h1>Ajouter un article</h1>
<form action="doadd.php" method="post">
    <input placeholder="title" type="text" name="title">
    <input placeholder="texte" type="text" name="texte">
    <input placeholder="image" type="file" name="image">
    <input placeholder="alt" type="text" name="alt">
    <input placeholder="date" type="hidden" name="date">
    <input placeholder="auteur" type="text" name="auteur">
    <input placeholder="signature" type="text" name="signature">
    <input placeholder="logo" type="file" name="logo">
    <input placeholder="title" type="submit" value="Ajouter">
</form>

<?php
date_default_timezone_set('UTC');
$today = date("j/n/Y");
?>
<h1>Ajouter un article</h1>
<form action="doadd.php" method="post">
    <input placeholder="date" type="text" name="date">
    <input placeholder="from" type="text" name="from">
    <input placeholder="to" type="text" name="to">
    <input placeholder="image" type="file" name="image">
    <input placeholder="alt" type="text" name="alt">
    <input placeholder="price" type="text" name="price">
    <input placeholder="title" type="submit" value="Ajouter">
</form>

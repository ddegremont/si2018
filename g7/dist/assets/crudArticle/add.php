<?php
require_once "../includes/upload.php";
?>

<form method="POST"  enctype="multipart/form-data">
    <select name="category" required data-error="Selectionner une catégorie" size="1">
        <option value disabled selected>Catégorie:</option>
        <option value="Gastronomie">Gastronomie</option>
        <option value="Bien-être">Bien-être</option>
        <option value="Culture">Culture</option>
        <option value="Sport">Sport</option>
    </select></br></br>

    <label>title:</label>
    <input type="text" name="title"></br></br>

    <label>Subtitle:</label>
    <input type="text" name="sub-title"></br></br>

    <label>Choisissez une image à insérer:</br></br></label>
    <input type="file" name="img" /></br></br>

    <label>p:</label>
    <input type="text" name="p"></br></br>

    <label>Ajoutez votre nom:</br></br></label>
    <input type="text" name="auteur"  /></br></br>

    <label>Ajoutez votre logo:</br></br></label>
    <input type="file" name="logo" /></br></br>

    <input type="submit" name="submit" value="Ajouter"></br></br>
</form>


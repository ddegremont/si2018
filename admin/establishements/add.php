<?php
require_once '../connection.php';
require_once '../functions.php';
require_once '../header.php';
?>
<h2>Ajouter un établissement</h2>

<form action="add.php">
    <div class="form-group">
        <label for="name">Nom de l'établissement</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="city_name">Ville</label>
        <select name="city_name" class="form-control" name="city_name">
            <!--- créer une requette qui choppe le nom des villes -->
            <option value="-">-</option>
        </select>
    </div>
    <div class="form-group">
        <label for="country_name">Ville</label>
        <select name="country_name" class="form-control" name="country_name">
            <!--- créer une requette qui choppe le nom des pays -->
            <option value="maroc">maroc</option>
        </select>
    </div>
    <div class="form-group">
        <label for="img_src">image de couverture</label>
        <input type="text" class="form-control" name="img_src">
    </div>
    <div class="form-group">
        <label for="desc">Description brève</label>
        <textarea name="desc" id="desc" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="address">addresse</label>
        <input type="text" class="form-control" name="address">
    </div>
    <div class="form-group">
        <label for="papers">type de visa</label>
        <input type="text" class="form-control" name="papers">
    </div>
    <div class="form-group">
        <label for="type">type d'établissement</label>
        <select name="type" id="type">
            <option value="spa">Spa</option>
            <option value="restaurant">Restaurant</option>
            <option value="bar">bar</option>
        </select>
    </div>
    <div class="form-group">
        <label for="type_details">détails</label>
        <input type="text" class="form-control" name="type_details">
    </div>
    <div class="form-group">
        <label for="pricing">gamme de prix</label>
        <input type="range" class="form-control" name="type_details">
    </div>
    <button type="submit" class="btn btn-primary">ajouter</button>
</form>
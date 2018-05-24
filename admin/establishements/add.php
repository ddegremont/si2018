<?php
require_once '../connection.php';
require_once '../functions.php';
require_once '../header.php';
?>
<h2>Ajouter un établissement</h2>

<form action="./doadd.php" method="post">
    <div class="form-group">
        <label for="name">Nom de l'établissement</label><input type="text" class="form-control" name="establishement[name]">
    </div>
    <div class="form-group">
        <label for="city_name">Ville</label>
        <input type="text" class="form-control" name="establishement[city_name]">
    </div>
    <div class="form-group">
        <label for="country_name">Pays</label>
        <input type="text" class="form-control" name="establishement[country_name]">
    </div>
    <div class="form-group">
        <label for="cover_mg_src">image de couverture</label>
        <input type="text" class="form-control" name="establishement[cover_img_src]">
    </div>
    <div class="form-group">
        <label for="desc">Description brève</label>
        <textarea name="establishement[desc]" id="desc" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="address">addresse</label>
        <input type="text" class="form-control" name="establishement[address]">
    </div>
    <div class="form-group">
        <label for="papers">type de visa</label>
        <input type="text" class="form-control" name="establishement[papers]">
    </div>
    <div class="form-group">
        <label for="type">type d'établissement</label>
        <select name="establishement[type]" id="type">
            <option value="spa">Spa</option>
            <option value="restaurant">Restaurant</option>
            <option value="bar">bar</option>
        </select>
    </div>
    <div class="form-group">
        <label for="type_details">détails</label>
        <input type="text" class="form-control" name="establishement[type_details]">
    </div>
    <div class="form-group">
        <label for="pricing">gamme de prix</label>
        <input type="text" class="form-control" name="establishement[pricing]">
    </div>
    <div class="form-group">
        <label for="pricing_details">détails prix</label>
        <input type="text" class="form-control" name="establishement[pricing_details]">
    </div>
    <div class="form-group">
        <label for="vaccin">vaccins requis</label>
        <input type="text" class="form-control" name="establishement[vaccin]">
    </div>
    <div class="form-group">
        <label for="rating">note sur 100</label>
        <input type="text" class="form-control" name="establishement[rating]">
    </div>
    <div class="form-group">
        <label for="slug">réécriture d'url</label>
        <input type="text" class="form-control" name="establishement[slug]">
    </div>
    <div class="form-group">
        <label for="first_month">premier mois de la periode d'ensoleillement</label>
        <input type="text" class="form-control" name="establishement[first_month]">
    </div>
    <div class="form-group">
        <label for="first_month_temp">température du premier mois de la periode d'ensoleillement</label>
        <input type="text" class="form-control" name="establishement[first_month_temp]">
    </div>
    <div class="form-group">
        <label for="last_month">dernier mois de la periode d'ensoleillement</label>
        <input type="text" class="form-control" name="establishement[last_month]">
    </div>
    <div class="form-group">
        <label for="last_month_temp">température du dernier mois de la periode d'ensoleillement</label>
        <input type="text" class="form-control" name="establishement[last_month_temp]">
    </div>
    <button type="submit" class="btn btn-primary">ajouter</button>
</form>
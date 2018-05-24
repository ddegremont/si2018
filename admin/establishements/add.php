<?php
require_once '../includes/connection.php';
require_once '../includes/functions.php';
require_once './header.php';
?>
<h2>Ajouter un établissement</h2>

<form action="add.php">
    <div class="form-group">
        <label for="name">Nom de l'établissmement</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="city_name">Ville</label>
        <input type="text" class="form-control" name="city_name">
    </div>
</form>
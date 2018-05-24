<?php
include_once "src/functions/functions.php";

if (!isset($connection)) {
    $connection = connect();
}
$data = getPartnersData($connection);
?>
<footer class="footer">
    <h1 class="footerPartenaire">PARTENAIRES</h1>
    <div class="footerPartImgContainer">
        <?php displayFooterContent($data) ?>
    </div>
    <a class="footer_update_link" href="footerUpdate.php">> Modifier les partenaires <</a>
    <div class="footerBotomContainer">
        <div class="footerBotomCopyContainer">
            <h1 class="footerBotomCopyContainerNav">Homepage</h1>
            <h1 class="footerBotomCopyContainerNav">About</h1>
            <h1 class="footerBotomCopyContainerNav">US contact</h1>
        </div>
        <div class="footerBotomCopyright">Tous droits réservés Une Année De Voyages ©2018-2020</div>
    </div>
</footer>
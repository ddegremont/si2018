<?php
function displayFooterArticleContent($data)
{
    $imgPath = "src/img/";
    ?>
    <div class="footerLogoImgContainer">
        <img class="footerLogoImg" src="src/img/<?= $data["logoSrc"] ?>" alt="<?= $data["logoAlt"] ?>">
    </div>
    <?php
}
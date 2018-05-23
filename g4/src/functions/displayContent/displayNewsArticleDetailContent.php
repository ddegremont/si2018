<?php
function displayNewsArticleDetailContent($data)
{
    $imgPath = "src/img/";
    ?>
    <section class="article">
        <article class="article_item">
            <h2 class="article_item_title"><?= $data["title"] ?></h2>
            <h3 class="article_item_subtitle"><?= $data["subtitle"] ?></h3>
            <h4 class="article_item_company"><?= $data["company"] ?></h4>
            <img src="<?= $imgPath . $data["imgSrc"] ?>" alt="<?= $data["imgAlt"] ?>">
            <p class="article_item_subtitle"><?= $data["paragraph"] ?></p>
            <p class="article_item_signature"><?= $data["signature"] ?></p>
            <img src="<?= $imgPath . $data["logoSrc"] ?>" alt="<?= $data["logoAlt"] ?>">
            <a href="news.php">Go back to the list</a>
            <button class="article_item_update">Update</button>
        </article>
    </section>
    <?php
}
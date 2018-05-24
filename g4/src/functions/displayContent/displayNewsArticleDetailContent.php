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
            <img class="image_article" src="<?= $imgPath . $data["imgSrc"] ?>" alt="<?= $data["imgAlt"] ?>">
            <p class="article_item_subtitle"><?= $data["paragraph"] ?></p>
            <p class="article_item_signature"><?= $data["signature"] ?></p>
            <img class="logo_compagnie" src="<?= $imgPath . $data["logoSrc"] ?>" alt="<?= $data["logoAlt"] ?>">
            <a href="news.php">Go back to the list</a>
            <button class="article_item_update">Update</button>
            <form action="src/actions/newsArticle_doDelete.php" method="POST">
                <input value="<?= $_GET["id"] ?>" name="id" title="id" style="display:none">
                <input type="submit" value="Delete">
            </form>
        </article>
    </section>
    <?php
}

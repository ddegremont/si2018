<?php
function displayNewsArticleContent($data)
{
    $imgPath = "src/img/";
    ?>
    <article class="news_articles_item">
        <h2 class="news_articles_item_title"><?= $data["title"] ?></h2>
        <h3 class="news_articles_item_subtitle"><?= $data["subtitle"] ?></h3>
        <h4 class="news_articles_item_company"><?= $data["company"] ?></h4>
        <img src="<?= $imgPath . $data["imgSrc"] ?>" alt="<?= $data["imgAlt"] ?>">
        <p class="news_articles_item_subtitle"><?= $data["paragraph"] ?></p>
        <p class="news_articles_item_signature"><?= $data["signature"] ?></p>
        <img src="<?= $imgPath . $data["logoSrc"] ?>" alt="<?= $data["logoAlt"] ?>">
        <a href="newsArticle.php?id=<?= $data["id"] ?>">see article</a>
        <form action="src/actions/newsArticle_doDelete.php" method="POST">
            <input value="<?= $data["id"] ?>" name="id" title="id" style="display:none">
            <input type="submit" value="Delete">
        </form>
    </article>
    <?php
}
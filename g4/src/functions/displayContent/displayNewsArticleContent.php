<?php
function displayNewsArticleContent($data)
{
    $imgPath = "src/img/";
    ?>
    <article class="newsairJobBox">
        <div>
            <img src="<?= $imgPath . $data["imgSrc"] ?>" alt="<?= $data["imgAlt"] ?>">
        </div>
        <h2 class="news_articles_item_title"><?= $data["title"] ?></h2>
        <p class="news_articles_item_subtitle"><?= $data["paragraph"] ?></p>
        <h3 class="news_articles_item_company"><?= $data["company"] ?></h3>
        <div>
            <img src="<?= $imgPath . $data["logoSrc"] ?>" alt="<?= $data["logoAlt"] ?>">
        </div>
        <a href="newsArticle.php?id=<?= $data["id"] ?>">see article</a>
        <form action="src/actions/newsArticle_doDelete.php" method="POST">
            <input value="<?= $data["id"] ?>" name="id" title="id" style="display:none">
            <input type="submit" value="Delete">
        </form>
    </article>
    <?php
}
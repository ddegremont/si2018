<?php
function displayNewsArticleContent($data)
{
    $imgPath = "src/img/";
    ?>
    <article class="newsairJobBox">
        <div class="news_articles_item_imgContainer">
            <img class="news_articles_item_img" src="<?= $imgPath . $data["imgSrc"] ?>" alt="<?= $data["imgAlt"] ?>">
        </div>
        <h2 class="news_articles_item_title"><?= $data["title"] ?></h2>
        <p class="news_articles_item_subtitle"><?= $data["paragraph"] ?></p>
        <h3 class="news_articles_item_company"><?= $data["company"] ?></h3>
        <div class="news_articles_item_logoContainer">
            <img class="news_articles_item_logo" src="<?= $imgPath . $data["logoSrc"] ?>" alt="<?= $data["logoAlt"] ?>">
        </div>
        <a class="news_articles_link" href="newsArticle.php?id=<?= $data["id"] ?>">Voir l'article</a>
        <form action="src/actions/newsArticle_doDelete.php" method="POST">
            <input value="<?= $data["id"] ?>" name="id" title="id" style="display:none">
            <input type="submit" value="Supprimer">
        </form>
    </article>
    <?php
}
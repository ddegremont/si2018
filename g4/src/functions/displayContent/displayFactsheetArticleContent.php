<?php
function displayFactsheetArticleContent($data)
{
    $imgPath = "src/img/";
    ?>
    <article class="factsheets_articles_item">
        <h2><?= $data["title"] ?></h2>
        <h4 class="factsheets_articles_item_category_container">Category: <span class="factsheets_articles_item_category"><?= $data["category"] ?></span></h4>
        <img src="<?= $imgPath . $data["imgSrc"] ?>" alt="<?= $data["imgAlt"] ?>">
        <p><?= $data["paragraph"] ?></p>
        <p>Website: <a href="<?= $data["websiteUrl"] ?>"><?= $data["websiteUrl"] ?></a></p>
        <a href="factsheetsArticle.php?id=<?= $data["id"] ?>">see article</a>
        <form action="src/actions/factsheetArticle_doDelete.php" method="POST">
            <input value="<?= $data["id"] ?>" name="id" title="id" style="display:none">
            <input type="submit" value="Delete">
        </form>
    </article>
    <?php
}
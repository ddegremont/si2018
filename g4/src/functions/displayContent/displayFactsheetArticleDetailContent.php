<?php
function displayFactsheetArticleDetailContent($data)
{
    $imgPath = "src/img/";
    ?>
    <section class="article">
        <article class="article_item">
            <h2 class="article_item_title"><?= $data["title"] ?></h2>
            <h4 class="article_item_company"><?= $data["category"] ?></h4>
            <img src="<?= $imgPath . $data["imgSrc"] ?>" alt="<?= $data["imgAlt"] ?>">
            <p class="article_item_subtitle"><?= $data["paragraph"] ?></p>
            <p>Website: <a href="<?= $data["websiteUrl"] ?>"><?= $data["websiteUrl"] ?></a></p>
            <a href="factsheets.php">Go back to the list</a>
            <button class="article_item_update">Update</button>
            <form action="src/actions/factsheetArticle_doDelete.php" method="POST">
                <input value="<?= $_GET["id"] ?>" name="id" title="id" style="display:none">
                <input type="submit" value="Delete">
            </form>
        </article>
    </section>
    <?php
}
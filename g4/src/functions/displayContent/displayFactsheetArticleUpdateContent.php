<?php
function displayFactsheetArticleUpdateContent(array $data)
{
    ?>
    <form class="article_form" action="src/actions/factsheetArticle_doUpdate.php" method="post">
        <label for="title">title</label>
        <input type="text" class="article_item_update_title" name="title" value="<?= $data["title"] ?>">
        <label for="company">category</label>
        <input type="text" class="article_item_update_category" name="category" value="<?= $data["category"] ?>">
        <label for="imgSrc">imgSrc</label>
        <input type="text" class="article_item_update_imgSrc" name="imgSrc" value="<?= $data["imgSrc"] ?>">
        <label for="imgAlt">imgAlt</label>
        <input type="text" class="article_item_update_imgAlt" name="imgAlt" value="<?= $data["imgAlt"] ?>">
        <label for="paragraph">paragraph</label>
        <input type="text" class="article_item_update_paragraph" name="paragraph" value="<?= $data["paragraph"] ?>">
        <label for="websiteUrl">websiteUrl</label>
        <input type="text" class="article_item_update_websiteUrl" name="websiteUrl" value="<?= $data["websiteUrl"] ?>">
        <input type="text" name="id" value="<?= $_GET["id"] ?>" style="display:none">
        <input type="submit" value="Update">
        <a href="factsheets.php">Go back to the list</a>
        <button class="article_item_update_cancel">Cancel</button>
    </form>
    <?php
}
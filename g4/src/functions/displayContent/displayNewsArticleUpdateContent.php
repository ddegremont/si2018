<?php
function displayNewsArticleUpdateContent(array $data)
{
    ?>
    <form class="article_form" action="src/actions/newsArticle_doUpdate.php" method="post">
        <label for="title">title</label>
        <input class="input_form_upadte" type="text" class="article_item_update_title" name="title" value="<?= $data["title"] ?>">
        <label for="subtitle">subtitle</label>
        <inputclass="input_form_upadte"  type="text" class="article_item_update_subtitle" name="subtitle" value="<?= $data["subtitle"] ?>">
        <label for="company">company</label>
        <input class="input_form_upadte" type="text" class="article_item_update_company" name="company" value="<?= $data["company"] ?>">
        <label for="imgSrc">imgSrc</label>
        <input class="input_form_upadte" type="text" class="article_item_update_imgSrc" name="imgSrc" value="<?= $data["imgSrc"] ?>">
        <label for="imgAlt">imgAlt</label>
        <input class="input_form_upadte" type="text" class="article_item_update_imgAlt" name="imgAlt" value="<?= $data["imgAlt"] ?>">
        <label for="paragraph">paragraph</label>
        <input class="input_form_upadte" type="text" class="article_item_update_paragraph" name="paragraph" value="<?= $data["paragraph"] ?>">
        <label for="signature">signature</label>
        <input class="input_form_upadte" type="text" class="article_item_update_signature" name="signature" value="<?= $data["signature"] ?>">
        <label for="logoSrc">logoSrc</label>
        <input class="input_form_upadte" type="text" class="article_item_update_logoSrc" name="logoSrc" value="<?= $data["logoSrc"] ?>">
        <label for="logoAlt">logoAlt</label>
        <input class="input_form_upadte" type="text" class="article_item_update_logoAlt" name="logoAlt" value="<?= $data["logoAlt"] ?>">
        <input type="text" name="id" value="<?= $_GET["id"] ?>" style="display:none">
        <input class="update_form_button" type="submit" value="Update">
        <a href="news.php">Go back to the list</a>
        <button class="article_item_update_cancel">Cancel</button>
    </form>
    <?php
}

<?php
function displayTwitterArticleContent($data)
{
    ?>
    <article class="twitter_item">
        <a class="twitter-timeline" data-width="600" data-height="450" href="<?= $data["url"] ?>?ref_src=twsrc%5Etfw">
            Tweets by <?= $data["name"] ?>
        </a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <form action="src/actions/twitter_doDelete.php" method="post">
            <input type="text" value="<?= $data["id"] ?>" name="id" style="display:none">
            <input type="submit" value="Delete">
        </form>
    </article>
    <?php
}
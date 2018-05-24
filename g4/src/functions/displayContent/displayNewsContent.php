<?php
function displayNewsContent(array $data)
{
    ?>
    <h1 class="newsairJobTitle">Actualites des compagnies aeriennes</h1>
    <?php
    foreach ($data as $item) {
        displayNewsArticleContent($item);
    }
}
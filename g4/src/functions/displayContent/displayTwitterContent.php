<?php
function displayTwitterContent(array $data)
{
    foreach ($data as $item) {
        displayTwitterArticleContent($item);
    }
}
<?php
function displayNewsContent(array $data)
{
    foreach ($data as $item) {
        displayNewsArticleContent($item);
    }
}
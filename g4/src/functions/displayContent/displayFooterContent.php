<?php
function displayFooterContent(array $data)
{
    foreach ($data as $item) {
        displayFooterArticleContent($item);
    }
}
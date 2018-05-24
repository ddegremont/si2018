<?php
function displayFactsheetContent(array $data)
{
    foreach ($data as $item) {
        displayFactsheetArticleContent($item);
    }
}
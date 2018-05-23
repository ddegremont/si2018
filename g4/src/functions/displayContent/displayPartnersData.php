<?php
function displayPartnersData(array $data)
{
    foreach ($data as $item) {
        displayPartnersItemData($item);
    }
}
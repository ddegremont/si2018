<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 22/05/2018
 * Time: 05:48
 */

if(isset($_FILES['img']) && isset($_FILES['logo']))
{
    $folder = 'img/';
    $file = basename($_FILES['img']['name']);
    $file2 = basename($_FILES['logo']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $folder . $file);
    move_uploaded_file($_FILES['logo']['tmp_name'], $folder . $file2);
}
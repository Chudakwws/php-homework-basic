<?php

function showMenu( 
    array $array, 
    $key = 'sort',
    $sort = SORT_ASC, 
    $position = 'main-menu') 
{
    include $_SERVER['DOCUMENT_ROOT'].'/include/menu.php';
} 
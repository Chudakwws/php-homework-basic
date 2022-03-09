<?php

function arraySort (array $array, $key, $sort): array 
{
    foreach ($array as $keys => $value)
    {
        $search[$keys]  = $value[$key];
    }
    array_multisort($search, $sort, $array);
    return $array;
}
<?php
$uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload';
$cdir =  array_diff (scandir($uploadPath), array('..', '.'));
function showGallery (array $array) 
{   
    return include $_SERVER['DOCUMENT_ROOT'] . '/include/image_card.php'; 
}

function arraySorty (array $array, $key, $sort): array 
{
    foreach ($array as $keys => $value)
    {
        $search[$keys]  = $value[$key];
    }
    array_multisort($search, $sort, $array);
    return $array;
}

function fileSizeName ($file)
{
    $fileSize = filesize($_SERVER['DOCUMENT_ROOT'].'/upload' . '/' . $file);
    if($fileSize < 10240)
    {
        echo($fileSize . ' b');
    }
    elseif ($fileSize > 10240 && $fileSize < 1048576)
    {
        echo(round(($fileSize / 1024), 2) . ' Kb');
        
    }
    else
    {
        echo(round(($fileSize / 1048576), 2) . ' Mb');
    }
} 

function cutingString($line, $length = 20, $appends = '...'): string {
    if (mb_strlen($line) <= $length)  
    {
        return $line;
    } 

    return mb_substr($line, 0, $length) . $appends;
    
};

function deleteAll(array $array) {
    foreach ($array as $file) 
    {
        unlink ($_SERVER['DOCUMENT_ROOT'] . '/upload/' .  $file);
    }
};


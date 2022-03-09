<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/showGallery.php';

if (isset ($_POST['delete']))
{
    foreach($_POST['image'] as $value)
    {
        unlink ($_SERVER['DOCUMENT_ROOT'].'/upload/' .  $value);
        $cdir =  array_diff (scandir($uploadPath), array('..', '.'));
        showGallery ($cdir);
        var_dump($_POST);
    }
}

else
{
    showGallery ($cdir);
} 


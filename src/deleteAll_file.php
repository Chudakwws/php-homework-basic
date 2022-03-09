<?php
include $_SERVER['DOCUMENT_ROOT'] . '/src/showGallery.php';

if (isset ($_POST['deleteAll']))
{
    deleteAll ($cdir);
    $cdir =  array_diff (scandir($uploadPath), array('..', '.'));
    showGallery ($cdir);
} 


